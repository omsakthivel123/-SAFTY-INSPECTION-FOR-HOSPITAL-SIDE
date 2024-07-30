<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>SaaiHospital.com</title>

  <meta name="description" content="" />
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="" />

<!-- Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0/css/bootstrap-select.min.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" />


  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-examplehash" crossorigin="anonymous" /> -->

  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link rel="stylesheet" href="<?php echo base_url('/assets/css/table.css')?>" />
  <!-- <link rel="stylesheet" href="<?php echo base_url('/assets/css/calender.css')?>" /> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('/assets/css/Student.css')?>" /> -->



  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/css/fees.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/css/bootstrap/css/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/css/bootstrap/css/DataTable.min.css') ?>" />
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/js/datatable/DataTable.min.js') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/fonts/boxicons.css') ?>" />
  <!-- Core CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/css/core.css" class="template-customizer-core-css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/css/theme-default.css" class="template-customizer-theme-css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/demo.css') ?>" />
  <!-- Vendors CSS -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/libs/apex-charts/apex-charts.css') ?>" /> -->
  <!-- Page CSS -->
  <!-- Helpers -->
  <script src="<?php echo base_url('/assets/vendor/js/helpers.js') ?>"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?php echo base_url('/assets/js/config.js') ?>"></script>
  <script>
    var baseurl = '<?php echo base_url() ?>';
  </script>


  <!-- priject js file include section -->
  <script src="<?php echo base_url('/assets/js/project/UserRights.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Department.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Staff.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Student.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Staff_Attendance.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/TimeTable.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Student_Attendance.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Semester.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Subject.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/CourseMentor.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/GradingSystem.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/ExamSchedule.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Department_Wise_TimeTable.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Student_Timetable.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Substitution.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Fees.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Payment.js') ?>"> </script>
  <script src="<?php echo base_url('/assets/js/project/Reciept.js') ?>"> </script>
  

</head>
<!-- Layout container -->
<div class="layout-page">
  <!-- Navbar -->

  <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <!-- Search -->
      <div class="navbar-nav align-items-center">
        <div class="nav-item d-flex align-items-center">
          <i class="bx bx-search fs-4 lh-0"></i>
          <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Search..." aria-label="Search..." />
        </div>
      </div>
      <!-- /Search -->

      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Place this tag where you want the button to render. -->


        <!-- User -->
<li class="nav-item navbar-dropdown dropdown-user dropdown">
<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="<?php echo base_url('assets/img/logo/avatar.JPG') ?>" alt class="w-px-40 h-60 rounded-circle " />
            </div>
          </a>
    <ul class="dropdown-menu dropdown-menu-end">
        <li>
            <a class="dropdown-item" href="#">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">

                            <img src="" alt="" class="avatar" />

                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <?php
                        // Display user information based on role
                        $username = $this->session->userdata('userdata');
                        $userRole = $username['UserRole'];
                        if ($userRole == 'Staff') { ?>
                            <!-- <span class="fw-medium d-block"><?php echo $get->Name ?></span> -->
                            <small class="text-muted">STAFF</small>
                        <?php } else if ($userRole == 'HOD') { ?>
                            <span class="fw-medium d-block"></span>
                            <small class="text-muted">HOD</small>
                        <?php } else if ($userRole == 'Student') { ?>
                            <!-- <span class="fw-medium d-block"><?php $gets[0]->name?></span> -->
                            <small class="text-muted">STUDENT</small>
                        <?php } 
                        else if ($userRole == 'Admin') { ?>
                            <!-- <span class="fw-medium d-block"><?php $gets[0]->name?></span> -->
                            <small class="text-muted">ADMIN</small>
                        <?php } ?>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <div class="dropdown-divider"></div>
        </li>
        <?php
        // Display profile link based on user role
        $username = $this->session->userdata('userdata');
        $userRole = $username['UserRole'];

        if ($userRole == 'Student') { ?>
            <li>
                <a class="dropdown-item" href="<?php echo base_url('Student/profile'); ?>">
                    <i class="bx bx-user me-2"></i>
                    My Profile
                </a>
            </li>
        <?php } else if ($userRole == 'Staff') { ?>
            <li>
                <a class="dropdown-item" href="<?php echo base_url('Staff/profile'); ?>">
                    <i class="bx bx-user me-2"></i>
                    My Profile
                </a>
            </li>
        <?php } else if ($userRole == 'HOD') { ?>
            <li>
                <!-- <a class="dropdown-item" href="<?php echo base_url('Staff/HOD_profile'); ?>"> -->
                    <i class="bx bx-user me-2"></i>
                    My Profile
                </a>
            </li>
        <?php } ?>
        <li>
            <a class="dropdown-item" href="#">
                <i class="bx bx-cog me-2"></i>
                <span class="align-middle">Settings</span>
            </a>
        </li>
        <li>
            <div class="dropdown-divider"></div>
        </li>
        <li>
            <a class="dropdown-item" href="<?php echo base_url('Auth/logout') ?>">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
            </a>
        </li>
    </ul>
</li>
<!--/ User -->

      </ul>
    </div>
  </nav>

  <!-- / Navbar -->
</div>