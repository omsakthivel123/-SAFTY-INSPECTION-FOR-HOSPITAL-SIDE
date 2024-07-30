<!DOCTYPE html>
<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>AVC Login</title>
  <meta name="description" content="" />
  <!-- Favicon -->
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/fonts/boxicons.css') ?>" />
  <!-- Core CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/css/core.css') ?>" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/css/theme-default.css') ?>" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/demo.css') ?>" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />
  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/css/pages/page-auth.css') ?>" />
  <!-- Helpers -->
  <script src="<?php echo base_url('/assets/vendor/js/helpers.js') ?>"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?php echo base_url('/assets/js/config.js') ?>"></script>
  <style>
    body {
      background-color: #f0f0f0; /* Fallback color if the image is not available */
      background-image: url("<?php echo base_url('assets/img/logo/bakground.jpg') ?>");
      background-size: cover;
      background-position: center;
      /* Other background properties can be added here */
    }

    .error {
      color: red;
      font-weight: bold;
    }
  </style>

</head>

<body>

  <!-- Content -->
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                </span>
                <span class="app-brand-text text-capitalize demo text-body fw-bold">SAAI HOSPITAL LOGIN </span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2"></h4>
            <p class="mb-4"></p>
            <form id="" class="mb-3" action="<?php echo base_url('Auth/verify'); ?>" method="post">

              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                  <!-- <a href="auth-forgot-password-basic.html"> -->
                  <small>Forgot Password?</small>
                  </a>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <?php
              // Assuming validation_errors() returns a string of errors
              $errors = validation_errors();

              if (!empty($errors)) {
                echo '<div class="error">' . $errors . '</div>';
              }
              ?>

              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
              </div>
            </form>
          </div>
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


      </div>
    </div>
  </div>

  <!-- / Content -->
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="<?php echo base_url('/assets/vendor/libs/jquery/jquery.js') ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/libs/popper/popper.js') ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/js/bootstrap.js') ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/js/menu.js') ?>"></script>
  <!-- endbuild -->
  <!-- Vendors JS -->
  <!-- Main JS -->
  <script src="<?php echo base_url('/assets/js/main.js') ?>"></script>
  <!-- Page JS -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
