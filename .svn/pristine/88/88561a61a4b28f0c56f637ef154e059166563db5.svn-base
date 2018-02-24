<?php

/**
 * 验证用户身份拦截� *
 * @author: wjp 2017-05-16
 *
 */
class PhalApi_Filter_GzhSessionSign implements PhalApi_Filter
{
    public function check()
    {
        $blackAction = [
            'WxpayUpload'
        ];
        $blackClass = [
            'Open',
            'Wx',
            'Demo',
            'Pay'
        ];
        $allParams = DI()->request->getAll();
        $ClassAction = explode('.',$allParams['service']);
        if(!in_array($ClassAction[0],$blackClass) && !in_array($ClassAction[1],$blackAction)){
            $model = new Model_Session();
            if(isset($allParams['session_id'])){
                $s = $model -> selectOne(['session_id' => $allParams['session_id']]);
                if($s != -1){
                    $model = new Model_User();
                    $_SESSION['out_time'] = $s['out_time'];
                    $_SESSION['user_info'] = $model->selectOne(['game_id' => $s['game_id']]);
                }
            }
            if(!isset($_SESSION['out_time'])||$_SESSION['out_time']==0){
                throw new PhalApi_Exception_BadRequest(T('用户未登录'), 6);
            }else{
                $model = new Model_Session();
                $SessionOut = DI()->config->get('app.SessionOut.UserInfo');
                $sessiontime = time()-$_SESSION['out_time'];
                if($sessiontime>$SessionOut){
                    $_SESSION['out_time'] = 0;
                    $model -> Update(['game_id'=>$_SESSION['user_info']['game_id']],['session_id'=>0,'out_time'=>0]);
                    throw new PhalApi_Exception_BadRequest(T('用户登录超时'), 7);
                }else{
                    $_SESSION['out_time'] = time();
                    $model -> Update(['game_id'=>$_SESSION['user_info']['game_id']],['out_time'=>time()]);
                }
                if($_SESSION['user_info']['level'] == 3 && $ClassAction[0] != 'Admin'){
                    throw new PhalApi_Exception_BadRequest(T('权限不足'), 8);
                }
                if($_SESSION['user_info']['level'] == 4 && $ClassAction[0] != 'Reward'){
                    throw new PhalApi_Exception_BadRequest(T('权限不足'), 8);
                }
                if($_SESSION['user_info']['level'] == 5 && $ClassAction[0] != 'Manager'){
                    throw new PhalApi_Exception_BadRequest(T('权限不足'), 8);
                }
                if($_SESSION['user_info']['level'] == 6 && $ClassAction[0] != 'Staff'){
                    throw new PhalApi_Exception_BadRequest(T('权限不足'), 8);
                }

            }
            if(!isset($_SESSION['user_info'])){
                throw new PhalApi_Exception_BadRequest(T('用户未登录'), 6);
            }
        }
    }

}