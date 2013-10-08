<?php
    class Pages extends CI_Controller{
    
    //loads views based on what page needs to be opened
        function home()
        {
            $this->load->view('home');
        }
        //Id is passed through URL to determine which detail needs to be opened
        function portfolio()
        {
            $this->load->view('portfolio');
        }
    }

?>