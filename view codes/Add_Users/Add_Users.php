<div class="content-wrapper">

    <style>
        .profile-image-container {
            position: relative;
            display: inline-block;
            border-radius: 8px;
            /* Rounded corners for a square shape */
            overflow: hidden;
            /* Ensures the image fits within the container */
            border: 3px solid #ddd;
            /* Border around the image */
            width: 250px;
            /* Adjust the size as needed */
            height: 250px;

        }

        .img-thumbnail {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ensures the image covers the container without distortion */
            border-radius: 8px;
            /* Matches the container's border-radius for rounded corners */
        }

        .overlay-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* Centers the icon */
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
            display: none;
            /* Hide by default */
        }

        .profile-image-container:hover .overlay-icon {
            display: block;
            /* Show the icon when hovering over the profile image container */
        }


        .overlay-icon i {
            font-size: 1.5em;
            /* Adjust icon size as needed */
        }
    </style>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">SAAI /</span> Add New Staff</h4>
        <form method="POST" enctype="multipart/form-data">

            <div class="row">

                <div class="col-xxl-12">
                    <div class="card mb-4">
                        <div class="card-body">



                            <div class="container">
                                <div class="row">
                                    <!-- Form Fields Section -->
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-container">
                                            <div class="row mb-3 py-2">
                                                <label for="AdmissionNo" class="col-sm-4 col-form-label">Staff No<sup>*</sup></label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="StaffNo" name="StaffNo" class="form-control" >
                                                    <span class="text-danger"><?php echo form_error('Title'); ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-3 py-2">
                                                <label for="StudentId" class="col-sm-4 col-form-label">Staff Id<sup>*</sup></label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="StaffId" name="StaffId" class="form-control" >
                                                    <span class="text-danger"><?php echo form_error('StudentId'); ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-3 py-2">
                                                <label for="initial" class="col-sm-4 col-form-label">Staff Initial<sup>*</sup></label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="initial" name="initial" class="form-control">
                                                    <span class="text-danger"><?php echo form_error('Title'); ?></span>
                                                </div>
                                            </div>

                                            <div class="row mb-3 py-2">
                                                <label for="StudentName" class="col-sm-4 col-form-label">Staff Name<sup>*</sup></label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="StaffName" name="StaffName" class="form-control" >
                                                    <span class="text-danger"><?php echo form_error('Initial'); ?></span>
                                                </div>
                                            </div>

                                            <div class="row mb-3 py-2">
                                                <label for="DOB" class="col-sm-4 col-form-label">DOB<sup>*</sup></label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="DOB" name="DOB" class="form-control" >
                                                    <span class="text-danger"><?php echo form_error('Name'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Profile Image Section -->
                                    <div class="col-lg-6 col-md-12 d-flex flex-column align-items-center mb-3">
                                        <div class="row">
                                            <label for="Title" class="col-md-12 control-label d-flex justify-content-center text-dark">Staff Profile Image</label>
                                        </div>
                                        <div class="profile-image-container">

                                            <img src="<?php echo base_url('uploads/Student_Profile/' ) ?>" id="current_image" alt="Staff Image" name="image" class="img-thumbnail">
                                            <input type="hidden" name="image_name" >
                                            <div class="overlay-icon">
                                                <label for="upload_image" class="btn btn-link btn-change-image">
                                                    <i class="fas fa-camera"></i>
                                                </label>
                                                <input type="file" id="upload_image" name="image"  style="display: none;">
                                            </div>

                                        </div>

                                        <br>
                                        <div class="student-name">
                                            <span class="input-group" style="color:red;"><?php echo form_error('upload_image'); ?></span>

                                            <!-- <?php $fullname = $Staff->initial . '.' . $Staff->name;  ?>
                                            <p class=" col-form-label"><?php echo $fullname ?></p> -->
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- First Card -->
                <div class="col-xxl-6">

                    <div class="card mb-4">
                        <div class="card-body">

                            <div class="row p-3">
                                <label for="FatherName" class="col-sm-4 col-form-label">FATHER NAME<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="FatherName" name="FatherName" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('FatherName'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="BloodGroup" class="col-sm-4 col-form-label">BLOOD GROUP<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="BloodGroup" name="BloodGroup" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('BloodGroup'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="Student_Mobile" class="col-sm-4 col-form-label">Staff MOBILE<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Staff_Mobile" name="Staff_Mobile" class="form-control">
                                    <span class="input-group" style="color:red;"><?php echo form_error('Staff_Mobile'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="Parent_Mobile" class="col-sm-4 col-form-label">PARENT MOBILE<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Parent_Mobile" name="Parent_Mobile" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('Parent_Mobile'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="Email" class="col-sm-4 col-form-label">EMAIL ID<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Email" name="Email" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('Email'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="Aadharno" class="col-sm-4 col-form-label">AADHAR NO<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Aadharno" name="Aadharno" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('Aadharno'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="Pan_Card" class="col-sm-4 col-form-label">PAN CARD NO<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Pan_Card" name="Pan_Card" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('Pan_Card'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="Institution" class="col-sm-4 col-form-label">INSTITUTION<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Institution" name="Institution" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('Institution'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="Department" class="col-sm-4 col-form-label">DEPARTMENT<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Department" name="Department" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('Department'); ?></span>
                                </div>
                            </div>
                            <!-- <div class="row p-3">
                                <label for="Course" class="col-sm-4 col-form-label">COURSE<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Course" name="Course" class="form-control" value="<?php echo $Staff->CourseName_1; ?>">
                                    <span class="input-group" style="color:red;"><?php echo form_error('Course'); ?></span>
                                </div>
                            </div> -->
                            <!-- <div class="row p-3">
                                <label for="Batch" class="col-sm-4 col-form-label">BATCH<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Batch" name="Batch" class="form-control" value="<?php echo $Staff->Batch_1; ?>">
                                    <span class="input-group" style="color:red;"><?php echo form_error('Batch'); ?></span>
                                </div>
                            </div> -->
                            <!-- <div class="row p-3">
                                <label for="Section" class="col-sm-4 col-form-label">SECTION<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Section" name="Section" class="form-control" value="<?php echo $Staff->Section_1; ?>" maxlength="16">
                                    <span class="input-group" style="color:red;"><?php echo form_error('Section'); ?></span>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="col-xxl-6">
                    <div class="card mb-4">
                        <div class="card-body">

                            <!-- <div class="row p-3">
                                <label for="Exam_Reg_No" class="col-sm-4 col-form-label">EXAM REGISTRATION NO<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Exam_Reg_No" name="Exam_Reg_No" class="form-control" value="<?php echo $Staff->Exam_Reg_No; ?>">
                                    <span class="input-group" style="color:red;"><?php echo form_error('Exam_Reg_No'); ?></span>
                                </div>
                            </div> -->
                            <div class="row p-3">
                                <label for="Address" class="col-sm-4 col-form-label">ADDRESS<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Address" name="Address" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('Address'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="State" class="col-sm-4 col-form-label">STATE<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="State" name="State" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('State'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="District" class="col-sm-4 col-form-label">DISTRICT<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="District" name="District" class="form-control">
                                    <span class="input-group" style="color:red;"><?php echo form_error('District'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="Pincode" class="col-sm-4 col-form-label">PINCODE<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="pincode" name="Pincode" class="form-control">
                                    <span class="input-group" style="color:red;"><?php echo form_error('Pincode'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="BankName" class="col-sm-4 col-form-label">BANK NAME<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="bank_name" name="BankName" class="form-control">
                                    <span class="input-group" style="color:red;"><?php echo form_error('BankName'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="AccountNumber" class="col-sm-4 col-form-label">ACCOUNT NUMBER<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="account_no" name="AccountNumber" class="form-control">
                                    <span class="input-group" style="color:red;"><?php echo form_error('AccountNumber'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="IFSC" class="col-sm-4 col-form-label">IFSC<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="ifsc" name="IFSC" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('IFSC'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="MICRNo" class="col-sm-4 col-form-label">MICR NO<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="micr_no" name="MICRNo" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('MICRNo'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="Branch" class="col-sm-4 col-form-label">BRANCH<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="branch" name="Branch" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('Branch'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <label for="Bank_Address" class="col-sm-4 col-form-label">BANK ADDRESS<sup>*</sup></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Bank_Address" name="Bank_Address" class="form-control" >
                                    <span class="input-group" style="color:red;"><?php echo form_error('Bank_Address'); ?></span>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <!-- <a href="<?php echo base_url('Staff/edit'); ?>" class="btn btn-outline-danger btn-sm mr-2">Back</a> -->
                                    <button type="submit" class="btn btn-outline-success btn-sm">Update</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Second Card End -->
            </div>
            <!-- row end -->
        </form>
    </div>
    <!-- container-p-y end -->
</div>
<!-- content-wrapper end -->
<script>
    <?php if ($this->session->flashdata('success')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '<?php echo $this->session->flashdata('success'); ?>',
        });
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')) : ?>
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '<?php echo $this->session->flashdata('error'); ?>',
        });
    <?php endif; ?>
</script>
</div>
</div>
</div>