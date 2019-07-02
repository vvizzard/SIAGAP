<?php

class AssociationApSubsistanceProblemPression extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('pressionCause_model', 'pcm');
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
		$idSubsistance = $this->input->post('id_1');
		$idProblem = $this->input->post('id_2');
		$idPression = $this->input->post('id_3');
		echo json_encode($this->pcm->add($idAp, $idSubsistance, $idProblem, $idPression));
	}

	public function get() {
		$idAp = null;
		$idAp = $this->input->get('idAp');
		echo json_encode($this->pcm->findGeneric(array('ap_id' => (int)$idAp)));
	}

	// public function all() {	
	// 	echo json_encode($this->rm->find());
	// }
}