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
            <li><a href="#">Settings</a></li>
            <li class="active">Login Form Settings</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">

    <form enctype="multipart/form-data" id="loginformsettings-form" action="/index.php/core/loginformsettings/create" method="post">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Login Form Settings</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <div class="panel-body">                                   
                                                        
                            <div class="form-group">
                                 <label style="font-size: 16px"><b>Background Image</b></label>
                                <input id="ytLoginformsettings_background_image" type="hidden" value="" name="Loginformsettings[background_image]"><input name="Loginformsettings[background_image]" id="Loginformsettings_background_image" type="file"><div class="school_val_error" id="Loginformsettings_background_image_em_" style="display:none"></div>                            </div> <hr>
                                                        <div style="font-size: 16px"><strong>Header:-</strong></div>
                            <div class="form-group">
                                <label>Header Color</label>
                                <input value="" maxlength="100" class="form-control" name="Loginformsettings[header_color]" id="Loginformsettings_header_color" type="text"><div class="school_val_error" id="Loginformsettings_header_color_em_" style="display:none"></div>                            </div> 
                            <div class="form-group">
                                <label for="Loginformsettings_logoimage">Logo</label><input id="ytLoginformsettings_logoimage" type="hidden" value="" name="Loginformsettings[logoimage]"><input name="Loginformsettings[logoimage]" id="Loginformsettings_logoimage" type="file"><div class="school_val_error" id="Loginformsettings_logoimage_em_" style="display:none"></div>                            </div> 
                            <div class="form-group">
                                <label for="Loginformsettings_logoimage_width">Logo Width</label><input value="" maxlength="100" class="form-control" name="Loginformsettings[logoimage_width]" id="Loginformsettings_logoimage_width" type="text"><div class="school_val_error" id="Loginformsettings_logoimage_width_em_" style="display:none"></div>                            </div> <hr>
                            <div style="font-size: 16px"><strong>Login Form:-</strong></div>
                            <div class="form-group success">
                                <label for="Loginformsettings_loginform_transperancy">Login Form Transperancy</label><input value="" maxlength="100" class="form-control" name="Loginformsettings[loginform_transperancy]" id="Loginformsettings_loginform_transperancy" type="text"><div class="school_val_error" id="Loginformsettings_loginform_transperancy_em_" style="display:none"></div>                            </div> 
                            <div class="form-group">
                                <label for="Loginformsettings_loginform_logo">Login Form Logo</label><input id="ytLoginformsettings_loginform_logo" type="hidden" value="" name="Loginformsettings[loginform_logo]"><input name="Loginformsettings[loginform_logo]" id="Loginformsettings_loginform_logo" type="file"><div class="school_val_error" id="Loginformsettings_loginform_logo_em_" style="display:none"></div>                            </div>
                            <div class="form-group">
                                <label for="Loginformsettings_loginform_logo_width">Logo Width</label><input value="" maxlength="100" class="form-control" name="Loginformsettings[loginform_logo_width]" id="Loginformsettings_loginform_logo_width" type="text"><div class="school_val_error" id="Loginformsettings_loginform_logo_width_em_" style="display:none"></div>                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form_sep">
                                <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" type="submit" value="Save">                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-sm-6">
              
        </div>                
    </div>
    </form></div>
<script>

    $(document).ready(function () {
        var checkbox = $('#Feetemplate_isdefault');
        checkbox.click(function () {
            if ($(this).is(":checked")) {
                $('#default').hide("slow");
            }
            else if ($(this).is(":not(:checked)")) {
                $('#default').show("slow");
            }
        })
    });

</script>
	

		
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