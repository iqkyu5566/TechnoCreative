<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tutorial extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tutorial_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->templateadmin->load('backend/template', 'backend/tutorial/tutorial_list');
        //$this->load->view('tutorial/tutorial_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tutorial_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tutorial_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'judul_tutorial' => $row->judul_tutorial,
		'gambar_tutorial' => $row->gambar_tutorial,
		'isi_tutorial' => $row->isi_tutorial,
		'url_tutorial' => $row->url_tutorial,
		'id_kategori' => $row->id_kategori,
		'tanggal' => $row->tanggal,
	    );
            $this->templateadmin->load('backend/template', 'backend/tutorial/tutorial_read', $data);
            //$this->load->view('tutorial/tutorial_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('adminweb/tutorial'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('adminweb/tutorial/create_action'),
	    'id' => set_value('id'),
	    'judul_tutorial' => set_value('judul_tutorial'),
	    'gambar_tutorial' => set_value('gambar_tutorial'),
	    'isi_tutorial' => set_value('isi_tutorial'),
	    'url_tutorial' => set_value('url_tutorial'),
	    'id_kategori' => set_value('id_kategori'),
	    'tanggal' => set_value('tanggal'),
	);
        $this->templateadmin->load('backend/template', 'backend/tutorial/tutorial_form', $data);
        //$this->load->view('tutorial/tutorial_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'judul_tutorial' => $this->input->post('judul_tutorial',TRUE),
		'gambar_tutorial' => $this->input->post('gambar_tutorial',TRUE),
		'isi_tutorial' => $this->input->post('isi_tutorial',TRUE),
		'url_tutorial' => $this->input->post('url_tutorial',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Tutorial_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('adminweb/tutorial'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tutorial_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('adminweb/tutorial/update_action'),
		'id' => set_value('id', $row->id),
		'judul_tutorial' => set_value('judul_tutorial', $row->judul_tutorial),
		'gambar_tutorial' => set_value('gambar_tutorial', $row->gambar_tutorial),
		'isi_tutorial' => set_value('isi_tutorial', $row->isi_tutorial),
		'url_tutorial' => set_value('url_tutorial', $row->url_tutorial),
		'id_kategori' => set_value('id_kategori', $row->id_kategori),
		'tanggal' => set_value('tanggal', $row->tanggal),
	    );
            $this->templateadmin->load('backend/template', 'backend/tutorial/tutorial_form', $data);
            //$this->load->view('tutorial/tutorial_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('adminweb/tutorial'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'judul_tutorial' => $this->input->post('judul_tutorial',TRUE),
		'gambar_tutorial' => $this->input->post('gambar_tutorial',TRUE),
		'isi_tutorial' => $this->input->post('isi_tutorial',TRUE),
		'url_tutorial' => $this->input->post('url_tutorial',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Tutorial_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('adminweb/tutorial'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tutorial_model->get_by_id($id);

        if ($row) {
            $this->Tutorial_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('adminweb/tutorial'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('adminweb/tutorial'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul_tutorial', 'judul tutorial', 'trim|required');
	$this->form_validation->set_rules('gambar_tutorial', 'gambar tutorial', 'trim|required');
	$this->form_validation->set_rules('isi_tutorial', 'isi tutorial', 'trim|required');
	$this->form_validation->set_rules('url_tutorial', 'url tutorial', 'trim|required');
	$this->form_validation->set_rules('id_kategori', 'id kategori', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tutorial.xls";
        $judul = "tutorial";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Judul Tutorial");
	xlsWriteLabel($tablehead, $kolomhead++, "Gambar Tutorial");
	xlsWriteLabel($tablehead, $kolomhead++, "Isi Tutorial");
	xlsWriteLabel($tablehead, $kolomhead++, "Url Tutorial");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Kategori");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");

	foreach ($this->Tutorial_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul_tutorial);
	    xlsWriteLabel($tablebody, $kolombody++, $data->gambar_tutorial);
	    xlsWriteLabel($tablebody, $kolombody++, $data->isi_tutorial);
	    xlsWriteLabel($tablebody, $kolombody++, $data->url_tutorial);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_kategori);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tutorial.doc");

        $data = array(
            'tutorial_data' => $this->Tutorial_model->get_all(),
            'start' => 0
        );
        
        $this->templateadmin->load('backend/template', 'backend/tutorial/tutorial_doc', $data);
        //$this->load->view('tutorial/tutorial_doc',$data);
    }

}

/* End of file Tutorial.php */
/* Location: ./application/controllers/Tutorial.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-10-01 08:28:20 */
/* http://harviacode.com */