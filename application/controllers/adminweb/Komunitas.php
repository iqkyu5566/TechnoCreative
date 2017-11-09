<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Komunitas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Komunitas_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->templateadmin->load('backend/template', 'backend/komunitas/komunitas_list');
        //$this->load->view('komunitas/komunitas_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Komunitas_model->json();
    }

    public function read($id) 
    {
        $row = $this->Komunitas_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_komunitas' => $row->id_komunitas,
		'judul_komunitas' => $row->judul_komunitas,
		'gambar_komunitas' => $row->gambar_komunitas,
		'isi_komunitas' => $row->isi_komunitas,
		'url_komunitas' => $row->url_komunitas,
		'id_kategori' => $row->id_kategori,
		'status_komunitas' => $row->status_komunitas,
		'tanggal' => $row->tanggal,
		'waktu' => $row->waktu,
	    );
            $this->templateadmin->load('backend/template', 'backend/komunitas/komunitas_read', $data);
            //$this->load->view('komunitas/komunitas_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('komunitas'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('adminweb/komunitas/create_action'),
	    'id_komunitas' => set_value('id_komunitas'),
	    'judul_komunitas' => set_value('judul_komunitas'),
	    'gambar_komunitas' => set_value('gambar_komunitas'),
	    'isi_komunitas' => set_value('isi_komunitas'),
	    'url_komunitas' => set_value('url_komunitas'),
	    'id_kategori' => set_value('id_kategori'),
	    'status_komunitas' => set_value('status_komunitas'),
	    'tanggal' => set_value('tanggal'),
	    'waktu' => set_value('waktu'),
	);
        $this->templateadmin->load('backend/template', 'backend/komunitas/komunitas_form', $data);
        //$this->load->view('komunitas/komunitas_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'judul_komunitas' => $this->input->post('judul_komunitas',TRUE),
		'gambar_komunitas' => $this->input->post('gambar_komunitas',TRUE),
		'isi_komunitas' => $this->input->post('isi_komunitas',TRUE),
		'url_komunitas' => $this->input->post('url_komunitas',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'status_komunitas' => $this->input->post('status_komunitas',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'waktu' => $this->input->post('waktu',TRUE),
	    );

            $this->Komunitas_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('adminweb/komunitas'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Komunitas_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('adminweb/komunitas/update_action'),
		'id_komunitas' => set_value('id_komunitas', $row->id_komunitas),
		'judul_komunitas' => set_value('judul_komunitas', $row->judul_komunitas),
		'gambar_komunitas' => set_value('gambar_komunitas', $row->gambar_komunitas),
		'isi_komunitas' => set_value('isi_komunitas', $row->isi_komunitas),
		'url_komunitas' => set_value('url_komunitas', $row->url_komunitas),
		'id_kategori' => set_value('id_kategori', $row->id_kategori),
		'status_komunitas' => set_value('status_komunitas', $row->status_komunitas),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'waktu' => set_value('waktu', $row->waktu),
	    );
            $this->templateadmin->load('backend/template', 'backend/komunitas/komunitas_form', $data);
            //$this->load->view('komunitas/komunitas_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('adminweb/komunitas'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_komunitas', TRUE));
        } else {
            $data = array(
		'judul_komunitas' => $this->input->post('judul_komunitas',TRUE),
		'gambar_komunitas' => $this->input->post('gambar_komunitas',TRUE),
		'isi_komunitas' => $this->input->post('isi_komunitas',TRUE),
		'url_komunitas' => $this->input->post('url_komunitas',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'status_komunitas' => $this->input->post('status_komunitas',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'waktu' => $this->input->post('waktu',TRUE),
	    );

            $this->Komunitas_model->update($this->input->post('id_komunitas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('adminweb/komunitas'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Komunitas_model->get_by_id($id);

        if ($row) {
            $this->Komunitas_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('adminweb/komunitas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('adminweb/komunitas'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul_komunitas', 'judul komunitas', 'trim|required');
	$this->form_validation->set_rules('gambar_komunitas', 'gambar komunitas', 'trim|required');
	$this->form_validation->set_rules('isi_komunitas', 'isi komunitas', 'trim|required');
	$this->form_validation->set_rules('url_komunitas', 'url komunitas', 'trim|required');
	$this->form_validation->set_rules('id_kategori', 'id kategori', 'trim|required');
	$this->form_validation->set_rules('status_komunitas', 'status komunitas', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('waktu', 'waktu', 'trim|required');

	$this->form_validation->set_rules('id_komunitas', 'id_komunitas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "komunitas.xls";
        $judul = "komunitas";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Judul Komunitas");
	xlsWriteLabel($tablehead, $kolomhead++, "Gambar Komunitas");
	xlsWriteLabel($tablehead, $kolomhead++, "Isi Komunitas");
	xlsWriteLabel($tablehead, $kolomhead++, "Url Komunitas");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Kategori");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Komunitas");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");
	xlsWriteLabel($tablehead, $kolomhead++, "Waktu");

	foreach ($this->Komunitas_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul_komunitas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->gambar_komunitas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->isi_komunitas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->url_komunitas);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_kategori);
	    xlsWriteNumber($tablebody, $kolombody++, $data->status_komunitas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->waktu);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Komunitas.php */
/* Location: ./application/controllers/Komunitas.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-30 12:32:52 */
/* http://harviacode.com */