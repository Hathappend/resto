<?php

return [
    'MANAGER' => ['/manager', '/info-pesanan', '/info-menu', '/info-transaksi', '/managemen-karyawan', '/profile', '/change-password', '/logout'],
    'REVIEWER' => ['/pelayan', '/pesanan', '/buat-pesanan', '/reservasi-meja', '/profile', '/change-password', '/logout'], //pelayan
    'MODERATOR' => ['/kasir', '/histori-transaksi', '/rekapitulasi', '/profile', '/change-password', '/logout'], //kasir
    'COORDINATOR' => ['/koki', '/menu', '/tambah-menu', '/edit-menu', '/kategort-menu', '/profile', '/change-password', '/logout'], //koki
    'PUBLIC' => ['/login'],
];