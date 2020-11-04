<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nominal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Nominal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'nominal/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'nominal/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'nominal/index.html';
            $config['first_url'] = base_url() . 'nominal/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Nominal_model->total_rows($q);
        $nominal = $this->Nominal_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'nominal_data' => $nominal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'nominal/nominal_list',
        );
        $this->load->view('layout', $data);
    }

    public function read($id)
    {
        $row = $this->Nominal_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'id_kategori' => $row->id_kategori,
                'infaq_gedung' => $row->infaq_gedung,
                'infaq_perpustakaan' => $row->infaq_perpustakaan,
                'infaq_kegiatan' => $row->infaq_kegiatan,
                'buku_dan_media_pembelajaran' => $row->buku_dan_media_pembelajaran,
                'seragam_dan_attribut_sekolah' => $row->seragam_dan_attribut_sekolah,
                'jilbab' => $row->jilbab,
                'pendidikan_infaq_pengembangan' => $row->pendidikan_infaq_pengembangan,
                'total' => $row->total,

                'content' => 'nominal/nominal_read'
            );

            $this->load->view('layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nominal'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('nominal/create_action'),
            'id' => set_value('id'),
            'id_kategori' => set_value('id_kategori'),
            'infaq_gedung' => set_value('infaq_gedung'),
            'infaq_perpustakaan' => set_value('infaq_perpustakaan'),
            'infaq_kegiatan' => set_value('infaq_kegiatan'),
            'buku_dan_media_pembelajaran' => set_value('buku_dan_media_pembelajaran'),
            'seragam_dan_attribut_sekolah' => set_value('seragam_dan_attribut_sekolah'),
            'jilbab' => set_value('jilbab'),
            'pendidikan_infaq_pengembangan' => set_value('pendidikan_infaq_pengembangan'),
            'total' => set_value('total'),

            'content' => 'nominal/nominal_form'
        );
        $this->load->view('layout', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {

            $id_kategori = $this->input->post('id_kategori', TRUE);
            $infaq_gedung = $this->input->post('infaq_gedung', TRUE);
            $infaq_perpustakaan = $this->input->post('infaq_perpustakaan', TRUE);
            $infaq_kegiatan = $this->input->post('infaq_kegiatan', TRUE);
            $buku_dan_media_pembelajaran = $this->input->post('buku_dan_media_pembelajaran', TRUE);
            $seragam_dan_attribut_sekolah = $this->input->post('seragam_dan_attribut_sekolah', TRUE);
            $jilbab = $this->input->post('jilbab', TRUE);
            $pendidikan_infaq_pengembangan = $this->input->post('pendidikan_infaq_pengembangan', TRUE);

            //menjumlahkan semua nilai
            $total = $infaq_gedung + $infaq_perpustakaan + $infaq_kegiatan + $buku_dan_media_pembelajaran + $seragam_dan_attribut_sekolah + $jilbab + $pendidikan_infaq_pengembangan;

            $data = array(
                'id_kategori' => $id_kategori,
                'infaq_gedung' => $infaq_gedung,
                'infaq_perpustakaan' => $infaq_perpustakaan,
                'infaq_kegiatan' => $infaq_kegiatan,
                'buku_dan_media_pembelajaran' => $buku_dan_media_pembelajaran,
                'seragam_dan_attribut_sekolah' => $seragam_dan_attribut_sekolah,
                'jilbab' => $jilbab,
                'pendidikan_infaq_pengembangan' => $pendidikan_infaq_pengembangan,
                'total' => $total
            );

            $this->Nominal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('nominal'));
        }
    }

    public function update($id)
    {
        $row = $this->Nominal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('nominal/update_action'),
                'id' => set_value('id', $row->id),
                'id_kategori' => set_value('id_kategori', $row->id_kategori),
                'infaq_gedung' => set_value('infaq_gedung', $row->infaq_gedung),
                'infaq_perpustakaan' => set_value('infaq_perpustakaan', $row->infaq_perpustakaan),
                'infaq_kegiatan' => set_value('infaq_kegiatan', $row->infaq_kegiatan),
                'buku_dan_media_pembelajaran' => set_value('buku_dan_media_pembelajaran', $row->buku_dan_media_pembelajaran),
                'seragam_dan_attribut_sekolah' => set_value('seragam_dan_attribut_sekolah', $row->seragam_dan_attribut_sekolah),
                'jilbab' => set_value('jilbab', $row->jilbab),
                'pendidikan_infaq_pengembangan' => set_value('pendidikan_infaq_pengembangan', $row->pendidikan_infaq_pengembangan),
                'total' => set_value('total', $row->total),

                'content' => 'nominal/nominal_form'
            );
            $this->load->view('layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nominal'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'id_kategori' => $this->input->post('id_kategori', TRUE),
                'infaq_gedung' => $this->input->post('infaq_gedung', TRUE),
                'infaq_perpustakaan' => $this->input->post('infaq_perpustakaan', TRUE),
                'infaq_kegiatan' => $this->input->post('infaq_kegiatan', TRUE),
                'buku_dan_media_pembelajaran' => $this->input->post('buku_dan_media_pembelajaran', TRUE),
                'seragam_dan_attribut_sekolah' => $this->input->post('seragam_dan_attribut_sekolah', TRUE),
                'jilbab' => $this->input->post('jilbab', TRUE),
                'pendidikan_infaq_pengembangan' => $this->input->post('pendidikan_infaq_pengembangan', TRUE),
                'total' => $this->input->post('total', TRUE),
            );

            $this->Nominal_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('nominal'));
        }
    }

    public function delete($id)
    {
        $row = $this->Nominal_model->get_by_id($id);

        if ($row) {
            $this->Nominal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('nominal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nominal'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_kategori', 'id kategori', 'trim|required');
        $this->form_validation->set_rules('infaq_gedung', 'infaq gedung', 'trim|required');
        $this->form_validation->set_rules('infaq_perpustakaan', 'infaq perpustakaan', 'trim|required');
        $this->form_validation->set_rules('infaq_kegiatan', 'infaq kegiatan', 'trim|required');
        $this->form_validation->set_rules('buku_dan_media_pembelajaran', 'buku dan media pembelajaran', 'trim|required');
        $this->form_validation->set_rules('seragam_dan_attribut_sekolah', 'seragam dan attribut sekolah', 'trim|required');
        $this->form_validation->set_rules('jilbab', 'jilbab', 'trim|required');
        $this->form_validation->set_rules('pendidikan_infaq_pengembangan', 'pendidikan infaq pengembangan', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Nominal.php */
/* Location: ./application/controllers/Nominal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-03-06 21:30:38 */
/* http://harviacode.com */
