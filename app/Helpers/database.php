<?php

$pdo = null;

function getConnection(): ?PDO
{
    global $pdo;

    if ($pdo === null) {
        $config = require_once __DIR__ . '/../../config/database.php';
        $dsn = $config['url'];
        $username = $config['username'];
        $password = $config['password'];

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
            exit;
        }
    }

    return $pdo;
}
