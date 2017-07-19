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
            <li class="active">Hostel Details</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab">Hostel Type</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab">Hostel Details</a></li>
        </ul>
        <h6 class="content-group text-semibold"></h6>
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">
			
			<?php 
					$id = $this->uri->segment(4);
					$hostel_type = '';
					$hostel_name = '';
					$hostel_address = '';
					$warden_address = '';
					$hostel_phone_number = '';
					$warden_name = '';
					$warden_phone_number ='';
					
					if($id != ''){
					foreach($single_records as $val){
					$hostel_type = $val->hostel_type;
					$hostel_name = $val->hostel_name;
					$hostel_address = $val->hostel_address;
					$hostel_phone_number = $val->hostel_phone_number;
					$warden_name = $val->warden_name;
					$warden_address = $val->warden_address;
					$warden_phone_number = $val->warden_phone_number;
					
					}
					}
					?>

                <form id="hosteltype-form" action="" method="post">                <div class="row">
                    <div class="col-sm-6">
					
					
					
					
					
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Add Hostel Type</h4>
                            </div>
                            <div class="panel-body">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Hostel Type</label>
                                        <input size="84" maxlength="45" class="form-control" name="hostel_type" value="<?php echo $hostel_type ?>" id="Hosteltype_hosteltype_name" type="text">                                        <div class="school_val_error" id="Hosteltype_hosteltype_name_em_" style="display:none"></div>                
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form_sep">
                                                <input class="btn btn-info" name="submit" id="std_reg_submit" type="submit" value="Save">                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="grid-view" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Hostel Type</th><th class="button-column" id="item-grid_c2">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="10%">1</td>
<td width="45%">Ladies </td>
<td width="45%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/hostel/hosteltype/update/id/6"><img src="" alt=""></a>   
<a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hosteltype/delete/id/6"><img src="" alt=""></a>
</td></tr>
<tr class="even">
<td width="10%">2</td><td width="45%">Boys</td><td width="45%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/hostel/hosteltype/update/id/7"><img src="" alt=""></a>   <a class="glyphicon glyphicon-remove" title="" href="/index.php/hostel/hosteltype/delete/id/7"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/hostel/hosteltype/create"><span>6</span><span>7</span></div>
</div>  
                    </div>
                </div>
                </form> 

            </div>
            <div class="tab-pane" id="tbb_b">
                <form id="hosteldetails-form" action="" method="post">                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Add Hostel</h4>
                            </div>
                            <div class="panel-body">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="reg_input" class="req">Hostel Type</label>
                                        <select class="form-control" name="hosteltype" id="Hosteldetails_hosteltypeid">
										<?php if($id != ''){?>
										<option value="<?php echo $hostel_type ?>"><?php echo $hostel_type ?></option>
										<?php }else{ ?>
										<option value="">Select Option</option>
										<?php } ?>
<?php foreach($hostel_types as $val){ ?>
<option value="<?php echo $val->hostel_type ?>"><?php echo $val->hostel_type; ?></option>
<?php } ?>
</select>                                        <div class="school_val_error" id="Hosteldetails_hosteltypeid_em_" style="display:none"></div> 
                                    </div> 
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Hostel Name</label>
                                        <input class="form-control" name="hostel_name" value="<?php echo $hostel_name; ?>" id="Hosteldetails_hostel_name" type="text" maxlength="256">                                        <div class="school_val_error" id="Hosteldetails_hostel_name_em_" style="display:none"></div>                
                                    </div>  
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Hostel Address</label>
                                        <textarea class="form-control" name="hostel_address" id="Hosteldetails_hostel_address"><?php echo $hostel_address ?></textarea>                                        <div class="school_val_error" id="Hosteldetails_hostel_address_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Hostel Phone Number</label>
                                        <input class="form-control" name="hostel_phone_number" value="<?php echo $hostel_phone_number ?>" id="Hosteldetails_hostel_phone" type="text" maxlength="20">                                        <div class="school_val_error" id="Hosteldetails_hostel_phone_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Warden Name</label>
                                        <input class="form-control" name="warden_name" value="<?php echo $warden_name ?>" id="Hosteldetails_hostel_wardenname" type="text" maxlength="256">                                        <div class="school_val_error" id="Hosteldetails_hostel_wardenname_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Warden Address</label>
                                        <textarea class="form-control" name="warden_address" id="Hosteldetails_warden_address"><?php echo $warden_address ?></textarea>                                        <div class="school_val_error" id="Hosteldetails_warden_address_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Warden Phone Number</label>
                                        <input class="form-control" name="warden_phone_number" value="<?php echo $warden_phone_number ?>" id="Hosteldetails_warden_phone" type="text">                                        <div class="school_val_error" id="Hosteldetails_warden_phone_em_" style="display:none"></div>                
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form_sep">
                                            <input type="submit" name="hostel_submit" value="Save" class="btn btn-info">
                                                                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="grid-view" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Hostel Name</th><th id="item-grid_c2">Hostel Type</th><th class="button-column" id="item-grid_c3">Manage</th></tr>
</thead>
<tbody>
<?php $i=1; foreach($hostel_details as $val){ ?>
<tr class="<?php if($i % 2){ echo "even";}else{ echo "odd";} ?>">
<td width="10%"><?php echo $i; ?></td>
<td width="10%"><?php echo $val->hostel_name; ?></td>
<td width="10%"><?php echo $val->hostel_type; ?></td>
<td width="5%">
<a class="glyphicon glyphicon-pencil" title="" href="http://localhost/college/index.php/backend/hostel_details/update/<?php echo $val->id; ?>"><img src="" alt=""></a> 
<a class="glyphicon glyphicon-eye-open" title="" href="http://localhost/college/index.php/backend/hostel_details/view<?php echo $val->id; ?>"><img src="" alt=""></a>  
<a class="glyphicon glyphicon-remove" title="" href="http://localhost/college/index.php/backend/hostel_details/delete/<?php echo $val->id; ?>"><img src="" alt=""></a>
</td>
</tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/hostel/hosteltype/create"><span>9</span><span>10</span></div>
</div>  
                    </div>
                </div>
                </form>
            </div>
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