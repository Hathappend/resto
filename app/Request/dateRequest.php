<?php

use Respect\Validation\Validator as v;

function dateRequest(array $request): bool{

    $errors = [];

    if (isset($request['start_date']) && !v::notEmpty()->validate($request['start_date'])) {
        $errors['start_date'] = "Tanggal Awal Wajib Diisi";
    }

    if (isset($request['end_date']) && !v::notEmpty()->validate($request['end_date'])) {
        $errors['end_date'] = "Tanggal Akhir Wajib Diisi";
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
