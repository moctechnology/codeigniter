<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_books extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('add_books_model');
	 $this->load->model('book_cat_model');
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
		$data['bookcats'] = $this->book_cat_model->get_data();
		$data['results'] = $this->add_books_model->get_data();
		$this->load->view('backend/main',$data);
	}

	public function create()
	{
		if(empty($_POST)){
		$this->show('add_books');
		}
		else{
			if(isset($_POST['submit'])){
			$data = array(
						'book_isbn_no' => $this->input->post('book_isbn_no'),
						'book_no' => $this->input->post('book_no'),
						'title' => $this->input->post('title'),
						'author' => $this->input->post('author'),
						'edition' => $this->input->post('edition'),
						'publisher' => $this->input->post('publisher'),
						'no_of_copies' => $this->input->post('no_of_copies'),
						'shelf_no' => $this->input->post('shelf_no'),
						'book_status' => $this->input->post('book_status'),
						'book_cost' => $this->input->post('book_cost'),
						'language' => $this->input->post('language'),
						'book_condition' => $this->input->post('book_condition'),
						);
			}else{
			echo "Empty Post";
			}
			$this->add_books_model->insert_data($data);
			redirect('http://localhost/college/index.php/backend/add_books/create','refresh');
		}
	}
	
	public function update($id){
	
	
	}
		
	
}
