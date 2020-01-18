<?php

class Login extends CI_Controller {

  public function index(){
    if($this->session->userdata('user_id')== 0){
    $this->load->view('common/header');
    $this->load->view('Logins');
    $this->load->view('common/footer');
    }
    else {
    $data['user']=$this->Login_model->getUserById($this->session->userdata('user_id'));
    $this->load->view('common/header');
    $this->load->view('user_dashboard',$data);
    $this->load->view('common/footer');
    }    
  }
  public function  user_address(){
    $data= $this->input->post();
    $update_data=array('user_fullname'=>$data['full_name'],'user_email'=>$data['email']);
    $this->db->where('user_id',$this->session->userdata('user_id'));
    if($this->db->insert('users',$update_data)){
      $data['user']=$this->Login_model->getUserById($this->session->userdata('user_id'));
      $this->load->view('common/header');
      $this->load->view('user_dashboard',$data);
      $this->load->view('common/footer');
    }
  }

  public function forget_password(){
    $this->load->view('common/header');
    $this->load->view('forget_password');
    $this->load->view('common/footer');

  }


  public function test(){
    print_r($this->session->userdata('user_id'));
  }


  public function process(){  
    $user = $this->input->post('user');  
    $pass = $this->input->post('pass');  
    if($this->Login_model->varification($user,$pass)){
    $data['user']=$this->Login_model->getUserById($this->session->userdata('user_id'));
    $data['product_delivered']= $this->User_dashboard->getData();
     $this->load->view('common/header');
    $this->load->view('user_dashboard',$data);
    $this->load->view('common/footer');
    }
    else {
    $data['result']='Incorrect password';
     $this->load->view('common/header');
    $this->load->view('Logins',$data);
    $this->load->view('common/footer');
    }
  }


   public function address(){
      $address=$this->input->post();
      if(!empty($this->session->userdata('user_id'))) {
      $data=array('user_id'=>$this->session->userdata('user_id'),'Address1'=>$address['address1'],'Address2'=>$address['address2'],'City'=>$address['city'],'State'=>$address['state'],'Pincode'=>$address['pincode']);
      if($this->db->insert('user_address',$data)){
        $data['product_delivered']= $this->User_dashboard->getData();
        $data['user']=$this->Login_model->getUserById($this->session->userdata('user_id'));
        $this->load->view('common/header');
        $this->load->view('user_dashboard',$data);
        $this->load->view('common/footer');
        }
      }
   }

    public function delete(){
      $id=$this->uri->segment(3);
      $this ->db->where('id', $id);
      $this ->db->delete('user_address');
      $data['user']=$this->Login_model->getUserById($this->session->userdata('user_id'));
      $this->load->view('common/header');
      $this->load->view('user_dashboard',$data);
      $this->load->view('common/footer');
   }

    public function testing(){
      print_r($this->session->userdata('user_id'));
    }

    public function signUp(){
      $this->load->view('common/header');
      $this->load->view('signUp');
      $this->load->view('common/footer');
    }


    public function track(){
      $this->load->view('common/header');
      $this->load->view('Track');
      $this->load->view('common/footer');
    }

    public function FAQ(){
      $this->load->view('common/header');
      $this->load->view('FAQ');
      $this->load->view('common/footer');

    }

    public function edit(){
      $id=$this->uri->segment(3);
      $this->db->select('*');
      $this->db->from('user_address');
      $this->db->where('id',$id);
      $data['edit']=$this->db->get()->result_array();
      $data['status']='edit';
      $data['user']=$this->Login_model->getUserById($this->session->userdata('user_id'));
      $this->load->view('common/header');
      $this->load->view('user_dashboard',$data);
      $this->load->view('common/footer');
    }

    public function update_address(){
      $data=$this->input->post();
      $update_address=array('Address1'=>$data['address1'],'Address2'=>$data['address2'],'City'=>$data['city'],'State'=>$data['state'],'Pincode'=>$data['pincode']);
      $this->db->where(array('id'=>$data['id']));
      if($this->db->update('user_address',$update_address)){
        $data['user']=$this->Login_model->getUserById($this->session->userdata('user_id'));
        $data['result']= 'user updated sucessfully';
        $this->load->view('common/header');
        $this->load->view('user_dashboard',$data);
        $this->load->view('common/footer');
      }
    }


    public function forget(){
      $email=$this->input->post('email');
      if(!empty($email)){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('user_email'=>$email));
        $result=$this->db->get()->result_array();
         if(count($result)>0) {
      //config
      $config['protocol'] = 'smtp';
      $config['smtp_host'] = 'ssl://smtp.googlemail.com';
      $config['smtp_port'] = 465;
      $config['smtp_user'] = 'Gopalsh98598@gmail.com';
      $config['smtp_pass'] = '3d6h9l12v';
      $config['mailtype'] = 'html';
      
      $this->load->library('email', $config);
      $this->email->from('Gopalsh98598@gmail.com', 'Identification');
      $this->email->to('$email');
      $this->email->subject('Reset Password Link');
      //$Otp = mt_rand(100000, 999999);
      $Link = base_url()."login/resetPassword548377043/".base64_encode($email);
      $this->email->message('<html>
        <head>
          <title>Reset Password Link</title>
        </head>
        <body>          
          <p>Your Account:</p>
          <p>Email: ".$email."</p>          
          <p>Please click the link below to reset your password.</p>
          <h4><a href="$Link">Reset password</a></h4>
        </body>
        </html>');

      if ($this->email->send()) {
        echo 'please check you email';
      } else {
        echo 'unable to send link';
      }
    }else {
      echo '<p style="color:red;">Unknown Email Address</p>';
    }
    }

    }


    public function resetPassword548377043(){
      $decode = $this->uri->segment(3);
      $d=base64_decode($decode);
      $this->db->select('user_id');
      $this->db->from('users');
      $this->db->where('user_email',$d);
      $result=$this->db->get()->row();
      $this->session->set_userdata('change_user',$result->user_id);
      $this->load->view('common/header');
      $this->load->view('change_password');
      $this->load->view('common/footer');
    }

    public function changePassword(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('password1', 'New Password', 'required');
      $this->form_validation->set_rules('password2', 'Confirm Password', 'required|matches[password1]');
      if ($this->form_validation->run() == FALSE){
        $this->load->view('common/header');
        $this->load->view('change_password');
        $this->load->view('common/footer');
      }else{
        $data=$this->input->post();
        $new_data=array('user_password'=>md5($data['password1']));
        $this->db->where(array('user_id'=>$data['user_id']));
      if($this->db->update('users',$new_data)){
        $data['result']= 'password changed';
        $this->load->view('common/header');
        $this->load->view('change_password',$data);
        $this->load->view('common/footer');
        }
      }
    }


    public function signUpProcess(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation'); 
      $this->data = $this->input->post();
      $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $code = substr(str_shuffle($set), 0, 12);
      $user= array('user_name'=>$this->data['user_name'],'user_email'=>$this->data['user_email'],'user_phone'=>$this->data['user_phone'],'user_fullname'=>$this->data['user_full'],'user_password'=>md5($this->data['user_spassword']),'user_bdate'=>$this->data['user_birth'],'varification_code'=>$code,'user_city'=>$this->data['user_city']);
      $this->form_validation->set_rules('user_name', 'Username', 'required');
      $this->form_validation->set_rules('user_email', 'Email', 'required');
      $this->form_validation->set_rules('user_phone', 'Phone Number', 'required');
      $this->form_validation->set_rules('user_full', 'Full Name', 'required');
      $this->form_validation->set_rules('user_birth', 'User Birth Day', 'required');
      $this->form_validation->set_rules('user_city', 'User City', 'required');
      $this->form_validation->set_rules('user_spassword', 'Password ', 'required');
      $this->form_validation->set_rules('user_cpassword', 'Password Confirmation', 'required|matches[user_spassword]');
      if ($this->form_validation->run() == FALSE){
        $this->load->view('common/header');
        $this->load->view('Logins');
        $this->load->view('common/footer');
      }else{
        $this->db->where('user_email', $this->input->post('user_email'));
        $query = $this->db->get('users');
        $count_row = $query->num_rows();
        if ($count_row > 0) {
          $data['result']='Email is already exists';
          $data['status']=false;
          $this->session->set_flashdata('message','');
          $this->load->view('common/header');
          $this->load->view('Logins',$data);
          $this->load->view('common/footer');
        } else {
          if($this->Login_model->saveUser($user)){
          $data['result']='User Added Sucessfully';
          $data['status']=false;
          $this->load->view('common/header');
          $this->load->view('Logins',$data);
          $this->load->view('common/footer');
          }else {
            $data['result']= 'Unable To Add User';
            $data['status']=true;
            $this->load->view('common/header');
            $this->load->view('Logins',$data);
            $this->load->view('common/footer');
          }
          
          $this->db->select('user_id');
          $this->db->from('users');
          $this->db->order_by("user_id", "desc");
          $result= $this->db->get()->row();
          $id = $result->user_id+1;
          $config['protocol'] = 'smtp';
          $config['smtp_host'] = 'ssl://smtp.googlemail.com';
          $config['smtp_port'] = 465;
          $config['smtp_user'] = 'Gopalsh98598@gmail.com';
          $config['smtp_pass'] = '3d6h9l12v';
          $config['mailtype'] = 'html';
          $message =   "
              <html>
              <head>
                <title>Verification Code</title>
              </head>
              <body>
                <h2>Thank you for Registering.</h2>
                <p>Your Account:</p>
                <p>Email: ".$this->data['user_email']."</p>
                <p>Password: ".$this->data['user_spassword']."</p>
                <p>Please click the link below to activate your account.</p>
                <h4><a href='".base_url()."login/activate/".$id.'/'.$code."'>Activate My Account</a></h4>
              </body>
              </html>
              ";
          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from($config['smtp_user']);
          $this->email->to($this->data['user_email']);
          $this->email->subject('Signup Verification Email');
          $this->email->message($message);
          if($this->email->send()){
           $this->session->set_flashdata('message','Activation code sent to email');
          }else{
            $this->session->set_flashdata('message', $this->email->print_debugger());
          }     
        }
      }
    }

    public function activate(){
      $this->load->Model('User');
      $id =  $this->uri->segment(3);
      $code = $this->uri->segment(4);
      $user = $this->User->getUser($id);
      if($user['varification_code'] == $code){
        $data['is_email_varified'] = 1;
        $query = $this->User->activate($data, $id);
        if($query){
          redirect('login');
        }else{
        }
      }else{
        $this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
      } 
    }
    // public function signUpProcess1(){
    //   $this->load->helper(array('form', 'url'));         
    //   $this->data=$this->input->post();
    //   $first_name = $this->input->post('first_name');
    //   $last_name = $this->input->post('last_name');
    //   $user_fullname = $first_name . " " . $last_name;
    //   $email_address = $this->input->post('email_address');
    //   $password = $this->input->post('pass');

    //   $this->db->insert("users", array("user_fullname"=>$user_fullname,
    //      "user_email"=>$this->input->post("email_address"),
    //      "user_password"=>md5($password), 
    //       "user_login_status" => 1
    //     ));
    //   $user_id =  $this->db->insert_id();  
    //   $data["responce"] = true; 
    //   $data["message"] = "User Register Sucessfully..";
    //   redirect('/');
    // }

    public function logout(){
    $this->session->set_userdata('user_id',0);
      redirect('Login');
    }  
}