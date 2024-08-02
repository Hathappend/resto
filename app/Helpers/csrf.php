<?php

require __DIR__ . '/libs/php-csrf.php';

function getCsrf(): CSRF {
    static $csrf = null;
    if ($csrf === null) {
        $csrf = new CSRF();
    }
    return $csrf;
}

