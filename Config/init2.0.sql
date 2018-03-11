/*优秀评论金币任务 we_commentTask */
DROP TABLE IF EXISTS `we_commentTask`;
CREATE TABLE `we_commentTask` (
 `id` bigint(20) NOT NULL AUTO_INCREMENT,
 `fid` bigint(20) DEFAULT 0 COMMENT '评论id',
 `userId` bigint(20) DEFAULT 0 COMMENT '用户id',
 `day` varchar(10) DEFAULT '' COMMENT '奖励发放日期',
 `money` decimal(15,2) DEFAULT 0.00 comment '获取的金额',
 `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
 `type` tinyint(1) DEFAULT 0 comment '1咨询 2比赛',
 `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='优秀评论金币任务';

alter table we_newConsult add `gainId` varchar(50) DEFAULT NULL COMMENT '第三方id';
alter table we_newConsult add `gainUrl` varchar(150) DEFAULT NULL COMMENT '第三方url';