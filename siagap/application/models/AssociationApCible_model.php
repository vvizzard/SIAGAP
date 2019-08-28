<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AssociationApCible_model extends CI_Model
{
	protected $table = 'association_ap_cible';

	public function add($apId, $cibleId, $comment = "") {
		if (sizeof($this->findGeneric(array('ap_id' => $apId, 'cible_id' => $cibleId )))>0) {
			return false;
		}
		return $this->db->set('ap_id', $apId)
			        ->set('cible_id', $cibleId)
			        ->set('comment', $comment)
				    ->insert($this->table);
	}
	
	public function edit($id, $apId = null, $cibleId = null, $comment = null) {
		//	Il n'y a rien à éditer
		if($apId == null AND $cibleId == null AND $comment == null) {
			return false;
		}
		
		//	Ces données seront échappées
		if($apId != null) {
			$this->db->set('ap_id', $apId);
		}
		if($cibleId != null) {
			$this->db->set('cible_id', $cibleId);
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

	public function findGeneric($where = array(), $join = false, $join_table = null) {
		if ($join && $join_table!=null) {
			$this->db->select($this->table.'.*, '.$join_table.'.label, '.$join_table.'.link_photo as link, '.$join_table.'.id as '.$join_table.'_id')
					->from($this->table);
		} else {
			$this->db->select('*')
					->from($this->table);
		}
		if ($join && $join_table!=null) {
			$this->db->join($join_table,$join_table.'.id='.$this->table.'.'.$join_table.'_id');
		}
		return $this->db->where($where)
				->get()
				->result();
	}
}

/* End of file AssociationApCible_model.php */
/* Location: ./application/models/AssociationApCible_model.php */