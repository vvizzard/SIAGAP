<?php

class Ap extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('ap_model', 'am');
		$this->load->library('upload');
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
		$cnom = $this->input->post('c_nom');
		$categoryId = $this->input->post('categorie_id');
		$creationDate = $this->input->post('date_creation');
		$superficie = $this->input->post('superficie');
		$contact = $this->input->post('contact');
		$vision = $this->input->post('vision');
		$mission = $this->input->post('missiom');
		$objectif = $this->input->post('objectif');
		$gestionnaireId = $this->input->post('gestionnaire_id');
		$other_gov = $this->input->post('other_gov');
		$nbr_voi = $this->input->post('nbr_voi');
		$area_voi = $this->input->post('area_voi');
		$message = $this->input->post('message');
		if ($id == null) {
			if ($this->am->add($nom, $cnom, $categoryId, $creationDate, 
					$superficie, $contact, $vision, $mission, $objectif,
					$gestionnaireId, $other_gov, $nbr_voi, $area_voi, $message)==false) {
				echo json_encode(false);
			} else {
				echo json_encode($this->am->findDesc(1, 0)[0]->id);
			}
		} else {
			if ($this->am->edit($id, $nom, $cnom, $categoryId, $creationDate, 
					$superficie, $contact, $vision, $mission, $objectif,
					$gestionnaireId, $other_gov, $nbr_voi, $area_voi, $message)==false) {
				echo json_encode(false);
			} else {
				echo json_encode($id);
			}
		}
	}

	public function setcontext($id = null) {
		$region = $this->input->post('region');
		$district = $this->input->post('district');
		$commune = $this->input->post('commune');
		$fokontany = $this->input->post('fokontany');
		$demographie = $this->input->post('demographie');
		
		if ($id == null) {
			echo json_encode(array('status' => false, 
					'reason' => 'no id found'));
		} else {
			if ($this->am->editContext($id, $region, $district, $commune, 
				$fokontany, $demographie)==false) {
				echo json_encode(false);
			} else {
				echo json_encode($id);
			}
		}
	}

	public function setprocessus($id = null) {
		$gestion = $this->input->post('gestion');
		$protection = $this->input->post('protection');
		$relation = $this->input->post('relation');
		$tourisme = $this->input->post('tourisme');
		$suivie = $this->input->post('suivie');
		
		if ($id == null) {
			echo json_encode(array('status' => false, 
					'reason' => 'no id found'));
		} else {
			if ($this->am->editProcessus($id, $gestion, $protection, $relation, 
				$tourisme, $suivie)==false) {
				echo json_encode(false);
			} else {
				echo json_encode(true);
			}
		}
	}

	public function setImpacte($id = null) {
		$impacte = $this->input->post('impacte');
		
		if ($id == null) {
			echo json_encode(array('status' => false, 
					'reason' => 'no id found'));
		} else {
			if ($this->am->editImpacte($id, $impacte)==false) {
				echo json_encode(false);
			} else {
				echo json_encode(true);
			}
		}
	}

	public function setSubsistance($id = null) {
		$subsistance = $this->input->post('value');
		
		if ($id == null) {
			echo json_encode(array('status' => false, 
					'reason' => 'no id found'));
		} else {
			if ($this->am->editAp($id, 'subsistance', $subsistance)==false) {
				echo json_encode(false);
			} else {
				echo json_encode(true);
			}
		}
	}

	public function setPression($id = null) {
		$pression = $this->input->post('value');
		
		if ($id == null) {
			echo json_encode(array('status' => false, 
					'reason' => 'no id found'));
		} else {
			if ($this->am->editAp($id, 'pression', $pression)==false) {
				echo json_encode(false);
			} else {
				echo json_encode(true);
			}
		}
	}

	public function setProbleme($id = null) {
		$pression = $this->input->post('value');
		
		if ($id == null) {
			echo json_encode(array('status' => false, 
					'reason' => 'no id found'));
		} else {
			if ($this->am->editAp($id, 'probleme', $pression)==false) {
				echo json_encode(false);
			} else {
				echo json_encode(true);
			}
		}
	}

	public function setAPComponent($id = null) {
		$value = $this->input->post('value');
		$table = $this->input->post('table');
		
		if ($id == null) {
			echo json_encode(array('status' => false, 
					'reason' => 'no id found'));
		} else {
			if ($this->am->editAp($id, $table, $value)==false) {
				echo json_encode(false);
			} else {
				echo json_encode(true);
			}
		}
	}

	// Photo
	function upload_file($apId) {

		// $path = $this->input->post('path');

    //upload file
    $config['upload_path'] = FCPATH . 'assets' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR 
    		. 'img'. DIRECTORY_SEPARATOR;
    $config['allowed_types'] = '*';
    $config['max_filename'] = '255';
    $config['encrypt_name'] = TRUE;
    $config['max_size'] = '8192'; //1 MB

    if (isset($_FILES['photo']['name'])) {
     	if (0 < $_FILES['photo']['error']) {
          echo json_encode(array('result' => false, 'error' => 'Error during file upload' . $_FILES['photo']['error']));
      } else {
        if (file_exists(FCPATH . 'assets/upload/photo/' . $_FILES['photo']['name'])) {
        	echo json_encode(array('result' => false, 'error' => 'File already exists'));
        } else {
          $this->load->library('upload');
          $this->upload->initialize($config);
          if (!$this->upload->do_upload('photo')) {
          	echo json_encode(array('result' => false, 'error' => $this->upload->display_errors()));
          } else {
          	$data = array('upload_data' => $this->upload->data());
          	$temp = $this->am->editPhoto($apId, str_replace(str_replace('\\', '/', FCPATH), '', $data['upload_data']['full_path']));
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

 //  public function setPhoto($id = null) {
	// 	$path = $this->input->post('path');
		
	// 	if ($id == null) {
	// 		echo json_encode(array('status' => false, 
	// 				'reason' => 'no id found'));
	// 	} else {
	// 		if ($this->am->editPhoto($id, $path)==false) {
	// 			echo json_encode(false);
	// 		} else {
	// 			echo json_encode($id);
	// 		}
	// 	}
	// }
	// Fin Photo

	public function all() {	
		echo json_encode($this->am->find());
	}

	public function detail($id) {
		$table = array();
		$table[] = "region";
		$table[] = "category";
		$table[] = "gestionnaire";
		echo json_encode($this->am->findGeneric(array('ap.id' => $id), true, $table));
	}

	public function detail_by_category($id) {
		$table = array();
		$table[] = "region";
		$table[] = "category";
		$table[] = "gestionnaire";
		echo json_encode($this->am->findGeneric(array('ap.category_id' => $id), true, $table));
	}
}