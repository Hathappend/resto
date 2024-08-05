<?php

use Respect\Validation\Validator as v;

function reservationRequest(array $request): bool
{

    $errors = [];

    //int Validate
    if (isset($request['pax']) && !v::intVal()->validate($request['pax'])) {
        $errors['pax'] = "Jumlah Tamu Harus Berupa Angka ";
    }

    //Null Validate

    if (isset($request['status']) && !v::notEmpty()->validate($request['status'])) {
        $errors['status'] = "Status Wajib Diisi";
    }

    if (!$errors ) {
        return true;
    }else{
        flash('errors', $errors);
        return false;
    }
}