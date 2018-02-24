<?php
/**
 * 操作入口
 * Created by PhpStorm.
 * User: dddd
 * Date: 2018/1/23
 * Time: 下午12:21
 */
require_once dirname(__FILE__) . '/HtmlDomParser.php';
class PhpSimple__Lite{
    public $HtmlDomParser;
    public function __construct()
    {
        $this -> HtmlDomParser = new \Sunra\PhpSimple\HtmlDomParser();
    }

    //获取澳客网某日 nba比赛列表
    public function getNBAList($date){

        $url = "http://www.okooo.com/basketball/league/132/schedule/43374/?params=2_".$date;
        $data = file_get_contents($url);
        $dom = $this -> HtmlDomParser -> str_get_html($data);
        $info = [];
        try{
            foreach ($dom -> getElementById('lgagueContent') -> find("tr") as $k => $v) {
                if($k!=0){
                    $infoArray = [];
                    $matchTime = $v -> last_child() -> first_child() -> getAttribute('data-matchtime');
                    $infoArray['matchTime'] = $matchTime;
                    $matchId = $v -> last_child() -> first_child() -> getAttribute('data-matchid');
                    $infoArray['matchId'] = $matchId;
//                    $hName = $v -> last_child() -> first_child() -> getAttribute('data-hname');
//                    $infoArray['hName'] = iconv('gb2312','utf-8',$hName);
//                    $aName = $v -> last_child() -> first_child() -> getAttribute('data-aname');
//                    $infoArray['aName'] = iconv('gb2312','utf-8',$aName);
                    $point = $v -> find('td',2) -> text();
                    $point = explode(":",$point);
                    if(!isset($point[0])||!isset($point[1]) || $point[0] == null || $point[1] == null)
                        continue;

                    $infoArray['aPoint'] = $point[0];
                    $infoArray['hPoint'] = $point[1];

                    $aId = $v -> find('td',1) -> first_child() -> href;
                    $aId = explode("/",$aId);
                    $infoArray['aId'] = $aId[3];
                    $aName = $v -> find('td',1) -> first_child() -> text();
                    $infoArray['aName'] =  iconv('gb2312','utf-8',$aName);

                    $hId = $v -> find('td',3) -> first_child() -> href;
                    $hId = explode("/",$hId);
                    $infoArray['hId'] = $hId[3];
                    $hName = $v -> find('td',3) -> first_child() -> text();
                    $infoArray['hName'] =  iconv('gb2312','utf-8',$hName);

                    $info[] = $infoArray;
                }
            }
            return $info;
        }catch (ErrorException $e) {
            DI()->logger->error('PhpSimple_Lite_ERROR', ['trace' => __METHOD__, 'msg' => $e->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('PhpSimple_Lite_ERROR -> getNBAList'));
        }
    }

    //获取澳客网 nba队伍队员列表
    public function getNBATeamInfoList($teamId){
        $url = "http://www.okooo.com/basketball/team/".$teamId."/playerdata/";
        $data = file_get_contents($url);
        $dom = $this -> HtmlDomParser -> str_get_html($data);
        $info = [];
        try{
            foreach ($dom -> getElementByTagName(".tab") -> find("tr") as $k => $v) {
                if($k!=0){
                    $infoArray = [];
                    $playerId = $v -> find('td',0) -> first_child()->href;
                    $playerId = explode("/",$playerId);
                    $infoArray['playerId'] = $playerId[3];
                    $playerName = $v -> find('td',0) -> first_child() -> text();
                    $infoArray['playerName'] = iconv('gb2312','utf-8',$playerName);
                    $isMainForce = $v -> find('td',0) -> getElementByTagName(".zhul");
                    $infoArray['isMainForce'] = 0;
                    if($isMainForce !=null && $isMainForce!='')
                        $infoArray['isMainForce'] = 1; //是否主力
                    $infoArray['enter']       = $v -> find('td',1) -> text(); // 出场数
                    $infoArray['first']       = $v -> find('td',2) -> text(); // 先发
                    $infoArray['onLine']      = $v -> find('td',3) -> text(); // 在线时间
                    $infoArray['hitRate']     = $v -> find('td',4) -> text(); // 命中率
                    $infoArray['threePoints'] = $v -> find('td',5) -> text(); // 三分命中率
                    $infoArray['foulShot']    = $v -> find('td',6) -> text(); // 罚球命中率
                    $infoArray['backboard']   = $v -> find('td',7) -> text(); // 篮板
                    $infoArray['assists']     = $v -> find('td',8) -> text(); // 助攻
                    $infoArray['steals']      = $v -> find('td',9) -> text(); // 抢断
                    $infoArray['blockShot']   = $v -> find('td',10) -> text(); // 盖帽
                    $infoArray['miss']        = $v -> find('td',11) -> text(); // 失误
                    $infoArray['foul']        = $v -> find('td',12) -> text(); // 犯规
                    $infoArray['score']       = $v -> find('td',13) -> text(); // 得分
                    $infoArray['teamId']      = $teamId; // 队伍id
                    $info[] = $infoArray;
                }
            }
            return $info;
        }catch (ErrorException $e) {
            DI()->logger->error('PhpSimple_Lite_ERROR', ['trace' => __METHOD__, 'msg' => $e->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('PhpSimple_Lite_ERROR -> getNBAList'));
        }
    }

    //获取章鱼彩票 足球阵容
    public function getZqPlayerList($matchNum){
        $url = "http://cms.8win.com/data/".$matchNum."?label=sjtj";
        $data = file_get_contents($url);
        $dom = $this -> HtmlDomParser -> str_get_html($data);
        $homeInfo = [];
        $infoHomeName = "first";
        $awayInfo = [];
        $infoAwayName = "first";
        try{
            foreach ($dom -> getElementByTagName(".db-list-l") -> last_child() -> find('tr') as $k => $v) {
                $infoArray = [];
                if($v -> find('td',0) -> text() == "球衣号"){
                    $infoHomeName = "bench";
                    continue;
                }
                $infoArray['id'] = $v -> find('td',0) -> text();
                $infoArray['name'] = $v -> find('td',1) -> text();
                $homeInfo[$infoHomeName][] = $infoArray;
            }

            foreach ($dom -> getElementByTagName(".db-list-r") -> last_child() -> find('tr') as $k => $v) {
                $infoArray = [];
                if($v -> find('td',0) -> text() == "球衣号"){
                    $infoAwayName = "bench";
                    continue;
                }
                $infoArray['id'] = $v -> find('td',0) -> text();
                $infoArray['name'] = $v -> find('td',1) -> text();
                $awayInfo[$infoAwayName][] = $infoArray;
            }
            if($awayInfo == [])
                $awayInfo = null;
            if($homeInfo == [])
                $homeInfo = null;
            return ['awayPlayer'=>$awayInfo,'homePlayer'=>$homeInfo];
        }catch (ErrorException $e) {
            DI()->logger->error('PhpSimple_Lite_ERROR', ['trace' => __METHOD__, 'msg' => $e->getMessage()]);
            throw new PhalApi_Exception_InternalServerError(T('PhpSimple_Lite_ERROR -> getNBAList'));
        }
    }
}