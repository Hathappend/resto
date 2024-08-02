<?php

function flash($key, $value = null): void {
    if ($value !== null) {
        $_SESSION['flash_' . $key] = $value;
    }
}

function getFlash($key): ?string {
    $flashKey = 'flash_' . $key;
    if (isset($_SESSION[$flashKey])) {
        $value = $_SESSION[$flashKey];
        unset($_SESSION[$flashKey]);
        return $value;
    }
    return null;
}

