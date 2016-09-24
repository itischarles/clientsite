<?php

/**
 * Description of Messages
 * client is able to send messages from this system to admin system remotely
 *
 * @author itischarles
 */
class Messages extends MY_Controller {
   
    var $user_accessor;
    var $message_accessor;
    
    function __construct() {
	parent::__construct();
	
	$this->isAuthenticated();
	$this->user_accessor =  new User_model(); 
	$this->message_accessor =  new Messages_model(); 
    }
    
    
    
//    public function _remap($method, $params)   {
//	
//	//echo $method;
//	
//	
//	 $method = 'list_'.$method;
//	    if (method_exists($this, $method))
//	    {
//		echo "<pre>";print_r($this->router->method);
//		echo "<hr/>";
//		return call_user_func_array(array($this, $method), $params);
//	    }
//	    show_404();
//	
//	return false;
//	if ($method == 'some_method')
//	{
//	    $this->$method();
//	}
//	else
//	{
//	    $this->default_method();
//	}
//    }
//    
    
    function index($userUrl = ''){

	if($this->user_accessor->canViewPage(false, $userUrl) === false):
           redirect(base_url());
       endif;
	
	$userUrl = (empty($userUrl)? $this->currentUserBaseUrl : $userUrl);
	
	$data['userDetails'] = $userDetails = $this->user_accessor->getUserByBaseurl($userUrl); 
       
      if(empty($userDetails)):
	   $this->session->set_flashdata('message', 'Client Not found');
	    $this->session->set_flashdata('type', 'flash_error');
	   redirect(base_url()); 
      endif;
      
      $data['client'] = $client = $this->user_accessor->getUserByBaseurl($userUrl);
       
      
      if($this->input->post('sendMsg')):
	  
	$this->form_validation->set_rules('msg', "Message", "trim|required");
	if($this->form_validation->run()):
	   
	    $content['messageDate'] = changeDateFormat('now', 'Y-m-d',true);
	    $content['messageBody'] = $this->input->post('msg');
	    $content['users_userID'] = $client->userID;
	    $content['messageSentOrReceived'] = 'sent';
	    
	    $msgID = $this->message_accessor->sendMessage($content);
	    if($msgID):
		$this->session->set_flashdata('message', 'Message sent');
		$this->session->set_flashdata('type', 'flash_success');
	       redirect(base_url('messages/'.$userUrl)); 
	    else:
		$data['sendMsgStatus'] = "there was error sending your message";
	    endif;
	
	endif;
	  
	  
      endif;
      
       
        $data['messages'] = $this->message_accessor->listMessages(array('users_userID'=>$client->userID));
     
	$data['show_main_nav'] = true; 
        $data['page_title'] = $userDetails->userTtitle." ". $userDetails->userFirstName." ".$userDetails->userLastName.' : Documents';               
        $data['page'] = 'messages/message_list';
        $this->load->view('template',$data);
	

    }
    
    
    
       /**
     * view the clients' view
     * @param string $code client code
     */
    function list_documents($userUrl = 'jjj', $dd='f',$ddd='7'){
	//echo  $userUrl." - ".$dd." - ".$ddd;
	//return false;
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
       
       $data['client'] = $client = $this->user_accessor->getUserByBaseurl($userUrl);
     //  $data['ReviewDetails']  = $reviewDetails = $this->review_accessor->getReview(array('user_id'=>$client->user_id, 'reviews.review_id'=>$review_id));
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
      
       $data['client'] = $client = $this->user_accessor->getUserByBaseurl($userUrl);
       
       $where['users.userID'] = $userID = $client->userID;      
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
        
       if($userDetails->role_roleID != 1):
        
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
