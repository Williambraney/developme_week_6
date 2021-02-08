<?php

require __DIR__ . "/vendor/autoload.php";

function divide ($a, $b){
    return $a / $b;
}

dump(divide(4, 2)); // 2
dump(divide(20, 2)); // 10
dump(divide(5, 2)); // 2.5
dump(divide(2.5, 0.5)); // 5