<?php

/**
 * @throws Exception
 */
function getDateFromDay($date): string
{
    $dateObj = new DateTime($date);
    return $dateObj->format('l, j F Y');
}

function getWeekRange($year, $week) {
    // Membuat objek DateTime dengan tanggal awal minggu
    $startDate = new DateTime();
    $startDate->setISODate($year, $week, 1); // 1 = Senin

    // Menghitung tanggal akhir minggu
    $endDate = clone $startDate;
    $endDate->modify('+6 days');

    return [$startDate, $endDate];
}

function getDateFromWeek($weekValue): string
{
    if (empty($weekValue)) {
        return "";
    }

    list($year, $week) = explode('-W', $weekValue??'');
    list($startDate, $endDate) = getWeekRange($year, $week);

    $startFormatted = $startDate->format('l, j F Y');
    $endFormatted = $endDate->format('l, j F Y');

    return $startFormatted . " - " . $endFormatted;
}

// Fungsi untuk mendapatkan tanggal dari bulan
function getDateFromMonth($monthValue): string
{
    list($year, $month) = explode('-', $monthValue);
    $date = new DateTime("$year-$month-01");
    return $date->format('F Y');
}