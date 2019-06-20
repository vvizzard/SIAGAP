<?php

class AssociationApPression extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('associationApPression_model', 'rm');
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
		$idsItem = substr($idsItem, 0, strlen($idsItem)-1);
		$allItem = explode("-", $idsItem);

		// Delete all item of this PA
		$this->rm->deleteByAp($idAp);

		// Add all items
		$status = true;
		if (empty($allItem)) {
			$status = false;
		} else {
			foreach ($allItem as $item) {
				if(!$this->rm->add($idAp, $item)) {
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