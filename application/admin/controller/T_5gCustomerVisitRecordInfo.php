<?php

namespace app\admin\controller;

use app\common\controller\Backend;

/**
 * 客户信息
 *
 * @icon fa fa-circle-o
 */
class T_5gCustomerVisitRecordInfo extends Backend
{
    
    /**
     * T_5gCustomerVisitRecordInfo模型对象
     * @var \app\admin\model\T_5gCustomerVisitRecordInfo
     */
    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\T_5gCustomerVisitRecordInfo;
        $this->view->assign("dealerCheckStatusList", $this->model->getDealerCheckStatusList());
        $this->view->assign("companyRegisterCapitalList", $this->model->getCompanyRegisterCapitalList());
        $this->view->assign("companyBusinessList", $this->model->getCompanyBusinessList());
        $this->view->assign("companyDetailBusinessList", $this->model->getCompanyDetailBusinessList());
        $this->view->assign("companyNatureList", $this->model->getCompanyNatureList());
        $this->view->assign("companyRequirementList", $this->model->getCompanyRequirementList());
        $this->view->assign("subscribeDepartmentList", $this->model->getSubscribeDepartmentList());
        $this->view->assign("subscribeMonthList", $this->model->getSubscribeMonthList());
        $this->view->assign("customerLeaderGradeList", $this->model->getCustomerLeaderGradeList());
        $this->view->assign("frontLineStateList", $this->model->getFrontLineStateList());
        $this->view->assign("followUpVisitCharacterList", $this->model->getFollowUpVisitCharacterList());
        $this->view->assign("followUpFocusTechUnmannedList", $this->model->getFollowUpFocusTechUnmannedList());
        $this->view->assign("followUpFocusTechRemoteAssistanceList", $this->model->getFollowUpFocusTechRemoteAssistanceList());
        $this->view->assign("followUpFocusTechMecList", $this->model->getFollowUpFocusTechMecList());
        $this->view->assign("followUpFocusTechQklList", $this->model->getFollowUpFocusTechQklList());
        $this->view->assign("followUpFocusTechArVrList", $this->model->getFollowUpFocusTechArVrList());
        $this->view->assign("followUpFocusTechWlwList", $this->model->getFollowUpFocusTechWlwList());
        $this->view->assign("followUpFocusTechYyywList", $this->model->getFollowUpFocusTechYyywList());
        $this->view->assign("followUpProcessList", $this->model->getFollowUpProcessList());
        $this->view->assign("followUpLimitReasonList", $this->model->getFollowUpLimitReasonList());
        $this->view->assign("projectProgressList", $this->model->getProjectProgressList());
        $this->view->assign("opinionEvaluateList", $this->model->getOpinionEvaluateList());
    }

    public function import()
    {
        parent::import();
    }

    /**
     * 默认生成的控制器所继承的父类中有index/add/edit/del/multi五个基础方法、destroy/restore/recyclebin三个回收站方法
     * 因此在当前控制器中可不用编写增删改查的代码,除非需要自己控制这部分逻辑
     * 需要将application/admin/library/traits/Backend.php中对应的方法复制到当前控制器,然后进行修改
     */
    

}
