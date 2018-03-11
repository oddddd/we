<?php
/**
 * WeTask.php
 */
class Domain_WeTask
{

    public function __construct()
    {
        $userModel = new Model_WeUser();
        $userId = DI()->user['id'];
        $hasUser = $userModel -> getUserId($userId);
        if(!isset($hasUser['phone']) || $hasUser['phone'] == null || $hasUser['phone'] == null)
            return DI()->ResCode->get("WE.HasNoPhone");
    }

    /**
     * 用户签到
     * @return array res
     * @desc wjp 2018-2-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function SignIn(){

        $model = new Model_WeSignIn();
        $moneyModel = new Model_WeUserWallet();
        $configModel = new Model_WeConfig();
        $domain = new Domain_WeMoney();
        $userId = DI()->user['id'];
        $date = date("Y-m-d");
        $hasSignIn = $model -> getInfoByUserId($userId,$date);
        if($hasSignIn != null)
            return DI()->ResCode->get("WE.HasSignIn");
        $beforeDate = date("Y-m-d",strtotime("-1 day"));

        $hasBefore = $model -> getInfoByUserId($userId,$beforeDate);

        $wallet = $domain ->getUserWallet(['userId' => $userId,'walletId' => 2]);
        $list = $configModel -> getConfigListByType(DI()->config->get('admin.taskConfig.SignIn'));

        $cMoney = 0;
        $configList = [];
        foreach ($list as $item) {
           $configList[$item['configName']] = $item['configData'];
        }

        if($hasBefore == null){
            if(isset($configList[1]))
                $cMoney = intval($configList[1]);
            $allParams = [
                'userId' => $userId,
                'useType' => 8,
                'cMoney' => $cMoney,
                'walletId' => 2,
                'note' => $date.' 签到'
            ];
            $moneyModel -> updateInfo($wallet,$allParams);
            $model ->insertInfo(['userId'=>$userId,'day'=>$date,'nextDay'=>1,'money'=>$cMoney,'walletId'=>2]);
        }else{
            if(isset($configList[$hasBefore['nextDay']]))
                $cMoney = isset($configList[$hasBefore['nextDay']])?
                intval($configList[$hasBefore['nextDay']+1]):1;
            $allParams = [
                'userId' => $userId,
                'useType' => 8,
                'cMoney' => $cMoney,
                'walletId' => 2,
                'note' => $date.' 签到'
            ];
            $moneyModel -> updateInfo($wallet,$allParams);
            $model ->insertInfo(['userId'=>$userId,'day'=>$date,'nextDay'=>1,'money'=>$cMoney,'walletId'=>2]);
        }
        $ret = DI()->ResCode->get("WE.Success");
        return $ret;
    }

    /**
     * 用户定时领取宝箱
     * @return array res
     * @desc wjp 2018-2-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function GetChest(){
        $model = new Model_WeChest();
        $moneyModel = new Model_WeUserWallet();
        $domain = new Domain_WeMoney();
        $userId = DI()->user['id'];
        $date = date("Y-m-d");
        $time = time();
        $hasChest = $model -> getAllListById($userId);
        $wallet = $domain ->getUserWallet(['userId' => $userId,'walletId' => 2]);
        if($hasChest == null){
            $cMoney = rand(5,10);
            $allParams = [
                'userId' => $userId,
                'useType' => 8,
                'cMoney' => $cMoney,
                'walletId' => 2,
                'note' => $time.' 宝箱'
            ];
            $moneyModel -> updateInfo($wallet,$allParams);
            $model ->insertInfo(['userId'=>$userId,'day'=>$date,'getTime'=>$time,'money'=>$cMoney,'walletId'=>2]);
        }else{
            $outTime = 4*3600;
            $hasChest['getTime'];
            if($time - $hasChest['getTime']<$outTime)
                return DI()->ResCode->get("WE.HasChest");
            $cMoney = rand(5,10);
            $allParams = [
                'userId' => $userId,
                'useType' => 8,
                'cMoney' => $cMoney,
                'walletId' => 2,
                'note' => $time.' 宝箱'
            ];
            $moneyModel -> updateInfo($wallet,$allParams);
            $model ->insertInfo(['userId'=>$userId,'day'=>$date,'getTime'=>$time,'money'=>$cMoney,'walletId'=>2]);
        }
        $ret = DI()->ResCode->get("WE.Success");
        return $ret;
    }

    /**
     * 用户完成当日新手任务
     * @return array res
     * @desc wjp 2018-2-27
     * @throws PhalApi_Exception_InternalServerError
     */
    public function NewbieTask(){
        $model = new Model_WeReadTask();
        $taskModel = new Model_WeTask();
        $moneyModel = new Model_WeUserWallet();
        $configModel = new Model_WeConfig();
        $domain = new Domain_WeMoney();
        $userId = DI()->user['id'];
        $date = date("Y-m-d");
        $cMoney = 0;
        $configList = [];
        $loginTime = strtotime(DI()->user['createTime']);
        $now = time();
        $timeDiff = $now - $loginTime;
        $days = ceil($timeDiff/86400);
        $list = $configModel -> getConfigListByType(DI()->config->get('admin.taskConfig.NewbieTask'));
        foreach ($list as $item) {
            $configList[$item['configName']] = $item['configData'];
        }
        $wallet = $domain ->getUserWallet(['userId' => $userId,'walletId' => 2]);
        $hasTask = $model -> getAllListById($userId);
        $nextDay = 1;
        if($hasTask != null) {
            if ($hasTask['day'] == $date)
                return DI()->ResCode->get("WE.HasSignIn");
            $beforeDate = date("Y-m-d", strtotime("-1 day"));
            if ($hasTask['day'] == $beforeDate)
                $nextDay += $hasTask['nextDay'];
        }
        $allParams = [
            'userId' => $userId,
            'useType' => 8,
            'cMoney' => $cMoney,
            'walletId' => 2,
            'note' => $date.' 新手阅读任务'
        ];

        if($days<=30){
            switch ($nextDay){
                case 1:
                    $loginDate = date("Y-m-d",$loginTime);
                    if($date == $loginDate){
                        if(isset($configList[1]))
                            $allParams['cMoney'] = intval($configList[1]);
                        $moneyModel -> updateInfo($wallet,$allParams);
                        $taskModel ->insertInfo(['userId'=>$userId,'day'=>$date,'money'=>$cMoney,'walletId'=>2,'taskType'=>DI()->config->get('admin.taskConfig.NewbieTask')]);
                    }
                    break;
                case 3:
                    $hasTask = $model ->getOne($userId,3);
                    if($hasTask == null){
                        if(isset($configList[2]))
                            $allParams['cMoney'] = intval($configList[2]);
                        $moneyModel -> updateInfo($wallet,$allParams);
                        $taskModel ->insertInfo(['userId'=>$userId,'day'=>$date,'money'=>$cMoney,'walletId'=>2,'taskType'=>DI()->config->get('admin.taskConfig.NewbieTask')]);
                    }
                    break;
                case 6:
                    $hasTask = $model ->getOne($userId,6);
                    if($hasTask == null){
                        if(isset($configList[3]))
                            $allParams['cMoney'] = intval($configList[3]);

                        $moneyModel -> updateInfo($wallet,$allParams);
                        $taskModel ->insertInfo(['userId'=>$userId,'day'=>$date,'money'=>$cMoney,'walletId'=>2,'taskType'=>DI()->config->get('admin.taskConfig.NewbieTask')]);
                    }
                    break;
                case 9:
                    $hasTask = $model ->getOne($userId,9);
                    if($hasTask == null){
                        if(isset($configList[4]))
                            $allParams['cMoney'] = intval($configList[4]);

                        $moneyModel -> updateInfo($wallet,$allParams);
                        $taskModel ->insertInfo(['userId'=>$userId,'day'=>$date,'money'=>$cMoney,'walletId'=>2,'taskType'=>DI()->config->get('admin.taskConfig.NewbieTask')]);
                    }
                    break;
                case 12:
                    $hasTask = $model ->getOne($userId,12);
                    if($hasTask == null){
                        if(isset($configList[5]))
                            $allParams['cMoney'] = intval($configList[5]);

                        $moneyModel -> updateInfo($wallet,$allParams);
                        $taskModel ->insertInfo(['userId'=>$userId,'day'=>$date,'money'=>$cMoney,'walletId'=>2,'taskType'=>DI()->config->get('admin.taskConfig.NewbieTask')]);
                    }
                    break;
                case 15:
                    $hasTask = $model ->getOne($userId,15);
                    if($hasTask == null){
                        if(isset($configList[6]))
                            $allParams['cMoney'] = intval($configList[6]);

                        $moneyModel -> updateInfo($wallet,$allParams);
                        $taskModel ->insertInfo(['userId'=>$userId,'day'=>$date,'money'=>$cMoney,'walletId'=>2,'taskType'=>DI()->config->get('admin.taskConfig.NewbieTask')]);
                    }
                    break;
                case 18:
                    $hasTask = $model ->getOne($userId,18);
                    if($hasTask == null){
                        if(isset($configList[7]))
                            $allParams['cMoney'] = intval($configList[7]);

                        $moneyModel -> updateInfo($wallet,$allParams);
                        $taskModel ->insertInfo(['userId'=>$userId,'day'=>$date,'money'=>$cMoney,'walletId'=>2,'taskType'=>DI()->config->get('admin.taskConfig.NewbieTask')]);
                    }
                    break;
                case 21:
                    $hasTask = $model ->getOne($userId,21);
                    if($hasTask == null){
                        if(isset($configList[8]))
                            $allParams['cMoney'] = intval($configList[8]);
                        $moneyModel -> updateInfo($wallet,$allParams);
                        $taskModel ->insertInfo(['userId'=>$userId,'day'=>$date,'money'=>$cMoney,'walletId'=>2,'taskType'=>DI()->config->get('admin.taskConfig.NewbieTask')]);
                    }
                    break;
            }
        }
        $model ->insertInfo(['userId'=>$userId,'day'=>$date,'nextDay'=>$nextDay,'loginDay'=>$days]);
        $ret = DI()->ResCode->get("WE.Success");
        return $ret;
    }

    /**
     * 用户分享晒一晒
     * @return array res
     * @desc wjp 2018-2-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function ShareMoney(){
        $taskModel = new Model_WeTask();
        $moneyModel = new Model_WeUserWallet();
        $domain = new Domain_WeMoney();
        $configModel = new Model_WeConfig();
        $userId = DI()->user['id'];
        $date = date("Y-m-d");
        $hasTask = $taskModel ->getOne($userId,$date,3);
        $list = $configModel -> getConfigListByType(DI()->config->get('admin.taskConfig.ShareMoney'));
        $wallet = $domain ->getUserWallet(['userId' => $userId,'walletId' => 2]);
        if($hasTask == null){
            $cMoney = isset($list[0]['configData'])?intval($list[0]['configData']):0;
            $allParams = [
                'userId' => $userId,
                'useType' => 8,
                'cMoney' => $cMoney,
                'walletId' => 2,
                'note' => $date.' 晒一晒'
            ];
            $moneyModel -> updateInfo($wallet,$allParams);
            $taskModel ->insertInfo(['userId'=>$userId,'day'=>$date,'money'=>$cMoney,'walletId'=>2,'taskType'=>DI()->config->get('admin.taskConfig.ShareMoney')]);
        }else
            return DI()->ResCode->get("WE.Error");
        return DI()->ResCode->get("WE.Success");
    }

    /**
     * 用户分享注册页任务
     * @return array res
     * @desc wjp 2018-2-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function ShareRegister(){
        $model = new Model_WeShareRegister();
        $moneyModel = new Model_WeUserWallet();
        $domain = new Domain_WeMoney();
        $configModel = new Model_WeConfig();
        $userId = DI()->user['id'];
        $date = date("Y-m-d");
        $time = time();
        $list = $configModel -> getConfigListByType(DI()->config->get('admin.taskConfig.ShareMoney'));
        $hasShare = $model -> getListByIdDay($userId,$date);
        $wallet = $domain ->getUserWallet(['userId' => $userId,'walletId' => 2]);

        if(count($hasShare) < 3){
            $outTime = 4*3600;
            if($time -  $hasShare[0]['getTime']<$outTime)
                return DI()->ResCode->get("WE.HasChest");
            $cMoney = isset($list[0]['configData'])?intval($list[0]['configData']):0;
            $allParams = [
                'userId' => $userId,
                'useType' => 8,
                'cMoney' => $cMoney,
                'walletId' => 2,
                'note' => $time.' 分享注册'
            ];
            $moneyModel -> updateInfo($wallet,$allParams);
            $model ->insertInfo(['userId'=>$userId,'day'=>$date,'getTime'=>$time,'money'=>$cMoney,'walletId'=>2]);
        }else
            return DI()->ResCode->get("WE.Error");
        return DI()->ResCode->get("WE.Success");
    }

    /**
     * 用户获取阅读随机奖励
     * @return array res
     * @desc wjp 2018-2-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function RandRead(){
        $taskModel = new Model_WeTask();
        $moneyModel = new Model_WeUserWallet();
        $domain = new Domain_WeMoney();
        $configModel = new Model_WeConfig();
        $userId = DI()->user['id'];
        $date = date("Y-m-d");
        $list = $configModel -> getConfigListByType(DI()->config->get('admin.taskConfig.RandRead'));
        $hasTask = $taskModel -> getListByType($userId,$date,9);
        $wallet = $domain ->getUserWallet(['userId' => $userId,'walletId' => 2]);
        $rand = rand(1,10);
        if($rand == 1){
            if(count($hasTask) < 2){
                $cMoney = isset($list[0]['configData'])?intval($list[0]['configData']):0;
                $allParams = [
                    'userId' => $userId,
                    'useType' => 8,
                    'cMoney' => $cMoney,
                    'walletId' => 2,
                    'note' => $date.' 阅读随机任务'
                ];
                $moneyModel -> updateInfo($wallet,$allParams);
                $taskModel ->insertInfo(['userId'=>$userId,'day'=>$date,'money'=>$cMoney,'walletId'=>2,'taskType'=>DI()->config->get('admin.taskConfig.RandRead')]);
            }
        }
        return DI()->ResCode->get("WE.Success");
    }

    /**
     * 用户评论奖励
     * @param $allParams
     * @return array res
     * @desc wjp 2018-3-05
     * @throws PhalApi_Exception_InternalServerError
     */
    public function CommentTask($allParams){
        $taskModel = new Model_WeCommentTask();
        $moneyModel = new Model_WeUserWallet();
        $domain = new Domain_WeMoney();
        $configModel = new Model_WeConfig();
        if($allParams['type'] == 1)
            $commentModel = new Model_WeComment();
        else if($allParams['type'] == 2)
            $commentModel = new Model_WeMatchComment();
        else
            return DI()->ResCode->get("WE.Error");
        $date = date("Y-m-d");
        $has = $taskModel -> getOne($allParams['fid'],$allParams['type']);
        if($has != null)
            return DI()->ResCode->get("WE.HasTask");
        $hasComment = $commentModel ->getComment($allParams['fid']);
        if($hasComment == null || !isset($hasComment['userId']) || $hasComment['userId'] != $allParams['userId'])
            return DI()->ResCode->get("WE.NoComment");
        $list = $configModel -> getConfigListByType(DI()->config->get('admin.taskConfig.CommentTask'));
        $wallet = $domain ->getUserWallet(['userId' => $allParams['userId'],'walletId' => 2]);
        $cMoney = isset($list[0]['configData'])?intval($list[0]['configData']):0;
        $data = [
            'userId' =>  $allParams['userId'],
            'useType' => 8,
            'cMoney' => $cMoney,
            'walletId' => 2,
            'note' => $allParams['fid'].' 优秀评论任务'
        ];
        $moneyModel -> updateInfo($wallet,$data);
        $taskModel ->insertInfo(['fid'=>$allParams['fid'],'userId'=> $allParams['userId'],'day'=>$date,'money'=>$cMoney,'walletId'=>2,'type'=>$allParams['type']]);
        return DI()->ResCode->get("WE.Success");
    }

    /**
     * 推送任务
     * @desc wjp 2018-3-05
     * @return mixed
     */
    public function PushTask(){
        $taskModel = new Model_WeTask();
        $moneyModel = new Model_WeUserWallet();
        $domain = new Domain_WeMoney();
        $configModel = new Model_WeConfig();
        $date = date("Y-m-d");
        $userId = DI()->user['id'];
        $has = $taskModel -> getOne($userId,$date,6);
        if($has != null)
            return DI()->ResCode->get("WE.HasTask");
        $list = $configModel -> getConfigListByType(DI()->config->get('admin.taskConfig.PushTask'));
        $wallet = $domain ->getUserWallet(['userId' => $userId,'walletId' => 2]);
        $cMoney = isset($list[0]['configData'])?intval($list[0]['configData']):0;
        $data = [
            'userId' =>  $userId,
            'useType' => 8,
            'cMoney' => $cMoney,
            'walletId' => 2,
            'note' => $date.' 优秀评论任务'
        ];
        $moneyModel -> updateInfo($wallet,$data);
        $taskModel ->insertInfo(['userId'=>$userId,'day'=>$date,'money'=>$cMoney,'walletId'=>2,'taskType'=>DI()->config->get('admin.taskConfig.PushTask')]);
        return DI()->ResCode->get("WE.Success");
    }


    /**
     * 下级完成任务返利
     * @param $sonId
     * @desc wjp 2018-3-05
     * @return mixed
     */
    public function Rebate($sonId){
        $rebateModel = new Model_WeRebate();
        $moneyModel = new Model_WeUserWallet();
        $userModel = new Model_WeUser();
        $domain = new Domain_WeMoney();

        $date = date("Y-m-d");
        $wallet = $domain ->getUserWallet(['userId' => $sonId,'walletId' => DI()->config->get('admin.Wallet.Gold')]);
        if($wallet['money'] < DI()->config->get('admin.Rebate.RebateCondition'))
            return ['msg' => '金币不达标'];
        $userInfo = $userModel -> getUserId($sonId);
        if(!isset($userInfo['fid']) || $userInfo['fid'] == null || $userInfo['fid'] == '' || $userInfo['fid'] == 0){
            return ['msg' => '没有上级'];
        }
        $fId = $userInfo['fid'];
        $hasList = $rebateModel -> getInfoByUserId($fId,$sonId);
        $fidWalletId = DI()->config->get('admin.Wallet.Money');
        $MinMoney = DI()->config->get('admin.Rebate.MoneyMin');
        $MaxMoney = DI()->config->get('admin.Rebate.MoneyMax');
        $cMoney = rand($MinMoney,$MaxMoney);
        foreach ($hasList as $item) {
            if(isset($item['day']) && $item['day'] == $date)
                return ['msg' => '当天已领取'];
        }
        if(count($hasList) < DI()->config->get('admin.Rebate.FidRebate')){
            $num = count($hasList)+1;
            $data = [
                'userId' =>  $fId,
                'useType' => 8,
                'cMoney' => $cMoney,
                'walletId' => $fidWalletId,
                'note' => $date.'第'.$num .'次 下级完成 '.DI()->config->get('admin.Rebate.RebateCondition') .' 金币'
            ];
            $moneyModel -> updateInfo($wallet,$data);
            $rebateModel -> insertInfo(['userId'=>$fId,'sonId'=>$sonId,'day'=>$date,'money'=>$cMoney,'walletId'=>$fidWalletId,]);
        }
        //获取祖父级用户id
        //获取是否有资格获取返利
        //进行返利
    }
}