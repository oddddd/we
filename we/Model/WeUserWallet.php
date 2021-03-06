<?php

/**
 * WeUserWallet.php
 *
 * @author: wjp 2017-01-10
 */
class Model_WeUserWallet extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'userWallet';
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
     * @param $data
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getById($data)
    {
        try {
            $sql = "select * from we_userWallet where id = {$data['id']}";
            $list = $this->getORM()->queryAll($sql);
            return isset($list[0])?$list[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取某个类型的钱包
     * @desc wjp 2017-12-29
     * @param $data
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getByWalletId($data)
    {
        try {
            $sql = "select * from we_userWallet where walletId = {$data['walletId']}";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取某个类型的钱包
     * @desc wjp 2017-12-29
     * @param $data
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getSumByWalletId($data)
    {
        try {
            $sql = "select sum(money) as allMoney from we_userWallet where walletId = {$data['walletId']}";
            $list = $this->getORM()->queryAll($sql);
            return isset($list[0])?$list[0]:null;
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
    public function getByUserIdWalletId($data)
    {
        try {
            $sql = "select * from we_userWallet where walletId = {$data['walletId']} && userId = {$data['userId']}";
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
            $sql = "select * from we_userWallet";
            $list = $this->getORM()->queryAll($sql);
            return $list;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 修改
     * @desc wjp 2018-02-10
     * @param $wallet
     * @param $allParams['userId','useType','cMoney','walletId','note']
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateInfo($wallet,$allParams)
    {
        try {
            DI()->notorm->beginTransaction('we_base');
            if($wallet['money']+$allParams['cMoney']<0)
                return null;
            $allParams['eMoney'] = $wallet['money']+$allParams['cMoney'];
            $allParams['sMoney'] = $wallet['money'];
            $sqlWallet = "update we_userWallet set money={$allParams['eMoney']} where userId = {$allParams['userId']} && walletId = {$allParams['walletId']}";
            DI()->notorm->transaction->queryAll($sqlWallet);
            $sqlLog = "insert into we_moneyLog(`userId`,`useType`,`sMoney`,`cMoney`,`eMoney`,`walletId`,`note`) 
VALUE ({$allParams['userId']},{$allParams['useType']},{$allParams['sMoney']},{$allParams['cMoney']},{$allParams['eMoney']},{$allParams['walletId']},'{$allParams['note']}')";
            DI()->notorm->transaction->queryAll($sqlLog);
            DI()->notorm->commit('we_base');
            $this -> addLog($allParams['userId']);
            return ['sql' => 'ok'];
        } catch (Exception $ex) {
            DI()->notorm->rollback('we_base');
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 金币每日返利
     * @desc wjp 2018-02-10
     * @param $moneyWallet
     * @param $goldWallet
     * @param $money
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateGold($moneyWallet,$goldWallet,$money)
    {
        try {
            DI()->notorm->beginTransaction('we_base');

            if($money<0 || $moneyWallet['userId'] != $goldWallet['userId'])
                return null;

            $date = date("Y-m-d");
            $goldLog['userId'] = $goldWallet['userId'];
            $goldLog['useType'] = 7;
            $goldLog['sMoney'] = $goldWallet['money'];
            $goldLog['cMoney'] = -$goldWallet['money'];
            $goldLog['eMoney'] = 0;
            $goldLog['walletId'] = $goldWallet['walletId'];
            $goldLog['note'] = $date." 返利扣款";

            $moneyLog['userId'] = $moneyWallet['userId'];
            $moneyLog['useType'] = 7;
            $moneyLog['sMoney'] = $moneyWallet['money'];
            $moneyLog['cMoney'] = $money;
            $moneyLog['eMoney'] = $moneyWallet['money']+$money;
            $moneyLog['walletId'] = $moneyWallet['walletId'];
            $moneyLog['note'] = $date." 返利充值";

            $sqlWallet = "update we_userWallet set money={$moneyLog['eMoney']} where userId = {$moneyLog['userId']} && walletId = {$moneyLog['walletId']}";
            DI()->notorm->transaction->queryAll($sqlWallet);

            $sqlLog = "insert into we_moneyLog(`userId`,`useType`,`sMoney`,`cMoney`,`eMoney`,`walletId`,`note`) 
VALUE ({$moneyLog['userId']},{$moneyLog['useType']},{$moneyLog['sMoney']},{$moneyLog['cMoney']},{$moneyLog['eMoney']},{$moneyLog['walletId']},'{$moneyLog['note']}')";
            DI()->notorm->transaction->queryAll($sqlLog);

            $sqlWallet = "update we_userWallet set money={$goldLog['eMoney']} where userId = {$goldLog['userId']} && walletId = {$goldLog['walletId']}";
            DI()->notorm->transaction->queryAll($sqlWallet);

            $sqlLog = "insert into we_moneyLog(`userId`,`useType`,`sMoney`,`cMoney`,`eMoney`,`walletId`,`note`) 
VALUE ({$goldLog['userId']},{$goldLog['useType']},{$goldLog['sMoney']},{$goldLog['cMoney']},{$goldLog['eMoney']},{$goldLog['walletId']},'{$goldLog['note']}')";
            DI()->notorm->transaction->queryAll($sqlLog);
            DI()->notorm->commit('we_base');
            return ['sql' => 'ok'];
        } catch (Exception $ex) {
            DI()->notorm->rollback('we_base');
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
            $sql = "delete from we_userWallet where id = {$data['id']}";
            $msg = $this->getORM()->queryAll($sql);
            return $msg;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}