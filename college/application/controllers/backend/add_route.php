<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_route extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('add_route_model');
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
		$data['vehicles'] = $this->add_route_model->get_vehicle_data();
		$data['routes'] = $this->add_route_model->get_data();
		if($id !='')
		$data['single_routes'] = $this->add_route_model->single_record($id);
		$this->load->view('backend/main',$data);
	}

	public function create()
	{
		if(empty($_POST)){
		$this->show('add_route');
		}
		else{
			if(isset($_POST['submit'])){
			$data = array(
						'vehicle_no' => $this->input->post('vehicle_no'),
						'route_code' => $this->input->post('route_code'),
						'route_start_place' => $this->input->post('route_startname'),
						'route_stop_place' => $this->input->post('route_stopname'),
						);
			}else{
			echo "Empty Post";
			}
			$this->add_route_model->insert_data($data);
			redirect('http://localhost/college/index.php/backend/add_route/create','refresh');
		}
	}
	
	public function update($id){
		if(empty($_POST)){
		$this->show('add_route',$id);
		}
		else{
			$id = $this->uri->segment(4);
			$data = array(
						'vehicle_no' => $this->input->post('vehicle_no'),
						'route_code' => $this->input->post('route_code'),
						'route_start_place' => $this->input->post('route_startname'),
						'route_stop_place' => $this->input->post('route_stopname'),
						);
			$this->add_route_model->update_route_record($id,$data);
			redirect('http://localhost/college/index.php/backend/add_route/create','refresh');		
		}
	
	}
		
	
}
