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

    function __construct() {
        parent::__construct();

        $this->isAuthenticated();

        $this->load->model("Application_model");

        $this->user_accessor = new User_model();
        $this->document_accessor = new Document_Model();
        $this->application_accessor = new Application_model();
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



        $data['show_main_nav'] = true;
        $data['page_title'] = "title";
        $data['page'] = 'user/dashboard';
        $this->load->view('template', $data);
    }

    function application($type) {

        $userUrl = (empty($userUrl) ? $this->currentUserBaseUrl : $userUrl);
        $data['userDetails'] = $userDetails = $this->user_accessor->getUserByBaseurl($userUrl);

        $this->load->model("user_model");
        $res = $this->user_accessor->getClientByUserId($userDetails->userID);
        $clientID = $res[0]->clientID;

        $random_no = rand(11111, 99999);

        $data1['applicationType'] = $type;
        $data1['clientID'] = $clientID;
        $data1['application_date'] = date("Y-m-d");

        $is_app_exists = $this->user_accessor->isApplicationExists($data1);

        if (!$is_app_exists) {
            $data1['applicationReference'] = $random_no;
            $app_id = $this->user_accessor->addNewApplication($data1);
        } else {
            $app_id = $is_app_exists[0]->applicationID;
        }

        $data['app_id'] = $app_id;
        $data['show_main_nav'] = true;
        $data['page_title'] = "title";
        $data['page'] = 'user/application';
        $this->load->view('template', $data);
    }

    function pensionTransfer($app_id) {

        $userUrl = (empty($userUrl) ? $this->currentUserBaseUrl : $userUrl);
        $data['userDetails'] = $userDetails = $this->user_accessor->getUserByBaseurl($userUrl);

        $data['app_id'] = $app_id;
        $data['show_main_nav'] = true;
        $data['page_title'] = "title";
        $data['page'] = 'user/pension_transfer';
        $this->load->view('template', $data);
    }

    public function pensionTransferSave() {

        //  if ($this->input->post()) {
        $data['applicationID'] = $this->input->post('applicationID');
        $data['pensionProvider'] = $this->input->post('pensionProvider');
        $data['transferReferrence'] = $this->input->post('transferReferrence');
        $data['approximateValue'] = $this->input->post('approximateValue');
        $this->user_accessor->addNewTransfer($data);
        redirect("applications/sipp");
    }

    function investmentOptions($app_id) {

        $userUrl = (empty($userUrl) ? $this->currentUserBaseUrl : $userUrl);
        $data['userDetails'] = $userDetails = $this->user_accessor->getUserByBaseurl($userUrl);

        $data['app_id'] = $app_id;
        $data['show_main_nav'] = true;
        $data['page_title'] = "title";
        $data['page'] = 'user/investment_options';
        $this->load->view('template', $data);
    }

    function investmentOptionsSave() {

        $random_no = rand(11111, 99999);

        $data['applicationID'] = $this->input->post('applicationID');
        $data['investment_options'] = $this->input->post('investment_options');
        $data['percentage_of_investment'] = $this->input->post('percentage_of_investment');
        $data['target_date'] = date("Y-m-d", strtotime("now")); //$this->input->post('target_date');
        $data['investmentReference'] = $random_no;

        $this->user_accessor->addNewInvestment($data);
        redirect("applications/sipp");
    }

    function contribution($app_id) {

        $userUrl = (empty($userUrl) ? $this->currentUserBaseUrl : $userUrl);
        $data['userDetails'] = $userDetails = $this->user_accessor->getUserByBaseurl($userUrl);

        $data['app_id'] = $app_id;
        $data['show_main_nav'] = true;
        $data['page_title'] = "title";
        $data['page'] = 'user/contributions';
        $this->load->view('template', $data);
    }

    function contributionSave() {
        
        $random_no = rand(11111, 99999);
        
        $data['applicationID'] = $this->input->post('applicationID');
        $data['fund_type'] = $this->input->post('fund_type');
        $data['lump_sum_amount'] = $this->input->post('lump_sum_amount');
        $data['regular_amount'] = $this->input->post('regular_amount');
        $data['frequency_regular'] = $this->input->post('frequency_regular');
        $data['account_holder'] = $this->input->post('account_holder');
        $data['society_account_holder'] = $this->input->post('society_account_holder');
        $data['sorrt_code'] = $this->input->post('sorrt_code');
        $data['postal_address'] = $this->input->post('postal_address');
        $data['contributionsReference'] =$random_no;


        $this->user_accessor->addNewContribution($data);
      
        
        redirect("applications/sipp");
    }

}
