
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <?php require __DIR__ . '/../includes/sidebar.php'?>
    <!--end sidebar wrapper -->

    <!--start header -->
    <?php require __DIR__ . '/../includes/navbar.php'?>
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
                            <li class="breadcrumb-item"><a href="/koki"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a href="/koki">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kategori Menu</li>
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

            <!--end row-->
            <div class="row">
                <div class="col-9">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-0">Orders Summary</h5>
                                </div>
                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                            </div>

                            <hr />
                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th>Order id</th>
                                        <th>Product</th>
                                        <th>Customer</th>
                                        <th>Date</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#897656</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/icons/chair.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Light Blue Chair</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Brooklyn Zeo</td>
                                        <td>12 Jul 2020</td>
                                        <td>$64.00</td>
                                        <td>
                                            <div class="d-flex align-items-center text-danger">
                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                                <span>Pending</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
                                                <a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#987549</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/icons/shoes.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Green Sport Shoes</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Martin Hughes</td>
                                        <td>14 Jul 2020</td>
                                        <td>$45.00</td>
                                        <td>
                                            <div class="d-flex align-items-center text-primary">
                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                                <span>Dispatched</span>
                                            </div>
                                        </td>
                                        <td align="center">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-transparent " data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-cog"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><button class="btn dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Kategori</button></li>
                                                <li><button class="btn dropdown-item" >Hapus Kategori</button></li>
                                            </ul>
                                        </td>

                                        <!-- Edit Category Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3 row">
                                                            <label for="inputPassword" class="col-sm-2 col-form-label">Kategori</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputPassword">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary w-100">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    <tr>
                                        <td>#685749</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/icons/headphones.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Red Headphone 07</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Shoan Stephen</td>
                                        <td>15 Jul 2020</td>
                                        <td>$67.00</td>
                                        <td>
                                            <div class="d-flex align-items-center text-success">
                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                                <span>Completed</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
                                                <a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#887459</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/icons/idea.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Mini Laptop Device</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Alister Campel</td>
                                        <td>18 Jul 2020</td>
                                        <td>$87.00</td>
                                        <td>
                                            <div class="d-flex align-items-center text-success">
                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                                <span>Completed</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
                                                <a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#335428</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/icons/user-interface.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Purple Mobile Phone</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Keate Medona</td>
                                        <td>20 Jul 2020</td>
                                        <td>$75.00</td>
                                        <td>
                                            <div class="d-flex align-items-center text-danger">
                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                                <span>Pending</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
                                                <a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#224578</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/icons/watch.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Smart Hand Watch</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Winslet Maya</td>
                                        <td>22 Jul 2020</td>
                                        <td>$80.00</td>
                                        <td>
                                            <div class="d-flex align-items-center text-primary">
                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                                <span>Dispatched</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
                                                <a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#447896</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="recent-product-img">
                                                    <img src="assets/images/icons/tshirt.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">T-Shirt Blue</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Emy Jackson</td>
                                        <td>28 Jul 2020</td>
                                        <td>$96.00</td>
                                        <td>
                                            <div class="d-flex align-items-center text-danger">
                                                <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                                <span>Pending</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
                                                <a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">

                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Total Kategori</p>
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
            <!--end row -->
        </div>
    </div>
    <!--end row-->
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
