<?php
$number = 5;
function sumNumber($number): int
{
    $res = 0;
    for ($i = 1; $i <= $number; $i++) {
        $res += $i;
    }
    return $res;
}
echo sumNumber($number);