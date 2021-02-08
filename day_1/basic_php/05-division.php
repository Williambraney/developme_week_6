<?php

require __DIR__ . "/vendor/autoload.php";

for($i = 0; $i < 51; $i += 3){
    if($i % 2 === 0){
        dump($i);
    }
}