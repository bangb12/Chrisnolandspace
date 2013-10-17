<?php
    class Pages extends CI_Controller{
    
    //loads views based on what page needs to be opened
        function home()
        {
            $result = $this->db->get('FeaturedProject');
	    $featured['featured'] = $result->result();
            $this->load->view('home', $featured);
            $this->load->view('footer');
        }
        //Id is passed through URL to determine which detail needs to be opened
        function portfolio()
        {
            $this->load->view('header');
            $this->load->view('portfolio');
            $this->load->view('footer');
        }
        function more_details($id)
        {
            $data = array('id' => $id);
            $this->load->view('header');
            $this->load->view('ProjectDetails', $data);
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