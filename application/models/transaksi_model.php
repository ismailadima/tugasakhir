<?php
/**
* 
*/
class Transaksi_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function view_transaksi()
	{
		$query = " SELECT transaksi.id_transaksi as 'idtrans' , nama_peminjam as 'nama', transaksi.alamat, jenis_identitas as 'jenis_id', nomor_identitas as 'no_id', tgl_pinjam, tgl_kembali, total_harga,status, pegawai.first_name as 'pegawai' FROM transaksi, pegawai WHERE transaksi.id_pegawai=pegawai.id_pegawai order by id_transaksi";
		$data = $this->db->query($query);
		return $data->result_array();
	}

	public function daftar_barang($idtrans)
	{
		$query = "SELECT barang.nama_barang as 'nama', daftar_barang.jumlah as 'jumlah', daftar_barang.harga as 'harga' FROM daftar_barang,transaksi,barang WHERE daftar_barang.id_barang=barang.id_barang AND daftar_barang.id_transaksi=transaksi.id_transaksi AND transaksi.id_transaksi='$idtrans' ";
		$data = $this->db->query($query);
		return $data->result_array();
	}

	public function detail_trans($idtrans)
	{
		$query = "SELECT transaksi.id_transaksi as 'idtrans' , nama_peminjam as 'nama', transaksi.alamat, jenis_identitas as 'jenis_id', nomor_identitas as 'no_id', tgl_pinjam, tgl_kembali, total_harga,status,transaksi.phone as 'phone' , pegawai.first_name as 'pegawai' FROM transaksi, pegawai WHERE transaksi.id_pegawai=pegawai.id_pegawai AND transaksi.id_transaksi='$idtrans'" ;
		$data = $this->db->query($query);
		return $data->result_array();
	}	


	public function save_transaksi($data)
	{
		$this->db->insert('transaksi',$data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function barang_transaksi($id)
	{
		$query = "SELECT daftar_barang.id_dbarang as 'id' ,daftar_barang.id_transaksi as 'idtrans', barang.nama_barang as 'nama' , daftar_barang.jumlah as 'jumlah', daftar_barang.harga as 'harga' FROM barang, daftar_barang, transaksi WHERE barang.id_barang=daftar_barang.id_barang AND daftar_barang.id_transaksi=transaksi.id_transaksi AND daftar_barang.id_transaksi='$id' ";
		$data = $this->db->query($query);
		return $data->result_array();
	}

	public function hitung_harga($idbarang)
	{ 
		$query = "SELECT harga FROM barang WHERE id_barang='$idbarang'";
		$harga = $this->db->query($query);
		return $harga->result_array();
	}

	public function lamapinjam($idtrans)
	{
		$query = "SELECT (tgl_kembali-tgl_pinjam) as lama from transaksi where id_transaksi='$idtrans'";
		$lama = $this->db->query($query);
		$hasil = $lama->result_array();
		return $hasil;
	}

	public function nama_peg()
	{
		$username = $this->session->userdata('username');
		$query = "SELECT id_pegawai FROM pegawai,account WHERE pegawai.id_account=account.id_account AND account.username='$username' ";
		$hasil = $this->db->query($query);
		return $hasil->result_array();
	}

	public function save_barang($data)
	{
		$save = $this->db->insert('daftar_barang',$data);
		return $save;
	}

	public function hapus_barang($id)
	{
		$query = "DELETE FROM daftar_barang WHERE id_dbarang='$id'";
		$hapus = $this->db->query($query);
		return $hapus;
	}

	public function totalharga($idtrans)
	{
		$query = "SELECT sum(harga) as 'totalharga' from daftar_barang WHERE id_transaksi='$idtrans'";
		$totalharga = $this->db->query($query);
		return $totalharga->result_array();
	}

	public function simpan_total($idtrans,$total)
	{
		$query="UPDATE transaksi SET total_harga='$total' where id_transaksi=$idtrans";
		$result=$this->db->query($query);
		return $result;
	}
}



?>