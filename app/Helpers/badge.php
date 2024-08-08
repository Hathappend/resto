<?php

function showColorClassBadge(string $status, string $useFor): string{

    if ($useFor == "pelayan") {

        if ($status == "belum bayar") {
            return "bg-danger";
        }

        if ($status == "menunggu konfirmasi") {
            return "bg-warning";
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

    else{
        return [
            "text" => "",
            "bg" => "",
        ];
    }

}
