<?php

class User extends CI_Model {
	
		public function getUser($id){
		$query = $this->db->get_where('users',array('user_id'=>$id));
		return $query->row_array();
	

	}

	public function activate($data, $id){
		$this->db->where('users.user_id', $id);
		return $this->db->update('users', $data);
	}
}