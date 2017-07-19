<?php 
class Add_vehicle_model extends CI_Model{

		function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		
		}
		
		function insert_data($data){
		$this->db->insert('add_vehicle',$data);
		}
		
		public function get_data(){
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
		$this->db->from('add_vehicle');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
		}
		
		
		// update query for selected bookrecord
		public function update_vehicle_record($id,$data){
		$this->db->where('id',$id);
		$this->db->update('add_vehicle',$data);
		}
		
		
		public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('add_vehicle');
		}
		
		public function get_total_rows(){
		return $this->db->count_all('add_vehicle');
		}
		
		public function fetch_records_bylimit($limit,$page){
		$this->db->select('*');
		$this->db->from('add_vehicle');
		//$to = $page*$limit;
		$offset = ($page-1)*$limit;
		$this->db->limit($limit,$offset);
		$query = $this->db->get();
		$result = $query->result();
			if($query->num_rows() > 0){
			return $result;
			}
			else{
			return 0;
			}
		}
		
}