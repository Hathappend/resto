<?php ob_start(); ?>
<!--wrapper-->
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card mt-5 mt-lg-0">

                        <?php if (getFlash('success')){ ?>
                            <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                                <div class="d-flex align-items-center">
                                    <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 text-white">Success</h6>
                                        <div class="text-white"><?= getFlash('success') ?></div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php clearFlash('success'); ?>
                        <?php } ?>

                        <?php if (getFlash('error')){ ?>
                            <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                <div class="d-flex align-items-center">
                                    <div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 text-white">Danger</h6>
                                        <div class="text-white"><?= getFlash('error') ?></div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php clearFlash('error'); ?>
                        <?php } ?>

                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Sign in</h3>
                                </div>
                                <div class="login-separater text-center mb-4"> <span>SIGN IN WITH EMAIL</span>
                                    <hr/>
                                </div>
                                <div class="form-body">

                                    <form class="row g-3" action="/login" method="post">
                                        <?=getCsrf()->input('csrf_token');?>
                                        <div class="col-12 ">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="text" class="form-control <?= (getFlash('errors')['email'] ?? '') ? 'is-invalid' : '' ?> " name="email" id="inputEmailAddress" placeholder="Email Address">

                                            <?php if (getFlash('errors')['email'] ?? '') { ?>
                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['email'] ?? '' ?></div>
                                            <?php } ?>

                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Enter Password</label>

                                                <input type="password" class="form-control <?= (getFlash('errors')['password'] ?? '') ? 'is-invalid' : '' ?>" name="password" id="inputChoosePassword" placeholder="Enter Password">

                                                <?php if (getFlash('errors')['password'] ?? '') { ?>
                                                    <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['password'] ?? '' ?></div>
                                                <?php } ?>
                                                <?php clearFlash('errors'); ?>


                                        </div>
<!--                                        <div class="col-md-6">-->
<!--                                            <div class="form-check form-switch">-->
<!--                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>-->
<!--                                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                        <div class="col-md-12 text-end"><a href="/forgot-password">Forgot Password ?</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<!--end wrapper-->