<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_vehicle extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->library('pagination');
	 $this->load->model('add_vehicle_model');
	 $this->load->library('form_validation');
	// $this->load->model("messagemodel");
	 $this->load->library('pagination_lib');
	 //$this->load->language('message');
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
		
		try{
		$page = $this->uri->segment(4);
		if($page == ''){
		$page = 1;
		}else{
		$page = $this->uri->segment(4);
		}
		
		$pagingconfig = $this->pagination_lib->initPagination('add_vehicle/create/',$this->add_vehicle_model->get_total_rows());
		$data['pagination_helper'] = $this->pagination;
		$data['records_bylimit'] = $this->add_vehicle_model->fetch_records_bylimit($pagingconfig['per_page'],$page);
		}catch(Exception $err){
		load_message("error",$err->getMessage());
		return show_error($err->getMessage());
		}
		
		
		//$data['vehicles'] = $this->add_vehicle_model->get_data();
		if($id != '')
		$data['single_vehicle'] = $this->add_vehicle_model->single_record($id);
		$this->load->view('backend/main',$data);
	}

	public function create()
	{
		if(empty($_POST)){
		$this->show('add_vehicle');
		}
		else{
			if(isset($_POST['submit'])){
			$data = array(
						'vehicle_no' => $this->input->post('vehicle_no'),
						'no_of_seats' => $this->input->post('no_of_seats'),
						'maximum_allowed' => $this->input->post('maximum_allowed'),
						'vehicle_type' => $this->input->post('vehicle_type'),
						'contact_person' => $this->input->post('contact_person'),
						'insurance_renewal_date' => $this->input->post('insurance_renewal_date'),
						);
			}else{
			echo "Empty Post";
			}
			$this->add_vehicle_model->insert_data($data);
			redirect('http://localhost/college/index.php/backend/add_vehicle/create','refresh');
		}
	}
	
	public function update($id){
		if(empty($_POST)){
		$this->show('add_vehicle',$id);
		}
		else{
			$id = $this->uri->segment(4);
			$data = array(
						'vehicle_no' => $this->input->post('vehicle_no'),
						'no_of_seats' => $this->input->post('no_of_seats'),
						'maximum_allowed' => $this->input->post('maximum_allowed'),
						'contact_person' => $this->input->post('contact_person'),
						);
			$this->add_vehicle_model->update_vehicle_record($id, $data);
			redirect('http://localhost/college/index.php/backend/add_vehicle/create','refresh');
			}
	
	}
	
	public function delete($id){
	$this->input->post('id');
	$this->add_vehicle_model->delete($id);
	redirect('http://localhost/college/index.php/backend/add_vehicle/create','refresh');
	}
	
		
	public function pagination(){
	$config = array();
	$config['base_url'] = 'http://localhost/college/index.php/backend/add_vehicle/create/';
	$total_rows = $this->add_vehicle_model->get_total_rows();
	$config['total_rows'] = $total_rows;
	$config['per_page'] = 2;
	$config['use_page_numbers'] = 'TRUE'; 
	$config['num_links'] = $total_rows;
	$config['cur_tag_open'] = '<a class="current">';
	$config['cur_tag_close'] = '</a>';
	$config['next_link'] = 'Next Link';
	$config['prev_link'] = 'Prev Link';
	
	$this->pagination->initialize($config);
	if($this->uri->segment(4)){
	$page = $this->uri->segment(4);
	}
	else{
	$page = 1;
	}
	
	
	$data['total_record_per_page'] = $this->add_vehicle_model->fetch_records_bylimit($config['per_page'],$page);
	//print_r($data['total_record_per_page']);
	//exit;
	$string_link = $this->pagination->create_links();
	print_r($string_link);
	exit;
	$data['links'] = explode('&nbsp;',$string_link);
	//print_r($data['link']);
	//exit;
	}
	
	
}
