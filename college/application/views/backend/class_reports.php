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
<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Reports</a></li>
            <li class="active">Class Report</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i>Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="student-form" action="/index.php/core/student/classreport" method="post">

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Class Report</h4>
                </div>
                <div class="panel-body">

                    <div class="col-sm-12">
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-3">
                                <label for="reg_input">Course</label>
                                <select class="form-control" name="Student[courseid]" id="Student_courseid">
<option value="">SelectCourse</option>
<option value="1">STD 1</option>
<option value="2">STD 2</option>
<option value="3">Course1</option>
<option value="5">Survival Document</option>
<option value="6">Survival Passport</option>
<option value="7">Beginner Application</option>
<option value="10">bbbb</option>
<option value="14">a1</option>
<option value="15">a2</option>
<option value="16">English</option>
<option value="17">Grade 1</option>
<option value="18">dfgdfg</option>
<option value="19">dsfdsfd</option>
<option value="20">Class 1</option>
<option value="21">bca</option>
<option value="22">BS Computer Science</option>
<option value="23">BBsc</option>
</select>                            </div>  
                            <div class="form-group col-sm-3">
                                <label for="reg_input">Batch</label>
                                <select class="form-control" name="Student[batchid]" id="Student_batchid"><option value="">Select</option><option value="3">B1</option></select>                            </div>
                            <div class="form-group col-sm-2">
                                <label> &nbsp; &nbsp;</label>
                                <p> &nbsp;&nbsp;<a href="javascript:getreport()" class="btn btn-info" id="result_button">Get Report</a> </p> 
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
        
                        <div id="classreport" style="">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Class Report for &nbsp;Course1&nbsp;&nbsp;B1</h4>
                </div>
                <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="col-sm-6">
                    <div class="panel border-left-lg border-left-danger invoice-grid timeline-content">
                        <div class="panel-heading">
                            <h6 class="panel-title">Class Informations</h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                   <li class=" icon-info22" style="font-size:25px;"></li>
                                </ul>
                            </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
                        </div>
                        <div class="list-group-divider"></div>
                        <div class="panel-body"><ul class="list list-unstyled"><li>Number of Students : &nbsp;&nbsp;&nbsp;0</li><li>Total Subject Assigned: &nbsp;&nbsp;&nbsp;<span>1</span></li></ul>
            </div>
                    </div>
                </div>
                        <div class="col-sm-6">
                            <div class="panel border-left-lg border-left-success invoice-grid timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Class Teacher</h6>
                                    <div class="heading-elements">
                                     <ul class="icons-list">
                                      <li class=" icon-user" style="font-size:25px;"></li>
                                    </ul>
                                </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
                        </div>
                        <div class="list-group-divider"></div>
                        <div class="panel-body"><h6 class="text-semibold no-margin-top">NIL</h6>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                <div class="col-sm-6">
                    <div class="panel border-left-lg border-left-primary invoice-grid timeline-content">
                        <div class="panel-heading">
                            <h6 class="panel-title">Subjects And Teachers</h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                <li class="icon-book" style="font-size:25px;"></li>
                                </ul>
                            </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
                        </div>
                        <div class="list-group-divider"></div>
                        <div class="panel-body"><table>
                <tbody><tr>
                <th width="100px" style="font-weight: 900;">Subject Name</th>
                <th style="font-weight: 900;">Teacher</th>
                </tr><tr>
                <td>Cinema</td><td>kawalavenkateshprasad</td>
            </tr></tbody></table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                            <div class="panel border-left-lg border-left-danger invoice-grid timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Fees Allocation </h6>
                                    <div class="heading-elements">
                                     <ul class="icons-list">
                                      <li class=" icon-coin-dollar" style="font-size:25px;"></li>
                                    </ul>
                                </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
                        </div>
                        <div class="list-group-divider"></div>
                        <div class="panel-body"><table>
            <tbody><tr>
                <th colspan="2" style="font-weight: 900;"> Allocated Fees Sub category</th>
                <th></th>
            </tr><tr><td></td><td>MessFees</td></tr><tr><td></td><td>Tution1</td></tr><tr><td></td><td>TF</td></tr><tr><td></td><td>Primary</td></tr><tr><td></td><td>transportation custom</td></tr></tbody></table>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                <div class="col-sm-4">
                            <div class="panel border-left-lg border-left-success invoice-grid timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Fees Details</h6>
                                    <div class="heading-elements">
                                     <ul class="icons-list">
                                     <li class=" icon-pie-chart" style="font-size:25px;"></li>
                                    </ul>
                                </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
                        </div>
                        <div class="list-group-divider"></div>
                        <div class="panel-body">

    <meta charset="utf-8">

<style>
            span.one1 {
                background-color:#878BB6
            }
            span.two2{
                background-color:#4ACAB4
            }
        </style>

        
    <canvas id="fees" width="299" height="213" style="width: 299px; height: 213px;"></canvas>
    <script src="/js/Chart.js"></script>
        <script>
        var pieData = [
            {
                value: 3000,
                color:"#878BB6",
                label : 'Collected',
                labelColor : 'white',
                labelFontSize : '16',
            },
            {
                value :-3000,
                label:"Due",
                color : "#4ACAB4"
            },
            
        ];
        // Get the context of the canvas element we want to select
        var countries= document.getElementById("fees").getContext("2d");
        new Chart(countries).Pie(pieData,{
                responsive: true, maintainAspectRatio: true});
    </script>
    <br>
    <span class="one1">
            &nbsp;&nbsp;&nbsp;</span>
        &nbsp;Collected  &nbsp;&nbsp;&nbsp;
        <br>
        <br>
        <span class="two2">&nbsp;&nbsp;&nbsp;</span>
        &nbsp;Due 

   
                </div>
            </div>
        </div>
                            <div class="col-sm-8">
				<div class="panel border-left-lg border-left-danger invoice-grid timeline-content">
				<div class="panel-heading">
				<h6 class="panel-title">Fees Allocation Graph</h6>
				<div class="heading-elements">
                                <ul class="icons-list">
                                   <li class=" icon-graph" style="font-size:25px;"></li>
                                </ul>
				</div>
				<a class="heading-elements-toggle"><i class="icon-menu"></i></a>
				</div>
				<div class="list-group-divider"></div>
				<div class="panel-body">
    
        <meta charset="utf-8">
        <style>
            span.one {
                background-color:#E4E8EB
            }
            span.two{
                background-color:#69CBF8
            }
        </style>
    
    
                <script src="/js/Chart.js"></script>
        <span class="one">
            &nbsp;&nbsp;&nbsp;</span>
        &nbsp;Paid  &nbsp;&nbsp;&nbsp;
        <span class="two">&nbsp;&nbsp;&nbsp;</span>
        &nbsp;Unpaid 
        <canvas id="myChart" width="622" height="261" style="width: 622px; height: 261px;"></canvas>
        <script>
            var attenData = {
                labels: [],
                datasets: [
                    {
                        fillColor: "rgba(199,209,214,0.2)",
                        strokeColor: "rgba(199,209,214,1)",
                        pointColor: "rgba(199,209,214,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(199,209,214,1)",
                        label: "Paid",
                        data: [],
                    },
                    {
                        fillColor: "rgba(105,203,248,0.2)",
                        strokeColor: "rgba(105,203,248,1)",
                        pointColor: "rgba(105,203,248,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(105,203,248,1)",
                        label: "Unpaid",
                        data: [],
                    },
                ]
            }
            var atten = document.getElementById('myChart').getContext('2d');
            //atten.canvas.width = 500;
            atten.canvas.height = 168;
            new Chart(atten).Bar(attenData, {
                responsive: true, maintainAspectRatio: true,
//                        scaleOverride: true,
//                        scaleSteps : 10,
//                        scaleStepWidth: 50000,
//                        scaleStartValue: 0

            });
        </script>

    
</div>
	        </div>
		</div>
		</div>
                </div>
        </div>
        </div></div>
                    
    </form></div>
<script>
    function getreport()
    {
            $('#classreport').empty();
            $.ajax({
                type: "POST",
                url: "classreport1",
                data: {courseid: $('#Student_courseid option:selected').val(), batchid: $('#Student_batchid option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#classreport').show("slow");
                    $('#classreport').append(data);
                }
            });


        
    }
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