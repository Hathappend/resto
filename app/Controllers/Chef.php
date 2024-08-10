<?php

use JetBrains\PhpStorm\NoReturn;

require __DIR__ . '/../Helpers/view.php';
require __DIR__ . '/../Helpers/file.php';
require __DIR__ . "/../Helpers/image.php";
require __DIR__ . "/../Helpers/badge.php";
require __DIR__ . '/../Models/Category.php';
require __DIR__ . '/../Models/Menu.php';
require __DIR__ . '/../Models/Order.php';
require __DIR__ . '/../Models/OrderDetail.php';
require __DIR__ . '/../Request/menuRequest.php';
require __DIR__ . '/../Request/categoryRequest.php';

use Respect\Validation\Validator as v;

function home(): void{

    view("Chef/index", [
        "title" => "Halaman Koki",
        "todayOrders" => getTodayOrdersWaitConfirmChef(),
        "todayProcessingOrders" => getTodayOrdersProcessingByChef(),
        "todayDoneOrders" => getTodayOrdersDone(),
        "topMenus" => getTopMenus(),
        "newOrderTrends" => getOrderTrends(),
        "dayOrderTrends" => getDayOrderTrends(),
        "menuStockInDanger" => getMenuStockInDanger(),
        "allTodayOrders" => getTodayOrders(),
        "dangerStocks" => getMenuStockInDanger()

    ]);

}
function confirmOrderFromCashier(string $id){

    if (getCsrf()->validate('csrf_token')) {

        $confirmed = confirmOrderByChef($id);
        if ($confirmed) {
            flash('success', "Berhasil Mengkonfirmasi Pesanan #{$id}");
        } else {
            flash('error', "Error Tak Terduga");
        }
    }
    header('Location: /koki');
    exit();

}

function confirmOrderReady(string $id){

    if (getCsrf()->validate('csrf_token')) {

        $confirmed = confirmOrderDoneByChef($id);
        if ($confirmed) {
            flash('success', "Pesanan #{$id} Sudah Siap Disajikan");
        } else {
            flash('error', "Error Tak Terduga");
        }
    }
    header('Location: /koki');
    exit();

}

function menu(): void{

    $searchQuery = $_GET['search'] ?? "";

    if ($searchQuery) {
        $result = searchMenu($searchQuery);

        if (empty($result)) {
            flash('errorSearch', "Ooopss, yang kamu cari tidak ada");
        }
    } else {
        $result = getAllMenu();
    }

    view("Chef/pages/menu", [
        "title" => "Daftar Menu",
        "menus" => $result ?? null,
        "dangerStocks" => getMenuStockInDanger(),
        "outOfStocks" => getOutOfStock(),
        "safeStocks"=> getSafeStock()
    ]);

}

function addNewMenu(): void{

    view("Chef/pages/addNewMenu", [
        "title" => "Tambah Menu Baru",
        "categories" => findAllCategory()
    ]);

}

/**
 * @throws \League\Flysystem\FilesystemException
 */
function postAddNewMenu(): void{

    if (getCsrf()->validate('csrf_token')) {

        $request = [
            "id" => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            "name" => $_POST['name'] ?? '',
            "description" => $_POST['description'] ?? '',
            "image" => $_FILES['image']['tmp_name'] ?? null,
            "price" => (int)$_POST['price'] ?? '',
            "stock" => (int)$_POST['stock'] ?? '',
            "min_stock" => (int)$_POST['min_stock'] ?? '',
            "cooking_time" => (int)$_POST['cooking_time'] ?? '',
            "category_id" => $_POST['category_id'] ?? null,
        ];

        $validated = menuRequest($request);

        if ($validated && isset($request['image'])) {

                $imgName = uniqid() . '_' . basename($_FILES['image']['name']);

                $path = "/uploads/menus/{$imgName}";

                $image = image()->read($request['image']);

                $image->resize(400, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                $fileContent = $image->encodeByExtension('jpg');

                $saved = saveMenu($request, $imgName);

                if ($saved) {

                    filesystem()->write($path, $fileContent);

                    flash('success', "Menu Baru berhasil di Tambahkan");
                }else{
                    flash('error', "Error Tak Teduga");
                }



        }

        header('Location: /tambah-menu');
        flash('image_errors', ['image' => "Foto Menu Tidak Boleh Kosong"]);
        flash('old', $request);
        exit();
    }
}

function editMenu(string $id): void{

    view("Chef/pages/editMenu", [
        "title" => "Edit Menu",
        "menu" => getMenuById($id),
        "categories" => findAllCategory()
    ]);

}

function postEditMenu(): void{

    if (getCsrf()->validate('csrf_token')) {

        $find = getMenuById($_POST['id'])[0];

        $request = [
            "id" => $_POST['id'],
            "menu" => $_POST['name'] ?? '',
            "description" => $_POST['description'] ?? '',
            "image" => $_FILES['image']['tmp_name'] ?? $find['image'],
            "price" => (int)$_POST['price'] ?? '',
            "stock" => (int)$_POST['stock'] ?? '',
            "min_stock" => (int)$_POST['min_stock'] ?? '',
            "cooking_time" => (int)$_POST['cooking_time'] ?? '',
            "category_id" => $_POST['category_id'] ?? null,
        ];

        $validated = menuRequest($request);

        if ($validated) {

            if (!empty($_FILES['image']['tmp_name'])) {

                $imgName = uniqid() . '_' . basename($_FILES['image']['name']);
                $path = "/uploads/menus/{$imgName}";

                $image = image()->read($request['image']);

                $image->resize(400, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                $fileContent = $image->encodeByExtension('jpg');

                filesystem()->write($path, $fileContent);
            } else {
                $imgName = $find['image'];
            }

            $updated = updateMenu($request, $imgName);


                if ($updated) {

                    flash('success', "Menu berhasil di Edit");
                }else{
                    flash('error', "Error Tak Teduga");
                }

        }

        header("Location: /edit-menu/id/{$_POST['id']}");
        flash('old', $request);
        exit();
    }else{
        header("Location: /kon");
    }

}

function category(): void{

    view("Chef/pages/category", [
        "title" => "Tambah Menu Baru",
        "categories" => findAllCategory()
    ]);

}
function addCategory(): void{

    if (getCsrf()->validate('my-token')) {
        $request = [
            "id" => \Ramsey\Uuid\Uuid::uuid4()->toString() ,
            "category_name" => $_POST['category_name'] ?? '',
        ];

        $validated = categoryRequest($request);

        if ($validated) {

            $saved = saveCategory($request);
            if ($saved) {
                flash('success', 'Kategori Baru Berhasil ditambahkan');
            } else {
                flash('error', "Kesalahan Tidak Terduga");
            }
        }
    }
    header('Location: /kategori-menu');
    exit();

}

function editCategory(): void{

    if (getCsrf()->validate('csrf_token')) {
        $request = [
            "id" => $_POST['id'] ,
            "category" => $_POST['category'] ?? '',
        ];

        $validated = categoryRequest($request);

        if ($validated) {

            $saved = updateCategory($request);
            if ($saved) {
                flash('success', 'Kategori Berhasil diubah');
            } else {
                flash('error', "Kesalahan Tidak Terduga");
            }
        }
    }
    header('Location: /kategori-menu');
    exit();

}

function deleteCategory(string $id): void{

    deleteCategoryById($id);

    flash('success', "Kategori Berhasil dihapus");


    header('Location: /kategori-menu');
    exit();

}

