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
    
    
    //posted variabled
    var $ninum;
    var $dob;
    var $title_name;
    var $fname;
    var $lname;
    var $postcode;
    var $address1;
    var $address2;
    var $town;
    var $county;
    var $tel;
    var $mob;
    var $email;
    var $uname;
     var $system;
     
    var $pword;
    var $code;
    var $client_id;
     var $project_id; //wizbang project id
    //var $is_admin;
     
//    var $error = 0;
//    var $code = 404;
//    var $message = '';
  
            
    function __construct() {
	parent::__construct();
	
	
	
	
	$this->user_accessor =  new User_model(); 
	$this->document_accessor =  new Document_Model(); 
    }
    
//    
//    function index(){
//	echo "index page 4";
//    }


    public function index4() {
	return false;
        $method           = $this->input->post('action');
        
        $key              =   $this->input->post('key'); 
        $this->code       =   $this->input->post('code');  
        $this->client_id  =  $this->input->post('client_id'); 
        $this->project_id        =  ($this->input->post('project_id') ? $this->input->post('project_id') :0);
        
         
        
        $this->ninum        =  ($this->input->post('ninum') ? $this->input->post('ninum') :''); 
        $this->dob          =  ($this->input->post('dob')   ? $this->input->post('dob') : null); 
        $this->title_name   =  ($this->input->post('title_name') ? $this->input->post('title_name') :''); 
        $this->fname        =  ($this->input->post('fname') ? $this->input->post('fname') :''); 
        $this->lname        =  ($this->input->post('lname') ? $this->input->post('lname') :''); 
        $this->postcode     =  ($this->input->post('postcode') ? $this->input->post('postcode') :'');         
        $this->address1     =  ($this->input->post('address1') ? $this->input->post('address1') :''); 
        $this->address2     =  ($this->input->post('address2') ? $this->input->post('address2') :''); 
        $this->town         =  ($this->input->post('town') ? $this->input->post('town') :''); 
        $this->county       =  ($this->input->post('county') ? $this->input->post('county') :'');         
        $this->tel          =  ($this->input->post('tel') ? $this->input->post('tel') :''); 
        $this->mob          =  ($this->input->post('mob') ? $this->input->post('mob') :''); 
        $this->email        =  ($this->input->post('email') ? $this->input->post('email') :''); 
        $this->uname        =  ($this->input->post('uname') ? $this->input->post('uname') :''); 
        
        $this->system        =  ($this->input->post('system') ? $this->input->post('system') :''); 
       
        $this->pword        =  ($this->input->post('pword') ? $this->input->post('pword') :''); 
        //$this->is_admin     =  ($this->input->post('admin') ? $this->input->post('admin') :''); 
         
        
        
       
        if($this->api_key != $key):
            echo array('Invalid API Key');
            return false;
        endif;
        
        
        
        
        
        // lets fidn the client the get_post is for
        $this->userDetails = $this->_api_findUser();
        
        switch($method):
            case "add":    
               $resp = $user_id =  $this->_api_addClient();
                             
                if((int)$resp >0):
                    $response['code'] = 1;
                    $response['message'] = "added";
                else:
                    $response['code'] = 0;
                    $response['message'] = "adding error";
                    $response['data']    = $response;
                endif;        
                
                echo serialize($response);              
            break;
            
            //update user
            case "update_client":    
                $resp =  $this->_api_updateClient();                        
                              
                if((int)$resp >0):
                    $response['code'] = 1;
                    $response['message'] = "updated";
                else:
                    $response['code'] = 0;
                    $response['message'] = "Update error";
                    $response['data']    = $response;
                endif;        
                
                echo serialize($response);          
            break;  
            
            /// update review
             case "update_review_process":                               
                if(empty($this->userDetails)):
                    $response['code'] = 0;
                    $response['message'] = "Review Uppdate failed. Client not found";
                else:
                    $response['code'] = 1;
                    $response['message'] = "Request was successful";
                    $response['data']    = $this->_api_UpdateReview();
                endif;
                
                
                echo serialize($response);
                
                
                
            break;  
            
            // uploading docs
            case "upload":
                if(empty($this->userDetails)):
                    echo "upload failed. Client not found";
                    return false;
                endif;   
                
                    echo $this->_api_uploadDocs();               
            break;
 
        
            case "note":
                if(empty($this->userDetails)):
                    echo "Failed to add Note. Client not found";
                    return false;
                endif;
                
                $res = $this->_api_addNote();
                echo ((int)$res > 0 ? "note added" : "Error adding notes");                
                //
            break; 
        
            /// not sure what this does
            case "logins":              
            break;  
           
            // get client's document
            case "document":
                
                if(empty($this->userDetails)):
                    $response['code'] = 0;
                    $response['message'] = "Document Listing failed. Client not found";
                else:
                    $response['code'] = 1;
                    $response['message'] = "Request was successful";
                    $response['data']    = $this->_api_documentList();
                endif;
                
                echo serialize($response);
            break; 
		
            // reset password
            case "reset":
                 if(empty($this->userDetails)):
                    $response['code'] = 0;
                    $response['message'] = "Password reset failed. Client not found";
                    
                 else:
                     $this->_api_resetPassword();
                    $response['code'] = 1;
                    $response['message'] = "Password Reset was successful";
                endif;
                echo serialize($response);
            break;
            
            //delete attachment
            case "del_att":
                 
                 if(empty($this->userDetails)):
                    $response['code'] = 0;
                    $response['message'] = "File Delete failed. Client not found";
                    
                 else:
                    $resp = $this->_api_deleteAttachment();
                    if((int)$resp >0):
                        $response['code'] = 1;
                        $response['message'] = "Document Deleted";
                    else:
                        $response['code'] = 0;
                        $response['message'] = "Unbale to delete the specified document";
                    endif;                  
                endif;
                
                echo serialize($response);           
            break;
        endswitch;
        
        
        //log the process:
        $response['message'] = (isset($response['message']) ? $response['message'] : "no message defined");
        log_message('error', "API Request : for ".$this->project_id." ". $this->code." Message:". $response['message'].  get_ip());
       
    }
    
    
    
    function addNewClient_Post(){
//	clientReference
//	clientFirstName
//	clientLastName
//	clientUsername
//	clientPassword
//	clientDateCreated
//	clientIsActve
//	addNewClient
	//print_r($_REQUEST);
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
    
    
    /**
     * add new client to the system
     * but check if the user already exist
     */
    private function _api_addClient(){
        if(empty($this->userDetails)):
              
                $client['title_name']   = $this->title_name;
                $client['fname']        = $this->fname;
                $client['lname']        = $this->lname;
                $client['dob']          = $this->dob;
                $client['add1']         = $this->address1;
                $client['add2']         = $this->address2;
                $client['postcode']     = $this->postcode;
                $client['county']       = $this->county;                
                $client['town']         = $this->town;
                $client['tel']          = $this->tel;             
                $client['mob']          = $this->mob;
                $client['email']        = $this->email;                
                $client['ninum']        = $this->ninum;
                $client['uname']        = $this->uname;
                $client['pword']        = $this->pword;
                $client['client_id']    = $this->client_id;
                $client['code']         = $this->code; 
                $client['pword_hash']         = $this->user_accessor->_prep_password($this->pword); 
            
                
               $user_id =  $this->user_accessor->addNewUser($client);
               
               // lets also create the review here
               // but check if the review is already created otherwise update
               if(empty($this->review_accessor->getReview(array('wizbang_project_id'=>$this->project_id) ))):
                   $this->_api_addNewReview($user_id);
               else:
                    $this->_api_UpdateReview();
               endif;             
                 
                 return $user_id;
            
        else:
             return $this->_api_updateClient();
        endif;
        
    }
    
    
    
    /**
     * update an exsting client else add it as new entry
     */
    private function _api_updateClient(){
           
        if(!empty($this->userDetails)):
            $client['title_name']   = $this->title_name;
            $client['fname']        = $this->fname;
            $client['lname']        = $this->lname;
            $client['dob']          = $this->dob;
            $client['add1']         = $this->address1;
            $client['add2']         = $this->address2;
            $client['postcode']     = $this->postcode;
            $client['county']       = $this->county;                
            $client['town']         = $this->town;
            $client['tel']          = $this->tel;             
            $client['mob']          = $this->mob;
            $client['email']        = $this->email;                
            $client['ninum']        = $this->ninum;
           // $client['uname']        = $this->uname;
           // $client['pword']        = $this->pword;
            $where['client_id']    = $this->client_id;
            $where['code']         = $this->code;
            
            $affected_row =  $this->user_accessor->updateUser($client, $where);           
            
               
                 // if this review does not exist, create it 
               // but check if the review is already created otherwise update
               if(empty($this->review_accessor->getReview(array('wizbang_project_id'=>$this->project_id) ))):
                   $this->_api_addNewReview($this->userDetails->user_id);
               else:
                    $this->_api_UpdateReview();
               endif;
                
                
                
                return (int)$affected_row+1;
                
        else:
            return  $this->_api_addClient();
        endif;
    }
    
    
    
    private function _api_addNewReview($user_id) {
       
            $review['user_id']   = $user_id;
            $review['review_preferenceID']  = ($this->input->post('review_preferenceID') ? (int)$this->input->post('review_preferenceID') :0); 
            $review['date_started']        = date('Y-m-d H:i:s', strtotime('now'));
           // $review['wizbang_project_id'] = ($this->input->post('project_id') ? (int)$this->input->post('project_id') :0); 
            $review['wizbang_project_id'] = $this->project_id; 
            
            $this->review_accessor->createNewReview($review);    
    }
    
    
     private function _api_UpdateReview() {
         
            $review['wizbang_project_id'] = $project_id= ($this->input->post('project_id') ? (int)$this->input->post('project_id') :0); 
                    
            $where['reviews.user_id'] = $this->userDetails->user_id;
            $where['reviews.wizbang_project_id'] = $project_id;
          
            
            $review['user_id']  =  $user_id    = $this->userDetails->user_id;
                
            if($this->input->post('review_preferenceID')):
             $review['review_preferenceID'] = $this->input->post('review_preferenceID');
            endif;            
            if($this->input->post('pension_killed')):
                 $review['pension_killed'] = $this->input->post('pension_killed');
            endif;
             if($this->input->post('date_appl_submitted')):
                 $review['date_appl_submitted'] = $this->input->post('date_appl_submitted');
            endif;
             if($this->input->post('date_completed')):
                 $review['date_completed'] = $this->input->post('date_completed');
            endif;                
                
            // if th review already exist update else create
            if(!$this->review_accessor->getReview($where)):
                $this->_api_addNewReview($user_id);
                return false;
            endif;
            
            $this->review_accessor->updateReview($review, $where);
                  
    }
    
    
    
    private function _api_deleteClient(){
        
    }
    
    
    
    /**
     * upload docs
     * @return string
     */
    private function _api_uploadDocs(){
       
       // $fileName       =   $this->db->escape($_POST['file_name']); 
       // $date_added     =  $this->input->post('date_added'); 
       // $file_type      =   $this->input->post('file_type') ;
        $fileName        =  ($this->input->post('file_name') ? ($this->input->post('file_name')) :''); 
        $date_added        =  ($this->input->post('date_added') ? $this->input->post('date_added') : date('Y-m-d H:i:s', strtotime('now'))); 
        $project_id        =  ($this->input->post('project_id') ? (int)$this->input->post('project_id') :0); 
        $wizbang_attach_id        =  ($this->input->post('attach_id') ? (int)$this->input->post('attach_id') :0); 
        
        $file_type        =  ($this->input->post('file_type') ? $this->input->post('file_type') :'pdf'); 
      
       
       
	$tmpName  = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
        $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
        $ext = ($ext ? $ext : "pdf");
        
        $lastFileEntry = md5($this->review_accessor->getLastEntry_attached_docs());
        $target = $this->review_accessor->getUploadDir($this->userDetails->user_id) ; // make sure the clients dir exist
        
         $filePath = $target.$lastFileEntry.".".$ext;
         $uploadArray = array();
         $uploadArray['doc_name'] = $fileName;
         $uploadArray['path'] = "/".$filePath;
         $uploadArray['user_id'] = $this->userDetails->user_id;
         $uploadArray['type'] = $ext;
         $uploadArray['system'] = $this->system;
         $uploadArray['size'] = (($fileSize) ? $fileSize : 0);
         $uploadArray['date_added'] = date('Y-m-d H:i:s', strtotime($date_added));         
         //$uploadArray['viewed'] = null;
         $uploadArray['wizbang_attach_id'] = $wizbang_attach_id;
         $uploadArray['project_id'] = $project_id;
        
        
        // if (write_file(DOCUMENTROOT."/".$filePath, $tmpName)):
         if(move_uploaded_file($tmpName, DOCUMENTROOT."/".$filePath)):
              $this->review_accessor->createAttachment($uploadArray);
             return "uploaded";
         else:
              return "upload failed";
         endif; 
         
        /*
            $config['upload_path'] = "./$target";
            $config['allowed_types'] = 'pdf|PDF';
            $config['file_name']	= $lastFileEntry.".".$ext;
            $config['overwrite']  = false;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload()):               
                 log_message('error', $this->upload->display_errors()); 
                 log_message('error', $config['upload_path']);
                 log_message('error', $config['file_name']);  
                  return "upload failed";
            else:                 
                 $this->review_accessor->createAttachment($uploadArray);
                  return "uploaded";
            endif;// end do upload
         
         */
         
       
    }
    
    
    private function _api_addNote(){
        $notes     =  $this->input->post('client_note'); 
        $from      =   $this->input->post('from') ;
        $subject      =   $this->input->post('subject') ;
               
        $note['from']          = $from;
        $note['date']        = date('Y-m-d H:i:s', strtotime('now'));               
        $note['system']        = $this->system;
        $note['note']        = $notes;
        $note['user']        = $this->userDetails->user_id;
        $note['subject']    = $subject;
        
        return  $this->review_accessor->addNewNotes($notes);
       
       
    }
    
    
    private function _api_getLoginHistory(){
//        $sql = "SELECT uname FROM users WHERE user_id = '$id'";
//	$get_name = mysql_fetch_array(mysql_query($sql));
//	$uname = $get_name['uname'];
//	$sql = "SELECT sourceip, timestamp FROM audit_logins WHERE username = '$uname' AND action = 'success' ORDER BY timestamp DESC LIMIT 5";
//	$query = mysql_query($sql) or die ("Query Failed");
//	$result = "<table class='ctable' style='border:1px solid blue; margin: 0 auto;'>";
//	$result .= "<tr><td colspan='2'><b>Last 5 Client Logins</b></td></tr>";
//	$result .= "<tr><td><u>Date</u></td><td><u>IP</u></td></tr>";
//	while($logins = mysql_fetch_array($query)){
//		$result .= "<tr><td>".$logins['timestamp']."</td><td>".$logins['sourceip']."</td></tr>";
//	}
//	$result .= "</table>";
//	return $result;
    }
    
    
    private function _api_documentList(){
       $project_id = (int)$this->input->post('project_id');
       return $this->review_accessor->listReviewDocuments_only(array('attached_docs.user_id'=>$this->userDetails->user_id, 'attached_docs.project_id'=>$project_id));
    
      // echo serialize($doclist);
    }
    
    
    private function _api_resetPassword(){
                  
            $client['pword_hash']         = $this->user_accessor->_prep_password($this->pword);
            $client['pword']        = $this->pword;
            $client['password_changed']        = 1;
            
            $where['client_id']    = $this->client_id;
            $where['code']         = $this->code;
            $where['user_id']         = $this->userDetails->user_id;
            
            return $this->user_accessor->updateUser($client, $where);
    }
    
    
     private function _api_deleteAttachment(){
        // get the document first and delete from upload and upload content
       $project_id = (int)$this->input->post('project_id');
       $att_id      =  (int)$this->input->post('att_id'); 
       
        $where['attached_docs.user_id'] = $this->userDetails->user_id;
        $where['attached_docs.project_id'] = $project_id;
        $where['attached_docs.attached_docs_id'] = $att_id;
        
       $doc =  $this->review_accessor->getReviewDocuments($where);
       
     
	if(!empty($doc)):
           
            $path = substr($doc->path, 1, strlen($doc->path));
            
            $this->db->where($where);
            $resp = $this->db->delete('attached_docs');
          
           // echo mysql_affected_rows();
            
            if(file_exists($path)):
                unlink($path); 
               
            endif;
             return $resp;
        endif;
        
        return 0;
        //return mysql_affected_rows();
            
    }
    
    
    /**
     * find the user who we want to deal with
     * @param int $client_id
     * @param string $code
     * @return array
     */
    private function _api_findUser(){
       return $this->user_accessor->getUser_customWhere(array('client_id'=>  $this->client_id, 'code'=>  $this->code));
    }
    
    
    
    private function _printResponse() {
	$response['error'] = $this->error;
	$response['response_code'] = $this->code;
	$response['message'] = $this->message;
	return json_encode($response);
    }

    
}
