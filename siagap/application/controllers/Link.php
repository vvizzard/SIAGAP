<?php

class Link extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('link_model', 'cm');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}

	public function set() {
		$apId = $this->input->post('apId');
		$label = $this->input->post('label');
		$link = $this->input->post('link');
		$comment = $this->input->post('comment');
		if ($this->cm->add($apId, $link, $label, $comment)==false) {
			echo json_encode(false);
		} else echo json_encode(true);
	}

	public function all() {	
		echo json_encode($this->cm->find(30));
	}

	public function ap($apId) {
		echo json_encode($this->cm->findGeneric(array('ap_id' => $apId)));
	}
}