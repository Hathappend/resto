<?php

function updateStatus(string $status, string $table_number): bool{

    $conn = getConnection();

    try {

        $conn->beginTransaction();

        $stmt = $conn->prepare("UPDATE tables SET status = ? WHERE table_number = ?");
        $stmt->execute([$status, $table_number]);

        $conn->commit();

        return true;
    } catch (PDOException $e) {
        $conn->rollBack();
        return false;
    }

}

function getStatusByTablenumber(int $table_number): array{

    $stmt = getConnection()->prepare("SELECT status FROM tables WHERE table_number = ?");
    $stmt->execute([$table_number]);

    return $stmt->fetch(PDO::FETCH_ASSOC);

}

function findAllTables(): array{

    $stmt = getConnection()->prepare("
        SELECT t.*, r.pax FROM tables t
        LEFT JOIN 
            (
                SELECT 
                    table_number, 
                    pax
                FROM 
                    reservations
                WHERE 
                    (table_number, created_at) IN (
                        SELECT 
                            table_number, 
                            MAX(created_at)
                        FROM 
                            reservations
                        GROUP BY 
                            table_number
                    )
            ) AS r
        ON 
            t.table_number = r.table_number;");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}
