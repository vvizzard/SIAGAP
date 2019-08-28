<?php

class StatApCible extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('statApCible_model', 'rm');
		$this->load->model('associationApCible_model', 'aapc');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}

	public function set() {
		$idAp = $this->input->post('id_ap');
		$idCible = $this->input->post('id_cible');
		$value = $this->input->post('value');
		$year = $this->input->post('year');
		$fiabilite = $this->input->post('fiabilite');
		$comment = $this->input->post('comment');

		$idAac = $this->aapc->findGeneric(array('ap_id' => $idAp, 'cible_id' => $idCible ))[0]->id;
		// echo json_encode($idAac);
		echo json_encode($this->rm->add($idAac, $value, $year, $fiabilite, $comment));
	}

	public function get() {
		$idAp = $this->input->get('id_ap');
		// $idCible = $this->input->get('id_cible');
		// $idAac = $this->aapc->findGeneric(array('ap_id' => $idAp, 'cible_id' => $idCible ))[0]->id;

		$cibles = $this->aapc->findGeneric(array('association_ap_cible.ap_id' => (int)$idAp), true, 'cible');
		// echo json_encode($cibles[0]->id);
		$valiny = array();

		for ($i=0; $i < sizeof($cibles); $i++) { 
			$historique = $this->rm->findGeneric(array('association_ap_cible_id' => $cibles[$i]->id));
			$arrayName = array('cible' => $cibles[$i], 'historique' => $historique);
			$valiny[] = $arrayName;
		}

		echo json_encode($valiny);
	}

	public function getStat($idCible) {
		$valiny = null;
		$idAp = $this->input->get('id_ap');
		$cibles = $this->aapc->findGeneric(array('association_ap_cible.ap_id' => (int)$idAp), true, 'cible');
		for ($i=0; $i < sizeof($cibles); $i++) { 
			if ($cibles[$i]->cible_id == $idCible) {
				$valiny = $this->rm->findGeneric(array('association_ap_cible_id' => $cibles[$i]->id));
				break;
			}
		}		
		echo json_encode($valiny);
	}
	
}