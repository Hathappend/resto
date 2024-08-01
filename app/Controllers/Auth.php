<?php

require __DIR__ . '/../Helpers/view.php';

function show(): void{

    view("Auth/login", [
        "title" => "Halaman Login"
    ]);

}
