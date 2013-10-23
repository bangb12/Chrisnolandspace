<?php
    class Pages extends CI_Controller{
    
    //loads views based on what page needs to be opened
        function home()
        {
            //Adds data from FeaturedProject table to be sent into the home view
            $result = $this->db->get('FeaturedProject');
	    $featured['featured'] = $result->result();
            $this->load->view('home', $featured);
            $this->load->view('footer');
        }
        function portfolio()
        {
            //Adds data from the Projects table to be sent into the portfolio view
            $result = $this->db->get('Projects');
            $projects['projects'] = $result->result();
            $this->load->view('header');
            $this->load->view('portfolio', $projects);
            $this->load->view('footer');
        }
        function about_me()
        {
            $this->load->view('header');
            $this->load->view('AboutMe');
            $this->load->view('footer');
        }
        function admin()
        {
            $this->load->helper('form');
            $this->load->view('header');
            $this->load->view('Admin');
            $this->load->view('footer');
        }
    }

?>