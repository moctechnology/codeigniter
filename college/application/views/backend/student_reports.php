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
    <form enctype="multipart/form-data" id="student-form" action="/index.php/core/student/studentreport" method="post">    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Student Reports</h4>
                </div>
                <div class="panel-body">
                    
                    <div class="col-sm-12">
                        <div class="row">

                            <div class="form-group col-sm-3">
                                <label>Report For</label>
                                <select class="form-control" data-required="true" name="Student[category]" id="Student_category">
<option value="prompt">Please Select</option>
<option value="1">Blood Group</option>
<option value="2">Category</option>
<option value="3">Country</option>
<option value="4">State</option>
<option value="5">Gender</option>
<option value="6">Caste</option>
<option value="7">Fees</option>
<option value="8">Transport</option>
<option value="9">Hostel</option>
</select>                            </div> 

                            <div class="form-group col-sm-3" id="bloodgroup" style="display: none;">
                                <label for="Blood_Group">Blood Group</label>
                                <select class="form-control" name="Student[student_bloodgroup]" id="Student_student_bloodgroup">
<option value="prompt">Please Select</option>
<option value="1">A+</option>
<option value="2">A-</option>
<option value="3">B+</option>
<option value="4">B-</option>
<option value="5">O+</option>
<option value="6">O-</option>
<option value="7">AB+</option>
<option value="8">AB-</option>
</select>                            </div> 
                            <div class="form-group col-sm-3" id="studentcategory" style="display: block;">
                                <label for="reg_input" class="req">Category</label>
                                <select class="form-control" name="Student[studentcategoryid]" id="Student_studentcategoryid">
<option value="">Select Category</option>
<option value="10">Online Self Study</option>
<option value="17">xyz</option>
<option value="18">asdf</option>
</select>                            </div> 
                            <div class="form-group col-sm-3" id="country" style="display: none;">
                                <label for="reg_input">Country</label>
                                <select class="form-control" name="Student[student_country]" id="Student_student_country">
<option value="">Select Country</option>
<option value="-1">-1</option>
<option value="India">India</option>
<option value="Saudi Arabia">Saudi Arabia</option>
</select>                            </div> 
                            <div class="form-group col-sm-3" id="state" style="display: none;">
                                <label for="reg_input">State</label>
                                <select class="form-control" name="Student[student_state]" id="Student_student_state">
<option value="">Select State</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Ar Riyad">Ar Riyad</option>
<option value="prompt">prompt</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
</select>                            </div> 

                            <!--*****************************************************************************************-->
                            <div class="form-group col-sm-3" id="gender" style="display: none;">
                                <label>Gender</label>
                                <select class="form-control" name="Student[student_gender]" id="Student_student_gender">
<option value="prompt">Please Select</option>
<option value="1">Male</option>
<option value="2">Female</option>
</select>                            </div>
                            <div class="form-group col-sm-3" id="caste" style="display: none;">
                                <label for="reg_input">Caste</label>
                                <select class="form-control" name="Student[student_caste]" id="Student_student_caste">
<option value="">Select Caste</option>
</select>                            </div> 
                            <div class="form-group col-sm-3" id="fees" style="display: none;">
                                <label for="reg_input" class="req">Fees Subcategory</label>
                                <select class="form-control" name="Student[feessubcategory_name]" id="Student_feessubcategory_name">
<option value="">Select Category</option>
<option value="1">Tution1</option>
<option value="2">MessFees</option>
<option value="3">KOLLAM</option>
<option value="4">KOLLAM (Dec - Dec)</option>
<option value="5">trivadrum</option>
<option value="6">kottayam</option>
<option value="10">First fee sub category</option>
<option value="11">LF1</option>
<option value="12">Monthly</option>
<option value="13">KOLLAM (Jan - Jan)</option>
<option value="14">meal</option>
<option value="15">Admission Fees</option>
<option value="16">Tution Fees</option>
<option value="18">class fee</option>
</select>                            </div> 
                            <div class="form-group col-sm-3" id="transport" style="display: none;">
                                <label for="reg_input" class="req">Route Code</label>
                                <select class="form-control" name="Student[routemasterid]" id="Student_routemasterid">
<option value="">Select Route</option>
<option value="1">001 (TVM - KLM )</option>
</select>                            </div> 
                            <div class="form-group col-sm-3" id="hostel" style="display: none;">
                                <label for="reg_input" class="req">Hostel Name</label>
                                <select class="form-control" name="Student[student_hostel]" id="Student_student_hostel">
<option value="">Select Hostal</option>
<option value="9">Hostel 1</option>
<option value="10">1234567890</option>
</select>                            </div> 

                            <!--**********************************************************************************************-->
                            <div class="form-group col-sm-3">
                                <label>School/Batch</label>
                                <select class="form-control" data-required="true" name="Student[reportwise]" id="Student_reportwise">
<option value="prompt">Please Select</option>
<option value="1">School</option>
<option value="2">Batch</option>
</select>                            </div>
                            <div id="batch" style="display: block;">
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
</select>                                </div>  
                                <div class="form-group col-sm-3">
                                    <label for="reg_input">Batch</label>
                                    <select class="form-control" name="Student[batchid]" id="Student_batchid"><option value="">Select</option><option value="0">All Batches</option><option value="1">A</option><option value="8">dsfdsfdsfd</option></select>                                </div>
                            </div>

                        </div>
                        <!--************************************************************************-->
                        <div id="bloodgroupcheck" style="">
                            <div class="row">

                                <div class="form-group col-sm-2" id="phone">
                                    <label for="reg_input">Phone Number</label>
                                    <input id="ytStudent_student_phone" type="hidden" value="0" name="Student[student_phone]"><input name="Student[student_phone]" id="Student_student_phone" value="1" type="checkbox">                                </div>
                                <div class="form-group col-sm-2" id="email">
                                    <label for="reg_input">Email</label>
                                    <input id="ytStudent_student_email" type="hidden" value="0" name="Student[student_email]"><input name="Student[student_email]" id="Student_student_email" value="1" type="checkbox">                                </div> 
                                <div class="form-group col-sm-2" id="address">
                                    <label for="reg_input">Present Address</label>
                                    <input id="ytStudent_student_address1" type="hidden" value="0" name="Student[student_address1]"><input name="Student[student_address1]" id="Student_student_address1" value="1" type="checkbox">                                </div> 
                                <div class="form-group col-sm-2" id="date">
                                    <label for="reg_input">Admission Date </label>
                                    <input id="ytStudent_student_admissiondate" type="hidden" value="0" name="Student[student_admissiondate]"><input name="Student[student_admissiondate]" id="Student_student_admissiondate" value="1" type="checkbox">                                </div> 
                                <div class="form-group col-sm-2" id="guardian">
                                    <label for="reg_input">Guardian Details </label>
                                    <input id="ytStudent_student_guardian" type="hidden" value="0" name="Student[student_guardian]"><input name="Student[student_guardian]" id="Student_student_guardian" value="1" type="checkbox">                                </div> 
                                <div class="form-group col-sm-2" id="guardian">
                                    <label for="reg_input">Parent's Details </label>
                                    <input id="ytStudent_student_parent" type="hidden" value="0" name="Student[student_parent]"><input name="Student[student_parent]" id="Student_student_parent" value="1" type="checkbox">                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-2" id="transport1" style="display: none;">
                                <label for="reg_input">Destination Details </label>
                                <input id="ytStudent_student_destination" type="hidden" value="0" name="Student[student_destination]"><input name="Student[student_destination]" id="Student_student_destination" value="1" type="checkbox">                            </div> 
                            <div class="form-group col-sm-2" id="feesdetails" style="display: none;">
                                <label for="reg_input">Fees Details </label>
                                <input id="ytStudent_student_feesdetails" type="hidden" value="0" name="Student[student_feesdetails]"><input name="Student[student_feesdetails]" id="Student_student_feesdetails" value="1" type="checkbox">                            </div> 
                            <div class="form-group col-sm-2" id="hosteldetails" style="display: none;">
                                <label for="reg_input">Hostel Details </label>
                                <input id="ytStudent_student_hostel1" type="hidden" value="0" name="Student[student_hostel1]"><input name="Student[student_hostel1]" id="Student_student_hostel1" value="1" type="checkbox">                            </div> 
                        </div>
                        <div class="form-group col-sm-2">
                            <label> &nbsp; &nbsp;</label>
                            <p> &nbsp;&nbsp;<a href="javascript:getreport()" class="btn btn-info" id="result_button">Get Report</a> </p> 
                        </div>
                        <!--*******************************************************************************-->
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
        <div id="print">
        <div class="row" id="report1" style="display: none;">
            <!--<div class="col-sm-12" id="print">-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title" id="reporttitle1">Student List</h4>
                </div>
                <div class="table-responsive">
                    <table class="table responsive table-bordered table-striped  footable" id="studentlist1">
                        <thead>


                        </thead>
                        <tbody></tbody>
                    </table>

                </div>
            </div>
            <!--        </div>-->
        </div>
        <div class="row" id="report" style="display: block;">
            <!--        <div class="col-sm-12" id="print">-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title" id="reporttitle">Report for Category - Online Self Study - STD 1 - A</h4>
                </div>
                <div class="table-responsive">

                    <table class="table responsive table-bordered table-striped  footable" id="studentlist">
                        <thead>


                        </thead>
                        <tbody><tr>
                                <th width="5%">Sl.No.</th>
                                 <th width="30%">Student Admission No. / Roll No.</th>
                                <th data-hide="phone,tablet" width="35%">Student Name</th><th width="15%">Phone Number</th><th width="15%">Email</th><th width="15%">Address</th><th width="15%">Date</th><th width="20%">Guardian Name</th><th width="20%">Guardian Phone Number</th><th width="20%">Guardian Address</th><th width="20%">Guardian Email</th><th width="20%">Name of Father</th><th width="20%">Name of Mother</th></tr></tbody>
                    </table>
                </div>
            </div>
            <!--        </div>-->
        </div>
    </div>
    </form></div>
<script>
    $(document).ready(function () {
        var droplist = $('#Student_category');
        droplist.change(function () {
            if ($('#Student_category option:selected').val() == "1") {
                $('#batch').hide("slow");
                $('#state').hide("slow");
                $('#country').hide("slow");
                $('#studentcategory').hide("slow");
                $('#bloodgroup').show("slow");
                $('#gender').hide("slow");
                $('#caste').hide("slow");
                $('#fees').hide("slow");
                $('#bloodgroupcheck').show("slow");
                $('#transport').hide("slow");
                $('#transport1').hide("slow");
                $('#feesdetails').hide("slow");
                $('#hostel').hide("slow");
                $('#hosteldetails').hide("slow");
            }
            if ($('#Student_category option:selected').val() == "2") {
                $('#batch').hide("slow");
                $('#state').hide("slow");
                $('#country').hide("slow");
                $('#bloodgroup').hide("slow");
                $('#studentcategory').show("slow");
                $('#gender').hide("slow");
                $('#caste').hide("slow");
                $('#fees').hide("slow");
                $('#bloodgroupcheck').show("slow");
                $('#transport').hide("slow");
                $('#transport1').hide("slow");
                $('#feesdetails').hide("slow");
                $('#hostel').hide("slow");
                $('#hosteldetails').hide("slow");
            }
            if ($('#Student_category option:selected').val() == "3") {
                $('#batch').hide("slow");
                $('#state').hide("slow");
                $('#bloodgroup').hide("slow");
                $('#studentcategory').hide("slow");
                $('#country').show("slow");
                $('#gender').hide("slow");
                $('#caste').hide("slow");
                $('#fees').hide("slow");
                $('#bloodgroupcheck').show("slow");
                $('#transport').hide("slow");
                $('#transport1').hide("slow");
                $('#feesdetails').hide("slow");
                $('#hostel').hide("slow");
                $('#hosteldetails').hide("slow");
            }
            if ($('#Student_category option:selected').val() == "4") {
                $('#batch').hide("slow");
                $('#bloodgroup').hide("slow");
                $('#studentcategory').hide("slow");
                $('#country').hide("slow");
                $('#state').show("slow");
                $('#gender').hide("slow");
                $('#caste').hide("slow");
                $('#fees').hide("slow");
                $('#bloodgroupcheck').show("slow");
                $('#transport').hide("slow");
                $('#transport1').hide("slow");
                $('#feesdetails').hide("slow");
                $('#hostel').hide("slow");
                $('#hosteldetails').hide("slow");
            }
            if ($('#Student_category option:selected').val() == "5") {
                $('#batch').hide("slow");
                $('#bloodgroup').hide("slow");
                $('#studentcategory').hide("slow");
                $('#country').hide("slow");
                $('#state').hide("slow");
                $('#gender').show("slow");
                $('#caste').hide("slow");
                $('#fees').hide("slow");
                $('#bloodgroupcheck').show("slow");
                $('#transport').hide("slow");
                $('#transport1').hide("slow");
                $('#feesdetails').hide("slow");
                $('#hostel').hide("slow");
                $('#hosteldetails').hide("slow");
            }
            if ($('#Student_category option:selected').val() == "6") {
                $('#batch').hide("slow");
                $('#bloodgroup').hide("slow");
                $('#studentcategory').hide("slow");
                $('#country').hide("slow");
                $('#state').hide("slow");
                $('#gender').hide("slow");
                $('#caste').show("slow");
                $('#fees').hide("slow");
                $('#bloodgroupcheck').show("slow");
                $('#transport').hide("slow");
                $('#transport1').hide("slow");
                $('#feesdetails').hide("slow");
                $('#hostel').hide("slow");
                $('#hosteldetails').hide("slow");
            }
            if ($('#Student_category option:selected').val() == "7") {
                $('#batch').hide("slow");
                $('#bloodgroup').hide("slow");
                $('#studentcategory').hide("slow");
                $('#country').hide("slow");
                $('#state').hide("slow");
                $('#gender').hide("slow");
                $('#caste').hide("slow");
                $('#fees').show("slow");
                $('#bloodgroupcheck').show("slow");
                $('#transport').hide("slow");
                $('#transport1').hide("slow");
                $('#feesdetails').show("slow");
                $('#hostel').hide("slow");
                $('#hosteldetails').hide("slow");
            }
            if ($('#Student_category option:selected').val() == "8") {
                $('#batch').hide("slow");
                $('#bloodgroup').hide("slow");
                $('#studentcategory').hide("slow");
                $('#country').hide("slow");
                $('#state').hide("slow");
                $('#gender').hide("slow");
                $('#caste').hide("slow");
                $('#fees').hide("slow");
                $('#bloodgroupcheck').show("slow");
                $('#transport').show("slow");
                $('#transport1').show("slow");
                $('#feesdetails').hide("slow");
                $('#hostel').hide("slow");
                $('#hosteldetails').hide("slow");
            }
            if ($('#Student_category option:selected').val() == "9") {
                $('#batch').hide("slow");
                $('#bloodgroup').hide("slow");
                $('#studentcategory').hide("slow");
                $('#country').hide("slow");
                $('#state').hide("slow");
                $('#gender').hide("slow");
                $('#caste').hide("slow");
                $('#fees').hide("slow");
                $('#bloodgroupcheck').show("slow");
                $('#transport').hide("slow");
                $('#transport1').hide("slow");
                $('#feesdetails').hide("slow");
                $('#hostel').show("slow");
                $('#hosteldetails').show("slow");
            }

        })
    });
    function getreport()
    {
        var phone = "";
        var email = "";
        var date = "";
        var address = "";
        var guardian = "";
        var destination = "";
        var feesdetails = "";
        var hosteldetails = "";
        var parent = "";
        $('#studentlist tbody').empty();
        $('#studentlist1 tbody').empty();
        $('#report').hide("slow");
        if ($('#Student_student_phone').is(":checked")) {
            phone = "1";
        }
        else {
            phone = "0";
        }
        if ($('#Student_student_email').is(":checked")) {
            email = "1";
        }
        else {
            email = "0";
        }
        if ($('#Student_student_address1').is(":checked")) {
            address = "1";
        }
        else {
            address = "0";
        }
        if ($('#Student_student_admissiondate').is(":checked")) {
            date = "1";
        }
        else {
            date = "0";
        }
        if ($('#Student_student_guardian').is(":checked")) {
            guardian = "1";
        }
        else {
            guardian = "0";
        }
        if ($('#Student_student_destination').is(":checked")) {
            destination = "1";
        }
        else {
            destination = "0";
        }
        if ($('#Student_student_feesdetails').is(":checked")) {
            feesdetails = "1";
        }
        else {
            feesdetails = "0";
        }
        if ($('#Student_student_hostel1').is(":checked")) {
            hosteldetails = "1";
        }
        else {
            hosteldetails = "0";
        }
        if ($('#Student_student_parent').is(":checked")) {
            parent = "1";
        }
        else {
            parent = "0";
        }


        if ($('#Student_reportwise option:selected').val() == "1") {
            $('#batch').hide("slow");
            $('#report').hide("slow");
            $('#studentlist1 tbody').empty();
            $.ajax({
                type: "POST",
                url: "studentreportlist",
                data: {reportfor: $('#Student_category option:selected').val(),
                    bloodgroup: $('#Student_student_bloodgroup option:selected').val(),
                    studentcategory: $('#Student_studentcategoryid option:selected').val(),
                    country: $('#Student_student_country option:selected').val(),
                    state: $('#Student_student_state option:selected').val(),
                    reportwise: $('#Student_reportwise option:selected').val(),
                    gender: $('#Student_student_gender option:selected').val(),
                    caste: $('#Student_student_caste option:selected').val(),
                    fees: $('#Student_feessubcategory_name option:selected').val(),
                    transport: $('#Student_routemasterid option:selected').val(),
                    hostel: $('#Student_student_hostel option:selected').val(),
                    phone: phone, email: email, address: address, date: date, guardian: guardian,
                    destination: destination, feesdetails: feesdetails, hosteldetails: hosteldetails, parent: parent},
                dataType: "html",
                success: function (data) {
                    $('#report1').show("slow");
                    $('#report').hide("slow");
                    $('#studentlist1 tbody').append(data);
                }
            });
        }
        if ($('#Student_reportwise option:selected').val() == "2") {
            $('#studentlist tbody').empty();
            $('#batch').show("slow");
            $('#studentlist tbody').empty();
            $.ajax({
                type: "POST",
                url: "studentreportlist",
                data: {courseid: $('#Student_courseid option:selected').val(),
                    batchid: $('#Student_batchid option:selected').val(),
                    reportfor: $('#Student_category option:selected').val(),
                    bloodgroup: $('#Student_student_bloodgroup option:selected').val(),
                    studentcategory: $('#Student_studentcategoryid option:selected').val(),
                    country: $('#Student_student_country option:selected').val(),
                    state: $('#Student_student_state option:selected').val(),
                    reportwise: $('#Student_reportwise option:selected').val(),
                    gender: $('#Student_student_gender option:selected').val(),
                    caste: $('#Student_student_caste option:selected').val(),
                    fees: $('#Student_feessubcategory_name option:selected').val(),
                    transport: $('#Student_routemasterid option:selected').val(),
                    hostel: $('#Student_student_hostel option:selected').val(),
                    phone: phone, email: email, address: address, date: date, guardian: guardian,
                    destination: destination, feesdetails: feesdetails, hosteldetails: hosteldetails, parent: parent},
                dataType: "html",
                success: function (data) {
                    $('#report').show("slow");
                    $('#report1').hide("slow");
                    $('#studentlist tbody').append(data);
                }
            });
        }
    }
    $(document).ready(function () {
        $('#studentlist tbody').empty();
        $('#studentlist1 tbody').empty();
        $('#report').hide("slow");
        var droplist = $('#Student_reportwise');
        droplist.change(function () {
            if ($('#Student_reportwise option:selected').val() == "1") {
                $('#batch').hide("slow");
                $('#report').hide("slow");
                $('#studentlist1 tbody').empty();
            }
            if ($('#Student_reportwise option:selected').val() == "2") {
                $('#studentlist tbody').empty();
                $('#batch').show("slow");
            }
        })
    });
//    function printDiv(divName) {
//        var divToPrint = document.getElementById(divName);
//        var popupWin = window.open('', '', 'width=300,height=300');
//        popupWin.document.open();
//        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
//        popupWin.document.close();
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