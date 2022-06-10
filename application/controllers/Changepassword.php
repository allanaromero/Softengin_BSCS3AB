<?php
    class ChangepasswordAdmin extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();


        }

        public function index() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('mainpage');
            $this->load->view('template/footer');
        }
    }
    class ChangepasswordEmployee extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();


        }

        public function index() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('mainpage');
            $this->load->view('template/footer');
        }
    }