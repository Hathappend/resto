<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rukada</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>

    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <?php if (getAuth()->hasRole(\Project\PakResto\Models\Role::MANAGER)) { ?>
        <li>
            <a href="/manager">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="/info-pesanan">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Info Pesanan</div>
            </a>
        </li>
        <li>
            <a href="/info-menu">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Info Menu</div>
            </a>
        </li>
        <li>
            <a href="/info-transaksi">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Keungan dan Transaksi</div>
            </a>
        </li>
        <li>
            <a href="/managemen-karyawan">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Manajemen Karyawan</div>
            </a>
        </li>
        <?php } ?>

        <?php if (getAuth()->hasRole(\Project\PakResto\Models\Role::CASHIER)) { ?>
        <li>
            <a href="/kasir">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="/histori-transaksi">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Histori Transaksi</div>
            </a>
        </li>
        <li>
            <a href="/rekapitulasi">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Rekapitulasi</div>
            </a>
        </li>
        <?php } ?>

        <?php if (getAuth()->hasRole(\Project\PakResto\Models\Role::WAITER)) { ?>
        <li>
            <a href="/pelayan">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="/reservasi-meja">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Reservasi Meja</div>
            </a>
        </li>
        <li>
            <a href="/pesanan">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Pesanan</div>
            </a>
        </li>
        <?php } ?>

        <?php if (getAuth()->hasRole(\Project\PakResto\Models\Role::CHEF)) { ?>
        <li>
            <a href="/koki">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="/menu">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Daftar Menu</div>
            </a>
        </li>
        <li>
            <a href="/kategori-menu">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Kategori Menu</div>
            </a>
        </li>
        <?php } ?>
    </ul>
    <!--end navigation-->
</div>