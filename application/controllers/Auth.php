<?php


/**
 * Description of Auth
 *
 * @author itischarles
 */
class Auth extends MY_Controller {
 
   
    
    function __construct() {
        parent::__construct();
        
	//$this->isAuthenticated();

    }
    
    
    
    
    
   /**
     * if user is logged in, redirect to dashboard
     * else redirect to login/auth page
     * if the user is ADmin, go to admin page.
     * if the user id just a client, go to clients page
     * @todo if user is adviser go to adviser page  
     */
    function index(){   
 
       $userDetails =  $this->user_accessor->getUserByID($this->currentUserID); 
      
       if($userDetails->role_roleID ==1):
           redirect(base_url('admin/search'));
	 
	    return false;
       endif;
       
       /**
        * @todo adviser redirect.
        */
 
       redirect(base_url('user/'.$userDetails->userBaseUrl."/documents"));
    }
    
    
    
      
    function login(){
    
	
         if($this->input->post('login')):
            
              $this->form_validation->set_rules('username', 'Username', 'required');
              $this->form_validation->set_rules('password', 'Password', 'required');
              $this->form_validation->set_error_delimiters( '<em class="error_text">','</em>' );
              
                if($this->form_validation->run()):
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                
                      if($this->user_accessor->login($username, $password) === true):
//                            // If requested a page that needed login - take them there!
                            $uri_string = $this->session->userdata('uri_string');
                                     
                            if($uri_string):
                                redirect(base_url().$this->session->userdata('uri_string'));
                            endif;
			 
                            redirect(base_url('auth/index'));
                      
                            exit();
                               
                        else:
			
                           $data['login_error'] =  'Invalid Username/Password'; 
                       endif;                  
                endif;             
         endif;
    
         
      //if you mistakenly find yourself here for whatever reason
      $this->user_accessor->logout_no_redirect();
     
     $data['page_title'] = 'Login';               
     $data['page'] = 'auth/login';
    $this->load->view('template',$data);
    }
    
    
    
    
    function reset_password(){
     $data['page'] = 'auth/reset_password';
     $this->load->view('template',$data);
    }
    
    
    public function logout() {
         $this->user_accessor->logout();
     
    }
}
