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
            <li class="active">Book Return</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="col-sm-12">
        <form id="bookreturn-form" action="/index.php/library/bookreturn/create" method="post">        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Book Return</h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group col-sm-8">
                                        <input class="form-control ui-autocomplete-input" placeholder="Search by Book No/ ISBN No/ Book Title/ Author" id="librarybook" value="" name="librarybook" autocomplete="off" type="text"><input id="hidden-field" name="output" value="" type="hidden">                                    </div>
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
                                    <label for="reg_input_name">Return / Renewal</label>
                                    <select class="form-control" name="Bookreturn[returnorrenewal]" id="Bookreturn_returnorrenewal">
<option value="">Select Option</option>
<option value="1">Return</option>
<option value="2">Renewal</option>
</select>                                </div>
                                <div class="form-group" id="datedifference" style="display:none">
                                    <div class="alert alert-success">
                                        <b>  <label id="tick"></label></b>
                                    </div>
                                </div>
                                <div class="form-group" id="duedate" style="display:none">
                                    <label for="reg_input_name">Due Date</label>
                                    <input class="form-control hasDatepicker" placeholder="due date" id="Bookreturn_due_date" name="Bookreturn[due_date]" type="text">                                    <div class="school_val_error" id="Bookreturn_bookreturn_date_em_" style="display:none"></div>                                </div>

                                <div class="form-group" id="returndate" style="display:none">
                                    <label for="reg_input_name" class="req">Return Date</label>
                                    <input class="form-control hasDatepicker" placeholder="return date" id="Bookreturn_bookreturn_date" name="Bookreturn[bookreturn_date]" type="text">                                    <div class="school_val_error" id="Bookreturn_bookreturn_date_em_" style="display:none"></div>                                </div>
                                <div class="form-group" id="fine" style="display:none">
                                    <label for="Bookreturn_bookreturn_fineamount"> Fine Amount</label>                                    <input class="form-control" name="Bookreturn[bookreturn_fineamount]" id="Bookreturn_bookreturn_fineamount" maxlength="6" type="text">                                    <div class="school_val_error" id="Bookreturn_bookreturn_fineamount_em_" style="display:none"></div>                                </div>
                                <div class="form-group" id="remarks" style="display:none">
                                    <label>Remarks</label>
                                    <textarea class="form-control" name="Bookreturn[bookreturn_remarks]" id="Bookreturn_bookreturn_remarks"></textarea>                                    <div class="school_val_error" id="Bookreturn_bookreturn_remarks_em_" style="display:none"></div>                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form_sep">
                                    <input class="btn btn-info" name="yt0" value="Create" type="submit">                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="grid-view table-responsive" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Book No</th><th id="item-grid_c2">Book Return Date</th><th id="item-grid_c3">Fine Amount</th><th id="item-grid_c4">Remarks</th><th class="button-column" id="item-grid_c5">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="10%">1</td><td width="20%">012</td><td width="20%">2016-08-16 00:00:00</td><td width="10%">150</td><td width="10%">ssssssssssssssssssss</td><td width="10%"> <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookreturn/delete/id/77"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">2</td><td width="20%">25682</td><td width="20%">2016-08-16 00:00:00</td><td width="10%"></td><td width="10%"></td><td width="10%"> <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookreturn/delete/id/80"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">3</td><td width="20%">0021</td><td width="20%">2016-08-25 00:00:00</td><td width="10%">5</td><td width="10%"></td><td width="10%"> <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookreturn/delete/id/86"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">4</td><td width="20%">0021</td><td width="20%">2016-09-28 00:00:00</td><td width="10%">100</td><td width="10%">ok</td><td width="10%"> <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookreturn/delete/id/88"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">5</td><td width="20%">0021</td><td width="20%">2016-09-27 00:00:00</td><td width="10%">300</td><td width="10%"></td><td width="10%"> <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookreturn/delete/id/90"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">6</td><td width="20%">OR1011</td><td width="20%">2016-09-08 00:00:00</td><td width="10%">0</td><td width="10%">Poor Conditon</td><td width="10%"> <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookreturn/delete/id/91"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">7</td><td width="20%">0021</td><td width="20%">2016-09-29 00:00:00</td><td width="10%"></td><td width="10%"></td><td width="10%"> <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookreturn/delete/id/92"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">8</td><td width="20%">0025</td><td width="20%">2016-09-30 00:00:00</td><td width="10%"></td><td width="10%"></td><td width="10%"> <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookreturn/delete/id/93"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">9</td><td width="20%">3422</td><td width="20%">2016-10-03 00:00:00</td><td width="10%">344</td><td width="10%">sfdsf</td><td width="10%"> <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookreturn/delete/id/97"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">10</td><td width="20%">2001</td><td width="20%">2016-10-19 00:00:00</td><td width="10%">333</td><td width="10%">test</td><td width="10%"> <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookreturn/delete/id/105"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/library/bookreturn/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/library/bookreturn/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/library/bookreturn/create">1</a></li>
<li class="page"><a href="/index.php/library/bookreturn/create/Bookreturn_page/2">2</a></li>
<li class="next"><a href="/index.php/library/bookreturn/create/Bookreturn_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/library/bookreturn/create/Bookreturn_page/2">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/library/bookreturn/create"><span>77</span><span>80</span><span>86</span><span>88</span><span>90</span><span>91</span><span>92</span><span>93</span><span>97</span><span>105</span></div>
</div>  
            </div>
        </div>
        </form>    </div>
</div>
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
            url: "issuebookdetails",
            data: {bookname: document.getElementById('hidden-field').value},
            dataType: "html",
            success: function (data) {
                $('#bookdetails').append(data);
                $('#bookdetail').show("slow");
            }
        });
    }
    $("#Bookreturn_returnorrenewal").change(function () {
        if ($('#Bookreturn_returnorrenewal option:selected').val() === '1') {
            $("#duedate").hide("slow");
            $("#datedifference").hide("slow");
            $("#returndate").show("slow");
            $("#fine").show("slow");
            $("#remarks").show("slow");

        }
        if ($('#Bookreturn_returnorrenewal option:selected').val() === '2') {
            $("#returndate").hide("slow");
            $("#fine").hide("slow");
            $("#remarks").hide("slow");
            if (document.getElementById('hidden-field').value === "") {
                alert("Please select book");
                return;
            }
            $.ajax({
                type: "POST",
                url: "issuedatedifference",
                data: {bookname: document.getElementById('hidden-field').value},
                dataType: "html",
                success: function (data) {
                    $('#tick').append(data);
                    $("#datedifference").show("slow");
                    $("#duedate").show("slow");
                }
            });

        }
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
		
		