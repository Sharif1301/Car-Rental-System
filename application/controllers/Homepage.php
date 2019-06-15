<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->model('Homepage_model');
		$result = $this->Homepage_model->get_data();
		$data['rs'] =  $result; # or  $data['rs']  = $this->Homepage_model->get_data(); assign directly 
		$this->load->view('homepage_view', $data);
}
}