<?php
/**
 * UserCenter.php
 *
 * @author: cnx7 <zysafe@live.cn> 2016-03-30
 */
return array(
    'RegisterSuccess'           => ['code' => 0, 'context' => '注册成功！'],
    'LoginSuccess'              => ['code' => 0, 'context' => '登录成功！'],
    'ChangePwdSuccess'          => ['code' => 0, 'context' => '密码修改成功'],
    'CodeSendSuccess'           => ['code' => 0, 'context' => '验证码已发送'],
    'GetFriendListSuccess'      => ['code' => 0, 'context' => '获取好友列表成功'],


    'telWrongFormat'            => ['code' => 1001, 'context' => '账号格式不对'],
    'UserExists'                => ['code' => 1002, 'context' => '该手机号码已注册'],
    'UserNotExists'             => ['code' => 1003, 'context' => '用户不存在'],
    'CodeError'                 => ['code' => 1004, 'context' => '验证码错误'],
    'CodeTimeout'               => ['code' => 1005, 'context' => '验证码已超时，请重新获取'],
    'CodeIsUsed'                => ['code' => 1006, 'context' => '验证码已失效，请重新获取'],
    'LoginError'                => ['code' => 1007, 'context' => '账号或密码错误'],
    'UserIsLock'                => ['code' => 1008, 'context' => '用户已被冻结'],
    'ChangePwdError'            => ['code' => 1009, 'context' => '密码修改失败！'],
    'CodeSendError'             => ['code' => 1010, 'context' => '验证码发送失败！'],
    'CodeSendErrorExceedsLimit' => ['code' => 1011, 'context' => '每天最多可发送5条验证码'],
    'NeedBindMobile'            => ['code' => 1012, 'context' => '还未绑定手机号码'],


    'UpdateLocationSuccess' => [
        'code' => 0,
        'context' => '上传位置成功！',
    ],
    'UpdateLocationFail' => [
        'code' => 1021,
        'context' => '上传位置失败！',
    ],

    'GetLocationSuccess' => [
        'code' => 0,
        'context' => '获取上传位置成功！',
    ],
    'GetLocationFail' => [
        'code' => 1022,
        'context' => '获取上传位置失败！',
    ],

    'SessionError' => [
        'code' => 1023,
        'context' => 'Session错误，请重新登录！',
    ],


    'AddJPushTokenSuccess' => [
        'code' => 0,
        'context' => '上传极光推送RegistrationID成功！',
    ],
    'AddJPushTokenFail' => [
        'code' => 1024,
        'context' => '上传极光推送RegistrationID失败！',
    ],
    'AddAliasTokenSuccess' => [
        'code' => 0,
        'context' => '获取别名成功',
    ],
    'AddAliasTokenFail' => [
        'code' => 1025,
        'context' => '获取别名失败',
    ],
    'GetUserNumberSuccess' => [
        'code' => 0,
        'context' => '获取未读信息成功',
    ],
    'GetUserNumberFail' => [
        'code' => 1026,
        'context' => '获取未读信息失败',
    ],
    'UpdateMessage' => [
        'code' => 0,
        'context' => '获取列表成功',
    ],
    'LastMessage' => [
        'code' => 10000,
        'context' => '已经到了最后一页',
    ],
    'DeleteMessage' => [
        'code' => 0,
        'context' => '删除数据成功',
    ],
    
    'DeleteMessageExist' => [
        'code' => 2001,
        'context' => '该数据已经被删除',
    ],
    'DeleteMessageFail' => [
        'code' => 2002,
        'context' => '删除失败',
    ],
);