<?php

class AssociationApSubsistance extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		// $this->load->model('associationApSubsistance_model', 'rm');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}
	
	// public function autocomplete() {
	// 	$q = $this->input->get('q');
	// 	$data = $this->rm->findByName($q);
	// 	echo json_encode( $data );
	// }

	public function set() {
		$idAp = $this->input->post('id_ap');
		$idsItem = $this->input->post('ids_item');

		

		// if ($this->rm->add($label, $comment)==false) {
		// 	echo json_encode(false);
		// } else echo json_encode(true);
	}

	// public function all() {	
	// 	echo json_encode($this->rm->find());
	// }
}