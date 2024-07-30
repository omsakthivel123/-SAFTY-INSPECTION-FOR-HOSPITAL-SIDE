<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('User_Management_model');
    }

    public function index() {
        $this->load->view('login/login'); // Load login view
    }

    public function verify() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_validate_credentials');

        if ($this->form_validation->run() == false) {
            // Validation failed, redirect to login page
            $this->load->view('login/login');
        } else {
            // Validation successful, redirect to Home
            redirect('Home');
        }
    }

    public function validate_credentials($password) {
        $username = $this->input->post('username');
        $user = $this->User_Management_model->get_user_by_username($username, $password);

        if (!$user) {
            $this->form_validation->set_message('validate_credentials', 'You entered the wrong username or password.');
            return false;
        }

        // Set session data for authenticated user
        $userdata = array(
            'Id' => $user->Id,
            'UserCode' => $user->UserCode,
            'Status' => $user->Status,
            'UserRole' => $user->UserRole,
            'HospitalCode' => $user->HospitalCode,
            'DepartmentCode' => $user->DepartmentCode,
            'DepartmentName' => $user->DepartmentName,
            'HospitalName' => $user->HospitalName,
            'HOD' => $user->HOD,
            'IsOnLogin' => TRUE
        );
        // echo'pre';
        // print_r($userdata);
        // exit;
        $this->session->set_userdata('userdata', $userdata);
        $this->session->set_userdata('IsOnLogin', true);

        return true;
    }

    public function logout() {
        $this->session->sess_destroy(); // Destroy session
        redirect('Auth'); // Redirect to login page
    }

}
?>