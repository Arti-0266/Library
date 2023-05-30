<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('library/register_model');
	}
    public function index()
{
    $this->load->model('library/register_model');
    $users = $this->register_model->get_all();
   $data = array();
   $data['users'] = $users;
   $this->load->view('admin/register', $data);
}

	
    public function create()
    {
         $this->form_validation->set_rules('full_name', 'Name', 'required');
         $this->form_validation->set_rules('email_id', 'Email', 'required|valid_email');
         $this->form_validation->set_rules('password', 'Password', 'required');
         $this->form_validation->set_rules('repeat_password',  'Repeat Password', 'required');
        
         
        
    
     if($this->form_validation->run()== FALSE)
     {
        $this->load->view('admin/register');
       
    }
     else{
        $data = array(
            'full_name'=>$this->input->post('full_name'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'repeat_password'=>$this->input->post('repeat_password')
          
        );

      $this->register_model->create($data);
      redirect(base_url().'admin/login');
    }
}

}
?>