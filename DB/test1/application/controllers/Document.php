<?php


/**
 * Description of Document
 *
 * @author itischarles
 */
class Document extends MY_Controller {
   
    var $user_accessor;
    var $document_accessor;
    
    function __construct() {
	parent::__construct();
	
	$this->isAuthenticated();
	$this->user_accessor =  new User_model(); 
	$this->document_accessor =  new Document_Model(); 
    }
    
    
    
    /**
     * 
     * @param string $userUrl userul of the user you wish to view his/her document
     * if no usrl is given , use the url of the currently logged in user
     */
    function index($userUrl = ''){

	
	$userUrl = (empty($userUrl)? $this->currentUserBaseUrl : $userUrl);
	
	
      $this->list_documents($userUrl);
    }
    
    
    
       /**
     * view the clients' view
     * @param string $code client code
     */
    function list_documents($userUrl){
	
       if($this->user_accessor->canViewPage(false, $userUrl) === false):
           redirect(base_url());
       endif;
	//return false;
      $data['userDetails'] = $userDetails = $this->user_accessor->getUserByBaseurl($userUrl); 
       
      if(empty($userDetails)):
	   $this->session->set_flashdata('message', 'Client Not found');
	    $this->session->set_flashdata('type', 'flash_error');
	   redirect(base_url()); 
      endif;
       
       //$data['client'] = $client = $this->user_accessor->getUserByBaseurl($userUrl);
     
       $data['document_list'] = $this->document_accessor->listDocuments(array('users.userBaseUrl'=>$userUrl));
     
       $data['show_main_nav'] = true; 
        $data['page_title'] = $userDetails->userTtitle." ". $userDetails->userFirstName." ".$userDetails->userLastName.' : Documents';               
        $data['page'] = 'document/document_list';
        $this->load->view('template',$data);
    }
    
    
    
    
      /**
     * view document - register that a document has been viewed
     * @param type $user_id
     * @param type $project_id
     * @param type $attached_document_id
     */
    function view_documents($userUrl, $documentID){
	
     if($this->user_accessor->canViewPage(false, $userUrl) === false):
           redirect(base_url());
       endif;
	
      $data['userDetails'] = $userDetails = $this->user_accessor->getUserByBaseurl($userUrl); 
       
      if(empty($userDetails)):
	   $this->session->set_flashdata('message', 'Client Not found');
	    $this->session->set_flashdata('type', 'flash_error');
	   redirect(base_url()); 
      endif;
      
       //$data['client'] = $client = $this->user_accessor->getUserByBaseurl($userUrl);
       //$data['client'] = $userDetails;
       
       $where['users.userID'] = $userID = $userDetails->userID;      
       $where['documentID'] = $documentID;
       
       
      $doc =  $this->document_accessor->getReviewDocuments($where);
     // print_r($doc);
      //possible manipulation. redirecto error page
       if(empty($doc)):
            redirect('error/e404');
            exit();
            return false;
       endif;
       
       
       // mark this document is been viewed only if not for admin
       $activeUser = $this->user_accessor->getUserByID($this->currentUserID); 
       if($activeUser->role_roleID != 1):
        
            $view_history['viewedBy'] = $this->currentUserID;
            $view_history['document_documentID'] = $documentID;
            $view_history['docViewHistoryDate'] = date('Y-m-d H:i:s', strtotime('now'));
            $view_history['sourceIP'] = get_ip();
            $view_history['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
            
            $this->document_accessor->createDocsViewHistory($view_history);
            
	    
            $doc_viewed['docIsViewed'] = date('Y-m-d H:i:s', strtotime('now'));
            $doc_viewed_where['users_userID'] = $userID;           
            $doc_viewed_where['documentID'] = $documentID;
	    
             $this->document_accessor->updateAttachedDocs($doc_viewed_where, $doc_viewed);
       endif;
     
       
       redirect(base_url($doc->docPath));
    }
    
    
}
