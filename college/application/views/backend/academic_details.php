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
            <li><a href="#">Settings</a></li>
            <li class="active">Academic Details</li>
        </ul>
         <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab">Academic Details</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab">Data Migration</a></li>
        </ul>
        <h6 class="content-group text-semibold"></h6>
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">
                <form id="academic-form" action="/index.php/core/academic/create" method="post">                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Academic Year Details</h4>
                            </div>
                            <div class="panel-body">
                                
                                <div class="form-group error">
                                    <label class="req">Start Year</label>
                                    <select class="form-control" name="Academic[academic_startyear]" id="Academic_academic_startyear">
<option value="">Please Select</option>
<option value="2027">2027</option>
<option value="2026">2026</option>
<option value="2025">2025</option>
<option value="2024">2024</option>
<option value="2023">2023</option>
<option value="2022">2022</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
</select><div class="school_val_error" id="Academic_academic_startyear_em_" style="">Please enter a value for Start Year.</div>                                </div>
                                <div class="form-group">
                                    <label for="reg_input_name" class="req">Start Month</label>
                                    <select class="form-control" name="Academic[academic_startmonth]" id="Academic_academic_startmonth">
<option value="prompt">Please Select</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">Augest</option>
<option value="9">september</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select><div class="school_val_error" id="Academic_academic_startmonth_em_" style="display:none"></div>                                </div>
                                <div class="form-group">
                                    <label class="req">End Year</label>
                                    <select class="form-control" name="Academic[academic_endyear]" id="Academic_academic_endyear">
<option value="">Please Select</option>
<option value="2027">2027</option>
<option value="2026">2026</option>
<option value="2025">2025</option>
<option value="2024">2024</option>
<option value="2023">2023</option>
<option value="2022">2022</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
</select><div class="school_val_error" id="Academic_academic_endyear_em_" style="display:none"></div>                                </div>
                                <div class="form-group">
                                    <label for="reg_input_name" class="req">End Month</label>
                                    <select class="form-control" name="Academic[academic_endmonth]" id="Academic_academic_endmonth">
<option value="prompt">Please Select</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">Augest</option>
<option value="9">september</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select><div class="school_val_error" id="Academic_academic_endmonth_em_" style="display:none"></div>                                </div>
                                <div class="form-group">
                                    <label>Active / Deactive</label>
                                    <select class="form-control" name="Academic[status]" id="Academic_status">
<option value="">Please Select</option>
<option value="1">Active</option>
<option value="2">Deactive</option>
</select><div class="school_val_error" id="Academic_status_em_" style="display:none"></div>                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form_sep">
                                            <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" type="submit" value="Save">                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="grid-view" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Start  Year</th><th id="item-grid_c2">Start  Month</th><th id="item-grid_c3">End  Year</th><th id="item-grid_c4">End  Month</th><th id="item-grid_c5">Status</th><th class="button-column" id="item-grid_c6">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td width="15%">2016</td><td width="10%">September</td><td width="15%">2017</td><td width="10%">June</td><td width="20%">Active</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/academic/update/id/1"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">2</td><td width="15%">2025</td><td width="10%">February</td><td width="15%">2027</td><td width="10%">February</td><td width="20%">Deactive</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/academic/update/id/2"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">3</td><td width="15%">2023</td><td width="10%">February</td><td width="15%">2026</td><td width="10%">November</td><td width="20%">Deactive</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/academic/update/id/3"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">4</td><td width="15%">2017</td><td width="10%">March</td><td width="15%">2018</td><td width="10%">February</td><td width="20%">Deactive</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/academic/update/id/4"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">5</td><td width="15%">2018</td><td width="10%">May</td><td width="15%">2019</td><td width="10%">April</td><td width="20%">Deactive</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/academic/update/id/5"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">6</td><td width="15%">2009</td><td width="10%">February</td><td width="15%">2011</td><td width="10%">March</td><td width="20%">Deactive</td><td width="5%"><a class="icon-pencil" title="" href="/index.php/core/academic/update/id/6"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/core/academic/create"><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span></div>
</div> 

                    </div>
                </div>
                </form>            </div>
            <div class="tab-pane" id="tbb_b">
                <form id="datareset-form" action="/index.php/site/datareset" method="post">                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Data Migration</h4>
                            </div>
                            <div class="panel-body">
                                
                                                                <div class="panel-body">
                                    <div class="form-group col-sm-3">
                                        <!--<label for="reg_input" class="req">Department</label>-->
                                        <select class="form-control" name="dataof" id="dataof">
<option value="">Please Select</option>
<option value="1">Subject &amp; Class teacher allocation</option>
<option value="2">GPA</option>
<option value="3">CCE</option>
<option value="4">Salary Settings</option>
<option value="5">Finance</option>
<option value="6">Transport</option>
<option value="7">Hostel</option>
</select>                                    </div>
                                    <div class="form-group col-sm-3">
                                        <p>&nbsp;&nbsp;<button class="btn btn-info" align="right">Ok</button></p> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>            </div>
        </div>
    </div>

</div>	

		
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