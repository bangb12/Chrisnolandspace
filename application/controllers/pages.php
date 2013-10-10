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
        function more_details($id)
        {
            $data = array('id' => $id);
            $this->load->view('ProjectDetails', $data);
        }
        function about_me()
        {
            $this->load->view('AboutMe');
        }
        function admin()
        {
            $this->load->view('Admin');
        }
    }

?>