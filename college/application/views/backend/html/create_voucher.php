<div class="maincontent">

        	<div class="contentinner">
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
            <li><a href="#">Finance</a></li>
            <li><a href="#">Accounting</a></li>
            <li class="active">Create Voucher</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form class="form-vertical" id="verticalForm" action="/index.php/accounting/voucher/create" method="post">    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Create Voucher</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">

                        <div class="panel-body">

                            <div class="form-group">
                                Voucher No : 21                              </div>
                            <div class="form-group">
                                <label for="reg_input_name">Transaction Date</label>
                                <input class="form-control hasDatepicker" placeholder="Date" value="2016-10-28" autocomplete="" label="" id="date" name="Datemaster[transactiondate]" size="10" type="text">                                <span class="school_val_error" id="Voucher_transactiondate_em_" style="display: none"></span> 

                            </div>
                            <div class="form-group">
                                <label for="reg_input_name" class="req">Voucher Master</label>

                                <select class="form-control" label="" name="Voucher[vouchermasterid]" id="Voucher_vouchermasterid">
<option value="">Select Voucher Master</option>
<option value="1">Cash Payment</option>
<option value="2">Cash Receipt</option>
<option value="3">Bank Payment</option>
<option value="8">344</option>
<option value="11">Voucher Master</option>
<option value="12">dasd</option>
<option value="13">655</option>
<option value="14">sam</option>
<option value="15">Yoga</option>
<option value="16">STOCK PAYMENT</option>
<option value="17">FURNITURE PURCHASED</option>
<option value="18">FEES RECEIVED</option>
<option value="19">FEES REFUND</option>
<option value="20">BILL PAYMENT</option>
<option value="21">knkn</option>
<option value="22">Hello</option>
<option value="23">cash Payment</option>
<option value="24">5656464</option>
<option value="25">Cheque payment</option>
<option value="26">Bread Prakash Naik</option>
<option value="27">Matumizi(Voucher master)</option>
<option value="28">sss</option>
<option value="29">Cash Reciept</option>
<option value="30">xyz</option>
<option value="31">New Test Master</option>
<option value="32">SOFTWARE</option>
<option value="33">fdbfdg</option>
<option value="34">AAAA</option>
<option value="35">aaa</option>
<option value="36">Fees received</option>
<option value="37">uno</option>
<option value="38">Stock Payment</option>
<option value="39">Stock Payment</option>
<option value="40">Cash Payment</option>
<option value="42">Cash Voucher</option>
<option value="43">dfd</option>
<option value="44">Building</option>
<option value="45">Yyyyyyyy</option>
<option value="46">Cash Payment</option>
<option value="47">may</option>
<option value="48">babk</option>
<option value="49">School Bus</option>
<option value="50">ffdf</option>
<option value="51">Electicity Bill</option>
<option value="52">PTK-Exp</option>
<option value="53">PTK-Income</option>
<option value="54">SKP-Exp</option>
<option value="55">SKP-Income</option>
<option value="56">PTK2-Electricity Bill</option>
<option value="57">SKP2-Electricity Bill</option>
<option value="58">cash</option>
<option value="59">dvmaster</option>
<option value="60">dvmaster</option>
<option value="61">school</option>
<option value="62">cash</option>
<option value="63">mine master</option>
<option value="64">mine master credit</option>
<option value="65">Dallas Voucher Master Credit</option>
<option value="66">Dallas Voucher Master Debit</option>
<option value="67">Master Credi</option>
<option value="68">Master Debit</option>
<option value="69">ScreditMaster</option>
<option value="70">SdebitMAster</option>
<option value="71">rakesh</option>
<option value="72">tested</option>
<option value="73">newtesting</option>
<option value="74">newtesting2</option>
<option value="75">test2</option>
<option value="76">test3</option>
<option value="77">Cash Paid</option>
<option value="78">download</option>
<option value="79">asdf</option>
<option value="80">test</option>
<option value="81">ed</option>
<option value="82">test</option>
<option value="83">cashpayment</option>
<option value="84">yoga</option>
<option value="85">yoga</option>
<option value="86">344</option>
<option value="87">0123</option>
</select>                                <span class="school_val_error" id="Voucher_vouchermasterid_em_" style="display: none"></span> 

                            </div>
                            <div class="form-group">
                                <label for="reg_input_name">Voucher Head</label>
                                <select class="form-control" label="" name="Voucher[voucherheadid]" id="Voucher_voucherheadid">
<option value="">Select Voucher Head</option>
<option value="1">Course Fee</option>
<option value="2">Gross Salary</option>
<option value="3">Purchase Order</option>
<option value="4">Library Fee</option>
<option value="6">Voucher Head</option>
<option value="7">Transport Fee</option>
<option value="8">Amusement Fee</option>
<option value="9">demo voucher</option>
<option value="10">admin</option>
<option value="11">sam</option>
<option value="12">FEES RECEIVED IN CASH</option>
<option value="13">FEES RECEIVED BY CHEQUE</option>
<option value="14">FURNI PURCAHSED BY CASH</option>
<option value="15">FURNI PURCAHSED BY CHQ</option>
<option value="16">ELECTERCITY BILL CASH</option>
<option value="17">ELECTERCITY BILL CHEQUE</option>
<option value="18">,,m,m.</option>
<option value="19">Subject Fee</option>
<option value="20">123</option>
<option value="21">Petty expenses</option>
<option value="22">Matumizi Yote</option>
<option value="23">abc</option>
<option value="24">Students Fee</option>
<option value="25">New Tes Voucher Head</option>
<option value="26">Stationary</option>
<option value="27">ITS S/W</option>
<option value="28">Fees</option>
<option value="29">aaa</option>
<option value="30">School Fee</option>
<option value="31">Pre</option>
<option value="32">Lunch &amp; Snacks</option>
<option value="33">ere</option>
<option value="34">SAD</option>
<option value="35">School Bus Purchase</option>
<option value="36">School Bus SALE</option>
<option value="37">Head1</option>
<option value="38">PTK-Electricity Exp.</option>
<option value="39">SKP-Electricity Exp.</option>
<option value="40">PTK-Printing</option>
<option value="41">SKP-Printing</option>
<option value="42">PTK-Donation</option>
<option value="43">SKP-Donation</option>
<option value="44">Pathak School</option>
<option value="45">SKP3-Electricity Exp.</option>
<option value="46">dhead</option>
<option value="47">fees</option>
<option value="48">mine voucher head</option>
<option value="49">Dallas Voucher Head</option>
<option value="50">Dallas Voucher Head Debit</option>
<option value="51">Voucher Credit</option>
<option value="52">Voucher Debit</option>
<option value="53">SvocherCredit</option>
<option value="54">SVoucherDebit</option>
<option value="55">rakesh12</option>
<option value="56">Chair repair</option>
<option value="57">54</option>
<option value="58">10/01/2016</option>
<option value="59">PATHAK SCHOOL AMRELI</option>
<option value="60">PATHAK SCHOOL METODA</option>
<option value="61">ed</option>
<option value="62">Salaries</option>
<option value="63">rrrrrrrrr</option>
<option value="64">zzzzzzz paid to ashek</option>
</select>                                <span class="school_val_error" id="Voucher_voucherheadid_em_" style="display: none"></span> 
                            </div>
                            <div class="form-group">
                                <input class="form-control" value="21" name="Voucher[vouchernumber]" id="Voucher_vouchernumber" type="hidden">                                <span class="school_val_error" id="Voucher_vouchernumber_em_" style="display: none"></span> 
                            </div>
                            <div class="form-group">
                                <label for="reg_input_name" class="req">From Ledger Account</label>
                                
                                <select class="form-control" label="" name="Voucher[accountgroupid]" id="Voucher_accountgroupid">
<option value="">From Ledger Account</option>
<option value="1">Ganesh Account</option>
<option value="2">fff</option>
<option value="3">zzzzzzzzzzz</option>
<option value="4">Cash Account</option>
<option value="5">TDS</option>
<option value="6">Gross Salary</option>
<option value="7">PF</option>
<option value="8">Net Payable</option>
<option value="9">salary</option>
<option value="10">abhi</option>
<option value="11">abhi</option>
<option value="12">Purchase Order</option>
<option value="13">Library Fee</option>
<option value="14">kkk</option>
<option value="15">abab</option>
<option value="16">sushma</option>
<option value="17">GFD</option>
<option value="18">Transport Fee</option>
<option value="19"></option>
<option value="20">hra</option>
<option value="21">sdsd</option>
<option value="22">bbb</option>
<option value="23">rtffd</option>
<option value="24">Cash on Hand</option>
<option value="25">2</option>
<option value="26">34</option>
<option value="27">fid</option>
<option value="28">bas</option>
<option value="29">trdyd8</option>
<option value="30">pappu</option>
<option value="31">pappu</option>
<option value="32">pappu</option>
<option value="33">sam</option>
<option value="34">State Tax</option>
<option value="35">Master</option>
<option value="36">kkk</option>
<option value="37">pt</option>
<option value="38">Test</option>
<option value="39">ESI</option>
<option value="40">PF-Employer</option>
<option value="41">1000</option>
<option value="42">CASH ACCOUNT 1</option>
<option value="43">BANK ACCOUNT 1</option>
<option value="44">FURNITURE ACCOUNT</option>
<option value="45">STOCK ACCOUNT</option>
<option value="46">FEES ACCOUNT</option>
<option value="47">.,;,</option>
<option value="48">jhgj</option>
<option value="49">fssf</option>
<option value="50">fssf</option>
<option value="51">rojar that</option>
<option value="52">Prof. Tax</option>
<option value="53">ert</option>
<option value="54">ccc</option>
<option value="55">mickey mouse</option>
<option value="56">b</option>
<option value="57">Matumizi</option>
<option value="58">acc</option>
<option value="59">shubh</option>
<option value="60">Sledging</option>
<option value="61">jhgjh</option>
<option value="62">hhhh</option>
<option value="63">Primary Account</option>
<option value="64">Fee account</option>
<option value="65">5666</option>
<option value="66">ghy</option>
<option value="67">New Test Account</option>
<option value="68">EXPENSES</option>
<option value="69">Stationary</option>
<option value="70">Paye</option>
<option value="71">basic</option>
<option value="72">Zakat</option>
<option value="73">afffhhgf</option>
<option value="74">Ganesh Hiran Magri </option>
<option value="75">Aaa</option>
<option value="76">DA</option>
<option value="77">HOSTEL</option>
<option value="78">CS</option>
<option value="79">Pri</option>
<option value="80">Pry</option>
<option value="81">Profit &amp; Loss</option>
<option value="82">zdbd</option>
<option value="83">Bank Account</option>
<option value="84">4545</option>
<option value="85">Building</option>
<option value="86">Expense </option>
<option value="87">Expense </option>
<option value="88">Afroz Ali</option>
<option value="89">abc</option>
<option value="90">sssss</option>
<option value="91">nazim deduction</option>
<option value="92">Tax</option>
<option value="93">bbbb</option>
<option value="94">mok</option>
<option value="95">mok</option>
<option value="96">fixed Assets</option>
<option value="97">ttrrr</option>
<option value="98">askarali</option>
<option value="99">brtgv</option>
<option value="100">cheque in hand</option>
<option value="101">sadsadasda</option>
<option value="102">Pathak School</option>
<option value="103">S K Pathak School</option>
<option value="104">PTK1-Electricity Bill</option>
<option value="105">SKP1-Electricity Bill</option>
<option value="106">Advance</option>
<option value="107">Dedu</option>
<option value="108">ff</option>
<option value="109">Loan</option>
<option value="110">aaaa</option>
<option value="111">dsalary</option>
<option value="112">cashincome</option>
<option value="113">basic pay</option>
<option value="114">c singh</option>
<option value="115">sbi</option>
<option value="116">one</option>
<option value="117">mine</option>
<option value="118">Nikhil</option>
<option value="119">dallas</option>
<option value="120">Ledger Credit</option>
<option value="121">Ledger Debit</option>
<option value="122">Scredit</option>
<option value="123">Sdebit</option>
<option value="124">Lokesh Academy</option>
<option value="125">a</option>
<option value="126">varunjoshi</option>
<option value="127">testing</option>
<option value="128">Leave Apply</option>
<option value="129">nitin</option>
<option value="130">udit</option>
<option value="131">phlox</option>
<option value="132">abc</option>
<option value="133">Internal Expense</option>
<option value="134">gross salary</option>
<option value="135">cash account</option>
<option value="136">1</option>
<option value="137">qqq</option>
<option value="138">hjhg</option>
<option value="139">fdsfsd</option>
<option value="140">Bank</option>
<option value="141">cvcvcv</option>
<option value="142">udit</option>
<option value="143">panj</option>
<option value="144">stert</option>
<option value="145">phlox</option>
<option value="146">Aarav</option>
<option value="147">Course Fee</option>
<option value="148">87977</option>
<option value="149">Jasim</option>
<option value="150">wsfsfs</option>
<option value="151">gthh55</option>
</select><span class="school_val_error" id="Voucher_accountgroupid_em_" style="display: none"></span> 
                            </div>
                            <div class="form-group">
                                <label for="reg_input_name">To Ledger Account</label>
                                <select class="form-control" label="" name="toaccount" id="toaccount">
<option value="">To Ledger Account</option>
<option value="1">Ganesh Account</option>
<option value="2">fff</option>
<option value="3">zzzzzzzzzzz</option>
<option value="4">Cash Account</option>
<option value="5">TDS</option>
<option value="6">Gross Salary</option>
<option value="7">PF</option>
<option value="8">Net Payable</option>
<option value="9">salary</option>
<option value="10">abhi</option>
<option value="11">abhi</option>
<option value="12">Purchase Order</option>
<option value="13">Library Fee</option>
<option value="14">kkk</option>
<option value="15">abab</option>
<option value="16">sushma</option>
<option value="17">GFD</option>
<option value="18">Transport Fee</option>
<option value="19"></option>
<option value="20">hra</option>
<option value="21">sdsd</option>
<option value="22">bbb</option>
<option value="23">rtffd</option>
<option value="24">Cash on Hand</option>
<option value="25">2</option>
<option value="26">34</option>
<option value="27">fid</option>
<option value="28">bas</option>
<option value="29">trdyd8</option>
<option value="30">pappu</option>
<option value="31">pappu</option>
<option value="32">pappu</option>
<option value="33">sam</option>
<option value="34">State Tax</option>
<option value="35">Master</option>
<option value="36">kkk</option>
<option value="37">pt</option>
<option value="38">Test</option>
<option value="39">ESI</option>
<option value="40">PF-Employer</option>
<option value="41">1000</option>
<option value="42">CASH ACCOUNT 1</option>
<option value="43">BANK ACCOUNT 1</option>
<option value="44">FURNITURE ACCOUNT</option>
<option value="45">STOCK ACCOUNT</option>
<option value="46">FEES ACCOUNT</option>
<option value="47">.,;,</option>
<option value="48">jhgj</option>
<option value="49">fssf</option>
<option value="50">fssf</option>
<option value="51">rojar that</option>
<option value="52">Prof. Tax</option>
<option value="53">ert</option>
<option value="54">ccc</option>
<option value="55">mickey mouse</option>
<option value="56">b</option>
<option value="57">Matumizi</option>
<option value="58">acc</option>
<option value="59">shubh</option>
<option value="60">Sledging</option>
<option value="61">jhgjh</option>
<option value="62">hhhh</option>
<option value="63">Primary Account</option>
<option value="64">Fee account</option>
<option value="65">5666</option>
<option value="66">ghy</option>
<option value="67">New Test Account</option>
<option value="68">EXPENSES</option>
<option value="69">Stationary</option>
<option value="70">Paye</option>
<option value="71">basic</option>
<option value="72">Zakat</option>
<option value="73">afffhhgf</option>
<option value="74">Ganesh Hiran Magri </option>
<option value="75">Aaa</option>
<option value="76">DA</option>
<option value="77">HOSTEL</option>
<option value="78">CS</option>
<option value="79">Pri</option>
<option value="80">Pry</option>
<option value="81">Profit &amp; Loss</option>
<option value="82">zdbd</option>
<option value="83">Bank Account</option>
<option value="84">4545</option>
<option value="85">Building</option>
<option value="86">Expense </option>
<option value="87">Expense </option>
<option value="88">Afroz Ali</option>
<option value="89">abc</option>
<option value="90">sssss</option>
<option value="91">nazim deduction</option>
<option value="92">Tax</option>
<option value="93">bbbb</option>
<option value="94">mok</option>
<option value="95">mok</option>
<option value="96">fixed Assets</option>
<option value="97">ttrrr</option>
<option value="98">askarali</option>
<option value="99">brtgv</option>
<option value="100">cheque in hand</option>
<option value="101">sadsadasda</option>
<option value="102">Pathak School</option>
<option value="103">S K Pathak School</option>
<option value="104">PTK1-Electricity Bill</option>
<option value="105">SKP1-Electricity Bill</option>
<option value="106">Advance</option>
<option value="107">Dedu</option>
<option value="108">ff</option>
<option value="109">Loan</option>
<option value="110">aaaa</option>
<option value="111">dsalary</option>
<option value="112">cashincome</option>
<option value="113">basic pay</option>
<option value="114">c singh</option>
<option value="115">sbi</option>
<option value="116">one</option>
<option value="117">mine</option>
<option value="118">Nikhil</option>
<option value="119">dallas</option>
<option value="120">Ledger Credit</option>
<option value="121">Ledger Debit</option>
<option value="122">Scredit</option>
<option value="123">Sdebit</option>
<option value="124">Lokesh Academy</option>
<option value="125">a</option>
<option value="126">varunjoshi</option>
<option value="127">testing</option>
<option value="128">Leave Apply</option>
<option value="129">nitin</option>
<option value="130">udit</option>
<option value="131">phlox</option>
<option value="132">abc</option>
<option value="133">Internal Expense</option>
<option value="134">gross salary</option>
<option value="135">cash account</option>
<option value="136">1</option>
<option value="137">qqq</option>
<option value="138">hjhg</option>
<option value="139">fdsfsd</option>
<option value="140">Bank</option>
<option value="141">cvcvcv</option>
<option value="142">udit</option>
<option value="143">panj</option>
<option value="144">stert</option>
<option value="145">phlox</option>
<option value="146">Aarav</option>
<option value="147">Course Fee</option>
<option value="148">87977</option>
<option value="149">Jasim</option>
<option value="150">wsfsfs</option>
<option value="151">gthh55</option>
</select><span class="school_val_error" id="Voucher_toaccount_em_" style="display: none"></span> 
                            </div>
                            <div class="form-group">
                                <label for="reg_input_name" class="req">Amount</label>
                                <input class="form-control" maxlength="45" label="" placeholder="Amount" name="Voucher[credit]" id="Voucher_credit" type="text">	
<span class="school_val_error" id="Voucher_credit_em_" style="display: none"></span> 
                            </div>
                            <div class="form-group">
                                <label for="reg_input_name">Narration</label>
                                <textarea class="form-control" maxlength="45" label="" placeholder="Narration" name="Voucher[description]" id="Voucher_description"></textarea>	
<span class="school_val_error" id="Voucher_description_em_" style="display: none"></span> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form_sep">
<input class="btn btn-info" name="yt0" value="Create" type="submit">                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="table responsive table-bordered table-striped" id="item-grid">
<table class="items">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Employee</th><th id="item-grid_c2">Voucher No</th><th id="item-grid_c3">Transaction Date</th><th id="item-grid_c4">Voucher Head</th><th class="button-column" id="item-grid_c5">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="10%">1</td><td width="20%">surya a raju</td><td width="20%">34</td><td width="20%">2016-08-05</td><td width="10%">Gross Salary</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3449"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3449"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3449"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">2</td><td width="20%">surya a raju</td><td width="20%">19</td><td width="20%">2016-08-05</td><td width="10%">Course Fee</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3450"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3450"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3450"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">3</td><td width="20%">surya a raju</td><td width="20%">13</td><td width="20%">2016-08-05</td><td width="10%">Course Fee</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3453"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3453"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3453"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">4</td><td width="20%">surya a raju</td><td width="20%">65</td><td width="20%">2016-08-06</td><td width="10%">Course Fee</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3454"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3454"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3454"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">5</td><td width="20%">surya a raju</td><td width="20%">65</td><td width="20%">2016-08-06</td><td width="10%">Course Fee</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3455"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3455"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3455"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">6</td><td width="20%">surya a raju</td><td width="20%">35</td><td width="20%">2016-08-06</td><td width="10%">Purchase Order</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3456"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3456"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3456"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">7</td><td width="20%">surya a raju</td><td width="20%">35</td><td width="20%">2016-08-06</td><td width="10%">Purchase Order</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3457"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3457"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3457"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">8</td><td width="20%">surya a raju</td><td width="20%">77</td><td width="20%">2016-08-07</td><td width="10%">Gross Salary</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3460"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3460"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3460"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">9</td><td width="20%">surya a raju</td><td width="20%">79</td><td width="20%">2016-08-08</td><td width="10%">Course Fee</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3462"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3462"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3462"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">10</td><td width="20%">surya a raju</td><td width="20%">79</td><td width="20%">2016-08-08</td><td width="10%">Course Fee</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3463"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3463"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3463"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">11</td><td width="20%">surya a raju</td><td width="20%">72</td><td width="20%">2016-08-08</td><td width="10%">Course Fee</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3464"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3464"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3464"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">12</td><td width="20%">surya a raju</td><td width="20%">72</td><td width="20%">2016-08-08</td><td width="10%">Course Fee</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3465"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3465"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3465"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">13</td><td width="20%">surya a raju</td><td width="20%">75</td><td width="20%">2016-08-08</td><td width="10%">Course Fee</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3466"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3466"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3466"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">14</td><td width="20%">surya a raju</td><td width="20%">75</td><td width="20%">2016-08-08</td><td width="10%">Course Fee</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3467"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3467"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3467"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">15</td><td width="20%">surya a raju</td><td width="20%">87</td><td width="20%">2016-08-08</td><td width="10%">Course Fee</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/voucher/update/id/3468"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/accounting/voucher/view/id/3468"><img src="" alt=""></a> <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/voucher/delete/id/3468"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/accounting/voucher/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/accounting/voucher/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/accounting/voucher/create">1</a></li>
<li class="page"><a href="/index.php/accounting/voucher/create/Voucher_page/2">2</a></li>
<li class="page"><a href="/index.php/accounting/voucher/create/Voucher_page/3">3</a></li>
<li class="page"><a href="/index.php/accounting/voucher/create/Voucher_page/4">4</a></li>
<li class="next"><a href="/index.php/accounting/voucher/create/Voucher_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/accounting/voucher/create/Voucher_page/107">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/accounting/voucher/create"><span>3449</span><span>3450</span><span>3453</span><span>3454</span><span>3455</span><span>3456</span><span>3457</span><span>3460</span><span>3462</span><span>3463</span><span>3464</span><span>3465</span><span>3466</span><span>3467</span><span>3468</span></div>
</div>  
        </div>
    </div>
</form></div>
<script>

    $('#Voucher_LedgerId').change(function () {

        alert($('#Voucher_LedgerId').val());

    });


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
                
            </div><!--contentinner-->
        </div>
		
		