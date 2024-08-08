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

    else{
        return [
            "text" => "",
            "bg" => "",
        ];
    }

}
