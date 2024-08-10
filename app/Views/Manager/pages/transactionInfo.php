
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
                            <li class="breadcrumb-item"><a href="/manager"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a href="/manager">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Keuangan dan Transaksi</li>
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
                                            <h5 class="my-1">Rp. <?= number_format($weeklyRevenue['total_sum']) ?></h5>
                                            <p class="mb-0 font-13 <?= showClassTrends($weeklyRevenue['trend'])['text'] ?>>"><i class='bx <?= showClassTrends($weeklyRevenue['trend'])['icon'] ?> align-middle'></i><?= $weeklyRevenue['percentage']?>% 1 Minggu terakhir</p>
                                        </div>
                                        <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
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
                                        <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
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
                                        <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Total Income</p>
                                            <h5 class="mb-0">Rp. <?= number_format($totalIncome) ?></h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
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
                                            <p class="mb-0 text-secondary">Rata Rata Transaksi Per Hari</p>
                                            <h4 class="my-1"><?= round($averageOrdersPerDay) ?> orders</h4>
                                        </div>
                                        <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Info Rekap Harian</h5>
                                    <p class="mb-0 font-13 text-secondary"><i class="bx bxs-calendar"></i>in last 30 days revenue</p>
                                </div>
                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                            </div>
                            <div class="table-responsive mt-4">
                                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="table-light">
                                    <tr>
                                        <th>id</th>
                                        <th>Nama Kasir</th>
                                        <th>Total Pesanan</th>
                                        <th>Total Pendapatan</th>
                                        <th>Tipe Rekap</th>
                                        <th>DIbuat Pada</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($dailyRecaps as $dailyRecap) { ?>

                                        <tr>
                                            <td>#<?= $dailyRecap['id'] ?></td>
                                            <td><?= $dailyRecap['first_name'] . ' ' . $dailyRecap['last_name']  ?></td>
                                            <td><?= $dailyRecap['order_total'] ?></td>
                                            <td>Rp. <?= number_format($dailyRecap['revenue']) ?></td>
                                            <td><?= $dailyRecap['recap_type'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($dailyRecap['created_at'])) ?></td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Info Rekap Mingguan</h5>
                                    <p class="mb-0 font-13 text-secondary"><i class="bx bxs-calendar"></i>in last 30 days revenue</p>
                                </div>
                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                            </div>
                            <div class="table-responsive mt-4">
                                <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="table-light">
                                    <tr>
                                        <th>id</th>
                                        <th>Nama Kasir</th>
                                        <th>Total Pesanan</th>
                                        <th>Total Pendapatan</th>
                                        <th>Tipe Rekap</th>
                                        <th>DIbuat Pada</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($weeklyRecaps as $weeklyRecap) { ?>

                                        <tr>
                                            <td>#<?= $weeklyRecap['id'] ?></td>
                                            <td><?= $weeklyRecap['first_name'] . ' ' . $weeklyRecap['last_name']  ?></td>
                                            <td><?= $weeklyRecap['order_total'] ?></td>
                                            <td>Rp. <?= number_format($weeklyRecap['revenue']) ?></td>
                                            <td><?= $weeklyRecap['recap_type'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($weeklyRecap['created_at'])) ?></td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Info Rekap Bulanan</h5>
                                    <p class="mb-0 font-13 text-secondary"><i class="bx bxs-calendar"></i>in last 30 days revenue</p>
                                </div>
                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                            </div>
                            <div class="table-responsive mt-4">
                                <table id="example4" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="table-light">
                                    <tr>
                                        <th>id</th>
                                        <th>Nama Kasir</th>
                                        <th>Total Pesanan</th>
                                        <th>Total Pendapatan</th>
                                        <th>Tipe Rekap</th>
                                        <th>DIbuat Pada</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($monthlyRecaps as $monthlyRecap) { ?>

                                        <tr>
                                            <td>#<?= $monthlyRecap['id'] ?></td>
                                            <td><?= $monthlyRecap['first_name'] . ' ' . $monthlyRecap['last_name']  ?></td>
                                            <td><?= $monthlyRecap['order_total'] ?></td>
                                            <td>Rp. <?= number_format($monthlyRecap['revenue']) ?></td>
                                            <td><?= $monthlyRecap['recap_type'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($monthlyRecap['created_at'])) ?></td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">Info Rekap Tahunan</h5>
                                    <p class="mb-0 font-13 text-secondary"><i class="bx bxs-calendar"></i>in last 30 days revenue</p>
                                </div>
                                <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                            </div>
                            <div class="table-responsive mt-4">
                                <table id="example5" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="table-light">
                                    <tr>
                                        <th>id</th>
                                        <th>Nama Kasir</th>
                                        <th>Total Pesanan</th>
                                        <th>Total Pendapatan</th>
                                        <th>Tipe Rekap</th>
                                        <th>DIbuat Pada</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($yearlyRecaps as $yearlyRecap) { ?>

                                        <tr>
                                            <td>#<?= $yearlyRecap['id'] ?></td>
                                            <td><?= $yearlyRecap['first_name'] . ' ' . $yearlyRecap['last_name']  ?></td>
                                            <td><?= $yearlyRecap['order_total'] ?></td>
                                            <td>Rp. <?= number_format($yearlyRecap['revenue']) ?></td>
                                            <td><?= $yearlyRecap['recap_type'] ?></td>
                                            <td><?= date('d-m-Y', strtotime($yearlyRecap['created_at'])) ?></td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
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
