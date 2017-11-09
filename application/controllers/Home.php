<?php 
	class Home extends CI_controller
	{
		function __construct()
		{
			parent:: __construct();
			$this->load->library("template");
			$this->load->model("M_produk");
			$this->load->model("M_testimoni");
			$this->load->model("M_slider");
			$this->load->model("M_tutorial");
			$this->load->model("M_owner");
		}
		function index($page=1)
		{
				//skrip pagination
			//mengatur batas data mauditampilkan perpage
			$batas=6;
			$posisi=($page-1)*$batas;
			$semuadata=$this->M_produk->tampil_produk();
			
			$totaldata=count($semuadata);
				//total data dibagi batas dan dibulatkan
			$data['jumlahhalaman']=ceil($totaldata/$batas);

// ......................................
			$data['data_owner']=$this->M_owner->tampil_owner();
			$data['data_tutorial']=$this->M_tutorial->tampil_tutorial();
			$data['data_slider']=$this->M_slider->tampil_slider();
			$data['data_produk']=$this->M_produk->tampil_produk($batas,$posisi);
			$data['data_testimoni']=$this->M_testimoni->tampil_testimoni();
			$this->template->tampilan_depan("depan/home",$data);
		}
	}