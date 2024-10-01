<?php
class Peserta_model extends CI_Model {

    public function get_all_peserta() {
        $query = $this->db->get('register_form'); // Ganti 'peserta' dengan nama tabel yang sesuai
        return $query->result(); // Mengembalikan hasil sebagai array objek
    }
}
