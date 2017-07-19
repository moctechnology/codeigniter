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
            <li class="active">Hostel Visitors</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab" aria-expanded="true">Hostel Visitors</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab" aria-expanded="false">List</a></li>
        </ul>
        <h6 class="content-group text-semibold"></h6>
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">
                <form id="hostelvisitors-form" action="/index.php/hostel/hostelvisitors/create" method="post">                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Hostel Visitors</h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <div class="form-group col-sm-4">
                                            <label>User Type</label>
                                            <select class="form-control" name="Hostelvisitors[usertypeid]" id="Hostelvisitors_usertypeid">
<option value="">Select Type</option>
<option value="1">Student</option>
<option value="2">Employee</option>
</select>                                            <div class="school_val_error" id="Hostelvisitors_usertypeid_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group col-sm-4" id="studentautocomplete" style="display: block;">
                                            <label>Student Name</label>
                                            <input class="form-control ui-autocomplete-input" id="student" value="" name="student" autocomplete="off" type="text"><input id="hidden-fieldstudent" name="output" value="" type="hidden">                                        </div> 
                                        <div class="form-group col-sm-4" id="employeeautocomplete" style="display: none;">
                                            <label>Employee Name</label>
                                            <input class="form-control ui-autocomplete-input" id="employee" value="" name="employee" autocomplete="off" type="text"><input id="hidden-fieldemployee" name="output" value="" type="hidden">                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>&nbsp;</label>
                                            <p> &nbsp;&nbsp;<a href="javascript:userroomdetails()" class="btn btn-info">GO</a></p> 
                                        </div>
                                        <div class="form-group col-sm-12" id="roomdetails">

                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="reg_input_name" class="req">Visitor Name</label>
                                            <input class="form-control" name="Hostelvisitors[hostelvisitors_name]" id="Hostelvisitors_hostelvisitors_name" maxlength="60" type="text">                                            <div class="school_val_error" id="Hostelvisitors_hostelvisitors_name_em_" style="display:none"></div>                
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="reg_input_name" class="req">Relation</label>
                                            <input class="form-control" name="Hostelvisitors[hostelvisitors_relation]" id="Hostelvisitors_hostelvisitors_relation" maxlength="60" type="text">                                            <div class="school_val_error" id="Hostelvisitors_hostelvisitors_relation_em_" style="display:none"></div>                
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Date</label>
                                            <input class="form-control hasDatepicker" placeholder="Date" id="Hostelvisitors_date" name="Hostelvisitors[date]" type="text"><div class="school_val_error" id="Hostelvisitors_date_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Time</label>
                                            <input class="form-control hasDatepicker" placeholder="Time" id="Hostelvisitors_time" name="Hostelvisitors[time]" type="text"><div class="school_val_error" id="Hostelvisitors_time_em_" style="display:none"></div>                                        </div>
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
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">User Type</th><th id="item-grid_c2">User</th><th id="item-grid_c3">Hostel Room</th><th id="item-grid_c4">Visitor Name</th><th id="item-grid_c5">Relation</th><th id="item-grid_c6">Time</th><th id="item-grid_c7">Date</th><th class="button-column" id="item-grid_c8">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5.11%">1</td><td width="11.11%">Student</td><td width="11.11%">EPS1 - rani hi </td><td width="17.11%">santa - 41</td><td width="17.11%">ramesh</td><td width="11.11%">father</td><td width="11.11%">10:00:00</td><td width="11.11%">2016-Sep-01</td><td width="5.11%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelvisitors/delete/id/5"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5.11%">2</td><td width="11.11%">Student</td><td width="11.11%">HY606 - kishore  </td><td width="17.11%">just - 111</td><td width="17.11%">vibhuti</td><td width="11.11%">sister</td><td width="11.11%">06:00:00</td><td width="11.11%">2016-Jul-21</td><td width="5.11%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelvisitors/delete/id/4"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5.11%">3</td><td width="11.11%">Student</td><td width="11.11%">HY606 - kishore  </td><td width="17.11%">just - 111</td><td width="17.11%">Soumya Singh</td><td width="11.11%">Sister</td><td width="11.11%">16:10:00</td><td width="11.11%">2016-Jul-09</td><td width="5.11%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelvisitors/delete/id/3"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5.11%">4</td><td width="11.11%">Student</td><td width="11.11%">108180134 - fgdh grfg rger</td><td width="17.11%">just - 143</td><td width="17.11%">hghhj</td><td width="11.11%">jhj</td><td width="11.11%">07:00:00</td><td width="11.11%">2016-Apr-26</td><td width="5.11%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelvisitors/delete/id/2"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5.11%">5</td><td width="11.11%">Student</td><td width="11.11%">111 - arun a a</td><td width="17.11%">just - 143</td><td width="17.11%">abc</td><td width="11.11%">abc</td><td width="11.11%">06:26:00</td><td width="11.11%">2016-Apr-23</td><td width="5.11%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelvisitors/delete/id/1"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/hostel/hostelvisitors/create"><span>5</span><span>4</span><span>3</span><span>2</span><span>1</span></div>
</div>  
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<script>

    $("#Hostelvisitors_usertypeid").change(function () {
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
            data: {studentname: document.getElementById('hidden-fieldstudent').value, employeename: document.getElementById('hidden-fieldemployee').value, usertypeid: $('#Hostelvisitors_usertypeid option:selected').val()},
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