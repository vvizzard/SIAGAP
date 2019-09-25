<?php

class Realisation extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->model('realisation_model', 'cm');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}

	public function set() {
		$idRpag = $this->input->post('rpag_id');
		$deb = (int)$this->input->post('debut');
		$idsItem = $this->input->post('ids_item');
		$idsItem = substr($idsItem, 0, strlen($idsItem)-1);
		$allItem = explode("-", $idsItem);

		$this->db->trans_start();
		// Delete all item of this PA
		$this->cm->deleteByAp($idRpag);

		// Add all items
		$status = true;
		if (empty($allItem)) {
			$status = false;
		} else {
			foreach ($allItem as $item) {
				if(!$this->cm->add($idRpag, $deb, $item, '')) {
					$status = false;
				}
				$deb++;
			}
		}
		$this->db->trans_complete();

		echo json_encode($status);
	}

	// public function set() {
	// 	$rpagId = $this->input->post('rpag_id');
	// 	$date = $this->input->post('date');
	// 	$niveau = $this->input->post('niveau');
	// 	$comment = $this->input->post('comment');
	// 	if ($this->cm->add($rpagId, $date, $niveau, $comment)==false) {
	// 		echo json_encode(false);
	// 	} else echo json_encode(true);
	// }

	public function get($rpagId) {	
		echo json_encode($this->cm->findGeneric(array('rpag_id' => $rpagId)));
	}
}