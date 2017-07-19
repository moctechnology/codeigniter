
<div class="maincontent">
        	<div class="contentinner">
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
            <li><a href="#">Finance</a></li>
             <li><a href="#">Fees</a></li>
            <li class="active">Fee Import</li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form enctype="multipart/form-data" id="contact-form" action="/index.php/site/feeimport" method="post">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Fee Import</h4>
                </div>
                <div class="panel-body">
                    <div class="panel-body"><div id="overlaygif" style="display:none;"></div>
<!--                        <div class="form-group">
                            <label for="reg_input_name" class="req">Browse File</label>
                            
                        </div>-->
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
                                Download the excel file format from below link and copy the below values in corresponding columns while filling excel sheet.
                                <br>
                                <p class="form-control-static">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/img/Fee_Import.xlsx">Feepaid excel format</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">


                        <div class="col-sm-4">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Course &amp; Batch</h5>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-group panel-group-control content-group-lg">
                                                                                    <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1" data-toggle="collapse" aria-expanded="true" class="">
                                                            COMPUTER network</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse in" id="collapsible-control-group1" aria-expanded="true">
                                                    <div class="panel-body">
                                                        A<br>B<br>bala<br>Imperial Batch<br>test<br>01<br>23r<br>jff<br>Bat1<br>12 PM tO 01 PM<br>10 AM tO 11 AM<br>9 AM TO 10 AM<br>java<br>vghvghvhgv<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group2" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ONLINE TEST SERIES</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group2" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        B<br>sadf<br>Mars<br>f1<br>klkjkjklj<br>qqqqqqqqqqq qqqq qqq<br>batch1<br>2016<br>yyyy5<br>2015<br>io<br>ii<br>BAT 1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group3" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Pre School 1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group3" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>B<br>C<br>abc <br>Demo batch<br>ZXZX<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group4" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Pre School 2</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group4" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>sadasd<br>batch1<br>ddd<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group5" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Year 1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group5" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        1<br>test<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group6" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Year 2</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group6" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        ARTS<br>wewewe<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group7" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Year 3</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group7" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        3 Pink<br>ram<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group8" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Year 4</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group8" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        3 Blue<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group9" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Year 5</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group9" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        5 Gold<br>fsdfsdf<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group10" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Computer COuerse</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group10" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        NO<br>dasd1<br>xsdfgh<br>AML<br>2016<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group11" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            network security</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group11" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Frist Batch 2016<br>17 batch<br>CCNA_Batch<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group12" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            asp.net</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group12" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        2015-2016<br>2015<br>c<br>raudibatch<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group13" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            eeeeee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group13" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        ekonim<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group14" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            TOC</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group14" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        2016<br>A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group15" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            php course</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group15" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        php batch<br>1<br>MALAKIA STO PATERO<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group16" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Jesus</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group16" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        bmhbm <br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group17" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            vba</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group17" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group18" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Engg</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group18" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A div<br>Primary 1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group19" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            NewCourse</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group19" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        NewBatch<br>Test<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group20" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            zzz</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group20" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        moring<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group21" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            A1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group21" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group22" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            A1A</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group22" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        B1B<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group23" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            dld</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group23" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group24" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Nursery</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group24" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        2015-2016<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group25" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            cs</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group25" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        new<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group26" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            test1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group26" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group27" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            PGDEMS</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group27" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group28" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            md-1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group28" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        jan-2016<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group29" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Maths Biology</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group29" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        2016-2017 Ruby<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group30" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Kindergarten </a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group30" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        LKG<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group31" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            math</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group31" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        jjj<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group32" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            test123</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group32" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group33" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            asdsa</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group33" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group34" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            asdasd</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group34" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group35" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ab</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group35" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group36" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            DCA</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group36" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group37" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            MPCEMJ1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group37" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        J1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group38" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            MPCEMJ2</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group38" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group39" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            12 sdf</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group39" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group40" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            GEN</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group40" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        spring2015<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group41" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Math1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group41" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group42" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            enc 1101</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group42" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group43" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Computer Science </a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group43" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        CS_Batch_1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group44" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Class II</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group44" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group45" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ece</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group45" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group46" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            SSLC</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group46" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        SSLC 2016-2017 B<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group47" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Plus 2</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group47" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        New Batch<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group48" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            civils</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group48" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group49" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            civ</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group49" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group50" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            dhdf</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group50" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group51" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ba</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group51" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group52" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            BBM</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group52" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group53" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            HappyMan</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group53" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        MCA 2016<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group54" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            se</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group54" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group55" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            fgd</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group55" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group56" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            sia</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group56" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group57" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Pre School 11</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group57" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        2015<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group58" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            bbc india</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group58" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group59" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            English</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group59" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group60" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            abc</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group60" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group61" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            dddddddddd</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group61" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group62" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            dddnk</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group62" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group63" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Standard 1st</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group63" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        test<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group64" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            1st class</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group64" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group65" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            inter</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group65" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group66" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            dfsafd</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group66" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group67" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            robotics</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group67" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group68" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Lehrgang</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group68" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group69" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Kurs</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group69" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group70" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            fyjc</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group70" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group71" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            fffff</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group71" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group72" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            physcis</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group72" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group73" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            kljdfs</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group73" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group74" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Master of Computer Application</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group74" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group75" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            dfgfdg</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group75" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group76" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            X-A</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group76" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        X-B<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group77" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Science</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group77" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        X-B<br>X-A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group78" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            IIT</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group78" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        IIT Batch1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group79" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Diploma IT</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group79" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        First Batch<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group80" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            PHP</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group80" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group81" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Shotokan Karate</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group81" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group82" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            bdfb</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group82" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group83" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            JEE</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group83" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group84" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            3rd </a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group84" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        1st batch<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group85" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ats</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group85" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        2016-2017CS<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group86" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            karthi</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group86" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group87" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            test</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group87" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group88" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            GENEL KULTUR</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group88" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        GEN<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group89" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            kkk</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group89" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group90" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Hindi</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group90" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group91" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            mathematics</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group91" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group92" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            physics</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group92" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group93" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            mycourse123</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group93" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Batch-01<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group94" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            aero</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group94" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        03<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group95" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Moudle 1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group95" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group96" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            shiv</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group96" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Shiva<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group97" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            AMEL-01</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group97" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Batch 01<br>Batch 02<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group98" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Maintenance Engineering</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group98" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Batch-05<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group99" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ghhjh</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group99" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group100" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            fgfggh</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group100" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group101" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            1st</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group101" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group102" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Spanish</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group102" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group103" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Java Training</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group103" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        JAVA TRAINEE A<br>Batch B<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group104" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Curso Basisco Completo</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group104" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group105" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            BBM3</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group105" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group106" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Computing History</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group106" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        warplab<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group107" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            CCC</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group107" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group108" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            FIRST STD</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group108" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        APPLE<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group109" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            JSS 1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group109" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        1ST Term<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group110" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            GHSUrdu</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group110" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        GHSBatch<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            NurseryGHS</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group111" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Nursery-Batch<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group112" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Mathametics</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group112" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        mn<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group113" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Test Course </a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group113" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group114" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Cpbara</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group114" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group115" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ELEVENTH-MATHS</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group115" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group116" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            test0001</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group116" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group117" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Au-test</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group117" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group118" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            asdfg</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group118" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group119" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            test0001777</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group119" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group120" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Database</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group120" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group121" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Cricket</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group121" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group122" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            KG</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group122" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group123" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            UKG</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group123" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        B<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group124" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            CDAC</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group124" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        CDAC<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group125" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            CDAC 2</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group125" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group126" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            TestCourse</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group126" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group127" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            bc</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group127" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group128" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            business_ the career</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group128" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        term 1.0<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group129" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            music_ the digital domain</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group129" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        term 1.0<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group130" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            music_ the video</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group130" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        term 1.0<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group131" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            business_ the market</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group131" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        term 1.0<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group132" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            JAVA</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group132" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        JAVA <br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group133" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            accp</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group133" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        9-11 AM<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group134" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Crafting</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group134" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group135" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            BCA</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group135" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group136" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            fvdfvdxfv</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group136" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group137" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            12</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group137" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Plus Two<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group138" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            12th</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group138" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>Plus Two<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group139" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            IT</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group139" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Diploma IT<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group140" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            yu867</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group140" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group141" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            pure english</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group141" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group142" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            islamiat</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group142" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group143" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            mca</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group143" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group144" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            sap</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group144" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        raghav<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group145" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            santosh</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group145" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group146" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            3 BLUE</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group146" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        3B<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group147" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            3 Pink</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group147" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        3P<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group148" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            3 GOLD</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group148" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        3G<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group149" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            BA-BA</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group149" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group150" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ec</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group150" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group151" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            English5</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group151" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group152" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            CA</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group152" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        EVE<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group153" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            dfasdfasdfasdfasdfaasdfasdfasdfasd</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group153" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group154" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            cn</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group154" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group155" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            tt</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group155" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group156" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            m.b.a</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group156" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group157" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            manikandan</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group157" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        kandhan<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group158" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ds</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group158" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group159" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Management</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group159" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group160" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            RKMorning</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group160" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        E0<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group161" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            BTECH</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group161" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        CS-A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group162" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            rtfg</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group162" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group163" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            course1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group163" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group164" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Commerce</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group164" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group165" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            heythisis</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group165" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        thisisbatch<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group166" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            class1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group166" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group167" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Bachelor of Science in Computer Science</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group167" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        BSCS2020<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group168" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            WOOD PRODUCTS</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group168" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group169" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            DIPLOMA</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group169" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        2016<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group170" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Bir</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group170" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group171" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            maths</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group171" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group172" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            lalaa_course</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group172" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        lalaa_Batch<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group173" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            bachelor in computer science</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group173" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group174" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            computer</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group174" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group175" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            M.Sc.IT</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group175" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        M.Sc.IT Semester-1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group176" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Afzal</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group176" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group177" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            thiru</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group177" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group178" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            thdsfsdf</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group178" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group179" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Bangla</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group179" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group180" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            1st standard</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group180" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        batch1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group181" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Data Entry</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group181" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        morning batch<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group182" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            kkka</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group182" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group183" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Accounting information system</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group183" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group184" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Class 1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group184" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Sec A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group185" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            MCApp</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group185" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        MCA01<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group186" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Electronics and Computer Tech.</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group186" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group187" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            10th</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group187" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group188" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            English Lesson</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group188" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        A<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group189" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Pathak School Demo</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group189" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        PSD-1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group190" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            PTS-1ST-MOR</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group190" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        PTS-1ST-MOR-A1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group191" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            PTS-02-MOR</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group191" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        PTS-02-C1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group192" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            PTS-03-MOR</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group192" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        PTS-03-C1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group193" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            PATHAK-CCE-TEST</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group193" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        CCE-PTK-01ST<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group194" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Unit Test 1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group194" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        2016-17<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group195" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Unit Test 2</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group195" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group196" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            english science</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group196" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group197" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            JKSC-CA-CPT</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group197" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        CPT_DEC16_REVISION<br>CPT_DEC16_FRESH<br>CPT_DEC16_KVKV<br>CPT_DEC16_SEN<br>CPT_DEC16_BHS<br>CPT_DEC16_PTS<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group198" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            JKSC-CA-IPCC</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group198" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        IPCC_MAY17_REGULAR<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group199" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Ahihihi</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group199" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group200" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Class 10</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group200" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Sec 10<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group201" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            qef</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group201" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group202" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            7th</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group202" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        7th-A<br>7th-B<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group203" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            tetet</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group203" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group204" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            5th class</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group204" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        2015-16<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group205" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Environment Management</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group205" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group206" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            vsd</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group206" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group207" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            C language</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group207" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                </div> 
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Fee category &amp; Fee sub category</h5>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-group panel-group-control content-group-lg">
                                                                                    <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1001" data-toggle="collapse" aria-expanded="true" class="">
                                                            COMPUTER TYPING</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse in" id="collapsible-control-group1001" aria-expanded="true">
                                                    <div class="panel-body">
                                                        garden<br>sports<br>firstone<br>college<br>klj<br>f1<br>nmvmn<br>hjhkjh<br>GA<br>abcd<br>test sub<br>testing<br>COMT01<br>COMT02<br>COMT03<br>COMT02<br>Keyboard<br>CT1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1002" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Transport</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1002" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        fffffff<br>late fee<br>tr<br>hugsgdf<br>Bus<br>vehicle<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1003" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            FeeCata</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1003" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        FeeSubCata<br>kjk<br>ABC<br>hhhh<br>dcca<br>aaaa<br>bvhj<br>fees<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1004" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Hostel </a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1004" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Hostel Monthly Fee<br>hst<br>rter<br>rter<br>hostel1<br>hostel2<br>hostel<br>hostel<br>hostel<br>hostel<br>hostel<br>hostel<br>hostel<br>hostel<br>hostel<br>hostel<br>hostel<br>ferterteter<br>Boys Hostel<br>New Hostel<br>New Hostel<br>Hostel monthly fee<br>gfhggh<br>fee<br>male hostel<br>male <br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1005" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Pension</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1005" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Pension Marzo<br>test<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1006" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            school</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1006" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        lab<br>term i<br>term 1<br>zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1007" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-07</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1007" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1008" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            tuition fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1008" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        tution<br>tuition fee<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1009" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Admission Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1009" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Libarary Fees <br>xbgdfg<br>Admission<br>stationary<br>acceptance<br>acceptance<br>sub fees<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1010" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Other Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1010" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Muree Trip<br>dd<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1011" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Transport</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1011" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        test Tranasport<br>cow<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1012" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Exam Fees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1012" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        ghff<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1013" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            transport</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1013" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        jghjgj<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1014" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Testing1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1014" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1015" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            school fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1015" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        term 1<br>school fee<br>cbse2nd<br>Transport Fee<br>school fees<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1016" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            activities</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1016" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        swimming<br>maankarate<br>sport<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1017" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1017" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        transport<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1018" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-01</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1018" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        optc<br>pondicherry<br>villupuram<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1019" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-2333</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1019" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1020" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-0265</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1020" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1021" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            HUM fees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1021" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1022" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            transport </a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1022" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1023" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Pramod</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1023" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Pramod-Sub<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1024" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-tha1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1024" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        gola ka mandir<br>valasaiyur<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1025" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            School Trip/Activity</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1025" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1026" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-321</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1026" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Kallapu<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1027" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Tution Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1027" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Monthly Fee<br>Nursy<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1028" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            fines</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1028" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1029" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Adminssion Fees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1029" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1030" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            sdfsd</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1030" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1031" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Tution Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1031" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Monthly Fee<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1032" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            555lk</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1032" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1033" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-111</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1033" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1034" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Testing Fee 2016</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1034" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Tuition Fee<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1035" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-420</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1035" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        dsnr<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1036" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-2654532kjim87 7</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1036" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1037" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            dshdhdshd</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1037" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1038" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            adasdas</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1038" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1039" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-RC123</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1039" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        koshami to vashali<br>sadar<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1040" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Fee Category</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1040" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1041" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            colleegefees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1041" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        collegefeees1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1042" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ATGFee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1042" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Atgfee1<br>atgfee2<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1043" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-101</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1043" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Almeena Street<br>???? ???????<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1044" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            sports</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1044" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1045" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Junior College</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1045" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        lab Fees<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1046" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-01</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1046" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1047" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-NH-18</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1047" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Jalandhar<br>tirupur<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1048" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Tuition Fees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1048" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1049" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Admission Fees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1049" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1050" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            1 tear</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1050" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1051" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            FeeCatgoryType1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1051" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        FCT1 Convenor<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1052" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-st</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1052" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1053" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            term fee </a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1053" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1054" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            rthgfnj</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1054" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1055" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            registration fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1055" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        registration Fee<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1056" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-12333</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1056" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1057" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            This is new</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1057" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        abcd<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1058" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-001</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1058" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        delhi<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1059" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            transport fees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1059" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        chennai<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1060" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1060" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1061" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            BOOK FEE</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1061" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        NOTE<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1062" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            BOOK FEE</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1062" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1063" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            acadasdasdd</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1063" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1064" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            YHPS Monthly Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1064" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Monthly<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1065" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            YHPS Monthly Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1065" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1066" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            admission feee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1066" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        admission feee1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1067" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ATS_TEST</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1067" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1068" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            holistic</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1068" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        full year<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1069" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-123</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1069" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1070" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            FIRST TERM</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1070" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        book fee<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1071" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Java Training</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1071" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        HTMl-SCRIPT-CSS<br>Database<br>Advacnce Java<br>Core Java<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1072" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            mama_catgeory</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1072" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        mama_category_111<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1073" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            myCategory</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1073" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        mySubCategory<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1074" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-RMG</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1074" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1075" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Monthly Fees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1075" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Monthly Fee<br>Monthly Fee<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1076" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Dev fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1076" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1077" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ssdaf</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1077" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1078" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            GHSAdmissionFee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1078" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        GHSAF<br>ddd<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1079" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-Test</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1079" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1080" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            tttii</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1080" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1081" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1081" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1082" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ001</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1082" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1083" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ003</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1083" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1084" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ004</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1084" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1085" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ005</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1085" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1086" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-11111</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1086" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1087" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-aaaaa</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1087" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1088" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-AAA</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1088" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1089" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-AAAA</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1089" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1090" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ006</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1090" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1091" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-sdfsdfsdfssdfsdf</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1091" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1092" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-LLLL</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1092" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1093" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-YYY</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1093" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1094" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-DDDD</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1094" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1095" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-AAAAAA</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1095" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1096" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ007</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1096" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1097" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ008</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1097" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1098" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ009</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1098" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1099" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ010</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1099" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1100" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ101</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1100" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1101" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ101</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1101" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1102" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ102</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1102" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1103" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ103</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1103" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1104" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ105</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1104" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1105" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ106</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1105" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1106" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ306</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1106" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1107" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ306</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1107" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1108" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ001</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1108" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1109" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-Noida123</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1109" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Noida-62 to Noida72<br>sddww<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1110" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-AAAAAAAAAA</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1110" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1111" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Examination</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1111" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Onam<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1112" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ADmission fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1112" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1113" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-333</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1113" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1114" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-abrama01</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1114" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        char rasta<br>mandir<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1115" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-S2M</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1115" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Magistrate Colony<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1116" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            School Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1116" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Transport Fee<br>Transport Fee<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1117" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-MPZ001</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1117" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1118" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-NH 10</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1118" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Maharaja Baag<br>LAW COLLEGE SQUARE<br>ABCD<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1119" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Transport Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1119" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Transport<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1120" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-B2M</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1120" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Boring Road to Magistrate Colony<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1121" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Alumini</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1121" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Rash<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1122" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-1234</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1122" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1123" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Papp1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1123" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        PA-Sub1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1124" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-R25</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1124" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1125" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-007</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1125" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        chait<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1126" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-01</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1126" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1127" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-01</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1127" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1128" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-35</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1128" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Toba<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1129" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-35</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1129" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1130" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Computer fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1130" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Computer Monthly fee<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1131" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            tuition fees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1131" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1132" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            MyFee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1132" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        MyFeeMonthly<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1133" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            sem11</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1133" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        main<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1134" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ghgghhhhhjj</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1134" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1135" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Admission</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1135" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1136" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Qqqqqqqqq</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1136" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Zzzzzzz<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1137" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            transport</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1137" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1138" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            hjuyuyuiui</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1138" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1139" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Registration Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1139" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        RF<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1140" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            transport</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1140" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1141" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            TUTION FEES Ex2016</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1141" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1142" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Cat_1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1142" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Sub_Cat_1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1143" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-3535</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1143" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1144" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            ADMISSION FEE</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1144" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        PTS-MG-001-ADMF<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1145" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            TERM FEE</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1145" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1146" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            TUTION FEE</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1146" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1147" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            TRANSPORTATION FEE</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1147" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1148" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            abcfdfd</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1148" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1149" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Semester Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1149" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Tution Fee<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1150" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            transport</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1150" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1151" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            bdfbdfb</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1151" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1152" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            chhaddo</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1152" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        not laine<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1153" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Monthy Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1153" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1154" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            testing</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1154" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1155" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            lalaa</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1155" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        lalaa_Sub<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1156" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            school</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1156" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1157" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Main fees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1157" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        sub main<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1158" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            exam fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1158" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        seminar1<br>seminar2<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1159" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            jayant</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1159" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1160" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Tution</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1160" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1161" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Hostel Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1161" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Hostel Fee For Boy<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1162" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-FBd-001</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1162" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Ballabhgarh<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1163" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            School Fees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1163" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1164" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-143</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1164" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        pardi<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1165" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-3535</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1165" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1166" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-3535</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1166" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1167" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-cccx</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1167" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1168" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            scolarite</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1168" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1169" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            sdfddfsdfdsf</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1169" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1170" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            school fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1170" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1171" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            school Fees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1171" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1172" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Tution Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1172" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Tuition Fee 7th<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1173" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-476457</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1173" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1174" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Admission FeeM</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1174" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        AdFeeM<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1175" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Tution FeeM</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1175" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        TuFM<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1176" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            comp12</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1176" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1177" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            goodFee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1177" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        verygoodfee<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1178" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Admission FeeM</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1178" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        AFMS<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1179" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            GHS.AF</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1179" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1180" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            GHS.AF</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1180" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        GAF<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1181" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            GHS.TF</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1181" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        GTF<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1182" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            GHS.EF</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1182" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        GEF<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1183" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            GHS.SF</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1183" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        GSF<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1184" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            photoshop</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1184" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1185" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Transport fees</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1185" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Tour fess<br>Tour fees<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1186" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-143</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1186" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1187" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            temp1</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1187" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        subtemp1<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1188" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Demo Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1188" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1189" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            fffgr</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1189" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1190" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            music</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1190" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1191" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            swiming</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1191" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1192" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Exam Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1192" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1193" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Tution Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1193" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        Tuition Fee Sub 7th<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1194" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Exam Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1194" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1195" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            JAdmission Fee</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1195" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        SJAdmission<br>                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1196" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-01</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1196" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1197" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-01</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1197" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                                                                            </div>
                                                </div>
                                            </div>
                                                                                        <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">
                                                        <a href="#collapsible-control-group1198" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                                            Trans-55</a>
                                                    </h6>
                                                </div>
                                                <div class="panel-collapse collapse" id="collapsible-control-group1198" aria-expanded="false" style="height: 0px;">
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
</form></div>

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
                                © 2015. Webschool by GESCIS Technologies Pvt Ltd. V3.0
                            </div>
                        </div>
                    </div>
                </div> 
            </div><!--contentinner-->
        </div>