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
            <li class="active">Available Rooms</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <form id="hostelroom-form" action="/index.php/hostel/hostelroom/availableroomreport" method="post">    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Available Rooms</h4>
                </div>
                <div class="panel-body">
                    <div class="form-group col-sm-4 validating">
                        <label for="reg_input" class="req">Hostel Type</label>
                        <select class="form-control" name="Hostelroom[hosteltypeid]" id="Hostelroom_hosteltypeid">
<option value="">Select Option</option>
<option value="7">betta hostel</option>
<option value="8">non AC conditionalc</option>
<option value="11">ktier public hostel</option>
<option value="12">AC</option>
<option value="13">Boys</option>
<option value="16">Girls</option>
<option value="18">stertbwtb</option>
<option value="19">General</option>
<option value="20">Imperial Hostel</option>
<option value="22">Chittagong University FR Hall</option>
<option value="23">dinu ac</option>
<option value="24">ccccc</option>
<option value="25">ackk</option>
<option value="26">mens hostel</option>
<option value="27">aaaa</option>
<option value="29">WARD</option>
<option value="30">Without AC</option>
<option value="31">acqqq</option>
<option value="32">xxx</option>
<option value="33">AC Room</option>
<option value="35">Fully AC</option>
<option value="36">GHSACHostel</option>
<option value="37">PLATYS HOSTEL</option>
<option value="38">sd</option>
<option value="40">kamar</option>
<option value="41">ddaa</option>
<option value="42">fertert</option>
<option value="43">Public Hotel</option>
<option value="44">non ac</option>
<option value="45">asasa</option>
<option value="46">est</option>
<option value="47">generic hostel</option>
<option value="48">feeinsta</option>
<option value="49">AC HOSTELS</option>
<option value="50">CENTREAL HOSTELS</option>
<option value="51">normal</option>
<option value="52">my hostel</option>
<option value="53">bngboys hostel</option>
<option value="54">bng girls hostel</option>
<option value="55">Gents Hostel</option>
<option value="56">dsf</option>
<option value="59">tesing</option>
<option value="60">fat</option>
<option value="61">Regular</option>
<option value="62">sandra</option>
<option value="63">jjdj</option>
<option value="64">hihihi</option>
<option value="65">girls and boys</option>
<option value="66">GHSHostel</option>

<option value="67">girlsjp</option>
</select>                        <div class="school_val_error" id="Hostelroom_hosteltypeid_em_" style="display:none"></div>                    </div>
                    <div class="form-group col-sm-4 validating">
                        <label for="reg_input" class="req">Hostel Name</label>
                        <select class="form-control" name="Hostelroom[hosteldetailsid]" id="Hostelroom_hosteldetailsid"><option value="">Select</option><option value="9">just</option><option value="12">TEST</option><option value="15">GENTELMAN</option><option value="21">sss</option></select>                        <div class="school_val_error" id="Hostelroom_hosteldetailsid_em_" style="display:none"></div>                    </div>  
                    <div class="form-group col-sm-2">
                        <label for="reg_input">&nbsp;</label>
                        <div class="form_sep">
                            <p><a href="javascript:save();" class="btn btn-info" align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p> 
                        </div>
                    </div>
                    <div class="form-group col-sm-2" align="right">
                        <label for="reg_input">&nbsp;</label>
                        <div class="form_sep">
                            <input onclick="printDiv('print')" value="Print Report" class="btn btn-danger" type="button">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12" id="details" style="">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Available Room List</h4>
                </div>
                <div class="panel-body">
                    <div id="print">
                        <div class="table-responsive">
                            <table class="table responsive table-bordered table-striped" id="roomdetails">
                                <thead>
                                    <tr>
                                        <th width="5%">Sl. No</th>
                                        <th width="12.5%">Room No.</th>
                                        <th width="12.5%">Total Beds</th>
                                        <th width="12.5%">Available Beds</th>
                                        <th width="12.5%">Occupied Beds</th>
                                        <th width="12.5%">Rent</th>
                                    </tr>
                                </thead>
                                <tbody><tr><td>1</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>2</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>3</td><td>2</td><td>3</td><td>2</td><td>1</td><td>100</td></tr><tr><td>4</td><td>2</td><td>3</td><td>1</td><td>2</td><td>100</td></tr><tr><td>5</td><td>2</td><td>3</td><td>2</td><td>1</td><td>100</td></tr><tr><td>6</td><td>2</td><td>3</td><td>1</td><td>2</td><td>100</td></tr><tr><td>7</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>8</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>9</td><td>2</td><td>3</td><td>2</td><td>1</td><td>100</td></tr><tr><td>10</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>11</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>12</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>13</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>14</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>15</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>16</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>17</td><td>2</td><td>3</td><td>2</td><td>1</td><td>100</td></tr><tr><td>18</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>19</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>20</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>21</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>22</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>23</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>24</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>25</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>26</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>27</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>28</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>29</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>30</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>31</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>32</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>33</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>34</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>35</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>36</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>37</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>38</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>39</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>40</td><td>2</td><td>3</td><td>3</td><td>0</td><td>100</td></tr><tr><td>41</td><td>2</td><td>5</td><td>5</td><td>0</td><td>5000</td></tr><tr><td>42</td><td>2</td><td>5</td><td>5</td><td>0</td><td>5000</td></tr><tr><td>43</td><td>2</td><td>5</td><td>5</td><td>0</td><td>5000</td></tr><tr><td>44</td><td>2</td><td>5</td><td>5</td><td>0</td><td>5000</td></tr><tr><td>45</td><td>2</td><td>5</td><td>5</td><td>0</td><td>5000</td></tr><tr><td>46</td><td>101</td><td>2</td><td>1</td><td>1</td><td>2000</td></tr><tr><td>47</td><td>101</td><td>2</td><td>2</td><td>0</td><td>2000</td></tr><tr><td>48</td><td>101</td><td>2</td><td>2</td><td>0</td><td>2000</td></tr><tr><td>49</td><td>201</td><td>3</td><td>3</td><td>0</td><td>4000</td></tr></tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </form></div>
<script>
    function save() {
        var hosteltypeid = $('#Hostelroom_hosteltypeid option:selected').val();
        var hosteldetailsid = $('#Hostelroom_hosteldetailsid option:selected').val();
        $('#roomdetails tbody').empty();
        $.ajax({
            type: "POST",
            url: "hostelroomsreport",
            data: {hosteltypeid: hosteltypeid, hosteldetailsid: hosteldetailsid},
            dataType: "html",
            success: function (data) {
                $('#roomdetails tbody').append(data);
                  $('#details').show("slow");
            }
        });
    }
//    function printDiv(divName) {
//        var divToPrint = document.getElementById(divName);
//           var popupWin = window.open('', '', 'width=300,height=300');
//           popupWin.document.open();
//           popupWin.document.write('&lt;html&gt;&lt;body onload="window.print()"&gt;' + divToPrint.innerHTML + '&lt;/html&gt;');
//            popupWin.document.close();
//    }
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