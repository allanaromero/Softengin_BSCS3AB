<?php
    class Profile extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this->load->model('Profile_model');

            if(!$this->session->userdata('user_id'))
            {
                redirect('login');
            }
        }

        public function index() {
            $user_id = $this->session->userdata('user_id');
            $data['get_info'] = $this->Profile_model->get_info($user_id);

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('profile/profile', $data);
            $this->load->view('template/footer');
        }

        public function editadmin() {
            $user_id = $this->session->userdata('user_id');
            $data['get_info'] = $this->Profile_model->get_info($user_id);

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('profile/updateadmin', $data);
            $this->load->view('template/footer');
        }

        public function changeadminpassword() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('profile/changepasswordadmin');
            $this->load->view('template/footer');
        }

        public function updateadmin() {
            $action = $this->input->post('action');
            $user_id = $this->input->post('user_id');

            $editadmin = array(
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
            );

            if($action == 'Update')
            {
                $this->Profile_model->updateadmin($user_id, $editadmin);
                redirect('profile');
            }
        }

        public function changepass() {
            $action = $this->input->post('action');
            $user_id = $this->session->userdata('user_id');

            if($action == 'Change')
            {
                $this->form_validation->set_rules('password', 'New Password', 'required|trim');
                $this->form_validation->set_rules('conf_password', 'Confirm Password', 'required|matches[password]');

                if($this->form_validation->run())
                {
                    $newpass = hash("sha512", $this->input->post('password'));

                    $this->Profile_model->changepass($user_id, $newpass);
                    redirect('profile');
                }
                else
                {
                    $this->load->view('template/header');
                    $this->load->view('template/navbar');
                    $this->load->view('profile/changepasswordadmin');
                    $this->load->view('template/footer');
                }
            }
            else if($action == 'Cancel')
            {
                redirect('profile');
            }
        }
    }