<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory_category extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('student_model');
	 $this->load->library('form_validation');
	}
	
	public function show($page = 'home', $id='')
	{
		$data['title'] = 'inventory_category';
		$data['page'] = $page;
		//$data['username'] = $this->session->userdata('username');
		$this->load->view('backend/main',$data);
	}

	public function create()
	{
	$this->show('inventory_category');
	}	
	
}
