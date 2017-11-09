<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tutorial_model extends CI_Model
{

    public $table = 'tutorial';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,judul_tutorial,gambar_tutorial,isi_tutorial,url_tutorial,id_kategori,tanggal');
        $this->datatables->from('tutorial');
        //add this line for join
        //$this->datatables->join('table2', 'tutorial.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('adminweb/tutorial/read/$1'),'Read')." | ".anchor(site_url('adminweb/tutorial/update/$1'),'Update')." | ".anchor(site_url('adminweb/tutorial/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('judul_tutorial', $q);
	$this->db->or_like('gambar_tutorial', $q);
	$this->db->or_like('isi_tutorial', $q);
	$this->db->or_like('url_tutorial', $q);
	$this->db->or_like('id_kategori', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('judul_tutorial', $q);
	$this->db->or_like('gambar_tutorial', $q);
	$this->db->or_like('isi_tutorial', $q);
	$this->db->or_like('url_tutorial', $q);
	$this->db->or_like('id_kategori', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Tutorial_model.php */
/* Location: ./application/models/Tutorial_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-10-01 08:28:20 */
/* http://harviacode.com */