
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
            <div class="card shadow-none bg-transparent border-bottom border-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <h4 class="mb-3 mb-md-0">Audience Overview</h4>
                        </div>
                        <div class="col-md-9">
                            <form class="float-md-end">
                                <div class="row row-cols-md-auto g-lg-3">
                                    <label for="inputFromDate" class="col-md-2 col-form-label text-md-end">From Date</label>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control" id="inputFromDate" />
                                    </div>
                                    <label for="inputToDate" class="col-md-2 col-form-label text-md-end">To Date</label>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control" id="inputToDate" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-none bg-transparent">
                <div class="card-body">
                    <div id="chart1"></div>
                </div>
            </div>
            <div class="row" >
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Pesanan Harian</p>
                                        <h4 class="my-1">$4805</h4>
                                        <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
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
                                            <p class="mb-0 text-secondary">Pesanan Mingguan</p>
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
                                        <p class="mb-0 text-secondary">Pesanan Bulanan</p>
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
                                        <p class="mb-0 text-secondary">Pesanan Tahunan</p>
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
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Pendapatan Harian</p>
                                            <h4 class="my-1">$4805</h4>
                                            <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
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
                                            <h4 class="my-1">$4805</h4>
                                            <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
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
                                            <h4 class="my-1">$4805</h4>
                                            <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
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
                                            <h4 class="my-1">$4805</h4>
                                            <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
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
                                            <h4 class="my-1">$4805</h4>
                                            <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
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
                                            <h4 class="my-1">$4805</h4>
                                            <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
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
                                            <p class="mb-0 text-secondary">Kategori Menu</p>
                                            <h4 class="my-1">$4805</h4>
                                            <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
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
                                            <p class="mb-0 text-secondary">Perlu Re-stok</p>
                                            <h4 class="my-1">$4805</h4>
                                            <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
                                        </div>
                                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
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
                                            <h6 class="mb-0">Kategori dengan Kontribusi Paling Tinggi</h6>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover align-items-center">
                                        <thead class="table-light">
                                        <tr>
                                            <th>Country</th>
                                            <th>Income</th>
                                            <th>Trend</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-ca me-2"></i> USA</td>
                                            <td>$4,586</td>
                                            <td><span id="trendchart1"></span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-us me-2"></i>Canada</td>
                                            <td>$2,089</td>
                                            <td><span id="trendchart2"></span></td>
                                        </tr>

                                        <tr>
                                            <td><i class="flag-icon flag-icon-in me-2"></i>India</td>
                                            <td>$3,039</td>
                                            <td><span id="trendchart3"></span></td>
                                        </tr>

                                        <tr>
                                            <td><i class="flag-icon flag-icon-gb me-2"></i>UK</td>
                                            <td>$2,309</td>
                                            <td><span id="trendchart4"></span></td>
                                        </tr>

                                        <tr>
                                            <td><i class="flag-icon flag-icon-de me-2"></i>Germany</td>
                                            <td>$7,209</td>
                                            <td><span id="trendchart5"></span></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Jumlah Karyawan</p>
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
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" >
                    <div class="row">
                        <div class="col-12" >
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
                                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                        <div class="col-sm-12">
                                            <div class="d-flex align-items-center">
                                                <div class="product-img">
                                                    <img src="/assets/images/icons/chair.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1">Tacos With Chicken Grilled</h6>
                                                    <p class="mb-0">33 Dipesan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <div class="product-img">
                                                    <img src="assets/images/icons/user-interface.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1">Honor Mobile 7x</h6>
                                                    <p class="mb-0">$159.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <h6 class="mb-1">$3570.00</h6>
                                            <p class="mb-0">148 Sales</p>
                                        </div>
                                        <div class="col-sm">
                                            <div id="chart6"></div>
                                        </div>
                                    </div>
                                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <div class="product-img">
                                                    <img src="assets/images/icons/watch.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1">Hand Watch</h6>
                                                    <p class="mb-0">$250.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <h6 class="mb-1">$3650.00</h6>
                                            <p class="mb-0">122 Sales</p>
                                        </div>
                                        <div class="col-sm">
                                            <div id="chart7"></div>
                                        </div>
                                    </div>
                                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <div class="product-img">
                                                    <img src="assets/images/icons/idea.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1">Mini Laptop</h6>
                                                    <p class="mb-0">$260.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <h6 class="mb-1">$6320.00</h6>
                                            <p class="mb-0">452 Sales</p>
                                        </div>
                                        <div class="col-sm">
                                            <div id="chart8"></div>
                                        </div>
                                    </div>
                                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <div class="product-img">
                                                    <img src="assets/images/icons/tshirt.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1">Slim-T-Shirt</h6>
                                                    <p class="mb-0">$112.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <h6 class="mb-1">$2360.00</h6>
                                            <p class="mb-0">572 Sales</p>
                                        </div>
                                        <div class="col-sm">
                                            <div id="chart9"></div>
                                        </div>
                                    </div>
                                    <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <div class="product-img">
                                                    <img src="assets/images/icons/headphones.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1">Smart Headphones</h6>
                                                    <p class="mb-0">$360.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <h6 class="mb-1">$9840.00</h6>
                                            <p class="mb-0">275 Sales</p>
                                        </div>
                                        <div class="col-sm">
                                            <div id="chart10"></div>
                                        </div>
                                    </div>
                                    <div class="row border mx-0 py-2 radius-10 cursor-pointer">
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <div class="product-img">
                                                    <img src="assets/images/icons/shoes.png" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1">Green Sports Shoes</h6>
                                                    <p class="mb-0">$410.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <h6 class="mb-1">$3840.00</h6>
                                            <p class="mb-0">265 Sales</p>
                                        </div>
                                        <div class="col-sm">
                                            <div id="chart11"></div>
                                        </div>
                                    </div>
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
                                            <h5 class="mb-0">Top countries</h5>
                                        </div>
                                        <div class="ms-auto">
                                            <h3 class="mb-0"><span class="font-14">Total Visits:</span> 9587</h3>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="dashboard-top-countries mb-3 px-2">
                                    <ul class="list-group list-group-flush radius-10">
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
                                            <div class="d-flex align-items-center">
                                                <div class="font-20"><i class="flag-icon flag-icon-in"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-0">India</h6>
                                                </div>
                                            </div>
                                            <div class="ms-auto">647</div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
                                            <div class="d-flex align-items-center">
                                                <div class="font-20"><i class="flag-icon flag-icon-us"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-0">United States</h6>
                                                </div>
                                            </div>
                                            <div class="ms-auto">435</div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
                                            <div class="d-flex align-items-center">
                                                <div class="font-20"><i class="flag-icon flag-icon-vn"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-0">Vietnam</h6>
                                                </div>
                                            </div>
                                            <div class="ms-auto">287</div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
                                            <div class="d-flex align-items-center">
                                                <div class="font-20"><i class="flag-icon flag-icon-au"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-0">Australia</h6>
                                                </div>
                                            </div>
                                            <div class="ms-auto">432</div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
                                            <div class="d-flex align-items-center">
                                                <div class="font-20"><i class="flag-icon flag-icon-dz"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-0">Angola</h6>
                                                </div>
                                            </div>
                                            <div class="ms-auto">345</div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
                                            <div class="d-flex align-items-center">
                                                <div class="font-20"><i class="flag-icon flag-icon-ax"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-0">Aland Islands</h6>
                                                </div>
                                            </div>
                                            <div class="ms-auto">134</div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
                                            <div class="d-flex align-items-center">
                                                <div class="font-20"><i class="flag-icon flag-icon-ar"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-0">Argentina</h6>
                                                </div>
                                            </div>
                                            <div class="ms-auto">147</div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center radius-10 mb-2 shadow-sm">
                                            <div class="d-flex align-items-center">
                                                <div class="font-20"><i class="flag-icon flag-icon-be"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-0">Belgium</h6>
                                                </div>
                                            </div>
                                            <div class="ms-auto">210</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <h3 class="mb-0">78.49%</h3>
                                    <p class="mb-0">Persentase Pesanan Tepat Waktu</p>
                                </div>
                                <div class="ms-auto">
                                    <div id="bounce-rate"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card radius-10 w-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h5 class="mb-1">Overview Pesanan Hari ini</h5>
                                            <p class="mb-0 font-13 text-secondary"><i class="bx bxs-calendar"></i>in last 30 days revenue</p>
                                        </div>
                                        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                                    </div>
                                    <div class="table-responsive mt-4">
                                        <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                                            <thead class="table-light">
                                            <tr>
                                                <th>Payment Name</th>
                                                <th>Date & Time</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                                            <p class="mb-0 font-13 text-secondary">Refrence Id #8547846</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 10, 2021</td>
                                                <td>+256.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-success w-100">Completed</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
                                                            <p class="mb-0 font-13 text-secondary">Refrence Id #9653248</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 12, 2021</td>
                                                <td>+566.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
                                                            <p class="mb-0 font-13 text-secondary">Refrence Id #7689524</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 14, 2021</td>
                                                <td>+636.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-danger w-100">Declined</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from John Roman</h6>
                                                            <p class="mb-0 font-13 text-secondary">Refrence Id #8335884</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 15, 2021</td>
                                                <td>+246.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-success w-100">Completed</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-7.png" class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                                                            <p class="mb-0 font-13 text-secondary">Refrence Id #7865986</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 16, 2021</td>
                                                <td>+876.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-8.png" class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                                                            <p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 18, 2021</td>
                                                <td>+536.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-success w-100">Completed</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-9.png" class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from James Caviness</h6>
                                                            <p class="mb-0 font-13 text-secondary">Refrence Id #3775420</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 18, 2021</td>
                                                <td>+536.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-success w-100">Completed</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-10.png" class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Peter Costanzo</h6>
                                                            <p class="mb-0 font-13 text-secondary">Refrence Id #3768920</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 19, 2021</td>
                                                <td>+536.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-success w-100">Completed</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-11.png" class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Johnny Seitz</h6>
                                                            <p class="mb-0 font-13 text-secondary">Refrence Id #9673520</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 20, 2021</td>
                                                <td>+86.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-danger w-100">Declined</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-12.png" class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                                                            <p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 18, 2021</td>
                                                <td>+536.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-success w-100">Completed</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-13.png" class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                                                            <p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 22, 2021</td>
                                                <td>+854.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-14.png" class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Thomas Wheeler</h6>
                                                            <p class="mb-0 font-13 text-secondary">Refrence Id #4278620</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 18, 2021</td>
                                                <td>+536.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-success w-100">Completed</div>
                                                </td>
                                            </tr>
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
