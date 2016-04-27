<?php

//if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of user_model
 *
 * @author trblap
 */
class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getUser_customWhere($where) {
        // $this->db->cache_on();
        $this->db->where(array('userIsActive' => 1));
        //  $this->db->where('clientID >',0);
        return $this->db->where($where)
                        ->get('users')
                        ->row();
    }

    function getUserByID($user_id) {
        return $this->db->where(array('userID' => (int) $user_id,
                            'userIsActive' => 1))
                        ->get('users')
                        ->row();
    }

    function getUserByBaseurl($baseUrl) {
        return $this->db->where(array('userBaseUrl' => $baseUrl,
                            'userIsActive' => 1))
                        ->get('users')
                        ->row();
    }

    function updateUser($content, $where) {
        $this->db->where($where);
        $this->db->update('users', $content);

        return $this->db->affected_rows();
    }

    function addNewUser($content) {

        $this->db->insert('users', $content);
        return $this->db->insert_id();
    }

    /**
     * logig and check if the user exist.
     * get the user by email since email/username is unique and verify the password 
     * e use password_hash function and password_verify function  - - both php functions
     * @param string $username
     * @param string $password
     * @return array
     */
    function login($username, $password) {

        $loginMessage = ''; // would old any other custom login failed message. e.g locked account message

        $this->db->where(array('userUsername' => $username,
            'userIsActive' => 1));

        $user_details = $this->db->get('users', 1)->row();
//            echo "users";
//            print_r($user_details);
//            EXIT();
//	    return false;

        if ($user_details):
            //if user does not have code kdon't login  
            if (empty($user_details->userBaseUrl)):
                return false;

            elseif (password_verify($password, $user_details->userPwordHash)):

                $this->session->set_userdata('userID', $user_details->userID);
                $this->session->set_userdata('userBaseUrl', $user_details->userBaseUrl);

                //login successful
                $this->addLoginHistory($user_details->userID, 1);

//#		    if($this->_checkBlacklistedAccount($user_details->userID)=== false):
//			
//			log_message('error', "Too many failed login attempted dected from userID".$user_details->userID." ".  get_ip());
//       
//			return false;
//		    endif;

                return true;

            else:
                //login failed
                $this->addLoginHistory($user_details->userID, 0);

                return false;
            endif;

        endif;

        return false;
    }

    function authenticate($userID = 0) {
//      echo "<pre>";print_r($this->uri);
//      echo "</pre>";
        $user_id = (!$userID) ? $this->session->userdata('userID') : $userID;

        $session_user_details = $this->getUserByID($user_id);

        if (empty($session_user_details)) {
            $this->session->set_userdata('uri_string', uri_string());
            //echo base_url();
            //return false;
            redirect(base_url('login'));
            //return false;
            exit();
        }

        return true;
    }

    function getSessionID() {
        return $this->session->userdata('userID');
    }

    /**
     * determine if a user has the right to view a given resource
     * if the ID or URL is same as the currently logged user, then he can view his resources.
     * if the ID or URL is an admin, admin should be able to see everything
     * if the ID or URL is diffrent from the owner of the resource to be viewed,return false
     * @param int $userID userid of the client wanting to view a resurce
     * @param string $userUrl userl of the user wanting to view a resource
     * @return boolean
     */
    function canViewPage($userID = '', $userUrl = '') {


        if (!empty($userUrl)):
            $UserDetails = $this->getUserByBaseurl($userUrl);


        elseif (!empty($userID)):
            $UserDetails = $this->getUserByID($userID);
        endif;

        $currentUser = $this->getUserByID($this->getSessionID());



        if (empty($UserDetails)):
            return false;
        endif;
        // print_r($UserDetails);
        // admin has access
//       if($currentUser->role_roleID == 1):
//           return true;
//       endif;
        // owner has access
        if ($UserDetails->userID == $this->getSessionID()):
            return true;
        endif;


        return false;
    }

    /**
     * get the client details and allows for pagination
     * @param array $where
     * @param int $limit
     * @param int $offset
     * @param bol $count if true, it means we want the num_rows
     * @return type
     */
    function searchUsers($where, $limit = 0, $offset = 0, $count = false) {

        if (empty($where)):

            return false;
        endif;

        $filter = implode(" AND ", $where);

        $this->db->where($filter);
        $this->db->where('userIsActive', 1);

        if ($count === true):
            return $this->db->count_all_results("users");
        endif;
        $this->db->group_by('users.userID');
        $this->db->limit($limit, $offset);
        return $this->db->get('users')->result();
    }

    function logout() {
        $this->session->unset_userdata('userID');
        $this->session->unset_userdata('userBaseUrl');

        redirect(base_url('login'));
    }

    /**
     * logout user out without re-directing
     * if you find your self in a page you were hit accedentaly, logout silently
     */
    function logout_no_redirect() {

        $this->session->unset_userdata('userID');
        //$this->session->unset_userdata('userBaseUrl');
    }

    /**
     * return a hash of the password
     * @param string $password
     * @return hash
     */
    function _prep_password($password) {

        return password_hash($password, PASSWORD_DEFAULT);
    }

//    function moved to MY_CONTROLLER
//    function generateUrl(){
//	$lastEntry = 
//	     $this->db
//	     ->order_by('userID','DESC')
//	     ->limit(1)
//	     ->get('users')
//	     ->row();        
//      $rowID = (!empty($lastEntry) ? $lastEntry->userID : 0 );
//      return md5($rowID .changeDateFormat('now','d-m-y', true));
//    }
//    



    /*     * *******LOGIN HISTRY******* */
    function listLoginHistory($where) {

        // $this->db->limit(5);

        return $this->db->where($where)
                        ->get('audit_logins')
                        ->result();
    }

    function addLoginHistory($userID, $wasSuccessFul = 0) {
        $content['users_userID'] = $userID;
        $content['timestamp'] = changeDateFormat('now', 'Y-m-d', true);
        $content['loginSuccessful'] = $wasSuccessFul;
        $content['sourceIP'] = get_ip();

        $this->db->insert('audit_logins', $content);
        $this->db->insert_id();

        //Add a black list to account when they have attempted login for more than 5 times
        //#$this->_logBlackList($userID);
    }

    /**
     * black user who have failed login in the past 10 minutes
     * @param type $userID
     */
    private function _logBlackList($userID) {

        $now = changeDateFormat('now', 'Y-m-d', true);
        $lastTenMinutes = date('Y-m-d H:i:s', strtotime('+ 10 minutes', strtotime($now)));

        $where['users_userID'] = $userID;
        $where['timestamp between'] = "'$now' and '$lastTenMinutes'";
        $where['loginSuccessful'] = 0;

        $loginhistory = $this->listLoginHistory($where);


        if (count($loginhistory) >= 5):
            $content['users_userID'] = $userID;
            $content['lastAttempt'] = changeDateFormat('now', 'Y-m-d', true);
            $content['blackIsArchive'] = 0;
            $content['ipaddress'] = get_ip();

            $this->db->insert('login_blacklist', $content);

            //disable the user
            $this->updateUser(array('userIsActive' => 0), array('userID' => $userID));
        endif;
    }

    /**
     * check if this user has been blacklisted
     * @param type $userID
     * @return boolean
     */
    private function _checkBlacklistedAccount($userID) {

        $this->db->where('users_userID', $userID);
        $this->db->where('blackIsArchive', 0);

        if ($this->db->count_all_results('login_blacklist') > 0):
            return false;
        endif;

        return true;
    }

    /**
     * to remove a blacklsted account. set the user isActive field to 1 and change the 
     * archive field in the login_blacklist table to 1. this means the user is active
     * but the blacklist entry in the login_blacklist table is now in archive state
     * . keep archive for record purpose 
     * @param type $userID
     */
    private function _removeAccountBlacklist($userID) {
        /**
         * @todo to not remove this function
         */
    }

    public function getClientByUserId($userID) {

        $this->db->where('userID', $userID);

        return $this->db->get('clients')->result();
    }

    /*
     * function to add new record to Applicationtable
     * @params data
     * @returns object or null
     */

    function addNewApplication($data) {

        $this->db->insert('applications', $data);
        return $this->db->insert_id();
    }

    /*
     * function to check existing record Applicationtable
     * @params data
     * @returns object or null
     */

    function isApplicationExists($data) {
        $this->db->where($data);
        $res = $this->db->get("applications");
        if ($res) {
            return $res->result();
        }
        return false;
    }

   

    /*
     * function to get all records of application table
     * @params clientID
     * @returns object or null
     */

    public function getMyApplication($clientID) {
        $this->db->where('clientID', $clientID);
        $res = $this->db->get('applications');
        if ($res) {
            return $res->result();
        }
        return false;
    }


   
    

}
