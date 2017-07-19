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
            <li class="active">SMS Alert</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
            <form id="smssettings-form" action="/index.php/transport/transportfeecollection/smsalert" method="post">            <div class="row">
                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">SMS Alert</h4>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="reg_input">SMS For</label>
                                <select class="form-control" data-required="true" name="Transportfeecollection[sms_for]" id="Transportfeecollection_sms_for">
<option value="prompt">Please select</option>
<option value="1">Common to All</option>
<option value="2">Route wise</option>
<option value="3">Destination wise</option>
</select>                                                            </div>
                      <div class="form-group" id="route" style="display:none">
                          <label class="req">Route</label>
                            <select class="form-control" name="Transportfeecollection[routemasterid]" id="Transportfeecollection_routemasterid">
<option value="">Select Route Code</option>
<option value="1">001</option>
<option value="8">112</option>
</select>                        </div> 

                        <div class="form-group" id="destination" style="display: none">
                           <label class="req">Destination</label>
                            <select class="form-control" name="Transportfeecollection[routedetailsid]" id="Transportfeecollection_routedetailsid">
<option value="">Select Destination</option>
</select>                                                    </div>
                            <div class="alert alert-warning warning">
                            <span class="icon-warning icon-2x" style="color:orange"></span>
                            If you want to incoorporate student information from the database in the message, then you have to include certain codes in the place of user information.                            <br>
                            The codes are:                            <br>
                            Student/Employee Name :#name#,Register No./Employee Code :#code# , Route Code : #route# , Destination : #destination#.                             </div>
                            <div class="form-group" id="message">
                                <label for="reg_input_name" class="req">Message</label>
                                <textarea rows="2" cols="50" class="form-control" name="Transportfeecollection[message]" id="Transportfeecollection_message"></textarea>                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form_sep">
                                    &nbsp;&nbsp;
                                    <button class="btn btn-info">Send</button> 
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>    </div>
<script>
    $(document).ready(function () {
        var droplist = $('#Transportfeecollection_sms_for');
        droplist.change(function () {
            if (droplist.val() === '1') { //! common to all
                $("#route").hide("slow");
                $("#destination").hide("slow");
            } 
            if (droplist.val() === '2') { //! Route wise
                $("#destination").hide("slow");
                 $("#route").show("slow");
            }
            if (droplist.val() === '3') { //! Destination wise
                $("#route").show("slow");
                $("#destination").show("slow");
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