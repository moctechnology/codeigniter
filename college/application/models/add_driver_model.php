<?php 
class Add_driver_model extends CI_Model{

		function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		
		}
		
		function insert_data($data){
		$this->db->insert('add_driver',$data);
		}
		
		public function get_data(){
		$this->db->select('*');
		$this->db->from('add_driver');
		$query = $this->db->get();
		$results = $query->result();
		if($query->num_rows() > 0){
		return $results;
		}else{
		return 0;
		}	
		}
		
		// add_vehicle
		public function get_vehicle_data(){
		$this->db->select('*');
		$this->db->from('add_vehicle');
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
		$this->db->from('add_driver');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
		}
		
		
		// update query for selected bookrecord
		public function update_driver_record($id,$data){
		$this->db->where('id',$id);
		$this->db->update('add_driver',$data);
		}
		
		
		public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('add_driver');
		}
		
}