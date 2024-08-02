
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
                            <li class="breadcrumb-item active" aria-current="page">Managemen Karyawan</li>
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
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Total Karyawan</p>
                                            <h5 class="mb-0">$52,945</h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Pelayan</p>
                                            <h5 class="mb-0">$52,945</h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                            <div class="card radius-10 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0">Kasir</p>
                                            <h5 class="mb-0">$52,945</h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
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
                                            <p class="mb-0">Koki</p>
                                            <h5 class="mb-0">$52,945</h5>
                                        </div>
                                        <div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center p-2">
                                <div>
                                    <h5>Menunggu Persetujuan</h5>
                                </div>
                            </div>
                        </div>
                        <div class="customers-list p-3 mb-3">
                            <div class="customers-list-item d-flex align-items-center border-top border-bottom p-2">
                                <div class="">
                                    <img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="" />
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">Emy Jackson</h6>
                                    <p class="mb-0 font-13 text-secondary">10 Items</p>
                                </div>
                                <div class="list-inline d-flex customers-contacts ms-auto" >
                                    <div class="d-flex align-items-center text-danger list-inline-item pe-3">
                                        <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1" ></i>
                                        <span>Pending</span>
                                    </div>
                                    <button type="button" class="btn bg-transparent list-inline-item btn-sm " data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bx bx-info-circle bx-burst-hover"></i>
                                    </button>

                                </div>

                                <!-- Modal Confirmation Orders-->
                                <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Konfirmasi Pesanan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row d-flex align-items-center">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
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
                                                                                    <div class="qty d-flex align-items-center" >
                                                                                        <p class="price-label mb-0 fw-bold pt-1"><span>Rp. 250.000</span></p>
                                                                                        <p class="mx-3 pt-1 mb-0">x2</p>
                                                                                    </div>
                                                                                    <span class="estimate pt-1"><i>Estimasi proses menu hingga jadi 45 min </i></span>
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
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                        <div class="table-responsive p-3" >
                                                            <table class="mb-0" width="100%">
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h6 class="mb-0 title-pay-info">Meja #OS-000354</h6>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-0 mt-1 pay-info-value pt-1">Pesanan #8876h</p>
                                                                    </td>
                                                                    <td align="right">
                                                                        <p class="mb-0 mt-1 pay-info-value pt-1">29-07-2024</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-0 mt-1 pay-info-value pt-1">Antrian</p>
                                                                    </td>
                                                                    <td align="right">
                                                                        <p class="mb-0 mt-1 pay-info-value pt-1">01</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><hr></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="mb-0 title-pay-info">Detail Pesanan</h6>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-0 mt-3 pay-info-value">Nama Pelanggan</p>
                                                                    </td>
                                                                    <td align="right">
                                                                        <p class="mb-0 mt-3 pay-info-value">Suripuddin</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-0 mt-1 pay-info-value">Waktu Pesanan Masuk</p>
                                                                    </td>
                                                                    <td align="right">
                                                                        <p class="mb-0 mt-1 pay-info-value">10.00 AM</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-0 mt-1 pay-info-value">Estimasi</p>
                                                                    </td>
                                                                    <td align="right">
                                                                        <p class="mb-0 mt-1 pay-info-value">45 min</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-0 mt-1 pay-info-value">Status</p>
                                                                    </td>
                                                                    <td align="right">
                                                                        <p class="mb-0 mt-1 pay-info-value">Belum diproses</p>
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
                                                                    <td colspan="2">
                                                                        <p class="mb-0 mt-1 pay-info-value">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cumque delectus eligendi esse nisi quas veniam. Architecto aut dignissimos earum.</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><hr></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <button type="button" class="btn btn-primary px-5 w-100"><i class='bx bx-user mr-1'></i>Proses Pesanan</button>
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
                            <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                <div class="">
                                    <img src="assets/images/avatars/avatar-23.png" class="rounded-circle" width="46" height="46" alt="" />
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">Laura Madison</h6>
                                    <p class="mb-0 font-13 text-secondary">laura_01@xyz.com</p>
                                </div>
                                <div class="list-inline d-flex customers-contacts ms-auto">
                                    <div class="d-flex align-items-center text-primary list-inline-item pe-3">
                                        <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                        <span>Siap Dihidangkan</span>
                                    </div>
                                    <button type="button" class="btn btn-primary list-inline-item btn-sm d-flex justify-content-center align-items-center"><i class="bx bx-check"></i>
                                </div>
                            </div>
                            <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                <div class="">
                                    <img src="assets/images/avatars/avatar-24.png" class="rounded-circle" width="46" height="46" alt="" />
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-1 font-14">Shoan Stephen</h6>
                                    <p class="mb-0 font-13 text-secondary">s.stephen@xyz.com</p>
                                </div>
                                <div class="list-inline d-flex customers-contacts ms-auto">
                                    <div class="d-flex align-items-center text-success list-inline-item pe-3">
                                        <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                        <span>Selesai</span>
                                    </div>
                                    <button type="button" class="btn btn-primary list-inline-item btn-sm d-flex justify-content-center align-items-center"><i class="bx bx-check"></i>
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
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-12 col-sm-5 col-md-5 col-lg-4 col-xl-4">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <h6 class="mb-0 text-uppercase">Daftar Karyawan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                    <div class="employee-action float-end">
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
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">+ Karyawan</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal add new employee-->
                            <div class="modal fade" id="addEmployee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body p-0 m-0">
                                            <div class="border-top border-0 border-4 border-primary">
                                                <div class="card-body p-5">
                                                    <div class="card-title d-flex align-items-center">
                                                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                                        </div>
                                                        <h5 class="mb-0 text-primary">Registrasi Karyawan</h5>
                                                    </div>
                                                    <hr>
                                                    <form class="row g-3">
                                                        <div class="col-md-6">
                                                            <label for="inputFirstName" class="form-label">First Name</label>
                                                            <input type="email" class="form-control" id="inputFirstName">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputLastName" class="form-label">Last Name</label>
                                                            <input type="password" class="form-control" id="inputLastName">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEmail" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="inputEmail">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputPassword" class="form-label">Password</label>
                                                            <input type="password" class="form-control" id="inputPassword">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="inputAddress" class="form-label">Address</label>
                                                            <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3"></textarea>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="inputAddress2" class="form-label">Address 2</label>
                                                            <textarea class="form-control" id="inputAddress2" placeholder="Address 2..." rows="3"></textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputCity" class="form-label">City</label>
                                                            <input type="text" class="form-control" id="inputCity">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="inputState" class="form-label">State</label>
                                                            <select id="inputState" class="form-select">
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label for="inputZip" class="form-label">Zip</label>
                                                            <input type="text" class="form-control" id="inputZip">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="inputJob" class="form-label">Role Pekerjaan</label>
                                                            <select id="inputJob" class="form-select" aria-label="Default select example">
                                                                <option selected>Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <hr>
                                                            <button type="submit" class="btn btn-primary px-5">Simpan</button>
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr/>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <button class="btn btn-outline-warning">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sydney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sydney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>2009/10/22</td>
                                        <td>$114,500</td>
                                    </tr>
                                    <tr>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                    </tr>
                                    <tr>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr>
                                        <td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                    </tr>
                                    <tr>
                                        <td>Thor Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2013/08/11</td>
                                        <td>$98,540</td>
                                    </tr>
                                    <tr>
                                        <td>Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
                                    </tr>
                                    <tr>
                                        <td>Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr>
                                        <td>Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>2012/06/01</td>
                                        <td>$115,000</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013/02/01</td>
                                        <td>$75,650</td>
                                    </tr>
                                    <tr>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end card -->
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
