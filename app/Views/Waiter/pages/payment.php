<section id="payment">

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
                                <li class="breadcrumb-item" aria-current="page"><a href="/buat-pesanan">Buat Pesanan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
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

                <?php if (getFlash('success') || getFlash('paymentSuccess')){ ?>
                    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">Success</h6>
                                <div class="text-white"><?= getFlash('success') ?? getFlash('paymentSuccess') ?></div>
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
                                <div class="text-white"><?= getFlash('error');?></div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php clearFlash('error'); ?>
                <?php } ?>


                <?php if (getFlash('paymentSuccess')) { ?>

                    <section id="invoice">
                        <div class="card text-center p-2">
                            <div class="card-body">

                                <i class="bi bi-check2-circle fs-1 text-success"></i><br>
                                <h4 class="card-title">Pembayaran Berhasil!</h4>

                                <p class="card-text pt-3">Terimakasih sudah bertransaksi di Pak Resto, Kami tunggu ordernya lagi <i class="bi bi-heart-fill text-danger"></i></p>

                                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInfoTrans">Detail Transaksi</button>
                                <a href="/buat-pesanan" class="btn btn-outline-secondary">Pesan Lagi</a>

                            </div>
                        </div>
                    </section>


                <!-- Modal -->
                <div class="modal fade" id="modalInfoTrans" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

                                                    <?php foreach ($orders_details as $orders_detail) { ?>

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
                                                        <h6 class="mb-0 title-pay-info">Meja #<?=$orders[0]['table_number']?></h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0 pay-info-value pt-1">Pesanan #<?=$orders[0]['id']?></p>
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
                                                        <p class="mb-0 mt-3 pay-info-value">Rp. <?=number_format($orders[0]['sub_total'])?></p>
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
                                                        <h6 class="mb-0 title-pay-info">Rp. <?=number_format($orders[0]['total'])?></h6>
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
                                                        <p class="mb-0 mt-3 pay-info-value"><?=$orders[0]['status']?></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0 mt-1 pay-info-value">Nomor Antrian</p>
                                                    </td>
                                                    <td align="right">
                                                        <p class="mb-0 mt-1 pay-info-value"><?=$orders[0]['queue_number']?></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0 mt-1 pay-info-value">Pesanan Dibuat Pada</p>
                                                    </td>
                                                    <td align="right">
                                                        <p class="mb-0 mt-1 pay-info-value"><?=date('d/m/Y', strtotime($orders[0]['created_at']))?></p>
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
                                                        <p class="mb-0 mt-3 pay-info-value"><?=$orders[0]['note']?></p>
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

                <?php }?>

                <?php clearFlash('paymentSuccess'); ?>

                <?php if ($orders[0]['status'] == "belum bayar") { ?>
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="product-list p-3 mb-3">

                                                <?php foreach ($orders_details as $orders_detail) { ?>

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
                                                    <h6 class="mb-0 title-pay-info">Meja #<?=$orders[0]['table_number']?></h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-0 pay-info-value pt-1">Pesanan #<?=$orders[0]['id']?></p>
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
                                                    <p class="mb-0 mt-3 pay-info-value">Rp. <?=number_format($orders[0]['sub_total'])?></p>
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
                                                    <h6 class="mb-0 title-pay-info">Rp. <?=number_format($orders[0]['total'])?></h6>
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
                                                    <p class="mb-0 mt-3 pay-info-value"><?=$orders[0]['note']?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" id="pay-button" class="btn btn-primary px-5 w-100"><i class='bx bx-user mr-1'></i>Bayar Sekarang</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

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

<?php $getClientKey = require __DIR__ . '/../../../../config/midtrans.php'  ?>


<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?=$getClientKey['MIDTRANS_CLIENT_KEY']?>"></script>
<script type="text/javascript">
  document.getElementById('pay-button').onclick = function(){
    // SnapToken acquired from previous steps
    snap.pay('<?=$orders[0]['snap_token']?>', {
      // Optional
      onSuccess: function(result){
        window.location.href="/pelayan/buat-pesanan/payment/success/id/<?= $orders[0]['id'] ?>"
        <?php clearFlash('orders'); ?>
        <?php destroySession('reservation'); ?>

      },
      // Optional
      onPending: function(result){
        /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
      },
      // Optional
      onError: function(result){
        /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
      }
    });
  };
</script>

