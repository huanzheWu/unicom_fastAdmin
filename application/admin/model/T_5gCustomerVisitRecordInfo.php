<?php

namespace app\admin\model;

use think\Model;


class T_5gCustomerVisitRecordInfo extends Model
{

    

    

    // 表名
    protected $table = 't_5g_customer_visit_record_info';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'dealer_check_status_text',
        'company_register_capital_text',
        'company_business_text',
        'company_detail_business_text',
        'company_nature_text',
        'company_requirement_text',
        'subscribe_department_text',
        'subscribe_month_text',
        'customer_leader_grade_text',
        'front_line_state_text',
        'follow_up_visit_character_text',
        'follow_up_focus_tech_unmanned_text',
        'follow_up_focus_tech_remote_assistance_text',
        'follow_up_focus_tech_MEC_text',
        'follow_up_focus_tech_QKL_text',
        'follow_up_focus_tech_AR_VR_text',
        'follow_up_focus_tech_WLW_text',
        'follow_up_focus_tech_YYYW_text',
        'follow_up_process_text',
        'follow_up_limit_reason_text',
        'project_progress_text',
        'opinion_evaluate_text'
    ];
    

    
    public function getDealerCheckStatusList()
    {
        return ['未审核' => __('未审核'), '审核通过' => __('审核通过'), '审核未通过' => __('审核未通过')];
    }

    public function getCompanyRegisterCapitalList()
    {
        return ['1亿以上' => __('1亿以上'), '5001万-1亿' => __('5001万-1亿'), '1001万-5000万' => __('1001万-5000万'), '501万-1000万' => __('501万-1000万'), '101万-500万' => __('101万-500万'), '1-100万' => __('1-100万'), '待完善' => __('待完善')];
    }

    public function getCompanyBusinessList()
    {
        return ['房地产行业' => __('房地产行业'), '服务行业' => __('服务行业'), '化工业' => __('化工业'), '环保行业' => __('环保行业'), '建筑行业' => __('建筑行业'), '交通行业' => __('交通行业'), '教育行业' => __('教育行业'), '金融行业' => __('金融行业'), '零售行业' => __('零售行业'), '媒体行业' => __('媒体行业'), '其他行业' => __('其他行业'), '软件行业' => __('软件行业'), '通信行业' => __('通信行业'), '文旅行业' => __('文旅行业'), '研发行业' => __('研发行业'), '医疗行业' => __('医疗行业'), '政府/事业单位' => __('政府/事业单位'), '制造业' => __('制造业'), '资源行业' => __('资源行业')];
    }

    public function getCompanyDetailBusinessList()
    {
        return ['研究和试验发展' => __('研究和试验发展'), '其他行业' => __('其他行业'), '资源行业' => __('资源行业'), '市级政府/事业单位' => __('市级政府/事业单位'), '电信、广播电视和卫星传输服务' => __('电信、广播电视和卫星传输服务'), '软件和信息技术服务业' => __('软件和信息技术服务业'), '道路运输业' => __('道路运输业'), '专业技术服务业' => __('专业技术服务业'), '教育行业' => __('教育行业'), '媒体行业' => __('媒体行业'), '邮政行业' => __('邮政行业'), '区级政府/事业单位' => __('区级政府/事业单位'), '医疗行业' => __('医疗行业'), '房地产业' => __('房地产业'), '省级政府/事业单位' => __('省级政府/事业单位'), '政府/事业单位' => __('政府/事业单位'), '协会' => __('协会'), '交通行业' => __('交通行业'), '土木工程建筑业' => __('土木工程建筑业'), '金融行业' => __('金融行业'), '交通运输业' => __('交通运输业'), '运输代理业' => __('运输代理业'), '旅游行业' => __('旅游行业'), '环保制造业' => __('环保制造业'), '产业园区' => __('产业园区'), '商务服务业' => __('商务服务业'), '银行' => __('银行'), '工业制造业' => __('工业制造业'), '通信行业' => __('通信行业'), '批发业' => __('批发业'), '设备制造业' => __('设备制造业'), '汽车制造业' => __('汽车制造业'), '信息技术服务业' => __('信息技术服务业'), '图像制造业' => __('图像制造业'), '通信制造业' => __('通信制造业'), '科技推广和应用服务业' => __('科技推广和应用服务业'), '医药制造业' => __('医药制造业'), '化工业' => __('化工业'), '物业管理' => __('物业管理'), '智能设备制造' => __('智能设备制造'), '应用服务业' => __('应用服务业'), '电气机械和器材制造业' => __('电气机械和器材制造业'), '橡胶和塑料制品业' => __('橡胶和塑料制品业'), '食品制造业' => __('食品制造业'), '机器制造业' => __('机器制造业'), '生态保护和环境治理业' => __('生态保护和环境治理业'), '公共设施管理业' => __('公共设施管理业'), '船制造业' => __('船制造业'), '住宿业' => __('住宿业'), '钢铁制造业' => __('钢铁制造业'), '计算机、通信和其他电子设备制造业' => __('计算机、通信和其他电子设备制造业'), '烟草制品业' => __('烟草制品业'), '中央政府/事业单位' => __('中央政府/事业单位'), '展会' => __('展会'), '军队' => __('军队'), '软件行业' => __('软件行业'), '零售行业' => __('零售行业'), '服务行业' => __('服务行业'), '房地产行业' => __('房地产行业'), '制造业' => __('制造业')];
    }

    public function getCompanyNatureList()
    {
        return ['公私合作企业' => __('公私合作企业'), '国有企业' => __('国有企业'), '私营企业' => __('私营企业'), '外资企业' => __('外资企业'), '政府/事业单位' => __('政府/事业单位'), '中外合资企业' => __('中外合资企业'), '其他' => __('其他')];
    }

    public function getCompanyRequirementList()
    {
        return ['工业互联网' => __('工业互联网'), '智慧城市' => __('智慧城市'), '智慧港口' => __('智慧港口'), '智慧家居' => __('智慧家居'), '智慧交通' => __('智慧交通'), '智慧教育' => __('智慧教育'), '智慧金融' => __('智慧金融'), '智慧警务' => __('智慧警务'), '智慧零售' => __('智慧零售'), '智慧能源' => __('智慧能源'), '智慧生态' => __('智慧生态'), '智慧文娱' => __('智慧文娱'), '智慧物流' => __('智慧物流'), '智慧医疗' => __('智慧医疗'), '智慧园区' => __('智慧园区'), '智慧政务' => __('智慧政务'), '智慧应急' => __('智慧应急'), '其他' => __('其他')];
    }

    public function getSubscribeDepartmentList()
    {
        return ['战略客户部' => __('战略客户部'), '政要与医疗营销中心' => __('政要与医疗营销中心'), '越秀区分公司' => __('越秀区分公司'), '增城区分公司' => __('增城区分公司'), '天河区分公司' => __('天河区分公司'), '海珠区分公司' => __('海珠区分公司'), '花都区分公司' => __('花都区分公司'), '黄埔区分公司' => __('黄埔区分公司'), '荔湾区分公司' => __('荔湾区分公司'), '南沙区分公司' => __('南沙区分公司'), '白云区分公司' => __('白云区分公司'), '从化区分公司' => __('从化区分公司'), '番禺区分公司' => __('番禺区分公司'), '办公室/法律部' => __('办公室/法律部'), '产互佛山办事处' => __('产互佛山办事处'), '产互广州办事处' => __('产互广州办事处'), '党群工作部' => __('党群工作部'), '东莞分公司' => __('东莞分公司'), '佛山分公司' => __('佛山分公司'), '工会' => __('工会'), '广州软研院' => __('广州软研院'), '教育信息化营销中心' => __('教育信息化营销中心'), '清远分公司' => __('清远分公司'), '人力资源部' => __('人力资源部'), '融合业务中心' => __('融合业务中心'), '省公司' => __('省公司'), '网络发展部' => __('网络发展部'), '网络运营部' => __('网络运营部'), '新零售运营中心' => __('新零售运营中心'), '信息化服务中心' => __('信息化服务中心'), '营销部' => __('营销部'), '营业中心' => __('营业中心'), '湛江分公司' => __('湛江分公司'), '政企客户事业部' => __('政企客户事业部'), '驻广州纪检组' => __('驻广州纪检组'), '综合服务支撑中心' => __('综合服务支撑中心'), '技术部' => __('技术部'), '深圳分公司' => __('深圳分公司'), '政企客户支撑响应中心' => __('政企客户支撑响应中心'), '客户服务部' => __('客户服务部'), '韶关分公司' => __('韶关分公司'), '区销' => __('区销'), '大学城分公司' => __('大学城分公司')];
    }

    public function getSubscribeMonthList()
    {
        return ['1月' => __('1月'), '2月' => __('2月'), '3月' => __('3月'), '4月' => __('4月'), '5月' => __('5月'), '6月' => __('6月'), '7月' => __('7月'), '8月' => __('8月'), '9月' => __('9月'), '10月' => __('10月'), '11月' => __('11月'), '12月' => __('12月')];
    }

    public function getCustomerLeaderGradeList()
    {
        return ['基' => __('基'), '中' => __('中'), '高' => __('高')];
    }

    public function getFrontLineStateList()
    {
        return ['0' => __('Front_line_state 0'), '1' => __('Front_line_state 1')];
    }

    public function getFollowUpVisitCharacterList()
    {
        return ['仅参观' => __('仅参观'), '需求明晰' => __('需求明晰'), '有意向需求未明晰' => __('有意向需求未明晰')];
    }

    public function getFollowUpFocusTechUnmannedList()
    {
        return ['是' => __('是'), '否' => __('否')];
    }

    public function getFollowUpFocusTechRemoteAssistanceList()
    {
        return ['是' => __('是'), '否' => __('否')];
    }

    public function getFollowUpFocusTechMecList()
    {
        return ['是' => __('是'), '否' => __('否')];
    }

    public function getFollowUpFocusTechQklList()
    {
        return ['是' => __('是'), '否' => __('否')];
    }

    public function getFollowUpFocusTechArVrList()
    {
        return ['是' => __('是'), '否' => __('否')];
    }

    public function getFollowUpFocusTechWlwList()
    {
        return ['是' => __('是'), '否' => __('否')];
    }

    public function getFollowUpFocusTechYyywList()
    {
        return ['是' => __('是'), '否' => __('否')];
    }

    public function getFollowUpProcessList()
    {
        return ['初次拜访' => __('初次拜访'), '多次拜访' => __('多次拜访'), '计划拜访' => __('计划拜访'), '已签约' => __('已签约'), '准备签约' => __('准备签约'), '暂无' => __('暂无')];
    }

    public function getFollowUpLimitReasonList()
    {
        return ['暂无' => __('暂无'), '未有明确5G需求' => __('未有明确5g需求'), '5G硬件问题' => __('5g硬件问题'), '客户方原因：领导层沟通、项目建设中等' => __('客户方原因：领导层沟通、项目建设中等'), '5G相应应用场景较少，业务结合度低' => __('5g相应应用场景较少，业务结合度低'), '5G建站或信号覆盖问题' => __('5g建站或信号覆盖问题'), '找不到对接人' => __('找不到对接人'), '5G成本及收费问题' => __('5g成本及收费问题'), '展厅故障，实际未参观' => __('展厅故障，实际未参观'), '其他' => __('其他'), '仅参观' => __('仅参观'), '展厅参观已取消' => __('展厅参观已取消'), '友商竞争' => __('友商竞争'), '地域限制' => __('地域限制')];
    }

    public function getProjectProgressList()
    {
        return ['战略签约' => __('战略签约'), '暂无' => __('暂无')];
    }

    public function getOpinionEvaluateList()
    {
        return ['满意' => __('满意'), '良好' => __('良好')];
    }


    public function getDealerCheckStatusTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['dealer_check_status']) ? $data['dealer_check_status'] : '');
        $list = $this->getDealerCheckStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getCompanyRegisterCapitalTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['company_register_capital']) ? $data['company_register_capital'] : '');
        $list = $this->getCompanyRegisterCapitalList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getCompanyBusinessTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['company_business']) ? $data['company_business'] : '');
        $list = $this->getCompanyBusinessList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getCompanyDetailBusinessTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['company_detail_business']) ? $data['company_detail_business'] : '');
        $list = $this->getCompanyDetailBusinessList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getCompanyNatureTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['company_nature']) ? $data['company_nature'] : '');
        $list = $this->getCompanyNatureList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getCompanyRequirementTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['company_requirement']) ? $data['company_requirement'] : '');
        $list = $this->getCompanyRequirementList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getSubscribeDepartmentTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['subscribe_department']) ? $data['subscribe_department'] : '');
        $list = $this->getSubscribeDepartmentList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getSubscribeMonthTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['subscribe_month']) ? $data['subscribe_month'] : '');
        $list = $this->getSubscribeMonthList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getCustomerLeaderGradeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['customer_leader_grade']) ? $data['customer_leader_grade'] : '');
        $list = $this->getCustomerLeaderGradeList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFrontLineStateTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['front_line_state']) ? $data['front_line_state'] : '');
        $list = $this->getFrontLineStateList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFollowUpVisitCharacterTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['follow_up_visit_character']) ? $data['follow_up_visit_character'] : '');
        $list = $this->getFollowUpVisitCharacterList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFollowUpFocusTechUnmannedTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['follow_up_focus_tech_unmanned']) ? $data['follow_up_focus_tech_unmanned'] : '');
        $list = $this->getFollowUpFocusTechUnmannedList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFollowUpFocusTechRemoteAssistanceTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['follow_up_focus_tech_remote_assistance']) ? $data['follow_up_focus_tech_remote_assistance'] : '');
        $list = $this->getFollowUpFocusTechRemoteAssistanceList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFollowUpFocusTechMecTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['follow_up_focus_tech_MEC']) ? $data['follow_up_focus_tech_MEC'] : '');
        $list = $this->getFollowUpFocusTechMecList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFollowUpFocusTechQklTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['follow_up_focus_tech_QKL']) ? $data['follow_up_focus_tech_QKL'] : '');
        $list = $this->getFollowUpFocusTechQklList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFollowUpFocusTechArVrTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['follow_up_focus_tech_AR_VR']) ? $data['follow_up_focus_tech_AR_VR'] : '');
        $list = $this->getFollowUpFocusTechArVrList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFollowUpFocusTechWlwTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['follow_up_focus_tech_WLW']) ? $data['follow_up_focus_tech_WLW'] : '');
        $list = $this->getFollowUpFocusTechWlwList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFollowUpFocusTechYyywTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['follow_up_focus_tech_YYYW']) ? $data['follow_up_focus_tech_YYYW'] : '');
        $list = $this->getFollowUpFocusTechYyywList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFollowUpProcessTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['follow_up_process']) ? $data['follow_up_process'] : '');
        $list = $this->getFollowUpProcessList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFollowUpLimitReasonTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['follow_up_limit_reason']) ? $data['follow_up_limit_reason'] : '');
        $list = $this->getFollowUpLimitReasonList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getProjectProgressTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['project_progress']) ? $data['project_progress'] : '');
        $list = $this->getProjectProgressList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getOpinionEvaluateTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['opinion_evaluate']) ? $data['opinion_evaluate'] : '');
        $list = $this->getOpinionEvaluateList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}
