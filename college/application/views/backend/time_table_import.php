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
            <li><a href="#">Academic</a></li>
            <li><a href="#">Time Table</a></li>
            <li class="active">Time Table Import</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form enctype="multipart/form-data" id="feeallocation-form" action="/index.php/site/timetableimport" method="post">    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Timetable Import</h4>
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
                                <p class="form-control-static">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/img/timetable.xlsx">Timetable format</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Course , Batch&amp;</h5>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-group panel-group-control content-group-lg">
                                                                                    <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group11" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            B.Scs</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group11" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                                    <div class="panel panel-white">
                                                                <div class="panel-heading">
                                                                    <h6 class="panel-title">
                                                                        <a href="#collapsible-control-group411" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                            A</a>

                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-white">
                                                                <div class="panel-collapse collapse" id="collapsible-control-group411" aria-expanded="false" style="height: 0px;">
                                                                    <div class="panel-body">
                                                                                                                                                    <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-Eng-English<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4111" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eDEM102-waka  waka<br>eDEM117-Jai  Dev<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4211" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            03-GK<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4211" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eDEM101- REEMA   KHANA<br>Trendz001-Rekha Gupta  <br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4311" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            02-Maths<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4311" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        Trendz001-Rekha Gupta  <br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4411" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            04-Science<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4411" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4511" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-402-Introduction to Modelling and Analysis<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4511" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4611" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-405-Software Quality Management<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4611" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4711" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            matmat-Mathematics 1<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4711" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4811" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            2-abc<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4811" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4911" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            1-abc<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4911" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group41011" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-406-Advanced Information System<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group41011" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group41111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-401-Business Information System and Analysis<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group41111" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group41211" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-404-Business Process Management<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group41211" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group41311" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-403-Enterprise System and Risk Management<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group41311" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group41411" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            h1-history<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group41411" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                </div>
                                                                </div>
                                                            </div>
                                                                                                                        <div class="panel panel-white">
                                                                <div class="panel-heading">
                                                                    <h6 class="panel-title">
                                                                        <a href="#collapsible-control-group421" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                            B</a>

                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-white">
                                                                <div class="panel-collapse collapse" id="collapsible-control-group421" aria-expanded="false" style="height: 0px;">
                                                                    <div class="panel-body">
                                                                                                                                                    <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4121" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-404-Business Process Management<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4121" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        Trendz001-Rekha Gupta  <br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4221" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-Eng-English<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4221" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4321" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-403-Enterprise System and Risk Management<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4321" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eDEM102-waka  waka<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4421" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            03-GK<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4421" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4521" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            05-Hindi<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4521" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4621" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-402-Introduction to Modelling and Analysis<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4621" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4721" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            02-Maths<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4721" aria-expanded="false" style="height: 0px;">
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
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group12" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            STD 2</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group12" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                                    <div class="panel panel-white">
                                                                <div class="panel-heading">
                                                                    <h6 class="panel-title">
                                                                        <a href="#collapsible-control-group412" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                            Batch A</a>

                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-white">
                                                                <div class="panel-collapse collapse" id="collapsible-control-group412" aria-expanded="false" style="height: 0px;">
                                                                    <div class="panel-body">
                                                                                                                                                    <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4112" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            03-GK<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4112" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4212" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            05-Hindi<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4212" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eUIT004-Daw Myint Myint Thein<br>Trendz001-Rekha Gupta  <br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4312" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            02-Maths<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4312" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4412" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            04-Science<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4412" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eDEM102-waka  waka<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4512" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-Eng-English<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4512" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eDEM101- REEMA   KHANA<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                </div>
                                                                </div>
                                                            </div>
                                                                                                                        <div class="panel panel-white">
                                                                <div class="panel-heading">
                                                                    <h6 class="panel-title">
                                                                        <a href="#collapsible-control-group422" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                            as</a>

                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-white">
                                                                <div class="panel-collapse collapse" id="collapsible-control-group422" aria-expanded="false" style="height: 0px;">
                                                                    <div class="panel-body">
                                                                                                                                            </div>
                                                                </div>
                                                            </div>
                                                                                                                </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group13" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            BIS</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group13" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                                    <div class="panel panel-white">
                                                                <div class="panel-heading">
                                                                    <h6 class="panel-title">
                                                                        <a href="#collapsible-control-group413" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                            Second Batch</a>

                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-white">
                                                                <div class="panel-collapse collapse" id="collapsible-control-group413" aria-expanded="false" style="height: 0px;">
                                                                    <div class="panel-body">
                                                                                                                                                    <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4113" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-Eng-English<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4113" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eUIT003-U Nay Lin Soe<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4213" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-401-Business Information System and Analysis<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4213" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eUIT004-Daw Myint Myint Thein<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4313" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-402-Introduction to Modelling and Analysis<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4313" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eUIT005-Daw Khin Khin Oo<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4413" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-403-Enterprise System and Risk Management<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4413" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eUIT006-Daw Su  Su Htay<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4513" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-404-Business Process Management<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4513" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eUIT002-Dr Ei Shwe Zin<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4613" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-405-Software Quality Management<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4613" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eUIT007-Daw Khaing Khaing Htwe<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4713" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-406-Advanced Information System<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4713" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eUIT006-Daw Su  Su Htay<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                </div>
                                                                </div>
                                                            </div>
                                                                                                                </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group14" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            STD 3</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group14" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                                    <div class="panel panel-white">
                                                                <div class="panel-heading">
                                                                    <h6 class="panel-title">
                                                                        <a href="#collapsible-control-group414" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                            A</a>

                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-white">
                                                                <div class="panel-collapse collapse" id="collapsible-control-group414" aria-expanded="false" style="height: 0px;">
                                                                    <div class="panel-body">
                                                                                                                                                    <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4114" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            2-abc<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4114" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eUIT006-Daw Su  Su Htay<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4214" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-406-Advanced Information System<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4214" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4314" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-401-Business Information System and Analysis<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4314" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group4414" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-404-Business Process Management<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group4414" aria-expanded="false" style="height: 0px;">
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
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group15" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trendz Abacus</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group15" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                                    <div class="panel panel-white">
                                                                <div class="panel-heading">
                                                                    <h6 class="panel-title">
                                                                        <a href="#collapsible-control-group415" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                            batch 1</a>

                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-white">
                                                                <div class="panel-collapse collapse" id="collapsible-control-group415" aria-expanded="false" style="height: 0px;">
                                                                    <div class="panel-body">
                                                                                                                                            </div>
                                                                </div>
                                                            </div>
                                                                                                                </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group16" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            abc</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group16" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                                    <div class="panel panel-white">
                                                                <div class="panel-heading">
                                                                    <h6 class="panel-title">
                                                                        <a href="#collapsible-control-group416" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                            dfg</a>

                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-white">
                                                                <div class="panel-collapse collapse" id="collapsible-control-group416" aria-expanded="false" style="height: 0px;">
                                                                    <div class="panel-body">
                                                                                                                                            </div>
                                                                </div>
                                                            </div>
                                                                                                                </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group17" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            cvb</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group17" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group18" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            bsc</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group18" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group19" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            eea</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group19" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group110" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            maths</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group110" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            class1</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group111" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                                    <div class="panel panel-white">
                                                                <div class="panel-heading">
                                                                    <h6 class="panel-title">
                                                                        <a href="#collapsible-control-group4111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                            secA</a>

                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-white">
                                                                <div class="panel-collapse collapse" id="collapsible-control-group4111" aria-expanded="false" style="height: 0px;">
                                                                    <div class="panel-body">
                                                                                                                                                    <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group41111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            ch1-chemistry<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group41111" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group42111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-Eng-English<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group42111" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group43111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            03-GK<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group43111" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group44111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            05-Hindi<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group44111" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group45111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            h1-history<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group45111" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group46111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            matmat-Mathematics 1<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group46111" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group47111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            02-Maths<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group47111" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group48111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            04-Science<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group48111" aria-expanded="false" style="height: 0px;">
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
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group112" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            class3</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group112" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                                    <div class="panel panel-white">
                                                                <div class="panel-heading">
                                                                    <h6 class="panel-title">
                                                                        <a href="#collapsible-control-group4112" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                            secA</a>

                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-white">
                                                                <div class="panel-collapse collapse" id="collapsible-control-group4112" aria-expanded="false" style="height: 0px;">
                                                                    <div class="panel-body">
                                                                                                                                                    <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group41112" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            ch1-chemistry<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group41112" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group42112" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            4BIS-Eng-English<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group42112" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        eDEM102-waka  waka<br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group43112" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            03-GK<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group43112" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group44112" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            05-Hindi<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group44112" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        Trendz001-Rekha Gupta  <br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group45112" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            h1-history<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group45112" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                        Trendz001-Rekha Gupta  <br>                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group46112" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            02-Maths<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group46112" aria-expanded="false" style="height: 0px;">
                                                                                    <div class="panel-body">
                                                                                                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="panel panel-white">
                                                                                <div class="panel-heading">
                                                                                    <h6 class="panel-title">
                                                                                        <a href="#collapsible-control-group47112" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                                            04-Science<br></a>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="panel-collapse collapse" id="collapsible-control-group47112" aria-expanded="false" style="height: 0px;">
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
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group113" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            test</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group113" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group114" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            test12</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group114" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                                    <div class="panel panel-white">
                                                                <div class="panel-heading">
                                                                    <h6 class="panel-title">
                                                                        <a href="#collapsible-control-group4114" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                                            ABC</a>

                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-white">
                                                                <div class="panel-collapse collapse" id="collapsible-control-group4114" aria-expanded="false" style="height: 0px;">
                                                                    <div class="panel-body">
                                                                                                                                            </div>
                                                                </div>
                                                            </div>
                                                                                                                </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group115" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            mach</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="panel panel-white">
                                                <div class="panel-collapse collapse" id="collapsible-control-group115" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                </div> 
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-4">

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