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
		if($nom == null AND $categorieId == null AND $creationDate == null 
				AND $superficie == null AND $contact == null AND $mission == null 
				AND $vision == null AND $objectif == null) {
			return false;
		}

		//	Ces données seront échappées
		if($nom != null) {
			$this->db->set('name', $nom);
		}
		if($categorieId != null) {
			$this->db->set('category_id', $categorieId);
		}
		if($creationDate != null) {
			$this->db->set('creation_date', $creationDate);
		}
		if($superficie != null) {
			$this->db->set('area', $superficie);
		}
		if($contact != null) {
			$this->db->set('contact', $contact);
		}
		if($mission != null) {
			$this->db->set('mission', $mission);
		}
		if($vision != null) {
			$this->db->set('vision', $vision);
		}
		if($objectif != null) {
			$this->db->set('objectif', $objectif);
		}
		$this->db->where('id', $id);
		return $this->db->update($this->table);
	}

	public function editContext($id, $region=null, $district=null, 
			$commune=null, $fokontany=null, $demographie=null) {

		//	Il n'y a rien à éditer
		if($region == null AND $district == null AND $commune == null 
				AND $fokontany == null AND $demographie == null) {
			return false;
		}

		//	Ces données seront échappées
		if($region != null) {
			$this->db->set('region_id', $region);
		}
		if($district != null) {
			$this->db->set('district', $district);
		}
		if($commune != null) {
			$this->db->set('commune', $commune);
		}
		if($fokontany != null) {
			$this->db->set('fokontany', $fokontany);
		}
		if($demographie != null) {
			$this->db->set('demography', $demographie);
		}
		$this->db->where('id', $id);
		return $this->db->update($this->table);
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
				->order_by('name', 'asc')
				->get()
				->result();
	}

	public function findAll()
	{
		return $this->db->select('*')
				->from($this->table)
				->order_by('name', 'asc')
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