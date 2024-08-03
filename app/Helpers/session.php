<?php

function flash($key, $value = null): void {
    if ($value !== null) {
        $_SESSION['flash_' . $key] = $value;
    }
}

function getFlash($key): null|string|array {
    $flashKey = 'flash_' . $key;

    if (isset($_SESSION[$flashKey])) {
        return $_SESSION[$flashKey];
    }
    return null;
}

function clearFlash($key): void {
    $flashKey = 'flash_' . $key;
    unset($_SESSION[$flashKey]);
}

