<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	
	function book_category_helper(){
	$CI = get_instance();
	$CI->load->model('book_cat_model');
	$data = $CI->book_cat_model->get_data();
	return $data;
	}
	

