/*
*数据库初始化操作
*/
CREATE DATABASE IF NOT EXISTS `we_base` DEFAULT CHARACTER SET utf8;
USE `we_base`;

/*表结构插入*/
DROP TABLE IF EXISTS `u_permission`;
CREATE TABLE `u_permission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `url` varchar(256) DEFAULT NULL COMMENT 'url地址',
  `name` varchar(64) DEFAULT NULL COMMENT 'url描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

/*Table structure for table `u_role` */
DROP TABLE IF EXISTS `u_role`;
CREATE TABLE `u_role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL COMMENT '角色名称',
  `type` varchar(10) DEFAULT NULL COMMENT '角色类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

/*Table structure for table `u_role_permission` */
DROP TABLE IF EXISTS `u_role_permission`;
CREATE TABLE `u_role_permission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rid` bigint(20) DEFAULT NULL COMMENT '角色ID',
  `pid` bigint(20) DEFAULT NULL COMMENT '权限ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `u_user` */
DROP TABLE IF EXISTS `u_user`;
CREATE TABLE `u_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(20) DEFAULT NULL COMMENT '用户昵称',
  `phone` varchar(20) NOT NULL COMMENT '联系人电话|登录帐号',
  `email` varchar(128) DEFAULT NULL COMMENT '邮箱',
  `pswd` varchar(32) DEFAULT NULL COMMENT '密码',
  `createTime` datetime DEFAULT NULL COMMENT '创建时间',
  `lastLoginTime` datetime DEFAULT NULL COMMENT '最后登录时间',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Table structure for table `u_log` */
DROP TABLE IF EXISTS `u_log`;
CREATE TABLE `u_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uId` varchar(20) DEFAULT NULL COMMENT '用户id',
  `content` varchar(100) NOT NULL COMMENT '内容',
  `api` varchar(50) DEFAULT NULL COMMENT '接口',
  `pid` varchar(30) DEFAULT NULL COMMENT '操作内容id',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Table structure for table `u_ip` */
DROP TABLE IF EXISTS `u_ip`;
CREATE TABLE `u_ip` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Ip` varchar(20) DEFAULT NULL COMMENT 'ip',
  `type` tinyint(1) NOT NULL COMMENT '操作类型',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*jc_user用户表 `we_user`*/
DROP TABLE IF EXISTS `we_user`;
CREATE TABLE `we_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nickName` VARCHAR (20) DEFAULT '运动迷' COMMENT '用户昵称',
  `pwd1` char(32) COMMENT '用户使用的密码',
  `pwd2` char(32) COMMENT '备用密码字段',
  `phone` char(20) comment '手机号',
  `identityCard` char(50) comment '身份证号',
  `realName` VARCHAR (20) comment '真实姓名',
  `photo` VARCHAR (200) comment '头像',
  `birthday` VARCHAR (20) comment '生日',
  `userIntroduce` VARCHAR(100) comment '用户简介',
  `userAddress` VARCHAR(100) comment '用户地址',
  `sex` tinyint(1) DEFAULT 0 comment '1男 2女 3未知',
  `gag` timestamp DEFAULT null comment '禁言的时间',
  `deviceId` VARCHAR (100) comment '设备id',
  `lastIp` varchar(46) comment '最后登录ip',
  `rIp` varchar(46) comment '注册的ip',
  `invitationCode` varchar(20) comment '邀请码',
  `wxOpenid` VARCHAR (50) comment '微信OpenId',
  `qqOpenid` VARCHAR (50) comment 'qqOpenId',
  `sinaOpenid` VARCHAR (50) comment '新浪openid',
  `pushClientid` VARCHAR (100) comment '推送唯一标识id',
  `pushButton` tinyint(1) DEFAULT '1' comment '是否接受推送 1接受 2不接受',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户';

/*we_banner首页轮播图 `we_banner`*/
DROP TABLE IF EXISTS `we_banner`;
CREATE TABLE `we_banner` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR (50) DEFAULT '' COMMENT '标题',
  `imgUrl` VARCHAR (100) DEFAULT '' COMMENT 'url',
  `url` VARCHAR (100) comment '跳转链接 如为 咨询，比赛 结果为主键id',
  `type` tinyint(1) DEFAULT 0 comment '打开方式 1咨询 2比赛 3网页 4快讯 5预约',
  `top` int(11) DEFAULT 0 COMMENT '置顶顺序',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='轮换板';

/*we_consult 咨询 `we_consult`*/
DROP TABLE IF EXISTS `we_consult`;
CREATE TABLE `we_consult` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultName` VARCHAR (50) DEFAULT '' COMMENT '咨询名称',
  `consultImg` VARCHAR (150) DEFAULT '' COMMENT '咨询图片',
  `video` VARCHAR (150) DEFAULT '' COMMENT '咨询视频链接',
  `consultDetail` text COMMENT '文本内容',
  `top` int(11) DEFAULT 0 COMMENT '置顶顺序',
  `num` int(11) DEFAULT 0 COMMENT '阅读人数',
  `classId` bigint(20) DEFAULT 0  COMMENT '分类ID',
  `authorId` bigint(20) DEFAULT 0  COMMENT '作者ID',
  `recommendID` bigint(20) DEFAULT 0  COMMENT '推荐模板ID',
  `hot` tinyint(1) DEFAULT 0 COMMENT '0不是热门 1热门',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='咨询';

/*we_consultClass 咨询分类 `we_consultClass`*/
DROP TABLE IF EXISTS `we_consultClass`;
CREATE TABLE `we_consultClass` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultClassName` VARCHAR (20) DEFAULT '' COMMENT '分类名称',
  `top` int(11) DEFAULT 0 COMMENT '置顶顺序',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='咨询分类';

/*we_consultAuthor 咨询作者 `we_consultAuthor`*/
DROP TABLE IF EXISTS `we_consultAuthor`;
CREATE TABLE `we_consultAuthor` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultAuthorName` VARCHAR (20) DEFAULT '' COMMENT '作者姓名',
  `bindUser` bigint(20) DEFAULT 0 COMMENT '绑定用户（预留）',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='咨询作者';

/*we_recommend 推荐 `we_recommend`*/
DROP TABLE IF EXISTS `we_recommend`;
CREATE TABLE `we_recommend` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `recommend` VARCHAR (150) DEFAULT '' COMMENT 'json',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='咨询分类';

/*we_consultClassBind 用户绑定的咨询分类 `we_consultClassBind`*/
DROP TABLE IF EXISTS `we_consultClassBind`;
CREATE TABLE `we_consultClassBind` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultClassId` VARCHAR (50) DEFAULT '' COMMENT '分类id ,号分割',
  `userId` bigint(20) DEFAULT 0 COMMENT '用户id',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='咨询分类绑定';

/*we_comment 评论 `we_comment`*/
DROP TABLE IF EXISTS `we_comment`;
CREATE TABLE `we_comment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fid` bigint(20) NOT NULL COMMENT '所属 id',
  `pid` bigint(20) COMMENT ' 预留id',
  `type` tinyint(1) NOT NULL COMMENT '1咨询 2视频 3快讯',
  `comment` VARCHAR (200) DEFAULT '' COMMENT '评论内容',
  `userId` bigint(20) DEFAULT 0 COMMENT '用户id',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='评论';

/*we_commentLike 评论点赞 `we_commentLike`*/
DROP TABLE IF EXISTS `we_commentLike`;
CREATE TABLE `we_commentLike` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fid` bigint(20) NOT NULL COMMENT '评论id',
  `pid` bigint(20) NOT NULL COMMENT ' 预留id',
  `type` tinyint(1) NOT NULL COMMENT '预留type',
  `userId` bigint(20) DEFAULT 0 COMMENT '用户id',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='评论点赞';

/*we_newConsult 快讯 `we_newConsult`*/
DROP TABLE IF EXISTS `we_newConsult`;
CREATE TABLE `we_newConsult` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultName` VARCHAR (50) DEFAULT '' COMMENT '咨询名称',
  `consultImg` VARCHAR (150) DEFAULT '' COMMENT '咨询图片',
  `consultBrief` VARCHAR (200) DEFAULT '' COMMENT '咨询简介',
  `consultDetail` text COMMENT '文本内容',
  `top` int(11) DEFAULT 0 COMMENT '置顶顺序',
  `num` int(11) DEFAULT 0 COMMENT '阅读人数',
  `classId` bigint(20) DEFAULT 0  COMMENT '分类ID',
  `authorId` bigint(20) DEFAULT 0  COMMENT '作者ID',
  `recommendID` bigint(20) DEFAULT 0  COMMENT '推荐模板ID',
  `hot` tinyint(1) DEFAULT 0 COMMENT '0不是热门 1热门',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='快讯';

/*we_newConsultClass 快讯分类 `we_newConsultClass`*/
DROP TABLE IF EXISTS `we_newConsultClass`;
CREATE TABLE `we_newConsultClass` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultClassName` VARCHAR (20) DEFAULT '' COMMENT '分类名称',
  `top` int(11) DEFAULT 0 COMMENT '置顶顺序',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='快讯分类';

/*we_videoConsult 视频咨询 `we_videoConsult`*/
DROP TABLE IF EXISTS `we_videoConsult`;
CREATE TABLE `we_videoConsult` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultName` VARCHAR (50) DEFAULT '' COMMENT '咨询名称',
  `consultImg` VARCHAR (150) DEFAULT '' COMMENT '咨询图片',
  `video` VARCHAR (150) DEFAULT '' COMMENT '咨询视频链接',
  `consultDetail` text COMMENT '文本内容',
  `team` VARCHAR (150) DEFAULT '' COMMENT 'json {队伍1id:比分,队伍2id:比分}',
  `leagueId` bigint(20) DEFAULT 0 COMMENT '联盟id',
  `top` int(11) DEFAULT 0 COMMENT '置顶顺序',
  `num` int(11) DEFAULT 0 COMMENT '阅读人数',
  `classId` bigint(20) DEFAULT 0  COMMENT '分类ID',
  `authorId` bigint(20) DEFAULT 0  COMMENT '作者ID',
  `recommendID` bigint(20) DEFAULT 0  COMMENT '推荐模板ID',
  `hot` tinyint(1) DEFAULT 0 COMMENT '0不是热门 1热门',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='视频咨询';

/*we_videoConsultClass 视频咨询分类 `we_videoConsultClass`*/
DROP TABLE IF EXISTS `we_videoConsultClass`;
CREATE TABLE `we_videoConsultClass` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultClassName` VARCHAR (20) DEFAULT '' COMMENT '分类名称',
  `top` int(11) DEFAULT 0 COMMENT '置顶顺序',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='视频咨询分类';

/*we_league 联赛 `we_league`*/
DROP TABLE IF EXISTS `we_league`;
CREATE TABLE `we_league` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `leagueName` VARCHAR (20) DEFAULT '' COMMENT '联赛名称',
  `leagueImg` VARCHAR (100) DEFAULT '' COMMENT 'url',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='联赛';

/*we_team 队伍 `we_team`*/
DROP TABLE IF EXISTS `we_team`;
CREATE TABLE `we_team` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `teamName` VARCHAR (20) DEFAULT '' COMMENT '队伍名称',
  `teamImg` VARCHAR (100) DEFAULT '' COMMENT '队伍logo',
  `pid` bigint(20) DEFAULT '0' COMMENT '所属联赛',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='队伍';

/*we_code 队伍 `we_code`*/
DROP TABLE IF EXISTS `we_team`;
CREATE TABLE `we_team` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `teamName` VARCHAR (20) DEFAULT '' COMMENT '队伍名称',
  `teamImg` VARCHAR (100) DEFAULT '' COMMENT '队伍logo',
  `pid` bigint(20) DEFAULT '0' COMMENT '所属联赛',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='队伍';

/*we_msg 队伍 `we_msg`*/
DROP TABLE IF EXISTS `we_msg`;
CREATE TABLE `we_msg` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `msgTitle` VARCHAR (20) DEFAULT '' COMMENT '消息标题',
  `msgText` VARCHAR (100) DEFAULT '' COMMENT '消息内容',
  `transmission` VARCHAR(50) DEFAULT '' COMMENT '透传内容',
  `type` tinyint(1) DEFAULT 0 COMMENT '1后台群推消息 2后台个推 3预约推送',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0删除',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='消息';

/*we_bzy 赛程 `we_bzy`*/
DROP TABLE IF EXISTS `we_bzy`;
CREATE TABLE `we_bzy` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `matchNum` VARCHAR (30) DEFAULT '' COMMENT '赛事编号',
  `phase` VARCHAR (30) DEFAULT '' COMMENT '期号，竞彩期号即八位日期',
  `matchName` VARCHAR(20) DEFAULT '' COMMENT '竞彩编号，格式为“周一001“',
  `kickoffTime` timestamp DEFAULT '' COMMENT '比赛开赛时间',
  `saleEndTime` VARCHAR(20) DEFAULT '' COMMENT '比赛销售截止时间',
  `homeId` INT (11) COMMENT '主队id，球队的唯一识别码',
  `homeName` VARCHAR(20) DEFAULT '' COMMENT '主队名称',
  `homeLogo` VARCHAR(100) DEFAULT '' COMMENT '主队logo',
  `homePoint` int(11) COMMENT '主队得分',
  `homeLike` int(11) COMMENT '主队点赞数',
  `awayId` INT (11) COMMENT '客队id，球队的唯一识别码',
  `awayName` VARCHAR(20) DEFAULT '' COMMENT '客队名称',
  `awayLogo` VARCHAR(100) DEFAULT '' COMMENT '客队logo',
  `awayPoint` int(11) COMMENT '客队得分',
  `awayLike` int(11) COMMENT '客队点赞数',
  `leagueId` INT (11) COMMENT '联赛id',
  `leagueName` VARCHAR(20) DEFAULT '' COMMENT '联赛名称',
  `leagueColor` VARCHAR(100) DEFAULT '' COMMENT '联赛颜色',
  `leagueType` VARCHAR(100) DEFAULT '' COMMENT '联赛类型 1足球 2篮球',
  `isEnd` tinyint(1) DEFAULT 0  COMMENT '是否结束',
  `liveNum` INT(11) DEFAULT 0  COMMENT '直播人数',
  `liveName` VARCHAR (50) DEFAULT 0  COMMENT '直播名称',
  `liveId` bigint(20) DEFAULT 0  COMMENT '直播id',
  `homeWin` INT (11) COMMENT '主队胜率',
  `awayWin` INT (11) COMMENT '客队胜率',
  `deuce`  INT (11) COMMENT '平手概率',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='消息';

/*we_matchNews 赛程爆料 `we_matchNews`*/
DROP TABLE IF EXISTS `we_matchNews`;
CREATE TABLE `we_matchNews` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `newsId` VARCHAR (20) DEFAULT '' COMMENT '新闻id',
  `title` VARCHAR (150) DEFAULT '' COMMENT '新闻标题',
  `matchNum` VARCHAR (30) DEFAULT '' COMMENT '赛事编号',
  `phase` VARCHAR (30) DEFAULT '' COMMENT '期号，竞彩期号即八位日期',
  `content` text COMMENT '爆料内容',
  `publishTime` timestamp COMMENT '发布时间',
  `authorName` VARCHAR(50) DEFAULT '' COMMENT '爆料员名字',
  `newsLevel` VARCHAR(20) COMMENT '爆料等级',
  `newsType` tinyint(1) COMMENT '爆料等级，1：等级一、2：等级二、3：等级三',
  `labels` VARCHAR(20) DEFAULT '' COMMENT '标签',
  `thumbnail` VARCHAR(200) DEFAULT '' COMMENT '缩略图',
  `teamType` tinyint(1) COMMENT '主客队类型，1：主队、2：客队',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='爆料';

/*we_matchBespeak 赛程预约 `we_matchBespeak`*/
DROP TABLE IF EXISTS `we_matchBespeak`;
CREATE TABLE `we_matchBespeak` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fid` bigint(20) DEFAULT 0 COMMENT '赛con事id',
  `userId` bigint(20) DEFAULT 0 COMMENT '用户id',
  `isPush1` tinyint(1) DEFAULT 0 COMMENT '是否推送 1已推送 0推送',
  `isPush2` tinyint(1) DEFAULT 0 COMMENT '是否推送 1已推送 0推送',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='赛程预约';

/*we_matchComment 队伍 `we_matchComment`*/
DROP TABLE IF EXISTS `we_matchComment`;
CREATE TABLE `we_matchComment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fid` bigint(20) COMMENT '赛事id',
  `userId` bigint(20) COMMENT '用户id',
  `comment` VARCHAR (100) DEFAULT '' COMMENT '评论内容',
  `type` tinyint(1) DEFAULT 0 COMMENT '1用户评论 2主持人评论',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0删除',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='赛事评论';

/*we_config 队伍 `we_config`*/
DROP TABLE IF EXISTS `we_config`;
CREATE TABLE `we_config` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `configName` VARCHAR(20) COMMENT '配置名称',
  `configData` text COMMENT '配置内容',
  `type` tinyint(1) DEFAULT 0 COMMENT '配置类型预留',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0删除',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='配置';

/*we_advertising 广告 `we_advertising`*/
DROP TABLE IF EXISTS `we_advertising`;
CREATE TABLE `we_advertising` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR (50) DEFAULT '' COMMENT '标题',
  `content` VARCHAR (150) DEFAULT '' COMMENT '内容',
  `imgUrl` VARCHAR (100) DEFAULT '' COMMENT 'url',
  `url` VARCHAR (100) comment '跳转链接',
  `type` tinyint(1) DEFAULT 0 comment '打开方式 1咨询 2比赛 3网页 4快讯 5预约',
  `position` int(11) DEFAULT 0 COMMENT '入口位置 1 咨询详情广告 2 赛事竞猜广告 3 退出app广告 4咨询列表随机广告',
  `top` int(11) DEFAULT 0 COMMENT '置顶顺序',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0删除',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='广告';

/*we_advertisingLog 广告 `we_advertisingLog`*/
DROP TABLE IF EXISTS `we_advertisingLog`;
CREATE TABLE `we_advertisingLog` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` VARCHAR (20) comment '日期',
  `fid` bigint(20) COMMENT '广告id',
  `num` int(11) DEFAULT 0 COMMENT '点击次数',
  `type` tinyint(1) DEFAULT 0 comment '1广告 ',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='广告点击log';

/*we_feedback 意见反馈 `we_feedback`*/
DROP TABLE IF EXISTS `we_feedback`;
CREATE TABLE `we_feedback` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) COMMENT '用户id',
  `phone` VARCHAR (20) DEFAULT '' COMMENT '联系方式',
  `content` VARCHAR (150) DEFAULT '' COMMENT '内容',
  `backContent` VARCHAR (150) DEFAULT '' COMMENT '反馈内容',
  `type` tinyint(1) DEFAULT 0 comment '状态 1未处理 2已处理',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0删除',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='意见反馈';

/*we_nbaBind 队伍 `we_nbaBind`*/
DROP TABLE IF EXISTS `we_nbaBind`;
CREATE TABLE `we_nbaBind` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `teamName` VARCHAR (20) DEFAULT '' COMMENT '队伍名称',
  `bzyId` VARCHAR (20) DEFAULT '0' COMMENT '章鱼的队伍id',
  `okooId` VARCHAR (20) DEFAULT '0' COMMENT '澳客的队伍id',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='nba队伍绑定表';

/*we_nbaMatchHistory nba比赛记录 `we_nbaMatchHistory`*/
DROP TABLE IF EXISTS `we_nbaMatchHistory`;
CREATE TABLE `we_nbaMatchHistory` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `matchId` VARCHAR (20) COMMENT '比赛id',
  `matchTime` timestamp COMMENT '比赛时间',
  `hId` VARCHAR (20) COMMENT '主队澳客id',
  `hName` VARCHAR (20) COMMENT '主队队名',
  `hPoint` VARCHAR (20) COMMENT '主队队名',
  `aId` VARCHAR (20) COMMENT '客队澳客id',
  `aName` VARCHAR (20) COMMENT '客队队名',
  `aPoint` VARCHAR (20) COMMENT '客队队名',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Nba历史比赛';

/*we_nbaMatchPlayer nba队员记录 `we_nbaMatchPlayer`*/
DROP TABLE IF EXISTS `we_nbaMatchPlayer`;
CREATE TABLE `we_nbaMatchPlayer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `playerId` VARCHAR (20) COMMENT '队员id',
  `playerName` VARCHAR (20) COMMENT '队员名称',
  `isMainForce` tinyint (1) COMMENT '是否主力',
  `enter` VARCHAR (10) COMMENT '出场数',
  `first` VARCHAR (10) COMMENT '先发次数',
  `onLine` VARCHAR (10) COMMENT '在场时间',
  `hitRate` VARCHAR (10) COMMENT '命中率',
  `threePoints` VARCHAR (10) COMMENT '三分命中率',
  `foulShot` VARCHAR (10) COMMENT '罚球命中率',
  `backboard` VARCHAR (10) COMMENT '篮板',
  `assists` VARCHAR (10) COMMENT '助攻',
  `steals` VARCHAR (10) COMMENT '抢断',
  `blockShot` VARCHAR (10) COMMENT '盖帽',
  `miss` VARCHAR (10) COMMENT '失误',
  `foul` VARCHAR (10) COMMENT '犯规',
  `score` VARCHAR (10) COMMENT '得分',
  `teamId` VARCHAR (10) COMMENT '队伍id',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='nba队员记录';

/*we_liveStream 直播流模板 `we_liveStream`*/
DROP TABLE IF EXISTS `we_liveStream`;
CREATE TABLE `we_liveStream` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `liveUrl` VARCHAR (200) COMMENT '直播流',
  `liveName` VARCHAR (50) DEFAULT 0  COMMENT '直播名称',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0删除',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='直播流';

/*we_liveStreamBind 直播流绑定 `we_liveStreamBind`*/
DROP TABLE IF EXISTS `we_liveStreamBind`;
CREATE TABLE `we_liveStreamBind` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `liveUrl` VARCHAR (200) COMMENT '直播流',
  `liveName` VARCHAR (50) DEFAULT 0  COMMENT '直播名称',
  `fid` VARCHAR (10) COMMENT '所属赛事id',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='直播流';

/*用户钱包 we_userWallet */
DROP TABLE IF EXISTS `we_userWallet`;
CREATE TABLE `we_userWallet` (
 `id` bigint(20) NOT NULL AUTO_INCREMENT,
 `userId` bigint(20) NOT NULL COMMENT '用户id',
 `walletId` tinyint (1) DEFAULT 1 NOT NULL COMMENT '钱包类型 1钱包 2金币钱包',
 `money` decimal(15,2) NOT NULL COMMENT '金额',
 `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:无效',
 `updateTime` timestamp  NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
 `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户钱包';

/*用户钱包变化表 we_moneyLog */
DROP TABLE IF EXISTS `we_moneyLog`;
CREATE TABLE `we_moneyLog` (
 `id` bigint(20) NOT NULL AUTO_INCREMENT,
 `userId` bigint(20) NOT NULL COMMENT '用户id',
 `useType` tinyint(1) NOT NULL COMMENT '使用类型 1用户充值 2用户提现 3用户消费 4管理员操作 5后台每日返利 6提现失败退款 7兑换其他货币  8任务',
 `sMoney` decimal(15,2) DEFAULT 0.00 comment '修改前金额',
 `cMoney` decimal(15,2) DEFAULT 0.00 comment '变化金额',
 `eMoney` decimal(15,2) DEFAULT 0.00 comment '修改后金额',
 `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
 `note` VARCHAR (250) DEFAULT '' COMMENT '后台备注',
 `updateTime` timestamp  NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
 `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户钱包变化表';

/*用户钱包金币兑换表 we_exchangeLog */
DROP TABLE IF EXISTS `we_exchangeLog`;
CREATE TABLE `we_exchangeLog` (
 `id` bigint(20) NOT NULL AUTO_INCREMENT,
 `day` varchar(10) DEFAULT '',
 `goldMoney` decimal(15,2) DEFAULT 0.00 comment '当日用来兑换的金币',
 `allMoney` decimal(15,2) DEFAULT 0.00 comment '当日兑换的钱',
 `useMoney` decimal(15,2) DEFAULT 0.00 comment '当日实际使用的钱',
 `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户钱包金币兑换表';


/*用户签到赚取金币 we_signIn */
DROP TABLE IF EXISTS `we_signIn`;
CREATE TABLE `we_signIn` (
 `id` bigint(20) NOT NULL AUTO_INCREMENT,
 `userId` bigint(20) DEFAULT 0 COMMENT '用户id',
 `day` varchar(10) DEFAULT '' COMMENT '签到日期',
 `money` decimal(15,2) DEFAULT 0.00 comment '领取的金额',
 `nextDay` int(11) DEFAULT 1 COMMENT '连续的第几天签到',
 `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
 `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户钱包金币兑换表';

/*宝箱赚取金币记录 we_chest */
DROP TABLE IF EXISTS `we_chest`;
CREATE TABLE `we_chest` (
 `id` bigint(20) NOT NULL AUTO_INCREMENT,
 `userId` bigint(20) DEFAULT 0 COMMENT '用户id',
 `day` varchar(10) DEFAULT '' COMMENT '签到日期',
 `getTime` int(11) DEFAULT 0 COMMENT '领取时间戳',
 `money` decimal(15,2) DEFAULT 0.00 comment '领取的金额',
 `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
 `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户签到赚取金币';

/*用户任务完成表 we_task */
DROP TABLE IF EXISTS `we_task`;
CREATE TABLE `we_task` (
 `id` bigint(20) NOT NULL AUTO_INCREMENT,
 `userId` bigint(20) DEFAULT 0 COMMENT '用户id',
 `day` varchar(10) DEFAULT '' COMMENT '完成日期',
 `money` decimal(15,2) DEFAULT 0.00 comment '领取的金额',
 `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
 `taskType` tinyint(1) DEFAULT 0 comment '任务类型 2签到 3新手任务 4晒一晒 5分享到朋友圈 6随机阅读 7优秀评论 8阅读推送',
 `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户任务完成表';

/*用户阅读任务记录 we_readTask */
DROP TABLE IF EXISTS `we_readTask`;
CREATE TABLE `we_readTask` (
 `id` bigint(20) NOT NULL AUTO_INCREMENT,
 `userId` bigint(20) DEFAULT 0 COMMENT '用户id',
 `day` varchar(10) DEFAULT '' COMMENT '完成日期',
 `nextDay` int(11) DEFAULT 1 COMMENT '是的连续第几天',
 `loginDay` int(11) DEFAULT 1 COMMENT '是注册以来的第几天',
 `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户阅读任务记录';

/*用户获取下级返利 we_rebate */
DROP TABLE IF EXISTS `we_rebate`;
CREATE TABLE `we_rebate` (
 `id` bigint(20) NOT NULL AUTO_INCREMENT,
 `userId` bigint(20) DEFAULT 0 COMMENT '用户id',
 `sonId` bigint(20) DEFAULT 0 COMMENT '儿子用户id',
 `grandSonId` bigint(20) DEFAULT 0 COMMENT '孙子用户id',
 `day` varchar(10) DEFAULT '' COMMENT '获取返利日期',
 `money` decimal(15,2) DEFAULT 0.00 comment '获取的金额',
 `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
 `rebateType` tinyint(1) DEFAULT 0 comment '返利类型 1下级注册返利 2下级5次任务返利 3孙子级任务返利 4唤醒返利',
 `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户获取下级返利';

/*用户分享记录表 we_share */
DROP TABLE IF EXISTS `we_share`;
CREATE TABLE `we_share` (
 `id` bigint(20) NOT NULL AUTO_INCREMENT,
 `userId` bigint(20) DEFAULT 0 COMMENT '用户id',
 `url` varchar(50) DEFAULT '' COMMENT '分享的链接',
 `day` varchar(10) DEFAULT '' COMMENT '分享的日期',
 `openNum` INT(11) DEFAULT 0 COMMENT '被打开过多少次',
 `type` tinyint(1) DEFAULT 0 comment '1咨询 2比赛 3网页 4快讯 5预约',
 `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户获取下级返利';

/*分享注册页到朋友圈 we_shareRegister */
DROP TABLE IF EXISTS `we_shareRegister`;
CREATE TABLE `we_shareRegister` (
 `id` bigint(20) NOT NULL AUTO_INCREMENT,
 `userId` bigint(20) DEFAULT 0 COMMENT '用户id',
 `day` varchar(10) DEFAULT '' COMMENT '领取日期',
 `getTime` int(11) DEFAULT 0 COMMENT '领取时间戳',
 `money` decimal(15,2) DEFAULT 0.00 comment '领取的金额',
 `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
 `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='分享注册页到朋友圈';




/*
 Navicat Premium Data Transfer

 Source Server         : 59.110.242.8
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : 59.110.242.8:3306
 Source Schema         : we_base

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 02/03/2018 11:54:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for u_ip
-- ----------------------------
DROP TABLE IF EXISTS `u_ip`;
CREATE TABLE `u_ip` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Ip` varchar(20) DEFAULT NULL COMMENT 'ip',
  `type` tinyint(1) NOT NULL COMMENT '操作类型',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for u_log
-- ----------------------------
DROP TABLE IF EXISTS `u_log`;
CREATE TABLE `u_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uId` varchar(20) DEFAULT NULL COMMENT '用户id',
  `content` varchar(100) NOT NULL COMMENT '内容',
  `api` varchar(50) DEFAULT NULL COMMENT '接口',
  `pid` varchar(30) DEFAULT NULL COMMENT '操作内容id',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for u_permission
-- ----------------------------
DROP TABLE IF EXISTS `u_permission`;
CREATE TABLE `u_permission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `url` varchar(256) DEFAULT NULL COMMENT 'url地址',
  `name` varchar(64) DEFAULT NULL COMMENT 'url描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for u_role
-- ----------------------------
DROP TABLE IF EXISTS `u_role`;
CREATE TABLE `u_role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL COMMENT '角色名称',
  `type` varchar(10) DEFAULT NULL COMMENT '角色类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for u_role_permission
-- ----------------------------
DROP TABLE IF EXISTS `u_role_permission`;
CREATE TABLE `u_role_permission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rid` bigint(20) DEFAULT NULL COMMENT '角色ID',
  `pid` bigint(20) DEFAULT NULL COMMENT '权限ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for u_user
-- ----------------------------
DROP TABLE IF EXISTS `u_user`;
CREATE TABLE `u_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(20) DEFAULT NULL COMMENT '用户昵称',
  `phone` varchar(20) NOT NULL COMMENT '联系人电话|登录帐号',
  `email` varchar(128) DEFAULT NULL COMMENT '邮箱',
  `pswd` varchar(32) DEFAULT NULL COMMENT '密码',
  `createTime` datetime DEFAULT NULL COMMENT '创建时间',
  `lastLoginTime` datetime DEFAULT NULL COMMENT '最后登录时间',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_token
-- ----------------------------
DROP TABLE IF EXISTS `user_token`;
CREATE TABLE `user_token` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL COMMENT '用户ID',
  `category` int(1) NOT NULL COMMENT 'token类别',
  `tokenCode` varchar(100) NOT NULL COMMENT 'token Code',
  `createTime` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=705 DEFAULT CHARSET=utf8 COMMENT='token管理表';

-- ----------------------------
-- Table structure for we_advertising
-- ----------------------------
DROP TABLE IF EXISTS `we_advertising`;
CREATE TABLE `we_advertising` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '' COMMENT '标题',
  `content` varchar(150) DEFAULT '' COMMENT '内容',
  `imgUrl` varchar(100) DEFAULT '' COMMENT 'url',
  `url` varchar(100) DEFAULT NULL COMMENT '跳转链接',
  `type` tinyint(1) DEFAULT '0' COMMENT '//打开方式 1咨询 2比赛 3网页 4快讯 5预约',
  `position` int(11) DEFAULT '0' COMMENT '入口位置 1 咨询详情广告 2 赛事竞猜广告 3 退出app广告 4咨询列表随机广告',
  `top` int(11) DEFAULT '0' COMMENT '置顶顺序',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0删除',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COMMENT='广告';

-- ----------------------------
-- Table structure for we_advertisingLog
-- ----------------------------
DROP TABLE IF EXISTS `we_advertisingLog`;
CREATE TABLE `we_advertisingLog` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) DEFAULT NULL COMMENT '日期',
  `fid` bigint(20) DEFAULT NULL COMMENT '广告id',
  `num` int(11) DEFAULT '0' COMMENT '点击次数',
  `type` tinyint(1) DEFAULT '0' COMMENT '1广告 ',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='广告点击log';

-- ----------------------------
-- Table structure for we_banner
-- ----------------------------
DROP TABLE IF EXISTS `we_banner`;
CREATE TABLE `we_banner` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `imgUrl` varchar(100) DEFAULT '' COMMENT 'url',
  `url` varchar(100) DEFAULT NULL COMMENT '跳转链接 如为 咨询，比赛 结果为主键id',
  `type` tinyint(1) DEFAULT '0' COMMENT '//打开方式 1咨询 2视频 3网页 4快讯 5赛事',
  `top` int(11) DEFAULT '0' COMMENT '置顶顺序',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COMMENT='轮换板';

-- ----------------------------
-- Table structure for we_bzy
-- ----------------------------
DROP TABLE IF EXISTS `we_bzy`;
CREATE TABLE `we_bzy` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `matchNum` varchar(30) DEFAULT '' COMMENT '赛事编号',
  `phase` varchar(30) DEFAULT '' COMMENT '期号，竞彩期号即八位日期',
  `matchName` varchar(20) DEFAULT '' COMMENT '竞彩编号，格式为“周一001“',
  `kickoffTime` timestamp NULL DEFAULT NULL COMMENT '比赛开赛时间',
  `saleEndTime` timestamp NULL DEFAULT NULL COMMENT '比赛销售截止时间',
  `homeId` int(11) DEFAULT NULL COMMENT '主队id，球队的唯一识别码',
  `homeName` varchar(20) DEFAULT '' COMMENT '主队名称',
  `homeLogo` varchar(100) DEFAULT '' COMMENT '主队logo',
  `homePoint` int(11) DEFAULT NULL COMMENT '主队得分',
  `homeLike` int(11) DEFAULT NULL COMMENT '主队点赞数',
  `awayId` int(11) DEFAULT NULL COMMENT '客队id，球队的唯一识别码',
  `awayName` varchar(20) DEFAULT '' COMMENT '客队名称',
  `awayLogo` varchar(100) DEFAULT '' COMMENT '客队logo',
  `awayPoint` int(11) DEFAULT NULL COMMENT '客队得分',
  `awayLike` int(11) DEFAULT NULL COMMENT '客队点赞数',
  `leagueId` int(11) DEFAULT NULL COMMENT '联赛id',
  `leagueName` varchar(20) DEFAULT '' COMMENT '联赛名称',
  `leagueColor` varchar(100) DEFAULT '' COMMENT '联赛颜色',
  `leagueType` varchar(100) DEFAULT '' COMMENT '联赛类型 1足球 2篮球',
  `isEnd` tinyint(1) DEFAULT '0' COMMENT '是否结束',
  `liveNum` int(11) DEFAULT '0' COMMENT '直播人数',
  `liveName` varchar(50) DEFAULT '0' COMMENT '直播名称',
  `liveId` int(11) DEFAULT '0' COMMENT '直播id',
  `homeWin` int(11) DEFAULT '0' COMMENT '主队胜率',
  `awayWin` int(11) DEFAULT '0' COMMENT '客队胜率',
  `deuce` int(11) DEFAULT '0' COMMENT '和局概率',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1789 DEFAULT CHARSET=utf8mb4 COMMENT='消息';

-- ----------------------------
-- Table structure for we_chest
-- ----------------------------
DROP TABLE IF EXISTS `we_chest`;
CREATE TABLE `we_chest` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) DEFAULT '0' COMMENT '用户id',
  `day` varchar(10) DEFAULT '' COMMENT '签到日期',
  `getTime` int(11) DEFAULT '0' COMMENT '领取时间戳',
  `money` decimal(15,2) DEFAULT '0.00' COMMENT '领取的金额',
  `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='用户签到赚取金币';

-- ----------------------------
-- Table structure for we_comment
-- ----------------------------
DROP TABLE IF EXISTS `we_comment`;
CREATE TABLE `we_comment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fid` bigint(20) NOT NULL COMMENT '所属 id',
  `pid` bigint(20) DEFAULT NULL COMMENT ' 预留id',
  `type` tinyint(1) NOT NULL COMMENT '1咨询 2视频 3快讯',
  `comment` varchar(200) DEFAULT '' COMMENT '评论内容',
  `userId` bigint(20) DEFAULT '0' COMMENT '用户id',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=239 DEFAULT CHARSET=utf8mb4 COMMENT='评论';

-- ----------------------------
-- Table structure for we_commentLike
-- ----------------------------
DROP TABLE IF EXISTS `we_commentLike`;
CREATE TABLE `we_commentLike` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fid` bigint(20) NOT NULL COMMENT '评论id',
  `pid` bigint(20) NOT NULL COMMENT ' 预留id',
  `type` tinyint(1) NOT NULL COMMENT '预留type',
  `userId` bigint(20) DEFAULT '0' COMMENT '用户id',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COMMENT='评论点赞';

-- ----------------------------
-- Table structure for we_config
-- ----------------------------
DROP TABLE IF EXISTS `we_config`;
CREATE TABLE `we_config` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `configName` varchar(20) DEFAULT NULL COMMENT '配置名称',
  `configData` text COMMENT '配置内容',
  `type` tinyint(1) DEFAULT '0' COMMENT '配置类型预留',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0删除',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COMMENT='配置';

-- ----------------------------
-- Table structure for we_consult
-- ----------------------------
DROP TABLE IF EXISTS `we_consult`;
CREATE TABLE `we_consult` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultName` varchar(50) DEFAULT '' COMMENT '咨询名称',
  `consultImg` varchar(150) DEFAULT '' COMMENT '咨询图片',
  `video` varchar(150) DEFAULT NULL COMMENT '咨询视频链接',
  `consultDetail` text COMMENT '文本内容',
  `top` int(11) DEFAULT '0' COMMENT '置顶顺序',
  `num` int(11) DEFAULT '0' COMMENT '阅读人数',
  `classId` bigint(20) DEFAULT '0' COMMENT '分类ID',
  `authorId` bigint(20) DEFAULT '0' COMMENT '作者ID',
  `recommendId` bigint(20) DEFAULT '0' COMMENT '推荐模板ID',
  `hot` tinyint(1) DEFAULT '0' COMMENT '0不是热门 1热门',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COMMENT='咨询';

-- ----------------------------
-- Table structure for we_consultAuthor
-- ----------------------------
DROP TABLE IF EXISTS `we_consultAuthor`;
CREATE TABLE `we_consultAuthor` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultAuthorName` varchar(20) DEFAULT '' COMMENT '作者姓名',
  `bindUser` bigint(20) DEFAULT '0' COMMENT '绑定用户（预留）',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='咨询作者';

-- ----------------------------
-- Table structure for we_consultClass
-- ----------------------------
DROP TABLE IF EXISTS `we_consultClass`;
CREATE TABLE `we_consultClass` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultClassName` varchar(20) DEFAULT '' COMMENT '分类名称',
  `top` int(11) DEFAULT '0' COMMENT '置顶顺序',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COMMENT='咨询分类';

-- ----------------------------
-- Table structure for we_consultClassBind
-- ----------------------------
DROP TABLE IF EXISTS `we_consultClassBind`;
CREATE TABLE `we_consultClassBind` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultClassId` varchar(50) DEFAULT '' COMMENT '分类id ,号分割',
  `userId` bigint(20) DEFAULT '0' COMMENT '用户id',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COMMENT='咨询分类绑定';

-- ----------------------------
-- Table structure for we_exchangeLog
-- ----------------------------
DROP TABLE IF EXISTS `we_exchangeLog`;
CREATE TABLE `we_exchangeLog` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `day` varchar(10) DEFAULT '',
  `goldMoney` decimal(15,2) DEFAULT '0.00' COMMENT '当日用来兑换的金币',
  `allMoney` decimal(15,2) DEFAULT '0.00' COMMENT '当日兑换的钱',
  `useMoney` decimal(15,2) DEFAULT '0.00' COMMENT '当日实际使用的钱',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COMMENT='用户钱包金币兑换表';

-- ----------------------------
-- Table structure for we_feedback
-- ----------------------------
DROP TABLE IF EXISTS `we_feedback`;
CREATE TABLE `we_feedback` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) DEFAULT NULL COMMENT '用户id',
  `phone` varchar(20) DEFAULT NULL COMMENT '联系方式',
  `content` varchar(150) DEFAULT '' COMMENT '内容',
  `backContent` varchar(150) DEFAULT '' COMMENT '反馈内容',
  `type` tinyint(1) DEFAULT '0' COMMENT '状态 1未处理 2已处理',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0删除',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COMMENT='意见反馈';

-- ----------------------------
-- Table structure for we_league
-- ----------------------------
DROP TABLE IF EXISTS `we_league`;
CREATE TABLE `we_league` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `leagueName` varchar(20) DEFAULT '' COMMENT '联赛名称',
  `leagueImg` varchar(100) DEFAULT '' COMMENT 'url',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='联赛';

-- ----------------------------
-- Table structure for we_liveStream
-- ----------------------------
DROP TABLE IF EXISTS `we_liveStream`;
CREATE TABLE `we_liveStream` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `liveUrl` varchar(200) DEFAULT NULL COMMENT '直播流',
  `liveName` varchar(50) DEFAULT '0' COMMENT '直播名称',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0删除',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='直播流';

-- ----------------------------
-- Table structure for we_liveStreamBind
-- ----------------------------
DROP TABLE IF EXISTS `we_liveStreamBind`;
CREATE TABLE `we_liveStreamBind` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `liveUrl` varchar(200) DEFAULT NULL COMMENT '直播流',
  `liveName` varchar(50) DEFAULT '0' COMMENT '直播名称',
  `fid` varchar(10) DEFAULT NULL COMMENT '所属赛事id',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COMMENT='直播流';

-- ----------------------------
-- Table structure for we_matchBespeak
-- ----------------------------
DROP TABLE IF EXISTS `we_matchBespeak`;
CREATE TABLE `we_matchBespeak` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fid` bigint(20) DEFAULT '0' COMMENT '赛事id',
  `userId` bigint(20) DEFAULT '0' COMMENT '用户id',
  `isPush1` tinyint(1) DEFAULT '0' COMMENT '是否推送 1已推送 0推送',
  `isPush2` tinyint(1) DEFAULT '0',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COMMENT='赛程预约';

-- ----------------------------
-- Table structure for we_matchComment
-- ----------------------------
DROP TABLE IF EXISTS `we_matchComment`;
CREATE TABLE `we_matchComment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fid` bigint(20) DEFAULT NULL COMMENT '赛事id',
  `userId` bigint(20) DEFAULT NULL COMMENT '用户id',
  `comment` varchar(100) DEFAULT '' COMMENT '评论内容',
  `type` tinyint(1) DEFAULT '0' COMMENT '1用户评论 2主持人评论',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0删除',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COMMENT='赛事评论';

-- ----------------------------
-- Table structure for we_matchNews
-- ----------------------------
DROP TABLE IF EXISTS `we_matchNews`;
CREATE TABLE `we_matchNews` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `newsId` varchar(20) DEFAULT '' COMMENT '新闻id',
  `title` varchar(150) DEFAULT '' COMMENT '新闻标题',
  `matchNum` varchar(30) DEFAULT '' COMMENT '赛事编号',
  `phase` varchar(30) DEFAULT '' COMMENT '期号，竞彩期号即八位日期',
  `content` text COMMENT '爆料内容',
  `publishTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '发布时间',
  `authorName` varchar(50) DEFAULT '' COMMENT '爆料员名字',
  `newsLevel` varchar(20) DEFAULT NULL COMMENT '爆料等级',
  `newsType` tinyint(1) DEFAULT NULL COMMENT '爆料等级，1：等级一、2：等级二、3：等级三',
  `labels` varchar(20) DEFAULT '' COMMENT '标签',
  `thumbnail` varchar(200) DEFAULT '' COMMENT '缩略图',
  `teamType` tinyint(1) DEFAULT NULL COMMENT '主客队类型，1：主队、2：客队',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=356 DEFAULT CHARSET=utf8mb4 COMMENT='爆料';

-- ----------------------------
-- Table structure for we_moneyLog
-- ----------------------------
DROP TABLE IF EXISTS `we_moneyLog`;
CREATE TABLE `we_moneyLog` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL COMMENT '用户id',
  `useType` tinyint(1) NOT NULL COMMENT '使用类型 1用户充值 2用户提现 3用户消费 4管理员充值 5管理员扣款 6提现失败退款 7兑换其他货币 8任务',
  `sMoney` decimal(15,2) DEFAULT '0.00' COMMENT '修改前金额',
  `cMoney` decimal(15,2) DEFAULT '0.00' COMMENT '变化金额',
  `eMoney` decimal(15,2) DEFAULT '0.00' COMMENT '修改后金额',
  `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包 3红包',
  `note` varchar(250) DEFAULT '' COMMENT '后台备注',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COMMENT='用户钱包变化表';

-- ----------------------------
-- Table structure for we_msg
-- ----------------------------
DROP TABLE IF EXISTS `we_msg`;
CREATE TABLE `we_msg` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) DEFAULT '0' COMMENT '用户id',
  `msgTitle` varchar(20) DEFAULT '' COMMENT '消息标题',
  `msgText` varchar(100) DEFAULT '' COMMENT '消息内容',
  `transmission` varchar(50) DEFAULT '' COMMENT '透传内容',
  `type` tinyint(1) DEFAULT '0' COMMENT '1后台群推消息 2后台个推 3预约推送',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0删除',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COMMENT='消息';

-- ----------------------------
-- Table structure for we_nbaBind
-- ----------------------------
DROP TABLE IF EXISTS `we_nbaBind`;
CREATE TABLE `we_nbaBind` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `teamName` varchar(20) DEFAULT '' COMMENT '队伍名称',
  `bzyId` varchar(20) DEFAULT '0' COMMENT '章鱼的队伍id',
  `okooId` varchar(20) DEFAULT '0' COMMENT '澳客的队伍id',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COMMENT='nba队伍绑定表';

-- ----------------------------
-- Table structure for we_nbaMatchHistory
-- ----------------------------
DROP TABLE IF EXISTS `we_nbaMatchHistory`;
CREATE TABLE `we_nbaMatchHistory` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `matchId` varchar(20) DEFAULT NULL COMMENT '比赛id',
  `matchTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '比赛时间',
  `hId` varchar(20) DEFAULT NULL COMMENT '主队澳客id',
  `hName` varchar(20) DEFAULT NULL COMMENT '主队队名',
  `hPoint` varchar(20) DEFAULT NULL COMMENT '主队队名',
  `aId` varchar(20) DEFAULT NULL COMMENT '客队澳客id',
  `aName` varchar(20) DEFAULT NULL COMMENT '客队队名',
  `aPoint` varchar(20) DEFAULT NULL COMMENT '客队队名',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1004 DEFAULT CHARSET=utf8mb4 COMMENT='Nba历史比赛';

-- ----------------------------
-- Table structure for we_nbaMatchPlayer
-- ----------------------------
DROP TABLE IF EXISTS `we_nbaMatchPlayer`;
CREATE TABLE `we_nbaMatchPlayer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `playerId` varchar(20) DEFAULT NULL COMMENT '队员id',
  `playerName` varchar(20) DEFAULT NULL COMMENT '队员名称',
  `isMainForce` tinyint(1) DEFAULT NULL COMMENT '是否主力',
  `enter` int(11) DEFAULT NULL COMMENT '出场数',
  `first` varchar(10) DEFAULT NULL COMMENT '先发次数',
  `onLine` varchar(10) DEFAULT NULL COMMENT '在场时间',
  `hitRate` varchar(10) DEFAULT NULL COMMENT '命中率',
  `threePoints` varchar(10) DEFAULT NULL COMMENT '三分命中率',
  `foulShot` varchar(10) DEFAULT NULL COMMENT '罚球命中率',
  `backboard` varchar(10) DEFAULT NULL COMMENT '篮板',
  `assists` varchar(10) DEFAULT NULL COMMENT '助攻',
  `steals` varchar(10) DEFAULT NULL COMMENT '抢断',
  `blockShot` varchar(10) DEFAULT NULL COMMENT '盖帽',
  `miss` varchar(10) DEFAULT NULL COMMENT '失误',
  `foul` varchar(10) DEFAULT NULL COMMENT '犯规',
  `score` varchar(10) DEFAULT NULL COMMENT '得分',
  `teamId` varchar(10) DEFAULT NULL COMMENT '队伍id',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=343 DEFAULT CHARSET=utf8mb4 COMMENT='nba队员记录';

-- ----------------------------
-- Table structure for we_newConsult
-- ----------------------------
DROP TABLE IF EXISTS `we_newConsult`;
CREATE TABLE `we_newConsult` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultName` varchar(50) DEFAULT '' COMMENT '咨询名称',
  `consultImg` varchar(150) DEFAULT '' COMMENT '咨询图片',
  `consultBrief` varchar(200) DEFAULT '' COMMENT '咨询简介',
  `consultDetail` text COMMENT '文本内容',
  `top` int(11) DEFAULT '0' COMMENT '置顶顺序',
  `num` int(11) DEFAULT '0' COMMENT '阅读人数',
  `classId` bigint(20) DEFAULT '0' COMMENT '分类ID',
  `authorId` bigint(20) DEFAULT '0' COMMENT '作者ID',
  `recommendId` bigint(20) DEFAULT '0' COMMENT '推荐模板ID',
  `hot` tinyint(1) DEFAULT '0' COMMENT '0不是热门 1热门',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COMMENT='快讯';

-- ----------------------------
-- Table structure for we_newConsultClass
-- ----------------------------
DROP TABLE IF EXISTS `we_newConsultClass`;
CREATE TABLE `we_newConsultClass` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultClassName` varchar(20) DEFAULT '' COMMENT '分类名称',
  `top` int(11) DEFAULT '0' COMMENT '置顶顺序',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='快讯分类';

-- ----------------------------
-- Table structure for we_readTask
-- ----------------------------
DROP TABLE IF EXISTS `we_readTask`;
CREATE TABLE `we_readTask` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) DEFAULT '0' COMMENT '用户id',
  `day` varchar(10) DEFAULT '' COMMENT '完成日期',
  `nextDay` int(11) DEFAULT '1' COMMENT '是的连续第几天',
  `loginDay` int(11) DEFAULT '1' COMMENT '是注册以来的第几天',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='用户阅读任务记录';

-- ----------------------------
-- Table structure for we_rebate
-- ----------------------------
DROP TABLE IF EXISTS `we_rebate`;
CREATE TABLE `we_rebate` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) DEFAULT '0' COMMENT '用户id',
  `sonId` bigint(20) DEFAULT '0' COMMENT '儿子用户id',
  `grandSonId` bigint(20) DEFAULT '0' COMMENT '孙子用户id',
  `day` varchar(10) DEFAULT '' COMMENT '获取返利日期',
  `money` decimal(15,2) DEFAULT '0.00' COMMENT '获取的金额',
  `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
  `rebateType` tinyint(1) DEFAULT '0' COMMENT '返利类型 1下级注册返利 2下级5次任务返利 3孙子级任务返利 4唤醒返利',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户获取下级返利';

-- ----------------------------
-- Table structure for we_recommend
-- ----------------------------
DROP TABLE IF EXISTS `we_recommend`;
CREATE TABLE `we_recommend` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `recommend` varchar(150) DEFAULT NULL COMMENT '3号模板',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COMMENT='咨询分类';

-- ----------------------------
-- Table structure for we_share
-- ----------------------------
DROP TABLE IF EXISTS `we_share`;
CREATE TABLE `we_share` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) DEFAULT '0' COMMENT '用户id',
  `url` varchar(50) DEFAULT '' COMMENT '分享的链接',
  `day` varchar(10) DEFAULT '' COMMENT '分享的日期',
  `openNum` int(11) DEFAULT '0' COMMENT '被打开过多少次',
  `type` tinyint(1) DEFAULT '0' COMMENT '1咨询 2比赛 3网页 4快讯 5预约',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户获取下级返利';

-- ----------------------------
-- Table structure for we_shareRegister
-- ----------------------------
DROP TABLE IF EXISTS `we_shareRegister`;
CREATE TABLE `we_shareRegister` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) DEFAULT '0' COMMENT '用户id',
  `day` varchar(10) DEFAULT '' COMMENT '领取日期',
  `getTime` int(11) DEFAULT '0' COMMENT '领取时间戳',
  `money` decimal(15,2) DEFAULT '0.00' COMMENT '领取的金额',
  `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='分享注册页到朋友圈';

-- ----------------------------
-- Table structure for we_signIn
-- ----------------------------
DROP TABLE IF EXISTS `we_signIn`;
CREATE TABLE `we_signIn` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) DEFAULT '0' COMMENT '用户id',
  `day` varchar(10) DEFAULT '' COMMENT '签到日期',
  `nextDay` int(11) DEFAULT '1' COMMENT '连续第几天签到',
  `money` decimal(15,2) DEFAULT '0.00' COMMENT '领取的金额',
  `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='用户钱包金币兑换表';

-- ----------------------------
-- Table structure for we_task
-- ----------------------------
DROP TABLE IF EXISTS `we_task`;
CREATE TABLE `we_task` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) DEFAULT '0' COMMENT '用户id',
  `day` varchar(10) DEFAULT '' COMMENT '完成日期',
  `money` decimal(15,2) DEFAULT '0.00' COMMENT '领取的金额',
  `walletId` tinyint(1) DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
  `taskType` tinyint(1) DEFAULT '0' COMMENT '任务类型 1输入邀请码 2新手阅读 3分享晒一晒到朋友圈 4分享文章 5阅读咨询 6优质评论 7阅读推荐咨询 8调查问卷 9每阅读随机任务',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户任务完成表';

-- ----------------------------
-- Table structure for we_team
-- ----------------------------
DROP TABLE IF EXISTS `we_team`;
CREATE TABLE `we_team` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `teamName` varchar(20) DEFAULT '' COMMENT '队伍名称',
  `teamImg` varchar(100) DEFAULT '' COMMENT '队伍logo',
  `pid` bigint(20) DEFAULT '0' COMMENT '所属联赛',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='队伍';

-- ----------------------------
-- Table structure for we_user
-- ----------------------------
DROP TABLE IF EXISTS `we_user`;
CREATE TABLE `we_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nickName` varchar(20) DEFAULT '运动迷' COMMENT '用户昵称',
  `pwd1` char(32) DEFAULT NULL COMMENT '用户使用的密码',
  `pwd2` char(32) DEFAULT NULL COMMENT '备用密码字段',
  `phone` char(20) DEFAULT NULL COMMENT '手机号',
  `identityCard` char(50) DEFAULT NULL COMMENT '身份证号',
  `realName` varchar(20) DEFAULT NULL COMMENT '真实姓名',
  `photo` varchar(200) DEFAULT NULL COMMENT '头像',
  `birthday` varchar(20) DEFAULT NULL COMMENT '生日',
  `userIntroduce` varchar(100) DEFAULT NULL COMMENT '用户简介',
  `userAddress` varchar(100) DEFAULT NULL COMMENT '用户地址',
  `sex` tinyint(1) DEFAULT '0' COMMENT '1男 2女 3未知',
  `gag` timestamp NULL DEFAULT NULL COMMENT '是否禁言',
  `deviceId` varchar(100) DEFAULT NULL COMMENT '设备id',
  `lastIp` varchar(46) DEFAULT NULL COMMENT '最后登录ip',
  `rIp` varchar(46) DEFAULT NULL COMMENT '注册的Ip',
  `fid` bigint(20) DEFAULT '0' COMMENT '邀请我的人',
  `invitationCode` varchar(20) DEFAULT NULL COMMENT '邀请码',
  `wxOpenid` varchar(50) DEFAULT NULL COMMENT '微信OpenId',
  `qqOpenid` varchar(50) DEFAULT NULL COMMENT 'qqOpenId',
  `sinaOpenid` varchar(50) DEFAULT NULL COMMENT '新浪openid',
  `pushClientid` varchar(100) DEFAULT NULL COMMENT '推送唯一标识id',
  `pushButton` tinyint(1) DEFAULT '1' COMMENT '是否接受推送 1接受 2不接受',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `wxOpenid` (`wxOpenid`),
  UNIQUE KEY `qqOpenid` (`qqOpenid`),
  UNIQUE KEY `sinaOpenid` (`sinaOpenid`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COMMENT='用户';

-- ----------------------------
-- Table structure for we_userWallet
-- ----------------------------
DROP TABLE IF EXISTS `we_userWallet`;
CREATE TABLE `we_userWallet` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL COMMENT '用户id',
  `walletId` tinyint(1) NOT NULL DEFAULT '1' COMMENT '钱包类型 1钱包 2金币钱包',
  `money` decimal(15,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:无效',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COMMENT='用户钱包';

-- ----------------------------
-- Table structure for we_videoConsult
-- ----------------------------
DROP TABLE IF EXISTS `we_videoConsult`;
CREATE TABLE `we_videoConsult` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultName` varchar(50) DEFAULT '' COMMENT '咨询名称',
  `consultImg` varchar(150) DEFAULT '' COMMENT '咨询图片',
  `video` varchar(150) DEFAULT '' COMMENT '咨询视频链接',
  `consultDetail` text COMMENT '文本内容',
  `team` varchar(150) DEFAULT '' COMMENT 'json {队伍1id:比分,队伍2id:比分}',
  `leagueId` bigint(20) DEFAULT '0' COMMENT '联盟id',
  `top` int(11) DEFAULT '0' COMMENT '置顶顺序',
  `num` int(11) DEFAULT '0' COMMENT '阅读人数',
  `classId` bigint(20) DEFAULT '0' COMMENT '分类ID',
  `authorId` bigint(20) DEFAULT '0' COMMENT '作者ID',
  `recommendId` bigint(20) DEFAULT '0' COMMENT '推荐模板ID',
  `hot` tinyint(1) DEFAULT '0' COMMENT '0不是热门 1热门',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COMMENT='视频咨询';

-- ----------------------------
-- Table structure for we_videoConsultClass
-- ----------------------------
DROP TABLE IF EXISTS `we_videoConsultClass`;
CREATE TABLE `we_videoConsultClass` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `consultClassName` varchar(20) DEFAULT '' COMMENT '分类名称',
  `top` int(11) DEFAULT '0' COMMENT '置顶顺序',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:有效，0:禁止登录',
  `updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COMMENT='视频咨询分类';

-- ----------------------------
-- Triggers structure for table we_user
-- ----------------------------
DROP TRIGGER IF EXISTS `wallet`;
delimiter ;;
CREATE TRIGGER `wallet` AFTER INSERT ON `we_user` FOR EACH ROW BEGIN
    INSERT INTO `we_base`.`we_userWallet`(userId,walletId,money) VALUES(new.id,1,0);
    INSERT INTO `we_base`.`we_userWallet`(userId,walletId,money) VALUES(new.id,2,0);
    END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
