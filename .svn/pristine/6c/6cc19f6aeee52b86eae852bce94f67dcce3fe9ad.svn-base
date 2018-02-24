<?php

/**
 * WeAdvertisingLog.php
 *
 * @author: wjp 2017-01-19
 */
class Model_WeAdvertisingLog extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'advertisingLog';
    }

    /**
     * 重写getORM方法，方便下面使用
     */
    protected function getORM($id = NULL)
    {
        return parent::getORM($id == NULL ? 'we_base' : $id);
    }

    public function __construct()
    {
    }


    /**
     * 获取log列表
     * @desc wjp 2017-01-17
     * @param $find
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getAdvertisingList($find)
    {
        try {
            $sql = "select *
from we_advertisingLog {$find}";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }


    /**
     * 获取配置列表
     * @desc wjp 2017-01-17
     * @param $find
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getAdvertisingPage($find)
    {
        try {
            $sql = "select count(*) as page
from we_advertisingLog {$find}";
            $list = $this->getORM()->queryAll($sql);
            return isset($list[0])?$list[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }


    /**
     * 获取是否有当天的log
     * @desc wjp 2017-01-17
     * @param $data
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getAdvertisingOne($data)
    {
        try {
            $sql = "select *
from advertisingLog where `date` = '{$data['date']}' && `type` = {$data['type']} && `fid` = {$data['fid']} ORDER by createTime desc ";
            $list = $this->getORM()->queryAll($sql);
            return isset($list[0])?$list[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 修改广告
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateAdvertising($data)
    {
        try {
            $ret = $this->getORM()->where('id', $data['id'])->update($data);
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 插入广告点击
     * @desc wjp 2017-01-18
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertAdvertisingLog($data)
    {
        try {
            $ret = $this->getORM()->insert($data);
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 删除广告
     * @desc wjp 2018-01-18
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function deleteAdvertisingLog($data)
    {
        try {
            $sql = "delete from we_advertisingLog where id = {$data['id']}";
            $msg = $this->getORM()->queryAll($sql);
            return $msg;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}