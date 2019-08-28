<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LvlUtilisateur_model extends CI_Model
{
	protected $table = 'lvl_user';

	public function add($label, $lvl) {
		return $this->db->set('label', $label)
			        ->set('lvl', $lvl)
				    ->insert($this->table);
	}

	// public function authenticate($login, $password) {
	// 	$valiny = $this->findGeneric(array('email' => $login, 'password' => crypt($password, '$6$rounds=1000$YobrSzktyStringz$')));
	// 	if ($valiny != null && sizeof($valiny)==1) {
	// 		return $valiny[0];
	// 	} else {
	// 		return false;
	// 	}
	// }
	
	// public function edit($id, $nom = null, $email = null, $password = null)
	// {
	// 	//	Il n'y a rien à éditer
	// 	if($nom == null AND $email == null AND $password == null) {
	// 		return false;
	// 	}
		
	// 	//	Ces données seront échappées
	// 	if($nom != null) {
	// 		$this->db->set('nom', $nom);
	// 	}
	// 	if($email != null) {
	// 		$this->db->set('email', $email);
	// 	}
	// 	if($password != null) {
	// 		$this->db->set('password', crypt($password, '$6$rounds=1000$YobrSzktyStringz$'));
	// 	}
	// 	return $this->db->where('id', (int) $id)
	// 			->update($this->table);
	// }
	
	// public function delete($id)
	// {
	// 	return $this->db->where('id', (int) $id)
	// 			->delete($this->table);
	// }
	
	// public function count($where = array())
	// {
	// 	return (int) $this->db->where($where)
	// 			      ->count_all_results($this->table);
	// }
		
	// public function find($nb = 10, $debut = 0)
	// {
	// 	return $this->db->select('*')
	// 			->from($this->table)
	// 			->limit($nb, $debut)
	// 			->order_by('id', 'desc')
	// 			->get()
	// 			->result();
	// }

	// public function findAll()
	// {
	// 	return $this->db->select('*')
	// 			->from($this->table)
	// 			->order_by('label', 'asc')
	// 			->get()
	// 			->result();
	// }
	
	public function findById($id) {
		return $this->db->select('*')
				->from($this->table)
				->where(array('id' => $id))
				->get()
				->result();
	}

	// public function findGeneric($where = array()) {
	// 	return $this->db->select('*')
	// 			->from($this->table)
	// 			->order_by('id', 'desc')
	// 			->where($where)
	// 			->get()
	// 			->result();
	// }
}


/* End of file utilisateur_model.php */
/* Location: ./application/models/utilisateur_model.php */