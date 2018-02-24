<?php
/**
 * 统一初始化
 */
header("Access-Control-Allow-Origin:*");

//开启session
session_start();
//HttpRequest()->getSession(false);

/** ---------------- 根目录定义，自动加载 ---------------- **/

date_default_timezone_set('Asia/Shanghai');

defined('API_ROOT') || define('API_ROOT', dirname(__FILE__) . '/..');

require_once API_ROOT . '/PhalApi/PhalApi.php';

$loader = new PhalApi_Loader(API_ROOT, 'Library');

/** ---------------- 注册&初始化 基本服务组件 ---------------- **/
//自动加载
DI()->loader = $loader;
//配置
DI()->config = new PhalApi_Config_File(API_ROOT . '/Config');

// 24小时运行推送类  
// $message = new Api_Message();
// $message->sendAllUnpublishedMessage();
//翻译语言包设定
SL('zh_cn');

/** ---------------- 定制注册 可选服务组件 ---------------- **/

//云存储
DI()->ucloud = new UCloud_Lite();

//数据过滤
DI()->Ruler = new Ruler_Lite();

//缓存 - Redis/Redis
DI()->redis = new Redis_Lite(DI()->config->get('sys.redis.servers'));

//七牛
DI()->loader ->loadFile(API_ROOT."/Library/Qiniu2/Lite.php");
DI()->qiniu = new Qiniu2_Lite();
//DI()->qiniu = new Qiniu_Lite();
//八爪鱼数据
DI()->bzy = new Bzy_Lite();
//推送
DI()->getui = new GETUI_Lite();
//短信
DI()->jhdx = new JHDX_Lite();
//爬虫入口
DI()->matchPs = new PhpSimple__Lite();
//DI()->cache = function () {
//    return new PhalApi_Cache_Redis(DI()->config->get('sys.redis.servers'));
//};


/**
 * //支持JsonP的返回
 * if (!empty($_GET['callback'])) {
 * DI()->response = new PhalApi_Response_JsonP($_GET['callback']);
 * }
 */

