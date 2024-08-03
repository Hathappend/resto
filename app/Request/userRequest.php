<?php

use Respect\Validation\Validator as v;

function userRequest(array $request): bool{

    $errors = [];

    //File Validate
    if (!empty($request['profile_img']) && !v::image()->validate($request['profile_img'])) {
        $errors['profile_img'] = "Extensi Gambar tidak valid";
    }

    if (isset($request['email']) && !v::email()->validate($request['email'])) {
        $errors['email'] = "Email Tidak Valid";
    }

    //Null Validate
    if (isset($request['email']) && !v::notEmpty()->validate($request['email'])) {
        $errors['email'] = "Email Tidak Boleh Kosong";
    }

    if (isset($request['password']) && !v::notEmpty()->validate($request['password'])) {
        $errors['password'] = "Password Tidak Boleh Kosong";
    }

    if (isset($request['first_name']) && !v::notEmpty()->validate($request['first_name'])) {
        $errors['first_name'] = "Nama Depan Tidak Boleh Kosong";
    }

    if (isset($request['address']) && !v::notEmpty()->validate($request['address'])) {
        $errors['address'] = "Alamat wajib Diisi";
    }

    if (isset($request['city']) && !v::notEmpty()->validate($request['city'])) {
        $errors['city'] = "Kota Wajib Diisi";
    }

    if (isset($request['state']) && !v::notEmpty()->validate($request['state'])) {
        $errors['state'] = "Provinsi Wajib Diisi";
    }

    if (isset($request['zip']) && !v::notEmpty()->validate($request['zip'])) {
        $errors['zip'] = "Kode Pos Wajib Diisi";
    }

    if (isset($request['old_password']) && !v::notEmpty()->validate($request['old_password'])) {
        $errors['old_password'] = "Password Lama Wajib Diisi";
    }

    if (isset($request['roles_mask']) && !v::notEmpty()->validate($request['roles_mask'])) {
        $errors['roles_mask'] = "Role Pekerjaan Wajib Diisi";
    }


    if (!$errors ) {
        return true;
    }else{
        flash('errors', $errors);
        return false;
    }
}
