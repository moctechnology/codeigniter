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
            <li><a href="#">Subjects</a></li>
            <li class="active">Subject Allocation</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i>Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab">Subject Allocation</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab">Report</a></li>
            <li class=""><a href="#tbb_c" data-toggle="tab">Manage</a></li>
        </ul>
        <h6 class="content-group text-semibold"></h6>
        <div class="tab-content">
                        <div class="tab-pane active" id="tbb_a">
                <form id="subjectallocation-form" action="/index.php/core/subjectallocation/create" method="post">                <div class="row">
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                        <input type="text" id="search" class="form-control" placeholder="Search...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Subject Allocation</h4>
                            </div>
                            <div class="panel-body">

                                
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="reg_input" class="req">Department</label>
                                        <select class="form-control" name="Subjectallocation[departmentid]" id="Subjectallocation_departmentid">
<option value="">Select Department</option>
<option value="1">Computer</option>
<option value="2">Operator</option>
<option value="3">Accounts</option>
<option value="4">Faculty</option>
<option value="6">Physics</option>
<option value="7">Faculty of Information Science</option>
<option value="8">Faculty of  Hardware </option>
<option value="9">Faculty of Computer Science</option>
<option value="10">Faculty of Mathematics </option>
<option value="11">Faculty of Myanmar and English </option>
<option value="12">Administration</option>
<option value="13">xnbvn</option>
<option value="14">Computer Dep</option>
</select><div class="school_val_error" id="Subjectallocation_departmentid_em_" style="display:none"></div>                                    </div> 
                                    <div class="form-group">
                                        <label for="reg_input" class="req">Employee Name</label>
                                        <select class="form-control" name="Subjectallocation[employeemasterid]" id="Subjectallocation_employeemasterid">
<option value="">Select Employee</option>
<option value="1"> REEMA   KHANA</option>
<option value="37">awais  </option>
<option value="31">Daw Khaing Khaing Htwe</option>
<option value="29">Daw Khin Khin Oo</option>
<option value="33">Daw Khin Ma Ma</option>
<option value="35">Daw Mya Mya </option>
<option value="28">Daw Myint Myint Thein</option>
<option value="32">Daw Saw Sandar Aye</option>
<option value="30">Daw Su  Su Htay</option>
<option value="25">Dr Ei Shwe Zin</option>
<option value="24">Dr Swe Zin Hlaing</option>
<option value="38">Jai  Dev</option>
<option value="36">Rekha Gupta  </option>
<option value="34">U Mg Mg </option>
<option value="26">U Nay Lin Soe</option>
<option value="27">U Nay Lin Aung</option>
<option value="2">waka  waka</option>
</select><div class="school_val_error" id="Subjectallocation_employeemasterid_em_" style="display:none"></div>                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input" class="req">Course</label>
                                        <select class="form-control" name="Subjectallocation[courseid]" id="Subjectallocation_courseid">
<option value="">Please Select</option>
<option value="1">B.Scs</option>
<option value="2">STD 2</option>
<option value="9">BIS</option>
<option value="10">STD 3</option>
<option value="11">Trendz Abacus</option>
<option value="12">abc</option>
<option value="13">cvb</option>
<option value="14">bsc</option>
<option value="15">eea</option>
<option value="16">maths</option>
<option value="17">class1</option>
<option value="18">class3</option>
<option value="19">test</option>
<option value="20">test12</option>
<option value="21">mach</option>
</select><div class="school_val_error" id="Subjectallocation_courseid_em_" style="display:none"></div>                                    </div>  
                                    <div class="form-group">
                                        <label for="reg_input" class="req">Batch</label>
                                        <select class="form-control" name="Subjectallocation[batchid]" id="Subjectallocation_batchid">
<option value="">Please Select</option>
<option value="1">A</option>
<option value="2">Batch A</option>
<option value="13">Second Batch</option>
<option value="14">A</option>
<option value="15">batch 1</option>
<option value="16">dfg</option>
<option value="17">B</option>
<option value="18">as</option>
<option value="19">secA</option>
<option value="20">secA</option>
<option value="21">ABC</option>
</select><div class="school_val_error" id="Subjectallocation_batchid_em_" style="display:none"></div>                                    </div> 
                                    <div class="form-group">
                                        <label for="reg_input" class="req">Subject</label>
                                        <select class="form-control" name="Subjectallocation[subjectid]" id="Subjectallocation_subjectid">
<option value="">Select Subject</option>
<option value="17">abc - 2</option>
<option value="16">abc - 1</option>
<option value="15">Advanced Information System - 4BIS-406</option>
<option value="10">Business Information System and Analysis - 4BIS-401</option>
<option value="13">Business Process Management - 4BIS-404</option>
<option value="20">chemistry - ch1</option>
<option value="1">English - 4BIS-Eng</option>
<option value="12">Enterprise System and Risk Management - 4BIS-403</option>
<option value="3">GK - 03</option>
<option value="5">Hindi - 05</option>
<option value="19">history - h1</option>
<option value="11">Introduction to Modelling and Analysis - 4BIS-402</option>
<option value="18">Mathematics 1 - matmat</option>
<option value="2">Maths - 02</option>
<option value="4">Science - 04</option>
<option value="14">Software Quality Management - 4BIS-405</option>
</select><div class="school_val_error" id="Subjectallocation_subjectid_em_" style="display:none"></div>                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form_sep">
                                            <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" type="submit" value="Save">                                        </div>
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
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Department</th><th id="item-grid_c2">Employee Name</th><th id="item-grid_c3">Course</th><th id="item-grid_c4">Batch</th><th id="item-grid_c5">Subject</th><th class="button-column" id="item-grid_c6">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="3%">1</td><td width="30%">Computer</td><td width="17%">Jai  Dev</td><td width="10%">B.Scs</td><td width="10%">A</td><td width="25%">English - 4BIS-Eng</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/subjectallocation/update/id/30"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/subjectallocation/delete/id/30"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="3%">2</td><td width="30%">Computer</td><td width="17%">Rekha Gupta  </td><td width="10%">STD 2</td><td width="10%">Batch A</td><td width="25%">Hindi - 05</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/subjectallocation/update/id/29"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/subjectallocation/delete/id/29"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="3%">3</td><td width="30%">Computer</td><td width="17%">Rekha Gupta  </td><td width="10%">B.Scs</td><td width="10%">A</td><td width="25%">GK - 03</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/subjectallocation/update/id/28"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/subjectallocation/delete/id/28"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="3%">4</td><td width="30%">Computer</td><td width="17%">Rekha Gupta  </td><td width="10%">B.Scs</td><td width="10%">B</td><td width="25%">Business Process Management - 4BIS-404</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/subjectallocation/update/id/27"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/subjectallocation/delete/id/27"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="3%">5</td><td width="30%">Faculty</td><td width="17%">waka  waka</td><td width="10%">class3</td><td width="10%">secA</td><td width="25%">English - 4BIS-Eng</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/subjectallocation/update/id/26"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/subjectallocation/delete/id/26"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="3%">6</td><td width="30%">Computer</td><td width="17%">Rekha Gupta  </td><td width="10%">class3</td><td width="10%">secA</td><td width="25%">Hindi - 05</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/subjectallocation/update/id/25"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/subjectallocation/delete/id/25"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="3%">7</td><td width="30%">Faculty of Information Science</td><td width="17%">Daw Su  Su Htay</td><td width="10%">STD 3</td><td width="10%">A</td><td width="25%">abc - 2</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/subjectallocation/update/id/24"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/subjectallocation/delete/id/24"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="3%">8</td><td width="30%">Computer</td><td width="17%">Rekha Gupta  </td><td width="10%">B.Scs</td><td width="10%">A</td><td width="25%">Maths - 02</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/subjectallocation/update/id/23"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/subjectallocation/delete/id/23"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="3%">9</td><td width="30%">Computer</td><td width="17%">Rekha Gupta  </td><td width="10%">class3</td><td width="10%">secA</td><td width="25%">history - h1</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/subjectallocation/update/id/22"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/subjectallocation/delete/id/22"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="3%">10</td><td width="30%">Faculty of Information Science</td><td width="17%">Daw Myint Myint Thein</td><td width="10%">STD 2</td><td width="10%">Batch A</td><td width="25%">Hindi - 05</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/subjectallocation/update/id/21"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/subjectallocation/delete/id/21"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/core/subjectallocation/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/core/subjectallocation/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/core/subjectallocation/create">1</a></li>
<li class="page"><a href="/index.php/core/subjectallocation/create/Subjectallocation_page/2">2</a></li>
<li class="next"><a href="/index.php/core/subjectallocation/create/Subjectallocation_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/core/subjectallocation/create/Subjectallocation_page/2">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/core/subjectallocation/create"><span>30</span><span>29</span><span>28</span><span>27</span><span>26</span><span>25</span><span>24</span><span>23</span><span>22</span><span>21</span></div>
</div>  
                    </div>
                </div>
                </form>            </div>
            <div class="tab-pane" id="tbb_b">

                <form id="ccemarklist-form" action="/index.php/core/subjectallocation/create" method="post">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Report</h4>
                                        <div class="panel-body">

                                            <div class="form-group col-sm-3">
                                                <label>Course</label>
                                                <select class="form-control" name="Subjectallocation[courseid1]" id="Subjectallocation_courseid1">
<option value="">Please Select</option>
<option value="1">B.Scs</option>
<option value="2">STD 2</option>
<option value="9">BIS</option>
<option value="10">STD 3</option>
<option value="11">Trendz Abacus</option>
<option value="12">abc</option>
<option value="13">cvb</option>
<option value="14">bsc</option>
<option value="15">eea</option>
<option value="16">maths</option>
<option value="17">class1</option>
<option value="18">class3</option>
<option value="19">test</option>
<option value="20">test12</option>
<option value="21">mach</option>
</select>                                            </div> 
                                            <div class="form-group col-sm-3">
                                                <label for="reg_input">Batch</label>
                                                <select class="form-control" name="Subjectallocation[batchid1]" id="Subjectallocation_batchid1">
<option value="">Please Select</option>
</select>                                            </div> 
                                            <div class="form-group col-sm-3"></div>
                                            <div class="form-group col-sm-3"><br>
                                                <input type="button" class="btn btn-danger" onclick="printDiv('print')" value="Print" report="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="print">
                    <div class="col-sm-12" id="gridview" style="display:none">
                        <div class="panel panel-default" id="entermarks">
                            <div class="panel-heading">
                                <h4 class="panel-title">Details</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="marklist" data-filter="#filter">
                                    <thead>
                                        <tr>
                                            <th width="5%">Sl No:</th>
                                            <th width="15%">Subject Code</th>
                                            <th width="15%">Subject</th>
                                            <th width="20%" data-hide="phone,tablet">Department</th>
                                            <th width="15%" data-hide="phone,tablet">Employee Code</th>
                                            <th width="30%" data-hide="phone,tablet">Employee</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </form>  
            </div>
            <div class="tab-pane" id="tbb_c">
                <div class="row">
                    <form id="employeemaster-form" action="/index.php/core/subjectallocation/employeemanage" method="post">                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Manage</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="reg_input" class="req">Department</label>
                                    <select class="form-control" name="Subjectallocation[departmentid1]" id="Subjectallocation_departmentid1">
<option value="">Please Select</option>
<option value="1">Computer</option>
<option value="2">Operator</option>
<option value="3">Accounts</option>
<option value="4">Faculty</option>
<option value="6">Physics</option>
<option value="7">Faculty of Information Science</option>
<option value="8">Faculty of  Hardware </option>
<option value="9">Faculty of Computer Science</option>
<option value="10">Faculty of Mathematics </option>
<option value="11">Faculty of Myanmar and English </option>
<option value="12">Administration</option>
<option value="13">xnbvn</option>
<option value="14">Computer Dep</option>
</select>                                </div>  
                                <div class="form-group">
                                    <label for="reg_input" class="req">Employee Name</label>
                                    <select class="form-control" name="Subjectallocation[employeemasterid1]" id="Subjectallocation_employeemasterid1">
<option value="">Please Select</option>
</select>                                </div>
                                <div id="allocationdetails"></div>
                                <div class="form-group">
                                    <label for="reg_input">Replace With</label>
                                    <input class="form-control ui-autocomplete-input" id="employee" type="text" value="" name="employee" autocomplete="off">                                </div>
                                <div class="form-group col-sm-6">
                                    <label>&nbsp;</label>
                                    <button class="btn btn-info">Save</button> 
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>                    <div class="col-sm-6">
                        <div class="grid-view" id="item2-grid">
<table class="items">
<thead>
<tr>
<th id="item2-grid_c0">Sl.No.</th><th id="item2-grid_c1">From Employee</th><th id="item2-grid_c2">To Employee</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="10%">1</td><td width="30%">awais  </td><td width="30%">  </td></tr>
<tr class="even">
<td width="10%">2</td><td width="30%">  </td><td width="30%">awais  </td></tr>
<tr class="odd">
<td width="10%">3</td><td width="30%">  </td><td width="30%">  </td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/core/subjectallocation/create"><span>3</span><span>4</span><span>5</span></div>
</div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $("input").keyup(function () {

        $('#item-grid').yiiGridView('update', {
            data: {search: $('#search').val()}
        });
        return false;

    });
    $('#Subjectallocation_courseid').change(function () {
        $.ajax({
            url: 'fetchbatch',
            type: 'POST',
            data: {courseid: $('#Subjectallocation_courseid option:selected').val()},
            success: function (data) {
                $("#Subjectallocation_batchid").empty();
                $("#Subjectallocation_batchid").append(data);

            }

        });
        $('#item-grid').yiiGridView('update', {
            data: {search: $('#Subjectallocation_courseid option:selected').text()}
        });
        return false;

    });
    $('#Subjectallocation_batchid1').change(function () {
        $("#marklist tbody").empty();
        $.ajax({
            type: 'POST',
            url: 'teacherdetails',
            data: {courseid: $('#Subjectallocation_courseid1 option:selected').val(), batchid: $('#Subjectallocation_batchid1 option:selected').val()},
            success: function (data) {
//                $("#Subjectallocation_batchid").empty();
                $("#marklist tbody").append(data);
                $("#gridview").show("slow");
            }
        });
    });
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
    function manageemployee() {

    }
</script>
	

		
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