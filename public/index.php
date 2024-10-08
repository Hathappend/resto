<?php
session_start();

require  __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Helpers/database.php';
require  __DIR__ . '/../app/Helpers/csrf.php';
require __DIR__ . '/../app/Helpers/Auth.php';
require __DIR__ . '/../app/Helpers/redirect.php';
require __DIR__ . '/../app/Helpers/session.php';
require __DIR__ . '/../app/Helpers/mail.php';
require __DIR__ . '/../app/Helpers/trends.php';
require __DIR__ . '/../app/Helpers/role.php';
require __DIR__ . '/../app/Models/User.php';
require __DIR__ . '/../routes/web.php';

//unset($_SESSION['previous_url']);
if (getAuth()->isLoggedIn()) {
    //URL for redirect back
    $_SESSION['previous_url'][] = $_SERVER['REQUEST_URI'];

    if (count($_SESSION['previous_url']) == 2) {
        array_shift($_SESSION['previous_url']);
    }
}

//var_dump($_SESSION['previous_url']);


