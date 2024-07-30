<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Zones_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_user_role($user_id) {
        $this->db->select('UserRole');
        $this->db->from('users'); // Replace with your actual table name
        $this->db->where('UserId', $user_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->UserRole;
        } else {
            return ''; // Or handle this case as needed
        }
    }


    public function get_user_by_email($email) {
        // print_r($email);
        // exit;

        // $this->db->where('UserCode', $email);
        // $query = $this->db->get('Web_UserManagement');
        //  print_r($query);
        // exit;
        // return $query->row_array();

  
    

    $sql="  SELECT *
        FROM Web_UserManagement
        WHERE UserType = '$email'";

    // echo "<pre>";
    // print_r($sql);
    // exit;
      
       
        $sql1 = $this->db->query($sql);
        $q = $sql1->row();
        return $q;
}  }