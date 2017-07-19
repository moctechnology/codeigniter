<?php 
class Add_destination_model extends CI_Model{

		function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		
		}
		
		function insert_data($data){
		$this->db->insert('add_destination',$data);
		}
		
		public function get_data(){
		$this->db->select('*');
		$this->db->from('add_destination');
		$query = $this->db->get();
		$results = $query->result();
		if($query->num_rows() > 0){
		return $results;
		}else{
		return 0;
		}	
		}
		
		
		// Get route data
		public function get_route_data(){
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
		
		
		// function to fetch to selected record.
		public function single_record($id){
		$this->db->select('*');
		$this->db->from('add_destination');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
		}
		
		
		// update query for selected bookrecord
		public function update_destination_record($id,$data){
		$this->db->where('id',$id);
		$this->db->update('add_destination',$data);
		}
		
		
		public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('add_destination');
		}
		
}