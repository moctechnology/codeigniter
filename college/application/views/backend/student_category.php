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
            <li>&nbsp;&nbsp;&nbsp;<a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Student</a></li>
            <li class="active">Student Category</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
<?php 
$id = $this->uri->segment(4);
 ?>
            <form id="studentcategory-form" action="" method="post">            <div class="row">
                <div class="col-sm-6">
				
				
				<?php 
				
				$cat_name = ''; 
				
				if(!empty($single_result)){
				foreach($single_result as $result){
				$id = $result->id;
				$cat_name = $result->name;
				
				} }?>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> Student Category</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12">

                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Student Category </label>
                                        <input size="84" maxlength="45" class="form-control" value="<?php echo $cat_name; ?>" name="category" id="Studentcategory_studentcategory_name" type="text">
                                        <div class="form_sep" style="margin-top:15px">
									<input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        <input class="btn btn-info" name="submit" id="std_reg_submit" type="submit" value="<?php if($id != null){ echo "Update";}else{ echo "Save";} ?>">
                                    </div>
                                        <div class="school_val_error" id="Studentcategory_studentcategory_name_em_" style="display:none"></div>                
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="grid-view" id="item-grid">
<table class="table table-bordered responsive table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Student Category</th><th class="button-column" id="item-grid_c2">Manage</th></tr>
</thead>
<tbody>
<?php $i =1; foreach($results as $val){?>
<tr class="odd">
<td width="10%"><?php echo $i; ?></td>
<td width="45%"><?php echo $val->name; ?></td>
<td width="45%">
<a class="glyphicon glyphicon-pencil" title="" href="<?php echo URL; ?>/index.php/backend/student/update/<?php echo $val->id; ?>"><img src="" alt=""></a>  
<a class="glyphicon glyphicon-remove" title="" href="<?php echo URL; ?>/index.php/backend/student/delete/<?php echo $val->id; ?>"><img src="" alt=""></a>
</td>
</tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/core/studentcategory/create"><span>15</span></div>
</div>  
                </div>
            </div>
            </form>        </div>	

		
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