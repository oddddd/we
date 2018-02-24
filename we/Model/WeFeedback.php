<?php

/**
 * WeFeedback.php
 *
 * @author: wjp 2017-01-08
 */
class Model_WeFeedback extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'feedback';
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
     * @param $allParams
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
            $sql = "select * from we_feedback where status = 1 ";
            if(isset($allParams['type']))
                $sql .= " && type = ".$allParams['type'];
            $sql .= " ORDER BY createTime desc 
Limit {$limitStart},{$limitEnd}";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取某个
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getOneById($id)
    {
        try {
            $sql = "select * from we_feedback where status = 1 && id = {$id}";
            $List = $this->getORM()->queryAll($sql);
            return isset($List[0])?$List[0]:null;
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
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertData($data)
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
}