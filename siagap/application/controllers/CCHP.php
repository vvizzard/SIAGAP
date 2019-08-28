<?php

class CCHP extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('CCHP_model', 'im');
	}

	public function set() {
		$label = $this->input->post('label');
		$apid = $this->input->post('ap_id');
		$j = $this->input->post('ja');
		$f = $this->input->post('fe');
		$m = $this->input->post('ma');
		$a = $this->input->post('ap');
		$mai = $this->input->post('may');
		$jun = $this->input->post('jun');
		$jul = $this->input->post('jul');
		$aug = $this->input->post('aug');
		$sep = $this->input->post('sep');
		$oc = $this->input->post('oc');
		$no = $this->input->post('no');
		$de = $this->input->post('de');
		if ($this->im->add($apid, $label, $j, $f, $m, $a, $mai, $jun, $jul, $aug, $sep, $oc, $no, $de)==false) {
			echo json_encode(false);
		} else redirect('/Bo/cc');
	}

	public function complete() {
		$this->load->model('Ap_model', 'am');
		$aps = $this->am->findAll();
		foreach ($aps as $ap) {
			$ht = null;
			$ht = $this->im->findGeneric(array('ap_label'=>$ap->name));
			if ($ht != null) {
				if (!$this->im->editApId($ht[0]->id, $ap->id)) {
					return false;
				}
			}
		}
		return true;
	}

	public function all() {	
		echo json_encode($this->im->findAll());
	}

	public function find($idAP) {	
		$response = null;
		$response = $this->im->findGeneric(array('ap_id' => $idAP));
		if ($response != null && sizeof($response)>0) {
			echo json_encode($response);
		} else {
			echo json_encode(false);
		}
	}
}