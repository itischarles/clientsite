<?php



/**
 *
 * @author itischarles
 */
class API_web  extends MY_Controller{
    
    //var $api_key = "cs9a25c11ba50c1f63562d6a50f74bd885";
    
    var $user_accessor;
    var $document_accessor;
    
    var $userDetails = array(); // store the user details
    
 
  
            
    function __construct() {
	parent::__construct();
	
	
	
	
	$this->user_accessor =  new User_model(); 
	$this->document_accessor =  new Document_Model(); 
    }
    

    
    function addNewClient_Post(){

	$API_KEY   =   $this->input->get_post('API_KEY'); 
	
	if($this->authenticateAPIRequest($API_KEY) == false):
	    $this->error= 1;
	    $this->code = 404;
	    $this->message = "Invalid API Key";
	    echo $this->_printResponse();	   
	    return false;
	endif;
	
	
	
	
	if($this->input->get_post('addNewClient')):
	    
	    $this->form_validation->set_rules('clientReference', 'Client Reference', 'trim|required|is_unique[users.userReference]');

	    $this->form_validation->set_rules('clientFirstName', 'First Name', 'trim|required');
	    $this->form_validation->set_rules('clientLastName', 'Last Name', 'trim|required');
	    $this->form_validation->set_rules('clientUsername', 'Username', 'trim|required|valid_email|is_unique[users.userUsername]');
	    $this->form_validation->set_rules('clientPassword', 'Last Name', 'trim|required');
	    
	    $this->form_validation->set_error_delimiters( '','' );
	    if($this->form_validation->run()):
		
		$clientDateCreated= ($this->input->get_post('clientDateCreated') ? $this->input->get_post('clientDateCreated') : changeDateFormat('now'));
		
		$content['userFirstName'] = $this->input->get_post('clientFirstName');
		$content['userLastName'] = $this->input->get_post('clientLastName');
		$content['userUsername'] = $this->input->get_post('clientUsername');
		$content['userIsActive'] = $this->input->get_post('clientIsActve');
		$content['userDateCreated'] = changeDateFormat($clientDateCreated, "Y-m-d");
		$content['userReference'] = $this->input->get_post('clientReference'); 
		$content['role_roleID'] = 3; 
		$content['userBaseUrl']  = $this->generateElementURL("forAPI");
		$content['userPwordHash'] = $this->user_accessor->_prep_password($this->input->get_post('clientPassword'));

		$userID = $this->user_accessor->addNewUser($content);
		
		$this->error= 0;
		$this->code = 200;
		$this->message = "Client Created";
		 echo $this->_printResponse();	   
		return false;
		
	    else:
		
		$this->error= 1;
		$this->code = 200;
		$this->message = validation_errors();
		 echo $this->_printResponse();	   
		return false;
		endif;
	endif;
	
	
	
    }
    
    function _updateClient_Post(){
	
    }
    
    function _disableClient_Post(){
	
    }
    
    function _addDocument_Post(){
	
    }
    
 
    
 
    

    
    private function _api_resetPassword(){
                  
      
    }
    
    
     private function _api_deleteAttachment(){
      
            
    }
    

    
    
    private function _printResponse() {
	$response['error'] = $this->error;
	$response['response_code'] = $this->code;
	$response['message'] = $this->message;
	return json_encode($response);
    }

    
}
