<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author itischarles
 */
class Admin extends MY_Controller {
   
    var $user_accessor;
    var $document_accessor;
    
    function __construct() {
	parent::__construct();
	
	$this->isAuthenticated();
	
	$this->user_accessor =  new User_model(); 
	$this->document_accessor =  new Document_Model(); 
    }
    
    
    function searchUsers(){
	
	
	$data['userDetails'] = $userDetails =  $this->user_accessor->getUserByID($this->currentUserID); 

	if($userDetails->role_roleID != 1):
	    $this->session->set_flashdata('message', 'Invalid selection detected');
	    $this->session->set_flashdata('type', 'flash_error');
	   redirect(base_url());
	     
	endif;

     
       $search_param  = ($this->input->get('search_param') ? $this->input->get('search_param') : ''); 

       $search_param = explode(' ', $search_param); 

       $search_param_part1 = $search_param[0];
       $search_param_part2 = (isset($search_param[1])? $search_param[1]:'');

	$where_search = array();

       if(!empty($search_param_part1)):
	    $where_search[] = "(users.userFirstName like '$search_param_part1%' OR "
			       ."users.userLastName like '$search_param_part1%' OR "
			       ."users.userReference like '$search_param_part1%' )";
       endif;

       if(!empty($search_param_part2)):
	     $where_search[] = "(users.userFirstName like '$search_param_part2%' OR "
			       ."users.userLastName like '$search_param_part2%' OR "
			       ."users.userReference like '$search_param_part2%' )";
       endif;


       $offset = ($this->input->get('offset')? $this->input->get('offset') : ''); 
       $per_page  = ($this->input->get('result_per_page')? $this->input->get('result_per_page') : 200);


	
	$config['base_url'] = base_url('admin/search');
	$config['total_rows'] = $data['db_total_rows'] = $this->user_accessor->searchUsers($where_search, false, false,true);	
	$config['per_page']         = $per_page;
        $config['num_links']	    = 10; 
        $config['next_link']        = 'Next';
	$config['prev_link']        = 'Prev';
        $config['next_tag_open']    = '<li class="nextPage">';
        $config['next_tag_close']   = '</li>';
        
        $config['prev_tag_open']    = '<li class="prevPage">';
        $config['prev_tag_close']   = '</li>';
        $config['cur_tag_open']     = "<li class='active'><a>";
        $config['cur_tag_close']    = "</a></li>";	
	$config['full_tag_open']    =  '<ul class="pagination">';
	$config['full_tag_close']    = '</ul>';
	$config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['page_query_string'] = TRUE;
	$config['query_string_segment'] = "offset";
	$config['reuse_query_string']  = TRUE;
	
	
        $this->pagination->initialize($config);  
     
	$data['searchList'] = $this->user_accessor->searchUsers($where_search, $per_page, $offset);
     
     
    
    $data['show_main_nav'] = true; 
     $data['page_title'] = 'Search Clients';               
     $data['page'] = 'admin/search_users';
     $this->load->view('template',$data);
    }
    
    
    
    
    
    
        
    //#########################################//
    /**
    * manually upload documents to clients profile
     * it is possible API/curl couldn't upload the docs based on size etc. lets do it manually
    */ 
    function manualUploadDocument(){
      
     $data['userDetails'] = $userDetails =  $this->user_accessor->getUserByID($this->currentUserID); 

	if($userDetails->role_roleID != 1):
	    $this->session->set_flashdata('message', 'Invalid selection detected');
	    $this->session->set_flashdata('type', 'flash_error');
	   redirect(base_url('logout'));
	     
	endif;
   
	
    if($this->input->post('upload')):
	
    $this->form_validation->set_rules('Reference', 'Client Reference', 'trim|required|validate_client');

    $this->form_validation->set_rules('file_name', 'File Name', 'trim|required');
    $this->form_validation->set_rules('date_added', 'Date Added', 'trim|required');
  
     $required = ( empty($_FILES['user_doc']['name']) ? "required" : "");           
    $this->form_validation->set_rules('user_doc', 'File', "$required");

    
    if($this->form_validation->run()):
        $fileName        = $this->input->post('file_name'); 
        $date_added      = changeDateFormat($this->input->post('date_added'), 'Y-m-d');        
        $Reference    =  $this->input->post('Reference'); 
        
	$client_details = $this->user_accessor->getUser_customWhere(array('userReference'=>$Reference));
	
	// make the directory
	$uploadPath = "client_docs/{$client_details->userID}";
	file_mkdir("$uploadPath");
	
	
	$config['upload_path'] = './'.$uploadPath.'/';
	$config['allowed_types'] = 'gif|jpg|png|pdf';
	$config['encrypt_name'] = TRUE;
	$config['remove_spaces'] = TRUE;

	$this->load->library('upload', $config);
        
	if ( ! $this->upload->do_upload('user_doc')):
            $data['upload_error'] = $this->upload->display_errors();                        
	else:
	   $upload_data =  $this->upload->data();
	  // print_r($upload_data);
	    $content['docName']  = $fileName;
	    $content['docPath']  = $uploadPath."/".$upload_data['file_name'];
	    $content['docType']  = $upload_data['image_type'];
	    $content['docSize'] = $upload_data['file_size'];
	    $content['docDateAdded']  = $date_added;
	    //$content['docIsViewed']  = 0;
	    $content['users_userID']  = $client_details->userID;
	    
	    $this->document_accessor->createAttachment($content);
	
	    $this->session->set_flashdata('message', 'Document Uploaded');
	     $this->session->set_flashdata('type', 'flash_success');
	   redirect(base_url('admin/manual-uploads')); 
	endif; 
	
    endif;
    
    
     endif; // end if posted
  
 
     $data['show_main_nav'] = true; 
     $data['page_title'] = 'Document Uploads';               
     $data['page'] = 'admin/manual_upload';
     $this->load->view('template',$data);
    }
    
    
    
}
