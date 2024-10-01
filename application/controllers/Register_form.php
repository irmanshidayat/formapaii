<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register_form extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Register_form_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'register_form/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'register_form/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'register_form/index.html';
            $config['first_url'] = base_url() . 'register_form/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Register_form_model->total_rows($q);
        $register_form = $this->Register_form_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'register_form_data' => $register_form,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('register_form_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Register_form_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama_lengkap' => $row->nama_lengkap,
		'nomor_wa' => $row->nomor_wa,
		'email' => $row->email,
		'usia' => $row->usia,
		'jenis_kelamin' => $row->jenis_kelamin,
		'info_pelatihan' => $row->info_pelatihan,
		'daerah_domisili' => $row->daerah_domisili,
		'tujuan_pelatihan' => $row->tujuan_pelatihan,
		'kategori' => $row->kategori,
		'platform_jobseeker' => $row->platform_jobseeker,
		'jenis_pekerjaan' => $row->jenis_pekerjaan,
		'jenis_usaha_bisnis' => $row->jenis_usaha_bisnis,
		'sekolah_universitas' => $row->sekolah_universitas,
		'kategori_pelatihan' => $row->kategori_pelatihan,
		'link_sosmed' => $row->link_sosmed,
		'created_at' => $row->created_at,
	    );
            $this->load->view('register_form_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('register_form'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('register_form/create_action'),
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
        $this->load->view('register_form_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'nomor_wa' => $this->input->post('nomor_wa',TRUE),
		'email' => $this->input->post('email',TRUE),
		'usia' => $this->input->post('usia',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'info_pelatihan' => $this->input->post('info_pelatihan',TRUE),
		'daerah_domisili' => $this->input->post('daerah_domisili',TRUE),
		'tujuan_pelatihan' => $this->input->post('tujuan_pelatihan',TRUE),
		'kategori' => $this->input->post('kategori',TRUE),
		'platform_jobseeker' => $this->input->post('platform_jobseeker',TRUE),
		'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan',TRUE),
		'jenis_usaha_bisnis' => $this->input->post('jenis_usaha_bisnis',TRUE),
		'sekolah_universitas' => $this->input->post('sekolah_universitas',TRUE),
		'kategori_pelatihan' => $this->input->post('kategori_pelatihan',TRUE),
		'link_sosmed' => $this->input->post('link_sosmed',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
	    );

            $this->Register_form_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('register_form'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Register_form_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('register_form/update_action'),
		'id' => set_value('id', $row->id),
		'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
		'nomor_wa' => set_value('nomor_wa', $row->nomor_wa),
		'email' => set_value('email', $row->email),
		'usia' => set_value('usia', $row->usia),
		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
		'info_pelatihan' => set_value('info_pelatihan', $row->info_pelatihan),
		'daerah_domisili' => set_value('daerah_domisili', $row->daerah_domisili),
		'tujuan_pelatihan' => set_value('tujuan_pelatihan', $row->tujuan_pelatihan),
		'kategori' => set_value('kategori', $row->kategori),
		'platform_jobseeker' => set_value('platform_jobseeker', $row->platform_jobseeker),
		'jenis_pekerjaan' => set_value('jenis_pekerjaan', $row->jenis_pekerjaan),
		'jenis_usaha_bisnis' => set_value('jenis_usaha_bisnis', $row->jenis_usaha_bisnis),
		'sekolah_universitas' => set_value('sekolah_universitas', $row->sekolah_universitas),
		'kategori_pelatihan' => set_value('kategori_pelatihan', $row->kategori_pelatihan),
		'link_sosmed' => set_value('link_sosmed', $row->link_sosmed),
		'created_at' => set_value('created_at', $row->created_at),
	    );
            $this->load->view('register_form_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('register_form'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'nomor_wa' => $this->input->post('nomor_wa',TRUE),
		'email' => $this->input->post('email',TRUE),
		'usia' => $this->input->post('usia',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'info_pelatihan' => $this->input->post('info_pelatihan',TRUE),
		'daerah_domisili' => $this->input->post('daerah_domisili',TRUE),
		'tujuan_pelatihan' => $this->input->post('tujuan_pelatihan',TRUE),
		'kategori' => $this->input->post('kategori',TRUE),
		'platform_jobseeker' => $this->input->post('platform_jobseeker',TRUE),
		'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan',TRUE),
		'jenis_usaha_bisnis' => $this->input->post('jenis_usaha_bisnis',TRUE),
		'sekolah_universitas' => $this->input->post('sekolah_universitas',TRUE),
		'kategori_pelatihan' => $this->input->post('kategori_pelatihan',TRUE),
		'link_sosmed' => $this->input->post('link_sosmed',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
	    );

            $this->Register_form_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('register_form'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Register_form_model->get_by_id($id);

        if ($row) {
            $this->Register_form_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('register_form'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('register_form'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'trim|required');
	$this->form_validation->set_rules('nomor_wa', 'nomor wa', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('usia', 'usia', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('info_pelatihan', 'info pelatihan', 'trim|required');
	$this->form_validation->set_rules('daerah_domisili', 'daerah domisili', 'trim|required');
	$this->form_validation->set_rules('tujuan_pelatihan', 'tujuan pelatihan', 'trim|required');
	$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
	$this->form_validation->set_rules('platform_jobseeker', 'platform jobseeker', 'trim|required');
	$this->form_validation->set_rules('jenis_pekerjaan', 'jenis pekerjaan', 'trim|required');
	$this->form_validation->set_rules('jenis_usaha_bisnis', 'jenis usaha bisnis', 'trim|required');
	$this->form_validation->set_rules('sekolah_universitas', 'sekolah universitas', 'trim|required');
	$this->form_validation->set_rules('kategori_pelatihan', 'kategori pelatihan', 'trim|required');
	$this->form_validation->set_rules('link_sosmed', 'link sosmed', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Register_form.php */
/* Location: ./application/controllers/Register_form.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-09-28 10:08:59 */
/* http://harviacode.com */