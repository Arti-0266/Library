<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function create_user($data)
    {
        $this->db->insert('users', $data);
    }

    public function get_user_by_email($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        return $query->row();
    }

    public function set_reset_token($user_id, $reset_token)
    {
        $this->db->set('reset_token', $reset_token);
        $this->db->where('id', $user_id);
        $this->db->update('users');
    }

    public function get_user_by_reset_token($reset_token)
    {
        $query = $this->db->get_where('users', array('reset_token' => $reset_token));
        return $query->row();
    }

    public function reset_password($user_id, $new_password)
    {
        $this->db->set('password', password_hash($new_password, PASSWORD_DEFAULT));
        $this->db->set('reset_token', null);
        $this->db->where('id', $user_id);
        $this->db->update('users');
    }

}
?>