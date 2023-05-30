<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$page_data['page_title'] = "Home Page";
		$page_data['page'] = 'home';
		$this->load->view('libraryview/index',$page_data);
	}
	public function inner_page()
	{
		$this->load->view('libraryview/inner_page');
	}
	public function donation()
	{
		$page_data['page_title'] = "Donation";
		$page_data['page'] = 'donation';
		$this->load->view('libraryview/donation',$page_data);
	}
	public function request_book()
	{
		$page_data['page_title'] = "Request_book";
		$page_data['page'] = 'request_book';
		$this->load->view('libraryview/request_book',$page_data);
	}
	public function volunteer()
	{
		$page_data['page_title'] = "Volunteer";
		$page_data['page'] = 'volunteer';
		$this->load->view('libraryview/volunteer',$page_data);
	}
	public function contact()
	{
		$page_data['page_title'] = "Contact";
		$page_data['page'] = 'contact';
		$this->load->view('library/contact',$page_data);
	}
}
