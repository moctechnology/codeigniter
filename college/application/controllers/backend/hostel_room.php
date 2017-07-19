<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hostel_room extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('hostel_room_model');
	 $this->load->library('form_validation');
	}
	
	public function show($page = 'home', $id='')
	{
		$data['title'] = 'hostel_room';
		$data['page'] = $page;
		$data['hostel_type'] = $this->hostel_room_model->hostel_type();
		$data['hostel_details'] = $this->hostel_room_model->hostel_details();
		$this->load->view('backend/main',$data);
	}

	public function create()
	{
		if(empty($_POST)){
		$this->show('hostel_room');
		}
		else{
			if(isset($_POST['submit'])){
			$data = array(
						  'hostel_type' => $this->input->post('hostel_type'),
						  'hostel_name' => $this->input->post('hostel_name'),
						  'floor_name' => $this->input->post('floor_name'),
						  'room_no' => $this->input->post('room_no'),
						  'no_of_beds' => $this->input->post('no_of_beds'),
						  'amount' => $this->input->post('amount'),
						  'fee_type' => $this->input->post('fee_type'),
						  );
			$this->hostel_room_model->insert_data($data);
			redirect('http://localhost/college/index.php/backend/hostel_room/create','refresh');
			}
			else{
			echo "Empty Post";
			}
		}
	}	
	
}
