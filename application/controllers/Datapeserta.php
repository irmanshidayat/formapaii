<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapeserta extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Peserta_model'); // Load model untuk peserta
    }

    public function data_peserta() {
        $data['peserta'] = $this->Peserta_model->get_all_peserta(); // Ambil semua data peserta
        $this->load->view('admin/data_peserta', $data); // Load view untuk menampilkan data
    }
}
