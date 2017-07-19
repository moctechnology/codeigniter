<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {
	
	
	function __construct()
	{
	 parent::__construct();
     $this->load->helper('url');
	 $this->load->library('session');
	 $this->load->model('student_model');
	 $this->load->library('form_validation');
	}
	
	public function index($page='home', $id= '')
	{
		$data['title'] = 'home';
		$data['page'] = $page;
		$data['results']=$this->student_model->get_data();
		$this->load->view('backend/main',$data);
	}
	
	public function show($page = 'home', $id='')
	{
		$data['title'] = 'home';
		$data['page'] = $page;
		$data['courses'] = $this->student_model->get_courses();
		$data['results']= $this->student_model->get_data();
		if($id != null)
		$data['single_result'] = $this->student_model->single_record($id);
		if($id != '')
		$data['single_courses'] = $this->student_model->single_courses($id);
		$this->load->view('backend/main',$data);
		
	}
	
	public function create()
	{		
	
			if(empty($_POST)){
			$this->show('student_category');
			}
			else{
			if(isset($_POST['submit'])){
			$cat['name'] = $this->input->post('category');
			$result = $this->student_model->insert_student_category($cat);
			$this->show('student_category');
			
			}
			else{
			echo "empty post";
			}
		}
	}
	
	public function update($id){
	if(empty($_POST)){
	$this->show('student_category',$id);
	}
		else
		{
		$id = $this->input->post('id');
		$data = array(
		'name' => $this->input->post('category'),
		);
		$this->student_model->update_record($id,$data);
		redirect('http://localhost/college/index.php/backend/student/create','refresh');
		}
	
	}
	
	public function delete($id){
	$this->input->post('id');
	$this->student_model->delete($id);
	redirect('http://localhost/college/index.php/backend/student/create','refresh');
	}
	
	
	public function get_session() {
		
		$this->load->model('student_model');
		//$data['result'] = $this->student_model->get_data();
		$data['username'] = $this->session->userdata('username');
		return $data['username'];
	}
	
	
	public function student_admission(){
			
		
		if(empty($_POST)){
		$this->show('student_admission');
		}else{
		
		
		$data = array(
		'reg_number'=>$this->input->post('reg_number'),
		'date_from'=>$this->input->post('date_from'),
		'roll_no'=>$this->input->post('roll_no'),
		);
		
		$this->session->set_userdata($data);
		
		redirect('http://localhost/college/index.php/backend/student/admission_step2/', 'refresh');
		}
}

public function admission_step2(){
		
		
		if(empty($_POST))
		{
		$this->show('step2');
		}else{

		$step_data_2 = array(
		'first_name'=>$this->input->post('first_name'),
		'middle_name'=>$this->input->post('middle_name'),
		'last_name'=>$this->input->post('last_name'),
		'date_from1'=>$this->input->post('date_from1'),
		'birth_place'=>$this->input->post('birth_place'),
		'mother_tongue'=>$this->input->post('mother_tongue'),
		'religion'=>$this->input->post('religion'),
		);	
			
		
		$this->session->set_userdata($step_data_2);
		///print_r($step_data_2);
		//exit;
		
		
		
		//$this->student_model->admission_step_2($step_data_2);
		redirect('http://localhost/college/index.php/backend/student/admission_step3/', 'refresh');
		
		}
}
public function admission_step3(){
		if(empty($_POST))
		{
		$this->show('step3');
		}else{
		$data_step3 = array(
		'p_address'=>$this->input->post('p_address'),
		'Presnt_address'=>$this->input->post('Presnt_address'),
		'city'=>$this->input->post('city'),
		'pin'=>$this->input->post('pin'),
		'phone'=>$this->input->post('phone'),
		'mobile'=>$this->input->post('mobile'),
		'email'=>$this->input->post('email'),
		);
		
		$this->session->set_userdata($data_step3);
		redirect('http://localhost/college/index.php/backend/student/admission_step4/', 'refresh');
		}
		
		}
public function admission_step4(){
		
		if(empty($_POST))
		{
		$this->show('step4');
		}else{
		
		$data_step4 = array(
		'father_name'=>$this->input->post('father_name'),
		'mobile1'=>$this->input->post('mobile1'),
		);
		
		
		$this->session->set_userdata($data_step4);
		redirect('http://localhost/college/index.php/backend/student/admission_step5/', 'refresh');
		}
		
		}

public function admission_step5(){
		
		if(empty($_POST))
		{
		$this->show('step5');
		
		}else{
		$data_step5 = array(
		'mother_name'=>$this->input->post('mother_name'),
		'mobile2'=>$this->input->post('mobile2'),
		);
		
		$this->session->set_userdata($data_step5);
		redirect('http://localhost/college/index.php/backend/student/admission_step6/', 'refresh');
		}
	
		
		}
		
public function admission_step6(){	
		if(empty($_POST))
		{
		$this->show('step6');
		}else{
		$dat_step6 = array(
		'check'=>$this->input->post('check'),
		'g_name'=>$this->input->post('g_name'),
		'relation'=>$this->input->post('relation'),
		'education'=>$this->input->post('education'),
		'occupation'=>$this->input->post('occupation'),
		'icome'=>$this->input->post('icome'),
		'check1'=>$this->input->post('check1'),
		'address'=>$this->input->post('address'),
		'city2'=>$this->input->post('city2'),
		);
		$this->session->set_userdata($dat_step6);
		redirect('http://localhost/college/index.php/backend/student/admission_step7/', 'refresh');
		}
		}	
public function admission_step7(){
		if(empty($_POST))
		{
		$this->show('step7');
		}else{
		$data_step7 = array(
		'phone1'=>$this->input->post('phone1'),
		'mobile3'=>$this->input->post('mobile3'),
		'email2'=>$this->input->post('email2'),
		);
		$this->session->set_userdata($data_step7);
		redirect('http://localhost/college/index.php/backend/student/admission_step8/', 'refresh');
		}
		}
public function admission_step8(){
		if(empty($_POST))
		{
		$this->show('step8');
		}else{
		$data_step8 = array(
		'school_name'=>$this->input->post('school_name'),
		's_address'=>$this->input->post('s_address'),
		'qualification'=>$this->input->post('qualification'),
		'transport'=>$this->input->post('transport'),
		'hostel'=>$this->input->post('hostel'),
		);
		$this->session->set_userdata($data_step8);
		
		$data['reg_number'] = $this->session->userdata('reg_number');
		$data['date_from'] = $this->session->userdata('date_from');
		$data['roll_no'] = $this->session->userdata('roll_no');
		$data['first_name'] = $this->session->userdata('first_name');
		$data['middle_name'] = $this->session->userdata('middle_name');
		$data['last_name'] = $this->session->userdata('last_name');
		$data['date_from1'] = $this->session->userdata('date_from1');
		$data['birth_place'] = $this->session->userdata('birth_place');
		$data['mother_tongue'] = $this->session->userdata('mother_tongue');
		$data['religion'] = $this->session->userdata('religion');
		$data['p_address'] = $this->session->userdata('p_address');
		$data['Presnt_address'] = $this->session->userdata('Presnt_address');
		$data['city'] = $this->session->userdata('city');
		$data['pin'] = $this->session->userdata('pin');
		$data['phone'] = $this->session->userdata('phone');
		$data['mobile'] = $this->session->userdata('mobile');
		$data['email'] = $this->session->userdata('email');
		$data['father_name'] = $this->session->userdata('father_name');
		$data['mobile1'] = $this->session->userdata('mobile1');
		$data['mother_name'] = $this->session->userdata('mother_name');
		$data['mobile2'] = $this->session->userdata('mobile2');
		$data['check'] = $this->session->userdata('check');
		$data['g_name'] = $this->session->userdata('g_name');
		$data['relation'] = $this->session->userdata('relation');
		$data['education'] = $this->session->userdata('education');
		$data['occupation'] = $this->session->userdata('occupation');
		$data['icome'] = $this->session->userdata('icome');
		$data['address'] = $this->session->userdata('address');
		$data['city2'] = $this->session->userdata('city2');
		$data['phone1'] = $this->session->userdata('phone1');
		$data['check1'] = $this->session->userdata('check1');
		$data['mobile3'] = $this->session->userdata('mobile3');
		$data['email2'] = $this->session->userdata('email2');
		$data['school_name'] = $this->session->userdata('school_name');
		$data['s_address'] = $this->session->userdata('s_address');
		$data['qualification'] = $this->session->userdata('qualification');
		$data['transport'] = $this->session->userdata('transport');
		$data['hostel'] = $this->session->userdata('hostel');
	
		$this->student_model->insert_student_admission($data);
		redirect('http://localhost/college/index.php/backend/student/create', 'refresh');
		}
		}

	
	
	public function courses()
	{
		if(empty($_POST)){
		$this->show('courses');
		}
		else{
		$data = array(
						'course_name' => $this->input->post('course_name'),
						);
		$this->student_model->insert_courses($data);
		redirect('http://localhost/college/index.php/backend/student/courses','refresh');
		}
	}
	
	
	public function update_course($id){
		if(empty($_POST)){
		$id = $this->uri->segment(4);
		$this->show('courses',$id);
		}
		else{
		$id = $this->uri->segment(4);
		$data = array(
						'course_name' => $this->input->post('course_name'),
						);
		$this->student_model->updatecourse($id,$data);
		redirect('http://localhost/college/index.php/backend/student/courses','refresh');
		}
	}
	
	
	public function delete_course($id){
	$id = $this->uri->segment(4);
	$this->student_model->deletecourse($id);
	redirect('http://localhost/college/index.php/backend/student/courses','refresh');
	}
	
	public function student_list()
	{
	$this->show('student_list');
	}
	
	
	
	
	public function attendence()
	{
	$this->show('attendance');
	}
	
	
	
	
	public function print_list()
	{
	$this->show('print_list');
	}
	
	
	
	
	public function guardian_list()
	{
	$this->show('guardian_list');
	}
	
	public function student_roll_no()
	{
	$this->show('student_roll_no');
	}
	
	public function student_attendance_import(){
	$this->show('student_attendance_import');
	}
	
}
