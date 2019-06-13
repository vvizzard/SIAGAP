<?php

class Category extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('category_model', 'cat');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}
	
	public function autocomplete() {
		$q = $this->input->get('q');
		$data = $this->cat->findByName($q);
		$json = array();
		for ($i=0; $i < sizeof($data); $i++) { 
			$json[] = $data[$i]->label;
		}
		echo json_encode( $json );
	}

	public function all() {	
		echo json_encode($this->cat->find());
	}
}