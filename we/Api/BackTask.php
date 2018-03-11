<?php
/**
 * 任务后台管理接口
 */
class Api_BackTask extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'CommentTask' => [
                'userId' => ['name' => 'userId', 'type' => 'int', 'require' => true,'desc' => '用户id'],
                'fid' => ['name' => 'fid', 'type' => 'int', 'require' => true,'desc' => '评论id'],
                'type' => ['name' => 'type', 'type' => 'int', 'require' => true,'desc' => '评论类型 1咨询 5赛事'],
            ]
        );
    }
    /**
     * 用户完成当日新手任务
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-03-05
     */
    public function CommentTask(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeTask();
        $ret = $domain -> CommentTask($allParams);
        return $ret;
    }

}