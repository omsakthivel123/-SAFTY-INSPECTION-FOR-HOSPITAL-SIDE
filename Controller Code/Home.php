<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('User_Management_model');
    }

    public function index()
    {
        $username = $this->session->userdata('userdata');
        if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {

            $this->load->view('Frontend/header');
            $this->load->view('Frontend/sidebar');
            $this->load->view('Home/index');
            $this->load->view('Frontend/footer');
        } else {
            redirect('Auth', 'refresh');
        }
    }

    public function sample()
    {
        $this->load->view('Frontend/header');
        $this->load->view('Frontend/sidebar');
        $this->load->view('Home/sample');
        $this->load->view('Frontend/footer');
    }
}
