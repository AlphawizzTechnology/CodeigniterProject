<?php

class Detail extends CI_Controller {

  function  __construct() {
    parent::__construct();
    $this->load->library('paypal_lib');
    $this->load->library('cart');
  }
	public function index($data){

       if(!empty($this->session->userdata('user_id'))){
        $id=$this->uri->segment(4);

        $this->data['amount']=$id;
        $this->session->set_userdata('amount',$id);
        $this->load->view('common/header');
        $this->load->view('paytm/details',$this->data);
        $this->load->view('common/footer');
       }
       else {
        redirect('login');
       }

        
	}

	public function Payment(){
    $data['data']=$this->input->post();
    $this->load->view('common/header');
    $this->load->view('payment_option',$data);
    $this->load->view('common/footer');
		// $this->form_validation->set_rules('first_name', 'First Name', 'required');
  //       $this->form_validation->set_rules('last_name', 'Last Name', 'required');
  //       $this->form_validation->set_rules('company_name', 'Company Name', 'required');
  //       $this->form_validation->set_rules('street1', 'Street ', 'required');
  //       $this->form_validation->set_rules('street2', 'Street', 'required');
  //       $this->form_validation->set_rules('city_name', 'City Name', 'required');
  //       $this->form_validation->set_rules('amount', 'amount', 'required');
  //       $this->form_validation->set_rules('order_id', 'Order Id', 'required');
  //       $this->form_validation->set_rules('zip_code', 'Zip Code', 'required');
  //       $this->form_validation->set_rules('phone', 'Phone', 'required');
  //       $this->form_validation->set_rules('state_country', 'State Country', 'required');
  //       $this->form_validation->set_rules('email', 'Email', 'required');
  //       $this->form_validation->set_rules('delivery_date', 'Delivery Date', 'required');
  //       $this->form_validation->set_rules('industry_id', 'Industry Id', 'required');
  //       $this->form_validation->set_rules('customer_id', 'Customer Id', 'required');

  //     if ($this->form_validation->run() == FALSE)
  //       {
  //             $this->load->view('common/header');
  //           $this->load->view('paytm/details');
  //          $this->load->view('common/footer');
  //       }
  //       else
  //       {
        
  //       	$data['data']=$this->input->post();
  //              $this->load->view('common/header');
  //              $this->load->view('payment_option',$data);
  //              $this->load->view('common/footer');
  //       }
	}

  public function payyoumoneyredirection(){
    $data['data']=$this->cart->contents();
    $this->load->view('common/header');
    $this->load->view('payyoumoney/payyoumoney',$data);
    $this->load->view('common/footer');
  }

  public function submitpayment(){
    $returnURL = base_url().'paypal/success'; //payment success url
    $cancelURL = base_url().'paypal/cancel'; //payment cancel url
    $notifyURL = base_url().'paypal/ipn'; //ipn url
    $userID = 1; //current user id
    $logo = base_url().'assets/images/1-02.png';
    $this->paypal_lib->add_field('return', $returnURL);
    $this->paypal_lib->add_field('cancel_return', $cancelURL);
    $this->paypal_lib->add_field('notify_url', $notifyURL);
    $this->paypal_lib->add_field('item_name', 'test');
    $this->paypal_lib->add_field('custom', $userID);
    $this->paypal_lib->add_field('item_number',  '2');
    $this->paypal_lib->add_field('amount',  $this->input->post('amount'));        
    $this->paypal_lib->image($logo);
    $this->paypal_lib->paypal_auto_form();
  }
}