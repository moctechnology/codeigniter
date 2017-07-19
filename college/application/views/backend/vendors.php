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
            <li><a href="#">Store Management</a></li>
            <li><a href="#">Inventory</a></li>
            <li class="active">Add Vendors</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="vendors-form" action="/index.php/inventory/vendors/create" method="post">    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Add Vendors</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Company Name</label>
                            <input class="form-control" name="Vendors[vendors_companyname]" id="Vendors_vendors_companyname" type="text">                            <div class="school_val_error" id="Vendors_vendors_companyname_em_" style="display:none"></div>                
                        </div>  
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Company Phone</label>
                            <input class="form-control" name="Vendors[vendors_companyphone]" id="Vendors_vendors_companyphone" type="text">                            <div class="school_val_error" id="Vendors_vendors_companyphone_em_" style="display:none"></div>                
                        </div>  
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Company Email</label>
                            <input class="form-control" name="Vendors[vendors_companyemail]" id="Vendors_vendors_companyemail" type="text">                            <div class="school_val_error" id="Vendors_vendors_companyemail_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group">
                            <label for="reg_input_name">Country</label>
                            <input class="form-control" name="Vendors[vendors_country]" id="Vendors_vendors_country" type="text">                            <div class="school_val_error" id="Vendors_vendors_country_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group">
                            <label for="reg_input_name">State</label>
                            <input class="form-control" name="Vendors[vendors_state]" id="Vendors_vendors_state" type="text">                            <div class="school_val_error" id="Vendors_vendors_state_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group">
                            <label for="reg_input_name">City</label>
                            <input class="form-control" name="Vendors[vendors_city]" id="Vendors_vendors_city" type="text">                            <div class="school_val_error" id="Vendors_vendors_city_em_" style="display:none"></div>                
                        </div>
                        <p><b>Details of Contact Person</b></p>
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Name</label>
                            <input class="form-control" name="Vendors[vendors_name]" id="Vendors_vendors_name" type="text">                            <div class="school_val_error" id="Vendors_vendors_name_em_" style="display:none"></div>                
                        </div>  
                        <div class="form-group">
                            <label for="reg_input_name">Address</label>
                            <textarea class="form-control" name="Vendors[vendors_address]" id="Vendors_vendors_address"></textarea>                            <div class="school_val_error" id="Vendors_vendors_address_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Phone</label>
                            <input class="form-control" name="Vendors[vendors_phone]" id="Vendors_vendors_phone" type="text">                            <div class="school_val_error" id="Vendors_vendors_phone_em_" style="display:none"></div>                
                        </div>
                        <p><b>Bank Details</b></p>
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Bank Name</label>
                            <input class="form-control" name="Vendors[vendors_bankname]" id="Vendors_vendors_bankname" type="text">                            <div class="school_val_error" id="Vendors_vendors_bankname_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Branch Name</label>
                            <input class="form-control" name="Vendors[vendors_branchname]" id="Vendors_vendors_branchname" type="text">                            <div class="school_val_error" id="Vendors_vendors_branchname_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Account No.</label>
                            <input class="form-control" name="Vendors[vendors_accountno]" id="Vendors_vendors_accountno" type="text">                            <div class="school_val_error" id="Vendors_vendors_accountno_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group">
                            <label for="reg_input_name" class="req">IFSC Code</label>
                            <input class="form-control" name="Vendors[vendors_ifsccode]" id="Vendors_vendors_ifsccode" type="text">                            <div class="school_val_error" id="Vendors_vendors_ifsccode_em_" style="display:none"></div>                
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form_sep">
                                <input class="btn btn-info" name="yt0" value="Save" type="submit">                            </div>
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
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Company Name</th><th id="item-grid_c2">Contact Person</th><th class="link-column" id="item-grid_c3">Purchase Order</th><th class="button-column" id="item-grid_c4">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="10%">1</td><td width="25%">congo traffic</td><td width="20%">gakuba</td><td class="link-column"><a href="/index.php/inventory/vendors/vendorspo/id/1">Purchase Order</a></td><td width="15%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/vendors/update/id/1"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/vendors/view/id/1"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/vendors/delete/id/1"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">2</td><td width="25%">amsol</td><td width="20%">vel</td><td class="link-column"><a href="/index.php/inventory/vendors/vendorspo/id/2">Purchase Order</a></td><td width="15%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/vendors/update/id/2"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/vendors/view/id/2"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/vendors/delete/id/2"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">3</td><td width="25%">Amsol</td><td width="20%">Vel</td><td class="link-column"><a href="/index.php/inventory/vendors/vendorspo/id/3">Purchase Order</a></td><td width="15%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/vendors/update/id/3"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/vendors/view/id/3"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/vendors/delete/id/3"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">4</td><td width="25%">CAMELIN</td><td width="20%">S Sanjay</td><td class="link-column"><a href="/index.php/inventory/vendors/vendorspo/id/4">Purchase Order</a></td><td width="15%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/vendors/update/id/4"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/vendors/view/id/4"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/vendors/delete/id/4"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">5</td><td width="25%">AIR</td><td width="20%">Saurav</td><td class="link-column"><a href="/index.php/inventory/vendors/vendorspo/id/5">Purchase Order</a></td><td width="15%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/vendors/update/id/5"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/vendors/view/id/5"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/vendors/delete/id/5"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">6</td><td width="25%">AIR</td><td width="20%">Shashi</td><td class="link-column"><a href="/index.php/inventory/vendors/vendorspo/id/6">Purchase Order</a></td><td width="15%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/vendors/update/id/6"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/vendors/view/id/6"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/vendors/delete/id/6"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">7</td><td width="25%">D - company</td><td width="20%">Daud</td><td class="link-column"><a href="/index.php/inventory/vendors/vendorspo/id/7">Purchase Order</a></td><td width="15%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/vendors/update/id/7"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/vendors/view/id/7"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/vendors/delete/id/7"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">8</td><td width="25%">FLUX INDUSTRIES</td><td width="20%">JOMON JOSE</td><td class="link-column"><a href="/index.php/inventory/vendors/vendorspo/id/8">Purchase Order</a></td><td width="15%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/vendors/update/id/8"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/vendors/view/id/8"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/vendors/delete/id/8"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="10%">9</td><td width="25%">guru</td><td width="20%">jack</td><td class="link-column"><a href="/index.php/inventory/vendors/vendorspo/id/9">Purchase Order</a></td><td width="15%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/vendors/update/id/9"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/vendors/view/id/9"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/vendors/delete/id/9"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="10%">10</td><td width="25%">Test vendor</td><td width="20%">Neethu</td><td class="link-column"><a href="/index.php/inventory/vendors/vendorspo/id/10">Purchase Order</a></td><td width="15%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/vendors/update/id/10"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/vendors/view/id/10"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/vendors/delete/id/10"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/inventory/vendors/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/inventory/vendors/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/inventory/vendors/create">1</a></li>
<li class="page"><a href="/index.php/inventory/vendors/create/Vendors_page/2">2</a></li>
<li class="next"><a href="/index.php/inventory/vendors/create/Vendors_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/inventory/vendors/create/Vendors_page/2">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/inventory/vendors/create"><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span><span>10</span></div>
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