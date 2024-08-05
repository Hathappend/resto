<?php

function saveReservation(array $request): bool{

    try {
        $stmt = getConnection()->prepare("INSERT INTO reservations (id, table_number, users_id, pax ) VALUES (?,?,?,?)");
        $stmt->execute([
            $request['id'],
            (int) $request['table_number'],
            $request['user_id'],
            (int) $request['pax'],
        ]);

        return true;
    } catch (PDOException $e) {
//        throw new Exception($e->getMessage());
        return false;
    }

}