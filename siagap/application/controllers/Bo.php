<?php

class Bo extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->model('ap_model', 'am');
		$this->load->model('category_model', 'cat');
		$this->load->model('region_model', 'rm');
		$this->load->model('intrant_model', 'im');
		$this->load->model('level_model', 'lm');
		$this->load->model('pag_model', 'pm');
		$this->load->model('associationApSubsistance_model', 'aasm');
		$this->load->model('associationApPression_model', 'aapm');
		$this->load->model('associationApProblem_model', 'aapbm');
		$this->load->model('associationApCible_model', 'aacm');
		$this->load->model('associationApLevel_model', 'aalm');
		$this->load->model('pressionCause_model', 'pcm');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home()
	{
		echo 'Hello World!';
	}
	
	public function ap($id = '') {
		$this->load->view('inc/bo_top_head');
		$this->load->view('inc/bo_header');

		// Left side 
		$data_left = array();
		$data_left['ap'] = $this->am->findAll();
		$this->load->view('inc/bo_left', $data_left);

		// Body
		if ($id == '') {
			$this->load->view('bo_ap');
			$this->load->view('inc/bo_footer');
			$this->load->view('inc/bo_top_foot');
		} else if (intval($id)>0) {
			$data_body = array();
			$data_body['id_ap'] = $id;
			// get the data of AP from the list used in earlier
			// so find the index of the appropriate data
			$index = -1;
			for ($i=0; $i < sizeof($data_left['ap']); $i++) { 
				if (intval($id) == intval($data_left['ap'][$i]->id)) {
					$index = $i;
					break;
				}
			}
			if ($index >= 0) {
				$data_body['profil_ap'] = $data_left['ap'][$index];
				$data_body['category'] = $this->cat->findAll();
				$data_body['intrant'] = $this->im->findAll();
				$data_body['level'] = $this->lm->findAll();
				$data_body['pag'] = $this->pm->findAll();

				if ($data_body['profil_ap']->region_id != null 
						&& $data_body['profil_ap']->region_id > 0) {
					$data_body['region_ap'] = $this->rm->findGeneric(
							array('id' => $data_body['profil_ap']->region_id));
				}

				$data_body['subsistances_ap'] = $this->aasm->findGeneric(
						array('association_ap_subsistance.ap_id' => $id), true, "subsistance");
				$data_body['pression_ap'] = $this->aapm->findGeneric(
						array('association_ap_pression.ap_id' => $id), true, "pression");
				$data_body['problem_ap'] = $this->aapbm->findGeneric(
						array('association_ap_problem.ap_id' => $id), true, "problem");
				$data_body['cible_ap'] = $this->aacm->findGeneric(
						array('association_ap_cible.ap_id' => $id), true, "cible");
				$array_rel_1 = array();
				$array_rel_1[] = "subsistance";
				$array_rel_1[] = "problem";
				$array_rel_1[] = "pression";
				$data_body['rel_subs_pbm_pression'] = $this->pcm->findGeneric(
						array('pression_cause.ap_id' => $id), true, $array_rel_1);
			} else {
				echo "il n'y a pas de id correspondant á cet ap dans la base";
			}

			$this->load->view('bo_ap_edit', $data_body);
			$this->load->view('inc/bo_footer');
			$this->load->view('inc/bo_top_foot_edit');
		}
	}

}