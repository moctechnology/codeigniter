<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_destination extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('add_destination_model');
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
		$data['routes'] = $this->add_destination_model->get_route_data();
		$data['destinations'] = $this->add_destination_model->get_data();
		if($id != '')
		$data['single_destinations'] = $this->add_destination_model->single_record($id);
		$this->load->view('backend/main',$data);
	}

	public function create()
	{
		if(empty($_POST)){
		$this->show('add_destination');
		}
		else{
			if(isset($_POST['submit'])){
			$data = array(
						'route_code' => $this->input->post('routecode'),
						'pic_drop' => $this->input->post('route_stopposition'),
						'stop_time' => $this->input->post('route_stoptime'),
						'amount' => $this->input->post('route_rate'),
						'fee_type' => $this->input->post('route_feestype'),
						);
			}else{
			echo "Empty Post";
			}
			$this->add_destination_model->insert_data($data);
			redirect('http://localhost/college/index.php/backend/add_destination/create','refresh');
		}
	}
	
	public function update($id){
		if(empty($_POST)){
		$id = $this->uri->segment(4);
		$this->show('add_destination',$id);
		}
		else{
		$id = $this->uri->segment(4);
		$data = array(
					    'route_code' => $this->input->post('routecode'),
						'pic_drop' => $this->input->post('route_stopposition'),
						'stop_time' => $this->input->post('route_stoptime'),
						'amount' => $this->input->post('route_rate'),
						'fee_type' => $this->input->post('route_feestype'),
					  );
		$this->add_destination_model->update_destination_record($id,$data);
		redirect('http://localhost/college/index.php/backend/add_destination/create','refresh');
		}
	
	}
	
	public function delete($id){
	$id = $this->uri->segment(4);
	$this->add_destination_model->delete($id);
	redirect('http://localhost/college/index.php/backend/add_destination/create','refresh');
	}
		
	
}
