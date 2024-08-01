<?php

require __DIR__ . '/../Helpers/view.php';

function home(): void{

    view("Waiter/index", [
        "title" => "Halaman Pelayan"
    ]);

}

function order(): void{

    view("Waiter/pages/order", [
        "title" => "Halaman Pesanan"
    ]);

}

function makeOrder(): void{

    view("Waiter/pages/makeOrder", [
        "title" => "Buat Pesanan"
    ]);

}

function makeReservation(): void{

    view("Waiter/pages/reservationTable", [
        "title" => "Reservasi Meja"
    ]);

}

