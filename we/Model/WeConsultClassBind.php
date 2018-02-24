<?php

/**
 * WeUser.php
 *
 * @author: wjp 2017-12-28
 */
class Model_WeConsultClassBind extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'consultClassBind';
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
     * 获取用户帖子绑定信息
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getConsultClassBind($id)
    {
        try {
            $sql = "select * from we_consultClassBind where status = 1 && userId = {$id}";
            $classList = $this->getORM()->queryAll($sql);
            return isset($classList[0])?$classList[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 修改帖子分类
     * @desc wjp 2017-12-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateConsultClassBind($data)
    {
        try {
            $userId = DI()->user['id'];
            $has = $this -> getConsultClassBind($userId);
            if($has != null)
                $ret = $this->getORM()->where('userId', $userId)->update($data);
            else{
                $data['userId'] = $userId;
                $ret = $this->getORM()->insert($data);
            }

            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 插入帖子分类
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertBanner($data)
    {
        try {
            $ret = $this->getORM()->insert($data);
            return isset($ret)?$ret:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}