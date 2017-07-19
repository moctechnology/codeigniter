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
            <li><a href="#">Events</a></li>
            <li class="active">Add Events</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">

            <form id="event-form" action="/index.php/events/event/create" method="post">            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Add Events</h4>
                        </div>
                        <div class="panel-body">
                            <div class="panel-body">

                                <div class="form-group">

                                    <label class="req" for="Event_event_name">Event Name</label>                                    <input class="form-control" name="Event[event_name]" id="Event_event_name" type="text">                                    <div class="school_val_error" id="Event_event_name_em_" style="display:none"></div>                                </div>
                                <div class="form-group">
                                    <table>
                                        <tbody><tr>
                                                                                        <td> Holiday ?&nbsp;&nbsp;&nbsp;</td><td></td><td></td><td><input id="ytEvent_isholiday" type="hidden" value="0" name="Event[isholiday]"><input name="Event[isholiday]" id="Event_isholiday" value="1" type="checkbox"></td>
                                        </tr>
                                    </tbody></table>
                                </div>

                                <div class="form-group" id="eventtype">
                                    <label for="Event_eventtypeid">Event Type</label>                                    <select class="form-control" name="Event[eventtypeid]" id="Event_eventtypeid">
<option value="">Please Select</option>
<option value="5">Annual Function</option>
</select><div class="school_val_error" id="Event_eventtypeid_em_" style="display:none"></div>                                </div>

                                <div class="form-group">
                                    <label class="req" for="Event_event_description">Description</label>                                    <textarea class="form-control" name="Event[event_description]" id="Event_event_description"></textarea>                                    <div class="school_val_error" id="Event_event_description_em_" style="display:none"></div>                                </div>

                                <div class="form-group">
                                    <label class="req" for="Event_event_start">Start Date</label>                                    <input class="form-control hasDatepicker" placeholder="start date" id="Event_event_start" name="Event[event_start]" type="text">                                    <div class="school_val_error" id="Event_event_start_em_" style="display:none"></div>
                                </div>
                                <div class="form-group">
                                    <label class="req" for="Event_event_end">End Date</label>                                    <input class="form-control hasDatepicker" placeholder="end date" id="Event_event_end" name="Event[event_end]" type="text">                                    <div class="school_val_error" id="Event_event_end_em_" style="display:none"></div>                                </div>
                                <div class="form-group" id="employeeautocomplete">
                                    <label for="Event_employeemasterid">Organizer/Incharge Name</label>                                    <input class="form-control ui-autocomplete-input" id="employee" type="text" value="" name="employee" autocomplete="off">                                </div> 
                                <div class="form-group">
                                    <label for="Event_event_for">Event For</label>                                    <select class="form-control" data-required="true" name="Event[event_for]" id="Event_event_for">
<option value="prompt">Please select</option>
<option value="1">Common to All</option>
<option value="2">Selected Batch</option>
<option value="3">Selected Department</option>
</select>                                    <div class="school_val_error" id="Event_event_for_em_" style="display:none"></div>                                </div>
                                <div class="form-group" id="course" style="display:none">
                                    <label for="mail_to">Batch</label>
                                    <select name="batch[]" id="s2_basic" multiple="" class="form-control" size="10">
                                                                                    <optgroup label="STD 1">
                                                                                                    <option value="1">A</option>
                                                                                                    <option value="8">dsfdsfdsfd</option>
                                                                                            </optgroup>

                                                                                    <optgroup label="STD 2">
                                                                                                    <option value="2">Batch A</option>
                                                                                            </optgroup>

                                                                                    <optgroup label="Course1">
                                                                                                    <option value="3">B1</option>
                                                                                            </optgroup>

                                                                                    <optgroup label="Survival Document">
                                                                                                    <option value="4">General English 1</option>
                                                                                                    <option value="5">Intensive English 1</option>
                                                                                                    <option value="6">Academic English 1</option>
                                                                                                    <option value="7">Employability ENG 1</option>
                                                                                            </optgroup>

                                                                                    <optgroup label="Survival Passport">
                                                                                            </optgroup>

                                                                                    <optgroup label="Beginner Application">
                                                                                            </optgroup>

                                                                                    <optgroup label="bbbb">
                                                                                            </optgroup>

                                                                                    <optgroup label="a1">
                                                                                            </optgroup>

                                                                                    <optgroup label="a2">
                                                                                            </optgroup>

                                                                                    <optgroup label="English">
                                                                                                    <option value="11">Bach 17</option>
                                                                                            </optgroup>

                                                                                    <optgroup label="Grade 1">
                                                                                            </optgroup>

                                                                                    <optgroup label="dfgdfg">
                                                                                            </optgroup>

                                                                                    <optgroup label="dsfdsfd">
                                                                                            </optgroup>

                                                                                    <optgroup label="Class 1">
                                                                                                    <option value="9">A</option>
                                                                                            </optgroup>

                                                                                    <optgroup label="bca">
                                                                                            </optgroup>

                                                                                    <optgroup label="BS Computer Science">
                                                                                                    <option value="10">daraygon</option>
                                                                                            </optgroup>

                                                                                    <optgroup label="BBsc">
                                                                                                    <option value="12">First Year</option>
                                                                                            </optgroup>

                                                                            </select>
                                </div>
                                <div class="form-group" id="department" style="display:none">
                                    <label for="reg_input">Department</label>
                                    <select class="form-control" multiple="multiple" size="10" name="Event[departmentid][]" id="Event_departmentid">
<option value="">Please select</option>
<option value="1">Computer</option>
<option value="2">IT deptt</option>
<option value="3">Finance and Accounts</option>
<option value="4">Faculty</option>
<option value="5">Faculty of English</option>
<option value="6">science</option>
</select><div class="school_val_error" id="Event_departmentid_em_" style="display:none"></div>                                </div> 

                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form_sep">
                                        <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" type="submit" value="Save">                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><div class="col-sm-6">
                    <div class="grid-view table-responsive" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Event</th><th id="item-grid_c2">Start Date</th><th id="item-grid_c3">End Date</th><th id="item-grid_c4">Event For</th><th class="button-column" id="item-grid_c5">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="10%">1</td><td width="24%">Winter Annual Function</td><td width="18%">2017-Jan-17 00:00:00</td><td width="16%">2017-Jan-31 00:00:00</td><td width="22%">Selected Department</td><td width="10%"><a class="glyphicon glyphicon-eye-open" title="" href="/index.php/events/event/view/id/3"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/events/event/delete/id/3"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">2</td><td width="24%">New Year</td><td width="18%">2017-Jan-01 00:00:00</td><td width="16%">2017-Dec-01 00:00:00</td><td width="22%">Common to All</td><td width="10%"><a class="glyphicon glyphicon-eye-open" title="" href="/index.php/events/event/view/id/1"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/events/event/delete/id/1"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/events/event/create"><span>3</span><span>1</span></div>
</div>  
                </div>
            </div>
            </form>        </div>
<script>

    $(document).ready(function () {
        var droplist = $('#Event_event_for');
        droplist.change(function () {
            if (droplist.val() === '2') {
                $("#department").hide("slow");
                $("#course").show("slow");
                $("#batch").show("slow");
            }
            if (droplist.val() === '3') {
                $("#course").hide("slow");
                $("#batch").hide("slow");
                $("#department").show("slow");
            }
        })
    });

    $("#Event_eventtypeid").change(function () {

        $('#item-grid').yiiGridView('update', {
            data: {search: $('#Event_eventtypeid option:selected').text()}
        });
        return false;

    });
    $(document).ready(function () {
        $('#Event_isholiday').click(function (event) {
            if (this.checked) {
                $('#eventtype').hide("slow");
            } else {
                $('#eventtype').show("slow");
            }
        });

    });
</script>	

		
                    </div>