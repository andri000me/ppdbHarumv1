<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuota extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "DATA SISWA BARU";
        $this->load->view('templates/kuota');
    }
}
