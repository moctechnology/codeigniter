<?php 
class Messagemodel extends CI_Model{

		function __construct(){
		parent::__construct();
		$this->load->database();
		$this->init("PDMessage",$this->doctrine->em);
		
		}
		
}