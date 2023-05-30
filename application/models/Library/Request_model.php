<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_model extends CI_Model {

public function get_all()
{
    return $this->db->get('request_books')->result();
}

public function create($table_name,$data)
{

  
    // echo "<pre>";
    // print_r($data); die;
    $this->db->insert('request_books', $data);
    // return $this->db->insert_id();
}
//  this section will be access by admin only...
public function getUser($useId)
{
  
    // $this->db->where('id', $userId);
    $collection = $this->db->select()
                        ->where('id', $useId)
                        ->get('request_books');
    // echo $this->db->last_query(); die;
    // return $collection->result(); /// ye collection of object return karta
    // return $collection->result_array(); /// ye collection of array return karta
    return $collection->row(); /// ye single object return karega i.e single row we can use any of the three
}
public function updateUser($userId, $data)
{
    $this->db->where('id', $userId);
    $this->db->update('request_books', $data);
    // echo $this->db->last_query(); die;
    return $this->db->affected_rows();
    
}

public function deleteUser($userId)
{
    $this->db->where('id', $userId);
    $this->db->delete('request_books');
    return $this->db->affected_rows();
}
}

?>
