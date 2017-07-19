<div class="content-wrapper">
                    <div class="content">

		<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Transport</a></li>
            <li class="active">Fee Collection</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="transportfeecollection-form" action="/index.php/transport/transportfeecollection/create" method="post">    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Transport Fee Collection</h4>
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="form-group col-sm-3">
                            <label class="req">User Type</label>
                            <select class="form-control" data-required="true" name="Transportfeecollection[usertypeid]" id="Transportfeecollection_usertypeid">
<option value="" selected="selected">Select Type</option>
<option value="2">Employee</option>
</select>                            <div class="school_val_error" id="Transportfeecollection_usertypeid_em_" style="display:none"></div>                        </div>
                        <div class="form-group col-sm-3" id="course" style="display:none">
                            <label for="reg_input">Course</label>
                            <select class="form-control" name="Transportfeecollection[courseid]" id="Transportfeecollection_courseid">
<option value="">SelectCourse</option>
<option value="1">NINE </option>
<option value="2">STD 2</option>
<option value="9">BIS</option>
<option value="10">STD 3</option>
<option value="11">Trendz Abacus</option>
<option value="12">abc</option>
<option value="13">cvb</option>
<option value="14">bsc</option>
<option value="15">eea</option>
<option value="16">maths</option>
<option value="17">class1</option>
<option value="18">class3</option>
<option value="19">test</option>
<option value="20">test12</option>
<option value="21">mach</option>
<option value="22">test incase</option>
<option value="26">sss</option>
<option value="27">CE1</option>
<option value="29">SampleElectronics</option>
<option value="30">Java</option>
<option value="31">Ict</option>
<option value="32">MCA</option>
</select><div class="school_val_error" id="Transportfeecollection_courseid_em_" style="display:none"></div>                        </div>  
                        <div class="form-group col-sm-3" id="batch" style="display:none">
                            <label for="reg_input">Batch</label>
                            <select class="form-control" name="Transportfeecollection[batchid]" id="Transportfeecollection_batchid">
<option value="">SelectBatch</option>
</select><div class="school_val_error" id="Transportfeecollection_batchid_em_" style="display:none"></div>                        </div> 
                        <div class="form-group col-sm-3" id="student" style="display:none">
                            <label for="reg_input">Student</label>
                            <select class="form-control" name="Transportfeecollection[studentid]" id="Transportfeecollection_studentid">
<option value="">Select Student</option>
</select>                        </div>
                        <div class="form-group col-sm-3" id="department" style="display:none">
                            <label for="reg_input">Department</label>
                            <select class="form-control" name="Transportfeecollection[departmentid]" id="Transportfeecollection_departmentid">
<option value="">Select Department</option>
<option value="1">Computer</option>
<option value="2">Operator</option>
<option value="3">Accounts</option>
<option value="4">Faculty</option>
<option value="6">Physics</option>
<option value="7">Faculty of Information Science</option>
<option value="8">Faculty of  Hardware </option>
<option value="9">Faculty of Computer Science</option>
<option value="10">Faculty of Mathematics </option>
<option value="11">Faculty of Myanmar and English </option>
<option value="12">Administration</option>
<option value="13">xnbvn</option>
<option value="14">Computer Dep</option>
<option value="15">Comercial</option>
<option value="16">Arabe-Primaire</option>
<option value="17">Francais-Primaire</option>
<option value="18">FTronics</option>
<option value="19">Physical education</option>
</select><div class="school_val_error" id="Transportfeecollection_courseid_em_" style="display:none"></div>                        </div> 
                        <div class="form-group col-sm-3" id="employee" style="display:none">
                            <label for="reg_input">Employee</label>
                            <select class="form-control" name="Transportfeecollection[employeemasterid]" id="Transportfeecollection_employeemasterid">
<option value="">Select Employee</option>
</select>                        </div>
                    </div>
                    <div class="row" align="center">
                        <strong style="font-size: 16px">OR</strong>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-3" style="display:none;" id="autocompletestudent">
                            <label>Student</label>
                            <input class="form-control ui-autocomplete-input" id="student1" type="text" value="" name="student1" autocomplete="off"><input id="hidden-fieldstudent" name="output" type="hidden" value="">                        </div>
                        <div class="form-group col-sm-3" style="display:none;" id="autocompleteemployee">
                            <label>Employee</label>
                            <input class="form-control ui-autocomplete-input" id="employee1" type="text" value="" name="employee1" autocomplete="off"><input id="hidden-fieldemployee" name="output" type="hidden" value="">                        </div>
                        <div class="form-group col-sm-3">
                            <br>
                            <a href="javascript:getfeedetails()" class="btn btn-info">Go</a>
                        </div>
                    </div>
                    <div class="row" id="studentdetail" style="display:none">
                        <div class="col-sm-12">
                            <div class="panel panel-body">
                                <table align="center">
                                    <tbody id="studentdetails" style="font-size: 14px">

                                    </tbody>
                                </table>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-12">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="active"><a href="#tbb_a" data-toggle="tab">Fee Payment</a></li>
                <li class=""><a href="#tbb_b" data-toggle="tab">Paid Details</a></li>
            </ul><br>
            <div class="tab-content">
                <div class="tab-pane active" id="tbb_a">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Payment Window</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-responsive" id="finish_table" style="display:none">
                                                          <thead>
                                                       <tr><th width="14.28%">Route - Destination</th>
                                                        <th width="23.56%">Fees Type</th>
                                                        <th width="14.28%">Actual Amount</th>
                                                        <th width="14.28%">Amount to be paid</th>
                                                        <th width="14.28%">Fine</th>
                                                         <th width="14.28%">Discount</th>
                                                        <th width="5%">Select</th>
                                                        </tr></thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body" style="display:none" id="paymenttable">
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
                                    <div class="form-group col-sm-2" style="display:none" id="bankname">
                                        <label for="reg_input">Bank Name</label>
                                                <select class="form-control" name="bank_name" id="bank_name">
<option value="">Please Select</option>
<option value="SBI">SBI</option>
<option value="aaaaaaaaaaaaaa">aaaaaaaaaaaaaa</option>
<option value="Axis">Axis</option>
<option value="KBZ">KBZ</option>
<option value="dfgh">dfgh</option>
</select><div class="school_val_error" id="Transportfeecollection_bankid_em_" style="display:none"></div>                                    </div> 
                                    <div class="form-group col-sm-2" style="display:none" id="cheque_no">
                                        <label for="reg_input">Cheque No.</label>
                                        <input type="text" class="form-control" id="chequeno" name="chequeno">
                                    </div> 
                                    <div class="form-group col-sm-3" style="display:none" id="cheque_date">
                                        <label for="reg_input">Cheque Date</label>
                                        <input type="text" class="form-control pickadate picker__input" id="chequedate" name="chequedate" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="chequedate_root"><div class="picker" id="chequedate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="chequedate_table" title="Pick a year from the dropdown"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" disabled="" aria-controls="chequedate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2" selected="">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="chequedate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="chequedate_table" title="Go to the next month"> </div></div><table class="picker__table" id="chequedate_table" role="grid" aria-controls="chequedate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488047400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488133800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488220200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488306600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488393000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488479400000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488565800000" role="gridcell">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488652200000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488738600000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488825000000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488911400000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488997800000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489084200000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489170600000" role="gridcell">11</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489257000000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489343400000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489429800000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489516200000" role="gridcell">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489602600000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489689000000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489775400000" role="gridcell">18</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489861800000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489948200000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490034600000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490121000000" role="gridcell">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490207400000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1490293800000" role="gridcell" aria-activedescendant="true">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490380200000" role="gridcell">25</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490466600000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490553000000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490639400000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490725800000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490812200000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490898600000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1490985000000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491071400000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491157800000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491244200000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491330600000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491417000000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491503400000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491589800000" role="gridcell">8</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1490293800000" disabled="" aria-controls="chequedate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="chequedate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="chequedate">Close</button></div></div></div></div></div></div>
                                    </div> 
                                    <div class="form-group col-sm-3">
                                        <label for="reg_input">Remarks</label>
                                        <textarea class="form-control" id="remarks"></textarea>
                                    </div> 
                                    <div class="form-group col-sm-2"><br>
                                        <label for="reg_input"><b>Total Amount: <p id="totalamount" style="font-size: 16px"></p></b></label>
                                    </div>
                                    <div class="form-group col-sm-3"><br>
                                        <label for="reg_input"><span>Do you want receipt? &nbsp;&nbsp;&nbsp;<input type="checkbox" id="checkbox1" checked="checked"></span></label>
                                    </div>
                                     <div class="form-group col-sm-2">
                                        <label for="reg_input">Receipt No.</label>
                                                                                <input type="text" class="form-control" id="receiptno" value="3">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-2"><br>
                                        <p> &nbsp;&nbsp;<a href="javascript:savepayment()" class="btn btn-info">Make Payment</a> </p> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                <div class="tab-pane" id="tbb_b">
                    <div class="row">
                        <div class="col-sm-12" id="gridview">
                            <div class="panel panel-default" id="paidlist" style="display:none">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Paid List</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table responsive table-bordered table-striped" id="paid">
                                        <thead>
                                            <tr>
                                                <th data-hide="phone,tablet" width="20%">Route - Destination</th>
                                                <th data-hide="phone,tablet" width="20%">Amount</th>
                                                <th width="20%">Paid Date</th>
                                                <th width="20%">Fine</th>
                                                <th width="20%">Discount</th>
                                                <th width="20%">Remarks</th>
                                                <th width="20%"><a href="javascript:generatereceipt()" class="btn btn-danger">Generate Receipt</a></th>
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
    </form></div>
<script>
    $(document).ready(function () {
        var droplist = $('#Transportfeecollection_usertypeid');
        droplist.change(function () {
            if (droplist.val() === '1') {
                $("#autocompleteemployee").hide("slow");
                $("#employee").hide("slow");
                $("#department").hide("slow");
                $("#course").show("slow");
                $("#batch").show("slow");
                $("#student").show("slow");
                $("#autocompletestudent").show("slow");
            }
            if (droplist.val() === '2') {
                $("#autocompletestudent").hide("slow");
                $("#course").hide("slow");
                $("#batch").hide("slow");
                $("#student").hide("slow");
                $("#employee").show("slow");
                $("#department").show("slow");
                $("#autocompleteemployee").show("slow");
            }
        })
    });
    $(document).ready(function () {
        var droplist = $('#Transportfeecollection_studentid');
        droplist.change(function () {
           $('#finish_table tbody').empty();
            $('#studentlist tbody').empty();
            $('#paid tbody').empty();
            $('#studentdetails').empty();
              $.ajax({
                type: "POST",
                url: "studentdetails",
                data: {studentid: $('#Transportfeecollection_studentid option:selected').val()},
                dataType: "html",
                success: function (data) {
                  $('#studentdetails').append(data);
                    $('#studentdetail').show("slow");
                }
            });
            $.ajax({
                type: "POST",
                url: "feepopulatestudent",
                data: {courseid: $('#Transportfeecollection_courseid option:selected').val(), batchid: $('#Transportfeecollection_batchid option:selected').val(), studentid: $('#Transportfeecollection_studentid option:selected').val(), departmentid: $('#Transportfeecollection_departmentid option:selected').val(), employeemasterid: $('#Transportfeecollection_employeemasterid option:selected').val(), usertypeid: $('#Transportfeecollection_usertypeid option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#finish_table tbody').append(data);
                    $('#finish_table').show("slow");
                    $('#paymenttable').show("slow");
                    $.ajax({
                        type: "POST",
                        url: "paiddetails",
                        data: {courseid: $('#Transportfeecollection_courseid option:selected').val(), batchid: $('#Transportfeecollection_batchid option:selected').val(), studentid: $('#Transportfeecollection_studentid option:selected').val(), departmentid: $('#Transportfeecollection_departmentid option:selected').val(), employeemasterid: $('#Transportfeecollection_employeemasterid option:selected').val(), usertypeid: $('#Transportfeecollection_usertypeid option:selected').val()},
                        dataType: "html",
                        success: function (data) {
                            $('#paidlist').show("slow");
                            $('#paid tbody').append(data);
                        }
                    });
                }
            });
        })
    });
    $(document).ready(function () {
        var droplist = $('#Transportfeecollection_employeemasterid');
        droplist.change(function () {
            $('#finish_table tbody').empty();
            $('#studentlist tbody').empty();
            $('#paid tbody').empty();
            $('#studentdetails').empty();
//              $.ajax({
//                type: "POST",
//                url: "studentdetails",
//                data: {studentid: $('#Transportfeecollection_employeemasterid option:selected').val()},
//                dataType: "html",
//                success: function (data) {
//                  $('#studentdetails').append(data);
//                    $('#studentdetail').show("slow");
//                }
//            });
            $.ajax({
                type: "POST",
                url: "feepopulatestudent",
                data: {courseid: $('#Transportfeecollection_courseid option:selected').val(), batchid: $('#Transportfeecollection_batchid option:selected').val(), studentid: $('#Transportfeecollection_studentid option:selected').val(), departmentid: $('#Transportfeecollection_departmentid option:selected').val(), employeemasterid: $('#Transportfeecollection_employeemasterid option:selected').val(), usertypeid: $('#Transportfeecollection_usertypeid option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#finish_table tbody').append(data);
                    $('#finish_table').show("slow");
                    $('#paymenttable').show("slow");
                    $.ajax({
                        type: "POST",
                        url: "paiddetails",
                        data: {courseid: $('#Transportfeecollection_courseid option:selected').val(), batchid: $('#Transportfeecollection_batchid option:selected').val(), studentid: $('#Transportfeecollection_studentid option:selected').val(), departmentid: $('#Transportfeecollection_departmentid option:selected').val(), employeemasterid: $('#Transportfeecollection_employeemasterid option:selected').val(), usertypeid: $('#Transportfeecollection_usertypeid option:selected').val()},
                        dataType: "html",
                        success: function (data) {
                             $('#paidlist').show("slow");
                            $('#paid tbody').append(data);
                        }
                    });
                }
            });
        })
    });
    
    function getfeedetails() {
//        if(document.getElementById('hidden-fieldstudent').value === ""){
//            alert("Please select user");
//            return;
//        }else if(document.getElementById('hidden-fieldemployee').value === ""){
//            alert("Please select user");
//            return;
//        }
        $('#finish_table tbody').empty();
        $('#studentlist tbody').empty();
        $('#paid tbody').empty();
        $('#studentdetails').empty();
        $.ajax({
            type: "POST",
            url: "studentdetails",
            data: {studentname: document.getElementById('hidden-fieldstudent').value,employeename: document.getElementById('hidden-fieldemployee').value, usertypeid: $('#Transportfeecollection_usertypeid option:selected').val()},
            dataType: "html",
            success: function (data) {
                $('#studentdetails').append(data);
                $('#studentdetail').show("slow");
            }
        });
        $.ajax({
            type: "POST",
            url: "feepopulatestudent",
            data: {studentname: document.getElementById('hidden-fieldstudent').value,employeename: document.getElementById('hidden-fieldemployee').value, usertypeid: $('#Transportfeecollection_usertypeid option:selected').val()},
            dataType: "html",
            success: function (data) {
                $('#finish_table tbody').append(data);
                $('#finish_table').show("slow");
                $('#paymenttable').show("slow");
                $.ajax({
                    type: "POST",
                    url: "paiddetails",
                    data: {studentname: document.getElementById('hidden-fieldstudent').value,employeename: document.getElementById('hidden-fieldemployee').value, usertypeid: $('#Transportfeecollection_usertypeid option:selected').val()},
                    dataType: "html",
                    success: function (data) {
                        $('#paidlist').show("slow");
                        $('#paid tbody').append(data);
                    }
                });
            }
        });
    }

    $(document).ready(function () {
      
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
        var amount = 0;
        var fine = 0;
        var discount = 0;
        $('#finish_table tbody tr').each(function (row, tr) {
            if ($(this).find(":checkbox").prop("checked")) {
                amount += parseInt($(tr).find('td:eq(3) input').val());
                if ($(tr).find('td:eq(4) input').val() != "") {
                    fine += parseInt($(tr).find('td:eq(4) input').val());
                }
                if ($(tr).find('td:eq(5) input').val() != "") {
                    discount += parseInt($(tr).find('td:eq(5) input').val());
                }
            }
        });
        if (discount != "") {
            $('#totalamount').append(parseInt(fine) + parseInt(amount) - parseInt(discount));
        } else if (fine != "") {
            $('#totalamount').append(parseInt(fine) + parseInt(amount));
        } else {
            $('#totalamount').append(parseInt(amount));
        }
    });
       $('#remarks').change(function () {
        $('#totalamount').empty();
        var amount = 0;
        var fine = 0;
        var discount = 0;
        $('#finish_table tbody tr').each(function (row, tr) {
            if ($(this).find(":checkbox").prop("checked")) {
                amount += parseInt($(tr).find('td:eq(3) input').val());
                if ($(tr).find('td:eq(4) input').val() != "") {
                    fine += parseInt($(tr).find('td:eq(4) input').val());
                }
                if ($(tr).find('td:eq(5) input').val() != "") {
                    discount += parseInt($(tr).find('td:eq(5) input').val());
                }
            }
        });
        if (discount != "") {
            $('#totalamount').append(parseInt(fine) + parseInt(amount) - parseInt(discount));
        } else if (fine != "") {
            $('#totalamount').append(parseInt(fine) + parseInt(amount));
        } else {
            $('#totalamount').append(parseInt(amount));
        }
    });
    });
    function savepayment() {
        var studentname = document.getElementById('hidden-fieldstudent').value;
        var employeename = document.getElementById('hidden-fieldemployee').value;
        var studentid = $('#Transportfeecollection_studentid option:selected').val();
        var modeofpay = $('#modeofpay option:selected').val();
        var remarks = $('#remarks').val();
        var bankname = $('#bank_name option:selected').val();
        var chequeno = $('#chequeno').val();
        var chequedate = $('#chequedate').val();
        var receiptno = $('#receiptno').val();
        var usertypeid = $('#Transportfeecollection_usertypeid option:selected').val();
        var employeemasterid = $('#Transportfeecollection_employeemasterid option:selected').val();
        var courseid = $('#Transportfeecollection_courseid option:selected').val();
        var batchid = $('#Transportfeecollection_batchidoption:selected').val();
        var student = [];
        $('#finish_table tbody tr').each(function (row, tr) {
            if ($(this).find(":checkbox").prop("checked")) {
                var routedetailsid = $(tr).find('td:eq(0)').data('id');
                var feestype = $(tr).find('td:eq(1) option:selected').val();
                var amount = $(tr).find('td:eq(3) input').val();
                var fine = $(tr).find('td:eq(4) input').val();
                var discount = $(tr).find('td:eq(5) input').val();

                student.push(routedetailsid);
                student.push(feestype);
                student.push(amount);
                student.push(fine);
                student.push(discount);
            }
        });
         if (modeofpay === "") {
            alert("please select Payment mode");
            return;
        }
        if ($('#totalamount').text() === "" || $('#totalamount').text() === "0") {
            alert("please select checkbox");
            return;
        }
        var sendarray = JSON.stringify(student);
        $.ajax({
            type: "POST",
            url: "paymentdetailsforcollection",
            data: {batchid: batchid, courseid: courseid,receiptno: receiptno,chequedate: chequedate,sendarray: sendarray, studentid: studentid, studentname: studentname, remarks: remarks, modeofpay: modeofpay, employeename: employeename, chequeno: chequeno, bankname: bankname, usertypeid: usertypeid, employeemasterid: employeemasterid},
            dataType: "html",
            success: function (data) {
                if (data === "error") {
                    alert("Already Paid");
                } else {
                    $('#paid tbody').empty();
                    $.ajax({
                        type: "POST",
                        url: "paiddetails",
                        data: {studentname: document.getElementById('hidden-fieldstudent').value,employeename: document.getElementById('hidden-fieldemployee').value,courseid: $('#Transportfeecollection_courseid option:selected').val(), batchid: $('#Transportfeecollection_batchid option:selected').val(), studentid: $('#Transportfeecollection_studentid option:selected').val(), departmentid: $('#Transportfeecollection_departmentid option:selected').val(), employeemasterid: $('#Transportfeecollection_employeemasterid option:selected').val(), usertypeid: $('#Transportfeecollection_usertypeid option:selected').val()},
                        dataType: "html",
                        success: function (data) {
                             $('#paidlist').show("slow");
                            $('#paid tbody').append(data);
                        }
                    });
                    alert("Fees successfully paid");
                    if ($('#checkbox1').is(':checked')) {
                         var sendarray = JSON.stringify(data);
                        window.open("/index.php/transport/transportfeecollection/view/?transportfeecollectionid=" + sendarray);

                    }
                }
            }
        })
    }
    function generatereceipt() {
        var subid;
        var studentid = $('#Transportfeecollection_studentid option:selected').val();
        var employeemasterid = $('#Transportfeecollection_employeemasterid option:selected').val();
        $('#paid tbody tr').each(function (row, tr) {
            if ($(this).find(":checkbox").prop("checked")) {

                var transportfeecollectionid = $(tr).find('td:eq(0)').data('id');

                subid = subid + "," + transportfeecollectionid;
            }

        });
        var sendarray = JSON.stringify(subid);

        window.open("/index.php/transport/transportfeecollection/view2/?transportfeecollectionid=" + sendarray + "&studentid=" + studentid + "&employeemasterid=" + employeemasterid);

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