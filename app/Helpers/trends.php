<?php


function showClassTrends(?string $trend): array{

    if ($trend == 'naik') {
        return [
            "text" => "text-success",
            "icon" => "bxs-up-arrow"
        ];
    }

    elseif ($trend == 'turun') {
        return [
            "text" => "text-danger",
            "icon" => "bxs-down-arrow"
        ];
    }

    else{
        return [
            "text" => "",
            "icon" => "bxs-label"
        ];
    }

}
