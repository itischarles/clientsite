<?php

/**
 * Description of Document
 *
 * @author itischarles
 */
class Investments extends MY_Controller {

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

        $this->investment_accessor->addNewInvestment($data);
        redirect("applications/sipp");
    }
}
