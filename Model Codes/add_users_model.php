<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class add_users_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function Add_Staffs(){

        $StaffId = $this->input->post('StaffId');

        $this->load->library('upload');

        $config['upload_path'] = './uploads/Profile/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048; // 2 MB
        $config['encrypt_name'] = TRUE; // Encrypt the uploaded file's name

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            $new_file_name = $this->input->post('image_name');
            // return;
        } else {
            $upload_data = $this->upload->data();
            $StaffId = $this->input->post('StaffId');
            $new_file_name = $StaffId . '_' . $upload_data['file_name'];
            $new_upload_path = './uploads/Profile/' . $new_file_name;
            rename($upload_data['full_path'], $new_upload_path);
            $data['upload_info'] = 'File successfully uploaded as ' . $new_file_name;
        }

        if ($_POST) {

            $post_data = array(
                'StaffId' => $this->input->post('StaffId'),
                'StaffNo' => $this->input->post('StaffNo'),
                'initial' => $this->input->post('initial'),
                'StaffName' => $this->input->post('StaffName'),
                'DOB' => $this->input->post('DOB'),
                'Profile' =>  $new_file_name,
                'father_name' => $this->input->post('FatherName'),
                'blood_group' => $this->input->post('BloodGroup'),
                'Staff_Mobile' => $this->input->post('Staff_Mobile'),
                'alternate_mobile_no' => $this->input->post('Parent_Mobile'),
                'email_id' => $this->input->post('Email'),
                'aadhar_card_no' => $this->input->post('Aadharno'),
                'Pan_card' => $this->input->post('Pan_Card'),
                'InstitutionName_1' => $this->input->post('Institution'),
                'DepartmentName_1' => $this->input->post('Department'),
                'Address' => $this->input->post('Address'),
                'per_addr_state' => $this->input->post('State'),
                'per_addr_district' => $this->input->post('District'),
                'per_addr_pincode' => $this->input->post('Pincode'),
                'BankName' => $this->input->post('BankName'),
                'AccountNumber' => $this->input->post('AccountNumber'),
                'IFSCCode' => $this->input->post('IFSC'),
                'MICRCode' => $this->input->post('MICRNo'),
                'Bank_Branch' => $this->input->post('Branch'),
                'BankAddress' => $this->input->post('Bank_Address'),
                'Modified_By' => "Admin",
                'Modified_on' => date('Y-m-d H:i:s')
            );

            // echo "<pre>";
            // print_r($post_data);
            // exit;

            $this->db->insert('Web_Staff_Mst', $post_data);

            // Check if insertion was successful
            if ($this->db->affected_rows() > 0) {
                return 1; // Success
            } else {
                return 0; // Failure
            }
        }

     else {
        redirect('Auth', 'refresh');
    }
}
}