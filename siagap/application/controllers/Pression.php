<?php

class Pression extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('pression_model', 'pm');
		$this->load->model('associationApPression_model', 'aapm');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}
	
	public function autocomplete() {
		$q = $this->input->get('q');
		$data = $this->pm->findByName($q);
		echo json_encode( $data );
	}

	public function set() {
		$label = $this->input->post('label');
		$comment = $this->input->post('comment');
		if ($this->pm->add($label, $comment)==false) {
			echo json_encode(false);
		} else echo json_encode(true);
	}

	public function all() {	
		echo json_encode($this->pm->find(30));
	}

	public function getByApId($id) {
		echo json_encode($this->aapm->findGeneric(
				array('association_ap_pression.ap_id' => $id), true, "pression"));
	}


}