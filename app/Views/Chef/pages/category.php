
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
                            <li class="breadcrumb-item"><a href="/koki"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a href="/koki">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kategori Menu</li>
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

            <!--end row-->
            <div class="row">
                <div class="col-9">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="mb-0">Daftar Kategori Menu</h5>
                                </div>
                                <div>
                                    <button class="btn btn-primary mb-3 mb-lg-0" data-bs-toggle="modal" data-bs-target="#addCategories"><i class='bx bxs-plus-square'></i>Kategori</button>
                                </div>
                            </div>

                            <!-- Modal Add Categories-->
                            <div class="modal fade" id="addCategories" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Kategori Menu</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-12">
                                                    <form action="/kategori-menu/add" method="POST">
                                                        <?=getCsrf()->input('my-token');?>
                                                        <div class="mb-3">
                                                            <input type="text" name="category_name" class="form-control <?= (getFlash('errors')['category_name'] ?? '') ? 'is-invalid' : '' ?>" id="floatingInput" placeholder="cth : Drinks">
                                                            <?php if (getFlash('errors')['category_name'] ?? '') { ?>
                                                                <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['category_name'] ?? '' ?></div>
                                                            <?php } ?>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary w-100 mb-3">Simpan</button>
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
                                        var myModalElement = document.getElementById('addCategories');
                                        var addCategories = new bootstrap.Modal(myModalElement);
                                        addCategories.show();
                                    });
                                </script>
                            <?php } ?>

                            <?php clearFlash('errors'); ?>

                            <hr />
                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $no = 1 ?>
                                    <?php foreach ($categories as $category) { ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $category['category']?></td>
                                        <td align="center">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-transparent " data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-cog"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><button class="btn dropdown-item" data-bs-toggle="modal" data-bs-target="#editCategory<?= $category['id']?>">Edit Kategori</button></li>
                                                <li>
                                                    <a href="kategori-menu/delete/id/<?=$category['id']?>" type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn dropdown-item" >Hapus Kategori</a>
                                                </li>

                                            </ul>
                                        </td>

                                        <!-- Edit Category Modal -->
                                        <div class="modal fade" id="editCategory<?= $category['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/kategori-menu/edit" method="POST">
                                                            <?=getCsrf()->input('csrf_token');?>
                                                            <input type="hidden" name="id" value="<?=$category['id']?>">
                                                            <div class="mb-3">
                                                                <input type="text" name="category" class="form-control <?= (getFlash('errors')['category'] ?? '') ? 'is-invalid' : '' ?>" id="floatingInput" value="<?= $category['category'] ?>" placeholder="cth : Drinks">
                                                                <?php if (getFlash('errors')['category'] ?? '') { ?>
                                                                    <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['category'] ?? '' ?></div>
                                                                <?php } ?>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary w-100 mb-3">Simpan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>


                                    <?php if (getFlash('errors')) {?>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                var myModalElement = document.getElementById('editCategory');
                                                var editCategory = new bootstrap.Modal(myModalElement);
                                                editCategory.show();
                                            });
                                        </script>
                                    <?php } ?>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">

                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Total Kategori</p>
                                        <h4 class="my-1"><?= count(findAllCategory()) ?></h4>
                                        <p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>
                                    </div>
                                    <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
            <!--end row -->
        </div>
    </div>
    <!--end row-->
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
