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

function confirmOrderByChef(string $id): bool{

    $conn = getConnection();

    try {

        $conn->beginTransaction();

        $stmt = $conn->prepare("UPDATE orders SET status = ? WHERE id = ?");
        $stmt->execute([
            "dimasak",
            $id
        ]);

        $conn->commit();

        return true;
    } catch (PDOException $e) {
        $conn->rollBack();

        return false;
    }

}

function confirmOrderDoneByChef(string $id): bool{

    $conn = getConnection();

    try {

        $conn->beginTransaction();

        $stmt = $conn->prepare("UPDATE orders SET status = ? WHERE id = ?");
        $stmt->execute([
            "selesai",
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
        o.created_at,
        o.cashier_id
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

function getTodayOrdersWaitConfirmChef(): array {
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
    WHERE DATE(o.created_at) = CURDATE() AND o.status = 'menunggu koki'
    ORDER BY o.queue_number ASC
    ");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTodayOrdersProcessingByChef(): array {
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
    WHERE DATE(o.created_at) = CURDATE() AND o.status = 'dimasak'
    ORDER BY o.queue_number ASC
    ");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTodayOrdersDone(): array {
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
    WHERE DATE(o.created_at) = CURDATE() AND o.status = 'selesai'
    ORDER BY o.queue_number ASC
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

function getWeekOrderTrends(): array {
    $conn = getConnection();

    $currentWeekStart = date('Y-m-d', strtotime('monday this week'));
    $currentWeekEnd = date('Y-m-d', strtotime('sunday this week +1 day'));

    $previousWeekStart = date('Y-m-d', strtotime('monday last week'));
    $previousWeekEnd = date('Y-m-d', strtotime('sunday last week +1 day'));

    $currentCount = getCount($conn, $currentWeekStart, $currentWeekEnd, "orders");
    $previousCount = getCount($conn, $previousWeekStart, $previousWeekEnd, "orders");

    // Calculate the percentage change
    $change = calculatePercentageChange($currentCount, $previousCount);

    // Return the trend data
    return [
        'percentage' => round($change['percentage']),
        'trend' => $change['trend'],
        'new_order' => $currentCount
    ];
}

function getYearOrderTrends(): array {
    $conn = getConnection();

    // Get the start and end dates of the current year
    $currentYearStart = date('Y-01-01');
    $currentYearEnd = date('Y-01-01', strtotime('+1 year'));

    // Get the start and end dates of the previous year
    $previousYearStart = date('Y-01-01', strtotime('-1 year'));
    $previousYearEnd = date('Y-01-01');

    // Get the counts of orders for the current and previous years
    $currentCount = getCount($conn, $currentYearStart, $currentYearEnd, "orders");
    $previousCount = getCount($conn, $previousYearStart, $previousYearEnd, "orders");

    // Calculate the percentage change
    $change = calculatePercentageChange($currentCount, $previousCount);

    // Return the trend data
    return [
        'percentage' => round($change['percentage']),
        'trend' => $change['trend'],
        'new_order' => $currentCount
    ];
}



function getDayOrderTrends(): array {
    $conn = getConnection();

    $currentCount = getCount($conn, date('Y-m-d'), date('Y-m-d', strtotime('+1 day')), "orders");

    $previousCount = getCount($conn, date('Y-m-d', strtotime('-1 day')), date('Y-m-d'), "orders");

    $change = calculatePercentageChange($currentCount, $previousCount);

    return [
        'percentage' => round($change['percentage']),
        'trend' => $change['trend'],
        'new_order' => $currentCount
    ];
}


// Fungsi untuk mendapatkan jumlah pax berdasarkan rentang waktu
function getPaxCount($conn, $startTime, $endTime): ?int {
    $stmt = $conn->prepare("
        SELECT SUM(pax) AS total_pax 
        FROM reservations 
        WHERE created_at >= ? AND created_at <= ?
    ");
    $stmt->execute([$startTime, $endTime]);
    return $stmt->fetch(PDO::FETCH_ASSOC)['total_pax'];
}

// Fungsi untuk mendapatkan tren jumlah pax dalam interval 1 hari
function getDailyPaxTrends(): ?array {
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

function filterOrdersByDate($filterType, $filterValue): array {
    $query = "
        SELECT 
            o.id, 
            o.reservation_id, 
            o.status, 
            o.queue_number, 
            o.sub_total, 
            o.total, 
            o.note, 
            o.created_at, 
            o.cashier_id,
            r.table_number
        FROM orders AS o 
        JOIN reservations AS r ON o.reservation_id = r.id
    ";

    // Append the WHERE clause based on the filter type
    switch ($filterType) {
        case 'day':
            $query .= "WHERE DATE(o.created_at) = ? ";
            break;
        case 'week':
            list($year, $week) = explode('-W', $filterValue);
            $query .= "WHERE YEAR(o.created_at) = ? AND WEEK(o.created_at, 1) = ? ";
            break;
        case 'month':
            list($year, $month) = explode('-', $filterValue);
            $query .= "WHERE YEAR(o.created_at) = ? AND MONTH(o.created_at) = ? ";
            break;
        case 'year':
            $query .= "WHERE YEAR(o.created_at) = ? ";
            break;
        default:
            throw new Exception("Rekap tipe tidak valid.");
    }

    $query .= "
        ORDER BY o.created_at ASC;
    ";

    $stmt = getConnection()->prepare($query);
    if ($filterType == 'week' || $filterType == 'month') {
        $stmt->execute([$year, $week ?? $month]);
    } else {
        $stmt->execute([$filterValue]);
    }

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getOrdersByDateRange(?string $startDate, ?string $endDate): array {
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
    WHERE DATE(o.created_at) BETWEEN ? AND ?
    ORDER BY o.created_at DESC;
    ");
    $stmt->execute([$startDate, $endDate]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getSum($conn, $startTime, $endTime, $table_name): float {
    $stmt = $conn->prepare("SELECT SUM(total) AS data_sum FROM $table_name WHERE created_at >= ? AND created_at < ?");
    $stmt->execute([$startTime, $endTime]);
    return (float) $stmt->fetch(PDO::FETCH_ASSOC)['data_sum'];
}

function getDayOrderSumTrends(): array {
    $conn = getConnection();

    $currentSum = getSum($conn, date('Y-m-d'), date('Y-m-d', strtotime('+1 day')), "orders");
    $previousSum = getSum($conn, date('Y-m-d', strtotime('-1 day')), date('Y-m-d'), "orders");

    $change = calculatePercentageChange($currentSum, $previousSum);

    return [
        'percentage' => round($change['percentage']),
        'trend' => $change['trend'],
        'total_sum' => $currentSum
    ];
}

function getWeekOrderSumTrends(): array {
    $conn = getConnection();

    $currentWeekStart = date('Y-m-d', strtotime('monday this week'));
    $currentWeekEnd = date('Y-m-d', strtotime('sunday this week +1 day'));

    $previousWeekStart = date('Y-m-d', strtotime('monday last week'));
    $previousWeekEnd = date('Y-m-d', strtotime('sunday last week +1 day'));

    $currentSum = getSum($conn, $currentWeekStart, $currentWeekEnd, "orders");
    $previousSum = getSum($conn, $previousWeekStart, $previousWeekEnd, "orders");

    $change = calculatePercentageChange($currentSum, $previousSum);

    return [
        'percentage' => round($change['percentage']),
        'trend' => $change['trend'],
        'total_sum' => $currentSum
    ];
}

function getMonthOrderSumTrends(): array {
    $conn = getConnection();

    $currentMonthStart = date('Y-m-01');
    $currentMonthEnd = date('Y-m-01', strtotime('+1 month'));

    $previousMonthStart = date('Y-m-01', strtotime('-1 month'));
    $previousMonthEnd = date('Y-m-01');

    $currentSum = getSum($conn, $currentMonthStart, $currentMonthEnd, "orders");
    $previousSum = getSum($conn, $previousMonthStart, $previousMonthEnd, "orders");

    $change = calculatePercentageChange($currentSum, $previousSum);

    return [
        'percentage' => round($change['percentage']),
        'trend' => $change['trend'],
        'total_sum' => $currentSum
    ];
}

function getYearOrderSumTrends(): array {
    $conn = getConnection();

    $currentYearStart = date('Y-01-01');
    $currentYearEnd = date('Y-01-01', strtotime('+1 year'));

    $previousYearStart = date('Y-01-01', strtotime('-1 year'));
    $previousYearEnd = date('Y-01-01');

    $currentSum = getSum($conn, $currentYearStart, $currentYearEnd, "orders");
    $previousSum = getSum($conn, $previousYearStart, $previousYearEnd, "orders");

    $change = calculatePercentageChange($currentSum, $previousSum);

    return [
        'percentage' => round($change['percentage']),
        'trend' => $change['trend'],
        'total_sum' => $currentSum
    ];
}

function getActiveOrders(): array {
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
    WHERE DATE(o.created_at) = CURDATE() AND o.status != 'selesai'
    ");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getOrdersInToday(): array {
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
    AND o.status NOT IN ('dimasak', 'selesai')
    ORDER BY 
        o.status = 'belum dibayar' DESC,
        o.queue_number ASC,
        o.created_at DESC;
    ");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTotalIncome(): float {
    $stmt = getConnection()->prepare("SELECT SUM(total) AS data_sum FROM orders");
    $stmt->execute();
    return (float) $stmt->fetch(PDO::FETCH_ASSOC)['data_sum'];
}

function getAverageOrdersPerDay(): float {
    $conn = getConnection();

    $stmt = $conn->prepare("SELECT COUNT(*) AS total_orders FROM orders");
    $stmt->execute();
    $totalOrders = (int) $stmt->fetch(PDO::FETCH_ASSOC)['total_orders'];

    $stmt = $conn->prepare("SELECT COUNT(DISTINCT DATE(created_at)) AS total_days FROM orders");
    $stmt->execute();
    $totalDays = (int) $stmt->fetch(PDO::FETCH_ASSOC)['total_days'];

    if ($totalDays === 0) {
        return 0.0;
    }

    return $totalOrders / $totalDays;
}






