<?php

return [
    'MANAGER' => ['/manager', '/info-pesanan', '/info-menu', '/info-transaksi', '/managemen-karyawan', '/profile', '/change-password', '/logout'],
    'REVIEWER' => ['/pelayan', '/pesanan', '/buat-pesanan', '/reservasi-meja', '/profile', '/change-password', '/logout', '/pelayan/buat-pesanan/add', '/pelayan/buat-pesanan/payment/id/([0-9a-zA-Z-]*)', '/pelayan/buat-pesanan/payment/success/id/([0-9a-zA-Z-]*)'], //pelayan
    'MODERATOR' => ['/kasir', '/histori-transaksi', '/rekapitulasi', '/profile', '/change-password', '/logout'], //kasir
    'COORDINATOR' => ['/koki', '/menu', '/tambah-menu', '/edit-menu', '/kategori-menu', '/profile', '/change-password', '/logout', '/kategori-menu/add', '/edit-menu/id/([0-9a-zA-Z-]*)'], //koki
    'PUBLIC' => ['/login', '/streamTables'],
];