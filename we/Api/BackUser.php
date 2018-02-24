<?php

/**
 * 开放接口
 */
class Api_BackUser extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'PushOneMsg' => [
                'userId' => ['name' => 'userId', 'type' => 'int', 'require' => true, 'desc' => '要推送的用户id'],
                'msgTitle' => ['name' => 'msgTitle', 'type' => 'string','min' => 1,'max' => 20, 'require' => true,'desc' => '推送标题'],
                'msgText' => ['name' => 'msgText', 'type' => 'string','min' => 1,'max' => 100,'require' => true,'desc' => '推送标题'],
                'transmission' => ['name' => 'transmission', 'type' => 'string', 'min' => 1,'max' => 50,'require' => true,'desc' => '推送标题'],
            ],
            'PushAllMsg' => [
                'msgTitle' => ['name' => 'msgTitle', 'type' => 'string','min' => 1,'max' => 20, 'require' => true,'desc' => '推送标题'],
                'msgText' => ['name' => 'msgText', 'type' => 'string','min' => 1,'max' => 100,'require' => true,'desc' => '推送标题'],
                'transmission' => ['name' => 'transmission', 'type' => 'string', 'min' => 1,'max' => 50,'require' => true,'desc' => '推送标题'],
            ],
            'FeedbackList' => [
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true,'desc' => '页码第一页传1'],
                'type' => ['name' => 'type', 'type' => 'int', 'require' => false,'desc' => '分类id 未处理1 已处理2'],
            ],
            'UpdateFeedback' => [
                'id' => ['name' => 'id', 'type' => 'int', 'require' => true, 'desc' => '意见id'],
                'backContent' => ['name' => 'backContent', 'type' => 'string','min' => 1,'max' => 150, 'require' => false,'desc' => '处理结果'],
                'type' => ['name' => 'type', 'type' => 'int', 'require' => true,'desc' => '分类id 未处理1 已处理2'],
            ],
            'UserList' =>[
                'find' => ['name' => 'find', 'type' => 'string', 'require' => false,'desc' => '条件搜索'],
                'startTime' =>['name' => 'startTime', 'type' => 'string','require' => false,'desc' => '时间'],
                'endTime' =>['name' => 'endTime', 'type' => 'string','require' => false,'desc' => '时间'],
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true,'desc' => '页码第一页传1'],
            ],
            'UserGag'=>[
                'id' => ['name' => 'id', 'type' => 'int', 'require' => true, 'desc' => '用户id'],
                'gag' =>['name' => 'gag', 'type' => 'string','require' => true,'desc' => '时间'],
            ]
        );
    }

    /**
     * 单个消息推送
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2017-1-11
     */
    public function PushOneMsg(){
        $dataDomain = new Domain_WeData();
        $info = $dataDomain -> pushCli($this->userId,$this->msgTitle,$this->transmission,$this->msgText);
        $ret = DI()->ResCode->get("WE.Success");
        $ret['data'] = $info;
        return $ret;
    }

    /**
     * 全部消息推送
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2017-1-11
     */
    public function PushAllMsg(){
        $dataDomain = new Domain_WeData();
        $info = $dataDomain -> pushAll($this->msgTitle,$this->transmission,$this->msgText);
        $ret = DI()->ResCode->get("WE.Success");
        $ret['data'] = $info;
        return $ret;
    }

    /**
     * 意见列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2017-1-11
     */
    public function FeedbackList(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeUser();
        $ret = $dataDomain -> FeedbackList($allParams);
        return $ret;
    }

    /**
     * 处理意见
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2017-1-11
     */
    public function UpdateFeedback(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeUser();
        $ret = $dataDomain -> updateFeedback($allParams);
        return $ret;
    }

    /**
     * 用户列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2017-1-11
     */
    public function UserList(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeUser();
        $ret = $dataDomain -> getUserList($allParams);
        return $ret;
    }

    /**
     * 用户禁言
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2017-1-11
     */
    public function UserGag(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeUser();
        $ret = $dataDomain -> UserGag($allParams);
        return $ret;
    }
}