<?php
    class Administration extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('administration/manageadmin');
            $this->load->view('template/footer');
        }

        public function manageemployee() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('administration/manageemployee');
            $this->load->view('template/footer');
        }

        public function addemployee() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('administration/addemployee');
            $this->load->view('template/footer');
        }

        public function editemployee() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('administration/editemployee');
            $this->load->view('template/footer');
        }

        public function editadmin() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('administration/editadmin');
            $this->load->view('template/footer');
        }
        
        public function changepasswordadmin() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('administration/changepasswordadmin');
            $this->load->view('template/footer');
        }
        
        public function changepasswordemployee() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('administration/changepasswordemployee');
            $this->load->view('template/footer');
        }     
    }