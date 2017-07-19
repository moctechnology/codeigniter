<div class="content-wrapper">
                    <div class="content">

		<!--
// Copyright (c) 2015 All Right Reserved, https://web-school.in
//
// This source is subject to the Gescis License.
// All other rights reserved.
//
// THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
// KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
// IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
// PARTICULAR PURPOSE.

@(#)Project:        					Webschool
@(#)Version:        					v3.0
@(#)Initial Development Completion:                     Date: 10/06/2015
@(#)Developers:     					 Arya K Nair,Reshma R Pillai
@(#)Copyright:      					(C) Gescis Technologies, Technopark
@(#)Product:        					Webschool ERP.
@(#)Template:        					Multiple templates developed by Gescis.
-->
<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Academic</a></li>
            <li><a href="#">Course &amp; Batch</a></li>
            <li class="active">Course</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
<?php $id = $this->uri->segment(4); ?>

    <form id="course-form" action="" method="post">    <div class="row">
        <div class="col-sm-6">
        
        <?php
		
		if($id != ''){
			foreach($single_rows as $value){
			$course_name = $value->course_name;
			$course_attendance_type = $value->course_attendance_type;
			$course_min_attendanece_percentage = $value->course_min_attendanece_percentage;
			$course_total_working_days = $value->course_total_working_days;
			$course_description = $value->course_description;
			$course_code = $value->course_code;
			$course_syllabous_name = $value->course_syllabous_name;
		}
		}else{
			$course_name = '';
			$course_attendance_type = '';
			$course_min_attendanece_percentage = '';
			$course_total_working_days = '';
			$course_description = '';
			$course_code = '';
			$course_syllabous_name = '';
		} ?>
        
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Add Course</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">

                        <div class="panel-body">
                        
                                                        <div class="form-group">
                                <label for="reg_input_name" class="req">Course Name </label>
                                <input size="84" maxlength="45" class="form-control" value="<?php echo $course_name ?>" name="course_name" id="Course_course_name" type="text"><div class="school_val_error" id="Course_course_name_em_" style="display:none"></div>                
                            </div>
                            <div class="form-group">
                                <label for="reg_input_name">Description</label>
                                <textarea class="form-control" name="course_description" id="Course_course_description"><?php echo $course_description ?></textarea><div class="school_val_error" id="Course_course_description_em_" style="display:none"></div>                            </div> <div class="form-group">
                                <label for="reg_input_name">Code </label>
                                <input class="form-control" name="course_code" value="<?php echo $course_code ?>" id="Course_course_code" type="text" maxlength="10"><div class="school_val_error" id="Course_course_code_em_" style="display:none"></div>                
                            </div>
                            <div class="form-group">
                                <label for="reg_input_name" class="req">Minimum Attendance Percentage</label>
                                <input class="form-control" name="course_minimumattendance" value="<?php echo $course_min_attendanece_percentage ?>" id="Course_minimumattendance" type="text" maxlength="3"><div class="school_val_error" id="Course_minimumattendance_em_" style="display:none"></div>                
                            </div>
                            <div class="form-group">
                                <label for="reg_input_name">Attendance Type</label>
                                <select class="form-control" data-required="true"  name="course_attendancetype" id="Course_attendancetype">
                                <?php if($id != ''){ ?>
                                <option value="<?php echo $course_attendance_type ?>"><?php echo $course_attendance_type ?></option>
                                <?php } else { ?>
<option value="prompt">Please Select</option>
<?php } ?>
<option value="Daily" selected="selected">Daily</option>
<option value="Subject Wise">Subject Wise</option>
</select><div class="school_val_error" id="Course_attendancetype_em_" style="display:none"></div>                
                            </div>
                            <div class="form-group">
                                <label for="reg_input_name" class="req">Total Working Days</label>
                                <input class="form-control" name="course_totalworkingdays" value="<?php echo $course_total_working_days ?>" id="Course_totalworkingdays" type="text" maxlength="4"><div class="school_val_error" id="Course_totalworkingdays_em_" style="display:none"></div>                
                            </div>
                            <div class="form-group">
                                <label class="req" for="Syllabus_syllabus_name">Syllabus Name</label>
                                <select class="form-control" name="course_syllabus_name" id="Syllabus_syllabus_name">
                                <?php if($id != ''){ ?>
                                <option value="<?php echo $course_syllabous_name ?>"><?php echo $course_syllabous_name ?></option>
                                <?php } else { ?>
<option value="">Select Syllabus</option>
<?php } ?>
<option value="GPA">GPA</option>
<option value="CCE">CCE</option>
</select>
								<div class="form_sep" style="margin-top:15px">
                                <input class="btn btn-info" name="course_submit" id="course_submit" type="submit" value="Save">    
                                <div class="loader" id="loader" style="display:none;"><img  width="20px" height="20px" src="<?php echo URL ?>/assets/backend/images/ajax-loader.gif" />                        
                                </div>
                                <div class="message" id="success_submit" style="display:none">Course Successfully Submitted, Thank you!</div>
                               
                                </div>
                                <div class="school_val_error" id="Syllabus_syllabus_name_em_" style="display:none"></div>                            </div> 
                        </div>
                    </div>
                    

                </div>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="grid-view table-responsive" id="item-grid">
            
<table class="table table-bordered responsive table-striped table-hover">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Course</th><th id="item-grid_c2">Attendance Type</th><th id="item-grid_c3">Minimum Attendance(%)</th><th id="item-grid_c4">Total Working Days</th><th class="button-column" id="item-grid_c5">Manage</th></tr>
</thead>
<tbody>
<?php $i=1; foreach($results as $value){ ?>
<tr class="<?php if($i%2 == 0){ echo "odd";}else{ echo "even";} ?>" style="font-size:14px">
<td width="10%"><?php echo $i; ?></td>
<td width="20%"><?php echo $value->course_name ?></td>
<td width="20%"><?php echo $value->course_attendance_type ?></td>
<td width="20%"><?php echo $value->course_min_attendanece_percentage ?></td>
<td width="20%"><?php echo $value->course_total_working_days ?></td>
<td width="5%">
<a class="glyphicon glyphicon-pencil" title="" href="<?php echo URL ?>/index.php/backend/course/update/<?php echo $value->id ?>"><img src="" alt=""></a> 
<a class="glyphicon glyphicon-eye-open" title="" href="<?php echo URL ?>/index.php/backend/course/view/<?php echo $value->id ?>"><img src="" alt=""></a>  
<a class="glyphicon glyphicon-remove" title="" href="<?php echo URL ?>/index.php/backend/course/delete/<?php echo $value->id ?>"><img src="" alt=""></a></td>
</tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/core/course/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/core/course/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/core/course/create">1</a></li>
<li class="page"><a href="/index.php/core/course/create/Course_page/2">2</a></li>
<li class="next"><a href="/index.php/core/course/create/Course_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/core/course/create/Course_page/2">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/core/course/create"><span>1</span><span>2</span><span>9</span><span>10</span><span>11</span><span>12</span><span>13</span><span>14</span><span>15</span><span>16</span></div>
</div>  
        </div>
    </div>
    </form></div>	

		
                    </div>
										
					<div class="modal-content login-form col-lg-6" id="moodlemodal" style="display: none;">
                        <div id="modal-unlock" class="modal fade col-md-12">
                            <div class="modal-dialog">
                                <div class="modal-content login-form">

                                    <!-- Form -->
                                    <form class="modal-body" id="loginForm" action="" method="post">
<!--								<div class="thumbnail"><div class="thumb thumb-slide" >-->
									<img src="/images/index.jpg" alt="" class="img-responsive center-block" style="width:100px; height:100px;">
<!--                                                                    </div></div>-->

								<h6 class="content-group text-center text-semibold no-margin-top">Moodle credentials <small class="display-block">Unlock your account</small></h6>
                                                    								<div class="form-group has-feedback">
									<input type="text" class="form-control" name="url" placeholder="Moodle URL" id="link">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>
                                                                                                                              <div class="form-group has-feedback">
									<input type="text" class="form-control" name="username" placeholder="Your Username" id="username">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>
                                                                <div class="form-group has-feedback">
									<input type="text" class="form-control" name="password" placeholder="Your Password" id="password">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>


								<button type="submit" class="btn bg-slate btn-block" onclick="return  saveitem()">Save <i class="icon-circle-right2 position-right"></i></button>
								<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
							</form>
							<!-- /form -->

						</div>
					</div>
				</div>
                                    <!-- /form -->

					</div>                     <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        <ul class="nav navbar-nav no-border visible-xs-block">
                            <li>
                                <a data-target="#navbar-second" data-toggle="collapse" class="text-center collapsed">
                                    <i class="icon-circle-up2"></i>
                                </a>
                            </li>
                        </ul>
                        <div id="navbar-second" class="navbar-collapse collapse">
                            <div class="navbar-text">
                                © 2017. Webschool by GESCIS Technologies Pvt Ltd. V3.5
                            </div>
                        </div>
                    </div>
                </div>
                
