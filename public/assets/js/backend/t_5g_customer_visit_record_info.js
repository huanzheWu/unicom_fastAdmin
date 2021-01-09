define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 't_5g_customer_visit_record_info/index' + location.search,
                    add_url: 't_5g_customer_visit_record_info/add',
                    edit_url: 't_5g_customer_visit_record_info/edit',
                    del_url: 't_5g_customer_visit_record_info/del',
                    multi_url: 't_5g_customer_visit_record_info/multi',
                    import_url: 't_5g_customer_visit_record_info/import',
                    table: 't_5g_customer_visit_record_info',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'dealer_input_info_person', title: __('Dealer_input_info_person'), operate: 'LIKE'},
                        {field: 'dealer_check_status', title: __('Dealer_check_status'), searchList: {"未审核":__('未审核'),"审核通过":__('审核通过'),"审核未通过":__('审核未通过')}, formatter: Table.api.formatter.status},
                        {field: 'company_client_name', title: __('Company_client_name'), operate: 'LIKE'},
                        {field: 'company_register_year', title: __('Company_register_year')},
                        {field: 'company_register_capital', title: __('Company_register_capital'), searchList: {"1亿以上":__('1亿以上'),"5001万-1亿":__('5001万-1亿'),"1001万-5000万":__('1001万-5000万'),"501万-1000万":__('501万-1000万'),"101万-500万":__('101万-500万'),"1-100万":__('1-100万'),"待完善":__('待完善')}, formatter: Table.api.formatter.normal},
                        {field: 'company_business', title: __('Company_business'), searchList: {"房地产行业":__('房地产行业'),"服务行业":__('服务行业'),"化工业":__('化工业'),"环保行业":__('环保行业'),"建筑行业":__('建筑行业'),"交通行业":__('交通行业'),"教育行业":__('教育行业'),"金融行业":__('金融行业'),"零售行业":__('零售行业'),"媒体行业":__('媒体行业'),"其他行业":__('其他行业'),"软件行业":__('软件行业'),"通信行业":__('通信行业'),"文旅行业":__('文旅行业'),"研发行业":__('研发行业'),"医疗行业":__('医疗行业'),"政府\/事业单位":__('政府\/事业单位'),"制造业":__('制造业'),"资源行业":__('资源行业')}, formatter: Table.api.formatter.normal},
                        {field: 'company_detail_business', title: __('Company_detail_business'), searchList: {"研究和试验发展":__('研究和试验发展'),"其他行业":__('其他行业'),"资源行业":__('资源行业'),"市级政府\/事业单位":__('市级政府\/事业单位'),"电信、广播电视和卫星传输服务":__('电信、广播电视和卫星传输服务'),"软件和信息技术服务业":__('软件和信息技术服务业'),"道路运输业":__('道路运输业'),"专业技术服务业":__('专业技术服务业'),"教育行业":__('教育行业'),"媒体行业":__('媒体行业'),"邮政行业":__('邮政行业'),"区级政府\/事业单位":__('区级政府\/事业单位'),"医疗行业":__('医疗行业'),"房地产业":__('房地产业'),"省级政府\/事业单位":__('省级政府\/事业单位'),"政府\/事业单位":__('政府\/事业单位'),"协会":__('协会'),"交通行业":__('交通行业'),"土木工程建筑业":__('土木工程建筑业'),"金融行业":__('金融行业'),"交通运输业":__('交通运输业'),"运输代理业":__('运输代理业'),"旅游行业":__('旅游行业'),"环保制造业":__('环保制造业'),"产业园区":__('产业园区'),"商务服务业":__('商务服务业'),"银行":__('银行'),"工业制造业":__('工业制造业'),"通信行业":__('通信行业'),"批发业":__('批发业'),"设备制造业":__('设备制造业'),"汽车制造业":__('汽车制造业'),"信息技术服务业":__('信息技术服务业'),"图像制造业":__('图像制造业'),"通信制造业":__('通信制造业'),"科技推广和应用服务业":__('科技推广和应用服务业'),"医药制造业":__('医药制造业'),"化工业":__('化工业'),"物业管理":__('物业管理'),"智能设备制造":__('智能设备制造'),"应用服务业":__('应用服务业'),"电气机械和器材制造业":__('电气机械和器材制造业'),"橡胶和塑料制品业":__('橡胶和塑料制品业'),"食品制造业":__('食品制造业'),"机器制造业":__('机器制造业'),"生态保护和环境治理业":__('生态保护和环境治理业'),"公共设施管理业":__('公共设施管理业'),"船制造业":__('船制造业'),"住宿业":__('住宿业'),"钢铁制造业":__('钢铁制造业'),"计算机、通信和其他电子设备制造业":__('计算机、通信和其他电子设备制造业'),"烟草制品业":__('烟草制品业'),"中央政府\/事业单位":__('中央政府\/事业单位'),"展会":__('展会'),"军队":__('军队'),"软件行业":__('软件行业'),"零售行业":__('零售行业'),"服务行业":__('服务行业'),"房地产行业":__('房地产行业'),"制造业":__('制造业')}, formatter: Table.api.formatter.normal},
                        {field: 'company_nature', title: __('Company_nature'), searchList: {"公私合作企业":__('公私合作企业'),"国有企业":__('国有企业'),"私营企业":__('私营企业'),"外资企业":__('外资企业'),"政府\/事业单位":__('政府\/事业单位'),"中外合资企业":__('中外合资企业'),"其他":__('其他')}, formatter: Table.api.formatter.normal},
                        {field: 'company_requirement', title: __('Company_requirement'), searchList: {"工业互联网":__('工业互联网'),"智慧城市":__('智慧城市'),"智慧港口":__('智慧港口'),"智慧家居":__('智慧家居'),"智慧交通":__('智慧交通'),"智慧教育":__('智慧教育'),"智慧金融":__('智慧金融'),"智慧警务":__('智慧警务'),"智慧零售":__('智慧零售'),"智慧能源":__('智慧能源'),"智慧生态":__('智慧生态'),"智慧文娱":__('智慧文娱'),"智慧物流":__('智慧物流'),"智慧医疗":__('智慧医疗'),"智慧园区":__('智慧园区'),"智慧政务":__('智慧政务'),"智慧应急":__('智慧应急'),"其他":__('其他')}, formatter: Table.api.formatter.normal},
                        {field: 'company_main_business', title: __('Company_main_business'), operate: 'LIKE'},
                        {field: 'company_remark', title: __('Company_remark'), operate: 'LIKE'},
                        {field: 'company_aeo_info', title: __('Company_aeo_info'), operate: 'LIKE'},
                        {field: 'subscribe_department', title: __('Subscribe_department'), searchList: {"战略客户部":__('战略客户部'),"政要与医疗营销中心":__('政要与医疗营销中心'),"越秀区分公司":__('越秀区分公司'),"增城区分公司":__('增城区分公司'),"天河区分公司":__('天河区分公司'),"海珠区分公司":__('海珠区分公司'),"花都区分公司":__('花都区分公司'),"黄埔区分公司":__('黄埔区分公司'),"荔湾区分公司":__('荔湾区分公司'),"南沙区分公司":__('南沙区分公司'),"白云区分公司":__('白云区分公司'),"从化区分公司":__('从化区分公司'),"番禺区分公司":__('番禺区分公司'),"办公室\/法律部":__('办公室\/法律部'),"产互佛山办事处":__('产互佛山办事处'),"产互广州办事处":__('产互广州办事处'),"党群工作部":__('党群工作部'),"东莞分公司":__('东莞分公司'),"佛山分公司":__('佛山分公司'),"工会":__('工会'),"广州软研院":__('广州软研院'),"教育信息化营销中心":__('教育信息化营销中心'),"清远分公司":__('清远分公司'),"人力资源部":__('人力资源部'),"融合业务中心":__('融合业务中心'),"省公司":__('省公司'),"网络发展部":__('网络发展部'),"网络运营部":__('网络运营部'),"新零售运营中心":__('新零售运营中心'),"信息化服务中心":__('信息化服务中心'),"营销部":__('营销部'),"营业中心":__('营业中心'),"湛江分公司":__('湛江分公司'),"政企客户事业部":__('政企客户事业部'),"驻广州纪检组":__('驻广州纪检组'),"综合服务支撑中心":__('综合服务支撑中心'),"技术部":__('技术部'),"深圳分公司":__('深圳分公司'),"政企客户支撑响应中心":__('政企客户支撑响应中心'),"客户服务部":__('客户服务部'),"韶关分公司":__('韶关分公司'),"区销":__('区销'),"大学城分公司":__('大学城分公司')}, formatter: Table.api.formatter.normal},
                        {field: 'subscribe_customer_manager_name', title: __('Subscribe_customer_manager_name'), operate: 'LIKE'},
                        {field: 'subscribe_customer_manager_phone', title: __('Subscribe_customer_manager_phone'), operate: 'LIKE'},
                        {field: 'subscribe_month', title: __('Subscribe_month'), searchList: {"1月":__('1月'),"2月":__('2月'),"3月":__('3月'),"4月":__('4月'),"5月":__('5月'),"6月":__('6月'),"7月":__('7月'),"8月":__('8月'),"9月":__('9月'),"10月":__('10月'),"11月":__('11月'),"12月":__('12月')}, formatter: Table.api.formatter.normal},
                        {field: 'subscribe_date', title: __('Subscribe_date'), operate:'RANGE', addclass:'datetimerange', autocomplete:false},
                        {field: 'subscribe_period', title: __('Subscribe_period'), operate: 'LIKE'},
                        {field: 'customer_present_persons', title: __('Customer_present_persons'), operate: 'LIKE'},
                        {field: 'customer_leader_grade', title: __('Customer_leader_grade'), searchList: {"基":__('基'),"中":__('中'),"高":__('高')}, formatter: Table.api.formatter.normal},
                        {field: 'customer_accompany_persons', title: __('Customer_accompany_persons'), operate: 'LIKE'},
                        {field: 'customer_commentator', title: __('Customer_commentator'), operate: 'LIKE'},
                        {field: 'front_line_state', title: __('Front_line_state'), searchList: {"0":__('Front_line_state 0'),"1":__('Front_line_state 1')}, formatter: Table.api.formatter.normal},
                        {field: 'customer_num', title: __('Customer_num')},
                        {field: 'customer_us_num', title: __('Customer_us_num')},
                        {field: 'visit_area_time_A', title: __('Visit_area_time_a')},
                        {field: 'visit_area_time_B', title: __('Visit_area_time_b')},
                        {field: 'visit_area_time_C', title: __('Visit_area_time_c')},
                        {field: 'visit_area_time_D', title: __('Visit_area_time_d')},
                        {field: 'visit_area_time_E', title: __('Visit_area_time_e')},
                        {field: 'visit_area_time_F', title: __('Visit_area_time_f')},
                        {field: 'visit_area_time_G', title: __('Visit_area_time_g')},
                        {field: 'visit_time_total', title: __('Visit_time_total')},
                        {field: 'follow_up_visit_character', title: __('Follow_up_visit_character'), searchList: {"仅参观":__('仅参观'),"需求明晰":__('需求明晰'),"有意向需求未明晰":__('有意向需求未明晰')}, formatter: Table.api.formatter.normal},
                        {field: 'follow_up_focus_tech_unmanned', title: __('Follow_up_focus_tech_unmanned'), searchList: {"是":__('是'),"否":__('否')}, formatter: Table.api.formatter.normal},
                        {field: 'follow_up_focus_tech_remote_assistance', title: __('Follow_up_focus_tech_remote_assistance'), searchList: {"是":__('是'),"否":__('否')}, formatter: Table.api.formatter.normal},
                        {field: 'follow_up_focus_tech_MEC', title: __('Follow_up_focus_tech_mec'), searchList: {"是":__('是'),"否":__('否')}, formatter: Table.api.formatter.normal},
                        {field: 'follow_up_focus_tech_QKL', title: __('Follow_up_focus_tech_qkl'), searchList: {"是":__('是'),"否":__('否')}, formatter: Table.api.formatter.normal},
                        {field: 'follow_up_focus_tech_AR_VR', title: __('Follow_up_focus_tech_ar_vr'), searchList: {"是":__('是'),"否":__('否')}, formatter: Table.api.formatter.normal},
                        {field: 'follow_up_focus_tech_WLW', title: __('Follow_up_focus_tech_wlw'), searchList: {"是":__('是'),"否":__('否')}, formatter: Table.api.formatter.normal},
                        {field: 'follow_up_focus_tech_YYYW', title: __('Follow_up_focus_tech_yyyw'), searchList: {"是":__('是'),"否":__('否')}, formatter: Table.api.formatter.normal},
                        {field: 'follow_up_focus_tech_OTHER_INFO', title: __('Follow_up_focus_tech_other_info'), operate: 'LIKE'},
                        {field: 'follow_up_process', title: __('Follow_up_process'), searchList: {"初次拜访":__('初次拜访'),"多次拜访":__('多次拜访'),"计划拜访":__('计划拜访'),"已签约":__('已签约'),"准备签约":__('准备签约'),"暂无":__('暂无')}, formatter: Table.api.formatter.normal},
                        {field: 'follow_up_demand_detail', title: __('Follow_up_demand_detail'), operate: 'LIKE'},
                        {field: 'follow_up_limit_reason', title: __('Follow_up_limit_reason'), searchList: {"暂无":__('暂无'),"未有明确5G需求":__('未有明确5g需求'),"5G硬件问题":__('5g硬件问题'),"客户方原因：领导层沟通、项目建设中等":__('客户方原因：领导层沟通、项目建设中等'),"5G相应应用场景较少，业务结合度低":__('5g相应应用场景较少，业务结合度低'),"5G建站或信号覆盖问题":__('5g建站或信号覆盖问题'),"找不到对接人":__('找不到对接人'),"5G成本及收费问题":__('5g成本及收费问题'),"展厅故障，实际未参观":__('展厅故障，实际未参观'),"其他":__('其他'),"仅参观":__('仅参观'),"展厅参观已取消":__('展厅参观已取消'),"友商竞争":__('友商竞争'),"地域限制":__('地域限制')}, formatter: Table.api.formatter.normal},
                        {field: 'project_progress', title: __('Project_progress'), searchList: {"战略签约":__('战略签约'),"暂无":__('暂无')}, formatter: Table.api.formatter.normal},
                        {field: 'opinion_evaluate', title: __('Opinion_evaluate'), searchList: {"满意":__('满意'),"良好":__('良好')}, formatter: Table.api.formatter.normal},
                        {field: 'opinion_detail', title: __('Opinion_detail'), operate: 'LIKE'},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', autocomplete:false, formatter: Table.api.formatter.datetime},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});