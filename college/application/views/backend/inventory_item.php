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
            <li class="active">Inventory Item</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="inventoryitem-form" action="/index.php/inventory/inventoryitem/create" method="post">    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Add Inventory Item</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="reg_input" class="req">Vendors</label>
                            <select class="form-control" name="Inventoryitem[vendorsid]" id="Inventoryitem_vendorsid">
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
</select>                            <div class="school_val_error" id="Inventoryitem_vendorsid_em_" style="display:none"></div>   
                        </div>  
                        <div class="form-group">
                            <label for="reg_input" class="req">Category</label>
                            <select class="form-control" name="Inventoryitem[inventorycategoryid]" id="Inventoryitem_inventorycategoryid">
<option value="">Please Select</option>
<option value="2">chalk suplyer</option>
<option value="3">web</option>
<option value="5">tablr</option>
<option value="6">bbook</option>
<option value="7">QQQ</option>
<option value="8">Stationery </option>
<option value="9">vbcvbv</option>
<option value="10">SUBLAYER</option>
<option value="11">manager</option>
<option value="12">Paper</option>
<option value="13">ffffff</option>
<option value="14">sss</option>
<option value="15">bbnbn</option>
<option value="16">vel</option>
<option value="17">books</option>
<option value="18">stationary</option>
<option value="19">infosys</option>
<option value="20">books</option>
<option value="21">uniform</option>
<option value="22">12</option>
<option value="23">Maintainance</option>
<option value="24">Air Products</option>
<option value="25">Painter</option>
<option value="27">Drugs</option>
<option value="28">.lkk</option>
<option value="29">HOUSE KEEPING</option>
<option value="30">GARDEN KEEPING</option>
<option value="31">amsol</option>
<option value="32">tablr</option>
<option value="33">Paper</option>
<option value="34">oij</option>
<option value="35">dsfg</option>
<option value="36">mmmmm</option>
<option value="37">www</option>
<option value="38">ddd</option>
<option value="39">ALi Abbasi</option>
<option value="40">Ball Pen</option>
<option value="41">paper</option>
<option value="42">stationary</option>
<option value="43">paper</option>
<option value="44">sa </option>
<option value="45">hair bands</option>
<option value="46">bench manufacturing</option>
<option value="47">bench manufacturing</option>
<option value="48">hhhhhhhh</option>
<option value="49">vbmb</option>
<option value="50">power suply</option>
<option value="51">21300</option>
<option value="52">thirucategory</option>
<option value="53">bank</option>
<option value="54">Schook Book CompNY</option>
<option value="55">ffff</option>
<option value="56">Laptops</option>
<option value="57">1</option>
<option value="58">sports</option>
</select>                            <div class="school_val_error" id="Inventoryitem_inventorycategoryid_em_" style="display:none"></div>   
                        </div>  
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Inventory Item</label>
                            <input class="form-control" name="Inventoryitem[inventoryitem_name]" id="Inventoryitem_inventoryitem_name" maxlength="60" type="text">                            <div class="school_val_error" id="Inventoryitem_inventoryitem_name_em_" style="display:none"></div>                
                        </div> 
                        <div class="form-group col-sm-6">
                            <label for="reg_input_name" class="req">Quantity</label>
                            <input class="form-control" name="Inventoryitem[inventoryitem_quantity]" id="Inventoryitem_inventoryitem_quantity" type="text">                            <div class="school_val_error" id="Inventoryitem_inventoryitem_quantity_em_" style="display:none"></div>                
                        </div> 
                        <div class="form-group col-sm-6">
                            <label for="reg_input_name" class="req">Re-Order Level</label>
                            <input class="form-control" name="Inventoryitem[inventoryitem_reorderlevel]" id="Inventoryitem_inventoryitem_reorderlevel" type="text">                            <div class="school_val_error" id="Inventoryitem_inventoryitem_reorderlevel_em_" style="display:none"></div>                
                        </div> 
                        <div class="form-group col-sm-6">
                            <label for="reg_input_name">Free</label>
                            <input class="form-control" name="Inventoryitem[inventoryitem_free]" id="Inventoryitem_inventoryitem_free" type="text">                            <div class="school_val_error" id="Inventoryitem_inventoryitem_free_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="reg_input_name">Discount</label>
                            <input class="form-control" name="Inventoryitem[inventoryitem_discount]" id="Inventoryitem_inventoryitem_discount" type="text">                            <div class="school_val_error" id="Inventoryitem_inventoryitem_discount_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="reg_input_name">MRP</label>
                            <input class="form-control" name="Inventoryitem[inventoryitem_mrp]" id="Inventoryitem_inventoryitem_mrp" type="text">                            <div class="school_val_error" id="Inventoryitem_inventoryitem_mrp_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="reg_input_name">Rate</label>
                            <input class="form-control" name="Inventoryitem[inventoryitem_rate]" id="Inventoryitem_inventoryitem_rate" type="text">                            <div class="school_val_error" id="Inventoryitem_inventoryitem_rate_em_" style="display:none"></div>                
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form_sep">
                                <input class="btn btn-info" name="std_reg_submit" id="std_reg_submit" value="Save" type="submit">                            </div>
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
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Vendor</th><th id="item-grid_c2">Inventory Item</th><th id="item-grid_c3">Quantity</th><th id="item-grid_c4">Re-Order Level</th><th class="button-column" id="item-grid_c5">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="20%">1</td><td width="20%">Test vendor</td><td width="20%">asd</td><td width="10%">15</td><td width="10%">100</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventoryitem/update/id/67"><img src="" alt=""></a>  <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/inventoryitem/view/id/67"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventoryitem/delete/id/67"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">2</td><td width="20%">congo traffic</td><td width="20%">g</td><td width="10%">12</td><td width="10%">2</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventoryitem/update/id/66"><img src="" alt=""></a>  <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/inventoryitem/view/id/66"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventoryitem/delete/id/66"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">3</td><td width="20%">Sureshanna</td><td width="20%">dhfgd</td><td width="10%">168</td><td width="10%">5</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventoryitem/update/id/65"><img src="" alt=""></a>  <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/inventoryitem/view/id/65"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventoryitem/delete/id/65"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">4</td><td width="20%">congo traffic</td><td width="20%">tables</td><td width="10%">11</td><td width="10%">5</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventoryitem/update/id/64"><img src="" alt=""></a>  <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/inventoryitem/view/id/64"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventoryitem/delete/id/64"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">5</td><td width="20%">suchit developers</td><td width="20%">LAptops</td><td width="10%">190</td><td width="10%">100</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventoryitem/update/id/63"><img src="" alt=""></a>  <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/inventoryitem/view/id/63"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventoryitem/delete/id/63"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">6</td><td width="20%">congo traffic</td><td width="20%">pappers</td><td width="10%">20000</td><td width="10%">1</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventoryitem/update/id/62"><img src="" alt=""></a>  <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/inventoryitem/view/id/62"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventoryitem/delete/id/62"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">7</td><td width="20%">congo traffic</td><td width="20%">testing item</td><td width="10%">0</td><td width="10%">2</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventoryitem/update/id/61"><img src="" alt=""></a>  <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/inventoryitem/view/id/61"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventoryitem/delete/id/61"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">8</td><td width="20%">congo traffic</td><td width="20%">Tf</td><td width="10%">Gfd</td><td width="10%">Gf</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventoryitem/update/id/60"><img src="" alt=""></a>  <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/inventoryitem/view/id/60"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventoryitem/delete/id/60"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">9</td><td width="20%">amsol</td><td width="20%">abc</td><td width="10%">18</td><td width="10%">15</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventoryitem/update/id/59"><img src="" alt=""></a>  <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/inventoryitem/view/id/59"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventoryitem/delete/id/59"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">10</td><td width="20%">School Book Company</td><td width="20%">rAZOR</td><td width="10%">15</td><td width="10%">5</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/inventory/inventoryitem/update/id/58"><img src="" alt=""></a>  <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/inventory/inventoryitem/view/id/58"><img src="" alt=""></a>  <a class="glyphicon glyphicon-remove" title="" href="/index.php/inventory/inventoryitem/delete/id/58"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/inventory/inventoryitem/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/inventory/inventoryitem/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/inventory/inventoryitem/create">1</a></li>
<li class="page"><a href="/index.php/inventory/inventoryitem/create/Inventoryitem_page/2">2</a></li>
<li class="page"><a href="/index.php/inventory/inventoryitem/create/Inventoryitem_page/3">3</a></li>
<li class="page"><a href="/index.php/inventory/inventoryitem/create/Inventoryitem_page/4">4</a></li>
<li class="next"><a href="/index.php/inventory/inventoryitem/create/Inventoryitem_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/inventory/inventoryitem/create/Inventoryitem_page/7">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/inventory/inventoryitem/create"><span>67</span><span>66</span><span>65</span><span>64</span><span>63</span><span>62</span><span>61</span><span>60</span><span>59</span><span>58</span></div>
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