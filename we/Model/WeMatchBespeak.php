<?php

/**
 * WeMatchBespeak.php
 *
 * @author: wjp 2017-01-10
 */
class Model_WeMatchBespeak extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'matchBespeak';
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

            $userId = isset(DI()->user['id'])?DI()->user['id']:0;

            $date = date("Y-m-d H:i:s");

            $sql = "select b.*
from we_matchBespeak as a 
left join we_bzy as b on a.fid = b.id
where a.userId = {$userId} && b.kickoffTime > '{$date}' ORDER by a.updateTime desc 
Limit {$limitStart},{$limitEnd}";
//            echo $sql;exit;
            $classList = $this->getORM()->queryAll($sql);
            return $classList;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取推送列表
     * @desc wjp 2017-01-17
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getPushList()
    {
        try {
            $date = date("Y-m-d H:i:s");
            $sql = "select a.*,unix_timestamp(b.kickoffTime) as pushTime
from we_matchBespeak as a left join we_bzy as b on a.fid = b.id where b.kickoffTime > '{$date}' && a.isPush2 = 0  ORDER by a.updateTime desc ";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取msg通过id
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getByFid($data)
    {
        try {

            if(isset(DI()->user['id'])){
                $userId = DI()->user['id'];
                $sql = "select * from we_matchBespeak where fid = {$data['fid']} && userId = {$userId}";
                $list = $this->getORM()->queryAll($sql);
                return isset($list[0])?$list[0]:null;
            }else
                return null;

        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 修改预约
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateMatchBespeak($data)
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
     * 插入预约
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertMatchBespeak($data)
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
     * 删除预约
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function deleteMatchBespeak($data)
    {
        try {
            $userId = DI()->user['id'];
            $sql = "delete from we_matchBespeak where fid = {$data['fid']} && userId = {$userId}";
            $msg = $this->getORM()->queryAll($sql);
            return $msg;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}