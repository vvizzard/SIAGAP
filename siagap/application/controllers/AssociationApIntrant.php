<?php

class AssociationApIntrant extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('associationApIntrant_model', 'rm');
		$this->load->model('intrant_model', 'im');
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
		$valItem = $this->input->post('ids_item_m');
		$valItem = substr($valItem, 0, strlen($valItem)-1);
		$allItem = explode("-", $valItem);

		// Delete all item of this PA
		$this->rm->deleteByAp($idAp);

		// Add all items
		$status = true;
		if (empty($allItem)) {
			$status = false;
		} else {
			for ($i=0; $i < sizeof($allItem); $i++) { 
				if(!$this->rm->add($idAp, $ids[$i]->id, $allItem[$i])) {
					$status = false;
				}
			}
			// $i = 0;
			// foreach ($allItem as $item) {
			// 	if(!$this->rm->add($idAp, $ids[$i]->id, $item)) {
			// 		$status = false;
			// 	}
			// 	$i++;
			// }
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