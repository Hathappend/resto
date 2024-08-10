<section id="reservation">
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
                <div class="page-content-header d-flex justify-content-between align-items-center">
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Pak Resto</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="/pelayan"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Reservasi Meja</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="d-flex ms-auto">
                        <div class="dropdown pe-2">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Sort By
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>

                    </div>
                    <!--end breadcrumb-->
                </div>

                <?php if (getFlash('success')){ ?>
                    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">Success</h6>
                                <div class="text-white"><?= getFlash('success') ?></div>
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


                <div class="row mt-4">

                    <?php foreach ($tables as $table) { ?>

                        <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                            <button class="btn btn-transparent" data-bs-toggle="modal" data-bs-target="#addReservation<?=$table['table_number']?>">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <?= $table['status'] == "dipesan" ? "<i class='text-primary' data-feather='check-circle'></i>" : '' ?>
                                        <p class="mb-0 mt-3">Meja <?=$table['table_number']?> </p>
                                        <p class="mb-0">Kapasitas : <?=$table['capacity']?> </p>
                                    </div>
                                </div>
                            </button>
                        </div>

                    <!-- Modal -->
                    <div class="modal fade" id="addReservation<?=$table['table_number']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Buat Reservasi Baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container p-3">

                                        <?php if (getFlash('errorInModal')){ ?>
                                            <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 text-white">Danger</h6>
                                                        <div class="text-white"><?= getFlash('errorInModal');?></div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        <?php } ?>

                                        <form action="/reservasi-meja/add" method="POST">
                                            <?=getCsrf()->input('csrf_token');?>
                                            <input type="hidden" name="table_number" value="<?=$table['table_number']?>">
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Meja</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="table_number" class="form-control" id="inputPassword3" value="<?= $table['table_number'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Reservasi</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" id="inputPassword3" value="<?= date('Y-m-d') ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Waktu Reservasi</label>
                                                <div class="col-sm-9">
                                                    <input type="time" class="form-control" value="<?= date('H:i') ?>" id="inputPassword3" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Kapasitas</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="capacity" inputmode="numeric" value="<?= $table['capacity'] ?>" class="form-control" id="capacity" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Jumlah Tamu</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="pax" inputmode="numeric" class="form-control bg-light <?= (getFlash('errors')['pax'] ?? '') ? 'is-invalid' : '' ?>" value="<?=getStatusByTablenumber($table['table_number'])["status"] == 'dipesan' ? $table['pax'] : 0?>" id="inputPassword3">
                                                    <?php if (getFlash('errors')['pax'] ?? '') { ?>
                                                        <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['pax'] ?? '' ?></div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Status</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select bg-light <?= (getFlash('errors')['status'] ?? '') ? 'is-invalid' : '' ?>" name="status" aria-label="Default select example">
                                                        <option value="" selected>Open this select menu</option>
                                                        <option value="dipesan" <?=getStatusByTablenumber($table['table_number'])["status"] == "dipesan" ? 'selected' : ''?>>dipesan</option>
                                                        <option value="tersedia" <?=getStatusByTablenumber($table['table_number'])["status"] == "tersedia" ? 'selected' : ''?>>tersedia</option>
                                                    </select>
                                                    <?php if (getFlash('errors')['status'] ?? '') { ?>
                                                        <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['status'] ?? '' ?></div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-primary w-100 mt-3 ">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php } ?>

                    <?php if (getFlash('errors') || getFlash('errorInModal')) {?>
                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var myModalElement = document.getElementById('addReservation<?=getFlash('table_number')?>');
                            var addReservation = new bootstrap.Modal(myModalElement);
                            addReservation.show();
                        });
                    </script>
                    <?php } ?>

                    <?php clearFlash('errors'); ?>
                    <?php clearFlash('errorInModal'); ?>

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

<script>
    const eventSource = new EventSource('/streamTables');

    eventSource.onmessage = function(event) {
        const tables = JSON.parse(event.data);

        let html = '';
        tables.forEach(table => {
            html += `
                        <button class="btn btn-transparent" data-bs-toggle="modal" data-bs-target="#addReservation${table.table_number}">
                            <div class="card text-center">
                                <div class="card-body">
                                    ${table.status === "dipesan" ? "<i class='text-primary' data-feather='check-circle'></i>" : ''}
                                    <p class="mb-0 mt-3">Meja ${table.table_number}</p>
                                    <p class="mb-0">Kapasitas: ${table.capacity}</p>
                                </div>
                            </div>
                        </button>
                    `;
        });

        document.getElementById('reservationsTables').innerHTML = html;
    };

    eventSource.onerror = function(error) {
        console.error('SSE error:', error);
    };
</script>