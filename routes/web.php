<?php

require __DIR__ . '/../app/Router/router.php';

//auth router
add('GET', '/login', 'Auth', 'show', []);

// Manager Router
add('GET', '/manager', 'Manager', 'home', []);
add('GET', '/info-pesanan', 'Manager', 'orderInfo', []);
add('GET', '/info-menu', 'Manager', 'menuInfo', []);
add('GET', '/info-transaksi', 'Manager', 'transactionInfo', []);
add('GET', '/managemen-karyawan', 'Manager', 'employeeManagement', []);

//Waiter Router
add('GET', '/pelayan', 'Waiter', 'home', []);
add('GET', '/pesanan', 'Waiter', 'order', []);
add('GET', '/buat-pesanan', 'Waiter', 'makeOrder', []);
add('GET', '/reservasi-meja', 'Waiter', 'makeReservation', []);

//Cashier Router
add('GET', '/kasir', 'Cashier', 'home', []);
add('GET', '/histori-transaksi', 'Cashier', 'transactionHistory', []);
add('GET', '/rekapitulasi', 'Cashier', 'recap', []);

//Chef Router
add('GET', '/koki', 'Chef', 'home', []);
add('GET', '/menu', 'Chef', 'menu', []);
add('GET', '/tambah-menu', 'Chef', 'addNewMenu', []);
add('GET', '/edit-menu', 'Chef', 'editMenu', []);
add('GET', '/kategori-menu', 'Chef', 'category', []);

run();