<?php

$number = 4;

function factNumber($number) {
    $res = 1;
    for ($i = 1; $i <= $number; $i++) {
        $res = $res * $i;
    }
    return $res;
}

echo factNumber($number);