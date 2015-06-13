<?php

/**
* 
*/
class Admin_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function view_pegawai()
	{
		$query = "SELECT pegawai.id_pegawai as 'idpeg', pegawai.first_name as 'first', pegawai.last_name as 'last',pegawai.jenis_kelamin as 'sex', pegawai.tempat_lahir as 'tempat', pegawai.tanggal_lahir as 'tgl', pegawai.alamat, pegawai.phone FROM pegawai, account WHERE account.id_account=pegawai.id_account AND account.level='staff'";
		$data = $this->db->query($query);
		return $data->result_array();
	}

	public function add_pegawai()
	{
		$query ="SELECT max(id_account)+1 as id from account";
			$foreign = $this->db->query($query);
			foreach ($foreign->result() as $key) {
				$coba = $key->id;
			}

		// insert data ke tabel account
			$username =$_POST['username'];
			$data_user['username']=$_POST['username'];
			$data_user['password'] = md5($username);
			$data_user['level'] = 'staff';
			$insert_user = $this->db->insert('account', $data_user);

		// insert data ke tabel member
			$data['first_name']=$_POST['first_name'];
			$data['last_name']=$_POST['last_name'];
			$data['jenis_kelamin']=$_POST['jenis_kelamin'];
			$data['tempat_lahir']=$_POST['tempat_lahir'];
			$data['tanggal_lahir']=$_POST['tanggal_lahir'];
			$data['alamat']=$_POST['alamat'];
			$data['phone']=$_POST['phone'];
			$data['id_account']= $coba;
			$insert_staff =  $this->db->insert('pegawai', $data);

			return $insert_user && $insert_staff;
	}

	public function del_pegawai($id_peg)
	{
		$query = "DELETE FROM pegawai WHERE id_pegawai='$id_peg'";
		$hapus = $this->db->query($query);
		return $hapus;
	}

	public function view_profile()
	{
		$username = $this->session->userdata('username');
		$query = "SELECT id_pegawai,first_name as 'first', last_name as 'last', jenis_kelamin as 'sex', tempat_lahir as 'tempat', tanggal_lahir as 'tanggal', alamat, phone FROM pegawai, account WHERE account.id_account=pegawai.id_account AND account.username='$username'";
		$data = $this->db->query($query);
		return $data->result_array();
	}

	public function save_profile($id_peg,$first_name,$last_name,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$alamat,$phone)
	{
		$query="UPDATE pegawai SET first_name='$first_name',
									 last_name='$last_name',
									 jenis_kelamin='$jenis_kelamin',
									 tempat_lahir='$tempat_lahir',
									 tanggal_lahir='$tanggal_lahir',
									 alamat='$alamat',
									 phone='$phone'
				where id_pegawai=$id_peg";
		$result=$this->db->query($query);
		return TRUE;
	}

	public function change_password()
	{
		$username = $this->session->userdata('username');
		$query = "SELECT username,password FROM account WHERE username='$username'";
		$data = $this->db->query($query);
		return $data->result_array();
	}

	public function update_password($pass_baru)
	{		
		$username = $this->session->userdata('username');
		$query = "UPDATE account SET password=md5('$pass_baru') WHERE username='$username'";
		$data = $this->db->query($query);
			// redirect('member');
		return $data;

		// $query_old_pass = "SELECT password FROM account WHERE username='$username'";
		// $old_pass = $this->db->query($query_old_pass);
		// foreach ($old_pass->result() as $key) {
		// 	$coba = $key->password;
		// }
		// // print_r($coba);
		// // die();
		// $pass_lama = md5($pass_lama);

		// // print_r($pass_lama);
		// // die();
		// if ($pass_lama != $coba) {
		// 	// echo "password lama beda";
		// 	// $data['alert'] ="COba Alert";
			
		// 	redirect('admin/change_password');
		// 	// $data = "FALSE";
		// 		// return $data;
		// }
		// elseif ($pass_baru != $pass_baru2) {
		// 	// echo "password baru beda";
		// 	redirect('admin/change_password');
		// }
		// else {
		// 	$query = "UPDATE account SET password=md5('$pass_baru') WHERE username='$username'";
		// 	$data = $this->db->query($query);
		// 	// redirect('member');
		// 	return $data;
		// }
	}

	public function cek_username($username)
	{
		$query = $this->db->get_where('account', $username);
			return $query;
	}

	public function cek_passlama($password)
	{
		$query = $this->db->get_where('account', $password);
			return $query;
	}
}
	
?>