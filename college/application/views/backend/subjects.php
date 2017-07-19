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
                <li><a href="#">Academic</a></li>
            <li><a href="#">Subjects</a></li>
                <li class="active">Subjects</li>
            </ul>
             <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i>Support</a></li>
        </ul>
            <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
    </div><br>
    <div class="content">

            <form id="subject-form" action="/index.php/core/subject/create" method="post">            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Add Subject</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12">

                                <div class="panel-body">
                                                                        <div class="form-group">
                                        <label for="reg_input_name" class="req">Subject Name </label>
                                        <input size="84" maxlength="45" class="form-control" name="Subject[subject_name]" id="Subject_subject_name" type="text"><div class="school_val_error" id="Subject_subject_name_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Subject Code </label>
                                        <input size="84" maxlength="45" class="form-control" name="Subject[subject_code]" id="Subject_subject_code" type="text"><div class="school_val_error" id="Subject_subject_code_em_" style="display:none"></div>                
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form_sep">
                                        <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" type="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="grid-view" id="item-grid">
<table class="items">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Subject Name</th><th id="item-grid_c2">Subject Code</th><th class="button-column" id="item-grid_c3">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="25%">1</td><td width="25%">abc</td><td width="25%">2</td><td width="25%"><a class="icon-pencil" title="" href="/index.php/core/subject/update/id/17"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/subject/delete/id/17"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="25%">2</td><td width="25%">abc</td><td width="25%">1</td><td width="25%"><a class="icon-pencil" title="" href="/index.php/core/subject/update/id/16"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/subject/delete/id/16"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="25%">3</td><td width="25%">Advanced Information System</td><td width="25%">4BIS-406</td><td width="25%"><a class="icon-pencil" title="" href="/index.php/core/subject/update/id/15"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/subject/delete/id/15"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="25%">4</td><td width="25%">Business Information System and Analysis</td><td width="25%">4BIS-401</td><td width="25%"><a class="icon-pencil" title="" href="/index.php/core/subject/update/id/10"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/subject/delete/id/10"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="25%">5</td><td width="25%">Business Process Management</td><td width="25%">4BIS-404</td><td width="25%"><a class="icon-pencil" title="" href="/index.php/core/subject/update/id/13"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/subject/delete/id/13"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="25%">6</td><td width="25%">chemistry</td><td width="25%">ch1</td><td width="25%"><a class="icon-pencil" title="" href="/index.php/core/subject/update/id/20"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/subject/delete/id/20"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="25%">7</td><td width="25%">English</td><td width="25%">4BIS-Eng</td><td width="25%"><a class="icon-pencil" title="" href="/index.php/core/subject/update/id/1"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/subject/delete/id/1"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="25%">8</td><td width="25%">Enterprise System and Risk Management</td><td width="25%">4BIS-403</td><td width="25%"><a class="icon-pencil" title="" href="/index.php/core/subject/update/id/12"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/subject/delete/id/12"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="25%">9</td><td width="25%">GK</td><td width="25%">03</td><td width="25%"><a class="icon-pencil" title="" href="/index.php/core/subject/update/id/3"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/subject/delete/id/3"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="25%">10</td><td width="25%">Hindi</td><td width="25%">05</td><td width="25%"><a class="icon-pencil" title="" href="/index.php/core/subject/update/id/5"><img src="" alt=""></a>  <a class="icon-cross2" title="" href="/index.php/core/subject/delete/id/5"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/core/subject/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/core/subject/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/core/subject/create">1</a></li>
<li class="page"><a href="/index.php/core/subject/create/Subject_page/2">2</a></li>
<li class="next"><a href="/index.php/core/subject/create/Subject_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/core/subject/create/Subject_page/2">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/core/subject/create"><span>17</span><span>16</span><span>15</span><span>10</span><span>13</span><span>20</span><span>1</span><span>12</span><span>3</span><span>5</span></div>
</div>  
                </div>
            </div>
            </form>        </div>
<script>

    $('#Subject_subject_name').keyup(function () {

        $('#item-grid').yiiGridView('update', {
            data: {search: $('#Subject_subject_name').val()}
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