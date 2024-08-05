<!--wrapper-->
<div class="wrapper">

    <!--sidebar wrapper -->
    <?php require __DIR__ . '/../include/sidebar.php'?>
    <!--end sidebar wrapper -->

    <!--start header -->
    <?php require __DIR__ . '/../include/navbar.php'?>
    <!--end header -->

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">User Profile</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">User Profilep</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="container">
                <div class="main-body">
                    <?php if (getFlash('error')){ ?>
                        <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 text-white">Danger</h6>
                                    <div class="text-white"><?php var_dump(getFlash('error')); ?></div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php clearFlash('error'); ?>
                    <?php } ?>

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

                    <form action="/profile" method="POST" enctype="multipart/form-data">
                        <?=getCsrf()->input('csrf_token');?>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="<?= (!empty($fetchAll[0]['profile_img'])) ? "/uploads/profile/{$fetchAll[0]['profile_img']}" : '/assets/images/no-user-image.jpg'  ?>" alt="Admin" class="rounded-circle p-1" width="110">
                                            <div class="mt-3">
                                                <h4><?= $fetchAll[0]['first_name'] . $fetchAll[0]['last_name'] ?></h4>
                                                <p class="text-secondary mb-1"><?= $role ?></p>
                                                <p class="text-muted font-size-sm"><?= $fetchAll[0]['address'] ?></p>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile_img_modal">Edit Profile</button>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="profile_img_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Foto Profile</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container p-3">

                                                                <div class="mb-3">
                                                                    <input id="image" name="profile_img" class="form-control" type="file">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <img class="w-100" id="showImage" src="<?= !empty($fetchAll[0]['profile_img']) ? "/uploads/profile/{$fetchAll[0]['profile_img']}" : "/assets/images/no-image-available.jpeg"  ?>" class="rounded img-thumbnail" alt="Card Image Cap">
                                                                </div>
                                                                <button type="submit" class="btn btn-outline-primary w-100 mt-3 ">Simpan</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <hr class="my-4" />
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                                <span class="text-secondary">https://codervent.com</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                                                <span class="text-secondary">codervent</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                                <span class="text-secondary">@codervent</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                                <span class="text-secondary">codervent</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                                <span class="text-secondary">codervent</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-center mb-3">Informasi Pribadi</h5>
                                        <hr>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nama Depan</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="first_name" class="form-control <?= (getFlash('errors')['first_name'] ?? '') ? 'is-invalid' : '' ?>" value="<?= $fetchAll[0]['first_name']?>" />
                                                <?php if (getFlash('errors')['first_name'] ?? '') { ?>
                                                    <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['first_name'] ?? '' ?></div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nama Belakang</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="last_name" class="form-control" value="<?= $fetchAll[0]['last_name']?>" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nama Lengkap</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" value="<?= $fetchAll[0]['first_name'] . $fetchAll[0]['last_name']?>" disabled />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="email" class="form-control" value="<?= $fetchAll[0]['email']?>" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Alamat 1</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="address" class="form-control <?= (getFlash('errors')['address'] ?? '') ? 'is-invalid' : '' ?>" value="<?= $fetchAll[0]['address']?>" />
                                                <?php if (getFlash('errors')['address'] ?? '') { ?>
                                                    <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['address'] ?? '' ?></div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Alamat 2</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="address2" class="form-control" value="<?= $fetchAll[0]['address2']?>" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Kota</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="city" class="form-control <?= (getFlash('errors')['city'] ?? '') ? 'is-invalid' : '' ?>" value="<?= $fetchAll[0]['city']?>" />
                                                <?php if (getFlash('errors')['city'] ?? '') { ?>
                                                    <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['city'] ?? '' ?></div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Provinsi</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="state" class="form-control <?= (getFlash('errors')['state'] ?? '') ? 'is-invalid' : '' ?>" value="<?= $fetchAll[0]['province']?>" />
                                                <?php if (getFlash('errors')['state'] ?? '') { ?>
                                                    <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['state'] ?? '' ?></div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Kode Pos</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="number" name="zip" class="form-control <?= (getFlash('errors')['zip'] ?? '') ? 'is-invalid' : '' ?>" value="<?= $fetchAll[0]['zip']?>" />
                                                <?php if (getFlash('errors')['zip'] ?? '') { ?>
                                                    <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['zip'] ?? '' ?></div>
                                                <?php } ?>
                                                <?php clearFlash('errors'); ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4" value="Simpan Perubahan" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="d-flex align-items-center mb-3">Informasi Akun</h5>
                                                <hr>
                                                <div class="table-responsive p-3" >
                                                    <table class="mb-0" width="100%">
                                                        <tr>
                                                            <td>
                                                                <p class="mb-0 mt-3 pay-info-value">Verifikasi</p>
                                                            </td>
                                                            <td align="right">
                                                                <p class="mb-0 mt-3 pay-info-value">verified</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p class="mb-0 mt-1 pay-info-value">Role</p>
                                                            </td>
                                                            <td align="right">
                                                                <p class="mb-0 mt-1 pay-info-value"><?= $role ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><hr></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p class="mb-0 mt-1 pay-info-value">Dibuat Pada</p>
                                                            </td>
                                                            <td align="right">
                                                                <p class="mb-0 mt-1 pay-info-value"><?= $fetchAll[0]['created_at'] ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="mb-0 mt-1 title-pay-info">Terakhir Login</h6>
                                                            </td>
                                                            <td align="right">
                                                                <p class="mb-0 mt-1 title-pay-info"><?= date('d-m-Y H:i:S', $fetchAll[0]['last_login']) ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><hr></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" align="right"><a href="/change-password" class="btn btn-danger">Ganti Password</a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--end row -->

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2021. All right reserved.</p>
    </footer>
</div>
<!--end wrapper-->
<!--start switcher-->
<div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
        </div>
        <hr/>
        <h6 class="mb-0">Theme Styles</h6>
        <hr/>
        <div class="d-flex align-items-center justify-content-between">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                <label class="form-check-label" for="lightmode">Light</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                <label class="form-check-label" for="darkmode">Dark</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                <label class="form-check-label" for="semidark">Semi Dark</label>
            </div>
        </div>
        <hr/>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
            <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
        </div>
        <hr/>
        <h6 class="mb-0">Header Colors</h6>
        <hr/>
        <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
                <div class="col">
                    <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
            </div>
        </div>
        <hr/>
        <h6 class="mb-0">Sidebar Colors</h6>
        <hr/>
        <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
                <div class="col">
                    <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end switcher-->

<script>
    function showImageByUserInput(){

        $(document).ready(function(){

            $('#image').change(function(e){

                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src', e.target.result);
                    $('#showImage').show();
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    }
    showImageByUserInput()
</script>
