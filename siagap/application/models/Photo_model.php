<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo_model extends CI_Model
{
	protected $table = 'photos';

	public function add($path, $comment = '', $apId = null, $cibleId = null) {
		if (sizeof($this->findGeneric(array('path' => $path )))>0) {
			return false;
		}
		if ($apId != null) {
			$this->db->set('ap_id', $apId);
		} else if ($cibleId != null) {
			$this->db->set('cible_id', $cibleId);
		}
		return $this->db->set('path', $path)
			        	->set('comment', $comment)
			        	->set('date', 'NOW()', false)
				    		->insert($this->table);
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
				->order_by('id', 'desc')
				->where($where)
				->get()
				->result();
	}
}
