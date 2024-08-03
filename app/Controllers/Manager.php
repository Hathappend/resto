<?php

require __DIR__ . "/../Helpers/view.php";
require __DIR__ . "/../Helpers/role.php";
require __DIR__ . "/../Models/User.php";
require __DIR__ . "/../Request/userRequest.php";

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
