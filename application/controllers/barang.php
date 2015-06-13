<?php
/**
* 
*/
class Barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->model('barang_model');
	}

	public function index()
	{
		$data['pesan'] = "";
		$data['data'] = $this->barang_model->view_barang();;
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/list_barang',$data);
		$this->load->view('admin/footer_admin');

	}

	public function do_upload()
		{
			//memasukkan data operator dan upload gambar
			$config['upload_path'] = './assets/images/barang/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1024';
			$config['max_width']  = '1900';
			$config['max_height']  = '1200';

			// $this->load->model('Crud_model','crud',TRUE);
			// $this->crud->operator_insert();

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload())
			{
			redirect('barang/tambah_barang');
			}
			else
			{
				$data = array('unggah_data' => $this->upload->data());
				foreach ($data as $value) {
					$filename = $value['file_name'];
					$this->barang_model->add_barang($filename);
				}
				//$this->load->view('berhasil');
				redirect('barang');
			}
		}

	public function tambah_barang()
	{
		$data['pesan'] = "";
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/add_barang',$data);
		$this->load->view('admin/footer_admin');
	}

	public function add_barang()
	{
		$data['pesan'] = "";
		$this->load->model('barang_model');
		$nama_barang = array('nama_barang'=>$this->input->post('nama_barang',TRUE));
		// print_r($nama_barang);
		// die();
		$cek_nama = $this->barang_model->cek_nama($nama_barang);
		if($cek_nama->num_rows()==1){
			$data ['pesan'] = '<div class="showback">
            					<div class="alert alert-danger"><b>Nama barang sudah digunakan</b></div>  
          						</div>';
			// $data['username'] = $this->session->userdata('username');
			// $this->load->view('admin/header_admin');
			// $this->load->view('admin/add_barang',$data);
			// $this->load->view('admin/footer_admin');
			}
		else 
			$upload = $this->do_upload();
			$save = $this->barang_model->add_barang();
			$data['pesan'] = '<div class="showback">
            				<div class="alert alert-success"><b>Barang berhasil ditambahkan</b></div>  
          					</div>';
			// if($save){
			// $data['pesan'] = '<div class="showback">
   //          				<div class="alert alert-success"><b>Barang berhasil ditambahkan</b></div>  
   //        					</div>';
			// }
			// else {
			// $data['pesan'] = '<div class="showback">
   //          					<div class="alert alert-danger"><b>Barang gagal ditambahkan</b></div>  
   //        						</div>';
			// }
		$data['data'] = $this->barang_model->view_barang();;
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/list_barang',$data);
		$this->load->view('admin/footer_admin');
	}

	public function edit_barang()
	{
		$id_bar = $_GET['no'];
		$data['pesan'] = "";
		$data['username'] = $this->session->userdata('username');
		$data['barang'] = $this->barang_model->get_barang($id_bar);
		$this->load->view('admin/header_admin');
		$this->load->view('admin/edit_barang',$data);
		$this->load->view('admin/footer_admin');
	}

	public function save_barang()
	{
		$id_bar=$_GET['no'];
		$result=$this->barang_model->edit_barang($id_bar,$_POST['nama_barang'],$_POST['keterangan'],
				$_POST['jumlah'],$_POST['stok'],$_POST['harga'],$_POST['id_jbarang']);
		
		if($result){
			$data['pesan'] = '<div class="showback">
            				<div class="alert alert-success"><b>Data berhasil diubah</b></div>  
          					</div>';
		}
		else {
			$data['pesan'] = '<div class="showback">
            				<div class="alert alert-danger"><b>Data gagal diubah</b></div>  
          					</div>';
		}
		$data['data'] = $this->barang_model->view_barang();;
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/list_barang',$data);
		$this->load->view('admin/footer_admin');
	}

	public function hapus_barang()
	{
		$id_bar = $_GET['no'];
		$hapus = $this->barang_model->del_barang($id_bar);
		if($hapus){
			$data['pesan'] = '<div class="showback">
            				<div class="alert alert-success"><b>Data berhasil dihapus</b></div>  
          					</div>';
		}
		else {
			$data['pesan'] = '<div class="showback">
            				<div class="alert alert-success"><b>Data gagal dihapus</b></div>  
          					</div>';
		}
		$data['data'] = $this->barang_model->view_barang();;
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/list_barang',$data);
		$this->load->view('admin/footer_admin');
	}
}


?>