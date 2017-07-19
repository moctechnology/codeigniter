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
    <form id="librarybooks-form" action="/index.php/library/librarybooks/create" method="post">    <div class="col-sm-12">
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
                                        <input class="form-control" name="Librarybooks[librarybooks_isbn]" id="Librarybooks_librarybooks_isbn" maxlength="256" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_isbn_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Book No.</label>
                                        <input class="form-control" name="Librarybooks[librarybooks_lbookno]" id="Librarybooks_librarybooks_lbookno" maxlength="45" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_lbookno_em_" style="display:none"></div>                
                                    </div>
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Title</label>
                                        <input class="form-control" name="Librarybooks[librarybooks_title]" id="Librarybooks_librarybooks_title" maxlength="256" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_title_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Author</label>
                                        <input class="form-control" name="Librarybooks[librarybooks_author]" id="Librarybooks_librarybooks_author" maxlength="256" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_author_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Edition</label>
                                        <input class="form-control" name="Librarybooks[librarybooks_edition]" id="Librarybooks_librarybooks_edition" maxlength="256" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_edition_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input" class="req">Book Category</label>
                                        <select class="form-control" name="Librarybooks[bookcategoryid]" id="Librarybooks_bookcategoryid">
<option value="">Select Option</option>
<option value="1">test2</option>
<option value="3">computer lab book</option>
<option value="4">computer sciences</option>
<option value="5">c programming</option>
<option value="7">computer sciences</option>
<option value="8">retest</option>
<option value="9">operating system</option>
<option value="10">question paper</option>
<option value="11">six class</option>
<option value="14">book12</option>
<option value="15">Tamil</option>
<option value="16">newcat</option>
<option value="17">JungleBook</option>
<option value="18">TEST</option>
<option value="19">Histroy Books</option>
<option value="20">Asp. net</option>
<option value="21">adad</option>
<option value="22">Maths</option>
<option value="23">asdd</option>
<option value="24">IITLib</option>
<option value="25">cbcb qqq</option>
<option value="26">asdasd</option>
<option value="27">physics</option>
<option value="28">Demo</option>
<option value="29">computer</option>
<option value="30">qqqq</option>
<option value="31">dtretrt</option>
<option value="32">textbook</option>
<option value="33">RQR242</option>
<option value="34">Primary School</option>
<option value="35">Software Engineering</option>
<option value="36">Novel</option>
<option value="37">test</option>
<option value="39">dggh</option>
<option value="40">EDUc</option>
<option value="41">management</option>
<option value="42">fiction</option>
<option value="43">wewe</option>
<option value="44">computer lab book</option>
<option value="45">dbms</option>
<option value="46">uyty</option>
<option value="47">aaaaaaaaa</option>
<option value="48">bvcbb</option>
<option value="49">test5</option>
<option value="50">TEST</option>
<option value="51">TEST</option>
<option value="52">biology</option>
<option value="53">OPERATIONAL RESEARCH</option>
<option value="54">Test</option>
<option value="56">samo</option>
<option value="57">science book</option>
<option value="58">stories</option>
<option value="59">gggg</option>
<option value="60">te st2</option>
<option value="61">test</option>
<option value="62">were</option>
<option value="63">asdas</option>
<option value="64">computer lab book</option>
<option value="65">test2</option>
<option value="66">test2</option>
<option value="67">magazine</option>
<option value="68">qqwqw</option>
<option value="69">dbms</option>
<option value="70">fjhhfj</option>
</select>                                        <div class="school_val_error" id="Librarybooks_bookcategoryid_em_" style="display:none"></div>                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Publisher</label>
                                        <input class="form-control" name="Librarybooks[librarybooks_publisher]" id="Librarybooks_librarybooks_publisher" maxlength="256" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_publisher_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">No.of Copies</label>
                                        <input class="form-control" name="Librarybooks[librarybooks_noofcopies]" id="Librarybooks_librarybooks_noofcopies" maxlength="45" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_noofcopies_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Shelf No.</label>
                                        <input class="form-control" name="Librarybooks[librarybooks_shelfno]" id="Librarybooks_librarybooks_shelfno" maxlength="45" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_shelfno_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Book Position</label>
                                        <input class="form-control" name="Librarybooks[librarybooks_bookposition]" id="Librarybooks_librarybooks_bookposition" maxlength="45" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_bookposition_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Book Cost</label>
                                        <input class="form-control" name="Librarybooks[librarybooks_cost]" id="Librarybooks_librarybooks_cost" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_cost_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input_name" class="req">Language</label>
                                        <input class="form-control" name="Librarybooks[librarybooks_language]" id="Librarybooks_librarybooks_language" type="text">                                        <div class="school_val_error" id="Librarybooks_librarybooks_language_em_" style="display:none"></div>                
                                    </div> 
                                    <div class="form-group span3">
                                        <label for="reg_input" class="req">Book Condition</label>
                                        <select class="form-control" name="Librarybooks[condition]" id="Librarybooks_condition">
<option value="">Select Option</option>
<option value="1">As New</option>
<option value="2">Fine</option>
<option value="3">Very Good</option>
<option value="4">Good</option>
<option value="5">Fair</option>
<option value="6">Poor</option>
<option value="7">Missing</option>
<option value="8">Lost</option>
</select>                                        <div class="school_val_error" id="Librarybooks_condition_em_" style="display:none"></div>                                    </div> 
                                <div class="row">
                                    <div class="span5"><br>
                                        <div class="form_sep">
                                            <input class="btn btn-info" name="yt0" value="Save" type="submit">                                        </div>
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
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Book ISBN No.</th><th id="item-grid_c2">Book No.</th><th id="item-grid_c3">Title</th><th id="item-grid_c4">Status</th><th class="button-column" id="item-grid_c5">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td width="22.5%">1231231231231231</td><td width="22.5%">212128</td><td width="22.5%">testgdg</td><td width="22.5%">Available</td><td width="5%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/librarybooks/update/id/99508"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/library/librarybooks/view/id/99508"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">2</td><td width="22.5%">1231231231231231</td><td width="22.5%">212127</td><td width="22.5%">testgdg</td><td width="22.5%">Available</td><td width="5%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/librarybooks/update/id/99507"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/library/librarybooks/view/id/99507"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">3</td><td width="22.5%">1231231231231231</td><td width="22.5%">212126</td><td width="22.5%">testgdg</td><td width="22.5%">Available</td><td width="5%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/librarybooks/update/id/99506"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/library/librarybooks/view/id/99506"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">4</td><td width="22.5%">1231231231231231</td><td width="22.5%">212125</td><td width="22.5%">testgdg</td><td width="22.5%">Available</td><td width="5%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/librarybooks/update/id/99505"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/library/librarybooks/view/id/99505"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">5</td><td width="22.5%">1231231231231231</td><td width="22.5%">212124</td><td width="22.5%">testgdg</td><td width="22.5%">Available</td><td width="5%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/librarybooks/update/id/99504"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/library/librarybooks/view/id/99504"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">6</td><td width="22.5%">1231231231231231</td><td width="22.5%">212123</td><td width="22.5%">testgdg</td><td width="22.5%">Available</td><td width="5%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/librarybooks/update/id/99503"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/library/librarybooks/view/id/99503"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">7</td><td width="22.5%">1231231231231231</td><td width="22.5%">212122</td><td width="22.5%">testgdg</td><td width="22.5%">Available</td><td width="5%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/librarybooks/update/id/99502"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/library/librarybooks/view/id/99502"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">8</td><td width="22.5%">1231231231231231</td><td width="22.5%">212121</td><td width="22.5%">testgdg</td><td width="22.5%">Available</td><td width="5%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/librarybooks/update/id/99501"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/library/librarybooks/view/id/99501"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">9</td><td width="22.5%">1231231231231231</td><td width="22.5%">212128</td><td width="22.5%">testgdg</td><td width="22.5%">Available</td><td width="5%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/librarybooks/update/id/99500"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/library/librarybooks/view/id/99500"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">10</td><td width="22.5%">1231231231231231</td><td width="22.5%">212127</td><td width="22.5%">testgdg</td><td width="22.5%">Available</td><td width="5%"><a class="glyphicon glyphicon-pencil" title="" href="/index.php/library/librarybooks/update/id/99499"><img src="" alt=""></a> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/library/librarybooks/view/id/99499"><img src="" alt=""></a></td></tr>
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
		
		