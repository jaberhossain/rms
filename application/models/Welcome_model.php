<?php
class Welcome_model extends CI_Model  
 {  
      public function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('login');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
    }
      public function register_user($user)
     {
 
 		$this->db->insert('login', $user);
	}
public function email_check($email){
 
  $this->db->select('*');
  $this->db->from('login');
  $this->db->where('email',$email);
  $query=$this->db->get();
 
  	if($query->num_rows()>0)
 	{
    	return false;
  	}
  	else
  	{
    	return true;
  	}
 
	}  
 }  
