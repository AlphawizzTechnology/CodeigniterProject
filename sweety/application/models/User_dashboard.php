<?php

class User_dashboard extends CI_Model {
	

	public function getData(){
		if($this->session->userdata('user_id')) {
		$this->db->select('*');
		$this->db->from('delivered_order');
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$query=$this->db->get()->result_array();
		return $query;
     
	}
}

}