<div class="wrapper">
    <div class="authentication-reset-password d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-lg-5 border-end">
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
                                <?php clearFlash('success'); ?>
                                <?php } ?>

                                <form action="/reset-password" method="POST">
                                    <?=getCsrf()->input('csrf_token');?>
                                    <input type="hidden" name="selector" value="<?= $_GET['selector'] ?>">
                                    <input type="hidden" name="token" value="<?= $_GET['token'] ?>">
                                    <div class="p-5">
                                        <div class="text-start">
                                            <img src="assets/images/logo-img.png" width="180" alt="">
                                        </div>
                                        <h4 class="mt-5 font-weight-bold">Generate New Password</h4>
                                        <p class="text-muted">We received your reset password request. Please enter your new password!</p>
                                        <div class="mb-3 mt-5">
                                            <label class="form-label">New Password</label>
                                            <input type="text" name="new_password" class="form-control" placeholder="Enter new password" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="text" name="confirm_password" class="form-control" placeholder="Confirm password" />
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-primary">Reset Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <img src="assets/images/login-images/forgot-password-frent-img.jpg" class="card-img login-img h-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end wrapper -->
