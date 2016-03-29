<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of MY_Controller
 *
 * @author itischarles
 */
class MY_Controller extends CI_Controller {
    //put your code here
    
    /**
     *	@currentUserID int 
     *	@description current user ID got from session data
     *	@returns ID of the current user
      */
    protected $currentUserID; 
   
    
   /**
     *	$currentUserBaseUrl string 
     *	@description current user user got from session data
     *	@returns string of the current user
      */
    protected $currentUserBaseUrl;
    
    
    /**
     * @$user_accessor mixed 
     * used to access the users_model
     */
    public $user_accessor;
    
    
    
    
    
    function __construct() {
	parent::__construct();
	
	date_default_timezone_set('Europe/London');

	$this->user_accessor =  new User_model(); 
	
	$this->getCurrentUserID();
	$this->getCurrentUserBaseURL();
    }
    
    
    
    
    protected function isAuthenticated(){	
	
	return $this->user_accessor->authenticate();
    }
    
    
    /**
     * 
     * @$api_key_posted string API key for this client
     * @return boolean
     */
    protected function authenticateAPIRequest($api_key_posted){
	 $extected_key = "cs9a25c11ba50c1f63562d6a50f74bd885";
	 if($extected_key != $api_key_posted):
	     return false;
	 endif;
	 
	 return true;
    }



     /**
     * make this function available to all controllers extending this controller
      * return the current user ID
     */
    private function getCurrentUserID() {
	$this->currentUserID =  $this->user_accessor->getSessionID();
    }
    
    
    /**
     * make this function available to all controllers extending this controller
     * return the current user baseurl
     */
    private function getCurrentUserBaseURL() {
	$userDetail= $this->user_accessor->getUserByID($this->currentUserID);
	if(!empty($userDetail)):
	    $this->currentUserBaseUrl =  $userDetail->userBaseUrl;
	endif;
	
    }
    
    
     /**
     * generate url for elements/tables records. e.g client url
     * @$elementName string $elementName the element generating the URL
     * @return string
     */
    function generateElementURL($elementName = " ? "){
	$timenow = date("Y-m-d H:i:s", strtotime('now'));	
	$randomNumber = rand(0, 1000);
	return md5($timenow+$elementName+$randomNumber);
    }
    
    
}
