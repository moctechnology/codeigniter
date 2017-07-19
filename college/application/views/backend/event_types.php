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
            <li><a href="#">Event</a></li>
            <li class="active">Event Types</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="eventtype-form" action="/index.php/events/eventtype/create" method="post">    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Event Types</h4>
                </div>
                <div class="panel-body">
                    <div class="panel-body">

                        <div class="form-group error">
                            <label class="req" for="Eventtype_eventtype_name">Event Type</label>                            <input class="form-control" name="Eventtype[eventtype_name]" id="Eventtype_eventtype_name" type="text" maxlength="45">                            <div class="school_val_error" id="Eventtype_eventtype_name_em_" style="">Event Type cannot be blank.</div>                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form_sep">
                                <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" type="submit" value="Save">                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><div class="col-sm-6">
            <div class="grid-view" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Event Types</th><th class="button-column" id="item-grid_c2">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="10%">1</td><td width="24%">Annual Function</td><td width="16%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/events/eventtype/update/id/5"><img src="" alt=""></a>   <a class="glyphicon glyphicon-remove" title="" href="/index.php/events/eventtype/delete/id/5"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/events/eventtype/create"><span>5</span></div>
</div>  
        </div>
    </div>
    </form></div>	

		
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