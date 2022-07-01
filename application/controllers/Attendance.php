<?php
    class Attendance extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Attendance_model');

            if(!$this->session->userdata('user_id'))
            {
                redirect('login');
            }
        }

        public function index() {
            $role = $this->session->userdata('user_role');
            $id = $this->session->userdata('user_id');
            $data['check_timein'] = $this->Attendance_model->check_timein($id);
            $data['get_attendance'] = $this->Attendance_model->get_attendance($role, $id);

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('attendance/attendance', $data);
            $this->load->view('template/footer');
        }

        public function timein() {
            $user_id = $this->session->userdata('user_id');
            $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
		    $time_in = $date->format('Y-m-d H:i:s');
            $time_in_t = $date->format('H:i:s');

            if($time_in_t <= '08:00:00')
            {
                $status = 'On Time';
            }
            else
            {
                $status = 'Late';
            }

            $this->Attendance_model->timein($user_id, $time_in, $status);
            redirect('attendance');
        
        }
        public function timeout() {
            $action = $this->input->post('action');
            $user_id = $this->session->userdata('user_id');
            $time_in = $this->input->post('time_in');
            $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
		    $time_out = $date->format('Y-m-d H:i:s');
            $time_out_t = $date->format('H:i:s');

            if($time_out_t <= '16:00:00')
            {
                $status = 'On Time';
            }
            else
            {
                $status = 'Overtime';
            }

            $start = new DateTime($time_in);
            $end = new DateTime($time_out);
            $datediff = $start->diff($end);
            $duration = $datediff->format("%H:%I:%S");

            if($action == 'Time Out') {
                $this->Attendance_model->timeout($user_id, $time_in, $time_out, $duration, $status);
                redirect('attendance');
            }
        }
    }