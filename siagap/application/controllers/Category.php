<?php

class Category extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('category_model', 'cat');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home()
	{
		$data = $this->cat->findByName();
		echo json_encode( $data );
	}
	
	public function ap() {
		$this->load->view('bo_ap');
	}
}