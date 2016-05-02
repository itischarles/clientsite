<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Form_validation extends CI_Form_validation{
 
   function __construct($rules = array()) {
       parent::__construct($rules);
   }
    
    
    
    /**
     * validate client by client ID
     * @param int $client_id
     * @return boolean
     */
   function validate_client($userReference){
             
        $user_accessor = new User_Model();
        $clientDetails = $user_accessor->getUser_customWhere(array('userReference'=>$userReference));
       
        $CI = get_instance();
        $CI->form_validation->set_message('validate_client','Client not found');
       return (empty($clientDetails) ? FALSE: TRUE);
   }
   
   
   
   function validate_upload_file($file){     
       print_r($_FILES);
        $CI = get_instance();
        $CI->form_validation->set_message('validate_upload_file','Invalid file uploaded');
       return (($file['file_box']['error'] > 0) ? FALSE: TRUE);
   }
}
