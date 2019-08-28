<?php

class Photo extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('photo_model', 'cm');
		$this->load->library('upload');
	}

	function uploadStatMenace($apId) {
    //upload file
    $config['upload_path'] = FCPATH . 'assets' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR 
    		. 'img'. DIRECTORY_SEPARATOR;
    $config['allowed_types'] = '*';
    $config['max_filename'] = '255';
    $config['encrypt_name'] = TRUE;
    $config['max_size'] = '8192'; //8 MB

    if (isset($_FILES['photo']['name'])) {
     	if (0 < $_FILES['photo']['error']) {
          echo json_encode(array('result' => false, 'error' => 'Error during file upload' . $_FILES['photo']['error']));
      } else {
        if (file_exists(FCPATH . 'assets/upload/photo/' . $_FILES['photo']['name'])) {
        	echo json_encode(array('result' => false, 'error' => 'File already exists'));
        } else {
          $this->upload->initialize($config);
          if (!$this->upload->do_upload('photo')) {
          	echo json_encode(array('result' => false, 'error' => $this->upload->display_errors()));
          } else {
          	$data = array('upload_data' => $this->upload->data());
          	$temp = $this->cm->add(str_replace(str_replace('\\', '/', FCPATH), '', $data['upload_data']['full_path']), 'miradia', $apId);
						if ($temp != true) {
							echo json_encode(array('result' => false, 'error' => $temp));
						} else {
							echo json_encode(true);
						}
          }
        }
      }
    } else {
        echo 'Please choose a file';
    }
  }
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}

	public function all() {	
		echo json_encode($this->cm->find(30));
	}

	public function getProfil($idAp) {
		echo json_encode($this->cm->findGeneric(array('ap_id' => $idAp, 'comment' => 'profil')));
	}

	public function getStatMenace($idAp) {
		echo json_encode($this->cm->findGeneric(array('ap_id' => $idAp, 'comment' => 'miradia')));
	}
}