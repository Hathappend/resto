<?php

require __DIR__ . '/../app/Router/router.php';
require __DIR__ . '/../app/Middlewares/checkAccessRole.php';
//require __DIR__ . '/../app/Middlewares/isLoggedInOrNot.php';



//auth router
add('GET', '/login', 'Auth', 'show', []);
add('POST', '/login', 'Auth', 'login', []);

// Manager Router
add('GET', '/manager', 'Manager', 'home', ['checkAccessRole']);
add('GET', '/info-pesanan', 'Manager', 'orderInfo', ['checkAccessRole']);
add('GET', '/info-menu', 'Manager', 'menuInfo', ['checkAccessRole']);
add('GET', '/info-transaksi', 'Manager', 'transactionInfo', ['checkAccessRole']);
add('GET', '/managemen-karyawan', 'Manager', 'employeeManagement', ['checkAccessRole']);

//Waiter Router
add('GET', '/pelayan', 'Waiter', 'home', ['checkAccessRole']);
add('GET', '/pesanan', 'Waiter', 'order', ['checkAccessRole']);
add('GET', '/buat-pesanan', 'Waiter', 'makeOrder', ['checkAccessRole']);
add('GET', '/reservasi-meja', 'Waiter', 'makeReservation', ['checkAccessRole']);

//Cashier Router
add('GET', '/kasir', 'Cashier', 'home', ['checkAccessRole']);
add('GET', '/histori-transaksi', 'Cashier', 'transactionHistory', ['checkAccessRole']);
add('GET', '/rekapitulasi', 'Cashier', 'recap', ['checkAccessRole']);

//Chef Router
add('GET', '/koki', 'Chef', 'home', ['checkAccessRole']);
add('GET', '/menu', 'Chef', 'menu', ['checkAccessRole']);
add('GET', '/tambah-menu', 'Chef', 'addNewMenu', ['checkAccessRole']);
add('GET', '/edit-menu', 'Chef', 'editMenu', ['checkAccessRole']);
add('GET', '/kategori-menu', 'Chef', 'category', ['checkAccessRole']);

// Manager Router
add('GET', '/profile', 'Profile', 'home', ['checkAccessRole']);

run();