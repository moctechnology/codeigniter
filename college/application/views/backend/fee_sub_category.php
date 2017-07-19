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
            <li class="active">Fee Sub Category</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
            <form id="feessubcategory-form" action="" method="post">
            <div class="col-sm-12">
                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="active"><a href="#tbb_a" data-toggle="tab" aria-expanded="true">Fee Sub Category</a></li>
                    <li class=""><a href="#tbb_b" data-toggle="tab" aria-expanded="false">List</a></li>
                </ul><br>
                <div class="tab-content">
                    
                    <div class="tab-pane active" id="tbb_a">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Fee Sub Category</h4>
                                    </div>
                                    <div class="panel-body">
                                                                                <div class="form-group">
                                            <label class="req" for="Feessubcategory_feescategoryid">Fee Category</label>
											<select class="form-control" name="cat_name" id="Feessubcategory_feescategoryid">
<option value="">Please Select </option>
<?php foreach($results as $val){ ?>

<option value="<?php echo $val->id;  ?>"><?php echo $val->cat_name; ?></option>

<?php } ?>
</select>                                            <div class="school_val_error" id="Feessubcategory_feescategoryid_em_" style="display:none"></div>                                        </div>

                                        <div class="form-group">
                                            <label class="req" for="Feessubcategory_feessubcategory_name">Fee Sub Category Name</label><input class="form-control" name="fee_sub_cat" id="Feessubcategory_feessubcategory_name" maxlength="40" type="text"><div class="school_val_error" id="Feessubcategory_feessubcategory_name_em_" style="display:none"></div>                                        </div>

                                        <div class="form-group">
                                            <label class="req" for="Feessubcategory_feessubcategory_amount"> Amount</label><input class="form-control" name="amount" id="Feessubcategory_feessubcategory_amount" type="text"><div class="school_val_error" id="Feessubcategory_feessubcategory_amount_em_" style="display:none"></div>                                        </div>


                                        <div class="form-group">
                                            <label class="req">Fee Type</label>
                                            <select class="form-control" data-required="true" name="fee_type" id="Feessubcategory_feestype">
<option value="" selected="selected">Select Type</option>
<option value="1">Annual</option>
<option value="2">Bi-Annual</option>
<option value="3">Tri-Annual</option>
<option value="4">Quarterly</option>
<option value="5">Monthly</option>
</select>                                        
</div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="panel panel-default" id="datelist">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">Fee Dates</h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div id="Annual">
                                                            
															<div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>

                                                            </div>
															
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>

                                                            </div>
                                                            
															<div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>

                                                            </div>
                                                        </div>


                                                        <div id="Bi-Annual" style="display:none">
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>

                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>

                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div class=" form-group formmargin col-md-10 " >
        <input id="input_01" class="datepicker picker__input col-md-12 d " name="date" type="text" autofocuss="" data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date" required>
      </div>

                                                            </div>
                                                        </div>


                                                        <div id="Quarterly" style="display:none">
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Due Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>End Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Due Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>End Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div id="Monthly" style="display:none">
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                	<?php ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Due Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>End Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                 
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Due Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>End Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>
                                                                </div>                                                        
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Due Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                     
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>End Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Due Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>End Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Due Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>End Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Due Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>End Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Due Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>End Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Start Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>Due Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-4">
                                                                <label>End Date</label>
                                                                <div data-date-format="yy-mm-d" class="input-group date ebro_datepicker">
                                                                    <?php // ?>                                                                  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="form_sep">
                                                    <input class="btn btn-info" id="button" name="submit" value="Save" type="submit">                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


<?php

//$parents = getsubcat_helper(12);
//print_r($parents);
?>


                    <div class="tab-pane" id="tbb_b"> 
                         
                        <div class="row">
                            <div class="col-sm-3"> 
                            </div>
                            <div class="col-sm-3"> 
                            </div>
                            <div class="col-sm-3"> 
                            </div>
                            <div class="col-sm-3"> 
                                <input id="search" class="form-control" placeholder="Search by fees category/sub category" type="text">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="grid-view table-responsive" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Fee Category</th><th id="item-grid_c2">Fee Sub Category</th><th id="item-grid_c3">Amount</th><th id="item-grid_c4">Fee Type</th><th class="button-column" id="item-grid_c5">Manage</th></tr>
</thead>
<tbody>
<?php $i =1; foreach($results as $val){ 


$childs = getsubcat_helper($val->id); 

//	print_r($parents);

if(count($childs) == 0){
?>

<tr class="<?php if($i % 2 == 0 ){ echo "even"; }else{ echo "odd"; } ?>">
<td width="7%"><?php echo $val->id; ?></td>
<td width="8%"><?php echo $val->cat_name ?></td>
<td width="8%"><?php echo $val->cat_name; ?></td>
<td width="7%"><?php echo $val->amount; ?></td>
<td width="7%"><?php echo $val->fee_type; ?></td>
<td width="7%"> 
<a class="glyphicon glyphicon-pencil" title="" href="<?php echo URL; ?>/index.php/backend/fee_sub_category/update/<?php echo $val->id; ?>"><img src="" alt=""></a>
<a class="glyphicon glyphicon-remove" title="" href="<?php echo URL; ?>/index.php/backend/fee_sub_category/delete/<?php echo $val->id; ?>"><img src="" alt=""></a>
</td>
</tr>

<?php 
}
else if(count($childs)>0){

$j=1;
foreach($childs as $v){?>
<tr class="<?php if($j % 2 == 0 ){ echo "even"; }else{ echo "odd"; } ?>">
<td width="7%"><?php echo $v->id; ?></td>
<td width="8%"><?php echo $val->cat_name ?></td>
<td width="8%"><?php echo $v->cat_name; ?></td>
<td width="7%"><?php echo $v->amount; ?></td>
<td width="7%"><?php echo $v->fee_type; ?></td>
<td width="7%"> 
<a class="glyphicon glyphicon-pencil" title="" href="<?php echo URL; ?>/index.php/backend/fee_sub_category/update/<?php echo $val->id; ?>"><img src="" alt=""></a>
<a class="glyphicon glyphicon-remove" title="" href="<?php echo URL; ?>/index.php/backend/fee_sub_category/delete/<?php echo $val->id; ?>"><img src="" alt=""></a>
</td>
</tr>

<?php $j++;}}?>



<?php $i++; } ?>

</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/core/feessubcategory/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/core/feessubcategory/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/core/feessubcategory/create">1</a></li>
<li class="page"><a href="/index.php/core/feessubcategory/create/Feessubcategory_page/2">2</a></li>
<li class="page"><a href="/index.php/core/feessubcategory/create/Feessubcategory_page/3">3</a></li>
<li class="page"><a href="/index.php/core/feessubcategory/create/Feessubcategory_page/4">4</a></li>
<li class="next"><a href="/index.php/core/feessubcategory/create/Feessubcategory_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/core/feessubcategory/create/Feessubcategory_page/20">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/core/feessubcategory/create"><span>211</span><span>210</span><span>209</span><span>208</span><span>207</span><span>206</span><span>205</span><span>204</span><span>203</span><span>202</span></div>
</div>  
                            </div>
                        </div>
                    </div>  
                                    </div>
            </div></form>
        </div>
<script>

    $("#Feessubcategory_excemption_deduction").change(function () {
        var str = "";
        str += $(this).val();
        if (str === '1') {
            $("#Feessubcategory_category_gender1").hide("slow");
            $("#Feessubcategory_categoryid").hide("slow");
            $("#Feessubcategory_gender").hide("slow");
            $("#Feessubcategory_deductionamountpercentage").hide("slow");

        }
        if (str === '2') {
            $("#Feessubcategory_categoryid").hide("slow");
            $("#Feessubcategory_gender").hide("slow");
            $("#Feessubcategory_deductionamountpercentage").hide("slow");
            $("#Feessubcategory_category_gender1").show("slow");
        }
        if (str === '3') {
            $("#Feessubcategory_categoryid").hide("slow");
            $("#Feessubcategory_gender").hide("slow");
            $("#Feessubcategory_deductionamountpercentage").hide("slow");
            $("#Feessubcategory_category_gender1").show("slow");

        }
    });

    $("#Feessubcategory_feestype").change(function () {
        if ($("#Feessubcategory_excemption_deduction").val() === '3') {
            if ($("#Feessubcategory_deductionamountpercentage input").val() === '') {
                alert("Please enter deduction amount");
            }
        }
    });

    $(document).ready(function () {
        var droplist = $('#Feessubcategory_category_gender');
        droplist.change(function () {
            console.log(droplist.val());
            if (droplist.val() === '1') {
                if ($("#Feessubcategory_excemption_deduction").val() === '2') {
                    $("#Feessubcategory_deductionamountpercentage").hide("slow");
                    $("#Feessubcategory_gender").hide("slow");
                    $("#Feessubcategory_categoryid").show("slow");
                }
                if ($("#Feessubcategory_excemption_deduction").val() === '3') {
                    $("#Feessubcategory_gender").hide("slow");
                    $("#Feessubcategory_categoryid").show("slow");
                    $("#Feessubcategory_deductionamountpercentage").show("slow");
                }
            }
            else {
                if ($("#Feessubcategory_excemption_deduction").val() === '2') {
                    $("#Feessubcategory_deductionamountpercentage").hide("slow");
                    $("#Feessubcategory_categoryid").hide("slow");
                    $("#Feessubcategory_gender").show("slow");
                }
                if ($("#Feessubcategory_excemption_deduction").val() === '3') {
                    $("#Feessubcategory_categoryid").hide("slow");
                    $("#Feessubcategory_gender").show("slow");
                    $("#Feessubcategory_deductionamountpercentage").show("slow");
                }
            }
        })
    });
    $(document).ready(function () {
        var droplist = $('#Feessubcategory_feestype');
        droplist.change(function () {
            if (droplist.val() === '1') { //annual

                $("#Monthly").hide("slow");
                $("#Quarterly").hide("slow");
                $("#Bi-Annual").hide("slow");
                $("#Annual").show("slow");
                $("#datelist").show("slow");
            }
            if (droplist.val() === '2') {   //bi-annual

                $("#Monthly").hide("slow");
                $("#Quarterly").hide("slow");
                $("#Annual").show("slow");
                $("#Bi-Annual").show("slow");
                $("#datelist").show("slow");
            }
            if (droplist.val() === '4') {  //quarterly

                $("#Monthly").hide("slow");
                $("#Quarterly").show("slow");
                $("#Annual").show("slow");
                $("#Bi-Annual").show("slow");
                $("#datelist").show("slow");
            }
            if (droplist.val() === '5') {  //monthly

                $("#Monthly").show("slow");
                $("#Quarterly").show("slow");
                $("#Annual").show("slow");
                $("#Bi-Annual").show("slow");
                $("#datelist").show("slow");
            }
            if (droplist.val() === '3') {  //tri annual

                $("#Monthly").hide("slow");
                $("#Annual").hide("slow");
                $("#Quarterly").show("slow");
                $("#Bi-Annual").show("slow");
                $("#datelist").show("slow");
            }

        })
    });

    $("input").keyup(function () {

        $('#item-grid').yiiGridView('update', {
            data: {search: $('#search').val()}
        });
        return false;

    });

</script>
	<script>
$('.datepicker').pickadate()
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
		
		