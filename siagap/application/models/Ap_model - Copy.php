<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ap_model extends CI_Model
{
	protected $table = 'ap';

	public function add($nom, $cnom, $categorieId, $creationDate, $superficie, 
			$contact, $vision, $mission, $objectif, $gestionnaireId, $other_gov,
			$nbr_voi, $area_voi, $message) {
		if (sizeof($this->findGeneric(array('name' => $nom )))>0) {
			return false;
		}
		return $this->db->set('name', $nom)
			        ->set('nom_complet', $cnom)
			        ->set('category_id', $categorieId)
			        ->set('creation_date', $creationDate)
			        ->set('area', $superficie)
			        ->set('contact', $contact)
			        ->set('mission', $mission)
			        ->set('vision', $vision)
			        ->set('objectif', $objectif)
			        ->set('gestionnaire_id', $gestionnaireId)
			        ->set('other_gov', $other_gov)
			        ->set('nbr_voi', $nbr_voi)
			        ->set('area_voi', $area_voi)
			        ->set('message', $message)
				    ->insert($this->table);
	}
	
	public function edit($id, $nom = null, $cnom = null, $categorieId = null, 
			$creationDate = null, $superficie = null, $contact = null, 
			$vision = null, $mission = null, $objectif = null, 
			$gestionnaireId = null, $other_gov = null, $nbr_voi = null, 
			$area_voi = null, $message = null) {

		//	Il n'y a rien à éditer
		if($nom == null AND $cnom == null AND $categorieId == null AND $creationDate == null 
				AND $superficie == null AND $contact == null AND $mission == null 
				AND $vision == null AND $objectif == null AND $gestionnaireId == null 
				AND $other_gov == null AND $nbr_voi == null AND $area_voi == null 
				AND $message == null) {
			return false;
		}

		//	Ces données seront échappées
		if($nom != null) {
			$this->db->set('name', $nom);
		}
		if($cnom != null) {
			$this->db->set('nom_complet', $cnom);
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
		if($objectif != null) {
			$this->db->set('gestionnaire_id', $gestionnaireId);
		}
		if($objectif != null) {
			$this->db->set('other_gov', $other_gov);
		}
		if($objectif != null) {
			$this->db->set('nbr_voi', $nbr_voi);
		}
		if($objectif != null) {
			$this->db->set('area_voi', $area_voi);
		}
		if($objectif != null) {
			$this->db->set('message', $message);
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

	public function editProcessus($id, $gestion=null, $protection=null, 
			$relation=null, $tourisme=null, $suivie=null) {

		//	Il n'y a rien à éditer
		if($gestion == null AND $protection == null AND $relation == null 
				AND $tourisme == null AND $suivie == null) {
			return false;
		}

		//	Ces données seront échappées
		if($gestion != null) {
			$this->db->set('gestion_interne', $gestion);
		}
		if($protection != null) {
			$this->db->set('protection', $protection);
		}
		if($relation != null) {
			$this->db->set('relation', $relation);
		}
		if($tourisme != null) {
			$this->db->set('tourisme', $tourisme);
		}
		if($suivie != null) {
			$this->db->set('suivie', $suivie);
		}
		$this->db->where('id', $id);
		return $this->db->update($this->table);
	}

	public function editImpacte($id, $impacte=null) {

		//	Il n'y a rien à éditer
		if($impacte == null) {
			return false;
		}
		$this->db->set('impact', $impacte);
		$this->db->where('id', $id);
		return $this->db->update($this->table);
	}

	public function editAp($id, $column, $valeur) {
		$this->db->set($column, $valeur);
		$this->db->where('id', $id);
		return $this->db->update($this->table);
	}

	public function editPhoto($id=null, $path=null) {

		//	Il n'y a rien à éditer
		if($id == null || $path == null) {
			return false;
		}
		$valiny = false;
		$this->db->trans_start();
		$this->db->set('link_photo', $path);
		$this->db->where('id', $id);
		if ($this->db->update($this->table)) {
			$valiny = $this->db->set('path', $path)
								->set('ap_id', $id)
								->set('comment', 'profil')
								->set('date', 'NOW()', false)
								->insert('photos');
		}
		$this->db->trans_complete();
		if ($valiny == false) {
			$valiny = $this->db->_error_message();
		}
		return $valiny;
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

	public function findDesc($nb = 10, $debut = 0)
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

	public function findGeneric($where = array(), $join = false, $join_table = array()) {
		$this->db->select('*, category.label as category_label, gestionnaire.label as gestionnaire_label, region.label as region_label')
				->from($this->table);
		// if ($join && sizeof($join_table)>=0) {
		// 	for ($i=0; $i < sizeof($join_table); $i++) { 
		// 		$this->db->join($join_table[$i], $join_table[$i].'.id='.$this->table.'.'
		// 			.$join_table[$i].'_id');
		// 	}
		// }
		$this->db->join('region', 'region.id='.$this->table.'.region_id');				
		$this->db->join('gestionnaire', 'gestionnaire.id='.$this->table.'.gestionnaire_id', 'left');				
		$this->db->join('category', 'category.id='.$this->table.'.category_id');				
		return $this->db->where($where)
				->get()
				->result();
	}
}


/* End of file Ap_model.php */
/* Location: ./application/models/Ap_model.php */