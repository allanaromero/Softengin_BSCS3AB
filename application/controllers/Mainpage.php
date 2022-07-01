<?php
    class Mainpage extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Task_model');

            if(!$this->session->userdata('user_id'))
            {
                redirect('login');
            }
        }

        public function index() {
            $role = $this->session->userdata('user_role');
            $id = $this->session->userdata('user_id');
            $data['get_tasks'] = $this->Task_model->get_tasks($role, $id);

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('mainpage/mainpage', $data);
            $this->load->view('template/footer');
        }

        public function createtask() {
            $data['employee'] = $this->Task_model->get_employee();

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('mainpage/createnewtask', $data);
            $this->load->view('template/footer');
        }

        public function updatetaskview() {
            $task_id = $this->uri->segment(3);
            $data['viewtask'] = $this->Task_model->getindivtask($task_id);
            $data['employee'] = $this->Task_model->get_employee();

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('mainpage/updatetask', $data);
            $this->load->view('template/footer');
        }

        public function viewtask() {
            $task_id = $this->uri->segment(3);
            $data['viewtask'] = $this->Task_model->getindivtask($task_id);

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('mainpage/viewtask', $data);
            $this->load->view('template/footer');
        }

        public function addtask() {
            $action = $this->input->post('action');

            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $deadline = $this->input->post('deadline');
            $assigned_to = $this->input->post('assigned_to');
            $status = 'To Do';

            $task = array(
                'title' => $title,
                'description' => $description,
                'deadline' => $deadline,
                'assigned_to' => $assigned_to,
                'status' => $status
            );

            if($action == 'Submit')
            {
                $this->Task_model->addtask($task);
                redirect('mainpage');
            }
        }

        public function deletetask() {
            $task_id = $this->uri->segment(3);
            $deleted = $this->Task_model->deletetask($task_id);

            if($deleted)
            {
                $this->index();
            }
        }

        public function updatetask() {
            $action = $this->input->post('action');

            $task_id = $this->input->post('task_id');
            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $deadline = $this->input->post('deadline');
            $assigned_to = $this->input->post('assigned_to');
            $status = $this->input->post('status');

            $task = array(
                'title' => $title,
                'description' => $description,
                'deadline' => $deadline,
                'assigned_to' => $assigned_to,
                'status' => $status
            );

            if($action == 'Submit')
            {
                $this->Task_model->updatetask($task_id, $task);
                redirect('mainpage');
            }
        }
    }