<?php

use Respect\Validation\Validator as v;

function menuRequest(array $request): bool{

    $errors = [];

    if (isset($request['image']) && !v::stringType()->validate($request['image'])) {
        if (!v::image()->validate($request['image'])) {
            $errors['image'] = "Extensi Gambar tidak valid";
        }
    }

    //Null Validate
    if (isset($request['name']) && !v::notEmpty()->validate($request['name'])) {
        $errors['name'] = "Nama Menu Wajib Diisi";
    }

    if (isset($request['price']) && !v::notEmpty()->validate($request['price'])) {
        $errors['price'] = "Harga Menu Wajib Diisi";
    }

    if (isset($request['stock']) && !v::notEmpty()->validate($request['stock'])) {
        $errors['stock'] = "Stok Tidak Wajib Diisi";
    }

    if (isset($request['min_stock']) && !v::notEmpty()->validate($request['min_stock'])) {
        $errors['min_stock'] = "Minimal Stok Wajib Diisi";
    }

    if (isset($request['cooking_time']) && !v::notEmpty()->validate($request['cooking_time'])) {
        $errors['cooking_time'] = "Lama Penyajian Wajib Diisi";
    }

    if (isset($request['category_id']) && !v::notEmpty()->validate($request['category_id'])) {
        $errors['category_id'] = "Kategori Menu Wajib Diisi";
    }

//    if (isset($request['image']) && !v::notEmpty()->validate($request['image'])) {
//        $errors['image'] = "Foto Menu Wajib Diisi";
//    }

    if (!$errors ) {
        return true;
    }else{
        flash('errors', $errors);
        return false;
    }
}
