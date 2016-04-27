<?php

/**
 * Description of Document
 *
 * @author itischarles
 */
class Transfers extends MY_Controller {

    var $user_accessor;
    var $document_accessor;
    var $application_accessor;

    function __construct() {
        parent::__construct();

        $this->isAuthenticated();

        $this->load->model("Application_model");
        $this->load->model("Transfer_model");

        $this->user_accessor = new User_model();
        $this->document_accessor = new Document_Model();
        $this->application_accessor = new Application_model();
        $this->transfer_accessor = new Transfer_model();
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
        $this->transfer_accessor->addNewTransfer($data);
        redirect("applications/sipp");
    }

}