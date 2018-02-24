<?php
/*
 * +----------------------------------------------------------------------
 * | SqlServer连接拓展
 * +----------------------------------------------------------------------
 * | Copyright (c) 2015 summer All rights reserved.
 * +----------------------------------------------------------------------
 * | Author: wjp <18975137813@163.com> <qq540728685>
 * +----------------------------------------------------------------------
 * | This is not a free software, unauthorized no use and dissemination.
 * +----------------------------------------------------------------------
 * | Date 2017-05-31
 * +----------------------------------------------------------------------
 */

class SqlSrv_Lite {


    public $conn;
    public function __construct($database)
    {
            $config = DI()->config->get('app.SqlSrv');
            $this->conn = new PDO("sqlsrv:Server={$config['host']};Database={$database}",$config['user'],$config['pwd']);
    }

    public function query($sql){

        $stmt = $this->conn->query($sql);
        $data = [];
        while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){
            $data[] = $row;
        }
        return $data;
    }
}