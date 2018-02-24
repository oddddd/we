<?php

/**
 * WeNbaMatchPlayer.php
 *
 * @author: wjp 2017-01-10
 */
class Model_WeNbaMatchPlayer extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'nbaMatchPlayer';
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
     * 查看指定队伍历史数据
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getData($id)
    {
        try {
            $sql = "select * from we_nbaMatchPlayer where teamId = {$id} ORDER BY enter DESC";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 查看指定两队伍历史数据
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getTwoData($hId,$aId)
    {
        try {
            $sql = "select * from we_nbaMatchPlayer where (hId = {$hId} && aId = {$aId}) || (hId = {$aId} && aId = {$hId}) ORDER BY matchTime DESC LIMIT 10";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 查看指定数据是否存在
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getDataById($Id)
    {
        try {
            $sql = "select * from we_nbaMatchPlayer where playerId = {$Id}";
            $list = $this->getORM()->queryAll($sql);
            return isset($list[0])?$list[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 修改
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateData($data)
    {
        try {
            $ret = $this->getORM()->where('playerId', $data['playerId'])->update($data);
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 插入
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertData($data)
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
     * 删除
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function deletData($data)
    {
        try {
            $sql = "delete from we_nbaMatchPlayer where id = {$data['id']}";
            $msg = $this->getORM()->queryAll($sql);
            return $msg;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}