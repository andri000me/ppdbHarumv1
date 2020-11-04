<?php
class Verif extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_siswa_model');
        // $this->load->model('Data_siswa_model');
    }
    public function status($id)
    {
        $this->db->where('id_siswa', $id);
        $r = $this->db->get('data_siswa')->row();
        if ($r->status == 0) {
            $status = 1;
        } else if ($r->status == 1) {
            $status = 2;
        } else {
            $status = 1;
        }
        $data = ['status' => $status];
        $this->db->where('id_siswa', $id);
        $this->db->update('data_siswa', $data);
        redirect('data_siswa');
    }
    public function biaya($id, $kategori)
    {
        $this->db->where('id_siswa', $id);
        $siswa = $this->db->get('data_siswa')->row();
        if ($siswa->status == 0) {
            redirect('data_siswa');
        } else {
            $data = ['kategori_biaya' => $kategori];
            $this->db->where('id_siswa', $id);
            $this->db->update('data_siswa', $data);
            redirect('data_siswa');
        }
    }
}
