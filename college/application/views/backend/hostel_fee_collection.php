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
            <li><a href="#">Hostel</a></li>
            <li class="active">Fee Collection</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="hostelfeecollection-form" action="/index.php/hostel/hostelfeecollection/create" method="post">    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Fee Collection</h4>
                </div>
                <div class="panel-body">
                    <div class="form-group col-sm-4">
                        <label>User Type</label>
                        <select class="form-control" name="Hostelfeecollection[usertypeid]" id="Hostelfeecollection_usertypeid">
<option value="">Select Type</option>
<option value="1">Student</option>
<option value="2">Employee</option>
</select>                        <div class="school_val_error" id="Hostelfeecollection_usertypeid_em_" style="display:none"></div>                    </div>
                    <div class="form-group col-sm-4" id="studentautocomplete" style="">
                        <label>Student Name</label>
                        <input class="form-control ui-autocomplete-input" id="student" value="" name="student" autocomplete="off" type="text"><input id="hidden-fieldstudent" name="output" value="" type="hidden">                    </div> 
                    <div class="form-group col-sm-4" id="employeeautocomplete" style="display: none;">
                        <label>Employee Name</label>
                        <input class="form-control ui-autocomplete-input" id="employee" value="" name="employee" autocomplete="off" type="text"><input id="hidden-fieldemployee" name="output" value="" type="hidden">                    </div>
                    <div class="form-group col-sm-4">
                        <label>&nbsp;</label>
                        <p> &nbsp;&nbsp;<a href="javascript:userroomdetails()" class="btn btn-info">GO</a></p> 
                    </div>
                    <div class="form-group col-sm-12" id="roomdetails">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="active"><a href="#tbb_a" data-toggle="tab" aria-expanded="true">Fee Payment</a></li>
                <li class=""><a href="#tbb_b" data-toggle="tab" aria-expanded="false">Paid List</a></li>
            </ul>
            <h6 class="content-group text-semibold"></h6>
            <div class="tab-content">
                <div class="tab-pane active" id="tbb_a"> 
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Fee Payment</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Fee Type</label>
                                            <select class="form-control" multiple="multiple" name="Hostelfeecollection[hostelfeedatesid][]" id="Hostelfeecollection_hostelfeedatesid">
<option value="">Please Select</option>
</select>                                            <div class="school_val_error" id="Hostelfeecollection_hostelfeedatesid_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="reg_input_name">Amount</label>
                                            <input class="form-control" name="Hostelfeecollection[amount]" id="Hostelfeecollection_amount" maxlength="45" type="text">                                            <div class="school_val_error" id="Hostelfeecollection_amount_em_" style="display:none"></div>                
                                        </div> 
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="reg_input_name">Fine</label>
                                        <input class="form-control" name="Hostelfeecollection[fine]" id="Hostelfeecollection_fine" maxlength="45" type="text">                                        <div class="school_val_error" id="Hostelfeecollection_fine_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="reg_input_name">Discount</label>
                                        <input class="form-control" name="Hostelfeecollection[discount]" id="Hostelfeecollection_discount" maxlength="45" type="text">                                        <div class="school_val_error" id="Hostelfeecollection_discount_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="reg_input_name">Remarks</label>
                                        <textarea class="form-control" name="Hostelfeecollection[remarks]" id="Hostelfeecollection_remarks"></textarea>                                        <div class="school_val_error" id="Hostelfeecollection_remarks_em_" style="display:none"></div>                
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-2">
                                            <label for="reg_input">Mode of Pay</label>
                                            <select class="form-control" id="modeofpay">
                                                <option value="">-Select-</option>
                                                <option value="0">Cash</option>
                                                <option value="1">Cheque</option>
                                                <option value="2">Online Payment</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-2" style="display: none;" id="bankname">
                                            <label for="reg_input">Bank Name</label>
                                            <select class="form-control" data-required="true" id="bank_name" name="bank_name">
                                                <optgroup label="Indian Public Sector Banks">
                                                    <option value="Allahabad Bank">Allahabad Bank</option>
                                                    <option value="Andhra Bank">Andhra Bank</option>
                                                    <option value="Bank of Baroda">Bank of Baroda</option>
                                                    <option value="Bank of India">Bank of India</option>
                                                    <option value="Bank of Maharashtra">Bank of Maharashtra</option>
                                                    <option value="Canara Bank">Canara Bank</option>
                                                    <option value="Central Bank of India">Central Bank of India</option>
                                                    <option value="Corporation Bank">Corporation Bank</option>
                                                    <option value="Dena Bank">Dena Bank</option>
                                                    <option value="IDBI Bank Limited">IDBI Bank Limited</option>
                                                    <option value="Indian Bank">Indian Bank</option>
                                                    <option value="Indian Overseas Bank">Indian Overseas Bank</option>
                                                    <option value="IDBI Bank   Industrial Development Bank of India">IDBI Bank   Industrial Development Bank of India</option>
                                                    <option value="Oriental Bank of Commerce">Oriental Bank of Commerce</option>
                                                    <option value="Punjab &amp; Sind Bank">Punjab &amp; Sind Bank</option>
                                                    <option value="Punjab National Bank">Punjab National Bank</option>
                                                    <option value="State Bank of Bikaner and Jaipur">State Bank of Bikaner and Jaipur</option>
                                                    <option value="State Bank of Hyderabad">State Bank of Hyderabad</option>
                                                    <option value="State Bank of India">State Bank of India</option>
                                                    <option value="State Bank of Mysore">State Bank of Mysore</option>
                                                    <option value="State Bank of Patiala">State Bank of Patiala</option>
                                                    <option value="State Bank of Travancore">State Bank of Travancore</option>
                                                    <option value="Syndicate Bank">Syndicate Bank</option>
                                                    <option value="UCO Bank">UCO Bank</option>
                                                    <option value="Union Bank of India">Union Bank of India</option>
                                                    <option value="United Bank Of India">United Bank Of India</option>
                                                    <option value="Vijaya Bank">Vijaya Bank</option>
                                                </optgroup>
                                                <optgroup label="Indian Private Sector Banks">
                                                    <option value="Axis Bank">Axis Bank</option>
                                                    <option value="Catholic Syrian Bank Ltd.">Catholic Syrian Bank Ltd.</option>
                                                    <option value="IndusInd Bank Limited">IndusInd Bank Limited</option>
                                                    <option value="ICICI Bank">ICICI Bank</option>
                                                    <option value="ING Vysya Bank">ING Vysya Bank</option>
                                                    <option value="Kotak Mahindra Bank Limited">Kotak Mahindra Bank Limited</option>
                                                    <option value="Karnataka Bank">Karnataka Bank</option>
                                                    <option value="Karur Vysya Bank Limited">Karur Vysya Bank Limited.</option>
                                                    <option value="Tamilnad Mercantile Bank Ltd">Tamilnad Mercantile Bank Ltd.</option>
                                                    <option value="The Dhanalakshmi Bank Limited">The Dhanalakshmi Bank Limited.</option>
                                                    <option value="The Federal Bank Ltd">The Federal Bank Ltd.</option>
                                                    <option value="The HDFC Bank Ltd">The HDFC Bank Ltd.</option>
                                                    <option value="The Jammu &amp; Kashmir Bank Ltd">The Jammu &amp; Kashmir Bank Ltd.</option>
                                                    <option value="The Nainital Bank Ltd">The Nainital Bank Ltd.</option>
                                                    <option value="The Lakshmi Vilas Bank Ltd">The Lakshmi Vilas Bank Ltd</option>
                                                    <option value="Yes Bank">Yes Bank</option>
                                                </optgroup>
                                            </select>
                                        </div> 
                                        <div class="form-group col-sm-2" style="display: none;" id="cheque_no">
                                            <label for="reg_input">Cheque No.</label>
                                            <input class="form-control" id="chequeno" name="chequeno" type="text">
                                        </div> 
                                        <div class="form-group col-sm-3" style="display: none;" id="cheque_date">
                                            <label for="reg_input">Cheque Date</label>
                                            <input class="form-control pickadate picker__input" id="chequedate" name="chequedate" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="chequedate_root" type="text"><div class="picker" id="chequedate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="chequedate_table" title="Pick a year from the dropdown"><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option></select><select class="picker__select--month" disabled="" aria-controls="chequedate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10" selected="">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="chequedate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="chequedate_table" title="Go to the next month"> </div></div><table class="picker__table" id="chequedate_table" role="grid" aria-controls="chequedate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1477765800000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1477852200000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477938600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478025000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478111400000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478197800000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478284200000" role="gridcell">5</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478370600000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478457000000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478543400000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478629800000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478716200000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478802600000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478889000000" role="gridcell">12</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1478975400000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479061800000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479148200000" role="gridcell">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479234600000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479321000000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479407400000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479493800000" role="gridcell">19</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479580200000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479666600000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479753000000" role="gridcell">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479839400000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1479925800000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480012200000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480098600000" role="gridcell">26</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480185000000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480271400000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1480357800000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1480444200000" role="gridcell" aria-activedescendant="true">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480530600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480617000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480703400000" role="gridcell">3</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480789800000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480876200000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1480962600000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1481049000000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1481135400000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1481221800000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1481308200000" role="gridcell">10</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1480444200000" disabled="" aria-controls="chequedate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="chequedate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="chequedate">Close</button></div></div></div></div></div></div>
                                        </div>
                                        <div class="form-group col-sm-2"><br>
                                            <label for="reg_input"><b>Total Amount: <p id="totalamount" style="font-size: 16px"></p></b></label>
                                        </div>
                                        <div class="form-group col-sm-3"><br>
                                            <label for="reg_input"><span>Do you want receipt? &nbsp;&nbsp;&nbsp;<input id="checkbox1" checked="checked" type="checkbox"></span></label>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="reg_input">Receipt No.</label>
                                                                                        <input class="form-control" id="receiptno" value="1" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form_sep">
                                                <p> &nbsp;&nbsp;<a href="javascript:savepayment()" class="btn btn-info">Make Payment</a> </p> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tbb_b"> 
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Fee Paid List</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table responsive table-bordered table-striped" id="paid">
                                            <thead>
                                                <tr>
                                                    <th data-hide="phone,tablet" width="6.5%">Receipt No.</th>
                                                    <th data-hide="phone,tablet" width="18.5%">Hostel-Room</th>
                                                    <th data-hide="phone,tablet" width="12.5%">Amount</th>
                                                    <th width="12.5%">Paid Date</th>
                                                    <th width="12.5%">Fine</th>
                                                    <th width="12.5%">Discount</th>
                                                    <th width="12.5%">Remarks</th>
                                                    <!--<th width="12.5%"><a href="javascript:generatereceipt()" class="btn btn-danger">Generate Receipt</a></th>-->
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
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
<script>
    $("#Hostelfeecollection_usertypeid").change(function () {
        var str = "";
        str += $(this).val();
        if (str === '1') {
            $("#employeeautocomplete").hide("slow");
            $("#studentautocomplete").show("slow");
        }
        if (str === '2') {
            $("#studentautocomplete").hide("slow");
            $("#employeeautocomplete").show("slow");
        }
    });
    function userroomdetails() {
        $('#roomdetails').empty();
        $('#Hostelfeecollection_hostelfeedatesid').empty();
        $('#Hostelfeecollection_amount').empty();
        document.getElementById("Hostelfeecollection_amount").value = "";
        $.ajax({
            type: "POST",
            url: "userroomdetails",
            data: {studentname: document.getElementById('hidden-fieldstudent').value, employeename: document.getElementById('hidden-fieldemployee').value, usertypeid: $('#Hostelfeecollection_usertypeid option:selected').val()},
            dataType: "html",
            success: function (data) {
                $('#roomdetails').append(data);
            }
        });
        $.ajax({
            type: "POST",
            url: "fetchfeestype",
            data: {studentname: document.getElementById('hidden-fieldstudent').value, employeename: document.getElementById('hidden-fieldemployee').value, usertypeid: $('#Hostelfeecollection_usertypeid option:selected').val()},
            dataType: "html",
            success: function (data) {
                $('#Hostelfeecollection_hostelfeedatesid').append(data);
                $.ajax({
                    type: "POST",
                    url: "fetchamounttobepaid",
                    data: {studentname: document.getElementById('hidden-fieldstudent').value, employeename: document.getElementById('hidden-fieldemployee').value, usertypeid: $('#Hostelfeecollection_usertypeid option:selected').val()},
                    dataType: "html",
                    success: function (data) {
                        document.getElementById("Hostelfeecollection_amount").value = data;
                    }
                });
            }
        });
        $('#paid tbody').empty();
        $.ajax({
            type: "POST",
            url: "paiddetails",
            data: {usertypeid: $('#Hostelfeecollection_usertypeid option:selected').val(), studentname: document.getElementById('hidden-fieldstudent').value, employeename: document.getElementById('hidden-fieldemployee').value},
            dataType: "html",
            success: function (data) {
                $('#paidlist').show("slow");
                $('#paid tbody').append(data);
            }
        });

    }
    $('#modeofpay').change(function () {
        if ($('#modeofpay option:selected').val() === '1') {
            $('#bankname').show("slow");
            $('#cheque_no').show("slow");
            $('#cheque_date').show("slow");
        } else {
            $('#bankname').hide("slow");
            $('#cheque_no').hide("slow");
            $('#cheque_date').hide("slow");
        }

        $('#totalamount').empty();
        var amount = $('#Hostelfeecollection_amount').val();
        var fine = $('#Hostelfeecollection_fine').val();
        var discount = $('#Hostelfeecollection_discount').val();

        if (discount != "") {
            if (fine != "") {
                $('#totalamount').append(parseInt(amount) + parseInt(fine) - parseInt(discount));
            } else {
                $('#totalamount').append(parseInt(amount) - parseInt(discount));
            }
        } else if (fine != "") {
            if (discount != "") {
                $('#totalamount').append(parseInt(amount) + parseInt(fine) - parseInt(discount));
            } else {
                $('#totalamount').append(parseInt(amount) + parseInt(fine));
            }
        } else {
            $('#totalamount').append(parseInt(amount));
        }
    });
    $(document).ready(function () {
        $("#Hostelfeecollection_amount").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode == 65 &amp;&amp; (e.ctrlKey === true || e.metaKey === true)) ||
                            // Allow: home, end, left, right, down, up
                                    (e.keyCode &gt;= 35 &amp;&amp; e.keyCode &lt;= 40)) {
                        // let it happen, don't do anything
                        return;
                    }
                    // Ensure that it is a number and stop the keypress
                    if ((e.shiftKey || (e.keyCode &lt; 48 || e.keyCode &gt; 57)) &amp;&amp; (e.keyCode &lt; 96 || e.keyCode &gt; 105)) {
                        e.preventDefault();
                    }
                });
    });
    $(document).ready(function () {
        $("#Hostelfeecollection_fine").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode == 65 &amp;&amp; (e.ctrlKey === true || e.metaKey === true)) ||
                            // Allow: home, end, left, right, down, up
                                    (e.keyCode &gt;= 35 &amp;&amp; e.keyCode &lt;= 40)) {
                        // let it happen, don't do anything
                        return;
                    }
                    // Ensure that it is a number and stop the keypress
                    if ((e.shiftKey || (e.keyCode &lt; 48 || e.keyCode &gt; 57)) &amp;&amp; (e.keyCode &lt; 96 || e.keyCode &gt; 105)) {
                        e.preventDefault();
                    }
                });
    });
    $(document).ready(function () {
        $("#Hostelfeecollection_discount").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode == 65 &amp;&amp; (e.ctrlKey === true || e.metaKey === true)) ||
                            // Allow: home, end, left, right, down, up
                                    (e.keyCode &gt;= 35 &amp;&amp; e.keyCode &lt;= 40)) {
                        // let it happen, don't do anything
                        return;
                    }
                    // Ensure that it is a number and stop the keypress
                    if ((e.shiftKey || (e.keyCode &lt; 48 || e.keyCode &gt; 57)) &amp;&amp; (e.keyCode &lt; 96 || e.keyCode &gt; 105)) {
                        e.preventDefault();
                    }
                });
    });

    function savepayment() {
        var usertypeid = $('#Hostelfeecollection_usertypeid option:selected').val();
        var studentname = document.getElementById('hidden-fieldstudent').value;
        var employeename = document.getElementById('hidden-fieldemployee').value;
        var modeofpay = $('#modeofpay option:selected').val();
        var bankname = $('#bank_name option:selected').val();
        var chequeno = $('#chequeno').val();
        var chequedate = $('#chequedate').val();
        var remarks = $('#Hostelfeecollection_remarks').val();
        var receiptno = $('#receiptno').val();
        var amount = $('#Hostelfeecollection_amount').val();
        var fine = $('#Hostelfeecollection_fine').val();
        var discount = $('#Hostelfeecollection_discount').val();


        if (modeofpay === "") {
            alert("please select Payment mode");
            return;
        }
        if (amount === "") {
            alert("please enter amount");
            return;
        }

        var fld = document.getElementById('Hostelfeecollection_hostelfeedatesid');
        var hostelfeedatesids = [];
        var feetype = "";
        for (var i = 0; i &lt; fld.options.length; i++) {
            if (fld.options[i].selected) {
                hostelfeedatesids.push(fld.options[i].value);
                feetype = '1';
            }
        }
        if (feetype === "") {
            alert("please select fees type");
            return;
        }
        $.ajax({
            type: "POST",
            url: "paymentdetailsforcollection",
            data: {amount: amount, usertypeid: usertypeid, hostelfeedatesids: hostelfeedatesids, discount: discount, fine: fine, employeename: employeename, remarks: remarks, modeofpay: modeofpay, bankname: bankname, chequeno: chequeno, chequedate: chequedate, studentname: studentname, receiptno: receiptno},
            dataType: "html",
            success: function (data) {
                if (data === "error") {
                    alert("Already Paid");
                } else {
                    $('#paid tbody').empty();
                    $.ajax({
                        type: "POST",
                        url: "paiddetails",
                        data: {usertypeid: $('#Hostelfeecollection_usertypeid option:selected').val(), studentname: document.getElementById('hidden-fieldstudent').value, employeename: document.getElementById('hidden-fieldemployee').value},
                        dataType: "html",
                        success: function (data) {
                            $('#paidlist').show("slow");
                            $('#paid tbody').append(data);
                        }
                    });
                    alert("Fees successfully paid");
                    if ($('#checkbox1').is(':checked')) {
                        var sendarray = JSON.stringify(data);
                        window.open("/index.php/hostel/hostelfeecollection/view/?feeid=" + sendarray);
                    }
                    location.reload();
                }
            }
        });
    }
    function generatereceipt() {
        var subid;
        $('#paid tbody tr').each(function (row, tr) {
            if ($(this).find(":checkbox").prop("checked")) {
                var hostelfeecollectionid = $(tr).find('td:eq(0)').data('id');
                subid = subid + "," + hostelfeecollectionid;
            }
        });
        var sendarray = JSON.stringify(subid);
        window.open("/index.php/hostel/hostelfeecollection/view2/?feeid=" + sendarray);
    }
    function deletefee() {
        var students = [];
        var check = "";
        $('#paid tbody tr').each(function (row, tr) {
            if ($(this).find(":checkbox").prop("checked")) {
                var hostelfeecollectionid = $(tr).find('td:eq(0)').data('id');
                students.push(hostelfeecollectionid);
                check = '1';
            }
        });
        var sendarray = JSON.stringify(students);
        if (check === "") {
            alert("Please Select Checkbox");
            return;
        } else {
            var result = confirm("Want to delete?");
            if (result) {
                $.ajax({
                    type: "POST",
                    url: "deletefees",
                    data: {sendarray: sendarray},
                    dataType: "html",
                    success: function (data) {
                        alert("Successfully deleted");
                        $('#paid tbody').empty();
                        $.ajax({
                            type: "POST",
                            url: "paiddetails",
                            data: {usertypeid: $('#Hostelfeecollection_usertypeid option:selected').val(), studentname: document.getElementById('hidden-fieldstudent').value, employeename: document.getElementById('hidden-fieldemployee').value},
                            dataType: "html",
                            success: function (data) {
                                $('#paidlist').show("slow");
                                $('#paid tbody').append(data);
                            }
                        });
                    }
                });
            }
        }
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