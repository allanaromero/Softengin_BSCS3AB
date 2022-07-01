<?php
    class Employee extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Employee_model');

            if(!$this->session->userdata('user_id'))
            {
                redirect('login');
            }
            else if($this->session->userdata('username') != 'admin')
            {
                redirect('mainpage');
            }
        }

        public function index() {
            $data['get_employee'] = $this->Employee_model->get_employees();

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('administration/manageemployee', $data);
            $this->load->view('template/footer');
        }

        public function addemployee() {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('administration/addemployee');
            $this->load->view('template/footer');
        }

        public function viewemployee() {
            $user_id = $this->uri->segment(3);
            $data['viewemployee'] = $this->Employee_model->viewemployee($user_id);

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('administration/viewemployee', $data);
            $this->load->view('template/footer');
        }

        public function editemployee() {
            $user_id = $this->uri->segment(3);
            $data['viewemployee'] = $this->Employee_model->viewemployee($user_id);

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('administration/updateemployee', $data);
            $this->load->view('template/footer');
        }

        public function changepasswordemployee() {
            $user_id = $this->uri->segment(3);
            $data['viewemployee'] = $this->Employee_model->viewemployee($user_id);

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('administration/changepasswordemployee', $data);
            $this->load->view('template/footer');
        }

        public function addnewemployee() {
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
            array(
                'is_unique'     => 'This %s already exists.'
            ));

            if ($this->form_validation->run())
            {
                $password = hash("sha512", $this->input->post('password'));

                $action = $this->input->post('action');
                $newemployee = array(
                    'full_name' => $this->input->post('full_name'),
                    'department' => $this->input->post('department'),
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                    'password' => $password,
                    'user_role' => 2
                );

                if ($action == 'Submit')
                {
                    $this->Employee_model->addemployee($newemployee);
                    redirect('employee');
                }
            }
            else
            {
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('administration/addemployee');
                $this->load->view('template/footer');
            }
        }

        public function deleteemployee() {
            $user_id = $this->uri->segment(3);
            $deleted = $this->Employee_model->deleteemployee($user_id);

            if($deleted)
            {
                $this->index();
            }
        }

        public function updateemployee() {
            $action = $this->input->post('action');
            $user_id = $this->input->post('user_id');

            $editemployee = array(
                'full_name' => $this->input->post('full_name'),
                'department' => $this->input->post('department'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
            );

            if($action == 'Update')
            {
                $this->Employee_model->updateemployee($user_id, $editemployee);
                redirect('employee');
            }
        }

        public function changepass() {
            $action = $this->input->post('action');
            $user_id = $this->input->post('user_id');

            if($action == 'Change')
            {
                $this->form_validation->set_rules('password', 'New Password', 'required|trim');
                $this->form_validation->set_rules('conf_password', 'Confirm Password', 'required|matches[password]');

                if($this->form_validation->run())
                {
                    $newpass = hash("sha512", $this->input->post('password'));

                    $this->Employee_model->changepass($user_id, $newpass);
                    redirect('employee');
                }
                else
                {
                    $this->load->view('template/header');
                    $this->load->view('template/navbar');
                    $this->load->view('administration/changepasswordemployee');
                    $this->load->view('template/footer');
                }
            }
            else if($action == 'Cancel')
            {
                redirect('employee');
            }
        }
    }