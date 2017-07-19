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
            <li class="active">Add Category</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="inventorycategory-form" action="/index.php/inventory/inventorycategory/create" method="post">    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Add Category</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <div class="form-group error">
                            <label for="reg_input" class="req">Vendors</label>
                            <select class="form-control" name="Inventorycategory[vendorsid]" id="Inventorycategory_vendorsid">
<option value="">Please Select</option>
<option value="1">congo traffic - gakuba</option>
<option value="2">amsol - vel</option>
<option value="3">Amsol - Vel</option>
<option value="4">CAMELIN - S Sanjay</option>
<option value="5">AIR - Saurav</option>
<option value="6">AIR - Shashi</option>
<option value="7">D - company - Daud</option>
<option value="8">FLUX INDUSTRIES - JOMON JOSE</option>
<option value="9">guru - jack</option>
<option value="10">Test vendor - Neethu</option>
<option value="11">mani infotech - dura pani</option>
<option value="12"> Bm ltd - anand</option>
<option value="13">thiru - thiru</option>
<option value="14">School Book Company - Wasanth</option>
<option value="15">suchit developers - suchit nikam</option>
<option value="16">sdsd - cdc</option>
<option value="17">Sureshanna - Sur</option>
</select>                            <div class="school_val_error" id="Inventorycategory_vendorsid_em_" style="">Vendors cannot be blank.</div>   
                        </div>  
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Category Name</label>
                            <input class="form-control" name="Inventorycategory[inventorycategory_name]" id="Inventorycategory_inventorycategory_name" maxlength="60" type="text">                            <div class="school_val_error" id="Inventorycategory_inventorycategory_name_em_" style="display:none"></div>                
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
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Company</th><th id="item-grid_c2">Contact Person</th><th id="item-grid_c3">Category</th><th class="button-column" id="item-grid_c4">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="20%">1</td><td width="20%">congo traffic</td><td width="20%">gakuba</td><td width="20%">chalk suplyer</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventorycategory/update/id/2"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventorycategory/delete/id/2"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">2</td><td width="20%">D - company</td><td width="20%">Daud</td><td width="20%">web</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventorycategory/update/id/3"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventorycategory/delete/id/3"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">3</td><td width="20%">congo traffic</td><td width="20%">gakuba</td><td width="20%">tablr</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventorycategory/update/id/5"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventorycategory/delete/id/5"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">4</td><td width="20%">congo traffic</td><td width="20%">gakuba</td><td width="20%">bbook</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventorycategory/update/id/6"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventorycategory/delete/id/6"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">5</td><td width="20%">congo traffic</td><td width="20%">gakuba</td><td width="20%">QQQ</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventorycategory/update/id/7"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventorycategory/delete/id/7"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">6</td><td width="20%">congo traffic</td><td width="20%">gakuba</td><td width="20%">Stationery </td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventorycategory/update/id/8"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventorycategory/delete/id/8"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">7</td><td width="20%">congo traffic</td><td width="20%">gakuba</td><td width="20%">vbcvbv</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventorycategory/update/id/9"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventorycategory/delete/id/9"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">8</td><td width="20%">amsol</td><td width="20%">vel</td><td width="20%">SUBLAYER</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventorycategory/update/id/10"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventorycategory/delete/id/10"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">9</td><td width="20%">amsol</td><td width="20%">vel</td><td width="20%">manager</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventorycategory/update/id/11"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventorycategory/delete/id/11"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">10</td><td width="20%">amsol</td><td width="20%">vel</td><td width="20%">Paper</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventorycategory/update/id/12"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventorycategory/delete/id/12"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/inventory/inventorycategory/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/inventory/inventorycategory/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/inventory/inventorycategory/create">1</a></li>
<li class="page"><a href="/index.php/inventory/inventorycategory/create/Inventorycategory_page/2">2</a></li>
<li class="page"><a href="/index.php/inventory/inventorycategory/create/Inventorycategory_page/3">3</a></li>
<li class="page"><a href="/index.php/inventory/inventorycategory/create/Inventorycategory_page/4">4</a></li>
<li class="next"><a href="/index.php/inventory/inventorycategory/create/Inventorycategory_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/inventory/inventorycategory/create/Inventorycategory_page/6">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/inventory/inventorycategory/create"><span>2</span><span>3</span><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span><span>10</span><span>11</span><span>12</span></div>
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