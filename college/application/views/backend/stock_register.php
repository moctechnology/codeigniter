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
            <li class="active">Stock Register</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="inventoryitem-form" action="/index.php/inventory/inventoryitem/stockregister" method="post">    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Stock Register</h4>
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
                            <input id="search" class="form-control" placeholder="Search...." type="text">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="grid-view table-responsive" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Vendor</th><th id="item-grid_c2">Category</th><th id="item-grid_c3">Inventory Item</th><th id="item-grid_c4">Quantity</th><th id="item-grid_c5">Re-Order Level</th><th id="item-grid_c6">MRP</th><th id="item-grid_c7">Rate</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="10%">1</td><td width="20%">Test vendor</td><td width="10%">&nbsp;</td><td width="20%">asd</td><td width="10%">15</td><td width="10%">100</td><td width="10%"></td><td width="10%"></td></tr>
<tr class="even">
<td width="10%">2</td><td width="20%">congo traffic</td><td width="10%">bbook</td><td width="20%">g</td><td width="10%">12</td><td width="10%">2</td><td width="10%"></td><td width="10%"></td></tr>
<tr class="odd">
<td width="10%">3</td><td width="20%">Sureshanna</td><td width="10%">&nbsp;</td><td width="20%">dhfgd</td><td width="10%">168</td><td width="10%">5</td><td width="10%">565</td><td width="10%">56</td></tr>
<tr class="even">
<td width="10%">4</td><td width="20%">congo traffic</td><td width="10%">tablr</td><td width="20%">tables</td><td width="10%">11</td><td width="10%">5</td><td width="10%"></td><td width="10%"></td></tr>
<tr class="odd">
<td width="10%">5</td><td width="20%">suchit developers</td><td width="10%">Laptops</td><td width="20%">LAptops</td><td width="10%">190</td><td width="10%">100</td><td width="10%"></td><td width="10%"></td></tr>
<tr class="even">
<td width="10%">6</td><td width="20%">congo traffic</td><td width="10%">paper</td><td width="20%">pappers</td><td width="10%">20000</td><td width="10%">1</td><td width="10%"></td><td width="10%"></td></tr>
<tr class="odd">
<td width="10%">7</td><td width="20%">congo traffic</td><td width="10%">tablr</td><td width="20%">testing item</td><td width="10%">0</td><td width="10%">2</td><td width="10%">12</td><td width="10%">12</td></tr>
<tr class="even">
<td width="10%">8</td><td width="20%">congo traffic</td><td width="10%">QQQ</td><td width="20%">Tf</td><td width="10%">Gfd</td><td width="10%">Gf</td><td width="10%"></td><td width="10%"></td></tr>
<tr class="odd">
<td width="10%">9</td><td width="20%">amsol</td><td width="10%">manager</td><td width="20%">abc</td><td width="10%">18</td><td width="10%">15</td><td width="10%"></td><td width="10%"></td></tr>
<tr class="even">
<td width="10%">10</td><td width="20%">School Book Company</td><td width="10%">Schook Book CompNY</td><td width="20%">rAZOR</td><td width="10%">15</td><td width="10%">5</td><td width="10%"></td><td width="10%"></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/inventory/inventoryitem/stockregister">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/inventory/inventoryitem/stockregister">&lt;</a></li>
<li class="page selected"><a href="/index.php/inventory/inventoryitem/stockregister">1</a></li>
<li class="page"><a href="/index.php/inventory/inventoryitem/stockregister/Inventoryitem_page/2">2</a></li>
<li class="page"><a href="/index.php/inventory/inventoryitem/stockregister/Inventoryitem_page/3">3</a></li>
<li class="page"><a href="/index.php/inventory/inventoryitem/stockregister/Inventoryitem_page/4">4</a></li>
<li class="next"><a href="/index.php/inventory/inventoryitem/stockregister/Inventoryitem_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/inventory/inventoryitem/stockregister/Inventoryitem_page/7">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/inventory/inventoryitem/stockregister"><span>67</span><span>66</span><span>65</span><span>64</span><span>63</span><span>62</span><span>61</span><span>60</span><span>59</span><span>58</span></div>
</div>  
                        </div>  
                    </div>

                </div>
            </div>
        </div>
    </div>
    </form></div>
<script>
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