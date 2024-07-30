<div class="content-wrapper">
    <style>
        /* Your CSS styles here */
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

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Emergency /</span> First Aid Kit</h4>
        <div class="stage" id="stage1">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <section class="vh-100">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col-md-9 col-lg-6 col-xl-5">
                                        <img src="<?php echo base_url('assets\img\hospital\OIP (1).jpeg'); ?>" alt="Profile Image" style="height: 400px; width: 500px;" class="img-thumbnail">
                                    </div>
                                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                        <form method="post" action="<?php echo base_url('Zones/Normal_Ward'); ?>">
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="email" id="form3Example3" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" />
                                                <label class="form-label" for="form3Example3">Email address</label>
                                            </div>
                                            <div data-mdb-input-init class="form-outline mb-3">
                                                <input type="password" id="form3Example4" name="password" class="form-control form-control-lg" placeholder="Enter password" />
                                                <label class="form-label" for="form3Example4">Password</label>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                                    <label class="form-check-label" for="form2Example3">
                                                        Remember me
                                                    </label>
                                                </div>
                                                <a href="#!" class="text-body">Forgot password?</a>
                                            </div>
                                            <div class="text-center text-lg-start mt-4 pt-2">
                                                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!" class="link-danger">Register</a></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
