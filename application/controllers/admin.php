<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function datasiswabaru()
    {
        $data['judul'] = "DATA SISWA BARU";

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_menu');
        $this->load->view('admin/dash', $data);
        $this->load->view('admin/datasiswabaru');
        $this->load->view('templates/footer');
    }
}
