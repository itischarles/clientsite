<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Background_process
 *we will use this library 
 * @author itischarles
 */

//require_once APPPATH."core/MY_Controller.php";

class Background_process  {
    //put your code here
    
    var $CI;
    var $userModel;
    var $messageModel;
    
    function __construct() {
	
	$this->CI = get_instance();
	
	$this->CI->load->model('User_model');
	$this->CI->load->model('Messages_model');
	
	$this->userModel = new User_model();
	$this->messageModel = new Messages_model();
	
	
    }
   
    
    
    
    function markMessageAsViewed($userID) {
	
	$userDetails = $this->userModel->getUserByID($userID);
	
	if($userDetails->role_roleID == 103):
	    
	    $content['messageViewedDate'] = changeDateFormat('now','Y-m-d', true);
	    $where['users_userID'] = $userID;
	
	    $this->messageModel->markMessagesAsViewed($content,$where);
	endif;
    }
    
    
    
    
}
