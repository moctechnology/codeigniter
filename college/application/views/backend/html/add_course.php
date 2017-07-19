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
                <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
                <li><a href="#">Academic</a></li>
                <li><a href="#">Course &amp; Batch</a></li>
                <li class="active">Course</li>
            </ul>
            <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
    </div><br>
    <div class="content">
            <form id="course-form" action="/index.php/core/course/create" method="post">            <div class="row">
                <div class="span4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Add Course</h4>
                        </div>
                        <div class="panel-body">
                            <div class="span12">

                                <div class="panel-body">
                                                                           <div class="form-group">
                                        <label for="reg_input_name" class="req">Course Name </label>
                                        <input size="84" maxlength="45" class="form-control" name="Course[course_name]" id="Course_course_name" type="text"><div class="school_val_error" id="Course_course_name_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name">Description</label>
                                        <textarea class="form-control" name="Course[course_description]" id="Course_course_description"></textarea><div class="school_val_error" id="Course_course_description_em_" style="display:none"></div>                                    </div> <div class="form-group">
                                        <label for="reg_input_name">Code </label>
                                        <input class="form-control" name="Course[course_code]" id="Course_course_code" maxlength="10" type="text"><div class="school_val_error" id="Course_course_code_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Minimum Attendance Percentage</label>
                                        <input class="form-control" name="Course[minimumattendance]" id="Course_minimumattendance" maxlength="3" type="text"><div class="school_val_error" id="Course_minimumattendance_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name">Attendance Type</label>
                                        <select class="form-control" data-required="true" name="Course[attendancetype]" id="Course_attendancetype">
<option value="prompt">Please select</option>
<option value="0" selected="selected">Daily</option>
<option value="1">Subject Wise</option>
</select><div class="school_val_error" id="Course_attendancetype_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Total Working Days</label>
                                        <input class="form-control" name="Course[totalworkingdays]" id="Course_totalworkingdays" maxlength="4" type="text"><div class="school_val_error" id="Course_totalworkingdays_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label class="req" for="Syllabus_syllabus_name">Syllabus Name</label><select class="form-control" name="Syllabus[syllabus_name]" id="Syllabus_syllabus_name">
<option value="">Select Syllabus</option>
<option value="GPA">GPA</option>
<option value="CCE">CCE</option>
</select><div class="school_val_error" id="Syllabus_syllabus_name_em_" style="display:none"></div>                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="span-5">
                                    <div class="form_sep">
                                        <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" value="Save" type="submit">                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="span6">
                    <div class="grid-view table-responsive" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Course Name</th><th id="item-grid_c2">Attendance Type</th><th id="item-grid_c3">Minimum Attendance(%)</th><th id="item-grid_c4">Total Working Days</th><th class="button-column" id="item-grid_c5">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="10%">1</td><td width="20%">COMPUTER network</td><td width="20%">Daily</td><td width="20%">34</td><td width="20%">25</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/1"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/1"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/1"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">2</td><td width="20%">ONLINE TEST SERIES</td><td width="20%">Daily</td><td width="20%">75</td><td width="20%">25</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/2"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/2"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/2"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">3</td><td width="20%">Pre School 1</td><td width="20%">Subject wise</td><td width="20%">75</td><td width="20%">200</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/3"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/3"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/3"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">4</td><td width="20%">Pre School 2</td><td width="20%">Daily</td><td width="20%">75</td><td width="20%">2000</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/4"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/4"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/4"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">5</td><td width="20%">Year 1</td><td width="20%">Daily</td><td width="20%">75</td><td width="20%">250</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/5"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/5"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/5"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">6</td><td width="20%">Year 2</td><td width="20%">Daily</td><td width="20%">75</td><td width="20%">75</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/6"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/6"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/6"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">7</td><td width="20%">Year 3</td><td width="20%">Daily</td><td width="20%">100</td><td width="20%">250</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/7"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/7"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/7"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">8</td><td width="20%">Year 4</td><td width="20%">Daily</td><td width="20%">100</td><td width="20%">250</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/8"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/8"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/8"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">9</td><td width="20%">Year 5</td><td width="20%">Daily</td><td width="20%">100</td><td width="20%">250</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/9"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/9"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/9"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">10</td><td width="20%">Computer COuerse</td><td width="20%">Daily</td><td width="20%">60</td><td width="20%">100</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/course/update/id/10"><img src="" alt=""></a> <a class="icon-eye" title="" href="/index.php/core/course/view/id/10"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/course/delete/id/10"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/core/course/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/core/course/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/core/course/create">1</a></li>
<li class="page"><a href="/index.php/core/course/create/Course_page/2">2</a></li>
<li class="page"><a href="/index.php/core/course/create/Course_page/3">3</a></li>
<li class="page"><a href="/index.php/core/course/create/Course_page/4">4</a></li>
<li class="next"><a href="/index.php/core/course/create/Course_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/core/course/create/Course_page/21">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/core/course/create"><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span><span>10</span></div>
</div>  
                </div>
            </div>
            </form>        </div>
	

		
                    </div>
                    <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        <ul class="nav navbar-nav no-border visible-xs-block">
                            <li>
                                <a data-target="#navbar-second" data-toggle="collapse" class="text-center collapsed">
                                    <i class="icon-circle-up2"></i>
                                </a>
                            </li>
                        </ul>
                        <div id="navbar-second" class="navbar-collapse collapse">
                            <div class="navbar-text">
                                &copy; 2015. Webschool by GESCIS Technologies Pvt Ltd. V3.0
                            </div>
                        </div>
                    </div>
                </div>