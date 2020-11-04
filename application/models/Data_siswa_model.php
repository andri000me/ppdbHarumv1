<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_siswa_model extends CI_Model
{

    public $table = 'data_siswa';
    public $id = 'id_siswa';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
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
    function total_rows($q = NULL)
    {
        $this->db->like('id_siswa', $q);
        $this->db->or_like('kopes', $q);
        $this->db->or_like('us', $q);
        $this->db->or_like('ps', $q);
        $this->db->or_like('namalengkap', $q);
        $this->db->or_like('namapanggilan', $q);
        $this->db->or_like('asalsekolah', $q);
        $this->db->or_like('jeniskelamin', $q);
        $this->db->or_like('tempatlahir', $q);
        $this->db->or_like('tanggallahir', $q);
        $this->db->or_like('berkebutuhankhusus', $q);
        $this->db->or_like('alamatlengkap', $q);
        $this->db->or_like('tempattinggal', $q);
        $this->db->or_like('namaayah', $q);
        $this->db->or_like('pendidikanayah', $q);
        $this->db->or_like('pekerjaanayah', $q);
        $this->db->or_like('penghasilanayah', $q);
        $this->db->or_like('namaibu', $q);
        $this->db->or_like('pendidikanibu', $q);
        $this->db->or_like('pekerjaanibu', $q);
        $this->db->or_like('penghasilanibu', $q);
        $this->db->or_like('nomorteleponayah', $q);
        $this->db->or_like('nomorteleponibu', $q);
        $this->db->or_like('email', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_siswa', $q);
        $this->db->or_like('kopes', $q);
        $this->db->or_like('us', $q);
        $this->db->or_like('ps', $q);
        $this->db->or_like('namalengkap', $q);
        $this->db->or_like('namapanggilan', $q);
        $this->db->or_like('asalsekolah', $q);
        $this->db->or_like('jeniskelamin', $q);
        $this->db->or_like('tempatlahir', $q);
        $this->db->or_like('tanggallahir', $q);
        $this->db->or_like('berkebutuhankhusus', $q);
        $this->db->or_like('alamatlengkap', $q);
        $this->db->or_like('tempattinggal', $q);
        $this->db->or_like('namaayah', $q);
        $this->db->or_like('pendidikanayah', $q);
        $this->db->or_like('pekerjaanayah', $q);
        $this->db->or_like('penghasilanayah', $q);
        $this->db->or_like('namaibu', $q);
        $this->db->or_like('pendidikanibu', $q);
        $this->db->or_like('pekerjaanibu', $q);
        $this->db->or_like('penghasilanibu', $q);
        $this->db->or_like('nomorteleponayah', $q);
        $this->db->or_like('nomorteleponibu', $q);
        $this->db->or_like('email', $q);
        $this->db->limit($limit, $start);
        $this->db->from($this->table);
        $this->db->join('kategori', 'data_siswa.kategori_biaya = kategori.id_kategori');
        return $this->db->get()->result();
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
    public function tampil_data($table, $where)
    {
        $this->db->where($where);
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_kuota($apa)
    {
        $this->db->where('nama_setting', $apa);
        $jml = $this->db->get('setting')->result_array();
        return $jml;
    }
}
