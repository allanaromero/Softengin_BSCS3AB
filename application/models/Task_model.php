<?php
class Task_model extends CI_model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_tasks($role, $id)
    {
        if ($role == 1)
        {
            $this->db->from('task');
            $this->db->join('user', 'user.user_id = task.assigned_to');
            $this->db->order_by('deadline', 'asc');
            $query = $this->db->get();
            return $query;
        }
        else if ($role == 2)
        {
            $this->db->where('assigned_to', $id);
            $this->db->from('task');
            $this->db->join('user', 'user.user_id = task.assigned_to');
            $data = $this->db->get();
            return $data;
        }
    }

    public function get_employee()
    {
        $admin = 1;
        $this->db->where('user_role !=', $admin);
        $query = $this->db->get('user');
        return $query;
    }

    public function addtask($task)
    {
        $this->db->insert('task', $task);
        return true;
    }

    public function getindivtask($task_id)
    {
        $this->db->where('task_id', $task_id);
        $this->db->from('task');
        $this->db->join('user', 'user.user_id = task.assigned_to');
        $query = $this->db->get();

        return $query;
    }

    public function deletetask($task_id)
    {
        $this->db->where('task_id', $task_id);
        $this->db->delete('task');
        return true;
    }

    public function updatetask($task_id, $task)
    {
        $this->db->where('task_id', $task_id);
        $this->db->update('task', $task);
        return true;
    }
}