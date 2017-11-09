<?php 
 	class Template
 	{
 		public $terpusat;
 		function __construct()
 		{
 			//get construct isi semua class yang dimilik oleh codeigniter
 			$this->terpusat = &get_instance();
 		}
 		function tampilan_depan($namafile,$data=false)
 		{
 			$hasil['home']=$this->terpusat->load->view($namafile,$data,true);
 			$this->terpusat->load->view("depan/template",$hasil);
 		}
 	}