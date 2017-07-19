<?php 
class Add_route_model extends CI_Model{

		function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		
		}
		
		function insert_data($data){
		$this->db->insert('add_route',$data);
		}
		
		public function get_data(){
		$this->db->select('*');
		$this->db->from('add_route');
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
		$this->db->from('add_route');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
		}
		
		
		// update query for selected routerecord
		public function update_route_record($id,$data){
		$this->db->where('id',$id);
		$this->db->update('add_route',$data);
		}
		
		
		public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('add_route');
		}
		
}