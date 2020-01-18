<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
        $this->load->model('Filter');
    }
    
    function index(){
         $filter_product=$this->uri->segment(3);
         if($this->input->get('pincode'))
         {

           $pincode = $this->input->get('pincode');
           $data['category'] = $this->product->getCatogory();
           if($data['products']=$this->product->sortByPincode($pincode)){
           $this->load->view('common/header');
           $this->load->view('product',$data);
           $this->load->view('common/footer');
           }
           else {
            $this->load->view('common/header');
           $this->load->view('product',$data);
           $this->load->view('common/footer');
           }

         }
         else {
        $data = array();
        // Fetch products from the database
       
    
        $data['products'] = $this->product->getRows($filter_product);
        $data['category'] = $this->product->getCatogory();
        // Load the product list view
        $this->load->view('common/header');
        $this->load->view('product',$data);
        $this->load->view('common/footer');
        }
    }

    function rating_filter(){
        $id=$this->uri->segment(3);
      
        $this->db->select('products.*,product_review.*');
        $this->db->from('products');
         $this->db->join('product_review', 'product_review.product_id = products.product_id');
        $query = $this->db->where(array('product_review.rating'=>$id));
         
         $result = $query->get()->result_array();


           $data['products'] = $result;
        $data['category'] = $this->product->getCatogory();
        // Load the product list view
        $this->load->view('common/header');
        $this->load->view('product',$data);
        $this->load->view('common/footer');

        }
        
        // Return fetched data
       
    

    public function Search(){
        $search = $this->input->post('search_data');
        $data['products']=$this->product->search($search);
        $data['category'] = $this->product->getCatogory();

         $this->load->view('common/header');
        $this->load->view('product',$data);
        $this->load->view('common/footer');

    }


    public function sorting(){
        $value=$this->uri->segment(3);
        if($value==1){

            $data['products']= $this->product->popular($value);
            //$data['products']=$this->product->sortings($value);
            $data['category'] = $this->product->getCatogory();
            $this->load->view('common/header');
            $this->load->view('product',$data);
            $this->load->view('common/footer');
        }
        else {
       $data['products']=$this->product->sortings($value);
       $data['category'] = $this->product->getCatogory();
       $this->load->view('common/header');
       $this->load->view('product',$data);
       $this->load->view('common/footer');
       }

    }

    public function viewMore(){
          $data = array();
        // Fetch products from the database
       
    
        $data['products'] = $this->product->view_more();
        $data['category'] = $this->product->getCatogory();
        // Load the product list view
        $this->load->view('common/header');
        $this->load->view('product',$data);
        $this->load->view('common/footer');
    }

    public function product_review(){
        $data=$this->input->post();
        echo json_encode($data);
        if($this->product->review($data)){
            echo 'success';
        }
        else {
            echo 'failed';
        }
    
    }
    
    public function filter(){
         $url_data=$this->input->get();
        if(!empty($url_data['i'])){
           $data['products'] = $this->Filter->Price_filter($url_data['i'],$url_data['s'],$url_data['e']);  
        }
        else {
            $index='';
        $data['products'] = $this->Filter->Price_filter($index,$url_data['s'],$url_data['e']);
        }
        $data['category'] = $this->product->getCatogory();
        // Load the product list view
        $this->load->view('common/header');
        $this->load->view('product',$data);
        $this->load->view('common/footer');
    }

    public function rating(){
    	//product_id,rating_times

    	$data=$this->input->post();
        $user_id;
        $insert_data;
         //echo json_encode($data);
        if(!empty($this->session->userdata('user_id'))){
         $user_id=$this->session->userdata('user_id');

        }
    	//$this->db->select('*');
    	//$this->db->from('product_rating');
    	//$this->db->where('product_id',$data['product_id']);
    	//$result=$this->db->get()->result_array();
    	//echo json_encode($result);
        //echo json_encode($result[0]['rating_times']);
       // $new_rating_times=$result[0]['rating_times']+1;
        //echo $new_rating_times;
       // $new_total_ratings=$data['rating_times']+$result[0]['total_rating'];

        //echo $new_total_ratings;
    	//$update_data=array('rating_times'=>$new_rating_times,'total_rating'=>$new_total_ratings);
    	//echo json_encode($update_data);
        if($data['rating_times']==1){
          $insert_data=array('product_id'=>$data['product_id'],'user_id'=>$user_id,'one_rating'=>$data['rating_times'],'two_rating'=>0,'three_rating'=>0,'four_rating'=>0,'five_rating'=>0);
        }
        else if($data['rating_times']==2){
         $insert_data=array('product_id'=>$data['product_id'],'user_id'=>$user_id,'one_rating'=>0,'two_rating'=>$data['rating_times'],'three_rating'=>0,'four_rating'=>0,'five_rating'=>0);   
        }
        else if($data['rating_times']==3) {
         $insert_data=array('product_id'=>$data['product_id'],'user_id'=>$user_id,'one_rating'=>0,'two_rating'=>0,'three_rating'=>$data['rating_times'],'four_rating'=>0,'five_rating'=>0);      
        }
        else if($data['rating_times']==4){
         $insert_data=array('product_id'=>$data['product_id'],'user_id'=>$user_id,'one_rating'=>0,'two_rating'=>0,'three_rating'=>0,'four_rating'=>$data['rating_times'],'five_rating'=>0);         
        }
        else if($data['rating_times']==5){
        $insert_data=array('product_id'=>$data['product_id'],'user_id'=>$user_id,'one_rating'=>0,'two_rating'=>0,'three_rating'=>0,'four_rating'=>0,'five_rating'=>$data['rating_times']);
        }
        else {

        }
        //echo json_encode($insert_data);

        if($insert_data && !empty($this->session->userdata('user_id')) ){
            $this->db->select('product_id,user_id');
            $this->db->from('product_rating');
            $this->db->where(array('product_id'=>$insert_data['product_id'],'user_id'=>$insert_data['user_id']));
            $query=$this->db->get()->result_array();
            if(count($query)==0){
               $this->db->insert('product_rating',$insert_data);
            }
            else {
                $condition=array('product_id'=>$insert_data['product_id'],'user_id'=>$insert_data['user_id']);
                echo json_encode($condition);

                  $this->db->where(array('product_id'=>$insert_data['product_id'],'user_id'=>$insert_data['user_id']));
                 $this->db->update('product_rating',$insert_data);
                

            }

            
        }

     //    $insert_data=array('product_id'=>$data['product_id'],'user_id'=>$this->user_id,'')
    	//if($update_data){
           //$this->db->where('product_id',$data['product_id']);
         // if($this->db->update('products', $update_data)){
            	
     //        }

     //        //echo json_encode($update_data);

    	 	
    	// }
    	// echo json_encode($result);

    }

    public function Single_Product(){
        
        $id = $this->uri->segment(3);
       
         $data = array();
        // Fetch products from the database
         $data['products'] = $this->product->getRow($id);
          $data['product'] = $this->product->getRows();
         $data['reviews'] =  $this->product->getReviews($id);
         $datas  = $this->product->getRating($id);
        
         $total_rating_point=0;
          if(!empty($datas)){
         for($i=0;$i<count($datas);$i++){
            $amout=$datas[$i]['one_rating']+$datas[$i]['two_rating']+$datas[$i]['three_rating']+$datas[$i]['four_rating']+$datas[$i]['five_rating'];
          $total_rating_point+=$amout;
         }
         $data['average_ratings'] = $total_rating_point/count($datas);
         }else {
            $data['average_ratings'] = 0;
         }
         
        $this->load->view('common/header');
        $this->load->view('single_product',$data);
        $this->load->view('common/footer');
    }

    function addToCart($proID){
        
        // Fetch specific product by ID
        $product = $this->product->getRow($proID);
        
        // Add product to the cart
        $data = array(
            'id'    => $product['product_id'],
            'qty'    => 1,
            'price'    => $product['price'],
            'name'    => $product['product_name'],
            'image' => $product['product_image']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('cart/');
    }
    
}