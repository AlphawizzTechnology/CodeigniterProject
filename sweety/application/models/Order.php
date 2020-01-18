<?php
class Order extends CI_Model {

		public function InsertOder($id){
		$query = $this->db->get_where('users',array('user_id'=>$id));
		return $query->row_array();
	}
}