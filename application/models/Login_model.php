<?php
class Login_model extends CI_model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password)
    {
        $user_role = 2;
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('user_role', $user_role);
        $this->db->limit(1);
        $query = $this->db->get('user');
        
        if($query->num_rows() == 1)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }

    public function adminlogin($username, $password)
    {
        $user_role = 1;
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('user_role', $user_role);
        $this->db->limit(1);
        $query = $this->db->get('user');
        
        if($query->num_rows() == 1)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }
}