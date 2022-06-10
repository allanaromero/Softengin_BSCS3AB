<?php
    class Attendance extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('attendance/attendanceadmin');
            // $this->load->view('attendance/attendanceemployee');
            $this->load->view('template/footer');
        }
    }