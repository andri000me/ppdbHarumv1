<?php

class M_login extends CI_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    function cek_login_siswa($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
