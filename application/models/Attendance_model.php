<?php
class Attendance_model extends CI_model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_attendance($role, $id)
    {
        if ($role == 1)
        {
            $this->db->from('attendance');
            $this->db->join('user', 'user.user_id = attendance.atd_userid');
            $this->db->order_by('time_in', 'desc');
            $query = $this->db->get();
            return $query;
        }
        else
        {
            $this->db->where('atd_userid', $id);
            $this->db->from('attendance');
            $this->db->join('user', 'user.user_id = attendance.atd_userid');
            $query = $this->db->get();
            return $query;
        }
    }

    public function check_timein($id)
    {
        $this->db->where('atd_userid', $id);
        $this->db->where('time_out', NULL);
        $query = $this->db->get('attendance');

        if($query->num_rows() == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function timein($user_id, $time_in, $status)
    {
        $this->db->set('atd_userid', $user_id);
        $this->db->set('time_in', $time_in);
        $this->db->set('time_out', NULL);
        $this->db->set('status', $status);
        $this->db->insert('attendance');
        return true;
    }

    public function timeout($user_id, $time_in, $time_out, $duration, $status)
    {
        $this->db->where('atd_userid', $user_id);
        $this->db->where('time_in', $time_in);
        $this->db->set('time_out', $time_out);
        $this->db->set('duration', $duration);
        $this->db->set('status', $status);
        $this->db->update('attendance');
        return true;
    }
}