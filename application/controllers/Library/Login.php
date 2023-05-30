<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('library/login_model');
	}
    public function index()
{
    $this->load->model('library/login_model');
     $this->register_model->get_all();
//    $data = array();
//    $data['users'] = $users;
   $this->load->view('library/login', $data);
}

	
    public function create()
    {
       
         $this->form_validation->set_rules('email_id', 'Email', 'required|valid_email');
         $this->form_validation->set_rules('password', 'Password', 'required');

     if($this->form_validation->run()== FALSE)
     {
        $this->load->view('library/login');
       
    }
     else{
        $data = array(
           
            'email_id'=>$this->input->post('email_id'),
            'password'=>$this->input->post('password'),
           
          
        );

      $this->login_model->create($data);
      redirect(base_url().'welcome/index');
    }
}

}
?>