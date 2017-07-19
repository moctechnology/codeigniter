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
                <li><a href="#">Settings</a></li>
                <li class="active">Assign Course</li>
            </ul>
             <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
            <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
    </div><br>
    <div class="content">
            <form id="assignclass-form" action="/index.php/core/assignclass/create" method="post">            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Assign Course</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12">

                                <div class="panel-body">

                                                                                                             <div class="form-group" id="usertype">
                                        <label for="reg_input" class="req">Users</label>
                                        <select class="form-control" name="Assignclass[usertypeid]" id="Assignclass_usertypeid">
<option value="">Select Usertype</option>
<option value="1">Student</option>
<option value="2">Employee</option>
<option value="3">Guardian</option>
<option value="4">Admin</option>
<option value="8">emloyee</option>
<option value="9">test</option>
<option value="10">rftyh</option>
<option value="11">rftyh</option>
<option value="12">rftyh</option>
<option value="13">rftyh</option>
<option value="14">rftyh</option>
<option value="15">gdgd</option>
<option value="16">sdfdsg</option>
<option value="17">gjh</option>
<option value="18">aaaaaaaa</option>
<option value="19">Teacher Eze</option>
<option value="20">Oby</option>
<option value="21">Deny</option>
<option value="22">Denyfc</option>
<option value="23">Chipaov</option>
</select><div class="school_val_error" id="Assignclass_usertypeid_em_" style="display:none"></div>                                    </div> 

                                    <div class="form-group" id="course">
                                        <label for="reg_input" class="req">Course (Press Ctrl to select more than one course)</label>
                                        <select class="form-control" multiple="multiple" size="7" name="Assignclass[courseid][]" id="Assignclass_courseid">
<option value="">Please Select</option>
<option value="1">STD 1</option>
<option value="2">STD 2</option>
<option value="3">Course1</option>
<option value="5">Survival Document</option>
<option value="6">Survival Passport</option>
<option value="7">Beginner Application</option>
<option value="10">bbbb</option>
<option value="14">a1</option>
<option value="15">a2</option>
<option value="16">English</option>
<option value="17">Grade 1</option>
<option value="18">dfgdfg</option>
<option value="19">dsfdsfd</option>
<option value="20">Class 1</option>
<option value="21">bca</option>
<option value="22">BS Computer Science</option>
<option value="23">BBsc</option>
</select><div class="school_val_error" id="Assignclass_courseid_em_" style="display:none"></div>                                    </div>  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form_sep">
                                        <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" type="submit" value="Save">                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="grid-view" id="item-grid">
<table class="table toggle-square table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">User Type</th><th id="item-grid_c2">Course</th><th class="button-column" id="item-grid_c3">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td width="30%">Guardian</td><td width="30%">STD 1</td><td width="5%"><a class="icon-cross2" title="" href="/index.php/core/assignclass/delete/id/28"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">2</td><td width="30%">Student</td><td width="30%">Survival Passport</td><td width="5%"><a class="icon-cross2" title="" href="/index.php/core/assignclass/delete/id/27"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">3</td><td width="30%">Teacher Eze</td><td width="30%">Survival Document</td><td width="5%"><a class="icon-cross2" title="" href="/index.php/core/assignclass/delete/id/25"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">4</td><td width="30%">Student</td><td width="30%">Grade 1</td><td width="5%"><a class="icon-cross2" title="" href="/index.php/core/assignclass/delete/id/24"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">5</td><td width="30%">Teacher Eze</td><td width="30%">Grade 1</td><td width="5%"><a class="icon-cross2" title="" href="/index.php/core/assignclass/delete/id/21"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">6</td><td width="30%">Teacher Eze</td><td width="30%">English</td><td width="5%"><a class="icon-cross2" title="" href="/index.php/core/assignclass/delete/id/20"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">7</td><td width="30%">Teacher Eze</td><td width="30%">Beginner Application</td><td width="5%"><a class="icon-cross2" title="" href="/index.php/core/assignclass/delete/id/19"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">8</td><td width="30%">Teacher Eze</td><td width="30%">Survival Passport</td><td width="5%"><a class="icon-cross2" title="" href="/index.php/core/assignclass/delete/id/18"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">9</td><td width="30%">Employee</td><td width="30%">English</td><td width="5%"><a class="icon-cross2" title="" href="/index.php/core/assignclass/delete/id/17"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">10</td><td width="30%">Employee</td><td width="30%">Survival Document</td><td width="5%"><a class="icon-cross2" title="" href="/index.php/core/assignclass/delete/id/16"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/core/assignclass/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/core/assignclass/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/core/assignclass/create">1</a></li>
<li class="page"><a href="/index.php/core/assignclass/create/Assignclass_page/2">2</a></li>
<li class="next"><a href="/index.php/core/assignclass/create/Assignclass_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/core/assignclass/create/Assignclass_page/2">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/core/assignclass/create"><span>28</span><span>27</span><span>25</span><span>24</span><span>21</span><span>20</span><span>19</span><span>18</span><span>17</span><span>16</span></div>
</div>  
                </div>
            </div>
            </form>        </div>
<script>

    $('#Assignclass_usertypeid').change(function () {
     
        $('#item-grid').yiiGridView('update', {
            data: {search: $('#Assignclass_usertypeid option:selected').text()}
        });
        return false;
    });


</script>
	

		
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
                               © 2017. Webschool by GESCIS Technologies Pvt Ltd. V3.2
                            </div>
                        </div>
                    </div>
                </div>