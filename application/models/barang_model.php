<?php
/**
* 
*/
class Barang_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function view_barang()
	{
		$query = "SELECT id_barang as 'idbar', jenis_barang as 'jenis', nama_barang as 'nama', keterangan, jumlah, stok, harga FROM barang, jenis_barang WHERE barang.id_jbarang=jenis_barang.id_jbarang";
		$data = $this->db->query($query);
		return $data->result_array();
	}

	public function add_barang($filename)
	{
			$data['nama_barang']=$_POST['nama_barang'];
			$data['keterangan']=$_POST['keterangan'];
			$data['jumlah'] =$_POST['jumlah'];
			$data['stok'] =$_POST['stok'];
			$data['harga'] = $_POST['harga'];
			$data['id_jbarang']=$_POST['id_jbarang'];
			$data['gambar']=$filename;

			$result = $this->db->insert('barang', $data);
		
			
			
			return $result;
	}

	public function get_barang($id_bar)
	{
		$query = "SELECT * FROM barang WHERE id_barang=$id_bar";
		$data = $this->db->query($query);
		return $data->result_array();
	}

	public function edit_barang($id_bar,$nama_barang,$keterangan,$jumlah,$stok,$harga,$id_jbarang)
	{
		$query="UPDATE barang SET nama_barang='$nama_barang',
									 keterangan='$keterangan',
									 jumlah='$jumlah',
									 stok='$stok',
									 harga='$harga',
									 id_jbarang='$id_jbarang'
				where id_barang=$id_bar";
		$result=$this->db->query($query);
		return $result;		
	}

	public function del_barang($id_bar)
	{
		$query = "DELETE FROM barang WHERE id_barang='$id_bar'";
		$hapus = $this->db->query($query);
		return $hapus;
	}

	public function cek_nama($nama_barang)
	{
		$query = $this->db->get_where('barang', $nama_barang);
		return $query;
	}

}

?>