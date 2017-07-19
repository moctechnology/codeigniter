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
<?php $id = $this->uri->segment(4); ?>

<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Add Category</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">

    <form id="bookcategory-form" action="" method="post">    
	<div class="row">
        <div class="col-sm-6 left_sec">
		
			<?php 

			$book_cat = '';
			$section_code= '';
			
			if($id != null){
			foreach($single_record as $val){
			$id = $val->id;
			$book_cat = $val->book_cat;
			$section_code = $val->section_code;
			
			}
			} ?>
		
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Add Book Category</h4>
                </div>
                <div class="panel-body">
                    <div class="panel-body">

                        <div class="form-group">
                            <label for="reg_input_name" class="req">Category Name</label>
                            <input size="84" value="<?php echo $book_cat; ?>" maxlength="45" class="form-control" name="book_cat" id="Bookcategory_bookcategory_name" type="text">                            <div class="school_val_error" id="Bookcategory_bookcategory_name_em_" style="display:none"></div>                
                        </div> 
                         <div class="form-group">
                            <label for="reg_input_name">Section Code</label>
                            <input class="form-control" value="<?php echo $section_code; ?>" name="section_code" id="Bookcategory_bookcategory_sectioncode" type="text">                            <div class="school_val_error" id="Bookcategory_bookcategory_sectioncode_em_" style="display:none"></div>                
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form_sep">
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
                                <input class="btn btn-info" name="submit" value="<?php if($id != null){ echo "Update";} else { echo "Save";} ?>" type="submit">                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-6 right_sec">
            <div class="grid-view" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th>
<th id="item-grid_c1">Book Category</th>
<th id="item-grid_c2">Section Code</th>
<th class="button-column" id="item-grid_c3">Manage</th>
</tr>
</thead>
<tbody>
<?php  $i=1; foreach($results as $val){ ?>
<tr class="<?php if( $i % 2 == 0 ){ echo "even";}else{ echo "odd";} ?>">
<td width="20%"><?php echo $i; ?></td>
<td width="30%"><?php echo $val->book_cat ?></td>
<td width="30%"><?php echo $val->section_code; ?></td>
<td width="20%">
<a class="glyphicon glyphicon-pencil" title="" href="<?php echo URL; ?>/index.php/backend/book_category/update/<?php echo $val->id ?>"><img src="" alt=""></a>   
<a class="glyphicon glyphicon-remove" title="" href="<?php echo URL; ?>/index.php/backend/book_category/delete/<?php echo $val->id ?>"><img src="" alt=""></a>
</td>
</tr>
<?php $i++; } ?>

</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/library/bookcategory/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/library/bookcategory/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/library/bookcategory/create">1</a></li>
<li class="page"><a href="/index.php/library/bookcategory/create/Bookcategory_page/2">2</a></li>
<li class="page"><a href="/index.php/library/bookcategory/create/Bookcategory_page/3">3</a></li>
<li class="page"><a href="/index.php/library/bookcategory/create/Bookcategory_page/4">4</a></li>
<li class="next"><a href="/index.php/library/bookcategory/create/Bookcategory_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/library/bookcategory/create/Bookcategory_page/7">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/library/bookcategory/create"><span>1</span><span>3</span><span>4</span><span>5</span><span>7</span><span>8</span><span>9</span><span>10</span><span>11</span><span>14</span></div>
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
		
		