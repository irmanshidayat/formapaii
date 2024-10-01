<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekspor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Register_form_model'); // Load the model
    }

    public function index() {
        // Get all data from register_form
        $data['register_data'] = $this->Register_form_model->get_all();
        
        // Pass the data to a view for display
        $this->load->view('ekspor/ekspor_data', $data);
    }

    // Additional method to handle data export
    public function ekspor_data() {
        $data = $this->Register_form_model->get_all();
        // Process the data for export (to Excel, CSV, etc.)
    }
}

/* End of file Export.php */
/* Location: ./application/controllers/Export.php */
