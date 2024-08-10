
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
<!--            <div class="card shadow-none bg-transparent border-bottom border-2">-->
<!--                <div class="card-body">-->
<!--                    <div class="row align-items-center">-->
<!--                        <div class="col-md-3">-->
<!--                            <h4 class="mb-3 mb-md-0">Audience Overview</h4>-->
<!--                        </div>-->
<!--                        <div class="col-md-9">-->
<!--                            <form class="float-md-end">-->
<!--                                <div class="row row-cols-md-auto g-lg-3">-->
<!--                                    <label for="inputFromDate" class="col-md-2 col-form-label text-md-end">From Date</label>-->
<!--                                    <div class="col-md-4">-->
<!--                                        <input type="date" class="form-control" id="inputFromDate" />-->
<!--                                    </div>-->
<!--                                    <label for="inputToDate" class="col-md-2 col-form-label text-md-end">To Date</label>-->
<!--                                    <div class="col-md-4">-->
<!--                                        <input type="date" class="form-control" id="inputToDate" />-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card shadow-none bg-transparent">-->
<!--                <div class="card-body">-->
<!--                    <div id="chart1"></div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="row" >
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Pesanan Harian</p>
                                        <h4 class="my-1"><?= $dayOrderTrends['new_order'] ?></h4>
                                        <p class="mb-0 font-13 <?= showClassTrends($dayOrderTrends['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($dayOrderTrends['trend'])['icon'] ?> align-middle'></i><?= $dayOrderTrends['percentage']?>% 1 hari terakhir</p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-purchase-tag'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Pesanan Mingguan</p>
                                        <h4 class="my-1"><?= $weekOrderTrends['new_order'] ?></h4>
                                        <p class="mb-0 font-13 <?= showClassTrends($weekOrderTrends['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($weekOrderTrends['trend'])['icon'] ?> align-middle'></i><?= $weekOrderTrends['percentage']?>% 1 Minggu terakhir</p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-purchase-tag'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Pesanan Bulanan</p>
                                        <h4 class="my-1"><?= $monthOrderTrends['new_order'] ?></h4>
                                        <p class="mb-0 font-13 <?= showClassTrends($monthOrderTrends['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($monthOrderTrends['trend'])['icon'] ?> align-middle'></i><?= $monthOrderTrends['percentage']?>% 1 Bulan terakhir</p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-purchase-tag'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Pesanan Tahunan</p>
                                        <h4 class="my-1"><?= $yearOrderTrends['new_order'] ?></h4>
                                        <p class="mb-0 font-13 <?= showClassTrends($yearOrderTrends['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($yearOrderTrends['trend'])['icon'] ?> align-middle'></i><?= $yearOrderTrends['percentage']?>% 1 Tahun terakhir</p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-purchase-tag'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pendapatan Harian</p>
                                            <h5 class="my-1">Rp. <?= number_format($dailyRevenue['total_sum']) ?></h5>
                                            <p class="mb-0 font-13 <?= showClassTrends($dailyRevenue['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($dailyRevenue['trend'])['icon'] ?> align-middle'></i><?= $dailyRevenue['percentage']?>% 1 Hari terakhir</p>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pendapatan Mingguan</p>
                                            <h5 class="my-1">Rp. <?= number_format($weeklyRevenue['total_sum']) ?></h5>
                                            <p class="mb-0 font-13 <?= showClassTrends($weeklyRevenue['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($weeklyRevenue['trend'])['icon'] ?> align-middle'></i><?= $weeklyRevenue['percentage']?>% 1 Minggu terakhir</p>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pendapatan Bulanan</p>
                                            <h5 class="my-1">Rp. <?= number_format($monthlyRevenue['total_sum']) ?></h5>
                                            <p class="mb-0 font-13 <?= showClassTrends($monthlyRevenue['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($monthlyRevenue['trend'])['icon'] ?> align-middle'></i><?= $monthlyRevenue['percentage']?>% 1 Bulan terakhir</p>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pendapatan Tahunan</p>
                                            <h5 class="my-1">Rp. <?= number_format($yearlyRevenue['total_sum']) ?></h5>
                                            <p class="mb-0 font-13 <?= showClassTrends($yearlyRevenue['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($yearlyRevenue['trend'])['icon'] ?> align-middle'></i><?= $yearlyRevenue['percentage']?>% 1 Tahun terakhir</p>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pesanan Aktif</p>
                                            <h4 class="my-1"><?= count($activeOrders) ?></h4>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Total Menu</p>
                                            <h4 class="my-1"><?= count($menus) ?></h4>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-detail'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Kategori Menu</p>
                                            <h4 class="my-1"><?= count($menuCategories) ?></h4>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-detail'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Perlu Re-stok</p>
                                            <h4 class="my-1"><?= count($dangerStocks) ?></h4>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-info-circle'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Jumlah Karyawan</p>
                                            <h4 class="my-1"><?= count($users) ?></h4>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-user'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" >
                    <div class="row">
                        <div class="col-12" >
                            <div class="card radius-10 w-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h5 class="mb-1">Top Menu</h5>
                                        </div>
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
                                            <h5 class="mb-0">Perlu Restok</h5>
                                        </div>
                                        <div class="ms-auto">
                                            <h3 class="mb-0"><span class="font-14">Total:</span> <?= count($dangerStocks) ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="dashboard-top-countries mb-3 px-2">
                                    <ul class="list-group list-group-flush radius-10">

                                        <?php foreach ($dangerStocks as $dangerStock) { ?>

                                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm" >
                                                <div class="d-flex align-items-center w-100">
                                                    <div class="d-flex justify-content-between w-100" >
                                                        <h6 class="mb-0"><?= $dangerStock['menu'] ?></h6>
                                                        <div class="recap-status pe-3 ">
                                                            Sisa Stok : <?= $dangerStock['stock'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <h5 class="p-4">Overview Pesanan Hari ini</h5>
                                <hr>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table mb-0">
                                            <thead class="table-light">
                                            <tr>
                                                <th>Order#</th>
                                                <th>Meja</th>
                                                <th>Status</th>
                                                <th>Antrian ke</th>
                                                <th>Sub Total</th>
                                                <th>Total</th>
                                                <th>Dibuat Pada</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php foreach ($allTodayOrders as $todayOrder) { ?>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="ms-2">
                                                                <h6 class="mb-0 font-14">#<?=$todayOrder['id']?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?= $todayOrder['table_number'] ?></td>
                                                    <td><div class="badge rounded-pill <?=showColorClassBadge($todayOrder['status'], 'pelayan')?> p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i><?= $todayOrder['status'] ?></div></td>
                                                    <td><?= $todayOrder['queue_number'] ?></td>
                                                    <td><?='Rp. ' . number_format($todayOrder['sub_total']) ?></td>
                                                    <td><?='Rp. ' . number_format($todayOrder['total']) ?></td>
                                                    <td><?= date('d-m-Y', strtotime($todayOrder['created_at'])) ?></td>
                                                    <td>
                                                        <div class="d-flex order-actions">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalOrderOverview<?=$todayOrder['id']?>"><i class="bi bi-eye"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Modal Orders-->
                                                <div class="modal fade" id="modalOrderOverview<?=$todayOrder['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

                                                                                    <?php foreach (getOrderDetailByOrderId($todayOrder['id']) as $order_detail) { ?>

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
                                                                                <h6 class="mb-0 title-pay-info">Meja #<?=$todayOrder['table_number']?></h6>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <p class="mb-0 pay-info-value pt-1">Pesanan #<?=$todayOrder['id']?></p>
                                                                            </div>
                                                                            <div class="col-12"><hr></div>
                                                                            <div class="col-12">
                                                                                <h6 class="mb-0 title-pay-info">Sub Total</h6>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <p class="mb-0 mt-3 pay-info-value">Total Item</p>
                                                                            </div>
                                                                            <div class="col-6 text-end">
                                                                                <p class="mb-0 mt-3 pay-info-value">Rp. <?=number_format($todayOrder['sub_total'])?></p>
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
                                                                                <h6 class="mb-0 title-pay-info">Rp. <?=number_format($todayOrder['total'])?></h6>
                                                                            </div>
                                                                            <div class="col-12"><hr></div>
                                                                            <div class="col-12">
                                                                                <h6 class="mb-0 title-pay-info">Detail</h6>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <p class="mb-0 mt-3 pay-info-value">Status</p>
                                                                            </div>
                                                                            <div class="col-6 text-end">
                                                                                <p class="mb-0 mt-3 pay-info-value"><span class="badge <?=showColorClassBadge($todayOrder['status'], 'pelayan')?>"><?=$todayOrder['status']?></span></p>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <p class="mb-0 mt-1 pay-info-value">Nomor Antrian</p>
                                                                            </div>
                                                                            <div class="col-6 text-end">
                                                                                <p class="mb-0 mt-1 pay-info-value"><?=$todayOrder['queue_number']?></p>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <p class="mb-0 mt-1 pay-info-value">Pesanan Dibuat Pada</p>
                                                                            </div>
                                                                            <div class="col-6 text-end">
                                                                                <p class="mb-0 mt-1 pay-info-value"><?=date('d/m/Y', strtotime($todayOrder['created_at']))?></p>
                                                                            </div>
                                                                            <div class="col-12"><hr></div>
                                                                            <div class="col-12">
                                                                                <h6 class="mb-0 title-pay-info">Note</h6>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <p class="mb-0 pay-info-value pt-1"><?=$todayOrder['note']?></p>
                                                                            </div>
                                                                            <div class="col-12"><hr></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
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
