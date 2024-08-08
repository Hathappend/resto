<?php

function saveOrderDetail(array $request): bool
{

    $conn = getConnection();

    try {
        $conn->beginTransaction();

        $stmt = $conn->prepare("INSERT INTO orders_details (id,orders_id , menu_id, qty) VALUES (?,?,?,?)");
        $stmt->execute([
            $request['orders_details_id'],
            $request['orders_id'],
            $request['menu_id'],
            $request['qty'],
        ]);

        $conn->commit();

        return true;
    } catch (PDOException $e) {
        $conn->rollBack();
//        throw new Exception($e->getMessage());
        return false;
    }
}

function getOrderDetailByOrderId(string $orders_id): array{

    $stmt = getConnection()->prepare("
    SELECT 
        m.menu,
        m.image,
        m.price,
        od.qty
    FROM orders_details as od 
    JOIN menus as m ON m.id = od.menu_id                                                                         
    WHERE od.orders_id =? ");
    $stmt->execute([$orders_id]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}
