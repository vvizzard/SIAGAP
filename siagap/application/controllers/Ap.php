<?php

class Ap extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('ap_model', 'am');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}
	
	// public function autocomplete() {
	// 	$q = $this->input->get('q');
	// 	$data = $this->am->findByName($q);
	// 	echo json_encode( $data );
	// }

	public function set($id = null) {
		$nom = $this->input->post('nom');
		$categoryId = $this->input->post('categorie_id');
		$creationDate = $this->input->post('date_creation');
		$superficie = $this->input->post('superficie');
		$contact = $this->input->post('contact');
		$vision = $this->input->post('vision');
		$mission = $this->input->post('missiom');
		$objectif = $this->input->post('objectif');
		if ($id == null) {
			if ($this->am->add($nom, $categoryId, $creationDate, 
				$superficie, $contact, $vision, $mission, $objectif)==false) {
				echo json_encode(false);
			} else {
				echo json_encode($this->am->find(1, 0)[0]->id);
			}
		} else {
			if ($this->am->edit($id, $nom, $categoryId, $creationDate, 
				$superficie, $contact, $vision, $mission, $objectif)==false) {
				echo json_encode(false);
			} else {
				echo json_encode($id);
			}
		}
	}

	public function all() {	
		echo json_encode($this->am->find());
	}
}