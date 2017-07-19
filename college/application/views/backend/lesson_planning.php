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
            <li><a href="#">Lesson Planning</a></li>
            <li class="active">Lesson Planning</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab">Lesson Planning</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab">Reports</a></li>
        </ul>
        <h6 class="content-group text-semibold"></h6>
        
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">
                 <form id="lessonplanning-form" action="/index.php/core/lessonplanning/create" method="post">                <div class="row">
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                        <input type="text" id="search" class="form-control" placeholder="Search...">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Lesson Planning</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="reg_input" class="req">Course</label>
                                    <select class="form-control" name="Lessonplanning[courseid]" id="Lessonplanning_courseid">
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
</select><div class="school_val_error" id="Lessonplanning_courseid_em_" style="display:none"></div>                                </div>  
                                <div class="form-group">
                                    <label for="reg_input" class="req">Batch</label>
                                    <select class="form-control" name="Lessonplanning[batchid]" id="Lessonplanning_batchid">
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
</select><div class="school_val_error" id="Lessonplanning_batchid_em_" style="display:none"></div>                                </div> 
                                <div class="form-group">
                                    <label for="reg_input" class="req">Subject</label>
                                    <select class="form-control" name="Lessonplanning[subjectid]" id="Lessonplanning_subjectid">
<option value="">Please Select</option>
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
</select><div class="school_val_error" id="Lessonplanning_subjectid_em_" style="display:none"></div>                                </div>

                                <div class="row">

                                    <div class="form-group col-sm-5">
                                        <input class="form-control" placeholder="Lecture Code" name="Lessonplanning[lecture_code]" id="Lessonplanning_lecture_code" type="text" maxlength="60">                                        <div class="school_val_error" id="Lessonplanning_lecture_code_em_" style="display:none"></div>                                    </div>
                                    <div class="form-group col-sm-5">
                                        <input class="form-control" placeholder="Topic" name="Lessonplanning[topic]" id="Lessonplanning_topic" type="text" maxlength="255">                                        <div class="school_val_error" id="Lessonplanning_topic_em_" style="display:none"></div>                                    </div>
                                    <div class="form-group col-sm-2">
                                        <div class="form_sep">
                                            <p><a href="javascript:addcodeplus();" class="btn btn-info" align="right" title="Addition"><span class="glyphicon glyphicon-plus"></span></a></p> 
                                        </div>
                                    </div>
                                </div>

                                <div id="print">
                                    <div class="form-group" id="salaryamount">
                                        <table data-provides="rowlink" data-page-size="20" data-filter="#mailbox_search" class="table toggle-square default footable-loaded footable" id="codetable">
                                            <thead>
                                                <tr>
                                                    <th>Lecture Code</th>
                                                    <th>Topic</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3" align="center">
                                    <div class="form_sep">
                                        <p><a href="javascript:save();" class="btn btn-info" align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p> 
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
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Course</th><th id="item-grid_c2">Batch</th><th id="item-grid_c3">Subject</th><th id="item-grid_c4">Lecture Code</th><th class="button-column" id="item-grid_c5">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td width="20%">STD 2</td><td width="10%">Batch A</td><td width="35%">03 - GK</td><td width="30%">ghjg</td><td width="10%"><a class="glyphicon glyphicon-eye-open" title="delete" href="/index.php/core/lessonplanning/view/id/15"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="delete" href="/index.php/core/lessonplanning/delete/id/15"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">2</td><td width="20%">B.Scs</td><td width="10%">A</td><td width="35%">4BIS-Eng - English</td><td width="30%">123</td><td width="10%"><a class="glyphicon glyphicon-eye-open" title="delete" href="/index.php/core/lessonplanning/view/id/11"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="delete" href="/index.php/core/lessonplanning/delete/id/11"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">3</td><td width="20%">B.Scs</td><td width="10%">A</td><td width="35%">4BIS-Eng - English</td><td width="30%">es</td><td width="10%"><a class="glyphicon glyphicon-eye-open" title="delete" href="/index.php/core/lessonplanning/view/id/10"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="delete" href="/index.php/core/lessonplanning/delete/id/10"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">4</td><td width="20%">STD 2</td><td width="10%">Batch A</td><td width="35%">03 - GK</td><td width="30%">23</td><td width="10%"><a class="glyphicon glyphicon-eye-open" title="delete" href="/index.php/core/lessonplanning/view/id/9"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="delete" href="/index.php/core/lessonplanning/delete/id/9"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">5</td><td width="20%">STD 2</td><td width="10%">Batch A</td><td width="35%">03 - GK</td><td width="30%">55</td><td width="10%"><a class="glyphicon glyphicon-eye-open" title="delete" href="/index.php/core/lessonplanning/view/id/8"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="delete" href="/index.php/core/lessonplanning/delete/id/8"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">6</td><td width="20%">B.Scs</td><td width="10%">A</td><td width="35%">02 - Maths</td><td width="30%">44</td><td width="10%"><a class="glyphicon glyphicon-eye-open" title="delete" href="/index.php/core/lessonplanning/view/id/7"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="delete" href="/index.php/core/lessonplanning/delete/id/7"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">7</td><td width="20%">B.Scs</td><td width="10%">A</td><td width="35%">03 - GK</td><td width="30%">G1</td><td width="10%"><a class="glyphicon glyphicon-eye-open" title="delete" href="/index.php/core/lessonplanning/view/id/2"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="delete" href="/index.php/core/lessonplanning/delete/id/2"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">8</td><td width="20%">B.Scs</td><td width="10%">A</td><td width="35%">4BIS-Eng - English</td><td width="30%">E1</td><td width="10%"><a class="glyphicon glyphicon-eye-open" title="delete" href="/index.php/core/lessonplanning/view/id/1"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="delete" href="/index.php/core/lessonplanning/delete/id/1"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/core/lessonplanning/create"><span>15</span><span>11</span><span>10</span><span>9</span><span>8</span><span>7</span><span>2</span><span>1</span></div>
</div>  
                    </div>
                </div>
                 </form>            </div>
            <div class="tab-pane" id="tbb_b">
                 <form id="lessonplanning-form" action="/index.php/core/lessonplanning/reports" method="post">                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Report</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group col-sm-3">
                                    <label for="reg_input" class="req">Course</label>
                                    <select class="form-control" name="Lessonplanning[courseid1]" id="Lessonplanning_courseid1">
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
</select><div class="school_val_error" id="Lessonplanning_courseid1_em_" style="display:none"></div>                                </div>  
                                <div class="form-group col-sm-3">
                                    <label for="reg_input" class="req">Batch</label>
                                    <select class="form-control" name="Lessonplanning[batchid1]" id="Lessonplanning_batchid1">
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
</select><div class="school_val_error" id="Lessonplanning_batchid1_em_" style="display:none"></div>                                </div> 
                                <div class="form-group col-sm-3">
                                    <label for="reg_input" class="req">Subject</label>
                                    <select class="form-control" name="Lessonplanning[subjectid1]" id="Lessonplanning_subjectid1">
<option value="">Please Select</option>
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
</select><div class="school_val_error" id="Lessonplanning_subjectid1_em_" style="display:none"></div>                                </div>
                                <div class="form-group col-sm-3">
                                    <label>&nbsp;</label><br>
                                    <p>&nbsp;&nbsp;<button class="btn btn-info" align="right">Excel</button></p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 </form>            </div>
        </div>
       
    </div>
</div>
<script>
    function save() {
        var lecturecode = [];

        var courseid = $('#Lessonplanning_courseid option:selected').val();
        var batchid = $('#Lessonplanning_batchid option:selected').val();
        var subjectid = $('#Lessonplanning_subjectid option:selected').val();

        $('#codetable tbody tr').each(function (row, tr) {
            lecturecode.push($(tr).find('td:eq(0)').text());
            lecturecode.push($(tr).find('td:eq(1)').text());
        });
        if (subjectid === "") {
            alert("Please Select Subject.");
            return;
        }
        $.ajax({
            type: "POST",
            url: "create",
            data: {lecturecode: JSON.stringify(lecturecode), courseid: courseid, batchid: batchid, subjectid: subjectid},
            dataType: "html",
            success: function (data) {
                alert("Lecture code has been saved successfully");
                 $.ajax({
                    type: "POST",
                    url: "sendnotification",
                    data: {courseid: courseid, batchid: batchid, subjectid: subjectid},
                    dataType: "html",
                    success: function (data) {
                         location.reload();
                    }
                });
            }
        });
    }

    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
    function addcodeplus() {

        if ($('#Lessonplanning_subjectid option:selected').val() === "") {
            alert("Please Select Subject.");
            return;
        }
        var lecturecode = $('#Lessonplanning_lecture_code').val();
        var topic = $('#Lessonplanning_topic').val();
        $('#codetable').append('<tr><td>' + lecturecode + '</td><td>' + topic + '</td><td><a href="#"><img src="/images/delete.png"></a></td></tr>');
    }

    $(function () {
        $('#codetable').on('click', 'tr a', function (e) {
            e.preventDefault();
            $(this).parents('tr').remove();
        });
    });
    $("input").keyup(function () {
        $('#item-grid').yiiGridView('update', {
            data: {search: $('#search').val()}
        });
        return false;
    });

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