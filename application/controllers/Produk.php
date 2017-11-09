<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('produk/produk_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Produk_model->json();
    }

    public function read($id) 
    {
        $row = $this->Produk_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_produk' => $row->id_produk,
		'nama_produk' => $row->nama_produk,
		'id_kategori' => $row->id_kategori,
		'ket_produk' => $row->ket_produk,
		'foto_produk' => $row->foto_produk,
		'harga_produk' => $row->harga_produk,
		'tanggal' => $row->tanggal,
	    );
            $this->load->view('produk/produk_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('produk'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('produk/create_action'),
	    'id_produk' => set_value('id_produk'),
	    'nama_produk' => set_value('nama_produk'),
	    'id_kategori' => set_value('id_kategori'),
	    'ket_produk' => set_value('ket_produk'),
	    'foto_produk' => set_value('foto_produk'),
	    'harga_produk' => set_value('harga_produk'),
	    'tanggal' => set_value('tanggal'),
	);
        $this->load->view('produk/produk_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_produk' => $this->input->post('nama_produk',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'ket_produk' => $this->input->post('ket_produk',TRUE),
		'foto_produk' => $this->input->post('foto_produk',TRUE),
		'harga_produk' => $this->input->post('harga_produk',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Produk_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('produk'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Produk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('produk/update_action'),
		'id_produk' => set_value('id_produk', $row->id_produk),
		'nama_produk' => set_value('nama_produk', $row->nama_produk),
		'id_kategori' => set_value('id_kategori', $row->id_kategori),
		'ket_produk' => set_value('ket_produk', $row->ket_produk),
		'foto_produk' => set_value('foto_produk', $row->foto_produk),
		'harga_produk' => set_value('harga_produk', $row->harga_produk),
		'tanggal' => set_value('tanggal', $row->tanggal),
	    );
            $this->load->view('produk/produk_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('produk'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_produk', TRUE));
        } else {
            $data = array(
		'nama_produk' => $this->input->post('nama_produk',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'ket_produk' => $this->input->post('ket_produk',TRUE),
		'foto_produk' => $this->input->post('foto_produk',TRUE),
		'harga_produk' => $this->input->post('harga_produk',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Produk_model->update($this->input->post('id_produk', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('produk'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Produk_model->get_by_id($id);

        if ($row) {
            $this->Produk_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('produk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('produk'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_produk', 'nama produk', 'trim|required');
	$this->form_validation->set_rules('id_kategori', 'id kategori', 'trim|required');
	$this->form_validation->set_rules('ket_produk', 'ket produk', 'trim|required');
	$this->form_validation->set_rules('foto_produk', 'foto produk', 'trim|required');
	$this->form_validation->set_rules('harga_produk', 'harga produk', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

	$this->form_validation->set_rules('id_produk', 'id_produk', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-10-01 08:27:07 */
/* http://harviacode.com */