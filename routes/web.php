<?php

require __DIR__ . '/../app/Router/router.php';
require __DIR__ . '/../app/Middlewares/checkAccessRole.php';

//require __DIR__ . '/../app/Middlewares/isLoggedInOrNot.php';



//auth router
add('GET', '/login', 'Auth', 'show', ['checkAccessRole']);
add('POST', '/login', 'Auth', 'login', ['checkAccessRole']);
add('GET', '/forgot-password', 'Auth', 'forgotPassword', []);
add('POST', '/forgot-password', 'Auth', 'postForgotPassword', []);
add('GET', '/reset-password', 'Auth', 'resetPassword', []);
add('POST', '/reset-password', 'Auth', 'postResetPassword', []);
add('GET', '/change-password', 'Auth', 'changePassword', ['checkAccessRole']);
add('POST', '/change-password', 'Auth', 'postChangePassword', ['checkAccessRole']);
add('GET', '/logout', 'Auth', 'logout', ['checkAccessRole']);

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

// Profile Router
add('GET', '/profile', 'Profile', 'home', ['checkAccessRole']);
add('POST', '/profile', 'Profile', 'profileUpdate', ['checkAccessRole']);

run();