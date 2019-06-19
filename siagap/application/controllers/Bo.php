<?php

class Bo extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->model('ap_model', 'am');
		$this->load->model('category_model', 'cat');
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
			} else {
				echo "il n'y a pas de id correspondant á cet ap dans la base";
			}

			$this->load->view('bo_ap_edit', $data_body);
			$this->load->view('inc/bo_footer');
			$this->load->view('inc/bo_top_foot_edit');
		}
	}

}