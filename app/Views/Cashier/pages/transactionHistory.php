
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
            <div class="row" >
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pendapatan Hari ini</p>
                                            <h4 class="my-1">$4805</h4>
                                            <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pendapatan Bulan ini</p>
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pendapatan Tahun ini</p>
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pendapatan Tahun ini</p>
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
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pendapatan Tahun ini</p>
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
                </div>
            </div>
            <!--end row-->

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
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 mb-3 ">
                                    <input type="text" class="form-control datepicker" placeholder="Tanggal Awal"/>
                                </div>
                                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 mb-3">
                                    <input type="text" class="form-control datepicker" placeholder="Tanggal Akhir"/>
                                </div>
                                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 mb-3">
                                    <button type="button" class="btn btn-primary float-end">Filter</button>
                                </div>
                            </div>
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
