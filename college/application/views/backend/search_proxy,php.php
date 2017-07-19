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
                <li><a href="#">Academic</a></li>
                <li class="active">Time Table</li>
            </ul>
             <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i>Support </a></li>
        </ul>
            <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
    </div><br>
    <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Select Course &amp; Batch</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12">

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <select class="form-control" name="courseid" id="courseid">
<option value="">SelectCourse</option>
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
</select>                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="batchid" id="batchid"><option value="">Select</option><option value="13">Second Batch</option></select>                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="day" id="day">
<option value="">Select Day</option>
<option value="&quot;Sunday&quot;">Sunday</option>
<option value="&quot;Monday&quot;">Monday</option>
<option value="&quot;Tuesday&quot;">Tuesday</option>
<option value="&quot;Wednesday&quot;">Wednesday</option>
<option value="&quot;Thursday&quot;">Thursday</option>
<option value="&quot;Friday&quot;">Friday</option>
<option value="&quot;Saturday&quot;">Saturday</option>
</select>                                        </div>

                                        <div class="col-sm-2">
                                                                                        <div class="input-group bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><input type="text" name="hour" class="bootstrap-timepicker-hour form-control" maxlength="2"></td> <td class="separator">:</td><td><input type="text" name="minute" class="bootstrap-timepicker-minute form-control" maxlength="2"></td> <td class="separator">&nbsp;</td><td><input type="text" name="meridian" class="bootstrap-timepicker-meridian form-control" maxlength="2"></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a data-action="incrementHour" href="#"><i class="icon-arrow-up12"></i></a></td><td class="separator">&nbsp;</td><td><a data-action="incrementMinute" href="#"><i class="icon-arrow-up12"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a data-action="toggleMeridian" href="#"><i class="icon-arrow-up12"></i></a></td></tr><tr><td><input type="text" maxlength="2" class="bootstrap-timepicker-hour form-control" name="hour"></td> <td class="separator">:</td><td><input type="text" maxlength="2" class="bootstrap-timepicker-minute form-control" name="minute"></td> <td class="separator">&nbsp;</td><td><input type="text" maxlength="2" class="bootstrap-timepicker-meridian form-control" name="meridian"></td></tr><tr><td><a data-action="decrementHour" href="#"><i class="icon-arrow-down12"></i></a></td><td class="separator"></td><td><a data-action="decrementMinute" href="#"><i class="icon-arrow-down12"></i></a></td><td class="separator">&nbsp;</td><td><a data-action="toggleMeridian" href="#"><i class="icon-arrow-down12"></i></a></td></tr></tbody></table></div>
                                                <input type="text" class="form-control" id="tp-starttime">
                                                <span class="input-group-addon"><i class="icon-watch2"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                                                                        <div class="input-group bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><input type="text" name="hour" class="bootstrap-timepicker-hour form-control" maxlength="2"></td> <td class="separator">:</td><td><input type="text" name="minute" class="bootstrap-timepicker-minute form-control" maxlength="2"></td> <td class="separator">&nbsp;</td><td><input type="text" name="meridian" class="bootstrap-timepicker-meridian form-control" maxlength="2"></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a data-action="incrementHour" href="#"><i class="icon-arrow-up12"></i></a></td><td class="separator">&nbsp;</td><td><a data-action="incrementMinute" href="#"><i class="icon-arrow-up12"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a data-action="toggleMeridian" href="#"><i class="icon-arrow-up12"></i></a></td></tr><tr><td><input type="text" maxlength="2" class="bootstrap-timepicker-hour form-control" name="hour"></td> <td class="separator">:</td><td><input type="text" maxlength="2" class="bootstrap-timepicker-minute form-control" name="minute"></td> <td class="separator">&nbsp;</td><td><input type="text" maxlength="2" class="bootstrap-timepicker-meridian form-control" name="meridian"></td></tr><tr><td><a data-action="decrementHour" href="#"><i class="icon-arrow-down12"></i></a></td><td class="separator"></td><td><a data-action="decrementMinute" href="#"><i class="icon-arrow-down12"></i></a></td><td class="separator">&nbsp;</td><td><a data-action="toggleMeridian" href="#"><i class="icon-arrow-down12"></i></a></td></tr></tbody></table></div>
                                                <input type="text" class="form-control" id="tp-endtime">
                                                <span class="input-group-addon"><i class="icon-watch2"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="javascript:findproxy();" class="btn btn-info">Find Proxy</a>
                                        </div>
                                    </div>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
 <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Proxy Teachers Available List</h4>
                        </div>
                                                <table data-page-size="40" data-filter="#table_search" class="table responsive table table-bordered table table-striped" id="resp_table">
                            <thead>
                                <tr>
                                    <th data-toggle="true" class="footable-first-column footable-sortable" width="33.33%">SlNo<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone,tablet" class="footable-sortable" width="33.33%">Teacher Name<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone,tablet" class="footable-sortable" width="33.33%">Allocate<span class="footable-sort-indicator"></span></th>
                                </tr>
                            </thead>
                            <tbody id="show"><tr style="display: table-row;"><td class="footable-first-column"><span class="footable-toggle"></span>1</td><td>U Nay Lin Soe</td><td><a href='javascript:allocate("26");'>Allocate</a></td></tr></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<script>
    $('#tp-starttime').timepicker();
    $('#tp-endtime').timepicker();
    function findproxy() {
        var courseid = $('#courseid option:selected').text();
        var batchid = $('#batchid option:selected').val();
        var starttime = $('#tp-starttime').val();
        var endtime = $('#tp-endtime').val();
        var day = $('#day').val();
        $.ajax({
            type: "POST",
            url: "getproxy",
            data: {courseid: courseid, batchid: batchid, starttime: starttime, endtime: endtime, day: day},
            dataType: "html",
            success: function (data) {
                if (data == "error") {

                }
                else {
                    $('#show').empty();
                    $('#show').append(data);
                }
            }
        });
    }
    function allocate(empid) {
          var courseid = $('#courseid option:selected').text();
        var batchid = $('#batchid option:selected').text();
        var starttime = $('#tp-starttime').val();
        var endtime = $('#tp-endtime').val();
        var day = $('#day option:selected').text();
        $.ajax({
            type: "POST",
            url: "allocateproxy",
            data: {employeemasterid: empid,courseid:courseid,batchid:batchid,starttime:starttime,endtime:endtime,day:day},
            dataType: "html",
            success: function (data) {
                if (data == "error") {
                    alert("Error occured. Try again later.")
                }
                else {
                }
            }
        });
    }
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