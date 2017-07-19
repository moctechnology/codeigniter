<?php 
class Fee_waiver extends CI_Model{

		function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		
		}
		
		function insert_fee_category($data){
		
		$this->db->insert('fee_category',$data);
		}
		
		public function get_data(){
		$this->db->select('*');
		$this->db->from('fee_category');
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