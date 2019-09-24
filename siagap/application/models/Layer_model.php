<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layer_model extends CI_Model
{
	protected $table = 'layer';

	public function add($apId, $geojson) {
		$this->db->trans_start();
		$this->db->set('activate', 0)
						->where('ap_id', $apId)
  					->update($this->table);
		$this->db->set('ap_id', $apId)
		        ->set('geojson', $geojson)
		        ->set('activate', 1)
		        ->set('creation_date', 'NOW()', false)
			    	->insert($this->table);
		$this->db->trans_complete();
	}
	
	public function edit($id, $apId = null, $geojson = null)
	{
		//	Il n'y a rien à éditer
		if($apId == null AND $geojson == null)
		{
			return false;
		}
		
		//	Ces données seront échappées
		if($apId != null)
		{
			$this->db->set('ap_id', $apId);
		}
		if($geojson != null)
		{
			$this->db->set('geojson', $geojson);
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
				->order_by('label', 'asc')
				->get()
				->result();
	}
	
	public function findByAp($id)
	{
		return $this->db->select('*')
				->from($this->table)
				->where('activate = 1 and ap_id = '.$id)
				->get()
				->result();
	}

	public function findByCategory($where = array()) {
		$this->db->select('layer.*, ap.category_id, ap.name as name')
				->from($this->table);
		$this->db->join('ap', 'ap.id='.$this->table.'.ap_id');				
		return $this->db->where($where)
				->get()
				->result();
	}

	public function findByGestionnaire($where = array()) {
		$this->db->select('layer.*, ap.gestionnaire_id, ap.name as name')
				->from($this->table);
		$this->db->join('ap', 'ap.id='.$this->table.'.ap_id');				
		return $this->db->where($where)
				->get()
				->result();
	}

	public function findBySubsistance($where = array()) {
		$this->db->select('layer.*, subsistance.label as subsistance, subsistance.icon as icon, ap.name as name')
				->from($this->table);
		$this->db->join('ap', 'ap.id='.$this->table.'.ap_id');				
		$this->db->join('association_ap_subsistance', 'ap.id=association_ap_subsistance.ap_id');				
		$this->db->join('subsistance', 'subsistance.id=association_ap_subsistance.subsistance_id');				
		return $this->db->where($where)
				->get()
				->result();
	}

	public function findByPression($where = array()) {
		$this->db->select('layer.*, pression.label as pression, pression.icon as icon, ap.name as name')
				->from($this->table);
		$this->db->join('ap', 'ap.id='.$this->table.'.ap_id');
		$this->db->join('association_ap_pression', 'ap.id=association_ap_pression.ap_id');				
		$this->db->join('pression', 'pression.id=association_ap_pression.pression_id');				
		return $this->db->where($where)
				->get()
				->result();
	}

}


/* End of file layer_model.php */
/* Location: ./application/models/layer_model.php */