<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Environmental extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->model('Environmental_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $username = $this->session->userdata('userdata');
        if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {
            $this->load->view('Frontend/header');
            $this->load->view('Frontend/sidebar');
            $this->load->view('Environmental/Environmental_view');
            $this->load->view('Frontend/footer');
        } else {
            redirect('Auth', 'refresh');
        }
    }
}