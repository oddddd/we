<?php

/**
 * WeBzy.php
 *
 * @author: wjp 2018-01-12
 */
class Model_WeBzy extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'bzy';
    }

    /**
     * 重写getORM方法，方便下面使用
     */
    protected function getORM($id = NULL)
    {
        return parent::getORM($id == NULL ? 'we_base' : $id);
    }

    private $time;
    public function __construct()
    {
        $this -> time = date("Y-m-d H:i:s",strtotime("-3 hour"));
//        self::$mtoken = DI()->config->get('app.Pay.token');
    }


    /**
     * 获取之前的列表
     * @desc wjp 2018-01-12
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getListBefore($allParams)
    {
        try {
            $page = $allParams['page'];
            $page = $page - 1;
            if($page < 0)
                return null;
            $limitEnd = DI()->config->get("app.page.def");
            $time = date("Y-m-d H:i:s");
            $limitStart = $limitEnd*$page;
            $sql = "select * from we_bzy as a where a.isEnd = 1 && a.leagueType = {$allParams['leagueType']} && a.kickoffTime < '{$time}' ORDER by a.kickoffTime desc,a.matchNum DESC Limit {$limitStart},{$limitEnd}";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取之后的列表
     * @desc wjp 2018-01-12
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getListAfter($allParams)
    {
        try {
            $page = $allParams['page'];
            $page = $page - 1;
            if($page < 0)
                return null;
            $limitEnd = DI()->config->get("app.page.def");
            $limitStart = $limitEnd*$page;
            $sql = "select * from we_bzy as a where a.isEnd = 0 && a.leagueType = {$allParams['leagueType']} && a.kickoffTime > '{$this -> time}' ORDER by a.kickoffTime asc,a.matchNum asc Limit {$limitStart},{$limitEnd}";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取之后的列表2条数据
     * @desc wjp 2018-01-12
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getListAfterTwo()
    {
        try {
//            $time = date("Y-m-d H:i:s");
//            $sql = "select * from we_bzy as a where a.kickoffTime > '{$time}' ORDER by a.kickoffTime asc,a.matchNum asc Limit 2";
            $sql = "select * from we_bzy as a ORDER by a.kickoffTime asc,a.matchNum asc Limit 2";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取列表
     * @desc wjp 2018-01-15
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getOne($matchNum)
    {
        try {
            $sql = "select * from we_bzy where matchNum = {$matchNum}";
            $list = $this->getORM()->queryAll($sql);
            return isset($list[0])?$list[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取NBA关联id
     * @desc wjp 2018-01-24
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getMatchIdListByNBA($data)
    {
        try {
            $matchList = [];
            foreach ($data as $datum) {
                $sql = "select * from we_bzy where matchNum = {$data}";
                $list = $this->getORM()->queryAll($sql);
            }

            $sql = "select * from we_bzy where matchNum = {$data}";
            $list = $this->getORM()->queryAll($sql);
            return isset($list[0])?$list[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取某个比赛
     * @desc wjp 2018-01-12
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getById($id)
    {
        try {
            $sql = "select * from we_bzy where id = {$id}";
            $list = $this->getORM()->queryAll($sql);
            return isset($list[0])?$list[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 修改
     * @desc wjp 2018-01-12
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateBzy($data)
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
     * @desc wjp 2018-01-12
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertBzy($data)
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
     * 结束过期比赛
     * @desc wjp 2018-01-12
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function endMatch()
    {
        try {
            $sql = "update we_bzy set isEnd = 1 where kickoffTime < '{$this -> time}'";
            $this->getORM()->queryAll($sql);
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}