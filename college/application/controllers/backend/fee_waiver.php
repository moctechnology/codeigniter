<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fee_waiver extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('fee_model');
	 $this->load->library('form_validation');
	 $this->load->helper('fee_helper');
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
		$data['results'] = $this->fee_model->get_data();
		$data['parent_category'] = $this->fee_model->get_fee_category_data();
		$data['child_category'] = $this->fee_model->get_child_fee_category();
		$this->load->view('backend/main',$data);
	}
	
	function get_subcat_select_box(){
	
	$id = $this->input->post('id',TRUE);
	
	
	$data['fee_sub_cat'] = $this->fee_model->get_fee_subcategories($id);
	echo  '<option value="">Please Select</option>';
	foreach($data as $row){
	foreach($row as $roo){
	echo  '<option value="'.$roo->id.'">'.$roo->cat_name.'</option>';
	}
	}
	
	
	}

	public function create()
	{
		if(empty($_POST)){
		$this->show('fee_waiver');
		}
		else{
			if(isset($_POST['submit'])){			
			$data = array(
			'cat_name'=> $this->input->post('fee_sub_cat'),
			'parent_id'=> $this->input->post('cat_name'),
			'exmamption_deduction'=> $this->input->post('exmamption_deduction'),
			'category_gender'=> $this->input->post('category_gender'),
			'category_name'=> $this->input->post('category_name'),
			'genders_name'=> $this->input->post('genders_name'),
			'deduction_amount'=> $this->input->post('deduction_amount'),
			);
			$result = $this->fee_model->insert_data($data);
			$this->show('fee_waiver');
			}else{
			echo "Post Empty";
			}
		}
	}	
	
}
