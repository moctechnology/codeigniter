<?php 
class Fee_model extends CI_Model{

		function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		
		}
		
		function insert_data($data){
		
		$this->db->insert('fee_category',$data);
		}
		
		public function get_data(){
		$this->db->select('*');
		$this->db->from('fee_category');
		$query = $this->db->get();
		$results = $query->result();
		if($query->num_rows() > 0){
		return $results;
		}else{
		return 0;
		}
			
		}
		
		// get fee parent category 
		public function get_fee_category_data(){
		$this->db->select('*');
		$this->db->from('fee_category');
		$this->db->where('parent_id','0');
		$query = $this->db->get();
		$results = $query->result();
		if($query->num_rows() > 0){
		return $results;
		}else{
		return 0;
		}
			
		}
		
		// get fee child category 
		public function get_child_fee_category(){
		$this->db->select('*');
		$this->db->from('fee_category');
		$this->db->where('parent_id >','0');
		$query = $this->db->get();
		$results = $query->result();
		if($query->num_rows() > 0){
		return $results;
		}else{
		return 0;
		}
			
		}
		
		// get fee subcategories by parent ID
		public function get_fee_subcategories($id){
		$this->db->select('*');
		$this->db->from('fee_category');
		$this->db->where('parent_id', $id);
		$query = $this->db->get();
		return $query->result();
		}
		
		
		// function to fetch to selected record.
		public function single_record($id){
		$this->db->select('*');
		$this->db->from('fee_category');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
		}
		
		// update query for selected syudent
		public function update_fee_record($id,$data){
		$this->db->where('id',$id);
		$this->db->update('fee_category',$data);
		}
		
		public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('fee_category');
		}
		
}