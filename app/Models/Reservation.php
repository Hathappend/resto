<?php

function saveReservation(array $request): bool{

    $conn = getConnection();

    try {
        $conn->beginTransaction();

        $stmt = $conn->prepare("INSERT INTO reservations (id, table_number, waiter_id, pax ) VALUES (?,?,?,?)");
        $stmt->execute([
            $request['id'],
            (int) $request['table_number'],
            $request['waiter_id'],
            (int) $request['pax'],
        ]);

        $conn->commit();

        return true;
    } catch (PDOException $e) {
        $conn->rollBack();
//        throw new Exception($e->getMessage());
        return false;
    }

}