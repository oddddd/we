<?php

/**
 * res.php
 *
 * @author: cnx7 <zysafe@live.cn> 2016-04-13
 */
class res
{
    /**
     * @param $api
     * @return string
     */
    static function get($api)
    {
        switch ($api) {
            case "WeOpen.Login":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": {
            "id": "4",
            "nickName": "运动迷",
            "pwd1": "e10adc3949ba59abbe56e057f20f883e",
            "pwd2": "",
            "phone": "18975137814",
            "identityCard": "",
            "realName": "",
            "photo": "",
            "birthday": "",
            "userIntroduce": "",
            "userAddress": "",
            "sex": "0",
            "deviceId": "",
            "lastIp": "",
            "wxOpenid": "",
            "qqOpenid": "",
            "sinaOpenid": "",
            "pushClientid": "",
            "status": "1",
            "updateTime": "2018-01-02 17:40:02",
            "createTime": "2018-01-02 17:40:02",
            "accessToken": "0bb55ffa0ad4349ae2ef3628396e9867"
        }
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.BannerList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": {
            "banner": [
                {
                    "id": "1",
                    "imgUrl": "http://img.taopic.com/uploads/allimg/121019/234917-121019231h258.jpg",  //轮换板链接
                    "url": "www.baidu.com", //type 3 跳转地址 ，2和1是主键id用来请求数据
                    "type": "3", //1 打开咨询 2打开比赛 3打开 网页
                    "top": "0", 
                    "status": "1",
                    "updateTime": "2017-12-27 17:21:41",
                    "createTime": "2017-12-27 17:21:35"
                },
                {
                    "id": "2",
                    "title": "标题",
                    "imgUrl": "http://pic6.nipic.com/20100309/4415972_185745011462_2.jpg",
                    "url": "www.baidu.com",
                    "type": "3",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2018-01-12 12:11:50",
                    "createTime": "2017-12-27 17:22:24"
                },
                {
                    "id": "3",
                    "title": "标题",
                    "imgUrl": "http://pic.35pic.com/normal/08/69/21/432252_183231322000_2.jpg",
                    "url": "www.baidu.com",
                    "type": "3",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2018-01-12 12:11:51",
                    "createTime": "2017-12-27 17:22:53"
                },
                {
                    "id": "4",
                    "title": "标题",
                    "imgUrl": "http://pic.35pic.com/normal/08/69/21/432252_183231322000_2.jpg",
                    "url": "www.baidu.com",
                    "type": "3",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2018-01-12 12:11:53",
                    "createTime": "2017-12-27 18:34:42"
                }
            ],
            "match": [
                {
                    "id": "204", // 赛事id
                    "matchNum": "201801151001", //第三放的赛事id
                    "phase": "20180115",
                    "matchName": "",
                    "kickoffTime": "2018-01-16 03:00:00", //开场时间
                    "saleEndTime": "", 
                    "homeId": "2198", //主队id
                    "homeName": "奥斯", //主队名称
                    "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_2198.png", //主队图片
                    "homePoint": "", //主队比分
                    "homeLike": "", //主队点赞人数
                    "awayId": "1609", //客队id
                    "awayName": "奈梅亨",//客队名称
                    "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_1609.png",//客队图片
                    "awayPoint": "",//客队比分
                    "awayLike": "", //客队点赞人数
                    "leagueId": "39", //联赛id
                    "leagueName": "荷乙", //联赛名称
                    "leagueColor": "#BE2B8F", //联赛颜色
                    "leagueType": "1", // 联赛类型 1足球 2篮球
                    "isEnd": "0", //是否结束 1结束
                    "liveNum": "0", //比赛在线人数
                    "liveName": "0", //直播名称
                    "liveId": "0", //直播id
                    "homeWin": "0", //主队胜率
                    "awayWin": "0", //客队胜率
                    "deuce": "", //和局胜率
                    "updateTime": "2018-01-15 14:30:18",
                    "createTime": "2018-01-15 14:30:18"
                },
                {
                    "id": "282",
                    "matchNum": "201801184301",
                    "phase": "20180118",
                    "matchName": "",
                    "kickoffTime": "2018-01-19 01:00:00",
                    "saleEndTime": "",
                    "homeId": "292",
                    "homeName": "莫希姆基",
                    "homeLogo": "https://pic.8win.com/data/image/all/2017/4/11/bb_team_1491907566219.png",
                    "homePoint": "",
                    "homeLike": "",
                    "awayId": "1747",
                    "awayName": "奥林匹亚",
                    "awayLogo": "https://pic.8win.com/data/image/all/2016/9/19/bb_team_1474272249320.jpg",
                    "awayPoint": "",
                    "awayLike": "",
                    "leagueId": "154",
                    "leagueName": "欧篮联",
                    "leagueColor": "#EE9611",
                    "leagueType": "2",
                    "isEnd": "0",
                    "liveNum": "0",
                    "liveName": "0",
                    "liveId": "0",
                    "homeWin": "0",
                    "awayWin": "0",
                    "deuce": "",
                    "updateTime": "2018-01-17 10:28:16",
                    "createTime": "2018-01-17 10:28:16"
                }
            ],
            "news": [
                {
                    "id": "11",
                    "consultName": "dddd",
                    "consultImg": "imgUrl",
                    "consultBrief": "123123123123",
                    "consultDetail": "内容",
                    "top": "10000000",
                    "num": "65",
                    "classId": "1",
                    "authorId": "2",
                    "recommendId": "2",
                    "hot": "1",
                    "status": "1",
                    "updateTime": "2018-01-17 09:40:04",
                    "createTime": "2018-01-08 17:38:55",
                    "commentNum": ""
                },
                {
                    "id": "10",
                    "consultName": "dddd",
                    "consultImg": "imgUrl",
                    "consultBrief": "123123123123",
                    "consultDetail": "内容",
                    "top": "10000000",
                    "num": "0",
                    "classId": "1",
                    "authorId": "2",
                    "recommendId": "2",
                    "hot": "1",
                    "status": "1",
                    "updateTime": "2018-01-08 17:38:54",
                    "createTime": "2018-01-08 17:38:54",
                    "commentNum": ""
                },
                {
                    "id": "9",
                    "consultName": "dddd",
                    "consultImg": "imgUrl",
                    "consultBrief": "123123123123",
                    "consultDetail": "内容",
                    "top": "10000000",
                    "num": "0",
                    "classId": "1",
                    "authorId": "2",
                    "recommendId": "2",
                    "hot": "1",
                    "status": "1",
                    "updateTime": "2018-01-08 17:38:53",
                    "createTime": "2018-01-08 17:38:53",
                    "commentNum": ""
                },
                {
                    "id": "8",
                    "consultName": "dddd",
                    "consultImg": "imgUrl",
                    "consultBrief": "123123123123",
                    "consultDetail": "内容",
                    "top": "10000000",
                    "num": "3",
                    "classId": "1",
                    "authorId": "2",
                    "recommendId": "2",
                    "hot": "1",
                    "status": "1",
                    "updateTime": "2018-01-16 16:41:03",
                    "createTime": "2018-01-08 17:38:52",
                    "commentNum": ""
                },
                {
                    "id": "7",
                    "consultName": "dddd",
                    "consultImg": "imgUrl",
                    "consultBrief": "123123123123",
                    "consultDetail": "内容",
                    "top": "10000000",
                    "num": "4",
                    "classId": "1",
                    "authorId": "2",
                    "recommendId": "2",
                    "hot": "1",
                    "status": "1",
                    "updateTime": "2018-01-16 14:26:31",
                    "createTime": "2018-01-08 17:38:48",
                    "commentNum": ""
                },
                {
                    "id": "6",
                    "consultName": "dddd",
                    "consultImg": "imgUrl",
                    "consultBrief": "123123123123",
                    "consultDetail": "内容",
                    "top": "10000000",
                    "num": "0",
                    "classId": "1",
                    "authorId": "2",
                    "recommendId": "2",
                    "hot": "1",
                    "status": "1",
                    "updateTime": "2018-01-08 17:38:47",
                    "createTime": "2018-01-08 17:38:47",
                    "commentNum": ""
                },
                {
                    "id": "5",
                    "consultName": "dddd",
                    "consultImg": "imgUrl",
                    "consultBrief": "123123123123",
                    "consultDetail": "内容",
                    "top": "10000000",
                    "num": "0",
                    "classId": "1",
                    "authorId": "2",
                    "recommendId": "2",
                    "hot": "1",
                    "status": "1",
                    "updateTime": "2018-01-08 17:38:46",
                    "createTime": "2018-01-08 17:38:46",
                    "commentNum": ""
                },
                {
                    "id": "4",
                    "consultName": "dddd",
                    "consultImg": "imgUrl",
                    "consultBrief": "123123123123",
                    "consultDetail": "内容",
                    "top": "10000000",
                    "num": "0",
                    "classId": "1",
                    "authorId": "2",
                    "recommendId": "2",
                    "hot": "1",
                    "status": "1",
                    "updateTime": "2018-01-08 17:38:45",
                    "createTime": "2018-01-08 17:38:45",
                    "commentNum": ""
                },
                {
                    "id": "3",
                    "consultName": "dddd",
                    "consultImg": "imgUrl",
                    "consultBrief": "123123123123",
                    "consultDetail": "内容",
                    "top": "10000000",
                    "num": "0",
                    "classId": "1",
                    "authorId": "2",
                    "recommendId": "2",
                    "hot": "1",
                    "status": "1",
                    "updateTime": "2018-01-08 17:38:44",
                    "createTime": "2018-01-08 17:38:44",
                    "commentNum": ""
                },
                {
                    "id": "2",
                    "consultName": "dddd",
                    "consultImg": "imgUrl",
                    "consultBrief": "123123123123",
                    "consultDetail": "内容",
                    "top": "10000000",
                    "num": "3",
                    "classId": "1",
                    "authorId": "2",
                    "recommendId": "2",
                    "hot": "1",
                    "status": "1",
                    "updateTime": "2018-01-16 17:34:52",
                    "createTime": "2018-01-08 17:38:43",
                    "commentNum": ""
                }
            ]
        }
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.ConsultClassList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "14", //获取分类列表传的id
                "consultClassName": "中国足球", //分类名称
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:17:07",
                "createTime": "2017-12-28 16:17:07"
            },
            {
                "id": "13",
                "consultClassName": "国际足球",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:16:56",
                "createTime": "2017-12-28 16:16:56"
            },
            {
                "id": "12",
                "consultClassName": "中甲",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:16:40",
                "createTime": "2017-12-28 16:16:40"
            },
            {
                "id": "11",
                "consultClassName": "亚冠",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:16:30",
                "createTime": "2017-12-28 16:16:30"
            },
            {
                "id": "10",
                "consultClassName": "意甲",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:16:20",
                "createTime": "2017-12-28 16:16:20"
            },
            {
                "id": "9",
                "consultClassName": "法甲",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:16:06",
                "createTime": "2017-12-28 16:16:06"
            },
            {
                "id": "8",
                "consultClassName": "德甲",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:15:48",
                "createTime": "2017-12-28 16:15:48"
            },
            {
                "id": "7",
                "consultClassName": "西甲",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:15:32",
                "createTime": "2017-12-28 16:15:32"
            },
            {
                "id": "6",
                "consultClassName": "CBA",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:15:20",
                "createTime": "2017-12-28 16:15:18"
            },
            {
                "id": "5",
                "consultClassName": "俄罗斯世界杯",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:14:59",
                "createTime": "2017-12-28 16:14:59"
            },
            {
                "id": "4",
                "consultClassName": "欧冠",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:14:48",
                "createTime": "2017-12-28 16:14:48"
            },
            {
                "id": "3",
                "consultClassName": "中超",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:06:31",
                "createTime": "2017-12-28 16:06:30"
            },
            {
                "id": "2",
                "consultClassName": "英超",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 16:06:21",
                "createTime": "2017-12-28 16:06:21"
            },
            {
                "id": "1",
                "consultClassName": "NBA",
                "top": "0",
                "status": "1",
                "updateTime": "2017-12-28 15:35:25",
                "createTime": "2017-12-28 15:35:25"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;

            case "WeOpen.ConsultList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "2", //帖子id
                "consultName": "1234", //帖子标题
                "consultImg": "url", //图片路径
                "consultDetail": "345345345", 
                "top": "0",
                "num": "0", //阅读数量
                "classId": "1", //帖子分类
                "authorId": "0", //作者id
                "recommendID": "0", //推荐内容id
                "hot": "0", //是否热门
                "status": "1",
                "updateTime": "2017-12-28 18:05:38", //修改时间
                "createTime": "2017-12-28 18:05:34", //创建时间
                "commentNum": "1" //评论数量 
            },
            {
                "id": "1",
                "consultName": "123",
                "consultImg": "url",
                "consultDetail": "asdfasdfasdf",
                "top": "0",
                "num": "0",
                "classId": "1",
                "authorId": "0",
                "recommendID": "0",
                "hot": "0",
                "status": "1",
                "updateTime": "2017-12-28 17:51:35",
                "createTime": "2017-12-28 17:51:23",
                "commentNum": "2"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.CommentList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "10", //评论id 点赞要用
                "fid": "1",
                "pid": "0",
                "type": "1",
                "comment": "abc", //评论内容
                "userId": "4",
                "status": "1",
                "updateTime": "2018-01-03 15:52:39",
                "createTime": "2018-01-03 15:52:39",
                "likeNum": "0", //点赞数量
                "haslike": "0", //本人是否点赞 0没点赞
                "nickName": "运动迷", //用户昵称
                "photo": "" //用户头衔
            },
            {
                "id": "9",
                "fid": "1",
                "pid": "0",
                "type": "1",
                "comment": "abc",
                "userId": "4",
                "status": "1",
                "updateTime": "2018-01-03 15:46:16",
                "createTime": "2018-01-03 15:46:16",
                "likeNum": "0",
                "haslike": "0",
                "nickName": "运动迷",
                "photo": ""
            },
            {
                "id": "8",
                "fid": "1",
                "pid": "0",
                "type": "1",
                "comment": "abc",
                "userId": "4",
                "status": "1",
                "updateTime": "2018-01-03 15:45:05",
                "createTime": "2018-01-03 15:45:05",
                "likeNum": "0",
                "haslike": "0",
                "nickName": "运动迷",
                "photo": ""
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.getRecommend":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "7",
                "consultName": "q",
                "consultImg": "http://img2.imgtn.bdimg.com/it/u=4066248497,2604413005&fm=27&gp=0.jpg",
                "video": "",
                "consultDetail": "同时，移动支付比例超过九成的省（自治区）增长到11个，支付宝在过去一年中，成为当之无愧的最受欢迎的结算方式之一。\n\n钱包，终于在2017年从许多人的必备品变成了可有可无的东西。\n\n“码”上新生活：扫码时代全面来临\n\n当你扫码用支付宝进行支付的时候，你以为只有你自己在用支付宝吗？当然不是！商家，也是支付宝的用户之一。",
                "top": "0",
                "num": "0",
                "classId": "1",
                "authorId": "0",
                "recommendID": "0",
                "hot": "0",
                "status": "1",
                "updateTime": "2018-01-04 12:05:36",
                "createTime": "2018-01-04 10:24:59",
                "consultAuthorName": "",
                "recommendType": "1" // 1是咨询 2是视频 3是 快讯
            },
            {
                "id": "8",
                "consultName": "wer",
                "consultImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=2324816349,1743833351&fm=27&gp=0.jpg",
                "video": "",
                "consultDetail": "同时，移动支付比例超过九成的省（自治区）增长到11个，支付宝在过去一年中，成为当之无愧的最受欢迎的结算方式之一。\n\n钱包，终于在2017年从许多人的必备品变成了可有可无的东西。\n\n“码”上新生活：扫码时代全面来临\n\n当你扫码用支付宝进行支付的时候，你以为只有你自己在用支付宝吗？当然不是！商家，也是支付宝的用户之一。",
                "top": "0",
                "num": "0",
                "classId": "1",
                "authorId": "0",
                "recommendID": "0",
                "hot": "0",
                "status": "1",
                "updateTime": "2018-01-04 12:05:36",
                "createTime": "2018-01-04 10:25:05",
                "consultAuthorName": "",
                "recommendType": "1"
            },
            {
                "id": "9",
                "consultName": "ed",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "",
                "consultDetail": "同时，移动支付比例超过九成的省（自治区）增长到11个，支付宝在过去一年中，成为当之无愧的最受欢迎的结算方式之一。\n\n钱包，终于在2017年从许多人的必备品变成了可有可无的东西。\n\n“码”上新生活：扫码时代全面来临\n\n当你扫码用支付宝进行支付的时候，你以为只有你自己在用支付宝吗？当然不是！商家，也是支付宝的用户之一。",
                "top": "0",
                "num": "0",
                "classId": "1",
                "authorId": "0",
                "recommendID": "0",
                "hot": "0",
                "status": "1",
                "updateTime": "2018-01-04 12:05:35",
                "createTime": "2018-01-04 10:25:06",
                "consultAuthorName": "",
                "recommendType": "1"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeConsult.bindClassPage":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": {
            "hasClass": [
                {
                    "id": "1",
                    "consultClassName": "NBA",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 15:35:25",
                    "createTime": "2017-12-28 15:35:25"
                },
                {
                    "id": "2",
                    "consultClassName": "英超",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:06:21",
                    "createTime": "2017-12-28 16:06:21"
                },
                {
                    "id": "3",
                    "consultClassName": "中超",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:06:31",
                    "createTime": "2017-12-28 16:06:30"
                },
                {
                    "id": "4",
                    "consultClassName": "欧冠",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:14:48",
                    "createTime": "2017-12-28 16:14:48"
                },
                {
                    "id": "5",
                    "consultClassName": "俄罗斯世界杯",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:14:59",
                    "createTime": "2017-12-28 16:14:59"
                }
            ],
            "allClass": [
                {
                    "id": "1",
                    "consultClassName": "NBA",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 15:35:25",
                    "createTime": "2017-12-28 15:35:25"
                },
                {
                    "id": "2",
                    "consultClassName": "英超",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:06:21",
                    "createTime": "2017-12-28 16:06:21"
                },
                {
                    "id": "3",
                    "consultClassName": "中超",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:06:31",
                    "createTime": "2017-12-28 16:06:30"
                },
                {
                    "id": "4",
                    "consultClassName": "欧冠",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:14:48",
                    "createTime": "2017-12-28 16:14:48"
                },
                {
                    "id": "5",
                    "consultClassName": "俄罗斯世界杯",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:14:59",
                    "createTime": "2017-12-28 16:14:59"
                },
                {
                    "id": "6",
                    "consultClassName": "CBA",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:15:20",
                    "createTime": "2017-12-28 16:15:18"
                },
                {
                    "id": "7",
                    "consultClassName": "西甲",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:15:32",
                    "createTime": "2017-12-28 16:15:32"
                },
                {
                    "id": "8",
                    "consultClassName": "德甲",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:15:48",
                    "createTime": "2017-12-28 16:15:48"
                },
                {
                    "id": "9",
                    "consultClassName": "法甲",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:16:06",
                    "createTime": "2017-12-28 16:16:06"
                },
                {
                    "id": "10",
                    "consultClassName": "意甲",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:16:20",
                    "createTime": "2017-12-28 16:16:20"
                },
                {
                    "id": "11",
                    "consultClassName": "亚冠",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:16:30",
                    "createTime": "2017-12-28 16:16:30"
                },
                {
                    "id": "12",
                    "consultClassName": "中甲",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:16:40",
                    "createTime": "2017-12-28 16:16:40"
                },
                {
                    "id": "13",
                    "consultClassName": "国际足球",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:16:56",
                    "createTime": "2017-12-28 16:16:56"
                },
                {
                    "id": "14",
                    "consultClassName": "中国足球",
                    "top": "0",
                    "status": "1",
                    "updateTime": "2017-12-28 16:17:07",
                    "createTime": "2017-12-28 16:17:07"
                }
            ]
        }
    },
    "msg": ""
}
T_ECHO;
                break;

            case "WeOpen.NewConsultClassList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "1",
                "consultClassName": "篮球",
                "top": "0",
                "status": "1",
                "updateTime": "2018-01-08 11:48:00",
                "createTime": "2018-01-08 11:48:00"
            },
            {
                "id": "2",
                "consultClassName": "足球",
                "top": "0",
                "status": "1",
                "updateTime": "2018-01-08 11:48:05",
                "createTime": "2018-01-08 11:48:05"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.newConsultList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "16",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "consultBrief": "123123123123", //快讯简介
                "consultDetail": "内容",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-08 17:39:00",
                "createTime": "2018-01-08 17:39:00",
                "commentNum": ""
            },
            {
                "id": "15",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "consultBrief": "123123123123",
                "consultDetail": "内容",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-08 17:38:59",
                "createTime": "2018-01-08 17:38:59",
                "commentNum": ""
            },
            {
                "id": "14",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "consultBrief": "123123123123",
                "consultDetail": "内容",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-08 17:38:58",
                "createTime": "2018-01-08 17:38:58",
                "commentNum": ""
            },
            {
                "id": "13",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "consultBrief": "123123123123",
                "consultDetail": "内容",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-08 17:38:57",
                "createTime": "2018-01-08 17:38:57",
                "commentNum": ""
            },
            {
                "id": "12",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "consultBrief": "123123123123",
                "consultDetail": "内容",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-08 17:38:56",
                "createTime": "2018-01-08 17:38:56",
                "commentNum": ""
            },
            {
                "id": "11",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "consultBrief": "123123123123",
                "consultDetail": "内容",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-08 17:38:55",
                "createTime": "2018-01-08 17:38:55",
                "commentNum": ""
            },
            {
                "id": "10",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "consultBrief": "123123123123",
                "consultDetail": "内容",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-08 17:38:54",
                "createTime": "2018-01-08 17:38:54",
                "commentNum": ""
            },
            {
                "id": "9",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "consultBrief": "123123123123",
                "consultDetail": "内容",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-08 17:38:53",
                "createTime": "2018-01-08 17:38:53",
                "commentNum": ""
            },
            {
                "id": "8",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "consultBrief": "123123123123",
                "consultDetail": "内容",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-08 17:38:52",
                "createTime": "2018-01-08 17:38:52",
                "commentNum": ""
            },
            {
                "id": "7",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "consultBrief": "123123123123",
                "consultDetail": "内容",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-08 17:38:48",
                "createTime": "2018-01-08 17:38:48",
                "commentNum": ""
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.ConsultDetail":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": {
            "id": "2",
            "consultName": "dddd",
            "consultImg": "imgUrl",
            "consultBrief": "123123123123",
            "consultDetail": "内容",
            "top": "10000000",
            "num": "1",
            "classId": "1",
            "authorId": "2",
            "recommendId": "2",
            "hot": "1",
            "status": "1",
            "updateTime": "2018-01-08 18:45:50",
            "createTime": "2018-01-08 17:38:43",
            "consultAuthorName": "dddd", //作者昵称
            "recommendList": [  //推荐 不一定有 有也不一定是3个 记得做判断
                {
                    "id": "7",
                    "consultName": "q",
                    "consultImg": "http://img2.imgtn.bdimg.com/it/u=4066248497,2604413005&fm=27&gp=0.jpg",
                    "video": "",
                    "consultDetail": "同时，移动支付比例超过九成的省（自治区）增长到11个，支付宝在过去一年中，成为当之无愧的最受欢迎的结算方式之一。\n\n钱包，终于在2017年从许多人的必备品变成了可有可无的东西。\n\n“码”上新生活：扫码时代全面来临\n\n当你扫码用支付宝进行支付的时候，你以为只有你自己在用支付宝吗？当然不是！商家，也是支付宝的用户之一。",
                    "top": "0",
                    "num": "0",
                    "classId": "1",
                    "authorId": "0",
                    "recommendId": "0",
                    "hot": "0",
                    "status": "1",
                    "updateTime": "2018-01-04 12:05:36",
                    "createTime": "2018-01-04 10:24:59",
                    "consultAuthorName": "",
                    "recommendType": "1"
                },
                {
                    "id": "8",
                    "consultName": "wer",
                    "consultImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=2324816349,1743833351&fm=27&gp=0.jpg",
                    "video": "",
                    "consultDetail": "同时，移动支付比例超过九成的省（自治区）增长到11个，支付宝在过去一年中，成为当之无愧的最受欢迎的结算方式之一。\n\n钱包，终于在2017年从许多人的必备品变成了可有可无的东西。\n\n“码”上新生活：扫码时代全面来临\n\n当你扫码用支付宝进行支付的时候，你以为只有你自己在用支付宝吗？当然不是！商家，也是支付宝的用户之一。",
                    "top": "0",
                    "num": "0",
                    "classId": "1",
                    "authorId": "0",
                    "recommendId": "0",
                    "hot": "0",
                    "status": "1",
                    "updateTime": "2018-01-04 12:05:36",
                    "createTime": "2018-01-04 10:25:05",
                    "consultAuthorName": "",
                    "recommendType": "1"
                },
                {
                    "id": "9",
                    "consultName": "ed",
                    "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                    "video": "",
                    "consultDetail": "同时，移动支付比例超过九成的省（自治区）增长到11个，支付宝在过去一年中，成为当之无愧的最受欢迎的结算方式之一。\n\n钱包，终于在2017年从许多人的必备品变成了可有可无的东西。\n\n“码”上新生活：扫码时代全面来临\n\n当你扫码用支付宝进行支付的时候，你以为只有你自己在用支付宝吗？当然不是！商家，也是支付宝的用户之一。",
                    "top": "0",
                    "num": "0",
                    "classId": "1",
                    "authorId": "0",
                    "recommendId": "0",
                    "hot": "0",
                    "status": "1",
                    "updateTime": "2018-01-04 12:05:35",
                    "createTime": "2018-01-04 10:25:06",
                    "consultAuthorName": "",
                    "recommendType": "1"
                }
            ]
        }
    },
    "msg": ""
}
T_ECHO;
                break;
            case "BackConsult.teamList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "1",
                "teamName": "火箭队1", //队伍名字
                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg", //队伍logo
                "pid": "1",
                "status": "1",
                "updateTime": "2018-01-09 15:56:05",
                "createTime": "2018-01-09 15:53:51"
            },
            {
                "id": "2",
                "teamName": "湖人队",
                "teamImg": "https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1494507663,2576945134&fm=27&gp=0.jpg",
                "pid": "1",
                "status": "1",
                "updateTime": "2018-01-09 15:57:43",
                "createTime": "2018-01-09 15:57:43"
            },
            {
                "id": "3",
                "teamName": "湖人队",
                "teamImg": "https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1494507663,2576945134&fm=27&gp=0.jpg",
                "pid": "1",
                "status": "1",
                "updateTime": "2018-01-09 16:08:47",
                "createTime": "2018-01-09 16:08:47"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "BackConsult.leagueList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "1",
                "leagueName": "NBA", //联赛名字
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg", //logo
                "status": "1",
                "updateTime": "2018-01-09 15:47:54",
                "createTime": "2018-01-09 15:39:33"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.VideoConsultClassList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "1",
                "consultClassName": "分类1",
                "top": "0",
                "status": "1",
                "updateTime": "2018-01-10 10:53:27",
                "createTime": "2018-01-10 10:53:27"
            },
            {
                "id": "2",
                "consultClassName": "分类2",
                "top": "0",
                "status": "1",
                "updateTime": "2018-01-10 10:53:35",
                "createTime": "2018-01-10 10:53:35"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.VideoConsultList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "1",
                "consultName": "dddd", //标题
                "consultImg": "imgUrl123123123", //封面
                "video": "videoUrl", //视频路径
                "consultDetail": "内容",
                "team": [ //队伍
                    {
                        "id": "1",
                        "teamName": "火箭队1", //队名
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg", //队伍logo
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "2",
                        "teamName": "湖人队",
                        "teamImg": "https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1494507663,2576945134&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:57:43",
                        "createTime": "2018-01-09 15:57:43",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendID": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-10 14:30:20",
                "createTime": "2018-01-10 11:34:27",
                "commentNum": "",
                "leagueName": "NBA", //联赛名
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg" // 联赛logo
            },
            {
                "id": "12",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "videoUrl",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendID": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-10 11:36:24",
                "createTime": "2018-01-10 11:36:24",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "11",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "videoUrl",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendID": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-10 11:36:23",
                "createTime": "2018-01-10 11:36:23",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "10",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "videoUrl",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendID": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-10 11:36:22",
                "createTime": "2018-01-10 11:36:22",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "9",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "videoUrl",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendID": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-10 11:36:21",
                "createTime": "2018-01-10 11:36:21",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "8",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "videoUrl",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendID": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-10 11:36:20",
                "createTime": "2018-01-10 11:36:20",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "6",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "videoUrl",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendID": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-10 11:36:19",
                "createTime": "2018-01-10 11:36:19",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "7",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "videoUrl",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendID": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-10 11:36:19",
                "createTime": "2018-01-10 11:36:19",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "4",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "videoUrl",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendID": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-10 11:36:13",
                "createTime": "2018-01-10 11:36:13",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "5",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "videoUrl",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendID": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-10 11:36:13",
                "createTime": "2018-01-10 11:36:13",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeUser.MsgList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "7", //消息id
                "userId": "4", //用户id
                "msgTitle": "赛事30分钟后将开始", //消息标题
                "msgText": "您预约的比赛30分钟后将开始 幕拉哥斯 : 内卡萨", //消息内容
                "transmission": "5,470", //逗号分隔 前面的是打开方式 1咨询 2比赛 3网页 4快讯 5比赛 , 后面的是对应的 id 或路径
                "type": "5",
                "status": "1",
                "updateTime": "2018-01-24 09:57:24",
                "createTime": "2018-01-24 09:53:43",
                "nickName": "dddd" //用户昵称
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.MatchListBefore":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "204", // 赛事id
                "matchNum": "201801151001", //第三放的赛事id
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 03:00:00", //开场时间
                "saleEndTime": "", 
                "homeId": "2198", //主队id
                "homeName": "奥斯", //主队名称
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_2198.png", //主队图片
                "homePoint": "", //主队比分
                "homeLike": "", //主队点赞人数
                "awayId": "1609", //客队id
                "awayName": "奈梅亨",//客队名称
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_1609.png",//客队图片
                "awayPoint": "",//客队比分
                "awayLike": "", //客队点赞人数
                "leagueId": "39", //联赛id
                "leagueName": "荷乙", //联赛名称
                "leagueColor": "#BE2B8F", //联赛颜色
                "leagueType": "1", // 联赛类型 1足球 2篮球
                "isEnd": "0", //是否结束 1结束
                "liveNum": "0", //比赛在线人数
                "liveName": "0", //直播名称
                "liveId": "0", //直播id
                "homeWin": "0", //主队胜率
                "awayWin": "0", //客队胜率
                "deuce": "", //和局胜率
                "updateTime": "2018-01-15 14:30:18",
                "createTime": "2018-01-15 14:30:18"
            },
            {
                "id": "205",
                "matchNum": "201801151002",
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 03:00:00",
                "saleEndTime": "",
                "homeId": "10751",
                "homeName": "阿尔青年",
                "homeLogo": "https://pic.8win.com/data/image/all/2017/8/16/fb_team_1502853353139.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "1589",
                "awayName": "坎布尔",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_1589.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "39",
                "leagueName": "荷乙",
                "leagueColor": "#BE2B8F",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:30:19",
                "createTime": "2018-01-15 14:30:19"
            },
            {
                "id": "206",
                "matchNum": "201801151003",
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 03:00:00",
                "saleEndTime": "",
                "homeId": "462",
                "homeName": "摩雷伦斯",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_462.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "475",
                "awayName": "塞图巴尔",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_475.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "25",
                "leagueName": "葡超",
                "leagueColor": "#008888",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:30:19",
                "createTime": "2018-01-15 14:30:19"
            },
            {
                "id": "207",
                "matchNum": "201801151004",
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 03:45:00",
                "saleEndTime": "",
                "homeId": "1552",
                "homeName": "朗斯",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_1552.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "978",
                "awayName": "索肖",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_978.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "41",
                "leagueName": "法乙",
                "leagueColor": "#5ACA92",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:30:19",
                "createTime": "2018-01-15 14:30:19"
            },
            {
                "id": "208",
                "matchNum": "201801151005",
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 04:00:00",
                "saleEndTime": "",
                "homeId": "104",
                "homeName": "曼联",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_104.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "111",
                "awayName": "斯托克城",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_111.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "21",
                "leagueName": "英超",
                "leagueColor": "#FF3236",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:30:19",
                "createTime": "2018-01-15 14:30:19"
            },
            {
                "id": "209",
                "matchNum": "201801151006",
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 04:00:00",
                "saleEndTime": "",
                "homeId": "296",
                "homeName": "贝蒂斯",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_296.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "316",
                "awayName": "莱加内斯",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/8/19/fb_team_1471585483543.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "26",
                "leagueName": "西甲",
                "leagueColor": "#006533",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:30:19",
                "createTime": "2018-01-15 14:30:19"
            },
            {
                "id": "210",
                "matchNum": "201801151007",
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 05:00:00",
                "saleEndTime": "",
                "homeId": "468",
                "homeName": "埃斯托里",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_468.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "476",
                "awayName": "波尔图",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_476.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "25",
                "leagueName": "葡超",
                "leagueColor": "#008888",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:30:19",
                "createTime": "2018-01-15 14:30:19"
            },
            {
                "id": "212",
                "matchNum": "201801162001",
                "phase": "20180116",
                "matchName": "",
                "kickoffTime": "2018-01-16 19:30:00",
                "saleEndTime": "",
                "homeId": "7463",
                "homeName": "伊拉克23",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/8/2/fb_team_1470118352881.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "860",
                "awayName": "约旦U23",
                "awayLogo": "https://pic.8win.com/data/image/all/2017/8/1/fb_team_1501573472936.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "1025",
                "leagueName": "亚青赛",
                "leagueColor": "#660000",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:31:04",
                "createTime": "2018-01-15 14:31:04"
            },
            {
                "id": "213",
                "matchNum": "201801162002",
                "phase": "20180116",
                "matchName": "",
                "kickoffTime": "2018-01-16 19:30:00",
                "saleEndTime": "",
                "homeId": "1425",
                "homeName": "沙特U23",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/10/8/fb_team_1475893722115.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "7448",
                "awayName": "马来U23",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/10/9/fb_team_1476007683942.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "1025",
                "leagueName": "亚青赛",
                "leagueColor": "#660000",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:31:04",
                "createTime": "2018-01-15 14:31:04"
            },
            {
                "id": "214",
                "matchNum": "201801162003",
                "phase": "20180116",
                "matchName": "",
                "kickoffTime": "2018-01-17 02:00:00",
                "saleEndTime": "",
                "homeId": "778",
                "homeName": "波尔多",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_778.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "793",
                "awayName": "卡昂",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_793.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "19",
                "leagueName": "法甲",
                "leagueColor": "#6B2B2B",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:31:04",
                "createTime": "2018-01-15 14:31:04"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.MatchListAfter":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "204", // 赛事id
                "matchNum": "201801151001", //第三放的赛事id
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 03:00:00", //开场时间
                "saleEndTime": "", 
                "homeId": "2198", //主队id
                "homeName": "奥斯", //主队名称
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_2198.png", //主队图片
                "homePoint": "", //主队比分
                "homeLike": "", //主队点赞人数
                "awayId": "1609", //客队id
                "awayName": "奈梅亨",//客队名称
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_1609.png",//客队图片
                "awayPoint": "",//客队比分
                "awayLike": "", //客队点赞人数
                "leagueId": "39", //联赛id
                "leagueName": "荷乙", //联赛名称
                "leagueColor": "#BE2B8F", //联赛颜色
                "leagueType": "1", // 联赛类型 1足球 2篮球
                "isEnd": "0", //是否结束 1结束
                "liveNum": "0", //比赛在线人数
                "liveName": "0", //直播名称
                "liveId": "0", //直播id
                "homeWin": "0", //主队胜率
                "awayWin": "0", //客队胜率
                "deuce": "", //和局胜率
                "updateTime": "2018-01-15 14:30:18",
                "createTime": "2018-01-15 14:30:18",
                "hasBespeak": 0 //0没有预约 1有预约
            },
            {
                "id": "205",
                "matchNum": "201801151002",
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 03:00:00",
                "saleEndTime": "",
                "homeId": "10751",
                "homeName": "阿尔青年",
                "homeLogo": "https://pic.8win.com/data/image/all/2017/8/16/fb_team_1502853353139.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "1589",
                "awayName": "坎布尔",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_1589.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "39",
                "leagueName": "荷乙",
                "leagueColor": "#BE2B8F",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:30:19",
                "createTime": "2018-01-15 14:30:19"
            },
            {
                "id": "206",
                "matchNum": "201801151003",
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 03:00:00",
                "saleEndTime": "",
                "homeId": "462",
                "homeName": "摩雷伦斯",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_462.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "475",
                "awayName": "塞图巴尔",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_475.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "25",
                "leagueName": "葡超",
                "leagueColor": "#008888",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:30:19",
                "createTime": "2018-01-15 14:30:19"
            },
            {
                "id": "207",
                "matchNum": "201801151004",
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 03:45:00",
                "saleEndTime": "",
                "homeId": "1552",
                "homeName": "朗斯",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_1552.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "978",
                "awayName": "索肖",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_978.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "41",
                "leagueName": "法乙",
                "leagueColor": "#5ACA92",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:30:19",
                "createTime": "2018-01-15 14:30:19"
            },
            {
                "id": "208",
                "matchNum": "201801151005",
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 04:00:00",
                "saleEndTime": "",
                "homeId": "104",
                "homeName": "曼联",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_104.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "111",
                "awayName": "斯托克城",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_111.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "21",
                "leagueName": "英超",
                "leagueColor": "#FF3236",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:30:19",
                "createTime": "2018-01-15 14:30:19"
            },
            {
                "id": "209",
                "matchNum": "201801151006",
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 04:00:00",
                "saleEndTime": "",
                "homeId": "296",
                "homeName": "贝蒂斯",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_296.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "316",
                "awayName": "莱加内斯",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/8/19/fb_team_1471585483543.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "26",
                "leagueName": "西甲",
                "leagueColor": "#006533",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:30:19",
                "createTime": "2018-01-15 14:30:19"
            },
            {
                "id": "210",
                "matchNum": "201801151007",
                "phase": "20180115",
                "matchName": "",
                "kickoffTime": "2018-01-16 05:00:00",
                "saleEndTime": "",
                "homeId": "468",
                "homeName": "埃斯托里",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_468.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "476",
                "awayName": "波尔图",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_476.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "25",
                "leagueName": "葡超",
                "leagueColor": "#008888",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:30:19",
                "createTime": "2018-01-15 14:30:19"
            },
            {
                "id": "212",
                "matchNum": "201801162001",
                "phase": "20180116",
                "matchName": "",
                "kickoffTime": "2018-01-16 19:30:00",
                "saleEndTime": "",
                "homeId": "7463",
                "homeName": "伊拉克23",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/8/2/fb_team_1470118352881.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "860",
                "awayName": "约旦U23",
                "awayLogo": "https://pic.8win.com/data/image/all/2017/8/1/fb_team_1501573472936.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "1025",
                "leagueName": "亚青赛",
                "leagueColor": "#660000",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:31:04",
                "createTime": "2018-01-15 14:31:04"
            },
            {
                "id": "213",
                "matchNum": "201801162002",
                "phase": "20180116",
                "matchName": "",
                "kickoffTime": "2018-01-16 19:30:00",
                "saleEndTime": "",
                "homeId": "1425",
                "homeName": "沙特U23",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/10/8/fb_team_1475893722115.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "7448",
                "awayName": "马来U23",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/10/9/fb_team_1476007683942.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "1025",
                "leagueName": "亚青赛",
                "leagueColor": "#660000",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:31:04",
                "createTime": "2018-01-15 14:31:04"
            },
            {
                "id": "214",
                "matchNum": "201801162003",
                "phase": "20180116",
                "matchName": "",
                "kickoffTime": "2018-01-17 02:00:00",
                "saleEndTime": "",
                "homeId": "778",
                "homeName": "波尔多",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_778.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "793",
                "awayName": "卡昂",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_793.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "19",
                "leagueName": "法甲",
                "leagueColor": "#6B2B2B",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "updateTime": "2018-01-15 14:31:04",
                "createTime": "2018-01-15 14:31:04"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeMatch.BespeakList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "271",
                "matchNum": "201801184004",
                "phase": "20180118",
                "matchName": "",
                "kickoffTime": "2018-01-19 04:30:00",
                "saleEndTime": "",
                "homeId": "316",
                "homeName": "莱加内斯",
                "homeLogo": "https://pic.8win.com/data/image/all/2016/8/19/fb_team_1471585483543.png",
                "homePoint": "",
                "homeLike": "",
                "awayId": "291",
                "awayName": "皇马",
                "awayLogo": "https://pic.8win.com/data/image/all/2016/5/30/team_291.png",
                "awayPoint": "",
                "awayLike": "",
                "leagueId": "63",
                "leagueName": "国王杯",
                "leagueColor": "#336699",
                "leagueType": "1",
                "isEnd": "0",
                "liveNum": "0",
                "liveName": "0",
                "liveId": "0",
                "homeWin": "0",
                "awayWin": "0",
                "deuce": "",
                "updateTime": "2018-01-16 10:22:47",
                "createTime": "2018-01-16 10:22:47"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.MatchNewsList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "1", //爆料本地id
                "newsId": "177788", //爆料第三方id
                "title": "韩国U23一名前锋停赛", //爆料标题
                "matchNum": "201801173018", //所属比赛第三方id
                "phase": "20180117", //彩票彩期
                "content": "<p>韩国U23主力前锋金亮焕（2场）上场比赛吃到红牌，本轮被罚停赛。</p>", //内容
                "publishTime": "2018-01-16 17:00:07", //爆料发布日期
                "authorName": "qinbingchun", //爆料作者
                "newsLevel": "1", //爆料等级，1：等级一、2：等级二、3：等级三
                "newsType": "6", //爆料类型
                "labels": "亚青赛，韩国U23", //爆料标签
                "thumbnail": "https://pic.8win.com//cms/image/all/2018/1/16/85c2c6bc-70e7-4e21-96b5-5cf630114104.jpg", //缩略图
                "teamType": "1",    //主客队类型，1：主队、2：客队
                "updateTime": "2018-01-17 16:20:57",
                "createTime": "2018-01-17 16:20:57"
            },
            {
                "id": "10",
                "newsId": "177805",
                "title": "韩国U23打平即可出线 澳大利亚必须全力以赴",
                "matchNum": "201801173018",
                "phase": "20180117",
                "content": "<p>韩国U23小组赛两轮1胜1平积4分目前排名小组头名，此役只要打平即可宣告出线；排名小组第三的澳大利亚已经失去了出线主动权，本场比赛必须赢球才能确保出线。</p><p><br/></p>",
                "publishTime": "2018-01-17 09:32:47",
                "authorName": "高级动物",
                "newsLevel": "2",
                "newsType": "12",
                "labels": "亚青赛，韩国U23",
                "thumbnail": "https://pic.8win.com//cms/image/all/2018/1/17/4df03bc7-7427-4228-bf3e-8e9ddd3ddb70.jpg",
                "teamType": "1",
                "updateTime": "2018-01-17 16:20:58",
                "createTime": "2018-01-17 16:20:58"
            },
            {
                "id": "12",
                "newsId": "177808",
                "title": "澳大利亚主帅：坚持打法",
                "matchNum": "201801173018",
                "phase": "20180117",
                "content": "<p>澳大利亚上场比赛在控球率高达76%的情况下还是爆冷输给了越南，这场失利也将澳大利亚推向了不利的局面。赛前澳大利亚主帅米利西奇表示：“我会坚持目前的打法，最后一场比赛球员们做好了准备”。</p>",
                "publishTime": "2018-01-17 10:02:16",
                "authorName": "高级动物",
                "newsLevel": "2",
                "newsType": "12",
                "labels": "亚青赛，澳大利亚U23",
                "thumbnail": "https://pic.8win.com//cms/image/all/2018/1/17/a54e67ea-894f-46ca-9b98-83457ddde88e.jpg",
                "teamType": "2",
                "updateTime": "2018-01-17 16:20:58",
                "createTime": "2018-01-17 16:20:58"
            },
            {
                "id": "14",
                "newsId": "177810",
                "title": "澳大利亚U23两前锋有望重新回归首发",
                "matchNum": "201801173018",
                "phase": "20180117",
                "content": "<p>澳大利亚两名前锋卡马乌和布莱克伍德都因伤未能在上场比赛中首发，经过恢复后本轮有望首发出战。</p><p><br/></p>",
                "publishTime": "2018-01-17 10:06:11",
                "authorName": "高级动物",
                "newsLevel": "2",
                "newsType": "11",
                "labels": "亚青赛，澳大利亚U23",
                "thumbnail": "",
                "teamType": "2",
                "updateTime": "2018-01-17 16:20:58",
                "createTime": "2018-01-17 16:20:58"
            }
        ]
    
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.FirstVideoConsultList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "2",
                "consultClassName": "足球", //分类名称
                "top": "0",
                "status": "1",
                "updateTime": "2018-01-17 17:18:39",
                "createTime": "2018-01-10 10:53:35",
                "list": [  //下面是 20个视频数据
                    {
                        "id": "28",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "2",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:38",
                        "createTime": "2018-01-10 11:36:13",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "12",
                        "consultName": "dddd",
                        "consultImg": "imgUrl",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "2",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:19:44",
                        "createTime": "2018-01-10 11:36:24",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "11",
                        "consultName": "dddd",
                        "consultImg": "imgUrl",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "1",
                        "classId": "2",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:19:43",
                        "createTime": "2018-01-10 11:36:23",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "10",
                        "consultName": "dddd",
                        "consultImg": "imgUrl",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "2",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:19:41",
                        "createTime": "2018-01-10 11:36:22",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "9",
                        "consultName": "dddd",
                        "consultImg": "imgUrl",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "2",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:19:40",
                        "createTime": "2018-01-10 11:36:21",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "8",
                        "consultName": "dddd",
                        "consultImg": "imgUrl",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "2",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:19:38",
                        "createTime": "2018-01-10 11:36:20",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    }
                ]
            },
            {
                "id": "3",
                "consultClassName": "篮球",
                "top": "0",
                "status": "1",
                "updateTime": "2018-01-17 17:18:37",
                "createTime": "2018-01-17 17:18:37",
                "list": [
                    {
                        "id": "30",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "3",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:41",
                        "createTime": "2018-01-10 11:36:19",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "19",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "3",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:17",
                        "createTime": "2018-01-10 11:36:19",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "18",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "3",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:16",
                        "createTime": "2018-01-10 11:36:19",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "17",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "2",
                        "classId": "3",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:15",
                        "createTime": "2018-01-10 11:36:13",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "16",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "3",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:14",
                        "createTime": "2018-01-10 11:36:13",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "15",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "3",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:13",
                        "createTime": "2018-01-10 11:36:12",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "14",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "10",
                        "classId": "3",
                        "authorId": "2",
                        "recommendId": "3",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:11",
                        "createTime": "2018-01-10 11:36:11",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    }
                ]
            },
            {
                "id": "4",
                "consultClassName": "综合体育",
                "top": "0",
                "status": "1",
                "updateTime": "2018-01-17 17:19:01",
                "createTime": "2018-01-17 17:19:01",
                "list": [
                    {
                        "id": "31",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "4",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:43",
                        "createTime": "2018-01-10 11:36:19",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "27",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "4",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:34",
                        "createTime": "2018-01-10 11:36:12",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "26",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "10",
                        "classId": "4",
                        "authorId": "2",
                        "recommendId": "3",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:32",
                        "createTime": "2018-01-10 11:36:11",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "25",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "4",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:31",
                        "createTime": "2018-01-10 11:36:19",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "21",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "4",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:30",
                        "createTime": "2018-01-10 11:36:12",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "24",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "4",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:30",
                        "createTime": "2018-01-10 11:36:19",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "22",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "0",
                        "classId": "4",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:27",
                        "createTime": "2018-01-10 11:36:13",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "23",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "2",
                        "classId": "4",
                        "authorId": "2",
                        "recommendId": "2",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:26",
                        "createTime": "2018-01-10 11:36:13",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    },
                    {
                        "id": "20",
                        "consultName": "dddd",
                        "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                        "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                        "consultDetail": "内容",
                        "team": [
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            },
                            {
                                "id": "1",
                                "teamName": "火箭队1",
                                "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                                "pid": "1",
                                "status": "1",
                                "updateTime": "2018-01-09 15:56:05",
                                "createTime": "2018-01-09 15:53:51",
                                "point": "78"
                            }
                        ],
                        "leagueId": "1",
                        "top": "10000000",
                        "num": "10",
                        "classId": "4",
                        "authorId": "2",
                        "recommendId": "3",
                        "hot": "1",
                        "status": "1",
                        "updateTime": "2018-01-17 17:27:19",
                        "createTime": "2018-01-10 11:36:11",
                        "commentNum": "",
                        "leagueName": "NBA",
                        "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
                    }
                ]
            },
            {
                "id": "5",
                "consultClassName": "橄榄球",
                "top": "0",
                "status": "1",
                "updateTime": "2018-01-17 17:19:12",
                "createTime": "2018-01-17 17:19:12",
                "list": []
            },
            {
                "id": "6",
                "consultClassName": "棒球",
                "top": "0",
                "status": "1",
                "updateTime": "2018-01-17 17:19:20",
                "createTime": "2018-01-17 17:19:20",
                "list": []
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.HotVideoConsultList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "11",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "1",
                "classId": "2",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:21",
                "createTime": "2018-01-10 11:36:23",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "10",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "2",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:19",
                "createTime": "2018-01-10 11:36:22",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "9",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "2",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:18",
                "createTime": "2018-01-10 11:36:21",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "8",
                "consultName": "dddd",
                "consultImg": "imgUrl",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "2",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:16",
                "createTime": "2018-01-10 11:36:20",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "31",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "4",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:14",
                "createTime": "2018-01-10 11:36:19",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "30",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "3",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:10",
                "createTime": "2018-01-10 11:36:19",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "29",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "2",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:09",
                "createTime": "2018-01-10 11:36:13",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "28",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "2",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:07",
                "createTime": "2018-01-10 11:36:13",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "27",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "4",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:06",
                "createTime": "2018-01-10 11:36:12",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "26",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "10",
                "classId": "4",
                "authorId": "2",
                "recommendId": "3",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:05",
                "createTime": "2018-01-10 11:36:11",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "25",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "4",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:04",
                "createTime": "2018-01-10 11:36:19",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "24",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "4",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:02",
                "createTime": "2018-01-10 11:36:19",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "23",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "2",
                "classId": "4",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:01",
                "createTime": "2018-01-10 11:36:13",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "22",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "4",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:27:59",
                "createTime": "2018-01-10 11:36:13",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "21",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "4",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:27:57",
                "createTime": "2018-01-10 11:36:12",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.GoodVideoConsultList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "29",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": "",
                "leagueId": "1",
                "top": "10000000",
                "num": "2",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-17 18:28:09",
                "createTime": "2018-01-10 11:36:13",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "2",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "10",
                "classId": "1",
                "authorId": "2",
                "recommendId": "3",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-16 18:03:34",
                "createTime": "2018-01-10 11:36:11",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "1",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "2",
                        "teamName": "湖人队",
                        "teamImg": "https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1494507663,2576945134&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:57:43",
                        "createTime": "2018-01-09 15:57:43",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "1",
                "classId": "1",
                "authorId": "2",
                "recommendId": "3",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-16 17:57:47",
                "createTime": "2018-01-10 11:34:27",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "5",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "2",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-16 17:53:57",
                "createTime": "2018-01-10 11:36:13",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "7",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-15 19:13:55",
                "createTime": "2018-01-10 11:36:19",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "6",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-15 19:13:54",
                "createTime": "2018-01-10 11:36:19",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "4",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-15 19:13:53",
                "createTime": "2018-01-10 11:36:13",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            },
            {
                "id": "3",
                "consultName": "dddd",
                "consultImg": "http://img5.imgtn.bdimg.com/it/u=3560498528,2305544035&fm=27&gp=0.jpg",
                "video": "http://video.310tv.com/football/2018/01/20180115duote.MP4",
                "consultDetail": "内容",
                "team": [
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    },
                    {
                        "id": "1",
                        "teamName": "火箭队1",
                        "teamImg": "https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3165137108,547129742&fm=27&gp=0.jpg",
                        "pid": "1",
                        "status": "1",
                        "updateTime": "2018-01-09 15:56:05",
                        "createTime": "2018-01-09 15:53:51",
                        "point": "78"
                    }
                ],
                "leagueId": "1",
                "top": "10000000",
                "num": "0",
                "classId": "1",
                "authorId": "2",
                "recommendId": "2",
                "hot": "1",
                "status": "1",
                "updateTime": "2018-01-15 19:13:52",
                "createTime": "2018-01-10 11:36:12",
                "commentNum": "",
                "leagueName": "NBA",
                "leagueImg": "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1311003514,2939957002&fm=27&gp=0.jpg"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.MatchCommentList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "3", //评论id
                "fid": "150", //所属赛事id
                "userId": "4", //发评论的用户id
                "comment": "abc", //评论内容
                "type": "1", // 1是用户发的 2是主持人发的
                "status": "1",
                "updateTime": "2018-01-18 18:01:36",
                "createTime": "2018-01-18 18:01:36",
                "nickName": "运动迷", //用户昵称
                "photo": "" //用户头像
            },
            {
                "id": "2",
                "fid": "150",
                "userId": "4",
                "comment": "abc",
                "type": "1",
                "status": "1",
                "updateTime": "2018-01-18 18:01:35",
                "createTime": "2018-01-18 18:01:35",
                "nickName": "运动迷",
                "photo": ""
            },
            {
                "id": "1",
                "fid": "150",
                "userId": "4",
                "comment": "abc",
                "type": "1",
                "status": "1",
                "updateTime": "2018-01-18 17:58:33",
                "createTime": "2018-01-18 17:58:33",
                "nickName": "运动迷",
                "photo": ""
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.GetAdvertisingSwitch":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": {
            "id": "1",
            "configName": "ios竞猜广告开关",
            "configData": "1", //1是开启 0是关闭
            "type": "0",
            "status": "1",
            "updateTime": "2018-01-19 11:36:43",
            "createTime": "2018-01-19 11:36:43"
        }
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.GetAdvertisingPosition":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "1", //广告 id
                "title": "123", //广告标题 
                "content": "1234567", // 广告内容
                "imgUrl": "http://imgsrc.baidu.com/imgad/pic/item/03087bf40ad162d92a1d14821bdfa9ec8b13cdb9.jpg", //广告图片
                "url": "https://www.baidu.com/", //广告要打开的链接 如不是网页 为对应的 主键id
                "type": "3", //广告类型 1咨询 2比赛 3网页 4快讯
                "position": "1", //入口位置 1 咨询详情广告 2 赛事竞猜广告 3 退出app广告 4咨询列表随机广告
                "top": "0",
                "status": "1",
                "updateTime": "2018-01-19 15:01:54",
                "createTime": "2018-01-19 14:59:32"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.About":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": {
            "id": "2",
            "configName": "我是关于",
            "configData": "<p>我是关于的富文本</p>",
            "type": "0",
            "status": "1",
            "updateTime": "2018-01-22 17:41:19",
            "createTime": "2018-01-22 17:41:06"
        }
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.MatchNqHistory":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": {
            "homeTeamId": "14", //当前比赛主队id
            "awayTeamId": "29", //当前比赛客队id
            "awayHistory": [ //客队历史记录
                {
                    "id": "2",
                    "matchId": "5349412", //比赛id
                    "matchTime": "2018-01-24 09:00:00", //比赛开始时间
                    "hId": "29", //主队id
                    "hName": "雷霆", //主队队名
                    "hPoint": "109", //主队得分
                    "aId": "4", //主队id
                    "aName": "篮网", //主队队名
                    "aPoint": "108", //主队得分
                    "createTime": "2018-01-24 18:09:43"
                },
                {
                    "id": "836",
                    "matchId": "5349389",
                    "matchTime": "2018-01-21 04:30:00",
                    "hId": "9",
                    "hName": "骑士",
                    "hPoint": "124",
                    "aId": "29",
                    "aName": "雷霆",
                    "aPoint": "148",
                    "createTime": "2018-01-24 18:18:18"
                },
                {
                    "id": "741",
                    "matchId": "5349375",
                    "matchTime": "2018-01-18 09:00:00",
                    "hId": "29",
                    "hName": "雷霆",
                    "hPoint": "114",
                    "aId": "20",
                    "aName": "湖人",
                    "aPoint": "90",
                    "createTime": "2018-01-24 18:14:52"
                },
                {
                    "id": "726",
                    "matchId": "5349358",
                    "matchTime": "2018-01-16 09:00:00",
                    "hId": "29",
                    "hName": "雷霆",
                    "hPoint": "95",
                    "aId": "22",
                    "aName": "国王",
                    "aPoint": "88",
                    "createTime": "2018-01-24 18:14:50"
                },
                {
                    "id": "710",
                    "matchId": "5349344",
                    "matchTime": "2018-01-14 06:00:00",
                    "hId": "14",
                    "hName": "黄蜂",
                    "hPoint": "91",
                    "aId": "29",
                    "aName": "雷霆",
                    "aPoint": "101",
                    "createTime": "2018-01-24 18:14:49"
                },
                {
                    "id": "692",
                    "matchId": "5349326",
                    "matchTime": "2018-01-11 09:00:00",
                    "hId": "28",
                    "hName": "森林狼",
                    "hPoint": "104",
                    "aId": "29",
                    "aName": "雷霆",
                    "aPoint": "88",
                    "createTime": "2018-01-24 18:14:47"
                },
                {
                    "id": "681",
                    "matchId": "5349315",
                    "matchTime": "2018-01-10 09:00:00",
                    "hId": "29",
                    "hName": "雷霆",
                    "hPoint": "106",
                    "aId": "30",
                    "aName": "开拓者",
                    "aPoint": "117",
                    "createTime": "2018-01-24 18:14:47"
                },
                {
                    "id": "669",
                    "matchId": "5349303",
                    "matchTime": "2018-01-08 09:00:00",
                    "hId": "21",
                    "hName": "太阳",
                    "hPoint": "114",
                    "aId": "29",
                    "aName": "雷霆",
                    "aPoint": "100",
                    "createTime": "2018-01-24 18:14:45"
                },
                {
                    "id": "648",
                    "matchId": "5349282",
                    "matchTime": "2018-01-05 11:30:00",
                    "hId": "19",
                    "hName": "快船",
                    "hPoint": "117",
                    "aId": "29",
                    "aName": "雷霆",
                    "aPoint": "127",
                    "createTime": "2018-01-24 18:14:44"
                },
                {
                    "id": "646",
                    "matchId": "5349280",
                    "matchTime": "2018-01-04 11:30:00",
                    "hId": "20",
                    "hName": "湖人",
                    "hPoint": "96",
                    "aId": "29",
                    "aName": "雷霆",
                    "aPoint": "133",
                    "createTime": "2018-01-24 18:14:44"
                }
            ],
            "homeHistory": [ //主队历史记录
                {
                    "id": "849",
                    "matchId": "5349402",
                    "matchTime": "2018-01-23 08:00:00",
                    "hId": "14",
                    "hName": "黄蜂",
                    "hPoint": "112",
                    "aId": "22",
                    "aName": "国王",
                    "aPoint": "107",
                    "createTime": "2018-01-24 18:18:19"
                },
                {
                    "id": "838",
                    "matchId": "5349391",
                    "matchTime": "2018-01-21 08:00:00",
                    "hId": "14",
                    "hName": "黄蜂",
                    "hPoint": "105",
                    "aId": "15",
                    "aName": "热火",
                    "aPoint": "106",
                    "createTime": "2018-01-24 18:18:18"
                },
                {
                    "id": "734",
                    "matchId": "5349368",
                    "matchTime": "2018-01-18 08:00:00",
                    "hId": "14",
                    "hName": "黄蜂",
                    "hPoint": "133",
                    "aId": "17",
                    "aName": "奇才",
                    "aPoint": "109",
                    "createTime": "2018-01-24 18:14:51"
                },
                {
                    "id": "719",
                    "matchId": "5349353",
                    "matchTime": "2018-01-16 01:30:00",
                    "hId": "10",
                    "hName": "活塞",
                    "hPoint": "107",
                    "aId": "14",
                    "aName": "黄蜂",
                    "aPoint": "118",
                    "createTime": "2018-01-24 18:14:50"
                },
                {
                    "id": "710",
                    "matchId": "5349344",
                    "matchTime": "2018-01-14 06:00:00",
                    "hId": "14",
                    "hName": "黄蜂",
                    "hPoint": "91",
                    "aId": "29",
                    "aName": "雷霆",
                    "aPoint": "101",
                    "createTime": "2018-01-24 18:14:49"
                },
                {
                    "id": "699",
                    "matchId": "5349333",
                    "matchTime": "2018-01-13 08:00:00",
                    "hId": "14",
                    "hName": "黄蜂",
                    "hPoint": "99",
                    "aId": "31",
                    "aName": "爵士",
                    "aPoint": "88",
                    "createTime": "2018-01-24 18:14:48"
                },
                {
                    "id": "684",
                    "matchId": "5349318",
                    "matchTime": "2018-01-11 08:00:00",
                    "hId": "14",
                    "hName": "黄蜂",
                    "hPoint": "111",
                    "aId": "23",
                    "aName": "独行侠",
                    "aPoint": "115",
                    "createTime": "2018-01-24 18:14:47"
                },
                {
                    "id": "658",
                    "matchId": "5349292",
                    "matchTime": "2018-01-06 11:30:00",
                    "hId": "20",
                    "hName": "湖人",
                    "hPoint": "94",
                    "aId": "14",
                    "aName": "黄蜂",
                    "aPoint": "108",
                    "createTime": "2018-01-24 18:14:45"
                },
                {
                    "id": "633",
                    "matchId": "5349267",
                    "matchTime": "2018-01-03 11:00:00",
                    "hId": "22",
                    "hName": "国王",
                    "hPoint": "111",
                    "aId": "14",
                    "aName": "黄蜂",
                    "aPoint": "131",
                    "createTime": "2018-01-24 18:14:42"
                },
                {
                    "id": "623",
                    "matchId": "5349257",
                    "matchTime": "2018-01-01 08:00:00",
                    "hId": "19",
                    "hName": "快船",
                    "hPoint": "106",
                    "aId": "14",
                    "aName": "黄蜂",
                    "aPoint": "98",
                    "createTime": "2018-01-24 18:14:42"
                }
            ],
            "allHistory": [ 双方历史对战记录
                {
                    "id": "710",
                    "matchId": "5349344",
                    "matchTime": "2018-01-14 06:00:00",
                    "hId": "14",
                    "hName": "黄蜂",
                    "hPoint": "91",
                    "aId": "29",
                    "aName": "雷霆",
                    "aPoint": "101",
                    "createTime": "2018-01-24 18:14:49"
                },
                {
                    "id": "475",
                    "matchId": "5349109",
                    "matchTime": "2017-12-12 09:00:00",
                    "hId": "29",
                    "hName": "雷霆",
                    "hPoint": "103",
                    "aId": "14",
                    "aName": "黄蜂",
                    "aPoint": "116",
                    "createTime": "2018-01-24 18:13:33"
                }
            ]
        }
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.MatchNqPlayer":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": {
            "awayPlayer": [
                {
                    "id": "314",
                    "playerId": "835", //队员id
                    "playerName": "凯尔-辛格勒", //队员名称
                    "isMainForce": "0", //是否主力
                    "enter": "4", //出场数
                    "first": "4", //先发次数
                    "onLine": "3.2", //在场时间
                    "hitRate": "60.00%", //命中率
                    "threePoints": "0.00%", //三分命中率
                    "foulShot": "0.00%", //罚球命中率
                    "backboard": "0.5", //篮板
                    "assists": "0.0", //助攻
                    "steals": "0.2", //抢断
                    "blockShot": "0.0", //盖帽
                    "miss": "0.0", //失误
                    "foul": "0.0", //犯规
                    "score": "1.5", //得分
                    "teamId": "29", //所属队伍id
                    "updateTime": "2018-01-25 18:24:20",
                    "createTime": "2018-01-25 18:24:20"
                },
                {
                    "id": "305",
                    "playerId": "519",
                    "playerName": "拉塞尔-威斯布鲁克",
                    "isMainForce": "1",
                    "enter": "24",
                    "first": "24",
                    "onLine": "35.2",
                    "hitRate": "42.83%",
                    "threePoints": "28.70%",
                    "foulShot": "72.50%",
                    "backboard": "9.3",
                    "assists": "9.6",
                    "steals": "2.0",
                    "blockShot": "0.1",
                    "miss": "4.5",
                    "foul": "2.2",
                    "score": "24.3",
                    "teamId": "29",
                    "updateTime": "2018-01-25 18:24:19",
                    "createTime": "2018-01-25 18:24:19"
                },
                {
                    "id": "307",
                    "playerId": "720",
                    "playerName": "帕特里克-帕特森",
                    "isMainForce": "0",
                    "enter": "24",
                    "first": "24",
                    "onLine": "15.1",
                    "hitRate": "43.06%",
                    "threePoints": "47.92%",
                    "foulShot": "87.50%",
                    "backboard": "1.5",
                    "assists": "0.6",
                    "steals": "0.6",
                    "blockShot": "0.1",
                    "miss": "0.4",
                    "foul": "1.2",
                    "score": "3.9",
                    "teamId": "29",
                    "updateTime": "2018-01-25 18:24:19",
                    "createTime": "2018-01-25 18:24:19"
                },
                {
                    "id": "308",
                    "playerId": "314",
                    "playerName": "雷蒙德-费尔顿",
                    "isMainForce": "0",
                    "enter": "24",
                    "first": "24",
                    "onLine": "18.3",
                    "hitRate": "42.01%",
                    "threePoints": "30.43%",
                    "foulShot": "72.22%",
                    "backboard": "2.3",
                    "assists": "3.0",
                    "steals": "0.6",
                    "blockShot": "0.2",
                    "miss": "0.8",
                    "foul": "0.9",
                    "score": "7.3",
                    "teamId": "29",
                    "updateTime": "2018-01-25 18:24:19",
                    "createTime": "2018-01-25 18:24:19"
                },
                {
                    "id": "313",
                    "playerId": "1435",
                    "playerName": "杰里米-格兰特",
                    "isMainForce": "0",
                    "enter": "24",
                    "first": "24",
                    "onLine": "21.3",
                    "hitRate": "47.59%",
                    "threePoints": "17.14%",
                    "foulShot": "75.00%",
                    "backboard": "4.2",
                    "assists": "0.8",
                    "steals": "0.4",
                    "blockShot": "0.8",
                    "miss": "0.9",
                    "foul": "1.9",
                    "score": "7.6",
                    "teamId": "29",
                    "updateTime": "2018-01-25 18:24:19",
                    "createTime": "2018-01-25 18:24:19"
                },
                {
                    "id": "311",
                    "playerId": "716",
                    "playerName": "保罗-乔治",
                    "isMainForce": "0",
                    "enter": "23",
                    "first": "23",
                    "onLine": "38.0",
                    "hitRate": "46.27%",
                    "threePoints": "43.01%",
                    "foulShot": "78.43%",
                    "backboard": "6.0",
                    "assists": "3.0",
                    "steals": "2.1",
                    "blockShot": "0.5",
                    "miss": "2.4",
                    "foul": "3.1",
                    "score": "22.6",
                    "teamId": "29",
                    "updateTime": "2018-01-25 18:24:19",
                    "createTime": "2018-01-25 18:24:19"
                },
                {
                    "id": "312",
                    "playerId": "226",
                    "playerName": "卡梅隆-安东尼",
                    "isMainForce": "0",
                    "enter": "23",
                    "first": "23",
                    "onLine": "32.5",
                    "hitRate": "44.76%",
                    "threePoints": "39.55%",
                    "foulShot": "80.82%",
                    "backboard": "6.5",
                    "assists": "1.5",
                    "steals": "0.7",
                    "blockShot": "0.5",
                    "miss": "1.2",
                    "foul": "2.8",
                    "score": "18.6",
                    "teamId": "29",
                    "updateTime": "2018-01-25 18:24:19",
                    "createTime": "2018-01-25 18:24:19"
                },
                {
                    "id": "306",
                    "playerId": "998",
                    "playerName": "史蒂文-亚当斯",
                    "isMainForce": "1",
                    "enter": "21",
                    "first": "21",
                    "onLine": "30.7",
                    "hitRate": "62.23%",
                    "threePoints": "0.00%",
                    "foulShot": "54.84%",
                    "backboard": "8.4",
                    "assists": "1.0",
                    "steals": "1.1",
                    "blockShot": "1.0",
                    "miss": "1.8",
                    "foul": "3.0",
                    "score": "12.8",
                    "teamId": "29",
                    "updateTime": "2018-01-25 18:24:19",
                    "createTime": "2018-01-25 18:24:19"
                },
                {
                    "id": "309",
                    "playerId": "1619",
                    "playerName": "阿莱克斯-阿布林斯",
                    "isMainForce": "0",
                    "enter": "21",
                    "first": "21",
                    "onLine": "12.2",
                    "hitRate": "38.98%",
                    "threePoints": "35.71%",
                    "foulShot": "86.67%",
                    "backboard": "1.1",
                    "assists": "0.3",
                    "steals": "0.2",
                    "blockShot": "0.0",
                    "miss": "0.2",
                    "foul": "1.2",
                    "score": "3.5",
                    "teamId": "29",
                    "updateTime": "2018-01-25 18:24:19",
                    "createTime": "2018-01-25 18:24:19"
                },
                {
                    "id": "310",
                    "playerId": "1450",
                    "playerName": "约什-休斯蒂斯",
                    "isMainForce": "0",
                    "enter": "21",
                    "first": "21",
                    "onLine": "14.7",
                    "hitRate": "35.09%",
                    "threePoints": "23.68%",
                    "foulShot": "37.50%",
                    "backboard": "2.5",
                    "assists": "0.3",
                    "steals": "0.3",
                    "blockShot": "0.7",
                    "miss": "0.4",
                    "foul": "1.3",
                    "score": "2.5",
                    "teamId": "29",
                    "updateTime": "2018-01-25 18:24:19",
                    "createTime": "2018-01-25 18:24:19"
                },
                {
                    "id": "315",
                    "playerId": "235",
                    "playerName": "尼克-科里森",
                    "isMainForce": "0",
                    "enter": "2",
                    "first": "2",
                    "onLine": "6.5",
                    "hitRate": "100.00%",
                    "threePoints": "-",
                    "foulShot": "-",
                    "backboard": "2.0",
                    "assists": "0.0",
                    "steals": "0.0",
                    "blockShot": "0.0",
                    "miss": "0.0",
                    "foul": "0.0",
                    "score": "2.0",
                    "teamId": "29",
                    "updateTime": "2018-01-25 18:24:20",
                    "createTime": "2018-01-25 18:24:20"
                },
                {
                    "id": "304",
                    "playerId": "1010",
                    "playerName": "安德烈-罗伯森",
                    "isMainForce": "1",
                    "enter": "18",
                    "first": "18",
                    "onLine": "27.7",
                    "hitRate": "52.11%",
                    "threePoints": "28.57%",
                    "foulShot": "27.27%",
                    "backboard": "5.1",
                    "assists": "1.3",
                    "steals": "1.2",
                    "blockShot": "0.7",
                    "miss": "0.8",
                    "foul": "2.3",
                    "score": "4.8",
                    "teamId": "29",
                    "updateTime": "2018-01-25 18:24:19",
                    "createTime": "2018-01-25 18:24:19"
                }
            ],
            "homePlayer": [
                {
                    "id": "140",
                    "playerId": "812",
                    "playerName": "肯巴-沃克",
                    "isMainForce": "1",
                    "enter": "23",
                    "first": "23",
                    "onLine": "34.7",
                    "hitRate": "42.14%",
                    "threePoints": "34.88%",
                    "foulShot": "80.56%",
                    "backboard": "3.7",
                    "assists": "6.3",
                    "steals": "0.9",
                    "blockShot": "0.4",
                    "miss": "2.2",
                    "foul": "1.3",
                    "score": "21.1",
                    "teamId": "14",
                    "updateTime": "2018-01-25 18:14:56",
                    "createTime": "2018-01-25 18:14:56"
                },
                {
                    "id": "141",
                    "playerId": "311",
                    "playerName": "马文-威廉姆斯",
                    "isMainForce": "1",
                    "enter": "23",
                    "first": "23",
                    "onLine": "26.8",
                    "hitRate": "46.99%",
                    "threePoints": "45.65%",
                    "foulShot": "90.00%",
                    "backboard": "4.6",
                    "assists": "1.0",
                    "steals": "0.5",
                    "blockShot": "0.3",
                    "miss": "0.5",
                    "foul": "1.5",
                    "score": "9.9",
                    "teamId": "14",
                    "updateTime": "2018-01-25 18:14:56",
                    "createTime": "2018-01-25 18:14:56"
                },
                {
                    "id": "144",
                    "playerId": "925",
                    "playerName": "杰里米-兰姆",
                    "isMainForce": "0",
                    "enter": "23",
                    "first": "22",
                    "onLine": "26.7",
                    "hitRate": "45.35%",
                    "threePoints": "37.65%",
                    "foulShot": "86.57%",
                    "backboard": "4.9",
                    "assists": "2.9",
                    "steals": "1.1",
                    "blockShot": "0.5",
                    "miss": "1.2",
                    "foul": "1.5",
                    "score": "13.4",
                    "teamId": "14",
                    "updateTime": "2018-01-25 18:14:56",
                    "createTime": "2018-01-25 18:14:56"
                },
                {
                    "id": "145",
                    "playerId": "1616",
                    "playerName": "弗兰克-卡明斯基",
                    "isMainForce": "0",
                    "enter": "23",
                    "first": "23",
                    "onLine": "23.9",
                    "hitRate": "39.32%",
                    "threePoints": "32.50%",
                    "foulShot": "77.42%",
                    "backboard": "3.8",
                    "assists": "1.5",
                    "steals": "0.5",
                    "blockShot": "0.4",
                    "miss": "1.0",
                    "foul": "1.1",
                    "score": "10.3",
                    "teamId": "14",
                    "updateTime": "2018-01-25 18:14:56",
                    "createTime": "2018-01-25 18:14:56"
                },
                {
                    "id": "146",
                    "playerId": "270",
                    "playerName": "德怀特-霍华德",
                    "isMainForce": "0",
                    "enter": "23",
                    "first": "23",
                    "onLine": "31.0",
                    "hitRate": "57.20%",
                    "threePoints": "0.00%",
                    "foulShot": "54.97%",
                    "backboard": "13.2",
                    "assists": "1.4",
                    "steals": "0.9",
                    "blockShot": "1.6",
                    "miss": "3.0",
                    "foul": "3.1",
                    "score": "16.2",
                    "teamId": "14",
                    "updateTime": "2018-01-25 18:14:56",
                    "createTime": "2018-01-25 18:14:56"
                },
                {
                    "id": "139",
                    "playerId": "540",
                    "playerName": "尼古拉斯-巴图姆",
                    "isMainForce": "1",
                    "enter": "16",
                    "first": "16",
                    "onLine": "29.0",
                    "hitRate": "41.57%",
                    "threePoints": "27.69%",
                    "foulShot": "80.49%",
                    "backboard": "4.0",
                    "assists": "4.4",
                    "steals": "1.1",
                    "blockShot": "0.2",
                    "miss": "1.9",
                    "foul": "1.1",
                    "score": "11.8",
                    "teamId": "14",
                    "updateTime": "2018-01-25 18:14:56",
                    "createTime": "2018-01-25 18:14:56"
                },
                {
                    "id": "143",
                    "playerId": "1605",
                    "playerName": "特雷沃恩-格拉汉姆",
                    "isMainForce": "0",
                    "enter": "16",
                    "first": "16",
                    "onLine": "18.4",
                    "hitRate": "38.81%",
                    "threePoints": "39.29%",
                    "foulShot": "69.23%",
                    "backboard": "2.1",
                    "assists": "1.2",
                    "steals": "0.6",
                    "blockShot": "0.0",
                    "miss": "0.5",
                    "foul": "2.0",
                    "score": "4.5",
                    "teamId": "14",
                    "updateTime": "2018-01-25 18:14:56",
                    "createTime": "2018-01-25 18:14:56"
                },
                {
                    "id": "142",
                    "playerId": "990",
                    "playerName": "科迪-泽勒",
                    "isMainForce": "1",
                    "enter": "13",
                    "first": "13",
                    "onLine": "19.8",
                    "hitRate": "51.61%",
                    "threePoints": "100.00%",
                    "foulShot": "64.10%",
                    "backboard": "5.5",
                    "assists": "0.7",
                    "steals": "0.5",
                    "blockShot": "0.9",
                    "miss": "0.9",
                    "foul": "2.7",
                    "score": "6.9",
                    "teamId": "14",
                    "updateTime": "2018-01-25 18:14:56",
                    "createTime": "2018-01-25 18:14:56"
                }
            ]
        }
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.MatchZqPlayer":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": {
            "awayPlayer": { //客队
                "first": [ //首发
                    {
                        "id": "19", //球员号码
                        "name": "马内" //球员名称
                    },
                    {
                        "id": "9",
                        "name": "菲尔米诺"
                    },
                    {
                        "id": "11",
                        "name": "穆罕默德.萨拉"
                    },
                    {
                        "id": "12",
                        "name": "约瑟夫·戈麦斯"
                    },
                    {
                        "id": "4",
                        "name": "范迪克"
                    },
                    {
                        "id": "32",
                        "name": "马蒂普"
                    },
                    {
                        "id": "26",
                        "name": "A. Robertson"
                    },
                    {
                        "id": "5",
                        "name": "佐治奧吉尼奥·维奇纳尔顿姆"
                    },
                    {
                        "id": "21",
                        "name": "张伯伦"
                    },
                    {
                        "id": "23",
                        "name": "埃姆雷·詹"
                    },
                    {
                        "id": "1",
                        "name": "卡里乌斯"
                    }
                ],
                "bench": [ //替补
                    {
                        "id": "22",
                        "name": "米尼奥莱"
                    },
                    {
                        "id": "7",
                        "name": "米尔纳"
                    },
                    {
                        "id": "20",
                        "name": "拉拉纳"
                    },
                    {
                        "id": "28",
                        "name": "因斯"
                    },
                    {
                        "id": "17",
                        "name": "克拉万"
                    },
                    {
                        "id": "29",
                        "name": "D. Solanke"
                    },
                    {
                        "id": "66",
                        "name": "T. Arnold"
                    }
                ]
            },
            "homePlayer": { //主队
                "first": [ //首发
                    {
                        "id": "18",
                        "name": "阿尤"
                    },
                    {
                        "id": "26",
                        "name": "诺顿"
                    },
                    {
                        "id": "33",
                        "name": "费得·费尔南德斯"
                    },
                    {
                        "id": "16",
                        "name": "马丁·奥尔森"
                    },
                    {
                        "id": "5",
                        "name": "范德霍恩"
                    },
                    {
                        "id": "6",
                        "name": "A. Mawson"
                    },
                    {
                        "id": "4",
                        "name": "寄诚庸"
                    },
                    {
                        "id": "12",
                        "name": "代尔"
                    },
                    {
                        "id": "8",
                        "name": "费尔"
                    },
                    {
                        "id": "17",
                        "name": "S. C卢卡斯"
                    },
                    {
                        "id": "1",
                        "name": "法比安斯基"
                    }
                ],
                "bench": [ //替补
                    {
                        "id": "14",
                        "name": "卡罗尔"
                    },
                    {
                        "id": "13",
                        "name": "K·诺德费尔特"
                    },
                    {
                        "id": "27",
                        "name": "巴特利"
                    },
                    {
                        "id": "2",
                        "name": "博尼"
                    },
                    {
                        "id": "51",
                        "name": "罗克·梅萨"
                    },
                    {
                        "id": "11",
                        "name": "纳尔辛"
                    },
                    {
                        "id": "62",
                        "name": "O. McBurnie"
                    }
                ]
            }
        }
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.MatchZqHistory":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": {
            "homeName": "斯旺西", //当前比赛主队队名
            "awayName": "利物浦", //当前比赛客队对名
            "awayHistory": [ //客队历史记录
                {
                    "id": 189383,
                    "matchDate": 1484495940000,
                    "leagueId": 0,
                    "leagueName": "英超", //联赛
                    "homeTeamName": "曼联", //主队
                    "awayTeamName": "利物浦", //客队
                    "halfHomeGoals": 0, //主队得分
                    "halfAwayGoals": 1, //客队得分
                    "finalHomeGoals": 1, 
                    "finalAwayGoals": 1,
                    "matchDateStr": "2017-01-15 23:59:00"
                },
                {
                    "id": 189230,
                    "matchDate": 1480858200000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "伯恩茅斯",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 2,
                    "finalHomeGoals": 4,
                    "finalAwayGoals": 3,
                    "matchDateStr": "2016-12-04 21:30:00"
                },
                {
                    "id": 188971,
                    "matchDate": 1480448700000,
                    "leagueId": 0,
                    "leagueName": "英联杯",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "利兹联",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 2,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2016-11-30 03:45:00"
                },
                {
                    "id": 188790,
                    "matchDate": 1480172400000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "桑德兰",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 2,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2016-11-26 23:00:00"
                },
                {
                    "id": 188460,
                    "matchDate": 1479567600000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "南安普敦",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 0,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2016-11-19 23:00:00"
                },
                {
                    "id": 187815,
                    "matchDate": 1478441700000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "沃特福德",
                    "halfHomeGoals": 3,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 6,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2016-11-06 22:15:00"
                },
                {
                    "id": 187395,
                    "matchDate": 1477758600000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "水晶宫",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 2,
                    "halfAwayGoals": 3,
                    "finalHomeGoals": 2,
                    "finalAwayGoals": 4,
                    "matchDateStr": "2016-10-30 00:30:00"
                },
                {
                    "id": 187195,
                    "matchDate": 1477421100000,
                    "leagueId": 0,
                    "leagueName": "英联杯",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "热刺",
                    "halfHomeGoals": 1,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 2,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2016-10-26 02:45:00"
                },
                {
                    "id": 187016,
                    "matchDate": 1477153800000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "西布罗姆",
                    "halfHomeGoals": 2,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 2,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2016-10-23 00:30:00"
                },
                {
                    "id": 186739,
                    "matchDate": 1476730800000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "曼联",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 0,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2016-10-18 03:00:00"
                },
                {
                    "id": 185866,
                    "matchDate": 1475321400000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 1,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 2,
                    "matchDateStr": "2016-10-01 19:30:00"
                },
                {
                    "id": 185412,
                    "matchDate": 1474725600000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "赫尔城",
                    "halfHomeGoals": 3,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 5,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2016-09-24 22:00:00"
                },
                {
                    "id": 185160,
                    "matchDate": 1474397100000,
                    "leagueId": 0,
                    "leagueName": "英联杯",
                    "homeTeamName": "德比郡",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 1,
                    "finalHomeGoals": 0,
                    "finalAwayGoals": 3,
                    "matchDateStr": "2016-09-21 02:45:00"
                },
                {
                    "id": 184825,
                    "matchDate": 1474052400000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "切尔西",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 2,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 2,
                    "matchDateStr": "2016-09-17 03:00:00"
                },
                {
                    "id": 184530,
                    "matchDate": 1473525000000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "莱切斯特",
                    "halfHomeGoals": 2,
                    "halfAwayGoals": 1,
                    "finalHomeGoals": 4,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2016-09-11 00:30:00"
                },
                {
                    "id": 183596,
                    "matchDate": 1472297400000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "热刺",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 1,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2016-08-27 19:30:00"
                },
                {
                    "id": 183338,
                    "matchDate": 1471977900000,
                    "leagueId": 0,
                    "leagueName": "英联杯",
                    "homeTeamName": "伯顿",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 2,
                    "finalHomeGoals": 0,
                    "finalAwayGoals": 5,
                    "matchDateStr": "2016-08-24 02:45:00"
                },
                {
                    "id": 183076,
                    "matchDate": 1471701600000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "伯恩利",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 2,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 2,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2016-08-20 22:00:00"
                },
                {
                    "id": 182699,
                    "matchDate": 1471186800000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "阿森纳",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 1,
                    "halfAwayGoals": 1,
                    "finalHomeGoals": 3,
                    "finalAwayGoals": 4,
                    "matchDateStr": "2016-08-14 23:00:00"
                },
                {
                    "id": 182018,
                    "matchDate": 1470577500000,
                    "leagueId": 0,
                    "leagueName": "友谊赛",
                    "homeTeamName": "美因茨",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 2,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 4,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2016-08-07 21:45:00"
                }
            ],
            "homeHistory": [ //主队历史记录
                {
                    "id": 189129,
                    "matchDate": 1480777200000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "热刺",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 2,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 5,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2016-12-03 23:00:00"
                },
                {
                    "id": 188791,
                    "matchDate": 1480172400000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "水晶宫",
                    "halfHomeGoals": 1,
                    "halfAwayGoals": 1,
                    "finalHomeGoals": 5,
                    "finalAwayGoals": 4,
                    "matchDateStr": "2016-11-26 23:00:00"
                },
                {
                    "id": 188459,
                    "matchDate": 1479567600000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "埃弗顿",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 1,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2016-11-19 23:00:00"
                },
                {
                    "id": 187817,
                    "matchDate": 1478444400000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "曼联",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 3,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 3,
                    "matchDateStr": "2016-11-06 23:00:00"
                },
                {
                    "id": 187528,
                    "matchDate": 1477944000000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯托克城",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 1,
                    "halfAwayGoals": 1,
                    "finalHomeGoals": 3,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2016-11-01 04:00:00"
                },
                {
                    "id": 186962,
                    "matchDate": 1477144800000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "沃特福德",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 0,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2016-10-22 22:00:00"
                },
                {
                    "id": 186518,
                    "matchDate": 1476540000000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "阿森纳",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 2,
                    "halfAwayGoals": 1,
                    "finalHomeGoals": 3,
                    "finalAwayGoals": 2,
                    "matchDateStr": "2016-10-15 22:00:00"
                },
                {
                    "id": 185866,
                    "matchDate": 1475321400000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 1,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 2,
                    "matchDateStr": "2016-10-01 19:30:00"
                },
                {
                    "id": 185415,
                    "matchDate": 1474725600000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "曼城",
                    "halfHomeGoals": 1,
                    "halfAwayGoals": 1,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 3,
                    "matchDateStr": "2016-09-24 22:00:00"
                },
                {
                    "id": 185260,
                    "matchDate": 1474483500000,
                    "leagueId": 0,
                    "leagueName": "英联杯",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "曼城",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 2,
                    "matchDateStr": "2016-09-22 02:45:00"
                },
                {
                    "id": 185058,
                    "matchDate": 1474204500000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "南安普敦",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2016-09-18 21:15:00"
                },
                {
                    "id": 184614,
                    "matchDate": 1473606000000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "切尔西",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 1,
                    "finalHomeGoals": 2,
                    "finalAwayGoals": 2,
                    "matchDateStr": "2016-09-11 23:00:00"
                },
                {
                    "id": 183631,
                    "matchDate": 1472306400000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "莱切斯特",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 1,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 2,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2016-08-27 22:00:00"
                },
                {
                    "id": 183334,
                    "matchDate": 1471977900000,
                    "leagueId": 0,
                    "leagueName": "英联杯",
                    "homeTeamName": "彼得堡联",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 3,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 3,
                    "matchDateStr": "2016-08-24 02:45:00"
                },
                {
                    "id": 183078,
                    "matchDate": 1471701600000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "赫尔城",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 0,
                    "finalAwayGoals": 2,
                    "matchDateStr": "2016-08-20 22:00:00"
                },
                {
                    "id": 182521,
                    "matchDate": 1471096800000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "伯恩利",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 0,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2016-08-13 22:00:00"
                },
                {
                    "id": 181873,
                    "matchDate": 1470492000000,
                    "leagueId": 0,
                    "leagueName": "友谊赛",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "雷恩",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2016-08-06 22:00:00"
                },
                {
                    "id": 181148,
                    "matchDate": 1469887200000,
                    "leagueId": 0,
                    "leagueName": "友谊赛",
                    "homeTeamName": "狼队",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 1,
                    "finalHomeGoals": 0,
                    "finalAwayGoals": 4,
                    "matchDateStr": "2016-07-30 22:00:00"
                },
                {
                    "id": 180840,
                    "matchDate": 1469645100000,
                    "leagueId": 0,
                    "leagueName": "友谊赛",
                    "homeTeamName": "斯文登",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 0,
                    "finalAwayGoals": 3,
                    "matchDateStr": "2016-07-28 02:45:00"
                },
                {
                    "id": 180192,
                    "matchDate": 1469282400000,
                    "leagueId": 0,
                    "leagueName": "友谊赛",
                    "homeTeamName": "布流浪",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 4,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 5,
                    "matchDateStr": "2016-07-23 22:00:00"
                }
            ],
            "allHistory": [ //双方交锋历史记录
                {
                    "id": 185866,
                    "matchDate": 1475321400000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 1,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 2,
                    "matchDateStr": "2016-10-01 19:30:00"
                },
                {
                    "id": 174066,
                    "matchDate": 1462100400000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 2,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 3,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2016-05-01 19:00:00"
                },
                {
                    "id": 59182,
                    "matchDate": 1426536000000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 0,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2015-03-17 04:00:00"
                },
                {
                    "id": 64380,
                    "matchDate": 1419883200000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 1,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 4,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2014-12-30 04:00:00"
                },
                {
                    "id": 66886,
                    "matchDate": 1414526400000,
                    "leagueId": 0,
                    "leagueName": "英联杯",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 2,
                    "finalAwayGoals": 1,
                    "matchDateStr": "2014-10-29 04:00:00"
                },
                {
                    "id": 80097,
                    "matchDate": 1393162200000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 3,
                    "halfAwayGoals": 2,
                    "finalHomeGoals": 4,
                    "finalAwayGoals": 3,
                    "matchDateStr": "2014-02-23 21:30:00"
                },
                {
                    "id": 87703,
                    "matchDate": 1379358000000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 1,
                    "halfAwayGoals": 2,
                    "finalHomeGoals": 2,
                    "finalAwayGoals": 2,
                    "matchDateStr": "2013-09-17 03:00:00"
                },
                {
                    "id": 99039,
                    "matchDate": 1361113200000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 1,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 5,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2013-02-17 23:00:00"
                },
                {
                    "id": 103080,
                    "matchDate": 1353850200000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 0,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2012-11-25 21:30:00"
                },
                {
                    "id": 104367,
                    "matchDate": 1351713600000,
                    "leagueId": 0,
                    "leagueName": "英联杯",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 1,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 3,
                    "matchDateStr": "2012-11-01 04:00:00"
                },
                {
                    "id": 113676,
                    "matchDate": 1336917600000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "斯旺西",
                    "awayTeamName": "利物浦",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 1,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2012-05-13 22:00:00"
                },
                {
                    "id": 123491,
                    "matchDate": 1320505200000,
                    "leagueId": 0,
                    "leagueName": "英超",
                    "homeTeamName": "利物浦",
                    "awayTeamName": "斯旺西",
                    "halfHomeGoals": 0,
                    "halfAwayGoals": 0,
                    "finalHomeGoals": 0,
                    "finalAwayGoals": 0,
                    "matchDateStr": "2011-11-05 23:00:00"
                }
            ]
        }
    },
    "msg": ""
}
T_ECHO;
                break;
            case "WeOpen.getLiveList":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": [
            {
                "id": "1",  //流id
                "liveUrl": "http://183.252.176.41//PLTV/88888888/224/3221225939/index.m3u8", //留地址 
                "liveName": "cctv5",//流名称
                "fid": "300", //流所属赛事
                "updateTime": "2018-01-30 10:20:18",
                "createTime": "2018-01-30 10:20:18"
            },
            {
                "id": "2",
                "liveUrl": "http://183.252.176.41//PLTV/88888888/224/3221225939/index.m3u8",
                "liveName": "cctv5",
                "fid": "300",
                "updateTime": "2018-01-30 10:21:27",
                "createTime": "2018-01-30 10:21:27"
            },
            {
                "id": "3",
                "liveUrl": "http://183.252.176.41//PLTV/88888888/224/3221225939/index.m3u8",
                "liveName": "cctv5",
                "fid": "300",
                "updateTime": "2018-01-30 10:46:52",
                "createTime": "2018-01-30 10:46:52"
            },
            {
                "id": "17",
                "liveUrl": "http://183.252.176.41//PLTV/88888888/224/3221225939/index.m3u8",
                "liveName": "cctv5",
                "fid": "300",
                "updateTime": "2018-01-30 11:12:55",
                "createTime": "2018-01-30 11:12:55"
            }
        ]
    },
    "msg": ""
}
T_ECHO;
                break;
            case "BackRole.Login":
                return <<<T_ECHO
{
    "ret": 200,
    "data": {
        "code": 1,
        "context": "操作成功！",
        "data": {
            "id": "15", //用户id
            "nickname": "测试的管理员",//用户昵称
            "phone": "18975137813",//
            "email": "123456@1111.com",
            "pswd": "MD5",
            "createTime": "",
            "lastLoginTime": "",
            "status": "1",
            "backToken": "bt_8e384986b2188f82b623978810d7b855",
            "max": false, //是否超管 true 为超管可以有所有权限
            "permission": [ //本人的权限
                "BackBanner.InsertBanner",
                "BackBanner.UpdateBanner",
                "BackConsult.DeleteConsultAuthor",
                "BackConsult.DeleteRecommend",
                "BackConsult.InsertConsult"
            ],
            "role": [ //本人的角色
                {
                    "id": "2",//角色的id
                    "name": "测试角色", //角色名称
                    "type": "1,2,3,4,5"
                }
            ]
        }
    },
    "msg": ""
}
T_ECHO;
                break;
        }
    }
}