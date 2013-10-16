<?php
    class portfolioController extends CI_Controller{
        function featured(){
            $this->load->model('portfolio_Model');
            $data = array (
                'pname' => $pname,
                'description' => $description,
                'fp' => $fp
            );
            var_dump($data);
            $this->portfolio_Model->updateFeatured($data);
        }
    }
?>