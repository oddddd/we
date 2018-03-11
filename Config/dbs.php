<?php
/**
 * 分库分表的自定义数据库路由配置
 *
 * @author: dogstar <chanzonghuang@gmail.com> 2015-02-09
 */

return array(
    /**
     * DB数据库服务器集群
     */
    //测试服务器
    'servers' => array(
        'we_base' => array(
            'host' => '59.110.242.8',
            'name' => 'we_base',
            'user' => 'root',
            'password' => '123$%^qwE',
            'port' => '3306',
            'charset' => 'utf8mb4',
        ),
    ),
    //正式服务器
//    'servers' => array(
//        'we_base' => array(
//            'host' => '172.18.32.108',
//            'name' => 'we_base',
//            'user' => 'we',
//            'password' => '123$%^qwE',
//            'port' => '3306',
//            'charset' => 'utf8mb4',
//        ),
//    ),

    /**
     * 自定义路由表
     */
    'tables' => array(
        //通用路由
        '__default__' => array(
            'prefix' => 'we_',
            'key' => 'id',
            'map' => array(
                array('db' => 'we_base'),
            ),
        ),

        /**
         * 'demo' => array(                                                //表名
         * 'prefix' => 'tbl_',                                         //表名前缀
         * 'key' => 'id',                                              //表主键名
         * 'map' => array(                                             //表路由配置
         * array('db' => 'db_demo'),                               //单表配置：array('db' => 服务器标记)
         * array('start' => 0, 'end' => 2, 'db' => 'db_demo'),     //分表配置：array('start' => 开始下标, 'end' => 结束下标, 'db' => 服务器标记)
         * ),
         * ),
         */
    ),
);
