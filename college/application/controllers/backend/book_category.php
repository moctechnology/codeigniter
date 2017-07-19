<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book_category extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('book_cat_model');
	 $this->load->library('form_validation');
	}
	
	public function index($page='home', $id= '')
	{
		$data['title'] = 'home';
		$data['page'] = $page;
		//$data['results'] = $this->book_model->get_data();
		$this->load->view('backend/main',$data);
	}
	
	public function show($page = 'home', $id='')
	{
		$data['title'] = 'home';
		$data['page'] = $page;
		$data['results'] = $this->book_cat_model->get_data();
		if($id != null)
		$data['single_record'] = $this->book_cat_model->single_record($id);
		$this->load->view('backend/main',$data);
	}

	public function create()
	{
		if(empty($_POST)){
		$this->show('book_category');
		}
		else{
			if(isset($_POST['submit'])){
			$data = array(
					'id' => $this->input->post('id'),
					'book_cat' => $this->input->post('book_cat'),
					'section_code' => $this->input->post('section_code'),
					);
			}
			else{
			echo "Empty Post.";
			}
			$this->book_cat_model->insert_data($data);
			$this->show('book_category');
		}
	}	
	
	public function update($id){
		if(empty($_POST)){
		$this->show('book_category',$id);
		}
		else{
		$id = $this->input->post('id');
		$data = array(
		'book_cat' => $this->input->post('book_cat'),
		'section_code'=> $this->input->post('section_code'),
		);
		$this->book_cat_model->update_book_record($id,$data);
		redirect('http://localhost/college/index.php/backend/book_category/create','refresh');
		}
	}
	
	public function delete($id){
	$this->book_cat_model->delete($id);
	redirect('http://localhost/college/index.php/backend/book_category/create','refresh');
	}
	
	
	
}
