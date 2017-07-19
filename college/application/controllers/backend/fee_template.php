<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fee_template extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('student_model');
	 $this->load->library('form_validation');
	}
	
	public function index($page='home', $id= '')
	{
		$data['title'] = 'home';
		$data['page'] = $page;
		//$data['username'] = $this->session->userdata('username');
		$this->load->view('backend/main',$data);
	}
	
	public function show($page = 'home', $id='')
	{
		$data['title'] = 'home';
		$data['page'] = $page;
		//$data['username'] = $this->session->userdata('username');
		$this->load->view('backend/main',$data);
	}

	public function create()
	{
		if(empty($_POST))
		{
		$this->show('fee_template');
		}
		else{
			if(isset($_POST['submit'])){
			$data = array(
			'cate_name' => $this->input->post('fee_category'),
			'' => $this->input->post('template_name'),
			'' => $this->input->post('institute_name'),
			'' => $this->input->post('institute_address'),
			);
			}
		}
	}	
	
}
