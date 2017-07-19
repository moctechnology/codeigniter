<div class="content-wrapper">
                    <div class="content">

		<div class="page-header">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
                <li><a href="#">Academic</a></li>
                <li class="active">Time Table</li>
            </ul>
             <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i>Support</a></li>
        </ul>
            <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
    </div><br>
    <div class="content">
            <form id="timetable-form" action="/index.php/core/timetable/active" method="post">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">View Time Table</h4>
                        </div>
                        <div class="panel-body">
                            <div class="panel-body">


                                <div class="form-group col-sm-3 validating">
                                    <label for="reg_input" class="req">Course</label>
                                    <select class="form-control" name="Timetable[courseid]" id="Timetable_courseid">
<option value="">SelectCourse</option>
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
</select><div class="school_val_error" id="Timetable_courseid_em_" style="display:none"></div>                                </div>  
                                <div class="form-group col-sm-3 validating">
                                    <label for="reg_input" class="req">Batch</label>
                                    <select class="form-control" name="Timetable[batchid]" id="Timetable_batchid"><option value="">Select</option><option value="2">Batch A</option><option value="18">as</option></select><div class="school_val_error" id="Timetable_batchid_em_" style="display:none"></div>                                </div> 
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            </form>        </div>
 <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Time table List</h4>
                        </div>                   
                        <table data-page-size="40" data-filter="#table_search" class="table responsive table table-bordered table table-striped" id="resp_table">
                            <thead>
                                <tr>
                                    <th data-toggle="true" class="footable-first-column footable-sortable">SlNo<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone,tablet" class="footable-sortable">Time Table Name<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone,tablet" class="footable-sortable">Operations<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone,tablet" class="footable-sortable"><span class="footable-sort-indicator"></span></th>
                                </tr>
                            </thead>
                            <tbody id="tablehead"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<script>
    function active(name) {
        $.ajax({
            type: "POST",
            url: "activate",
            data: {name: name, active: "1"},
            dataType: "html",
            success: function (data) {
				if(data==="error"){
					alert('Only one time table can be activated at a time');
				}
                console.log(data);
                reloaddata();
            }
        });
    }
    function inactive(name) {
        $.ajax({
            type: "POST",
            url: "activate",
            data: {name: name, active: "0"},
            dataType: "html",
            success: function (data) {
                console.log(data);
                reloaddata();
            }
        });
    }
    function deletefn(name) {
        $.ajax({
            type: "POST",
            url: "deletefn",
            data: {name: name},
            dataType: "html",
            success: function (data) {
                console.log(data);
                reloaddata();
            }
        });
    }
    function reloaddata() {
        var courseid = $('#Timetable_courseid option:selected').val();
        var batchid = $('#Timetable_batchid option:selected').val();

        $.ajax({
            type: "POST",
            url: "Fetchttnamelistreload",
            data: {courseid: courseid, batchid: batchid},
            dataType: "html",
            success: function (data) {
                $("#tablehead").empty();
                $("#tablehead").append(data);
            }
        });
    }
$( ".togglebutton" ).change(function() {
  
  if($(this).attr('checked')) {
   var name=$(this).data("myval");
        $.ajax({
            type: "POST",
            url: "activate",
            data: {name: name, active: "0"},
            dataType: "html",
            success: function (data) {
                console.log(data);
                reloaddata();
            }
        });
} else {
 var name=$(this).data("myval");
        $.ajax({
            type: "POST",
            url: "activate",
            data: {name: name, active: "1"},
            dataType: "html",
            success: function (data) {
                console.log(data);
                reloaddata();
            }
        });
}


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