<?php

require __DIR__ . "/../Helpers/view.php";
require __DIR__ . "/../Helpers/role.php";
require __DIR__ . '/../Helpers/badge.php';
require __DIR__ . '/../Models/Table.php';
require __DIR__ . '/../Models/Reservation.php';
require __DIR__ . '/../Models/Menu.php';
require __DIR__ . '/../Models/Order.php';
require __DIR__ . '/../Models/OrderDetail.php';
require __DIR__ . "/../Models/User.php";
require __DIR__ . "/../Models/Recap.php";
require __DIR__ . "/../Models/Category.php";
require __DIR__ . "/../Request/userRequest.php";

function home(): void
{
    view("Manager/index", [
        "title" => "Admin Page",
        "topMenus" => getTopMenus(),
        "monthOrderTrends" => getMonthOrderTrends(),
        "dayOrderTrends" => getDayOrderTrends(),
        "weekOrderTrends" => getWeekOrderTrends(),
        "yearOrderTrends" => getYearOrderTrends(),
        "dailyRevenue" => getDayOrderSumTrends(),
        "weeklyRevenue" => getWeekOrderSumTrends(),
        "monthlyRevenue" => getMonthOrderSumTrends(),
        "yearlyRevenue" => getYearOrderSumTrends(),
        "activeOrders" => getActiveOrders(),
        "dangerStocks" => getMenuStockInDanger(),
        "menus" => getAllMenu(),
        "menuCategories" => findAllCategory(),
        "users" => findAll(),
        "allTodayOrders" => getTodayOrders(),
    ]);
}

function orderInfo(): void
{
    view("Manager/pages/orderInfo", [
        "title" => "Info Pesanan",
        "todayOrdersIn" => getOrdersInToday(),
        "todayProcessingOrders" => getTodayOrdersProcessingByChef(),
        "todayDoneOrders" => getTodayOrdersDone(),
        "allTodayOrders" => getTodayOrders(),
        "newOrderTrends" => getOrderTrends(),
        "dayOrderTrends" => getDayOrderTrends(),

    ]);
}

function menuInfo(): void
{
    $searchQuery = $_GET['search'] ?? "";

    if ($searchQuery) {
        $result = searchMenu($searchQuery);

        if (empty($result)) {
            flash('error', "Ooopss, yang kamu cari tidak ada");
        }
    } else {
        $result = getAllMenu();
    }

    view("Manager/pages/menuInfo", [
        "title" => "Info Menu",
        "menus" => $result,
        "dangerStocks" => getMenuStockInDanger(),
        "outOfStocks" => getOutOfStock(),
        "safeStocks"=> getSafeStock(),
        "searchResults" => $result ?? null
    ]);
}

function transactionInfo(): void
{
    view("Manager/pages/transactionInfo", [
        "title" => "Info Transaksi",
        "dailyRecaps" => getRecap('day'),
        "weeklyRecaps" => getRecap('week'),
        "monthlyRecaps" => getRecap('month'),
        "yearlyRecaps" => getRecap('year'),
        "dailyRevenue" => getDayOrderSumTrends(),
        "weeklyRevenue" => getWeekOrderSumTrends(),
        "monthlyRevenue" => getMonthOrderSumTrends(),
        "yearlyRevenue" => getYearOrderSumTrends(),
        "totalIncome" => getTotalIncome(),
        "averageOrdersPerDay" => getAverageOrdersPerDay()
    ]);
}

function usersManagement(): void
{
    view("Manager/pages/employeeManagement", [
        "title" => "Keuangan dan Transaksi",
        "role" => getRoleWhoSignin(),
        "users" => findAll()
    ]);
}

function addUsers(): void
{
    if (getCsrf()->validate('csrf_token')) {

        $request = [
            "id" => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            "first_name" => $_POST['first_name'] ?? '',
            "last_name" => $_POST['last_name'] ?? null,
            "email" => $_POST['email'] ?? '',
            "password" => $_POST['password'],
            "address" => $_POST['address'] ?? '',
            "address2" => $_POST['address2'] ?? null,
            "city" => $_POST['city'] ?? '',
            "state" => $_POST['state'] ?? '',
            "zip" => $_POST['zip'] ?? '',
            "roles_mask" => $_POST['roles_mask'] ?? '',
        ];

        $validated = userRequest($request);

        if ($validated) {

            $saved = save($request);

            if ($saved) {
                sendEmail(
                    toEmail: $request['email'] ,
                    useFor: "info",
                    data: $request);

                flash('success', 'Karyawan baru berhasil di tambahkan');
            }else{
                flash('error', 'Kesalahan tidak terduga');
            }

            header('Location: /managemen-karyawan/');
            exit();

        } else {

            header('Location: /managemen-karyawan/');
        }
    }else{
        header('Location: /managemen-karyawan/');
    }
}

function editUsers(): void
{
    if (getCsrf()->validate('csrf_token')) {

        $request = [
            "id" => $_POST['id'],
            "first_name" => $_POST['first_name'] ?? '',
            "last_name" => $_POST['last_name'] ?? null,
            "email" => $_POST['email'] ?? '',
            "address" => $_POST['address'] ?? '',
            "address2" => $_POST['address2'] ?? null,
            "city" => $_POST['city'] ?? '',
            "state" => $_POST['state'] ?? '',
            "zip" => $_POST['zip'] ?? '',
            "roles_mask" => $_POST['roles_mask'] ?? '',
        ];

        $validated = userRequest($request);

        if ($validated) {

            $saved = updateInfo($request);

            if ($saved) {
                sendEmail(
                    toEmail: $request['email'] ,
                    useFor: "info",
                    data: $request);

                flash('success', 'Data Karyawan berhasil di edit');
            }else{
                flash('error', 'Kesalahan tidak terduga');
            }

            header('Location: /managemen-karyawan/');
            exit();

        } else {

            header('Location: /managemen-karyawan/');
        }
    }else{
        header('Location: /managemen-karyawan/');
    }

}
