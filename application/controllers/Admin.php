<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	
	public function index()
	{
		
		if($this->input->post()){
			$email = $this->input->post('email_id');
			$password = sha1($this->input->post('password'));

		    $result = $this->db->get_where('users_login',array('email_id'=>$email, 'password'=>$password, 'account_status'=>1, 'role'=>'SUADMIN'))->result_array();
		    $uid = $result[0]['id'];
			$user_name = $result[0]['user_name'];
			$email = $result[0]['email_id'];

			$this->session->set_userdata('admin_uid',$uid);
			$this->session->set_userdata('admin_user_name',$user_name);
			$this->session->set_userdata('admin_email',$email);
		}
		if($this->session->userdata['admin_uid']){
			// redirect to dashboard
			$page_data['page_title'] = 'Dashboard';
			$page_data[] = 'dashboard';
			$this->load->view('admin/index',$page_data);
		}else{
			$page_data['page_title'] = "Login Admin";
			$this->load->view('admin/login',$page_data);
		}
	
	}
    
	

    public function logout(){
	   $this->session->sess_destroy();
	   redirect('admin');
    }


   

	
}
