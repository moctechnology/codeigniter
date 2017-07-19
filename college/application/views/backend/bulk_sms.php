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
            <li><a href="#">Message / SMS</a></li>
            <li class="active">Bulk SMS</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
            <form id="smssettings-form" action="/index.php/sms/smssettings/bulksms" method="post">            <div class="row">
                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Bulk SMS</h4>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="reg_input">Phone Number</label>
                                <input class="form-control" name="Smssettings[phonenumber]" id="Smssettings_phonenumber" type="text">                            </div>
                            <div class="form-group" align="center">
                                <label for="reg_input_name">OR</label>

                            </div> 
                            <div class="form-group">
                                <label for="reg_input">SMS For</label>
                                <select class="form-control" data-required="true" name="Smssettings[sms_for]" id="Smssettings_sms_for">
<option value="prompt">Please select</option>
<option value="1">Common to All</option>
<option value="2">Student</option>
<option value="3">Employee</option>
</select>                                                            </div>
                            <div class="form-group" id="students" style="display: block;">
                                <label for="reg_input">SMS For Students In</label>
                                <select class="form-control" data-required="true" name="Smssettings[student]" id="Smssettings_student">
<option value="prompt">Please select</option>
<option value="1">Common to All</option>
<option value="2">Selected Course</option>
<option value="3">Selected Batch</option>
<option value="4">Selected Students</option>
</select>                                                            </div>

                            <div class="form-group" id="employees" style="display: none;">
                                <label for="reg_input">SMS For Employees In</label>
                                <select class="form-control" data-required="true" name="Smssettings[employee]" id="Smssettings_employee">
<option value="prompt">Please select</option>
<option value="1">Common to All</option>
<option value="2">Selected Departmnets</option>
<option value="3">Selected Employees</option>
</select>                                                            </div>
                            <div class="form-group" id="course_mul" style="display: none;">
                                <label for="reg_input">Course (Press Ctrl to select more than one Course)</label>
                                <select class="form-control" multiple="multiple" size="10" name="Smssettings[courseids][]" id="Smssettings_courseids">
<option value="">Select Course</option>
<option value="1">uneco</option>
<option value="2">Economy</option>
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
<option value="213">gphanu</option>
<option value="214">cczx</option>
<option value="215">22</option>
<option value="216">Echocardiography</option>
<option value="217">2nd</option>
<option value="218">Computer Science And engineering</option>
<option value="219">0009</option>
<option value="221">Applied Auditing IV</option>
<option value="222">Mathemeatics</option>
<option value="224">Maths11</option>
<option value="225">ff</option>
<option value="226">hak</option>
<option value="227">Book</option>
<option value="228">Cambodia</option>
<option value="229">kjo</option>
<option value="230">my my</option>
<option value="231">my hhhh</option>
<option value="232">economics</option>
<option value="233">biology</option>
<option value="234">B.Sc in Computer Science</option>
<option value="235">GHS-Nur</option>
<option value="236">PGDBM</option>
</select>                            </div>  


                            <div class="form-group" id="course" style="display: none;">
                                <label for="reg_input">Course</label>
                                <select class="form-control" name="Smssettings[courseid]" id="Smssettings_courseid">
<option value="">Select Course</option>
<option value="1">uneco</option>
<option value="2">Economy</option>
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
<option value="213">gphanu</option>
<option value="214">cczx</option>
<option value="215">22</option>
<option value="216">Echocardiography</option>
<option value="217">2nd</option>
<option value="218">Computer Science And engineering</option>
<option value="219">0009</option>
<option value="221">Applied Auditing IV</option>
<option value="222">Mathemeatics</option>
<option value="224">Maths11</option>
<option value="225">ff</option>
<option value="226">hak</option>
<option value="227">Book</option>
<option value="228">Cambodia</option>
<option value="229">kjo</option>
<option value="230">my my</option>
<option value="231">my hhhh</option>
<option value="232">economics</option>
<option value="233">biology</option>
<option value="234">B.Sc in Computer Science</option>
<option value="235">GHS-Nur</option>
<option value="236">PGDBM</option>
</select>                            </div>  
                            <div class="form-group" id="batch_mul" style="display: none;">
                                <label for="reg_input">Batch (Press Ctrl to select more than one Batch)</label>
                                <select class="form-control" multiple="multiple" name="Smssettings[batchid][]" id="Smssettings_batchid">
<option value="">Select Batch</option>
</select>                            </div>
                            <div class="form-group" id="course1" style="display: none;">
                                <label for="reg_input">Course</label>
                                <select class="form-control" name="Smssettings[courseid1]" id="Smssettings_courseid1">
<option value="">Select Course</option>
<option value="1">uneco</option>
<option value="2">Economy</option>
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
<option value="213">gphanu</option>
<option value="214">cczx</option>
<option value="215">22</option>
<option value="216">Echocardiography</option>
<option value="217">2nd</option>
<option value="218">Computer Science And engineering</option>
<option value="219">0009</option>
<option value="221">Applied Auditing IV</option>
<option value="222">Mathemeatics</option>
<option value="224">Maths11</option>
<option value="225">ff</option>
<option value="226">hak</option>
<option value="227">Book</option>
<option value="228">Cambodia</option>
<option value="229">kjo</option>
<option value="230">my my</option>
<option value="231">my hhhh</option>
<option value="232">economics</option>
<option value="233">biology</option>
<option value="234">B.Sc in Computer Science</option>
<option value="235">GHS-Nur</option>
<option value="236">PGDBM</option>
</select>                            </div>  
                            <div class="form-group" id="batch" style="display: none;">
                                <label for="reg_input">Batch</label>
                                <select class="form-control" name="Smssettings[batchid1]" id="Smssettings_batchid1">
<option value="">Select Batch</option>
</select>                            </div> 

                            <div class="form-group" id="student" style="display: none;">
                                <label for="reg_input">Students (Press Ctrl to select more than one student)</label>
                                <select class="form-control" multiple="multiple" size="10" name="Smssettings[studentid][]" id="Smssettings_studentid">
<option value="">Select Student</option>
</select>                            </div> 
                            <div class="form-group" id="department_mul" style="display: none;">
                                <label for="reg_input">Department (Press Ctrl to select more than one department)</label>
                                <select class="form-control" multiple="multiple" size="10" name="Smssettings[departmentid][]" id="Smssettings_departmentid">
<option value="">Select Department</option>
<option value="1">computer cs</option>
<option value="2">Management</option>
<option value="3">Student Affairs</option>
<option value="4">Human Resources</option>
<option value="5">Finance1</option>
<option value="6">Marketing</option>
<option value="7">Training</option>
<option value="8">Quality</option>
<option value="9">Exam</option>
<option value="10">Admin</option>
<option value="11">BUS</option>
<option value="12">LIBRARY</option>
<option value="13">OTHERS</option>
<option value="14">ACCOUNT</option>
<option value="15">NON TEACHING</option>
<option value="16">dfdffd</option>
<option value="17">mmn</option>
<option value="18">aaaaa1</option>
<option value="19">Faculty</option>
<option value="20">Administration</option>
<option value="21">rte</option>
<option value="22">xzxxas</option>
<option value="23">hostel</option>
<option value="24">Computer Science</option>
<option value="25">CSE</option>
<option value="26">Civil </option>
<option value="27">sdfsf</option>
<option value="28">Animesh Quila</option>
<option value="29">Animesh Quila t</option>
<option value="30">xxxxxxxxxxxxxx</option>
<option value="31">dep</option>
<option value="32">admin1</option>
<option value="33">Peon Dep</option>
<option value="34">Carnatic Vocal</option>
<option value="35">Carnatic Flute</option>
<option value="36">Teaching</option>
<option value="37">dfdf</option>
<option value="38">dI</option>
<option value="39">IT</option>
<option value="40">Information Technology</option>
<option value="41">Class 12</option>
<option value="42">Pubic Admin</option>
<option value="43">Science</option>
<option value="44">Abcd</option>
<option value="45">student</option>
<option value="46">Computers Science</option>
<option value="47">Deptment</option>
<option value="48">Accounting</option>
<option value="49">lkg</option>
<option value="50">xczxcxzc</option>
<option value="51">international relation</option>
<option value="52">hr dep</option>
<option value="53">test1</option>
<option value="54">marhs</option>
<option value="55">civil department</option>
<option value="56">Management department added in guardian login</option>
<option value="57">sports</option>
<option value="58">demo</option>
<option value="59">test</option>
<option value="60">Teaching Ali</option>
<option value="61">fggh</option>
<option value="62">House Keeping</option>
<option value="63">JKSC TEACHING TEAM</option>
<option value="64">electronics</option>
<option value="65">computer cse</option>
<option value="66">NaveenDept</option>
<option value="67">Engineers</option>
<option value="68">Finance Department</option>
<option value="69">india</option>
<option value="70">Business Intelligence</option>
<option value="71">cse cs</option>
<option value="72">ADMIN-KLB</option>
<option value="73">Compuer Application</option>
<option value="74">Human sciences</option>
<option value="75">discipline office</option>
<option value="76">Computer and IT</option>
<option value="77">aa</option>
<option value="78">aahg</option>
</select>                            </div> 
                            <div class="form-group" id="department" style="display: none;">
                                <label for="reg_input">Department</label>
                                <select class="form-control" name="Smssettings[departmentid1]" id="Smssettings_departmentid1">
<option value="">Select Department</option>
<option value="1">computer cs</option>
<option value="2">Management</option>
<option value="3">Student Affairs</option>
<option value="4">Human Resources</option>
<option value="5">Finance1</option>
<option value="6">Marketing</option>
<option value="7">Training</option>
<option value="8">Quality</option>
<option value="9">Exam</option>
<option value="10">Admin</option>
<option value="11">BUS</option>
<option value="12">LIBRARY</option>
<option value="13">OTHERS</option>
<option value="14">ACCOUNT</option>
<option value="15">NON TEACHING</option>
<option value="16">dfdffd</option>
<option value="17">mmn</option>
<option value="18">aaaaa1</option>
<option value="19">Faculty</option>
<option value="20">Administration</option>
<option value="21">rte</option>
<option value="22">xzxxas</option>
<option value="23">hostel</option>
<option value="24">Computer Science</option>
<option value="25">CSE</option>
<option value="26">Civil </option>
<option value="27">sdfsf</option>
<option value="28">Animesh Quila</option>
<option value="29">Animesh Quila t</option>
<option value="30">xxxxxxxxxxxxxx</option>
<option value="31">dep</option>
<option value="32">admin1</option>
<option value="33">Peon Dep</option>
<option value="34">Carnatic Vocal</option>
<option value="35">Carnatic Flute</option>
<option value="36">Teaching</option>
<option value="37">dfdf</option>
<option value="38">dI</option>
<option value="39">IT</option>
<option value="40">Information Technology</option>
<option value="41">Class 12</option>
<option value="42">Pubic Admin</option>
<option value="43">Science</option>
<option value="44">Abcd</option>
<option value="45">student</option>
<option value="46">Computers Science</option>
<option value="47">Deptment</option>
<option value="48">Accounting</option>
<option value="49">lkg</option>
<option value="50">xczxcxzc</option>
<option value="51">international relation</option>
<option value="52">hr dep</option>
<option value="53">test1</option>
<option value="54">marhs</option>
<option value="55">civil department</option>
<option value="56">Management department added in guardian login</option>
<option value="57">sports</option>
<option value="58">demo</option>
<option value="59">test</option>
<option value="60">Teaching Ali</option>
<option value="61">fggh</option>
<option value="62">House Keeping</option>
<option value="63">JKSC TEACHING TEAM</option>
<option value="64">electronics</option>
<option value="65">computer cse</option>
<option value="66">NaveenDept</option>
<option value="67">Engineers</option>
<option value="68">Finance Department</option>
<option value="69">india</option>
<option value="70">Business Intelligence</option>
<option value="71">cse cs</option>
<option value="72">ADMIN-KLB</option>
<option value="73">Compuer Application</option>
<option value="74">Human sciences</option>
<option value="75">discipline office</option>
<option value="76">Computer and IT</option>
<option value="77">aa</option>
<option value="78">aahg</option>
</select>                            </div> 

                            <div class="form-group" id="employee" style="display: none;">
                                <label for="reg_input">Employee (Press Ctrl to select more than one employee)</label>
                                <select class="form-control" multiple="multiple" size="10" name="Smssettings[employeemasterid][]" id="Smssettings_employeemasterid">
<option value="">Select Employee</option>
</select>                            </div> 
                            <div class="alert alert-warning warning">
                            <span class="icon-warning icon-2x" style="color:orange"></span>
                            If you want to incoorporate student information from the database in the message, then you have to include certain codes in the place of student information.
                            <br>
                            The codes are:
                            <br>
                            Code for student ( Studnet Name :#name# , Course : #course# , Batch : #batch# ).
                            
                            </div>
                            <div class="form-group" id="message">
                                <label for="reg_input_name" class="req">Message</label>
                                <textarea rows="2" cols="50" class="form-control" name="Smssettings[message]" id="Smssettings_message"></textarea>                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form_sep">
                                    &nbsp;&nbsp;
                                    <button class="btn btn-info">Send</button> 
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>    </div>
<script>

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
        $('#checkall1').click(function (event) {  //on click 
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
        var droplist = $('#Smssettings_sms_for');
        droplist.change(function () {
            if (droplist.val() === '1') {
                $("#students").hide("slow");
                $("#employees").hide("slow");

                $("#department").hide("slow");
                $("#department_mul").hide("slow");
                $("#course_mul").hide("slow");
                $("#course").hide("slow");
                $("#course1").hide("slow");
                $("#batch").hide("slow");
                $("#batch_mul").hide("slow");
                $("#student").hide("slow");
                $("#employee").hide("slow");

            }
            if (droplist.val() === '2') {
                $("#students").show("slow");
                $("#employees").hide("slow");
                $("#course1").hide("slow");
                $("#department").hide("slow");
                $("#department_mul").hide("slow");
                $("#course_mul").hide("slow");
                $("#course").hide("slow");
                $("#batch").hide("slow");
                $("#batch_mul").hide("slow");
                $("#student").hide("slow");
                $("#employee").hide("slow");

            }
            if (droplist.val() === '3') {
                $("#students").hide("slow");
                $("#employees").show("slow");
                $("#department").hide("slow");
                $("#department_mul").hide("slow");
                $("#course_mul").hide("slow");
                $("#course").hide("slow");
                $("#course1").hide("slow");
                $("#batch").hide("slow");
                $("#batch_mul").hide("slow");
                $("#student").hide("slow");
                $("#employee").hide("slow");
            }
        })
    });

    $(document).ready(function () {
        var droplist = $('#Smssettings_student');
        droplist.change(function () {
            if (droplist.val() === '1') {
                $("#department").hide("slow");
                $("#department_mul").hide("slow");
                $("#course_mul").hide("slow");
                $("#course").hide("slow");
                $("#course1").hide("slow");
                $("#batch_mul").hide("slow");
                $("#batch").hide("slow");
                $("#student").hide("slow");
                $("#employee").hide("slow");
            }
            if (droplist.val() === '2') {
                $("#department").hide("slow");
                $("#department_mul").hide("slow");
                $("#course_mul").show("slow");
                $("#course1").hide("slow");
                $("#course").hide("slow");
                $("#batch_mul").hide("slow");
                $("#batch").hide("slow");
                $("#student").hide("slow");
                $("#employee").hide("slow");
            }
            if (droplist.val() === '3') {
                $("#department").hide("slow");
                $("#department_mul").hide("slow");
                $("#course_mul").hide("slow");
                $("#course").show("slow");
                $("#course1").hide("slow");
                $("#batch_mul").show("slow");
                $("#batch").hide("slow");
                $("#student").hide("slow");
                $("#employee").hide("slow");
            }
            if (droplist.val() === '4') {
                $("#department").hide("slow");
                $("#department_mul").hide("slow");
                $("#course_mul").hide("slow");
                $("#course").hide("slow");
                $("#course1").show("slow");
                $("#batch_mul").hide("slow");
                $("#batch").show("slow");
                $("#student").show("slow");
                $("#employee").hide("slow");
            }
        })
    });
    $(document).ready(function () {
        var droplist = $('#Smssettings_employee');
        droplist.change(function () {
            if (droplist.val() === '1') {
                $("#department").hide("slow");
                $("#department_mul").hide("slow");
                $("#course").hide("slow");
                $("#course1").hide("slow");
                $("#course_mul").hide("slow");
                $("#batch_mul").hide("slow");
                $("#batch").hide("slow");
                $("#student").hide("slow");
                $("#employee").hide("slow");
            }
            if (droplist.val() === '2') {
                $("#department").hide("slow");
                $("#department_mul").show("slow");
                $("#course").hide("slow");
                $("#course1").hide("slow");
                $("#course_mul").hide("slow");
                $("#batch_mul").hide("slow");
                $("#batch").hide("slow");
                $("#student").hide("slow");
                $("#employee").hide("slow");
            }
            if (droplist.val() === '3') {
                $("#department").show("slow");
                $("#department_mul").hide("slow");
                $("#course_mul").hide("slow");
                $("#course1").hide("slow");
                $("#course").hide("slow");
                $("#batch_mul").hide("slow");
                $("#batch").hide("slow");
                $("#student").hide("slow");
                $("#employee").show("slow");
            }
        })
    });

    function sms() {
        var form = $("#smssettings-form");
        var student = [];
        var employee = [];
        $('#studentlist tbody tr').each(function (row, tr) {
            if ($(this).find(":checkbox").prop("checked")) {
                var admissionno = $(tr).find('td:eq(0)').text();
                student.push(admissionno);
            }

        });
        $('#employeelist tbody tr').each(function (row, tr) {

            if ($(this).find(":checkbox").prop("checked")) {
                var employeecode = $(tr).find('td:eq(0)').text();
                employee.push(employeecode);
            }

        });

        var sendarraystudent = JSON.stringify(student);
        var sendarrayemployee = JSON.stringify(employee);

        $.ajax({
            type: "POST",
            url: 'bulksms',
            data: {sendarraystudent: sendarraystudent, sendarrayemployee: sendarrayemployee, phonenumber: $('#Smssettings_phonenumber').val(),
                smsfor: $('#Smssettings_sms_for option:selected').val(), student: $('#Smssettings_student option:selected').val(),
                employee: $('#Smssettings_employee option:selected').val(), courseids: $('#Smssettings_courseids').val(),
                courseid: $('#Smssettings_courseid').val(), batchid: $('#Smssettings_batchid').val(),
                courseid1: $('#Smssettings_courseid1').val(), batchid1: $('#Smssettings_batchid1').val(),
                departmentid: $('#Smssettings_departmentid').val(), departmentid1: $('#Smssettings_departmentid1').val(),
                message: $('#Smssettings_message').val()},
            success: function (data) {

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
                                &copy; 2015. Webschool by GESCIS Technologies Pvt Ltd. V3.0
                            </div>
                        </div>
                    </div>
                </div>