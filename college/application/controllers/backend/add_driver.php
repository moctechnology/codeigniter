<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_driver extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('add_driver_model');
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
		$data['vehicles'] = $this->add_driver_model->get_vehicle_data();
		$data['drivers'] = $this->add_driver_model->get_data();
		if($id != '')
		$data['driverinfo'] = $this->add_driver_model->single_record($id);
		$this->load->view('backend/main',$data);
	}

	public function create()
	{
		if(empty($_POST)){
		$this->show('add_driver');
		}
		else{
			if(isset($_POST['submit'])){
			$data = array(
						'vehicle_no' => $this->input->post('vehicle_no'),
						'name' => $this->input->post('name'),
						'present_address' => $this->input->post('present_address'),
						'permanent_address' => $this->input->post('permanent_address'),
						'date_of_birth' => $this->input->post('date_of_birth'),
						'phone' => $this->input->post('phone'),
						'license_number' => $this->input->post('license_number'),
						);
			}else{
			echo "Empty Post";
			}
			$this->add_driver_model->insert_data($data);
			redirect('http://localhost/college/index.php/backend/add_driver/create','refresh');
		}
	}
	
	public function update(){
		if(empty($_POST)){
		$id = $this->uri->segment(4);
		$this->show('add_driver',$id);
		}
		else{
		$id = $this->uri->segment(4);
		$data = array(	
						'vehicle_no' => $this->input->post('vehicle_no'),
						'name' => $this->input->post('name'),
						'present_address' => $this->input->post('present_address'),
						'permanent_address' => $this->input->post('permanent_address'),
						'date_of_birth' => $this->input->post('date_of_birth'),
						'phone' => $this->input->post('phone'),
						'license_number' => $this->input->post('license_number'),
					);
					
		$this->add_driver_model->update_driver_record($id, $data);
		redirect('http://localhost/college/index.php/backend/add_driver/create','refresh');
		}
	
	}
	
	public function delete(){
	$id = $this->uri->segment(4);
	$this->add_driver_model->delete($id);
	redirect('http://localhost/college/index.php/backend/add_driver/create','refresh');
	}
		
	
}
