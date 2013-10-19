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
        function portfolio(){
            $this->load->model('portfolio_model');
            $pname = $this->input->post('pname');
            $description = $this->input->post('description');
            $limage = $this->input->post('limage');
            $simage = $this->input->post('simage');
            $ldescription = $this->input->post('ldescription');
            $imagealt = $this->input->post('imagealt');
            $this->portfolio_model->addProject($pname, $description, $limage, $simage, $ldescription, $imagealt);
            if ($_GET["action"]=="details"){
                
            };
        }
    }
?>