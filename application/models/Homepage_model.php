<?php
if (defined('BASEPATH') OR exit ('No direct script access allowed'));
	class Homepage_model extends CI_Model{
		public $result;
		public $rs;

		public function __construct(){
			parent::__construct();
			$this->load->database();

		}

		public function get_data($slug = FALSE){
    		if ($slug === FALSE) {
        		$query = $this->db->get('cars');
        	return $query->result_array();
    		}
		    $query = $this->db->get_where('cars', array('status' => "Available"));
		    $result = $query->result_array(); # change
		    return $result; # change
}
	}