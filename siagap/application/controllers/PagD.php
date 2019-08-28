<?php

class PagD extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('pagD_model', 'cm');
		$this->load->library('upload');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->load->view('bo_ap');
	}

	function up($apId) {
    //upload file
    $config['upload_path'] = FCPATH . 'assets' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR 
    		. 'pag'. DIRECTORY_SEPARATOR;
    $config['allowed_types'] = '*';
    $config['max_filename'] = '255';
    $config['encrypt_name'] = TRUE;
    $config['max_size'] = '8192'; //8 MB

    if (isset($_FILES['pag']['name'])) {
     	if (0 < $_FILES['pag']['error']) {
          echo json_encode(array('result' => false, 'error' => 'Error during file upload' . $_FILES['pag']['error']));
      } else {
        if (file_exists(FCPATH . 'assets/upload/pag/' . $_FILES['pag']['name'])) {
        	echo json_encode(array('result' => false, 'error' => 'File already exists'));
        } else {
          $this->upload->initialize($config);
          if (!$this->upload->do_upload('pag')) {
          	echo json_encode(array('result' => false, 'error' => $this->upload->display_errors()));
          } else {
						$comment = $this->input->post('comment');
          	$data = array('upload_data' => $this->upload->data());
          	$temp = $this->cm->add($apId, str_replace(str_replace('\\', '/', FCPATH), '', $data['upload_data']['full_path']));
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

	// public function set() {
	// 	$apId = $this->input->post('apId');
	// 	$path = $this->input->post('path');
	// 	$comment = $this->input->post('comment');
	// 	if ($this->cm->add($apId, $path, $comment)==false) {
	// 		echo json_encode(false);
	// 	} else echo json_encode(true);
	// }

	public function all() {	
		echo json_encode($this->cm->find(30));
	}

	public function ap($apId) {
		echo json_encode($this->cm->findGeneric(array('ap_id' => $apId)));
	}
}