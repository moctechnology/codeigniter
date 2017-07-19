<div class="content-wrapper">
                    <div class="content">
<div id="content">
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
                  <li><a href="#">Data Export</a></li>
                <li class="active">Export</li>
            </ul>
             <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
            <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
    </div><br>
    <div class="content">
            <form id="dataexport-form" action="/index.php/site/createexcel" method="post">            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Data Export</h4>
                        </div>
                        <div class="panel-body">
                                                        <div class="panel-body">
                                <div class="form-group col-sm-3">
                                    <!--<label for="reg_input" class="req">Department</label>-->
                                    <select class="form-control" name="exportfor" id="exportfor">
<option value="">Please Select</option>
<option value="1">Student</option>
<option value="2">School</option>
</select>                                </div>
                                
                                 <div class="form-group col-sm-3" id="courseid">
                                    <!--<label for="reg_input" class="req"></label>-->
                                    <select class="form-control" name="courseid" id="courseid">
<option value="">Select Course</option>
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
</select>                                </div>
                                <div class="form-group col-sm-3" id="studentexportdetails">
                                    <!--<label for="reg_input" class="req">Department</label>-->
                                    <select class="form-control" name="studentexportdetails" id="studentexportdetails">
<option value="">Please Select</option>
<option value="1">Attendance</option>
<option value="2">Exam</option>
<option value="3">Fees</option>
<option value="4">Student Details</option>
</select>                                </div>
                                 <div class="form-group col-sm-3" id="schoolexportdetails" style="display: none;">
                                    <!--<label for="reg_input" class="req">Department</label>-->
                                    <select class="form-control" name="schoolexportdetails" id="schoolexportdetails">
<option value="">Please Select</option>
<option value="1">Payroll</option>
<option value="2">Accounting</option>
<option value="3">Transport Fee</option>
<option value="4">Student Details</option>
</select>                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form_sep">
                                        <p>&nbsp;&nbsp;<button class="btn btn-info" align="right">Go</button></p> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>        </div>
<script>
 $('#exportfor').change(function () {
     if($('#exportfor option:selected').val() === '1'){
          $("#schoolexportdetails").hide("slow");
          $("#courseid").show("slow");
           $("#studentexportdetails").show("slow");
     }
      if($('#exportfor option:selected').val() === '2'){
          $("#courseid").hide("slow");
           $("#studentexportdetails").hide("slow");
             $("#schoolexportdetails").show("slow");
     }
 });
// function genExcel(){
//     if($('#exportfor option:selected').val()===""){
//         alert("Please select values.");
//         return;
//     }
//        $.ajax({
//            url: 'CreateExcel',
//            type: 'POST',
//            data: {exportfor: $('#exportfor option:selected').val(),courseid: $('#courseid option:selected').val(),studentexportdetails: $('#studentexportdetails option:selected').val(),schoolexportdetails: $('#schoolexportdetails option:selected').val()},
//            success: function (data) {
//                
//            }
//        });
// }

</script>
</div><!-- content -->
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