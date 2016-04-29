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

        $this->load->library('form_validation');
        $app_id = $this->input->post('applicationID');

        if ($this->input->post('submit')):
            $this->form_validation->set_rules('pensionProvider', ' Pension Provider', 'required');
            $this->form_validation->set_rules('transferReferrence', 'Transfer Referrence', 'required');
            $this->form_validation->set_rules('approximateValue', 'Approximate Value', 'required');

            if ($this->form_validation->run()):
                $data['applicationID'] = $app_id;
                $data['pensionProvider'] = $this->input->post('pensionProvider');
                $data['transferReferrence'] = $this->input->post('transferReferrence');
                $data['approximateValue'] = $this->input->post('approximateValue');
                //  if ($this->input->post()) {
                $this->transfer_accessor->addNewTransfer($data);
                redirect("applications/sipp");
            else:
                $this->pensionTransfer($app_id);
            endif;

        endif;
    }

}
