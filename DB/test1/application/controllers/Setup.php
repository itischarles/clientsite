<?php


/**
 * Description of Setup
 *this will perform an initial system set,

 * @author itischarles
 */
class Setup extends MY_Controller {
     var $email_template_accessor;
     var $user_accessor =''; // to access the user model
     
    function __construct() {
	parent::__construct();
	
	 $this->user_accessor = new User_model();
	
	 // create default user
	$this->defaultUser();

		
		
	
    }
    
    
    /**
     * 
     */
    function index(){
	
	if(isset($_SERVER['HTTP_REFERER'])):
	    $this->session->set_flashdata('message', 'Whew!! that was quick to setup');
	    $this->session->set_flashdata('type', 'flash_success');
	   // redirect(base_url('settings')); 
	    echo "done";
	    exit();
	endif;
	
	echo "i do nothing";
    }
   
    
    
    
    private function defaultUser() {
	
	$username = "charles@example.co.uk";
	$password =  "password";
	
	$content['userFirstName'] = "admin";
	$content['userLastName'] = "admin";
	$content['userUsername'] = $username;
	$content['userIsActive'] = 1;
	$content['userDateCreated'] = changeDateFormat('now', "Y-m-d");
	$content['role_roleID'] = 1; 
	$content['userReference'] = 'abc'; 

	$content['userBaseUrl'] =  $user_userLink = $this->generateElementURL('initialSetup');
	$content['userPwordHash'] = $this->user_accessor->_prep_password($password);
      

	$userID = $this->user_accessor->addNewUser($content);
	
	

	  if($userID):
	      echo "<p>user created</p>";
	  else:
	      echo "<p>failed creating user </p>";
	  endif;
	
    }
    
  
    

}
