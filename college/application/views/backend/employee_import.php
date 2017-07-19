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
                <li><a href="#">Settings</a></li>
                <li class="active">Employee Import</li>
            </ul>
             <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
            <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
    </div><br>
    <div class="content">
            <form enctype="multipart/form-data" id="contact-form" action="/index.php/site/employeeimport" method="post">            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Employee Import</h4>
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
                                        <div class="progress-bar progress-bar-info" style="width: 80%" id="progressbar">
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
                                       Download the excel file format from below link and copy the below values in corresponding columns while filling excel sheet. 
                                        <br>
                                        <p class="form-control-static">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/img/Employee.xlsx">Employee excel format</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title"> Department</h5>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">Computer</div><div class="form-group">IT deptt</div><div class="form-group">Finance and Accounts</div><div class="form-group">Faculty</div><div class="form-group">Faculty of English</div><div class="form-group">science</div>
                                        </div>

                                        <!--<div class="panel-footer"></div>-->
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title"> Designation</h5>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">Principal</div><div class="form-group">Primary Teacher</div><div class="form-group">Course-ordinator</div><div class="form-group">Drawing Teacher</div><div class="form-group">Senior English Teacher</div><div class="form-group">English Teacher</div><div class="form-group">HR Manager</div><div class="form-group">Finance Manager</div><div class="form-group">I T manager </div><div class="form-group">ggg</div><div class="form-group">tt</div>
                                        </div>

                                        <!--<div class="panel-footer"></div>-->
                                    </div>
                                </div>
                                
                                 <div class="col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title"> User Type</h5>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">Student</div><div class="form-group">Employee</div><div class="form-group">Guardian</div><div class="form-group">Admin</div><div class="form-group">emloyee</div><div class="form-group">test</div><div class="form-group">rftyh</div><div class="form-group">rftyh</div><div class="form-group">rftyh</div><div class="form-group">rftyh</div><div class="form-group">rftyh</div><div class="form-group">gdgd</div><div class="form-group">sdfdsg</div><div class="form-group">gjh</div><div class="form-group">aaaaaaaa</div><div class="form-group">Teacher Eze</div><div class="form-group">Oby</div><div class="form-group">Deny</div><div class="form-group">Denyfc</div><div class="form-group">Chipaov</div>
                                        </div>
                                    </div>
                                </div>
                                
                                                            </div>
                        </div>
                    </div>
                </div>
            </div></form>
        </div>
</div><!-- content -->
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