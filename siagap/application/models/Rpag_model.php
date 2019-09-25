<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rpag_model extends CI_Model
{
	protected $table = 'rpag';

	public function add($apId = null, $debut, $duree = 5, $comment = '') {
		if (sizeof($this->findGeneric(array('debut' => $debut )))>0) {
			return false;
		}
		if ($apId != null) {
			$this->db->set('ap_id', $apId);
		}
		return $this->db->set('debut', $debut)
								->set('duree', $duree)
			        	->set('comment', $comment)
				    		->insert($this->table);
	}

	public function edit($id, $apId = null, $debut, $duree = 5, $comment = '') {
		//	Il n'y a rien à éditer
		if($id == null || ($apId == null AND $debut == null AND $duree == null AND $comment == null)) {
			return false;
		}
		
		//	Ces données seront échappées
		if($apId != null) {
			$this->db->set('ap_id', $apId);
		}
		if($debut != null) {
			$this->db->set('debut', $debut);
		}
		if($duree != null) {
			$this->db->set('duree', $duree);
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

	public function findAll() {
		return $this->db->select('*')
				->from($this->table)
				->order_by('id', 'desc')
				->get()
				->result();
	}

	public function findGeneric($where = array()) {
		return $this->db->select('*')
				->from($this->table)
				->order_by('id', 'desc')//used by GetFullById
				->where($where)
				->get()
				->result();
	}
}
