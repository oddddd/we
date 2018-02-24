<?php

/**
 * WeUser.php
 *
 * @author: wjp 2017-04-29
 */
class Model_UserToken extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'user_token';
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
//        self::$mtoken = DI()->config->get('app.Pay.token');
    }




    /**
     * 插入token
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertToken($userId,$category,$token)
    {
        try {
            $sql = "insert into user_token(`userId`,`category`,`tokenCode`) value ({$userId},{$category},'{$token}')";
            $ret = $this->getORM()->queryAll($sql);
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 查询某个用户的token
     * @desc wjp 2018-1-2
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function seletcToken($userId,$category)
    {
        try {
            $sql = "select * from user_token where userId = {$userId} && category = {$category}";
            $token = $this->getORM()->queryAll($sql);
            return isset($token)?$token:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 查询某个用户的Id
     * @desc wjp 2018-1-2
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function seletcUserId($token,$category)
    {
        try {

            $sql = "select * from user_token where tokenCode = '{$token}' && category = {$category}";
            $token = $this->getORM()->queryAll($sql);
            return isset($token[0])?$token[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 删除某个用户的token
     * @desc wjp 2018-1-2
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function deleteToken($userId,$category)
    {
        try {
            $sql = "delete from user_token where userId = {$userId} && category = {$category}";
            $token = $this->getORM()->queryAll($sql);
            return isset($token)?$token:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}