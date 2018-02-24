<?php
/**
 * WeBanner.php
 */
class Domain_WeBanner
{
    /**
     * 获取轮换板
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function bannerList(){
        $model = new Model_WeBanner();
        $userInfo = $model -> getBannerList();
        return $userInfo;
    }

    /**
     * 修改轮换板
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateBanner($data){

        $model = new Model_WeBanner();
        $info= $model ->updateBanner($data);
        return $info;
    }

    /**
     * 添加轮换板
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertBanner($data){
        $model = new Model_WeBanner();
        $info = $model -> insertBanner($data);
        return $info;
    }
}