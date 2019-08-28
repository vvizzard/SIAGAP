<?php

class CategoryCible extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('category_cible_model', 'cm');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}

	public function set() {
		$label = $this->input->post('label');
		$comment = $this->input->post('comment');
		if ($this->cm->add($label, $link, $comment)==false) {
			echo json_encode(false);
		} else echo json_encode(true);
	}

	public function all() {	
		echo json_encode($this->cm->find(30));
	}
}