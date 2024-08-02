<?php

return [
    'MANAGER' => ['/manager', '/info-pesanan', '/info-menu', '/info-transaksi', '/managemen-karyawan'],
    'REVIEWER' => ['/pelayan', '/pesanan', '/buat-pesanan', '/reservasi-meja'], //pelayan
    'MODERATOR' => ['/kasir', '/histori-transaksi', '/rekapitulasi'], //kasir
    'COORDINATOR' => ['/koki', '/menu', '/tambah-menu', '/edit-menu', '/kategort-menu'], //koki
    'PUBLIC' => ['/profile', '/logout'],
];