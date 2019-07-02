<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AssociationApLevel_model extends CI_Model
{
	protected $table = 'association_ap_level';

	public function add($apId, $levelId, $men=0, $women=0, $comment = null) {
		if (sizeof($this->findGeneric(array('ap_id' => $apId, 'level_id' => $levelId )))>0) {
			return false;
		}
		return $this->db->set('ap_id', $apId)
			        ->set('level_id', $levelId)
			        ->set('nbr_man', $men)
			        ->set('nbr_women', $women)
			        ->set('comment', $comment)
				    ->insert($this->table);
	}
	
	public function edit($id, $apId = null, $levelId = null, $men = null,
			$women = null, $comment = null) {
		//	Il n'y a rien à éditer
		if($apId == null AND $levelId == null AND $men == null AND 
				$women == null AND $comment == null) {
			return false;
		}
		
		//	Ces données seront échappées
		if($apId != null) {
			$this->db->set('ap_id', $apId);
		}
		if($levelId != null) {
			$this->db->set('level_id', $levelId);
		}
		if($men != null) {
			$this->db->set('nbr_man', $men);
		}
		if($women != null) {
			$this->db->set('nbr_women', $wonen);
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
		$this->db->select('*')
				->from($this->table);
		if ($join && $join_table!=null) {
			$this->db->join($join_table,$join_table.'.id='.$this->table.'.'.$join_table.'_id');
		}
		return $this->db->where($where)
				->get()
				->result();
	}
}

/* End of file AssociationApLevel_model.php */
/* Location: ./application/models/AssociationApLevel_model.php */