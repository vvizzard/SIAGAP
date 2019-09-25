<?php

class AssociationApRegion extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('associationApRegion_model', 'rm');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}

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
		echo json_encode($this->rm->findGeneric(array('association_ap_region.ap_id' => (int)$idAp), true, 'region'));
	}

	public function getString() {
		$idAp = null;
		$idAp = $this->input->get('idAp');
		$list = $this->rm->findGeneric(array('association_ap_region.ap_id' => (int)$idAp), true, 'region');
		$valiny = '';
		if (sizeof($list)>0) {
			$valiny = $list[0]->label;
			for ($i=1; $i < sizeof($list); $i++) { 
				$valiny = $valiny . ', ' . $list[$i]->label;
			}	
		}
		echo json_encode($valiny);	
	}

	// public function all() {	
	// 	echo json_encode($this->rm->find());
	// }
}