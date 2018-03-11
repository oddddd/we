<?php
/**
 * 八爪鱼爬虫
 * 1、签名
 * 2、发送请求
 *
 * @author: wjp 2018-03-08
 */
class Bzy_Lite
{
    private $appId;
    private $openId;
    private $masterKey;
    private $url;
    private $timestamp;
    public function __construct()
    {
        $this -> appId     = DI()->config->get("app.Bzy.appId");
        $this -> openId    = DI()->config->get("app.Bzy.openId");
        $this -> masterKey = DI()->config->get("app.Bzy.masterKey");
        $this -> url       = DI()->config->get("app.Bzy.url");
        $this -> timestamp = date("YmdHis");
    }
    /**
     * 获取赛程
     * @param $data
     * @param $action
     * @return mixed
     */
    public function getData($data,$action){
        $dataJson = json_encode($data);
        $baseData = base64_encode($dataJson);
        $sign = $this -> sgin($baseData);
        $postArray = [
            "appKey"=>$this -> appId,
            "timestamp"=> $this -> timestamp,
            "sign"=>$sign,
            "data"=>$baseData
        ];
        $postJson = json_encode($postArray);
        $ret = $this->send($postJson,$action);
        $ret = json_decode($ret,true);
        if($ret['code'] != 0){
            DI()->logger->error('BZY_ERROR', $ret);
            return null;
        }
        return $ret;
    }
    /**
     * 八爪鱼签名
     * @param $baseData
     * @return string
     */
    public function sgin($baseData){

        $testArray[] = $this -> appId;
        if($baseData!=null)
            $testArray[] = $baseData;
        $testArray[] = $this -> openId;
        $testArray[] = $this -> timestamp;
        sort($testArray);
        $str = "";
        foreach ($testArray as $v){
            $str .=$v;
        }
        $sign = sha1($str);
        return $sign;
    }
    /**
     * 发送请求
     * @param $postData
     * @param $action
     * @return mixed
     */
    public function send($postData,$action){
        $headers[] = 'Content-Type:application/json;charset=utf-8';
        $url = $this->url.$action;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    /**
     * 发送请求2
     * @param $postData
     * @param $url
     * @return mixed
     */
    public function sendTwo($postData,$url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
//        $headers[] = 'Accept:application/json, text/javascript, */*; q=0.01';
//        $headers[] = 'Content-Type:application/x-www-form-urlencoded';
//        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//        curl_setopt($ch, CURLOPT_USERAGENT,'Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15');
    }
    /**
     * 获取客户端IP地址
     * @return mixed
     */
    public function getClientIp() {
        static $realip = NULL;

        if($realip !== NULL){
            return $realip;
        }
        if(isset($_SERVER)){
            if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){ //但如果客户端是使用代理服务器来访问，那取到的就是代理服务器的 IP 地址，而不是真正的客户端 IP 地址。要想透过代理服务器取得客户端的真实 IP 地址，就要使用 $_SERVER["HTTP_X_FORWARDED_FOR"] 来读取。
                $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
                /* 取X-Forwarded-For中第一个非unknown的有效IP字符串 */
                foreach ($arr AS $ip){
                    $ip = trim($ip);
                    if ($ip != 'unknown'){
                        $realip = $ip;
                        break;
                    }
                }
            }elseif(isset($_SERVER['HTTP_CLIENT_IP'])){//HTTP_CLIENT_IP 是代理服务器发送的HTTP头。如果是"超级匿名代理"，则返回none值。同样，REMOTE_ADDR也会被替换为这个代理服务器的IP。
                $realip = $_SERVER['HTTP_CLIENT_IP'];
            }else{
                if (isset($_SERVER['REMOTE_ADDR'])){ //正在浏览当前页面用户的 IP 地址
                    $realip = $_SERVER['REMOTE_ADDR'];
                }else{
                    $realip = '0.0.0.0';
                }
            }
        }else{
            //getenv环境变量的值
            if (getenv('HTTP_X_FORWARDED_FOR')){//但如果客户端是使用代理服务器来访问，那取到的就是代理服务器的 IP 地址，而不是真正的客户端 IP 地址。要想透过代理服务器取得客户端的真实 IP 地址
                $realip = getenv('HTTP_X_FORWARDED_FOR');
            }elseif (getenv('HTTP_CLIENT_IP')){ //获取客户端IP
                $realip = getenv('HTTP_CLIENT_IP');
            }else{
                $realip = getenv('REMOTE_ADDR');  //正在浏览当前页面用户的 IP 地址
            }
        }
        preg_match("/[\d\.]{7,15}/", $realip, $onlineip);
        $realip = !empty($onlineip[0]) ? $onlineip[0] : '0.0.0.0';
        return $realip;
    }
}