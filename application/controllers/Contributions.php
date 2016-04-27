<?php

/**
 * Description of Document
 *
 * @author itischarles
 */
class Contributions extends MY_Controller {

    var $user_accessor;
    var $document_accessor;
    var $application_accessor;

    function __construct() {
        parent::__construct();

        $this->isAuthenticated();

        $this->load->model("Application_model");
        $this->load->model("Transfer_model");
        $this->load->model("Contribution_model");

        $this->user_accessor = new User_model();
        $this->document_accessor = new Document_Model();
        $this->application_accessor = new Application_model();
        $this->transfer_accessor = new Transfer_model();
        $this->contribution_accessor = new Contribution_model();
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


        $this->contribution_accessor->addNewContribution($data);
      
        
        redirect("applications/sipp");
    }
}