<?php

/**
 * Description of Document
 *
 * @author itischarles
 */
class Users extends MY_Controller {

    var $user_accessor;
    var $document_accessor;
    var $application_accessor;
    var $transfer_accessor;
    var $contribution_accessor;
    var $investment_accessor;

    function __construct() {
        parent::__construct();

        $this->isAuthenticated();

        $this->load->model("Application_model");
        $this->load->model("Transfer_model");
        $this->load->model("Contribution_model");
        $this->load->model("Investment_model");

        $this->user_accessor = new User_model();
        $this->document_accessor = new Document_Model();
        $this->application_accessor = new Application_model();
        $this->transfer_accessor = new Transfer_model();
        $this->contribution_accessor = new Contribution_model();
        $this->investment_accessor = new Investment_model();
    }

    function index($userUrl = '') {



        $userUrl = (empty($userUrl) ? $this->currentUserBaseUrl : $userUrl);

        if ($this->user_accessor->canViewPage(false, $userUrl) === false):
            redirect(base_url());
        endif;

        $data['userDetails'] = $userDetails = $this->user_accessor->getUserByBaseurl($userUrl);

        if (empty($userDetails)):
            $this->session->set_flashdata('message', 'Invalid Selection Detected');
            $this->session->set_flashdata('type', 'flash_error');
            redirect(base_url());
        endif;



        //  $data['client'] = $client = $this->user_accessor->getUserByBaseurl($userUrl);

        $data['show_main_nav'] = true;
        $data['page_title'] = $userDetails->userTtitle . " " . $userDetails->userFirstName . " " . $userDetails->userLastName . ' : Home';
        $data['page'] = 'user/view';
        $this->load->view('template', $data);
    }

    function dashboard($userUrl = '') {


        $userUrl = (empty($userUrl) ? $this->currentUserBaseUrl : $userUrl);
        $data['userDetails'] = $userDetails = $this->user_accessor->getUserByBaseurl($userUrl);
      
        
        $res = $this->user_accessor->getClientByUserId($userDetails->userID);
        $clientID = $res[0]->clientID;
        
        $data['applicationDetails'] =  $this->user_accessor->getMyApplication($clientID);
     
        
        $data['show_main_nav'] = true;
        $data['page_title'] = "title";
        $data['page'] = 'user/dashboard';
        $this->load->view('template', $data);
    }

    function application($type) {

        $userUrl = (empty($userUrl) ? $this->currentUserBaseUrl : $userUrl);
        $data['userDetails'] = $userDetails = $this->user_accessor->getUserByBaseurl($userUrl);

        // $this->load->model("user_model");
        $res = $this->user_accessor->getClientByUserId($userDetails->userID);
        $clientID = $res[0]->clientID;
        
        

        $random_no = rand(11111, 99999);

        $data1['applicationType'] = $type;
        $data1['clientID'] = $clientID;
        

        $is_app_exists = $this->user_accessor->isApplicationExists($data1);
        
        
        if (!$is_app_exists) {
            $data1['applicationReference'] = $random_no;
            $data1['application_date'] = date("Y-m-d");
            $app_id = $this->user_accessor->addNewApplication($data1);
            $appsDetails = $this->user_accessor->getApplicationDataById($app_id);
            $data['applicationDetails'] =  $appsDetails[0];
        } else {
            $app_id = $is_app_exists[0]->applicationID;
            $data['applicationDetails'] =  $is_app_exists[0];
        }
        
        //list transfer
        $data['transfer'] = $this->transfer_accessor->getTransferDataById($app_id);
        
        $data['contribution'] = $this->contribution_accessor->getContributionsDataById($app_id);
        //list contribution
         $data['investment'] = $this->investment_accessor->getInvestmentDataById($app_id);
        //list investments

        $data['app_id'] = $app_id;
        $data['show_main_nav'] = true;
        $data['page_title'] = "title";
        $data['page'] = 'user/application';
        $this->load->view('template', $data);
        
    }

  

    

}
