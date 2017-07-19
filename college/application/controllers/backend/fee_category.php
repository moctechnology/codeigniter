<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fee_category extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('fee_model');
	 $this->load->library('form_validation');
	}
	
	public function index()
	{	
		$data = array();
		$data['results'] = $this->fee_model->get_fee_category_data();
		$this->show('fee_category');
	}
	
	public function show($page = 'home', $id='')
	{
		
		$data['title'] = 'home';
		$data['page'] = $page;
		//$data['username'] = $this->session->userdata('username');
		$data['results'] = $this->fee_model->get_fee_category_data();
		if($id != null)
		$data['single_results'] = $this->fee_model->single_record($id);
		$this->load->view('backend/main',$data);
	}

	public function create()
	{
		if(empty($_POST)){
		$this->show('fee_category');
		}
		else{
			if(isset($_POST['submit'])){
			$data = array(
			'cat_name' => $this->input->post('fee_cat'),
			'parent_id' => $this->input->post('fee_cat'),
			'recipt_prefix' => $this->input->post('recipt_prefix'),
			'description' => $this->input->post('description'),
			);
			$result = $this->fee_model->insert_data($data);
			$this->show('fee_category');
			}
			else
			{
			echo "Empty Post.";
			}
		}
	
	}	
	
	
	public function update($id){
	if(empty($_POST)){
	$this->show('fee_category',$id);
	}
	else
	{
	$id = $this->input->post('id');
	$data = array(
	'cat_name' => $this->input->post('fee_cat'),
	'recipt_prefix' => $this->input->post('recipt_prefix'),
	'description' => $this->input->post('description'),
	);
	$this->fee_model->update_fee_record($id,$data);
	//$this->show('fee_category',$id);
	redirect('http://localhost/college/index.php/backend/fee_category/create','refresh');
	}
	
	}
	
	public function delete($id){
	$this->input->post('id');
	$this->fee_model->delete($id);
	redirect('http://localhost/college/index.php/backend/fee_category/create','refresh');
	}
	
	
	
}
