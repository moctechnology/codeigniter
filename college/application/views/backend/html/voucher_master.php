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
            <li><a href="#">Finance</a></li>
            <li><a href="#">Accounting</a></li>
            <li class="active">Voucher Master</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="vouchermaster-form" action="/index.php/accounting/vouchermaster/create" method="post">    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Voucher Master</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">

                        <div class="panel-body">

                            <div class="form-group">
                                <label class="req">Voucher Master</label>
                                <input class="form-control" name="Vouchermaster[vouchermaster]" id="Vouchermaster_vouchermaster" maxlength="45" type="text"><div class="school_val_error" id="Vouchermaster_vouchermaster_em_" style="display:none"></div>                            </div>

                            <div class="form-group">
                                <label class="req">Credit / Debit</label>
                                <select class="form-control" name="Vouchermaster[accounts]" id="Vouchermaster_accounts">
<option value="">Please Select</option>
<option value="1">Credit</option>
<option value="2">Debit</option>
</select><div class="school_val_error" id="Vouchermaster_accounts_em_" style="display:none"></div> 

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form_sep">
                                <input class="btn btn-info" name="yt0" value="Create" type="submit">                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
                <div class="col-sm-6">
            <div class="grid-view" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Voucher Master</th><th id="item-grid_c2">Credit/Debit</th><th class="button-column" id="item-grid_c3">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="20%">1</td><td width="30%">Cash Payment</td><td width="30%">Debit</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/vouchermaster/update/id/1"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/vouchermaster/delete/id/1"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">2</td><td width="30%">Cash Receipt</td><td width="30%">Debit</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/vouchermaster/update/id/2"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/vouchermaster/delete/id/2"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">3</td><td width="30%">Bank Payment</td><td width="30%">Debit</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/vouchermaster/update/id/3"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/vouchermaster/delete/id/3"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">4</td><td width="30%">344</td><td width="30%">Credit</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/vouchermaster/update/id/8"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/vouchermaster/delete/id/8"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">5</td><td width="30%">Voucher Master</td><td width="30%">Credit</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/vouchermaster/update/id/11"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/vouchermaster/delete/id/11"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">6</td><td width="30%">dasd</td><td width="30%">Credit</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/vouchermaster/update/id/12"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/vouchermaster/delete/id/12"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">7</td><td width="30%">655</td><td width="30%">Credit</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/vouchermaster/update/id/13"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/vouchermaster/delete/id/13"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">8</td><td width="30%">sam</td><td width="30%">Debit</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/vouchermaster/update/id/14"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/vouchermaster/delete/id/14"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">9</td><td width="30%">Yoga</td><td width="30%">Debit</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/vouchermaster/update/id/15"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/vouchermaster/delete/id/15"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">10</td><td width="30%">STOCK PAYMENT</td><td width="30%">Debit</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/accounting/vouchermaster/update/id/16"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/accounting/vouchermaster/delete/id/16"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/accounting/vouchermaster/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/accounting/vouchermaster/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/accounting/vouchermaster/create">1</a></li>
<li class="page"><a href="/index.php/accounting/vouchermaster/create/Vouchermaster_page/2">2</a></li>
<li class="page"><a href="/index.php/accounting/vouchermaster/create/Vouchermaster_page/3">3</a></li>
<li class="page"><a href="/index.php/accounting/vouchermaster/create/Vouchermaster_page/4">4</a></li>
<li class="next"><a href="/index.php/accounting/vouchermaster/create/Vouchermaster_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/accounting/vouchermaster/create/Vouchermaster_page/8">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/accounting/vouchermaster/create"><span>1</span><span>2</span><span>3</span><span>8</span><span>11</span><span>12</span><span>13</span><span>14</span><span>15</span><span>16</span></div>
</div>  
        </div>
    </div>
    </form></div>	

		
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
		
		