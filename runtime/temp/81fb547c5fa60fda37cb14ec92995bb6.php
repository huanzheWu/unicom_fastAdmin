<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:114:"C:\phpstudy_pro\WWW\1.2.0.20201008_full\public/../application/admin\view\t_5g_customer_visit_record_info\edit.html";i:1609873225;s:82:"C:\phpstudy_pro\WWW\1.2.0.20201008_full\application\admin\view\layout\default.html";i:1602168705;s:79:"C:\phpstudy_pro\WWW\1.2.0.20201008_full\application\admin\view\common\meta.html";i:1602168705;s:81:"C:\phpstudy_pro\WWW\1.2.0.20201008_full\application\admin\view\common\script.html";i:1602168705;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<meta name="referrer" content="never">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<?php if(\think\Config::get('fastadmin.adminskin')): ?>
<link href="/assets/css/skins/<?php echo \think\Config::get('fastadmin.adminskin'); ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
<?php endif; ?>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>

    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !\think\Config::get('fastadmin.multiplenav') && \think\Config::get('fastadmin.breadcrumb')): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <?php if($auth->check('dashboard')): ?>
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                    <?php endif; ?>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Dealer_input_info_person'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-dealer_input_info_person" data-rule="required" class="form-control" name="row[dealer_input_info_person]" type="text" value="<?php echo htmlentities($row['dealer_input_info_person']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Dealer_check_status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            
            <div class="radio">
            <?php if(is_array($dealerCheckStatusList) || $dealerCheckStatusList instanceof \think\Collection || $dealerCheckStatusList instanceof \think\Paginator): if( count($dealerCheckStatusList)==0 ) : echo "" ;else: foreach($dealerCheckStatusList as $key=>$vo): ?>
            <label for="row[dealer_check_status]-<?php echo $key; ?>"><input id="row[dealer_check_status]-<?php echo $key; ?>" name="row[dealer_check_status]" type="radio" value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['dealer_check_status'])?$row['dealer_check_status']:explode(',',$row['dealer_check_status']))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Company_client_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-company_client_name" data-rule="required" class="form-control" name="row[company_client_name]" type="text" value="<?php echo htmlentities($row['company_client_name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Company_register_year'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-company_register_year" class="form-control datetimepicker" data-date-format="YYYY" data-use-current="true" name="row[company_register_year]" type="text" value="<?php echo $row['company_register_year']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Company_register_capital'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-company_register_capital" class="form-control selectpicker" name="row[company_register_capital]">
                <?php if(is_array($companyRegisterCapitalList) || $companyRegisterCapitalList instanceof \think\Collection || $companyRegisterCapitalList instanceof \think\Paginator): if( count($companyRegisterCapitalList)==0 ) : echo "" ;else: foreach($companyRegisterCapitalList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['company_register_capital'])?$row['company_register_capital']:explode(',',$row['company_register_capital']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Company_business'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-company_business" class="form-control selectpicker" name="row[company_business]">
                <?php if(is_array($companyBusinessList) || $companyBusinessList instanceof \think\Collection || $companyBusinessList instanceof \think\Paginator): if( count($companyBusinessList)==0 ) : echo "" ;else: foreach($companyBusinessList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['company_business'])?$row['company_business']:explode(',',$row['company_business']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Company_detail_business'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-company_detail_business" class="form-control selectpicker" name="row[company_detail_business]">
                <?php if(is_array($companyDetailBusinessList) || $companyDetailBusinessList instanceof \think\Collection || $companyDetailBusinessList instanceof \think\Paginator): if( count($companyDetailBusinessList)==0 ) : echo "" ;else: foreach($companyDetailBusinessList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['company_detail_business'])?$row['company_detail_business']:explode(',',$row['company_detail_business']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Company_nature'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-company_nature" class="form-control selectpicker" name="row[company_nature]">
                <?php if(is_array($companyNatureList) || $companyNatureList instanceof \think\Collection || $companyNatureList instanceof \think\Paginator): if( count($companyNatureList)==0 ) : echo "" ;else: foreach($companyNatureList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['company_nature'])?$row['company_nature']:explode(',',$row['company_nature']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Company_requirement'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-company_requirement" class="form-control selectpicker" name="row[company_requirement]">
                <?php if(is_array($companyRequirementList) || $companyRequirementList instanceof \think\Collection || $companyRequirementList instanceof \think\Paginator): if( count($companyRequirementList)==0 ) : echo "" ;else: foreach($companyRequirementList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['company_requirement'])?$row['company_requirement']:explode(',',$row['company_requirement']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Company_main_business'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-company_main_business" data-rule="required" class="form-control" name="row[company_main_business]" type="text" value="<?php echo htmlentities($row['company_main_business']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Company_remark'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-company_remark" data-rule="required" class="form-control" name="row[company_remark]" type="text" value="<?php echo htmlentities($row['company_remark']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Company_aeo_info'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-company_aeo_info" data-rule="required" class="form-control" name="row[company_aeo_info]" type="text" value="<?php echo htmlentities($row['company_aeo_info']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Subscribe_department'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-subscribe_department" class="form-control selectpicker" name="row[subscribe_department]">
                <?php if(is_array($subscribeDepartmentList) || $subscribeDepartmentList instanceof \think\Collection || $subscribeDepartmentList instanceof \think\Paginator): if( count($subscribeDepartmentList)==0 ) : echo "" ;else: foreach($subscribeDepartmentList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['subscribe_department'])?$row['subscribe_department']:explode(',',$row['subscribe_department']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Subscribe_customer_manager_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-subscribe_customer_manager_name" data-rule="required" class="form-control" name="row[subscribe_customer_manager_name]" type="text" value="<?php echo htmlentities($row['subscribe_customer_manager_name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Subscribe_customer_manager_phone'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-subscribe_customer_manager_phone" data-rule="required" class="form-control" name="row[subscribe_customer_manager_phone]" type="text" value="<?php echo htmlentities($row['subscribe_customer_manager_phone']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Subscribe_month'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-subscribe_month" class="form-control selectpicker" name="row[subscribe_month]">
                <?php if(is_array($subscribeMonthList) || $subscribeMonthList instanceof \think\Collection || $subscribeMonthList instanceof \think\Paginator): if( count($subscribeMonthList)==0 ) : echo "" ;else: foreach($subscribeMonthList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['subscribe_month'])?$row['subscribe_month']:explode(',',$row['subscribe_month']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Subscribe_date'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-subscribe_date" data-rule="required" class="form-control datetimepicker" data-date-format="YYYY-MM-DD" data-use-current="true" name="row[subscribe_date]" type="text" value="<?php echo $row['subscribe_date']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Subscribe_period'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-subscribe_period" data-rule="required" class="form-control" name="row[subscribe_period]" type="text" value="<?php echo htmlentities($row['subscribe_period']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Customer_present_persons'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-customer_present_persons" class="form-control" name="row[customer_present_persons]" type="text" value="<?php echo htmlentities($row['customer_present_persons']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Customer_leader_grade'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-customer_leader_grade" class="form-control selectpicker" name="row[customer_leader_grade]">
                <?php if(is_array($customerLeaderGradeList) || $customerLeaderGradeList instanceof \think\Collection || $customerLeaderGradeList instanceof \think\Paginator): if( count($customerLeaderGradeList)==0 ) : echo "" ;else: foreach($customerLeaderGradeList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['customer_leader_grade'])?$row['customer_leader_grade']:explode(',',$row['customer_leader_grade']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Customer_accompany_persons'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-customer_accompany_persons" data-rule="required" class="form-control" name="row[customer_accompany_persons]" type="text" value="<?php echo htmlentities($row['customer_accompany_persons']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Customer_commentator'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-customer_commentator" data-rule="required" class="form-control" name="row[customer_commentator]" type="text" value="<?php echo htmlentities($row['customer_commentator']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Front_line_state'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            
            <div class="radio">
            <?php if(is_array($frontLineStateList) || $frontLineStateList instanceof \think\Collection || $frontLineStateList instanceof \think\Paginator): if( count($frontLineStateList)==0 ) : echo "" ;else: foreach($frontLineStateList as $key=>$vo): ?>
            <label for="row[front_line_state]-<?php echo $key; ?>"><input id="row[front_line_state]-<?php echo $key; ?>" name="row[front_line_state]" type="radio" value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['front_line_state'])?$row['front_line_state']:explode(',',$row['front_line_state']))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Customer_num'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-customer_num" data-rule="required" class="form-control" name="row[customer_num]" type="number" value="<?php echo htmlentities($row['customer_num']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Customer_us_num'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-customer_us_num" data-rule="required" class="form-control" name="row[customer_us_num]" type="number" value="<?php echo htmlentities($row['customer_us_num']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Visit_area_time_a'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-visit_area_time_A" data-rule="required" class="form-control" name="row[visit_area_time_A]" type="number" value="<?php echo htmlentities($row['visit_area_time_A']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Visit_area_time_b'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-visit_area_time_B" data-rule="required" class="form-control" name="row[visit_area_time_B]" type="number" value="<?php echo htmlentities($row['visit_area_time_B']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Visit_area_time_c'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-visit_area_time_C" data-rule="required" class="form-control" name="row[visit_area_time_C]" type="number" value="<?php echo htmlentities($row['visit_area_time_C']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Visit_area_time_d'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-visit_area_time_D" data-rule="required" class="form-control" name="row[visit_area_time_D]" type="number" value="<?php echo htmlentities($row['visit_area_time_D']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Visit_area_time_e'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-visit_area_time_E" data-rule="required" class="form-control" name="row[visit_area_time_E]" type="number" value="<?php echo htmlentities($row['visit_area_time_E']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Visit_area_time_f'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-visit_area_time_F" data-rule="required" class="form-control" name="row[visit_area_time_F]" type="number" value="<?php echo htmlentities($row['visit_area_time_F']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Visit_area_time_g'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-visit_area_time_G" data-rule="required" class="form-control" name="row[visit_area_time_G]" type="number" value="<?php echo htmlentities($row['visit_area_time_G']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Visit_time_total'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-visit_time_total" data-rule="required" class="form-control" name="row[visit_time_total]" type="number" value="<?php echo htmlentities($row['visit_time_total']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Follow_up_visit_character'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-follow_up_visit_character" class="form-control selectpicker" name="row[follow_up_visit_character]">
                <?php if(is_array($followUpVisitCharacterList) || $followUpVisitCharacterList instanceof \think\Collection || $followUpVisitCharacterList instanceof \think\Paginator): if( count($followUpVisitCharacterList)==0 ) : echo "" ;else: foreach($followUpVisitCharacterList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['follow_up_visit_character'])?$row['follow_up_visit_character']:explode(',',$row['follow_up_visit_character']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Follow_up_focus_tech_unmanned'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-follow_up_focus_tech_unmanned" data-rule="required" class="form-control selectpicker" name="row[follow_up_focus_tech_unmanned]">
                <?php if(is_array($followUpFocusTechUnmannedList) || $followUpFocusTechUnmannedList instanceof \think\Collection || $followUpFocusTechUnmannedList instanceof \think\Paginator): if( count($followUpFocusTechUnmannedList)==0 ) : echo "" ;else: foreach($followUpFocusTechUnmannedList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['follow_up_focus_tech_unmanned'])?$row['follow_up_focus_tech_unmanned']:explode(',',$row['follow_up_focus_tech_unmanned']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Follow_up_focus_tech_remote_assistance'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-follow_up_focus_tech_remote_assistance" data-rule="required" class="form-control selectpicker" name="row[follow_up_focus_tech_remote_assistance]">
                <?php if(is_array($followUpFocusTechRemoteAssistanceList) || $followUpFocusTechRemoteAssistanceList instanceof \think\Collection || $followUpFocusTechRemoteAssistanceList instanceof \think\Paginator): if( count($followUpFocusTechRemoteAssistanceList)==0 ) : echo "" ;else: foreach($followUpFocusTechRemoteAssistanceList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['follow_up_focus_tech_remote_assistance'])?$row['follow_up_focus_tech_remote_assistance']:explode(',',$row['follow_up_focus_tech_remote_assistance']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Follow_up_focus_tech_mec'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-follow_up_focus_tech_MEC" data-rule="required" class="form-control selectpicker" name="row[follow_up_focus_tech_MEC]">
                <?php if(is_array($followUpFocusTechMecList) || $followUpFocusTechMecList instanceof \think\Collection || $followUpFocusTechMecList instanceof \think\Paginator): if( count($followUpFocusTechMecList)==0 ) : echo "" ;else: foreach($followUpFocusTechMecList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['follow_up_focus_tech_MEC'])?$row['follow_up_focus_tech_MEC']:explode(',',$row['follow_up_focus_tech_MEC']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Follow_up_focus_tech_qkl'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-follow_up_focus_tech_QKL" data-rule="required" class="form-control selectpicker" name="row[follow_up_focus_tech_QKL]">
                <?php if(is_array($followUpFocusTechQklList) || $followUpFocusTechQklList instanceof \think\Collection || $followUpFocusTechQklList instanceof \think\Paginator): if( count($followUpFocusTechQklList)==0 ) : echo "" ;else: foreach($followUpFocusTechQklList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['follow_up_focus_tech_QKL'])?$row['follow_up_focus_tech_QKL']:explode(',',$row['follow_up_focus_tech_QKL']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Follow_up_focus_tech_ar_vr'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-follow_up_focus_tech_AR_VR" data-rule="required" class="form-control selectpicker" name="row[follow_up_focus_tech_AR_VR]">
                <?php if(is_array($followUpFocusTechArVrList) || $followUpFocusTechArVrList instanceof \think\Collection || $followUpFocusTechArVrList instanceof \think\Paginator): if( count($followUpFocusTechArVrList)==0 ) : echo "" ;else: foreach($followUpFocusTechArVrList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['follow_up_focus_tech_AR_VR'])?$row['follow_up_focus_tech_AR_VR']:explode(',',$row['follow_up_focus_tech_AR_VR']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Follow_up_focus_tech_wlw'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-follow_up_focus_tech_WLW" data-rule="required" class="form-control selectpicker" name="row[follow_up_focus_tech_WLW]">
                <?php if(is_array($followUpFocusTechWlwList) || $followUpFocusTechWlwList instanceof \think\Collection || $followUpFocusTechWlwList instanceof \think\Paginator): if( count($followUpFocusTechWlwList)==0 ) : echo "" ;else: foreach($followUpFocusTechWlwList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['follow_up_focus_tech_WLW'])?$row['follow_up_focus_tech_WLW']:explode(',',$row['follow_up_focus_tech_WLW']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Follow_up_focus_tech_yyyw'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-follow_up_focus_tech_YYYW" data-rule="required" class="form-control selectpicker" name="row[follow_up_focus_tech_YYYW]">
                <?php if(is_array($followUpFocusTechYyywList) || $followUpFocusTechYyywList instanceof \think\Collection || $followUpFocusTechYyywList instanceof \think\Paginator): if( count($followUpFocusTechYyywList)==0 ) : echo "" ;else: foreach($followUpFocusTechYyywList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['follow_up_focus_tech_YYYW'])?$row['follow_up_focus_tech_YYYW']:explode(',',$row['follow_up_focus_tech_YYYW']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Follow_up_focus_tech_other_info'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-follow_up_focus_tech_OTHER_INFO" data-rule="required" class="form-control" name="row[follow_up_focus_tech_OTHER_INFO]" type="text" value="<?php echo htmlentities($row['follow_up_focus_tech_OTHER_INFO']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Follow_up_process'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-follow_up_process" class="form-control selectpicker" name="row[follow_up_process]">
                <?php if(is_array($followUpProcessList) || $followUpProcessList instanceof \think\Collection || $followUpProcessList instanceof \think\Paginator): if( count($followUpProcessList)==0 ) : echo "" ;else: foreach($followUpProcessList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['follow_up_process'])?$row['follow_up_process']:explode(',',$row['follow_up_process']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Follow_up_demand_detail'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-follow_up_demand_detail" data-rule="required" class="form-control" name="row[follow_up_demand_detail]" type="text" value="<?php echo htmlentities($row['follow_up_demand_detail']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Follow_up_limit_reason'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-follow_up_limit_reason" class="form-control selectpicker" name="row[follow_up_limit_reason]">
                <?php if(is_array($followUpLimitReasonList) || $followUpLimitReasonList instanceof \think\Collection || $followUpLimitReasonList instanceof \think\Paginator): if( count($followUpLimitReasonList)==0 ) : echo "" ;else: foreach($followUpLimitReasonList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['follow_up_limit_reason'])?$row['follow_up_limit_reason']:explode(',',$row['follow_up_limit_reason']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Project_progress'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-project_progress" class="form-control selectpicker" name="row[project_progress]">
                <?php if(is_array($projectProgressList) || $projectProgressList instanceof \think\Collection || $projectProgressList instanceof \think\Paginator): if( count($projectProgressList)==0 ) : echo "" ;else: foreach($projectProgressList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['project_progress'])?$row['project_progress']:explode(',',$row['project_progress']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Opinion_evaluate'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-opinion_evaluate" class="form-control selectpicker" name="row[opinion_evaluate]">
                <?php if(is_array($opinionEvaluateList) || $opinionEvaluateList instanceof \think\Collection || $opinionEvaluateList instanceof \think\Paginator): if( count($opinionEvaluateList)==0 ) : echo "" ;else: foreach($opinionEvaluateList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['opinion_evaluate'])?$row['opinion_evaluate']:explode(',',$row['opinion_evaluate']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Opinion_detail'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-opinion_detail" data-rule="required" class="form-control" name="row[opinion_detail]" type="text" value="<?php echo htmlentities($row['opinion_detail']); ?>">
        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>
