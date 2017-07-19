<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hostel_details extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('hostel_details_model');
	 $this->load->library('form_validation');
	}
	
	public function show($page = 'home', $id='')
	{
		$data['title'] = 'hostel_details';
		$data['page'] = $page;
		$data['hostel_types'] = $this->hostel_details_model->get_hostel_type();
		$data['hostel_details'] = $this->hostel_details_model->get_data();
		if($id != '')
		$data['single_records'] = $this->hostel_details_model->single_record($id); 
		$this->load->view('backend/main',$data);
	}

	public function create()
	{
		if(empty($_POST)){
		$this->show('hostel_details');
		}
		else{
		
			if(isset($_POST['submit'])){
			$data = array(
						'hostel_type' => $this->input->post('hostel_type'),
						);			
			$this->hostel_details_model->insert_hoste_type($data);
			redirect('http://localhost/college/index.php/backend/hostel_details/create','refresh');		
			}
			else if(isset($_POST['hostel_submit'])){		
				$data = array(
								'hostel_type' => $this->input->post('hosteltype'),
								'hostel_name' => $this->input->post('hostel_name'),
								'hostel_address' => $this->input->post('hostel_address'),
								'hostel_phone_number' => $this->input->post('hostel_phone_number'),
								'warden_name' => $this->input->post('warden_name'),
								'warden_address' => $this->input->post('warden_address'),
								'warden_phone_number' => $this->input->post('warden_phone_number'),
								);
				$this->hostel_details_model->insert_data($data);
				redirect('http://localhost/college/index.php/backend/hostel_details/create','refresh');	
				}
				else{
				echo 'Empty Post';
				}
			}
	}
	
	public function update($id){
		if(empty($_POST)){
		$id = $this->uri->segment(4);
		$this->show('hostel_details',$id);
		}
		else{
		$id = $this->uri->segment(4);
		$data = array(
					  'hostel_type' => $this->input->post('hostel_type'),
					  'hostel_name' => $this->input->post('hostel_name'),
					  'hostel_address' => $this->input->post('hostel_address'),
					  'hostel_phone_number' => $this->input->post('hostel_phone_number'),
					  'warden_name' => $this->input->post('warden_name'),
					  'warden_phone_number' => $this->input->post('warden_phone_number'),
					  );
		$this->hostel_details_model->update_hostel_record($id, $data);
		redirect('http://localhost/college/index.php/backend/hostel_details/create','refresh');
		}
	}	
	
}
