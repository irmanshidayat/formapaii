<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function login($email_user, $password) {
        $this->db->where('role_id', 2); // Add condition for role_id
        $this->db->where('email_user', $email_user); // Add condition for email_user
        $this->db->where('password', $password); // Add condition for hashed password
        $query = $this->db->get('user'); // Assuming your table name is 'user'
        
        // Debug: Display the query
        // echo $this->db->last_query();
        // exit;

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
}
