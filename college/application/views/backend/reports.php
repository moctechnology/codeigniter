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
            <li><a href="#">Library</a></li>
            <li class="active">Reports</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="librarybooks-form" action="/index.php/library/librarybooks/reports" method="post">    <div class="col-sm-12">

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Reports</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group col-sm-3">
                            <label for="reg_input" class="req">Reports for</label>
                            <select class="form-control" name="reportsfor" id="reportsfor">
<option value="">Select Option</option>
<option value="1">Available Books</option>
<option value="2">Issued Books</option>
<option value="3">Recovery Books</option>
<option value="4">Condition wise</option>
<option value="5">Student wise</option>
<option value="6">Employee wise</option>
</select>                        </div> 
                        <div class="form-group col-sm-3" id="bookduestart" style="display: none;">
                            <label>Start Date</label>
                            <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker hasDatepicker" id="dp1476994345058">
                                <input class="form-control pickadate picker__input" id="duestartdate" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="duestartdate_root" type="text"><div class="picker" id="duestartdate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="duestartdate_table" title="Pick a year from the dropdown"><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option></select><select class="picker__select--month" disabled="" aria-controls="duestartdate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9" selected="">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="duestartdate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="duestartdate_table" title="Go to the next month"> </div></div><table class="picker__table" id="duestartdate_table" role="grid" aria-controls="duestartdate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1474741800000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1474828200000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1474914600000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475001000000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475087400000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475173800000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475260200000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475346600000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475433000000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475519400000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475605800000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475692200000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475778600000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475865000000" role="gridcell">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475951400000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476037800000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476124200000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476210600000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476297000000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476383400000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476469800000" role="gridcell">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476556200000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476642600000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476729000000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476815400000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476901800000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1476988200000" role="gridcell" aria-activedescendant="true">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477074600000" role="gridcell">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477161000000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477247400000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477333800000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477420200000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477506600000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477593000000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477679400000" role="gridcell">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477765800000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477852200000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1477938600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1478025000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1478111400000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1478197800000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1478284200000" role="gridcell">5</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1476988200000" disabled="" aria-controls="duestartdate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="duestartdate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="duestartdate">Close</button></div></div></div></div></div></div>
                                <span class="input-group-addon"><i class="icon-calendar"></i></span>
                            <div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">October</span>&nbsp;<span class="ui-datepicker-year">2016</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">1</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">7</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">8</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">14</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">15</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">20</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">21</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">22</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">29</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></div>
                        </div>
                        <div class="form-group col-sm-3" id="bookdueend" style="display: none;">
                            <label>End Date</label>
                            <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker hasDatepicker" id="dp1476994345059">
                                <input class="form-control pickadate picker__input" id="dueenddate" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dueenddate_root" type="text"><div class="picker" id="dueenddate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="dueenddate_table" title="Pick a year from the dropdown"><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option></select><select class="picker__select--month" disabled="" aria-controls="dueenddate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9" selected="">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="dueenddate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="dueenddate_table" title="Go to the next month"> </div></div><table class="picker__table" id="dueenddate_table" role="grid" aria-controls="dueenddate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1474741800000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1474828200000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1474914600000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475001000000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475087400000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1475173800000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475260200000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475346600000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475433000000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475519400000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475605800000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475692200000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475778600000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475865000000" role="gridcell">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1475951400000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476037800000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476124200000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476210600000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476297000000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476383400000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476469800000" role="gridcell">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476556200000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476642600000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476729000000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476815400000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1476901800000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1476988200000" role="gridcell" aria-activedescendant="true">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477074600000" role="gridcell">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477161000000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477247400000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477333800000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477420200000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477506600000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477593000000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477679400000" role="gridcell">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477765800000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1477852200000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1477938600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1478025000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1478111400000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1478197800000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1478284200000" role="gridcell">5</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1476988200000" disabled="" aria-controls="dueenddate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="dueenddate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="dueenddate">Close</button></div></div></div></div></div></div>
                                <span class="input-group-addon"><i class="icon-calendar"></i></span>
                            <div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">October</span>&nbsp;<span class="ui-datepicker-year">2016</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">1</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">7</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">8</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">14</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">15</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">20</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">21</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">22</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">29</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></div>
                        </div>
                        <div class="form-group col-sm-3" id="issuedbutton" style="display: none;">
                            <label>&nbsp;</label><br>
                            <a href="javascript:issuedetails()" class="btn btn-info">Go</a>
                        </div>
                        <div class="form-group col-sm-3" id="condition" style="display: none;">
                            <label for="reg_input" class="req">Conditions</label>
                            <select class="form-control" name="condition" id="condition">
<option value="">Select Option</option>
<option value="1">As New</option>
<option value="2">Fine</option>
<option value="3">Very Good</option>
<option value="4">Good</option>
<option value="5">Fair</option>
<option value="6">Poor</option>
<option value="7">Missing</option>
<option value="8">Lost</option>
</select>                        </div>
                        <div class="form-group col-sm-3" id="studentautocomplete" style="display: none;">
                            <label>Student</label>
                            <input class="form-control ui-autocomplete-input" id="student" value="" name="student" autocomplete="off" type="text"><input id="hidden-fieldstudent" name="output" value="" type="hidden">
                        </div> 
                        <div class="form-group col-sm-3" id="employeeautocomplete" style="display: none;">
                            <label>Employee</label>
                            <input class="form-control ui-autocomplete-input" id="employee" value="" name="employee" autocomplete="off" type="text"><input id="hidden-fieldemployee" name="output" value="" type="hidden">                        </div>
                        <div class="form-group col-sm-3" id="button" style="display: none;">
                            <label>&nbsp;</label><br>
                            <select class="form-control" name="issueorreturn" id="issueorreturn">
<option value="">Select Option</option>
<option value="1">Issued Report</option>
<option value="2">Returned Report</option>
</select>                        </div>
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
        <div class="row" id="print">
            <div class="col-sm-12" id="reports" style="display: block;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-responsive" id="details"><thead><tr><th width="5%">Sl No.</th><th width="14.28%">ISBN No.</th>
                                        <th width="14.28%">Book No.</th>
                                        <th width="23.56%">Title</th>
                                        <th width="14.28%">User Type</th>
                                        <th width="14.28%">User</th>
                                        <th width="9.28%">Issue Date</th>
                                        <th width="14.28%">Due Date</th></tr></thead><tbody><tr><td width="5%">1</td><td width="14.28%">1</td>
                                        <td width="14.28%">11</td>
                                        <td width="23.56%">abc</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">123-asd asd sdasd</td>
                                        <td width="9.28%">2016-Jun-22</td>
                                        <td width="14.28%">2016-Jul-13</td></tr></tbody><tbody><tr><td width="5%">2</td><td width="14.28%">111</td>
                                        <td width="14.28%">12343</td>
                                        <td width="23.56%">AAAA</td>
                                        <td width="14.28%">Employee</td>
                                        <td width="14.28%">eNIEIT112-sdfs  </td>
                                        <td width="9.28%">2016-Jul-04</td>
                                        <td width="14.28%">2016-Jul-25</td></tr></tbody><tbody><tr><td width="5%">3</td><td width="14.28%">1234567890</td>
                                        <td width="14.28%">9999991</td>
                                        <td width="23.56%">Mr Men Fucker</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">NIEIT387-sam  </td>
                                        <td width="9.28%">2016-Jul-11</td>
                                        <td width="14.28%">2016-Jul-18</td></tr></tbody><tbody><tr><td width="5%">4</td><td width="14.28%">12345</td>
                                        <td width="14.28%">9092</td>
                                        <td width="23.56%">sfvs</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">108180146-Parth Y Patel</td>
                                        <td width="9.28%">2016-Jul-26</td>
                                        <td width="14.28%">2016-Jul-30</td></tr></tbody><tbody><tr><td width="5%">5</td><td width="14.28%">22</td>
                                        <td width="14.28%">21014</td>
                                        <td width="23.56%">dsf</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">NIEIT404-adsf asdf asdf</td>
                                        <td width="9.28%">2016-Jul-11</td>
                                        <td width="14.28%">2016-Jul-31</td></tr></tbody><tbody><tr><td width="5%">6</td><td width="14.28%">21</td>
                                        <td width="14.28%">8999</td>
                                        <td width="23.56%">v</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">11103020012-partha  S  Roy</td>
                                        <td width="9.28%">2016-Jul-23</td>
                                        <td width="14.28%">2016-Jul-26</td></tr></tbody><tbody><tr><td width="5%">7</td><td width="14.28%">0001</td>
                                        <td width="14.28%">013</td>
                                        <td width="23.56%">c program</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">001-Zia ur Rahman</td>
                                        <td width="9.28%">2016-Jul-18</td>
                                        <td width="14.28%">2016-Aug-10</td></tr></tbody><tbody><tr><td width="5%">8</td><td width="14.28%">45625978521234</td>
                                        <td width="14.28%">51</td>
                                        <td width="23.56%">maths</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">LU1234561101-swati narayan more</td>
                                        <td width="9.28%">2016-Sep-05</td>
                                        <td width="14.28%">2016-Oct-29</td></tr></tbody><tbody><tr><td width="5%">9</td><td width="14.28%">OR123456789</td>
                                        <td width="14.28%">OR1011</td>
                                        <td width="23.56%">OPERATIONAL REASEARCH AND SOLUTION</td>
                                        <td width="14.28%">Employee</td>
                                        <td width="14.28%">eLU123456157-Nikhil R Diwate</td>
                                        <td width="9.28%">2016-Sep-08</td>
                                        <td width="14.28%">2016-Sep-10</td></tr></tbody><tbody><tr><td width="5%">10</td><td width="14.28%">005</td>
                                        <td width="14.28%">521</td>
                                        <td width="23.56%">saaas</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">A00122-Sherlock  Holmes</td>
                                        <td width="9.28%">2016-Sep-21</td>
                                        <td width="14.28%">2016-Sep-14</td></tr></tbody><tbody><tr><td width="5%">11</td><td width="14.28%">L0001</td>
                                        <td width="14.28%">1521</td>
                                        <td width="23.56%">LB</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">LU1234561108-Abhi  Pandey</td>
                                        <td width="9.28%">2016-Sep-09</td>
                                        <td width="14.28%">2016-Sep-23</td></tr></tbody><tbody><tr><td width="5%">12</td><td width="14.28%">0001</td>
                                        <td width="14.28%">015</td>
                                        <td width="23.56%">c program</td>
                                        <td width="14.28%">Employee</td>
                                        <td width="14.28%">aBC123-sadhana s warade</td>
                                        <td width="9.28%">2016-Sep-14</td>
                                        <td width="14.28%">2016-Sep-20</td></tr></tbody><tbody><tr><td width="5%">13</td><td width="14.28%">L0001</td>
                                        <td width="14.28%">11014</td>
                                        <td width="23.56%">LB</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">123-asd asd sdasd</td>
                                        <td width="9.28%">2016-Sep-22</td>
                                        <td width="14.28%">2016-Sep-30</td></tr></tbody><tbody><tr><td width="5%">14</td><td width="14.28%">125-2528-5155-51</td>
                                        <td width="14.28%">25681</td>
                                        <td width="23.56%">The Event Of the Day </td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">NIEIT485-venkat v </td>
                                        <td width="9.28%">2016-Sep-22</td>
                                        <td width="14.28%">2016-Sep-30</td></tr></tbody><tbody><tr><td width="5%">15</td><td width="14.28%">L0001</td>
                                        <td width="14.28%">121</td>
                                        <td width="23.56%">LB</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">12-walmi we hange</td>
                                        <td width="9.28%">2016-Sep-24</td>
                                        <td width="14.28%">2016-Sep-24</td></tr></tbody><tbody><tr><td width="5%">16</td><td width="14.28%">234</td>
                                        <td width="14.28%">3421</td>
                                        <td width="23.56%">test</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">417-sai s joy</td>
                                        <td width="9.28%">2016-Oct-18</td>
                                        <td width="14.28%">2016-Oct-01</td></tr></tbody><tbody><tr><td width="5%">17</td><td width="14.28%">L0001</td>
                                        <td width="14.28%">13422</td>
                                        <td width="23.56%">LB</td>
                                        <td width="14.28%">Employee</td>
                                        <td width="14.28%">e108180106-srikanth  </td>
                                        <td width="9.28%">2016-Oct-02</td>
                                        <td width="14.28%">2016-Oct-03</td></tr></tbody><tbody><tr><td width="5%">18</td><td width="14.28%">11002</td>
                                        <td width="14.28%">20141</td>
                                        <td width="23.56%">Economics</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">EPS340-Abhishekaaaa asd Pandey</td>
                                        <td width="9.28%">2016-Oct-03</td>
                                        <td width="14.28%">2016-Oct-06</td></tr></tbody><tbody><tr><td width="5%">19</td><td width="14.28%">11002</td>
                                        <td width="14.28%">20144</td>
                                        <td width="23.56%">Economics</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">108180144-sawad  </td>
                                        <td width="9.28%">2016-Sep-22</td>
                                        <td width="14.28%">2016-Oct-03</td></tr></tbody><tbody><tr><td width="5%">20</td><td width="14.28%">005</td>
                                        <td width="14.28%">522</td>
                                        <td width="23.56%">saaas</td>
                                        <td width="14.28%">Student</td>
                                        <td width="14.28%">108180153-Tahir  </td>
                                        <td width="9.28%">2016-Oct-11</td>
                                        <td width="14.28%">2016-Oct-20</td></tr></tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form></div>
<script>
    $("#reportsfor").change(function () {
        if ($('#reportsfor option:selected').val() === '1') {
            $('#studentautocomplete').hide("slow");
            $('#employeeautocomplete').hide("slow");
            $('#condition').hide("slow");
            $('#bookduestart').hide("slow");
            $('#bookdueend').hide("slow");
            $('#issuedbutton').hide("slow");
            $('#button').hide("slow");
            $('#details').empty();
            $.ajax({
                type: "POST",
                url: "availablebookdetails",
                data: {reportsfor: $('#reportsfor option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#details').append(data);
                    $('#reports').show("slow");
                }
            });
        }
        if ($('#reportsfor option:selected').val() === '2') {
            $('#studentautocomplete').hide("slow");
            $('#employeeautocomplete').hide("slow");
            $('#condition').hide("slow");
            $('#reports').hide("slow");
            $('#details').empty();
            $('#bookduestart').show("slow");
            $('#bookdueend').show("slow");
            $('#issuedbutton').show("slow");
            $('#button').hide("slow");
        }
        if ($('#reportsfor option:selected').val() === '3') {
            $('#studentautocomplete').hide("slow");
            $('#employeeautocomplete').hide("slow");
            $('#condition').hide("slow");
            $('#bookduestart').hide("slow");
            $('#bookdueend').hide("slow");
            $('#issuedbutton').hide("slow");
            $('#button').hide("slow");
            $('#details').empty();
            $.ajax({
                type: "POST",
                url: "recoverybookdetails",
                data: {reportsfor: $('#reportsfor option:selected').val()},
                dataType: "html",
                success: function (data) {
                    $('#details').append(data);
                    $('#reports').show("slow");
                }
            });
        }
        if ($('#reportsfor option:selected').val() === '4') {
            $('#studentautocomplete').hide("slow");
            $('#employeeautocomplete').hide("slow");
            $('#reports').hide("slow");
            $('#details').empty();
            $('#bookduestart').hide("slow");
            $('#bookdueend').hide("slow");
            $('#issuedbutton').hide("slow");
            $('#condition').show("slow");
            $('#button').hide("slow");

            $("#condition").change(function () {
                $('#studentautocomplete').hide("slow");
                $('#employeeautocomplete').hide("slow");
                $('#button').hide("slow");
                $('#details').empty();
                $.ajax({
                    type: "POST",
                    url: "conditionwisedetails",
                    data: {condition: $('#condition option:selected').val()},
                    dataType: "html",
                    success: function (data) {
                        $('#details').append(data);
                        $('#reports').show("slow");
                    }
                });

            });
        }
        if ($('#reportsfor option:selected').val() === '5') {
            $('#condition').hide("slow");
            $('#reports').hide("slow");
            $('#details').empty();
            $('#bookduestart').hide("slow");
            $('#bookdueend').hide("slow");
            $('#issuedbutton').hide("slow");
            $('#employeeautocomplete').hide("slow");
            $('#studentautocomplete').show("slow");
            $('#button').show("slow");
        }
        if ($('#reportsfor option:selected').val() === '6') {
            $('#condition').hide("slow");
            $('#reports').hide("slow");
            $('#details').empty();
            $('#bookduestart').hide("slow");
            $('#bookdueend').hide("slow");
            $('#issuedbutton').hide("slow");
            $('#studentautocomplete').hide("slow");
            $('#employeeautocomplete').show("slow");
            $('#button').show("slow");
        }
    });
    function issuedetails() {
        $('#details').empty();
        $.ajax({
            type: "POST",
            url: "issuedbookdetails",
            data: {duestartdate: $('#duestartdate').val(), dueenddate: $('#dueenddate').val()},
            dataType: "html",
            success: function (data) {
                $('#details').append(data);
                $('#reports').show("slow");
            }
        });
    }
    $("#issueorreturn").change(function () {
//      alert(document.getElementById('hidden-fieldstudent').value);
        $('#details').empty();
        $.ajax({
            type: "POST",
            url: "getissueddetails",
            data: {reportsfor: $('#reportsfor option:selected').val(), issueorreturn: $('#issueorreturn option:selected').val(), studentname: document.getElementById('hidden-fieldstudent').value, employeename: document.getElementById('hidden-fieldemployee').value},
            dataType: "html",
            success: function (data) {
                $('#details').append(data);
                $('#reports').show("slow");
            }
        });
    });
     function printDiv(divName) {
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
                                &copy; 2015. Webschool by GESCIS Technologies Pvt Ltd. V3.0
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div><!--contentinner-->
        </div>
		
		