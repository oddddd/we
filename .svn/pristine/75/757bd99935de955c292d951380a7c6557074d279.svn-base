<?php
/**
 * 钱包后台管理接口
 * Created by PhpStorm.
 * User: dddd
 * Date: 2018/2/10
 * Time: 上午11:22
 */

class Api_BackMoney extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'MoneyLogList' => [
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true, 'desc' => '页码第一页传1'],
                'useType' => ['name' => 'useType', 'type' => 'int', 'require' => true, 'desc' => '使用类型 1用户充值 2用户提现 3用户消费 4管理员操作 5后台每日返利 6提现失败退款 7兑换其他货币'],
                'walletId' => ['name' => 'walletId', 'type' => 'int', 'require' => true, 'desc' => '钱包类型 1钱包 2金币钱包'],
                'userId' => ['name' => 'userId', 'type' => 'int','require' => true, 'desc' => '用户id'],
            ],
            'MoneyChange' => [
                'userId' => ['name' => 'userId', 'type' => 'int','require' => true, 'desc' => '用户id'],
                'walletId' => ['name' => 'walletId', 'type' => 'int', 'require' => true, 'desc' => '钱包类型 1钱包 2金币钱包'],
                'cMoney' => ['name' => 'cMoney', 'type' => 'string', 'require' => true, 'desc' => '变化的金额 加1元 为 1.00 减一元为 -1.00'],
                'note' => ['name' => 'note', 'type' => 'string','min' => 0,'max' => 250, 'require' => true, 'desc' => '备注'],
            ],
            'ExchangeMoney' => [

            ]
        );
    }

    /**
     * 用户钱包变化列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-02-10
     */
    public function MoneyLogList(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeMoney();
        $list = $domain->BackMoneyLogList($allParams);
        return $list;
    }

    /**
     * 管理员修改用户钱包金额或金币
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-02-10
     */
    public function MoneyChange(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeMoney();
        $list = $domain->MoneyChange($allParams);
        return $list;
    }

    /**
     * 用户金币自动返利
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-02-10
     */
    public function ExchangeMoney(){
        $domain = new Domain_WeMoney();
        $list = $domain->ExchangeMoney();
        return $list;
    }
}