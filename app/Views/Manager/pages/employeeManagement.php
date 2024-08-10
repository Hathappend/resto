
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
                <div class="breadcrumb-title pe-3">U-Resto</div>
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
                                                    var editUsers = new bootstrap.Modal(myModalElement);
                                                    editUsers.show();
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

