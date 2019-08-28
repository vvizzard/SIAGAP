<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StatApMenace_model extends CI_Model
{
	protected $table = 'stat_ap_menace';

	public function add($aapcId, $value, $year, $fiabilite, $comment = "") {
		if (sizeof($this->findGeneric(array('association_ap_pression_id' => $aapcId, 'year' => $year )))>0) {
			return false;
		}
		return $this->db->set('association_ap_pression_id', $aapcId)
			        ->set('value', $value)
			        ->set('year', $year)
			        ->set('fiabilite', $fiabilite)
			        ->set('comment', $comment)
				    ->insert($this->table);
	}
	
	public function edit($id, $aapcId = null, $value = null, $year = null, 
			$fiabilite = null, $comment = null) {
		//	Il n'y a rien à éditer
		if($aapcId == null AND $value == null AND $year == null AND 
				$fiabilite == null AND $comment == null) {
			return false;
		}
		
		//	Ces données seront échappées
		if($aapcId != null) {
			$this->db->set('association_ap_pression_id', $aapcId);
		}
		if($value != null) {
			$this->db->set('value', $value);
		}
		if($year != null) {
			$this->db->set('year', $year);
		}
		if($fiabilite != null) {
			$this->db->set('fiabilite', $fiabilite);
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

	public function findGeneric($where = array(), $join = false, $join_table = null) {
		$this->db->select('*')
				->from($this->table);
		if ($join && $join_table!=null) {
			$this->db->join($join_table,$join_table.'.id='.$this->table.'.'.$join_table.'_id');
		}
		return $this->db->where($where)
				->get()
				->result();
	}
}

/* End of file AssociationApCible_model.php */
/* Location: ./application/models/AssociationApCible_model.php */