<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Paypal extends CI_Model{
        //get and return product rows
        public function getRows($id = ''){
            $this->db->select('product_id,product_name,product_image,price');
            $this->db->from('products');
            if($id){
                $this->db->where('product_id',$id);
                $query = $this->db->get();
                $result = $query->row_array();
            }else{
                $this->db->order_by('product_name','asc');
                $query = $this->db->get();
                $result = $query->result_array();
            }
            return !empty($result)?$result:false;
        }
        public function insertTransaction($data = array()){
            $insert = $this->db->insert('payments',$data);
            return $insert?true:false;
        }
    }
?>