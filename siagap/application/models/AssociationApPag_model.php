<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AssociationApPag_model extends CI_Model
{
	protected $table = 'association_ap_pag';

	public function add($apId, $pagId, $comment = "") {
		if (sizeof($this->findGeneric(array('ap_id' => $apId, 'pag_id' => $pagId )))>0) {
			return false;
		}
		return $this->db->set('ap_id', $apId)
			        ->set('pag_id', $pagId)
			        ->set('comment', $comment)
				    ->insert($this->table);
	}
	
	public function edit($id, $apId = null, $pagId = null, $comment = null) {
		//	Il n'y a rien à éditer
		if($apId == null AND $pagId == null AND $comment == null) {
			return false;
		}
		
		//	Ces données seront échappées
		if($apId != null) {
			$this->db->set('ap_id', $apId);
		}
		if($pagId != null) {
			$this->db->set('pag_id', $pagId);
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

/* End of file AssociationApPag_model.php */
/* Location: ./application/models/AssociationApPag_model.php */