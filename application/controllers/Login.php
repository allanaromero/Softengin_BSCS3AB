<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Login_model');

        if($this->session->userdata('user_id'))
        {
            redirect('mainpage');
        }
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('login/login');
        $this->load->view('template/footer');
    }

    public function adminlogin()
    {
        $this->load->view('template/header');
        $this->load->view('login/adminlogin');
        $this->load->view('template/footer');
    }

    public function validation()
    {
        $action = $this->input->post('action');

        if ($action == 'Log In') {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run()) {
                $username = $this->input->post('username');
                // $password = $this->input->post('password');
                $password = hash("sha512", $this->input->post('password'));
                $result = $this->Login_model->login($username, $password);

                if ($result) {
                    $userdata = array(
                        'user_id' => $result->user_id,
                        'username' => $result->username,
                        'full_name' => $result->full_name,
                        'email' => $result->email,
                        'department' => $result->department,
                        'user_role' => $result->user_role
                    );
                    $this->session->set_userdata($userdata);
                    redirect('mainpage');
                } 
                else {
                    $this->session->set_flashdata('message', 'Invalid Username or Password');
                    $this->load->view('template/header');
                    $this->load->view('login/login');
                    $this->load->view('template/footer');
                }
            }
        }
    }

    public function adminvalidation()
    {
        $action = $this->input->post('action');

        if ($action == 'Log In') {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run()) {
                $username = $this->input->post('username');
                // $password = $this->input->post('password');
                $password = hash("sha512", $this->input->post('password'));
                $response = $this->Login_model->adminlogin($username, $password);

                if ($response) {
                    $userdata = array(
                        'user_id' => $response->user_id,
                        'username' => $response->username,
                        'full_name' => $response->full_name,
                        'email' => $response->email,
                        'department' => $response->department,
                        'user_role' => $response->user_role
                    );
                    $this->session->set_userdata($userdata);
                    redirect('mainpage');
                } 
                else {
                    $this->session->set_flashdata('message', 'Invalid Username or Password');
                    $this->load->view('template/header');
                    $this->load->view('login/adminlogin');
                    $this->load->view('template/footer');
                }
            }
        }
    }
}
