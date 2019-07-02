<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PressionCause_model extends CI_Model
{
	protected $table = 'pression_cause';

	public function add($apId, $susbsistanceId, $problemId, $pressionId, $comment = "") {
		if (sizeof($this->findGeneric(array('ap_id' => $apId, 
			'subsistance_id' => $susbsistanceId, 'problem_id' => $problemId, 
			'pression_id' => $pressionId )))>0) {
			return false;
		}
		return $this->db->set('ap_id', $apId)
			        ->set('subsistance_id', $susbsistanceId)
			        ->set('problem_id', $problemId)
			        ->set('pression_id', $pressionId)
			        ->set('comment', $comment)
				    	->insert($this->table);
	}
	
	public function edit($id, $apId = null, $pressionId = null, $comment = null) {
		//	Il n'y a rien à éditer
		if($apId == null AND $pressionId == null AND $comment == null) {
			return false;
		}
		
		//	Ces données seront échappées
		if($apId != null) {
			$this->db->set('ap_id', $apId);
		}
		if($pressionId != null) {
			$this->db->set('pression_id', $pressionId);
		}
		if($comment != null) {
			$this->db->set('comment', $comment);
		}
		
		return $this->db->where('id', (int) $id)
				->update($this->table);
	}
	
	public function delete($id) {
		return $this->db->where('id', (int) $id)
				->delete($this->table);
	}

	public function deleteByAp($id) {
		return $this->db->where('ap_id', (int) $id)
				->delete($this->table);
	}
	
	public function count($where = array()) {
		return (int) $this->db->where($where)
				      ->count_all_results($this->table);
	}
		
	public function find($nb = 10, $debut = 0) {
		return $this->db->select('*')
				->from($this->table)
				->limit($nb, $debut)
				->order_by('id', 'desc')
				->get()
				->result();
	}

	public function findGeneric($where = array(), $join = false, $join_table = array()) {
		$this->db->select('*, pression.label as pression_label, problem.label as problem_label, subsistance.label as subsistance_label')
				->from($this->table);
		if ($join && sizeof($join_table)>=0) {
			for ($i=0; $i < sizeof($join_table); $i++) { 
				$this->db->join($join_table[$i], $join_table[$i].'.id='.$this->table.'.'
					.$join_table[$i].'_id');
			}
		}
		return $this->db->where($where)
				->get()
				->result();
	}
}

/* End of file PressionCause_model.php */
/* Location: ./application/models/PressionCause_model.php */