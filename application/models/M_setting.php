<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_setting extends CI_Model
{
    public function get_kuota()
    {
        return $this->db->get('setting')->result();
    }
}
