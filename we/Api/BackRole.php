<?php
/**
 * 权限管理接口
 */
class Api_BackRole extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'Login' => [
                'phone' => ['name' => 'phone', 'type' => 'string', 'require' => true, 'regex' => '/^[1][34578][0-9]{9}$/', 'desc' => '手机号码'],
                'pswd' => ['name' => 'pswd', 'type' => 'string','min' => 1,'max' => 150, 'require' => false,'desc' => '密码MD5'],
            ],
            'MakeUser' => [
                'nickname' => ['name' => 'nickname', 'type' => 'string','min' => 1,'max' => 20, 'require' => true, 'desc' => '用户昵称'],
                'phone' => ['name' => 'phone', 'type' => 'string', 'require' => true, 'regex' => '/^[1][34578][0-9]{9}$/', 'desc' => '手机号码'],
                'pswd' => ['name' => 'pswd', 'type' => 'string','min' => 1,'max' => 150, 'require' => false,'desc' => '密码MD5'],
            ],
            'UpdateUser' => [
                'id' => ['name' => 'id', 'type' => 'int','require' => true, 'desc' => '用户id'],
                'nickname' => ['name' => 'nickname', 'type' => 'string','min' => 1,'max' => 20, 'require' => true, 'desc' => '用户昵称'],
                'phone' => ['name' => 'phone', 'type' => 'string', 'require' => false, 'regex' => '/^[1][34578][0-9]{9}$/', 'desc' => '手机号码'],
                'pswd' => ['name' => 'pswd', 'type' => 'string','min' => 1,'max' => 150, 'require' => false,'desc' => '密码MD5'],
            ],
            'MakeRolePerMission' => [
                'rid' => ['name' => 'rid', 'type' => 'int','require' => true, 'desc' => '用户id'],
                'pid' => ['name' => 'pid', 'type' => 'int','require' => true, 'desc' => '角色id'],
            ],
            'DeleteRolePerMission' => [
                'rid' => ['name' => 'rid', 'type' => 'int','require' => true, 'desc' => '用户id'],
                'pid' => ['name' => 'pid', 'type' => 'int','require' => true, 'desc' => '角色id'],
            ],
            'RoleList' => [
            ],
            'PerMissionList' => [
                'id' => ['name' => 'id', 'type' => 'int','require' => false, 'desc' => '角色id'],
            ],
            'MakeRole' => [
                'name' => ['name' => 'name', 'type' => 'string','require' => true, 'desc' => '角色名'],
                'type' => ['name' => 'type', 'type' => 'int','require' => false, 'desc' => '角色权限逗号分隔 1,2,3'],
            ],
            'UpdateRole' => [
                'id' => ['name' => 'id', 'type' => 'int','require' => true, 'desc' => '角色id'],
                'name' => ['name' => 'name', 'type' => 'string','require' => true, 'desc' => '角色名'],
                'type' => ['name' => 'type', 'type' => 'int','require' => true, 'desc' => '角色权限逗号分隔 1,2,3'],
            ],
            'DeleteRole' => [
                'id' => ['name' => 'id', 'type' => 'int','require' => true, 'desc' => '角色id'],
            ],
            'UserList' => [
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true,'desc' => '页码第一页传1'],
            ],
            'UserRoleBindList' => [
                'rid' => ['name' => 'rid', 'type' => 'int','require' => true, 'desc' => '用户id'],
            ],
            'LogList' => [
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true,'desc' => '页码第一页传1'],
            ],
        );
    }

    /**
     * 后台用户登录
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function Login(){
        $allParams = $this -> allParams();
        $domain = new Domain_UUserRole();
        $res = $domain -> login($allParams);
        return $res;
    }

    /**
     * 新建后台用户
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function MakeUser(){
        $allParams = $this -> allParams();
        $domain = new Domain_UUserRole();
        $domain -> makeUser($allParams);
        $res = DI()->ResCode->get("WE.Success");
        return $res;
    }

    /**
     * 修改后台用户
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function UpdateUser(){
        $allParams = $this -> allParams();
        $domain = new Domain_UUserRole();
        $info = $domain -> updateUser($allParams);
        $res = DI()->ResCode->get("WE.Success");
        if(isset($info['ret']) && $info['ret'] == false)
            $res = DI()->ResCode->get("WE.Error");
        return $res;
    }

    /**
     * 用户添加角色绑定
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function MakeRolePerMission(){
        $allParams = $this -> allParams();
        $domain = new Domain_UUserRole();
        $info = $domain -> makeRolePerMission($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $info;
        if($info == null)
            $res = DI()->ResCode->get("WE.Error");
        return $res;
    }

    /**
     * 用户删除角色绑定
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function DeleteRolePerMission(){
        $allParams = $this -> allParams();
        $domain = new Domain_UUserRole();
        $info = $domain -> deleteRolePerMission($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $info;
        if($info == null)
            $res = DI()->ResCode->get("WE.Error");
        return $res;
    }

    /**
     * 角色列表
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function RoleList(){
        $domain = new Domain_UUserRole();
        $info = $domain -> RoleList();
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $info;
        return $res;
    }

    /**
     * 权限列表
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function PerMissionList(){
        $allParams = $this -> allParams();
        $domain = new Domain_UUserRole();
        $info = $domain -> PerMissionList($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $info;
        return $res;
    }

    /**
     * 添加角色
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function MakeRole(){
        $allParams = $this -> allParams();
        $domain = new Domain_UUserRole();
        $info = $domain -> makeRole($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $info;
        return $res;
    }

    /**
     * 修改角色
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function UpdateRole(){
        $allParams = $this -> allParams();
        $domain = new Domain_UUserRole();
        $res = $domain -> UpdateRole($allParams);
        return $res;
    }

    /**
     * 删除角色
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function DeleteRole(){
        $allParams = $this -> allParams();
        $domain = new Domain_UUserRole();
        $info = $domain -> deleteRole($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $info;
        if($info == null)
            $res = DI()->ResCode->get("WE.HasRole");
        return $res;
    }

    /**
     * 用户列表
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function UserList(){
        $allParams = $this -> allParams();
        $domain = new Domain_UUserRole();
        $info = $domain -> UserList($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $info;
        return $res;
    }

    /**
     * 用户绑定角色列表
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function UserRoleBindList(){
        $allParams = $this -> allParams();
        $domain = new Domain_UUserRole();
        $info = $domain -> UserRoleBindList($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $info;
        return $res;
    }

    /**
     * 管理员log列表
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function LogList(){
        $allParams = $this -> allParams();
        $domain = new Domain_UUserRole();
        $ret = $domain -> LogList($allParams);
        return $ret;
    }
}