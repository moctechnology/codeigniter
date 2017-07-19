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
            <li class="active">Hostel Registration</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab" aria-expanded="true">Hostel Registration</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab" aria-expanded="false">Allocated List</a></li>
        </ul><br>
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">
                <form id="hostelregistration-form" action="/index.php/hostel/hostelregistration/create" method="post">                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Hostel Registration</h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                         <div class="alert alert-danger">Already allocated.</div>                                        <div class="form-group col-sm-6 success">
                                            <label>User Type</label>
                                            <select class="form-control" name="Hostelregistration[usertypeid]" id="Hostelregistration_usertypeid">
<option value="">Select Type</option>
<option value="1" selected="selected">Student</option>
<option value="2">Employee</option>
</select>                                            <div class="school_val_error" id="Hostelregistration_usertypeid_em_" style="display:none"></div>                                        </div>

                                        <div class="form-group col-sm-6" id="studentautocomplete" style="">
                                            <label>Student Name</label>
                                            <input class="form-control ui-autocomplete-input" id="student" value="" name="student" autocomplete="off" type="text">                                        </div> 
                                        <div class="form-group col-sm-6" id="employeeautocomplete" style="display: none;">
                                            <label>Employee Name</label>
                                            <input class="form-control ui-autocomplete-input" id="employee" value="" name="employee" autocomplete="off" type="text">                                        </div>
                                        <div class="form-group col-sm-6 success">
                                            <label for="reg_input" class="req">Hostel Type</label>
                                            <select class="form-control" name="Hostelregistration[hosteltypeid]" id="Hostelregistration_hosteltypeid">
<option value="">Select Option</option>
<option value="7">betta hostel</option>
<option value="8">non AC conditionalc</option>
<option value="11">ktier public hostel</option>
<option value="12">AC</option>
<option value="13">Boys</option>
<option value="16">Girls</option>
<option value="18">stertbwtb</option>
<option value="19">General</option>
<option value="20">Imperial Hostel</option>
<option value="22">Chittagong University FR Hall</option>
<option value="23">dinu ac</option>
<option value="24">ccccc</option>
<option value="25">ackk</option>
<option value="26">mens hostel</option>
<option value="27">aaaa</option>
<option value="29">WARD</option>
<option value="30">Without AC</option>
<option value="31">acqqq</option>
<option value="32">xxx</option>
<option value="33">AC Room</option>
<option value="35">Fully AC</option>
<option value="36">GHSACHostel</option>
<option value="37">PLATYS HOSTEL</option>
<option value="38">sd</option>
<option value="40">kamar</option>
<option value="41">ddaa</option>
<option value="42">fertert</option>
<option value="43">Public Hotel</option>
<option value="44">non ac</option>
<option value="45">asasa</option>
<option value="46">est</option>
<option value="47">generic hostel</option>
<option value="48">feeinsta</option>
<option value="49">AC HOSTELS</option>
<option value="50">CENTREAL HOSTELS</option>
<option value="51">normal</option>
<option value="52">my hostel</option>
<option value="53">bngboys hostel</option>
<option value="54">bng girls hostel</option>
<option value="55">Gents Hostel</option>
<option value="56">dsf</option>
<option value="59">tesing</option>
<option value="60">fat</option>
<option value="61">Regular</option>
<option value="62">sandra</option>
<option value="63">jjdj</option>
<option value="64">hihihi</option>
<option value="65">girls and boys</option>
<option value="66">GHSHostel</option>
<option value="67">girlsjp</option>
</select>                                            <div class="school_val_error" id="Hostelregistration_hosteltypeid_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group col-sm-6 success">
                                            <label for="reg_input" class="req">Hostel Name</label>
                                            <select class="form-control" name="Hostelregistration[hosteldetailsid]" id="Hostelregistration_hosteldetailsid"><option value="">Select</option><option value="10">santa</option><option value="27">Hi-Tech Girls Hostel</option></select>                                            <div class="school_val_error" id="Hostelregistration_hosteldetailsid_em_" style="display:none"></div>                                        </div> 
                                        <div class="form-group col-sm-6 error">
                                            <label for="reg_input_name" class="req">Hostel Room</label>
                                            <select class="form-control" name="Hostelregistration[hostelroomid]" id="Hostelregistration_hostelroomid"><option value="">Select</option><option value="190">1st - 101</option><option value="191">1st - 101</option><option value="221">1 - 23</option></select>                                            <div class="school_val_error" id="Hostelregistration_hostelroomid_em_" style="">Hostel room cannot be blank.</div>
                                        <!--<span class="help-block">dd-mm-yyyy</span>-->
                                        </div>
                                        <div class="form-group col-sm-12" id="availablebeds"> <div class="col-sm-12"><div class="panel panel-body"><table class="table responsive table-bordered table-striped" align="center">
                <tbody id="roomdetails" style="font-size: 14px"><tr><td class="text-muted" style="font-size: 14px">Hostel Type:</td><td>&nbsp;non AC conditionalc</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="text-muted" style="font-size: 14px">Hostel name:</td><td>&nbsp;Hi-Tech Girls Hostel</td></tr><tr><td colspan="5">&nbsp;</td></tr><tr><td class="text-muted" style="font-size: 14px">Floor Name:</td><td>&nbsp;1st</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="text-muted" style="font-size: 14px">Room No.:</td><td>&nbsp;101</td></tr><tr><td colspan="5">&nbsp;</td></tr><tr><td class="text-muted" style="font-size: 14px">No of Beds:</td><td>4</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="text-muted" style="font-size: 14px">Rent Amount:</td><td>2000</td></tr><tr><td colspan="5">&nbsp;</td></tr><tr><td class="text-muted" style="font-size: 14px">Available Beds:</td><td>&nbsp;3</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="text-muted" style="font-size: 14px">Requested Beds:</td><td>&nbsp;0</td></tr><tr><td colspan="5">&nbsp;</td></tr><tr><td class="text-muted" style="font-size: 14px">Accepted Beds:</td><td>&nbsp;0</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="text-muted" style="font-size: 14px">Allocated Beds:</td><td>&nbsp;1</td></tr></tbody></table></div></div> </div>

                                        <div class="form-group col-sm-6">
                                            <label class="req" for="Hostelregistration_hostelregistration_date">Hostel Registration Date</label>                                            <input class="form-control hasDatepicker" placeholder="start date" id="Hostelregistration_hostelregistration_date" name="Hostelregistration[hostelregistration_date]" value="2016-11-29 00:00:00" type="text">                                            <div class="school_val_error" id="Hostelregistration_hostelregistration_date_em_" style="display:none"></div>                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="Hostelregistration_vacatingdate">Vacating Date</label>                                            <input class="form-control hasDatepicker" placeholder="start date" id="vacatingdate" name="Hostelregistration[vacatingdate]" value="2016-11-29 00:00:00" type="text">                                            <!--<span class="help-block">dd-mm-yyyy</span>-->

                                        </div>
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
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">User Type</th><th id="item-grid_c2">User</th><th id="item-grid_c3">Hostel</th><th id="item-grid_c4">Floor Name</th><th id="item-grid_c5">Hostel Room</th><th id="item-grid_c6">Hostel Registration Date</th><th id="item-grid_c7">Vacatimg Date</th><th class="button-column" id="item-grid_c8">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="10%">1</td><td width="10%">Student</td><td width="20%">38381427 - test test test</td><td width="20%">&nbsp;</td><td width="20%">&nbsp;</td><td width="20%">&nbsp;</td><td width="20%">2016-Nov-29</td><td width="8%">2016-Nov-29</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregistration/delete/id/656"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">2</td><td width="10%">Student</td><td width="20%">38381426 - test  test</td><td width="20%">&nbsp;</td><td width="20%">&nbsp;</td><td width="20%">&nbsp;</td><td width="20%">2016-Nov-29</td><td width="8%">2016-Nov-29</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregistration/delete/id/655"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">3</td><td width="10%">Student</td><td width="20%">38381425 - awd awd awd</td><td width="20%">&nbsp;</td><td width="20%">&nbsp;</td><td width="20%">&nbsp;</td><td width="20%">2016-Nov-29</td><td width="8%">2016-Nov-29</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregistration/delete/id/654"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">4</td><td width="10%">Student</td><td width="20%">38381424 - Asad  Raza</td><td width="20%">&nbsp;</td><td width="20%">&nbsp;</td><td width="20%">&nbsp;</td><td width="20%">2016-Nov-28</td><td width="8%">2016-Nov-28</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregistration/delete/id/653"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">5</td><td width="10%">Student</td><td width="20%">38381420 - hh ffsffdfs fdsfsfsf</td><td width="20%">&nbsp;</td><td width="20%">&nbsp;</td><td width="20%">&nbsp;</td><td width="20%">2016-Nov-27</td><td width="8%">2016-Nov-27</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregistration/delete/id/652"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">6</td><td width="10%">Employee</td><td width="20%">10005 - gowthaman  s</td><td width="20%">Mehmood Hostel</td><td width="20%">Ground</td><td width="20%">Room1</td><td width="20%">2016-Nov-27</td><td width="8%">2016-Nov-30</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregistration/delete/id/651"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">7</td><td width="10%">Employee</td><td width="20%">123 - Alok  Singh</td><td width="20%">Mehmood Hostel</td><td width="20%">GHS-Floor</td><td width="20%">Asad-1</td><td width="20%">2016-Nov-27</td><td width="8%">2016-Nov-30</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregistration/delete/id/650"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">8</td><td width="10%">Employee</td><td width="20%">e108180105 - ali  </td><td width="20%">Mehmood Hostel</td><td width="20%">GHS-Floor</td><td width="20%">Asad-1</td><td width="20%">2016-Nov-27</td><td width="8%">2016-Nov-30</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregistration/delete/id/649"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">9</td><td width="10%">Student</td><td width="20%">38381419 - jeya priya df</td><td width="20%">&nbsp;</td><td width="20%">&nbsp;</td><td width="20%">&nbsp;</td><td width="20%">2016-Nov-04</td><td width="8%">2016-Nov-06</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregistration/delete/id/648"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">10</td><td width="10%">Student</td><td width="20%">38381418 - mmmm  </td><td width="20%">TEST</td><td width="20%">2</td><td width="20%">2</td><td width="20%">2016-Nov-26</td><td width="8%">2016-Nov-27</td><td width="10%"><a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hostelregistration/delete/id/647"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/hostel/hostelregistration/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/hostel/hostelregistration/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/hostel/hostelregistration/create">1</a></li>
<li class="page"><a href="/index.php/hostel/hostelregistration/create/Hostelregistration_page/2">2</a></li>
<li class="page"><a href="/index.php/hostel/hostelregistration/create/Hostelregistration_page/3">3</a></li>
<li class="page"><a href="/index.php/hostel/hostelregistration/create/Hostelregistration_page/4">4</a></li>
<li class="next"><a href="/index.php/hostel/hostelregistration/create/Hostelregistration_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/hostel/hostelregistration/create/Hostelregistration_page/60">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/hostel/hostelregistration/create"><span>656</span><span>655</span><span>654</span><span>653</span><span>652</span><span>651</span><span>650</span><span>649</span><span>648</span><span>647</span></div>
</div>  
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<script>
    $("#Hostelregistration_usertypeid").change(function () {
        var str = "";
//    $( "#Transportallocation_usertypeid select option:selected" ).each(function() {
        str += $(this).val();
//    });
//    $( "div" ).text( str );
        if (str === '1') {
            $("#employeeautocomplete").hide("slow");
            $("#studentautocomplete").show("slow");

        }
        if (str === '2') {
            $("#studentautocomplete").hide("slow");
            $("#employeeautocomplete").show("slow");

        }
    });
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