<?php
require_once(APPPATH."controllers/Authentication.php");
class Bo extends Authentication
{
	public function __construct()
	{
		parent::__construct();
		// User must be logged to use Bo
		if(!parent::checkAuthentication()) {
			// parent::login();
			redirect('Authentication/login/');
		}
		
		$this->load->helper('form', 'url');
		$this->load->model('ap_model', 'am');
		$this->load->model('category_model', 'cat');
		$this->load->model('gestionnaire_model', 'gm');
		$this->load->model('region_model', 'rm');
		$this->load->model('intrant_model', 'im');
		$this->load->model('accessibilite_model', 'accs');
		$this->load->model('level_model', 'lm');
		$this->load->model('pag_model', 'pm');
		$this->load->model('associationApSubsistance_model', 'aasm');
		$this->load->model('associationApPression_model', 'aapm');
		$this->load->model('associationApProblem_model', 'aapbm');
		$this->load->model('associationApCible_model', 'aacm');
		$this->load->model('associationApLevel_model', 'aalm');
		$this->load->model('associationApRegion_model', 'aarm');
		$this->load->model('pressionCause_model', 'pcm');
		$this->load->model('CCHT_model', 'ccht');
		$this->load->model('CCHP_model', 'cchp');
		$this->load->model('CCPT_model', 'ccpt');
		$this->load->model('CCPP_model', 'ccpp');
		$this->load->model('statApCible_model', 'sac');
		$this->load->model('statApMenace_model', 'sam');
		$this->load->model('unite_model', 'um');
		$this->load->model('rpag_model', 'rpm');
	}
	
	public function index() {
		parent::login();
	}
	
	public function ap($id = '') {
		// Check Authorization level
		if(!parent::checkAppartenance($id)) {
				// parent::login();
			redirect('Authentication/login/');
		}

		// Load header of the view
		$this->load->view('inc/bo_top_head');
		$this->load->view('inc/bo_header');

		// Left side 
		$data_left = array(); 

		$list_ap = array(); 
		$list_ap['ap'] = $this->am->findAll();

		if ($this->session->userdata('lvl')<100) {
			foreach ($list_ap['ap'] as $ap_temp) {
				if ($ap_temp->id == $id) {
					$temp = array();
					$temp[] = $ap_temp;
					$data_left['ap'] = $temp;
					break;
				}
			}
		} else {
			$data_left['ap'] = $list_ap['ap'];
		}
		$this->load->view('inc/bo_left', $data_left);

		// Body
		if ($id == '') {
			$this->load->view('bo_ap');
			$this->load->view('inc/bo_footer');
			$this->load->view('inc/bo_top_foot');
		} else if (intval($id)>0) {
			$data_body = array();
			$data_body['id_ap'] = $id;
			$data_body['user'] = $this->session->userdata('user');
			$data_body['user_lvl'] = $this->session->userdata('lvl');
			// get the data of AP from the list used in earlier
			// so find the index of the appropriate data
			$index = -1;
			for ($i=0; $i < sizeof($list_ap['ap']); $i++) { 
				if (intval($id) == intval($list_ap['ap'][$i]->id)) {
					$index = $i;
					break;
				}
			}
			if ($index >= 0) {
				$data_body['profil_ap'] = $list_ap['ap'][$index];
				$data_body['category'] = $this->cat->findAll();
				$data_body['gestionnaire'] = $this->gm->findAll();
				$data_body['intrant'] = $this->im->findAll();
				$data_body['accessibilite'] = $this->accs->findAll();
				$data_body['level'] = $this->lm->findAll();
				$data_body['pag'] = $this->pm->findAll();
				$data_body['unite'] = $this->um->findAll();
				$data_body['pags'] = $this->rpm->findGeneric(array('ap_id' => $id));

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
				$region_temp = $this->aarm->findGeneric(
						array('association_ap_region.ap_id' => $id), true, 'region');
				$valiny = '';
				if (sizeof($region_temp)>0) {
					$valiny = $region_temp[0]->label;
					for ($i=1; $i < sizeof($region_temp); $i++) { 
						$valiny = $valiny . ', ' . $region_temp[$i]->label;
					}	
				}
				$data_body['regions'] = $valiny;
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
			$footerData = array();
			$footerData['user'] = $this->session->userdata('user');
			$this->load->view('inc/bo_top_foot_edit', $footerData);
		}
	}

	public function cc($id = '') {
		$this->load->view('inc/bo_top_head');
		$this->load->view('inc/bo_header');

		// Left side 
		$list_ap = array();
		$list_ap['ap'] = $this->am->findAll();
		// $this->load->view('inc/bo_left', $list_ap);

		// Body
			$data_body = array();
			$data_body['id_ap'] = $id;
			$data_body['ht'] = $this->ccht->findAll();
			$data_body['hp'] = $this->cchp->findAll();
			$data_body['pt'] = $this->ccpt->findAll();
			$data_body['pp'] = $this->ccpp->findAll();
			
			$this->load->view('bo_cc', $data_body);
			$this->load->view('inc/bo_footer');
			$this->load->view('inc/bo_top_foot_edit');
		
	}

}