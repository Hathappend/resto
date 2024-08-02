<?php

require __DIR__ . "/../Helpers/view.php";

function home(): void
{
    view("Profile/index", [
        "title" => "Profile"
    ]);
}
