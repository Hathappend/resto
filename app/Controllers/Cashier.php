<?php

require __DIR__ . '/../Helpers/view.php';
require __DIR__ . '/../Helpers/badge.php';
require __DIR__ . '/../Models/Menu.php';
require __DIR__ . '/../Models/User.php';
require __DIR__ . '/../Models/Order.php';
require __DIR__ . '/../Models/OrderDetail.php';

function home(): void{

    view("Cashier/index", [
        "title" => "Halaman Pelayan",
        "topMenus" => getTopMenus(),
        "todayOrders" => getTodayOrdersWaitConfirm(),
    ]);

}

function confirmOrder(string $id): void{

    if (getCsrf()->validate('csrf_token')) {

        $confirmed = confirm($id);
        if ($confirmed) {
            flash('success', "Berhasil Mengkonfirmasi Pesanan #{$id}");
        } else {
            flash('error', "Error Tak Terduga");
        }
    }
    header('Location: /kasir');
    exit();

}

function transactionHistory(): void{

    view("Cashier/pages/transactionHistory", [
        "title" => "Histori Transaksi",
        "orders" => getAllOrdersHistory(),
    ]);

}

function recap(): void{

    view("Cashier/pages/recap", [
        "title" => "Rekapitulasi"
    ]);

}