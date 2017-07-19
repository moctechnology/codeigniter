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
                <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-home2 position-left"></i>Home</a></li>
                <li><a href="#">Academic</a></li>
            <li><a href="#">Subjects</a></li>
                <li class="active">Assign Subject</li>
            </ul>
             <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i>Support </a></li>
        </ul>
            <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
    </div><br>
    <div class="content">
            <form id="assignsubject-form" action="/index.php/core/subject/assignsubject" method="post">            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Assign Subject</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12">
                                <div class="panel-body">

                                                                        
                                    <div class="form-group">
                                        <label for="reg_input" class="req">Course</label>
                                        <select class="form-control" name="Assignsubject[courseid]" id="Assignsubject_courseid">
<option value="">Please Select</option>
<option value="1">B.Scs</option>
<option value="2">STD 2</option>
<option value="9">BIS</option>
<option value="10">STD 3</option>
<option value="11">Trendz Abacus</option>
<option value="12">abc</option>
<option value="13">cvb</option>
<option value="14">bsc</option>
<option value="15">eea</option>
<option value="16">maths</option>
<option value="17">class1</option>
<option value="18">class3</option>
<option value="19">test</option>
<option value="20">test12</option>
<option value="21">mach</option>
</select><div class="school_val_error" id="Assignsubject_courseid_em_" style="display:none"></div>                                    </div>  
                                    <div class="form-group">
                                        <label for="reg_input" class="req">Batch</label>
                                        <select class="form-control" name="Assignsubject[batchid]" id="Assignsubject_batchid">
<option value="">Please Select</option>
</select><div class="school_val_error" id="Assignsubject_batchid_em_" style="display:none"></div>                                    </div> 
                                    <div class="form-group">
                                        <label for="reg_input" class="req">Subject</label>
                                        <select class="form-control" multiple="multiple" name="Assignsubject[subjectid][]" id="Assignsubject_subjectid">
<option value="">Select Subject</option>
</select><div class="school_val_error" id="Assignsubject_subjectid_em_" style="display:none"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form_sep">
                                        <input class="btn btn-info" type="submit" name="yt0" value="Save">                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="grid-view" id="item-grid">
<table class="items">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th><th id="item-grid_c1">Course</th><th id="item-grid_c2">Batch</th><th id="item-grid_c3">Subject</th><th class="button-column" id="item-grid_c4">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td width="20%">B.Scs</td><td width="20%">A</td><td width="45%">history  -  h1</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/77"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">2</td><td width="20%">STD 3</td><td width="20%">A</td><td width="45%">Business Process Management  -  4BIS-404</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/76"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">3</td><td width="20%">STD 3</td><td width="20%">A</td><td width="45%">Business Information System and Analysis  -  4BIS-401</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/75"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">4</td><td width="20%">B.Scs</td><td width="20%">A</td><td width="45%">Enterprise System and Risk Management  -  4BIS-403</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/74"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">5</td><td width="20%">STD 3</td><td width="20%">A</td><td width="45%">Advanced Information System  -  4BIS-406</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/70"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">6</td><td width="20%">STD 3</td><td width="20%">A</td><td width="45%">abc  -  2</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/69"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">7</td><td width="20%">B.Scs</td><td width="20%">A</td><td width="45%">Business Process Management  -  4BIS-404</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/68"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">8</td><td width="20%">B.Scs</td><td width="20%">A</td><td width="45%">Business Information System and Analysis  -  4BIS-401</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/67"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">9</td><td width="20%">B.Scs</td><td width="20%">A</td><td width="45%">Advanced Information System  -  4BIS-406</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/66"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">10</td><td width="20%">B.Scs</td><td width="20%">A</td><td width="45%">abc  -  1</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/65"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">11</td><td width="20%">B.Scs</td><td width="20%">A</td><td width="45%">abc  -  2</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/64"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">12</td><td width="20%">class3</td><td width="20%">secA</td><td width="45%">Science  -  04</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/62"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">13</td><td width="20%">class3</td><td width="20%">secA</td><td width="45%">Maths  -  02</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/61"><img src="" alt=""></a></td></tr>
<tr class="even">
<td width="5%">14</td><td width="20%">class3</td><td width="20%">secA</td><td width="45%">history  -  h1</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/60"><img src="" alt=""></a></td></tr>
<tr class="odd">
<td width="5%">15</td><td width="20%">class3</td><td width="20%">secA</td><td width="45%">Hindi  -  05</td><td width="10%">  <a class="icon-cross2" title="" href="/index.php/core/subject/deleteassignsubject/id/59"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/index.php/core/subject/assignsubject">&lt;&lt;</a></li>
<li class="previous hidden"><a href="/index.php/core/subject/assignsubject">&lt;</a></li>
<li class="page selected"><a href="/index.php/core/subject/assignsubject">1</a></li>
<li class="page"><a href="/index.php/core/subject/assignsubject/Assignsubject_page/2">2</a></li>
<li class="page"><a href="/index.php/core/subject/assignsubject/Assignsubject_page/3">3</a></li>
<li class="page"><a href="/index.php/core/subject/assignsubject/Assignsubject_page/4">4</a></li>
<li class="next"><a href="/index.php/core/subject/assignsubject/Assignsubject_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/core/subject/assignsubject/Assignsubject_page/4">&gt;&gt;</a></li></ul></div><div class="keys" style="display:none" title="/index.php/core/subject/assignsubject"><span>77</span><span>76</span><span>75</span><span>74</span><span>70</span><span>69</span><span>68</span><span>67</span><span>66</span><span>65</span><span>64</span><span>62</span><span>61</span><span>60</span><span>59</span></div>
</div>  
                </div>
            </div>
            </form>        </div>
<script>
    $('#Assignsubject_courseid').change(function () {
        $.ajax({
            url: 'fetchbatch',
            type: 'POST',
            data: {courseid: $('#Assignsubject_courseid option:selected').val()},
            success: function (data) {
                $("#Assignsubject_batchid").empty();
                $("#Assignsubject_batchid").append(data);

            }

        });
        $('#item-grid').yiiGridView('update', {
            data: {search: $('#Assignsubject_courseid option:selected').text()}
        });
        return false;

    });
    $('#Assignsubject_batchid').change(function () {

        $.ajax({
            url: 'fetchsubject',
            type: 'POST',
            data: {courseid: $('#Assignsubject_courseid option:selected').val(), batchid: $('#Assignsubject_batchid option:selected').val()},
            success: function (data) {
                $("#Assignsubject_subjectid").empty();
                $("#Assignsubject_subjectid").append(data);

            }

        });

        var values = $('#Assignsubject_courseid option:selected').text() + "," + $('#Assignsubject_batchid option:selected').text();
        $('#item-grid').yiiGridView('update', {
            data: {search: values}
        });
        return false;

    });

</script>
	

		
                    </div>
										
					<div class="modal-content login-form col-lg-6" id="moodlemodal" style="display: none;">
                        <div id="modal-unlock" class="modal fade col-md-12">
                            <div class="modal-dialog">
                                <div class="modal-content login-form">

                                    <!-- Form -->
                                    <form class="modal-body" id="loginForm" action="/index.php/site/moodle" method="post">
<!--								<div class="thumbnail"><div class="thumb thumb-slide" >-->
									<img src="/images/index.jpg" alt="" class="img-responsive center-block" style="width:100px; height:100px;">
<!--                                                                    </div></div>-->

								<h6 class="content-group text-center text-semibold no-margin-top">Moodle credentials <small class="display-block">Unlock your account</small></h6>
                                                    								<div class="form-group has-feedback">
									<input type="text" class="form-control" name="url" placeholder="Moodle URL" id="link">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>
                                                                                                                              <div class="form-group has-feedback">
									<input type="text" class="form-control" name="username" placeholder="Your Username" id="username">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>
                                                                <div class="form-group has-feedback">
									<input type="text" class="form-control" name="password" placeholder="Your Password" id="password">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>


								<button type="submit" class="btn bg-slate btn-block" onclick="return  saveitem()">Save <i class="icon-circle-right2 position-right"></i></button>
								<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
							</form>
							<!-- /form -->

						</div>
					</div>
				</div>
                                    <!-- /form -->

					</div>                     <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        <ul class="nav navbar-nav no-border visible-xs-block">
                            <li>
                                <a data-target="#navbar-second" data-toggle="collapse" class="text-center collapsed">
                                    <i class="icon-circle-up2"></i>
                                </a>
                            </li>
                        </ul>
                        <div id="navbar-second" class="navbar-collapse collapse">
                            <div class="navbar-text">
                                © 2017. Webschool by GESCIS Technologies Pvt Ltd. V3.5
                            </div>
                        </div>
                    </div>
                </div>