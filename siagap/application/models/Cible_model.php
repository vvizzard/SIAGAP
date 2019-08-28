<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cible_model extends CI_Model
{
	protected $table = 'cible';

	public function add($label, $linkPhoto = null, $idCategory,$comment)
	{
		if (sizeof($this->findGeneric(array('label' => $label )))>0) {
			return false;
		}
		if ($linkPhoto != null) {
			$this->db->set('link_photo', $linkPhoto);
		}
		return $this->db->set('label', $label)
			        ->set('category_id', $idCategory)
			        ->set('comment', $comment)
				    ->insert($this->table);
	}
	
	public function edit($id, $label = null, $linkPhoto = null, $idCategory = null, $comment = null)
	{
		//	Il n'y a rien à éditer
		if($label == null AND $comment == null AND $linkPhoto == null AND $idCategory == null)
		{
			return false;
		}
		
		//	Ces données seront échappées
		if($label != null)
		{
			$this->db->set('label', $label);
		}
		if($comment != null)
		{
			$this->db->set('comment', $comment);
		}
		if($idCategory != null)
		{
			$this->db->set('category_id', $comment);
		}
		if($linkPhoto != null)
		{
			$this->db->set('link_photo', $linkPhoto);
		}
		
		return $this->db->where('id', (int) $id)
				->update($this->table);
	}
	
	public function delete($id)
	{
		return $this->db->where('id', (int) $id)
				->delete($this->table);
	}
	
	public function count($where = array())
	{
		return (int) $this->db->where($where)
				      ->count_all_results($this->table);
	}
		
	public function find($nb = 10, $debut = 0)
	{
		return $this->db->select('*')
				->from($this->table)
				->limit($nb, $debut)
				->order_by('id', 'desc')
				->get()
				->result();
	}

	public function findAll()
	{
		return $this->db->select('*')
				->from($this->table)
				->order_by('id', 'desc')
				->get()
				->result();
	}

	public function findNameByName($label = "", $nb = 10, $debut = 0)
	{
		return $this->db->select('label')
				->from($this->table)
				->limit($nb, $debut)
				->order_by('id', 'desc')
				->where('LOWER(label) LIKE LOWER("%'.$label.'%")')
				->get()
				->result();
	}
	
	public function findByName($label = "", $nb = 10, $debut = 0)
	{
		return $this->db->select('*')
				->from($this->table)
				->limit($nb, $debut)
				->order_by('id', 'desc')
				->where('LOWER(label) like LOWER("%'.$label.'%")')
				->get()
				->result();
	}

	public function findGeneric($where = array())
	{
		return $this->db->select('*')
				->from($this->table)
				->order_by('id', 'desc')
				->where($where)
				->get()
				->result();
	}
}


/* End of file Cible_model.php */
/* Location: ./application/models/Cible_model.php */