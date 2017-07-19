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
            <li class="active">Room Transfer/Vacate</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab" aria-expanded="true">Room Transfer/Vacate</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab" aria-expanded="false">List</a></li>
        </ul><br>
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">
                <form id="hosteltransfer-form" action="/index.php/hostel/hosteltransfer/create" method="post">                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Room Transfer/Vacate</h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                        <div class="form-group col-sm-4">
                                            <label>User Type</label>
                                            <select class="form-control" name="Hosteltransfer[usertypeid]" id="Hosteltransfer_usertypeid">
<option value="">Select Type</option>
<option value="1">Student</option>
<option value="2">Employee</option>
</select>                                            <div class="school_val_error" id="Hosteltransfer_usertypeid_em_" style="display:none"></div>                                        </div>

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
                                        <div class="form-group col-sm-12" id="roomdetails">
                                            
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Select</label>
                                            <select class="form-control" name="Hosteltransfer[vacateortransfer]" id="Hosteltransfer_vacateortransfer">
<option value="">Please Select</option>
<option value="1">Transfer</option>
<option value="2">Vacate</option>
</select>                                            <div class="school_val_error" id="Hosteltransfer_vacateortransfer_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group col-sm-6" id="hosteltype" style="display: block;">
                                            <label for="reg_input" class="req">Hostel Type</label>
                                            <select class="form-control" name="Hosteltransfer[hosteltypeid]" id="Hosteltransfer_hosteltypeid">
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
</select>                                            <div class="school_val_error" id="Hosteltransfer_hosteltypeid_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group col-sm-6" id="hostelname" style="display: block;">
                                            <label for="reg_input" class="req">Hostel Name</label>
                                            <select class="form-control" name="Hosteltransfer[hosteldetailsid]" id="Hosteltransfer_hosteldetailsid"><option value="">Select</option><option value="10">santa</option><option value="27">Hi-Tech Girls Hostel</option></select>                                            <div class="school_val_error" id="Hosteltransfer_hosteldetailsid_em_" style="display:none"></div>                                        </div> 
                                        <div class="form-group col-sm-6" id="hostelroom" style="display: block;">
                                            <label for="reg_input_name" class="req">Hostel Room</label>
                                            <select class="form-control" name="Hosteltransfer[to_hostelroomid]" id="Hosteltransfer_to_hostelroomid"><option value="">Select</option><option value="17">1st floor - 41</option><option value="18">1st floor - 41</option><option value="19">1st floor - 41</option><option value="20">1st floor - 41</option><option value="21">1st floor - 41</option><option value="22">1st floor - 41</option><option value="23">1st floor - 41</option><option value="24">1st floor - 41</option><option value="25">1st floor - 41</option><option value="26">1st floor - 41</option><option value="27">1st floor - 41</option><option value="28">1st floor - 41</option><option value="29">1st floor - 41</option><option value="53">10 flor - 20</option><option value="54">10 flor - 20</option><option value="55">10 flor - 20</option><option value="56">10 flor - 20</option><option value="57">10 flor - 20</option><option value="58">10 flor - 20</option><option value="59">10 flor - 20</option><option value="162">a - 12</option><option value="163">a - 12</option><option value="207">2nd - 66</option><option value="208">2nd - 66</option><option value="209">2nd - 66</option><option value="210">2nd - 66</option><option value="218">1 - 1</option><option value="219">1 - 1</option></select>                                            <div class="school_val_error" id="Hosteltransfer_to_hostelroomid_em_" style="display:none"></div>
                                        </div>
                                        <div class="form-group col-sm-12" id="availablebeds"> <div class="col-sm-12"><div class="panel panel-body"><table class="table responsive table-bordered table-striped" align="center">
                <tbody id="roomdetails" style="font-size: 14px"><tr><td class="text-muted" style="font-size: 14px">Hostel Type:</td><td>&nbsp;non AC conditionalc</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="text-muted" style="font-size: 14px">Hostel name:</td><td>&nbsp;santa</td></tr><tr><td colspan="5">&nbsp;</td></tr><tr><td class="text-muted" style="font-size: 14px">Floor Name:</td><td>&nbsp;1st floor</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="text-muted" style="font-size: 14px">Room No.:</td><td>&nbsp;41</td></tr><tr><td colspan="5">&nbsp;</td></tr><tr><td class="text-muted" style="font-size: 14px">No of Beds:</td><td>5</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="text-muted" style="font-size: 14px">Rent Amount:</td><td>5000</td></tr><tr><td colspan="5">&nbsp;</td></tr><tr><td class="text-muted" style="font-size: 14px">Available Beds:</td><td>&nbsp;1</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="text-muted" style="font-size: 14px">Requested Beds:</td><td>&nbsp;0</td></tr><tr><td colspan="5">&nbsp;</td></tr><tr><td class="text-muted" style="font-size: 14px">Accepted Beds:</td><td>&nbsp;0</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="text-muted" style="font-size: 14px">Allocated Beds:</td><td>&nbsp;4</td></tr></tbody></table></div></div> </div>
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
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">User Type</th><th id="item-grid_c2">User</th><th id="item-grid_c3">From Hostel</th><th id="item-grid_c4">To Hostel</th><th id="item-grid_c5">Date</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td width="10%">Student</td><td width="20%">111 - arun a a</td><td width="30%">just - 143</td><td width="30%">just - 143</td><td width="10%">2016-Feb-20</td></tr>
<tr class="even">
<td width="5%">2</td><td width="10%">Student</td><td width="20%"> -   </td><td width="30%">just - 143</td><td width="30%">santa - 41</td><td width="10%">2016-Mar-01</td></tr>
<tr class="odd">
<td width="5%">3</td><td width="10%">Student</td><td width="20%">108180134 - fgdh grfg rger</td><td width="30%"> - </td><td width="30%">just - 143</td><td width="10%">2016-Mar-03</td></tr>
<tr class="even">
<td width="5%">4</td><td width="10%">Student</td><td width="20%"> -   </td><td width="30%">santa - 41</td><td width="30%">just - 143</td><td width="10%">2016-Mar-12</td></tr>
<tr class="odd">
<td width="5%">5</td><td width="10%">Student</td><td width="20%"> -   </td><td width="30%">just - 143</td><td width="30%"> - </td><td width="10%">2016-Mar-18</td></tr>
<tr class="even">
<td width="5%">6</td><td width="10%">Student</td><td width="20%">108180165 - dheeraj kumar sharma</td><td width="30%"> - </td><td width="30%">just - 143</td><td width="10%">2016-Mar-21</td></tr>
<tr class="odd">
<td width="5%">7</td><td width="10%">Employee</td><td width="20%"> -   </td><td width="30%">just - 111</td><td width="30%"> - </td><td width="10%">2016-Apr-08</td></tr>
<tr class="even">
<td width="5%">8</td><td width="10%">Student</td><td width="20%">417 - sai s joy</td><td width="30%"> - </td><td width="30%">just - 143</td><td width="10%">2016-Apr-18</td></tr>
<tr class="odd">
<td width="5%">9</td><td width="10%">Student</td><td width="20%"> -   </td><td width="30%">just - 143</td><td width="30%">santa - 41</td><td width="10%">2016-Apr-23</td></tr>
<tr class="even">
<td width="5%">10</td><td width="10%">Student</td><td width="20%"> -   </td><td width="30%">bbb - 1</td><td width="30%">bbb - 1</td><td width="10%">2016-May-31</td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/hostel/hosteltransfer/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/hostel/hosteltransfer/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/hostel/hosteltransfer/create">1</a></li>
<li class="page"><a href="/index.php/hostel/hosteltransfer/create/Hosteltransfer_page/2">2</a></li>
<li class="page"><a href="/index.php/hostel/hosteltransfer/create/Hosteltransfer_page/3">3</a></li>
<li class="page"><a href="/index.php/hostel/hosteltransfer/create/Hosteltransfer_page/4">4</a></li>
<li class="next"><a href="/index.php/hostel/hosteltransfer/create/Hosteltransfer_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/hostel/hosteltransfer/create/Hosteltransfer_page/5">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/hostel/hosteltransfer/create"><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span><span>10</span><span>11</span><span>12</span><span>13</span><span>14</span></div>
</div>  
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<script>
    $("#Hosteltransfer_usertypeid").change(function () {
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
     $("#Hosteltransfer_vacateortransfer").change(function () {       
        if ($("#Hosteltransfer_vacateortransfer").val() === '1') {
            $("#hosteltype").show("slow");
            $("#hostelname").show("slow");
            $("#hostelroom").show("slow");
        }
        
        if ($("#Hosteltransfer_vacateortransfer").val() === '2') {
             $("#hosteltype").hide("slow");
            $("#hostelname").hide("slow");
            $("#hostelroom").hide("slow");
        }
    });
      function userroomdetails() {
           $('#roomdetails').empty();
            $.ajax({
            type: "POST",
            url: "userroomdetails",
            data: {studentname: document.getElementById('hidden-fieldstudent').value,employeename: document.getElementById('hidden-fieldemployee').value, usertypeid: $('#Hosteltransfer_usertypeid option:selected').val()},
            dataType: "html",
            success: function (data) {
                $('#roomdetails').append(data);
            }
        });
      }
//    $("input").keyup(function () {
//        $('#item-grid').yiiGridView('update', {
//            data: {search: $('#search').val()}
//        });
//        return false;
//    });
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