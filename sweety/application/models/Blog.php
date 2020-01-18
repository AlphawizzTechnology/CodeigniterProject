<?php

class Blog extends CI_Model {
	public function comment($data){
		if($this->db->insert('user_comments',$data)){
			return true;
		}
		else {
			return false;
		}
    
	}

	public function getComments(){
		$this->db->select('*');
		$this->db->from('user_comments');
		$data=$this->db->get()->result_array();
		return $data;
		
	}
}