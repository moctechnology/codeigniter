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
            <li><a href="#">Finance</a></li>
            <li><a href="#">Fees</a></li>
            <li class="active">Fee Category</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">

            <form id="feescategory-form" action="http://localhost/college/index.php/backend/fee_category/update/" method="post">         
            <div class="row">
                <div class="col-sm-6">
                    <?php foreach($results as $result){ ?>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Fee Category</h4>
                        </div>
                        <div class="panel-body">
						
                                <div class="panel-body">
                                                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Fee Category</label>
                                        <input size="84" maxlength="45" class="form-control" name="fee_cat" id="Feescategory_feescategory_name" type="text" value="<?php echo $result->fee_cat ?>"><div class="school_val_error" id="Feescategory_feescategory_name_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Receipt No. Prefix</label>
                                        <input size="84" maxlength="45" class="form-control" name="recipt_prefix" id="Feescategory_feescategory_receiptnoprefix" type="text" value="<?php $result->recipt_prefix ?>"><div class="school_val_error" id="Feescategory_feescategory_receiptnoprefix_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group">
                                        <label for="reg_input_name">Description</label>
                                        <textarea class="form-control" name="description" id="Feescategory_feescategory_description" value="<?php $result->description ?>"></textarea><div class="school_val_error" id="Feescategory_feescategory_description_em_" style="display:none"></div>                
                                    </div>
                                </div>
                            <div class="row">
                            <div class="col-sm-5">
                                <div class="form_sep">
                                    <input class="btn btn-info" name="submit" id="std_reg_submit" type="submit" value="Save">                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
					<?php } ?>
                    </div>
                    <div class="col-sm-6">
                    <div class="grid-view table-responsive" id="item-grid">
<table class="items table table-bordered table-responsive">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Fee Category</th><th id="item-grid_c2">Receipt No. Prefix</th><th id="item-grid_c3">Description</th><th class="button-column" id="item-grid_c4">Manage</th></tr>                        

</thead>
<tbody>
<?php $i=1; foreach($results as $result){ ?>
<tr class="<?php if($i % 2 == 0){ echo "even";}else{ echo "odd";} ?> selected">
<td width="10%"><?php echo $result->id; ?></td>
<td width="20%"><?php echo $result->cat_name; ?></td>
<td width="20%"><?php echo $result->recipt_prefix; ?></td>
<td width="30%"><?php echo $result->description; ?></td>
<td width="20%">
<a class="glyphicon glyphicon-pencil" title="" href="../<?php echo URL; ?>/index.php/backend/fee_category/update/<?php echo $result->id; ?>"><img src="" alt=""></a>   
<a class="glyphicon glyphicon-remove" title="" href="../<?php echo URL; ?>/index.php/backend/fee_category/delete/<?php echo $result->id; ?>"><img src="" alt=""></a>
</td>
</tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/core/feescategory/create"><span>1</span><span>2</span><span>3</span><span>4</span><span>11</span><span>19</span><span>20</span><span>23</span><span>25</span></div>
</div>  
                </div>
            </div>
            </form> 
						       </div>	

		
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


								<button type="submit" class="btn bg-slate btn-block" onClick="return  saveitem()">Save <i class="icon-circle-right2 position-right"></i></button>
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