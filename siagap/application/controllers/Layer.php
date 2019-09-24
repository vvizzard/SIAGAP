<?php

class Layer extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('layer_model', 'cat');
		$this->load->library('upload');
	}

	function upload_file() {

		$apId = $this->input->get('apId');

    //upload file
    $config['upload_path'] = FCPATH . 'assets' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR 
    		. 'geojson'. DIRECTORY_SEPARATOR;
    $config['allowed_types'] = '*';
    $config['max_filename'] = '255';
    $config['encrypt_name'] = TRUE;
    $config['max_size'] = '8192'; //1 MB

    if (isset($_FILES['geojson']['name'])) {
     	if (0 < $_FILES['geojson']['error']) {
          echo json_encode(array('result' => false, 'error' => 'Error during file upload' . $_FILES['geojson']['error']));
      } else {
        if (file_exists(FCPATH . 'assets/upload/geojson/' . $_FILES['geojson']['name'])) {
        	echo json_encode(array('result' => false, 'error' => 'File already exists'));
        } else {
          $this->load->library('upload');
          $this->upload->initialize($config);
          if (!$this->upload->do_upload('geojson')) {
          	echo json_encode(array('result' => false, 'error' => $this->upload->display_errors()));
          } else {
          	$data = array('upload_data' => $this->upload->data());
						if ($this->cat->add($apId, $data['upload_data']['file_name'])) {
							echo json_encode(true);
						} else {
							echo json_encode(array('result' => false, 'error' => 'Database error'));
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
	
	public function autocomplete() {
		$q = $this->input->get('q');
		$data = $this->cat->findByName($q);
		$json = array();
		for ($i=0; $i < sizeof($data); $i++) { 
			$json[] = $data[$i]->label;
		}
		echo json_encode( $json );
	}

	public function all() {	
		echo json_encode($this->cat->find());
	}

	public function ap($idAP) {
		$layers = $this->cat->findByAp($idAP);
		$valiny = $layers[sizeof($layers)-1]->geojson;
		$geojson = file_get_contents('assets/upload/geojson/'.$valiny, FILE_USE_INCLUDE_PATH);
		$json = json_decode($geojson, true);
		echo json_encode($json);
	}

	public function ap_category($idCat) {
		$valiny = $this->cat->findByCategory(array('ap.category_id' => $idCat, 'activate' => 1));
		$valiny_farany = array();
		for ($i=0; $i < sizeof($valiny); $i++) { 
			$geojson = file_get_contents('assets/upload/geojson/'.$valiny[$i]->geojson, FILE_USE_INCLUDE_PATH);
			$json = json_decode($geojson, true);

			$arrayName = array('metadata' => $valiny[$i], 'geojson' => $json);
			$valiny_farany[] = $arrayName;
		}
		echo json_encode($valiny_farany);
	}

	public function ap_gestionnaire($idGestionnaire) {
		$valiny = $this->cat->findByGestionnaire(array('ap.gestionnaire_id' => $idGestionnaire, 'activate' => 1));
		$valiny_farany = array();
		for ($i=0; $i < sizeof($valiny); $i++) {
			$geojson = file_get_contents('assets/upload/geojson/'.$valiny[$i]->geojson, FILE_USE_INCLUDE_PATH);
			$json = json_decode($geojson, true);

			$arrayName = array('metadata' => $valiny[$i], 'geojson' => $json);
			$valiny_farany[] = $arrayName;
		}
		echo json_encode($valiny_farany);
	}

	public function ap_subsistance($idSubsistance) {
		$valiny = $this->cat->findBySubsistance(array('association_ap_subsistance.subsistance_id' => $idSubsistance, 'activate' => 1));
		$valiny_farany = array();
		for ($i=0; $i < sizeof($valiny); $i++) {
			$geojson = file_get_contents('assets/upload/geojson/'.$valiny[$i]->geojson, FILE_USE_INCLUDE_PATH);
			$json = json_decode($geojson, true);

			$arrayName = array('metadata' => $valiny[$i], 'geojson' => $json);
			$valiny_farany[] = $arrayName;
		}
		echo json_encode($valiny_farany);
	}

	public function ap_pression($idPression) {
		$valiny = $this->cat->findByPression(array('association_ap_pression.pression_id' => $idPression, 'activate' => 1));
		$valiny_farany = array();
		for ($i=0; $i < sizeof($valiny); $i++) {
			$geojson = file_get_contents('assets/upload/geojson/'.$valiny[$i]->geojson, FILE_USE_INCLUDE_PATH);
			$json = json_decode($geojson, true);

			$arrayName = array('metadata' => $valiny[$i], 'geojson' => $json);
			$valiny_farany[] = $arrayName;
		}
		echo json_encode($valiny_farany);
	}

	public function set() {
		$apId = $this->input->post('apId');
		$geojson = $this->input->post('geojson');
		if ($this->cat->add($apId, $geojson)) {
			echo json_encode(true);
		} else {
			echo json_encode(false);
		}
	}
}