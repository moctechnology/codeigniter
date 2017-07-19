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
<style>
    .error{
        color:red;
    }
</style>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Student</a></li>
            <li class="active">Student Roll Number</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="student_rollno" action="/index.php/core/student/student_rollno" method="post">    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Student Roll Number</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-3">
                                <label for="reg_input">Course</label>
                                <select class="form-control" name="Student[courseid]" id="Student_courseid">
<option value="">SelectCourse</option>
<option value="1">java</option>
<option value="2">PREP</option>
<option value="9">STD I</option>
<option value="10">STD II</option>
<option value="11">STD III</option>
<option value="12">STD IV</option>
<option value="14">STD V</option>
<option value="17">STD VI</option>
<option value="18">STD VII</option>
<option value="20">STD IX</option>
<option value="27">STD X</option>
<option value="29">SampleElectronics</option>
<option value="30">STD XI</option>
<option value="33">Class 10</option>
<option value="34">Grade 1</option>
<option value="35">Inter</option>
<option value="41">STD XII</option>
<option value="43">BCA</option>
<option value="44">WHEELCHAIR</option>
<option value="45">24 Hour </option>
<option value="46">web</option>
<option value="47">test</option>
<option value="48">aa</option>
<option value="50">10TH</option>
<option value="51">STD-10</option>
<option value="52">C10</option>
<option value="53">9th</option>
<option value="54">test 12</option>
<option value="55">8th</option>
<option value="56">7th</option>
<option value="57">a122</option>
<option value="58">norsk</option>
<option value="59">10 Classe</option>
<option value="60">123</option>
<option value="61">sa as as as</option>
<option value="62">Economics</option>
<option value="63">dd</option>
<option value="64">MCA</option>
<option value="65">IT</option>
<option value="66">Dynamic Workplace Readiness</option>
<option value="67">MMBA</option>
<option value="68">Primary Section</option>
<option value="69">english1</option>
<option value="71">science</option>
<option value="72">std 10</option>
<option value="73">std 11</option>
<option value="74">Class I</option>
<option value="75">falssafa</option>
<option value="76">Computer Science</option>
<option value="77">Sixth</option>
<option value="78">php</option>
<option value="79">M.B.A</option>
<option value="80">Aba</option>
<option value="81">EGITIM</option>
<option value="82">Zaks</option>
<option value="83">bsc.it</option>
<option value="84">asdasdasd</option>
<option value="85">vg</option>
<option value="86">Software Engineering</option>
<option value="87">baby</option>
<option value="88">Number</option>
<option value="89">Social</option>
<option value="90">BE</option>
<option value="91">Janata Bank</option>
<option value="92">Bvs Nursery</option>
<option value="93">STD X11</option>
<option value="94">b.tech</option>
<option value="95">Drawing</option>
<option value="96">Class3</option>
<option value="97">islam</option>
<option value="98">ll</option>
<option value="99">BVS X Class</option>
<option value="100">cse</option>
<option value="101">dsfdgd</option>
<option value="102">june</option>
<option value="103">ntt</option>
<option value="104">navin</option>
<option value="105">Fundamentos Biblicos</option>
<option value="106">Fundamentos del Ministerio</option>
<option value="107">Desarrollo del Liderazgo</option>
<option value="108">sdfsf</option>
<option value="109">Class 1</option>
<option value="110">III</option>
<option value="111">cpu</option>
<option value="112">Hifz</option>
<option value="113">business</option>
<option value="114">fsadfas</option>
<option value="115">Computer graphic</option>
<option value="116">b-tech</option>
<option value="117">MBA</option>
<option value="118">BBA</option>
</select>                            </div>  
                            <div class="form-group col-sm-3">
                                <label for="reg_input">Batch</label>
                                <select class="form-control" name="Student[batchid]" id="Student_batchid"><option value="">Select</option><option value="2">Batch A</option><option value="18">as</option><option value="60">wwe</option></select>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-sm-12" id="gridview">
            <div class="panel panel-default" id="enterrollno">
                <div class="panel-heading">
                    <h4 class="panel-title">Enter Marks</h4>
                </div>
                               <div class="table-responsive">
                    <table class="table responsive table-bordered table-striped footable" id="viewstudent">
                        <thead>
                            <tr>
                                <th width="25%">SL No.</th>
                                <th width="25%">Student Admission.No</th>
                                <th data-hide="phone,tablet" width="25%">Student Name</th>
                                <th data-hide="phone,tablet" width="25%">Student Roll Number</th>
                            </tr>
                        </thead>
                        <tbody><tr><td>1</td><td data-id="121">DEM195</td><td>navin  jhajharia</td><td><input type="text" name="mark" class="form-control" value="21" <="" td=""></td></tr><tr><td>2</td><td data-id="114">DEM188</td><td>Shamim Samad Uddin</td><td><input type="text" name="mark" class="form-control" value="101" <="" td=""></td></tr><tr><td>3</td><td data-id="79">DEM153</td><td>sooraj   sabu</td><td><input type="text" name="mark" class="form-control" value="12" <="" td=""></td></tr></tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <p>&nbsp;&nbsp;<a href="javascript:saverollnumber();" class="btn btn-info" align="right">Save</a></p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form></div>
<script>
    $(document).ready(function () {
        var droplist = $('#Student_batchid');
        droplist.change(function () {
            $('#viewstudent tbody').empty();
            $.ajax({
                type: "POST",
                url: "viewstudent",
                data: {courseid: $('#Student_courseid option:selected').val(), batchid: $('#Student_batchid option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#viewstudent tbody').append(data);
                    $('#enterrollno').show("slow");
                }
            });
        })
    });
    function saverollnumber()
    {
        var rollnos = [];
        $('#viewstudent tbody tr').each(function (row, tr) {
            var studentid = $(tr).find('td:eq(1)').data('id');
            var rollno = $(tr).find('td:eq(3) input').val();
           if (rollno === "") {
            } else {
                rollnos.push(studentid);
                rollnos.push(rollno);
            }
        });
        var sendarray = JSON.stringify(rollnos);
        $.ajax({
            type: "POST",
            url: "saverollno",
            data: {sendarray: sendarray, courseid: $('#Student_courseid option:selected').val(), batchid: $('#Student_batchid option:selected').val()},
            dataType: "html",
            success: function (data) {
                alert("successfully entered roll numbers");
                location.reload();
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