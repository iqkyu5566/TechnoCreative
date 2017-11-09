<?php 
	class M_slider extends CI_model
	{
		function tampil_slider()
		{
			$this->db->limit("3");
			$data=$this->db->get("slider");
			return $data->result_array();
		}
	}