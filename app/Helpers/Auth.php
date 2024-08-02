<?php

use Delight\Auth\Auth;

function getAuth(): Auth{
    static $auth = null;
    if ($auth === null) {
        $auth = new Auth(getConnection(),null, null, false, null,null);
    }
    return $auth;
}
