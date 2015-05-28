<?php

/**
* 
*/
class Login_ctr extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		$data = array('username'=>$this->input->post('username',TRUE),
						'password'=> md5($this->input->post('password',TRUE))
						);
		// print_r($data);
		// die();
		$this->load->model('login_model');
		$hasil = $this->login_model->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='superadmin') {
				redirect('superadmin');
			}
			elseif ($this->session->userdata('level')=='admin') {
				redirect('admin');
			}
			elseif ($this->session->userdata('level')=='staff') {
				redirect('staff');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}
?>