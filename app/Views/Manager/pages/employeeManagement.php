
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <?php require __DIR__ . '/../../include/sidebar.php'?>
    <!--end sidebar wrapper -->

    <!--start header -->
    <?php require __DIR__ . '/../../include/navbar.php'?>
    <!--end header -->

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">eCommerce</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="/manager"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a href="/manager">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Managemen Karyawan</li>
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

            <div class="row" >
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Total Karyawan</p>
                                            <h5 class="mb-0"><?= count($users) ?></h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Pelayan</p>
                                            <h5 class="mb-0"><?= getUserRoleCount(\Project\PakResto\Models\Role::WAITER)[0]['total'] ?></h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Kasir</p>
                                            <h5 class="mb-0"><?= getUserRoleCount(\Project\PakResto\Models\Role::CASHIER)[0]['total'] ?></h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Koki</p>
                                            <h5 class="mb-0"><?= getUserRoleCount(\Project\PakResto\Models\Role::CHEF)[0]['total'] ?></h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center p-2">
                                <div>
                                    <h5>Menunggu Persetujuan</h5>
                                </div>
                            </div>
                        </div>
                        <div class="customers-list p-3 mb-3">
                            <div class="customers-list-item d-flex align-items-center border-top border-bottom p-2">
                                <div class="">
                                    <img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="" />
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">Emy Jackson</h6>
                                    <p class="mb-0 font-13 text-secondary">10 Items</p>
                                </div>
                                <div class="list-inline d-flex customers-contacts ms-auto" >
                                    <div class="d-flex align-items-center text-danger list-inline-item pe-3">
                                        <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                        <span>Pending</span>
                                    </div>
                                    <button type="button" class="btn bg-transparent list-inline-item btn-sm " data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bx bx-info-circle bx-burst-hover"></i>
                                    </button>

                                </div>

                                <!-- Modal Confirmation Orders-->
                                <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Konfirmasi Pesanan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row d-flex align-items-center">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="product-list p-3 mb-3">
                                                                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                                        <div class="col-sm-12">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="product-img">
                                                                                    <img src="/assets/images/icons/chair.png" alt="" />
                                                                                </div>
                                                                                <div class="ms-2">
                                                                                    <h6 class="mb-1 card-title menu-title">Tacos With Chicken Grilled</h6>
                                                                                    <div class="qty d-flex align-items-center" >
                                                                                        <p class="price-label mb-0 fw-bold pt-1"><span>Rp. 250.000</span></p>
                                                                                        <p class="mx-3 pt-1 mb-0">x2</p>
                                                                                    </div>
                                                                                    <span class="estimate pt-1"><i>Estimasi proses menu hingga jadi 45 min </i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                                        <div class="col-sm-12">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="product-img">
                                                                                    <img src="/assets/images/icons/chair.png" alt="" />
                                                                                </div>
                                                                                <div class="ms-2">
                                                                                    <h6 class="mb-1 card-title menu-title">Tacos With Chicken Grilled</h6>
                                                                                    <p class="price-label mb-0 fw-bold pt-1"><span>Rp. 250.000</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                                        <div class="col-sm-12">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="product-img">
                                                                                    <img src="/assets/images/icons/chair.png" alt="" />
                                                                                </div>
                                                                                <div class="ms-2">
                                                                                    <h6 class="mb-1 card-title menu-title">Tacos With Chicken Grilled</h6>
                                                                                    <p class="price-label mb-0 fw-bold pt-1"><span>Rp. 250.000</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                                        <div class="col-sm-12">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="product-img">
                                                                                    <img src="/assets/images/icons/chair.png" alt="" />
                                                                                </div>
                                                                                <div class="ms-2">
                                                                                    <h6 class="mb-1 card-title menu-title">Tacos With Chicken Grilled</h6>
                                                                                    <p class="price-label mb-0 fw-bold pt-1"><span>Rp. 250.000</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                                        <div class="col-sm-12">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="product-img">
                                                                                    <img src="/assets/images/icons/chair.png" alt="" />
                                                                                </div>
                                                                                <div class="ms-2">
                                                                                    <h6 class="mb-1 card-title menu-title">Tacos With Chicken Grilled</h6>
                                                                                    <p class="price-label mb-0 fw-bold pt-1"><span>Rp. 250.000</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                        <div class="table-responsive p-3" >
                                                            <table class="mb-0" width="100%">
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h6 class="mb-0 title-pay-info">Meja #OS-000354</h6>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-0 mt-1 pay-info-value pt-1">Pesanan #8876h</p>
                                                                    </td>
                                                                    <td align="right">
                                                                        <p class="mb-0 mt-1 pay-info-value pt-1">29-07-2024</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-0 mt-1 pay-info-value pt-1">Antrian</p>
                                                                    </td>
                                                                    <td align="right">
                                                                        <p class="mb-0 mt-1 pay-info-value pt-1">01</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><hr></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="mb-0 title-pay-info">Detail Pesanan</h6>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-0 mt-3 pay-info-value">Nama Pelanggan</p>
                                                                    </td>
                                                                    <td align="right">
                                                                        <p class="mb-0 mt-3 pay-info-value">Suripuddin</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-0 mt-1 pay-info-value">Waktu Pesanan Masuk</p>
                                                                    </td>
                                                                    <td align="right">
                                                                        <p class="mb-0 mt-1 pay-info-value">10.00 AM</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-0 mt-1 pay-info-value">Estimasi</p>
                                                                    </td>
                                                                    <td align="right">
                                                                        <p class="mb-0 mt-1 pay-info-value">45 min</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-0 mt-1 pay-info-value">Status</p>
                                                                    </td>
                                                                    <td align="right">
                                                                        <p class="mb-0 mt-1 pay-info-value">Belum diproses</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><hr></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="mb-0 title-pay-info">Catatan</h6>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <p class="mb-0 mt-1 pay-info-value">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cumque delectus eligendi esse nisi quas veniam. Architecto aut dignissimos earum.</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><hr></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <button type="button" class="btn btn-primary px-5 w-100"><i class='bx bx-user mr-1'></i>Proses Pesanan</button>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                <div class="">
                                    <img src="assets/images/avatars/avatar-23.png" class="rounded-circle" width="46" height="46" alt="" />
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">Laura Madison</h6>
                                    <p class="mb-0 font-13 text-secondary">laura_01@xyz.com</p>
                                </div>
                                <div class="list-inline d-flex customers-contacts ms-auto">
                                    <div class="d-flex align-items-center text-primary list-inline-item pe-3">
                                        <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                        <span>Siap Dihidangkan</span>
                                    </div>
                                    <button type="button" class="btn btn-primary list-inline-item btn-sm d-flex justify-content-center align-items-center"><i class="bx bx-check"></i>
                                </div>
                            </div>
                            <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                <div class="">
                                    <img src="assets/images/avatars/avatar-24.png" class="rounded-circle" width="46" height="46" alt="" />
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">Shoan Stephen</h6>
                                    <p class="mb-0 font-13 text-secondary">s.stephen@xyz.com</p>
                                </div>
                                <div class="list-inline d-flex customers-contacts ms-auto">
                                    <div class="d-flex align-items-center text-success list-inline-item pe-3">
                                        <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                        <span>Selesai</span>
                                    </div>
                                    <button type="button" class="btn btn-primary list-inline-item btn-sm d-flex justify-content-center align-items-center"><i class="bx bx-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->


            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-12 col-sm-5 col-md-5 col-lg-4 col-xl-4">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <h6 class="mb-0 text-uppercase">Daftar Karyawan</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                    <div class="employee-action float-end">
                                        <div class="btn-group my-1" role="group" aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-white">Sort By</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bx-chevron-down'></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUsers">+ Karyawan</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal add new employee-->
                            <div class="modal fade" id="addUsers" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-body p-0 m-0">
                                            <div class="border-top border-0 border-4 border-primary">
                                                <div class="card-body p-5">
                                                    <div class="card-title d-flex align-items-center">
                                                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                                        </div>
                                                        <h5 class="mb-0 text-primary">Registrasi Karyawan</h5>
                                                    </div>
                                                    <hr>
                                                    <form action="/managemen-karyawan/add" method="POST" class="row g-3">
                                                        <?=getCsrf()->input('csrf_token');?>
                                                        <div class="col-md-6">
                                                            <label for="inputFirstName" class="form-label">Nama Depan</label>
                                                            <input type="text" name="first_name" class="form-control <?= (getFlash('errors')['first_name'] ?? '') ? 'is-invalid' : '' ?>" id="inputFirstName" autofocus>
                                                            <?php if (getFlash('errors')['first_name'] ?? '') { ?>
                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['first_name'] ?? '' ?></div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputLastName" class="form-label">Nama Belakang (optional)</label>
                                                            <input type="text" name="last_name" class="form-control <?= (getFlash('errors')['last_name'] ?? '') ? 'is-invalid' : '' ?>" id="inputLastName">
                                                            <?php if (getFlash('errors')['last_name'] ?? '') { ?>
                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['last_name'] ?? '' ?></div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEmail" class="form-label">Email</label>
                                                            <input type="text" name="email" class="form-control <?= (getFlash('errors')['email'] ?? '') ? 'is-invalid' : '' ?>" id="inputEmail">
                                                            <?php if (getFlash('errors')['email'] ?? '') { ?>
                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['email'] ?? '' ?></div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputPassword" class="form-label">Password</label>
                                                            <input type="text" name="password" class="form-control" id="inputPassword" value="<?= \Ramsey\Uuid\Uuid::uuid4()->toString() ?>" readonly>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="inputAddress" class="form-label">Alamat</label>
                                                            <textarea name="address" class="form-control <?= (getFlash('errors')['address'] ?? '') ? 'is-invalid' : '' ?>" id="inputAddress" placeholder="Address..." rows="3"></textarea>
                                                            <?php if (getFlash('errors')['address'] ?? '') { ?>
                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['address'] ?? '' ?></div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="inputAddress2" class="form-label">Alamat 2 (optional)</label>
                                                            <textarea class="form-control" name="address2" id="inputAddress2" placeholder="Address 2..." rows="3"></textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputCity" class="form-label">Kota</label>
                                                            <input type="text" name="city" class="form-control <?= (getFlash('errors')['city'] ?? '') ? 'is-invalid' : '' ?>" id="inputCity">
                                                            <?php if (getFlash('errors')['city'] ?? '') { ?>
                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['city'] ?? '' ?></div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="inputState" class="form-label">Provinsi</label>
                                                            <input type="text" name="state" class="form-control <?= (getFlash('errors')['state'] ?? '') ? 'is-invalid' : '' ?>" id="inputState">
                                                            <?php if (getFlash('errors')['state'] ?? '') { ?>
                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['state'] ?? '' ?></div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label for="inputZip" class="form-label">Kode Pos</label>
                                                            <input type="number" name="zip" class="form-control <?= (getFlash('errors')['zip'] ?? '') ? 'is-invalid' : '' ?>" id="inputZip">
                                                            <?php if (getFlash('errors')['zip'] ?? '') { ?>
                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['zip'] ?? '' ?></div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="inputRolesMask" class="form-label">Role Pekerjaan</label>
                                                            <select id="inputRolesMask" name="roles_mask" class="form-select <?= (getFlash('errors')['roles_mask'] ?? '') ? 'is-invalid' : '' ?>" aria-label="Default select example">
                                                                <option value="" selected>Pilih Role Pekerjaan</option>
                                                                <option value="<?= \Project\PakResto\Models\Role::MANAGER ?>">Manager</option>
                                                                <option value="<?= \Project\PakResto\Models\Role::CASHIER ?>">Kasir</option>
                                                                <option value="<?= \Project\PakResto\Models\Role::WAITER ?>">Pelayan</option>
                                                                <option value="<?= \Project\PakResto\Models\Role::CHEF ?>">Koki</option>
                                                            </select>
                                                            <?php if (getFlash('errors')['roles_mask'] ?? '') { ?>
                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['roles_mask'] ?? '' ?></div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-12">
                                                            <hr>
                                                            <button type="submit" class="btn btn-primary px-5">Simpan</button>
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php if (getFlash('errors')) {?>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        var myModalElement = document.getElementById('addUsers');
                                        var addUsers = new bootstrap.Modal(myModalElement);
                                        addUsers.show();
                                    });
                                </script>
                            <?php } ?>

                            <?php clearFlash('errors'); ?>
                            <hr/>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Posisi</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($users as $user) { ?>

                                    <tr>
                                        <td><?= $user['first_name'] .' '. $user['last_name'] ?? ''  ?></td>
                                        <td><?= $user['email']  ?></td>
                                        <td><?= $user['address'] .', '. ($user['address2'] ?? '') .', '. $user['city'] .', '. $user['province'] .', '. $user['zip']  ?></td>
                                        <td><?= getRole($user['roles_mask'])  ?></td>
                                        <td><?= $user['status'] ?? ''  ?></td>
                                        <td>
                                            <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $user['id'] ?>">Edit</button>
                                        </td>
                                    </tr>

                                        <!-- Modal add new employee-->
                                        <div class="modal fade" id="edit<?= $user['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0 m-0">
                                                        <div class="border-top border-0 border-4 border-primary">
                                                            <div class="card-body p-5">
                                                                <div class="card-title d-flex align-items-center">
                                                                    <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                                                    </div>
                                                                    <h5 class="mb-0 text-primary">Ubah Data Karyawan</h5>
                                                                </div>
                                                                <hr>
                                                                <form action="/managemen-karyawan/edit" method="POST">
                                                                    <?=getCsrf()->input('csrf_token');?>
                                                                    <input type="hidden" name="id" value="<?=$user['id']?>">
                                                                    <div class="row g-3">
                                                                        <div class="col-md-6">
                                                                            <label for="inputFirstName" class="form-label">Nama Depan</label>
                                                                            <input type="text" name="first_name" class="form-control <?= (getFlash('errors')['first_name'] ?? '') ? 'is-invalid' : '' ?>" id="inputFirstName" value="<?= $user['first_name']?>" autofocus>
                                                                            <?php if (getFlash('errors')['first_name'] ?? '') { ?>
                                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['first_name'] ?? '' ?></div>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="inputLastName" class="form-label">Nama Belakang (optional)</label>
                                                                            <input type="text" name="last_name" class="form-control <?= (getFlash('errors')['last_name'] ?? '') ? 'is-invalid' : '' ?>" value="<?=$user['last_name']?>" id="inputLastName">
                                                                            <?php if (getFlash('errors')['last_name'] ?? '') { ?>
                                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['last_name'] ?? '' ?></div>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="inputEmail" class="form-label">Email</label>
                                                                            <input type="text" name="email" class="form-control <?= (getFlash('errors')['email'] ?? '') ? 'is-invalid' : '' ?>" value="<?=$user['email']?>" id="inputEmail">
                                                                            <?php if (getFlash('errors')['email'] ?? '') { ?>
                                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['email'] ?? '' ?></div>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="inputPassword" class="form-label">Password</label>
                                                                            <input type="text" name="password" class="form-control" id="inputPassword" value="<?=$user['password']?>" readonly>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <label for="inputAddress" class="form-label">Alamat</label>
                                                                            <textarea name="address" class="form-control <?= (getFlash('errors')['address'] ?? '') ? 'is-invalid' : '' ?>" id="inputAddress" placeholder="Address..." rows="3"><?=$user['address']?></textarea>
                                                                            <?php if (getFlash('errors')['address'] ?? '') { ?>
                                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['address'] ?? '' ?></div>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <label for="inputAddress2" class="form-label">Alamat 2 (optional)</label>
                                                                            <textarea class="form-control" name="address2" id="inputAddress2" placeholder="Address 2..." rows="3"><?=$user['address2']?></textarea>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="inputCity" class="form-label">Kota</label>
                                                                            <input type="text" name="city" class="form-control <?= (getFlash('errors')['city'] ?? '') ? 'is-invalid' : '' ?>" value="<?=$user['city']?>" id="inputCity">
                                                                            <?php if (getFlash('errors')['city'] ?? '') { ?>
                                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['city'] ?? '' ?></div>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label for="inputState" class="form-label">Provinsi</label>
                                                                            <input type="text" name="state" class="form-control <?= (getFlash('errors')['state'] ?? '') ? 'is-invalid' : '' ?>" value="<?=$user['province']?>" id="inputState">
                                                                            <?php if (getFlash('errors')['state'] ?? '') { ?>
                                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['state'] ?? '' ?></div>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label for="inputZip" class="form-label">Kode Pos</label>
                                                                            <input type="number" name="zip" class="form-control <?= (getFlash('errors')['zip'] ?? '') ? 'is-invalid' : '' ?>" value="<?=$user['zip']?>" id="inputZip">
                                                                            <?php if (getFlash('errors')['zip'] ?? '') { ?>
                                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['zip'] ?? '' ?></div>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <label for="inputRolesMask" class="form-label">Role Pekerjaan</label>
                                                                            <select id="inputRolesMask" name="roles_mask" class="form-select <?= (getFlash('errors')['roles_mask'] ?? '') ? 'is-invalid' : '' ?>" aria-label="Default select example">
                                                                                <option value="">Pilih Role Pekerjaan</option>
                                                                                <option value="<?= \Project\PakResto\Models\Role::MANAGER ?>" <?= $user['roles_mask'] == \Project\PakResto\Models\Role::MANAGER ? 'selected' : '' ?>>Manager</option>
                                                                                <option value="<?= \Project\PakResto\Models\Role::CASHIER ?>" <?= $user['roles_mask'] == \Project\PakResto\Models\Role::CASHIER ? 'selected' : '' ?>>Kasir</option>
                                                                                <option value="<?= \Project\PakResto\Models\Role::WAITER ?>" <?= $user['roles_mask'] == \Project\PakResto\Models\Role::WAITER ? 'selected' : '' ?>>Pelayan</option>
                                                                                <option value="<?= \Project\PakResto\Models\Role::CHEF ?>" <?= $user['roles_mask'] == \Project\PakResto\Models\Role::CHEF ? 'selected' : '' ?>>Koki</option>
                                                                            </select>
                                                                            <?php if (getFlash('errors')['roles_mask'] ?? '') { ?>
                                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['roles_mask'] ?? '' ?></div>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <hr>
                                                                            <button type="submit" class="btn btn-primary px-5">Simpan</button>
                                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php if (getFlash('errors')) {?>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    var myModalElement = document.getElementById('editUsers');
                                                    var addUsers = new bootstrap.Modal(myModalElement);
                                                    addUsers.show();
                                                });
                                            </script>
                                        <?php } ?>

                                    <?php }  ?>

                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end card -->
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
        <h6 class="mb-0">Sidebar Backgrounds</h6>
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

