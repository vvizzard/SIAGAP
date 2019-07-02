<?php

class AssociationApLevel extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('associationApLevel_model', 'rm');
		$this->load->model('level_model', 'im');
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
		$ids = $this->im->findAll();
		$valItemM = $this->input->post('ids_item_m');
		$valItemW = $this->input->post('ids_item_w');
		$valItemM = substr($valItemM, 0, strlen($valItemM)-1);
		$allItemM = explode("-", $valItemM);
		$valItemW = substr($valItemW, 0, strlen($valItemW)-1);
		$allItemW = explode("-", $valItemW);

		// Delete all item of this PA
		$this->rm->deleteByAp($idAp);

		// Add all items
		$status = true;
		if (empty($allItemM) && empty($allItemW)) {
			$status = false;
		} else {
			for ($i=0; $i < sizeof($allItemM); $i++) { 
				if(!$this->rm->add($idAp, $ids[$i]->id, $allItemM[$i], $allItemW[$i])) {
					$status = false;
				}
			}
		}
		
		echo json_encode($status);
	}

	public function get() {
		$idAp = null;
		$idAp = $this->input->get('idAp');
		echo json_encode($this->rm->findGeneric(array('ap_id' => (int)$idAp)));
	}

	// public function all() {	
	// 	echo json_encode($this->rm->find());
	// }
}