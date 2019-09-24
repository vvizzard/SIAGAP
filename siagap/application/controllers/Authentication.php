<?php

class Authentication extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('form', 'url');
    $this->load->model('lvlUtilisateur_model', 'lvlum');
		$this->load->model('ap_model', 'apm');
	}

	public function index() {
		$this->login();
	}
	
	public function authenticate() {
    $username = $_POST['login'];
    $password = $_POST['password'];
    $valiny = $this->user->authenticate($username, $password);
    if($valiny != false) {
    	$this->session->set_userdata('user', $valiny);
    	$level = $this->getLevel($valiny->lvl_id);
    	if ($level!=null && $level[0]->lvl > 0) {
    		$this->session->set_userdata('lvl', $level[0]->lvl);
    	} else {
        $this->session->set_userdata('lvl', 1);
      }
      redirect('Bo/ap/'.$valiny->ap_id);
    } else {
    	$this->login();
    }
  }

  public function inscrire() {
    $username = $_POST['login'];
    $password = $_POST['password'];
    $temp = explode("_", $username);
    $username = $temp[0];
    $idAp = $temp[1];;
    $valiny = $this->user->add2($username, $password, $idAp);
    if($valiny != false) {
      $this->login();
    } else {
      $this->inscription();
    }
  }

  // Check if the user is connected
  function checkAuthentication() {
  	if($this->session->userdata('user')!=null && $this->session->userdata('user')->id > 0) {
  		return true;
  	} 
  	return false;
  }

  // Check the access level of the user
  function checkAppartenance($apid) {
    if($this->session->userdata('lvl')==null || ($this->session->userdata('lvl') < 10 && $this->session->userdata('user')->ap_id != $apid)) {
      return false;
    } 
    return true;
  }

  // get the level of an account
  function getLevel($id) {
  	return $this->lvlum->findById($id);
  }

  public function logout() {
      $this->session->unset_userdata('user');
      $this->session->unset_userdata('lvl');
      $this->login();
  }

	public function login() {
    $data_body = array();
    $data_body['ap'] = $this->apm->findAll();
		$this->load->view('inc/bo_top_head');
		$this->load->view('inc/bo_header');
		$this->load->view('login', $data_body);
		$this->load->view('inc/bo_footer');
		// $this->load->view('inc/bo_top_foot_edit');
	}

  public function inscription() {
    $data_body = array();
    $data_body['ap'] = $this->apm->findAll();
    $this->load->view('inc/bo_top_head');
    $this->load->view('inc/bo_header');
    $this->load->view('inscription', $data_body);
    $this->load->view('inc/bo_footer');
    // $this->load->view('inc/bo_top_foot_edit');
  }

  public function loginAdmin() {
    $data_body = array();
    $data_body['ap'] = $this->apm->findAll();
    $this->load->view('inc/bo_top_head');
    $this->load->view('inc/bo_header');
    $this->load->view('loginAdmin', $data_body);
    $this->load->view('inc/bo_footer');
    // $this->load->view('inc/bo_top_foot_edit');
  }

}