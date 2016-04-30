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

        $this->load->library('form_validation');
        $app_id = $this->input->post('applicationID');
        $random_no = rand(111111111, 999999999);


        if ($this->input->post('submit')):

            $this->form_validation->set_rules('investment_options', 'Investment options', 'required');
            $this->form_validation->set_rules('percentage_of_investment', 'Percentage of investment', 'required');
            //  $this->form_validation->set_rules('target_date', 'Target date', 'required');
            
            $w_data['applicationID'] = $app_id;
            
            $inv_opt = $this->input->post('investment_options');
            switch($inv_opt){
                case "IM Optimum Growth":
                    $w_data['investment_options'] = "IM Optimum Growth";
                    break;
                case "IM Optimum Income":
                    $w_data['investment_options'] = "IM Optimum Income";
                    break;
                case "IM Optimum Growth & Income":
                    $w_data['investment_options'] = "IM Optimum Growth & Income";
                    break;
            };

            $dup = $this->investment_accessor->IMOptimumGrowthexists($w_data);
            
            if($dup){
                $this->session->set_flashdata("flash_msg", "Selected investment option already exists!");
                redirect("investment/$app_id");
            }
            
            if ($this->form_validation->run()):
                $data['applicationID'] = $app_id;
                $data['investment_options'] = $inv_opt;
                $data['percentage_of_investment'] = $this->input->post('percentage_of_investment');
                $tar_date = $this->input->post('target_dates');
                $data['target_date'] = date("Y-m-d", strtotime($tar_date));
                $data['investmentReference'] = $random_no;

                

                
                
                $this->investment_accessor->addNewInvestment($data);
                redirect("applications/sipp");
            else:
                $this->investmentOptions($app_id);

            endif;
        endif;
    }

    function IMOptimumGrowth($app_id) {
        $this->investment_accessor->role_exists($app_id);
    }

}
