
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class User_Management_model extends CI_Model
{
 public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_user_by_username($username,$password){
        $escaped_username = $this->db->escape_str($username);

        // Construct the SQL query
        $this->db->select('*');
        $this->db->from('Web_UserManagement');
        $this->db->where('UserCode', $escaped_username);
        $query = $this->db->get();

        // Check if a user with the provided username exists
        if ($query->num_rows() == 1) {
            
            $user = $query->row();
            
            if ($password == $user->Pass) {
                // Password is correct, return user data
               
                return  $user;
                 
            // return $query->row();
        } else {
          
            return 0;
        }

    }
   
    }

}