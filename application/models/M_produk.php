<?php 
	class M_produk extends CI_model
	{
		function tampil_produk($batas=null,$posisi=null)
		{
			$this->db->order_by("id_produk","DESC");
 			$this->db->limit($batas,$posisi);
			$data=$this->db->get("produk");
			return $data->result_array();
		}

		function selectdata()
		{
			return $this->db->query("select * from v_produk order by id_produk desc");
		}
	}