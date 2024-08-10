<section id="chef">

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
                                <li class="breadcrumb-item active" aria-current="page">Info Pesanan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Pesanan Baru</p>
                                        <h4 class="my-1"><?= $newOrderTrends['new_order'] ?></h4>
                                        <p class="mb-0 font-13 <?= showClassTrends($newOrderTrends['trend'])['text'] ?>"><i class='bx <?= showClassTrends($newOrderTrends['trend'])['icon'] ?> align-middle'></i><?= $newOrderTrends['percentage']?>% dari 15-30 mnt terakhir</p>
                                    </div>
                                    <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
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
                                        <p class="mb-0 text-secondary">Pesanan Diproses</p>
                                        <h4 class="my-1"><?= count($todayProcessingOrders) ?></h4>
                                    </div>
                                    <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
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
                                        <p class="mb-0 text-secondary">Total Pesanan</p>
                                        <h4 class="my-1"><?= $dayOrderTrends['new_order'] ?></h4>
                                        <p class="mb-0 font-13 <?= showClassTrends($dayOrderTrends['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($dayOrderTrends['trend'])['icon'] ?> align-middle'></i><?= $dayOrderTrends['percentage']?>% 1 hari terakhir</p>
                                    </div>
                                    <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center p-2">
                                    <div>
                                        <h5>List Pesanan Hari Ini</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="customers-list p-3 mb-3">

                                <?php foreach ($todayOrdersIn as $todayOrder) { ?>

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

                                            <div class="dropdown">
                                                <button class="list-inline-item bg-transparent border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <ul class="dropdown-menu">

                                                    <?php if ($todayOrder['status'] == "belum bayar") { ?>
                                                        <li>
                                                            <button class="dropdown-item" onclick="window.location.href='/pelayan/buat-pesanan/payment/id/<?=$todayOrder['id']?>'">
                                                                Bayar
                                                            </button>
                                                        </li>
                                                    <?php } ?>

                                                    <li>
                                                        <button data-bs-toggle="modal" data-bs-target="#modalOrderInfo<?=$todayOrder['id']?>" class="dropdown-item">
                                                            Info
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalOrderInfo<?=$todayOrder['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                                            <p class="mb-0 mt-3 pay-info-value"><span class="badge <?=showColorClassBadge($todayOrder['status'], 'pelayan')?>"><?=$todayOrder['status']?></span></p>
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
                                                                            <form action="/koki/konfirmasi/id/<?=$todayOrder['id']?>" method="POST" >
                                                                                <?=getCsrf()->input('csrf_token');?>
                                                                                <button type="submit" class="btn btn-primary px-5 w-100"><i class='bx bx-send mr-1'></i>Siapkan Pesanan Sekarang</button>
                                                                            </form>
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

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" >
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center p-2">
                                    <div>
                                        <h5>Pesanan Sedang Diproses Hari ini</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="customers-list p-3 mb-3">

                                <?php foreach ($todayProcessingOrders as $todayOrder) { ?>

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

                                            <div class="dropdown">
                                                <button class="list-inline-item bg-transparent border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <button data-bs-toggle="modal" data-bs-target="#modalOrderProcessConfirm<?=$todayOrder['id']?>" class="dropdown-item">
                                                            Info
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalOrderProcessConfirm<?=$todayOrder['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                                            <p class="mb-0 mt-3 pay-info-value"><span class="badge <?=showColorClassBadge($todayOrder['status'], 'pelayan')?>"><?=$todayOrder['status']?></span></p>
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
                                                                            <form action="/koki/selesai/id/<?=$todayOrder['id']?>" method="POST" >
                                                                                <?=getCsrf()->input('csrf_token');?>
                                                                                <button type="submit" class="btn btn-primary px-5 w-100"><i class='bx bx-check-double mr-1'></i>Pesanan Selesai</button>
                                                                            </form>
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
                    <div class="col-6">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center p-2">
                                    <div>
                                        <h5>Pesanan Siap dan Diantar Pelayan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="customers-list p-3 mb-3">

                                <?php foreach ($todayOrdersReadyAndDelivery as $todayOrder) { ?>

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

                                            <div class="dropdown">
                                                <button class="list-inline-item bg-transparent border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <button data-bs-toggle="modal" data-bs-target="#modalOrderProcessConfirm<?=$todayOrder['id']?>" class="dropdown-item">
                                                            Info
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalOrderProcessConfirm<?=$todayOrder['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                                            <p class="mb-0 mt-3 pay-info-value"><span class="badge <?=showColorClassBadge($todayOrder['status'], 'pelayan')?>"><?=$todayOrder['status']?></span></p>
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
                    <div class="col-6">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center p-2">
                                    <div>
                                        <h5>Pesanan Selesai Hari ini</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="customers-list p-3 mb-3">

                                <?php foreach ($todayDoneOrders as $todayOrder) { ?>

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

                                            <div class="dropdown">
                                                <button class="list-inline-item bg-transparent border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <button data-bs-toggle="modal" data-bs-target="#modalOrderProcessConfirm<?=$todayOrder['id']?>" class="dropdown-item">
                                                            Info
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalOrderProcessConfirm<?=$todayOrder['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                                            <p class="mb-0 mt-3 pay-info-value"><span class="badge <?=showColorClassBadge($todayOrder['status'], 'pelayan')?>"><?=$todayOrder['status']?></span></p>
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

</section>