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
<style>
    .error{
        color:red;
    }
</style>
<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Reports</a></li>
            <li class="active">Student Reports</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="student-form" action="/index.php/core/student/studentdetailsreport" method="post">

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Student Reports</h4>
                </div>
                <div class="panel-body">

                    <div class="col-sm-12">
                        <div id="select" class="row col-sm-12">
                            <div class="form-group col-sm-2">
                                <label> 
                                    <input id="ytStudent_student_phone" type="hidden" value="0" name="Student[student_phone]"><input name="Student[student_phone]" id="Student_student_phone" value="1" type="checkbox"> 
                                    Phone Number                                </label>
                                                            </div>
                            <div class="form-group col-sm-2">
                                <label>
                                    <input id="ytStudent_student_email" type="hidden" value="0" name="Student[student_email]"><input name="Student[student_email]" id="Student_student_email" value="1" type="checkbox">Email 
                                </label>
                                                            </div>
                            <div class="form-group col-sm-2">
                                <label> 
                                    <input id="ytStudent_guardianid" type="hidden" value="0" name="Student[guardianid]"><input name="Student[guardianid]" id="Student_guardianid" value="1" type="checkbox"> Guardian Details                                </label>
                                                            </div>
                            <div class="form-group col-sm-2">
                                <label> 
                                    <input id="ytStudent_student_address1" type="hidden" value="0" name="Student[student_address1]"><input name="Student[student_address1]" id="Student_student_address1" value="1" type="checkbox">Present Address 
                                </label>
                                                            </div>
                            <div class="form-group col-sm-2">
                                <label> 
                                    <input id="ytStudent_student_admissiondate" type="hidden" value="0" name="Student[student_admissiondate]"><input name="Student[student_admissiondate]" id="Student_student_admissiondate" value="1" type="checkbox"> Admission Date                                </label>
                                                            </div>
                            <div class="form-group col-sm-2">
                                <label> 
                                    <input id="ytStudent_student_transport" type="hidden" value="0" name="Student[student_transport]"><input name="Student[student_transport]" id="Student_student_transport" value="1" type="checkbox"> Transport Details                                </label>
                                                            </div>
                            <div class="form-group col-sm-2">
                                <label> 
                                    <input id="ytStudent_student_parent" type="hidden" value="0" name="Student[student_parent]"><input name="Student[student_parent]" id="Student_student_parent" value="1" type="checkbox">Parent's Details                                </label>
                                                            </div>
                            <div class="form-group col-sm-2">
                                <label> 
                                    <input id="ytStudent_student_dob" type="hidden" value="0" name="Student[student_dob]"><input name="Student[student_dob]" id="Student_student_dob" value="1" type="checkbox">Date of Birth                                </label>
                                                            </div>
                            <div class="form-group col-sm-2">
                                <label> 
                                    <input id="ytStudent_studentcategoryid" type="hidden" value="0" name="Student[studentcategoryid]"><input name="Student[studentcategoryid]" id="Student_studentcategoryid" value="1" type="checkbox">Category                                </label>
                                                            </div>
                            <div class="form-group col-sm-2">
                                <label> 
                                    <input id="ytStudent_student_religion" type="hidden" value="0" name="Student[student_religion]"><input name="Student[student_religion]" id="Student_student_religion" value="1" type="checkbox">Religion                                </label>
                                                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-3">
                                <label for="reg_input">Course</label>
                                <select class="form-control" name="Student[courseid]" id="Student_courseid">
<option value="">SelectCourse</option>
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
</select>                            </div>  
                            <div class="form-group col-sm-3">
                                <label for="reg_input">Batch</label>
                                <select class="form-control" name="Student[batchid]" id="Student_batchid"><option value="">Select</option><option value="0">All Batches</option><option value="1">A</option><option value="8">dsfdsfdsfd</option></select>                            </div>
                        </div>
                    </div>
                    <div class="panel-footer1">
                        <div class="col-sm-12">
                            <div class="form-group" align="right">
                                <input type="button" onclick="printDiv('print')" value="Print Report" class="btn btn-danger">
                                                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <div class="row" id="report">
        <div class="col-sm-12" id="print">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title" id="reporttitle">Report For : STD 1 - All Batches</h4>
                </div>
                <div id="studentlist" class="table-responsive"> <table class="table responsive table-bordered table-striped" id="studentlist"><thead>
                                <tr>
                                    <th width="25%">Admission No.  / Roll No.</th>
                                    <th width="25%">Student Name</th><th width="25%">Phone Number</th><th width="25%">Mobile Number</th><th width="33.33%">Email ID</th><th width="16.66%">Guardian Name</th><th width="16.66%">Guardian Mobile</th><th width="16.66%">Guardian Email</th><th width="16.66%">Guardian Address</th><th width="16.66%">Student Address</th><th width="16.66%">Student Admission Date</th><th width="16.66%">Route Master Code</th><th width="16.66%">Destination</th><th width="16.66%">Name of Father</th><th width="16.66%">Name of Mother</th><th width="16.66%">DOB</th><th width="16.66%">Category</th><th width="16.66%">Religion</th></tr>
             </thead><tbody></tbody>
              </table></div>
            </div>
        </div>
    </div>
    </form></div>
<script>
    $(document).ready(function () {
        var droplist = $('#Student_batchid');
        droplist.change(function () {

            if ($('#Student_student_phone').is(":checked"))
            {
                var phone = $('#Student_student_phone').val();
            }
            if ($('#Student_student_email').is(":checked"))
            {
                var email = $('#Student_student_email').val();
            }
            if ($('#Student_guardianid').is(":checked"))
            {
                var guardian = $('#Student_guardianid').val();
            }
            if ($('#Student_student_address1').is(":checked"))
            {
                var address = $('#Student_student_address1').val();
            }
            if ($('#Student_student_admissiondate').is(":checked"))
            {
                var admissiondate = $('#Student_student_admissiondate').val();
            }
            if ($('#Student_student_transport').is(":checked"))
            {
                var transport = $('#Student_student_transport').val();
            }
            if ($('#Student_student_parent').is(":checked"))
            {
                var parent = $('#Student_student_parent').val();
            }
            if ($('#Student_student_dob').is(":checked"))
            {
                var dob = $('#Student_student_dob').val();
            }
            if ($('#Student_studentcategoryid').is(":checked"))
            {
                var category = $('#Student_studentcategoryid').val();
            }
            if ($('#Student_student_religion').is(":checked"))
            {
                var religion = $('#Student_student_religion').val();
            }

            $('#studentlist').empty();
            $.ajax({
                type: "POST",
                url: "studentdetailsreportlist",
                data: {phone: phone, email: email, guardian: guardian, address: address, admissiondate: admissiondate, transport: transport, parent: parent,
                    dob: dob, category: category, religion: religion, courseid: $('#Student_courseid option:selected').val(), batchid: $('#Student_batchid option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#report').show("slow");
                    $('#studentlist').append(data);
                }
            });
        });
    });
//   function printDiv(divName) {
//        var divToPrint = document.getElementById(divName);
//           var popupWin = window.open('', '', 'width=300,height=300');
//           popupWin.document.open();
//           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
//            popupWin.document.close();
//    }
    function printDiv(divName) {
        var divToPrint = document.getElementById(divName);
        var popupWin = window.open('', '', 'width=300,height=300');
        popupWin.document.open();
//        popupWin.document.write('<html><body onload="window.print()"> <link href="/webschool/css/assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css"> <link href="/webschool/css/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">' + divToPrint.innerHTML + '</html>');
        popupWin.document.write('<html><body onload="window.print()">');
//        popupWin.document.write('<link href="/css/assets/css/minified/ccebootstrap.min.css" rel="stylesheet" type="text/css">');
//        popupWin.document.write('<link href="/css/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">');
        popupWin.document.write(divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
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