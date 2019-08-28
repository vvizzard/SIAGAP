<?php

class Accessibilite extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('accessibilite_model', 'im');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}

	public function set() {
		$label = $this->input->post('label');
		// $link = $this->input->post('link');
		$comment = $this->input->post('comment');
		if ($this->im->add($label, $comment)==false) {
			echo json_encode(false);
		} else echo json_encode(true);
	}

	public function all() {	
		echo json_encode($this->im->find());
	}
}