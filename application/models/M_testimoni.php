<?php 
	class M_testimoni extends CI_model
	{
		function tampil_testimoni()
		{
			$this->db->limit("3");
			$data=$this->db->get("testimoni");
			return $data->result_array();
		}
	}