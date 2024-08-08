<?php

use JetBrains\PhpStorm\NoReturn;

require __DIR__ . '/../Helpers/view.php';
require __DIR__ . '/../Helpers/badge.php';
require __DIR__ . '/../Models/Table.php';
require __DIR__ . '/../Models/Reservation.php';
require __DIR__ . '/../Models/Menu.php';
require __DIR__ . '/../Models/Order.php';
require __DIR__ . '/../Models/OrderDetail.php';
require __DIR__ . '/../Request/reservationRequest.php';
require __DIR__ . '/../Request/orderRequest.php';

function home(): void{

    view("Waiter/index", [
        "title" => "Halaman Pelayan",
        "orders" => getAllOrders(),
        "todayOrders" => getTodayOrders(),
        "newOrderTrends" => getOrderTrends(),
        "orderMonthTrends" => getMonthOrderTrends(),
        "reservationTrends" => getReservationTrends(),
        "dailyPaxTrends" => getDailyPaxTrends(),
        "topMenus" => getTopMenus(),
        "dangerStocks" => getMenuStockInDanger()
    ]);

}

function order(): void{

    view("Waiter/pages/order", [
        "title" => "Halaman Pesanan",
        "orders" => getAllOrders()
    ]);

}

function makeOrder(): void{

    view("Waiter/pages/makeOrder", [
        "title" => "Buat Pesanan",
        "menus" => getAllMenu()
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

        $findTables = findAllTables();

        $request = [
            "id" => \Ramsey\Uuid\Uuid::uuid4()->toString() ,
            "table_number" => (int)$_POST['table_number'] ?? '',
            "pax" => (int)$_POST['pax'] ?? '',
            "capacity" => (int)$_POST['capacity'] ?? '',
            "status" => $_POST['status'] ?? '',
            "waiter_id" => getAuth()->getUserId()
        ];

        flash('table_number', $request['table_number']);

        foreach ($findTables as $findTable) {
            if (isset($findTable['table_number']) && isset($findTable['status'])) {
                if ($findTable['table_number'] == $request['table_number'] && $findTable['status'] == 'dipesan' && $request['status'] != 'tersedia') {
                    header('Location: /reservasi-meja');
                    flash('errorInModal', "Meja Tidak Dapat Dipesan karena Masih Belum Tersedia");
                    exit;
                }
            }

            if ($request['pax'] > 0  && $request['status'] == "tersedia" && $findTable['status'] == 'dipesan') {
                header('Location: /reservasi-meja');
                flash('errorInModal', "Jika Mau Mengubah Status ke 'Tersedia' kosongkan Jumlah Tamu");
                return;
            }

        }

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
                    createSession('reservation', $request);
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

/**
 * @throws Exception
 */
function placeOrder(): void{

    if (getCsrf()->validate('csrf_token')) {

        $menus = json_decode($_POST['menus'], true);
        $orders_id = date('YmdHis');
        $firstLoop = true;
        $successOrder = false;

        $midtransConfig = require __DIR__ . '/../../config/midtrans.php';

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = $midtransConfig['MIDTRANS_SERVER_KEY'];
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        if (empty($menus)) {
            flash('error', "Pilih Menu Dulu Sebelum Menlanjutkan Pembayaran");
        }

        foreach ($menus as $id => $menu) {

            $request = [
                "orders_id" =>$orders_id ,
                "reservation_id" => getSession('reservation')['id'] ?? '',
                "menu_id" => $id ?? '',
                "qty" => (int)$menu['quantity'] ?? '',
                "status" => "belum bayar",
                "orders_details_id" => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                "sub_total" => (int)$_POST['totalItem'],
                "total" => (int)$_POST['totalOverall'],
                "note" => $_POST['note'] ?? null,
            ];

            if ($request['reservation_id'] == null) {
                flash('error', "Meja Belum Di pesan");
                break;
            }

            $validated = orderRequest($request);

            if ($validated) {

                if ($firstLoop) {

                    $params = array(
                        'transaction_details' => array(
                            'order_id' => $request['orders_id'],
                            'gross_amount' => $request['total'],
                        )
                    );

                    $snapToken = \Midtrans\Snap::getSnapToken($params);

                    $request['snap_token'] = $snapToken;

                    $successOrder = saveOrder($request);
                    $firstLoop = false;
                }

                $successOrder = saveOrderDetail($request);

                if (!$successOrder) {
                    flash('error', "Kesalahan Tak Terduga");
                    break;
                }

            }else{
                break;
            }
        }

        if ($successOrder) {
            header("Location: /pelayan/buat-pesanan/payment/id/{$orders_id}");
            flash('success', "Pemesanan Berhasil, Silahkan Lakukan Pembayaran");
            exit();
        }
    }
    header('Location: /buat-pesanan');
    exit();
}

function payment(string $id): void{

    view("Waiter/pages/payment", [
        "title" => "Pembayaran",
        "orders" => getOrderById($id),
        "orders_details"=> getOrderDetailByOrderId($id),
    ]);

}

function orderPayment(string $id): void{

    $orders = getOrderById($id)[0];

    $request = [
        "orders_id" =>$orders['id'] ,
        "status" => "menunggu konfirmasi" ,
        "snap_token" => $orders['snap_token'] ,
    ];

    $paymentSuccess = saveOrderPayment($request);

    if ($paymentSuccess) {
        flash('paymentSuccess', "Pembayaran Berhasil 'Menunggu Konfirmasi Kasir'");
    }else{
        flash('error', "Kesalahan Tak Terduga");
    }

    header("Location: /pelayan/buat-pesanan/payment/id/{$orders['id']}");
    exit();

}
