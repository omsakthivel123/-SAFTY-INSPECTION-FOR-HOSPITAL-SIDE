<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- sidebar -->
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">

                    <img src="<?php echo base_url('assets/img/logo/avc.png') ?>" width="180px" height="50" alt="subaranahg">

                    <!-- <span class="app-brand-text demo menu-text fw-bold text-capitalize ms-2">AVCAS</span> -->
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active open">
                        <a href="<?php echo base_url('Login_con/Dashboard') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                            <div class="badge bg-danger rounded-pill ms-auto">5</div>
                        </a>
                    </li>

                    <!-- Layouts -->
                  

                    <!-- Front Pages -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-store"></i>
                            <div data-i18n="Front Pages">Deparment</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto"></div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?php echo base_url('Department/index') ?>" class="menu-link">
                                    <div data-i18n="Without menu">Add Class Incharge</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo base_url('UserRights/rights') ?>" class="menu-link">
                                    <div data-i18n="Without navbar">Super Admin</div>
                                </a>
                            </li>

                        </ul>

                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">User Rights</div>
                        </a>


                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?php echo base_url('Login_con/sample') ?>" class="menu-link">
                                    <div data-i18n="Without menu">Admin</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo base_url('UserRights/rights') ?>" class="menu-link">
                                    <div data-i18n="Without navbar">Super Admin</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Add staff</div>
                        </a>


                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?php echo base_url('staff/index') ?>" class="menu-link">
                                    <div data-i18n="Without menu">Add Staff</div>
                                </a>
                            </li>
                            <!-- <li class="menu-item">
                                <a href="<?php echo base_url('UserRights/rights') ?>" class="menu-link">
                                    <div data-i18n="Without navbar">Super Admin</div>
                                </a>
                            </li> -->

                        </ul>
                    </li>
                    
                    <!-- Front Pages -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-store"></i>
                            <div data-i18n="Front Pages">Student Attendance</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto"></div>
                        </a>

                    </li>
                    <!-- Front Pages -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-store"></i>
                            <div data-i18n="Front Pages">Student </div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto"></div>
                        </a>

                    </li>
                    <!-- Front Pages -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-store"></i>
                            <div data-i18n="Front Pages">MIS</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto"></div>
                        </a>

                    </li>
                    <!-- Front Pages -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-store"></i>
                            <div data-i18n="Front Pages">Staff Attendance</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto"></div>
                        </a>

                    </li>
                    <!-- Front Pages -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-store"></i>
                            <div data-i18n="Front Pages">Report</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto"></div>
                        </a>

                    </li>
                    <!-- Front Pages -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-store"></i>
                            <div data-i18n="Front Pages">Admin User</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto"></div>
                        </a>

                    </li>
                    <!-- Front Pages -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-store"></i>
                            <div data-i18n="Front Pages">SMS</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto"></div>
                        </a>

                    </li>

                </ul>
            </aside>

            <!-- / Menu -->
            <div class="layout-page">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                <script src="<?php echo base_url('/assets/vendor/libs/jquery/jquery.js'); ?>"></script>
                <script src="<?php echo base_url('/assets/vendor/libs/popper/popper.js'); ?>"></script>
                <script src="<?php echo base_url('/assets/vendor/js/bootstrap.js'); ?>"></script>
                <script src="<?php echo base_url('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
                <script src="<?php echo base_url('/assets/vendor/js/menu.js') ?>"></script>

                <!-- endbuild -->
                <!-- Vendors JS -->
                <script src="<?php echo base_url('/assets/vendor/libs/apex-charts/apexcharts.js') ?>"></script>
                <!-- Main JS -->
                <script src="<?php echo base_url('/assets/js/main.js'); ?>"></script>
                <!-- Page JS -->
                <script src="<?php echo base_url('/assets/js/dashboards-analytics.js'); ?>"></script>
                <!-- Place this tag in your head or just before your close body tag. -->
                <script async defer src="https://buttons.github.io/buttons.js"></script>

                <!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- DataTables JavaScript -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

</body>

</html>