
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

            <?php if (getFlash('error')){ ?>
                <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-white">Danger</h6>
                            <div class="text-white"><?=getFlash('error'); ?></div>
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

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <h6 class="mb-0 text-uppercase">Rekapitulasi Penjualan</h6>
                                        </div>
                                    </div>
                                    <form action="/rekapitulasi" method="GET">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 mb-3 ">
                                                <select id="recap-type" name="recapType" class="form-select" aria-label="Default select example" onchange="showElementBySelect('pick-date', 'recap-type')">
                                                    <option selected>Tipe Rekapitulasi:</option>
                                                    <option value="day">Harian</option>
                                                    <option value="week">Mingguan</option>
                                                    <option value="month">Bulanan</option>
                                                    <option value="year">Tahunan</option>
                                                </select>
                                            </div>
                                            <div id="day" class="pick-date col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 mb-3" style="display: none">
                                                <input type="date" name="dayValue" class="form-control" placeholder="Pilih Tanggal"/>
                                            </div>
                                            <div id="week" class="pick-date col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 mb-3" style="display: none">
                                                <input type="week" name="weekValue" class="form-control" placeholder="Pilih Minggu">
                                            </div>
                                            <div id="month" class="pick-date col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 mb-3" style="display: none">
                                                <input type="month" name="monthValue" class="form-control" placeholder="Pilih Bulan">
                                            </div>
                                            <div id="year" class="pick-date col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 mb-3" style="display: none">
                                                <select id="year-option" name="yearValue" class="form-select" aria-label="Default select example">
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 mb-3">
                                                <button type="submit" class="btn btn-primary w-100 float-end">Filter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card -->
                </div>
            </div>
            <!--end row -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="header-everview d-flex justify-content-between">
                                <div class="header-left">
                                    <h6 class="mb-0 text-uppercase">Overview</h6>
                                    <p class="mb-0 py-1"><?= $filterValue?></p>
                                </div>
                                <div class="header-right">
                                    <?php if (!empty($orders)) {?>
                                        <form action="/rekapitulasi" method="POST" >
                                            <?=getCsrf()->input('csrf_token');?>
                                            <button type="submit" class="btn btn-primary"><i class='bx bx-navigation mr-1'></i>Rekap Sekarang</button>
                                        </form>
                                    <?php } ?>
                                </div>

                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>No Pesanan</th>
                                        <th>No Meja</th>
                                        <th>status</th>
                                        <th>Nama Kasir</th>
                                        <th>Sub Total</th>
                                        <th>Total</th>
                                        <th>Dibuat Pada</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php if (!empty($orders)) { ?>


                                        <?php foreach ($orders as $order) { ?>
                                            <?php
                                                $cashier = findById($order['cashier_id'])[0] ?? null;
                                            ?>

                                            <tr>
                                                <td><?= $order['id'] ?></td>
                                                <td><?= $order['table_number'] ?></td>
                                                <?php $user = findById($order['cashier_id'] ?? '');?>
                                                <td><div class="badge rounded-pill <?=showColorClassBadge($order['status'], 'pelayan')?> p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i><?= $order['status'] ?></div></td>
                                                <td><?= ($cashier['first_name'] ?? '') .' '. ($cashier['last_name'] ?? '') ?></td>
                                                <td>Rp. <?= number_format($order['sub_total']) ?></td>
                                                <td>Rp. <?= number_format($order['total']) ?></td>
                                                <td><?= date('d-m-Y', strtotime($order['created_at'])) ?></td>
                                                <td align="center">
                                                    <button type="button" class="btn bg-transparent list-inline-item btn-sm d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#modalInfoTrans<?=$order['id']?>"><i class="bx bx-info-circle"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Modal -->
                                            <div class="modal fade" id="modalInfoTrans<?=$order['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

                                                                                <?php foreach (getOrderDetailByOrderId($order['id']) as $order_detail) { ?>

                                                                                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                                                        <div class="col-sm-12">
                                                                                            <div class="d-flex align-items-center">
                                                                                                <div style="width:80px;height:80px;">
                                                                                                    <img src="/uploads/menus/<?=$order_detail['image'] ?>" class="p-1 img-fluid" alt="" />
                                                                                                </div>
                                                                                                <div class="ms-2">
                                                                                                    <h6 class="mb-1 card-title menu-title"><?=$order_detail['menu'] ?></h6>
                                                                                                    <p class="price-label mb-0 fw-bold pt-1"><span>Rp. <?=$order_detail['price'] ?></span></p>
                                                                                                    <p class="quantity-label mb-0 pt-1"><span>Qty: <?=$order_detail['qty'] ?></span></p>
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
                                                                    <div class="row d-flex align-items-center p-3">
                                                                        <div class="col-12">
                                                                            <h6 class="mb-0 title-pay-info">Meja #<?=$order['table_number']?></h6>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <p class="mb-0 pay-info-value pt-1">Pesanan #<?=$order['id']?></p>
                                                                        </div>
                                                                        <div class="col-12"><hr></div>
                                                                        <div class="col-12">
                                                                            <h6 class="mb-0 title-pay-info">Sub Total</h6>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <p class="mb-0 mt-3 pay-info-value">Total Item</p>
                                                                        </div>
                                                                        <div class="col-6 text-end">
                                                                            <p class="mb-0 mt-3 pay-info-value">Rp. <?=number_format($order['sub_total'])?></p>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <p class="mb-0 mt-1 pay-info-value">Pajak</p>
                                                                        </div>
                                                                        <div class="col-6 text-end">
                                                                            <p class="mb-0 mt-1 pay-info-value">10%</p>
                                                                        </div>
                                                                        <div class="col-12"><hr></div>
                                                                        <div class="col-6">
                                                                            <h6 class="mb-0 title-pay-info">Total</h6>
                                                                        </div>
                                                                        <div class="col-6 text-end">
                                                                            <h6 class="mb-0 title-pay-info">Rp. <?=number_format($order['total'])?></h6>
                                                                        </div>
                                                                        <div class="col-12"><hr></div>
                                                                        <div class="col-12">
                                                                            <h6 class="mb-0 title-pay-info">Detail</h6>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <p class="mb-0 mt-3 pay-info-value">Status</p>
                                                                        </div>
                                                                        <div class="col-6 text-end">
                                                                            <p class="mb-0 mt-3 pay-info-value"><span class="badge <?=showColorClassBadge($order['status'], 'pelayan')?>"><?=$order['status']?></span></p>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <p class="mb-0 mt-1 pay-info-value">Nomor Antrian</p>
                                                                        </div>
                                                                        <div class="col-6 text-end">
                                                                            <p class="mb-0 mt-1 pay-info-value"><?=$order['queue_number']?></p>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <p class="mb-0 mt-1 pay-info-value">Pesanan Dibuat Pada</p>
                                                                        </div>
                                                                        <div class="col-6 text-end">
                                                                            <p class="mb-0 mt-1 pay-info-value"><?=date('d/m/Y', strtotime($order['created_at']))?></p>
                                                                        </div>
                                                                        <div class="col-12"><hr></div>
                                                                        <div class="col-12">
                                                                            <h6 class="mb-0 title-pay-info">Note</h6>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <p class="mb-0 pay-info-value pt-1"><?=$order['note']?></p>
                                                                        </div>
                                                                        <div class="col-12"><hr></div>

                                                                        <?php if ($order['status'] == "selesai") { ?>

                                                                            <div class="col-12">
                                                                                <button type="submit" class="btn btn-primary px-5 w-100"><i class='bx bx-printer mr-1'></i>Cetak Resi</button>
                                                                            </div>

                                                                        <?php }else{ ?>
                                                                            <p><i>* Belum dapat mencetak resi, karena pesanan belum selesai</i></p>
                                                                        <?php } ?>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } ?>


                                    <?php  } ?>


                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row -->
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Info Rekap Harian</h5>
                                    <p class="mb-0 font-13 text-secondary"><i class="bx bxs-calendar"></i>in last 30 days revenue</p>
                                </div>
                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                            </div>
                            <div class="table-responsive mt-4">
                                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="table-light">
                                    <tr>
                                        <th>id</th>
                                        <th>Nama Kasir</th>
                                        <th>Total Pesanan</th>
                                        <th>Total Pendapatan</th>
                                        <th>Tipe Rekap</th>
                                        <th>DIbuat Pada</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php foreach ($dailyRecaps as $dailyRecap) { ?>
                                    
                                        <tr>
                                            <td>#<?= $dailyRecap['id'] ?></td>
                                            <td><?= $dailyRecap['first_name'] . ' ' . $dailyRecap['last_name']  ?></td>
                                            <td><?= $dailyRecap['order_total'] ?></td>
                                            <td>Rp. <?= number_format($dailyRecap['revenue']) ?></td>
                                            <td><?= $dailyRecap['recap_type'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($dailyRecap['created_at'])) ?></td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Info Rekap Mingguan</h5>
                                    <p class="mb-0 font-13 text-secondary"><i class="bx bxs-calendar"></i>in last 30 days revenue</p>
                                </div>
                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                            </div>
                            <div class="table-responsive mt-4">
                                <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="table-light">
                                    <tr>
                                        <th>id</th>
                                        <th>Nama Kasir</th>
                                        <th>Total Pesanan</th>
                                        <th>Total Pendapatan</th>
                                        <th>Tipe Rekap</th>
                                        <th>DIbuat Pada</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($weeklyRecaps as $weeklyRecap) { ?>

                                        <tr>
                                            <td>#<?= $weeklyRecap['id'] ?></td>
                                            <td><?= $weeklyRecap['first_name'] . ' ' . $weeklyRecap['last_name']  ?></td>
                                            <td><?= $weeklyRecap['order_total'] ?></td>
                                            <td>Rp. <?= number_format($weeklyRecap['revenue']) ?></td>
                                            <td><?= $weeklyRecap['recap_type'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($weeklyRecap['created_at'])) ?></td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Info Rekap Bulanan</h5>
                                    <p class="mb-0 font-13 text-secondary"><i class="bx bxs-calendar"></i>in last 30 days revenue</p>
                                </div>
                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                            </div>
                            <div class="table-responsive mt-4">
                                <table id="example4" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="table-light">
                                    <tr>
                                        <th>id</th>
                                        <th>Nama Kasir</th>
                                        <th>Total Pesanan</th>
                                        <th>Total Pendapatan</th>
                                        <th>Tipe Rekap</th>
                                        <th>DIbuat Pada</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($monthlyRecaps as $monthlyRecap) { ?>

                                        <tr>
                                            <td>#<?= $monthlyRecap['id'] ?></td>
                                            <td><?= $monthlyRecap['first_name'] . ' ' . $monthlyRecap['last_name']  ?></td>
                                            <td><?= $monthlyRecap['order_total'] ?></td>
                                            <td>Rp. <?= number_format($monthlyRecap['revenue']) ?></td>
                                            <td><?= $monthlyRecap['recap_type'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($monthlyRecap['created_at'])) ?></td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Info Rekap Tahunan</h5>
                                    <p class="mb-0 font-13 text-secondary"><i class="bx bxs-calendar"></i>in last 30 days revenue</p>
                                </div>
                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                            </div>
                            <div class="table-responsive mt-4">
                                <table id="example5" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="table-light">
                                    <tr>
                                        <th>id</th>
                                        <th>Nama Kasir</th>
                                        <th>Total Pesanan</th>
                                        <th>Total Pendapatan</th>
                                        <th>Tipe Rekap</th>
                                        <th>DIbuat Pada</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($yearlyRecaps as $yearlyRecap) { ?>

                                        <tr>
                                            <td>#<?= $yearlyRecap['id'] ?></td>
                                            <td><?= $yearlyRecap['first_name'] . ' ' . $yearlyRecap['last_name']  ?></td>
                                            <td><?= $yearlyRecap['order_total'] ?></td>
                                            <td>Rp. <?= number_format($yearlyRecap['revenue']) ?></td>
                                            <td><?= $yearlyRecap['recap_type'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($yearlyRecap['created_at'])) ?></td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
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

<!--custom javascript for select year-->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const currentYear = new Date().getFullYear();
        populateYearSelect('year-option', currentYear-1, 3);
    });
</script>
