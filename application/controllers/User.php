<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('mdl_siswa');
	}

	public function index()
	{
		
		if (isset($_POST['btn_save'])) 
		{
			$Kodeuser = $_POST['txt_kodeuser'];
			$Namauser = $_POST['txt_namauser'];
			$Username = $_POST['txt_username'];
			$Password = $_POST['txt_password'];
			$Kodestatus = $_POST['cmb_status'];
			$data = array('kd_user'=>$Kodeuser,
				'namauser'=>$Namauser,
				'username'=>$Username,
				'password'=>$Password,
				'kd_status'=>$Kodestatus,
				);
			$this->mdl_siswa->Insertuser($data);			
		}

		if (isset($_POST['btn_update'])) 
		{
			$Kodeuser = $_POST['txt_kodeuser'];
			$Namauser = $_POST['txt_namauser'];
			$Username = $_POST['txt_username'];
			$Password = $_POST['txt_password'];
			$Kodestatus = $_POST['cmb_status'];
			$data = array('nama'=>$Namauser,
				'username'=>$Username,
				'password'=>$Password,
				'kd_status'=>$Kodestatus,
				);
			$this->mdl_siswa->Updateuser($Kodeuser,$data);			
		}

		if (isset($_POST['btn_delete'])) 
		{
			$Kodeuser = $_POST['txt_kodeuser'];
			$this->mdl_siswa->Deleteuser($Kodeuser);			
		}

		$this->load->model('mdl_siswa');
		$data['user'] = $this->mdl_siswa->selectuser();
		$this->load->view('form_user',$data);
	}

}
