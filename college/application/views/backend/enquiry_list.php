<div class="content-wrapper">
                    <div class="content">

		<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-home2 position-left"></i>Home</a></li>
            <!--<li><a href="#">Student</a></li>-->
            <li class="active">Enquiry List</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
    <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div><br>
<div class="content">
    <div class="row">
        <form id="onlineenquiry-grid" action="/index.php/core/onlineenquiry/admin" method="post">        </form>    </div><br>
    <div class="col-sm-12">
                <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="active"><a href="#tbb_a" data-toggle="tab" aria-expanded="true">Enquiry List</a></li>
            <li class=""><a href="#tbb_b" data-toggle="tab" aria-expanded="false">Approved List</a></li>
            <li class=""><a href="#tbb_c" data-toggle="tab" aria-expanded="false">Rejected List</a></li>
        </ul><br>
        <div class="tab-content">
            <div class="tab-pane active" id="tbb_a">            
                <div class="row">
                    <div class="col-sm-3"></div> 
                    <div class="col-sm-3"></div> 
                    <div class="col-sm-3"></div> 
                    <div class="col-sm-3"> 
                        <input type="text" id="search1" class="form-control" placeholder="Search..."><br>
                    </div>
                    <div class="col-sm-12">
                        <div class="grid-view table-responsive" id="student-grid1">
<table class="table toggle-square table-bordered table-striped">
<thead>
<tr>
<th id="student-grid1_c0">Sl.No.</th><th id="student-grid1_c1">Reference No.</th><th id="student-grid1_c2">Student Name</th><th id="student-grid1_c3">Enquiry Date</th><th id="student-grid1_c4">Course</th><th id="student-grid1_c5">Gender</th><th id="student-grid1_c6">Student DOB</th><th class="button-column" id="student-grid1_c7">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td>101</td><td width="25%">x x x</td><td>2017-01-07</td><td width="15%">Course1</td><td width="15%">Male</td><td>2010-01-06</td><td width="10%"> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/core/onlineenquiry/view/id/2"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/core/onlineenquiry/admin"><span>2</span></div>
</div>                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tbb_b">    
                <div class="row">
                    <div class="col-sm-3"></div> 
                    <div class="col-sm-3"></div> 
                    <div class="col-sm-3"></div> 
                    <div class="col-sm-3"> 
                        <input type="text" id="search2" class="form-control" placeholder="Search..."><br>
                    </div>
                    <div class="col-sm-12">

                        <div class="grid-view table-responsive" id="student-grid2">
<table class="table toggle-square table-bordered table-striped">
<thead>
<tr>
<th id="student-grid2_c0">Sl.No.</th><th id="student-grid2_c1">Reference No.</th><th id="student-grid2_c2">Student Name</th><th id="student-grid2_c3">Enquiry Date</th><th id="student-grid2_c4">Course</th><th id="student-grid2_c5">Gender</th><th id="student-grid2_c6">Student DOB</th><th class="button-column" id="student-grid2_c7">Manage</th></tr>
</thead>
<tbody>
<tr class="odd">
<td width="5%">1</td><td>&nbsp;</td><td width="20%">amit  sahu</td><td>2017-01-04</td><td width="15%">STD 1</td><td width="15%">Male</td><td>1992-02-05</td><td width="10%"> <a class="glyphicon glyphicon-eye-open" title="" href="/index.php/core/onlineenquiry/view/id/1"><img src="" alt=""></a></td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/core/onlineenquiry/admin"><span>1</span></div>
</div>                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tbb_c">
                <div class="row">
                    <div class="col-sm-3"></div> 
                    <div class="col-sm-3"></div> 
                    <div class="col-sm-3"></div> 
                    <div class="col-sm-3"> 
                        <input type="text" id="search3" class="form-control" placeholder="Search..."><br>
                    </div>
                    <div class="col-sm-12">

                        <div class="grid-view table-responsive" id="student-grid3">
<table class="table toggle-square table-bordered table-striped">
<thead>
<tr>
<th id="student-grid3_c0">Sl.No.</th><th id="student-grid3_c1">Reference No.</th><th id="student-grid3_c2">Student Name</th><th id="student-grid3_c3">Enquiry Date</th><th id="student-grid3_c4">Course</th><th id="student-grid3_c5">Gender</th><th id="student-grid3_c6">Student DOB</th><th class="button-column" id="student-grid3_c7">Manage</th></tr>
</thead>
<tbody>
<tr><td colspan="8" class="empty"><span class="empty">No results found.</span></td></tr>
</tbody>
</table>
<div class="keys" style="display:none" title="/index.php/core/onlineenquiry/admin"></div>
</div>                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<script>

    $("#search1").keyup(function () {
        $('#student-grid1').yiiGridView('update', {
            data: {search1: $('#search1').val()}
        });
        return false;
    });
    $("#search2").keyup(function () {

        $('#student-grid2').yiiGridView('update', {
            data: {search2: $('#search2').val()}
        });
        return false;

    });
    $("#search3").keyup(function () {

        $('#student-grid3').yiiGridView('update', {
            data: {search3: $('#search3').val()}
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
                               © 2017. Webschool by GESCIS Technologies Pvt Ltd. V3.2
                            </div>
                        </div>
                    </div>
                </div>