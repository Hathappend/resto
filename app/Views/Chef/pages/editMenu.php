<section id="edit-menu">
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
                                <li class="breadcrumb-item" aria-current="page"><a href="/koki">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="/menu">Daftar Menu</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Menu</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <?php if (getFlash('error')){ ?>
                    <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">Danger</h6>
                                <div class="text-white"><?=getFlash('error'); ?></div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php clearFlash('error'); ?>
                <?php } ?>

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

                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title">Edit Menu</h5>
                        <hr/>
                        <form action="/edit-menu" method="POST" enctype="multipart/form-data">
                            <?=getCsrf()->input('csrf_token');?>
                            <input type="hidden" name="id" value="<?= $menu[0]['id'] ?>">
                            <div class="form-body mt-4">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="border border-3 p-4 rounded">
                                            <div class="mb-3">
                                                <label for="inputProductTitle" class="form-label">Nama Menu</label>
                                                <input type="text" name="name" class="form-control <?= (getFlash('errors')['name'] ?? '') ? 'is-invalid' : '' ?>" id="inputProductTitle" value="<?= $menu[0]['menu'] ?? (getFlash('old')['name'] ?? '')?>" placeholder="Masukkan Nama Menu">
                                                <?php if (getFlash('errors')['name'] ?? '') { ?>
                                                    <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['name'] ?? '' ?></div>
                                                <?php } ?>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputProductDescription" class="form-label">Deskripsi</label>
                                                <textarea name="description" class="form-control" id="inputProductDescription" rows="3"><?= $menu[0]['description'] ?? (getFlash('old')['description'] ?? '')?></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputProductDescription" class="form-label">Foto Menu</label>
                                                <input name="image" id="image" class="form-control <?= (getFlash('errors')['image'] ?? '') ? 'is-invalid' : '' ?>" value="<?= $menu[0]['image'] ?>" type="file">
                                                <?php if (getFlash('errors')['image'] ?? '') { ?>
                                                    <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['image'] ?? '' ?></div>
                                                <?php } ?>
                                            </div>
                                            <div class="mb-3">
                                                <img id="showImage" src="<?= !empty($menu[0]['image']) ? "/uploads/menus/{$menu[0]['image']}" : "/assets/images/no-image-available.jpeg"  ?>" class="rounded img-thumbnail" alt="Card Image Cap">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="border border-3 p-4 rounded">
                                            <div class="row g-3">
                                                <div class="col-md-12">
                                                    <label for="inputPrice" class="form-label">Harga</label>
                                                    <input type="number" name="price" class="form-control <?= (getFlash('errors')['price'] ?? '') ? 'is-invalid' : '' ?>" inputmode="number" value="<?= $menu[0]['price'] ?? (getFlash('old')['price'] ?? '')?>" id="inputPrice" placeholder="00.00">
                                                    <?php if (getFlash('errors')['price'] ?? '') { ?>
                                                        <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['price'] ?? '' ?></div>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputCostPerPrice" class="form-label">Stok</label>
                                                    <input type="number" name="stock" class="form-control <?= (getFlash('errors')['stock'] ?? '') ? 'is-invalid' : '' ?>" id="inputCostPerPrice" value="<?=$menu[0]['stock'] ?? (getFlash('old')['stock'] ?? '')?>" placeholder="cth : 100">
                                                    <?php if (getFlash('errors')['stock'] ?? '') { ?>
                                                        <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['stock'] ?? '' ?></div>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputCostPerPrice" class="form-label">Minimal Stok</label>
                                                    <input type="number" name="min_stock" class="form-control <?= (getFlash('errors')['min_stock'] ?? '') ? 'is-invalid' : '' ?>" id="inputCostPerPrice" value="<?= $menu[0]['min_stock'] ?? (getFlash('old')['min_stock'] ?? '')?>" placeholder="cth : 100">
                                                    <?php if (getFlash('errors')['min_stock'] ?? '') { ?>
                                                        <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['min_stock'] ?? '' ?></div>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputStarPoints" class="form-label">Lama Penyajian (menit)</label>
                                                    <input type="text" name="cooking_time" class="form-control <?= (getFlash('errors')['cooking_time'] ?? '') ? 'is-invalid' : '' ?>" id="inputStarPoints" value="<?= $menu[0]['cooking_time'] ?? (getFlash('old')['cooking_time'] ?? '')?>" placeholder="cth: 45">
                                                    <?php if (getFlash('errors')['cooking_time'] ?? '') { ?>
                                                        <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['cooking_time'] ?? '' ?></div>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputProductType" class="form-label">Kategori Menu</label>
                                                    <select name="category_id" class="form-select <?= (getFlash('errors')['category_id'] ?? '') ? 'is-invalid' : '' ?>" id="inputProductType">
                                                        <option value="" selected>Pilih Kategori .. </option>
                                                        <?php foreach ($categories as $category) { ?>
                                                            <option value="<?= $category['id'] ?>" <?= (isset($menu[0]['category_id']) ? $menu[0]['category_id'] : (getFlash('old')['category_id'] ?? '')) == $category['id'] ? 'selected' : '' ?>>
                                                                <?= $category['category'] ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                    <?php if (getFlash('errors')['category_id'] ?? '') { ?>
                                                        <div class="invalid-message p-1 text-danger"><?= getFlash('errors')['category_id'] ?? '' ?></div>
                                                    <?php } ?>
                                                    <?php clearFlash('errors'); ?>
                                                    <?php clearFlash('old'); ?>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary">Simpan Menu</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end row-->
                            </div>
                        </form>
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
</section>

<script>
    function showImageByUserInput(){

        $(document).ready(function(){

            $('#image').change(function(e){

                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src', e.target.result);
                    $('#showImage').show();
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    }
    showImageByUserInput()
</script>