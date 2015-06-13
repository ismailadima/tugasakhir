<?php
	/**
	* 
	*/
	class Pegawai extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('level')!="admin") {
			redirect('login');
			}
		}

		public function tambah_pegawai()
		{
			$data['pesan'] = "";
			$this->load->model('admin_model');
			$cek_username = array('username'=>$this->input->post('username',TRUE));
			//mengecek username apakah sudah digunakan
			$cek = $this->admin_model->cek_username($cek_username);
			if($cek->num_rows()==1){
				$data['pesan'] =  '<div class="showback">
            		<div class="alert alert-danger"><b>Username sudah digunakan silahkan gunakan yang lain</b></div>  
          			</div>';
			}
			else {

				$add = $this->admin_model->add_pegawai();
				if($add){
					$data['pesan'] = '<div class="showback">
            							<div class="alert alert-success"><b>Data ditambahkan</b></div>  
          								</div>';
				}
				else {
					$data['pesan'] = '<div class="showback">
            							<div class="alert alert-danger"><b>Data gagal ditambahkan, silahkan cek kembali</b></div>  
          								</div>';	
				}
			}
			
			// redirect(base_url('admin'))
			$this->load->model('admin_model');
			$data['data'] = $this->admin_model->view_pegawai();
			$data['username'] = $this->session->userdata('username');
			$this->load->view('admin/header_admin');
			$this->load->view('admin/admin',$data);
			$this->load->view('admin/footer_admin');
		}
	}
?>