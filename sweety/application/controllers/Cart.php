<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
    }
    
    function index(){
        $data = array();
        // Retrieve cart data from the session
        $data['cartItems'] = $this->cart->contents();
        // Load the cart view
        $this->load->view('common/header');
        $this->load->view('cart/index', $data);
        $this->load->view('common/footer');
    }

    function coupon(){
    	if(!empty($this->session->userdata('user_id'))) {
    	$code = $this->input->post('code');

        $this->db->select('*');
        $this->db->from('coupons');
        $this->db->where('coupon_code',$code);
        $query=$this->db->get()->result_array();
    	// $insert_data=array('coupon_code'=>$code,'user_id'=>$this->session->userdata('user_id'));
    	// if($this->db->insert('product_coupon',$insert_data)){
    	// 	 $data = array();
        // Retrieve cart data from the session
        if(count($query)>0) {
             $data['cartItems'] = $this->cart->contents();

        $data['result']='Coupon Applied successfully';
        $data['coupon']= $query[0]['discount_value'];
        // Load the cart view
        $this->load->view('common/header');
        $this->load->view('cart/index', $data);
        $this->load->view('common/footer');

        }
        else {
            $data['cartItems'] = $this->cart->contents();

        $data['result']='Invalid Coupon';
        // Load the cart view
        $this->load->view('common/header');
        $this->load->view('cart/index', $data);
        $this->load->view('common/footer');


        }
       
    	}
       
       else {
        redirect('login');
       }

    
    }
    
    function updateItemQty(){
        $update = 0;
        
        // Get cart item info
        $rowid = $this->input->get('rowid');
        $qty = $this->input->get('qty');
        
        
        
        
        // Update item in the cart
        if(!empty($rowid) && !empty($qty)){
            $data = array(
                'rowid' => $rowid,
                'qty'   => $qty
            );
            $update = $this->cart->update($data);
        }
        
        // Return response
        if($this->cart->get_item($rowid)['subtotal']>0){
          echo $this->cart->get_item($rowid)['subtotal'];
        }
        else {
            echo '0';
        }
        //echo $this->cart->get_item($rowid)['subtotal'];
    }
    
    function removeItem($rowid){
        // Remove item from cart
        $remove = $this->cart->remove($rowid);
        
        // Redirect to the cart page
        redirect('cart/');
    }
    
}