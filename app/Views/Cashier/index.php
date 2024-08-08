
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
            <div class="row" >
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col">
                            <div class="card radius-10 w-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center p-2">
                                        <div>
                                            <h5>List Pesanan Hari Ini</h5>
                                        </div>
                                    </div>
                                    <div class="search-bar">
                                        <div class="position-relative search-bar-box w-100">
                                            <input type="text" class="form-control search-control" placeholder="Type to search..." /> <span class="position-absolute top-50 search-show translate-middle-y"><i class="bx bx-search"></i></span>
                                            <span class="position-absolute top-50 search-close translate-middle-y"><i class="bx bx-x"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="customers-list p-3 mb-3">

                                    <?php foreach ($todayOrders as $todayOrder) { ?>

                                        <div class="customers-list-item d-flex align-items-center border-top border-bottom p-3 cursor-pointer">
                                            <div class="p-2">
                                                <span class="border p-3 <?= showClassColorStatus($todayOrder['status'])['bg'] ?>">#<?= $todayOrder['table_number'] ?></span>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">#<?= $todayOrder['id'] ?></h6>
                                                <p class="mb-0 font-13 text-secondary"><?= count(getOrderDetailByOrderId($todayOrder['id'])) ?> items</p>
                                            </div>
                                            <div class="list-inline d-flex customers-contacts ms-auto">
                                                <div class="d-flex align-items-center <?= showClassColorStatus($todayOrder['status'])['text'] ?> list-inline-item">
                                                    <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                    <span><?= $todayOrder['status'] ?></span>
                                                </div>

                                                <?php if ($todayOrder['status'] == "menunggu konfirmasi") { ?>

                                                    <button type="button" class="btn btn-primary list-inline-item btn-sm d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#modalConfirmTrans<?=$todayOrder['id']?>"><i class="bx bx-check"></i>
                                                    </button>

                                                <?php }else{ ?>

                                                    <button type="button" class="btn bg-transparent list-inline-item btn-sm d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#modalConfirmTrans<?=$todayOrder['id']?>"><i class="bx bx-info-circle"></i>
                                                    </button>

                                                <?php } ?>

                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modalConfirmTrans<?=$todayOrder['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Info Pesanan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row d-flex align-items-center">
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="product-list p-3 mb-3">

                                                                            <?php foreach (getOrderDetailByOrderId($todayOrder['id']) as $orders_detail) { ?>

                                                                                <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <div style="width:80px;height:80px;">
                                                                                                <img src="/uploads/menus/<?=$orders_detail['image']?>" class="p-1 img-fluid" alt="" />
                                                                                            </div>
                                                                                            <div class="ms-2">
                                                                                                <h6 class="mb-1 card-title menu-title"><?=$orders_detail['menu']?></h6>
                                                                                                <p class="price-label mb-0 fw-bold pt-1"><span>Rp. <?=number_format($orders_detail['price'])?></span></p>
                                                                                                <p class="quantity-label mb-0 pt-1"><span>Qty: <?=$orders_detail['qty']?></span></p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            <?php } ?>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                                                                <div class="table-responsive p-3" >
                                                                    <table class="mb-0" width="100%">
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="mb-0 title-pay-info">Meja #<?=$todayOrder['table_number']?></h6>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p class="mb-0 pay-info-value pt-1">Pesanan #<?=$todayOrder['id']?></p>
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
                                                                                <p class="mb-0 mt-3 pay-info-value">Rp. <?=number_format($todayOrder['sub_total'])?></p>
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
                                                                                <h6 class="mb-0 title-pay-info">Rp. <?=number_format($todayOrder['total'])?></h6>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2"><hr></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="mb-0 title-pay-info">Detail</h6>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p class="mb-0 mt-3 pay-info-value">Pajak</p>
                                                                            </td>
                                                                            <td align="right">
                                                                                <p class="mb-0 mt-3 pay-info-value"><?=$todayOrder['status']?></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p class="mb-0 mt-1 pay-info-value">Nomor Antrian</p>
                                                                            </td>
                                                                            <td align="right">
                                                                                <p class="mb-0 mt-1 pay-info-value"><?=$todayOrder['queue_number']?></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p class="mb-0 mt-1 pay-info-value">Pesanan Dibuat Pada</p>
                                                                            </td>
                                                                            <td align="right">
                                                                                <p class="mb-0 mt-1 pay-info-value"><?=date('d/m/Y', strtotime($todayOrder['created_at']))?></p>
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
                                                                            <td colspan="2" class="pt-2">
                                                                                <p class="mb-0 mt-3 pay-info-value"><?=$todayOrder['note']?></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2"><hr></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">

                                                                                <?php if ($todayOrder['status'] == "menunggu konfirmasi") { ?>

                                                                                <form action="/kasir/konfirmasi/id/<?=$todayOrder['id']?>" method="POST" >
                                                                                    <?=getCsrf()->input('csrf_token');?>
                                                                                    <button type="submit" class="btn btn-primary px-5 w-100"><i class='bx bx-user mr-1'></i>Konfirmasi Pesanan</button>
                                                                                </form>

                                                                                <?php } ?>
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

                                    <?php } ?>

                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" >
                            <div class="row">
                                <div class="col">
                                    <div class="card radius-10">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 text-secondary">Pesanan Baru</p>
                                                    <h4 class="my-1">$4805</h4>
                                                    <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
                                                </div>
                                                <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-10">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 text-secondary">Belum dikonfirmasi</p>
                                                    <h4 class="my-1">8.4K</h4>
                                                    <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>14% Since last week</p>
                                                </div>
                                                <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
                                                </div>
                                            </div>
                                            <div id="chart2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card radius-10">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 text-secondary">Belum dibayar</p>
                                                    <h4 class="my-1">59K</h4>
                                                    <p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>
                                                </div>
                                                <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
                                                </div>
                                            </div>
                                            <div id="chart3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card radius-10">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 text-secondary">Total Pesanan Hari ini</p>
                                                    <h4 class="my-1">59K</h4>
                                                    <p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>
                                                </div>
                                                <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
                                                </div>
                                            </div>
                                            <div id="chart3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-10">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 text-secondary">Total Pesanan Minggu ini</p>
                                                    <h4 class="my-1">59K</h4>
                                                    <p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>
                                                </div>
                                                <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
                                                </div>
                                            </div>
                                            <div id="chart3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card radius-10">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 text-secondary">Total Pesanan Bulan ini</p>
                                                    <h4 class="my-1">59K</h4>
                                                    <p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>
                                                </div>
                                                <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
                                                </div>
                                            </div>
                                            <div id="chart3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card radius-10 shadow-none bg-transparent overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-lg-flex align-items-center">
                                                <div>
                                                    <h5 class="mb-0">Rekapitulasi per Hari ini</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="dashboard-top-countries2 mb-3 px-2">
                                            <ul class="list-group list-group-flush radius-10">
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                                <span class="text-danger">Belum direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="/histori-transaksi">
                                                            <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                        </a>

                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                                <span class="text-primary">Sudah direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6" >
                            <div class="row">
                                <div class="col">
                                    <div class="card radius-10 w-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h5 class="mb-1">Top Menu</h5>
                                                    <p class="mb-0 font-13 text-secondary"><i class="bx bxs-calendar"></i>in last 30 days revenue</p>
                                                </div>
                                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                                            </div>
                                        </div>
                                        <div class="product-list p-3 mb-3">

                                            <?php foreach ($topMenus as $topmenu) { ?>

                                                <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                    <div class="col-sm-12">
                                                        <div class="d-flex align-items-center">
                                                            <div class="product-img">
                                                                <img src="/uploads/menus/<?= $topmenu['image'] ?>" alt="" />
                                                            </div>
                                                            <div class="ms-2">
                                                                <h6 class="mb-1"><?= $topmenu['menu'] ?></h6>
                                                                <p class="mb-0"><?= $topmenu['total_qty'] ?> Dipesan</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="card radius-10 shadow-none bg-transparent overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-lg-flex align-items-center">
                                                <div>
                                                    <h5 class="mb-0">Rekapitulasi per Minggu ini</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="dashboard-top-countries mb-3 px-2">
                                            <ul class="list-group list-group-flush radius-10">
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                                <span class="text-danger">Belum direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="/histori-transaksi">
                                                            <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                        </a>

                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                                <span class="text-primary">Sudah direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                                <span class="text-danger">Belum direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="/histori-transaksi">
                                                            <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                        </a>

                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                                <span class="text-primary">Sudah direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                                <span class="text-danger">Belum direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="/histori-transaksi">
                                                            <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                        </a>

                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                                <span class="text-primary">Sudah direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                                <span class="text-danger">Belum direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="/histori-transaksi">
                                                            <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                        </a>

                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                                <span class="text-primary">Sudah direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card radius-10 shadow-none bg-transparent overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-lg-flex align-items-center">
                                                <div>
                                                    <h5 class="mb-0">Rekapitulasi per Bulan ini</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="dashboard-top-countries3 mb-3 px-2">
                                            <ul class="list-group list-group-flush radius-10">
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                                <span class="text-danger">Belum direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="/histori-transaksi">
                                                            <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                        </a>

                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                                <span class="text-primary">Sudah direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                                <span class="text-danger">Belum direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="/histori-transaksi">
                                                            <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                        </a>

                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                                <span class="text-primary">Sudah direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                                <span class="text-danger">Belum direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="/histori-transaksi">
                                                            <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                        </a>

                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                                <span class="text-primary">Sudah direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                                <span class="text-danger">Belum direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="/histori-transaksi">
                                                            <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                        </a>

                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="d-flex justify-content-between w-100" >
                                                            <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                            <div class="recap-status pe-3 ">
                                                                <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                                <span class="text-primary">Sudah direkap</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card radius-10 shadow-none bg-transparent overflow-hidden">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-center">
                                        <div>
                                            <h5 class="mb-0">Rekapitulasi per Tahun ini</h5>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="dashboard-top-countries4 mb-3 px-2">
                                    <ul class="list-group list-group-flush radius-10">
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                            <div class="d-flex align-items-center w-100">
                                                <div class="d-flex justify-content-between w-100" >
                                                    <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                    <div class="recap-status pe-3 ">
                                                        <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                        <span class="text-danger">Belum direkap</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="/histori-transaksi">
                                                    <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                </a>

                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                            <div class="d-flex align-items-center w-100">
                                                <div class="d-flex justify-content-between w-100" >
                                                    <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                    <div class="recap-status pe-3 ">
                                                        <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                        <span class="text-primary">Sudah direkap</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                            <div class="d-flex align-items-center w-100">
                                                <div class="d-flex justify-content-between w-100" >
                                                    <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                    <div class="recap-status pe-3 ">
                                                        <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                        <span class="text-danger">Belum direkap</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="/histori-transaksi">
                                                    <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                </a>

                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                            <div class="d-flex align-items-center w-100">
                                                <div class="d-flex justify-content-between w-100" >
                                                    <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                    <div class="recap-status pe-3 ">
                                                        <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                        <span class="text-primary">Sudah direkap</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                            <div class="d-flex align-items-center w-100">
                                                <div class="d-flex justify-content-between w-100" >
                                                    <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                    <div class="recap-status pe-3 ">
                                                        <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                        <span class="text-danger">Belum direkap</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="/histori-transaksi">
                                                    <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                </a>

                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                            <div class="d-flex align-items-center w-100">
                                                <div class="d-flex justify-content-between w-100" >
                                                    <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                    <div class="recap-status pe-3 ">
                                                        <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                        <span class="text-primary">Sudah direkap</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                            <div class="d-flex align-items-center w-100">
                                                <div class="d-flex justify-content-between w-100" >
                                                    <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                    <div class="recap-status pe-3 ">
                                                        <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                                        <span class="text-danger">Belum direkap</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="/histori-transaksi">
                                                    <i class="bx bx-right-arrow-alt bx-fade-right-hover"></i>
                                                </a>

                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                            <div class="d-flex align-items-center w-100">
                                                <div class="d-flex justify-content-between w-100" >
                                                    <h6 class="mb-0">Senin, 20 Juni 2024</h6>
                                                    <div class="recap-status pe-3 ">
                                                        <i class="bx bx-check-double bx-tada align-middle font-18 me-1" ></i>
                                                        <span class="text-primary">Sudah direkap</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
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
