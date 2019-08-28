<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gestionnaire_model extends CI_Model
{
	protected $table = 'gestionnaire';

	public function add($label, $comment)
	{
		return $this->db->set('label', $label)
			        ->set('comment', $comment)
				    ->insert($this->table);
	}
	
	public function edit($id, $label = null, $comment = null)
	{
		//	Il n'y a rien à éditer
		if($label == null AND $comment == null)
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
	
	public function findByName($label = "", $nb = 10, $debut = 0)
	{
		return $this->db->select('label')
				->from($this->table)
				->limit($nb, $debut)
				->order_by('id', 'desc')
				->where('LOWER(label) LIKE LOWER("%'.$label.'%")')
				->get()
				->result();
	}

	public function findAll()
	{
		return $this->db->select('*')
				->from($this->table)
				->order_by('label', 'asc')
				->get()
				->result();
	}
}


/* End of file Gestionnaire_model.php */
/* Location: ./application/models/Gestionnaire_model.php */