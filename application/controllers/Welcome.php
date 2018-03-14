<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Welcome extends CI_Controller {  
      //functions  
      public function login()  
      	{  
           //http://localhost/tutorial/codeigniter/main/login  
           $data['title'] = 'RMS';  
           $this->load->view("login", $data);  
      	}  
      public function login_validation()  
      	{  
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('Welcome_model');  
                if($this->Welcome_model->can_login($username, $password))  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'index.php/welcome/home');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url() . 'index.php/welcome/login');  
                }  
           }  
      }
    public function register()
      {

      $this-> load->view('register');  
   	  }
	
	public function register_done()
	{
		 $user=array(
      'full_name'=>$this->input->post('fname'),
      'username'=>$this->input->post('uname'),
      'email'=>$this->input->post('email'),
      'password'=>md5($this->input->post('pass')),
      'age'=>$this->input->post('age'),
      'mobile'=>$this->input->post('mobile')
        );
        print_r($user);
 
		$email_check=$this->Welcome_model->email_check($user['email']);
 
	if($email_check)
		{
  			$this->Welcome_model->register_user($user);
  			$this->session->set_flashdata('success', 'Registered successfully.Now login to your account.');
  			redirect('welcome/login');
 
		}
	else
		{
 
  		$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  		redirect('welcome/register');
 		}
 
}	
	public function home()
	{
		$this->load->view('home');
	}

}