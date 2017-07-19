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
            <li><a href="#">Transport</a></li>
            <li class="active">Add Vehicle</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">

<?php $id = $this->uri->segment(4) ?>
    <form id="transportvehicle-form" action="" method="post">    <div class="row">
        <div class="col-sm-3"> 
        </div>
        <div class="col-sm-3"> 
        </div>
        <div class="col-sm-3"> 
        </div>
        <div class="col-sm-3"> 
            <input type="text" id="search" class="form-control" placeholder="Search by Vehicle No.">
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-6">
		
		
		<?php 
		$vehicle_no = '';
		$no_of_seats = '';
		$maximum_allowed = '';
		$vehicle_type = '';
		$contact_person = '';
		$insurance_renewal_date = '';
		
		if($id != ''){
		foreach($single_vehicle as $val){
		$id = $val->id;
		$vehicle_no = $val->vehicle_no;
		$no_of_seats = $val->no_of_seats;
		$maximum_allowed = $val->maximum_allowed;
		$vehicle_type = $val->vehicle_type;
		$contact_person = $val->contact_person;
		$insurance_renewal_date = $val->insurance_renewal_date;
		} 
		}?>
		
		
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Vehicle Details</h4>
                </div>
                <div class="panel-body">
                    <div class="panel-body">
<!--                        <div class="form-group">
                            <label for="Gender" class="req">Vehicle ID</label>
                                                                                </div>-->
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Vehicle No. </label>
                            <input size="84" maxlength="45" class="form-control" value="<?php echo $vehicle_no ?>" name="vehicle_no" id="Transportvehicle_transportvehicle_no" type="text">                            <div class="school_val_error" id="Transportvehicle_transportvehicle_no_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group">
                            <label for="reg_input_name" class="req">No. of Seats </label>
                            <input size="84" maxlength="45" class="form-control" value="<?php echo $no_of_seats ?>" name="no_of_seats" id="Transportvehicle_transportvehicle_noofseats" type="text">                            <div class="school_val_error" id="Transportvehicle_transportvehicle_noofseats_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Maximum Allowed</label>
                            <input size="84" maxlength="45" class="form-control" value="<?php echo $maximum_allowed ?>" name="maximum_allowed" id="Transportvehicle_transportvehiclecol_maxallowed" type="text">                            <div class="school_val_error" id="Transportvehicle_transportvehiclecol_maxallowed_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group">
                            <label for="Gender" class="req">Vehicle Type</label>
                            <select class="form-control" data-required="true" name="vehicle_type" id="Transportvehicle_transportvehicle_typeofvehicle">
<option value="" selected="selected">Please select</option>
<option value="Contract">Contract</option>
<option value="Ownership">Ownership</option>
</select>                            <div class="school_val_error" id="Transportvehicle_transportvehicle_typeofvehicle_em_" style="display:none"></div>                        </div>
                        <div class="form-group">
                            <label for="reg_input_name" class="req">Contact Person</label>
                            <input size="84" maxlength="45" class="form-control" value="<?php echo $contact_person ?>" name="contact_person" id="Transportvehicle_transportvehicle_contactperson" type="text">                            <div class="school_val_error" id="Transportvehicle_transportvehicle_contactperson_em_" style="display:none"></div>                
                        </div>
                        <div class="form-group">
                            <label for="reg_input_name">Insurance Renewal Date</label>
                            <div data-date-format="dd-mm-yyyy" class="input-group date">
                                <input placeholder="Renewal Date" class="form-control pickadate picker__input" name="insurance_renewal_date" id="Transportvehicle_transportvehicle_insurancerenewaldate" type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="Transportvehicle_transportvehicle_insurancerenewaldate_root"><div class="picker" id="Transportvehicle_transportvehicle_insurancerenewaldate_root" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="Transportvehicle_transportvehicle_insurancerenewaldate_table" title="Pick a year from the dropdown"><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option></select><select class="picker__select--month" disabled="" aria-controls="Transportvehicle_transportvehicle_insurancerenewaldate_table" title="Pick a month from the dropdown"><option value="0">January</option><option value="1">February</option><option value="2" selected="">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="Transportvehicle_transportvehicle_insurancerenewaldate_table" title="Go to the previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="Transportvehicle_transportvehicle_insurancerenewaldate_table" title="Go to the next month"> </div></div><table class="picker__table" id="Transportvehicle_transportvehicle_insurancerenewaldate_table" role="grid" aria-controls="Transportvehicle_transportvehicle_insurancerenewaldate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488047400000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488133800000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1488220200000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488306600000" role="gridcell">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488393000000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488479400000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488565800000" role="gridcell">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488652200000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488738600000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488825000000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488911400000" role="gridcell">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1488997800000" role="gridcell">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489084200000" role="gridcell">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489170600000" role="gridcell">11</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489257000000" role="gridcell">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489343400000" role="gridcell">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489429800000" role="gridcell">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489516200000" role="gridcell">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489602600000" role="gridcell">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489689000000" role="gridcell">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489775400000" role="gridcell">18</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489861800000" role="gridcell">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1489948200000" role="gridcell">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490034600000" role="gridcell">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490121000000" role="gridcell">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1490207400000" role="gridcell" aria-activedescendant="true">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490293800000" role="gridcell">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490380200000" role="gridcell">25</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490466600000" role="gridcell">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490553000000" role="gridcell">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490639400000" role="gridcell">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490725800000" role="gridcell">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490812200000" role="gridcell">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1490898600000" role="gridcell">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1490985000000" role="gridcell">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491071400000" role="gridcell">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491157800000" role="gridcell">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491244200000" role="gridcell">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491330600000" role="gridcell">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491417000000" role="gridcell">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491503400000" role="gridcell">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1491589800000" role="gridcell">8</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1490207400000" disabled="" aria-controls="Transportvehicle_transportvehicle_insurancerenewaldate">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="Transportvehicle_transportvehicle_insurancerenewaldate">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="Transportvehicle_transportvehicle_insurancerenewaldate">Close</button></div></div></div></div></div></div><div class="school_val_error" id="Transportvehicle_transportvehicle_insurancerenewaldate_em_" style="display:none"></div>                                
								<span class="input-group-addon"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form_sep">
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
                                <input class="btn btn-info" name="submit" id="std_reg_submit" type="submit" value="<?php if($id != ''){ echo "Update";}else{ echo 'Save';} ?>">                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="grid-view table-responsive" id="item-grid">
<table class="table responsive table-bordered table-striped">
<thead>
<tr>
<th id="item-grid_c0">Sl.No.</th>
<th id="item-grid_c1">Vehicle No.</th>
<th id="item-grid_c2">No. of Seats</th>
<th id="item-grid_c3">Max. Allowed</th>
<th id="item-grid_c4">Contact Person</th>
<th class="button-column" id="item-grid_c5">Manage</th>
</tr>
</thead>
<tbody>
<?php $i=1; foreach($records_bylimit as $val){ ?>
<tr class="<?php if($i % 2 == 0){ echo "even";}else{ echo "odd";} ?>">
<td width="5%"><?php echo $i; ?></td><td width="10%"><?php echo $val->vehicle_no ?></td>
<td width="8%"><?php echo $val->no_of_seats ?></td>
<td width="8%"><?php echo $val->maximum_allowed ?></td>
<td width="10%"><?php echo $val->contact_person; ?></td>
<td width="10%">
<a class="glyphicon glyphicon-pencil" title="" href="<?php echo URL ?>/index.php/backend/add_vehicle/update/<?php echo $val->id; ?>"><img src="" alt=""></a> 
<a class="glyphicon glyphicon-eye-open" title="" href="<?php echo URL ?>/index.php/backend/add_vehicle/view/<?php echo $val->id; ?>"><img src="" alt=""></a>  
<a class="glyphicon glyphicon-remove" title="" href="<?php echo URL ?>/index.php/backend/add_vehicle/delete/<?php echo $val->id ?>"><img src="" alt=""></a>
</td>
</tr>
<?php $i++; } ?>

</tbody>
</table>
<div class="pager"><ul id="yw0" class="yiiPager">


<?php 
echo $pagination_helper->create_links();
//foreach($string_link as $val){ ?>
<li class="previous hidden"><?php //echo $link; ?></li>
<?php //} ?>
<li class="first hidden"><a href="/index.php/library/bookcategory/create">&lt;&lt;</a></li>
<li class="page selected"><a href="/index.php/library/bookcategory/create">1</a></li>
<li class="page"><a href="/index.php/library/bookcategory/create/Bookcategory_page/2">2</a></li>
<li class="page"><a href="/index.php/library/bookcategory/create/Bookcategory_page/3">3</a></li>
<li class="page"><a href="/index.php/library/bookcategory/create/Bookcategory_page/4">4</a></li>
<li class="next"><a href="/index.php/library/bookcategory/create/Bookcategory_page/2">&gt;</a></li>
<li class="last"><a href="/index.php/library/bookcategory/create/Bookcategory_page/7">&gt;&gt;</a></li></ul></div>
<div class="keys" style="display:none" title="/index.php/transport/transportvehicle/create"><span>1</span><span>5</span><span>7</span></div>
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

    $.ajax({
        url: "http://deepam.cloudapp.net/ColumbusRESTService/ColumbusREST.svc/json/Login",
        type: "POST",
        data: JSON.stringify({
            accountID: "immanuel",
            userID: "immanuelcabs",
            password: "immanuel@123"
        }),
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var response = JSON.stringify(data);
            var response1 = $.parseJSON(response);
            var arr = response1.LoginResult;
            var userInfoArr = arr['UserInfo'];
//            console.log(userInfoArr.UserID);

            $.ajax({
                url: "http://deepam.cloudapp.net/ColumbusRESTService/ColumbusREST.svc/json/GetVehicles",
                type: "POST",
                data: JSON.stringify({
                    accountID: userInfoArr.AccountID,
                    userID: userInfoArr.UserID
                }),
                contentType: "application/json; charset=utf-8",
                success: function (data) {
                    var response = JSON.stringify(data);
                    var response1 = $.parseJSON(response);
                    var GetVehiclesResult = response1.GetVehiclesResult;
                    var vehicles = GetVehiclesResult['Vehicles'];
                    var vehiclesarray = [];
                    for (var i = 0; i < vehicles.length; ++i) {
                        var json = vehicles[i];
                        for (var prop in json) {
                            vehiclesarray.push(json[prop]);
//                            console.log(json[prop]);
                        }
                    }
                    var sendarray = JSON.stringify(vehiclesarray);
                    $("#vehicleid").empty();
                    $.ajax({
                        type: "POST",
                        url: "/index.php/transport/transportvehicle/getvehicleid",
                        data: {sendarray: sendarray},
                        dataType: "html",
                        success: function (data) {
                      $("#vehicleid").append(data);
                        }
                    });
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