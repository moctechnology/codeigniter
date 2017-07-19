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
            <li><a href="#">Hostel</a></li>
            <li class="active">Hostel Details Report</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Hostel Details Report</h4>
                </div>
                <div class="panel-body">
                            <div class="form-group" align="right">
                                <input onclick="printDiv('print')" value="Print Report" class="btn btn-danger" type="button">
                            </div>
                    <div id="print">
                        <div class="table-responsive">
                            <table class="table responsive table-bordered table-striped" id="hosteldetails">
                                <thead>
                                    <tr>
                                        <th width="5%">Sl. No</th>
                                        <th width="6.5%">Hostel Type</th>
                                        <th width="13.5%">Hostel Name</th>
                                        <th width="12.5%">Total Rooms</th>
                                        <th width="12.5%">Available Rooms</th>
                                        <th width="12.5%">Occupied Rooms</th>
                                        <th width="12.5%">Warden Name</th>
                                        <th width="12.5%">Warden Phone</th>
                                    </tr>
                                </thead>
                                <tbody><tr><td>1</td><td>betta hostel</td><td>just</td><td>42</td><td>39</td><td>3</td><td>mary</td><td></td></tr><tr><td>2</td><td>non AC conditionalc</td><td>santa</td><td>28</td><td>28</td><td>0</td><td>sunitha</td><td></td></tr><tr><td>3</td><td>ktier public hostel</td><td>kiter public boys hostel</td><td>0</td><td>0</td><td>0</td><td>kiter</td><td>852147854</td></tr><tr><td>4</td><td>betta hostel</td><td>TEST</td><td>49</td><td>49</td><td>0</td><td>nnnn</td><td>3333333333</td></tr><tr><td>5</td><td>Boys</td><td>Hostel One</td><td>15</td><td>13</td><td>2</td><td>Sushan</td><td>9845</td></tr><tr><td>6</td><td>General</td><td>NEw Hostel</td><td>7</td><td>6</td><td>1</td><td>Ram</td><td>04040</td></tr><tr><td>7</td><td>betta hostel</td><td>GENTELMAN</td><td>11</td><td>11</td><td>0</td><td>LKBUTG</td><td>grgrregreg</td></tr><tr><td>8</td><td>AC</td><td>bbb</td><td>36</td><td>32</td><td>4</td><td>bbb</td><td>grgrregreg</td></tr><tr><td>9</td><td>aaaa</td><td>dfgdfg</td><td>0</td><td>0</td><td>0</td><td>fgh</td><td>654656</td></tr><tr><td>10</td><td>mens hostel</td><td>just</td><td>0</td><td>0</td><td>0</td><td>bbb fgdg</td><td></td></tr><tr><td>11</td><td>Without AC</td><td>Virshaywa </td><td>0</td><td>0</td><td>0</td><td>jai</td><td>+91 9738720991</td></tr><tr><td>12</td><td>Without AC</td><td>Virshaywa </td><td>0</td><td>0</td><td>0</td><td>jai</td><td>+91 9738720991</td></tr><tr><td>13</td><td>betta hostel</td><td>sss</td><td>2</td><td>1</td><td>1</td><td>sdf</td><td>5555</td></tr><tr><td>14</td><td>xxx</td><td>hhh</td><td>0</td><td>0</td><td>0</td><td>vkv</td><td>999</td></tr><tr><td>15</td><td>Boys</td><td>sfg</td><td>0</td><td>0</td><td>0</td><td>wwww</td><td>66666</td></tr><tr><td>16</td><td>Boys</td><td>SH Hostel</td><td>5</td><td>4</td><td>1</td><td>sada</td><td>9000000000</td></tr><tr><td>17</td><td>Imperial Hostel</td><td>1123</td><td>0</td><td>0</td><td>0</td><td>eewrwr</td><td></td></tr><tr><td>18</td><td>ackk</td><td>hyhyhy</td><td>0</td><td>0</td><td>0</td><td>sundar</td><td>990900</td></tr><tr><td>19</td><td>non AC conditionalc</td><td>Hi-Tech Girls Hostel</td><td>3</td><td>3</td><td>0</td><td>Smita Acharya</td><td>987654321</td></tr><tr><td>20</td><td>AC Room</td><td>Lucky Hostel</td><td>0</td><td>0</td><td>0</td><td>John</td><td>9878978589</td></tr><tr><td>21</td><td>Fully AC</td><td>Lucky Singh</td><td>0</td><td>0</td><td>0</td><td>Shashi</td><td>9639639636</td></tr><tr><td>22</td><td>PLATYS HOSTEL</td><td>PLATYS BOYS HOSTEL</td><td>4</td><td>4</td><td>0</td><td>YOGESH</td><td>9090909090</td></tr><tr><td>23</td><td>my hostel</td><td>Hostel101</td><td>0</td><td>0</td><td>0</td><td>Sree kala</td><td>98474432112</td></tr><tr><td>24</td><td>bngboys hostel</td><td>Bng Boys hostel</td><td>0</td><td>0</td><td>0</td><td>James Watler</td><td>123456789</td></tr><tr><td>25</td><td>Gents Hostel</td><td>Aarya Gents Hostel</td><td>6</td><td>6</td><td>0</td><td>Subrato</td><td>+918855229988</td></tr><tr><td>26</td><td>tesing</td><td>xxxxxxxxxxxsdsd</td><td>0</td><td>0</td><td>0</td><td>xxxxxx</td><td>333333333</td></tr><tr><td>27</td><td>ktier public hostel</td><td>dcddsgvdbb</td><td>0</td><td>0</td><td>0</td><td>bn mvbvcxbdx</td><td>425354345</td></tr><tr><td>28</td><td>sandra</td><td>sss</td><td>0</td><td>0</td><td>0</td><td>dddghf</td><td>3456789012</td></tr><tr><td>29</td><td>AC</td><td>Jinnah Hostel</td><td>4</td><td>4</td><td>0</td><td>Mehmood</td><td>45215685</td></tr><tr><td>30</td><td>GHSHostel</td><td>Mehmood Hostel</td><td>2</td><td>1</td><td>1</td><td>Mehmood</td><td>12345678</td></tr></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#hosteldetails tbody').empty();
    $.ajax({
        type: "POST",
        url: "hosteldetailsreports",
        data: {},
        dataType: "html",
        success: function (data) {
            $('#hosteldetails tbody').append(data);
        }
    });
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;

        window.print();
        document.body.innerHTML = originalContents;
    }
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