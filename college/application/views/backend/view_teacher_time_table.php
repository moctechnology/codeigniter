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
            <form id="timetable-form" action="/index.php/core/timetable/viewteachertt" method="post">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">View Time Table</h4>
                        </div>
                        <div class="panel-body">
                            <div class="panel-body">


                                <div class="form-group col-sm-3">
                                    <label for="reg_input" class="req">Select Faculty</label>
                                    <select class="form-control" name="employeemasterid" id="employeemasterid">
<option value="">Select Faculty</option>
<option value="26">U Nay Lin Soe</option>
</select>                                </div>  
                                <div class="form-group col-sm-3">
                                   
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="reg_input" class="">&nbsp;</label><br>
                                    &nbsp;&nbsp;<input type="button" class="btn btn-danger" onclick="printDiv('print')" value="Print" report=""> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            </form>        </div>
  <div class="content">

                        <div class="row" id="print">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">View Timetable</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12">

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                        <table class="table table-responsive table-striped table-bordered" id="finish_table" border="1">
                                            <thead>
                                                <tr></tr>
                                            </thead>
                                            <tbody><tr><td><b>Weekdays</b></td><td><b>Period-1</b></td></tr><tr><td>Monday</td><td>English<br>BIS<br>Second Batch<br>10:15 AM-11:15 AM</td></tr></tbody>
                                        </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
<script>
    function showtt() {

        var name = $('#Timetable_name option:selected').text();
        if (name === "Select") {
            alert("Please Select Timetable");
            return;
        }

        var _courseid = $('#Timetable_courseid option:selected').val();
        if (_courseid === "") {
            alert("Please Select Course");
            return;
        }
        var _batchid = $('#Timetable_batchid option:selected').val();
        if (_batchid === "") {
            alert("Please Select Batch");
            return;
        }
        $.ajax({
            type: "POST",
            url: "readtt",
            data: {name: name, courseid: _courseid, batchid: _batchid},
            dataType: "html",
            success: function (data) {
                console.log(data);
                $('#finish_table tbody').append(data);
            }
        });
    }
   function printDiv(divName) {
        var divToPrint = document.getElementById(divName);
        var popupWin = window.open('', '', 'width=300,height=300');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">');
        popupWin.document.write('<link href="/css/assets/css/minified/ccebootstrap.min.css" rel="stylesheet" type="text/css">');
        popupWin.document.write('<link href="/css/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">');
        popupWin.document.write(divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
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