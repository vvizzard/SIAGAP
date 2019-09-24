<?php
require_once(APPPATH."controllers/Authentication.php");
class Cible extends Authentication
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('cible_model', 'cm');
		$this->load->library('upload');
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

	// public function set() {
	// 	$label = $this->input->post('label');
	// 	$link = $this->input->post('link');
	// 	$categoryId = $this->input->post('categoryId');
	// 	$comment = $this->input->post('comment');
	// 	if ($this->cm->add($label, $link, $categoryId, $comment)==false) {
	// 		echo json_encode(false);
	// 	} else echo json_encode(true);
	// }

	function set() {
		if(!parent::checkAuthentication()) {
			redirect('Authentication/login/');
		}
		$userId = $this->session->userdata('user')->id;
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
          	$label = $this->input->post('label');
						$link = str_replace(str_replace('\\', '/', FCPATH), '', $data['upload_data']['full_path']);
						$categoryId = $this->input->post('categoryId');
						$comment = $this->input->post('comment');
						$idCib = $this->input->post('id');
						if ($idCib != null && $idCib > 0) {
							$temp = $this->cm->edit($idCib, $label, $link, $categoryId, $comment);
						} else {
							$temp = $this->cm->add($label, $link, $categoryId, $comment, $userId);
						}
          	// $temp = $this->cm->add(str_replace(str_replace('\\', '/', FCPATH), '', $data['upload_data']['full_path']), 'miradia', $apId);
						if ($temp != true) {
							echo json_encode(array('result' => false, 'error' => $temp));
						} else {
							if($this->input->post('ajouter')==1) {
								$val = $this->cm->findGeneric(array('label' => $label, 'link_photo' => $link,
									'category_id' => $categoryId))[0]->id;	
								echo json_encode($val);
							} else {
								echo json_encode(true);
							}
						}
          }
        }
      }
    } else {
      $label = $this->input->post('label');
			// $link = str_replace(str_replace('\\', '/', FCPATH), '', $data['upload_data']['full_path']);
			$categoryId = $this->input->post('categoryId');
			$comment = $this->input->post('comment');
			$idCib = $this->input->post('id');
			if ($idCib != null && $idCib > 0) {
    		$temp = $this->cm->edit($idCib, $label, '', $categoryId, $comment);
    	} else {
    		$temp = $this->cm->add($label, '', $categoryId, $comment, $userId);
    	}
    	if ($temp != true) {
				echo json_encode(array('result' => false, 'error' => $temp));
			} else {
				if($this->input->post('ajouter')==1) {
					$val = $this->cm->findGeneric(array('label' => $label,
						'category_id' => $categoryId))[0]->id;	
					echo json_encode($val);
				} else {
					echo json_encode(true);
				}
			}
    }
  }

  public function delete($id) {
  	if(!parent::checkAuthentication()) {
			redirect('Authentication/login/');
		}
		if ($this->session->userdata('lvl')<100) {
			if ($this->cm->findGeneric(array('id' => $id))[0]->user_id == $this->session->userdata('user')->id) {
				echo json_encode($this->cm->delete($id));
			}
		} else {
			echo json_encode($this->cm->delete($id));
		}
  }

	public function all() {	
		echo json_encode($this->cm->findAll());
	}

	public function getByCategory() {
		$categoryId = $this->input->get('category_id');
		echo json_encode($this->cm->findGeneric(array('category_id' => $categoryId)));	
	}

	public function id($id) {
		echo json_encode($this->cm->findById($id));
	}
}