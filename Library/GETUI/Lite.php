<?php

header("Content-Type: text/html; charset=utf-8");

require_once(dirname(__FILE__) . '/GETUI_PHP_SDK/' . 'IGt.Push.php');
require_once(dirname(__FILE__) . '/GETUI_PHP_SDK/' . 'igetui/IGt.AppMessage.php');
require_once(dirname(__FILE__) . '/GETUI_PHP_SDK/' . 'igetui/IGt.APNPayload.php');
require_once(dirname(__FILE__) . '/GETUI_PHP_SDK/' . 'igetui/template/IGt.BaseTemplate.php');
require_once(dirname(__FILE__) . '/GETUI_PHP_SDK/' . 'IGt.Batch.php');
require_once(dirname(__FILE__) . '/GETUI_PHP_SDK/' . 'igetui/utils/AppConditions.php');
//define('HOST','http://sdk.open.api.igexin.com/apiex.htm');
//http的域名
//定义常量, appId、appKey、masterSecret 采用本文档 "第二步 获取访问凭证 "中获得的应用配置
//define('APPKEY','Mjv706pTKt5cTcjtqaToz8');
//define('APPID','JroCkPGgpF6LzFQqqoWlhA');
//define('MASTERSECRET','uIBtmad7RK706cy5MKdfp3');
//define('BEGINTIME','2015-03-06 13:18:00');
//define('ENDTIME','2015-03-06 13:24:00');
class GETUI_Lite
{
    public $HOST = "http://sdk.open.api.igexin.com/apiex.htm";
    public $APPKEY;
    public $APPID;
    public $MASTERSECRET;
    public $BEGINTIME;
    public $ENDTIME;


    public function __construct()
    {
        $this -> HOST = DI()->config->get("app.GT.HOST");
        $this -> APPKEY = DI()->config->get("app.GT.APPKEY");
        $this -> APPID = DI()->config->get("app.GT.APPID");
        $this -> MASTERSECRET = DI()->config->get("app.GT.MASTERSECRET");
    }

    /**
     * 群推
     * @param $title
     * @param $transmission
     * @param $text
     */
    function pushMessageToApp($title,$transmission,$text){

        $igt = new IGeTui($this->HOST,$this->APPKEY,$this->MASTERSECRET);

        $template = $this->IGtNotificationTemplateDemo();
        $template -> set_title($title);
        $template -> set_transmissionContent($transmission);
        $template -> set_text($text);
        $template -> set_logoURL("");

//      APN高级推送
        $apn = new IGtAPNPayload();
        $alertmsg=new DictionaryAlertMsg();
        $alertmsg->body=$text;
        $alertmsg->actionLocKey="ActionLockey";
        $alertmsg->locKey="LocKey";
        $alertmsg->locArgs=array("locargs");
        $alertmsg->launchImage="launchimage";
        $alertmsg->title=$title;
        $alertmsg->titleLocKey="TitleLocKey";
        $alertmsg->titleLocArgs=array("TitleLocArg");
        $apn->alertMsg=$alertmsg;
        $apn->badge=0;
        $apn->sound="";
        $apn->add_customMsg("payload",$transmission);
//      $apn->contentAvailable=1;
        $apn->category="ACTIONABLE";
        $template->set_apnInfo($apn);

        // 定义"AppMessage"类型消息对象，设置消息内容模板、发送的目标App列表、是否支持离线发送、以及离线消息有效期(单位毫秒)
        $message = new IGtAppMessage();
        $message->set_isOffline(true);
        $message->set_offlineExpireTime(10 * 60 * 1000);//离线时间单位为毫秒，例，两个小时离线为3600*1000*2
        $message->set_data($template);

        $appIdList=array($this -> APPID);
//        $phoneTypeList=array('ANDROID');
//        $provinceList=array('浙江');
//        $tagList=array('haha');

        //用户属性
        //$age = array("0000", "0010");
        //$cdt = new AppConditions();
        //$cdt->addCondition(AppConditions::PHONE_TYPE, $phoneTypeList);
        //$cdt->addCondition(AppConditions::REGION, $provinceList);
        //$cdt->addCondition(AppConditions::TAG, $tagList);
        //$cdt->addCondition("age", $age);

        $message->set_appIdList($appIdList);
        //$message->set_conditions($cdt->getCondition());

        $rep = $igt->pushMessageToApp($message,"任务组名");
        return $rep;
//        var_dump($rep);
//        echo ("<br><br>");
    }

    /**
     * 单个推送
     * @param $title
     * @param $transmission
     * @param $text
     * @param $CID
     * @return array
     */
    function pushMessageToSingle($title,$transmission,$text,$CID){
        $igt = new IGeTui($this->HOST,$this->APPKEY,$this->MASTERSECRET);
        $template = $this -> IGtNotificationTemplateDemo();
//        IGtNotificationTemplateDemo();
        $template -> set_title($title);
        $template -> set_transmissionContent($transmission);
        $template -> set_text($text);
        $template -> set_logoURL("");
//      APN高级推送
        $apn = new IGtAPNPayload();
        $alertmsg=new DictionaryAlertMsg();
        $alertmsg->body=$text;
        $alertmsg->actionLocKey="ActionLockey";
        $alertmsg->locKey="LocKey";
        $alertmsg->locArgs=array("locargs");
        $alertmsg->launchImage="launchimage";
        $alertmsg->title=$title;
        $alertmsg->titleLocKey="TitleLocKey";
        $alertmsg->titleLocArgs=array("TitleLocArg");
        $apn->alertMsg=$alertmsg;
        $apn->badge=0;
        $apn->sound="";
        $apn->add_customMsg("payload",$transmission);
//      $apn->contentAvailable=1;
        $apn->category="ACTIONABLE";
        $template->set_apnInfo($apn);
        $message = new IGtSingleMessage();
        //是否离线
        $message->set_isOffline(true);
        //离线时间
        $message->set_offlineExpireTime(3600*12*1000);
        //设置推送消息类型
        $message->set_data($template);

        //设置是否根据WIFI推送消息，2为4G/3G/2G，1为wifi推送，0为不限制推送
        //$message->set_PushNetWorkType(0);
        $target = new IGtTarget();
        $target->set_appId($this->APPID);
        $target->set_clientId($CID);

        try {
            $rep = $igt->pushMessageToSingle($message, $target);
            return $rep;
        }catch(RequestException $e){
            $requstId =e.getRequestId();
            $rep = $igt->pushMessageToSingle($message, $target,$requstId);
            return $rep;
        }
    }

    //点击通知打开应用模板
    function IGtNotificationTemplateDemo(){
        $template =  new IGtNotificationTemplate();
        $template->set_appId($this->APPID);                   //应用appid
        $template->set_appkey($this->APPKEY);                 //应用appkey
        $template->set_transmissionType(1);            //透传消息类型
        $template->set_transmissionContent("测试离线");//透传内容
        $template->set_title("个推");                  //通知栏标题
        $template->set_text("个推最新版点击下载");     //通知栏内容
        $template->set_logo("");                       //通知栏logo
        $template->set_logoURL("");                    //通知栏logo链接
        $template->set_isRing(true);                   //是否响铃
        $template->set_isVibrate(true);                //是否震动
        $template->set_isClearable(true);              //通知栏是否可清除
        // iOS推送需要设置的pushInfo字段
//        $template ->set_pushInfo($actionLocKey,$badge,$message,$sound,$payload,$locKey,$locArgs,$launchImage);
//        $template ->set_pushInfo("test",1,"message","","","","","");
//        iOS推送需要设置的pushInfo字段(推荐使用)
//        $apn = new IGtAPNPayload();
//        $apn->alertMsg = "alertMsg";
//        $apn->badge = 11;
//        $apn->actionLocKey = "启动";
//        $apn->category = "ACTIONABLE";
//        $apn->contentAvailable = 1;
//        $apn->locKey = "通知栏内容";
//        $apn->title = "通知栏标题";
//        $apn->titleLocArgs = array("titleLocArgs");
//        $apn->titleLocKey = "通知栏标题";
//        $apn->body = "body";
//        $apn->customMsg = array("payload"=>"payload");
//        $apn->launchImage = "launchImage";
//        $apn->locArgs = array("locArgs");
//
//        $apn->sound=("test1.wav");;
//        $template->set_apnInfo($apn);
        return $template;
    }

    //点击通知打开网页模板
    function IGtLinkTemplateDemo(){
        $template =  new IGtLinkTemplate();
        $template ->set_appId(APPID);//应用appid
        $template ->set_appkey(APPKEY);//应用appkey
        $template ->set_title("请输入通知标题");//通知栏标题
        $template ->set_text("请输入通知内容");//通知栏内容
        $template ->set_logo("");//通知栏logo
        $template ->set_isRing(true);//是否响铃
        $template ->set_isVibrate(true);//是否震动
        $template ->set_isClearable(true);//通知栏是否可清除
        $template ->set_url("http://www.igetui.com/");//打开连接地址
        //$template->set_duration(BEGINTIME,ENDTIME); //设置ANDROID客户端在此时间区间内展示消息
        return $template;
    }

    //点击通知弹框下载 ios不支持
    function IGtNotyPopLoadTemplateDemo(){
        $template =  new IGtNotyPopLoadTemplate();

        $template ->set_appId(APPID);//应用appid
        $template ->set_appkey(APPKEY);//应用appkey
        //通知栏
        $template ->set_notyTitle("个推");//通知栏标题
        $template ->set_notyContent("个推最新版点击下载");//通知栏内容
        $template ->set_notyIcon("");//通知栏logo
        $template ->set_isBelled(true);//是否响铃
        $template ->set_isVibrationed(true);//是否震动
        $template ->set_isCleared(true);//通知栏是否可清除
        //弹框
        $template ->set_popTitle("弹框标题");//弹框标题
        $template ->set_popContent("弹框内容");//弹框内容
        $template ->set_popImage("");//弹框图片
        $template ->set_popButton1("下载");//左键
        $template ->set_popButton2("取消");//右键
        //下载
        $template ->set_loadIcon("");//弹框图片
        $template ->set_loadTitle("地震速报下载");
        $template ->set_loadUrl("http://dizhensubao.igexin.com/dl/com.ceic.apk");
        $template ->set_isAutoInstall(false);
        $template ->set_isActived(true);
        //$template->set_duration(BEGINTIME,ENDTIME); //设置ANDROID客户端在此时间区间内展示消息

        return $template;
    }

    //透传模板
    function IGtTransmissionTemplateDemo(){
        $template =  new IGtTransmissionTemplate();
        $template->set_appId(APPID);//应用appid
        $template->set_appkey(APPKEY);//应用appkey
        $template->set_transmissionType(1);//透传消息类型
        $template->set_transmissionContent("测试离线ddd");//透传内容
        //$template->set_duration(BEGINTIME,ENDTIME); //设置ANDROID客户端在此时间区间内展示消息
        //APN简单推送
//        $template = new IGtAPNTemplate();
//        $apn = new IGtAPNPayload();
//        $alertmsg=new SimpleAlertMsg();
//        $alertmsg->alertMsg="";
//        $apn->alertMsg=$alertmsg;
////        $apn->badge=2;
////        $apn->sound="";
//        $apn->add_customMsg("payload","payload");
//        $apn->contentAvailable=1;
//        $apn->category="ACTIONABLE";
//        $template->set_apnInfo($apn);
//        $message = new IGtSingleMessage();

        //APN高级推送
        $apn = new IGtAPNPayload();
        $alertmsg=new DictionaryAlertMsg();
        $alertmsg->body="body";
        $alertmsg->actionLocKey="ActionLockey";
        $alertmsg->locKey="LocKey";
        $alertmsg->locArgs=array("locargs");
        $alertmsg->launchImage="launchimage";
//        IOS8.2 支持
        $alertmsg->title="Title";
        $alertmsg->titleLocKey="TitleLocKey";
        $alertmsg->titleLocArgs=array("TitleLocArg");

        $apn->alertMsg=$alertmsg;
        $apn->badge=7;
        $apn->sound="";
        $apn->add_customMsg("payload","payload");
        $apn->contentAvailable=1;
        $apn->category="ACTIONABLE";
        $template->set_apnInfo($apn);

        //PushApn老方式传参
//    $template = new IGtAPNTemplate();
//          $template->set_pushInfo("", 10, "", "com.gexin.ios.silence", "", "", "", "");

        return $template;
    }

}


