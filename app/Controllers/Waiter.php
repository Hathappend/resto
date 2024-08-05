<?php

use JetBrains\PhpStorm\NoReturn;

require __DIR__ . '/../Helpers/view.php';
require __DIR__ . '/../Models/Table.php';
require __DIR__ . '/../Models/Reservation.php';
require __DIR__ . '/../Request/reservationRequest.php';

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
        "title" => "Reservasi Meja",
        "tables" => findAllTables()
    ]);
}

function addNewReservation(): void{
//    flash('error', getAuth()->getUserId());
    if (getCsrf()->validate('csrf_token')) {
        $request = [
            "id" => \Ramsey\Uuid\Uuid::uuid4()->toString() ,
            "table_number" => (int)$_POST['table_number'] ?? '',
            "pax" => (int)$_POST['pax'] ?? '',
            "capacity" => (int)$_POST['capacity'] ?? '',
            "status" => $_POST['status'] ?? '',
            "user_id" => getAuth()->getUserId()
        ];

        flash('table_number', $request['table_number']);

        if ($request['pax'] > 0  && $request['status'] == "tersedia") {
            header('Location: /reservasi-meja');
            flash('errors', ["pax" => "Jika Mau Reservasi Ubah Status Ke Dipesan"]);
            return;
        }

        if ($request['pax'] > $request['capacity']) {
            header('Location: /reservasi-meja');
            flash('errors', ["pax" => "Jumlah Tamu Tidak Boleh Melebihi Kapasitas"]);
            return;
        }

        if ($request['pax'] == 0  && $request['status'] == "dipesan") {
            header('Location: /reservasi-meja');
            flash('errors', ["pax" => "Jumlah Tamu Wajib Diisi"]);
            return;
        }

        $validated = reservationRequest($request);

        if ($validated) {
            if ($request['pax'] == null  && $request['status'] == "tersedia") {

                updateStatus($request['status'], $request['table_number']);
                flash('success', "Meja " . $request['table_number'] . " Kembali Tersedia");

            }else {
                $saved = saveReservation($request);
                if ($saved) {
                    updateStatus($request['status'], $request['table_number']);
                    flash('success', 'Berhasil melakukan reservasi');
                    header('Location: /buat-pesanan');
                    exit();
                } else {
                    flash('error', "Error Tak Terduga");
                }
            }

        }
    }
    header('Location: /reservasi-meja');
    exit();
}
function streamReservation(): void {
    header('Content-Type: application/json');
    echo json_encode(findAllTables());
}

