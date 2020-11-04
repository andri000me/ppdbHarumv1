<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Data_siswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Data_siswa_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$q = urldecode($this->input->get('q', TRUE));
		$start = intval($this->input->get('start'));

		if ($q <> '') {
			$config['base_url'] = base_url() . 'data_siswa/index.html?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'data_siswa/index.html?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'data_siswa/index.html';
			$config['first_url'] = base_url() . 'data_siswa/index.html';
		}

		$config['per_page'] = 150;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->Data_siswa_model->total_rows($q);
		$data_siswa = $this->Data_siswa_model->get_limit_data($config['per_page'], $start, $q);

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$data = array(
			'data_siswa_data' => $data_siswa,
			'q' => $q,
			'pagination' => $this->pagination->create_links(),
			'total_rows' => $config['total_rows'],
			'start' => $start,
			'content' => 'data_siswa/data_siswa_list',
		);
		$this->load->view('layout', $data);
	}

	public function read($id)
	{
		$row = $this->Data_siswa_model->get_by_id($id);
		if ($row) {
			$data = array(
				'kopes' => $row->kopes,
				'us' => $row->us,
				'ps' => $row->ps,
				'id_siswa' => $row->id_siswa,
				'namalengkap' => $row->namalengkap,
				'namapanggilan' => $row->namapanggilan,
				'asalsekolah' => $row->asalsekolah,
				'jeniskelamin' => $row->jeniskelamin,
				'tempatlahir' => $row->tempatlahir,
				'tanggallahir' => $row->tanggallahir,
				'berkebutuhankhusus' => $row->berkebutuhankhusus,
				'alamatlengkap' => $row->alamatlengkap,
				'tempattinggal' => $row->tempattinggal,
				'namaayah' => $row->namaayah,
				'pendidikanayah' => $row->pendidikanayah,
				'pekerjaanayah' => $row->pekerjaanayah,
				'penghasilanayah' => $row->penghasilanayah,
				'namaibu' => $row->namaibu,
				'pendidikanibu' => $row->pendidikanibu,
				'pekerjaanibu' => $row->pekerjaanibu,
				'penghasilanibu' => $row->penghasilanibu,
				'nomorteleponayah' => $row->nomorteleponayah,
				'nomorteleponibu' => $row->nomorteleponibu,
				'email' => $row->email,
				'content' => 'data_siswa/data_siswa_read'
			);

			$this->load->view('layout', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('data_siswa'));
		}
	}

	public function create()
	{
		$data = array(
			'button' => 'Create',
			'action' => site_url('data_siswa/create_action'),
			'kopes' => set_value('kopes'),
			'us' => set_value('us'),
			'ps' => set_value('ps'),
			'id_siswa' => set_value('id_siswa'),
			'namalengkap' => set_value('namalengkap'),
			'namapanggilan' => set_value('namapanggilan'),
			'asalsekolah' => set_value('asalsekolah'),
			'jeniskelamin' => set_value('jeniskelamin'),
			'tempatlahir' => set_value('tempatlahir'),
			'tanggallahir' => set_value('tanggallahir'),
			'berkebutuhankhusus' => set_value('berkebutuhankhusus'),
			'alamatlengkap' => set_value('alamatlengkap'),
			'tempattinggal' => set_value('tempattinggal'),
			'namaayah' => set_value('namaayah'),
			'pendidikanayah' => set_value('pendidikanayah'),
			'pekerjaanayah' => set_value('pekerjaanayah'),
			'penghasilanayah' => set_value('penghasilanayah'),
			'namaibu' => set_value('namaibu'),
			'pendidikanibu' => set_value('pendidikanibu'),
			'pekerjaanibu' => set_value('pekerjaanibu'),
			'penghasilanibu' => set_value('penghasilanibu'),
			'nomorteleponayah' => set_value('nomorteleponayah'),
			'nomorteleponibu' => set_value('nomorteleponibu'),
			'email' => set_value('email'),

			'content' => 'data_siswa/data_siswa_form'
		);
		$this->load->view('layout', $data);
	}

	public function create_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$data = array(
				'kopes' => $this->input->post('kopes', TRUE),
				'us' => $this->input->post('us', TRUE),
				'ps' => $this->input->post('ps', TRUE),
				'namalengkap' => $this->input->post('namalengkap', TRUE),
				'namapanggilan' => $this->input->post('namapanggilan', TRUE),
				'asalsekolah' => $this->input->post('asalsekolah', TRUE),
				'jeniskelamin' => $this->input->post('jeniskelamin', TRUE),
				'tempatlahir' => $this->input->post('tempatlahir', TRUE),
				'tanggallahir' => $this->input->post('tanggallahir', TRUE),
				'berkebutuhankhusus' => $this->input->post('berkebutuhankhusus', TRUE),
				'alamatlengkap' => $this->input->post('alamatlengkap', TRUE),
				'tempattinggal' => $this->input->post('tempattinggal', TRUE),
				'namaayah' => $this->input->post('namaayah', TRUE),
				'pendidikanayah' => $this->input->post('pendidikanayah', TRUE),
				'pekerjaanayah' => $this->input->post('pekerjaanayah', TRUE),
				'penghasilanayah' => $this->input->post('penghasilanayah', TRUE),
				'namaibu' => $this->input->post('namaibu', TRUE),
				'pendidikanibu' => $this->input->post('pendidikanibu', TRUE),
				'pekerjaanibu' => $this->input->post('pekerjaanibu', TRUE),
				'penghasilanibu' => $this->input->post('penghasilanibu', TRUE),
				'nomorteleponayah' => $this->input->post('nomorteleponayah', TRUE),
				'nomorteleponibu' => $this->input->post('nomorteleponibu', TRUE),
				'email' => $this->input->post('email', TRUE),
			);

			$this->Data_siswa_model->insert($data);
			$this->session->set_flashdata('message', 'Create Record Success');
			redirect(site_url('data_siswa'));
		}
	}

	public function update($id)
	{
		$row = $this->Data_siswa_model->get_by_id($id);

		if ($row) {
			$data = array(
				'button' => 'Update',
				'action' => site_url('data_siswa/update_action'),
				'kopes' => set_value('kopes', $row->kopes),
				'us' => set_value('us', $row->us),
				'ps' => set_value('ps', $row->ps),
				'id_siswa' => set_value('id_siswa', $row->id_siswa),
				'namalengkap' => set_value('namalengkap', $row->namalengkap),
				'namapanggilan' => set_value('namapanggilan', $row->namapanggilan),
				'asalsekolah' => set_value('asalsekolah', $row->asalsekolah),
				'jeniskelamin' => set_value('jeniskelamin', $row->jeniskelamin),
				'tempatlahir' => set_value('tempatlahir', $row->tempatlahir),
				'tanggallahir' => set_value('tanggallahir', $row->tanggallahir),
				'berkebutuhankhusus' => set_value('berkebutuhankhusus', $row->berkebutuhankhusus),
				'alamatlengkap' => set_value('alamatlengkap', $row->alamatlengkap),
				'tempattinggal' => set_value('tempattinggal', $row->tempattinggal),
				'namaayah' => set_value('namaayah', $row->namaayah),
				'pendidikanayah' => set_value('pendidikanayah', $row->pendidikanayah),
				'pekerjaanayah' => set_value('pekerjaanayah', $row->pekerjaanayah),
				'penghasilanayah' => set_value('penghasilanayah', $row->penghasilanayah),
				'namaibu' => set_value('namaibu', $row->namaibu),
				'pendidikanibu' => set_value('pendidikanibu', $row->pendidikanibu),
				'pekerjaanibu' => set_value('pekerjaanibu', $row->pekerjaanibu),
				'penghasilanibu' => set_value('penghasilanibu', $row->penghasilanibu),
				'nomorteleponayah' => set_value('nomorteleponayah', $row->nomorteleponayah),
				'nomorteleponibu' => set_value('nomorteleponibu', $row->nomorteleponibu),
				'email' => set_value('email', $row->email),
				'kategori_biaya' => set_value('kategori_biaya', $row->kategori_biaya),

				'content' => 'data_siswa/data_siswa_form'
			);
			$this->load->view('layout', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('data_siswa'));
		}
	}

	public function update_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update($this->input->post('id_siswa', TRUE));
		} else {
			$data = array(
				'kopes' => $this->input->post('kopes', TRUE),
				'us' => $this->input->post('us', TRUE),
				'ps' => $this->input->post('ps', TRUE),
				'namalengkap' => $this->input->post('namalengkap', TRUE),
				'namapanggilan' => $this->input->post('namapanggilan', TRUE),
				'asalsekolah' => $this->input->post('asalsekolah', TRUE),
				'jeniskelamin' => $this->input->post('jeniskelamin', TRUE),
				'tempatlahir' => $this->input->post('tempatlahir', TRUE),
				'tanggallahir' => $this->input->post('tanggallahir', TRUE),
				'berkebutuhankhusus' => $this->input->post('berkebutuhankhusus', TRUE),
				'alamatlengkap' => $this->input->post('alamatlengkap', TRUE),
				'tempattinggal' => $this->input->post('tempattinggal', TRUE),
				'namaayah' => $this->input->post('namaayah', TRUE),
				'pendidikanayah' => $this->input->post('pendidikanayah', TRUE),
				'pekerjaanayah' => $this->input->post('pekerjaanayah', TRUE),
				'penghasilanayah' => $this->input->post('penghasilanayah', TRUE),
				'namaibu' => $this->input->post('namaibu', TRUE),
				'pendidikanibu' => $this->input->post('pendidikanibu', TRUE),
				'pekerjaanibu' => $this->input->post('pekerjaanibu', TRUE),
				'penghasilanibu' => $this->input->post('penghasilanibu', TRUE),
				'nomorteleponayah' => $this->input->post('nomorteleponayah', TRUE),
				'nomorteleponibu' => $this->input->post('nomorteleponibu', TRUE),
				'email' => $this->input->post('email', TRUE),
				'kategori_biaya' => $this->input->post('kategori_biaya', TRUE),
			);

			$this->Data_siswa_model->update($this->input->post('id_siswa', TRUE), $data);
			$this->session->set_flashdata('message', 'Update Record Success');
			redirect(site_url('data_siswa'));
		}
	}

	public function delete($id)
	{
		$row = $this->Data_siswa_model->get_by_id($id);

		if ($row) {
			$this->Data_siswa_model->delete($id);
			$this->session->set_flashdata('message', 'Delete Record Success');
			redirect(site_url('data_siswa'));
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('data_siswa'));
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kopes', 'kopes', 'trim|required');
		$this->form_validation->set_rules('us', 'us', 'trim|required');
		$this->form_validation->set_rules('ps', 'ps', 'trim|required');
		$this->form_validation->set_rules('namalengkap', 'namalengkap', 'trim|required');
		$this->form_validation->set_rules('namapanggilan', 'namapanggilan', 'trim|required');
		$this->form_validation->set_rules('asalsekolah', 'asalsekolah', 'trim|required');
		$this->form_validation->set_rules('jeniskelamin', 'jeniskelamin', 'trim|required');
		$this->form_validation->set_rules('tempatlahir', 'tempatlahir', 'trim|required');
		$this->form_validation->set_rules('tanggallahir', 'tanggallahir', 'trim|required');
		$this->form_validation->set_rules('berkebutuhankhusus', 'berkebutuhankhusus', 'trim|required');
		$this->form_validation->set_rules('alamatlengkap', 'alamatlengkap', 'trim|required');
		$this->form_validation->set_rules('tempattinggal', 'tempattinggal', 'trim|required');
		$this->form_validation->set_rules('namaayah', 'namaayah', 'trim|required');
		$this->form_validation->set_rules('pendidikanayah', 'pendidikanayah', 'trim|required');
		$this->form_validation->set_rules('pekerjaanayah', 'pekerjaanayah', 'trim|required');
		$this->form_validation->set_rules('penghasilanayah', 'penghasilanayah', 'trim|required');
		$this->form_validation->set_rules('namaibu', 'namaibu', 'trim|required');
		$this->form_validation->set_rules('pendidikanibu', 'pendidikanibu', 'trim|required');
		$this->form_validation->set_rules('pekerjaanibu', 'pekerjaanibu', 'trim|required');
		$this->form_validation->set_rules('penghasilanibu', 'penghasilanibu', 'trim|required');
		$this->form_validation->set_rules('nomorteleponayah', 'nomorteleponayah', 'trim|required');
		$this->form_validation->set_rules('nomorteleponibu', 'nomorteleponibu', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');

		$this->form_validation->set_rules('id_siswa', 'id_siswa', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}

	public function excel()
	{
		$this->load->helper('exportexcel');
		$namaFile = "data_siswa.xls";
		$judul = "data_siswa";
		$tablehead = 0;
		$tablebody = 1;
		$nourut = 1;
		//penulisan header
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Disposition: attachment;filename=" . $namaFile . "");
		header("Content-Transfer-Encoding: binary ");

		xlsBOF();

		$kolomhead = 0;
		xlsWriteLabel($tablehead, $kolomhead++, "No");
		xlsWriteLabel($tablehead, $kolomhead++, "Kopes");
		xlsWriteLabel($tablehead, $kolomhead++, "Us");
		xlsWriteLabel($tablehead, $kolomhead++, "Ps");
		xlsWriteLabel($tablehead, $kolomhead++, "Namalengkap");
		xlsWriteLabel($tablehead, $kolomhead++, "Namapanggilan");
		xlsWriteLabel($tablehead, $kolomhead++, "Asalsekolah");
		xlsWriteLabel($tablehead, $kolomhead++, "Jeniskelamin");
		xlsWriteLabel($tablehead, $kolomhead++, "Tempatlahir");
		xlsWriteLabel($tablehead, $kolomhead++, "Tanggallahir");
		xlsWriteLabel($tablehead, $kolomhead++, "Berkebutuhankhusus");
		xlsWriteLabel($tablehead, $kolomhead++, "Alamatlengkap");
		xlsWriteLabel($tablehead, $kolomhead++, "Tempattinggal");
		xlsWriteLabel($tablehead, $kolomhead++, "Namaayah");
		xlsWriteLabel($tablehead, $kolomhead++, "Pendidikanayah");
		xlsWriteLabel($tablehead, $kolomhead++, "Pekerjaanayah");
		xlsWriteLabel($tablehead, $kolomhead++, "Penghasilanayah");
		xlsWriteLabel($tablehead, $kolomhead++, "Namaibu");
		xlsWriteLabel($tablehead, $kolomhead++, "Pendidikanibu");
		xlsWriteLabel($tablehead, $kolomhead++, "Pekerjaanibu");
		xlsWriteLabel($tablehead, $kolomhead++, "Penghasilanibu");
		xlsWriteLabel($tablehead, $kolomhead++, "Nomorteleponayah");
		xlsWriteLabel($tablehead, $kolomhead++, "Nomorteleponibu");
		xlsWriteLabel($tablehead, $kolomhead++, "Email");

		foreach ($this->Data_siswa_model->get_all() as $data) {
			$kolombody = 0;

			//ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
			xlsWriteNumber($tablebody, $kolombody++, $nourut);
			xlsWriteLabel($tablebody, $kolombody++, $data->kopes);
			xlsWriteLabel($tablebody, $kolombody++, $data->us);
			xlsWriteLabel($tablebody, $kolombody++, $data->ps);
			xlsWriteLabel($tablebody, $kolombody++, $data->namalengkap);
			xlsWriteLabel($tablebody, $kolombody++, $data->namapanggilan);
			xlsWriteLabel($tablebody, $kolombody++, $data->asalsekolah);
			xlsWriteLabel($tablebody, $kolombody++, $data->jeniskelamin);
			xlsWriteLabel($tablebody, $kolombody++, $data->tempatlahir);
			xlsWriteLabel($tablebody, $kolombody++, $data->tanggallahir);
			xlsWriteLabel($tablebody, $kolombody++, $data->berkebutuhankhusus);
			xlsWriteLabel($tablebody, $kolombody++, $data->alamatlengkap);
			xlsWriteLabel($tablebody, $kolombody++, $data->tempattinggal);
			xlsWriteLabel($tablebody, $kolombody++, $data->namaayah);
			xlsWriteLabel($tablebody, $kolombody++, $data->pendidikanayah);
			xlsWriteLabel($tablebody, $kolombody++, $data->pekerjaanayah);
			xlsWriteLabel($tablebody, $kolombody++, $data->penghasilanayah);
			xlsWriteLabel($tablebody, $kolombody++, $data->namaibu);
			xlsWriteLabel($tablebody, $kolombody++, $data->pendidikanibu);
			xlsWriteLabel($tablebody, $kolombody++, $data->pekerjaanibu);
			xlsWriteLabel($tablebody, $kolombody++, $data->penghasilanibu);
			xlsWriteLabel($tablebody, $kolombody++, $data->nomorteleponayah);
			xlsWriteLabel($tablebody, $kolombody++, $data->nomorteleponibu);
			xlsWriteLabel($tablebody, $kolombody++, $data->email);

			$tablebody++;
			$nourut++;
		}

		xlsEOF();
		exit();
	}

	public function word()
	{
		header("Content-type: application/vnd.ms-word");
		header("Content-Disposition: attachment;Filename=data_siswa.doc");

		$data = array(
			'data_siswa_data' => $this->Data_siswa_model->get_all(),
			'start' => 0
		);

		$this->load->view('data_siswa/data_siswa_doc', $data);
	}
	public function pdf($id)
	{
		$where = array('us' => $id);
		$data['siswa'] = $this->Data_siswa_model->tampil_data('data_siswa', $where);
		$this->load->view('kartu', $data);

		$this->load->library('dompdf_gen');
		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream('KARTU PESERTA.pdf', array('Attachment' => 0));
		$this->session->sess_destroy();
		redirect(base_url('index.php/siswa'));
	}
	public function cetak($id)
	{
		$where = array('id_siswa' => $id);
		$data['siswa'] = $this->Data_siswa_model->tampil_data('data_siswa', $where);
		$this->load->view('kartu', $data);

		$this->load->library('dompdf_gen');
		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream('KARTU PESERTA.pdf', array('Attachment' => 0));
		redirect(base_url('index.php/siswa'));
	}
	public function ditolak()
	{
		$this->db->where('status', 2);
		// return $this->db->get('data_siswa')->result();
		$data = array(
			'data_siswa_data' => $this->db->get('data_siswa')->result(),
			'content' => 'data_siswa/data_siswa_tolak',
		);
		$this->load->view('layout', $data);
	}
}
