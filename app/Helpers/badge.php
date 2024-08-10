<?php

function showColorClassBadge(string $status, string $useFor): string{

    if ($useFor == "pelayan") {

        if ($status == "belum bayar") {
            return "bg-danger";
        }

        if ($status == "menunggu konfirmasi") {
            return "bg-warning";
        }

        if ($status == "menunggu koki") {
            return "bg-secondary";
        }

        if ($status == "dimasak") {
            return "bg-info";
        }

        if ($status == "selesai" || $status == 'diantar' || $status == "siap") {
            return "bg-success";
        }

    }

    return "";

}

function showClassColorStatus(string $status): array{

    if ($status == 'belum bayar') {
        return [
            "text" => "text-danger",
            "bg"  => "bg-danger"
        ];
    }

    elseif ($status == 'menunggu konfirmasi') {
        return [
            "text" => "text-warning",
            "bg"  => "bg-warning"
        ];
    }

    elseif ($status == 'menunggu koki'){
        return [
            "text" => "text-secondary",
            "bg"  => "bg-secondary"
        ];
    }

    elseif ($status == 'dimasak'){
        return [
            "text" => "text-info",
            "bg"  => "bg-info"
        ];
    }

    elseif ($status == 'selesai' || $status == 'siap' || $status == 'diantar'){
        return [
            "text" => "text-success",
            "bg"  => "bg-success"
        ];
    }

    else{
        return [
            "text" => "",
            "bg" => "",
        ];
    }

}
