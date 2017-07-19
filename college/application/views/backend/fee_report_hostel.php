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
            <li class="active">Fee Reports</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">

    <form id="hostelfeecollection-form" action="/index.php/hostel/hostelfeecollection/feereport" method="post">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Fee Reports</h4>
                </div>
                <div class="panel-body">

                    <div class="form-group col-sm-3">
                        <div data-date-format="yyyy-mm-d" class="input-group date ebro_datepicker validating">
                            <input maxlength="45" class="form-control pickadate picker__input" placeholder="From Date" name="Hostelfeecollection[startdate]" id="Hostelfeecollection_startdate" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Hostelfeecollection_startdate_root" type="text"><div class="picker" id="Hostelfeecollection_startdate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" aria-controls="Hostelfeecollection_startdate_table" title="Pick a year from the dropdown" disabled="disabled"><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option></select><select class="picker__select--month" aria-controls="Hostelfeecollection_startdate_table" title="Pick a month from the dropdown" disabled="disabled"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10" selected="">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Hostelfeecollection_startdate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Hostelfeecollection_startdate_table" title="Go to the next month"> </div></div><table class="picker__table" id="Hostelfeecollection_startdate_table" role="grid" aria-controls="Hostelfeecollection_startdate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1477765800000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1477852200000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477938600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478025000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1478111400000" role="gridcell" aria-selected="true" aria-activedescendant="true">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478197800000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478284200000" role="gridcell">5</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478370600000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478457000000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478543400000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478629800000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478716200000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478802600000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478889000000" role="gridcell">12</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478975400000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479061800000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479148200000" role="gridcell">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479234600000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479321000000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479407400000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479493800000" role="gridcell">19</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479580200000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479666600000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479753000000" role="gridcell">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479839400000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479925800000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480012200000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480098600000" role="gridcell">26</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480185000000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480271400000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480357800000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today" data-pick="1480444200000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480530600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480617000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480703400000" role="gridcell">3</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480789800000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480876200000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480962600000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1481049000000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1481135400000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1481221800000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1481308200000" role="gridcell">10</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1480444200000" aria-controls="Hostelfeecollection_startdate" disabled="disabled">Today</button><button class="picker__button--clear" type="button" data-clear="1" aria-controls="Hostelfeecollection_startdate" disabled="disabled">Clear</button><button class="picker__button--close" type="button" data-close="true" aria-controls="Hostelfeecollection_startdate" disabled="disabled">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Hostelfeecollection_startdate_em_" style="display:none"></div>                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                        </div>
                    </div>
                    <div class="form-group col-sm-3">
                        <div data-date-format="yyyy-mm-d" class="input-group date ebro_datepicker validating">
                            <input maxlength="45" class="form-control pickadate picker__input" placeholder="End Date" name="Hostelfeecollection[enddate]" id="Hostelfeecollection_enddate" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Hostelfeecollection_enddate_root" type="text"><div class="picker" id="Hostelfeecollection_enddate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" aria-controls="Hostelfeecollection_enddate_table" title="Pick a year from the dropdown" disabled="disabled"><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option></select><select class="picker__select--month" aria-controls="Hostelfeecollection_enddate_table" title="Pick a month from the dropdown" disabled="disabled"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10" selected="">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Hostelfeecollection_enddate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Hostelfeecollection_enddate_table" title="Go to the next month"> </div></div><table class="picker__table" id="Hostelfeecollection_enddate_table" role="grid" aria-controls="Hostelfeecollection_enddate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1477765800000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1477852200000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477938600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1478025000000" role="gridcell" aria-selected="true" aria-activedescendant="true">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478111400000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478197800000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478284200000" role="gridcell">5</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478370600000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478457000000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478543400000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478629800000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478716200000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478802600000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478889000000" role="gridcell">12</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478975400000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479061800000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479148200000" role="gridcell">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479234600000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479321000000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479407400000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479493800000" role="gridcell">19</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479580200000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479666600000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479753000000" role="gridcell">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479839400000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479925800000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480012200000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480098600000" role="gridcell">26</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480185000000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480271400000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480357800000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today" data-pick="1480444200000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480530600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480617000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480703400000" role="gridcell">3</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480789800000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480876200000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480962600000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1481049000000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1481135400000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1481221800000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1481308200000" role="gridcell">10</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1480444200000" aria-controls="Hostelfeecollection_enddate" disabled="disabled">Today</button><button class="picker__button--clear" type="button" data-clear="1" aria-controls="Hostelfeecollection_enddate" disabled="disabled">Clear</button><button class="picker__button--close" type="button" data-close="true" aria-controls="Hostelfeecollection_enddate" disabled="disabled">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Hostelfeecollection_enddate_em_" style="display:none"></div>                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                        </div>
                    </div>
                    <div class="form-group col-sm-3 validating">
                        <select class="form-control" name="Hostelfeecollection[reportof]" id="Hostelfeecollection_reportof">
<option value="">Select Type</option>
<option value="1">Paid List</option>
<option value="2">Due List</option>
</select>                        <div class="school_val_error" id="Hostelfeecollection_reportof_em_" style="display:none"></div>                    </div>
                    <div class="col-sm-3">
                        <a href="javascript:paidreport();" class="btn btn-info">Go</a>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group" align="right">
                            <input onclick="printDiv('print')" value="Print Report" class="btn btn-danger" type="button">
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
        <div id="print1">
            <div class="col-sm-12" id="gridview111" style="">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" id="reporttitle1">Fee Reports</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table responsive table-bordered table-striped" id="reportforpaidlist"><thead><tr><th>User Type</th><th>User</th><th>Room No.</th><th>Fee Type</th><th>Amount</th><th>Fine</th><th>Discount</th><th>Paid Date</th></tr></thead><tbody><tr><td colspan="7" align="right"><b>Total Amount</b></td><td><b>0</b></td></tr></tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form></div>
<script>

    function paidreport() {
        $('#reportforpaidlist').empty();
        var startdate = $('#Hostelfeecollection_startdate').val();
        var enddate = $('#Hostelfeecollection_enddate').val();
         var reportof = $('#Hostelfeecollection_reportof option:selected').val();
        $.ajax({
            type: "POST",
            url: "feepaidduereports",
            data: {startdate: startdate, enddate: enddate, reportof: reportof},
            dataType: "html",
            success: function (data) {
                $('#reportforpaidlist').append(data);
                $('#gridview111').show();

            }
        });
    }

    $(document).ready(function () {
        var droplist = $('#Feesallocation_feestype11');
        droplist.change(function () {
            $('#reportforunpaidlist tbody').empty();
            $.ajax({
                type: "POST",
                url: "duereports",
                data: {feescategoryid: $('#Feesallocation_feescategoryid11 option:selected').val(), feessubcategoryid: $('#Feesallocation_feessubcategoryid11 option:selected').val(), feestype: $('#Feesallocation_feestype11 option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#reportforunpaidlist tbody').append(data);
                    $('#gridview111').show();

                }
            });
        })
    });
    function printDiv(divName) {
        var divToPrint = document.getElementById(divName);
        var popupWin = window.open('', '', 'width=300,height=300');
        popupWin.document.open();
        popupWin.document.write('&lt;html&gt;&lt;body onload="window.print()"&gt;' + divToPrint.innerHTML + '&lt;/html&gt;');
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
                                &copy; 2015. Webschool by GESCIS Technologies Pvt Ltd. V3.0
                            </div>
                        </div>
                    </div>
                </div>