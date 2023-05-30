<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer_model extends CI_Model {

public function get_all()
{
    return $this->db->get('volunteer_form')->result();
}

public function create($data)
{
    $this->db->insert('volunteer_form', $data);
    // return $this->db->insert_id();
}

function getUser($userId){
   $collection = $this->db->select()
                        ->where('id', $userId)
                        ->get('volunteer_form');
    return $collection->row();
    // $this->db->where('id',$userId);
    // return $user = $this->db->get('volunteer_form')->row_array();
}

function updateUser($userId, $data){
    $this->db->where('id',$userId);
    $this->db->update('volunteer_form', $data);
    return $this->db->affected_row();
}

function deleteUser($userId){
    $this->db->where('id',$userId);
    $this->db->delete('volunteer_form');
}

}

?>
