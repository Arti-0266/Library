
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('library/Volunteer_model');
    $this->load->library('form_validation','session');
    $this->load->helper('form','url');
    $this->load->database();
}

public function index()
{
    $this->load->model('library/Volunteer_model');
    $users = $this->Volunteer_model->get_all();
    $data = array();
    $data['users'] = $users;
    // $this->output->set_content_type('application/json')->set_output(json_encode($data));
    $this->load->view('list_volunteer',$data);
}

public function create()
{
    $this->load->model('library/Volunteer_model');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('contact', 'Contact', 'required');
    $this->form_validation->set_rules('occupation', 'Occupation', 'required');
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('pincode', 'Pin Code', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('qualification', 'Qualification', 'required');
    $this->form_validation->set_rules('do_you_have_any_past_volunteering_experience', 'Do You Have Any Past Volunteering Experience', 'required');
    $this->form_validation->set_rules('how_would_you_like_to_help_us', 'How Would You Like to Help Us', 'required');

    if ($this->form_validation->run() === FALSE)
     
    {
        $this->load->view('create_volunteer');
        // $this->output->set_content_type('application/json')->set_output(json_encode(array('error' => validation_errors())));
    }
    else
    {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'occupation' => $this->input->post('occupation'),
            'address' => $this->input->post('address'),
            'pincode' => $this->input->post('pincode'),
            'gender' => $this->input->post('gender'),
            'qualification' => $this->input->post('qualification'),
            'do_you_have_any_past_volunteering_experience' => $this->input->post('do_you_have_any_past_volunteering_experience'),
            'how_would_you_like_to_help_us' => $this->input->post('how_would_you_like_to_help_us')
        );

        $this->Volunteer_model->create($data);
        // $this->session->set_flashdata('success','Successfully added we will connect with you soon');
         redirect(base_url('library/volunteer/index'));

    }
}
 
function edit($userId)
{
    $this->load->model('Volunteer_model');
    $user = $this->Volunteer_model->getUser($userId);
    $data = array();
    $data['user'] = $user;

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('contact', 'Contact', 'required');
    $this->form_validation->set_rules('occupation', 'Occupation', 'required');
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('pincode', 'Pin Code', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('qualification', 'Qualification', 'required');
    $this->form_validation->set_rules('do_you_have_any_past_volunteering_experience', 'Do You Have Any Past Volunteering Experience', 'required');
    $this->form_validation->set_rules('how_would_you_like_to_help_us', 'How Would You Like to Help Us', 'required');
    if($this->form_validation->run() == false ){
    $this->load->view('edit_volunteer',$data);

    }else{
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'occupation' => $this->input->post('occupation'),
            'address' => $this->input->post('address'),
            'pincode' => $this->input->post('pincode'),
            'gender' => $this->input->post('gender'),
            'qualification' => $this->input->post('qualification'),
            'do_you_have_any_past_volunteering_experience' => $this->input->post('do_you_have_any_past_volunteering_experience'),
            'how_would_you_like_to_help_us' => $this->input->post('how_would_you_like_to_help_us')
        );
        $this->Volunteer_model->updateUser($userId,$data);
        $this->session->set_flashdata('success', 'Record updated successfully!');
        redirect(base_url().'library/volunteer/index');
    }
}

function delete($userId){
    $this->load->model('Volunteer_model');
    $user = $this->Volunteer_model->getUser($userId);
    if(empty($user)){
        $this->session->set_flashdata('failure','Record not found');
        redirect(base_url().'library/volunteer/index');
    }

    $this->Volunteer_model->deleteUser($userId);
    $this->session->set_flashdata('success', 'Record deleted successfully!');
    redirect(base_url().'library/volunteer/index');
}
      
}    

?>