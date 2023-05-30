<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

public function get_all()
{
    return $users = $this->db->get('register')->result();
}

public function create($register,$data)
{
    $this->db->insert('register', $data);
    return $this->db->insert_id();
}

}

?>
