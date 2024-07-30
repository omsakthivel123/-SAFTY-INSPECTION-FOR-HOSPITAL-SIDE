<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Equipments_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_equipment($data) {

        return $this->db->insert('Web_Equipments_Mst', $data); // Replace 'Equipments' with your table name
    }

    public function get_all_equipment_data() {
        $this->db->select('*');
        $this->db->from('Web_Equipments_Mst');
        $query = $this->db->get();
        return $query->result();
    }
}