<?php
/**
 * WeConsult.php
 */
class Domain_WeVideoConsult
{
    /**
     * 获取帖子列表
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function ConsultList($allParams)
    {
        $model = new Model_WeVideoConsult;
        $modelTeam = new Model_WeTeam();
        $info = $model->getConsultList($allParams);
        if($info != null && $info != []){
            foreach ($info as $k => $item) {
                if(isset($item['team'])){
                    $teamArray = json_decode($item['team'],true);
                    if($teamArray == null || $teamArray == [])
                        continue;
                    $timeList = [];
                    foreach($teamArray as $key => $v){
                        $team = $modelTeam -> getOneById($v['team']);
                        $team['point'] = $v['point'];
                        $timeList[] = $team;
                    }
                    $info[$k]['team'] = $timeList;
                }
            }
        }
        return $info;
    }

    /**
     * 获取帖子列表
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function BackConsultList($allParams)
    {
        $model = new Model_WeVideoConsult;

        $page = $allParams['page'];
        $page = $page - 1;
        if($page < 0)
            return null;
        $limitEnd = DI()->config->get("app.page.def");
        $limitStart = $limitEnd*$page;
        $sql = "";
        if(isset($allParams['hot']))
            $sql .= "&& a.hot = {$allParams['hot']} ";
        if(isset($allParams['classId']))
            $sql .= "&& a.classId = {$allParams['classId']} ";
        if(isset($allParams['find']))
            $sql .= " && (a.id LIKE '%{$allParams['find']}%' || a.consultName LIKE '%{$allParams['find']}%' || a.consultDetail LIKE '%{$allParams['find']}%') ";
        if(isset($allParams['startTime']))
            $sql .= " && a.createTime > '{$allParams['startTime']}' ";
        if(isset($allParams['endTime']))
            $sql .= " && a.createTime < '{$allParams['endTime']}' ";
        $allPage = $model -> getBackConsultPage($sql);
        $allPage = isset($allPage['page'])?ceil($allPage['page']/$limitEnd):1;
        $sql .= " ORDER by a.top desc,a.updateTime desc 
Limit {$limitStart},{$limitEnd}";
        $info = $model->getBackConsultList($sql);
        if($info != null && $info != []){
            $modelTeam = new Model_WeTeam();
            foreach ($info as $k => $item) {
                if(isset($item['team'])){
                    $teamArray = json_decode($item['team'],true);
                    if($teamArray == null || $teamArray == [])
                        continue;
                    $timeList = [];
                    foreach($teamArray as $key => $v){
                        $team = $modelTeam -> getOneById($v['team']);
                        $team['point'] = $v['point'];
                        $timeList[] = $team;
                    }
                    $info[$k]['team'] = $timeList;
                }
            }
        }
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $info;
        $res['allPager'] = $allPage;
        return $res;
    }


    /**
     * 获取帖子详情
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function ConsultDetail($allParams)
    {
        $model = new Model_WeVideoConsult;
        $modelTeam = new Model_WeTeam();
        if ($allParams['type'] == 1)
            $model->consultNumAdd($allParams);
        $info = $model->getConsultDetail($allParams);
        if(isset($info['team'])){
            $timeList = [];
            $teamArray = json_decode($info['team'],true);
            if($teamArray != null && !$teamArray = []){
                foreach($teamArray as $key => $v){
                    $team = $modelTeam -> getOneById($v['team']);
                    $team['point'] = $v['point'];
                    $timeList[] = $team;
                }
            }

            $info['team'] = $timeList;
        }
        return $info;
    }

    /**
     * 获取快讯分类列表
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function videoConsultClassList()
    {
        $model = new Model_WeVideoConsultClass;
        $info = $model->getConsultClassList();
        return $info;
    }

    /**
     * 修改视频
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateVideoConsult($data){
        $model = new Model_WeVideoConsult();

        $modelAuthor = new Model_WeConsultAuthor();
        $hasAuthor = $modelAuthor -> getAuthor(['id' => $data["authorId"]]);
        if($hasAuthor == null)
            return DI()->ResCode->get("WE.authorError");
        $modelClass = new Model_WeVideoConsultClass;
        $hasClass = $modelClass -> getConsultClassListById($data['classId']);
        if($hasClass == null)
            return DI()->ResCode->get("WE.classError");
        if($data['recommendId']){
            $modelRecommend = new Model_WeRecommend();
            $hasRecommend = $modelRecommend -> getRecommend($data['recommendId']);
            if($hasRecommend == null){
                return DI()->ResCode->get("WE.recommendError");
            }
        }
        if(isset($data['leagueId'])){
            $modelLeague = new Model_WeLeague();
            $hasLeague = $modelLeague -> getOneById($data['leagueId']);
            if($hasLeague == null){
                return DI()->ResCode->get("WE.leagueError");
            }
        }
        if(isset($data['team'])){
            $modelTeam = new Model_WeTeam();
            $teamArray = json_decode($data['team'],true);
            if($teamArray == null || $teamArray = [])
                return DI()->ResCode->get("WE.teamError");
            foreach ($teamArray as $item) {
                if(!isset($item['team'])||!isset($item['point']))
                    return DI()->ResCode->get("WE.teamError");
                $hasTeam = $modelTeam -> getOneById($item['team']);
                if($hasTeam == null)
                    return DI()->ResCode->get("WE.teamError");
            }
        }
        $info= $model ->updateConsult($data);
        return $info;
    }

    /**
     * 添加视频
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertVideoConsult($data){
        $model = new Model_WeVideoConsult();
        $modelAuthor = new Model_WeConsultAuthor();
        $hasAuthor = $modelAuthor -> getAuthor(['id' => $data["authorId"]]);
        if($hasAuthor == null)
            return DI()->ResCode->get("WE.authorError");
        $modelClass = new Model_WeVideoConsultClass();
        $hasClass = $modelClass -> getConsultClassListById($data['classId']);
        if($hasClass == null)
            return DI()->ResCode->get("WE.classError");
        if($data['recommendId']){
            $modelRecommend = new Model_WeRecommend();
            $hasRecommend = $modelRecommend -> getRecommend($data['recommendId']);
            if($hasRecommend == null){
                return DI()->ResCode->get("WE.recommendError");
            }
        }
        if(isset($data['leagueId'])){
            $modelLeague = new Model_WeLeague();
            $hasLeague = $modelLeague -> getOneById($data['leagueId']);
            if($hasLeague == null){
                return DI()->ResCode->get("WE.leagueError");
            }
        }
        if(isset($data['team'])){
            $modelTeam = new Model_WeTeam();
            $teamArray = json_decode($data['team'],true);
            if($teamArray == null || $teamArray = [])
                return DI()->ResCode->get("WE.teamError");
            foreach ($teamArray as $item) {
                if(!isset($item['team'])||!isset($item['point']))
                    return DI()->ResCode->get("WE.teamError");
                $hasTeam = $modelTeam -> getOneById($item['team']);
                if($hasTeam == null)
                    return DI()->ResCode->get("WE.teamError");
            }
        }
        $info = $model -> insertConsult($data);
        $ret = DI()->ResCode->get("WE.Success");
        $ret['data'] = $info;
        return $ret;
    }

    /**
     * 获取赛事列表
     * @desc wjp 2018-1-8
     * @throws PhalApi_Exception_InternalServerError
     */
    public function leagueList()
    {
        $model = new Model_WeLeague();
        $info = $model->getList();
        return $info;
    }

    /**
     * 修改赛事
     * @desc wjp 2018-1-8
     * @throws PhalApi_Exception_InternalServerError
     */
    public function leagueUpdateData($data)
    {
        if(isset($data['status']) && $data['status'] != 0)
            return null;
        $model = new Model_WeLeague();
        $info = $model->updateData($data);
        return $info;
    }

    /**
     * 添加赛事
     * @desc wjp 2018-1-8
     * @throws PhalApi_Exception_InternalServerError
     */
    public function leagueInsertData($data)
    {
        $model = new Model_WeLeague();
        $info = $model->insertData($data);
        return $info;
    }

    /**
     * 获取队伍列表
     * @desc wjp 2018-1-8
     * @throws PhalApi_Exception_InternalServerError
     */
    public function teamList()
    {
        $model = new Model_WeTeam();
        $info = $model->getList();
        return $info;
    }

    /**
     * 修改队伍
     * @desc wjp 2018-1-8
     * @throws PhalApi_Exception_InternalServerError
     */
    public function teamUpdateData($data)
    {
        if(isset($data['status']) && $data['status'] != 0)
            return null;
        if(isset($data['pid'])){
            $leagueModel = new Model_WeLeague();
            $hasLeague = $leagueModel -> getOneById($data['pid']);
            if($hasLeague == null)
                return null;
        }
        $model = new Model_WeTeam();
        $info = $model->updateData($data);
        return $info;
    }

    /**
     * 添加队伍
     * @desc wjp 2018-1-8
     * @throws PhalApi_Exception_InternalServerError
     */
    public function teamInsertData($data)
    {
        $model = new Model_WeTeam();
        $info = $model->insertData($data);
        return $info;
    }
}