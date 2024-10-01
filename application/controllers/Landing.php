<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');  // Load form validation library
        $this->load->model('Register_form_model'); // Load model (pastikan model sudah ada)
        $this->load->helper(array('form', 'url')); // Load form and URL helper
    }

    public function index() {
        $data = array(
            'button' => 'Create',
            'action' => site_url('landing/create_action'),
            'id' => set_value('id'),
            'nama_lengkap' => set_value('nama_lengkap'),
            'nomor_wa' => set_value('nomor_wa'),
            'email' => set_value('email'),
            'usia' => set_value('usia'),
            'jenis_kelamin' => set_value('jenis_kelamin'),
            'info_pelatihan' => set_value('info_pelatihan'),
            'daerah_domisili' => set_value('daerah_domisili'),
            'tujuan_pelatihan' => set_value('tujuan_pelatihan'),
            'kategori' => set_value('kategori'),
            'platform_jobseeker' => set_value('platform_jobseeker'),
            'jenis_pekerjaan' => set_value('jenis_pekerjaan'),
            'jenis_usaha_bisnis' => set_value('jenis_usaha_bisnis'),
            'sekolah_universitas' => set_value('sekolah_universitas'),
            'kategori_pelatihan' => set_value('kategori_pelatihan'),
            'link_sosmed' => set_value('link_sosmed'),
            'created_at' => set_value('created_at'),
        );
        $this->load->view('landing_page', $data);
    }

    public function create_action() 
    {
        $this->_rules();  // Load validation rules

        if ($this->form_validation->run() == FALSE) {
            $this->index(); // Tampilkan kembali form jika validasi gagal
        } else {
            // Data input
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap', TRUE),
                'nomor_wa' => $this->input->post('nomor_wa', TRUE),
                'email' => $this->input->post('email', TRUE),
                'usia' => $this->input->post('usia', TRUE),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
                'info_pelatihan' => $this->input->post('info_pelatihan', TRUE),
                'daerah_domisili' => $this->input->post('daerah_domisili', TRUE),
                'tujuan_pelatihan' => $this->input->post('tujuan_pelatihan', TRUE),
                'kategori' => $this->input->post('kategori', TRUE),
                'platform_jobseeker' => $this->input->post('platform_jobseeker', TRUE),
                'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan', TRUE),
                'jenis_usaha_bisnis' => $this->input->post('jenis_usaha_bisnis', TRUE),
                'sekolah_universitas' => $this->input->post('sekolah_universitas', TRUE),
                'kategori_pelatihan' => $this->input->post('kategori_pelatihan', TRUE),
                'link_sosmed' => $this->input->post('link_sosmed', TRUE),
                'created_at' => date('Y-m-d H:i:s'),
            );

            // Simpan ke database
            $this->Register_form_model->insert($data);

            // Flash message success dan redirect
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('register_form'));
        }
    }

    // Fungsi untuk membuat aturan validasi form
    private function _rules() {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('nomor_wa', 'Nomor WA', 'trim|required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('usia', 'Usia', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('info_pelatihan', 'Info Pelatihan', 'trim|required');
        $this->form_validation->set_rules('daerah_domisili', 'Daerah Domisili', 'trim|required');
        $this->form_validation->set_rules('tujuan_pelatihan', 'Tujuan Pelatihan', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('kategori_pelatihan', 'Kategori Pelatihan', 'trim|required');
    }
}
