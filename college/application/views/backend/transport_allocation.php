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
            <li><a href="#">Transport</a></li>
            <li class="active">Transport Allocation</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab">Transport Allocation</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab">Manage</a></li>
        </ul>
        <h6 class="content-group text-semibold"></h6>
        <div class="tab-content">
                                     <div class="tab-pane active" id="tbb_a">
                <form id="transportallocation-form" action="/index.php/transport/transportallocation/create" method="post">                <div class="row">
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                    </div>
                    <div class="col-sm-3"> 
                        <input type="text" id="search" class="form-control" placeholder="Search...">
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Transport Allocation</h4>
                            </div>
                            <div class="panel-body">
                                <div class="panel-body">

                                    <div class="form-group">
                                        <label class="req" for="Transportallocation_routemasterid">Route</label>                                        <select class="form-control" name="Transportallocation[routemasterid]" id="Transportallocation_routemasterid">
<option value="">Select Route Code</option>
<option value="1">001</option>
<option value="8">112</option>
</select><div class="school_val_error" id="Transportallocation_routemasterid_em_" style="display:none"></div>                                    </div> 

                                    <div class="form-group">
                                        <label class="req" for="Transportallocation_routedetailsid">Destination</label>                                        <select class="form-control" name="Transportallocation[routedetailsid]" id="Transportallocation_routedetailsid">
<option value="">Select Destination</option>
<option value="1">KOLLAM</option>
<option value="2">trivadrum</option>
<option value="3">kottayam</option>
<option value="10">fgsdfg</option>
<option value="12">Kottayam</option>
<option value="13">fgtt</option>
<option value="14">121212</option>
<option value="15">KOLLAM</option>
</select>                                        <div class="school_val_error" id="Transportallocation_routedetailsid_em_" style="display:none"></div>                                    </div>

                                    <div class="form-group">
                                        <label class="req" for="Transportallocation_usertypeid">Type</label>                                        <select class="form-control" name="Transportallocation[usertypeid]" id="Transportallocation_usertypeid">
<option value="">Select Type</option>
<option value="1">Student</option>
<option value="2">Employee</option>
</select>                                        <div class="school_val_error" id="Transportallocation_usertypeid_em_" style="display:none"></div>                                    </div>

                                    <div class="form-group" id="course" style="display:none">
                                        <label for="reg_input" class="req">Course</label>
                                        <select class="form-control" name="Transportallocation[courseid]" id="Transportallocation_courseid">
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
</select><div class="school_val_error" id="Transportallocation_courseid_em_" style="display:none"></div>                                    </div>  
                                    <div class="form-group" id="batch" style="display:none">
                                        <label for="reg_input" class="req">Batch</label>
                                        <select class="form-control" name="Transportallocation[batchid]" id="Transportallocation_batchid">
<option value="">SelectBatch</option>
</select><div class="school_val_error" id="Transportallocation_batchid_em_" style="display:none"></div>                                    </div>
                                    <div class="form-group" id="student" style="display:none">
                                        <label for="reg_input" class="req">Student</label>
                                        <select class="form-control" multiple="multiple" name="Transportallocation[studentid][]" id="Transportallocation_studentid">
<option value="">Please Select</option>
</select><div class="school_val_error" id="Transportallocation_studentid_em_" style="display:none"></div>                                    </div> 
                                    <!--                        <div class="form-group" id="studentautocomplete" style="display:none">
                                                                <label>Student</label>-->
                                                                        <!--</div>--> 
                                    <div class="form-group" id="employeeautocomplete" style="display:none">
                                        <label>Employee</label>
                                        <input class="form-control ui-autocomplete-input" id="employee" type="text" value="" name="employee" autocomplete="off">                                    </div>
                                    <div class="form-group">
                                       <label for="Transportallocation_transportallocation_startdate">Start Date</label>                                        <div data-date-format="yy-mm-d" class="input-group date">
                                            <input maxlength="45" class="form-control pickadate picker__input" name="Transportallocation[transportallocation_startdate]" id="Transportallocation_transportallocation_startdate" type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Transportallocation_transportallocation_startdate_root"><div class="picker" id="Transportallocation_transportallocation_startdate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="Transportallocation_transportallocation_startdate_table" title="Pick a year from the dropdown"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" disabled="" aria-controls="Transportallocation_transportallocation_startdate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2" selected="">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Transportallocation_transportallocation_startdate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Transportallocation_transportallocation_startdate_table" title="Go to the next month"> </div></div><table class="picker__table" id="Transportallocation_transportallocation_startdate_table" role="grid" aria-controls="Transportallocation_transportallocation_startdate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488047400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488133800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488220200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488306600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488393000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488479400000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488565800000" role="gridcell">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488652200000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488738600000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488825000000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488911400000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488997800000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489084200000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489170600000" role="gridcell">11</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489257000000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489343400000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489429800000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489516200000" role="gridcell">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489602600000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489689000000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489775400000" role="gridcell">18</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489861800000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489948200000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490034600000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490121000000" role="gridcell">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490207400000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1490293800000" role="gridcell" aria-activedescendant="true">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490380200000" role="gridcell">25</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490466600000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490553000000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490639400000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490725800000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490812200000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490898600000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1490985000000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491071400000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491157800000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491244200000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491330600000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491417000000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491503400000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491589800000" role="gridcell">8</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1490293800000" disabled="" aria-controls="Transportallocation_transportallocation_startdate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="Transportallocation_transportallocation_startdate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="Transportallocation_transportallocation_startdate">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Transportallocation_transportallocation_startdate_em_" style="display:none"></div>                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="Transportallocation_transportallocation_enddate">End Date</label>                                        <div data-date-format="yy-mm-d" class="input-group date">
                                            <input maxlength="45" class="form-control pickadate picker__input" name="Transportallocation[transportallocation_enddate]" id="Transportallocation_transportallocation_enddate" type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Transportallocation_transportallocation_enddate_root"><div class="picker" id="Transportallocation_transportallocation_enddate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="Transportallocation_transportallocation_enddate_table" title="Pick a year from the dropdown"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" disabled="" aria-controls="Transportallocation_transportallocation_enddate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2" selected="">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Transportallocation_transportallocation_enddate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Transportallocation_transportallocation_enddate_table" title="Go to the next month"> </div></div><table class="picker__table" id="Transportallocation_transportallocation_enddate_table" role="grid" aria-controls="Transportallocation_transportallocation_enddate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488047400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488133800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488220200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488306600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488393000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488479400000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488565800000" role="gridcell">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488652200000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488738600000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488825000000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488911400000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488997800000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489084200000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489170600000" role="gridcell">11</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489257000000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489343400000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489429800000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489516200000" role="gridcell">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489602600000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489689000000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489775400000" role="gridcell">18</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489861800000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489948200000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490034600000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490121000000" role="gridcell">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490207400000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1490293800000" role="gridcell" aria-activedescendant="true">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490380200000" role="gridcell">25</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490466600000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490553000000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490639400000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490725800000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490812200000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490898600000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1490985000000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491071400000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491157800000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491244200000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491330600000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491417000000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491503400000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491589800000" role="gridcell">8</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1490293800000" disabled="" aria-controls="Transportallocation_transportallocation_enddate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="Transportallocation_transportallocation_enddate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="Transportallocation_transportallocation_enddate">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Transportallocation_transportallocation_enddate_em_" style="display:none"></div>                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form_sep">
                                                <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" type="submit" value="Save">                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-sm-6">
                        <div class="grid-view table-responsive" id="item-grid">
<table class="items">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Route Code</th><th id="item-grid_c2">Destination</th><th id="item-grid_c3">User Type</th><th id="item-grid_c4">Name</th><th id="item-grid_c5">Register No</th><th class="button-column" id="item-grid_c6">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td width="11%">001</td><td width="12%">KOLLAM</td><td width="11%">Employee</td><td width="11%">&nbsp;</td><td width="11%">&nbsp;</td><td width="11%"> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/transport/transportallocation/view/id/31"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/transport/transportallocation/delete/id/31"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">2</td><td width="11%">001</td><td width="12%">KOLLAM</td><td width="11%">Student</td><td width="11%">abc dbc </td><td width="11%">admin123</td><td width="11%"> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/transport/transportallocation/view/id/27"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/transport/transportallocation/delete/id/27"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">3</td><td width="11%">001</td><td width="12%">KOLLAM</td><td width="11%">Student</td><td width="11%">abc dbc </td><td width="11%">admin123</td><td width="11%"> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/transport/transportallocation/view/id/29"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/transport/transportallocation/delete/id/29"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">4</td><td width="11%">001</td><td width="12%">trivadrum</td><td width="11%">Student</td><td width="11%">Aman poul </td><td width="11%">DEM116</td><td width="11%"> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/transport/transportallocation/view/id/21"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/transport/transportallocation/delete/id/21"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">5</td><td width="11%">001</td><td width="12%">KOLLAM</td><td width="11%">Student</td><td width="11%">Aman poul </td><td width="11%">DEM116</td><td width="11%"> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/transport/transportallocation/view/id/28"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/transport/transportallocation/delete/id/28"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">6</td><td width="11%">112</td><td width="12%">121212</td><td width="11%">Student</td><td width="11%">John  Doe</td><td width="11%">DEM114</td><td width="11%"> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/transport/transportallocation/view/id/30"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/transport/transportallocation/delete/id/30"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">7</td><td width="11%">001</td><td width="12%">KOLLAM</td><td width="11%">Student</td><td width="11%">Mehmood  </td><td width="11%">DEM121</td><td width="11%"> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/transport/transportallocation/view/id/26"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/transport/transportallocation/delete/id/26"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">8</td><td width="11%">001</td><td width="12%">trivadrum</td><td width="11%">Employee</td><td width="11%">Jai  Dev</td><td width="11%">eDEM117</td><td width="11%"> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/transport/transportallocation/view/id/23"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/transport/transportallocation/delete/id/23"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">9</td><td width="11%">001</td><td width="12%">KOLLAM</td><td width="11%">Employee</td><td width="11%">Jai  Dev</td><td width="11%">eDEM117</td><td width="11%"> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/transport/transportallocation/view/id/22"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/transport/transportallocation/delete/id/22"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">10</td><td width="11%">001</td><td width="12%">Kottayam</td><td width="11%">Employee</td><td width="11%">Jai  Dev</td><td width="11%">eDEM117</td><td width="11%"> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/transport/transportallocation/view/id/24"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/transport/transportallocation/delete/id/24"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/transport/transportallocation/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/transport/transportallocation/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/transport/transportallocation/create">1</a></li>
<li class="page"><a href="/index.php/transport/transportallocation/create/Transportallocation_page/2">2</a></li>
<li class="next"><a href="/index.php/transport/transportallocation/create/Transportallocation_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/transport/transportallocation/create/Transportallocation_page/2">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/transport/transportallocation/create"><span>31</span><span>27</span><span>29</span><span>21</span><span>28</span><span>30</span><span>26</span><span>23</span><span>22</span><span>24</span></div>
</div>  
                    </div>
                </div>
                </form>            </div>
            <div class="tab-pane" id="tbb_b">
                <form id="transportallocation1-form" action="/index.php/transport/transportallocation/manageallocation" method="post">                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Manage</h4>
                            </div>
                            <div class="panel-body">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-sm-3">
                                            <label class="req">User Type</label>
                                            <select class="form-control" name="Transportallocation[usertypeid1]" id="Transportallocation_usertypeid1">
<option value="">Select Type</option>
<option value="1">Student</option>
<option value="2">Employee</option>
</select>                                                                                    </div>
                                        <div class="form-group col-sm-3" id="course1" style="display:none">
                                            <label for="reg_input" class="req">Course</label>
                                            <select class="form-control" name="Transportallocation[courseid1]" id="Transportallocation_courseid1">
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
</select>                                        </div>  
                                        <div class="form-group col-sm-3" id="batch1" style="display:none">
                                            <label for="reg_input" class="req">Batch</label>
                                            <select class="form-control" name="Transportallocation[batchid1]" id="Transportallocation_batchid1">
<option value="">SelectBatch</option>
</select>                                        </div>
                                        <div class="form-group col-sm-3" id="student1" style="display:none">
                                            <label for="reg_input" class="req">Student</label>
                                            <select class="form-control" name="Transportallocation[studentid1]" id="Transportallocation_studentid1">
<option value="">Please Select</option>
</select>                                        </div> 
                                        <div class="form-group col-sm-3" id="department1" style="display:none">
                                            <label for="reg_input" class="req">Department</label>
                                            <select class="form-control" name="Transportallocation[departmentid]" id="Transportallocation_departmentid">
<option value="">Please Select</option>
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
</select>                                        </div>  
                                        <div class="form-group col-sm-3" id="employee1" style="display:none">
                                            <label for="reg_input" class="req">Employee Name</label>
                                            <select class="form-control" name="Transportallocation[employeemasterid]" id="Transportallocation_employeemasterid">
<option value="">Please Select</option>
</select>                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-3">
                                            <label>From Destination</label>
                                            <select class="form-control" name="Transportallocation[transportallocationid]" id="Transportallocation_transportallocationid">
<option value="">Select From Destination</option>
</select>                                                                                    </div>
                                    </div>
                                    <div class="row">
                                        <h5><b>Change To</b></h5><hr>
                                        <div class="form-group col-sm-3">
                                            <label class="req" for="Transportallocation_routemasterid">Route</label>                                            <select class="form-control" name="Transportallocation[toroutemasterid]" id="Transportallocation_toroutemasterid">
<option value="">Select Route Code</option>
<option value="1">001</option>
<option value="8">112</option>
</select>                                        </div> 
                                        <div class="form-group col-sm-3">
                                            <label class="req" for="Transportallocation_routedetailsid">Destination</label>                                            <select class="form-control" name="Transportallocation[toroutedetailsid]" id="Transportallocation_toroutedetailsid">
<option value="">Select Destination</option>
</select>                                                                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form_sep">
                                                <input class="btn btn-info" type="submit" name="yt0" value="Save">                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>  
            </div>
        </div>
    </div>

</div>
<script>
    $("#Transportallocation_usertypeid").change(function () {
        var str = "";
        str += $(this).val();
        if (str === '1') {
            $("#employeeautocomplete").hide("slow");
//            $("#studentautocomplete").show("slow");
            $("#course").show("slow");
            $("#batch").show("slow");
            $("#student").show("slow");
        }
        if (str === '2') {
            $("#course").hide("slow");
            $("#batch").hide("slow");
            $("#student").hide("slow");
//            $("#studentautocomplete").hide("slow");
            $("#employeeautocomplete").show("slow");
        }
    });
    $("#Transportallocation_usertypeid1").change(function () {
        var str = "";
        str += $(this).val();
        if (str === '1') {
            $("#department1").hide("slow");
            $("#employee1").hide("slow");
            $("#course1").show("slow");
            $("#batch1").show("slow");
            $("#student1").show("slow");
        }
        if (str === '2') {
            $("#course1").hide("slow");
            $("#batch1").hide("slow");
            $("#student1").hide("slow");
            $("#department1").show("slow");
            $("#employee1").show("slow");
        }
    });
    $("#Transportallocation_routedetailsid").change(function () {
        $('#item-grid').yiiGridView('update', {
            data: {search: $('#Transportallocation_routedetailsid option:selected').text()}
        });
        return false;
    });
    $("input").keyup(function () {

        $('#item-grid').yiiGridView('update', {
            data: {search: $('#search').val()}
        });
        return false;

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