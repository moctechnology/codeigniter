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
            <li class="active">Issued Report</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="inventoryitem-form" action="/index.php/inventory/inventoryissue/issuedreport" method="post">    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Issued Report</h4>
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
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Usertype</th><th id="item-grid_c2">User</th><th id="item-grid_c3">Inventory Item</th><th id="item-grid_c4">Quantity</th><th id="item-grid_c5">Amount</th><th id="item-grid_c6">Date</th><th id="item-grid_c7">Remarks</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td width="10%">Employee</td><td width="20%">103186 - MANDEEP SINGH DHALIWAL</td><td width="20%">pen</td><td width="10%">15</td><td width="10%">3750</td><td width="10%">2016-Nov-19</td><td width="15%"></td></tr>
<tr class="even">
<td width="5%">2</td><td width="10%">Student</td><td width="20%">A00122 - Sherlock  Holmes</td><td width="20%">text Eng 9th</td><td width="10%">11</td><td width="10%">0</td><td width="10%">2016-Nov-15</td><td width="15%">uyg</td></tr>
<tr class="odd">
<td width="5%">3</td><td width="10%">Student</td><td width="20%">KS320 - j manja j j</td><td width="20%">text Eng 9th</td><td width="10%">4</td><td width="10%">0</td><td width="10%">2016-Nov-13</td><td width="15%">jkghghh</td></tr>
<tr class="even">
<td width="5%">4</td><td width="10%">Employee</td><td width="20%">ee104 - surya a raju</td><td width="20%">LAptops</td><td width="10%">10</td><td width="10%">0</td><td width="10%">2016-Nov-05</td><td width="15%">s</td></tr>
<tr class="odd">
<td width="5%">5</td><td width="10%">Employee</td><td width="20%">eKS109 - rakshith kumar m</td><td width="20%">sadasd</td><td width="10%">20</td><td width="10%">0</td><td width="10%">2016-Nov-05</td><td width="15%">d</td></tr>
<tr class="even">
<td width="5%">6</td><td width="10%">Student</td><td width="20%">1112 - Ammu S RAJU</td><td width="20%">car</td><td width="10%">10</td><td width="10%">255800</td><td width="10%">2016-Nov-04</td><td width="15%">esafdf</td></tr>
<tr class="odd">
<td width="5%">7</td><td width="10%">Employee</td><td width="20%">ee104 - surya a raju</td><td width="20%">sample</td><td width="10%">02</td><td width="10%">0</td><td width="10%">2016-Nov-04</td><td width="15%"></td></tr>
<tr class="even">
<td width="5%">8</td><td width="10%">Student</td><td width="20%"> -   </td><td width="20%">abc</td><td width="10%">2</td><td width="10%">0</td><td width="10%">2016-Oct-30</td><td width="15%"></td></tr>
<tr class="odd">
<td width="5%">9</td><td width="10%">Student</td><td width="20%">1112 - Ammu S RAJU</td><td width="20%">tehghj</td><td width="10%">2</td><td width="10%">5110</td><td width="10%">2016-Oct-27</td><td width="15%">good</td></tr>
<tr class="even">
<td width="5%">10</td><td width="10%">Student</td><td width="20%">A00122 - Sherlock  Holmes</td><td width="20%">Exam paper</td><td width="10%">5</td><td width="10%">0</td><td width="10%">2016-Oct-25</td><td width="15%"></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/inventory/inventoryissue/issuedreport">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/inventory/inventoryissue/issuedreport">&lt;</a></li>
<li class="page selected"><a href="/index.php/inventory/inventoryissue/issuedreport">1</a></li>
<li class="page"><a href="/index.php/inventory/inventoryissue/issuedreport/Inventoryissue_page/2">2</a></li>
<li class="page"><a href="/index.php/inventory/inventoryissue/issuedreport/Inventoryissue_page/3">3</a></li>
<li class="page"><a href="/index.php/inventory/inventoryissue/issuedreport/Inventoryissue_page/4">4</a></li>
<li class="next"><a href="/index.php/inventory/inventoryissue/issuedreport/Inventoryissue_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/inventory/inventoryissue/issuedreport/Inventoryissue_page/8">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/inventory/inventoryissue/issuedreport"><span>146</span><span>144</span><span>143</span><span>140</span><span>139</span><span>138</span><span>137</span><span>136</span><span>135</span><span>133</span></div>
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