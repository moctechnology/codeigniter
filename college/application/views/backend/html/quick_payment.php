
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
            <li><a href="#">Fees</a></li>
            <li class="active">Quick Payment</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">

    <form id="feesallocation-form" action="/index.php/core/feesallocation/quickpayment" method="post">
    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab">Quick Payment</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab">Reports (Paid List)</a></li>
            <li class=""><a href="#tbb_c" data-toggle="tab">Reports (Future Payment List)</a></li>
        </ul><br>
        <div class="tab-content">
                        <div class="tab-pane active" id="tbb_a">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Quick Payment</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group col-sm-3 validating" id="course">
                                    <label for="reg_input" class="req">Course</label>
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
</select><div class="school_val_error" id="Feesallocation_courseid_em_" style="display:none"></div>                                </div>  
                                <div class="form-group col-sm-3 validating" id="batch">
                                    <label for="reg_input" class="req">Batch</label>
                                    <select class="form-control" name="Feesallocation[batchid]" id="Feesallocation_batchid"><option value="">Select</option><option value="4">A</option><option value="61">B</option><option value="80">C</option><option value="95">abc </option><option value="99">Demo batch</option><option value="104">ZXZX</option></select><div class="school_val_error" id="Feesallocation_batchid_em_" style="display:none"></div>                                </div> 
                                <div class="form-group col-sm-3 validating">
                                    <label for="reg_input" class="req">Fees Category</label>
                                    <select class="form-control" name="Feesallocation[feescategoryid]" id="Feesallocation_feescategoryid"><option value="">Select</option><option value="3">FeeCata</option><option value="114">Trans-Noida123</option><option value="4">Hostel </option><option value="9">Admission Fee</option><option value="16">activities</option><option value="1">COMPUTER TYPING</option><option value="43">colleegefees</option><option value="44">ATGFee</option><option value="8">tuition fee</option><option value="11">Transport</option><option value="58">registration fee</option><option value="60">This is new</option><option value="62">transport fees</option><option value="2">Transport</option><option value="15">school fee</option><option value="73">FIRST TERM</option><option value="82">GHSAdmissionFee</option><option value="124">Transport Fee</option><option value="135">Computer fee</option><option value="138">sem11</option><option value="144">Registration Fee</option><option value="165">exam fee</option><option value="27">Tution Fee</option><option value="184">goodFee</option><option value="10">Other Fee</option><option value="162">Main fees</option><option value="168">Hostel Fee</option></select><div class="school_val_error" id="Feesallocation_feescategoryid_em_" style="display:none"></div>                                </div>  
                                <div class="form-group col-sm-3 validating">
                                    <label for="reg_input" class="req">Fees Sub Category</label>
                                    <select class="form-control" name="Feesallocation[feessubcategoryid]" id="Feesallocation_feessubcategoryid"><option value="">Select</option><option value="112">Noida-62 to Noida72</option></select><div class="school_val_error" id="Feesallocation_feessubcategoryid_em_" style="display:none"></div>                                </div>  
                                <div class="form-group col-sm-3 validating">
                                    <label for="reg_input" class="req">Fees Type</label>
                                    <select class="form-control" name="Feesallocation[feestype]" id="Feesallocation_feestype"><option value="">Select</option><option value="157">month1  (2016-07-01  /  2016-07-15)</option></select><div class="school_val_error" id="Feesallocation_feestype_em_" style="display:none"></div>                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" id="gridview" style="">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Student List</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table responsive table-bordered table-striped" id="studentlist">
                                    <thead>
                                        <tr>
                                            <th style="display:none">Student ID</th>
                                            <th data-hide="phone,tablet" width="25">Student Admission.No</th>
                                            <th data-hide="phone,tablet" width="25">Student Name</th>
                                            <th width="25">Amount</th>
                                            <th data-hide="phone" width="25"><input id="checkall" type="checkbox">&nbsp;&nbsp;Check all</th>
                                        </tr>
                                    </thead>
                                    <tbody><tr><td style="display:none" data-id="480">480</td><td>NIEIT580</td><td>aaa aaa aaa</td><td>250</td><td><input class="checkbox" type="checkbox"></td></tr><tr><td style="display:none" data-id="585">585</td><td>shiv685</td><td>fg dfg dfg</td><td>250</td><td><input class="checkbox" type="checkbox"></td></tr><tr><td style="display:none" data-id="587">587</td><td>shiv687</td><td>jikhjkhj  </td><td>250</td><td><input class="checkbox" type="checkbox"></td></tr><tr><td style="display:none" data-id="609">609</td><td>ghs709</td><td>jai kumar kumar</td><td>250</td><td><input class="checkbox" type="checkbox"></td></tr></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <p>&nbsp;&nbsp;&nbsp;<a href="javascript:makepayment();" class="btn btn-info" align="right">Make Payment</a></p> 
                    </div>
                </div>
            </div>
                        <div class="tab-pane" id="tbb_b">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Reports</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group col-sm-3" id="course">
                                    <label for="reg_input" class="req">Course</label>
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
</select><div class="school_val_error" id="Feesallocation_courseid1_em_" style="display:none"></div>                                </div>  
                                <div class="form-group col-sm-3" id="batch">
                                    <label for="reg_input" class="req">Batch</label>
                                    <select class="form-control" name="Feesallocation[batchid1]" id="Feesallocation_batchid1">
<option value="">Select Batch</option>
</select><div class="school_val_error" id="Feesallocation_batchid1_em_" style="display:none"></div>                                </div> 
                                <div class="form-group col-sm-3">
                                    <label for="reg_input" class="req">Fees Category</label>
                                    <select class="form-control" name="Feesallocation[feescategoryid1]" id="Feesallocation_feescategoryid1">
<option value="">Please Select</option>
</select><div class="school_val_error" id="Feesallocation_feescategoryid1_em_" style="display:none"></div>                                </div>  
                                <div class="form-group col-sm-3">
                                    <label for="reg_input" class="req">Fees Sub Category</label>
                                    <select class="form-control" name="Feesallocation[feessubcategoryid1]" id="Feesallocation_feessubcategoryid1">
<option value="">Please Select </option>
</select><div class="school_val_error" id="Feesallocation_feessubcategoryid1_em_" style="display:none"></div>                                </div>  
                                <div class="form-group col-sm-3">
                                    <label for="reg_input" class="req">Fees Type</label>
                                    <select class="form-control" name="Feesallocation[feestype1]" id="Feesallocation_feestype1">
<option value="">Please Select </option>
</select><div class="school_val_error" id="Feesallocation_feestype1_em_" style="display:none"></div>                                </div> 
                                <div class="panel-footer1">
                                    <div class="col-sm-12">
                                        <div class="form-group" align="right">
                                            <input onclick="printDiv('print')" value="Print Report" class="btn btn-danger" type="button">
                                                                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="print">
                        <div class="col-sm-12" id="gridview11" style="display:none">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title" id="reporttitle">Fee Paid List For Student</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table responsive table-bordered table-striped" id="studentlistreport">
                                        <thead>
                                            <tr>
                                                <th data-hide="phone,tablet" width="20">Student Admission.No</th>
                                                <th data-hide="phone,tablet" width="20">Student Name</th>
                                                <th width="20">Amount</th>
                                                <th width="20">Paid Date</th>
                                                <th width="20">Fine</th>
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
                        <div class="tab-pane" id="tbb_c">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Reports</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group col-sm-3" id="course">
                                    <label for="reg_input" class="req">Course</label>
                                    <select class="form-control" name="Feesallocation[courseid11]" id="Feesallocation_courseid11">
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
</select><div class="school_val_error" id="Feesallocation_courseid11_em_" style="display:none"></div>                                </div>  
                                <div class="form-group col-sm-3" id="batch">
                                    <label for="reg_input" class="req">Batch</label>
                                    <select class="form-control" name="Feesallocation[batchid11]" id="Feesallocation_batchid11">
<option value="">Select Batch</option>
</select><div class="school_val_error" id="Feesallocation_batchid11_em_" style="display:none"></div>                                </div> 
                                <div class="form-group col-sm-3">
                                    <label for="reg_input" class="req">Fees Category</label>
                                    <select class="form-control" name="Feesallocation[feescategoryid11]" id="Feesallocation_feescategoryid11">
<option value="">Please Select</option>
</select><div class="school_val_error" id="Feesallocation_feescategoryid11_em_" style="display:none"></div>                                </div>  
                                <div class="form-group col-sm-3">
                                    <label for="reg_input" class="req">Fees Sub Category</label>
                                    <select class="form-control" name="Feesallocation[feessubcategoryid11]" id="Feesallocation_feessubcategoryid11">
<option value="">Please Select </option>
</select><div class="school_val_error" id="Feesallocation_feessubcategoryid11_em_" style="display:none"></div>                                </div>  
                                <div class="form-group col-sm-3">
                                    <label for="reg_input" class="req">Fees Type</label>
                                    <select class="form-control" name="Feesallocation[feestype11]" id="Feesallocation_feestype11">
<option value="">Please Select </option>
</select><div class="school_val_error" id="Feesallocation_feestype11_em_" style="display:none"></div>                                </div> 
                                <div class="panel-footer1">
                                    <div class="col-sm-12">
                                        <div class="form-group" align="right">
                                            <input onclick="printDiv('print1')" value="Print Report" class="btn btn-danger" type="button">
                                                                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="print1">
                        <div class="col-sm-12" id="gridview111" style="display:none">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title" id="reporttitle1">Fee Unpaid List For Student</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table responsive table-bordered table-striped" id="reportforunpaidlist">
                                        <thead>
                                            <tr>
                                                <th data-hide="phone,tablet" width="25">Student Admission.No</th>
                                                <th data-hide="phone,tablet" width="25">Student Name</th>
                                                <th width="25">Amount</th>
                                                <th width="25">Due Date</th>
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
        var droplist = $('#Feesallocation_feestype');
        droplist.change(function () {
            $('#studentlist tbody').empty();
            $.ajax({
                type: "POST",
                url: "qpaypopulate",
                data: {courseid: $('#Feesallocation_courseid option:selected').val(), batchid: $('#Feesallocation_batchid option:selected').val(), feescategoryid: $('#Feesallocation_feescategoryid option:selected').val(), feessubcategoryid: $('#Feesallocation_feessubcategoryid option:selected').val(), feestype: $('#Feesallocation_feestype option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#studentlist tbody').append(data);
                    $('#gridview').show();
                }
            });
        })
    });
    function makepayment() {

        var fees = [];
        $('#studentlist tbody tr').each(function (row, tr) {


            if ($(this).find(":checkbox").prop("checked")) {

                var amount = $(tr).find('td:eq(3)').text();
                var studentid = $(tr).find('td:eq(0)').data('id');

                fees.push(amount);
                fees.push(studentid);

            }
        });
        var sendarray = JSON.stringify(fees);

        $.ajax({
            type: "POST",
            url: "paymentdetails",
            data: {courseid: $('#Feesallocation_courseid option:selected').val(), batchid: $('#Feesallocation_batchid option:selected').val(), feescategoryid: $('#Feesallocation_feescategoryid option:selected').val(), feessubcategoryid: $('#Feesallocation_feessubcategoryid option:selected').val(), sendarray: sendarray, feestype: $('#Feesallocation_feestype option:selected').val()},
            dataType: "html",
            success: function (data) {
                alert("Fees Paid Successfully");

            }
        })

    }
    $(document).ready(function () {
        $('#checkall').click(function (event) {  //on click 
            if (this.checked) { // check select status
                $('.checkbox').each(function () { //loop through each checkbox
                    this.checked = true;  //select all checkboxes with class "checkbox1"               
                });
            } else {
                $('.checkbox').each(function () { //loop through each checkbox
                    this.checked = false; //deselect all checkboxes with class "checkbox1"                       
                });
            }
        });

    });
    $(document).ready(function () {
        var droplist = $('#Feesallocation_feestype1');
        droplist.change(function () {
            $('#studentlistreport tbody').empty();
            $.ajax({
                type: "POST",
                url: "paidreports",
                data: {courseid: $('#Feesallocation_courseid1 option:selected').val(), batchid: $('#Feesallocation_batchid1 option:selected').val(), feescategoryid: $('#Feesallocation_feescategoryid1 option:selected').val(), feessubcategoryid: $('#Feesallocation_feessubcategoryid1 option:selected').val(), feestype: $('#Feesallocation_feestype1 option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#studentlistreport tbody').append(data);
                    $('#gridview11').show();

                }
            });
        })
    });
    $(document).ready(function () {
        var droplist = $('#Feesallocation_feestype11');
        droplist.change(function () {
            $('#reportforunpaidlist tbody').empty();
            $.ajax({
                type: "POST",
                url: "unpaidreports",
                data: {courseid: $('#Feesallocation_courseid11 option:selected').val(), batchid: $('#Feesallocation_batchid11 option:selected').val(), feescategoryid: $('#Feesallocation_feescategoryid11 option:selected').val(), feessubcategoryid: $('#Feesallocation_feessubcategoryid11 option:selected').val(), feestype: $('#Feesallocation_feestype11 option:selected').val()},
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
            </div><!--contentinner-->
        </div>