
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
	  <!-- left col -->
        <?php $this->load->view('backend/left_menu.php'); ?>

        <!-- top navigation -->
        <?php $this->load->view('backend/top_menu.php'); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <?php $this->load->view('backend/page_content.php'); ?>
        <!-- /page content -->

        <!-- footer content -->
        <?php $this->load->view('backend/footer.php') ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
<?php $this->load->view('backend/footer_script.php'); ?>