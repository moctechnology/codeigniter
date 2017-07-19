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
            <li><a href="#">Hostel</a></li>
            <li class="active">Hostel Register</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab" aria-expanded="true">Hostel Register</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab" aria-expanded="false">List</a></li>
        </ul>
        <h6 class="content-group text-semibold"></h6>
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">
                <form id="hostelregister-form" action="/index.php/hostel/hostelregister/create" method="post">                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Hostel Register</h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <div class="form-group col-sm-4">
                                            <label>User Type</label>
                                            <select class="form-control" name="Hostelregister[usertypeid]" id="Hostelregister_usertypeid">
<option value="">Select Type</option>
<option value="1">Student</option>
<option value="2">Employee</option>
</select>                                            <div class="school_val_error" id="Hostelregister_usertypeid_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group col-sm-4" id="studentautocomplete" style="">
                                            <label>Student Name</label>
                                            <input class="form-control ui-autocomplete-input" id="student" value="" name="student" autocomplete="off" type="text"><input id="hidden-fieldstudent" name="output" value="" type="hidden">                                        </div> 
                                        <div class="form-group col-sm-4" id="employeeautocomplete" style="display: none;">
                                            <label>Employee Name</label>
                                            <input class="form-control ui-autocomplete-input" id="employee" value="" name="employee" autocomplete="off" type="text"><input id="hidden-fieldemployee" name="output" value="" type="hidden">                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>&nbsp;</label>
                                            <p> &nbsp;&nbsp;<a href="javascript:userroomdetails()" class="btn btn-info">GO</a></p> 
                                        </div>
                                        <div class="form-group col-sm-12" id="roomdetails"><div class="alert alert-success">
                  <p>Hostel : GENTELMAN</p>
                  <p>Floor - Room No. : amajyambere - 12</p>
                  <p>Hostel Rent. : 20000</p>
                </div></div>
                                        <div class="form-group col-sm-4">
                                            <label>In/Out</label>
                                            <select class="form-control" name="Hostelregister[in_out]" id="Hostelregister_in_out">
<option value="">Please Select</option>
<option value="1">In</option>
<option value="2">Out</option>
</select>                                            <div class="school_val_error" id="Hostelregister_in_out_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Date</label>
                                            <input class="form-control hasDatepicker" placeholder="Date" id="Hostelregister_date" name="Hostelregister[date]" type="text"><div class="school_val_error" id="Hostelregister_setexam_date_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Time</label>
                                            <input class="form-control hasDatepicker" placeholder="Time" id="Hostelregister_time" name="Hostelregister[time]" type="text"><div class="school_val_error" id="Hostelregister_time_em_" style="display:none"></div>                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="form_sep">
                                                    <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" value="Create" type="submit">                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>  
                </form>            </div>
            <div class="tab-pane" id="tbb_b"> 
                <div class="row">
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                        <input id="search" class="form-control" placeholder="Search...." type="text">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="grid-view table-responsive" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">User Type</th><th id="item-grid_c2">User</th><th id="item-grid_c3">Hostel Room</th><th id="item-grid_c4">IN/OUT</th><th id="item-grid_c5">Time</th><th id="item-grid_c6">Date</th><th class="button-column" id="item-grid_c7">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td width="10%">Student</td><td width="20%">A00122 - Sherlock  Holmes</td><td width="30%">GENTELMAN - 2</td><td width="10%">IN</td><td width="10%">05:23:00</td><td width="10%">2016-Nov-30</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregister/delete/id/12"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">2</td><td width="10%">Student</td><td width="20%">20160929 - israel pascal nakei</td><td width="30%">TEST - 2</td><td width="10%">IN</td><td width="10%">23:04:00</td><td width="10%">2016-Nov-01</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregister/delete/id/11"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">3</td><td width="10%">Student</td><td width="20%">1223 - vj kh gg</td><td width="30%">Hostel One - 125</td><td width="10%">OUT</td><td width="10%">14:46:00</td><td width="10%">2016-Oct-12</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregister/delete/id/10"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">4</td><td width="10%">Student</td><td width="20%">1223 - vj kh gg</td><td width="30%">Hostel One - 125</td><td width="10%">IN</td><td width="10%">03:00:00</td><td width="10%">2016-Oct-10</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregister/delete/id/9"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">5</td><td width="10%">Student</td><td width="20%">A00122 - Sherlock  Holmes</td><td width="30%">GENTELMAN - 2</td><td width="10%">IN</td><td width="10%">08:00:00</td><td width="10%">2016-Sep-27</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregister/delete/id/8"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">6</td><td width="10%">Student</td><td width="20%">HY606 - kishore  </td><td width="30%">just - 111</td><td width="10%">OUT</td><td width="10%">08:22:00</td><td width="10%">2016-Sep-14</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregister/delete/id/7"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">7</td><td width="10%">Employee</td><td width="20%">ee104 - surya a raju</td><td width="30%">santa - 41</td><td width="10%">IN</td><td width="10%">03:00:00</td><td width="10%">2015-Jun-01</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregister/delete/id/3"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">8</td><td width="10%">Student</td><td width="20%">HY606 - kishore  </td><td width="30%">Hostel One - 125</td><td width="10%">IN</td><td width="10%">09:31:00</td><td width="10%">2016-Jun-28</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregister/delete/id/2"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/hostel/hostelregister/create?ajax=item-grid&amp;search="><span>12</span><span>11</span><span>10</span><span>9</span><span>8</span><span>7</span><span>3</span><span>2</span></div>
</div>  
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<script>

    $("#Hostelregister_usertypeid").change(function () {
        var str = "";
        str += $(this).val();
        if (str === '1') {
            $("#employeeautocomplete").hide("slow");
            $("#studentautocomplete").show("slow");
        }
        if (str === '2') {
            $("#studentautocomplete").hide("slow");
            $("#employeeautocomplete").show("slow");
        }
    });
    function userroomdetails() {
        $('#roomdetails').empty();
        $.ajax({
            type: "POST",
            url: "userroomdetails",
            data: {studentname: document.getElementById('hidden-fieldstudent').value, employeename: document.getElementById('hidden-fieldemployee').value, usertypeid: $('#Hostelregister_usertypeid option:selected').val()},
            dataType: "html",
            success: function (data) {
                $('#roomdetails').append(data);

            }
        });
    }
    $("input").keyup(function () {
        $('#item-grid').yiiGridView('update', {
            data: {search: $('#search').val()}
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
                                &copy; 2015. Webschool by GESCIS Technologies Pvt Ltd. V3.0
                            </div>
                        </div>
                    </div>
                </div>