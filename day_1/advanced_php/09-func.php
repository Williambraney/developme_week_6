<?php

require __DIR__ . "/vendor/autoload.php";

function squares($a){
    $square = [];

    foreach ($a as $b){
        $square[] = $b * $b;
    }
    return $square;
}

dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);