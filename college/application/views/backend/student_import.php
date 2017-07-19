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
            <li><a href="#">Settings</a></li>
            <li class="active">Student Import</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab">Student Import</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab">Student Data Update</a></li>
        </ul><br>
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">
                <form enctype="multipart/form-data" id="contact-form" action="/index.php/site/import" method="post">                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Student Import</h4>
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
                                            Download the excel file format from below link and copy the below values in corresponding columns while filling excel sheet.                                            <br>
                                            <p class="form-control-static">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/img/Student.xlsx">Student excel format</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title"> Blood Groups</h5>
                                            </div>
                                            <div class="panel-body">

                                                <div class="form-group">A+ </div>
                                                <div class="form-group">A- </div>
                                                <div class="form-group">B+ </div>
                                                <div class="form-group">B-</div>
                                                <div class="form-group">O+ </div>
                                                <div class="form-group">O- </div>
                                                <div class="form-group">AB+ </div>
                                                <div class="form-group">AB- </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">Category</h5>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">Online Self Study</div><div class="form-group">xyz</div><div class="form-group">asdf</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">Course &amp; Batch</h5>
                                            </div>
                                            <div class="panel-body">
                                                <div class="panel-group panel-group-control content-group-lg">
                                                                                                            <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group1" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        STD 1</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group1" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    A<br>dsfdsfdsfd<br>                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group2" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        STD 2</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group2" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    Batch A<br>                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group3" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        Course1</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group3" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    B1<br>                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group4" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        Survival Document</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group4" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    General English 1<br>Intensive English 1<br>Academic English 1<br>Employability ENG 1<br>                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group5" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        Survival Passport</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group5" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group6" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        Beginner Application</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group6" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group7" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        bbbb</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group7" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group8" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        a1</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group8" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group9" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        a2</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group9" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group10" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        English</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group10" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    Bach 17<br>                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group11" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        Grade 1</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group11" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group12" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        dfgdfg</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group12" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group13" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        dsfdsfd</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group13" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group14" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        Class 1</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group14" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    A<br>                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group15" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        bca</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group15" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group16" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        BS Computer Science</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group16" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    daraygon<br>                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-group17" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        BBsc</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-group17" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    First Year<br>                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        </div> 
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">Hostel Room</h5>
                                            </div>
                                            <div class="panel-body">
                                                <div class="panel-group panel-group-control content-group-lg">
                                                                                                            <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-grouphstl1" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        Hostel 1</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-grouphstl1" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    1<br>4<br><br><br>21<br>231<br>22<br>23<br>                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-grouphstl2" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        1234567890</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-grouphstl2" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    room2<br>                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        </div> 
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">Route Code &amp; Destination</h5>
                                            </div>
                                            <div class="panel-body">
                                                <div class="panel-group panel-group-control content-group-lg">
                                                                                                            <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-grouproute1" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        001</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-grouproute1" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    KOLLAM<br>trivadrum<br>kottayam<br>                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-grouproute2" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        002</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-grouproute2" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    Anna Nagar<br>Paris<br>                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                                <div class="panel panel-white">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title">
                                                                    <a href="#collapsible-control-grouproute3" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                        005</a>
                                                                </h6>
                                                            </div>
                                                            <div class="panel-collapse collapse" id="collapsible-control-grouproute3" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                                                                        </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                </form>            </div>
            <div class="tab-pane active" id="tbb_b">
                <form enctype="multipart/form-data" id="student-import-form" action="/index.php/site/studentimportupdate" method="post">                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Student Data Update</h4>
                            </div>
                            <div class="panel-body">
                                <div class="panel-body"><div id="overlaygif" style="display:none;"></div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Browse File</label>
                                        <input id="ytContactForm_filea" type="hidden" value="" name="ContactForm[filea]"><input name="ContactForm[filea]" id="ContactForm_filea" type="file">
                                    </div>
                                </div>
                                <div class="row">
                                    <!--<div class="form-group col-sm-3">-->
                                    <div class="col-sm-2"><input class="btn btn-info" type="submit" name="yt1" value="   submit   "></div>
                                    <!--</div>-->
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
                                            Download the excel file format from below link and copy the below values in corresponding columns while filling excel sheet.                                            <br>
                                            <p class="form-control-static">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/img/Student_update.xlsx">Student excel format</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title"> Blood Groups</h5>
                                            </div>
                                            <div class="panel-body">

                                                <div class="form-group">A+ </div>
                                                <div class="form-group">A- </div>
                                                <div class="form-group">B+ </div>
                                                <div class="form-group">B-</div>
                                                <div class="form-group">O+ </div>
                                                <div class="form-group">O- </div>
                                                <div class="form-group">AB+ </div>
                                                <div class="form-group">AB- </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">Category</h5>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">Online Self Study</div><div class="form-group">xyz</div><div class="form-group">asdf</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>            </div>
        </div>
    </div>
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