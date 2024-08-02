<?php

function redirectBack(): void {
    if (isset($_SESSION['previous_url'])) {
        $url = $_SESSION['previous_url'][0];
        header("Location: $url");
    }
}
