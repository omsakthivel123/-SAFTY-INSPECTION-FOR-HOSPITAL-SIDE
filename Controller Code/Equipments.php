<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Equipments extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->model('Equipments_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $username = $this->session->userdata('userdata');
        if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {

            $data['get_mentor'] = $this->Equipments_model->get_all_equipment_data();
            $this->load->view('Frontend/header');
            $this->load->view('Frontend/sidebar');
            $this->load->view('Equipments/Equipments_view',$data);
            $this->load->view('Frontend/footer');
        } else {
            redirect('Auth', 'refresh');
        }
    }

        public function add_equipment() {
            // Load form validation library and set rules


            // print_r($_POST);
            // exit;
            $this->load->library('form_validation');
            $this->form_validation->set_rules('Department', 'Department', 'required');
            $this->form_validation->set_rules('Staff_Name', 'Staff Name', 'required');
            $this->form_validation->set_rules('Equipments', 'Equipments', 'required');
            $this->form_validation->set_rules('GetDepartmentName', 'Get Department', 'required');

            $this->form_validation->set_rules('get_Staff_Name', 'Get Staff Name', 'required');
            $this->form_validation->set_rules('get_time', 'Get Time', 'required');
    
            if ($this->form_validation->run() == FALSE) {
                // Validation failed, load the form again
                $this->load->view('Equipments/Equipments_view'); // replace 'your_form_view' with your form view name
            } else {
                // Load the model
                $this->load->model('Equipments_model');
    
                // Prepare data for insertion
                $data = array(
                    'Department' => $this->input->post('Department'),
                    'Staff_Name' => $this->input->post('Staff_Name'),
                    'Get_DepartmentName' => $this->input->post('GetDepartmentName'),
                    'Get_Staff_Name' => $this->input->post('get_Staff_Name'),
                    'Equipments' => $this->input->post('Equipments'),
                    'Get_time' => $this->input->post('get_time')
                );
    
                // Insert data into the database
                if ($this->Equipments_model->insert_equipment($data)) {
                    // Redirect to a success page
                    redirect('Equipments'); // Replace 'Equipments/success' with your success route
                } else {
                    // Handle the error
                    $this->load->view('Frontend/header');
                    $this->load->view('Frontend/sidebar');
                    $this->load->view('Equipments/Equipments_view');
                    $this->load->view('Frontend/footer');// replace 'your_form_view' with your form view name
                }
            }
        }
    }
    

