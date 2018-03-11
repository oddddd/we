<?php
/**
 * 应用配置
 */

return array(
    'adminLog' =>  array(
        'BackRole.Login' => '后台用户登录',
        'BackBanner.InsertBanner' => '新建轮换板',
        'BackBanner.UpdateBanner' => '修改轮换板',
        'BackConsult.DeleteConsultAuthor' => '删除咨询作者',
        'BackConsult.DeleteRecommend' => '删除推荐模板',
        'BackConsult.InsertConsult' => '新建咨询',
        'BackConsult.InsertConsultAuthor' => '新建咨询作者',
        'BackConsult.InsertConsultClass' => '添加分类',
        'BackConsult.InsertNewConsult' => '新建快讯',
        'BackConsult.InsertRecommend' => '新建推荐模板',
        'BackConsult.InsertVideoConsult' => '新建视频',
        'BackConsult.LeagueInsertData' => '添加视频联赛',
        'BackConsult.LeagueUpdateData' => '修改视频赛事',
        'BackConsult.TeamInsertData' => '添加视频联赛队伍',
        'BackConsult.TeamUpdateData' => '修改视频联赛队伍',
        'BackConsult.UpdateConsult' => '咨询修改',
        'BackConsult.UpdateNewConsult' => '修改快讯',
        'BackConsult.UpdateRecommend' => '推荐模板修改',
        'BackConsult.UpdateVideoConsult' => '修改视频',
        'BackData.DeleteAdvertising' => '删除广告',
        'BackData.DeleteLiveStreamBind' => '删除直播绑定比赛',
        'BackData.InsertAdvertising' => '新建广告',
        'BackData.InsertComment' => '发送咨询评论',
        'BackData.MakeLiveStreamBind' => '直播绑定比赛',
        'BackData.SetAbout' => '关于修改保存',
        'BackData.SetAdvertisingSwitch' => '广告开关开启关闭',
        'BackData.UpMatchDetail' => '赛事补充数据',
        'BackData.UpdateAdvertising' => '修改广告',
        'BackRole.DeleteRole' => '删除角色',
        'BackRole.DeleteRolePerMission' => '用户删除角色绑定',
        'BackRole.MakeUser' => '新建后台用户',
        'BackRole.UpdateRole' => '修改角色',
        'BackRole.UpdateUser' => '修改后台用户',
        'BackUser.PushAllMsg' => '全部消息推送',
        'BackUser.PushOneMsg' => '单个消息推送',
        'BackUser.UpdateFeedback' => '处理意见',
        'BackUser.UserGag' => '用户禁言',
        'BackMoney.MoneyChange' => '修改用户钱包',
    ),
    'MoneyUseType' => [
        'Recharge' => 1, //用户充值
        'Take' => 2, //用户提现
        'Pay' => 3, //用户消费
        'AdminRecharge' => 4, //管理员充值
        'AdminTake' =>5, //管理员扣款
        'Refund' => 6, //提现失败退款
        'Exchange' => 7, //兑换其他
        'Task' => 8//任务赚取
    ],
    'taskConfig' => [
        'SignIn' => 2, //签到
        'NewbieTask' => 3, //新手任务
        'ShareMoney' => 4, //晒一晒
        'ShareRegister' => 5, //分享到朋友圈
        'RandRead' => 6, //随机阅读
        'CommentTask' => 7, //优秀评论
        'PushTask' => 8, //阅读推送
    ],
    'Rebate' => [
        'RebateCondition' => 60, //下级每日大于这个数字就会获得返利
        'FidRebate' => 5, // 父级可领取的次数
        'GFidRebate' => 2, // 祖父级可领取的次数
        'MoneyMin' => 3,//返利的金额
        'MoneyMax' => 8,//返利的金额
    ],
    'Wallet' => [
        'Gold' => 2, //金币钱包id
        'Money' => 1, //零钱钱包id
    ]
);