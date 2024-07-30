<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Housekeeping/</span>Housekeeping Day Work</h4>


        <div class="row">

            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Material tab card start -->
                                <div class="card">
                                    <div class="card-block">
                                        <form action="<?php echo base_url('Housekeeping/add_Housekeeping') ?>" method="POST">

                                            <div class="row py-2">

                                                <div class="col-md-3 p-3">
                                                    <label for="Incharge_name" class="text-dark">Incharge Name</label>
                                                    <input type="text" name="Incharge_name" class="form-control" id="Incharge_name">
                                                    <span class="input-group" style="color:red;">
                                                        <?php echo form_error('Incharge_name'); // Updated to match the input field name 
                                                        ?>
                                                    </span>
                                                </div>
                                                <div class="col-md-3 p-3">
                                                    <label for="Housekeeping_name" class="text-dark">Housekeeping Name</label>
                                                    <input type="text" name="Housekeeping_name" class="form-control" id="Housekeeping_name"></select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('Housekeeping_name'); ?></span>

                                                </div>

                                                <div class="col-md-3 p-3">
                                                    <label for="Day" class="text-dark">Day</label>
                                                    <input type="text" name="Day" class="form-control" id="Day"></select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('Staff_Name'); ?></span>

                                                </div>
                                                <div class="col-md-3 p-3">
                                                    <label for="Shift" class="text-dark">Shift</label>
                                                    <input type="text" name="Shift" class="form-control" id="Shift"></select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('Staff_Name'); ?></span>
                                                </div>
                                                <div class="col-md-3 p-3">
                                                    <label for="Cleannig_DepartmentName" class="text-dark">Cleannig Department</label>
                                                    <input type="text"name="Clean_DepartmentName" class="form-control" id="Cleannig_DepartmentName"> </select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('GetDepartmentName'); ?></span>

                                                </div>
                                                <div class="col-md-3 p-3">
                                                    <label for="Action" class="text-dark">Day Work</label>
                                                    <select name="Action" class="form-control" id="Action">
                                                        <option value="Cleaned">Cleaned</option>
                                                        <option value="Not-Cleaned">Not-Cleaned</option>
                                                        <option value="Leave">Leave</option>
                                                        <option value="Others">Others</option>
                                                    </select>

                                                </div>
                                                


                                            </div>
                                            <!-- <div class="row">

                                                <div class="col-md-3 p-3">
                                                    <label for="Batch" class="text-dark">Batch</label>
                                                    <select name="Batch" class="form-control" id="Batch"> </select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('Batch'); ?></span>

                                                </div>

                                                <div class="col-md-3 p-3">
                                                    <label for="Semesters" class="text-dark">Semester</label>
                                                    <select name="Semesters" class="form-control" id="Semesters"> </select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('Semesters'); ?></span>

                                                </div>
                                                <div class="col-md-3 p-3">
                                                    <label for="Section" class="text-dark">Section</label>
                                                    <select name="Section" class="form-control" id="Section"> </select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('Semesters'); ?></span>

                                                </div>
                                                <div class="col-md-3 p-3">
                                                    <label for="Subject_code" class="text-dark">Subject Code</label>
                                                    <select name="Subject_code" class="form-control" id="Subject_code"> </select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('Subject_code'); ?></span>

                                                </div>
                                            </div> -->


                                            <!-- <div class="row py-2">

                                                <div class="col-md-3 p-3">
                                                    <label for="Subject_name" class="text-dark">Subject Name</label>
                                                    <select name="Subject_name" class="form-control" id="Subject_name"> </select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('Subject_name'); ?></span>

                                                </div>

                                                <div class="col-md-3 p-3">
                                                    <label for="Category" class="text-dark">Category</label>
                                                    <select name="Category" class="form-control" id="Category">
                                                        <option value="">Select Category </option>
                                                        <option value="Soft Skills">Soft Skills</option>
                                                        <option value="Core">Core</option>
                                                    </select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('Category'); ?></span>

                                                </div>
                                                <div class="col-md-3 p-3">
                                                    <label for="Credits" class="text-dark">Credits</label>
                                                    <select name="Credits" class="form-control" id="Credits">
                                                        <option value="">Select Credits</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('Credits'); ?></span>

                                                </div>

                                                <div class="col-md-3 p-3">
                                                    <label for="Qualifying_Grade" class="text-dark">Qualifying Grade</label>
                                                    <select name="Qualifying_Grade" class="form-control" id="Qualifying_Grade">
                                                        <option value="">Select a grade</option>
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="30">30</option>
                                                        <option value="40">40</option>
                                                        <option value="50">50</option>
                                                        <option value="60">60</option>
                                                        <option value="70">70</option>
                                                        <option value="80">80</option>
                                                        <option value="90">90</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('Qualifying_Grade'); ?></span>

                                                </div>

                                            </div> -->
                                            <div class="row py-2">

                                                <!-- <div class="col-md-3 p-3">
                                                    <label for="DepartmentName" class="text-dark">Mentor Department</label>
                                                    <select name="DepartmentName" class="form-control" id="DepartmentName"> </select>
                                                    <span class="input-group" style="color:red;"><?php echo form_error('DepartmentName'); ?></span>

                                                </div> -->

                                            </div>
                                            <div class="row justify-content-end py-2" id="view-btn">
                                                <div class="col-auto">
                                                    <button type="Submit" class="btn btn-outline-success btn-sm" id="get_subject_assing">Update</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>


                                    <script>
                                        // Function to handle flash messages with SweetAlert
                                        function handleFlashMessages() {
                                            <?php if ($this->session->flashdata('success')) : ?>
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Success!',
                                                    text: '<?php echo $this->session->flashdata('success'); ?>',
                                                });
                                            <?php elseif ($this->session->flashdata('category_error')) : ?>
                                                // Display SweetAlert with the flashdata message
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Oops...',
                                                    text: '<?php echo $this->session->flashdata("category_error"); ?>'
                                                });
                                            <?php endif; ?>
                                        }

                                        // Call the function when the page loads
                                        window.onload = function() {
                                            handleFlashMessages();
                                        };
                                    </script>

                                    <!-- Row start -->
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="card mb-4" id="course_mentor">
    <div class="card-body">
        <div class="row">
            <div id="table-container" style="overflow-x: auto;">
                <table class="table table-striped">
                    <thead style="background-color: #302c63; color: white;">
                        <tr>
                        <th style="color: white;">S.No</th>
                                        <th style="color: white;">Incharge Name</th>
                                        <th style="color: white;">Housekeeping Name</th>
                                        <th style="color: white;">Day</th>
                                        <th style="color: white;">Shift</th>
                                        <th style="color: white;">Cleaning Department</th>
                                        <th style="color: white;">Action</th>
                                        <th style="color: white;">Else</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($clean_data as $data) { ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                            <td><?php echo $data->Incharge_name; ?></td>
                                            <td><?php echo $data->Housekeeping_name; ?></td>
                                            <td><?php echo $data->Day; ?></td>
                                            <td><?php echo $data->Shift; ?></td>
                                            <td><?php echo $data->Clean_DepartmentName; ?></td>
                                            <td><?php echo $data->Action; ?></td>
                                <td>
                                    <a href="#"><i class='fas fa-edit' style='color: info; background-color: transparent;'></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="#"><i class='fas fa-trash' style='color: red; background-color: transparent;'></i></a>
                                </td>
                            </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

            <div>


                <!-- row complete for box   -->

            </div>
        </div>
    </div>

</div>