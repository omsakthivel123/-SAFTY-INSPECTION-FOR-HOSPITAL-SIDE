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

        .hi {
            height: 1px;
            ;
        }
    </style>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Emergency /</span> First Aid Kit</h4>
        <div class="stage" id="stage1">
            <div class="row">

                <!-- Left side - Picture and Definitions -->
                <div class="col-xxl-12">
                    <div class="card mb-4">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo base_url('assets\img\hospital\download (1).jpeg'); ?>" alt="Profile Image" style="height: 400px; width: 550px;" class="img-thumbnail">

                                </div>
                                <div class="col-md-6">

                                    <div>
                                        <h4 class="text-center">First Aid Kit</h4>
                                    </div>
                                    <div>
                                        <h4>Definitions</h4>
                                    </div>

                                    <div>
                A collection of supplies and equipment used for providing immediate medical treatment for minor injuries and illnesses.

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right side - Fire Extinguisher Image -->
                <div class="col-xxl-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div>
                                <h4>How To Use</h4>
                            </div>

                            <div>
                                <h5> step 1</h5>

                                <div>
                                Open the Kit: Access the kit and identify the supplies inside.
                                </div><br>
                                <div>
                                    <h5> step 2</h5>

                                    <div>
                                    Assess the Situation: Determine what supplies are needed based on the injury or condition.
                                </div>
                                </div><br>
                                <div>
                                    <h5> step 3</h5>

                                    <div>
                                    Use Supplies Appropriately: Follow instructions for using each item (e.g., bandages, antiseptics, etc.).
                                 </div><br>
                                    <div>
                                        <h5> step 4</h5>

                                        <div>
                                        Replace Items: After use, ensure the kit is replenished with necessary items.
                                    </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- row end -->

                    </div>
                    <!-- container-p-y end -->

                </div>



                <div class="container-xxl flex-grow-1 container-p-y">

                    <div class="row">

                    </div>
                    <!-- container-p-y end -->

                </div>
            </div>
        </div>
        <hr>
        <!--  -->
    </div>
</div>
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