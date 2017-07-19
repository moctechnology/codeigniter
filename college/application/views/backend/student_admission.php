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
    .error{
        color:red;
    }
    hr {
        border: 0; height: 1px; background: #AA80CE; box-shadow: 0px 1px 0px #DDCCEB;
    }
</style>
<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Student</a></li>
            <li class="active">Student Admission</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form enctype="multipart/form-data" id="student-form" action="/index.php/core/student/create" method="post">
    <div class="row">
        <div class="col-sm-12">
                                    <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Student Admission</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                                                <div class="row">
                            <p><b>OFFICIAL DETAILS:-</b></p><hr>
                            <div class="form-group col-sm-4">
                                <label for="reg_input" class="req">Academic Year</label>
                                <select class="form-control" name="Student[academicid]" id="Student_academicid">
<option value="">Select Academic Year</option>
<option value="1">2016 - 2017</option>
<option value="6">2025 - 2026</option>
<option value="7">2017 - 2018</option>
<option value="8">2014 - 2015</option>
<option value="9">2024 - 2025</option>
<option value="10">2026 - 2027</option>
<option value="11">2018 - 2019</option>
<option value="12">2009 - 2021</option>
<option value="13">2022 - 2024</option>
<option value="14">2019 - 2023</option>
<option value="15">2020 - 2022</option>
<option value="16">2007 - 2008</option>
<option value="17">2003 - 2013</option>
</select><div class="school_val_error" id="Student_academicid_em_" style="display:none"></div>                            </div> 
                            <div class="form-group col-sm-4">
                                                                <label for="reg_input_name" class="req">Register Number</label>
                                <input class="form-control" name="Student[student_admissionno]" id="Student_student_admissionno" type="text" maxlength="45" value="DEM205">                                <div class="school_val_error" id="Student_student_admissionno_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name" class="req">Joining Date</label>
                                <div data-date-format="yyyy-M-d" class="input-group date">
                                    <input placeholder="Joining Date" class="form-control pickadate picker__input" value="2017-07-16" name="Student[student_admissiondate]" id="Student_student_admissiondate" type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Student_student_admissiondate_root"><div class="picker" id="Student_student_admissiondate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="Student_student_admissiondate_table" title="Pick a year from the dropdown"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" disabled="" aria-controls="Student_student_admissiondate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6" selected="">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Student_student_admissiondate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Student_student_admissiondate_table" title="Go to the next month"> </div></div><table class="picker__table" id="Student_student_admissiondate_table" role="grid" aria-controls="Student_student_admissiondate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498374000000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498460400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498546800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498633200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498719600000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498806000000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1498892400000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1498978800000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499065200000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499151600000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499238000000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499324400000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499410800000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499497200000" role="gridcell">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499583600000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499670000000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499756400000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499842800000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499929200000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500015600000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500102000000" role="gridcell">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1500188400000" role="gridcell" aria-activedescendant="true">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500274800000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500361200000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500447600000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500534000000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500620400000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500706800000" role="gridcell">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500793200000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500879600000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500966000000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501052400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501138800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501225200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501311600000" role="gridcell">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501398000000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501484400000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501570800000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501657200000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501743600000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501830000000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501916400000" role="gridcell">5</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1500188400000" disabled="" aria-controls="Student_student_admissiondate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="Student_student_admissiondate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="Student_student_admissiondate">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Student_student_admissiondate_em_" style="display:none"></div>                                    <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="reg_input" class="req">Course</label>
                                <select class="form-control" name="Student[courseid]" id="Student_courseid">
<option value="">Select Course</option>
<option value="1">java</option>
<option value="2">PREP</option>
<option value="9">STD I</option>
<option value="10">STD II</option>
<option value="11">STD III</option>

<option value="12">STD IV</option>
<option value="14">STD V</option>
<option value="17">STD VI</option>
<option value="18">STD VII</option>
<option value="20">STD IX</option>
<option value="27">STD X</option>
<option value="29">SampleElectronics</option>
<option value="30">STD XI</option>
<option value="33">Class 10</option>
<option value="34">Grade 1</option>
<option value="35">Inter</option>
<option value="41">STD XII</option>
<option value="43">BCA</option>
<option value="44">WHEELCHAIR</option>
<option value="45">24 Hour </option>
<option value="46">web</option>
<option value="47">test</option>
<option value="48">aa</option>
<option value="50">10TH</option>
<option value="51">STD-10</option>
<option value="52">C10</option>
<option value="53">9th</option>
<option value="54">test 12</option>
<option value="55">8th</option>
<option value="56">7th</option>
<option value="57">a122</option>
<option value="58">norsk</option>
<option value="59">10 Classe</option>
<option value="60">123</option>
<option value="61">sa as as as</option>
<option value="62">Economics</option>
<option value="63">dd</option>
<option value="64">MCA</option>
<option value="65">IT</option>
<option value="66">Dynamic Workplace Readiness</option>
<option value="67">MMBA</option>
<option value="68">Primary Section</option>
<option value="69">english1</option>
<option value="71">science</option>
<option value="72">std 10</option>
<option value="73">std 11</option>
<option value="74">Class I</option>
<option value="75">falssafa</option>
<option value="76">Computer Science</option>
<option value="77">Sixth</option>
<option value="78">php</option>
<option value="79">M.B.A</option>
<option value="80">Aba</option>
<option value="81">EGITIM</option>
<option value="82">Zaks</option>
<option value="83">bsc.it</option>
<option value="84">asdasdasd</option>
<option value="85">vg</option>
<option value="86">Software Engineering</option>
<option value="87">baby</option>
<option value="88">Number</option>
<option value="89">Social</option>
<option value="90">BE</option>
<option value="91">Janata Bank</option>
<option value="92">Bvs Nursery</option>
<option value="93">STD X11</option>
<option value="94">b.tech</option>
<option value="95">Drawing</option>
<option value="96">Class3</option>
<option value="97">islam</option>
<option value="98">ll</option>
<option value="99">BVS X Class</option>
<option value="100">cse</option>
<option value="101">dsfdgd</option>
<option value="102">june</option>
<option value="103">ntt</option>
<option value="104">navin</option>
<option value="105">Fundamentos Biblicos</option>
<option value="106">Fundamentos del Ministerio</option>
<option value="107">Desarrollo del Liderazgo</option>
<option value="108">sdfsf</option>
<option value="109">Class 1</option>
<option value="110">III</option>
<option value="111">cpu</option>
<option value="112">Hifz</option>
<option value="113">business</option>
<option value="114">fsadfas</option>
<option value="115">Computer graphic</option>
<option value="116">b-tech</option>
<option value="117">MBA</option>
<option value="118">BBA</option>
</select><div class="school_val_error" id="Student_courseid_em_" style="display:none"></div>                            </div>  
                            <div class="form-group col-sm-4">
                                <label for="reg_input" class="req">Batch</label>
                                <select class="form-control" name="Student[batchid]" id="Student_batchid">
<option value="">Select Batch</option>
</select><div class="school_val_error" id="Student_batchid_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name">Roll No.</label>
                                <input class="form-control" name="Student[student_rollno]" id="Student_student_rollno" type="text" maxlength="60"><div class="school_val_error" id="Student_student_rollno_em_" style="display:none"></div>                
                            </div>
                        </div>
                                                <div class="row">
                            <p><b>PERSONAL DETAILS:-</b></p><hr>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name" class="req">First Name </label>
                                <input class="form-control" name="Student[student_firstname]" id="Student_student_firstname" type="text" maxlength="45"><div class="school_val_error" id="Student_student_firstname_em_" style="display:none"></div>                
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="reg_input_name">Middle Name </label>
                                <input class="form-control" name="Student[student_middlename]" id="Student_student_middlename" type="text" maxlength="45"><div class="school_val_error" id="Student_student_middlename_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name">Last Name</label>
                                <input class="form-control" name="Student[student_lastname]" id="Student_student_lastname" type="text" maxlength="45"><div class="school_val_error" id="Student_student_lastname_em_" style="display:none"></div>                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name" class="req">Date of Birth</label>
                                <div data-date-format="yyyy-M-d" class="input-group date">
                                    <input class="form-control pickadate picker__input" name="Student[student_dob]" id="Student_student_dob" type="text" maxlength="45" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Student_student_dob_root"><div class="picker" id="Student_student_dob_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="Student_student_dob_table" title="Pick a year from the dropdown"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" disabled="" aria-controls="Student_student_dob_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6" selected="">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Student_student_dob_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Student_student_dob_table" title="Go to the next month"> </div></div><table class="picker__table" id="Student_student_dob_table" role="grid" aria-controls="Student_student_dob" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498374000000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498460400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498546800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498633200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498719600000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498806000000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1498892400000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1498978800000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499065200000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499151600000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499238000000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499324400000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499410800000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499497200000" role="gridcell">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499583600000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499670000000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499756400000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499842800000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499929200000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500015600000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500102000000" role="gridcell">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1500188400000" role="gridcell" aria-activedescendant="true">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500274800000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500361200000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500447600000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500534000000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500620400000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500706800000" role="gridcell">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500793200000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500879600000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500966000000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501052400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501138800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501225200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501311600000" role="gridcell">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501398000000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501484400000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501570800000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501657200000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501743600000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501830000000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501916400000" role="gridcell">5</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1500188400000" disabled="" aria-controls="Student_student_dob">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="Student_student_dob">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="Student_student_dob">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Student_student_dob_em_" style="display:none"></div>                                    <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="Gender">Gender</label>
                                <select class="form-control" data-required="true" name="Student[student_gender]" id="Student_student_gender">
<option value="prompt">Please Select</option>
<option value="1">Male</option>
<option value="2">Female</option>
</select><div class="school_val_error" id="Student_student_gender_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="Blood_Group">Blood Group</label>
                                <select class="form-control" name="Student[student_bloodgroup]" id="Student_student_bloodgroup">
<option value="prompt">Please Select</option>
<option value="1">A+</option>
<option value="2">A-</option>
<option value="3">B+</option>
<option value="4">B-</option>
<option value="5">O+</option>
<option value="6">O-</option>
<option value="7">AB+</option>
<option value="8">AB-</option>
</select><div class="school_val_error" id="Student_student_bloodgroup_em_" style="display:none"></div>                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name">Birth Place</label>
                                <input maxlength="45" class="form-control" name="Student[student_birthplace]" id="Student_student_birthplace" type="text"><div class="school_val_error" id="Student_student_birthplace_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="Country">Nationality</label>
                                <select class="form-control" name="Student[student_nationality]" id="Student_student_nationality">

<option value="">Select Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antartica">Antartica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Ashmore and Cartier Island">Ashmore and Cartier Island</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Clipperton Island">Clipperton Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option><option value="Congo, Republic of the">Congo, Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czeck Republic">Czeck Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Europa Island">Europa Island</option><option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="Gabon">Gabon</option><option value="Gambia, The">Gambia, The</option><option value="Gaza Strip">Gaza Strip</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Glorioso Islands">Glorioso Islands</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Howland Island">Howland Island</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Ireland, Northern">Ireland, Northern</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jan Mayen">Jan Mayen</option><option value="Japan">Japan</option><option value="Jarvis Island">Jarvis Island</option><option value="Jersey">Jersey</option><option value="Johnston Atoll">Johnston Atoll</option><option value="Jordan">Jordan</option><option value="Juan de Nova Island">Juan de Nova Island</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Man, Isle of">Man, Isle of</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Midway Islands">Midway Islands</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcaim Islands">Pitcaim Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romainia">Romainia</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Scotland">Scotland</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option><option value="Spain">Spain</option><option value="Spratly Islands">Spratly Islands</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Tobago">Tobago</option><option value="Toga">Toga</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad">Trinidad</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands">Virgin Islands</option><option value="Wales">Wales</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="West Bank">West Bank</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select><div class="school_val_error" id="Student_student_nationality_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name">Mother Tongue</label>
                                <input maxlength="45" class="form-control" name="Student[student_mothertoung]" id="Student_student_mothertoung" type="text"><div class="school_val_error" id="Student_student_mothertoung_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input" class="req">Category</label>
                                <select class="form-control" name="Student[studentcategoryid]" id="Student_studentcategoryid">
<option value="">Select Category</option>
<option value="169">asdasdasdfff</option>
<option value="170">sdf</option>
<option value="172">qq</option>
<option value="173">sc</option>
<option value="174">hamdio</option>
<option value="175">xyzq</option>
<option value="176">hg</option>
<option value="177">sdfdsfsf</option>
<option value="178">Puc one  year</option>
<option value="179">hello</option>
<option value="180">pcm</option>
<option value="181">PCS</option>
<option value="182">mn </option>
<option value="183">dfgfdgfg</option>
<option value="185">rrr</option>
<option value="186">gen</option>
<option value="187">Test</option>
<option value="188">pre primary</option>
</select><div class="school_val_error" id="Student_studentcategoryid_em_" style="display:none"></div>                            </div>  
                            <div class="form-group col-sm-4">
                                <label for="reg_input">Religion</label>
                                <select class="form-control" name="Student[student_religion]" id="Student_student_religion">
<option value="">Select Religion</option>
<option value="Myanm">Myanm</option>
<option value="knlm">knlm</option>
<option value="HINDUfgf">HINDUfgf</option>
<option value="hg">hg</option>
<option value="PATEL">PATEL</option>
<option value="pp">pp</option>
<option value="hinduxfg">hinduxfg</option>
<option value="dd">dd</option>
</select><div class="school_val_error" id="Student_student_religion_em_" style="display:none"></div>                            </div>
                            
                            <div class="form-group col-sm-4">
                                <label for="reg_input">Caste</label>
                                <select class="form-control" name="Student[student_caste]" id="Student_student_caste">
<option value="">Select Caste</option>
<option value="reservation1">reservation1</option>
<option value="sssssssssssssssss">sssssssssssssssss</option>
<option value="genral">genral</option>
<option value="general">general</option>
<option value="HINDUa">HINDUa</option>
<option value="hdh">hdh</option>
<option value="open">open</option>
<option value="Bastard">Bastard</option>
<option value="Myanmar">Myanmar</option>
<option value="Chutiyaa">Chutiyaa</option>
<option value="ISLAM">ISLAM</option>
<option value="erere">erere</option>
<option value="mr">mr</option>
<option value="hjhujh">hjhujh</option>
<option value="dorik">dorik</option>
<option value="lak">lak</option>
<option value="abc">abc</option>
<option value="Test abc">Test abc</option>
<option value="christion">christion</option>
<option value="hin">hin</option>
<option value="saad">saad</option>
<option value="Melanesian">Melanesian</option>
<option value="poor">poor</option>
<option value="asd">asd</option>
<option value="dun">dun</option>
<option value="MBC">MBC</option>
<option value="Caste Name">Caste Name</option>
<option value="Add Caste Caste Name">Add Caste Caste Name</option>
<option value="dddd">dddd</option>
<option value="Verma">Verma</option>
<option value="Kushwaha">Kushwaha</option>
<option value="fffff">fffff</option>
<option value="momo">momo</option>
<option value="qwetr">qwetr</option>
<option value="ZZZZSS">ZZZZSS</option>
<option value="fthfy">fthfy</option>
<option value="SC">SC</option>
<option value="navid">navid</option>
<option value="gandu">gandu</option>
<option value="xfgbghfg">xfgbghfg</option>
</select><div class="school_val_error" id="Student_student_caste_em_" style="display:none"></div>                            </div>

                        </div>
                                                <div class="row">
                            <p><b>CONTACT DETAILS:-</b></p><hr>
                            <div class="form-group col-sm-6">
                                <label for="reg_input_name">Permanent Address</label>
                                <textarea class="form-control" name="Student[student_address2]" id="Student_student_address2"></textarea><div class="school_val_error" id="Student_student_address2_em_" style="display:none"></div>                            </div>
                            <div class="form_group col-sm-6">
                                <label for="reg_input_name" class="req">Present Address</label>
                                <textarea class="form-control" name="Student[student_address1]" id="Student_student_address1"></textarea><div class="school_val_error" id="Student_student_address1_em_" style="display:none"></div>                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="reg_input_currency">City</label>
                                <input class="form-control" name="Student[student_city]" id="Student_student_city" type="text" maxlength="45"><div class="school_val_error" id="Student_student_city_em_" style="display:none"></div>                            </div>

                            <div class="form-group col-sm-4">
                                <label for="reg_input_currency">Pin</label>
                                <input class="form-control" name="Student[student_pincode]" id="Student_student_pincode" type="text" maxlength="45"><div class="school_val_error" id="Student_student_pincode_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="Country">Country</label>
                                <select class="form-control" name="Student[student_country]" id="Student_student_country">

<option value="">Select Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antartica">Antartica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Ashmore and Cartier Island">Ashmore and Cartier Island</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Clipperton Island">Clipperton Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option><option value="Congo, Republic of the">Congo, Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czeck Republic">Czeck Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Europa Island">Europa Island</option><option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="Gabon">Gabon</option><option value="Gambia, The">Gambia, The</option><option value="Gaza Strip">Gaza Strip</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Glorioso Islands">Glorioso Islands</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Howland Island">Howland Island</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Ireland, Northern">Ireland, Northern</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jan Mayen">Jan Mayen</option><option value="Japan">Japan</option><option value="Jarvis Island">Jarvis Island</option><option value="Jersey">Jersey</option><option value="Johnston Atoll">Johnston Atoll</option><option value="Jordan">Jordan</option><option value="Juan de Nova Island">Juan de Nova Island</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Man, Isle of">Man, Isle of</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Midway Islands">Midway Islands</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcaim Islands">Pitcaim Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romainia">Romainia</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Scotland">Scotland</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option><option value="Spain">Spain</option><option value="Spratly Islands">Spratly Islands</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Tobago">Tobago</option><option value="Toga">Toga</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad">Trinidad</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands">Virgin Islands</option><option value="Wales">Wales</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="West Bank">West Bank</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select><div class="school_val_error" id="Student_student_country_em_" style="display:none"></div>                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="Country">State</label>
                                <select class="form-control" name="Student[student_state]" id="Student_student_state">
<option value="" selected="selected">Please Select</option>
</select><div class="school_val_error" id="Student_student_state_em_" style="display:none"></div>                                        
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_currency">Phone</label>
                                <input class="form-control" name="Student[student_phone]" id="Student_student_phone" type="text" maxlength="45"><div class="school_val_error" id="Student_student_phone_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_currency">Mobile</label>
                                <input class="form-control" name="Student[student_mobile]" id="Student_student_mobile" type="text" maxlength="45"><div class="school_val_error" id="Student_student_mobile_em_" style="display:none"></div>                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="reg_input_currency">Email</label>
                                <input class="form-control" name="Student[student_email]" id="Student_student_email" type="text" maxlength="256"><div class="school_val_error" id="Student_student_email_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-6">
                                <label for="reg_input_logo">Upload Photo</label>
                                <input id="ytStudent_student_photo" type="hidden" value="" name="Student[student_photo]"><input name="Student[student_photo]" id="Student_student_photo" type="file"><div class="school_val_error" id="Student_student_photo_em_" style="display:none"></div>                            </div>
                        </div>
                                                <div class="row">
                            <p><b>FATHER'S DETAILS:-</b></p><hr>

                            <div class="form-group col-sm-4">
                                <label>Name  </label>
                                <input class="form-control" name="Parentdetails[father_name]" id="Parentdetails_father_name" type="text" maxlength="60"><div class="errorMessage" id="Parentdetails_father_name_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label>Mobile</label>
                                <input class="form-control" name="Parentdetails[father_mobile]" id="Parentdetails_father_mobile" type="text" maxlength="60"><div class="school_val_error" id="Parentdetails_father_mobile_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label>Job</label>
                                <input class="form-control" name="Parentdetails[father_job]" id="Parentdetails_father_job" type="text" maxlength="60"><div class="school_val_error" id="Parentdetails_father_job_em_" style="display:none"></div>                            </div>
                            <p><b>MOTHER'S DETAILS:-</b></p><hr>
                            <div class="form-group col-sm-4">
                                <label>Name</label>
                                <input class="form-control" name="Parentdetails[mother_name]" id="Parentdetails_mother_name" type="text" maxlength="60"><div class="school_val_error" id="Parentdetails_mother_name_em_" style="display:none"></div>                            </div>

                            <div class="form-group col-sm-4">
                                <label for="reg_input_name">Mobile</label>
                                <input class="form-control" name="Parentdetails[mother_mobile]" id="Parentdetails_mother_mobile" type="text" maxlength="60"><div class="school_val_error" id="Parentdetails_mother_mobile_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name">Job</label>
                                <input class="form-control" name="Parentdetails[mother_job]" id="Parentdetails_mother_job" type="text" maxlength="60"><div class="school_val_error" id="Parentdetails_mother_job_em_" style="display:none"></div>                            </div>

                        </div>
                                                <div class="row">
                            <p><b>PARENT'S DETAILS:-</b></p><hr>
                            <div class="form_group">
                                                                <label for="reg_input_name" class="">Parent Available</label>
                                <input name="guardianavailable" id="checkbox1" type="checkbox">
                            </div>
                            <div class="form-group col-sm-4" id="guardianname">
                                <label for="reg_input_name" class="req">Name  </label>
                                <input class="form-control" data-required="true" name="Guardian[guardian_name]" id="Guardian_guardian_name" type="text" maxlength="256"><div class="errorMessage" id="Guardian_guardian_name_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4" id="guardianrelation">
                                <label for="reg_input_name" class="req">Relation</label>
                                <input class="form-control" data-required="true" name="Guardian[guardian_relation]" id="Guardian_guardian_relation" type="text" maxlength="60"><div class="school_val_error" id="Guardian_guardian_relation_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4" id="education">
                                <label for="reg_input_name">Education</label>
                                <input class="form-control" data-required="true" name="Guardian[guardian_education]" id="Guardian_guardian_education" type="text" maxlength="45"><div class="school_val_error" id="Guardian_guardian_education_em_" style="display:none"></div>                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6" id="occupation">
                                <label for="reg_input_name">Occupation</label>
                                <input class="form-control" data-required="true" name="Guardian[guardian_occupation]" id="Guardian_guardian_occupation" type="text" maxlength="60"><div class="school_val_error" id="Guardian_guardian_occupation_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-6" id="income">
                                <label for="reg_input_name">Income</label>
                                <input class="form-control" data-required="true" name="Guardian[guardian_income]" id="Guardian_guardian_income" type="text" maxlength="45"><div class="school_val_error" id="Guardian_guardian_income_em_" style="display:none"></div>                            </div>
                        </div>
                        <div class="row">
                            <div class="form_group" id="sameaddress">
                                                                <label for="reg_input_name" class="">Check if Parent Address same as Student Address</label>
                                <input name="preaddr" id="checkbox" type="checkbox">
                            </div>
                            <div class="form-group col-sm-6" id="guardianaddress">
                                <label for="reg_input_name"> Address</label>
                                <textarea class="form-control" name="Guardian[guardian_address]" id="Guardian_guardian_address"></textarea><div class="school_val_error" id="Guardian_guardian_address_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-6" id="guardiancity">
                                <label for="reg_input_currency">City</label>
                                <input class="form-control" name="Guardian[guardian_city]" id="Guardian_guardian_city" type="text" maxlength="45"><div class="school_val_error" id="Guardian_guardian_city_em_" style="display:none"></div>                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6" id="guardiancountry">
                                <label for="Country">Country</label>
                                <select class="form-control" name="Guardian[guardian_country]" id="Guardian_guardian_country">

<option value="">Select Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antartica">Antartica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Ashmore and Cartier Island">Ashmore and Cartier Island</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Clipperton Island">Clipperton Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option><option value="Congo, Republic of the">Congo, Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czeck Republic">Czeck Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Europa Island">Europa Island</option><option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="Gabon">Gabon</option><option value="Gambia, The">Gambia, The</option><option value="Gaza Strip">Gaza Strip</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Glorioso Islands">Glorioso Islands</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Howland Island">Howland Island</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Ireland, Northern">Ireland, Northern</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jan Mayen">Jan Mayen</option><option value="Japan">Japan</option><option value="Jarvis Island">Jarvis Island</option><option value="Jersey">Jersey</option><option value="Johnston Atoll">Johnston Atoll</option><option value="Jordan">Jordan</option><option value="Juan de Nova Island">Juan de Nova Island</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Man, Isle of">Man, Isle of</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Midway Islands">Midway Islands</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcaim Islands">Pitcaim Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romainia">Romainia</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Scotland">Scotland</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option><option value="Spain">Spain</option><option value="Spratly Islands">Spratly Islands</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Tobago">Tobago</option><option value="Toga">Toga</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad">Trinidad</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands">Virgin Islands</option><option value="Wales">Wales</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="West Bank">West Bank</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select><div class="school_val_error" id="Guardian_guardian_country_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-6" id="guardianstate">
                                <label for="Country">State</label>
                                <select class="form-control" name="Guardian[guardian_state]" id="Guardian_guardian_state">
<option value="prompt">Please Select</option>
</select><div class="school_val_error" id="Guardian_guardian_state_em_" style="display:none"></div>                                        
                            </div>
                        </div>
                                                <div class="row">
                            <!--<p><b>PARENT:-</b></p><hr>-->
                            <div class="form-group col-sm-4" id="phone">
                                <label for="reg_input_currency">Phone</label>
                                <input class="form-control" name="Guardian[guardian_phone]" id="Guardian_guardian_phone" type="text" maxlength="45"><div class="school_val_error" id="Guardian_guardian_phone_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4" id="mobile">
                                <label for="reg_input_currency" class="req">Mobile</label>
                                <input class="form-control" data-required="true" name="Guardian[guardian_mobile]" id="Guardian_guardian_mobile" type="text" maxlength="45"><div class="school_val_error" id="Guardian_guardian_mobile_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4" id="email">
                                <label for="reg_input_currency" class="req">Email</label>
                                <input class="form-control" data-required="true" name="Guardian[guardian_email]" id="Guardian_guardian_email" type="text" maxlength="60"><div class="school_val_error" id="Guardian_guardian_email_em_" style="display:none"></div>                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group" style="display:none" id="registeredemail">
                                <label for="reg_input_currency" class="req">Registered Parent Email</label>
                                <select class="form-control" name="Guardian[guardian_email1]" id="Guardian_guardian_email1">
<option value="">Select email</option>
<option value="1">v@gmail.com(  VIPIN DHINGRA )</option>
<option value="2">i@gmail.com(  KAILASH CHANDRA )</option>
<option value="3">parent@gmail.com(  Parent name )</option>
<option value="4">parentemail@gmail.com(  guardian )</option>
<option value="24">mailtoarull@gmail.com(   )</option>
<option value="25">johndoe@demo.com(  john )</option>
<option value="26">shrikannth@outlook.com(  sss )</option>
<option value="27">uba@gmail.com(  u ba )</option>
<option value="28">ubaba@gmail.com(  U ba )</option>
<option value="29">hdf@sds.ffg(  vvv )</option>
<option value="30">gskumar@gmail.com(  GS kumar )</option>
<option value="31">vijay@gmail.com(  Vijay )</option>
<option value="32">aaaa@ggg.com(  jhhf  )</option>
<option value="33">sirajulsw@gmail.com(  Sirazul Islam )</option>
<option value="34">kumarraju@gmail.com(  JANARDAN SINGH )</option>
<option value="35">ee@gmail.com(  ertre )</option>
<option value="36">uma@uma.com(  test )</option>
<option value="37">a@gmail.com(  JOHN )</option>
<option value="38">aaaass@sss.com(  qqqq )</option>
<option value="39">xxxzxxsasad@gmail.com(  zxzx )</option>
<option value="40">S@gmail.com(  ljkklj )</option>
<option value="41">sfgsg@ad.gg(  s )</option>
<option value="42">osero@yahoo.com(  Gregory )</option>
<option value="43">dder@hotmail.com(  Jose )</option>
<option value="44">a@a.com(  tintu )</option>
<option value="45">RATI@gmail.com(  DSDSD )</option>
<option value="46">hhghghrf@dsds.com(  sssaaaa )</option>
<option value="47">jklkkjh@kjlhjk.no(  uhjkll )</option>
<option value="48">kati@gmail.com(  uhjkll )</option>
<option value="49">guardian@mailinator.com(   )</option>
<option value="50">ashok_kumar_86@ymail.com(   )</option>
<option value="51">hello@world.com(  Thomas )</option>
<option value="52">Parag356@gmail.com(  Parag Tanle )</option>
<option value="53">rksmkp88@gmail.com(  rakesh )</option>
<option value="54">rakesh_bca2006@gmail.com(  rakesh )</option>
<option value="55">afeaty@gmail.com(  HAKAN )</option>
<option value="56">kuhakhalid@gmail.com(  asd )</option>
<option value="57">Parent@email.com(  Mr Parent )</option>
<option value="58">anilkumarvemoori@gmail.com(  naidu )</option>
<option value="59">doss@gmail.com(  naidu )</option>
<option value="60">abc@xyz.com(  abxccc )</option>
<option value="61">8rxspxy@xyz.com(  abxccc )</option>
<option value="62">yaqubcse2@gmail.com(  mohammad yaqub )</option>
<option value="63">yaqubcse222@gmail.com(  mohammad yaqub )</option>
<option value="64">yaqubcse2222@gmail.com(  mohammad yaqub )</option>
<option value="65">fsdf@sdfd.com(  Test )</option>
<option value="66">Xyzqwe@Gmail.Com(  Xyz )</option>
<option value="67">test@gmail.com(  bb )</option>
<option value="68">cehceh00@yopmail.com(  ceh )</option>
<option value="69">tessting@gmai.com(   )</option>
<option value="70">sdfsdf@dfgdf.fsdg(  sdaf )</option>
<option value="71">x12yz34@gmail.com(  xyz )</option>
<option value="72">fghfg@sdf.sdf(  ftgdfgd )</option>
<option value="73">sdf@gmail.com(  sfd )</option>
<option value="74">nkunz@gmail.com(  Reagan Sekito )</option>
<option value="75">nhhd@mail.com(  dfewfewf )</option>
<option value="76">smlshamim@gmail.com(  Shamim )</option>
<option value="77">nh@mail.com(  grgetrg )</option>
<option value="78">qq@qq.qq(  qwq )</option>
<option value="79">qq@qq.qqs(  qwq )</option>
<option value="80">abc@gmail.com(   )</option>
<option value="81">njhajharia1991@gmail.com(  navin )</option>
<option value="82">bilspatidar@gmail.com(  Vishnu )</option>
<option value="83">k@gmail.com(  MASTER )</option>
<option value="84">rabnsoft@rabnsoft.com(  RABN )</option>
<option value="85">r@mailinator.com(   )</option>
<option value="86">sai@gmail.com(  Simon )</option>
<option value="87">aasdd@gmil.com(  asddfdf )</option>
</select><div class="school_val_error" id="Student_guardian_email1_em_" style="display:none"></div>                            </div>
                            <div class="panel panel-default" id="siblingdetails" style="display:none">
                                <div class="panel-body">
                                    <div class="panel-body">
                                        <div class="row" id="siblings">


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                                                <div class="row">
                            <p><b>PREVIOUS QUALIFICATION DETAILS:-</b></p><hr>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name" class="">School Name</label>
                                <input class="form-control" name="Previousqualification[previousqualification_schoolname]" id="Previousqualification_previousqualification_schoolname" type="text" maxlength="256"><div class="school_val_error" id="Previousqualification_previousqualification_schoolname_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_currency" class="">School Address</label>
                                <textarea class="form-control" name="Previousqualification[previousqualification_address]" id="Previousqualification_previousqualification_address"></textarea><div class="school_val_error" id="Previousqualification_previousqualification_address_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="Country">Qualification</label>
                                <input class="form-control" name="Previousqualification[qualification]" id="Previousqualification_qualification" type="text"><div class="school_val_error" id="Previousqualification_qualification_em_" style="display:none"></div>                            </div>
                        </div>
						<div class="row" id="mark_sheet">
                            <div class="form-group col-sm-3">
                                <input id="ytStudentdocuments_mark_sheet" type="hidden" value="0" name="Studentdocuments[mark_sheet]"><input value="Mark List" name="Studentdocuments[mark_sheet]" id="Studentdocuments_mark_sheet" type="checkbox">                                <label>Mark List</label>
                            </div>
                            
                            <div class="form-group col-sm-5" id="image1" style="display:none">
                                <input id="ytimage7" type="hidden" value="" name="Studentdocuments[image1]"><input onchange="getImg(this,100,'jpeg|png')" id="image7" name="Studentdocuments[image1]" type="file">                                <div class="school_val_error" id="Studentdocuments_image1_em_" style="display:none"></div>                                <label>Upload certificate </label>
                            </div>
                        </div>
                        <div class="row" id="birth_certificate">
                            <div class="form-group col-sm-3">
                                <input id="ytStudentdocuments_birth_certificate" type="hidden" value="0" name="Studentdocuments[birth_certificate]"><input value="Birth Certificate" name="Studentdocuments[birth_certificate]" id="Studentdocuments_birth_certificate" type="checkbox">                                <label>Birth Certificate</label>
                            </div>
                            <div class="form-group col-sm-5" id="image2" style="display:none">
                                <input id="ytimage8" type="hidden" value="" name="Studentdocuments[image2]"><input onchange="getImg1(this,100,'jpeg|png')" id="image8" name="Studentdocuments[image2]" type="file">                                <div class="school_val_error" id="Studentdocuments_image2_em_" style="display:none"></div>                                <label>Upload certificate </label>
                            </div>
                        </div>
                        <div class="row" id="tc">
                            <div class="form-group col-sm-3">
                                <input id="ytStudentdocuments_tc" type="hidden" value="0" name="Studentdocuments[tc]"><input value="Transfer Certificate" name="Studentdocuments[tc]" id="Studentdocuments_tc" type="checkbox">                                <label>Transfer Certificate</label>
                            </div>
                            <div class="form-group col-sm-5" id="image3" style="display:none">
                                <input id="ytimage9" type="hidden" value="" name="Studentdocuments[image3]"><input onchange="getImg2(this,100,'jpeg|png')" id="image9" name="Studentdocuments[image3]" type="file">                                <div class="school_val_error" id="Studentdocuments_image3_em_" style="display:none"></div>                                <label>Upload certificate </label>
                            </div>
                        </div>
                        <div class="row" id="cc">
                            <div class="form-group col-sm-3">
                                <input id="ytStudentdocuments_cc" type="hidden" value="0" name="Studentdocuments[cc]"><input value="Caste Certificate" name="Studentdocuments[cc]" id="Studentdocuments_cc" type="checkbox">                                <label>Caste Certificate</label>
                            </div>
                            <div class="form-group col-sm-5" id="image4" style="display:none">
                                <input id="ytimage10" type="hidden" value="" name="Studentdocuments[image4]"><input onchange="getImg3(this,100,'jpeg|png')" id="image10" name="Studentdocuments[image4]" type="file">                                <div class="school_val_error" id="Studentdocuments_image4_em_" style="display:none"></div>                                <label>Upload certificate </label>
                            </div>
                        </div>
                        <div class="row" id="omc">
                            <div class="form-group col-sm-3">
                                <input id="ytStudentdocuments_omc" type="hidden" value="0" name="Studentdocuments[omc]"><input value="Migration Certificate" name="Studentdocuments[omc]" id="Studentdocuments_omc" type="checkbox">                                <label>Migration Certificate</label>
                            </div>
                            <div class="form-group col-sm-5" id="image5" style="display:none">
                                <input id="ytimage11" type="hidden" value="" name="Studentdocuments[image5]"><input onchange="getImg4(this,100,'jpeg|png')" id="image11" name="Studentdocuments[image5]" type="file">                                <div class="school_val_error" id="Studentdocuments_image5_em_" style="display:none"></div>                                <label>Upload certificate </label>
                            </div>
                        </div>
                        <div class="row" id="affidavit">
                            <div class="form-group col-sm-3">
                                <input id="ytStudentdocuments_affidavit" type="hidden" value="0" name="Studentdocuments[affidavit]"><input value="Affidavit" name="Studentdocuments[affidavit]" id="Studentdocuments_affidavit" type="checkbox">                                <label>Affidavit</label>
                            </div>
                            <div class="form-group col-sm-5" id="image6" style="display:none">
                                <input id="ytimage12" type="hidden" value="" name="Studentdocuments[image6]"><input onchange="getImg5(this,100,'jpeg|png')" id="image12" name="Studentdocuments[image6]" type="file">                                <div class="school_val_error" id="Studentdocuments_image6_em_" style="display:none"></div>                                <label>Upload certificate </label>
                            </div>
                            
                            <div class="form-group col-sm-5" id="text" style="display:none">
                                <label>Certificate Name</label>
                               <input class="form-control" name="Student[other_details]" id="Student_other_details" type="text"><div class="school_val_error" id="Student_other_details_em_" style="display:none"></div>                            </div>
                        </div>
						
                        <p><b>OTHERS:-</b></p><hr>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="reg_input">Admission Fee</label>
                                <select class="form-control" name="Student[feessubcategoryid]" id="Student_feessubcategoryid">
<option value="">Select Fees Sub Category</option>
</select><div class="school_val_error" id="Student_feessubcategoryid_em_" style="display:none"></div>                            </div>
                            <div id="subcategorydetails"></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-2">
                                <label> 
                                     
                                    <label for="reg_input_name" class="">Transport </label>
                                    <input name="transport" id="checkbox4" type="checkbox">

                                </label>
                            </div>
                            <div class="form-group col-sm-2">
                                <label> 
                                     
                                    <label for="reg_input_name" class="">Hostel </label>
                                    <input name="hostel" id="checkbox5" type="checkbox">

                                </label>
                            </div>
                            <div class="row" id="transportdetails" style="display:none">
                                <div class="col-sm-12">
                                    <div class="form-group col-sm-3">
                                        <label class="req">Route</label>
                                        <select class="form-control" name="Student[routemasterid]" id="Student_routemasterid">
<option value="">Select Route Code</option>
<option value="1">001</option>
<option value="8">112</option>
<option value="10">010</option>
<option value="11">02</option>
<option value="12">001</option>
<option value="13">111</option>
<option value="14">Van 01</option>
<option value="15">111</option>
<option value="16">001</option>
<option value="18">01</option>
<option value="19">001</option>
<option value="20">001</option>
<option value="21">001</option>
<option value="22">001</option>
<option value="23">000</option>
<option value="24">AB123</option>
<option value="25">Bvs Ch</option>
<option value="26">56</option>
<option value="27">56</option>
<option value="28">001</option>
<option value="29">MUSLIPEDU </option>
<option value="30">MUSLIPEDU </option>
<option value="31">mm</option>
<option value="32">123</option>
<option value="33">98988</option>
<option value="34">111</option>
<option value="35">010</option>
<option value="36">02</option>
</select><div class="school_val_error" id="Student_routemasterid_em_" style="display:none"></div>                                    </div> 
                                    <div class="form-group col-sm-3">
                                        <label class="req">Destination</label>
                                        <select class="form-control" name="Student[routedetailsid]" id="Student_routedetailsid">
<option value="">Select Destination</option>
</select>                                        <div class="school_val_error" id="Student_routedetailsid_em_" style="display:none"></div>                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="reg_input_name" class="req">Start Date</label>
                                        <div data-date-format="yyyy-M-d" class="input-group date">
                                            <input class="form-control pickadate picker__input" name="Student[transport_startdate]" id="Student_transport_startdate" type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Student_transport_startdate_root"><div class="picker" id="Student_transport_startdate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="Student_transport_startdate_table" title="Pick a year from the dropdown"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" disabled="" aria-controls="Student_transport_startdate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6" selected="">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Student_transport_startdate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Student_transport_startdate_table" title="Go to the next month"> </div></div><table class="picker__table" id="Student_transport_startdate_table" role="grid" aria-controls="Student_transport_startdate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498374000000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498460400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498546800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498633200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498719600000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498806000000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1498892400000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1498978800000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499065200000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499151600000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499238000000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499324400000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499410800000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499497200000" role="gridcell">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499583600000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499670000000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499756400000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499842800000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499929200000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500015600000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500102000000" role="gridcell">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1500188400000" role="gridcell" aria-activedescendant="true">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500274800000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500361200000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500447600000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500534000000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500620400000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500706800000" role="gridcell">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500793200000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500879600000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500966000000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501052400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501138800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501225200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501311600000" role="gridcell">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501398000000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501484400000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501570800000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501657200000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501743600000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501830000000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501916400000" role="gridcell">5</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1500188400000" disabled="" aria-controls="Student_transport_startdate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="Student_transport_startdate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="Student_transport_startdate">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Student_transport_startdate_em_" style="display:none"></div>                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="reg_input_name" class="req">End Date</label>
                                        <div data-date-format="yyyy-M-d" class="input-group date">
                                            <input class="form-control pickadate picker__input" name="Student[transport_enddate]" id="Student_transport_enddate" type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Student_transport_enddate_root"><div class="picker" id="Student_transport_enddate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="Student_transport_enddate_table" title="Pick a year from the dropdown"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" disabled="" aria-controls="Student_transport_enddate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6" selected="">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Student_transport_enddate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Student_transport_enddate_table" title="Go to the next month"> </div></div><table class="picker__table" id="Student_transport_enddate_table" role="grid" aria-controls="Student_transport_enddate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498374000000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498460400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498546800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498633200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498719600000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498806000000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1498892400000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1498978800000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499065200000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499151600000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499238000000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499324400000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499410800000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499497200000" role="gridcell">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499583600000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499670000000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499756400000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499842800000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499929200000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500015600000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500102000000" role="gridcell">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1500188400000" role="gridcell" aria-activedescendant="true">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500274800000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500361200000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500447600000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500534000000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500620400000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500706800000" role="gridcell">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500793200000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500879600000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500966000000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501052400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501138800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501225200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501311600000" role="gridcell">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501398000000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501484400000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501570800000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501657200000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501743600000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501830000000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501916400000" role="gridcell">5</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1500188400000" disabled="" aria-controls="Student_transport_enddate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="Student_transport_enddate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="Student_transport_enddate">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Student_transport_enddate_em_" style="display:none"></div>                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>  
                                </div>
                            </div>

                            <div class="row" id="hosteldetails" style="display:none">
                                <div class="col-sm-12">
                                    <div class="form-group col-sm-3">
                                        <label class="req">Hostel Name</label>
                                        <select class="form-control" name="Student[hosteldetailsid]" id="Student_hosteldetailsid">
<option value="">Select Hostel</option>
<option value="9">Thazin</option>
<option value="16">Inlay</option>
<option value="19">gfdg</option>
<option value="21">Junior Girls 01</option>
<option value="22">kkj</option>
<option value="23">awefr</option>
<option value="24">sample</option>
<option value="25">sample</option>
<option value="27">qwe</option>
<option value="28">asd</option>
<option value="29">ffg</option>
<option value="30">girls ostel</option>
<option value="31">abctest</option>
<option value="32">kkm</option>
<option value="33">test</option>
<option value="34">hemanath</option>
<option value="35">kisd girls</option>
<option value="36">senior boys</option>
<option value="37">fdasd</option>
</select><div class="school_val_error" id="Student_hosteldetailsid_em_" style="display:none"></div>                                    </div> 
                                    <div class="form-group col-sm-3">
                                        <label class="req">Hostel Room</label>
                                        <select class="form-control" name="Student[hostelroomid]" id="Student_hostelroomid">
<option value="">Select Room</option>
</select>                                        <div class="school_val_error" id="Student_hostelroomid_em_" style="display:none"></div>                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="reg_input_name" class="req">Registration Date</label>
                                        <div data-date-format="yyyy-M-d" class="input-group date">
                                            <input class="form-control pickadate picker__input" name="Student[hostel_startdate]" id="Student_hostel_startdate" type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Student_hostel_startdate_root"><div class="picker" id="Student_hostel_startdate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="Student_hostel_startdate_table" title="Pick a year from the dropdown"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" disabled="" aria-controls="Student_hostel_startdate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6" selected="">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Student_hostel_startdate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Student_hostel_startdate_table" title="Go to the next month"> </div></div><table class="picker__table" id="Student_hostel_startdate_table" role="grid" aria-controls="Student_hostel_startdate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498374000000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498460400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498546800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498633200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498719600000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498806000000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1498892400000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1498978800000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499065200000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499151600000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499238000000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499324400000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499410800000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499497200000" role="gridcell">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499583600000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499670000000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499756400000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499842800000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499929200000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500015600000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500102000000" role="gridcell">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1500188400000" role="gridcell" aria-activedescendant="true">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500274800000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500361200000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500447600000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500534000000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500620400000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500706800000" role="gridcell">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500793200000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500879600000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500966000000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501052400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501138800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501225200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501311600000" role="gridcell">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501398000000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501484400000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501570800000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501657200000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501743600000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501830000000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501916400000" role="gridcell">5</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1500188400000" disabled="" aria-controls="Student_hostel_startdate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="Student_hostel_startdate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="Student_hostel_startdate">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Student_hostel_startdate_em_" style="display:none"></div>                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="reg_input_name" class="req">Vacating Date</label>
                                        <div data-date-format="yyyy-M-d" class="input-group date">
                                            <input class="form-control pickadate picker__input" name="Student[hostel_enddate]" id="Student_hostel_enddate" type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Student_hostel_enddate_root"><div class="picker" id="Student_hostel_enddate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="Student_hostel_enddate_table" title="Pick a year from the dropdown"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" disabled="" aria-controls="Student_hostel_enddate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6" selected="">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Student_hostel_enddate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Student_hostel_enddate_table" title="Go to the next month"> </div></div><table class="picker__table" id="Student_hostel_enddate_table" role="grid" aria-controls="Student_hostel_enddate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498374000000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498460400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498546800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498633200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498719600000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1498806000000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1498892400000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1498978800000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499065200000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499151600000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499238000000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499324400000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499410800000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499497200000" role="gridcell">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499583600000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499670000000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499756400000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499842800000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1499929200000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500015600000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500102000000" role="gridcell">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1500188400000" role="gridcell" aria-activedescendant="true">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500274800000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500361200000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500447600000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500534000000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500620400000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500706800000" role="gridcell">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500793200000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500879600000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1500966000000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501052400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501138800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501225200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501311600000" role="gridcell">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501398000000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1501484400000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501570800000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501657200000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501743600000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501830000000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1501916400000" role="gridcell">5</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1500188400000" disabled="" aria-controls="Student_hostel_enddate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="Student_hostel_enddate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="Student_hostel_enddate">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Student_hostel_enddate_em_" style="display:none"></div>                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="row buttons">
                            <div class="col-sm-5">
                                <div class="form_sep">
                                    <input class="btn btn-info" id="submitbutton" type="submit" name="yt0" value="Save">                                </div>
                            </div>
                        </div>
                                            </div>
                </div>

            </div>
        </div>
    </div></form>
</div>
<script>

function getImg(input, max, accepted) {
        var upImg = new Image(), test, size, msg = input.form;
        msg = msg.elements[0].children[0];
        return input.files ? validate() :
                (upImg.src = input.value, upImg.onerror = upImg.onload = validate);
        "author: b.b. Troy III p.a.e";
        function validate() {
            test = (input.files ? input.files[0] : upImg);
            size = (test.size || test.fileSize) / 1024;
            mime = (test.type || test.mimeType);

            mime.match(RegExp(accepted, 'i')) ?
                    size > max ? (resetimage(), alert("100KB Exceded")) :
                    alert("Upload Is Ready") :
                    (resetimage(), alert(accepted + " file type(s) only!"))
        }
    }
    
    function resetimage(){
        var $el = $('#image7');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        var $el = $('#mark_sheet');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        $('#image1').hide("slow");
        
    }
    function getImg1(input, max, accepted) {
        var upImg = new Image(), test, size, msg = input.form;
        msg = msg.elements[0].children[0];
        return input.files ? validate() :
                (upImg.src = input.value, upImg.onerror = upImg.onload = validate);
        "author: b.b. Troy III p.a.e";
        function validate() {
            test = (input.files ? input.files[0] : upImg);
            size = (test.size || test.fileSize) / 1024;
            mime = (test.type || test.mimeType);

            mime.match(RegExp(accepted, 'i')) ?
                    size > max ? (resetimage1(), alert("100KB Exceded")) :
                    alert("Upload Is Ready") :
                    (resetimage1(), alert(accepted + " file type(s) only!"))
        }
    }
    
    function resetimage1(){
        var $el = $('#image8');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        var $el = $('#birth_certificate');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        $('#image2').hide("slow");
        
    }
    function getImg2(input, max, accepted) {
        var upImg = new Image(), test, size, msg = input.form;
        msg = msg.elements[0].children[0];
        return input.files ? validate() :
                (upImg.src = input.value, upImg.onerror = upImg.onload = validate);
        "author: b.b. Troy III p.a.e";
        function validate() {
            test = (input.files ? input.files[0] : upImg);
            size = (test.size || test.fileSize) / 1024;
            mime = (test.type || test.mimeType);

            mime.match(RegExp(accepted, 'i')) ?
                    size > max ? (resetimage2(), alert("100KB Exceded")) :
                    alert("Upload Is Ready") :
                    (resetimage2(), alert(accepted + " file type(s) only!"))
        }
    }
    
    function resetimage2(){
        var $el = $('#image9');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        var $el = $('#tc');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        $('#image3').hide("slow");
        
    }
    
    function getImg3(input, max, accepted) {
        var upImg = new Image(), test, size, msg = input.form;
        msg = msg.elements[0].children[0];
        return input.files ? validate() :
                (upImg.src = input.value, upImg.onerror = upImg.onload = validate);
        "author: b.b. Troy III p.a.e";
        function validate() {
            test = (input.files ? input.files[0] : upImg);
            size = (test.size || test.fileSize) / 1024;
            mime = (test.type || test.mimeType);

            mime.match(RegExp(accepted, 'i')) ?
                    size > max ? (resetimage3(), alert("100KB Exceded")) :
                    alert("Upload Is Ready") :
                    (resetimage3(), alert(accepted + " file type(s) only!"))
        }
    }
    function resetimage3(){
        var $el = $('#image10');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        var $el = $('#cc');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        $('#image4').hide("slow");
        
    }
    function getImg4(input, max, accepted) {
        var upImg = new Image(), test, size, msg = input.form;
        msg = msg.elements[0].children[0];
        return input.files ? validate() :
                (upImg.src = input.value, upImg.onerror = upImg.onload = validate);
        "author: b.b. Troy III p.a.e";
        function validate() {
            test = (input.files ? input.files[0] : upImg);
            size = (test.size || test.fileSize) / 1024;
            mime = (test.type || test.mimeType);

            mime.match(RegExp(accepted, 'i')) ?
                    size > max ? (resetimage4(), alert("100KB Exceded")) :
                    alert("Upload Is Ready") :
                    (resetimage4(), alert(accepted + " file type(s) only!"))
        }
    }
    
    function resetimage4(){
        var $el = $('#image11');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        var $el = $('#omc');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        $('#image5').hide("slow");
        
    }
    function getImg5(input, max, accepted) {
        var upImg = new Image(), test, size, msg = input.form;
        msg = msg.elements[0].children[0];
        return input.files ? validate() :
                (upImg.src = input.value, upImg.onerror = upImg.onload = validate);
        "author: b.b. Troy III p.a.e";
        function validate() {
            test = (input.files ? input.files[0] : upImg);
            size = (test.size || test.fileSize) / 1024;
            mime = (test.type || test.mimeType);

            mime.match(RegExp(accepted, 'i')) ?
                    size > max ? (resetimage5(), alert("100KB Exceded")) :
                    alert("Upload Is Ready") :
                    (resetimage5(), alert(accepted + " file type(s) only!"))
        }
    }
    
    function resetimage5(){
        var $el = $('#image12');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        var $el = $('#affidavit');
        $el.wrap('<form>').closest('form').get(0).reset();
        $el.unwrap();
        $('#image6').hide("slow");
        $('#text').hide("slow");
        
    }
    $(document).ready(function () {
        $('#Studentdocuments_mark_sheet').click(function (event) {
            if (this.checked) {
                $('#image1').show("slow");

            }
            else {

                $('#image1').hide("slow");

            }
        });

    });
    $(document).ready(function () {
        $('#Studentdocuments_birth_certificate').click(function (event) {
            if (this.checked) {
                $('#image2').show("slow");
            }
            else {

                $('#image2').hide("slow");
            }
        });

    });
    $(document).ready(function () {
        $('#Studentdocuments_tc').click(function (event) {
            if (this.checked) {
                $('#image3').show("slow");

            }
            else {

                $('#image3').hide("slow");

            }
        });

    });
    $(document).ready(function () {
        $('#Studentdocuments_cc').click(function (event) {
            if (this.checked) {
                $('#image4').show("slow");

            }
            else {

                $('#image4').hide("slow");

            }
        });

    });
    $(document).ready(function () {
        $('#Studentdocuments_omc').click(function (event) {
            if (this.checked) {
                $('#image5').show("slow");

            }
            else {

                $('#image5').hide("slow");

            }
        });

    });
    $(document).ready(function () {
        $('#Studentdocuments_affidavit').click(function (event) {
            if (this.checked) {
                $('#image6').show("slow");
                 $('#text').show("slow");

            }
            else {

                $('#image6').hide("slow");
                $('#text').hide("slow");

            }
        });

    });
	
	
    populateCountries("Student_student_nationality");
    populateCountries("Student_student_country", "Student_student_state");
    populateCountries("Guardian_guardian_country", "Guardian_guardian_state");

    $('#checkbox1').click(function (event) {
        if (this.checked) {
            alert("Please select guardian email");
        }
    });
    $(document).ready(function () {
        $('#checkbox').click(function (event) {
            if (this.checked) {
                $('#guardianaddress').hide("slow");
                $('#guardiancity').hide("slow");
                $('#guardiancountry').hide("slow");
                $('#guardianstate').hide("slow");

            }
            else {

                $('#guardianaddress').show("slow");
                $('#guardiancity').show("slow");
                $('#guardiancountry').show("slow");
                $(' #guardia nstate').show("slow");

            }
        });

    });
    $(document).ready(function () {
        $('#checkbox1').click(function (event) {
            if (this.checked) {
                $('#guardianaddress').hide("slow");
                $('#guardiancity').hide("slow");
                $('#guardiancountry').hide("slow");
                $('#guardianstate').hide("slow");
                $('#guardianname').hide("slow");
                $('#guardianrelation').hide("slow");
                $('#education').hide("slow");
                $('#occupation').hide("slow");
                $('#income').hide("slow");
                $('#sameaddress').hide("slow");
                $('#phone').hide("slow");
                $('#email').hide("slow");
                $('#mobile').hide("slow");
                $('#registeredemail').show("slow");
            } else {
                $('#registeredemail').hide("slow");
                $('#guardianaddress').show("slow");
                $('#guardiancity').show("slow");
                $('#guardiancountry').show("slow");
                $('#guardianstate').show("slow");
                $('#guardianname').show("slow");
                $('#guardianrelation').show("slow");
                $('#education').show("slow");
                $('#occupation').show("slow");
                $('#income').show("slow");
                $('#sameaddress').show("slow");
                $('#phone').show("slow");
                $('#email').show("slow");
                $('#mobile').show("slow");

            }
        });

    });
    $(document).ready(function () {
        var droplist = $('#Guardian_guardian_email1');
        droplist.change(function () {
            $('#siblings').empty();
            $.ajax({
                type: "POST",
                url: "viewsiblings",
                data: {guardianemail: $('#Guardian_guardian_email1 option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#siblings').append(data);
                    $('#siblingdetails').show("slow");
                }
            });
        })
    });

    $('#checkbox4').click(function (event) {
        if (this.checked) {
            $('#hosteldetails').hide("slow");
            $('#transportdetails').show("slow");
        } else {
            $('#hosteldetails').hide("slow");
            $('#transportdetails').hide("slow");
        }
    })
    $('#checkbox5').click(function (event) {
        if (this.checked) {
            $('#transportdetails').hide("slow");
            $('#hosteldetails').show("slow");
        } else {
            $('#hosteldetails').hide("slow");
            $('#transportdetails').hide("slow");
        }
    })
    jQuery.extend({
        handleError: function (s, xhr, status, e) {
            // If a local callback was specified, fire it
            if (s.error)
                s.error(xhr, status, e);
            // If we have some XML response text (e.g. from an AJAX call) then log it in the console
            else if (xhr.responseText) {
                alert("Successfully saved");
//                window.open("/index.php/core/student/admin", '_self', false);
                console.log(xhr.responseText);
            }

        }
    });

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

<div class="maincontent">
        	<div class="contentinner">
			<form action="http://localhost/college/index.php/backend/student/student_admission/" method="post" id="">
            <div id="accordion">
            	
				
				
				<h4 class="widgettitle">Official Details</h4>
				<div>
				<ul class="form_details">
				<li><label>Register Number:</label><input type="text" name="reg_number" placeholder="Register Number" /></li>
				<li><label>Joining Date:</label><input id="input_01" class=" span3 datepicker picker__input  d " name="date_from" type="text" autofocuss=""  data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date From" required></li>
				<li><label>Course:</label><select>
				<option>Select Course</option>
				<?php foreach($courses as $val){ ?>
				<option value="<?php echo $val->course_name ?>"><?php echo $val->course_name; ?></option>
				<?php } ?>
				</select></li>
				<li><label>Select Batch:</label><select>
				<option>Select Batch</option>
				<option>2011</option>
				<option>2012</option>
				<option>2013</option>
				<option>2014</option>
				<option>2015</option>
				</select></li>
				<li><label>Roll Number:</label><input type="text" name="roll_no" placeholder="Roll Number" /></li>
				
				
				</ul>
				</div>
				
				
				
		 </div>
				<div class="submit">
                <input type="submit" name="submit" value="Next"  />
				</div>
                </form>
                
            </div><!--contentinner-->
        </div>
		
		