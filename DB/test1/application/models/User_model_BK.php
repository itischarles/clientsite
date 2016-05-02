<?php
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Description of user_model
 *
 * @author trblap
 */
class User_Model extends CI_Model{
 
     function __construct() {
        parent::__construct();
    }
    
 
    
    function getUser_customWhere($where){
       // $this->db->cache_on();
        $this->db->where(array('deleted'=>0));
         $this->db->where('client_id >',0);
        return $this->db->where($where)
                ->get('users')
                ->row();
    }
    
    function listUsers_customWhere($where, $limit = false){
        $this->db->cache_on();
         $this->db->where(array('deleted'=>0));
         $this->db->where('client_id >',0);
         $this->db->group_by('user_id');
         
         if($limit !== false):
            $this->db->limit($limit);
         endif;
         
        return $this->db->where($where)
                ->get('users')
                ->result();
    }
    
    
    function getUserByID($user_id){
        $this->db->cache_on();
      
         
       return  $this->db->where(array('userID' => (int)$user_id,                               
                                   'userIsActive'=>1))
               // $this->db->where('user_id', (int)$user_id)
                ->get('users')
                ->row(); 
    }
    
    
    function updateUser($content, $where){
        $this->db->where($where);
        $this->db->update('users',$content);
        
        return $this->db->affected_rows();
    }
   
     
    function addNewUser($content){
      
        $this->db->insert('users',$content);
        return $this->db->insert_id();
     
    }
    
     function login($username, $password){
         
         // $encryption_key = ($this->config->config['encryption_key']);
          
            $this->db->where(array('uname' => $username,
                                   'pword_hash' => $this->_prep_password($password),
                                   'deleted'=>0));

            $user_details = $this->db->get('users', 1)->row();

           
            
            if($user_details):
               
                //if user does not have code kdon't login  
                if(empty($user_details->code)):                   
                    return false;
                endif;
                 
                $this->session->set_userdata('userID', $user_details->user_id);
                $this->session->set_userdata('fname', $user_details->fname);
                $this->session->set_userdata('lname', $user_details->lname);
                $this->session->set_userdata('userCode', $user_details->code);
                return $user_details;
            endif;      
         
            return false;
        }

   
        
  function authorize($userID = 0){
         $user_id = (!$userID) ? $this->session->userdata('userID') : $userID;
         
         $session_user_details = $this->getUserByID($user_id);
         
           if(empty($session_user_details)){
                $this->session->set_userdata('uri_string', uri_string());
                redirect(base_url('login'));
                exit();
            }

            return $session_user_details;
    }
    
    
    
       
    /**
     * if the user id is same the session user id or the role of this user is admin then he should be
     * able to view the page
     * @param type $userID
     * @return boolean
     */
    function canViewPage($user_code){
  
       //$userDetails =  $this->getUserByID($userID);
       $currentUserDetails = $this->getUser_customWhere(array('code'=> $user_code));
      
       if(empty($currentUserDetails)):
           return false;
       endif;
      
       // admin has access
       if($currentUserDetails->roleID == 1):
           return true;
       endif;
       
       // owner has access
       if(($currentUserDetails->code == $user_code)):
         
           return true;
       endif;
       
       
       return false;
    }
    
    
    
    
    
    function logout(){
        $this->session->unset_userdata('userID');
        $this->session->unset_userdata('userCode');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
         $this->session->unset_userdata('uri_string');
        redirect(base_url('login'));
    }
    
    
    /**
     * logout user out without re-directing
     */
    function logout_no_redirect(){
        $this->session->unset_userdata('userID');
        $this->session->unset_userdata('userCode');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
       // $this->session->unset_userdata('uri_string');
    }
    

    
    /**
     * return a hash of the password
     * @param string $password
     * @return hash
     */
    function _prep_password($password){
        return  md5($this->config->config['encryption_key'].$password);
        
    }
    
    
    
    
    /*********LOGIN HISTRY********/
    function getLoginHistory($where){
         $this->db->cache_on();
         $this->db->limit(5);
        
        return $this->db->where($where)
                ->get('audit_logins')
                ->result();
        
    }
    
    
    function addLoginHistory($content){
        $this->db->inser('audit_logins',$content);
        return $this->db->inser_id();
    }
}