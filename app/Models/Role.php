<?php

namespace Project\PakResto\Models;

final class Role {

    const WAITER = \Delight\Auth\Role::REVIEWER;
    const CHEF = \Delight\Auth\Role::COORDINATOR;
    const CASHIER = \Delight\Auth\Role::MODERATOR;
    const MANAGER = \Delight\Auth\Role::MANAGER;

    private function __construct() {}

}