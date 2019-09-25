<?php

class Rpag extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('rpag_model', 'cm');
		$this->load->model('realisation_model', 'rm');
	}

	public function set() {
		$apId = $this->input->post('apId');
		$duree = $this->input->post('duree');
		$debut = $this->input->post('debut');
		$comment = $this->input->post('comment');
		if ($this->cm->add($apId, $debut, $duree, $comment)==false) {
			echo json_encode(false);
		} else echo json_encode(true);
	}

	public function update($id) {
		$apId = $this->input->post('apId');
		$duree = $this->input->post('duree');
		$debut = $this->input->post('debut');
		$comment = $this->input->post('comment');
		if ($this->cm->edit($id, $apId, $debut, $duree, $comment)==false) {
			echo json_encode(false);
		} else echo json_encode(true);
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}

	public function all() {	
		echo json_encode($this->cm->findAll());
	}

	public function get($idAp) {
		echo json_encode($this->cm->findGeneric(array('ap_id' => $idAp)));
	}

	public function getFull($idRpag) {
		$val = array();
		$rpag = $this->cm->findGeneric(array('id' => $idRpag));
		foreach ($rpag as $key) {
			$key = (object) array_merge( (array)$key, array( 'realisations' => $this->rm->findGenericDesc(array('rpag_id' => $key->id) ) ) );
			$val[] = $key;
		}
		echo json_encode($val);
	}

	public function getFullById($idAp) {
		$rpags = $this->cm->findGeneric(array('ap_id' => $idAp));
		$key = $rpags[0];
		$key = (object) array_merge( (array)$key, array( 'realisations' => $this->rm->findGenericDesc(array('rpag_id' => $key->id) ) ) );
		echo json_encode($key);
	}

	public function getStatMenace($idAp) {
		echo json_encode($this->cm->findGeneric(array('ap_id' => $idAp, 'comment' => 'miradia')));
	}
}