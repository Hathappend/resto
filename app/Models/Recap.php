<?php

/**
 * @throws Exception
 */
function saveRecap(array $request):bool {

    var_dump(recapAggregate($request));

    $conn = getConnection();

    try {
        $conn->beginTransaction();

        $recap = recapAggregate($request);

        $stmt = $conn->prepare("INSERT INTO transaction_recap (id, cashier_id, order_total, revenue, recap_type) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            $request['id'],
            $request['cashier_id'],
            $recap['order_total'],
            $recap['revenue'],
            $request['recapType'],
        ]);

        $conn->commit();

        return true;

    } catch (PDOException $e) {
        $conn->rollBack();

        return false;
    }
}

function recapAggregate(array $request): array {

    $query = "
        SELECT 
            COUNT(o.id) AS order_total, 
            SUM(o.total) AS revenue
        FROM orders AS o
    ";

    // Append the WHERE clause based on the filter type
    switch ($request['recapType']) {
        case 'day':
            $query .= "WHERE DATE(o.created_at) = ? ";
            break;
        case 'week':
            list($year, $week) = explode('-W', $request['filterValue']);
            $query .= "WHERE YEAR(o.created_at) = ? AND WEEK(o.created_at, 1) = ? ";
            break;
        case 'month':
            list($year, $month) = explode('-', $request['filterValue']);
            $query .= "WHERE YEAR(o.created_at) = ? AND MONTH(o.created_at) = ? ";
            break;
        case 'year':
            $query .= "WHERE YEAR(o.created_at) = ? ";
            break;
        default:
            throw new Exception("Rekap tipe tidak valid.");
    }

    $stmt = getConnection()->prepare($query);
    if ($request['recapType'] == 'week' || $request['recapType'] == 'month') {
        $stmt->execute([$year, $week ?? $month]);
    } else {
        $stmt->execute([$request['filterValue']]);
    }

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $orderTotal = $result['order_total'];
    $revenue = $result['revenue'];

    return [
        "order_total" => $orderTotal,
        "revenue" => $revenue
    ];

}

function getRecapByDate(string $date): array{

    $stmt = getConnection()->prepare("
    SELECT 
        tr.created_at
    FROM transaction_recap as tr                                                                        
    WHERE tr.created_at = ? ");
    $stmt->execute([$date]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getRecap(string $recap_type): array{

    $stmt = getConnection()->prepare("
    SELECT 
        tr.id,
        tr.order_total,
        tr.revenue,
        tr.recap_type,
        tr.created_at,
        u.first_name,
        u.last_name
    FROM transaction_recap AS tr  
    JOIN users AS u ON tr.cashier_id = u.id
    WHERE tr.recap_type = ? 
    ORDER BY tr.created_at ASC");
    $stmt->execute([$recap_type]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

