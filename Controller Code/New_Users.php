<?php
defined('BASEPATH') or exit('No direct script access allowed');

class New_Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->model('add_users_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $username = $this->session->userdata('userdata');
        if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {


            if($_POST){
                // print_r($_POST);
                $this->data['get_fees_type'] = $get_fees_type = $this->add_users_model->Add_Staffs();
            }

            $this->load->view('Frontend/header');
            $this->load->view('Frontend/sidebar');
            $this->load->view('Add_Users/Add_Users');
            $this->load->view('Frontend/footer');
        } else {
            redirect('Auth', 'refresh');
        }
    }

    public function Add(){

        $username = $this->session->userdata('userdata');
        if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {

            if($_POST){
                print_r($_POST);
                exit;
    
            }else{
                print_r("ff");
            }

          


        } else {
            redirect('Auth', 'refresh');
        }
    }

}