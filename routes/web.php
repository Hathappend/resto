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
add('GET', '/managemen-karyawan', 'Manager', 'usersManagement', ['checkAccessRole']);
add('POST', '/managemen-karyawan/add', 'Manager', 'addUsers', ['checkAccessRole']);
add('POST', '/managemen-karyawan/edit', 'Manager', 'editUsers', ['checkAccessRole']);

//Waiter Router
add('GET', '/pelayan', 'Waiter', 'home', ['checkAccessRole']);
add('GET', '/pesanan', 'Waiter', 'order', ['checkAccessRole']);
add('GET', '/buat-pesanan', 'Waiter', 'makeOrder', ['checkAccessRole']);
add('POST', '/pelayan/buat-pesanan/add', 'Waiter', 'placeOrder', ['checkAccessRole']);
add('GET', '/pelayan/buat-pesanan/payment/id/([0-9a-zA-Z-]*)', 'Waiter', 'payment', ['checkAccessRole']);
add('GET', '/pelayan/buat-pesanan/payment/success/id/([0-9a-zA-Z-]*)', 'Waiter', 'orderPayment', ['checkAccessRole']);
add('POST', '/reservasi-meja/add', 'Waiter', 'addNewReservation', ['checkAccessRole']);
add('GET', '/reservasi-meja', 'Waiter', 'makeReservation', ['checkAccessRole']);
add('GET', '/streamTables', 'Waiter', 'streamReservation', ['checkAccessRole']);

//Cashier Router
add('GET', '/kasir', 'Cashier', 'home', ['checkAccessRole']);
add('GET', '/histori-transaksi', 'Cashier', 'transactionHistory', ['checkAccessRole']);
add('POST', '/histori-transaksi', 'Cashier', 'filterTransaction', ['checkAccessRole']);
add('GET', '/rekapitulasi', 'Cashier', 'recapOverview', ['checkAccessRole']);
add('POST', '/kasir/konfirmasi/id/([0-9a-zA-Z-]*)', 'Cashier', 'confirmOrder', ['checkAccessRole']);
add('POST', '/rekapitulasi', 'Cashier', 'transactionRecap', ['checkAccessRole']);
add('POST', '/kasir/cetak/id/([0-9a-zA-Z-]*)', 'Cashier', 'receiptPrint', ['checkAccessRole']);

//Chef Router
add('GET', '/koki', 'Chef', 'home', ['checkAccessRole']);
add('GET', '/menu', 'Chef', 'menu', ['checkAccessRole']);
add('GET', '/tambah-menu', 'Chef', 'addNewMenu', ['checkAccessRole']);
add('POST', '/tambah-menu/add', 'Chef', 'postAddNewMenu', ['checkAccessRole']);
add('GET', '/edit-menu/id/([0-9a-zA-Z-]*)', 'Chef', 'editMenu', ['checkAccessRole']);
add('POST', '/edit-menu', 'Chef', 'postEditMenu', ['checkAccessRole']);
add('GET', '/hapus-menu/id/([0-9a-zA-Z-]*)', 'Chef', 'deleteMenu', ['checkAccessRole']);
add('GET', '/kategori-menu', 'Chef', 'category', ['checkAccessRole']);
add('POST', '/kategori-menu/add', 'Chef', 'addCategory', ['checkAccessRole']);
add('POST', '/kategori-menu/edit', 'Chef', 'editCategory', ['checkAccessRole']);
add('GET', '/kategori-menu/delete/id/([0-9a-zA-Z-]*)', 'Chef', 'deleteCategory', ['checkAccessRole']);
add('POST', '/koki/konfirmasi/id/([0-9a-zA-Z-]*)', 'Chef', 'confirmOrderFromCashier', ['checkAccessRole']);
add('POST', '/koki/selesai/id/([0-9a-zA-Z-]*)', 'Chef', 'confirmOrderReady', ['checkAccessRole']);

// Profile Router
add('GET', '/profile', 'Profile', 'home', ['checkAccessRole']);
add('POST', '/profile', 'Profile', 'profileUpdate', ['checkAccessRole']);

run();