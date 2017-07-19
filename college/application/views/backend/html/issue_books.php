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
            <li class="active">Issue Book</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="bookissue-form" action="/index.php/library/bookissue/create" method="post">    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab" aria-expanded="true">Issue Book</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab" aria-expanded="false">Issued List</a></li>
        </ul>
        <h6 class="content-group text-semibold"></h6>
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Book Issue </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <div class="panel-body">
                                                                                  <div class="row">
                                            <div class="form-group col-sm-8">
                                                <input class="form-control ui-autocomplete-input" placeholder="Search by Book No/ ISBN No/ Book Title/ Author" id="librarybook" value="" name="librarybook" autocomplete="off" type="text"><input id="hidden-field" name="output" value="" type="hidden">                                            </div>
                                            <div class="col-sm-4">
                                                <label>&nbsp;</label>
                                                <a href="javascript:getbookdetails()" class="btn btn-info">Search</a>
                                            </div>
                                        </div>
                                        <div class="row" id="bookdetail" style="display:none">
                                            <div class="col-sm-12">
                                                <div class="panel panel-body">
                                                    <table align="center">
                                                        <tbody id="bookdetails" style="font-size: 14px">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <label class="req" for="Bookissue_usertypeid">User Type</label>                                            <select class="form-control" name="Bookissue[usertypeid]" id="Bookissue_usertypeid">
<option value="">Select Type</option>
<option value="1">Student</option>
<option value="2">Employee</option>
</select>                                            <div class="school_val_error" id="Bookissue_usertypeid_em_" style="display:none"></div>                                        </div>

                                        <div class="form-group" id="studentautocomplete" style="display:none">
                                            <input class="form-control ui-autocomplete-input" placeholder="Search" id="student" value="" name="student" autocomplete="off" type="text">
                                        </div> 
                                        <div class="form-group" id="employeeautocomplete" style="display:none">
                                            <input class="form-control ui-autocomplete-input" placeholder="Search" id="employee" value="" name="employee" autocomplete="off" type="text">                                        </div>
                                        <div class="form-group">
                                            <label class="req" for="Bookissue_bookissue_issuedate">Book Issue Date</label>                                            <input class="form-control hasDatepicker" placeholder="start date" id="Bookissue_bookissue_issuedate" name="Bookissue[bookissue_issuedate]" type="text">                                            <div class="school_val_error" id="Bookissue_bookissue_issuedate_em_" style="display:none"></div>                                            <!--<span class="help-block">dd-mm-yyyy</span>-->

                                        </div>
                                        <div class="form-group">
                                            <label for="reg_input_name" class="req">Due Date</label>
                                            <input class="form-control hasDatepicker" placeholder="start date" id="Bookissue_bookissue_duedate" name="Bookissue[bookissue_duedate]" type="text">                                            <div class="school_val_error" id="Bookissue_bookissue_duedate_em_" style="display:none"></div>                                                <!--<span class="help-block">dd-mm-yyyy</span>-->

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form_sep">
                                            <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" value="Create" type="submit">                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tbb_b">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Issued List</h4>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-3"> 
                                    </div>
                                    <div class="col-sm-3"> 
                                    </div>
                                    <div class="col-sm-3"> 
                                    </div>
                                    <div class="col-sm-3"> 
                                        <input id="search" class="form-control" placeholder="Search by book number" type="text">
                                    </div>
                                </div><br>
                                <div class="col-sm-12">
                                    <div class="table responsive table-bordered table-striped" id="item-grid">
<table class="items">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">User Type</th><th id="item-grid_c2">User</th><th id="item-grid_c3">Book No</th><th id="item-grid_c4">Title</th><th id="item-grid_c5">Book Issue Date</th><th id="item-grid_c6">Book Due Date</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="10%">1</td><td width="10%">admin12</td><td width="20%">108180153-Tahir  </td><td width="20%">522</td><td width="20%">saaas</td><td width="20%">2016-Oct-11</td><td width="20%">2016-Oct-20</td></tr>
<tr class="even">
<td width="10%">2</td><td width="10%">admin12</td><td width="20%">108180144-sawad  </td><td width="20%">20144</td><td width="20%">Economics</td><td width="20%">2016-Sep-22</td><td width="20%">2016-Oct-03</td></tr>
<tr class="odd">
<td width="10%">3</td><td width="10%">admin12</td><td width="20%">EPS340-Abhishekaaaa asd Pandey</td><td width="20%">20141</td><td width="20%">Economics</td><td width="20%">2016-Oct-03</td><td width="20%">2016-Oct-06</td></tr>
<tr class="even">
<td width="10%">4</td><td width="10%">Office Stuffxzx</td><td width="20%">e108180106-srikanth  </td><td width="20%">13422</td><td width="20%">LB</td><td width="20%">2016-Oct-02</td><td width="20%">2016-Oct-03</td></tr>
<tr class="odd">
<td width="10%">5</td><td width="10%">admin12</td><td width="20%">417-sai s joy</td><td width="20%">3421</td><td width="20%">test</td><td width="20%">2016-Oct-18</td><td width="20%">2016-Oct-01</td></tr>
<tr class="even">
<td width="10%">6</td><td width="10%">admin12</td><td width="20%">12-walmi we hange</td><td width="20%">121</td><td width="20%">LB</td><td width="20%">2016-Sep-24</td><td width="20%">2016-Sep-24</td></tr>
<tr class="odd">
<td width="10%">7</td><td width="10%">admin12</td><td width="20%">NIEIT485-venkat v </td><td width="20%">25681</td><td width="20%">The Event Of the Day </td><td width="20%">2016-Sep-22</td><td width="20%">2016-Sep-30</td></tr>
<tr class="even">
<td width="10%">8</td><td width="10%">admin12</td><td width="20%">123-asd asd sdasd</td><td width="20%">11014</td><td width="20%">LB</td><td width="20%">2016-Sep-22</td><td width="20%">2016-Sep-30</td></tr>
<tr class="odd">
<td width="10%">9</td><td width="10%">Office Stuffxzx</td><td width="20%">aBC123-sadhana s warade</td><td width="20%">015</td><td width="20%">c program</td><td width="20%">2016-Sep-14</td><td width="20%">2016-Sep-20</td></tr>
<tr class="even">
<td width="10%">10</td><td width="10%">admin12</td><td width="20%">LU1234561108-Abhi  Pandey</td><td width="20%">1521</td><td width="20%">LB</td><td width="20%">2016-Sep-09</td><td width="20%">2016-Sep-23</td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/library/bookissue/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/library/bookissue/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/library/bookissue/create">1</a></li>
<li class="page"><a href="/index.php/library/bookissue/create/Bookissue_page/2">2</a></li>
<li class="next"><a href="/index.php/library/bookissue/create/Bookissue_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/library/bookissue/create/Bookissue_page/2">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/library/bookissue/create"><span>76</span><span>75</span><span>74</span><span>68</span><span>66</span><span>63</span><span>62</span><span>61</span><span>58</span><span>56</span></div>
</div>  
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
    function getbookdetails() {
        if (document.getElementById('hidden-field').value === "") {
            alert("Please select book");
            return;
        }
        $('#booklist tbody').empty();
        $('#bookdetails').empty();
        $.ajax({
            type: "POST",
            url: "bookdetails",
            data: {bookname: document.getElementById('hidden-field').value},
            dataType: "html",
            success: function (data) {
                $('#bookdetails').append(data);
                $('#bookdetail').show("slow");
            }
        });
    }
    $("#Bookissue_usertypeid").change(function () {
        var str = "";
        //    $( "#Transportallocation_usertypeid select option:selected" ).each(function() {
        str += $(this).val();
        //    });
        //    $( "div" ).text( str );
        if (str === '1') {
            $("#employeeautocomplete").hide("slow");
            $("#studentautocomplete").show("slow");

        }
        if (str === '2') {
            $("#studentautocomplete").hide("slow");
            $("#employeeautocomplete").show("slow");

        }
    });

    $("input").keyup(function () {

        $('#item-grid').yiiGridView('update', {
            data: {search: $('#search').val()}
        });
        return false;

    });
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
		
		