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
            <li><a href="#">Course &amp; Batch</a></li>
            <li class="active">Class Teacher Allocation</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="classteacherallocation-form" action="/index.php/core/classteacherallocation/create" method="post">    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Class Teacher Allocation</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">

                        <div class="panel-body">

                            
                                <div class="form-group" id="course">
                                    <label for="reg_input" class="req">Course</label>
                                    <select class="form-control" name="Classteacherallocation[courseid]" id="Classteacherallocation_courseid">
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
</select><div class="school_val_error" id="Classteacherallocation_courseid_em_" style="display:none"></div>                                </div>  
                                <div class="form-group" id="batch">
                                    <label for="reg_input" class="req">Batch</label>
                                    <select class="form-control" name="Classteacherallocation[batchid]" id="Classteacherallocation_batchid">
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
</select><div class="school_val_error" id="Classteacherallocation_batchid_em_" style="display:none"></div>                                </div> 
                                <div class="form-group" id="batch">
                                    <label for="reg_input" class="req">Class Teacher</label>
                                    <select class="form-control" name="Classteacherallocation[employeemasterid]" id="Classteacherallocation_employeemasterid">
<option value="">Please Select</option>
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
</select><div class="school_val_error" id="Classteacherallocation_employeemasterid_em_" style="display:none"></div>                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form_sep">
                                    <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" type="submit" value="Save">                                </div>
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
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Course</th><th id="item-grid_c2">Batch</th><th id="item-grid_c3">Class Teacher</th><th class="button-column" id="item-grid_c4">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td width="30%">STD 2</td><td width="30%">Batch A</td><td width="30%">Rekha Gupta  </td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/classteacherallocation/update/id/9"><img src="" alt=""></a> <a class="icon-cross2" title="" href="/index.php/core/classteacherallocation/delete/id/9"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">2</td><td width="30%">BIS</td><td width="30%">Second Batch</td><td width="30%">Dr Ei Shwe Zin</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/classteacherallocation/update/id/7"><img src="" alt=""></a> <a class="icon-cross2" title="" href="/index.php/core/classteacherallocation/delete/id/7"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/core/classteacherallocation/create"><span>9</span><span>7</span></div>
</div>  
            </div>
        </div>
        </form>    </div>
</div>
<script>

    $('#Classteacherallocation_courseid').change(function () {
        $.ajax({
            url: 'fetchbatch',
            type: 'POST',
            data: {courseid: $('#Classteacherallocation_courseid option:selected').val()},
            success: function (data) {
                $("#Classteacherallocation_batchid").empty();
                $("#Classteacherallocation_batchid").append(data);
            }
        });
        $('#item-grid').yiiGridView('update', {
            data: {search: $('#Classteacherallocation_courseid option:selected').text()}
        });
        return false;
    });


</script>
	

		
                    </div>