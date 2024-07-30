<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Zones extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->model('Zones_Model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }








    public function index()
    {
        $username = $this->session->userdata('userdata');
        if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {

            // print_r($username);
            // exit;





            $this->load->view('Frontend/header');
            $this->load->view('Frontend/sidebar');
            $this->load->view('Zones/Zones');
            $this->load->view('Frontend/footer');
        } else {
            redirect('Auth', 'refresh');
        }
    }


    public function Permission_Zones()
    {
        $username = $this->session->userdata('userdata');
        if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {

            $this->load->view('Frontend/header');
            $this->load->view('Frontend/sidebar');
            $this->load->view('Zones/Select_Zones');
            $this->load->view('Frontend/footer');
        } else {
            redirect('Auth', 'refresh');
        }
    }

    public function ICU()
    {
        $username = $this->session->userdata('userdata');
        if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {

            $user_role = isset($username['UserRole']) ? $username['UserRole'] : '';
            // print_r($user_role);
            // exit;
            // Get the user's role
            if ($user_role == 'Admin')
                // Load common views
                $this->load->view('Frontend/header');
            $this->load->view('Frontend/sidebar');
            $this->load->view('Zones/ICU');
            $this->load->view('Frontend/footer');
        } else {
            // Redirect to login if not logged in
            redirect('Auth', 'refresh');
        }
    }



    // public function Medichine() {
    //     // Retrieve user session data
    //     $username = $this->session->userdata('userdata');

    //     // Check if user is logged in
    //     if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {
    //         $user_role = isset($username['UserRole']) ? $username['UserRole'] : '';

    //         // Fetch user role from database
    //         $db_user_role = $this->User_model->get_user_role($username['UserId']); // Ensure this method exists and works correctly

    //         // Validate if session role matches the database role
    //         if ($user_role === $db_user_role) {
    //             // Check user role and load appropriate views
    //             if ($user_role === 'Admin') {
    //                 $this->load->view('Frontend/header');
    //                 $this->load->view('Frontend/sidebar');
    //                 $this->load->view('Zones/ICU_S');
    //                 $this->load->view('Frontend/footer');
    //             } elseif ($user_role === 'SuperAdmin') {
    //                 $this->load->view('Frontend/header');
    //                 $this->load->view('Frontend/sidebar');
    //                 $this->load->view('Zones/Madicines');
    //                 $this->load->view('Frontend/footer');
    //             } else {
    //                 // Handle unknown user roles or provide an error message
    //                 show_error('Unknown user role.');
    //             }
    //         } else {
    //             // Handle role mismatch scenario
    //             show_error('Role mismatch. Please contact support.');
    //         }
    //     } else {
    //         // Redirect to login if user is not logged in
    //         redirect('Auth', 'refresh');
    //     }
    // }



    public function Medichine_Zones()
    {
        $username = $this->session->userdata('userdata');
        if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {

            $this->load->view('Frontend/header');
            $this->load->view('Frontend/sidebar');
            $this->load->view('Zones/Select_Medichine_Zones');
            $this->load->view('Frontend/footer');
        } else {
            redirect('Auth', 'refresh');
        }
    }


    public function Medicines()
    {
        $username = $this->session->userdata('userdata');
        if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {

            $user_role = isset($username['UserRole']) ? $username['UserRole'] : '';
            // print_r($user_role);
            // exit;
            // Get the user's role
            if ($user_role == 'Admin')
                // Load common views
                $this->load->view('Frontend/header');
            $this->load->view('Frontend/sidebar');
            $this->load->view('Zones/Medicines_Zone');
            $this->load->view('Frontend/footer');
        } else {
            // Redirect to login if not logged in
            redirect('Auth', 'refresh');
        }
    }


    public function Normal_Zones()
    {
        $username = $this->session->userdata('userdata');
        if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {

            $this->load->view('Frontend/header');
            $this->load->view('Frontend/sidebar');
            $this->load->view('Zones/Select_Normal');
            $this->load->view('Frontend/footer');
        } else {
            redirect('Auth', 'refresh');
        }
    }



    public function Normal_Ward()
    {

        // print_r($_POST);
        // exit;
        // Check if form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Fetch the user from the database
            $user = $this->Zones_Model->get_user_by_email($email);

            //     echo "<pre>";
            // print_r($user->Pass);
            // exit;

            if (!empty($user) && ($password == $user->Pass)) {
                // echo "<pre>";
                // print_r("ghfiueh");
                // exit;
                // Check if user is superadmin or admin
                if ($user->UserRole == 'Superadmin' || $user->UserRole == 'Admin' || $user->UserRole == 'Staff') {


                    // Load common views
                    $this->load->view('Frontend/header');
                    $this->load->view('Frontend/sidebar');
                    $this->load->view('Zones/Normal_Ward_Zone');
                    $this->load->view('Frontend/footer');
                } else {
                    // Redirect to unauthorized page or show error
                    show_error('You are not authorized to view this page.', 403, 'Forbidden');
                }
            } else {
                // Redirect to login if credentials are invalid
                redirect('Auth', 'refresh');
            }
        } else {
            // Load the login form view if not a POST request
            $this->load->view('Zones/login_form'); // Create a view file for the login form
        }
    }

    // public function Normal_Zones()
    // {
    //     $username = $this->session->userdata('userdata');
    //     if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {

    //         $this->load->view('Frontend/header');
    //         $this->load->view('Frontend/sidebar');
    //         $this->load->view('Zones/Select_Normal');
    //         $this->load->view('Frontend/footer');
    //     } else {
    //         redirect('Auth', 'refresh');
    //     }
    // }

    // public function Normal_Ward()
    // {
    //     $username = $this->session->userdata('userdata');
    //     if (!empty($username) && isset($username['IsOnLogin']) && $username['IsOnLogin'] === TRUE) {

    //         $user_role = isset($username['UserRole']) ? $username['UserRole'] : '';
    //         // print_r($user_role);
    //         // exit;
    //         // Get the user's role
    //         if ($user_role == 'Admin')
    //             // Load common views
    //             $this->load->view('Frontend/header');
    //         $this->load->view('Frontend/sidebar');
    //         $this->load->view('Zones/Normal_Ward_Zone');
    //         $this->load->view('Frontend/footer');
    //     } else {
    //         // Redirect to login if not logged in
    //         redirect('Auth', 'refresh');
    //     }
    // }

}
