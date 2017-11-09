<?php 
	class M_owner extends CI_model
	{
		function tampil_owner()
		{
			$data=$this->db->get("footer");
			return $data->row_array();
		}
	}