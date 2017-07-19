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
            <li><a href="#">Transport</a></li>
            <li class="active">Add Destination</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="routedetails-form" action="" method="post">
    <div class="col-sm-12">
	
	
	<?php $id = $this->uri->segment(4);
		
		$route_code = '';
		$route_code = '';
		$pic_drop = '';
		$stop_time = '';
		$amount = '';
		$fee_type = '';
		
		if($id != ''){
		foreach($single_destinations as $val){
		$route_code = $val->route_code;
		$pic_drop = $val->pic_drop;
		$stop_time = $val->stop_time;
		$amount  = $val->amount;
		$fee_type = $val->fee_type;
		
		}	
	} ?>

        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab">Add Destination &amp; Fees</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab">List</a></li>
        </ul><br>
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Add Destination &amp; Fees</h4>
                            </div>
                            <div class="panel-body">
                                <div class="panel-body">
                                                                        <div class="form-group">
                                        <label for="reg_input" class="req">Route Code</label>
                                        <select class="form-control" name="routecode" id="Routedetails_routemasterid">
										<?php if($id != ''){ ?>
										<option value="<?php echo $route_code; ?>"><?php echo $route_code; ?></option>
										<?php }else{ ?>
<option value="">Select Option</option>
<?php } ?>
<?php foreach($routes as $val){ ?>
<option value="<?php echo $val->route_code ?>"><?php echo $val->route_code ?></option>
<?php } ?>
<option value="8">112</option>
</select>                                        <div class="school_val_error" id="Routedetails_routemasterid_em_" style="display:none"></div>   
                                    </div> 
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Pick up &amp; Drop</label>
                                        <input size="84" maxlength="45" value="<?php echo $pic_drop; ?>" class="form-control" name="route_stopposition" id="Routedetails_routedetails_stopposition" type="text">                                        <div class="school_val_error" id="Routedetails_routedetails_stopposition_em_" style="display:none"></div>                
                                    </div>

                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Stop Time </label>
                                        <input class="form-control hasDatepicker" value="<?php echo $stop_time; ?>" placeholder=" Stop Time" id="routedetails_stoptime" name="route_stoptime" type="text" maxlength="45">                                        <div class="school_val_error" id="Routedetails_routedetails_stoptime_em_" style="display:none"></div>                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Amount</label>
                                        <input size="84" maxlength="45" class="form-control" value="<?php echo $amount ?>" name="route_rate" id="Routedetails_routedetails_rate" type="text">                                        <div class="school_val_error" id="Routedetails_routedetails_rate_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label class="req">Fee Type</label>
                                        <select class="form-control" data-required="true" name="route_feestype" id="Routedetails_feestype">
										<?php if($id != ''){ ?>
										<option value="<?php echo $fee_type; ?>"><?php echo $fee_type; ?></option>
										<?php }else{ ?>
										<option value="" selected="selected">Please Select</option>
										<?php } ?>
<option value="1">Annual</option>
<option value="2">Bi-Annual</option>
<option value="3">Tri-Annual</option>
<option value="4">Quarterly</option>
<option value="5">Monthly</option>
</select>                                        <div class="school_val_error" id="Routedetails_feestype_em_" style="display:none"></div>                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-default" id="datelist" style="display:none">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Fee Dates</h4>
                                                </div>
                                                <div class="panel-body">
                                                    

                                                    <div id="Annual" style="display:none">
                                                        <div class="form-group col-sm-4">
                                                            <label>Start Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Due Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label>End Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                    </div>
                                                    

                                                    <div id="Bi-Annual" style="display:none">
                                                        <div class="form-group col-sm-4">
                                                            <label>Start Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Due Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>End Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div id="Quarterly" style="display:none">
                                                        <div class="form-group col-sm-4">
                                                            <label>Start Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Due Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>End Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                                                                                <div class="form-group col-sm-4">
                                                            <label>Start Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Due Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>End Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div id="Monthly" style="display:none">
                                                        <div class="form-group col-sm-4">
                                                            <label>Start Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Due Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>End Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                                                                                <div class="form-group col-sm-4">
                                                            <label>Start Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Due Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>End Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>                                                        
                                                        </div>
                                                                                                                <div class="form-group col-sm-4">
                                                            <label>Start Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Due Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>End Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                                                                                <div class="form-group col-sm-4">
                                                            <label>Start Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Due Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>End Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                                                                                <div class="form-group col-sm-4">
                                                            <label>Start Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Due Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>End Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                                                                                <div class="form-group col-sm-4">
                                                            <label>Start Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Due Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>End Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                                                                                <div class="form-group col-sm-4">
                                                            <label>Start Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Due Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>End Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                                                                                <div class="form-group col-sm-4">
                                                            <label>Start Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Due Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>End Date</label>
                                                            <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form_sep">
                                            <input class="btn btn-info" id="button" type="submit" name="submit" value="Save">                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="tab-pane" id="tbb_b"> 
                <div class="row">
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                        <input type="text" id="search" class="form-control" placeholder="Search by Route Code">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="grid-view table-responsive" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Route Code</th><th id="item-grid_c2">Stop Position</th><th id="item-grid_c3">Stop Time</th><th id="item-grid_c4">Amount</th><th class="button-column" id="item-grid_c5">Manage</th></tr>
</thead>
<tbody>
<?php $i=1; foreach($destinations as $val){ ?>
<tr class="odd">
<td width="5%"><?php echo $i; ?></td>
<td width="20%"><?php echo $val->route_code ?></td>
<td width="20%"><?php echo $val->pic_drop ?></td>
<td width="10%"><?php echo $val->stop_time ?></td>
<td width="10%"><?php echo $val->amount ?></td>
<td width="5%">
<a class="glyphicon glyphicon-pencil" title="" href="<?php echo URL ?>/index.php/backend/add_destination/update/<?php echo $val->id ?>"><img src="" alt=""></a> 
<a class="glyphicon glyphicon-eye-open" title="" href="<?php echo URL ?>/index.php/backend/add_destination/view/<?php echo $val->id ?>"><img src="" alt=""></a>  
<a class="glyphicon glyphicon-remove" title="" href="<?php echo URL ?>/index.php/backend/add_destination/delete/<?php echo $val->id; ?>"><img src="" alt=""></a>
</td>
</tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/transport/routedetails/create"><span>1</span><span>2</span><span>3</span><span>10</span><span>12</span><span>13</span><span>14</span><span>15</span></div>
</div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form></div>
<script>
    $("input").keyup(function () {

        $('#item-grid').yiiGridView('update', {
            data: {search: $('#search').val()}
        });
        return false;

    });
    $(document).ready(function () {
        var droplist = $('#Routedetails_feestype');
        droplist.change(function () {
            if (droplist.val() === '1') {

                $("#Monthly").hide("slow");
                $("#Quarterly").hide("slow");
                $("#Bi-Annual").hide("slow");
                $("#Annual").show("slow");
                $("#datelist").show("slow");
            }
            if (droplist.val() === '2') {

                $("#Monthly").hide("slow");
                $("#Quarterly").hide("slow");
                $("#Annual").show("slow");
                $("#Bi-Annual").show("slow");
                $("#datelist").show("slow");
            }
            if (droplist.val() === '4') {

                $("#Monthly").hide("slow");
                $("#Quarterly").show("slow");
                $("#Annual").show("slow");
                $("#Bi-Annual").show("slow");
                $("#datelist").show("slow");
            }
            if (droplist.val() === '5') {

                $("#Monthly").show("slow");
                $("#Quarterly").show("slow");
                $("#Annual").show("slow");
                $("#Bi-Annual").show("slow");
                $("#datelist").show("slow");
            }
            if (droplist.val() === '3') {

                $("#Monthly").hide("slow");
                $("#Annual").hide("slow");
                $("#Quarterly").show("slow");
                $("#Bi-Annual").show("slow");
                $("#datelist").show("slow");
            }

        })
    });

</script>
	

		
                    </div>
										
					<div class="modal-content login-form col-lg-6" id="moodlemodal" style="display: none;">
                        <div id="modal-unlock" class="modal fade col-md-12">
                            <div class="modal-dialog">
                                <div class="modal-content login-form">

                                    <!-- Form -->
                                    <form class="modal-body" id="loginForm" action="/index.php/site/moodle" method="post">
<!--								<div class="thumbnail"><div class="thumb thumb-slide" >-->
									<img src="/images/index.jpg" alt="" class="img-responsive center-block" style="width:100px; height:100px;">
<!--                                                                    </div></div>-->

								<h6 class="content-group text-center text-semibold no-margin-top">Moodle credentials <small class="display-block">Unlock your account</small></h6>
                                                    								<div class="form-group has-feedback">
									<input type="text" class="form-control" name="url" placeholder="Moodle URL" id="link">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>
                                                                                                                              <div class="form-group has-feedback">
									<input type="text" class="form-control" name="username" placeholder="Your Username" id="username">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>
                                                                <div class="form-group has-feedback">
									<input type="text" class="form-control" name="password" placeholder="Your Password" id="password">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>


								<button type="submit" class="btn bg-slate btn-block" onclick="return  saveitem()">Save <i class="icon-circle-right2 position-right"></i></button>
								<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
							</form>
							<!-- /form -->

						</div>
					</div>
				</div>
                                    <!-- /form -->

					</div>                     <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        <ul class="nav navbar-nav no-border visible-xs-block">
                            <li>
                                <a data-target="#navbar-second" data-toggle="collapse" class="text-center collapsed">
                                    <i class="icon-circle-up2"></i>
                                </a>
                            </li>
                        </ul>
                        <div id="navbar-second" class="navbar-collapse collapse">
                            <div class="navbar-text">
                                © 2017. Webschool by GESCIS Technologies Pvt Ltd. V3.5
                            </div>
                        </div>
                    </div>
                </div>