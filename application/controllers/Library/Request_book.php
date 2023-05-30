
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_book extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('library/Request_model');
    $this->load->library('form_validation','session');
    $this->load->helper('form','url');
    $this->load->database();

}

public function index()
{
    $this->load->model('library/Request_model');
    $users = $this->Request_model->get_all();
    $data = array();
    $data['users'] = $users;
    // echo "<pre>";
    // print_r($data); die;
    // $this->output->set_content_type('application/json')->set_output(json_encode($data));
    $this->load->view('list_request',$data);

}
   

public function create()
{  
    $this->load->model('library/Request_model');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('institute_name', 'Institute Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('contact', 'Contact', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('pincode', 'Pincode', 'required');
    $this->form_validation->set_rules('occupation', 'Occupation', 'required');
    $this->form_validation->set_rules('type_of_books', 'Type Of Books', 'required');
    $this->form_validation->set_rules('total_no_of_books', 'Total Number Of Books', 'required');
    $this->form_validation->set_rules('purpose_of_books', 'Purpose Of Books', 'required');

    if ($this->form_validation->run() === FALSE)
     
    {
       
        $this->load->view('create_request',$data);         
        // $this->output->set_content_type('application/json')->set_output(json_encode(array('error' => validation_errors())));
        // this line overrides the response ye ho gaya or ek hai hum ye file ko connect karna chahte hai admin dashboard me let me show you
       
    }
    else
    {
        $data = array(
            'name' => $this->input->post('name'),
            'institute_name' => $this->input->post('institute_name'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('address'),
            'pincode' => $this->input->post('pincode'),
            'occupation' => $this->input->post('occupation'),
            'type_of_books' => $this->input->post('type_of_books'),
            'total_no_of_books' => $this->input->post('total_no_of_books'),
            'purpose_of_books' => $this->input->post('purpose_of_books')
        );
         
         $this->Request_model->create('form',$data);
         $this->session->set_flashdata('success','Successfully added we will connect with you soon');
         redirect(base_url('library/request_book/index'));

       
    }
}

function edit($userId)
{
    $userId = $this->uri->segment('4');
    // echo $userId; die; 
    $this->load->model('library/Request_model');
    $user = $this->Request_model->getUser($userId);
    $data = array();
    $data['user'] = $user;
    // print_r( $this->input->post()); die;

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('institute_name', 'Institute Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('contact', 'Contact', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('pincode', 'Pincode', 'required');
    $this->form_validation->set_rules('occupation', 'Occupation', 'required');
    $this->form_validation->set_rules('type_of_books', 'Type Of Books', 'required');
    $this->form_validation->set_rules('total_no_of_books', 'Total Number Of Books', 'required');
    $this->form_validation->set_rules('purpose_of_books', 'Purpose Of Books', 'required');

    if($this->form_validation->run() == false ){
        $this->load->view('edit_request',$data);

    }else{
        $data = array(
            'name' => $this->input->post('name'),
            'institute_name' => $this->input->post('institute_name'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('address'),
            'pincode' => $this->input->post('pincode'),
            'occupation' => $this->input->post('occupation'),
            'type_of_books' => $this->input->post('type_of_books'),
            'total_no_of_books' => $this->input->post('total_no_of_books'),
            'purpose_of_books' => $this->input->post('purpose_of_books')
        );

        $this->Request_model->updateUser($userId,$data); // function signature alag tha isliye 
        $this->session->set_flashdata('success', 'Record updated successfully!');
        redirect(base_url().'library/request_book/index');
    }
}

function delete($userId){
    $this->load->model('library/Request_model');
    $user = $this->Request_model->getUser($userId);
    if(empty($user)){
        $this->session->set_flashdata('failure','Record not found');
        redirect(base_url().'library/request_book/index');
    }

    $this->Request_model->deleteUser($userId);
    $this->session->set_flashdata('success', 'Record deleted successfully!');
    redirect(base_url().'library/request_book/index');
}
      
      
}    

     
       
     


?>