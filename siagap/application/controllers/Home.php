<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->model('ap_model', 'am');
		$this->load->model('category_model', 'cat');
		$this->load->model('gestionnaire_model', 'gm');
		$this->load->model('subsistance_model', 'sm');
		$this->load->model('pression_model', 'pm');
		$this->load->model('cible_model', 'cm');
	}

	public function index()
	{
		$this->map();
	}

	public function map() {

		// Left side 
		$data_left = array();
		$data_left['aps'] = $this->am->findAll();
		$data_left['categorys'] = $this->cat->findAll();
		$data_left['gestionnaires'] = $this->gm->findAll();
		$data_left['subsistances'] = $this->sm->findAll();
		$data_left['pressions'] = $this->pm->findAll();
		$data_left['cibles'] = $this->cm->findAll();

		$this->load->view('home', $data_left);
	}
}
