<?php

use \League\Flysystem\Local\LocalFilesystemAdapter;
use League\Flysystem\Filesystem;

$filesystem = null;

function filesystem(): Filesystem{

    global $filesystem;

    $rootPath = __DIR__ . '/../../public/';

    if ($filesystem == null) {
        $adapter = new LocalFilesystemAdapter($rootPath);
        $filesystem = new Filesystem($adapter);
    }

    return $filesystem;
}
