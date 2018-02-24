<?php 
/**
 * 以下配置为系统级的配置，通常放置不同环境下的不同配置
 */

return array(
	/**
	 * 默认环境配置
	 */
	'debug' => false,

//	/**
//	 * MC缓存服务器
//	 */
//    'memcache' => array(
//        'host' => '120.76.97.3',
//        'port' => 11211,
//        'prefix' => 'sp_',
//        'spamL' => 0,
//        'spamM' => 0,
//        'spamH' => 0
//    ),

    /**
     * Redis 缓存服务器 计划任务配置
     */

    'redis' => array(
    //Redis缓存配置项
    'servers'  => array(
        'host'   => '172.18.32.106',        //Redis服务器地址
        'port'   => '6379',             //Redis端口号
        'prefix' => 'wev-',      //Redis-key前缀
        'auth'   => '123456',    //Redis链接密码
    ),
    // Redis分库对应关系
    'DB'       => array(
        'developers' => 1,
        'user'       => 2,
        'code'       => 3,
    ),
    //使用阻塞式读取队列时的等待时间单位/秒
    'blocking' => 5,
),
//    'mongo'=>array(
//        '192.168.200.10:27017',
//    ),

    /**
     * 加密
     */
    'crypt' => array(
        'mcrypt_iv' => '12345678',      //8位
    ),
);
