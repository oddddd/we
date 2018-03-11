<?php

/**
 * 钱包开放接口
 */
class Api_WeTask extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'SignIn' => [
            ],
            'GetChest' => [
            ],
            'NewbieTask' => [
            ],
            'ShareMoney' => [
            ],
            'ShareRegister' => [
            ],
            'PushTask' => [
//                'fid' => ['name' => 'fid', 'type' => 'int', 'require' => true,'desc' => '评论id'],
//                'type' => ['name' => 'type', 'type' => 'int', 'require' => true,'desc' => 'type 1咨询 2视频 3网页 4快讯 5比赛'],
            ],
        );
    }

    /**
     * 用户每日签到
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-02-26
     */
    public function SignIn(){
        $domain = new Domain_WeTask();
        $ret = $domain -> SignIn();
        return $ret;
    }
    /**
     * 用户宝箱领取
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-02-26
     */
    public function GetChest(){
        $domain = new Domain_WeTask();
        $ret = $domain -> GetChest();
        return $ret;
    }
    /**
     * 用户完成当日新手任务
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-02-27
     */
    public function NewbieTask(){
        $domain = new Domain_WeTask();
        $ret = $domain -> NewbieTask();
        return $ret;
    }

    /**
     * 用户完成当日新手任务
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-02-27
     */
    public function ShareMoney(){
        $domain = new Domain_WeTask();
        $ret = $domain -> ShareMoney();
        return $ret;
    }

    /**
     * 用户完成当日新手任务
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-02-27
     */
    public function ShareRegister(){
        $domain = new Domain_WeTask();
        $ret = $domain -> ShareRegister();
        return $ret;
    }

    /**
     * 打开推送内容任务
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-03-05
     */
    public function PushTask(){
        $domain = new Domain_WeTask();
        $ret = $domain -> PushTask();
        return $ret;
    }
}