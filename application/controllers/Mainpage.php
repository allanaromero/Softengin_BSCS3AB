<?php
    class Mainpage extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('mainpage/mainpage');
            $this->load->view('template/footer');
        }

        public function createtask() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('mainpage/createnewtask');
            $this->load->view('template/footer');
        }

        public function updatetask() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('mainpage/updatetask');
            $this->load->view('template/footer');
        }

        public function viewtask() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('mainpage/viewtask');
            $this->load->view('template/footer');
        }
    }