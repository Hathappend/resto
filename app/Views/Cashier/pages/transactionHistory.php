
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
            <div class="page-content-header d-flex justify-content-between align-items-center">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">U-Resto</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="/kasir"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Histori Transaksi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
            </div>

            <div class="row" >
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pendapatan Hari ini</p>
                                            <h5 class="my-1">Rp. <?= number_format($dailyRevenue['total_sum']) ?></h5>
                                            <p class="mb-0 font-13 <?= showClassTrends($dailyRevenue['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($dailyRevenue['trend'])['icon'] ?> align-middle'></i><?= $dailyRevenue['percentage']?>% 1 Hari terakhir</p>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-purchase-tag'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 ">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pendapatan Minggu Ini</p>
                                            <h5 class="my-1">Rp. <?= number_format($weeklyRevenue['total_sum']) ?></h5>
                                            <p class="mb-0 font-13 <?= showClassTrends($weeklyRevenue['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($weeklyRevenue['trend'])['icon'] ?> align-middle'></i><?= $weeklyRevenue['percentage']?>% 1 Minggu terakhir</p>
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
                                            <p class="mb-0 text-secondary">Pendapatan Bulan ini</p>
                                            <h5 class="my-1">Rp. <?= number_format($monthlyRevenue['total_sum']) ?></h5>
                                            <p class="mb-0 font-13 <?= showClassTrends($monthlyRevenue['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($monthlyRevenue['trend'])['icon'] ?> align-middle'></i><?= $monthlyRevenue['percentage']?>% 1 Bulan terakhir</p>
                                        </div>
                                        <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-purchase-tag'></i>
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
                                            <p class="mb-0 text-secondary">Pendapatan Tahun ini</p>
                                            <h5 class="my-1">Rp. <?= number_format($yearlyRevenue['total_sum']) ?></h5>
                                            <p class="mb-0 font-13 <?= showClassTrends($yearlyRevenue['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($yearlyRevenue['trend'])['icon'] ?> align-middle'></i><?= $yearlyRevenue['percentage']?>% 1 Tahun terakhir</p>
                                        </div>
                                        <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-purchase-tag'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

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


            <div class="card">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <h6 class="mb-0 text-uppercase">Histori Transaksi</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 ">
                            <form action="/histori-transaksi" method="GET">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 mb-3 ">
                                        <input type="date" name="start_date" class="form-control" placeholder="Tanggal Awal" required/>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 mb-3">
                                        <input type="date" name="end_date" class="form-control" placeholder="Tanggal Akhir" required/>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 mb-3">
                                        <button type="submit" class="btn btn-primary float-end m-1">Filter</button>
                                        <a href="/histori-transaksi" class="btn btn-danger float-end m-1">Reset</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <hr/>
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
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($orders as $order) { ?>

                            <tr>
                                <td><?= $order['id'] ?></td>
                                <td><?= $order['table_number'] ?></td>
                                <?php $user = findById($order['cashier_id'] ?? '');?>
                                <td><div class="badge rounded-pill <?=showColorClassBadge($order['status'], 'pelayan')?> p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i><?= $order['status'] ?></div></td>
                                <td><?= ($user[0]['first_name'] ?? '') .' '. ($user[0]['last_name'] ?? '') ?></td>
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

                                                            <?php if ($order['status'] == "belum bayar" || $order['status'] == "menunggu konfirmasi") { ?>
                                                                <p><i>* Belum dapat mencetak resi, karena pesanan belum dikonfirmasi Kasir</i></p>
                                                            <?php }else{ ?>
                                                                <div class="col-12">
                                                                    <form action="/kasir/cetak/id/<?=$order['id']?>" method="POST" target="_blank">
                                                                        <button type="submit" class="btn btn-primary px-5 w-100"><i class='bx bx-printer mr-1'></i>Cetak Resi</button>
                                                                    </form>
                                                                </div>
                                                            <?php } ?>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!--end card -->
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
