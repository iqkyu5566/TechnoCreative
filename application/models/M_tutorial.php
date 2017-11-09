<?php 
	class M_tutorial extends CI_model
	{
		function tampil_tutorial()
		{
			$this->db->limit("5");
			$data=$this->db->get("tutorial");
			return $data->result_array();
		}

		function selectdata($where='')
		{
			return $this->db->query("select*from $where");
		}
	}