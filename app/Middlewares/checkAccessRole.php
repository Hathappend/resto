<?php

function checkAccessRole(): void {
    $auth = getAuth();
    $currentRoute = $_SERVER['REQUEST_URI'];
    $rolePermissions = include __DIR__ . '/../Config/RolePermissions.php';

    // Jika rute adalah publik, izinkan akses
    if (in_array($currentRoute, $rolePermissions['PUBLIC'])) {
        return;
    }

    // Jika pengguna sudah login
    if ($auth->isLoggedIn()) {
        $roles = $auth->getRoles();
        $role = array_values($roles)[0];

        // Periksa apakah role memiliki akses ke rute saat ini
        if (isset($rolePermissions[$role])) {
            $allowedRoutes = $rolePermissions[$role];

            // Cek kecocokan rute dengan pola ekspresi reguler
            foreach ($allowedRoutes as $allowedRoute) {
                // Mengubah pola rute yang diizinkan menjadi ekspresi reguler yang sesuai
                $pattern = str_replace(['\*', '([0-9a-zA-Z-]*)'], ['.*', '[0-9a-zA-Z-]+'], $allowedRoute);

                // Jika pola rute memiliki format dinamis, ganti dengan format ekspresi reguler yang sesuai
                if (preg_match("#^" . $pattern . "$#", $currentRoute)) {
                    return;
                }
            }

            // Redirect jika tidak memiliki akses
            redirectBack();
        } else {
            // Redirect jika role tidak ditemukan
            redirectBack();
        }
    } else {
        // Redirect ke login jika tidak login
        header('Location: /login');
        die();
    }
}
