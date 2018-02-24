<?php

/**
 * 开放接口
 */
class Api_WeMatch extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'BespeakList' => [
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true,'desc' => '页码第一页传1'],
            ],
            'DeleteBespeak' => [
                'fid' => ['name' => 'fid', 'type' => 'int', 'require' => true,'desc' => '赛事id'],
            ],
            'MakeBespeak' =>[
                'fid' => ['name' => 'fid', 'type' => 'int', 'require' => true,'desc' => '赛事id'],
            ],
            'insertComment' => [
                'fid' => ['name' => 'fid', 'type' => 'int', 'require' => true,'desc' => '比赛id'],
                'comment' => ['name' => 'comment', 'type' => 'string', 'require' => true, 'min' => 1,'max' => 200, 'desc' => '评论内容'],
            ],
        );
    }

    /**
     * 预约列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2017-1-11
     */
    public function BespeakList(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeData();
        $ret = $dataDomain -> BespeakList($allParams);
        return $ret;
    }

    /**
     * 发起预约
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2017-1-11
     */
    public function MakeBespeak(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeData();
        $ret = $dataDomain -> MakeBespeak($allParams);
        return $ret;
    }

    /**
     * 删除预约
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2017-1-11
     */
    public function DeleteBespeak(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeData();
        $ret = $dataDomain -> DeleteBespeak($allParams);
        return $ret;
    }

    /**
     * 发送评论
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2017-12-25
     */
    public function insertComment(){
        $data = $this -> allParams();
        $domain = new Domain_WeData();
        $rolerCode = DI()->Ruler->Roler($data['comment']);
        if($rolerCode == -100)
            return DI()->ResCode->get("WE.rulerError");
        $data['userId'] = DI()->user['id'];
        $data['type'] = 1;
        $code = $domain -> insertComment($data);
        if($code != null)
            return DI()->ResCode->get("WE.Success");
        return DI()->ResCode->get("WE.Error");
    }
}