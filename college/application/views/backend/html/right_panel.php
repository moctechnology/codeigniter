<div class="rightpanel">
    		<?php $this->load->view("backend/header.php"); ?>
        <!--headerpanel-->
	        <?php $this->load->view("backend/widgets/breadcrum.php"); ?>
        <!--breadcrumbs-->
      <div class="pagetitle">
        	<h1>Dashboard</h1> <span>This is a sample description for dashboard page...</span>
        </div><!--pagetitle-->
       
					<?php	$this->load->view('backend/'.$page);?>
        <!--maincontent-->
        
    </div>