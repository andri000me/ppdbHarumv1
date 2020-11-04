<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Akses extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Akses_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'akses/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'akses/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'akses/index.html';
            $config['first_url'] = base_url() . 'akses/index.html';
        }

        $config['per_page'] = 60;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Akses_model->total_rows($q);
        $akses = $this->Akses_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'akses_data' => $akses,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'akses/akses_list',
        );
        $this->load->view('layout', $data);
    }

    public function read($id)
    {
        $row = $this->Akses_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_siswa' => $row->id_siswa,
                'nama' => $row->nama,
                'pess' => $row->pess,
                'is_active' => $row->is_active,

                'content' => 'akses/akses_read'
            );

            $this->load->view('layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('akses'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('akses/create_action'),
            'id_siswa' => set_value('id_siswa'),
            'nama' => set_value('nama'),
            'pess' => set_value('pess'),
            'is_active' => set_value('is_active'),

            'content' => 'akses/akses_form'
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
                'nama' => $this->input->post('nama', TRUE),
                'pess' => $this->input->post('pess', TRUE),
                'is_active' => $this->input->post('is_active', TRUE),
            );

            $this->Akses_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('akses'));
        }
    }

    public function update($id)
    {
        $row = $this->Akses_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('akses/update_action'),
                'id_siswa' => set_value('id_siswa', $row->id_siswa),
                'nama' => set_value('nama', $row->nama),
                'pess' => set_value('pess', $row->pess),
                'is_active' => set_value('is_active', $row->is_active),

                'content' => 'akses/akses_form'
            );
            $this->load->view('layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('akses'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_siswa', TRUE));
        } else {
            $data = array(
                'nama' => $this->input->post('nama', TRUE),
                'pess' => $this->input->post('pess', TRUE),
                'is_active' => $this->input->post('is_active', TRUE),
            );

            $this->Akses_model->update($this->input->post('id_siswa', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('akses'));
        }
    }

    public function delete($id)
    {
        $row = $this->Akses_model->get_by_id($id);

        if ($row) {
            $this->Akses_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('akses'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('akses'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('pess', 'pess', 'trim|required');
        $this->form_validation->set_rules('is_active', 'is active', 'trim|required');

        $this->form_validation->set_rules('id_siswa', 'id_siswa', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "akses.xls";
        $judul = "akses";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Nama");
        xlsWriteLabel($tablehead, $kolomhead++, "Pess");
        xlsWriteLabel($tablehead, $kolomhead++, "Is Active");

        foreach ($this->Akses_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->nama);
            xlsWriteNumber($tablebody, $kolombody++, $data->pess);
            xlsWriteNumber($tablebody, $kolombody++, $data->is_active);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=akses.doc");

        $data = array(
            'akses_data' => $this->Akses_model->get_all(),
            'start' => 0
        );

        $this->load->view('akses/akses_doc', $data);
    }
}

/* End of file Akses.php */
/* Location: ./application/controllers/Akses.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-10-20 17:39:56 */
/* http://harviacode.com */
