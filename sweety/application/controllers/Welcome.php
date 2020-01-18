<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	  
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        // $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data = array();
        // Fetch products from the database
        $data['products'] = $this->product->getRows();
        
		$this->load->view('common/header');
		$this->load->view('welcome_message',$data);
		$this->load->view('common/footer');
	}
	public function product(){
		$this->load->view('common/header');
		$this->load->view('product');
		$this->load->view('common/footer');
	}
	public function shop(){
		$data['category'] = $this->product->getCatogory();
		$this->load->view('common/header');
		$this->load->view('product',$data);
		$this->load->view('common/footer');
	}
	public function aboutus(){
		$this->load->view('common/header');
		$this->load->view('aboutus');
		$this->load->view('common/footer');
	}
	public function blog(){
		$data['comments']=$this->Blog->getComments();
		$this->load->view('common/header');
		$this->load->view('blog',$data);
		$this->load->view('common/footer');
	}
	public function contact(){
		$this->load->view('common/header');
		$this->load->view('contact');
		$this->load->view('common/footer');
	}


    public function email(){
    	$this->load->library('email');
    	 $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.googlemail.com';
     $config['smtp_user']    = 'gopalsh022@gmail.com';
    $config['smtp_pass']    = '9977273287';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '7';
   
    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'text'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not      

    $this->email->initialize($config);


    $this->email->from('gopalsh022@gmail.com', 'hii');
    $this->email->to('gopalsh98598@gmail.com'); 

    $this->email->subject('Email Test');
    $this->email->message('Testing the email class.');  

    if($this->email->send()){
    	echo 'email sent';
    }
    else {

    echo $this->email->print_debugger();

   }
    }

	public function Commments(){
         $user_id=$this->session->userdata('user_id');

		$data=$this->input->post();

		$comment_data=array('user_id'=>$user_id,'name'=>$data['name'],'email'=>$data['email'],'comment'=>$data['comment']);
		if($this->Blog->comment($comment_data)){
			$data['comments']=$this->Blog->getComments();
			$this->load->view('common/header');
		$this->load->view('blog',$data);
		$this->load->view('common/footer');
		}
		
	}
}
