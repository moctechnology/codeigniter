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
<style type="text/css" media="print">
    @page { size: landscape; }
</style>

<style>
    @media print {
        .non-printable, .fancybox-outer { display: none; }
        .printable, #printDiv { 
            display: block; 
            font-size: 26pt;
        }
    }
</style>
<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Student</a></li>
            <li class="active">Attendance</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="studentabsent-form" action="/index.php/core/studentabsent/create" method="post">    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab">Attendance (Daily &amp; Subject Wise)</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab">View Attendance</a></li>
        </ul><br>
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Attendance </h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group col-sm-3 validating" id="course">
                                    <label for="reg_input" class="req">Course</label>
                                    <select class="form-control" name="Studentabsent[courseid]" id="Studentabsent_courseid">
<option value="">Select Course</option>
<option value="1">COMPUTER TYPING1</option>
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
<option value="211">Core 1</option>
</select><div class="school_val_error" id="Studentabsent_courseid_em_" style="display:none"></div>                                </div>  

                                <div class="form-group col-sm-3 validating" id="Batch_subject" style="">
                                    <label for="reg_input" class="req">Batch</label>
                                    <select class="form-control" name="Studentabsent[batchid]" id="Studentabsent_batchid"><option value="">Select</option><option value="1">A</option><option value="15">B</option><option value="41">bala</option><option value="47">Imperial Batch</option><option value="67">test</option><option value="69">01</option><option value="89">23r</option><option value="130">jff</option><option value="135">Bat1</option><option value="145">12 PM tO 01 PM</option><option value="146">10 AM tO 11 AM</option><option value="148">9 AM TO 10 AM</option><option value="156">java</option><option value="174">vghvghvhgv</option></select><div class="school_val_error" id="Studentabsent_batchid_em_" style="display:none"></div>                                </div> 

                                <div class="form-group col-sm-3" id="subject" style="display: none;">
                                    <label for="reg_input" class="req">Subject</label>
                                    <select class="form-control" name="Studentabsent[subjectid]" id="Studentabsent_subjectid"><option value="">Select</option><option value="1">COMPUTER  - CT012</option><option value="2">ONLINE TEST SERIES - ONT01</option><option value="3">Datastructure - Ds101</option><option value="4">Software Eng - 01</option><option value="5">OS-001 - OS-001</option><option value="7">English Language - 2</option><option value="34">JAVA - 007</option><option value="13">Miss L - 8459336</option><option value="29">Networking - 0078</option><option value="6">Computer Networks - CN001</option><option value="10">Kannada - 00125</option><option value="23">PHP - 102</option><option value="24">Arul Mathematics - AMATHS</option></select><div class="school_val_error" id="Studentabsent_subjectid_em_" style="display:none"></div>                                </div> 


                                <div class="form-group col-sm-3" id="date" style="">
                                    <label for="reg_input_name" class="req">Date </label>
                                    <div data-date-format="dd-mm-yyyy" class="input-group date ebro_datepicker">

                                        <input placeholder="Date" class="form-control pickadate picker__input" value="21-10-2016" name="Studentabsent[date]" id="Studentabsent_date" maxlength="6" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Studentabsent_date_root" type="text"><div class="picker" id="Studentabsent_date_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="Studentabsent_date_table" title="Pick a year from the dropdown"><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option></select><select class="picker__select--month" disabled="" aria-controls="Studentabsent_date_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9" selected="">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Studentabsent_date_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Studentabsent_date_table" title="Go to the next month"> </div></div><table class="picker__table" id="Studentabsent_date_table" role="grid" aria-controls="Studentabsent_date" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1474741800000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1474828200000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1474914600000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475001000000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475087400000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475173800000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475260200000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475346600000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475433000000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475519400000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475605800000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475692200000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475778600000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475865000000" role="gridcell">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475951400000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476037800000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476124200000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476210600000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476297000000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476383400000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476469800000" role="gridcell">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476556200000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476642600000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476729000000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476815400000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476901800000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1476988200000" role="gridcell" aria-activedescendant="true">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477074600000" role="gridcell">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477161000000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477247400000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477333800000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477420200000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477506600000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477593000000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477679400000" role="gridcell">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477765800000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477852200000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1477938600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1478025000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1478111400000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1478197800000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1478284200000" role="gridcell">5</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1476988200000" disabled="" aria-controls="Studentabsent_date">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="Studentabsent_date">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="Studentabsent_date">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Studentabsent_date_em_" style="display:none"></div>                                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                    </div>
                                    <!--<span class="help-block">dd-mm-yyyy</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p>
                </p><div class="alert alert-warning warning">
                    <span class="icon-warning icon-2x" style="color:orange"></span> Put mark on students who were present.
                </div>
                <p></p>
                                <div class="row">
                    <div class="col-sm-12" id="gridview">

                        <div class="panel panel-default" id="attendancediv" style="">
                            <div class="panel-heading">
                                <h4 class="panel-title">Attendance </h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table responsive table-bordered table-striped" id="studentattendence">
                                    <thead>
                                        <tr>
                                             <th data-hide="phone" class="footable-last-column" width="15%"><input id="checkall" type="checkbox">&nbsp;&nbsp;&nbsp;Check all</th>
                                            <th data-hide="phone,tablet" width="10%">Roll No.</th>
                                            <th data-hide="phone,tablet" width="15%">Student Admission No.</th>
                                            <th data-hide="phone,tablet" width="30%">Student Name</th>
                                            <th data-hide="phone,tablet" width="30%">Remarks</th>                       

                                        </tr>
                                    </thead>
                                    <tbody><tr><td data-id="1113"><input name="attendence" class="checkbox" type="checkbox"></td><td>34</td><td>5454545</td><td>irfan  </td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1117"><input name="attendence" class="checkbox" type="checkbox"></td><td>1</td><td>0012</td><td>asd a a</td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1119"><input name="attendence" class="checkbox" type="checkbox"></td><td>001</td><td>010</td><td>Saphat Saphat MOL</td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1120"><input name="attendence" class="checkbox" type="checkbox"></td><td>54</td><td>3534</td><td>James  Joe</td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1121"><input name="attendence" class="checkbox" type="checkbox"></td><td>test1</td><td>test1</td><td>mm  </td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1124"><input name="attendence" class="checkbox" type="checkbox"></td><td>96</td><td>12124</td><td>samn deo nik</td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1126"><input name="attendence" class="checkbox" type="checkbox"></td><td>232</td><td>REG-123</td><td>FFF FFF FFF</td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1127"><input name="attendence" class="checkbox" type="checkbox"></td><td>1</td><td>1254</td><td>dgfdg  </td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1128"><input name="attendence" class="checkbox" type="checkbox"></td><td>12345</td><td>12356789</td><td>hjjhj  </td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1129"><input name="attendence" class="checkbox" type="checkbox"></td><td>12345</td><td>124</td><td>erwer  </td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1136"><input name="attendence" class="checkbox" type="checkbox"></td><td>1212</td><td>78979997979979887676</td><td>ytyutyug hjhhj hjh</td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1138"><input name="attendence" class="checkbox" type="checkbox"></td><td>789</td><td>514235</td><td>  </td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1139"><input name="attendence" class="checkbox" type="checkbox"></td><td>01</td><td>12345678</td><td>Dil Nawaz Raghib</td><td><input name="remark" class="form-control" type="text"></td></tr><tr><td data-id="1140"><input name="attendence" class="checkbox" type="checkbox"></td><td>01</td><td>12345678</td><td>Dil Nawaz Raghib</td><td><input name="remark" class="form-control" type="text"></td></tr></tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5">
                        <p>&nbsp;&nbsp; <a href="javascript:saveabsent();" class="btn btn-info" align="right">Save</a></p> 
                    </div>
                </div>

            </div>
            <div class="tab-pane" id="tbb_b">
                                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Attendance</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group col-sm-3" id="course">
                                    <label for="reg_input" class="req">Course</label>
                                    <select class="form-control" name="Studentabsent[courseid1]" id="Studentabsent_courseid1">
<option value="">Select Course</option>
<option value="1">COMPUTER TYPING1</option>
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
<option value="211">Core 1</option>
</select><div class="school_val_error" id="Studentabsent_courseid1_em_" style="display:none"></div>                                </div>  

                                <div class="form-group col-sm-3" id="Batch_subject1" style="display:none;">
                                    <label for="reg_input" class="req">Batch</label>
                                    <select class="form-control" name="Studentabsent[batchid1]" id="Studentabsent_batchid1">
<option value="">Select Batch</option>
</select><div class="school_val_error" id="Studentabsent_batchid1_em_" style="display:none"></div>                                </div> 

                                <div class="form-group col-sm-3" id="subject1" style="display:none;">
                                    <label for="reg_input" class="req">Subject</label>
                                    <select class="form-control" name="Studentabsent[subjectid1]" id="Studentabsent_subjectid1">
<option value="">Select Subject</option>
</select><div class="school_val_error" id="Studentabsent_subjectid1_em_" style="display:none"></div>                                </div>  

                                <div class="form-group col-sm-3">
                                                                        <label for="reg_input_name">Month</label>
                                    <!--<div data-date-format="MM"  data-date-autoclose='true' data-date-start-view="2" class="input-group date ebro_datepicker">-->

                                    <select maxlength="6" class="form-control" value="10" name="Studentabsent[date15]" id="Studentabsent_date15">
<option value="0">Select</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select><div class="school_val_error" id="Studentabsent_date15_em_" style="display:none"></div>                                                <!--<span class="input-group-addon"><i class="icon-calendar"></i></span>-->
                                    <!--</div>-->
                                    <!--<span class="help-block">dd-mm-yyyy</span>-->
                                </div>
                                <div class="form-group col-sm-3"></div>
                                <div class="form-group col-sm-3">
                                    <label for="reg_input">&nbsp;</label><br>
                                    <input onclick="printDiv('print')" value="Print Report" class="btn btn-danger" type="button">
                                                                    </div> 

                            </div>
                        </div>
                    </div>
                </div>
                                <div class="row" id="print">
                    <div class="col-sm-12" id="gridview">
                        <div class="panel panel-default" id="attendance">
                            <div class="panel-heading">
                                <h4 class="panel-title" id="reporttitle">Attendance Report</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table responsive table table-bordered table table-striped" id="employeeattendence1">
                                    <thead>
                                        <tr>
                                            <th data-hide="phone,tablet" width="2%"></th>
                                            <th data-hide="phone,tablet" width="2%">1</th>
                                            <th data-hide="phone,tablet" width="2%">2</th>
                                            <th data-hide="phone,tablet" width="2%">3</th>
                                            <th data-hide="phone,tablet" width="2%">4</th>
                                            <th data-hide="phone,tablet" width="2%">5</th>
                                            <th data-hide="phone,tablet" width="2%">6</th>  
                                            <th data-hide="phone,tablet" width="2%">7</th>
                                            <th data-hide="phone,tablet" width="2%">8</th>
                                            <th data-hide="phone,tablet" width="2%">9</th>  
                                            <th data-hide="phone,tablet" width="2%">10</th>
                                            <th data-hide="phone,tablet" width="2%">11</th>
                                            <th data-hide="phone,tablet" width="2%">12</th>  
                                            <th data-hide="phone,tablet" width="2%">13</th>
                                            <th data-hide="phone,tablet" width="2%">14</th>
                                            <th data-hide="phone,tablet" width="2%">15</th>  
                                            <th data-hide="phone,tablet" width="2%">16</th>
                                            <th data-hide="phone,tablet" width="2%">17</th>
                                            <th data-hide="phone,tablet" width="2%">18</th>  
                                            <th data-hide="phone,tablet" width="2%">19</th>
                                            <th data-hide="phone,tablet" width="2%">20</th>
                                            <th data-hide="phone,tablet" width="2%">21</th>  
                                            <th data-hide="phone,tablet" width="2%">22</th>
                                            <th data-hide="phone,tablet" width="2%">23</th>
                                            <th data-hide="phone,tablet" width="2%">24</th>  
                                            <th data-hide="phone,tablet" width="2%">25</th>
                                            <th data-hide="phone,tablet" width="2%">26</th>
                                            <th data-hide="phone,tablet" width="2%">27</th>  
                                            <th data-hide="phone,tablet" width="2%">28</th>
                                            <th data-hide="phone,tablet" width="2%">29</th>
                                            <th data-hide="phone,tablet" width="2%">30</th>  
                                            <th data-hide="phone,tablet" width="2%">31</th>

                                        </tr>
                                    </thead>
                                    <tbody id="attendancebody">


                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
                    </div>
    </div></form>

</div>
<script>
    $(document).ready(function () {
        var droplist = $('#Studentabsent_courseid');
        droplist.change(function () {
            $.ajax({
                type: "POST",
                url: "Viewdropdown",
                data: {courseid: $('#Studentabsent_courseid option:selected').val()},
                dataType: "html",
                success: function (data) {
                    if (data == 1)
                    {
                        $('#Batch_daily').hide("slow");
                        $('#Batch_subject').show("slow");
                        $('#subject').show("slow");
                        $('#date').show("slow");
                    }
                    else
                    {
                        $('#Batch_subject').hide("slow");
                        $('#subject').hide("slow");
                        $('#Batch_subject').show("slow");
                        $('#date').show("slow");
                    }
                }
            });
        })
    });

    $(document).ready(function () {
        var droplist = $('#Studentabsent_subjectid');
        droplist.change(function () {
            $('#studentattendence tbody').empty();
            $.ajax({
                type: "POST",
                url: "Attendencelist_sub",
                data: {courseid: $('#Studentabsent_courseid option:selected').val(), batchid: $('#Studentabsent_batchid option:selected').val(), subjectid: $('#Studentabsent_subjectid option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#studentattendence tbody').append(data);
                    $('#attendancediv').show("slow");
                }
            });
        })
    });

    $(document).ready(function () {
        var droplist = $('#Studentabsent_batchid');
        droplist.change(function () {
            $('#studentattendence tbody').empty();
            $.ajax({
                type: "POST",
                url: "Attendencelist",
                data: {courseid: $('#Studentabsent_courseid option:selected').val(), batchid: $('#Studentabsent_batchid option:selected').val(), subjectid: $('#Studentabsent_subjectid option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#studentattendence tbody').append(data);
                    $('#attendancediv').show("slow");
                }
            });
        })
    });

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

    function saveabsent() {
        var student = [];
         var studentabsent = [];
        $('#studentattendence tbody tr').each(function (row, tr) {

            if ($(this).find(":checkbox").prop("checked")) {
                //var amount = $(tr).find('td:eq(3)').text();
                var studentid = $(tr).find('td:eq(0)').data('id');
                var remark = $(tr).find('td:eq(4) input').val();

                student.push(studentid);
                student.push(remark);
            }else{
                var studentid = $(tr).find('td:eq(0)').data('id');
                studentabsent.push(studentid);
            }

        });
        var sendarray = JSON.stringify(student);
         var studentabsentarray = JSON.stringify(studentabsent);
        $.ajax({
            type: "POST",
            url: "Saveattendence",
            data: {subjectid: $('#Studentabsent_subjectid option:selected').val(), sendarray: sendarray, date: $('#Studentabsent_date').val(),studentabsentarray:studentabsentarray},
            dataType: "html",
            success: function (data) {
                alert("Successfully saved");

            }
        })
    }

    $(document).ready(function () {
        var droplist = $('#Studentabsent_courseid1');
        droplist.change(function () {
            $.ajax({
                type: "POST",
                url: "Viewdropdown1",
                data: {courseid: $('#Studentabsent_courseid1 option:selected').val()},
                dataType: "html",
                success: function (data) {
                    if (data == 1)
                    {
                        $('#Batch_daily1').hide("slow");
                        $('#Batch_subject1').show("slow");
                        $('#subject1').show("slow");
                    }
                    else
                    {
                        $('#Batch_subject1').hide("slow");
                        $('#subject1').hide("slow");
                        $('#Batch_subject1').show("slow");
                    }
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