<?php
/**
 * 应用配置
 */

return array(

    /**
     * 应用接口层的统一参数
     */
    'apiCommonRules' => array(
//        'sign' => array('name' => 'sign', 'require' => true),
    ),

    /**
     * 容联云通讯 （短信验证码配置项目）
     */
    "SMSService" => array(
        "accountSid" => "aaf98f894ee35d30014ef7d16fd717d8",  //主帐号
        "accountToken" => "04751cafb7b24aa7bd97b91477b43a4e",  //主帐号Token
        "appId" => "aaf98f894ee35d30014ef7fb3170186e",  //应用Id
//        "appId"        => "aaf98f894ee35d30014ef7d1b8b217da",  //测试Demo应用Id
        "serverPort" => "8883",  //请求端口 默认:8883
        "serverIP" => "sandboxapp.cloopen.com"   //请求地址不需要写https: // 默认:sandboxapp.cloopen.com
    ),


    /**
     * 融云测试环境
     */
    'Rongyun' => array(
        'appKey' => 'pgyu6atqyw5tu',
        'appSecret' => 'CpJga88tKiIloy',
        'format' => 'json',
    ),

    /**
     * 每页的翻译数量
     */
    'PageSize'=>array(
        'UserList' => "10", //列表初始条数
        'GzhList'=>"10",
    ),
    /**
     * session的失效时间
     */
    'SessionOut'=>array(
        'UserInfo' => "3600", //列表初始条数
    ),
    'Admin'=>array(
        'admin'=>111111,
    ),
    'Pay'=>array(
        'token'=>'shop',
    ),

    'Pwd'=>array(
        'token'=>'shoppwd'
    ),

    //代理总级别
    'Agent'=>array(
        'allLevel'=>5,
    ),

    /**
     * 云上传引擎,支持local,oss,upyun
     */
    'UCloudEngine' => 'local',

    /**
     * 本地存储相关配置（UCloudEngine为local时的配置）
     */
    'UCloud' => array(
        'host' => 'http://wjpdd.yoflying.com/upload/',
        'LocalHostLink'=>'/usr/local/nginx/html/dladmin/Public/upload/'
    ),
    'IndexUrl' => [
      'viewUrl'=>'http://wjpdd.yoflying.com/gzh/view/index.html',
    ],
    'page' => array(
        'def' => 10,
        'backDef' => 30,
        'commentMatch' => 50,
        'videoDef' => 20,
        'hotDef' => 15,
        'goodDef' => 8,
    ),

    /**
     * 七牛相关配置
     */
    'Qiniu' =>  array(
        'accessKey' => '5SnYMG6ppbHpvRjJoCfLBX0yix8vSlLcQ1AYzYSN',
        'secretKey' => 'sJDNPyKdv9_e0V8t6wo8IF9ksl04-y9TObiNf6tR',
        'space_bucket' => 'webase',
        'space_host' => 'cdn.wevsport.com',
    ),

    /**
     * 八爪鱼接口
     */
    'Bzy' =>  array(
        'appId' => 'D1238B7D39830D8E807E755DF6E57EE71brGE0nS',
        'openId' => '818A93D9C9E9F01A774D9E69C9041236MEJHqfAY',
        'masterKey' => 'B13527BD2CAFA4C9DAEACF069270BEB3a07etm8d',
        'url' =>'https://sapi.8win.com/gateway'
    ),

    /**
     * 个推
     */
    'GT' =>  array(
        'HOST' => 'http://sdk.open.api.igexin.com/apiex.htm',
        'APPKEY' => 'dC75MHkBxdAWNa6tEV6cv7',
        'APPID' => 'wqAFU1nmLJ6kFmtiVFyLx7',
        'APPSECRET' => 'ivisLQ3nzp6Pb7b0U5Fmw6',
        'MASTERSECRET' =>'XTpKggEYqQ6bnWcrzhLiyA'
    ),

    /**
     * 聚合短信
     */
    'JHDX' =>  array(
        'HOST' => 'http://v.juhe.cn/sms/send',
        'APPKEY' => '3a7c228b99f7b669c06b95f557bbbc22',
        'tpl_id' => '59543'
    ),
);
