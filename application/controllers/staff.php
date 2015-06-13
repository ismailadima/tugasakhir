<?php

/**
* 
*/
class Staff extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level')!="staff") {
			redirect('login');
		}
	}

	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/staff',$data);	
		$this->load->view('admin/footer_admin');
	}
}

?>