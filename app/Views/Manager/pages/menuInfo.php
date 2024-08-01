<section id="menu">
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
                                <li class="breadcrumb-item"><a href="/manager"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a href="/manager">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Informasi Menu</li>
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
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Stok Habis</p>
                                        <h4 class="my-1">$4805</h4>
                                        <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
                                    </div>
                                    <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Stok Menipis</p>
                                        <h4 class="my-1">$4805</h4>
                                        <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
                                    </div>
                                    <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Stok Aman</p>
                                        <h4 class="my-1">$4805</h4>
                                        <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
                                    </div>
                                    <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <form class="">
                                            <div class="row d-flex justify-content-between">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 my-1">
                                                    <div class="position-relative my-1">
                                                        <input type="text" class="form-control ps-5" placeholder="Search Product..."> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 my-1 col-lg-6 d-flex justify-content-center flex-wrap" >
                                                    <div class="btn-group my-1" role="group" aria-label="Button group with nested dropdown">
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
                                                    <div class="btn-group my-1 mx-3" role="group" aria-label="Button group with nested dropdown">
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
                                                    <div class="btn-group my-1" role="group">
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
                <!--end row-->

                <div class="row product-grid mt-4">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img src="assets/images/products/01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <span class="menu-category">Dessert</span>
                                        <h6 class="card-title menu-title cursor-pointer">Nest Shaped Chair Shaped Chair</h6>
                                        <div class="clearfix">
                                            <p class="total-ordered mb-0 float-start pt-2"><strong>134</strong>x Dipesan</p>
                                            <p class="price-label mb-0 float-end fw-bold pt-2"><span>Rp. 250.000</span></p>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 pt-3">
                                                <button class="btn btn-outline-info w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> Info </button>
                                            </div>
                                        </div>

                                        <!-- Modal Info Menu-->
                                        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Informasi Menu</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row d-flex align-items-center">
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                <img src="assets/images/products/01.png" class="card-img-top img-fluid" alt="...">
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                <div class="table-responsive p-3" >
                                                                    <table class="mb-0" width="100%">
                                                                        <tr>
                                                                            <td colspan="2">
                                                                                <h6 class="mb-0 title-pay-info">Tacos With Chicken Griller</h6>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p class="mb-0 mt-1 pay-info-value pt-1">Dibuat pada 29-07-2024</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2"><hr></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="mb-0 title-pay-info">Deskripsi</h6>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">
                                                                                <p class="mb-0 mt-3 pay-info-value">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur debitis delectus deleniti, explicabo fugit id ipsum labore laboriosam laudantium nam nisi pariatur quas quis quisquam quo quod ratione totam!</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2"><hr></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="mb-0 title-pay-info">Info Detail</h6>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p class="mb-0 mt-3 pay-info-value">Kategori</p>
                                                                            </td>
                                                                            <td align="right">
                                                                                <p class="mb-0 mt-3 pay-info-value">Main Course</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p class="mb-0 mt-1 pay-info-value">Harga</p>
                                                                            </td>
                                                                            <td align="right">
                                                                                <p class="mb-0 mt-1 fw-bold pay-info-value">Rp. 200.000</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p class="mb-0 mt-1 pay-info-value">Lama Penyajiam</p>
                                                                            </td>
                                                                            <td align="right">
                                                                                <p class="mb-0 mt-1 pay-info-value">45 Menit</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2"><hr></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="mb-0 title-pay-info">Info Stok</h6>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p class="mb-0 mt-3 pay-info-value">Sisa Stok</p>
                                                                            </td>
                                                                            <td align="right">
                                                                                <p class="mb-0 mt-3 pay-info-value">45 porsi</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p class="mb-0 mt-1 pay-info-value">Status</p>
                                                                            </td>
                                                                            <td align="right">
                                                                                <p class="mb-0 mt-1 pay-info-value">Aman</p>
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

                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
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
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-3">
                                                <button class="btn btn-primary w-100" type="button" > Edit </button>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-3">
                                                <button class="btn btn-outline-info w-100" type="button" > Info </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
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
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-3">
                                                <button class="btn btn-primary w-100" type="button" > Edit </button>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-3">
                                                <button class="btn btn-outline-info w-100" type="button" > Info </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
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
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-3">
                                                <button class="btn btn-primary w-100" type="button" > Edit </button>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-3">
                                                <button class="btn btn-outline-info w-100" type="button" > Info </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
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
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-3">
                                                <button class="btn btn-primary w-100" type="button" > Edit </button>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-3">
                                                <button class="btn btn-outline-info w-100" type="button" > Info </button>
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