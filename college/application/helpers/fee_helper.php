<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	
	function getsubcat_helper($id){
	$CI = get_instance();
	$CI->load->model('fee_model');
	$data = $CI->fee_model->get_fee_subcategories($id);
	
	//print_r($data);
	return $data;
	}
	

