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
            <li class="active">Add Category</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="bookcategory-form" action="/index.php/library/bookcategory/create" method="post">    <div class="row">
        <div class="span4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Add Book Category</h4>
                </div>
                <div class="panel-body">
                    <div class="panel-body">

                        <div class="form-group error">
                            <label for="reg_input_name" class="req">Category Name</label>
                            <input size="84" maxlength="45" class="form-control" name="Bookcategory[bookcategory_name]" id="Bookcategory_bookcategory_name" type="text">                            <div class="school_val_error" id="Bookcategory_bookcategory_name_em_" style="">Category Name cannot be blank.</div>                
                        </div> 
                         <div class="form-group success">
                            <label for="reg_input_name">Section Code</label>
                            <input class="form-control" name="Bookcategory[bookcategory_sectioncode]" id="Bookcategory_bookcategory_sectioncode" type="text">                            <div class="school_val_error" id="Bookcategory_bookcategory_sectioncode_em_" style="display:none"></div>                
                        </div> 
                    </div>
                    <div class="row">
                        <div class="span5">
                            <div class="form_sep">
                                <input class="btn btn-info" name="yt0" value="Save" type="submit">                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="span5">
            <div class="grid-view" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Book Category</th><th id="item-grid_c2">Section Code</th><th class="button-column" id="item-grid_c3">Manage</th></tr>
</thead>
<tbody>
<tr class="odd selected">
<td width="20%">1</td><td width="30%">test2</td><td width="30%">210</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/bookcategory/update/id/1"><img src="" alt=""></a>   <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookcategory/delete/id/1"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">2</td><td width="30%">computer lab book</td><td width="30%"></td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/bookcategory/update/id/3"><img src="" alt=""></a>   <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookcategory/delete/id/3"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">3</td><td width="30%">computer sciences</td><td width="30%">01</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/bookcategory/update/id/4"><img src="" alt=""></a>   <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookcategory/delete/id/4"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">4</td><td width="30%">c programming</td><td width="30%">0001</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/bookcategory/update/id/5"><img src="" alt=""></a>   <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookcategory/delete/id/5"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">5</td><td width="30%">computer sciences</td><td width="30%">01</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/bookcategory/update/id/7"><img src="" alt=""></a>   <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookcategory/delete/id/7"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">6</td><td width="30%">retest</td><td width="30%">214</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/bookcategory/update/id/8"><img src="" alt=""></a>   <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookcategory/delete/id/8"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">7</td><td width="30%">operating system</td><td width="30%">311</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/bookcategory/update/id/9"><img src="" alt=""></a>   <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookcategory/delete/id/9"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">8</td><td width="30%">question paper</td><td width="30%">144</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/bookcategory/update/id/10"><img src="" alt=""></a>   <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookcategory/delete/id/10"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="20%">9</td><td width="30%">six class</td><td width="30%">a</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/bookcategory/update/id/11"><img src="" alt=""></a>   <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookcategory/delete/id/11"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="20%">10</td><td width="30%">book12</td><td width="30%">comic</td><td width="20%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/bookcategory/update/id/14"><img src="" alt=""></a>   <a class="glyphicon glyphicon-remove" title="" href="/index.php/library/bookcategory/delete/id/14"><img src="" alt=""></a></td></tr>
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
		
		