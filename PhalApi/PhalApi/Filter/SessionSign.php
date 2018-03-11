<?php

/**
 * 验证用户身份拦截
 * @author: wjp 2017-05-16
 *
 */
class PhalApi_Filter_SessionSign implements PhalApi_Filter
{
    public function check()
    {

        $allParams = DI()->request->getAll();
        if (!isset($allParams['service']))
            return null;
        $classAction = explode(".", $allParams['service']);
        $domainData = new Domain_UUserRole();

        //开放接口处理
        if (in_array($classAction['0'], ['WeOpen'])) {
            if (isset($allParams['accessToken']) && $allParams['accessToken'] != null && $allParams['accessToken'] != '') {
                $userId = $domainData->getUserId($allParams['accessToken'], 1);
                $userModel = new Model_WeUser();
                $loginUser = $userModel->getUserId($userId);
                if ($loginUser['status'] != 1)
                    throw new PhalApi_Exception_BadRequest(T('用户已冻结'), 15);
                DI()->user = $loginUser;
            }
            return null;
        }

        // 后台接口
        if (strstr($classAction[0], 'Back')) {

            //每日循环白名单
            if (in_array($classAction[1], ['getList','getMatchNews','getMatchData','getMatchTeamData','ExchangeMoney','GainNewConsultList']))
                return null;

            $ipModel = new Model_UIp();
            $ipList = $ipModel ->getList();
            $clientIp = DI() -> bzy -> getClientIp();
            $ipBotten = false;
            foreach ($ipList as $item) {
                if(strstr($clientIp,$item['Ip'])){
                    $ipBotten = true;
                }
            }

            if($ipBotten == false)
//                throw new PhalApi_Exception_BadRequest(T('Ip无权访问'), 25);
            if (!isset($allParams['backToken']) || $allParams['backToken'] == null || $allParams['backToken'] == '')
                return null;
            $userId = $domainData->getUserId($allParams['backToken'], 2);
            $backUserModel = new Model_UUser();
            $hasUser = $backUserModel -> getUserInfoById($userId);
            if($hasUser == null)
                throw new PhalApi_Exception_BadRequest(T('用户已冻结'), 15);
            else
                DI() -> user = $hasUser;
            $role = $domainData->getRole($userId);
            if(isset($role['max']) && $role['max'] == true)
                return null;
            if(!in_array($allParams['service'], $role['permission']))
                throw new PhalApi_Exception_BadRequest(T('无权访问'), 20);
            return null;
        }
        // app接口的
        if (!isset($allParams['accessToken']) || $allParams['accessToken'] == null && $allParams['accessToken'] == '')
            throw new PhalApi_Exception_BadRequest(T('缺少 token'), 11);
        $userId = $domainData->getUserId($allParams['accessToken'], 1);
        $userModel = new Model_WeUser();
        $loginUser = $userModel->getUserId($userId);
        if ($loginUser['status'] != 1)
            throw new PhalApi_Exception_BadRequest(T('用户已冻结'), 10);

        if($classAction[1] == "InsertComment" && $loginUser['gag'] != null){
            $nowTime = time();
            $gagTime = strtotime($loginUser['gag']);
            if($gagTime > $nowTime)
                throw new PhalApi_Exception_BadRequest(T('您已被禁言 '.$loginUser['gag'].' 后解禁'), 25);
        }

        DI()->user = $loginUser;
    }

    private function getallheaders(){
        $headers = [];
        foreach($_SERVER as $name => $value){
            if (substr($name, 0, 5) == 'HTTP_') {
                $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
            }
        }
        return $headers;
    }
}
