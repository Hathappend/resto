<?php

use Respect\Validation\Validator as v;

function orderRequest(array $request): bool
{

    $errors = [];

    //Null Validate
    if (empty($request)) {
        $errors['menus'] = "Pilih Menu Dulu Sebelum Menlanjutkan Pembayaran";
    }

    if (!$errors ) {
        return true;
    }else{
        flash('error', $errors);
        return false;
    }
}