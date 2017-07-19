
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
<style> 
    #overlaygif1 {
        background: url("/images/loading.gif") no-repeat center;
        position:fixed;top:0;right:0;bottom:0;left:0;
    }
    #overlaygif2 {
        background: url("/images/loading.gif") no-repeat center;
        position:fixed;top:0;right:0;bottom:0;left:0;
    }
    #overlaygif3 {
        background: url("/images/loading.gif") no-repeat center;
        position:fixed;top:0;right:0;bottom:0;left:0;
    }
</style>
<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Fees</a></li>
            <li class="active">Reports</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="reports-form" action="/index.php/core/feesallocation/schoolwisefeereports" method="post">    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
                            <li class=""><a href="#tbb_a" data-toggle="tab" aria-expanded="false">Individual Student</a></li>  
                <li class="active"><a href="#tbb_b" data-toggle="tab" aria-expanded="true">Batch</a></li>
                <li class=""><a href="#tbb_c" data-toggle="tab" aria-expanded="false">School</a></li>
                
        </ul><br>
        <div class="tab-content">
                            <div class="tab-pane" id="tbb_a">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Individual Student Wise</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-sm-3">
                                            <label>Search</label>
                                            <input placeholder="Student" class="form-control ui-autocomplete-input" id="student" type="text" value="" name="student" autocomplete="off"><input id="hidden-field" name="output" type="hidden" value="">                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label>&nbsp;</label>
                                            <select class="form-control" name="reportof" id="reportof">
<option value="">Please Select</option>
<option value="1">Paid Report</option>
<option value="2">Due Report</option>
</select>                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label>&nbsp;</label><br>
                                            <a href="javascript:individualreports()" class="btn btn-info">Go</a>
                                        </div>
                                        <div id="overlaygif1" style="display:none;"></div>
                                        <div class="col-sm-3">
                                            <div class="form-group" align="right">
                                                <input type="button" onclick="printDiv('print')" value="Print Report" class="btn btn-danger">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="studentdetail" style="display:none">
                                        <div class="col-sm-12" id="print">
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
                </div>
                <div class="tab-pane active" id="tbb_b">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Batch Wise</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-sm-3">
                                            <label for="reg_input">Course</label>
                                            <select class="form-control" name="Feesallocation[courseid]" id="Feesallocation_courseid">
<option value="">Select Course</option>
<option value="1">COMPUTER network</option>
<option value="2">ONLINE TEST SERIES</option>
<option value="3">Pre School 1</option>
<option value="4">Pre School 2</option>
<option value="5">Year 1</option>
<option value="6">Year 2</option>
<option value="7">Year 3</option>
<option value="8">Year 4</option>
<option value="9">Year 5</option>
<option value="10">Computer COuerse</option>
<option value="11">network security</option>
<option value="12">asp.net</option>
<option value="13">eeeeee</option>
<option value="14">TOC</option>
<option value="15">php course</option>
<option value="16">Jesus</option>
<option value="17">vba</option>
<option value="18">Engg</option>
<option value="19">NewCourse</option>
<option value="22">zzz</option>
<option value="23">A1</option>
<option value="24">A1A</option>
<option value="25">dld</option>
<option value="26">Nursery</option>
<option value="27">cs</option>
<option value="29">test1</option>
<option value="30">PGDEMS</option>
<option value="31">md-1</option>
<option value="32">Maths Biology</option>
<option value="33">Kindergarten </option>
<option value="34">math</option>
<option value="35">test123</option>
<option value="36">asdsa</option>
<option value="37">asdasd</option>
<option value="38">ab</option>
<option value="39">DCA</option>
<option value="40">MPCEMJ1</option>
<option value="41">MPCEMJ2</option>
<option value="42">12 sdf</option>
<option value="43">GEN</option>
<option value="44">Math1</option>
<option value="45">enc 1101</option>
<option value="46">Computer Science </option>
<option value="47">Class II</option>
<option value="48">ece</option>
<option value="49">SSLC</option>
<option value="50">Plus 2</option>
<option value="51">civils</option>
<option value="52">civ</option>
<option value="53">dhdf</option>
<option value="54">ba</option>
<option value="55">BBM</option>
<option value="56">HappyMan</option>
<option value="57">se</option>
<option value="58">fgd</option>
<option value="59">sia</option>
<option value="60">Pre School 11</option>
<option value="61">bbc india</option>
<option value="62">English</option>
<option value="63">abc</option>
<option value="64">dddddddddd</option>
<option value="65">dddnk</option>
<option value="66">Standard 1st</option>
<option value="67">1st class</option>
<option value="68">inter</option>
<option value="69">dfsafd</option>
<option value="70">robotics</option>
<option value="71">Lehrgang</option>
<option value="72">Kurs</option>
<option value="73">fyjc</option>
<option value="75">fffff</option>
<option value="76">physcis</option>
<option value="77">kljdfs</option>
<option value="78">Master of Computer Application</option>
<option value="79">dfgfdg</option>
<option value="80">X-A</option>
<option value="81">Science</option>
<option value="82">IIT</option>
<option value="83">Diploma IT</option>
<option value="84">PHP</option>
<option value="85">Shotokan Karate</option>
<option value="86">bdfb</option>
<option value="87">JEE</option>
<option value="88">3rd </option>
<option value="89">ats</option>
<option value="90">karthi</option>
<option value="91">test</option>
<option value="92">GENEL KULTUR</option>
<option value="93">kkk</option>
<option value="94">Hindi</option>
<option value="95">mathematics</option>
<option value="96">physics</option>
<option value="97">mycourse123</option>
<option value="98">aero</option>
<option value="99">Moudle 1</option>
<option value="100">shiv</option>
<option value="101">AMEL-01</option>
<option value="102">Maintenance Engineering</option>
<option value="103">ghhjh</option>
<option value="104">fgfggh</option>
<option value="105">1st</option>
<option value="106">Spanish</option>
<option value="107">Java Training</option>
<option value="108">Curso Basisco Completo</option>
<option value="109">BBM3</option>
<option value="110">Computing History</option>
<option value="111">CCC</option>
<option value="112">FIRST STD</option>
<option value="113">JSS 1</option>
<option value="114">GHSUrdu</option>
<option value="115">NurseryGHS</option>
<option value="116">Mathametics</option>
<option value="117">Test Course </option>
<option value="118">Cpbara</option>
<option value="119">ELEVENTH-MATHS</option>
<option value="120">test0001</option>
<option value="121">Au-test</option>
<option value="122">asdfg</option>
<option value="123">test0001777</option>
<option value="124">Database</option>
<option value="125">Cricket</option>
<option value="126">KG</option>
<option value="127">UKG</option>
<option value="128">CDAC</option>
<option value="129">CDAC 2</option>
<option value="130">TestCourse</option>
<option value="131">bc</option>
<option value="132">business_ the career</option>
<option value="133">music_ the digital domain</option>
<option value="134">music_ the video</option>
<option value="135">business_ the market</option>
<option value="136">JAVA</option>
<option value="137">accp</option>
<option value="138">Crafting</option>
<option value="139">BCA</option>
<option value="140">fvdfvdxfv</option>
<option value="141">12</option>
<option value="142">12th</option>
<option value="143">IT</option>
<option value="144">yu867</option>
<option value="145">pure english</option>
<option value="146">islamiat</option>
<option value="147">mca</option>
<option value="148">sap</option>
<option value="149">santosh</option>
<option value="150">3 BLUE</option>
<option value="151">3 Pink</option>
<option value="152">3 GOLD</option>
<option value="153">BA-BA</option>
<option value="154">ec</option>
<option value="155">English5</option>
<option value="156">CA</option>
<option value="157">dfasdfasdfasdfasdfaasdfasdfasdfasd</option>

<option value="158">cn</option>
<option value="159">tt</option>
<option value="160">m.b.a</option>
<option value="161">manikandan</option>
<option value="162">ds</option>
<option value="163">Management</option>
<option value="164">RKMorning</option>
<option value="165">BTECH</option>
<option value="166">rtfg</option>
<option value="167">course1</option>
<option value="168">Commerce</option>
<option value="169">heythisis</option>
<option value="170">class1</option>
<option value="171">Bachelor of Science in Computer Science</option>
<option value="173">WOOD PRODUCTS</option>
<option value="174">DIPLOMA</option>
<option value="175">Bir</option>
<option value="176">maths</option>
<option value="177">lalaa_course</option>
<option value="178">bachelor in computer science</option>
<option value="179">computer</option>
<option value="180">M.Sc.IT</option>
<option value="181">Afzal</option>
<option value="182">thiru</option>
<option value="183">thdsfsdf</option>
<option value="184">Bangla</option>
<option value="185">1st standard</option>
<option value="186">Data Entry</option>
<option value="187">kkka</option>
<option value="188">Accounting information system</option>
<option value="189">Class 1</option>
<option value="190">MCApp</option>
<option value="191">Electronics and Computer Tech.</option>
<option value="192">10th</option>
<option value="193">English Lesson</option>
<option value="194">Pathak School Demo</option>
<option value="195">PTS-1ST-MOR</option>
<option value="196">PTS-02-MOR</option>
<option value="197">PTS-03-MOR</option>
<option value="198">PATHAK-CCE-TEST</option>
<option value="199">Unit Test 1</option>
<option value="200">Unit Test 2</option>
<option value="201">english science</option>
<option value="202">JKSC-CA-CPT</option>
<option value="203">JKSC-CA-IPCC</option>
<option value="204">Ahihihi</option>
<option value="205">Class 10</option>
<option value="206">qef</option>
<option value="207">7th</option>
<option value="208">tetet</option>
<option value="209">5th class</option>
<option value="210">Environment Management</option>
<option value="211">vsd</option>
<option value="212">C language</option>
</select>                                        </div> 

                                        <div class="form-group col-sm-3">
                                            <label for="reg_input">Batch</label>
                                            <select class="form-control" name="Feesallocation[batchid]" id="Feesallocation_batchid"><option value="">Select</option><option value="1">A</option><option value="15">B</option><option value="41">bala</option><option value="47">Imperial Batch</option><option value="67">test</option><option value="69">01</option><option value="89">23r</option><option value="130">jff</option><option value="135">Bat1</option><option value="145">12 PM tO 01 PM</option><option value="146">10 AM tO 11 AM</option><option value="148">9 AM TO 10 AM</option><option value="156">java</option><option value="174">vghvghvhgv</option></select>                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label>&nbsp;</label>
                                            <select class="form-control" name="reportof1" id="reportof1">
<option value="">Please Select</option>
<option value="1">Paid Report</option>
<option value="2">Due Report</option>
</select>                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label>&nbsp;</label><br>
                                            <a href="javascript:batchwisereports()" class="btn btn-info" id="batchwisebutton">Go</a>
                                        </div><div id="overlaygif2" style="display: none;"></div>
                                        <div class="col-sm-12">
                                            <div class="form-group" align="right">
                                                <input type="button" onclick="printDiv('print1')" value="Print Report" class="btn btn-danger">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="batchwise">
                            <div class="col-sm-12" id="print1">
                                <div class="panel panel-body">
                                    <div class="table-responsive">
                                        <table class="table responsive table-bordered table-striped footable" id="reportforunpaidlist">
                                            <thead>
                                                <tr>
                                                    <th width="5">Sl No.</th>
                                                    <th width="14.28">Student Admission.No</th>
                                                    <th data-hide="phone,tablet" width="14.28">Student Name</th>
                                                    <th data-hide="phone,tablet" width="14.28">Course</th>
                                                    <th data-hide="phone,tablet" width="14.28">Batch</th>
                                                    <th data-hide="phone,tablet" width="14.28">Guardian Name</th>
                                                    <th data-hide="phone,tablet" width="14.28">Guardian Contact No.</th>
                                                    <th data-hide="phone,tablet" width="14.28">Total Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody id="batchwisedetails"><tr><td>0012</td><td>asd a a</td><td>COMPUTER network</td><td>A</td><td></td><td>8458698954</td><td>58540</td></tr><tr><td>010</td><td>Saphat Saphat MOL</td><td>COMPUTER network</td><td>A</td><td>s</td><td>010</td><td>4500</td></tr><tr><td>test1</td><td>mm  </td><td>COMPUTER network</td><td>A</td><td></td><td>2112112112</td><td>2500</td></tr><tr><td>124</td><td>erwer  </td><td>COMPUTER network</td><td>A</td><td>sfsdf</td><td>8545258545</td><td>54500</td></tr></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tbb_c">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">School Wise</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-sm-3">
                                            <label for="reg_input">Course</label>
                                            <select class="form-control" name="Feesallocation[courseid1]" id="Feesallocation_courseid1">
<option value="">Select Course</option>
<option value="1">COMPUTER network</option>
<option value="2">ONLINE TEST SERIES</option>
<option value="3">Pre School 1</option>
<option value="4">Pre School 2</option>
<option value="5">Year 1</option>
<option value="6">Year 2</option>
<option value="7">Year 3</option>
<option value="8">Year 4</option>
<option value="9">Year 5</option>
<option value="10">Computer COuerse</option>
<option value="11">network security</option>
<option value="12">asp.net</option>
<option value="13">eeeeee</option>
<option value="14">TOC</option>
<option value="15">php course</option>
<option value="16">Jesus</option>
<option value="17">vba</option>
<option value="18">Engg</option>
<option value="19">NewCourse</option>
<option value="22">zzz</option>
<option value="23">A1</option>
<option value="24">A1A</option>
<option value="25">dld</option>
<option value="26">Nursery</option>
<option value="27">cs</option>
<option value="29">test1</option>
<option value="30">PGDEMS</option>
<option value="31">md-1</option>
<option value="32">Maths Biology</option>
<option value="33">Kindergarten </option>
<option value="34">math</option>
<option value="35">test123</option>
<option value="36">asdsa</option>
<option value="37">asdasd</option>
<option value="38">ab</option>
<option value="39">DCA</option>
<option value="40">MPCEMJ1</option>
<option value="41">MPCEMJ2</option>
<option value="42">12 sdf</option>
<option value="43">GEN</option>
<option value="44">Math1</option>
<option value="45">enc 1101</option>
<option value="46">Computer Science </option>
<option value="47">Class II</option>
<option value="48">ece</option>
<option value="49">SSLC</option>
<option value="50">Plus 2</option>
<option value="51">civils</option>
<option value="52">civ</option>
<option value="53">dhdf</option>
<option value="54">ba</option>
<option value="55">BBM</option>
<option value="56">HappyMan</option>
<option value="57">se</option>
<option value="58">fgd</option>
<option value="59">sia</option>
<option value="60">Pre School 11</option>
<option value="61">bbc india</option>
<option value="62">English</option>
<option value="63">abc</option>
<option value="64">dddddddddd</option>
<option value="65">dddnk</option>
<option value="66">Standard 1st</option>
<option value="67">1st class</option>
<option value="68">inter</option>
<option value="69">dfsafd</option>
<option value="70">robotics</option>
<option value="71">Lehrgang</option>
<option value="72">Kurs</option>
<option value="73">fyjc</option>
<option value="75">fffff</option>
<option value="76">physcis</option>
<option value="77">kljdfs</option>
<option value="78">Master of Computer Application</option>
<option value="79">dfgfdg</option>
<option value="80">X-A</option>
<option value="81">Science</option>
<option value="82">IIT</option>
<option value="83">Diploma IT</option>
<option value="84">PHP</option>
<option value="85">Shotokan Karate</option>
<option value="86">bdfb</option>
<option value="87">JEE</option>
<option value="88">3rd </option>
<option value="89">ats</option>
<option value="90">karthi</option>
<option value="91">test</option>
<option value="92">GENEL KULTUR</option>
<option value="93">kkk</option>
<option value="94">Hindi</option>
<option value="95">mathematics</option>
<option value="96">physics</option>
<option value="97">mycourse123</option>
<option value="98">aero</option>
<option value="99">Moudle 1</option>
<option value="100">shiv</option>
<option value="101">AMEL-01</option>
<option value="102">Maintenance Engineering</option>
<option value="103">ghhjh</option>
<option value="104">fgfggh</option>
<option value="105">1st</option>
<option value="106">Spanish</option>
<option value="107">Java Training</option>
<option value="108">Curso Basisco Completo</option>
<option value="109">BBM3</option>
<option value="110">Computing History</option>
<option value="111">CCC</option>
<option value="112">FIRST STD</option>
<option value="113">JSS 1</option>
<option value="114">GHSUrdu</option>
<option value="115">NurseryGHS</option>
<option value="116">Mathametics</option>
<option value="117">Test Course </option>
<option value="118">Cpbara</option>
<option value="119">ELEVENTH-MATHS</option>
<option value="120">test0001</option>
<option value="121">Au-test</option>
<option value="122">asdfg</option>
<option value="123">test0001777</option>
<option value="124">Database</option>
<option value="125">Cricket</option>
<option value="126">KG</option>
<option value="127">UKG</option>
<option value="128">CDAC</option>
<option value="129">CDAC 2</option>
<option value="130">TestCourse</option>

<option value="131">bc</option>
<option value="132">business_ the career</option>
<option value="133">music_ the digital domain</option>
<option value="134">music_ the video</option>
<option value="135">business_ the market</option>
<option value="136">JAVA</option>
<option value="137">accp</option>
<option value="138">Crafting</option>
<option value="139">BCA</option>
<option value="140">fvdfvdxfv</option>
<option value="141">12</option>
<option value="142">12th</option>
<option value="143">IT</option>
<option value="144">yu867</option>
<option value="145">pure english</option>
<option value="146">islamiat</option>
<option value="147">mca</option>
<option value="148">sap</option>
<option value="149">santosh</option>
<option value="150">3 BLUE</option>
<option value="151">3 Pink</option>
<option value="152">3 GOLD</option>
<option value="153">BA-BA</option>
<option value="154">ec</option>
<option value="155">English5</option>
<option value="156">CA</option>
<option value="157">dfasdfasdfasdfasdfaasdfasdfasdfasd</option>
<option value="158">cn</option>
<option value="159">tt</option>
<option value="160">m.b.a</option>
<option value="161">manikandan</option>
<option value="162">ds</option>
<option value="163">Management</option>
<option value="164">RKMorning</option>
<option value="165">BTECH</option>
<option value="166">rtfg</option>
<option value="167">course1</option>
<option value="168">Commerce</option>
<option value="169">heythisis</option>
<option value="170">class1</option>
<option value="171">Bachelor of Science in Computer Science</option>
<option value="173">WOOD PRODUCTS</option>
<option value="174">DIPLOMA</option>
<option value="175">Bir</option>
<option value="176">maths</option>
<option value="177">lalaa_course</option>
<option value="178">bachelor in computer science</option>
<option value="179">computer</option>
<option value="180">M.Sc.IT</option>
<option value="181">Afzal</option>
<option value="182">thiru</option>
<option value="183">thdsfsdf</option>
<option value="184">Bangla</option>
<option value="185">1st standard</option>
<option value="186">Data Entry</option>
<option value="187">kkka</option>
<option value="188">Accounting information system</option>
<option value="189">Class 1</option>
<option value="190">MCApp</option>
<option value="191">Electronics and Computer Tech.</option>
<option value="192">10th</option>
<option value="193">English Lesson</option>
<option value="194">Pathak School Demo</option>
<option value="195">PTS-1ST-MOR</option>
<option value="196">PTS-02-MOR</option>
<option value="197">PTS-03-MOR</option>
<option value="198">PATHAK-CCE-TEST</option>
<option value="199">Unit Test 1</option>
<option value="200">Unit Test 2</option>
<option value="201">english science</option>
<option value="202">JKSC-CA-CPT</option>
<option value="203">JKSC-CA-IPCC</option>
<option value="204">Ahihihi</option>
<option value="205">Class 10</option>
<option value="206">qef</option>
<option value="207">7th</option>
<option value="208">tetet</option>
<option value="209">5th class</option>
<option value="210">Environment Management</option>
<option value="211">vsd</option>
<option value="212">C language</option>
</select>                                        </div> 
                                        <div class="form-group col-sm-3">
                                            <label>&nbsp;</label>
                                            <select class="form-control" name="reportof2" id="reportof2">
<option value="">Please Select</option>
<option value="1">Paid Report</option>
<option value="2">Due Report</option>
</select>                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label>&nbsp;</label><br>
                                            <!--<a href="javascript:schoolwisereports()" class="btn btn-info">Go</a>-->
                                            <p>&nbsp;&nbsp;<button class="btn btn-info" align="right">Excel</button></p> 
                                        </div><div id="overlaygif3" style="display:none;"></div>
<!--                                        <div class="col-sm-3">
                                            <div class="form-group" align="right">
                                                <input type="button" onclick="printDiv('print2')" value="Print Report" class="btn btn-danger"/>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="row" id="schoolwise" style="display:none">
                                        <div class="col-sm-12" id="print2">
                                            <div class="panel panel-body">
                                                <div class="table-responsive">
                                                    <table class="table responsive table-bordered table-striped footable" id="reportforunpaidlist">
                                                        <thead>
                                                            <tr>
                                                                <th width="14.28">Student Admission.No</th>
                                                                <th data-hide="phone,tablet" width="14.28">Student Name</th>
                                                                <th data-hide="phone,tablet" width="14.28">Course</th>
                                                                <th data-hide="phone,tablet" width="14.28">Batch</th>
                                                                <th data-hide="phone,tablet" width="14.28">Guardian Name</th>
                                                                <th data-hide="phone,tablet" width="14.28">Guardian Contact No.</th>
                                                                <th data-hide="phone,tablet" width="14.28">Total Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="schoolwisedetails">

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
                        </div>
    </div>
    </form></div>
<script>
    function individualreports() {
        var reportof = $('#reportof option:selected').val();
        var studentname = document.getElementById('hidden-field').value;
        if (reportof === "") {
            alert("please select dropdown.");
            return;
        }
        $('#studentdetails').empty();
        $('#overlaygif1').show("slow");
        $.ajax({
            type: "POST",
            url: "individualfeereports",
            data: {reportof: reportof, studentname: studentname},
            dataType: "html",
            success: function (data) {
                $('#overlaygif1').hide("slow");
                $('#studentdetails').append(data);
                $('#studentdetail').show("slow");
            }
        });
    }

    function batchwisereports() {

        var reportof = $('#reportof1 option:selected').val();
        var courseid = $('#Feesallocation_courseid option:selected').val();
        var batchid = $('#Feesallocation_batchid option:selected').val();
        if (reportof === "") {
            alert("please select dropdown.");
            return;
        }
        $('#batchwisedetails').empty();
        $('#overlaygif2').show("slow");
        $.ajax({
            type: "POST",
            url: "batchwisefeereports",
            data: {reportof: reportof, courseid: courseid, batchid: batchid},
            dataType: "html",
            success: function (data) {
                $('#overlaygif2').hide("slow");
                $('#batchwisedetails').append(data);
                $('#batchwise').show("slow");
            }
        });
    }
    function schoolwisereports() {
        var courseid = $('#Feesallocation_courseid1 option:selected').val();
        var reportof = $('#reportof2 option:selected').val();
        if (reportof === "") {
            alert("please select dropdown.");
            return;
        }
        $('#schoolwisedetails').empty();
        $('#overlaygif3').show("slow");
        $.ajax({
            type: "POST",
            url: "schoolwisefeereports",
            data: {reportof: reportof,courseid: courseid},
            dataType: "html",
            success: function (data) {
                $('#overlaygif3').hide("slow");
                $('#schoolwisedetails').append(data);
                $('#schoolwise').show("slow");
            }
        });
    }
    function printDiv(divName) {
//        var divToPrint = document.getElementById(divName);
//        var popupWin = window.open('', '', 'width=300,height=300');
//        popupWin.document.open();
//        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
//        popupWin.document.close();
        
        var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;

                
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
                                © 2015. Webschool by GESCIS Technologies Pvt Ltd. V3.0
                            </div>
                        </div>
                    </div>
                </div> 
            </div><!--contentinner-->
        </div>