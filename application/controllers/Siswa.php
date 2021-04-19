<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('mdl_siswa');
	}

	public function index()
	{
		
		if (isset($_POST['btn_save'])) 
		{
			$Kodesis = $_POST['txt_kodesiswa'];
			$Namasis = $_POST['txt_namasiswa'];
			$tempat_lahir = $_POST['txt_tempatlahir'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$alamat = $_POST['txt_alamat'];
			$data = array('kd_siswa'=>$Kodesis,  
				'nama_siswa'=>$Namasis,
				'tempat_lahir'=>$tempat_lahir,
				'tanggal_lahir'=>$tanggal_lahir,
				'alamat'=>$alamat,
				);
			$this->mdl_siswa->Insertsiswa($data);			
		}

		if (isset($_POST['btn_update'])) 
		{
			$Kodesis = $_POST['txt_kodesiswa'];
			$Namasis = $_POST['txt_namasiswa'];
			$tempat_lahir = $_POST['txt_tempatlahir'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$alamat = $_POST['txt_alamat'];
			$data = array('kd_siswa'=>$Kodesis,  
				'nama_siswa'=>$Namasis,
				'tempat_lahir'=>$tempat_lahir,
				'tanggal_lahir'=>$tanggal_lahir,
				'alamat'=>$alamat,
				);
			$this->mdl_siswa->Updatesiswa($Kodesis,$data);			
		}

		if (isset($_POST['btn_delete'])) 
		{
			$Kodesis = $_POST['txt_kodesiswa'];
			$this->mdl_siswa->Deletesiswa($Kodesis);			
		}

		$this->load->model('mdl_siswa');
		$data['siswa'] = $this->mdl_siswa->selectsiswa();
		$this->load->view('form_siswa',$data);
	}

}
