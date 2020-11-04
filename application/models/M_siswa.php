<?php

class M_siswa extends CI_Model
{
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function nonaktifkan($dataakses, $where, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $dataakses);
    }
}
