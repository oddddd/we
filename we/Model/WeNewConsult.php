<?php

/**
 * WeUser.php
 *
 * @author: wjp 2017-04-29
 */
class Model_WeNewConsult extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'newConsult';
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
     * 获取帖子列表
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getConsultList($allParams)
    {
        try {
            $page = $allParams['page'];
            $page = $page - 1;
            if($page < 0)
                return null;
            $limitEnd = DI()->config->get("app.page.def");

            $limitStart = $limitEnd*$page;

            $sql = "select *,(select count(*) as commentNum from we_comment where `type` = 3 && a.id = fid group by fid) as commentNum 
from we_newConsult as a
where a.status = 1 ";
            if(isset($allParams['classId']) && $allParams['classId'] != '')
                $sql .= "&& a.classId = {$allParams['classId']}";
            $sql .= " ORDER by a.createTime desc 
Limit {$limitStart},{$limitEnd}";

            $bannerList = $this->getORM()->queryAll($sql);
            return $bannerList;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取帖子列表
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getBackConsultList($find)
    {
        try {
            $sql = "select *,(select count(*) as commentNum from we_comment where `type` = 3 && a.id = fid group by fid) as commentNum 
from we_newConsult as a
where a.status = 1 {$find}";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取帖子列表
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getBackConsultPage($find)
    {
        try {
            $sql = "select count(*) as page from we_newConsult as a where a.status = 1 {$find}";
            $list = $this->getORM()->queryAll($sql);
            return isset($list[0])?$list[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取帖子详情
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getConsultDetail($id)
    {
        try {
            $sql = "select a.*,b.consultAuthorName,(select count(*) as commentNum from we_comment where `type` = 3 && a.id = fid group by fid) as commentNum from we_newConsult as a left join we_consultAuthor as b on a.authorId = b.id where a.status = 1 && a.id = {$id} ORDER by a.top desc";
            $bannerList = $this->getORM()->queryAll($sql);
            return isset($bannerList[0])?$bannerList[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 修改帖子
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateConsult($data)
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
     * 插入帖子
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertConsult($data)
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
     * 阅读帖子加1
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function consultNumAdd($id)
    {
        try {
            $sql = "update we_newConsult set num = num + 1 where id = {$id}";
            $bannerList = $this->getORM()->queryAll($sql);
            return isset($bannerList)?$bannerList:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}