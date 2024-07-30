<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- sidebar -->
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">

                    <img src="<?php echo base_url('assets\img\hospital\pic.jpeg') ?>" width="300px" height="80" alt="subaranahg">

                    <!-- <span class="app-brand-text demo menu-text fw-bold text-capitalize ms-2">AVCAS</span> -->
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>
                <?php
                $UserData = $this->session->userdata('userdata');
                if (!empty($UserData) && isset($UserData['IsOnLogin']) && $UserData['IsOnLogin'] === true) {
                    $us_code = $UserData['UserCode'];
                    $S_Code = $this->db->query('SELECT * FROM Web_UserManagement WHERE UserCode = ?', array($us_code));
                    $S_c = $S_Code->row();
                    if ($S_Code->num_rows() > 0 && $S_c->UserRole == "Admin" || $S_c->UserRole == "Superadmin" || $S_c->UserRole == "Staff" ) {

                ?>


                        <ul class="menu-inner py-1">
                            <!-- Dashboards -->
                            <li class="menu-item active open">
                                <a href="<?php echo base_url('Home') ?>" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                    <div data-i18n="Dashboards">Dashboards</div>
                                    <div class="badge bg-danger rounded-pill ms-auto">5</div>
                                </a>
                            </li>

                           


                            <!-- sakthi -->

                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-layout"></i>
                                    <div data-i18n="Layouts">Add Users</div>
                                </a>


                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="<?php echo base_url('New_Users') ?>" class="menu-link">
                                            <div data-i18n="Without menu">Add_Users</div>
                                        </a>
                                    </li>
                                     <!-- <li class="menu-item">
                                        <a href="<?php echo base_url('staff/hod') ?>" class="menu-link">
                                            <div data-i18n="Without menu">Leave And Permission</div>
                                        </a>
                                    </li> -->
                                    <!-- <li class="menu-item">
                                        <a href="<?php echo base_url('timetable') ?>" class="menu-link">
                                            <div data-i18n="Without menu">Assign HOD</div>
                                        </a>
                                    </li> -->
                                    <!-- <li class="menu-item">
                                    <a href="<?php echo base_url('UserRights/rights') ?>" class="menu-link">
                                        <div data-i18n="Without navbar">Super Admin</div>
                                    </a>
                                </li> -->

                                </ul>
                            </li>


                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-layout"></i>
                                    <div data-i18n="Layouts">Emergency</div>
                                </a>


                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="<?php echo base_url('Fire_Equipments') ?>" class="menu-link">
                                            <div data-i18n="Without menu">Fire</div>
                                        </a>
                                    </li>
                                     <li class="menu-item">
                                        <a href="<?php echo base_url('first_aid') ?>" class="menu-link">
                                            <div data-i18n="Without menu">First Aid</div>
                                        </a>
                                    </li>
                                    <!-- <li class="menu-item">
                                        <a href="<?php echo base_url('timetable') ?>" class="menu-link">
                                            <div data-i18n="Without menu">Assign HOD</div>
                                        </a>
                                    </li> -->
                                    <!-- <li class="menu-item">
                                    <a href="<?php echo base_url('UserRights/rights') ?>" class="menu-link">
                                        <div data-i18n="Without navbar">Super Admin</div>
                                    </a>
                                </li> -->

                                </ul>
                            </li>

                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-layout"></i>
                                    <div data-i18n="Layouts">Permit Zons</div>
                                </a>


                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="<?php echo base_url('Zones') ?>" class="menu-link">
                                            <div data-i18n="Without menu">ZONES</div>
                                        </a>
                                    </li>
                                     <!-- <li class="menu-item">
                                        <a href="<?php echo base_url('first_aid') ?>" class="menu-link">
                                            <div data-i18n="Without menu">first aid</div>
                                        </a>
                                    </li> -->
                                    <!-- <li class="menu-item">
                                        <a href="<?php echo base_url('timetable') ?>" class="menu-link">
                                            <div data-i18n="Without menu">Assign HOD</div>
                                        </a>
                                    </li> -->
                                    <!-- <li class="menu-item">
                                    <a href="<?php echo base_url('UserRights/rights') ?>" class="menu-link">
                                        <div data-i18n="Without navbar">Super Admin</div>
                                    </a>
                                </li> -->

                                </ul>
                            </li>


                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-layout"></i>
                                    <div data-i18n="Layouts">Equipment</div>
                                </a>


                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="<?php echo base_url('Equipments') ?>" class="menu-link">
                                            <div data-i18n="Without menu">Equipment Safty </div>
                                        </a>
                                    </li>
                                     
                                    <!-- <li class="menu-item">
                                        <a href="<?php echo base_url('timetable') ?>" class="menu-link">
                                            <div data-i18n="Without menu">Assign HOD</div>
                                        </a>
                                    </li> -->
                                    <!-- <li class="menu-item">
                                    <a href="<?php echo base_url('UserRights/rights') ?>" class="menu-link">
                                        <div data-i18n="Without navbar">Super Admin</div>
                                    </a>
                                </li> -->

                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-layout"></i>
                                    <div data-i18n="Layouts">House keeping </div>
                                </a>


                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="<?php echo base_url('Housekeeping') ?>" class="menu-link">
                                            <div data-i18n="Without menu">House keeping  </div>
                                        </a>
                                    </li>
                                   
                                    <!-- <li class="menu-item">
                                        <a href="<?php echo base_url('timetable') ?>" class="menu-link">
                                            <div data-i18n="Without menu">Assign HOD</div>
                                        </a>
                                    </li> -->
                                    <!-- <li class="menu-item">
                                    <a href="<?php echo base_url('UserRights/rights') ?>" class="menu-link">
                                        <div data-i18n="Without navbar">Super Admin</div>
                                    </a>
                                </li> -->

                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-layout"></i>
                                    <div data-i18n="Layouts">Environmental </div>
                                </a>


                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="<?php echo base_url('Environmental') ?>" class="menu-link">
                                            <div data-i18n="Without menu">Environmental Safty </div>
                                        </a>
                                    </li>
                                     
                                    <!-- <li class="menu-item">
                                        <a href="<?php echo base_url('timetable') ?>" class="menu-link">
                                            <div data-i18n="Without menu">Assign HOD</div>
                                        </a>
                                    </li> -->
                                    <!-- <li class="menu-item">
                                    <a href="<?php echo base_url('UserRights/rights') ?>" class="menu-link">
                                        <div data-i18n="Without navbar">Super Admin</div>
                                    </a>
                                </li> -->

                                </ul>
                            </li>

                           



                            <!-- Front Pages -->
                            <!-- <li class="menu-item ">
                                <a href="<?php echo base_url('') ?>" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                    <div data-i18n="Dashboards"> Attendance</div>
                                    <div class="badge bg-danger rounded-pill ms-auto">5</div>
                                </a>
                            </li> -->




                        </ul>
                        <!-- </aside> -->

                        <?php } ?>
                    
                        <?php } ?>
            </aside>
            <!-- / Menu -->
            <div class="layout-page">
                <!-- Your content goes here -->


                <!-- JavaScript files -->
                <script src="<?php echo base_url('/assets/vendor/libs/jquery/jquery.js'); ?>"></script>
                <script src="<?php echo base_url('/assets/vendor/libs/popper/popper.js'); ?>"></script>
                <script src="<?php echo base_url('/assets/vendor/js/bootstrap.js'); ?>"></script>
                <script src="<?php echo base_url('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
                <script src="<?php echo base_url('/assets/vendor/js/menu.js') ?>"></script>
                <script src="<?php echo base_url('/assets/js/extended-ui-perfect-scrollbar.js') ?>"></script>
                <script src="<?php echo base_url('/assets/vendor/libs/apex-charts/apexcharts.js') ?>"></script>
                <!-- <script src="<?php echo base_url('/assets/js/main.js'); ?>"></script> -->
                <script src="<?php echo base_url('/assets/js/dashboards-analytics.js'); ?>"></script>
                <script async defer src="https://buttons.github.io/buttons.js"></script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0/js/bootstrap-select.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0/js/i18n/defaults-en_US.min.js"></script>





                <!-- </aside> -->