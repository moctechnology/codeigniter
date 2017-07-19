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
            <li><a href="#">Academic</a></li>
            <li class="active">Timetable</li>
        </ul>
         <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i>Support </a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h4 class="panel-title">Select Course &amp; Batch</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <select class="form-control" name="courseid" id="courseid">
<option value="">SelectCourse</option>
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
</select>                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control" name="batchid" id="batchid"><option value="">Select</option><option value="1">A</option><option value="17">B</option></select>                                </div>

                                <div class="col-sm-2">
                                    <input type="text" id="timetablename" class="form-control" placeholder="Time" table="" name="">
                                </div>
                                <div class="col-sm-2">
                                    <a href="javascript:showeekdays();" class="btn btn-info">Set Weekdays</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">

        </div>
    </div>

</div>

<!--*******************************************************************************************-->
<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h4 class="panel-title">Create Timetable</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">

                        <div class="panel-body">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-responsive table-striped table-bordered" id="finish_table" border="1">
                                        <thead>
                                            <tr></tr>
                                        </thead>
                                        <tbody><tr data-id="2"><td>Monday <br> <a href="javascript:assign(2);">Assign</a></td></tr><tr data-id="3"><td>Tuesday <br> <a href="javascript:assign(3);">Assign</a></td></tr><tr data-id="5"><td>Thursday <br> <a href="javascript:assign(5);">Assign</a></td></tr><tr data-id="6"><td>Friday <br> <a href="javascript:assign(6);">Assign</a></td></tr><tr data-id="7"><td>Saturday <br> <a href="javascript:assign(7);">Assign</a></td></tr></tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <p>&nbsp;&nbsp;<a href="javascript:savett();" class="btn btn-info">Save Timetable</a></p> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">

        </div>
    </div>

</div>
<!--******************************************************************************************-->


<div class="modal fade" id="setWeekdays" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Select Working Days</h4>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Weekdays</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" id="sundaycheck" name="chk[]" <="" td="">
                            </td><td>Sunday</td>

                        </tr>
                        <tr>
                            <td><input type="checkbox" id="mondaycheck" name="chk[]"></td>
                            <td>Monday</td>

                        </tr>
                        <tr>
                            <td><input type="checkbox" id="tuesdaycheck" name="chk[]"></td>
                            <td>Tuesday</td>

                        </tr>
                        <tr>
                            <td><input type="checkbox" id="wednesdaycheck" name="chk[]"></td>
                            <td>Wednesday</td>

                        </tr>
                        <tr>
                            <td><input type="checkbox" id="thursdaycheck" name="chk[]"></td>
                            <td>Thursday</td>

                        </tr>
                        <tr>
                            <td><input type="checkbox" id="fridaycheck" name="chk[]"></td>
                            <td>Friday</td>

                        </tr>
                        <tr>
                            <td><input type="checkbox" id="saturdaycheck" name="chk[]"></td>
                            <td>Saturday</td>

                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="javascript:createdays();" class="btn btn-info">Save changes</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="setClassTimings" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 id="timingtitle" data-value="" class="modal-title">Create Period Timings</h4>
                <input type="hidden" id="dayid">
            </div>
            <div class="modal-body">

                <table class="table" id="periodtable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <select class="form-control" style="width:100px;" name="subjectid" id="subjectid"><option value="">BREAK</option><option value="1">English</option><option value="3">GK</option><option value="2">Maths</option><option value="4">Science</option><option value="11">Introduction to Modelling and Analysis</option><option value="14">Software Quality Management</option><option value="18">Mathematics 1</option><option value="17">abc</option><option value="16">abc</option><option value="15">Advanced Information System</option><option value="10">Business Information System and Analysis</option><option value="13">Business Process Management</option><option value="12">Enterprise System and Risk Management</option><option value="19">history</option></select>                            </td>
                            <td><div class="input-group bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><input type="text" name="hour" class="bootstrap-timepicker-hour form-control" maxlength="2"></td> <td class="separator">:</td><td><input type="text" name="minute" class="bootstrap-timepicker-minute form-control" maxlength="2"></td> <td class="separator">&nbsp;</td><td><input type="text" name="meridian" class="bootstrap-timepicker-meridian form-control" maxlength="2"></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a data-action="incrementHour" href="#"><i class=" icon-arrow-up12"></i></a></td><td class="separator">&nbsp;</td><td><a data-action="incrementMinute" href="#"><i class=" icon-arrow-up12"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a data-action="toggleMeridian" href="#"><i class=" icon-arrow-up12"></i></a></td></tr><tr><td><input type="text" maxlength="2" class="bootstrap-timepicker-hour form-control" name="hour"></td> <td class="separator">:</td><td><input type="text" maxlength="2" class="bootstrap-timepicker-minute form-control" name="minute"></td> <td class="separator">&nbsp;</td><td><input type="text" maxlength="2" class="bootstrap-timepicker-meridian form-control" name="meridian"></td></tr><tr><td><a data-action="decrementHour" href="#"><i class="icon-arrow-down12"></i></a></td><td class="separator"></td><td><a data-action="decrementMinute" href="#"><i class="icon-arrow-down12"></i></a></td><td class="separator">&nbsp;</td><td><a data-action="toggleMeridian" href="#"><i class="icon-arrow-down12"></i></a></td></tr></tbody></table></div>
                                    <input type="text" class="form-control" id="tp-starttime" style="width:80px">
                                    <span class="input-group-addon"><i class="icon-watch2"></i></span>
                                </div></td>
                            <td><div class="input-group bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><input type="text" name="hour" class="bootstrap-timepicker-hour form-control" maxlength="2"></td> <td class="separator">:</td><td><input type="text" name="minute" class="bootstrap-timepicker-minute form-control" maxlength="2"></td> <td class="separator">&nbsp;</td><td><input type="text" name="meridian" class="bootstrap-timepicker-meridian form-control" maxlength="2"></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a data-action="incrementHour" href="#"><i class=" icon-arrow-up12"></i></a></td><td class="separator">&nbsp;</td><td><a data-action="incrementMinute" href="#"><i class=" icon-arrow-up12"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a data-action="toggleMeridian" href="#"><i class=" icon-arrow-up12"></i></a></td></tr><tr><td><input type="text" maxlength="2" class="bootstrap-timepicker-hour form-control" name="hour"></td> <td class="separator">:</td><td><input type="text" maxlength="2" class="bootstrap-timepicker-minute form-control" name="minute"></td> <td class="separator">&nbsp;</td><td><input type="text" maxlength="2" class="bootstrap-timepicker-meridian form-control" name="meridian"></td></tr><tr><td><a data-action="decrementHour" href="#"><i class="icon-arrow-down12"></i></a></td><td class="separator"></td><td><a data-action="decrementMinute" href="#"><i class="icon-arrow-down12"></i></a></td><td class="separator">&nbsp;</td><td><a data-action="toggleMeridian" href="#"><i class="icon-arrow-down12"></i></a></td></tr></tbody></table></div>
                                    <input type="text" class="form-control" id="tp-endtime" style="width:80px">
                                    <span class="input-group-addon"><i class="icon-watch2"></i></span>
                                </div></td>
                            <td><a id="addperiod" href="javascript:addperiod();" class="btn btn-info" style="width:80px">Add Period</a></td>
                        </tr>

                    </tbody>
                </table>

                <table class="table" id="periodtabledisplay">
                    <tbody>

                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                <a href="javascript:createtableview();" class="btn btn-info">Create Time Table</a>
            </div>
        </div>
    </div>
</div>

<!--__________________________________________________-->
<div class="modal fade" id="facultymodal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 data-value="" class="modal-title">Select Faculty</h4>

            </div>
            <div class="modal-body">

                <select id="assignfaculty" class="form-control">

                </select>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                <a href="javascript:savefaculty();" class="btn btn-success">Assign</a>
            </div>
        </div>
    </div>
</div>

<!--_____________________________________________________-->
<script>
    $('#tp-starttime').timepicker();
    $('#tp-endtime').timepicker();


    function addperiod() {
        var subjectname = $('#subjectid option:selected').text();
        var subjectid = $('#subjectid option:selected').val();
        var starttime = $('#tp-starttime').val();
        var endtime = $('#tp-endtime').val();


        $('#periodtabledisplay tbody').append('<tr><td data-id="' + subjectid + '">' + subjectname + '-</td><td>' + starttime + '</td><td>' + endtime + '</td><td><a href="#"><img src="/images/delete.png"></a></td></tr>');


    }

    function checkprerequest() {
        if ($('#courseid option:selected').text() === "Select Course") {
            alert("Please Select Course");
            return 1;
        }
        else if ($('#batchid option:selected').text() === "") {
            alert("Please Select Batch");
            return 1;
        }
        else
            return 0;

    }
    function checkatleasta_day() {
        var atLeastOneIsChecked = $('input[name="chk[]"]:checked').length > 0;
        if (atLeastOneIsChecked == true)
            return 0;
        else
        {
            alert("Please Set Atleast 1 Weekday to Input Period");
            return 1;
        }
    }


    function showeekdays() {
        var result = checkprerequest();
        if (result == 0)
            $('#setWeekdays').modal('show');
    }
    function showtimings() {
        var result = checkatleasta_day();
        if (result == 0)
            $('#setClassTimings').modal('show');

    }
    var keycolumn = 0;
    function createtableview() {
        var id = $('#dayid').val();
        var rowCount = $('#periodtabledisplay tr').length;
        $('#finish_table tbody tr[data-id=' + id + ']').find("td:gt(0)").remove();//remove all time table of that particular day except e day name column when any one clicks the insert button more than once.
        $('#periodtabledisplay tr').each(function (row, tr) {
            var selectfaculty;
            var fn = $(tr).find('td:eq(0)').text();
            var subid = $(tr).find('td:eq(0)').data("id");//////////////

            if ($(tr).find('td:eq(0)').text() === "BREAK-") {
                selectfaculty = $(tr).find('td:eq(0)').text();

            }
            else {
                selectfaculty = $(tr).find('td:eq(0)').text() + '<br><a id="location' + keycolumn + '" href="javascript:selectfacultyfn(\'' + subid + "','" + keycolumn + '\');">Select Faculty</a>';
                keycolumn = keycolumn + 1;
            }
            $('#finish_table tbody tr[data-id=' + id + ']').append('<td><p style="font-style: italic">' + $(tr).find('td:eq(1)').text() + '-' + $(tr).find('td:eq(2)').text() + '</p><p style="font-weight: bold">' + selectfaculty + '<input type="hidden" value="' + $(tr).find('td:eq(0)').data("id") + '" id="subjectidcell"></p></td>');

        });

    }
    function createdays() {
        $("#finish_table thead tr").empty();
        $("#finish_table tbody").empty();

        if ($('#sundaycheck').is(":checked")) {
            $('#finish_table tbody').append("<tr data-id='1'><td>Sunday <br> <a href ='javascript:assign(1);' >Assign</a></td></tr>");
        }

        if ($('#mondaycheck').is(":checked")) {
            $('#finish_table tbody').append("<tr data-id='2'><td>Monday <br> <a href ='javascript:assign(2);' >Assign</a></td></tr>");
        }

        if ($('#tuesdaycheck').is(":checked")) {
            $('#finish_table tbody').append("<tr data-id='3'><td>Tuesday <br> <a href ='javascript:assign(3);' >Assign</a></td></tr>");
        }
        if ($('#wednesdaycheck').is(":checked")) {
            $('#finish_table tbody').append("<tr data-id='4'><td>Wednesday <br> <a href ='javascript:assign(4);' >Assign</a></td></tr>");
        }

        if ($('#thursdaycheck').is(":checked")) {
            $('#finish_table tbody').append("<tr data-id='5'><td>Thursday <br> <a href ='javascript:assign(5);' >Assign</a></td></tr>");
        }

        if ($('#fridaycheck').is(":checked")) {
            $('#finish_table tbody').append("<tr data-id='6'><td>Friday <br> <a href ='javascript:assign(6);' >Assign</a></td></tr>");
        }

        if ($('#saturdaycheck').is(":checked")) {
            $('#finish_table tbody').append("<tr data-id='7'><td>Saturday <br> <a href ='javascript:assign(7);' >Assign</a></td></tr>");
        }
    }

    function assign(id) {
        var week;
        $('#setClassTimings').modal('show');
        if (id == 1)
            week = "Sunday";
        if (id == 2)
            week = "Monday";
        if (id == 3)
            week = "Tuesday";
        if (id == 4)
            week = "Wednesday";
        if (id == 5)
            week = "Thursday";
        if (id == 6)
            week = "Friday";
        if (id == 7)
            week = "Saturday";


        $('#dayid').val(id);
        $('#timingtitle').html("Create Period Timings for " + week);

    }
    var tablelocation = 0;
    function selectfacultyfn(subject, tablelocation2) {
        var timestring = $("#location" + tablelocation2).parent().parent().find('p:first').text();
        var myday = $("#location" + tablelocation2).parent().parent().parent().find('td:first').text();
        myday = myday.replace('  Assign', '');
        myday = '"' + myday + '"';
        var res = timestring.split("-");//02:45 PM-3:10PM
        var starttime = res[0];   //02:45 PM
        var x = res[0].split(" ");//02:45
        var startampm = x[1];
        var y = x[0].split(":");
        var starthour = y[0];

        starthour = parseInt(starthour);
        if (startampm === "PM") {
            if (starthour === 12) {
            }
            else {
                starthour = starthour + 12;
            }
        }
        var startminute = y[1];

        var endtime = res[1];
        var x1 = res[1].split(" "); //endtime
        var endampm = x1[1];
        var y1 = x1[0].split(":");
        var endhour = y1[0];
        endhour = parseInt(endhour);
        if (endampm === "PM") {

            if (endhour === 12) {
            }
            else {
                endhour = endhour + 12;
            }
        }
        var endminute = y1[1];
        if (starthour > endhour) {
            alert("Please Check Start and End Hours");
            return;
        }
        if (starthour === endhour) {
            if (startminute > endminute) {
                alert("Please Check Start and End Minutes");
                return;
            }
        }
        if (res[0] === res[1]) {
            alert("Please Check Time");
            return;
        }

        tablelocation = tablelocation2;
        $("#assignfaculty").empty();
        $.ajax({
            type: "POST",
            url: "getfaculty",
            data: {subject: subject, starttime: x, endtime: x1, day: myday, courseid: $('#courseid option:selected').val(), batchid: $('#batchid option:selected').val()},
            dataType: "html",
            success: function (data) {
                if (data == "error") {

                }else {
                    $("#assignfaculty").append(data);
                    $('#facultymodal').modal('show');
                }
            }

        });

    }
    function savefaculty() {
        console.log("location" + tablelocation);
        var changetoid = "#location" + tablelocation;
        $(changetoid).text($('#assignfaculty option:selected').text());
        $(changetoid).attr("data-myval", $('#assignfaculty option:selected').val());
    }
    function savett() {

        if ($('#timetablename').val() === "") {
            alert("Please Enter a Name for the Time table");
            return;
        }
        $.ajax({
            type: "POST",
            url: "checkname",
            data: {name: $('#timetablename').val()},
            dataType: "html",
            success: function (data) {
                if (data === "error") {
                    alert("Time Table Already Saved!")

                }
                else {

                    var items = [];
                    var _courseid = $('#courseid option:selected').val();
                    if (_courseid === "") {
                        alert("Please Select Course");
                        return;
                    }
                    items.push(_courseid);
                    var _batchid = $('#batchid option:selected').val();
                    if (_batchid === "") {
                        alert("Please Select Batch");
                        return;
                    }
                    items.push(_batchid);
                    $('#finish_table tbody tr').each(function (key, value) {
                        var $tds = $(this).find('td');
                        var flag = 0;
                        console.log("start");
                        $.each($tds, function () {
                            var res = $(this).text().replace('  Assign', '');
                            res = res.replace('Select Faculty', '');
                            var employeeid = $(this).find('a').data("myval");
                            var subjectid = $(this).find('input').val();
                            if (flag == 0) {
                                items.push("#");
                                flag = 1;
                            }
                            items.push(res);
                            /////////////////////////////////////
                            var inputString = res;
                            var findme = "BREAK";

                            if (inputString.indexOf(findme) > -1) {
                                items.push('0');
                                items.push('0');
                            } else {
                            }



                            ////////////////////////////////////
                            if (employeeid)
                                items.push(employeeid);
                            if (subjectid) {
                                if (employeeid) {
                                }
                                else {

                                    items.push("0");
                                }

                            }
                            if (subjectid)
                                items.push(subjectid);
                            else {
                                if (employeeid) {
                                }
                            }
                            // Prints out the text within the <td>
                        });

                    });
                    console.log(items);
                    $.ajax({
                        type: "POST",
                        url: "savetimetable",
                        data: {data: JSON.stringify(items), name: $('#timetablename').val()},
                        dataType: "html",
                        success: function (data) {
                            alert(data);
                        }
                    });
                }
            }
        });
    }


    $(function () {
        $('#periodtabledisplay').on('click', 'tr a', function (e) {
            e.preventDefault();
            $(this).parents('tr').remove();
        });
    });
    $("#timetablename").on('change keyup paste mouseup', function () {

        $.ajax({
            type: "POST",
            url: "checkname",
            data: {name: $('#timetablename').val()},
            dataType: "html",
            success: function (data) {
                if (data === "error") {
                    alert("This Name Already Exist, Please use a Different Name");
                }
            }

        });

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