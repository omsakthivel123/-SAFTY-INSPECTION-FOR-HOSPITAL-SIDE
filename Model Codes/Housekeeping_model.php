<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Housekeeping_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function add_housekeeping($data) {
        return $this->db->insert('Web_Clean_Mst', $data);
    }

    public function get_all_clean_data() {
        $query = $this->db->get('Web_Clean_Mst');
        return $query->result();
    }
}