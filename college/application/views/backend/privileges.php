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
                <li><a href="#">Settings</a></li>
                <li class="active">Privileges</li>
            </ul>
             <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
            <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
    </div><br>
    <div class="content">
            <form id="privilege-form" action="/index.php/core/privilege/create" method="post">            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Privilege Settings</h4>
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-sm-3 success">
                                <label for="reg_input" class="req">User Type</label>
                                <select class="form-control" name="Privilege[usertypeid]" id="Privilege_usertypeid">
<option value="">Please Select</option>
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
</select><div class="school_val_error" id="Privilege_usertypeid_em_" style="display:none"></div>                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12" id="setprivilege"> <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Set privilege</h4>
                                </div><table id="resp_table" class="table toggle-square table-bordered table-striped" data-filter="#table_search" data-page-size="40">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true">Modules</th>
                                            <th data-hide="phone,tablet">Enable/Disable</th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><h4>All Modules</h4></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>All Modules (Only for Super Admin)</td><td data-value=""><input type="checkbox" checked="checked" name="superadmin" id="superadmin"></td></tr>
        <tr>
        <td><h4>Settings</h4></td>
        <td></td>
        </tr>
        <tr>
        <td>Institution Details</td><td data-value=""><input type="checkbox" name="institutiondetails" id="institutiondetails"></td></tr>
        <tr>
        <td>Academic Details</td><td data-value=""><input type="checkbox" checked="checked" name="academic" id="academic"></td></tr>
        <tr>
        <td>Student Import</td><td data-value=""><input type="checkbox" checked="checked" name="studentimport" id="studentimport"></td></tr>
        <tr>
        <td>Employee Import</td><td data-value=""><input type="checkbox" checked="checked" name="employeeimport" id="employeeimport"></td></tr>
        <tr>
        <td>Enquiry List</td><td data-value=""><input type="checkbox" checked="checked" name="enquirylist" id="enquirylist"></td></tr>
        <tr>
        <td><h4>Academic</h4></td>
        <td></td>
        </tr>
        <tr>
        <td><h4>Course &amp; Batch</h4></td>
        <td></td>
        </tr>
        <tr>
        <td>Course</td><td data-value=""><input type="checkbox" checked="checked" name="course" id="course"></td></tr>
        <tr>
        <td>Batch</td><td data-value=""><input type="checkbox" checked="checked" name="batch" id="batch"></td></tr>
        <tr>
        <td>Class Teacher Allocation</td><td data-value=""><input type="checkbox" name="classteacher" id="classteacher"></td></tr>
        <tr>
        <td><h4>Subjects</h4></td>
        <td></td>
        </tr>
        <tr>
        <td>Subjects</td><td data-value=""><input type="checkbox" checked="checked" name="subjects" id="subjects"></td></tr>
        <tr>
        <td>Assign Subjects</td><td data-value=""><input type="checkbox" checked="checked" name="assignsubjects" id="assignsubjects"></td></tr>
        <tr>
        <td>Subject Allocation</td><td data-value=""><input type="checkbox" checked="checked" name="subjectallocation" id="subjectallocation"></td></tr>
        <tr>
        <td>Elective Subjects</td><td data-value=""><input type="checkbox" checked="checked" name="elective" id="elective"></td></tr>
        <tr>
        <td><h4>Time Table</h4></td>
        <td></td>
        </tr>
        <tr>
        <td>Set Timetable</td><td data-value=""><input type="checkbox" checked="checked" name="settt" id="settt"></td></tr>
        <tr>
        <td>Active Timetable</td><td data-value=""><input type="checkbox" checked="checked" name="activett" id="activett"></td></tr>
        <tr>
        <td>View Batch Timetable</td><td data-value=""><input type="checkbox" checked="checked" name="batchtt" id="batchtt"></td></tr>
        <tr>
        <td>View Teacher Timetable</td><td data-value=""><input type="checkbox" checked="checked" name="teachertt" id="teachertt"></td></tr>
        <tr>
        <td>Search Proxy</td><td data-value=""><input type="checkbox" name="proxy" id="proxy"></td></tr>
        <tr>
        <td>Teacher Working Hours</td><td data-value=""><input type="checkbox" name="workinghours" id="workinghours"></td></tr>
        <tr>
        <td><h4>Exams</h4></td>
        <td></td>
        </tr>
        <tr>
        <td><h4>GPA</h4></td>
        <td></td>
        </tr>
        <tr>
        <td>Set Term</td><td data-value=""><input type="checkbox" checked="checked" name="term" id="term"></td></tr>
        <tr>
        <td>Create Exam</td><td data-value=""><input type="checkbox" checked="checked" name="createexam" id="createexam"></td></tr>
             <tr>
        <td>GPA Skill</td><td data-value=""><input type="checkbox" checked="checked" name="gpaskill" id="gpaskill"></td></tr>
             <tr>
        <td>GPA Skill Mark</td><td data-value=""><input type="checkbox" checked="checked" name="gpaskillmark" id="gpaskillmark"></td></tr>
        <tr>
        <td>Set grade Scale</td><td data-value=""><input type="checkbox" checked="checked" name="gradescale" id="gradescale"></td></tr>
        <tr>
        <td>Subject Credit Point</td><td data-value=""><input type="checkbox" checked="checked" name="subjectcreditpoint" id="subjectcreditpoint"></td></tr>
        <tr>
        <td>Total Mark%</td><td data-value=""><input type="checkbox" checked="checked" name="totalmark" id="totalmark"></td></tr>
        <tr>
        <td>Create Assessment</td><td data-value=""><input type="checkbox" name="createassessment" id="createassessment"></td></tr>
        <tr>
        <td>Enter Assessment Mark</td><td data-value=""><input type="checkbox" checked="checked" name="enterassessmentmark" id="enterassessmentmark"></td></tr>
        <tr>
        <td>Assessment Marklist</td><td data-value=""><input type="checkbox" checked="checked" name="assessmentmarklist" id="assessmentmarklist"></td></tr>
        <tr>
        <td>Set Exam</td><td data-value=""><input type="checkbox" checked="checked" name="setexam" id="setexam"></td></tr>
        <tr>
        <td>Set Mark List</td><td data-value=""><input type="checkbox" checked="checked" name="setmarklist" id="setmarklist"></td></tr>
        <tr>
        <td>Broad Sheet</td><td data-value=""><input type="checkbox" checked="checked" name="gpabroadsheet" id="gpabroadsheet"></td></tr>
        <tr>
        <td>Generate Report card</td><td data-value=""><input type="checkbox" checked="checked" name="gpareportcard" id="gpareportcard"></td></tr>
        <tr>
        <td><h4>CCE</h4></td>
        <td></td>
        </tr>
        <tr> <td><h4>Initial Setting</h4></td> <td></td> </tr>
        <tr><td>CCE category</td> <td data-value=""><input type="checkbox" name="ccecategory" id="ccecategory"></td></tr>
        <tr> <td>CCE Skils</td><td data-value=""><input type="checkbox" name="cceskills" id="cceskills"></td></tr>
        <tr> <td>CCE indicators</td><td data-value=""><input type="checkbox" checked="checked" name="cceindicators" id="cceindicators"></td></tr>
        <tr> <td>CCE assessment terms</td><td data-value=""><input type="checkbox" checked="checked" name="cceterms" id="cceterms"></td></tr>
        <tr> <td>CCE gade set</td><td data-value=""><input type="checkbox" name="ccegradeset" id="ccegradeset"></td></tr>
        <tr> <td>CCE grade skill mapping</td><td data-value=""><input type="checkbox" name="gradeskillmapping" id="gradeskillmapping"></td></tr>
        <tr> <td>Subject sub</td><td data-value=""><input type="checkbox" name="subjectsub" id="subjectsub"></td></tr>
        <tr> <td>CCE assessments</td><td data-value=""><input type="checkbox" name="cceassessments" id="cceassessments"></td></tr>
        <tr> <td>CCE grades</td><td data-value=""><input type="checkbox" checked="checked" name="ccegrades" id="ccegrades"></td></tr>
        <tr> <td>CCE Course Indicator Relation</td><td data-value=""><input type="checkbox" checked="checked" name="courseindicatorrelation" id="courseindicatorrelation"></td></tr>
        <tr> <td>CCE report card settings</td><td data-value=""><input type="checkbox" checked="checked" name="ccereportcardsettings" id="ccereportcardsettings"></td></tr>
        <tr> <td>CCE grade description class 1-5</td><td data-value=""><input type="checkbox" name="ccegradedescriptionclass1-5" id="ccegradedescriptionclass1-5"></td></tr>
        <tr>
        <td><h4>CCE Exam</h4></td>
        <td></td>
        </tr>
        <tr> <td>CCE Exam Scheme</td><td data-value=""><input type="checkbox" checked="checked" name="cceexamscheme" id="cceexamscheme"></td></tr>
        <tr> <td>CCE Set Exam</td><td data-value=""><input type="checkbox" checked="checked" name="ccesetexam" id="ccesetexam"></td></tr>
        <tr> <td>CCE Scholastic Marklist</td><td data-value=""><input type="checkbox" name="scholasticmarklist" id="scholasticmarklist"></td></tr>
        <tr> <td>CCE Co-Scholastic Marklist</td><td data-value=""><input type="checkbox" name="coscholasticmarklist" id="coscholasticmarklist"></td></tr>
        <tr> <td>Board sheet</td><td data-value=""><input type="checkbox" checked="checked" name="ccebroadsheet" id="ccebroadsheet"></td></tr>
        <tr> <td>Generate Report card</td><td data-value=""><input type="checkbox" checked="checked" name="ccereportcard" id="ccereportcard"></td></tr>
        <tr>
        <td><h4>Exam hall</h4></td>
        <td></td>
        </tr>
        <tr> <td>Exam hall</td><td data-value=""><input type="checkbox" name="examhall" id="examhall"></td></tr>
        <tr> <td>Hall Arrangement</td><td data-value=""><input type="checkbox" name="hallarrangement" id="hallarrangement"></td></tr>
        <tr> <td>Invigilation Duties</td><td data-value=""><input type="checkbox" name="invigilationduties" id="invigilationduties"></td></tr>
        <tr>
        <td><h4>Assignments &amp; Notes</h4></td>
        <td></td>
        </tr>
        <tr> <td>Add Assignments</td><td data-value=""><input type="checkbox" checked="checked" name="assignments" id="assignments"></td></tr>
        <tr> <td>Add notes</td><td data-value=""><input type="checkbox" checked="checked" name="notes" id="notes"></td></tr>
        <tr>
        <td><h4>Certifications</h4></td>
        <td></td>
        </tr>
        <tr> <td>Certificate type</td><td data-value=""><input type="checkbox" name="certificatetype" id="certificatetype"></td></tr>
        <tr> <td>Custom certificate</td><td data-value=""><input type="checkbox" name="customcertificate" id="customcertificate"></td></tr>
        <tr> <td>Generate certificate</td><td data-value=""><input type="checkbox" name="generatecertificate" id="generatecertificate"></td></tr>
        <tr>
        <td><h4>Placements</h4></td>
        <td></td>
        </tr>
        <tr> <td>Placement cell members</td><td data-value=""><input type="checkbox" name="placementcellmembers" id="placementcellmembers"></td></tr>
        <tr> <td>Placement vendors</td><td data-value=""><input type="checkbox" name="placementvendors" id="placementvendors"></td></tr>
        <tr> <td>Attendees</td><td data-value=""><input type="checkbox" name="attendees" id="attendees"></td></tr>
        <tr> <td>Placed details</td><td data-value=""><input type="checkbox" name="placeddetails" id="placeddetails"></td></tr>
        <tr>
        <td><h4>Promotion and Alumni</h4></td>
        <td></td>
        </tr>
        <tr> <td>Promotion and Alumni</td><td data-value=""><input type="checkbox" name="promotionandalumni" id="promotionandalumni"></td></tr>
        <tr> <td>Alumni Members</td><td data-value=""><input type="checkbox" name="alumnimembers" id="alumnimembers"></td></tr>
        <tr>
        <td><h4>Occurrence</h4></td>
        <td></td>
        </tr>
        <tr> <td>Occurrence register</td><td data-value=""><input type="checkbox" name="occurrence" id="occurrence"></td></tr>
        <tr>
        <td><h4>Circular</h4></td>
        <td></td>
        </tr>
        <tr> <td>Circular</td><td data-value=""><input type="checkbox" name="circular" id="circular"></td></tr>
        <tr>
        <td><h4>HR/Payroll</h4></td>
        <td></td>
        </tr>
        <tr>
        <td><h4>Employee Management</h4></td>
        <td></td>
        </tr>
        <tr> <td>Add user type</td><td data-value=""><input type="checkbox" name="usertype" id="usertype"></td></tr>
        <tr> <td>Add department</td><td data-value=""><input type="checkbox" name="department" id="department"></td></tr>
        <tr> <td>Add designation</td><td data-value=""><input type="checkbox" name="designation" id="designation"></td></tr>
        <tr> <td>Add employee</td><td data-value=""><input type="checkbox" name="addemployee" id="addemployee"></td></tr>
        <tr> <td>Employee list</td><td data-value=""><input type="checkbox" checked="checked" name="employeelist" id="employeelist"></td></tr>
        <tr> <td>Add bank details</td><td data-value=""><input type="checkbox" checked="checked" name="bankdetails" id="bankdetails"></td></tr>
        <tr> <td>Print Employee list</td><td data-value=""><input type="checkbox" checked="checked" name="printemployeelist" id="printemployeelist"></td></tr>
        <tr>
        <td><h4>Payroll</h4></td>
        <td></td>
        </tr>
        <tr> <td>Payhead</td><td data-value=""><input type="checkbox" checked="checked" name="payhead" id="payhead"></td></tr>
        <tr> <td>Payment types</td><td data-value=""><input type="checkbox" checked="checked" name="paymenttypes" id="paymenttypes"></td></tr>
        <tr> <td>Salary settings</td><td data-value=""><input type="checkbox" checked="checked" name="salarysettings" id="salarysettings"></td></tr>
        <tr> <td>Employee salary</td><td data-value=""><input type="checkbox" checked="checked" name="employeesalary" id="employeesalary"></td></tr>
        <tr> <td>Generate pay slip</td><td data-value=""><input type="checkbox" checked="checked" name="generatepayslip" id="generatepayslip"></td></tr>
            <tr>
        <td><h4>Leave Management</h4></td>
        <td></td>
        </tr><tr> <td>Leave category</td><td data-value=""><input type="checkbox" name="leavecategory" id="leavecategory"></td></tr>
        <tr> <td>Leave details</td><td data-value=""><input type="checkbox" name="leavedetails" id="leavedetails"></td></tr>
        <tr> <td>Leave application</td><td data-value=""><input type="checkbox" name="leaveapplication" id="leaveapplication"></td></tr>
        <tr> <td>Leave approvals</td><td data-value=""><input type="checkbox" checked="checked" name="leaveapprovals" id="leaveapprovals"></td></tr>
        <tr>
        <td><h4>Attendance</h4></td>
        <td></td>
        </tr>
        <tr> <td>Attendance</td><td data-value=""><input type="checkbox" checked="checked" name="employeeattendance" id="employeeattendance"></td></tr>
        </tbody>
        </table>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Set privilege</h4>
        </div>
        <table id="resp_table" class="table toggle-square table-bordered table-striped" data-filter="#table_search" data-page-size="40">
        <thead>
        <tr>
        <th data-toggle="true">Modules</th>
        <th data-hide="phone,tablet">Enable/Disable</th>

        </tr>
        </thead>
        <tbody>
        <tr>
        <td><h4>Student</h4></td>
        <td></td>
        </tr>
        <tr> <td>Student Category</td><td data-value=""><input type="checkbox" name="studentcategory" id="studentcategory"></td></tr>
        <tr> <td>Student Admission</td><td data-value=""><input type="checkbox" checked="checked" name="admission" id="admission"></td></tr>
        <tr> <td>Student list</td><td data-value=""><input type="checkbox" checked="checked" name="studentlist" id="studentlist"></td></tr>
        <tr> <td>Attendance</td><td data-value=""><input type="checkbox" name="studentattendance" id="studentattendance"></td></tr>
        <tr> <td>Print list</td><td data-value=""><input type="checkbox" checked="checked" name="studentprintlist" id="studentprintlist"></td></tr>
        <tr> <td>Roll number</td><td data-value=""><input type="checkbox" checked="checked" name="studentrollno" id="studentrollno"></td></tr>
        <tr>
        <td><h4>Finance</h4></td>
        <td></td>
        </tr>
        <tr>
        <td><h4>Fees</h4></td>
        <td></td>
        </tr>
        <tr> <td>Fees category</td><td data-value=""><input type="checkbox" checked="checked" name="feescategory" id="feescategory"></td></tr>
        <tr> <td>Fees sub category</td><td data-value=""><input type="checkbox" checked="checked" name="feessubcategory" id="feessubcategory"></td></tr>
        <tr> <td>Fee Waiver</td><td data-value=""><input type="checkbox" checked="checked" name="feewaiver" id="feewaiver"></td></tr>
        <tr> <td>Fee Template</td><td data-value=""><input type="checkbox" checked="checked" name="feetemplate" id="feetemplate"></td></tr>
        <tr> <td>Settings</td><td data-value=""><input type="checkbox" checked="checked" name="feesallocation" id="feesallocation"></td></tr>
        <tr> <td>Fees Collection</td><td data-value=""><input type="checkbox" checked="checked" name="feescollection" id="feescollection"></td></tr>
        <tr> <td>Quick payment</td><td data-value=""><input type="checkbox" checked="checked" name="quickpayment" id="quickpayment"></td></tr>
        <tr> <td>Fee Due list (Date wise)</td><td data-value=""><input type="checkbox" checked="checked" name="feeduelist" id="feeduelist"></td></tr>
        <tr> <td>Fee Due list (Individual)</td><td data-value=""><input type="checkbox" checked="checked" name="feeindividualreports" id="feeindividualreports"></td></tr>
        <tr> <td>Fee Due list (Batch Wise)</td><td data-value=""><input type="checkbox" checked="checked" name="feebatchwisereports" id="feebatchwisereports"></td></tr>
        <tr> <td>Fee Due list (Course Wise)</td><td data-value=""><input type="checkbox" checked="checked" name="feeschoolwisereports" id="feeschoolwisereports"></td></tr>
        <tr> <td>Fee Payment Delete</td><td data-value=""><input type="checkbox" checked="checked" name="feepaymentdelete" id="feepaymentdelete"></td></tr>
        <tr>
        <td><h4>Accounting</h4></td>
        <td></td>
        </tr>
        <tr> <td>Account group</td><td data-value=""><input type="checkbox" checked="checked" name="accountgroup" id="accountgroup"></td></tr>
        <tr> <td>Voucher master</td><td data-value=""><input type="checkbox" checked="checked" name="vouchermaster" id="vouchermaster"></td></tr>
        <tr> <td>Voucher head</td><td data-value=""><input type="checkbox" checked="checked" name="voucherhead" id="voucherhead"></td></tr>
        <tr> <td>Create voucher</td><td data-value=""><input type="checkbox" checked="checked" name="createvoucher" id="createvoucher"></td></tr>
        <tr> <td>Day book</td><td data-value=""><input type="checkbox" checked="checked" name="daybook" id="daybook"></td></tr>
        <tr> <td>Cash book</td><td data-value=""><input type="checkbox" checked="checked" name="cashbook" id="cashbook"></td></tr>
        <tr> <td>Bank book</td><td data-value=""><input type="checkbox" checked="checked" name="bankbook" id="bankbook"></td></tr>
        <tr>
        <td><h4>Library</h4></td>
        <td></td>
        </tr>
        <tr> <td>Add catagory</td><td data-value=""><input type="checkbox" name="librarycategory" id="librarycategory"></td></tr>
        <tr> <td>Add books</td><td data-value=""><input type="checkbox" name="addbooks" id="addbooks"></td></tr>
        <tr> <td>Issue book</td><td data-value=""><input type="checkbox" name="issuebook" id="issuebook"></td></tr>
        <tr> <td>Book return</td><td data-value=""><input type="checkbox" name="bookreturn" id="bookreturn"></td></tr>
        <tr> <td>Reports</td><td data-value=""><input type="checkbox" name="bookreports" id="bookreports"></td></tr>
        <tr> <td>Book Request</td><td data-value=""><input type="checkbox" name="bookrequest" id="bookrequest"></td></tr>
        <tr> <td>Request Details</td><td data-value=""><input type="checkbox" name="lirequestdetails" id="lirequestdetails"></td></tr>
        <tr> <td>Import</td><td data-value=""><input type="checkbox" name="libraryimport" id="libraryimport"></td></tr>
        <tr>
        <td><h4>Transport</h4></td>
        <td></td>
        </tr>
        <tr> <td>Add vehicle</td><td data-value=""><input type="checkbox" checked="checked" name="addvehicle" id="addvehicle"></td></tr>
        <tr> <td>Add driver</td><td data-value=""><input type="checkbox" name="adddriver" id="adddriver"></td></tr>
        <tr> <td>Add route</td><td data-value=""><input type="checkbox" name="addroute" id="addroute"></td></tr>
        <tr> <td>Add destination</td><td data-value=""><input type="checkbox" checked="checked" name="adddestination" id="adddestination"></td></tr>
        <tr> <td>Transport allocation</td><td data-value=""><input type="checkbox" checked="checked" name="transportallocation" id="transportallocation"></td></tr>
             <tr> <td>Transport fee collection</td><td data-value=""><input type="checkbox" checked="checked" name="transportfeecollection" id="transportfeecollection"></td></tr>
             <tr> <td>Transport allocation import</td><td data-value=""><input type="checkbox" name="transportallocationimport" id="transportallocationimport"></td></tr>
             <tr> <td>SMS Alert</td><td data-value=""><input type="checkbox" checked="checked" name="transportsmsalert" id="transportsmsalert"></td></tr><tr>
        <td><h4>Hostel</h4></td>
        <td></td>
        </tr>
        <tr> <td>Add hostel details</td><td data-value=""><input type="checkbox" name="hosteldetails" id="hosteldetails"></td></tr>
        <tr> <td>Hostel room</td><td data-value=""><input type="checkbox" name="hostelroom" id="hostelroom"></td></tr>
        <tr> <td>Hostel allocation</td><td data-value=""><input type="checkbox" name="hostelallocation" id="hostelallocation"></td></tr>
        <tr> <td>Hostel request</td><td data-value=""><input type="checkbox" name="hostelrequest" id="hostelrequest"></td></tr>
        <tr> <td>Request Details</td><td data-value=""><input type="checkbox" name="requestdetails" id="requestdetails"></td></tr>
        <tr> <td>Hostel transfer / vacate</td><td data-value=""><input type="checkbox" checked="checked" name="hosteltransfervacate" id="hosteltransfervacate"></td></tr>
        <tr> <td>Hostel register</td><td data-value=""><input type="checkbox" name="hostelregister" id="hostelregister"></td></tr>
        <tr> <td>Hostel Visitors</td><td data-value=""><input type="checkbox" name="hostelvisitors" id="hostelvisitors"></td></tr>
        <tr> <td>Hostel fee collection</td><td data-value=""><input type="checkbox" checked="checked" name="hostelfeecollection" id="hostelfeecollection"></td></tr>
        <tr> <td>Hostel details report</td><td data-value=""><input type="checkbox" name="hosteldetailsreport" id="hosteldetailsreport"></td></tr>
        <tr> <td>Room availability report </td><td data-value=""><input type="checkbox" name="availableroomreport" id="availableroomreport"></td></tr>
        <tr> <td>Room request report</td><td data-value=""><input type="checkbox" name="roomrequestreport" id="roomrequestreport"></td></tr>
        <tr> <td>Room occupancy report</td><td data-value=""><input type="checkbox" name="roomwiseoccupiedreport" id="roomwiseoccupiedreport"></td></tr>
        <tr> <td>Fee report</td><td data-value=""><input type="checkbox" checked="checked" name="feereport" id="feereport"></td></tr>
        <tr>
        <td><h4>Message/SMS</h4></td>
        <td></td>
        </tr>
        <tr> <td>Mail Box</td><td data-value=""><input type="checkbox" checked="checked" name="mailbox" id="mailbox"></td></tr>
        <tr> <td>Bulk SMS</td><td data-value=""><input type="checkbox" checked="checked" name="bulksms" id="bulksms"></td></tr>
        <tr>
        <td><h4>Storage Management</h4></td>
        <td></td>
        </tr>
        <tr> <td>Vendors</td><td data-value=""><input type="checkbox" checked="checked" name="inventoryvendors" id="inventoryvendors"></td></tr>
        <tr> <td>Inventory category</td><td data-value=""><input type="checkbox" checked="checked" name="inventorycategory" id="inventorycategory"></td></tr>
        <tr> <td>Inventory item</td><td data-value=""><input type="checkbox" checked="checked" name="inventoryitem" id="inventoryitem"></td></tr>
        <tr> <td>Inventory issue</td><td data-value=""><input type="checkbox" checked="checked" name="inventoryissue" id="inventoryissue"></td></tr>
        <tr> <td>Stock register</td><td data-value=""><input type="checkbox" checked="checked" name="stockregister" id="stockregister"></td></tr>
        <tr> <td>Issued report</td><td data-value=""><input type="checkbox" checked="checked" name="issuedreport" id="issuedreport"></td></tr>
        <tr>
        <td><h4>Performance</h4></td>
        <td></td>
        </tr>
        <tr>
        <td><h4>GPA</h4></td>
        <td></td>
        </tr>
        <tr> <td>Student Performance</td><td data-value=""><input type="checkbox" checked="checked" name="gpastudentperformance" id="gpastudentperformance"></td></tr>
        <tr> <td>Course Performance</td><td data-value=""><input type="checkbox" checked="checked" name="gpacourseperformance" id="gpacourseperformance"></td></tr>
        <tr>
        <td><h4>CCE</h4></td>
        <td></td>
        </tr>
        <tr> <td>Student Performance</td><td data-value=""><input type="checkbox" name="ccestudentperformance" id="ccestudentperformance"></td></tr>
        <tr> <td>Course Performance</td><td data-value=""><input type="checkbox" name="ccecourseperformance" id="ccecourseperformance"></td></tr>
        <tr>
        <td><h4>Event</h4></td>
        <td></td>
        </tr>
        <tr> <td>Event types</td><td data-value=""><input type="checkbox" name="eventtypes" id="eventtypes"></td></tr>
        <tr> <td>Add event</td><td data-value=""><input type="checkbox" name="addevents" id="addevents"></td></tr>
        <tr>
        <td><h4>Integration</h4></td>
        <td></td>
        </tr>
        <tr>
        <td>Integration</td><td data-value=""><input type="checkbox" name="integration" id="integration"></td></tr>
        <tr>
        <td><h4>Reports</h4></td>
        <td></td>
        </tr>
        <tr>
        <td>Student Reports</td><td data-value=""><input type="checkbox" name="studentfullreports" id="studentfullreports"></td></tr>
        <tr>
        <td>Student Details</td><td data-value=""><input type="checkbox" name="studentfulldetails" id="studentfulldetails"></td></tr>
        <tr>
        <td>Fee Due Reports</td><td data-value=""><input type="checkbox" checked="checked" name="feeduereports" id="feeduereports"></td></tr>
            <tr>
        <td>Fee Paid Reports</td><td data-value=""><input type="checkbox" name="feeduereports" id="feepaidreports"></td></tr>
            <tr>
        <td>Absentees Report</td><td data-value=""><input type="checkbox" name="absenteesdetails" id="absenteesdetails"></td></tr>
            <tr>
        <td>Class Report</td><td data-value=""><input type="checkbox" name="classreports" id="classreports"></td></tr>
            <tr>
        <td>Fees Consolidated Report</td><td data-value=""><input type="checkbox" checked="checked" name="feesconsolidatedreport" id="feesconsolidatedreport"></td></tr>
             <tr> <td>Fee Due Reports SMS Alert</td><td data-value=""><input type="checkbox" checked="checked" name="feeduereportsmsalert" id="feeduereportsmsalert"></td></tr>
            <tr>
        <td><h4>Task Manager</h4></td>
        <td></td>
        </tr>
        <tr> <td>Assign Task</td><td data-value=""><input type="checkbox" name="assigntask" id="assigntask"></td></tr>
        <tr> <td>Task Details</td><td data-value=""><input type="checkbox" name="taskdetails" id="taskdetails"></td></tr><tr>
        <td><h4>Employee Login</h4></td>
        <td></td>
        </tr>
        <tr>
        <td>My Timetable</td><td data-value=""><input type="checkbox" checked="checked" name="mytimetableemployee" id="mytimetableemployee"></td></tr>
        <tr>
        <td>My Salary Details</td><td data-value=""><input type="checkbox" checked="checked" name="mysalaryemployee" id="mysalaryemployee"></td></tr>
        <tr>
        <td>Teacher Score Card</td><td data-value=""><input type="checkbox" checked="checked" name="teachermarklist" id="teachermarklist"></td></tr>
        <tr>
        <td><h4>Student/Guardian Login</h4></td>
        <td></td>
        </tr>
        <tr>
        <td>My Timetable</td><td data-value=""><input type="checkbox" name="mytimetablestudent" id="mytimetablestudent"></td></tr>
        <tr>
        <td>Assessment Mark List (GPA)</td><td data-value=""><input type="checkbox" name="studentassessmentmarklist" id="studentassessmentmarklist"></td></tr>
        <tr>
        <td>Exam Mark List (GPA)</td><td data-value=""><input type="checkbox" name="studentexammarklist" id="studentexammarklist"></td></tr>
        <tr>
        <td>Scholastic Mark List (CCE)</td><td data-value=""><input type="checkbox" name="studentscholasticmarklist" id="studentscholasticmarklist"></td></tr>
        <tr>
        <td>Co-scholastic Mark List (CCE)</td><td data-value=""><input type="checkbox" name="studentcoscholasticmarklist" id="studentcoscholasticmarklist"></td></tr>
        <tr>
        <td>Hall Arrangement List</td><td data-value=""><input type="checkbox" name="studenthalllist" id="studenthalllist"></td></tr>
        <tr>
        <td>Assignment Details</td><td data-value=""><input type="checkbox" name="studentassignmentdetails" id="studentassignmentdetails"></td></tr>
        <tr>
        <td>Note Details</td><td data-value=""><input type="checkbox" name="studentnotedetails" id="studentnotedetails"></td></tr>
        <tr>
        <td>Circular Details</td><td data-value=""><input type="checkbox" name="studentcirculardetails" id="studentcirculardetails"></td></tr> <tr> <td>Event Details</td><td data-value=""><input type="checkbox" name="individualevents" id="individualevents"></td></tr>

        
        </tbody>
        </table>
        </div>
        </div>
        </div></div>
            </div>
            <div class="row" id="button">
                <div class="col-sm-5">
                    <div class="form_sep">
                        <input class="btn btn-info" id="submitbutton" type="submit" name="yt0" value="Save">                    </div>
                </div>
            </div>
            </form>
        </div>
<script>
    $(document).ready(function () {
        var droplist = $('#Privilege_usertypeid');
        droplist.change(function () {
             $('#setprivilege').empty();
             $.ajax({
                type: "POST",
                url: "privilegesettings",
                data: {usertypeid: $('#Privilege_usertypeid option:selected').val()},
                dataType: "html",
                success: function (data) {
                  $('#button').show("slow");
            $('#setprivilege').show("slow");
              $('#setprivilege').append(data);
                }
            });
            

        })
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