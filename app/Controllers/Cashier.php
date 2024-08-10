<?php

require __DIR__ . '/../Helpers/view.php';
require __DIR__ . '/../Helpers/badge.php';
require __DIR__ . '/../Helpers/date.php';
//require __DIR__ . '/../Models/User.php';
require __DIR__ . '/../Models/Order.php';
require __DIR__ . '/../Models/OrderDetail.php';
require __DIR__ . '/../Models/Recap.php';
require __DIR__ . '/../Request/dateRequest.php';

function home(): void{

    view("Cashier/index", [
        "title" => "Halaman Pelayan",
        "topMenus" => getTopMenus(),
        "todayOrders" => getTodayOrdersWaitConfirm(),
        "newOrderTrends" => getOrderTrends(),
        "monthOrderTrends" => getMonthOrderTrends(),
        "dayOrderTrends" => getDayOrderTrends(),
        "weekOrderTrends" => getWeekOrderTrends(),
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

    $start_date = $_GET['start_date'] ?? null;
    $end_date = $_GET['end_date'] ?? null;

    $orders = getOrdersByDateRange($start_date, $end_date);
    if ($start_date && $end_date) {
        $orders = getOrdersByDateRange($start_date, $end_date);
        if (!empty($orders)) {
            flash("success", "Berhasil filter data dari tanggal '{$start_date}' sampai '{$end_date}'");
        } else {
            flash("error", "Data dari tanggal '{$start_date}' sampai '{$end_date}' tidak ditemukan");
            $orders = getAllOrdersHistory();
        }
    } else {
        $orders = getAllOrdersHistory();
    }

    view("Cashier/pages/transactionHistory", [
        "title" => "Histori Transaksi",
        "orders" => $orders,
        "dailyRevenue" => getDayOrderSumTrends(),
        "weeklyRevenue" => getWeekOrderSumTrends(),
        "monthlyRevenue" => getMonthOrderSumTrends(),
        "yearlyRevenue" => getYearOrderSumTrends(),
    ]);

}

//function filterTransaction(): void{
//
//    if (getCsrf()->validate('csrf_token')) {
//
//        $request = [
//            "start_date" => $_POST['start_date'] ?? '',
//            "end_date" => $_POST['end_date'] ?? '',
//        ];
//
//        $
//
//    }
//
//}

/**
 * @throws Exception
 */
function recapOverview(): void{

    $filteredParams = array_filter($_GET, function($value) {
        return !empty($value);
    });

    createSession('filteredParams', $filteredParams);

    $orders = [];

    $getValueNotNull = $filteredParams['dayValue'] ?? $filteredParams['weekValue'] ?? $filteredParams['monthValue'] ?? ($filteredParams['yearValue'] ?? '');
    if (($filteredParams['recapType'] ?? null) && $getValueNotNull) {
        $orders = filterOrdersByDate($filteredParams['recapType'], $getValueNotNull);
    }

    $filteredParams = [
        "day" => isset($filteredParams['dayValue']) ? getDateFromDay($filteredParams['dayValue']) : null,
        "week" => isset($filteredParams['weekValue']) ? getDateFromWeek($filteredParams['weekValue']) : null,
        "month" => isset($filteredParams['monthValue']) ? getDateFromMonth($filteredParams['monthValue']) : null,
        "year" => $filteredParams['yearValue'] ?? null,
        "recapType" => $filteredParams['recapType'] ?? null,
    ];

    view("Cashier/pages/recap", [
        "title" => "Rekapitulasi",
        "orders" => $orders,
        "recapType" => $filteredParams['recapType'],
        "filterValue" =>  $filteredParams['day'] ?? $filteredParams['month'] ?? $filteredParams['week'] ?? $filteredParams['year'],
        "dailyRecaps" => getRecap('day'),
        "weeklyRecaps" => getRecap('week'),
        "monthlyRecaps" => getRecap('month'),
        "yearlyRecaps" => getRecap('year'),
    ]);

}


function transactionRecap(): void{

    $filteredParams = getSession('filteredParams');

    if (getCsrf()->validate('csrf_token')) {

        $request = [
            "id" => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            "cashier_id" => getAuth()->getUserId(),
            "recapType" =>$filteredParams['recapType'],
            "filterValue" =>  $filteredParams['dayValue'] ?? $filteredParams['weekValue'] ?? $filteredParams['monthValue'] ?? $filteredParams['yearValue']
        ];

        $saved = saveRecap($request);

        if ($saved) {
            flash("success", "Rekapitulasi {$filteredParams['recapType']} Berhasil Disimpan");
            destroySession('filteredParams');
        }else{
            flash("error", "Kesalahan Tidak Terduga");
        }

    }

    header('Location: /rekapitulasi');
    exit();

}

function receiptPrint(string $id): void{

    require __DIR__ . '/../Models/Menu.php';

    $orders = getOrderById($id);
    $order_details = getOrderDetailByOrderId($id);
    $cashier = findById($orders[0]['cashier_id'])[0];

    require __DIR__ . '/../Views/Cashier/pages/receiptPrint.php';

    echo "<script>window.print()</script>";


}

