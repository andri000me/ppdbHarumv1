<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dash extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Data_siswa_model');
	}
	public function index()
	{
		$jml = $this->Data_siswa_model->get_kuota('kuota');
		$jmlguru = $this->Data_siswa_model->get_kuota('guru');
		$jmlsiswa = $this->Data_siswa_model->get_kuota('siswa');
		$config['total_rows'] = $this->Data_siswa_model->total_rows();
		$data['judul'] = "DASHBOARD";
		$data = array(
			'total_rows' => $config['total_rows'],
			'judul' => "DASHBOARD",
			'jmlkuota' => $jml,
			'jmlguru' => $jmlguru,
			'jmlsiswa' => $jmlsiswa,
		);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_menu');
		$this->load->view('admin/dash', $data);
		$this->load->view('templates/widget', $data);
		$this->load->view('templates/cpu_usage');
		$this->load->view('templates/visitor');
		$this->load->view('templates/taskbrowser');
		$this->load->view('templates/footer');
	}
}
