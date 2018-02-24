<?php

/**
 * 轮换板后台管理接口
 */
class Api_BackUpload extends PhalApi_Api
{
    public function getRules()
    {
        return array(

            'upload' => [

            ],
        );
    }

    /**
     * 获取下载token
     * @desc wjp 2017-12-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function upload(){
        $token = DI()->qiniu-> uploadToken();
        $res = DI()->ResCode->get("WE.Success");
        $res['token'] = $token;
        return $res;
    }

}