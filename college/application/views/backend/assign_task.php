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
            <li><a href="#">Task Manager</a></li>
            <li class="active">Assign Task</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i>Support </a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
            <form id="taskmanager-form" action="/index.php/core/taskmanager/create" method="post">            <div class="row">
                <div class="col-sm-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Assign Task</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12">

                                <div class="panel-body">
                                                                                                            <div class="form-group">
                                        <label for="reg_input_name" class="req">Task</label>
                                        <input size="84" maxlength="45" class="form-control" name="Taskmanager[task_heading]" id="Taskmanager_task_heading" type="text"><div class="school_val_error" id="Taskmanager_task_heading_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Description</label>
                                        <textarea class="form-control" name="Taskmanager[task_description]" id="Taskmanager_task_description"></textarea><div class="school_val_error" id="Taskmanager_task_description_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Priority</label>
                                        <select class="form-control" name="Taskmanager[task_priority]" id="Taskmanager_task_priority">
<option value="">Please Select</option>
<option value="1">Highest Priority</option>
<option value="2">High Priority</option>
<option value="3">Normal Priority</option>
<option value="4">Low Priority</option>
</select><div class="school_val_error" id="Taskmanager_task_priority_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Task Date</label>
                                        <div data-date-format="yyyy-M-dd" class="input-group date success">
                                            <input placeholder="Date" class="form-control pickadate picker__input" name="Taskmanager[task_date]" id="Taskmanager_task_date" type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Taskmanager_task_date_root"><div class="picker" id="Taskmanager_task_date_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" aria-controls="Taskmanager_task_date_table" title="Pick a year from the dropdown" disabled="disabled"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" aria-controls="Taskmanager_task_date_table" title="Pick a month from the dropdown" disabled="disabled"><option value="0" selected="">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Taskmanager_task_date_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Taskmanager_task_date_table" title="Go to the next month"> </div></div><table class="picker__table" id="Taskmanager_task_date_table" role="grid" aria-controls="Taskmanager_task_date" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483209000000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483295400000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483381800000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483468200000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483554600000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483641000000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483727400000" role="gridcell">7</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483813800000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483900200000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483986600000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484073000000" role="gridcell">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484159400000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1484245800000" role="gridcell" aria-selected="true" aria-activedescendant="true">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484332200000" role="gridcell">14</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484418600000" role="gridcell">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today" data-pick="1484505000000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484591400000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484677800000" role="gridcell">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484764200000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484850600000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484937000000" role="gridcell">21</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485023400000" role="gridcell">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485109800000" role="gridcell">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485196200000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485282600000" role="gridcell">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485369000000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485455400000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485541800000" role="gridcell">28</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485628200000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485714600000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485801000000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1485887400000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1485973800000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486060200000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486146600000" role="gridcell">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486233000000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486319400000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486405800000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486492200000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486578600000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486665000000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486751400000" role="gridcell">11</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1484505000000" aria-controls="Taskmanager_task_date" disabled="disabled">Today</button><button class="picker__button--clear" type="button" data-clear="1" aria-controls="Taskmanager_task_date" disabled="disabled">Clear</button><button class="picker__button--close" type="button" data-close="true" aria-controls="Taskmanager_task_date" disabled="disabled">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Taskmanager_task_date_em_" style="display: none;">Task Date cannot be blank.</div>                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">User Type</label>
                                        <select class="form-control" name="Taskmanager[usertypeid]" id="Taskmanager_usertypeid">
<option value="">Please Select</option>
<option value="1">Student</option>
<option value="2">Employee</option>
</select><div class="school_val_error" id="Taskmanager_usertypeid_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group" id="course" style="display:none">
                                        <label for="reg_input" class="req">Course</label>
                                        <select class="form-control" name="Taskmanager[courseid]" id="Taskmanager_courseid">
<option value="">Please Select</option>
<option value="1">STD 1</option>
<option value="2">STD 2</option>
<option value="3">Course1</option>
<option value="5">Survival Document</option>
<option value="6">Survival Passport</option>
<option value="7">Beginner Application</option>
<option value="10">bbbb</option>
<option value="14">a1</option>
<option value="15">a2</option>
<option value="16">English</option>
<option value="17">Grade 1</option>
<option value="18">dfgdfg</option>
<option value="19">dsfdsfd</option>
<option value="20">Class 1</option>
<option value="21">bca</option>
<option value="22">BS Computer Science</option>
<option value="23">BBsc</option>
</select><div class="school_val_error" id="Taskmanager_courseid_em_" style="display:none"></div>                                    </div>
                                    <div class="form-group" id="batch" style="display:none">
                                        <label for="reg_input" class="req">Batch</label>
                                        <select class="form-control" name="Taskmanager[batchid]" id="Taskmanager_batchid">
<option value="">Please Select</option>
</select><div class="school_val_error" id="Taskmanager_batchid_em_" style="display:none"></div>                                    </div> 
                                    <div class="form-group" id="student" style="display:none">
                                        <label for="reg_input" class="req">Student (Press Ctrl to select more than one student)</label>
                                        <select class="form-control" multiple="multiple" size="10" name="Taskmanager[studentid][]" id="Taskmanager_studentid">
</select><div class="school_val_error" id="Taskmanager_studentid_em_" style="display:none"></div>
                                    </div>
                                    <div class="form-group" id="department" style="display:none">
                                        <label for="reg_input" class="req">Department</label>
                                        <select class="form-control" name="Taskmanager[departmentid]" id="Taskmanager_departmentid">
<option value="">Please Select</option>
<option value="1">Computer</option>
<option value="2">IT deptt</option>
<option value="3">Finance and Accounts</option>
<option value="4">Faculty</option>
<option value="5">Faculty of English</option>
<option value="6">science</option>
</select><div class="school_val_error" id="Taskmanager_departmentid_em_" style="display:none"></div>                                    </div>
                                    <div class="form-group" id="employee" style="display:none">
                                        <label for="reg_input" class="req">Employee (Press Ctrl to select more than one employee)</label>
                                        <select class="form-control" multiple="multiple" size="10" name="Taskmanager[employeemasterid][]" id="Taskmanager_employeemasterid">
</select><div class="school_val_error" id="Taskmanager_employeemasterid_em_" style="display:none"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_input_name" class="req">Status</label>
                                        <select class="form-control" name="Taskmanager[task_status]" id="Taskmanager_task_status">
<option value="">Please Select</option>
<option value="1">Open</option>
<option value="2">On hold</option>
<option value="3">Resolved</option>
<option value="4">Closed</option>
</select><div class="school_val_error" id="Taskmanager_task_status_em_" style="display:none"></div>                
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form_sep">
                                        <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" type="submit" value="Save">                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </form>        </div>
<script>

    $('#Taskmanager_usertypeid').change(function () {
        if ($('#Taskmanager_usertypeid option:selected').val() === '1') { //! Student
            $('#department').hide("slow");
            $('#employee').hide("slow");
            $('#course').show("slow");
            $('#batch').show("slow");
            $('#student').show("slow");

        } else if ($('#Taskmanager_usertypeid option:selected').val() === '2') { //! Employee
            $('#course').hide("slow");
            $('#batch').hide("slow");
            $('#student').hide("slow");
            $('#department').show("slow");
            $('#employee').show("slow");
        }
    })

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
                               © 2017. Webschool by GESCIS Technologies Pvt Ltd. V3.2
                            </div>
                        </div>
                    </div>
                </div>