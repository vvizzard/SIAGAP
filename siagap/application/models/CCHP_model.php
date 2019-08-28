<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CCHP_model extends CI_Model
{
	protected $table = 'cc_historique_precipitation';

	public function add($apId = null, $apLabel = null, $jan, $feb, $mar, $apr, $mai, $jun, $july, $aug, $sep, $oct, $nov, $dec)
	{
		if ($apLabel != null) {
			if (sizeof($this->findGeneric(array('ap_label' => $apLabel )))>0) {
				return false;
			}	else {
				$this->db->set('ap_label', $apLabel);
			}
		}
		if ($apId != null && $apId != -1) {
			if (sizeof($this->findGeneric(array('ap_id' => $apId )))>0) {
				return false;
			}	else {
				$this->db->set('ap_id', $apId);
			}
		}
		return $this->db->set('january', $jan)
			        ->set('february', $feb)
			        ->set('march', $mar)
			        ->set('april', $apr)
			        ->set('may', $mai)
			        ->set('june', $jun)
			        ->set('july', $july)
			        ->set('august', $aug)
			        ->set('septembre', $sep)
			        ->set('october', $oct)
			        ->set('november', $nov)
			        ->set('december', $dec)
				    ->insert($this->table);
	}

	public function editApId($id, $ap_id = null) {
		//	Il n'y a rien à éditer
		if($ap_id == null) {
			return false;
		}
		$this->db->set('ap_id', $ap_id);
		return $this->db->where('id', (int) $id)
				->update($this->table);
	}
	
	// public function edit($id, $label = null, $comment = null)
	// {
	// 	//	Il n'y a rien à éditer
	// 	if($label == null AND $comment == null)
	// 	{
	// 		return false;
	// 	}
		
	// 	//	Ces données seront échappées
	// 	if($label != null)
	// 	{
	// 		$this->db->set('label', $label);
	// 	}
	// 	if($comment != null)
	// 	{
	// 		$this->db->set('comment', $comment);
	// 	}
		
	// 	return $this->db->where('id', (int) $id)
	// 			->update($this->table);
	// }
	
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
				->order_by('id', 'asc')
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


/* End of file Level_model.php */
/* Location: ./application/models/Level_model.php */