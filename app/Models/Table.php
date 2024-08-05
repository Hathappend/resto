<?php

function updateStatus(string $status, string $table_number): bool{

    try {
        $stmt = getConnection()->prepare("UPDATE tables SET status = ? WHERE table_number = ?");
        $stmt->execute([$status, $table_number]);

        return true;
    } catch (PDOException $e) {
        return false;
    }

}

function getStatusByTablenumber(int $table_number): array{

    $stmt = getConnection()->prepare("SELECT status FROM tables WHERE table_number = ?");
    $stmt->execute([$table_number]);

    return $stmt->fetch(PDO::FETCH_ASSOC);

}

function findAllTables(): array{

    $stmt = getConnection()->prepare("SELECT tables.*, reservations.pax FROM tables LEFT JOIN reservations ON tables.table_number = reservations.table_number;");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}
