<?php

/**
 * WeUser.php
 *
 * @author: wjp 2017-04-29
 */
class Model_WeConsultAuthor extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'consultAuthor';
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
     * 获取帖子作者列表
     * @desc wjp 2017-12-29
     * @param $find
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getAuthorList($find)
    {
        try {
            $sql = "select * from we_consultAuthor where status = 1 {$find}";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取帖子作者页数
     * @desc wjp 2017-12-29
     * @param $find
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getAuthorPage($find)
    {
        try {
            $sql = "select count(*) from we_consultAuthor where status = 1 {$find}";
            $list = $this->getORM()->queryAll($sql);
            return isset($list[0])?$list[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }


    /**
     * 获取帖子作者
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getAuthor($data)
    {
        try {
            $sql = "select * from we_consultAuthor where id = {$data['id']}";
            $ret = $this->getORM()->queryAll($sql);
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取帖子作者
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getAuthorByName($name)
    {
        try {
            $sql = "select * from we_consultAuthor where consultAuthorName = '{$name}'";
            $ret = $this->getORM()->queryAll($sql);
            return isset($ret[0])?$ret[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 修改帖子作者
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateAuthor($data)
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
     * 插入帖子作者
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertAuthor($data)
    {
        try {
            $this->getORM()->insert($data);
            $this -> addLog($this->getORM()->insert_id());
            $ret = $this->getORM()->insert_id();
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }



    /**
     * 删除帖子作者
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function deleteAuthor($data)
    {
        try {
            $sql = "update we_consultAuthor set status=0 where id = {$data['id']}";
            $ret = $this->getORM()->queryAll($sql);
            $this -> addLog($data['id']);
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}