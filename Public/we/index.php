<?php
/**
 * Demo 统一入口
 */

require_once dirname(__FILE__) . '/../init.php';
//调试模式，$_GET['__debug__']可自行改名
DI()->debug = !empty($_GET['__debug__']) ? true : DI()->config->get('sys.debug');

//数据操作 - 基于NotORM，$_GET['__sql__']可自行改名
DI()->notorm = new PhalApi_DB_NotORM(DI()->config->get('dbs'), !empty($_GET['__sql__']));

//日记纪录
DI()->logger = new PhalApi_Logger_File(API_ROOT . '/Runtime/we', PhalApi_Logger::LOG_LEVEL_DEBUG | PhalApi_Logger::LOG_LEVEL_INFO | PhalApi_Logger::LOG_LEVEL_ERROR);
DI()->filter = 'None';

    /** 参数签名验证服务 */
DI()->parameterFilter = 'PhalApi_Filter_ParameterSign';
/** Session验证服务 */
DI()->sessionFilter = 'PhalApi_Filter_SessionSign';

//Json返回列表
DI()->ResCode = new PhalApi_Config_File(API_ROOT . '/ResCode');

//装载你的接口
DI()->loader->addDirs('we');

/** ---------------- 响应接口请求 ---------------- **/

$api = new PhalApi();
$rs = $api->response();
$rs->output();
