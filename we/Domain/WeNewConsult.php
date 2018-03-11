<?php
/**
 * WeConsult.php
 */
class Domain_WeNewConsult
{
    /**
     * 获取帖子列表
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function ConsultList($allParams)
    {
        $key = 'NewConsultList_'.json_encode($allParams);
        $List = DI() -> redis -> getInfo($key);
        if($List == null || $List == ''){
            $model = new Model_WeNewConsult;
            $info = $model -> getConsultList($allParams);
            DI() -> redis -> set_InfoTime($key,json_encode($info),180);
        }else{
            $info = json_decode($List,true);
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
        $sql = '';
        $page = $allParams['page'];
        $page = $page - 1;
        if($page < 0)
            return null;
        $limitEnd = DI()->config->get("app.page.def");
        $limitStart = $limitEnd*$page;

        if(isset($allParams['classId']))
            $sql .= "&& a.classId = {$allParams['classId']}";
        if(isset($allParams['find']))
            $sql .= " && (a.id LIKE '%{$allParams['find']}%' || a.consultName LIKE '%{$allParams['find']}%' || a.consultDetail LIKE '%{$allParams['find']}%') ";
        if(isset($allParams['startTime']))
            $sql .= " && a.createTime > '{$allParams['startTime']}' ";
        if(isset($allParams['endTime']))
            $sql .= " && a.createTime < '{$allParams['endTime']}' ";
        $model = new Model_WeNewConsult;
        $allPage = $model->getBackConsultPage($sql);
        $allPage = isset($allPage['page'])?ceil($allPage['page']/$limitEnd):1;
        $sql .= " ORDER by a.createTime desc 
Limit {$limitStart},{$limitEnd}";
        $list = $model->getBackConsultList($sql);
        $res = DI()->ResCode->get("WE.Success");
        $res['data'] = $list;
        $res['allPage'] = $allPage;
        return $res;
    }

    /**
     * 获取帖子详情
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function ConsultDetail($allParams)
    {
        $model = new Model_WeNewConsult;
        if ($allParams['type'] == 1)
            $model->consultNumAdd($allParams);
        $info = $model->getConsultDetail($allParams);
        return $info;
    }

    /**
     * 获取快讯分类列表
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function NewConsultClassList()
    {
        $model = new Model_WeNewConsultClass;
        $info = $model->getConsultClassList();
        return $info;
    }

    /**
     * 修改咨询
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function updateNewConsult($data){
        $model = new Model_WeNewConsult();
        if(isset($data["authorId"])){
            $modelAuthor = new Model_WeConsultAuthor();
            $hasAuthor = $modelAuthor -> getAuthor(['id' => $data["authorId"]]);
            if($hasAuthor == null)
                return DI()->ResCode->get("WE.authorError");
        }
        if(isset($data['classId'])){
            $modelClass = new Model_WeNewConsultClass();
            $hasClass = $modelClass -> getConsultClassListById($data['classId']);
            if($hasClass == null)
                return DI()->ResCode->get("WE.classError");
        }
        if(isset($data['recommendId'])){
            $modelRecommend = new Model_WeRecommend();
            $hasRecommend = $modelRecommend -> getRecommend($data['recommendId']);
            if($hasRecommend == null){
                return DI()->ResCode->get("WE.recommendError");
            }
        }
        $info= $model ->updateConsult($data);
        $ret = DI()->ResCode->get("WE.Success");
        $ret['data'] = $info;
        return $ret;
    }

    /**
     * 添加快讯
     * @desc wjp 2017-12-26
     * @throws PhalApi_Exception_InternalServerError
     */
    public function insertNewConsult($data){
        $model = new Model_WeNewConsult();
        $modelAuthor = new Model_WeConsultAuthor();
        $hasAuthor = $modelAuthor -> getAuthor(['id' => $data["authorId"]]);
        if($hasAuthor == null)
            return DI()->ResCode->get("WE.authorError");
        $modelClass = new Model_WeNewConsultClass();
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
        $info = $model -> insertConsult($data);
        $ret = DI()->ResCode->get("WE.Success");
        $ret['data'] = $info;
        return $ret;
    }
}