<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ap_model extends CI_Model
{
	protected $table = 'ap';

	public function add($nom, $categorieId, $creationDate, $superficie, 
			$contact, $vision, $mission, $objectif) {
		if (sizeof($this->findGeneric(array('name' => $nom )))>0) {
			return false;
		}
		return $this->db->set('name', $nom)
			        ->set('category_id', $categorieId)
			        ->set('creation_date', $creationDate)
			        ->set('area', $superficie)
			        ->set('contact', $contact)
			        ->set('mission', $mission)
			        ->set('vision', $vision)
			        ->set('objectif', $objectif)
				    ->insert($this->table);
	}
	
	public function edit($id, $nom = null, $categorieId = null, 
			$creationDate = null, $superficie = null, $contact = null, 
			$vision = null, $mission = null, $objectif = null) {

		//	Il n'y a rien à éditer
		if($nom = null AND $categorieId = null AND $creationDate = null 
				AND $superficie = null AND $contact = null AND $mission = null 
				AND $vision = null AND $objectif = null) {
			return false;
		}

		//	Ces données seront échappées
		if($label != null) {
			$this->db->set('nom', $nom);
		}
		if($comment != null) {
			$this->db->set('category_id', $categorieId);
		}
		if($comment != null) {
			$this->db->set('creation_date', $creationDate);
		}
		if($comment != null) {
			$this->db->set('area', $superficie);
		}
		if($comment != null) {
			$this->db->set('contact', $contact);
		}
		if($comment != null) {
			$this->db->set('mission', $mission);
		}
		if($comment != null) {
			$this->db->set('vision', $vision);
		}
		if($comment != null) {
			$this->db->set('objectif', $objectif);
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

	// public function findNameByName($label = "", $nb = 10, $debut = 0)
	// {
	// 	return $this->db->select('label')
	// 			->from($this->table)
	// 			->limit($nb, $debut)
	// 			->order_by('id', 'desc')
	// 			->where('LOWER(label) LIKE LOWER("%'.$label.'%")')
	// 			->get()
	// 			->result();
	// }
	
	// public function findByName($label = "", $nb = 10, $debut = 0)
	// {
	// 	return $this->db->select('*')
	// 			->from($this->table)
	// 			->limit($nb, $debut)
	// 			->order_by('id', 'desc')
	// 			->where('LOWER(label) like LOWER("%'.$label.'%")')
	// 			->get()
	// 			->result();
	// }

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


/* End of file Ap_model.php */
/* Location: ./application/models/Ap_model.php */