<?php

class Unite extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('unite_model', 'cat');
	}
	
	public function index() {
		$this->all();
	}

	public function all() {	
		echo json_encode($this->cat->find());
	}
}