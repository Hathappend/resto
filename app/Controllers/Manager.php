<?php

require __DIR__ . "/../Helpers/view.php";

function home(): void
{
    view("Manager/index", [
        "title" => "Admin Page"
    ]);
}

function orderInfo(): void
{
    view("Manager/pages/orderInfo", [
        "title" => "Info Pesanan"
    ]);
}

function menuInfo(): void
{
    view("Manager/pages/menuInfo", [
        "title" => "Info Menu"
    ]);
}

function transactionInfo(): void
{
    view("Manager/pages/transactionInfo", [
        "title" => "Info Transaksi"
    ]);
}

function employeeManagement(): void
{
    view("Manager/pages/employeeManagement", [
        "title" => "Keuangan dan Transaksi"
    ]);
}