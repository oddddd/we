<?php

/**
 * WeConfig.php
 *
 * @author: wjp 2017-01-10
 */
class Model_WeConfig extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'config';
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
     * 获取列表
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getList($allParams)
    {
        try {
            $page = $allParams['page'];
            $page = $page - 1;
            if($page < 0)
                return null;
            $limitEnd = DI()->config->get("app.page.def");
            $limitStart = $limitEnd*$page;
            $sql = "select a.*,b.nickName,b.photo
from we_matchComment as a 
left join we_user as b on a.userId = b.id
where a.fid = {$allParams['fid']} ORDER by a.updateTime desc 
Limit {$limitStart},{$limitEnd}";
            $classList = $this->getORM()->queryAll($sql);
            return $classList;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取配置列表
     * @desc wjp 2017-01-17
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getConfigList()
    {
        try {
            $sql = "select *
from we_config ORDER by a.updateTime desc ";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取配置列表
     * @param $type
     * @return array
     * @desc wjp 2017-01-17
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getConfigListByType($type)
    {
        try {
            $sql = "select *
from we_config where `type` = {$type} ORDER by updateTime desc ";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }


    /**
     * 获取某个配置
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getById($data)
    {
        try {
            $sql = "select * from we_config where id = {$data['id']}";
            $list = $this->getORM()->queryAll($sql);
            return isset($list[0])?$list[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 修改配置
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateConfig($data)
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
     * 插入配置
     * @desc wjp 2017-01-18
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertConfig($data)
    {
        try {
            $userId = DI()->user['id'];
            $data['userId'] = $userId;
            $ret = $this->getORM()->insert($data);
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 删除配置
     * @desc wjp 2018-01-18
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function deleteConfig($data)
    {
        try {
            $sql = "delete from we_config where id = {$data['id']}";
            $msg = $this->getORM()->queryAll($sql);
            return $msg;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}