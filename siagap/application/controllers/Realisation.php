<?php

class Realisation extends CI_Controller
{
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
	
	public function autocomplete() {
		$q = $this->input->get('q');
		$data = $this->cm->findByName($q);
		/*$json = array();
		for ($i=0; $i < sizeof($data); $i++) { 
			$temp = array('value' => $data[$i]->id, 'text' => $data[$i]->label);
			$json = array_merge($json, $temp);
		}*/
		echo json_encode( $data );
	}

	public function set() {
		$idAp = $this->input->post('id_ap');
		$date = $this->input->post('date');
		$niveau = $this->input->post('niveau');
		$comment = $this->input->post('comment');
		if ($this->cm->add($idAp, $date, $niveau, $comment)==false) {
			echo json_encode(false);
		} else echo json_encode(true);
	}

	public function all() {	
		echo json_encode($this->cm->find());
	}
}