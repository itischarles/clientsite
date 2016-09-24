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

         $this->load->library('form_validation');
          $app_id = $this->input->post('applicationID');
        $random_no = rand(111111111, 999999999);

        if ($this->input->post('submit')):

            $this->form_validation->set_rules('fund_type', 'Fund type', 'required');
            $this->form_validation->set_rules('lump_sum_amount', 'Lump sum amount', 'required');
            $this->form_validation->set_rules('regular_amount', 'Regular amount', 'required');
            $this->form_validation->set_rules('frequency_regular', 'Frequency regular', 'required');
            $this->form_validation->set_rules('account_holder', 'Account holder', 'required');
            $this->form_validation->set_rules('society_account_holder', 'Society account holder', 'required');
            $this->form_validation->set_rules('sorrt_code', 'Sorrt code', 'required');
            $this->form_validation->set_rules('postal_address', 'Postal address', 'required');
          
             $w_data['applicationID'] = $app_id;
            
            $fund_type = $this->input->post('fund_type');
            switch($fund_type){
                case "Lamp sum investment":
                    $w_data['fund_type'] = "Lamp sum investment";
                    break;
                case "Regular Contribution":
                    $w_data['fund_type'] = "Regular Contribution";
                    break;
               
            };
            
              $dup = $this->contribution_accessor->fundTypeExists($w_data);
              
              if($dup){
                $this->session->set_flashdata("flash_msg", "Selected fund type already exists!");
                redirect("contribution/$app_id");
            }
            

            if ($this->form_validation->run()):

                $data['applicationID'] = $app_id;
                $data['fund_type'] = $fund_type;
                $data['lump_sum_amount'] = $this->input->post('lump_sum_amount');
                $data['regular_amount'] = $this->input->post('regular_amount');
                $data['frequency_regular'] = $this->input->post('frequency_regular');
                $data['account_holder'] = $this->input->post('account_holder');
                $data['society_account_holder'] = $this->input->post('society_account_holder');
                $data['sorrt_code'] = $this->input->post('sorrt_code');
                $data['postal_address'] = $this->input->post('postal_address');
                $data['contributionsReference'] = $random_no;
                $this->contribution_accessor->addNewContribution($data);
               
                redirect("applications/sipp");
            else:
                $this->contribution($app_id);

            endif;
        endif;
    }

}
