<?php ob_start(); ?>
<div class="wrapper">
    <div class="authentication-forgot d-flex align-items-center justify-content-center">
        <div class="card forgot-box">
            <div class="card-body">

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

                <form action="/forgot-password" method="POST">
                    <?=getCsrf()->input('csrf_token');?>
                    <div class="p-4 rounded  border">
                        <div class="text-center">
                            <img src="assets/images/icons/forgot-2.png" width="120" alt="" />
                        </div>
                        <h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
                        <p class="text-muted">Enter your registered email ID to reset the password</p>
                        <div class="my-4">
                            <label class="form-label">Email id</label>
                            <input type="email" name="email" class="form-control form-control-lg" placeholder="example@user.com" />
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Send</button>
                            <a href="/login" class="btn btn-light btn-lg"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end wrapper -->
