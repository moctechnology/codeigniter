<?php 
class Student_model extends CI_Model{

		function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		
		}
		
		function insert_student_category($cat){
		
		$this->db->insert('student_category',$cat);
		}
		
		public function get_data(){
		$this->db->select('*');
		$this->db->from('student_category');
		$query = $this->db->get();
		return $query->result();
		
		}
		
		public function single_record($id){
		$this->db->select('*');
		$this->db->from('student_category');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
		}
		
		public function update_record($id,$data){
		$this->db->where('id',$id);
		$this->db->update('student_category',$data);
		
		}
		
		public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('student_category');
		
		}
		
		public function insert_student_admission($data){
		$this->db->insert('admission',$data);
		}
		
		public function insert_courses($data){
		$this->db->insert('courses',$data);
		}
		
		public function single_courses($id){
		$this->db->select('*');
		$this->db->from('courses');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$result = $query->result();
			if($query->num_rows() > 0){
			return $result;
			}
			else{
			return 0;
			}
		}
		
		public function get_courses(){
		$this->db->select('*');
		$this->db->from('courses');
		$query = $this->db->get();
		return $query->result();
		
		}
		
		
		public function updatecourse($id,$data){
		$this->db->where('id',$id);
		$this->db->update('courses',$data);
		}
		
		public function deletecourse($id){
		$this->db->where('id',$id);
		$this->db->delete('courses');
		}
}