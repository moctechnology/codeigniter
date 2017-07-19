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
    <form id="course-form" action="/index.php/core/course/create" method="post">    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Add Course</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">

                        <div class="panel-body">
                                                        <div class="form-group">
                                <label for="reg_input_name" class="req">Course Name </label>
                                <input size="84" maxlength="45" class="form-control" name="Course[course_name]" id="Course_course_name" type="text"><div class="school_val_error" id="Course_course_name_em_" style="display:none"></div>                
                            </div>
                            <div class="form-group">
                                <label for="reg_input_name">Description</label>
                                <textarea class="form-control" name="Course[course_description]" id="Course_course_description"></textarea><div class="school_val_error" id="Course_course_description_em_" style="display:none"></div>                            </div> <div class="form-group">
                                <label for="reg_input_name">Code </label>
                                <input class="form-control" name="Course[course_code]" id="Course_course_code" type="text" maxlength="10"><div class="school_val_error" id="Course_course_code_em_" style="display:none"></div>                
                            </div>
                            <div class="form-group">
                                <label for="reg_input_name" class="req">Minimum Attendance Percentage</label>
                                <input class="form-control" name="Course[minimumattendance]" id="Course_minimumattendance" type="text" maxlength="3"><div class="school_val_error" id="Course_minimumattendance_em_" style="display:none"></div>                
                            </div>
                            <div class="form-group">
                                <label for="reg_input_name">Attendance Type</label>
                                <select class="form-control" data-required="true" name="Course[attendancetype]" id="Course_attendancetype">
<option value="prompt">Please Select</option>
<option value="0" selected="selected">Daily</option>
<option value="1">Subject Wise</option>
</select><div class="school_val_error" id="Course_attendancetype_em_" style="display:none"></div>                
                            </div>
                            <div class="form-group">
                                <label for="reg_input_name" class="req">Total Working Days</label>
                                <input class="form-control" name="Course[totalworkingdays]" id="Course_totalworkingdays" type="text" maxlength="4"><div class="school_val_error" id="Course_totalworkingdays_em_" style="display:none"></div>                
                            </div>
                            <div class="form-group">
                                <label class="req" for="Syllabus_syllabus_name">Syllabus Name</label><select class="form-control" name="Syllabus[syllabus_name]" id="Syllabus_syllabus_name">
<option value="">Select Syllabus</option>
<option value="GPA">GPA</option>
<option value="CCE">CCE</option>
</select><div class="school_val_error" id="Syllabus_syllabus_name_em_" style="display:none"></div>                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form_sep">
                                <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" type="submit" value="Save">                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="grid-view table-responsive" id="item-grid">
<table class="items">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Course</th><th id="item-grid_c2">Attendance Type</th><th id="item-grid_c3">Minimum Attendance(%)</th><th id="item-grid_c4">Total Working Days</th><th class="button-column" id="item-grid_c5">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="10%">1</td><td width="20%">B.Scs</td><td width="20%">Subject wise</td><td width="20%">75</td><td width="20%">250</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/1"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/1"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/1"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">2</td><td width="20%">STD 2</td><td width="20%">Daily</td><td width="20%">70</td><td width="20%">365</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/2"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/2"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/2"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">3</td><td width="20%">BIS</td><td width="20%">Daily</td><td width="20%">75</td><td width="20%">240</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/9"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/9"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/9"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">4</td><td width="20%">STD 3</td><td width="20%">Daily</td><td width="20%">75</td><td width="20%">300</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/10"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/10"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/10"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">5</td><td width="20%">Trendz Abacus</td><td width="20%">Subject wise</td><td width="20%">80</td><td width="20%">96</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/11"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/11"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/11"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">6</td><td width="20%">abc</td><td width="20%">Daily</td><td width="20%">20</td><td width="20%">12</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/12"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/12"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/12"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">7</td><td width="20%">cvb</td><td width="20%">Daily</td><td width="20%">80</td><td width="20%">90</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/13"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/13"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/13"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">8</td><td width="20%">bsc</td><td width="20%">Subject wise</td><td width="20%">52</td><td width="20%">8</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/14"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/14"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/14"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">9</td><td width="20%">eea</td><td width="20%">Subject wise</td><td width="20%">60</td><td width="20%">5</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/15"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/15"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/15"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">10</td><td width="20%">maths</td><td width="20%">Daily</td><td width="20%">75</td><td width="20%">25</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/16"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/16"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/16"><img src="" alt=""></a></td></tr>
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
                                    <form class="modal-body" id="loginForm" action="/index.php/site/moodle" method="post">
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