<?php 


class Filter extends CI_Model {
	 public function Price_filter($index='',$first,$second){
	 	
      $this->db->select("*");
      $this->db->from('products');
      $this->db->where('price >=', $first);
      $this->db->where('price <=',$second);
      if(!empty($index)){
      	$this->db->where('category_id',$index);

      }
      //  $this->query="select * from `products` where price>=$first && price <=$second";
       
      // $this->db->query($this->query);
      $result=$this->db->get()->result_array();

      return !empty($result)?$result:false;
  }
}