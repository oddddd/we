<?php

/**
 * WeRecommend.php
 *
 * @author: wjp 2017-1-4
 */
class Model_WeRecommend extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'recommend';
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
     * 获取推荐模板列表
     * @desc wjp 2017-1-4
     * @param $find
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getRecommendList($find)
    {
        try {
            $sql = "select * from we_recommend {$find}";
            $ret = $this->getORM()->queryAll($sql);
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取推荐模板列表
     * @desc wjp 2017-1-4
     * @param $find
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getRecommendPage($find)
    {
        try {
            $sql = "select count(*) as page from we_recommend {$find}";
            $ret = $this->getORM()->queryAll($sql);
            return isset($ret[0])?$ret[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 插入推荐模板
     * @desc wjp 2017-1-4
     * @param $data
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertRecommend($data)
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
     * 修改推荐模板
     * @desc wjp 2017-1-4
     * @param $id
     * @param $data
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateRecommend($id,$data)
    {
        try {
            $ret = $this->getORM()->where('id', $id)->update($data);
            $this -> addLog($id);
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 删除推荐模板
     * @desc wjp 2017-1-4
     * @param $id
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function deleteRecommend($id)
    {
        try {
            $sql = "delete from we_recommend where id = {$id}";
            $ret = $this->getORM()->queryAll($sql);
            $this -> addLog($id);
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取推荐模板
     * @desc wjp 2017-1-4
     * @param $id
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getRecommend($id)
    {
        try {
            $sql = "select * from we_recommend where id = {$id}";
            $ret = $this->getORM()->queryAll($sql);
            return isset($ret[0])?$ret[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

}