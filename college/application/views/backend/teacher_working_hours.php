<div class="content-wrapper">
                    <div class="content">

		<div class="page-header">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
                <li><a href="#">Academic</a></li>
                <li class="active">Timetable</li>
            </ul>
             <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i>Support</a></li>
        </ul>
            <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
    </div><br>
    <div class="content">
            <form id="Timetable-form" action="/index.php/core/timetable/workinghours" method="post">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Select Department</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12">

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="reg_input" class="req">Department</label>

                                            <select class="form-control" name="departmentid" id="departmentid">
<option value="">Select Department</option>
<option value="1">Computer</option>
<option value="2">Operator</option>
<option value="3">Accounts</option>
<option value="4">Faculty</option>
<option value="6">Physics</option>
<option value="7">Faculty of Information Science</option>
<option value="8">Faculty of  Hardware </option>
<option value="9">Faculty of Computer Science</option>
<option value="10">Faculty of Mathematics </option>
<option value="11">Faculty of Myanmar and English </option>
<option value="12">Administration</option>
<option value="13">xnbvn</option>
<option value="14">Computer Dep</option>
</select>                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                </div>
                <div class="col-sm-6">
                </div>
            </div></form>
        </div>
  <div class="content">
            <div class="row">
                <div class="col-sm-12">
                                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Teachers Working Hour Calculation</h4>
                        </div>
                        <table data-page-size="40" data-filter="#table_search" class="table responsive table table-bordered table table-striped" id="resp_table">
                            <thead>
                                <tr>
                                    <th data-toggle="true" class="footable-first-column footable-sortable">SlNo<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone,tablet" class="footable-sortable">Teacher Name<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone,tablet" class="footable-sortable">Hours<span class="footable-sort-indicator"></span></th>
                                </tr>
                            </thead>
                            <tbody id="show"><tr><td>1</td><td>Daw Mya Mya </td><td>0</td></tr><tr><td>2</td><td>Rekha Gupta  </td><td>0</td></tr><tr><td>3</td><td>U Mg Mg </td><td>0</td></tr><tr><td>4</td><td>waka  waka</td><td>0</td></tr></tbody>
                        </table>
                    </div>
                </div>
            </div>
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