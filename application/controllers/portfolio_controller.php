<?php
    class portfolio_Controller extends CI_Controller{
        function __construct(){
            parent::__construct();
        }
        function featured(){
            $this->load->model('portfolio_model');
            $pname = $this->input->post('pname');
            $description = $this->input->post('description');
            $fp = $this->input->post('fp');
            $this->portfolio_model->updateFeatured($pname, $description, $fp);
        }
    }
?>