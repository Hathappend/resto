<?php

require  __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Helpers/database.php';

global $auth;
$auth = new \Delight\Auth\Auth(getConnection());

require __DIR__ . '/../routes/web.php';