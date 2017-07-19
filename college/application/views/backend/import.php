<div class="content-wrapper">
                    <div class="content">
<div id="content">
	<style> 
    #overlaygif {
        background: url("/images/loading.gif") no-repeat center;
        position:fixed;top:0;right:0;bottom:0;left:0;

        //background: rgba(0,0,0,0.5)no-repeat 50% 50%;
        /*background: url(http://www.deepakgems.com/images/new/loading.gif) no-repeat center;*/
    }

    .panel-default > .panel-heading-custom {
        background: #F8F8F8;
        color: #black;
    }

    #customstyle:link {text-decoration: none; color:black;} 
    #customstyle:visited {text-decoration: none; color:black;}
    #customstyle:active {text-decoration: none; color:black;font-weight: bold;} 
    #customstyle:hover {text-decoration: none;font-weight: bold;color:black;}

</style>

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
            <li class="active">Import</li>
        </ul>
         <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form enctype="multipart/form-data" id="feeallocation-form" action="/index.php/site/transportallocationimport" method="post">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Transport  Allocation Import</h4>
                </div>
                <div class="panel-body">
                                        <div class="panel-body"><div id="overlaygif" style="display:none;"></div>
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Browse File</label>
                            <input id="ytContactForm_filea" type="hidden" value="" name="ContactForm[filea]"><input name="ContactForm[filea]" id="ContactForm_filea" type="file">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"><input class="btn btn-info" type="submit" name="yt0" value="   submit   "></div>
                        <div class="col-sm-4">

                            <div class="progress" style="display:none;">
                                <div class="progress-bar progress-bar-info" style="width: 80% " id="progressbar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="panel-footer"></div>-->
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body"> 

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="alert alert-warning warning">
                                <span class="icon-info22" style="color:orange"></span> 
                                Download the excel file format from below link and copy the below values in corresponding columns while filling excel sheet.                                <br>
                                <p class="form-control-static">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/img/transport_allocation.xlsx">Transport allocation excel format</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Route Code &amp; Destination </h5>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-group panel-group-control content-group-lg">
                                                                                    <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            001</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        KOLLAM<br>trivadrum<br>kottayam<br>fgsdfg<br>Kottayam<br>fgtt<br>KOLLAM<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group2" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            112</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group2" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        121212<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                </div> 
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h5 class="panel-title">User Type</h5>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">Employee</div>                                    <div class="form-group">Student</div>                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form></div>

</div><!-- content -->
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