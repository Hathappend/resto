<?php

function view(string $path, $data = []): void{

    $file = __DIR__ . "/../Views/{$path}.php";

    if (file_exists($file)) {

        extract($data);

        require  __DIR__ . "/../Views/include/header.php";
        require  $file;
        require  __DIR__ . "/../Views/include/footer.php";

    } else {
        echo "File not found $file";
    }
}