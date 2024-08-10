
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

                                                                <div class="table-respons p-3" >
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
                                                                                <p class="mb-0 mt-3 pay-info-value">Status</p>
                                                                            </td>
                                                                            <td align="right">
                                                                                <p class="mb-0 mt-3 pay-info-value">
                                                                                    <span class="badge <?=showColorClassBadge($todayOrder['status'], 'pelayan')?>"><?=$todayOrder['status']?></span>
                                                                                </p>
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
                                                    <h4 class="my-1"><?= $newOrderTrends['new_order'] ?></h4>
                                                    <p class="mb-0 font-13 <?= showClassTrends($newOrderTrends['trend'])['text'] ?>"><i class='bx <?= showClassTrends($newOrderTrends['trend'])['icon'] ?> align-middle'></i><?= $newOrderTrends['percentage']?>% dari 15-30 mnt terakhir</p>
                                                </div>
                                                <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-purchase-tag'></i>
                                                </div>
                                            </div>
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
                                                    <p class="mb-0 text-secondary">Total Pesanan Hari Ini</p>
                                                    <h4 class="my-1"><?= $dayOrderTrends['new_order'] ?></h4>
                                                    <p class="mb-0 font-13 <?= showClassTrends($dayOrderTrends['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($dayOrderTrends['trend'])['icon'] ?> align-middle'></i><?= $dayOrderTrends['percentage']?>% 1 hari terakhir</p>
                                                </div>
                                                <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-purchase-tag'></i>
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
                                                    <p class="mb-0 text-secondary">Total Pesanan Minggu Ini</p>
                                                    <h4 class="my-1"><?= $weekOrderTrends['new_order'] ?></h4>
                                                    <p class="mb-0 font-13 <?= showClassTrends( $weekOrderTrends['trend'])['text'] ?>>"><i class='bx <?= showClassTrends( $weekOrderTrends['trend'])['icon'] ?> align-middle'></i><?=  $weekOrderTrends['percentage']?>% 1 Minggu terakhir</p>
                                                </div>
                                                <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-purchase-tag'></i>
                                                </div>
                                            </div>
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
                                                    <p class="mb-0 text-secondary">Total Pesanan Bulan Ini</p>
                                                    <h4 class="my-1"><?= $monthOrderTrends['new_order'] ?></h4>
                                                    <p class="mb-0 font-13 <?= showClassTrends($monthOrderTrends['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($monthOrderTrends['trend'])['icon'] ?> align-middle'></i><?= $monthOrderTrends['percentage']?>% 1 Bulan terakhir</p>
                                                </div>
                                                <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-purchase-tag'></i>
                                                </div>
                                            </div>
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
