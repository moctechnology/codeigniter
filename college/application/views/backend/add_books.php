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
            <li class="active">Add Books</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="librarybooks-form" action="" method="post">    <div class="col-sm-12">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab" aria-expanded="true">Add Books</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab" aria-expanded="false">Book List</a></li>
        </ul>
        <h6 class="content-group text-semibold"></h6>
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Add Books</h4>
                            </div>
                            <div class="panel-body">
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Book ISBN No.</label>
                                        <input class="form-control" name="book_isbn_no" id="Librarybooks_librarybooks_isbn" maxlength="256" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_isbn_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Book No.</label>
                                        <input class="form-control" name="book_no" id="Librarybooks_librarybooks_lbookno" maxlength="45" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_lbookno_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Title</label>
                                        <input class="form-control" name="title" id="Librarybooks_librarybooks_title" maxlength="256" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_title_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Author</label>
                                        <input class="form-control" name="author" id="Librarybooks_librarybooks_author" maxlength="256" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_author_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Edition</label>
                                        <input class="form-control" name="edition" id="Librarybooks_librarybooks_edition" maxlength="256" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_edition_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input" class="req">Book Category</label>
                                        <select class="form-control" name="book_cat" id="Librarybooks_bookcategoryid">
<option value="">Select Option</option>
<?php 

foreach($bookcats as $val){ ?>
<option value="<?php echo $val->book_cat ?>"><?php echo $val->book_cat ?></option>
<?php } ?>
</select>                                        
									<div class="school_val_error" id="Librarybooks_bookcategoryid_em_" style="display:none"></div>                                    
									</div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Publisher</label>
                                        <input class="form-control" name="publisher" id="Librarybooks_librarybooks_publisher" maxlength="256" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_publisher_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">No.of Copies</label>
                                        <input class="form-control" name="no_of_copies" id="Librarybooks_librarybooks_noofcopies" maxlength="45" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_noofcopies_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Shelf No.</label>
                                        <input class="form-control" name="shelf_no" id="Librarybooks_librarybooks_shelfno" maxlength="45" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_shelfno_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Book Status</label>
                                        <input class="form-control" name="book_status" id="Librarybooks_librarybooks_bookposition" maxlength="45" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_bookposition_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Book Cost</label>
                                        <input class="form-control" name="book_cost" id="Librarybooks_librarybooks_cost" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_cost_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Language</label>
                                        <input class="form-control" name="language" id="Librarybooks_librarybooks_language" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_language_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input" class="req">Book Condition</label>
                                        <select class="form-control" name="book_condition" id="Librarybooks_condition">
<option value="">Select Option</option>
<option value="As New">As New</option>
<option value="Fine">Fine</option>
<option value="Very Good">Very Good</option>
<option value="Good">Good</option>
<option value="Fair">Fair</option>
<option value="Poor">Poor</option>
<option value="Missing">Missing</option>
<option value="Lost">Lost</option>
</select>                                        <div class="school_val_error" id="Librarybooks_condition_em_" style="display:none"></div>                                    </div> 
                                <div class="row">
                                    <div class="span5"><br>
                                        <div class="form_sep">
                                            <input class="btn btn-info" name="submit" value="Save" type="submit">                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane" id="tbb_b">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Book List</h4>
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
                                        <input id="search" class="form-control" placeholder="Search..." type="text">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="grid-view table-responsive" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th>
<th id="item-grid_c1">Book ISBN No.</th>
<th id="item-grid_c2">Book No.</th>
<th id="item-grid_c3">Book Title</th>
<th id="item-grid_c4">Book Status</th>
<th class="button-column" id="item-grid_c5">Manage</th>
</tr>
</thead>
<tbody>
<?php $i=1; foreach($results as $val){ ?>
<tr class="<?php if( $i % 2 == 0 ){ echo "even";}else{ echo "odd";} ?>">
<td width="5%"><?php echo $i; ?></td>
<td width="22.5%"><?php echo $val->book_isbn_no ?></td>
<td width="22.5%"><?php echo $val->book_no ?></td>
<td width="22.5%"><?php echo $val->title; ?></td>
<td width="22.5%"><?php echo $val->book_status ?></td>
<td width="5%">
<a class="glyphicon glyphicon-pencil" title="" href="<?php echo URL ?>/index.php/backend/add_books/update/<?php echo $val->id; ?>"><img src="" alt=""></a> 
<a class="glyphicon glyphicon-eye-open" title="" href="<?php echo URL ?>/index.php/backend/add_books/delete/<?php echo $val->id; ?>"><img src="" alt=""></a>
</td>
</tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/library/librarybooks/create">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/library/librarybooks/create">&lt;</a></li>
<li class="page selected"><a href="/index.php/library/librarybooks/create">1</a></li>
<li class="page"><a href="/index.php/library/librarybooks/create/Librarybooks_page/2">2</a></li>
<li class="page"><a href="/index.php/library/librarybooks/create/Librarybooks_page/3">3</a></li>
<li class="page"><a href="/index.php/library/librarybooks/create/Librarybooks_page/4">4</a></li>
<li class="next"><a href="/index.php/library/librarybooks/create/Librarybooks_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/library/librarybooks/create/Librarybooks_page/9951">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/library/librarybooks/create"><span>99508</span><span>99507</span><span>99506</span><span>99505</span><span>99504</span><span>99503</span><span>99502</span><span>99501</span><span>99500</span><span>99499</span></div>
</div>  
                                    </div>
                                </div>
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
                
            </div><!--contentinner-->
        </div>
		
		