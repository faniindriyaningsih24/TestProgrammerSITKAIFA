<?php

/**
* 
*/
class mdl_login extends CI_Model
{
	
	function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}
}
?>