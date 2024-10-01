<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthAdmin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_Model');
        $this->load->library(['session', 'form_validation']);
        $this->load->helper('url');
    }

    public function login() {
        $data['name_page'] = 'Login - Page';
        $data['error'] = $this->session->flashdata('error'); // Pass error messages to the view
        $this->load->view('login_admin', $data);
    }

	public function login_process() {
		// Set validation rules
		$this->form_validation->set_rules('email_user', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
	
		if ($this->form_validation->run() == FALSE) {
			// Validation failed, show errors
			$this->session->set_flashdata('error', validation_errors());
			redirect('authadmin/login');
		} else {
			$email_user = $this->input->post('email_user');
			$password = md5($this->input->post('password')); // Hash the password using md5
			
			try {
				$user = $this->Admin_Model->login($email_user, $password);
				if ($user) {
					$userdata = array(
						'nama_user' => $user->nama_user,
						'email_user' => $user->email_user,
						'role_id' => 2,
						'logged_in' => true
					);
					$this->session->set_userdata($userdata);
					// Set success flashdata
					$this->session->set_flashdata('success', 'Login successful! Welcome, ' . $user->nama_user);
					redirect('admin/index'); // Redirect to the kasir dashboard
				} else {
					throw new Exception('Invalid Email or Password'); // General error for wrong email or password
				}
			} catch (Exception $e) {
				// Set error flashdata
				$this->session->set_flashdata('error', $e->getMessage());
				redirect('authadmin/login');
			}
		}
	}
	

    // public function logout() {
    //     $this->session->unset_userdata(['logged_in', 'nama_user', 'email_user', 'role_id']);
    //     redirect('authkasir/login');
    // }


	public function logout() {
        // Unset all session data
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        // Redirect to the login page
        redirect('AuthAdmin/login');
    }

	
}
?>
