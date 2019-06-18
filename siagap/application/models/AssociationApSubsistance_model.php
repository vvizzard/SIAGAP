<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AssociationApSubsistance_model extends CI_Model
{
	protected $table = 'association_ap_subsistance';

	public function add($apId, $subsistanceId, $comment = "") {
		if (sizeof($this->findGeneric(array('ap_id' => $apId, 'subsistance_id' => $subsistanceId )))>0) {
			return false;
		}
		return $this->db->set('ap_id', $apId)
			        ->set('subsistance_id', $subsistanceId)
			        ->set('comment', $comment)
				    ->insert($this->table);
	}
	
	public function edit($id, $apId = null, $subsistanceId = null, $comment = null) {
		//	Il n'y a rien à éditer
		if($apId == null AND $subsistanceId == null AND $comment == null) {
			return false;
		}
		
		//	Ces données seront échappées
		if($apId != null) {
			$this->db->set('ap_id', $apId);
		}
		if($subsistanceId != null) {
			$this->db->set('subsistance_id', $subsistanceId);
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

	public function findGeneric($where = array()) {
		return $this->db->select('*')
				->from($this->table)
				->order_by('id', 'desc')
				->where($where)
				->get()
				->result();
	}
}


/* End of file AssociationApSubsistance_model.php */
/* Location: ./application/models/AssociationApSubsistance_model.php */