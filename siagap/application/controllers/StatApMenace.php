<?php

class StatApMenace extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('statApMenace_model', 'rm');
		$this->load->model('associationApPression_model', 'aapc');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}

	public function set() {
		$idAp = $this->input->post('id_ap');
		$idMenace = $this->input->post('id_pression');
		$value = $this->input->post('value');
		$year = $this->input->post('year');
		$fiabilite = $this->input->post('fiabilite');
		$unite = $this->input->post('unite');
		$comment = $this->input->post('comment');

		$idAac = $this->aapc->findGeneric(array('ap_id' => $idAp, 'pression_id' => $idMenace ))[0]->id;
		// echo json_encode($idAac);
		echo json_encode($this->rm->add($idAac, $value, $year, $fiabilite, $unite, $comment));
	}

	public function get() {
		$idAp = $this->input->get('id_ap');
		// $idMenace = $this->input->get('id_pression');
		// $idAac = $this->aapc->findGeneric(array('ap_id' => $idAp, 'pression_id' => $idMenace ))[0]->id;

		$pressions = $this->aapc->findGeneric(array('association_ap_pression.ap_id' => (int)$idAp), true, 'pression');
		// echo json_encode($pressions[0]->id);
		$valiny = array();

		for ($i=0; $i < sizeof($pressions); $i++) { 
			$historique = $this->rm->findGeneric(array('association_ap_pression_id' => $pressions[$i]->id), true, 'unite');
			$arrayName = array('pression' => $pressions[$i], 'historique' => $historique);
			$valiny[] = $arrayName;
		}

		echo json_encode($valiny);
	}

	// public function getStat($idCible) {
	// 	$idAp = $this->input->get('id_ap');
	// 	echo json_encode($this->rm->findGeneric(array('association_ap_pression_id' => $idCible)));
	// }

	public function getStat($idCible) {
		$valiny = null;
		$idAp = $this->input->get('id_ap');
		$cibles = $this->aapc->findGeneric(array('association_ap_pression.ap_id' => (int)$idAp), true, 'pression');
		for ($i=0; $i < sizeof($cibles); $i++) { 
			if ($cibles[$i]->pression_id == $idCible) {
				$valiny = $this->rm->findGeneric(array('association_ap_pression_id' => $cibles[$i]->id), true, 'unite');
				break;
			}
		}		
		echo json_encode($valiny);
	}
}