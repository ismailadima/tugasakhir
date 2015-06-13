<?php
/**
* 
*/
class Transaksi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->model('transaksi_model');
	}

	public function index()
	{
		$data['pesan']="";
		$data['transaksi'] = $this->transaksi_model->view_transaksi();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/view_transaksi',$data);
		$this->load->view('admin/footer_admin');
	}

	public function barang_trans()
	{
		$idtrans = $_GET['no'];
		$data['detail'] = $this->transaksi_model->detail_trans($idtrans);
		$data['barang'] = $this->transaksi_model->daftar_barang($idtrans);
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/barang_trans',$data);
		$this->load->view('admin/footer_admin');
	}

	public function peminjaman()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/form_peminjaman',$data);
		$this->load->view('admin/footer_admin');
	}

	public function save_transaksi()
	{
		$pegawai = $this->transaksi_model->nama_peg();
		// print_r($pegawai[0]['id_pegawai']);
		// die();
		$data = array('nama_peminjam'=>$this->input->post('nama_peminjam',TRUE),
						'alamat'=> $this->input->post('alamat',TRUE),
						'jenis_identitas'=> $this->input->post('jenis_identitas',TRUE),
						'nomor_identitas'=> $this->input->post('nomor_identitas',TRUE),
						'phone'=> $this->input->post('no_telp',TRUE),
						'id_pegawai'=>$pegawai[0]['id_pegawai'],
						'tgl_pinjam'=> $this->input->post('tanggal_pinjam',TRUE),
						'tgl_kembali'=> $this->input->post('tanggal_kembali',TRUE)
						);
		$hasil = $this->transaksi_model->save_transaksi($data);
		redirect('transaksi/tambah_barang/'.$hasil);
	}

	public function tambah_barang($id)
	{
		$data['id'] = $id;
		$data['username'] = $this->session->userdata('username');
		$this->load->model('barang_model');
		$data['transaksi'] = $this->transaksi_model->barang_transaksi($id);
		$data['barang'] = $this->barang_model->view_barang();
		$this->load->view('admin/header_admin');
		$this->load->view('admin/tambah_barang',$data); 
		$this->load->view('admin/footer_admin');
	}

	public function save_barang()
	{
		$idtrans = $this->input->post('id_transaksi');
		$idbarang = $this->input->post('namabarang');
		$jumlah = $this->input->post('jumlah');
		// print_r($idbarang);
		// die();
		$lamapinjam = $this->transaksi_model->lamapinjam($idtrans);
		$harga = $this->transaksi_model->hitung_harga($idbarang);
		$total = $lamapinjam[0]['lama'] * $harga[0]['harga'] * $jumlah;
		$data = array('id_barang'=>$idbarang,
			'id_transaksi'=>$idtrans,
			'jumlah'=>$jumlah,
			'harga'=>$total);
		$hasil = $this->transaksi_model->save_barang($data);
		redirect('transaksi/tambah_barang/'.$idtrans);
	}

	public function hapus_barang()
	{
		$id = $_GET['no'];
		$id_transaksi = $_GET['idtrans'];
		$hapus = $this->transaksi_model->hapus_barang($id);
		redirect('transaksi/tambah_barang/'.$id_transaksi);
	}

	public function simpan()
	{
		$idtrans = $_GET['no'];
		$totalharga = $this->transaksi_model->totalharga($idtrans);
		// print_r($totalharga[0]['totalharga']);
		// die();
		$simpan = $this->transaksi_model->simpan_total($idtrans,$totalharga[0]['totalharga']);
		if ($simpan) {
			$data['pesan']= '<div class="showback">
            				<div class="alert alert-success"><b>Data transaksi ditambahkan</b></div>  
          					</div>';
		}
		$data['transaksi'] = $this->transaksi_model->view_transaksi();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/view_transaksi',$data);
		$this->load->view('admin/footer_admin');

	}
	public function cetak_transaksi()
	{
		$idtrans = $_GET['no'];
		$data['detail'] = $this->transaksi_model->detail_trans($idtrans);
		$data['barang'] = $this->transaksi_model->daftar_barang($idtrans);
		$data['username'] = $this->session->userdata('username');
		// $this->load->view('admin/header_admin');
		$this->load->view('admin/cetaktransaksi',$data);
		// $this->load->view('admin/footer_admin');
	}
}


?>