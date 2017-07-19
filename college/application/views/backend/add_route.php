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
            <li class="active">Add Route</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="routemaster-form" action="" method="post">    <div class="row">
        <div class="col-sm-3"> 
        </div>
        <div class="col-sm-3"> 
        </div>
        <div class="col-sm-3"> 
        </div>
        <div class="col-sm-3"> 
            <input type="text" id="search" class="form-control" placeholder="Search by Route Code">
        </div>
    </div> <br>
    <div class="row">
        <div class="col-sm-6">
		
		<?php 
		$id = $this->uri->segment(4);
		
		$vehicle_no = '';
		$route = '';
		$route_startname = '';
		$route_stopname = '';
				
		if( $id != ''){
		foreach($single_routes as $val){
		$vehicle_no = $val->vehicle_no;
		$route = $val->route_code;
		$route_startname = $val->route_start_place;
		$route_stopname = $val->route_stop_place;
		}
		}
		?>
		
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Add Route</h4>
                </div>
                <div class="panel-body">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="reg_input" class="req">Vehicle No.</label>
<select class="form-control" name="vehicle_no" id="Routemaster_transportvehicleid">
<?php if($id != ''){ ?>
<option value="<?php echo $vehicle_no; ?>"><?php echo $vehicle_no ?></option>
<?php }else{ ?>
<option value="">Select Option</option>
<?php } ?>
<?php foreach($vehicles as $val){ ?>
<option value="<?php echo $val-> vehicle_no?>"><?php echo $val-> vehicle_no?></option>
<?php } ?>
</select>                            <div class="school_val_error" id="Routemaster_transportvehicleid_em_" style="display:none"></div>   
                        </div>
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Route Code</label>
<input size="84" maxlength="45" class="form-control" name="route_code" value="<?php echo $route ?>" id="Routemaster_routemaster_code" type="text">                            <div class="school_val_error" id="Routemaster_routemaster_code_em_" style="display:none"></div>                
                        </div>  
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Route Start Place</label>
<input size="84" maxlength="45" class="form-control" name="route_startname" value="<?php echo $route_startname ?>" id="Routemaster_routemaster_startname" type="text">                            <div class="school_val_error" id="Routemaster_routemaster_startname_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Route Stop Place</label>
<input size="84" maxlength="45" class="form-control" name="route_stopname" value="<?php echo $route_stopname ?>" id="Routemaster_routemaster_stopname" type="text">                            <div class="school_val_error" id="Routemaster_routemaster_stopname_em_" style="display:none"></div>                
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form_sep">
<input class="btn btn-info" name="submit" id="std_reg_submit" type="submit" value="<?php if($id != ''){ echo "Update";}else{ echo "Save";} ?>"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-6">
<div class="grid-view table-responsive" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Vehicle No.</th><th id="item-grid_c2">Code</th><th id="item-grid_c3">Route Start Place</th><th id="item-grid_c4">Route Stop Place</th><th class="button-column" id="item-grid_c5">Manage</th></tr>
</thead>
<tbody>
<?php $i =1; foreach($routes as $val){ ?>
<tr class="<?php if($i % 2 ){echo "even";}else{ echo "odd";} ?>">
<td width="5%"><?php echo $i; ?></td>
<td width="21.25%"><?php echo $val->vehicle_no; ?></td>
<td width="21.25%"><?php echo $val->route_code; ?></td>
<td width="21.25%"><?php echo $val->route_start_place ?></td>
<td width="21.25%"><?php echo $val->route_stop_place ?></td>
<td width="10%">
<a class="glyphicon glyphicon-pencil" title="" href="http://localhost/college/index.php/backend/add_route/update/<?php echo $val->id; ?>"><img src="" alt=""></a>   
<a class="glyphicon glyphicon-remove" title="" href="http://localhost/college/index.php/backend/add_route/delete/<?php echo $val->id; ?>"><img src="" alt=""></a>
</td>
</tr>
<?php $i++;} ?>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/transport/routemaster/create"><span>1</span><span>8</span></div>
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