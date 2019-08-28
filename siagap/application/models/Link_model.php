<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link_model extends CI_Model
{
	protected $table = 'link_ext';

	public function add($apId, $link, $label = null, $comment=null) {
		if (sizeof($this->findGeneric(array('link' => $link )))>0) {
			return false;
		}
		return $this->db->set('link', $link)
			        ->set('label', $label)
			        ->set('ap_id', $apId)
			        ->set('comment', $comment)
				    	->insert($this->table);
	}
	
	public function edit($id, $apId = null, $link = null, $label = null, $comment = null) {
		//	Il n'y a rien à éditer
		if($apId == null AND $link == null AND $label == null AND $comment == null) {
			return false;
		}
		//	Ces données seront échappées
		if($link != null) {
			$this->db->set('link', $link);
		}
		if($label != null) {
			$this->db->set('label', $label);
		}
		if($comment != null) {
			$this->db->set('comment', $comment);
		}
		if($apId != null) {
			$this->db->set('ap_id', $apId);
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

	public function findNameByName($label = "", $nb = 10, $debut = 0) {
		return $this->db->select('label')
				->from($this->table)
				->limit($nb, $debut)
				->order_by('id', 'desc')
				->where('LOWER(label) LIKE LOWER("%'.$label.'%")')
				->get()
				->result();
	}
	
	public function findByName($label = "", $nb = 10, $debut = 0) {
		return $this->db->select('*')
				->from($this->table)
				->limit($nb, $debut)
				->order_by('id', 'desc')
				->where('LOWER(label) like LOWER("%'.$label.'%")')
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


/* End of file Link_model.php */
/* Location: ./application/models/Link_model.php */