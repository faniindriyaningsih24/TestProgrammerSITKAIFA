<?php
	class mdl_siswa extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

/*--------------------------SISWA----------------------------------- */
		function Insertsiswa($data)
		{
			$this->db->insert('t_siswa',$data);
		}
		function Updatesiswa($Kodesis,$data)
		{
			$this->db->where('kd_siswa',$Kodesis);
			$this->db->update('t_siswa',$data);
		}
		function Deletesiswa($Kodesis)
		{
			$this->db->where('kd_siswa',$Kodesis);
			$this->db->delete('t_siswa');
		}
		 function Selectsiswa()
		{
		$this->db->select('*');
		$this->db->from('t_siswa');
		$this->db->order_by('kd_siswa','ASC');
		$query=$this->db->get();
		return $query->result();
		}
/*--------------------------USER----------------------------------- */
		function Insertuser($data)
		{
			$this->db->insert('t_user',$data);
		}
		function Updateuser($Kodeuser,$data)
		{
			$this->db->where('kd_user ',$Kodeuser);
			$this->db->update('t_user',$data);
		}
		function Deleteuser($Kodeuser)
		{
			$this->db->where('kd_user',$Kodeuser);
			$this->db->delete('t_user');
		}
		 function Selectuser() 
		{
			$data = $this->db->query("select * from t_user a,t_status b where a.kd_status=b.kd_status order by kd_user asc ");
			return $data->result();
		}
/*--------------------------LOGIN---------------------------------- */
		function user()
		{
			$data = $this->db->query("select * from t_user a, t_status b where a.kd_status=b.kd_status order by kd_user asc");
			return $data->result();
		}
	}
?>
