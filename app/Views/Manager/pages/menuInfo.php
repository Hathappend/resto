<section id="menu">
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
                                <li class="breadcrumb-item active" aria-current="page">Informasi Menu</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Stok Habis</p>
                                        <h4 class="my-1"><?= count($outOfStocks) ?></h4>
                                    </div>
                                    <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Stok Menipis</p>
                                        <h4 class="my-1"><?= count($dangerStocks) ?></h4>
                                    </div>
                                    <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Stok Aman</p>
                                        <h4 class="my-1"><?= count($safeStocks) ?></h4>
                                    </div>
                                    <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
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
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <form class="">
                                            <div class="row d-flex justify-content-between">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 my-1">
                                                    <div class="position-relative my-1">
                                                        <form action="/info-menu" method="GET">
                                                            <input type="text" name="search" class="form-control ps-5" placeholder="Search Product..."> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                                                        </form>
                                                    </div>
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
                <div class="row product-grid mt-4">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">

                            <?php foreach ($searchResults ?? $menus as $menu) { ?>

                                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card">
                                        <img src="uploads/menus/<?= $menu['image'] ?>" class="card-img-top" alt="<?= $menu['image'] ?>">
                                        <div class="">
                                            <div class="position-absolute bg-transparent top-0 end-0 product-discount font-22 ">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-transparent" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded text-white"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="/edit-menu/id/<?= $menu['id'] ?>">Edit Menu</a></li>
                                                    <li><a class="dropdown-item text-danger" href="/hapus-menu/id/<?= $menu['id'] ?>">Hapus Menu</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="menu-category"><?= $menu['category'] ?></span>
                                            <h6 class="card-title menu-title cursor-pointer py-1"><?= $menu['menu'] ?></h6>
                                            <div class="clearfix">
                                                <p class="total-ordered mb-0 float-start pt-2">
                                                    <?= isset(getTotalOrderMenuById($menu['id'] ?? '')[0]['total_qty']) ? getTotalOrderMenuById($menu['id'] ?? '')[0]['total_qty'] . 'x Dipesan' : 'Belum ada pesanan'?>
                                                </p>
                                                <p class="price-label mb-0 float-end fw-bold pt-2"><span>Rp. <?= number_format($menu['price']) ?></span></p>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 pt-3">
                                                    <button class="btn btn-outline-info w-100" type="button" data-bs-toggle="modal" data-bs-target="#menuInfo<?= $menu['id'] ?>"> Info </button>
                                                </div>
                                            </div>

                                            <!-- Modal Info Menu-->
                                            <div class="modal fade" id="menuInfo<?= $menu['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Informasi Menu</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                    <img src="uploads/menus/<?= $menu['image'] ?>" class="card-img-top img-fluid" alt="<?= $menu['image'] ?>">
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="table-responsive p-3" >
                                                                        <table class="mb-0" width="100%">
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <h6 class="mb-0 title-pay-info"><?= $menu['menu'] ?></h6>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <p class="mb-0 mt-1 pay-info-value pt-1">Dibuat pada <?= date("d/m/Y", strtotime($menu['created_at'])) ?></p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2"><hr></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <h6 class="mb-0 title-pay-info">Deskripsi</h6>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <p class="mb-0 mt-3 pay-info-value"><?= $menu['description'] ?></p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2"><hr></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <h6 class="mb-0 title-pay-info">Info Detail</h6>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <p class="mb-0 mt-3 pay-info-value">Kategori</p>
                                                                                </td>
                                                                                <td align="right">
                                                                                    <p class="mb-0 mt-3 pay-info-value"><?= $menu['category'] ?></p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <p class="mb-0 mt-1 pay-info-value">Harga</p>
                                                                                </td>
                                                                                <td align="right">
                                                                                    <p class="mb-0 mt-1 fw-bold pay-info-value">Rp. <?= number_format($menu['price']) ?></p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <p class="mb-0 mt-1 pay-info-value">Lama Penyajiam</p>
                                                                                </td>
                                                                                <td align="right">
                                                                                    <p class="mb-0 mt-1 pay-info-value"><?= $menu['cooking_time'] ?> Menit</p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2"><hr></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <h6 class="mb-0 title-pay-info">Info Stok</h6>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <p class="mb-0 mt-3 pay-info-value">Sisa Stok</p>
                                                                                </td>
                                                                                <td align="right">
                                                                                    <p class="mb-0 mt-3 pay-info-value"><?= $menu['stock'] ?> porsi</p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <p class="mb-0 mt-1 pay-info-value">Minimal Stok</p>
                                                                                </td>
                                                                                <td align="right">
                                                                                    <p class="mb-0 mt-1 pay-info-value"><?= $menu['min_stock'] ?> porsi</p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <p class="mb-0 mt-1 pay-info-value">Status</p>
                                                                                </td>
                                                                                <td align="right">
                                                                                    <p class="mb-0 mt-1 pay-info-value">
                                                                                        <?= ($menu['stock'] < $menu['min_stock'] && $menu['stock'] > 0 ) ? 'Menipis' : 'Aman' ?>
                                                                                    </p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2"><hr></td>
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
                                    </div>
                                </div>

                            <?php } ?>

                            <?php if (getFlash('error')){ ?>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-5 p-3">
                                        <img src="/assets/images/search-not-found.png" class="img-fluid bg-transparent" alt="" style="mix-blend-mode: multiply;opacity: 0.5;">
                                        <h5 class="text-center"><?= getFlash('error') ?></h5>
                                    </div>
                                </div>
                                <?php clearFlash('error'); ?>
                            <?php } ?>

                        </div>
                    </div>
                </div><!--end row-->


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
</section>