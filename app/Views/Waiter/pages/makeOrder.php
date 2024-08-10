<section id="make-order">

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
                                <li class="breadcrumb-item"><a href="/pelayan"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a href="/pesanan">Pesanan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Buat Pesanan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <form class="">
                                            <div class="row d-flex justify-content-between">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 my-1">
                                                    <div class="position-relative my-1">
                                                        <form action="/buat-pesanan" method="GET">
                                                            <input type="text" name="search" class="form-control ps-5" placeholder="Search Product..."> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 my-1 col-lg-6 d-flex justify-content-center flex-wrap" >
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
                                                    <div class="btn-group my-1 mx-3" role="group" aria-label="Button group with nested dropdown">
                                                        <button type="button" class="btn btn-white">Collection Type</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class='bx bxs-category'></i>
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group my-1" role="group">
                                                        <button type="button" class="btn btn-white">Price Range</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class='bx bx-slider'></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="btnGroupDrop1">
                                                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                            </ul>
                                                        </div>
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
                                <div class="text-white"><?= getFlash('error') ?? getFlash('error')['menus'] ?? getFlash('error')['reservation_id'] ;?></div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php clearFlash('error'); ?>
                <?php } ?>


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5>Info Pembayaran</h5>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div id="product-list" class="product-list p-3 mb-3">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <form action="/pelayan/buat-pesanan/add" method="POST">
                                                    <?=getCsrf()->input('csrf_token');?>

                                                    <input type="hidden" name="menus" id="menusInput">
                                                    <input type="hidden" name="totalItem" id="totalItemInput">
                                                    <input type="hidden" name="totalOverall" id="totalOverallInput">
                                                    <input type="hidden" id="tax" value=10>
                                                    <input type="hidden" name="stock" id="stock" value=20>

                                                    <div class="table-responsive p-3" >
                                                        <table class="mb-0" width="100%">
                                                            <tr>
                                                                <td>
                                                                    <h6 class="mb-0 title-pay-info">Meja #<?=getSession('reservation')['table_number'] ?? 'Meja Belum Dipesan'?></h6>
                                                                </td>
                                                                <td align="right">
                                                                    <a href="/reservasi-meja " data-bs-toggle="tooltip" data-bs-placement="top" title="Buat Reservasi"><i class="fadeIn animated bx bx-pencil"></i> </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-0 pay-info-value pt-1">Pesanan #<?=date("YmdHis")?></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><hr></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h6 class="mb-0 title-pay-info">Sub Total</h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-0 mt-3 pay-info-value">Total Item</p>
                                                                </td>
                                                                <td align="right">
                                                                    <p class="mb-0 mt-3 pay-info-value" id="total-item"</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-0 mt-1 pay-info-value">Pajak</p>
                                                                </td>
                                                                <td align="right">
                                                                    <p class="mb-0 mt-1 pay-info-value">10%</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><hr></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h6 class="mb-0 title-pay-info">Total</h6>
                                                                </td>
                                                                <td align="right">
                                                                    <h6 class="mb-0 title-pay-info" id="total-overall"></h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><hr></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="pt-2">
                                                                    <div class="form-floating">
                                                                        <textarea class="form-control" name="note" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                                                                        <label for="floatingTextarea2">Catatan</label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><hr></td>
                                                            </tr
                                                            <tr>
                                                                <td colspan="2">
                                                                    <button type="submit" class="btn btn-primary px-5 w-100"><i class='bx bx-user mr-1'></i>Buat Pesanan</button>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row product-grid mt-4">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row">

                                <?php foreach ($menus as $menu) { ?>

                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                        <div class="card">
                                            <img src="/uploads/menus/<?= $menu['image'] ?>" class="card-img-top" alt="...">
                                            <div class="">
                                                <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                            </div>
                                            <div class="card-body">
                                                <span class="menu-category"><?= $menu['category'] ?></span>
                                                <h6 class="card-title menu-title"><?= $menu['menu'] ?></h6>
                                                    <span class="badge bg-secondary total-ordered">134x Dipesan</span>
                                                <div class="clearfix pt-1">
                                                    <p class="total-ordered float-start mb-0 pt-1" id="stock<?=$menu['id']?>">Tersisa <?= $menu['stock'] ?></p>
                                                    <p class="price-label mb-0 float-end fw-bold pt-1"><span>Rp. <?= number_format($menu['price']) ?></span></p>
                                                </div>

                                                <div class="col pt-3">
                                                    <div class="input-group input-spinner">
                                                        <button class="btn btn-white" type="button" id="button-plus<?= $menu['id'] ?>"> + </button>
                                                        <input id="total-input<?= $menu['id'] ?>" type="text" class="form-control" value="0" readonly>
                                                        <button class="btn btn-white" type="button" id="button-minus<?= $menu['id'] ?>"> − </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            setupMenuButtons(
                                                'button-minus<?= $menu['id'] ?>',
                                                'button-plus<?= $menu['id'] ?>',
                                                'total-input<?= $menu['id'] ?>',
                                                {
                                                    id: '<?= $menu['id'] ?>',
                                                    image: '/uploads/menus/<?= $menu['image'] ?>',
                                                    title: '<?= $menu['menu'] ?>',
                                                    price: 'Rp. <?= number_format($menu['price']) ?>'
                                                }
                                            );
                                        });
                                    </script>

                                <?php }  ?>

                            </div>
                    </div>
                    <?php if (getFlash('errorSearch')){ ?>
                        <div class="row d-flex justify-content-center">
                            <div class="col-5 p-3">
                                <img src="/assets/images/search-not-found.png" class="img-fluid bg-transparent" alt="" style="mix-blend-mode: multiply;opacity: 0.5;">
                                <h5 class="text-center"><?= getFlash('errorSearch') ?></h5>
                            </div>
                        </div>
                        <?php clearFlash('errorSearch'); ?>
                    <?php } ?>
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
</section>