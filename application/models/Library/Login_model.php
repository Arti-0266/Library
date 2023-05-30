<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

public function get_all()
{
    return $users = $this->db->get('login')->result();
}

public function create($register,$data)
{
    $this->db->insert('login', $data);
    return $this->db->insert_id();
}

}

?>
