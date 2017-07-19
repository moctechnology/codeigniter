<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('add_course');
	 $this->load->library('form_validation');
	}
	
	public function index($page='home', $id= '')
	{
		$data['title'] = 'Add Course';
		$data['page'] = $page;
		//$data['username'] = $this->session->userdata('username');
		$this->load->view('backend/main',$data);
	}
	
	public function show($page = 'home', $id='')
	{
		$data['title'] = 'Add Course';
		$data['page'] = $page;
		$data['results'] = $this->add_course->get_data();
		if($id != '')
		$data['single_rows'] = $this->add_course->single_record($id);
		//$data['username'] = $this->session->userdata('username');
		$this->load->view('backend/main',$data);
	}

	public function create()
	{
		if(empty($_POST)){
		$this->show('course');
		}
		if(isset($_POST['course_submit'])){
			$data = array(
						'course_name' => $this->input->post('course_name'),
						'course_description' => $this->input->post('course_description'),
						'course_code' => $this->input->post('course_course_code'),
						'course_min_attendanece_percentage' => $this->input->post('course_minimumattendance'),
						'course_attendance_type' => $this->input->post('course_attendancetype'),
						'course_total_working_days' => $this->input->post('course_totalworkingdays'),
						'course_syllabous_name' => $this->input->post('course_syllabus_name')
						);
			$this->add_course->insert_data($data);
			redirect('http://localhost/college/index.php/backend/course/create','refresh');
			}
			else
			{
			echo "Post is Empty";
			}
	}	
	
	public function update($id){
	
		if(empty($_POST)){
		$id = $this->uri->segment(4);
		$this->show('course',$id);
		}
		else{
		$id = $this->uri->segment(4);
		$data = array(
						'course_name' => $this->input->post('course_name'),
						'course_description' => $this->input->post('course_description'),
						'course_code' => $this->input->post('course_course_code'),
						'course_min_attendanece_percentage' => $this->input->post('course_minimumattendance'),
						'course_attendance_type' => $this->input->post('course_attendancetype'),
						'course_total_working_days' => $this->input->post('course_totalworkingdays'),
						'course_syllabous_name' => $this->input->post('course_syllabus_name')
					);
		$this->add_course->update_course_record($id,$data);
		redirect('http://localhost/college/index.php/backend/course/create','refresh');
		}
	
	}
	
	public function delete($id){
	$this->add_course->delete($id);
	redirect('http://localhost/college/index.php/backend/course/create','refresh');
	}
	
}
