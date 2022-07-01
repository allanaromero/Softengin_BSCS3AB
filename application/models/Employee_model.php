<?php
class Employee_model extends CI_model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_employees() 
    {
        $admin = 1;
        $this->db->where('user_role !=', $admin);
        $query = $this->db->get('user');
        return $query;
    }

    public function addemployee($newemployee) 
    {
        $this->db->insert('user', $newemployee);
        return true;
    }

    public function viewemployee($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user');
        return $query;
    }

    public function deleteemployee($user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->delete('user');
        return true;
    }

    public function updateemployee($user_id, $editemployee)
    {
        $this->db->where('user_id', $user_id);
        $this->db->update('user', $editemployee);
        return true;
    }

    public function changepass($user_id, $newpass)
    {
        $this->db->where('user_id', $user_id);
        $this->db->set('password', $newpass);
        $this->db->update('user');
        return true;
    }
}