<?php

/**
 * 轮换板后台管理接口
 */
class Api_BackBanner extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'updateBanner' => [
                'id' => ['name' => 'id', 'type' => 'int', 'require' => true,'desc' => '需要修改的轮换班id'],
                'title' => ['name' => 'title', 'type' => 'string', 'require' => false, 'desc' => '轮换板标题'],
                'imgUrl' => ['name' => 'imgUrl', 'type' => 'string', 'require' => false, 'desc' => '图片地址'],
                'url' => ['name' => 'url', 'type' => 'string', 'require' => false, 'desc' => '打开参数'],
                'type'=>['name'=>'type','type'=>'int', 'require' => false,'desc'=>'类型 1咨询 2 视频 3 网页 4快讯 5比赛'],
                'top'=>['name'=>'top','type'=>'int', 'require' => false,'desc'=>'排序越大越上面'],
                'status'=> ['name' => 'status', 'type' => 'int', 'require' => false, 'desc' => '1启用 0删除'],
            ],
            'insertBanner' => [
                'imgUrl' => ['name' => 'imgUrl', 'type' => 'string', 'require' => false, 'desc' => '图片地址'],
                'title' => ['name' => 'title', 'type' => 'string', 'require' => false, 'desc' => '轮换板标题'],
                'url' => ['name' => 'url', 'type' => 'string', 'require' => false, 'desc' => '打开参数'],
                'type'=>['name'=>'type','type'=>'int', 'require' => false,'desc'=>'类型 1咨询 2 视频 3 网页 4快讯 5比赛'],
                'top'=>['name'=>'top','type'=>'int', 'require' => false,'desc'=>'排序越大越上面'],
            ],
        );
    }

    /**
     * 修改轮换板
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateBanner(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeBanner();
        $userInfo = $domain -> updateBanner($allParams);
//        if($userInfo > 0){
            return DI()->ResCode->get("WE.Success");
//        }
//        return DI()->ResCode->get("WE.Error");
    }

    /**
     * 新建轮换板
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertBanner(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeBanner();
        $userInfo = $domain -> insertBanner($allParams);
//        if($userInfo > 0)
            return DI()->ResCode->get("WE.Success");
//        return DI()->ResCode->get("WE.Error");
    }
}