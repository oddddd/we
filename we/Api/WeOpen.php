<?php

/**
 * 开放接口
 */
class Api_WeOpen extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'upload' => [
            ],
            'Register' => [
                'pwd1' => ['name' => 'pwd1', 'type' => 'string', 'require' => false, 'min' => 1,'max' => 34,'desc' => '密码 md5 32位'],
                'phone' => ['name' => 'phone', 'type' => 'string', 'require' => true, 'regex' => '/^[1][34578][0-9]{9}$/', 'desc' => '手机号码'],
                'code' => ['name' => 'code', 'type' => 'string', 'require' => true, 'min' => 1,'max' => 12,'desc' => '验证码'],
                'invitationCode' => ['name' => 'invitationCode', 'type' => 'string', 'require' => false, 'min' => 1,'max' => 12,'desc' => '邀请码'],
                'pushClientid' => ['name' => 'pushClientid', 'type' => 'string', 'require' => false,'min' => 1,'max' => 100,'desc' => '推送id']
            ],
            'sendMsg' => [
                'phone' => ['name' => 'phone', 'type' => 'string', 'require' => true, 'regex' => '/^[1][34578][0-9]{9}$/', 'desc' => '手机号码'],
            ],
            'Login' => [
                'pwd1' => ['name' => 'pwd1', 'type' => 'string', 'require' => true, 'min' => 1,'max' => 34,'desc' => '密码md5'],
                'phone' => ['name' => 'phone', 'type' => 'string', 'require' => true, 'regex' => '/^[1][34578][0-9]{9}$/', 'desc' => '手机号码'],
                'pushClientid' => ['name' => 'pushClientid', 'type' => 'string', 'require' => false,'min' => 1,'max' => 100,'desc' => '推送id']
            ],
            'LoginOther' => [
                'wxOpenid' => ['name' => 'wxOpenid', 'type' => 'string', 'require' => false, 'min' => 1,'max' => 50,'desc' => '微信openid'],
                'qqOpenid' => ['name' => 'qqOpenid', 'type' => 'string', 'require' => false, 'min' => 1,'max' => 50,'desc' => 'qqOpenid'],
                'sinaOpenid' => ['name' => 'sinaOpenid', 'type' => 'string', 'require' => false, 'min' => 1,'max' => 50,'desc' => '新浪Openid'],
                'deviceId' => ['name' => 'deviceId', 'type' => 'string', 'require' => false, 'min' => 1,'max' => 100,'desc' => '设备号'],
                'type' => ['name' => 'type', 'type' => 'int', 'require' => true,'desc' => '登录方式 1微信 2qq 3新浪'],
                'pushClientid' => ['name' => 'pushClientid', 'type' => 'string', 'require' => false,'min' => 1,'max' => 100,'desc' => '推送id'],
                'nickName' => ['name' => 'nickName', 'type' => 'string', 'require' => false,'desc' => '头像'],
                'photo' => ['name' => 'photo', 'type' => 'string', 'require' => false,'desc' => '用户昵称'],
                'sex' => ['name' => 'sex', 'type' => 'int', 'require' => false,'desc' => '性别'],
                'userAddress' => ['name' => 'userAddress', 'type' => 'string', 'require' => false,'desc' => '地址'],
            ],
            'LoginCode' => [
                'code' => ['name' => 'code', 'type' => 'string', 'require' => true, 'min' => 1,'max' => 4,'desc' => '验证码4位'],
                'phone' => ['name' => 'phone', 'type' => 'string', 'require' => true, 'regex' => '/^[1][34578][0-9]{9}$/', 'desc' => '手机号码'],
                'pushClientid' => ['name' => 'pushClientid', 'type' => 'string', 'require' => false,'min' => 1,'max' => 100,'desc' => '推送id']
            ],
            'LoginToken' => [
            ],
            'banner' => [
            ],
            'ConsultClassList'=>[
            ],
            'ConsultList'=>[
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true,'desc' => '页码第一页传1'],
                'classId' => ['name' => 'classId', 'type' => 'int', 'require' => false,'desc' => '分类id'],
            ],
            'ConsultDetail'=>[
                'id' => ['name' => 'id', 'type' => 'int', 'require' => true,'desc' => '帖子id'],
                'type' => ['name' => 'type', 'type' => 'int', 'require' => false,'desc' => '1咨询 2视频 3快讯'],
            ],
            'CommentList'=>[
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true,'desc' => '页码第一页传1'],
                'type' => ['name' => 'type', 'type' => 'int', 'require' => true,'desc' => '评论类型 1咨询 2视频 3快讯'],
                'fid' => ['name' => 'fid', 'type' => 'int', 'require' => true,'desc' => '帖子id'],
            ],
            'getRecommend'=>[
                'id' => ['name' => 'id', 'type' => 'int', 'require' => true,'desc' => '咨询id recommendID']
            ],
            'newConsultClassList'=>[
            ],
            'newConsultList'=>[
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true,'desc' => '页码第一页传1'],
                'classId' => ['name' => 'classId', 'type' => 'int', 'require' => false,'desc' => '分类id'],
            ],
            'videoConsultClassList'=>[
            ],
            'videoConsultList'=>[
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true,'desc' => '页码第一页传1'],
                'classId' => ['name' => 'classId', 'type' => 'int', 'require' => false,'desc' => '分类id'],
            ],
            'MatchDetail' => [
                'id' => ['name' => 'id', 'type' => 'int', 'require' => true,'desc' => '赛事id'],
            ],
            'MatchListBefore'=>[
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true,'desc' => '页码第一页传1'],
                'leagueType' => ['name' => 'leagueType', 'type' => 'int', 'require' => true,'desc' => '1足球2篮球'],
            ],
            'MatchListAfter'=>[
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true,'desc' => '页码第一页传1'],
                'leagueType' => ['name' => 'leagueType', 'type' => 'int', 'require' => true,'desc' => '1足球2篮球'],
            ],
            'getDataTest'=>[],
            'MatchNewsList'=>[
                'matchNum' => ['name' => 'matchNum', 'type' => 'string', 'require' => true,'min' => 1,'max' => 100,'desc' => '赛事第三方id']
            ],
            'MatchCommentList'=>[
                'beforeTime' => ['name' => 'beforeTime', 'type' => 'string', 'require' => false,'desc' => '获取历史的数据 时间一次只能传一个'],
                'afterTime' => ['name' => 'afterTime', 'type' => 'string', 'require' => false,'desc' => '获取最新的数据 时间一次只能传一个'],
                'page' => ['name' => 'page', 'type' => 'int', 'require' => false,'desc' => '页码第一页传1'],
                'fid' => ['name' => 'fid', 'type' => 'int', 'require' => true,'desc' => '赛事id'],
                'type' => ['name' => 'type', 'type' => 'int', 'require' => false,'desc' => '1看用户 2看主持人'],
            ],
            'GetAdvertisingSwitch'=>[
            ],
            'GetAdvertisingPosition'=>[
                'position' => ['name' => 'position', 'type' => 'int', 'require' => false,'desc' => '入口位置 1 咨询详情广告 2 赛事竞猜广告 3 退出app广告 4咨询列表随机广告 不传给全部'],
            ],
            'About' => [

            ],
            'MatchNqHistory' =>[
                'fid' => ['name' => 'fid', 'type' => 'int', 'require' => true,'desc' => '赛事id'],
            ],
            'MatchNqPlayer' =>[
                'fid' => ['name' => 'fid', 'type' => 'int', 'require' => true,'desc' => '赛事id'],
            ],
            'MatchZqHistory' =>[
                'fid' => ['name' => 'fid', 'type' => 'int', 'require' => true,'desc' => '赛事id'],
            ],
            'MatchZqPlayer' =>[
                'fid' => ['name' => 'fid', 'type' => 'int', 'require' => true,'desc' => '赛事id'],
            ],
            'getLiveList' =>[
                'fid' => ['name' => 'fid', 'type' => 'int', 'require' => true,'desc' => '赛事id'],
            ],
            'AdvertisingLog' => [
                'fid' => ['name' => 'fid','type' => 'int', 'require' => true, 'desc' => '广告id'],
            ],
            'getCode' => [
            ],
        );
    }

    /**
     * 上传图片token
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2017-12-25
     */
    public function upload(){
        $token = DI()->qiniu-> uploadToken();
        $res = DI()->ResCode->get("WE.Success");
        $res['token'] = $token;
        return $res;
    }

    /**
     * 指定手机号发送验证码
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2017-1-10
     */
    public function sendMsg(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeData();
        $ret = $dataDomain -> sendMsg($allParams);
        return $ret;
    }

    /**
     * 用户注册
     * @return int code 1操作成功,2001当前用户已存在
     * @return string context 问题详细描述
     * @return array data 用户相关参数
     * @desc wjp 2017-12-25
     */
    public function Register(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeData();
        $code = $dataDomain -> confirmMsg($allParams);
        if($code != 1)
            return DI() -> ResCode -> get("WE.codeError");
        $domain = new Domain_WeUser();
        $res = $domain->Register($allParams);
        return $res;
    }

    /**
     * 用户登录
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 用户相关参数
     * @desc wjp 2017-12-25
     */
    public function Login(){
        $domain = new Domain_WeUser();
        $allParams = $this -> allParams();
        $ret = $domain->Login($allParams);
        return $ret;
    }

    /**
     * 用户第三方登录 没有这个用户就注册
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 用户相关参数
     * @desc wjp 2017-12-25
     */
    public function LoginOther(){
//        echo 123;exit;
        $domain = new Domain_WeUser();
        $allParams = $this -> allParams();
        if(isset($allParams['userAddress'])){
            $rolerCode = DI()->Ruler->Roler($allParams['userAddress']);
            if($rolerCode == -100)
                return DI()->ResCode->get("WE.rulerError");
        }
        if(isset($allParams['wxOpenid'])){
            $rolerCode = DI()->Ruler->Roler($allParams['wxOpenid']);
            if($rolerCode == -100)
                return DI()->ResCode->get("WE.rulerError");
        }
        if(isset($allParams['sinaOpenid'])){
            $rolerCode = DI()->Ruler->Roler($allParams['sinaOpenid']);
            if($rolerCode == -100)
                return DI()->ResCode->get("WE.rulerError");
        }
        if(isset($allParams['userAddress'])){
            $rolerCode = DI()->Ruler->Roler($allParams['userAddress']);
            if($rolerCode == -100)
                return DI()->ResCode->get("WE.rulerError");
        }

        $ret = $domain->LoginOther($allParams);
        return $ret;
    }

    /**
     * 用户登录用验证码
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 用户相关参数
     * @desc wjp 2017-12-25
     */
    public function LoginCode(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeUser();
        $dataDomain = new Domain_WeData();
        $code = $dataDomain -> confirmMsg($allParams);
        if($code != 1)
            return DI() -> ResCode -> get("WE.codeError");
        $ret = $domain -> LoginCode($allParams);
        return $ret;
    }

    /**
     * 轮换板
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 轮换板列表
     * @desc wjp 2017-12-26
     */
    public function bannerList(){
        $bannerList = DI() -> redis -> getInfo('WeOpenBannerList');
        if($bannerList == null || $bannerList == ''){
            $domain = new Domain_WeBanner();
            $bannerList = $domain->bannerList();
            $domainNews = new Domain_WeNewConsult();
            $newsList = $domainNews ->ConsultList(['page' => 1]);
            $res = DI()->ResCode->get("WE.Success");
            $res['data']['banner'] = $bannerList;
            $res['data']['news'] = $newsList;
            DI() -> redis -> set_InfoTime('WeOpenBannerList',json_encode($res),120);
        }else{
            $res = json_decode($bannerList,true);
        }
        $domainData = new Domain_WeData();
        $matchList = $domainData ->getMatchAfterTwo();
        $res['data']['match'] = $matchList;
        return $res;
    }

    /**
     * 帖子分类列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 分类列表
     * @desc wjp 2017-12-28
     */
    public function firstConsultList(){
        $domain = new Domain_WeConsult();
        $list = $domain->ConsultClassList();
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 帖子分类列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 分类列表
     * @desc wjp 2017-12-28
     */
    public function ConsultClassList(){
        $domain = new Domain_WeConsult();
        $list = $domain->ConsultClassList();
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 帖子列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2017-12-28
     */
    public function ConsultList(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeConsult();
        $list = $domain->ConsultList($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 帖子详情
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2017-12-28
     */
    public function ConsultDetail(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeConsult();
        $list = $domain->ConsultDetail($allParams);
        $res = DI()->ResCode->get("WE.Success");
        if(isset(DI()->user['id'])){
            $domainTask = new Domain_WeTask();
            $domainTask -> RandRead();
        }
        $res['data'] = $list;
        return $res;
    }

    /**
     * 评论列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2017-12-28
     */
    public function CommentList(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeConsult();
        $list = $domain->CommentList($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 推荐获取
     * @desc wjp 2018-1-4 如果没有data为空  3个不是固定的可能会少 比如后台删除咨询之内的情况
     * @throws PhalApi_Exception_InternalServerError
     */
    public function getRecommend(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeConsult();
        $userInfo = $domain -> getRecommend($allParams['id']);
        if($userInfo == null)
            return DI()->ResCode->get("WE.Error");
        $ret = DI()->ResCode->get("WE.Success");
        $ret['data'] = $userInfo;
        return $ret;
    }



    /**
     * 快讯分类列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 分类列表
     * @desc wjp 2018-1-8
     */
    public function newConsultClassList(){
        $domain = new Domain_WeNewConsult();
        $list = $domain->NewConsultClassList();
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 快讯列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2017-12-28
     */
    public function newConsultList(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeNewConsult();
        $list = $domain->ConsultList($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 视频首页列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-01-17
     */
    public function firstVideoConsultList(){
        $key = 'WeOpenFirstVideoConsultList';
        $List = DI() -> redis -> getInfo($key);
        if($List == null || $List == ''){
            $domain = new Domain_WeVideoConsult();
            $list = $domain->videoConsultClassList();
            foreach($list as $k => $value){
                //剔除精彩剪辑
                if($value['id'] == 1){
                    unset($list[$k]);
                    continue;
                }
                $domain->ConsultList(['page'=>1,'classId'=>$value['id'],'pageType'=>1]);
                $list[$k]['list'] = $domain->ConsultList(['page'=>1,'classId'=>$value['id'],'pageType'=>1]);
            }
            sort($list);
            DI() -> redis -> set_InfoTime($key,json_encode($list),180);
        }else{
            $list = json_decode($List,true);
        }
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 视频热门列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-01-17
     */
    public function hotVideoConsultList(){
        $domain = new Domain_WeVideoConsult();
        $list = $domain->ConsultList(['page'=>1,'pageType'=>2,'hot'=>1]);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 首页精彩剪辑列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-01-17
     */
    public function goodVideoConsultList(){
        $domain = new Domain_WeVideoConsult();
        $list = $domain->ConsultList(['page'=>1,'pageType'=>3,'classId'=>1]);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 视频分类列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 分类列表
     * @desc wjp 2018-1-8
     */
    public function videoConsultClassList(){
        $domain = new Domain_WeVideoConsult();
        $list = $domain->videoConsultClassList();
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 视频列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2017-12-28
     */
    public function videoConsultList(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeVideoConsult();
        $list = $domain->ConsultList($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 赛事数据
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2017-12-28
     */
    public function MatchDetail(){
        $allParams = $this -> allParams();
        $key = 'WeOpenMatchDetail_'.json_encode($allParams);
        $List = DI() -> redis -> getInfo($key);
        if($List == null || $List == ''){
            $domain = new Domain_WeData();
            $info = $domain->getMatchDetail($allParams);
            DI() -> redis -> set_InfoTime($key,json_encode($info),180);
        }else{
            $info = json_decode($List,true);
        }
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $info;
        return $res;
    }

    /**
     * 赛事列表上拉
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2017-12-28
     */
    public function MatchListBefore(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeData();
        $list = $domain->getMatchBefore($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 赛事列表下拉
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2017-12-28
     */
    public function MatchListAfter(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeData();
        $list = $domain->getMatchAfter($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 赛事爆料列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-01-17
     */
    public function MatchNewsList(){
        $allParams = $this -> allParams();
        $key = 'WeOpenMatchNewsList_'.json_encode($allParams);
        $List = DI() -> redis -> getInfo($key);
        if($List == null || $List == ''){
            $domain = new Domain_WeData();
            $info = $domain->MatchNewsList($allParams);
            DI() -> redis -> set_InfoTime($key,json_encode($info),180);
        }else {
            $info = json_decode($List, true);
        }
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $info;
        return $res;
    }

    /**
     * 赛事评论列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-12-28
     */
    public function MatchCommentList(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeData();
        $list = $domain->MatchCommentList($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 获取广告开关
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-01-19
     */
    public function GetAdvertisingSwitch(){
        $domain = new Domain_WeData();
        $list = $domain->GetAdvertisingSwitch();
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 获取指定入口广告
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-01-19
     */
    public function GetAdvertisingPosition(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeData();
        $list = $domain->GetAdvertisingPosition($allParams);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 获取关于
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-01-19
     */
    public function About(){
        $domain = new Domain_WeData();
        $list = $domain->About();
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        return $res;
    }

    /**
     * 篮球历史记录列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2018-1-11
     */
    public function MatchNqHistory(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeData();
        $ret = $dataDomain -> getMatchNqHistory($allParams);
        return $ret;
    }

    /**
     * 篮球球员记录列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2018-1-11
     */
    public function MatchNqPlayer(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeData();
        $ret = $dataDomain -> getNbaMatchTeamList($allParams);
        return $ret;
    }

    /**
     * 足球历史记录列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2018-1-11
     */
    public function MatchZqHistory(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeData();
        $ret = $dataDomain -> MatchZqHistory($allParams);
        return $ret;
    }

    /**
     * 足球球员记录列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data url
     * @desc wjp 2018-1-11
     */
    public function MatchZqPlayer(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeData();
        $ret = $dataDomain -> MatchZqPlayer($allParams);
        return $ret;
    }

    /**
     * 直播流列表
     * @return array
     * @desc wjp 2018-1-30
     */
    public function getLiveList(){
        $allParams = $this -> allParams();
        $dataDomain = new Domain_WeData();
        $ret = $dataDomain -> getLiveStreamBind($allParams);
        return $ret;
    }


    /**
     * 广告统计
     * @desc wjp 2018-01-19
     * @throws PhalApi_Exception_InternalServerError
     */
    public function AdvertisingLog(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeData();
        $domain -> addAdvertisingLog($allParams);
        return DI()->ResCode->get("WE.Success");
    }


    /**
     * 测试通道
     * @return array
     * @desc wjp 2018-1-30
     */
    public function getCode(){
        return true;
    }
}