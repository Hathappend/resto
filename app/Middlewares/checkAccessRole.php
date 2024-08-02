<?php

function checkAccessRole(): void {
    $auth = getAuth();
    $currentRoute = $_SERVER['REQUEST_URI'];
    $rolePermissions = include __DIR__ . '/../Config/RolePermissions.php';

    if (in_array($currentRoute, $rolePermissions['PUBLIC'])) {
        return;
    }

    if ($auth->isLoggedIn()) {
        $roles = $auth->getRoles();
        $role = array_values($roles)[0];

        if (isset($rolePermissions[$role]) && in_array($currentRoute, $rolePermissions[$role])) {
            return;
        } else {
            redirectBack();
        }
    } else {
        header('Location: /login');
        exit;
    }
}
