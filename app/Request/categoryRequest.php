<?php

use Respect\Validation\Validator as v;

function categoryRequest(array $request): bool
{

    $errors = [];

    //Null Validate
    if (isset($request['category_name']) && !v::notEmpty()->validate($request['category_name'])) {
        $errors['category_name'] = "Category Wajib Diisi";
    }

    if (!$errors ) {
        return true;
    }else{
        flash('errors', $errors);
        return false;
    }
}