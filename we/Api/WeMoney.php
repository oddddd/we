<?php

/**
 * 钱包开放接口
 */
class Api_WeMoney extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'MoneyLogList' => [
                'page' => ['name' => 'page', 'type' => 'int', 'require' => true, 'desc' => '页码第一页传1'],
                'useType' => ['name' => 'useType', 'type' => 'int', 'require' => true, 'desc' => '使用类型 1用户充值 2用户提现 3用户消费 4管理员充值 5后台每日返利 6提现失败退款 7兑换其他货币'],
                'walletId' => ['name' => 'walletId', 'type' => 'int', 'require' => true, 'desc' => '钱包类型 1钱包 2金币钱包'],
            ],
        );
    }

    /**
     * 用户钱包变化列表
     * @return int code 1操作成功
     * @return string context 问题详细描述
     * @return array data 列表
     * @desc wjp 2018-02-08
     */
    public function MoneyLogList(){
        $allParams = $this -> allParams();
        $domain = new Domain_WeMoney();
        $list = $domain->MoneyLogList($allParams);
        return $list;
    }

}