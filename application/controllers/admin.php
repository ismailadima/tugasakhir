<?php


class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level')!="admin") {
			redirect('login');
		}
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index()
	{	
		$this->load->model('admin_model');
		$data['data'] = $this->admin_model->view_pegawai();
		$data['username'] = $this->session->userdata('username');
		$data['pesan'] = "";
		$this->load->view('admin/header_admin');
		$this->load->view('admin/admin',$data);
		$this->load->view('admin/footer_admin');
	}

	public function tambah_pegawai()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/add_staff',$data);
		$this->load->view('admin/footer_admin');
	}

	public function hapus_pegawai()
	{
		$id_peg = $_GET['no'];
		$this->load->model('admin_model');
		$hapus = $this->admin_model->del_pegawai($id_peg);
		if($hapus){
				$data['pesan'] = '<div class="showback">
            <div class="alert alert-success"><b>Data pegawai berhasil dihapus</b></div>  
          </div>';
			}
			else {
				$data['pesan'] = '<div class="showback">
            <div class="alert alert-danger"><b>Data pegawai gagal dihapus</b></div>  
          </div>';	
			}
		$this->load->model('admin_model');
		$data['data'] = $this->admin_model->view_pegawai();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/admin',$data);
		$this->load->view('admin/footer_admin');
	}

	public function profile()
	{
		$this->load->model('admin_model');
		$data['pesan'] = "";
		$data['profile'] = $this->admin_model->view_profile();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/view_profile',$data);
		$this->load->view('admin/footer_admin');
	}

	public function edit_profile()
	{
		$this->load->model('admin_model');
		$data['pesan'] ="";
		$data['profile'] = $this->admin_model->view_profile();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/edit_profile',$data);
		$this->load->view('admin/footer_admin');
	}

	public function save_profile()
	{
		$id_peg=$_GET['no'];
		$this->load->model('admin_model');
		$result=$this->admin_model->save_profile($id_peg,$_POST['first_name'],$_POST['last_name'],
				$_POST['jenis_kelamin'],$_POST['tempat_lahir'],$_POST['tanggal_lahir'],$_POST['alamat'],$_POST['phone']);
		
		if($result){
			$data['pesan'] = '<div class="showback">
            					<div class="alert alert-success"><b>Profil berhasil diubah</b></div>  
          						</div>';
			$this->load->model('admin_model');
			
			$data['profile'] = $this->admin_model->view_profile();
			$data['username'] = $this->session->userdata('username');
			$this->load->view('admin/header_admin');
			$this->load->view('admin/view_profile',$data);
			$this->load->view('admin/footer_admin');;
		} else
		{
			$data['pesan'] = '<div class="showback">
           						 <div class="alert alert-danger"><b>Profil gagal diubah, silahkan cek kembali</b></div>  
          						</div>';
          	$this->load->model('admin_model');
			$data['profile'] = $this->admin_model->view_profile();
			$data['username'] = $this->session->userdata('username');
			$this->load->view('admin/header_admin');
			$this->load->view('admin/edit_profile',$data);
			$this->load->view('admin/footer_admin');
		}

	}

	public function change_password()
	{
		$this->load->model('admin_model');
		$data['pesan'] = "";
		$data['user'] = $this->admin_model->change_password();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/change_password',$data);
		$this->load->view('admin/footer_admin');
	}

	public function save_password()
	{
		$this->load->model('admin_model');
		$password = array('password'=>md5($this->input->post('pass_lama',TRUE)));
		$passwordbaru = $this->input->post('pass_baru');
		$passwordbaru2 = $this->input->post('pass_baru2');
		// print_r($password);
		// die();
		$cek_passlama = $this->admin_model->cek_passlama($password);
		if($cek_passlama->num_rows()==0){
			$data['pesan'] = '<div class="showback">
            					<div class="alert alert-danger"><b>Password salah</b></div>  
          						</div>';
          	$this->load->model('admin_model');
			
			$data['user'] = $this->admin_model->change_password();
			$data['username'] = $this->session->userdata('username');
			$this->load->view('admin/header_admin');
			$this->load->view('admin/change_password',$data);
			$this->load->view('admin/footer_admin');
		}
		else
		{
			if(($passwordbaru!=$passwordbaru2)){
			$data['pesan'] = '<div class="showback">
            					<div class="alert alert-danger"><b>Password baru tidak sama</b></div>  
          						</div>';
          	$this->load->model('admin_model');
			
			$data['user'] = $this->admin_model->change_password();
			$data['username'] = $this->session->userdata('username');
			$this->load->view('admin/header_admin');
			$this->load->view('admin/change_password',$data);
			$this->load->view('admin/footer_admin');
			}
			else {
				$result = $this->admin_model->update_password($_POST['pass_baru']);
				$data['pesan'] = '<div class="showback">
             					<div class="alert alert-success"><b>Password berhasil diubah</b></div>  
           						</div>';
           		$this->load->model('admin_model');
				$data['data'] = $this->admin_model->view_pegawai();
				$data['username'] = $this->session->userdata('username');
				$this->load->view('admin/header_admin');
				$this->load->view('admin/admin',$data);
				$this->load->view('admin/footer_admin');
			}
		}
	}
}

?>