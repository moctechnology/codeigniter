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
            <li class="active">Fee Due Reports</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">

    <form id="feesallocation-form" action="/index.php/core/feesallocation/sendsmsalert" method="post">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Reports (School wise)</h4>
                </div>
                <div class="panel-body">
                                        <div class="form-group col-sm-3">
                        <label for="reg_input">Fees Category</label>
                        <select class="form-control" name="Feesallocation[feescategoryid11]" id="Feesallocation_feescategoryid11">
<option value="">Please Select</option>
<option value="1">Admission and class fee</option>
<option value="2">Hostel fees</option>
<option value="3">Exam Fee</option>
<option value="4">Trans-001</option>
<option value="7">Library Fees</option>
<option value="8">Certificate Fee</option>
<option value="11">Grade 1</option>
</select>                    </div>  
                    <div class="form-group col-sm-3">
                        <label for="reg_input">Fees Sub Category</label>
                        <select class="form-control" name="Feesallocation[feessubcategoryid11]" id="Feesallocation_feessubcategoryid11"><option value="">Select</option><option value="2">MessFees</option><option value="10">First fee sub category</option><option value="14">meal</option></select>                    </div>  
                    <!--                            <div class="form-group col-sm-3">
                                                    <label for="reg_input"></label>
                                                                    </div> -->
                    <div class="panel-footer1">
                        <div class="col-sm-12">
                            <div class="form-group" align="right">
                            <!--<button class="btn btn-info"></button>-->
                                                                    <a class="btn btn-info" href="#smsalert" data-toggle="modal">Send SMS Alert</a>
                                    <!--<a href="javascript:sendsmsalert()" class="btn btn-info"></a>-->
                                <input type="button" onclick="printDiv('print')" value="Print Report" class="btn btn-danger">
                                                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="smsalert">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">Confirmation</h4>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table>
                            <tbody><tr><td align="center">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="/img/withdrawal.png" width="50" alt="">
                                </td>
                                <td align="center">
                                    <h5 align="center">&nbsp;&nbsp;&nbsp;&nbsp;Are you sure to send sms to users?</h5>
                                </td></tr>
                        </tbody></table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info pull-right">OK</button>                    <!--<a href="javascript:withdrawal()" class="btn btn-primary"></a>-->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="print">
            <div class="col-sm-12" id="gridview111" style="">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" id="reporttitle1">Fee Due List of MessFees</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table responsive table-bordered table-striped footable" id="reportforunpaidlist">
                            <thead>
                                <tr>
                                    <th width="25">Sl.No</th>
                                    <th width="25">Student Admission.No</th>
                                    <th data-hide="phone,tablet" width="35">Student Name</th>
                                    <th data-hide="phone,tablet" width="15">Amount</th>
                                    <!--<th data-hide="phone,tablet" width="25"></th>-->
                                </tr>
                            </thead>
                            <tbody><tr><td>1</td><td>STUDNT2001`</td><td>???? ????? ??????</td><td>3000</td></tr><tr><td>2</td><td>DEM106</td><td>amit  sahu</td><td>3000</td></tr><tr><td>3</td><td>DEM105</td><td>As  </td><td>3000</td></tr><tr><td>4</td><td>DEM113</td><td>Deepak  Sharma</td><td>1500</td></tr><tr><td>5</td><td>DEM118</td><td>Deepak  Sharma</td><td>3000</td></tr><tr><td>6</td><td>DEM101</td><td>Divya S R</td><td>3000</td></tr><tr><td>7</td><td>DEM102</td><td>LAMHA   DHINGRA</td><td>1500</td></tr><tr><td>8</td><td>DEM107</td><td>Laxmi m mahajan</td><td>3000</td></tr><tr><td>9</td><td>DEM107</td><td>Laxmi m mahajan</td><td>3000</td></tr><tr><td>10</td><td>DEM1234</td><td>Nadeem  Ahmed</td><td>3000</td></tr><tr><td>11</td><td>DEM119</td><td>NADEEM AHMAD BHAT</td><td>3000</td></tr><tr><td>12</td><td>DEM112</td><td>Rajan  Kumar</td><td>3000</td></tr><tr><td>13</td><td>DEM110</td><td>rgfgd  </td><td>3000</td></tr><tr><td>14</td><td>DEM103</td><td>Siddharth  </td><td>3000</td></tr></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form></div>
<script>
                    $(document).ready(function () {         var droplist = $('#Feesallocation_feessubcategoryid11');
                    droplist.change(function () {
        $('#reportforunpaidlist tbody').empty();
    $.ajax({
        type: "POST",
            url: "duereports",
            data: {feescategoryid: $('#Feesallocation_feescategoryid11 option:selected').val(), feessubcategoryid: $('#Feesallocation_feessubcategoryid11 option:selected').val()},
            dataType: "html",
            success: function (data) {
            $('#reportforunpaidlist tbody').append(data);
    $('#gridview111').show();
                }
            });
        })
    });
    function sendsmsalert() {

        $.ajax({
            type: "POST",
            url: "sendsmsalert",
            data: {feescategoryid: $('#Feesallocation_feescategoryid11 option:selected').val(), feessubcategoryid: $('#Feesallocation_feessubcategoryid11 option:selected').val()},
    dataType: "html",
        success: function (data) {                 alert("Successfully send");
            }
        });
    }
        // function printDiv(divName) {
//        var divToPrint = document.getElementById(divName);
//           var popupWin = window.open('', '', 'width=300,height=300');
//           popupWin.document.open();
//           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
//            popupWin.document.close();
        //    }
    function printDiv(divName) {
        var divToPrint = document.getElementById(divName);
        var popupWin = window.open('', '', 'width=300,height=300');
        popupWin.document.open();
        //        popupWin.document.write('<html><body onload="window.print()"> <link href="/webschool/css/assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css"> <link href="/webschool/css/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">' + divToPrint.innerHTML + '</html>');
    popupWin.document.write('<html><body onload="window.print()">');
        popupWin.document.write('<link href="/css/assets/css/minified/ccebootstrap.min.css" rel="stylesheet" type="text/css">');
        popupWin.document.write('<link href="/css/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">');
        popupWin.document.write(divToPrint.innerHTML + '</html>');
        popupWin.document.close();
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