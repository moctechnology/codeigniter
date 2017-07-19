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
@(#)Developers:     					Arya K Nair,Reshma R Pillai
@(#)Copyright:      					(C) Gescis Technologies, Technopark
@(#)Product:        					Webschool ERP.
@(#)Template:        					Multiple templates developed by Gescis.
-->
<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Fees</a></li>
            <li class="active">Fee Waiver</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="feewaiver-form" action="" method="post">    <div class="row">
        <div class="col-sm-3"> 
        </div>
        <div class="col-sm-3"> 
        </div>
        <div class="col-sm-3"> 
        </div>
        <div class="col-sm-3"> 
            <input id="search" class="form-control" placeholder="Search by fees sub category" type="text">
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Fee Waiver</h4>
                </div>
                <div class="panel-body">
                                        <div class="form-group">
                        <label>Fees Category</label>
                        <select class="form-control" name="cate_name" id="Feewaiver_feescategoryid">
<option value="">Please Select </option>
<?php foreach($parent_category as $parent){ ?>
<option value="<?php echo $parent->id; ?>"><?php echo $parent->cat_name ?></option>
<?php } ?>
</select> 
                       <div class="school_val_error" id="Feewaiver_feescategoryid_em_" style="display:none"></div>                    </div>
                    <div class="form-group">
                        <label class="req" for="Feewaiver_feessubcategoryid">Fees Subcategory</label>
						
						<select class="form-control" name="fee_sub_cat" id="Feewaiver_feessubcategoryid">
<option value="">Please Select </option>
</select> 
                       <div class="school_val_error" id="Feewaiver_feessubcategoryid_em_" style="display:none"></div>                    </div>
                    <div class="form-group">
                        <label class="req" for="Feewaiver_excemption_deduction">Excemption or Deduction</label><select class="form-control" data-required="true" name="exmamption_deduction" id="Feewaiver_excemption_deduction">
<option value="" selected="selected">Please select</option>
<option value="1">None</option>
<option value="2">Exemption</option>
<option value="3">Deduction</option>
</select><div class="school_val_error" id="Feewaiver_excemption_deduction_em_" style="display:none"></div>                    </div>
                    <div class="form-group" id="Feewaiver_category_gender1" style="display:none">
                        <label for="Feewaiver_category_gender">Category or Gender</label><select class="form-control" data-required="true" name="category_gender" id="Feewaiver_category_gender">
<option value="empty">Please select</option>
<option value="1">Category</option>
<option value="2">Gender</option>
</select><div class="school_val_error" id="Feewaiver_category_gender_em_" style="display:none"></div>                    </div>
                    <div class="form-group" id="Feewaiver_categoryid" style="display:none">
                        <label for="Feewaiver_categoryid">Category Name</label><select class="form-control" name="category_name" id="Feewaiver_categoryid">
<option value="">Select Category</option>
<option value="310">test test</option>
<option value="311">hjhfcgh</option>
<option value="312">TPVP</option>
<option value="313">skdkdkj</option>
<option value="317">tyujty</option>
<option value="318">dixit</option>
<option value="319">testtttt</option>
<option value="320">General</option>
<option value="322">hjg</option>
<option value="323">ASAS</option>
<option value="324">Basic</option>
<option value="325">a</option>
<option value="326">bg</option>
<option value="327">subham</option>
<option value="328">Ahsan</option>
<option value="329">habi</option>
<option value="332">tert </option>
<option value="333">top</option>
</select>                        <div class="school_val_error" id="Feewaiver_categoryid_em_" style="display:none"></div>                    </div>
                    <div class="form-group" id="Feewaiver_gender" style="display:none">
                        <label for="Feewaiver_gender">Gender</label><select class="form-control" name="genders_name" id="Feewaiver_gender">
<option value="prompt">Please select</option>
<option value="1">Male</option>
<option value="2">Female</option>
</select><div class="school_val_error" id="Feewaiver_gender_em_" style="display:none"></div>                    </div>
                    <div class="form-group" id="Feewaiver_deductionamountpercentage" style="display:none">
                        <label for="Feewaiver_deductionamountpercentage">Deduction Amount Percentage</label><input class="form-control" name="deduction_amount" id="Feewaiver_deductionamountpercentage" type="text"><div class="school_val_error" id="Feewaiver_deductionamountpercentage_em_" style="display:none"></div>                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form_sep">
                                <input class="btn btn-info" id="button" name="submit" value="Save" type="submit">                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="grid-view table-responsive" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th>
<th id="item-grid_c1">Fee Sub Category</th>
<th id="item-grid_c2">Excemption/Deduction</th>
<th id="item-grid_c3">Category/Gender</th>
<th id="item-grid_c4">Category</th>
<th id="item-grid_c5">Gender</th>
<th id="item-grid_c6">Deduction %</th>
<th class="button-column" id="item-grid_c7">Manage</th>
</tr>
</thead>
<tbody>
<?php $i=1; foreach($child_category as $val){ ?>
<tr class="<?php if( $i % 2 == 0){ echo 'even';}else{ echo 'odd';} ?>">
<td width="5%"><?php echo $i; ?></td>
<td width="20%"><?php echo $val->cat_name ?></td>
<td width="10%"><?php echo $val->examption_deduction ?></td>
<td width="10%"><?php echo $val->category_gender ?></td>
<td width="20%"><?php echo $val->category_name ?></td>
<td width="10%"><?php echo $val->genders_name ?></td>
<td width="10%"><?php echo $val->deduction_amount ?></td>
<td width="5%"> 
<a class="glyphicon glyphicon-remove" title="" href="<?php echo URL; ?>/index.php/backend/fee_waiver/update/<?php echo $val->id; ?>"><img src="" alt=""></a>
</td>
</tr>
<?php $i++; } ?>
</tbody>
</table>

<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/core/feewaiver/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/core/feewaiver/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/core/feewaiver/create">1</a></li>
<li class="page"><a href="/index.php/core/feewaiver/create/Feewaiver_page/2">2</a></li>
<li class="page"><a href="/index.php/core/feewaiver/create/Feewaiver_page/3">3</a></li>
<li class="page"><a href="/index.php/core/feewaiver/create/Feewaiver_page/4">4</a></li>
<li class="next"><a href="/index.php/core/feewaiver/create/Feewaiver_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/core/feewaiver/create/Feewaiver_page/21">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/core/feewaiver/create"><span>2</span><span>5</span><span>6</span><span>7</span><span>9</span><span>11</span><span>13</span><span>14</span><span>16</span><span>17</span></div>
</div>  
        </div>
    </div>
    </form></div>

	
<script>


$("#Feewaiver_feescategoryid").change(function(){
    var id = this.value;
//alert(id);
    $.ajax({
        url: 'http://localhost/college/index.php/backend/fee_waiver/get_subcat_select_box',
        data: ({id: id}),
        type: "post",
        success: function(data){
        	
			//alert(data);
			//response = jQuery.parseJSON(data);            
        	$("#Feewaiver_feessubcategoryid").html(data); 
		}             
    });
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