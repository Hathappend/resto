<?php

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

$manager = null;

function image(): ImageManager{

    global $manager;

    if ($manager == null) {
        $manager = new ImageManager(Intervention\Image\Drivers\Gd\Driver::class);
    }

    return $manager;

}
