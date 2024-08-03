<?php

function getRole(int $role): string{

    if ($role == \Project\PakResto\Models\Role::MANAGER) {
        $role = "Manager";
    } elseif ($role == \Project\PakResto\Models\Role::WAITER) {
        $role = "Pelayan";
    } elseif ($role == \Project\PakResto\Models\Role::CASHIER) {
        $role = "Kasir";
    } elseif ($role = \Project\PakResto\Models\Role::CHEF ){
        $role = "Koki";
    }

    return $role;
}

function getRoleWhoSignin(): string
{
    $role = array_values(getAuth()->getRoles())[0];
    if ($role == "REVIEWER") {
        $role = "Pelayan";
    } elseif ($role == "COORDINATOR") {
        $role = "Koki";
    } elseif ($role == "MODERATOR") {
        $role = "Kasir";
    } else {
        $role = "Manager";
    }

    return $role;
}