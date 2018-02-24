<?php

/**
 * UIp.php
 *
 * @author: wjp 2017-04-29
 */
class Model_UIp extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'u_ip';
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
    public function getList()
    {
        try {
            $sql = "select * from u_ip as a ";
            $classList = $this->getORM()->queryAll($sql);
            return $classList;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 插入数据
     * @param array $data
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertInfo($data)
    {
        try {
            $sql = "insert into u_ip(`Ip`,`type`) VALUE ('{$data['Ip']}','{$data['type']}')";
            $user_info = $this->getORM()->queryAll($sql);
            return $user_info;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 删除数据
     * @param array $data
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function deleteUserInfo($data)
    {
        try {
            $sql = "delete from u_ip where id = {$data['id']} ";
            $user_info = $this->getORM()->queryAll($sql);
            return $user_info;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}