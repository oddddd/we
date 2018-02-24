<?php

/**
 * WeLiveStream.php
 *
 * @author: wjp 2017-01-10
 */
class Model_WeLiveStream extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'liveStream';
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
     * 获取某个
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getById($data)
    {
        try {
            $sql = "select * from we_liveStream where id = {$data['id']}";
            $list = $this->getORM()->queryAll($sql);
            return isset($list[0])?$list[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取列表
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getList()
    {
        try {
            $sql = "select * from we_liveStream";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 修改
     * @desc wjp 2017-12-29
     * @param $data
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateInfo($data)
    {
        try {
            $ret = $this->getORM()->where('id', $data['id'])->update($data);
            $this -> addLog($data['id']);
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 插入
     * @desc wjp 2017-01-18
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertInfo($data)
    {
        try {
            $ret = $this->getORM()->insert($data);
            $this -> addLog($this->getORM()->insert_id());
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 删除
     * @desc wjp 2018-01-18
     * @param $data
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function deleteInfo($data)
    {
        try {
            $sql = "delete from we_liveStreamBind where id = {$data['id']}";
            $msg = $this->getORM()->queryAll($sql);
            return $msg;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}