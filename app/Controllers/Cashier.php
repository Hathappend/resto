<?php

require __DIR__ . '/../Helpers/view.php';

function home(): void{

    view("Cashier/index", [
        "title" => "Halaman Pelayan"
    ]);

}

function transactionHistory(): void{

    view("Cashier/pages/transactionHistory", [
        "title" => "Histori Transaksi"
    ]);

}

function recap(): void{

    view("Cashier/pages/recap", [
        "title" => "Rekapitulasi"
    ]);

}