<?php

require __DIR__ . '/../Helpers/view.php';

function home(): void{

    view("Chef/index", [
        "title" => "Halaman Koki"
    ]);

}

function menu(): void{

    view("Chef/pages/menu", [
        "title" => "Daftar Menu"
    ]);

}

function addNewMenu(): void{

    view("Chef/pages/addNewMenu", [
        "title" => "Tambah Menu Baru"
    ]);

}

function editMenu(): void{

    view("Chef/pages/addNewMenu", [
        "title" => "Tambah Menu Baru"
    ]);

}

function category(): void{

    view("Chef/pages/category", [
        "title" => "Tambah Menu Baru"
    ]);

}
