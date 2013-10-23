<?php
    class portfolio_Controller extends CI_Controller{
        function __construct(){
            parent::__construct();
        }
        function featured(){
            //Sets up the data to be sent to portfolio_model for the update featured function
            $this->load->model('portfolio_model');
            $pname = $this->input->post('pname');
            $description = $this->input->post('description');
            $fp = $this->input->post('fp');
            $this->portfolio_model->updateFeatured($pname, $description, $fp);
        }
        function portfolio(){
            //Sets up the data to be sent to portfolio_model for the add project function
            $this->load->model('portfolio_model');
            $pname = $this->input->post('pname');
            $description = $this->input->post('description');
            $limage = $this->input->post('limage');
            $simage = $this->input->post('simage');
            $ldescription = $this->input->post('ldescription');
            $imagealt = $this->input->post('imagealt');
            $this->portfolio_model->addProject($pname, $description, $limage, $simage, $ldescription, $imagealt);
        }
        function details(){
            //Sets up the data to be sent to portfolio_model, and returns the result of loadDetails. Loads views based on result
            $this->load->model('portfolio_model');
            $id = $this->uri->segment(3);
            $result['result'] = $this->portfolio_model->loadDetails($id);
            $this->load->view('header');
            $this->load->view('ProjectDetails', $result);
            $this->load->view('footer');
        }
    }
?>