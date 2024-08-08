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
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Orders</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">

                        <a href="/buat-pesanan" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Buat Pesanan</a>

                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
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

                            <?php foreach ($orders as $order) { ?>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#<?=$order['id']?></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><?= $order['table_number'] ?></td>
                                <td><div class="badge rounded-pill <?=showColorClassBadge($order['status'], 'pelayan')?> p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i><?= $order['status'] ?></div></td>
                                <td><?= $order['queue_number'] ?></td>
                                <td><?='Rp. ' . number_format($order['sub_total']) ?></td>
                                <td><?='Rp. ' . number_format($order['total']) ?></td>
                                <td><?= date('d-m-Y', strtotime($order['created_at'])) ?></td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalInfoTrans<?=$order['id']?>"><i class="bi bi-eye"></i></a>
                                        <?php if ($order['status'] == "belum bayar") { ?>

                                            <a href="/pelayan/buat-pesanan/payment/id/<?=$order['id']?>" class="ms-3"><i class="bi bi-credit-card"></i></i></a>

                                        <?php } ?>

                                    </div>
                                </td>
                            </tr>
                            <!-- Modal Confirmation Orders-->
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