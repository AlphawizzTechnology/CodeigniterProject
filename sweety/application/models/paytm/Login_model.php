<?php 

class Login_model extends CI_Model {
	public function varification($user,$pass){
		$pass=md5($pass);
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where(array('user_email'=>$user,'user_password'=>$pass));
      $result=$this->db->get()->result();
      if(count($result)){
             $this->session->set_userdata('user_id',$result[0]->user_id );
         return true;
      }
      else {
      	return false;
      }
	}


      public function getUserById($id){
         $this->db->select("*");
         $this->db->from('users');
         $this->db->where('user_id',$id);
         $user_data=$this->db->get()->result_array();
         return $user_data;

      }

      public function saveUser($data){

         if($this->db->insert('users',$data)){
            return true;
         }
         else {
            return false;
         }
      }
}