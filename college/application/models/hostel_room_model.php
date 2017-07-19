<?php 
class Hostel_room_model extends CI_Model{

		function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		
		}
		
		function insert_data($data){
		$this->db->insert('hostel_details',$data);
		}
		
		
		function insert_hoste_type($data){
		$this->db->insert('hostel_type',$data);
		}
		
		
		public function get_data(){
		$this->db->select('*');
		$this->db->from('hostel_details');
		$query = $this->db->get();
		$results = $query->result();
		if($query->num_rows() > 0){
		return $results;
		}else{
		return 0;
		}	
		}
		
		public function hostel_type(){
		$this->db->select('*');
		$this->db->from('hostel_type');
		$query = $this->db->get();
		$results = $query->result();
		if($query->num_rows() > 0){
		return $results;
		}else{
		return 0;
		}	
		}
		
		public function hostel_details(){
		$this->db->select('*');
		$this->db->from('hostel_details');
		$query = $this->db->get();
		$results = $query->result();
		if($query->num_rows() > 0){
		return $results;
		}else{
		return 0;
		}	
		}

		
		
		public function get_hostel_type(){
		$this->db->select('*');
		$this->db->from('hostel_type');
		$query = $this->db->get();
		$results = $query->result();
		if($query->num_rows() > 0){
		return $results;
		}else{
		return 0;
		}	
		}
		
		
		// function to fetch to selected record.
		public function single_record($id){
		$this->db->select('*');
		$this->db->from('hostel_details');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
		}
		
		
		// update query for selected bookrecord
		public function update_hostel_record($id,$data){
		$this->db->where('id',$id);
		$this->db->update('hostel_details',$data);
		}
		
		
		public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('hostel_details');
		}
		
}