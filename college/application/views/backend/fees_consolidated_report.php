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
            <li><a href="#">Reports</a></li>
            <li class="active">Fees Consolidated Report</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="student-form" action="/index.php/core/feesallocation/feesconsolidatedreport" method="post">

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Fees Consolidated Report</h4>
                </div>
                <div class="panel-body">

                    <div class="col-sm-12">
                        <div class="row col-sm-12">
                            <div class="form-group col-sm-3">
                                <label for="reg_input">Course</label>
                                <select class="form-control" name="Feesallocation[courseid]" id="Feesallocation_courseid">
<option value="">Select Course</option>
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
    <div id="classreport" style=""><div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Course Wise Report</h4>
                </div>
                <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="col-sm-6">
                    <div class="panel border-left-lg border-left-danger invoice-grid timeline-content">
                        <div class="panel-heading">
                            <h6 class="panel-title">Course Wise Total Fees</h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                   <li><i></i></li>
                                </ul>
                            </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
                        </div>
                        <div class="list-group-divider"></div>
                        <div class="panel-body">
    
        <meta charset="utf-8">
        <style>
            span.one3 {
                background-color:#48A4D1
            }
            .donut-inner {
                margin-top: -134px;
                margin-bottom:109px;
                margin-left: 163px;
            }
            .donut-inner h5 {
                margin-bottom: 5px;
                margin-top: 0;
                font-size: 14px;
            }
        </style>
    
    
                <span class="one3">
            &nbsp;&nbsp;&nbsp;</span>
        &nbsp;Total Fees  &nbsp;&nbsp;&nbsp;
        <canvas id="fees" width="461" height="265" style="width: 461px; height: 265px;"></canvas>
        <div class="donut-inner">
            <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Fees</h5>
        </div>
        <script src="/js/Chart.js"></script>
        <script>
            var pieData = [
                {
                    value: 0,
                    color: "#48A4D1",
                    label: 'Collected',
                    labelColor: 'white',
                    labelFontSize: '16',
                },
            ];
            // Get the context of the canvas element we want to select
            var countries = document.getElementById("fees").getContext("2d");
            new Chart(countries).Doughnut(pieData,{
                responsive: true, maintainAspectRatio: true});
        </script>
    
</div>
                </div>
                </div><div class="col-sm-6">
                    <div class="panel border-left-lg border-left-success invoice-grid timeline-content">
                        <div class="panel-heading">
                            <h6 class="panel-title">Paid/Unpaid Amount</h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                   <li> <i></i></li>
                                </ul>
                            </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
                        </div>
                        <div class="list-group-divider"></div>
                        <div class="panel-body">
    
        <meta charset="utf-8">
        <style>
            span.one1 {
                background-color:#4ACAB4
            }
            span.two2{
                background-color:#FF4D4D
            }
        </style>
    
    
                <span class="one1">
            &nbsp;&nbsp;&nbsp;</span>
        &nbsp;Unpaid  &nbsp;&nbsp;&nbsp;
        <span class="two2">&nbsp;&nbsp;&nbsp;</span>
        &nbsp;Paid 
        <canvas id="fees1" width="461" height="265" style="width: 461px; height: 265px;"></canvas>
        <script src="/js/Chart.js"></script>
        <script>
            var pieData = [
                {
                    value: 3000,
                    color: "#ff4d4d",
                    label: 'Paid',
                    labelColor: 'white',
                    labelFontSize: '16',
                },
                {
                    value:-3000,
                    label: "Unpaid",
                    color: "#4ACAB4"
                },
            ];
            // Get the context of the canvas element we want to select
            var countries = document.getElementById("fees1").getContext("2d");
            new Chart(countries).Pie(pieData,{
                responsive: true, maintainAspectRatio: true});
        </script>
    
</div>
                </div>
                </div>
            </div>
            </div><div class="row">
                    <div class="col-sm-12">
                            <div class="col-sm-12">
				<div class="panel border-left-lg border-left-primary invoice-grid timeline-content">
                                    <div class="panel-heading">
                                    <h6 class="panel-title">Batch Wise Fees Collection</h6>
				    <div class="heading-elements">
                                    <ul class="icons-list">
                                    <li> <i></i></li>
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
        <canvas id="myChart" width="944" height="354" style="width: 944px; height: 354px;"></canvas>
        <script>
            var attenData = {
                labels: ["Survival Document General English 1","Survival Document Intensive English 1","Survival Document Academic English 1","Survival Document Employability ENG 1"],
                datasets: [
                    {
                        fillColor: "rgba(199,209,214,0.2)",
                        strokeColor: "rgba(199,209,214,1)",
                        pointColor: "rgba(199,209,214,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(199,209,214,1)",
                        label: "Paid",
                        data: [3000,0,0,0],
                    },
                    {
                        fillColor: "rgba(105,203,248,0.2)",
                        strokeColor: "rgba(105,203,248,1)",
                        pointColor: "rgba(105,203,248,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(105,203,248,1)",
                        label: "Unpaid",
                        data: [-3000,0,0,0],
                    },
                ]
            }
            var atten = document.getElementById('myChart').getContext('2d');
            //atten.canvas.width = 500;
            atten.canvas.height = 150;
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
                url: "feesconsolidatedreport1",
                data: {courseid: $('#Feesallocation_courseid option:selected').val()},
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