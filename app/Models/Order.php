<?php

function saveOrder(array $request): bool
{
    $conn = getConnection();

    try {
        $conn->beginTransaction();

        $stmtIns = $conn->prepare("INSERT INTO orders (id, reservation_id, status, snap_token, sub_total, total, note) VALUES (?,?,?,?,?,?,?)");
        $stmtIns->execute([
            $request['orders_id'],
            $request['reservation_id'],
            $request['status'],
            $request['snap_token'],
            $request['sub_total'],
            $request['total'],
            $request['note'],
        ]);

        $stmtUpdate = $conn->prepare("UPDATE menus SET stock = stock - ? WHERE id = ?");
        $stmtUpdate->execute([
            $request['qty'],
            $request['menu_id']
        ]);

        $conn->commit();


        return true;
    } catch (PDOException $e) {
        $conn->rollBack();
//        throw new Exception($e->getMessage());
        return false;
    }
}

function confirm(string $id): bool{

    $conn = getConnection();

    try {

        $conn->beginTransaction();

        $stmt = $conn->prepare("UPDATE orders SET status = ?, cashier_id=? WHERE id = ?");
        $stmt->execute([
            "menunggu koki",
            getAuth()->getUserId(),
            $id
        ]);

        $conn->commit();

        return true;
    } catch (PDOException $e) {
        $conn->rollBack();

        return false;
    }

}

function getOrderById(string $id): array{

    $stmt = getConnection()->prepare("
    SELECT 
        o.id, 
        r.table_number, 
        o.reservation_id, 
        o.status,
        o.queue_number,
        o.snap_token,
        o.sub_total, 
        o.total, 
        o.note,
        o.created_at
    FROM orders as o 
    JOIN reservations as r ON r.id = o.reservation_id                                                                         
    WHERE o.id =? ");
    $stmt->execute([$id]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getQueueNumber(): int{

    $today = date('Y-m-d');

    $stmt = getConnection()->prepare("SELECT queue_number FROM orders WHERE DATE(created_at) = DATE(?) ORDER BY queue_number DESC LIMIT 1");
    $stmt->execute([$today]);

    $lastQueue = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($lastQueue) {
        return $lastQueue['queue_number'] + 1;
    } else {
        return 1;
    }

}

function saveOrderPayment(array $request): bool
{

    $conn = getConnection();

    try {

        $conn->beginTransaction();

        $stmt = $conn->prepare("UPDATE orders SET status = ?, queue_number = ?, snap_token = ? WHERE id = ?");
        $stmt->execute([
            $request['status'],
            getQueueNumber(),
            $request['snap_token'],
            $request['orders_id']
        ]);

        $conn->commit();


        return true;
    } catch (PDOException $e) {
        $conn->rollBack();
        error_log($e->getMessage());
        return false;
    }
}

function getAllOrders(): array{

    $stmt = getConnection()->prepare("
    SELECT 
        o.id, 
        o.reservation_id, 
        o.status, 
        o.queue_number, 
        o.sub_total, o.total, 
        o.note, 
        o.created_at,
        o.cashier_id,
        r.table_number 
    FROM orders AS o 
    JOIN reservations AS r ON o.reservation_id = r.id
    ORDER BY 
        o.status = 'belum dibayar' DESC,
        o.queue_number ASC,
        DATE(o.created_at) DESC; 
        ");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllOrdersHistory(): array{

    $stmt = getConnection()->prepare("
    SELECT 
        o.id, 
        o.reservation_id, 
        o.status, 
        o.queue_number, 
        o.sub_total, o.total, 
        o.note, 
        o.created_at,
        o.cashier_id,
        r.table_number 
    FROM orders AS o 
    JOIN reservations AS r ON o.reservation_id = r.id
    ORDER BY o.created_at DESC
        ");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTodayOrders(): array {
    $stmt = getConnection()->prepare("
    SELECT 
        o.id, 
        o.reservation_id, 
        o.status, 
        o.queue_number, 
        o.sub_total, 
        o.total, 
        o.note, 
        o.created_at, 
        r.table_number 
    FROM orders AS o 
    JOIN reservations AS r ON o.reservation_id = r.id
    WHERE DATE(o.created_at) = CURDATE()
    ORDER BY 
        o.status = 'belum dibayar' DESC,
        o.queue_number ASC,
        o.created_at DESC;
    ");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTodayOrdersWaitConfirm(): array {
    $stmt = getConnection()->prepare("
    SELECT 
        o.id, 
        o.reservation_id, 
        o.status, 
        o.queue_number, 
        o.sub_total, 
        o.total, 
        o.note, 
        o.created_at, 
        r.table_number 
    FROM orders AS o 
    JOIN reservations AS r ON o.reservation_id = r.id
    WHERE DATE(o.created_at) = CURDATE()
    ORDER BY 
        CASE 
            WHEN o.status = 'menunggu konfirmasi' THEN 1
            WHEN o.status = 'menunggu koki' THEN 2
            ELSE 3
        END,
        o.queue_number ASC
    ");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTopMenus(): array{

    $stmt = getConnection()->prepare("
    SELECT 
        m.menu, 
        m.price, 
        m.image,  
        SUM(od.qty) AS total_qty
    FROM 
        orders_details od
    JOIN 
        orders o ON o.id = od.orders_id 
    JOIN
        menus m ON od.menu_id = m.id 
    GROUP BY 
        m.menu, m.price, m.image
    ORDER BY 
        total_qty DESC
    LIMIT 7;");

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getCount($conn, $startTime, $endTime, $table_name): int {
    $stmt = $conn->prepare("SELECT COUNT(*) AS data_count FROM $table_name WHERE created_at >= ? AND created_at < ?");
    $stmt->execute([$startTime,$endTime]);
    return $stmt->fetch(PDO::FETCH_ASSOC)['data_count'];
}

// Fungsi untuk menghitung persentase perubahan dan tren
function calculatePercentageChange($currentCount, $previousCount): array {
    if ($previousCount == 0) {
        $percentageChange = $currentCount > 0 ? 100 : 0;
    } else {
        $percentageChange = (($currentCount - $previousCount) / $previousCount) * 100;
    }

    if ($currentCount > $previousCount) {
        $trend = 'naik';
    } elseif ($currentCount < $previousCount) {
        $trend = 'turun';
    } else {
        $trend = 'tetap';
    }

    return [
        'percentage' => $percentageChange,
        'trend' => $trend
    ];
}

// Fungsi untuk mendapatkan tren pesanan dalam interval 15 menit
function getOrderTrends(): array {
    $conn = getConnection();

    $currentCount = getCount($conn, date('Y-m-d H:i:s', strtotime('-15 minutes')), date('Y-m-d H:i:s'), "orders");
    $previousCount = getCount($conn, date('Y-m-d H:i:s', strtotime('-30 minutes')), date('Y-m-d H:i:s', strtotime('-15 minutes')), "orders");

    $change = calculatePercentageChange($currentCount, $previousCount);

    return [
        'percentage' => $change['percentage'],
        'trend' => $change['trend'],
        'new_order' => $currentCount
    ];
}

function getReservationTrends(): array {
    $conn = getConnection();

    $currentCount = getCount($conn, date('Y-m-d H:i:s', strtotime('-15 minutes')), date('Y-m-d H:i:s'), "reservations");
    $previousCount = getCount($conn, date('Y-m-d H:i:s', strtotime('-30 minutes')), date('Y-m-d H:i:s', strtotime('-15 minutes')), "reservations");

    $change = calculatePercentageChange($currentCount, $previousCount);

    return [
        'percentage' => $change['percentage'],
        'trend' => $change['trend'],
        'new_reservation' => $currentCount
    ];
}

// Fungsi untuk mendapatkan tren pesanan dalam interval 1 bulan
function getMonthOrderTrends(): array {
    $conn = getConnection();

    $currentCount = getCount($conn, date('Y-m-01'), date('Y-m-01', strtotime('+1 month')), "orders");
    $previousCount = getCount($conn, date('Y-m-01', strtotime('-1 month')), date('Y-m-01'), "orders");

    $change = calculatePercentageChange($currentCount, $previousCount);

    return [
        'percentage' => round($change['percentage']),
        'trend' => $change['trend'],
        'new_order' => $currentCount
    ];
}

// Fungsi untuk mendapatkan jumlah pax berdasarkan rentang waktu
function getPaxCount($conn, $startTime, $endTime): int {
    $stmt = $conn->prepare("
        SELECT SUM(pax) AS total_pax 
        FROM reservations 
        WHERE created_at >= ? AND created_at <= ?
    ");
    $stmt->execute([$startTime, $endTime]);
    return $stmt->fetch(PDO::FETCH_ASSOC)['total_pax'];
}

// Fungsi untuk mendapatkan tren jumlah pax dalam interval 1 hari
function getDailyPaxTrends(): array {
    $conn = getConnection();

    // Hitung jumlah pax hari ini
    $currentPax = getPaxCount(
        $conn,
        date('Y-m-d 00:00:00'),
        date('Y-m-d 23:59:59')
    );

    // Hitung jumlah pax hari kemarin
    $previousPax = getPaxCount(
        $conn,
        date('Y-m-d 00:00:00', strtotime('-1 day')),
        date('Y-m-d 23:59:59', strtotime('-1 day'))
    );

    $change = calculatePercentageChange($currentPax, $previousPax);

    return [
        'percentage' => round($change['percentage']),
        'trend' => $change['trend'],
        'new_pax' => $currentPax
    ];
}


