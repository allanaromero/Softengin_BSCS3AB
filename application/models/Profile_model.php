<?php
class Profile_model extends CI_model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_info($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user');
        return $query;
    }

    public function updateadmin($user_id, $editadmin)
    {
        $this->db->where('user_id', $user_id);
        $this->db->update('user', $editadmin);
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