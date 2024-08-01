<section id="make-order">
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
                                <li class="breadcrumb-item"><a href="/pelayan"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a href="/pesanan">Pesanan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Buat Pesanan</li>
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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-xl-2">
                                        <a href="ecommerce-add-new-products.html" class="btn btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>New Product</a>
                                    </div>
                                    <div class="col-lg-9 col-xl-10">
                                        <form class="float-lg-end">
                                            <div class="row row-cols-lg-auto g-2">
                                                <div class="col-12">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control ps-5" placeholder="Search Product..."> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                        <button type="button" class="btn btn-white">Sort By</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class='bx bx-chevron-down'></i>
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                        <button type="button" class="btn btn-white">Collection Type</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class='bx bxs-category'></i>
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-white">Price Range</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class='bx bx-slider'></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="btnGroupDrop1">
                                                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5>Info Pembayaran</h5>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="product-list p-3 mb-3">
                                                            <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                                <div class="col-sm-12">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="product-img">
                                                                            <img src="/assets/images/icons/chair.png" alt="" />
                                                                        </div>
                                                                        <div class="ms-2">
                                                                            <h6 class="mb-1 card-title menu-title">Tacos With Chicken Grilled</h6>
                                                                            <p class="price-label mb-0 fw-bold pt-1"><span>Rp. 250.000</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                                <div class="col-sm-12">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="product-img">
                                                                            <img src="/assets/images/icons/chair.png" alt="" />
                                                                        </div>
                                                                        <div class="ms-2">
                                                                            <h6 class="mb-1 card-title menu-title">Tacos With Chicken Grilled</h6>
                                                                            <p class="price-label mb-0 fw-bold pt-1"><span>Rp. 250.000</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                                <div class="col-sm-12">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="product-img">
                                                                            <img src="/assets/images/icons/chair.png" alt="" />
                                                                        </div>
                                                                        <div class="ms-2">
                                                                            <h6 class="mb-1 card-title menu-title">Tacos With Chicken Grilled</h6>
                                                                            <p class="price-label mb-0 fw-bold pt-1"><span>Rp. 250.000</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                                <div class="col-sm-12">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="product-img">
                                                                            <img src="/assets/images/icons/chair.png" alt="" />
                                                                        </div>
                                                                        <div class="ms-2">
                                                                            <h6 class="mb-1 card-title menu-title">Tacos With Chicken Grilled</h6>
                                                                            <p class="price-label mb-0 fw-bold pt-1"><span>Rp. 250.000</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                                                <div class="col-sm-12">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="product-img">
                                                                            <img src="/assets/images/icons/chair.png" alt="" />
                                                                        </div>
                                                                        <div class="ms-2">
                                                                            <h6 class="mb-1 card-title menu-title">Tacos With Chicken Grilled</h6>
                                                                            <p class="price-label mb-0 fw-bold pt-1"><span>Rp. 250.000</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="table-responsive p-3" >
                                                    <table class="mb-0" width="100%">
                                                        <tr>
                                                            <td>
                                                                <h6 class="mb-0 title-pay-info">Meja #OS-000354</h6>
                                                            </td>
                                                            <td align="right">
                                                                <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p class="mb-0 pay-info-value pt-1">Pesanan #8876h</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><hr></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="mb-0 title-pay-info">Item Pesanan</h6>
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
                                                                <p class="mb-0 mt-3 pay-info-value">Rp. 200.000</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p class="mb-0 mt-1 pay-info-value">Pajak</p>
                                                            </td>
                                                            <td align="right">
                                                                <p class="mb-0 mt-1 pay-info-value">Rp. 200.000</p>
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
                                                                <h6 class="mb-0 title-pay-info">Rp. 1.000.000</h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><hr></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="mb-0 title-pay-info">Metode Pembayaran</h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" class="pt-2">
                                                                <button type="button" class="btn btn-outline-primary"><i class="bx bx-user mr-1"></i>Person</button>
                                                                <button type="button" class="btn btn-outline-primary"><i class="bx bx-user mr-1"></i>Person</button>
                                                                <button type="button" class="btn btn-outline-primary"><i class="bx bx-user mr-1"></i>Person</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><hr></td>
                                                        </tr
                                                        <tr>
                                                            <td colspan="2">
                                                                <button type="button" class="btn btn-primary px-5 w-100"><i class='bx bx-user mr-1'></i>Buat Pesanan</button>
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
                    </div>
                </div>

                <div class="row product-grid mt-4">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="card">
                                    <img src="assets/images/products/01.png" class="card-img-top" alt="...">
                                    <div class="">
                                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                    </div>
                                    <div class="card-body">
                                        <span class="menu-category">Dessert</span>
                                        <h6 class="card-title menu-title cursor-pointer">Nest Shaped Chair Shaped Chair</h6>
                                        <div class="clearfix">
                                            <p class="total-ordered mb-0 float-start pt-2"><strong>134</strong>x Dipesan</p>
                                            <p class="price-label mb-0 float-end fw-bold pt-2"><span>Rp. 250.000</span></p>
                                        </div>
                                        <div class="col pt-3">
                                            <div class="input-group input-spinner">
                                                <button class="btn btn-white" type="button" id="button-plus"> + </button>
                                                <input type="text" class="form-control" value="1">
                                                <button class="btn btn-white" type="button" id="button-minus"> − </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="card">
                                    <img src="assets/images/products/01.png" class="card-img-top" alt="...">
                                    <div class="">
                                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                    </div>
                                    <div class="card-body">
                                        <span class="menu-category">Dessert</span>
                                        <h6 class="card-title menu-title cursor-pointer">Nest Shaped Chair Shaped Chair</h6>
                                        <div class="clearfix">
                                            <p class="total-ordered mb-0 float-start pt-2"><strong>134</strong> Kali Dipesan</p>
                                            <p class="price-label mb-0 float-end fw-bold pt-2"><span>Rp. 250.000</span></p>
                                        </div>
                                        <div class="col pt-3">
                                            <div class="input-group input-spinner">
                                                <button class="btn btn-white" type="button" id="button-plus"> + </button>
                                                <input type="text" class="form-control" value="1">
                                                <button class="btn btn-white" type="button" id="button-minus"> − </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="card">
                                    <img src="assets/images/products/01.png" class="card-img-top" alt="...">
                                    <div class="">
                                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                    </div>
                                    <div class="card-body">
                                        <span class="menu-category">Dessert</span>
                                        <h6 class="card-title menu-title cursor-pointer">Nest Shaped Chair Shaped Chair</h6>
                                        <div class="clearfix">
                                            <p class="total-ordered mb-0 float-start pt-2"><strong>134</strong> Kali Dipesan</p>
                                            <p class="price-label mb-0 float-end fw-bold pt-2"><span>Rp. 250.000</span></p>
                                        </div>
                                        <div class="col pt-3">
                                            <div class="input-group input-spinner">
                                                <button class="btn btn-white" type="button" id="button-plus"> + </button>
                                                <input type="text" class="form-control" value="1">
                                                <button class="btn btn-white" type="button" id="button-minus"> − </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="card">
                                    <img src="assets/images/products/01.png" class="card-img-top" alt="...">
                                    <div class="">
                                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
                                    </div>
                                    <div class="card-body">
                                        <span class="menu-category">Dessert</span>
                                        <h6 class="card-title menu-title cursor-pointer">Nest Shaped Chair Shaped Chair</h6>
                                        <div class="clearfix">
                                            <p class="total-ordered mb-0 float-start pt-2"><strong>134</strong> Kali Dipesan</p>
                                            <p class="price-label mb-0 float-end fw-bold pt-2"><span>Rp. 250.000</span></p>
                                        </div>
                                        <div class="col pt-3">
                                            <div class="input-group input-spinner">
                                                <button class="btn btn-white" type="button" id="button-plus"> + </button>
                                                <input type="text" class="form-control" value="1">
                                                <button class="btn btn-white" type="button" id="button-minus"> − </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->


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