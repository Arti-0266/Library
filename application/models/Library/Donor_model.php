<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donor_model extends CI_Model {

public function get_all()
{
   
    return $users =  $this->db->get('donation')->result();
}

public function create($donation,$data)
{
     // echo "<pre>";
    // print_r($data); die;
    $this->db->insert('donation', $data);
    return $this->db->insert_id();
}

function getUser($userId){
    // echo $userId; die;
    $collection = $this->db->select()
                       ->where('user_id', $userId)
                       ->get('donation');
    // $this->customDb->last_query(); die;
    return $collection->row();    // return $user = $this->db->get('donation')->row_array();
}

function updateUser($userId, $data){
    
    $this->db->where('user_id',$userId);
    $this->db->update('donation', $data);
    return $this->db->affected_rows();
}

function deleteUser($userId){
    $this->db->where('user_id',$userId);
    $this->db->delete('donation');
    return $this->db->affected_rows();
}


// public function update($id, $data)
// {
//     $this->db->where('id', $id);
//     $this->db->update('donation', $data);
//     return $this->db->affected_rows();
// }

// public function delete($id)
// {
//     $this->db->where('id', $id);
//     $this->db->delete('donation');
//     return $this->db->affected_rows();
// }
}

?>
