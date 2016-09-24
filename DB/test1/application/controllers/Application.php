<?php


/**
 * Description of Document
 *
 * @author itischarles
 */
class Application extends MY_Controller {
   
    var $user_accessor;
    var $document_accessor;
    var $application_accessor;
    
    function __construct() {
	parent::__construct();
	
	$this->isAuthenticated();
	$this->user_accessor =  new User_model();
	$this->application_accessor =  new Application_model();
    }
    
    
}