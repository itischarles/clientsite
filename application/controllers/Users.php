<?php


/**
 * Description of Document
 *
 * @author itischarles
 */
class Users extends MY_Controller {
   
    var $user_accessor;
    var $document_accessor;
    
    function __construct() {
	parent::__construct();
	
	//$this->isAuthenticated();
	$this->user_accessor =  new User_model(); 
	$this->document_accessor =  new Document_Model(); 
    }
    
    
    
    
    function index($userUrl = ''){

	
	$userUrl = (empty($userUrl)? $this->currentUserBaseUrl : $userUrl);
	
	if($this->user_accessor->canViewPage(false, $userUrl) === false):
           redirect(base_url());
       endif;
	
      $data['userDetails'] = $userDetails = $this->user_accessor->getUserByBaseurl($userUrl); 
       
      if(empty($userDetails)):
	   $this->session->set_flashdata('message', 'Invalid Selection Detected');
	   $this->session->set_flashdata('type', 'flash_error');
	   redirect(base_url()); 
      endif;
	
	
       
     //  $data['client'] = $client = $this->user_accessor->getUserByBaseurl($userUrl);
       
	$data['show_main_nav'] = true; 
	$data['page_title'] = $userDetails->userTtitle." ". $userDetails->userFirstName." ".$userDetails->userLastName.' : Home';                            
	$data['page'] = 'user/view';
	$this->load->view('template',$data);

    }
    
    function dashboard(){
        $client_id = 1;
        $advisor_of_this_client = 1;
        $data['show_main_nav'] = true; 
	$data['page_title'] = "title";
	$data['page'] = 'user/dashboard';
	$this->load->view('template',$data);
    }
    
    function application(){
       
        $client_id = 1;
        $advisor_of_this_client = 1;
        $data['show_main_nav'] = true; 
	$data['page_title'] = "title";
	$data['page'] = 'user/application';
	$this->load->view('template',$data);
    }
    
    function investmentOptions(){
       
        $client_id = 1;
        $advisor_of_this_client = 1;
        $data['show_main_nav'] = true; 
	$data['page_title'] = "title";
	$data['page'] = 'user/investment_options';
	$this->load->view('template',$data);
    }
    
    function pensionTransfer(){
       
        $client_id = 1;
        $advisor_of_this_client = 1;
        $data['show_main_nav'] = true; 
	$data['page_title'] = "title";
	$data['page'] = 'user/pension_transfer';
	$this->load->view('template',$data);
    }
    
    function contribution(){
       
        $client_id = 1;
        $advisor_of_this_client = 1;
        $data['show_main_nav'] = true; 
	$data['page_title'] = "title";
	$data['page'] = 'user/contributions';
	$this->load->view('template',$data);
    }
    
 
}
