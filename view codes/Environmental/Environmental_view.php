<style>
    .profile-image-container {
        position: relative;
        display: inline-block;
        border-radius: 8px;
        overflow: hidden;
        border: 3px solid #ddd;
        width: 250px;
        height: 250px;
    }

    .img-thumbnail {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
    }

    .overlay-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        padding: 10px;
        cursor: pointer;
        display: none;
    }

    .profile-image-container:hover .overlay-icon {
        display: block;
    }

    .overlay-icon i {
        font-size: 1.5em;
    }

    .content-wrapper {
        padding: 20px;
    }

    .container-xxl {
        padding: 0 20px;
    }

    .card-body {
        padding: 20px;
    }

    h4, h5, h6 {
        margin-top: 0;
    }

    p {
        margin: 10px 0;
        line-height: 1.6;
    }

    .row {
        margin-bottom: 20px;
    }

    .img-thumbnail {
        margin-bottom: 15px;
    }

    .card {
        margin-bottom: 20px;
    }

    .text-muted {
        color: #6c757d;
    }
</style>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Environmental/</span>Our Hospital Environmental</h4>
        <div class="stage" id="stage1">
            <div class="row">
                <!-- Left side - Picture and Definitions -->
                <div class="col-xxl-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo base_url('assets\img\hospital\1395.jpg_wh1200.jpg'); ?>" alt="Profile Image" style="height: 400px; width: 100%;" class="img-thumbnail">
                                </div>
                                <div class="col-md-6">
                                    <img src="<?php echo base_url('assets\img\hospital\aia.jpeg'); ?>" alt="Profile Image" style="height: 300px; width: 100%;" class="img-thumbnail">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo base_url('assets\img\hospital\new.jpeg'); ?>" alt="Profile Image" style="height: 300px; width: 100%;" class="img-thumbnail">
                                </div>
                                <div class="col-md-6">
                                    <img src="<?php echo base_url('assets\img\hospital\sak.jpeg'); ?>" alt="Profile Image" style="height: 400px; width: 100%;" class="img-thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right side - Fire Extinguisher Image -->
                <div class="col-xxl-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="text-center">Hospital Environmental Safety: Ensuring a Safe and Healthy Healthcare Environment</h4>
                            <p>Hospital Environmental Safety refers to the practices and measures implemented within a healthcare facility to ensure a safe, healthy, and hygienic environment for patients, staff, and visitors. It encompasses various aspects, from infection control to waste management, all aimed at preventing hazards and maintaining high standards of safety and cleanliness.</p>
                            <h5>Infection Control</h5>
                            <p>Procedures and protocols designed to prevent and control the spread of infections within the hospital. This includes maintaining proper hand hygiene, using personal protective equipment (PPE), and implementing sterilization practices. Example: Regular handwashing, use of alcohol-based hand sanitizers, and disinfection of surfaces and medical instruments.</p>
                            
                            <h5>Waste Management</h5>
                            <p>Proper handling, segregation, and disposal of medical and non-medical waste to minimize environmental impact and prevent contamination. This includes managing hazardous waste, sharps disposal, and general waste. Example: Using color-coded bins for different types of waste and ensuring that hazardous waste is handled by trained professionals.</p>
                            
                            <h5>Indoor Air Quality</h5>
                            <p>Ensuring that the air inside the hospital is clean and free from pollutants, which involves maintaining proper ventilation and air filtration systems. Example: Regular maintenance of HVAC systems and using air purifiers in high-risk areas.</p>
                            
                            <h5>Facility Maintenance</h5>
                            <p>Ensuring that the hospital infrastructure, including plumbing, electrical systems, and equipment, is well-maintained to prevent accidents and ensure a safe environment. Example: Regular inspections and maintenance of medical equipment and building facilities.</p>
                            
                            <h5>Ergonomics and Safety Equipment</h5>
                            <p>Implementing ergonomic practices and providing appropriate safety equipment to prevent injuries and promote a comfortable working environment for hospital staff. Example: Ergonomic chairs for staff and safe lifting practices for handling patients.</p>
                            
                            <h5>Objectives:</h5>
                            <p>Proper handling, segregation, and disposal of medical and non-medical waste to minimize environmental impact and prevent contamination. This includes managing hazardous waste, sharps disposal, and general waste. Example: Using color-coded bins for different types of waste and ensuring that hazardous waste is handled by trained professionals.</p>
                            
                            <h5>Indoor Air Quality</h5>
                            <p><strong>Protect Health and Safety:</strong> Ensure a safe environment for patients, staff, and visitors.</p>
                            <p><strong>Enhance Compliance:</strong> Meet regulatory standards and best practices in environmental safety.</p>
                            <p><strong>Promote Sustainability:</strong> Implement practices that support environmental sustainability and reduce the hospital’s ecological footprint.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
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
