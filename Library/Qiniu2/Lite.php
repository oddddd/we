<?php
/**
 * 七牛接口调用
 * 1、图片文件上传
 * 2、获取Token
 *
 * @author: cnx7 <zysafe@live.cn> 2016-04-05
 */

require_once dirname(__FILE__) . '/autoload.php';
//require_once dirname(__FILE__) . '/upToken.php';
use Qiniu\Auth;

class Qiniu2_Lite
{
    public $auth = null;
    public function __construct()
    {
        $this->auth = new Auth(DI()-> config -> get('app.Qiniu.accessKey'),DI()-> config ->get('app.Qiniu.secretKey'));

    }
    public function uploadToken(){
        $token = $this -> auth->uploadToken(DI()-> config ->get('app.Qiniu.space_bucket'));
        return $token;
    }
    public function deleteData($key){
        $config = new \Qiniu\Config();
        $bucketManager = new \Qiniu\Storage\BucketManager($this->auth, $config);
        $err = $bucketManager->delete(DI()->get('app.Qiniu.space_bucket'), $key);
        return $err;
    }
}