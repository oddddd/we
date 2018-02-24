<?php

/**
 * UUser.php
 *
 * @author: wjp 2017-04-29
 */
class Model_UUser extends PhalApi_Model_NotORM
{
    /**
     * 根据主键值返回对应的表名，注意分表的情况
     */
    protected function getTableName($id)
    {
        return 'u_user';
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
     * 获取用户信息
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function geUserInfoList()
    {
        try {
            $sql = "select * from u_user where status = 1";
            $user_info = $this->getORM()->queryAll($sql);
            return $user_info;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取用户信息
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getUserList($data)
    {
        try {
            $page = $data['page'];
            $page = $page - 1;
            if($page < 0)
                return null;
            $limitEnd = DI()->config->get("app.page.backDef");
            $limitStart = $limitEnd*$page;
            $sql = "select * from u_user where status = 1";
            $sql .= " ORDER by createTime DESC Limit {$limitStart},{$limitEnd}";
            $user_info = $this->getORM()->queryAll($sql);
            return $user_info;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取用户信息
     * @param string $id
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getUserInfoById($id)
    {
        try {
            $sql = "select * from u_user where id = {$id} && status = 1";
            $user_info = $this->getORM()->queryAll($sql);
            return isset($user_info[0])?$user_info[0]:null;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取用户信息
     * @param string $phone
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function get_logUserInfo($phone)
    {
        try {
            $sql = "select * from u_user where phone = {$phone} && status = 1";
            $user_info = $this->getORM()->queryAll($sql);
            return isset($user_info[0])?$user_info[0]:-1;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 获取用户信息
     * @param int $phone
     * @param string $pswd
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getPhonePwd($phone,$pswd)
    {
        try {
            $sql = "select * from u_user where phone = {$phone} && pswd = '{$pswd}'";
            $user_info = $this->getORM()->queryAll($sql);
            if (isset($user_info[0])) {
                $this -> addLog($user_info[0]['id']);
                return $user_info[0];
            } else {
                return null;
            }
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }

    /**
     * 修改数据
     * @param array $data
     * @desc wjp 2017-04-29
     * @return array
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateUserInfo($data)
    {
        try {
            if(isset($data['lastLoginTime']) && $data['lastLoginTime']!= null){
                $sql = "update u_user set pswd = '{$data['pswd']}',nickname = '{$data['nickname']}',lastLoginTime = '{$data['lastLoginTime']}' where id = {$data['id']}";
            }else{
                $sql = "update u_user set pswd = '{$data['pswd']}',nickname = '{$data['nickname']}' where id = {$data['id']}";
            }
            $user_info = $this->getORM()->queryAll($sql);
            $this -> addLog($data['id']);
            return $user_info;
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
    public function insertUserInfo($data)
    {
        try {
            $sql = "insert into u_user(`phone`,`pswd`,`nickname`) VALUE ('{$data['phone']}','{$data['pswd']}','{$data['nickname']}')";
            $user_info = $this->getORM()->queryAll($sql);
            return $user_info;
        } catch (Exception $ex) {
            DI()->logger->error('SQL_ERROR', ['trace' => __METHOD__, 'msg' => $ex->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('Request failed'));
        }
    }
}