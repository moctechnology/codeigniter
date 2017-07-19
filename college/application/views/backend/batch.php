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
                <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-home2 position-left"></i>Home</a></li>
                 <li><a href="#">Academic</a></li>
            <li><a href="#">Course &amp; Batch</a></li>
                <li class="active">Batch</li>
            </ul>
             <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
            <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
    </div><br>
    <div class="content">
            <form id="batch-form" action="/index.php/core/batch/create" method="post">            <div class="row">
                <div class="col-sm-6">
                   <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Add Batch</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12">

                                <div class="panel-body">
                                    
                                    <div class="form-group">
                                        <label for="reg_input" class="req">Course</label>
                                        <select class="form-control" name="Batch[courseid]" id="Batch_courseid">
<option value="">Please Select</option>
<option value="1">B.Scs</option>
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
</select><div class="school_val_error" id="Batch_courseid_em_" style="display:none"></div>                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Batch Name  </label>
                                        <input class="form-control" name="Batch[batch_name]" id="Batch_batch_name" type="text" maxlength="20"><div class="school_val_error" id="Batch_batch_name_em_" style="display:none"></div>                
                                    </div>

                                    <div class="form-group">
                                        <label for="reg_input_name">Start Date</label>
                                        <div data-date-format="yyyy-m-dd" class="input-group date">
                                            <input placeholder="Start Date" class="form-control pickadate picker__input" name="Batch[batch_startdate]" id="Batch_batch_startdate" type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Batch_batch_startdate_root"><div class="picker" id="Batch_batch_startdate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="Batch_batch_startdate_table" title="Pick a year from the dropdown"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" disabled="" aria-controls="Batch_batch_startdate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1" selected="">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Batch_batch_startdate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Batch_batch_startdate_table" title="Go to the next month"> </div></div><table class="picker__table" id="Batch_batch_startdate_table" role="grid" aria-controls="Batch_batch_startdate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1485628200000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1485714600000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1485801000000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485887400000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485973800000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486060200000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486146600000" role="gridcell">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486233000000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486319400000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486405800000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486492200000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486578600000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486665000000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486751400000" role="gridcell">11</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486837800000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486924200000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487010600000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487097000000" role="gridcell">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487183400000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487269800000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487356200000" role="gridcell">18</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487442600000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487529000000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487615400000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487701800000" role="gridcell">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487788200000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487874600000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487961000000" role="gridcell">25</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1488047400000" role="gridcell" aria-activedescendant="true">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488133800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488220200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488306600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488393000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488479400000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488565800000" role="gridcell">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488652200000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488738600000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488825000000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488911400000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488997800000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1489084200000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1489170600000" role="gridcell">11</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1488047400000" disabled="" aria-controls="Batch_batch_startdate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="Batch_batch_startdate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="Batch_batch_startdate">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Batch_batch_startdate_em_" style="display:none"></div>                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name">End Date</label>
                                        <div data-date-format="yyyy-m-dd" class="input-group date">
                                            <input placeholder="End Date" class="form-control pickadate picker__input" name="Batch[batch_enddate]" id="Batch_batch_enddate" type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Batch_batch_enddate_root"><div class="picker" id="Batch_batch_enddate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="Batch_batch_enddate_table" title="Pick a year from the dropdown"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" disabled="" aria-controls="Batch_batch_enddate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1" selected="">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Batch_batch_enddate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Batch_batch_enddate_table" title="Go to the next month"> </div></div><table class="picker__table" id="Batch_batch_enddate_table" role="grid" aria-controls="Batch_batch_enddate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1485628200000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1485714600000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1485801000000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485887400000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485973800000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486060200000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486146600000" role="gridcell">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486233000000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486319400000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486405800000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486492200000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486578600000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486665000000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486751400000" role="gridcell">11</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486837800000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1486924200000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487010600000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487097000000" role="gridcell">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487183400000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487269800000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487356200000" role="gridcell">18</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487442600000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487529000000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487615400000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487701800000" role="gridcell">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487788200000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487874600000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1487961000000" role="gridcell">25</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1488047400000" role="gridcell" aria-activedescendant="true">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488133800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488220200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488306600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488393000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488479400000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488565800000" role="gridcell">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488652200000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488738600000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488825000000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488911400000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488997800000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1489084200000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1489170600000" role="gridcell">11</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1488047400000" disabled="" aria-controls="Batch_batch_enddate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="Batch_batch_enddate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="Batch_batch_enddate">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Batch_batch_enddate_em_" style="display:none"></div>                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Maximum Number of Students</label>
                                        <input class="form-control" name="Batch[maxnoofstudents]" id="Batch_maxnoofstudents" type="text" maxlength="4"><div class="school_val_error" id="Batch_maxnoofstudents_em_" style="display:none"></div>                
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form_sep">
                                        <input class="btn btn-info" type="submit" name="yt0" value="Save">                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="grid-view table-responsive" id="item-grid">
<table class="items">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Course</th><th id="item-grid_c2">Batch</th><th id="item-grid_c3">Max. No.of Students</th><th id="item-grid_c4">Start Date</th><th id="item-grid_c5">End Date</th><th class="button-column" id="item-grid_c6">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td width="17%">test12</td><td width="15%">ABC</td><td width="15%">38</td><td width="16%">2016-Feb-01</td><td width="16%">2017-Feb-28</td><td width="16%"><a class="icon-pencil" title="" href="/index.php/core/batch/update/id/21"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/batch/delete/id/21"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">2</td><td width="17%">class3</td><td width="15%">secA</td><td width="15%">30</td><td width="16%">2016-Feb-01</td><td width="16%">2017-Feb-01</td><td width="16%"><a class="icon-pencil" title="" href="/index.php/core/batch/update/id/20"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/batch/delete/id/20"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">3</td><td width="17%">class1</td><td width="15%">secA</td><td width="15%">30</td><td width="16%">2016-Feb-01</td><td width="16%">2017-Feb-01</td><td width="16%"><a class="icon-pencil" title="" href="/index.php/core/batch/update/id/19"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/batch/delete/id/19"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">4</td><td width="17%">STD 2</td><td width="15%">as</td><td width="15%">100</td><td width="16%">2016-Feb-19</td><td width="16%">2017-Feb-26</td><td width="16%"><a class="icon-pencil" title="" href="/index.php/core/batch/update/id/18"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/batch/delete/id/18"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">5</td><td width="17%">B.Scs</td><td width="15%">B</td><td width="15%">50</td><td width="16%">2016-Feb-01</td><td width="16%">2017-Feb-28</td><td width="16%"><a class="icon-pencil" title="" href="/index.php/core/batch/update/id/17"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/batch/delete/id/17"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">6</td><td width="17%">abc</td><td width="15%">dfg</td><td width="15%">30</td><td width="16%">2016-Feb-01</td><td width="16%">2017-Feb-15</td><td width="16%"><a class="icon-pencil" title="" href="/index.php/core/batch/update/id/16"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/batch/delete/id/16"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">7</td><td width="17%">Trendz Abacus</td><td width="15%">batch 1</td><td width="15%">20</td><td width="16%">2016-Apr-01</td><td width="16%">2017-Sep-30</td><td width="16%"><a class="icon-pencil" title="" href="/index.php/core/batch/update/id/15"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/batch/delete/id/15"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">8</td><td width="17%">STD 3</td><td width="15%">A</td><td width="15%">75</td><td width="16%">2016-Feb-19</td><td width="16%">2017-Feb-19</td><td width="16%"><a class="icon-pencil" title="" href="/index.php/core/batch/update/id/14"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/batch/delete/id/14"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">9</td><td width="17%">BIS</td><td width="15%">Second Batch</td><td width="15%">120</td><td width="16%">2016-Dec-05</td><td width="16%">2017-Sep-28</td><td width="16%"><a class="icon-pencil" title="" href="/index.php/core/batch/update/id/13"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/batch/delete/id/13"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">10</td><td width="17%">STD 2</td><td width="15%">Batch A</td><td width="15%">50</td><td width="16%">2016-Jun-01</td><td width="16%">2017-Mar-31</td><td width="16%"><a class="icon-pencil" title="" href="/index.php/core/batch/update/id/2"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/batch/delete/id/2"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">11</td><td width="17%">B.Scs</td><td width="15%">A</td><td width="15%">50</td><td width="16%">2016-Apr-01</td><td width="16%">2017-Mar-31</td><td width="16%"><a class="icon-pencil" title="" href="/index.php/core/batch/update/id/1"><img src="" alt=""></a>   <a class="icon-cross2" title="" href="/index.php/core/batch/delete/id/1"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/core/batch/create"><span>21</span><span>20</span><span>19</span><span>18</span><span>17</span><span>16</span><span>15</span><span>14</span><span>13</span><span>2</span><span>1</span></div>
</div>  
                </div>
            </div>
            </form>        </div>
<script>

    $('#Batch_courseid').change(function () {

        $('#item-grid').yiiGridView('update', {
            data: {search: $('#Batch_courseid option:selected').text()}
        });
        return false;

    });


// Date picker
    $('.pickadate').pickadate({
        labelMonthNext: 'Go to the next month',
        labelMonthPrev: 'Go to the previous month',
        labelMonthSelect: 'Pick a month from the dropdown',
        labelYearSelect: 'Pick a year from the dropdown',
        selectMonths: true,
        selectYears: true
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