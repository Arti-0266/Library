
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donor_detail extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('library/Donor_model');
    $this->load->library('form_validation','session');
    $this->load->helper('form','url');
    $this->load->database();
}

public function index()
{
    $this->load->model('library/Donor_model');
    $users = $this->Donor_model->get_all();
    $data = array();
    $data['users'] = $users;
    //  echo "<pre>";
    //   print_r($data); die;
    // $this->output->set_content_type('application/json')->set_output(json_encode($data));
    $this->load->view('list',$data);
}
   

public function create()
{
    
    $this->load->model('library/Donor_model');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('contact', 'Contact', 'required');
    $this->form_validation->set_rules('occupation', 'Occupation', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('address', 'Address','required');
    $this->form_validation->set_rules('pincode', 'Pin Code', 'required');
    $this->form_validation->set_rules('no_of_donated_books', 'No of Donated Books', 'required');
    
    if ($this->form_validation->run() === FALSE)
    {
         $this->load->view('create');
        // $this->output->set_content_type('application/json')->set_output(json_encode(array('error' => validation_errors())));

       
    }
    else
    {
        
   
    $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'contact' => $this->input->post('contact'),
        'occupation' => $this->input->post('occupation'),
        'gender' => $this->input->post('gender'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
        'no_of_donated_books' => $this->input->post('no_of_donated_books')
    );
     

    
        $this->Donor_model->create($data);
        $this->session->set_flashdata('success','Successfully added we will connect with you soon');
        redirect(base_url().'library/donor_detail/index');
   
       
    }
}


function edit($userId)
{
    
    $userId = $this->uri->segment('4');
    // echo $userId; die;

    $this->load->model('Donor_model');
    $user = $this->Donor_model->getUser($userId);
    $data = array();
    $data['user'] = $user;

    // print_r($data); die;

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('contact', 'Contact', 'required');
    $this->form_validation->set_rules('occupation', 'Occupation', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('address', 'Address','required');
    $this->form_validation->set_rules('pincode', 'Pin Code', 'required');
    $this->form_validation->set_rules('no_of_donated_books', 'No of Donated Books', 'required');

    if($this->form_validation->run() == false ){
    $this->load->view('edit',$data);

    }else{
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'occupation' => $this->input->post('occupation'),
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('address'),
            'pincode' => $this->input->post('pincode'),
            'no_of_donated_books' => $this->input->post('no_of_donated_books')
        );
        $this->Donor_model->updateUser($userId,$data);
        $this->session->set_flashdata('success', 'Record updated successfully!');
        redirect(base_url().'library/donor_detail/index');
    }
}

function delete($userId){
    $this->load->model('library/Donor_model');
    $user = $this->Donor_model->getUser($userId);
    if(empty($user)){
        $this->session->set_flashdata('failure','Record not found');
        redirect(base_url().'library/donor_detail/index');
    }

    $this->Donor_model->deleteUser($userId);
    $this->session->set_flashdata('success', 'Record deleted successfully!');
    redirect(base_url().'library/donor_detail/index');
}

 
      
}    

     
       
     


?>