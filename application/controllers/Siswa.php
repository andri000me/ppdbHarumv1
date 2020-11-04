<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_siswa');
        $this->load->model('m_kopes');
        $this->load->model('Data_siswa_model');
    }
    public function index()
    {


        $jml =  $this->Data_siswa_model->get_kuota('kuota');
        $config['total_rows'] = $this->Data_siswa_model->total_rows();
        $data = array(
            'total_rows' => $config['total_rows'],
            'judul' => "DASHBOARD",
            'jmlkuota' => $jml,
        );
        $this->load->view('siswa/siswa_login', $data);
    }
    public function form()
    {

        $this->load->view('siswa/siswa_form');
    }
    function aksi_login()
    {
        $nama = $this->input->post('nama');
        $pess = $this->input->post('pess');
        // $is_active = $this->input->post('is_active');
        $where = array(
            'us' => $nama,
            'ps' => $pess,
        );

        $cek = $this->m_login->cek_login_siswa("data_siswa", $where)->row();
        // $cek = $this->m_login->cek_login_siswa("akses", $where)->num_rows();

        if ($cek > 0) {
            //cek status
            if ($cek->status == 1) {
                $data_session = array(
                    'nama' => $cek->namapanggilan,
                    'status' => 1,
                    'kategori' => $cek->kategori_biaya
                );
                $this->session->set_userdata($data_session);
                redirect(base_url('siswa/pengumumanLulus'));
            } else if ($cek->status == 2) {
                $data_session = array(
                    'nama' => $cek->namapanggilan,
                    'status' => $cek->status,
                );
                $this->session->set_userdata($data_session);
                redirect(base_url('siswa/pengumumanTL'));
            } else {
                redirect('siswa');
            }


            redirect(base_url('siswa/form'));
            // echo 'berhasil';
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username & Password Salah atau telah digunakan!</div>');
            redirect('siswa/#login/');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php/siswa'));
    }
    public function daftar()
    {
        $x = $this->m_kopes->get_no_invoice();
        $kopes              = $x;
        $is_active              = $this->input->post('is_active');
        $namalengkap            = $this->input->post('namalengkap');
        $namapanggilan            = $this->input->post('namapanggilan');
        $asalsekolah            = $this->input->post('asalsekolah');
        $jeniskelamin           = $this->input->post('jeniskelamin');
        $tempatlahir            = $this->input->post('tempatlahir');
        $tanggallahir           = $this->input->post('tanggallahir');
        $berkebutuhankhusus     = $this->input->post('berkebutuhankhusus');
        $alamatlengkap          = $this->input->post('alamatlengkap');
        $tempattinggal          = $this->input->post('tempattinggal');
        $namaayah               = $this->input->post('namaayah');
        $pendidikanayah         = $this->input->post('pendidikanayah');
        $pekerjaanayah          = $this->input->post('pekerjaanayah');
        $penghasilanayah        = $this->input->post('penghasilanayah');
        $namaibu                = $this->input->post('namaibu');
        $pendidikanibu          = $this->input->post('pendidikanibu');
        $pekerjaanibu           = $this->input->post('pekerjaanibu');
        $penghasilanibu         = $this->input->post('penghasilanibu');
        $nomorteleponayah       = $this->input->post('nomorteleponayah');
        $nomorteleponibu        = $this->input->post('nomorteleponibu');
        $email                  = $this->input->post('email');
        $us                  = $this->input->post('us');
        $ps                  = $this->input->post('ps');

        $data = array(
            'kopes'            => $kopes,
            'namalengkap'            => $namalengkap,
            'namapanggilan'            => $namapanggilan,
            'asalsekolah'            => $asalsekolah,
            'jeniskelamin'           => $jeniskelamin,
            'tempatlahir'            => $tempatlahir,
            'tanggallahir'           => $tanggallahir,
            'berkebutuhankhusus'     => $berkebutuhankhusus,
            'alamatlengkap'          => $alamatlengkap,
            'tempattinggal'          => $tempattinggal,
            'namaayah'               => $namaayah,
            'pendidikanayah'         => $pendidikanayah,
            'pekerjaanayah'          => $pekerjaanayah,
            'penghasilanayah'        => $penghasilanayah,
            'namaibu'                => $namaibu,
            'pendidikanibu'          => $pendidikanibu,
            'pekerjaanibu'           => $pekerjaanibu,
            'penghasilanibu'         => $penghasilanibu,
            'nomorteleponayah'       => $nomorteleponayah,
            'nomorteleponibu'        => $nomorteleponibu,
            'email'                  => $email,
            'us'                  => $us,
            'ps'                  => $ps,
        );
        $dataakses = array('is_active' => $is_active);
        $where = array('nama' => $_SESSION['nama']);
        $where = array('nama' => $_SESSION['nama']);
        $this->m_siswa->nonaktifkan($dataakses, $where, 'akses');
        $this->m_siswa->input_data($data, 'data_siswa');
        redirect(base_url('siswa/thanks'));
    }
    public function thanks()
    {
        $this->load->view('siswa/thanks');
    }
    public function pengumumanLulus()
    {
        $data['judul'] = ' ';
        $data['color'] = 'green';
        $this->load->view('temaPeserta/head', $data);
        $this->load->view('temaPeserta/side', $data);
        $this->load->view('temaPeserta/index', $data);
        $this->load->view('temaPeserta/foot');
    }
    public function pengumumanTL()
    {
        $data['color'] = 'orange';
        $data['judul'] = ' ';
        $this->load->view('temaPeserta/head', $data);
        $this->load->view('temaPeserta/side2', $data);
        $this->load->view('temaPeserta/index2', $data);
        $this->load->view('temaPeserta/foot');
    }
    public function rincianDaftarUlang()
    {
        $data['rdu'] = $this->db->get_where('nominal', ['id_kategori' => $_SESSION['kategori']])->row();
        $data['color'] = 'green';
        $data['judul'] = 'Rincian Daftar Ulang';
        $this->load->view('temaPeserta/head', $data);
        $this->load->view('temaPeserta/side');
        $this->load->view('temaPeserta/rincian', $data);
        $this->load->view('temaPeserta/foot');
    }
    public function alurDaftarUlang()
    {
        $data['color'] = 'green';
        $data['judul'] = 'Alur Daftar Ulang';
        // $this->load->view('temaPeserta/head', $data);
        // $this->load->view('temaPeserta/side');
        $this->load->view('temaPeserta/alurDU', $data);
        // $this->load->view('temaPeserta/foot');
    }
}
