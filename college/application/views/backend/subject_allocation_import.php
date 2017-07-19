<div class="content-wrapper">
                    <div class="content">

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

            <li><a href="#">Academic</a></li>

            <li><a href="#">Subjects</a></li>

            <li class="active">Subject Allocation Import</li>

        </ul>

         <ul class="breadcrumb-elements">

            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i>Support</a></li>

        </ul>

        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>

</div><br>

<div class="content">

    <form enctype="multipart/form-data" id="subject_allocation" action="/index.php/core/subjectallocation/subjectallocationimport" method="post">


     <div class="row">

        <div class="col-sm-6">

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h4 class="panel-title">Subject Allocation Import</h4>

                </div>

                <div class="panel-body">

                    
                    <div class="panel-body"><div id="overlaygif" style="display:none;"></div>

                        <div class="form-group">

                            <label for="reg_input_name" class="req">Browse File</label>

                            <input id="ytSubjectallocation_filea" type="hidden" value="" name="Subjectallocation[filea]"><input name="Subjectallocation[filea]" id="Subjectallocation_filea" type="file">


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

                                 Download the excel file format from below link and copy the below values in corresponding columns while filling excel sheet.
                               

                                <br>

                                <p class="form-control-static">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/img/subjectallocation.xlsx">Subject Allocation Format</a></p>

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

                                                        <a href="#collapsible-control-group11" data-toggle="collapse" aria-expanded="false" class="collapsed">

                                                            B.Scs</a>

                                                    </h6>

                                                </div>

                                                <div class="panel-collapse collapse" id="collapsible-control-group11" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        A<br>B<br>
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

                                                <div class="panel-collapse collapse" id="collapsible-control-group12" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        Batch A<br>as<br>
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

                                                <div class="panel-collapse collapse" id="collapsible-control-group13" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        Second Batch<br>
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

                                                <div class="panel-collapse collapse" id="collapsible-control-group14" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        A<br>
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

                                                <div class="panel-collapse collapse" id="collapsible-control-group15" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        batch 1<br>
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

                                                <div class="panel-collapse collapse" id="collapsible-control-group16" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        dfg<br>
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

                                                <div class="panel-collapse collapse" id="collapsible-control-group111" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        secA<br>
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

                                                <div class="panel-collapse collapse" id="collapsible-control-group112" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        secA<br>
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

                                                <div class="panel-collapse collapse" id="collapsible-control-group114" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        ABC<br>
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

                            <div class="panel panel-white">

                                <div class="panel-heading">

                                    <h5 class="panel-title">Department &amp; Employee Code</h5>

                                </div>

                                <div class="panel-body">

                                    <div class="panel-group panel-group-control content-group-lg">

                                        
                                            <div class="panel panel-white">

                                                <div class="panel-heading">

                                                    <h6 class="panel-title">

                                                        <a href="#collapsible-control-group1" data-toggle="collapse" aria-expanded="false" class="collapsed">

                                                            Computer</a>

                                                    </h6>

                                                </div>

                                                <div class="panel-collapse collapse" id="collapsible-control-group1" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        eDEM117 - Jai  Dev<br>
                                                    </div>

                                                </div>

                                            </div>

                                            
                                            <div class="panel panel-white">

                                                <div class="panel-heading">

                                                    <h6 class="panel-title">

                                                        <a href="#collapsible-control-group2" data-toggle="collapse" aria-expanded="false" class="collapsed">

                                                            Operator</a>

                                                    </h6>

                                                </div>

                                                <div class="panel-collapse collapse" id="collapsible-control-group2" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        
                                                    </div>

                                                </div>

                                            </div>

                                            
                                            <div class="panel panel-white">

                                                <div class="panel-heading">

                                                    <h6 class="panel-title">

                                                        <a href="#collapsible-control-group3" data-toggle="collapse" aria-expanded="false" class="collapsed">

                                                            Accounts</a>

                                                    </h6>

                                                </div>

                                                <div class="panel-collapse collapse" id="collapsible-control-group3" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        
                                                    </div>

                                                </div>

                                            </div>

                                            
                                            <div class="panel panel-white">

                                                <div class="panel-heading">

                                                    <h6 class="panel-title">

                                                        <a href="#collapsible-control-group4" data-toggle="collapse" aria-expanded="false" class="collapsed">

                                                            Faculty</a>

                                                    </h6>

                                                </div>

                                                <div class="panel-collapse collapse" id="collapsible-control-group4" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        eUIT011 - Daw Mya Mya <br>Trendz001 - Rekha Gupta  <br>eUIT010 - U Mg Mg <br>eDEM102 - waka  waka<br>
                                                    </div>

                                                </div>

                                            </div>

                                            
                                            <div class="panel panel-white">

                                                <div class="panel-heading">

                                                    <h6 class="panel-title">

                                                        <a href="#collapsible-control-group5" data-toggle="collapse" aria-expanded="false" class="collapsed">

                                                            Physics</a>

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

                                                            Faculty of Information Science</a>

                                                    </h6>

                                                </div>

                                                <div class="panel-collapse collapse" id="collapsible-control-group6" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        eUIT007 - Daw Khaing Khaing Htwe<br>eUIT004 - Daw Myint Myint Thein<br>eUIT006 - Daw Su  Su Htay<br>eUIT002 - Dr Ei Shwe Zin<br>eUIT001 - Dr Swe Zin Hlaing<br>
                                                    </div>

                                                </div>

                                            </div>

                                            
                                            <div class="panel panel-white">

                                                <div class="panel-heading">

                                                    <h6 class="panel-title">

                                                        <a href="#collapsible-control-group7" data-toggle="collapse" aria-expanded="false" class="collapsed">

                                                            Faculty of  Hardware </a>

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

                                                            Faculty of Computer Science</a>

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

                                                            Faculty of Mathematics </a>

                                                    </h6>

                                                </div>

                                                <div class="panel-collapse collapse" id="collapsible-control-group9" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        eUIT005 - Daw Khin Khin Oo<br>
                                                    </div>

                                                </div>

                                            </div>

                                            
                                            <div class="panel panel-white">

                                                <div class="panel-heading">

                                                    <h6 class="panel-title">

                                                        <a href="#collapsible-control-group10" data-toggle="collapse" aria-expanded="false" class="collapsed">

                                                            Faculty of Myanmar and English </a>

                                                    </h6>

                                                </div>

                                                <div class="panel-collapse collapse" id="collapsible-control-group10" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        eUIT003 - U Nay Lin Soe<br>eDEM106 - U Nay Lin Aung<br>
                                                    </div>

                                                </div>

                                            </div>

                                            
                                            <div class="panel panel-white">

                                                <div class="panel-heading">

                                                    <h6 class="panel-title">

                                                        <a href="#collapsible-control-group11" data-toggle="collapse" aria-expanded="false" class="collapsed">

                                                            Administration</a>

                                                    </h6>

                                                </div>

                                                <div class="panel-collapse collapse" id="collapsible-control-group11" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        eUIT009 - Daw Khin Ma Ma<br>eUIT0088 - Daw Saw Sandar Aye<br>
                                                    </div>

                                                </div>

                                            </div>

                                            
                                            <div class="panel panel-white">

                                                <div class="panel-heading">

                                                    <h6 class="panel-title">

                                                        <a href="#collapsible-control-group12" data-toggle="collapse" aria-expanded="false" class="collapsed">

                                                            xnbvn</a>

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

                                                            Computer Dep</a>

                                                    </h6>

                                                </div>

                                                <div class="panel-collapse collapse" id="collapsible-control-group13" aria-expanded="false" style="height: 0px;">

                                                    <div class="panel-body">

                                                        
                                                    </div>

                                                </div>

                                            </div>

                                            
                                    </div> 

                                </div>



                            </div>

                        </div>

                        <div class="col-sm-3">

                            <div class="panel panel-white">

                                <div class="panel-heading">

                                    <h5 class="panel-title">Subject</h5>

                                </div>

                                <div class="panel-body">

                                    <div class="form-group">2 - abc</div><div class="form-group">1 - abc</div><div class="form-group">4BIS-406 - Advanced Information System</div><div class="form-group">4BIS-401 - Business Information System and Analysis</div><div class="form-group">4BIS-404 - Business Process Management</div><div class="form-group">ch1 - chemistry</div><div class="form-group">4BIS-Eng - English</div><div class="form-group">4BIS-403 - Enterprise System and Risk Management</div><div class="form-group">03 - GK</div><div class="form-group">05 - Hindi</div><div class="form-group">h1 - history</div><div class="form-group">4BIS-402 - Introduction to Modelling and Analysis</div><div class="form-group">matmat - Mathematics 1</div><div class="form-group">02 - Maths</div><div class="form-group">04 - Science</div><div class="form-group">4BIS-405 - Software Quality Management</div>
                                </div>

                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </div>

    </div>

</form></div>





	

		
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