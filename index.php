<?php

$String = 'Algorithmie';

function Vcount($String) {
    $count = 0;
    for ($i = 0; $i < strlen($String); $i++) {
        $String[$i] == 'e' || $String[$i] == 'a' || $String[$i] == 'i' || $String[$i] == 'o' || $String[$i] == 'u' ? $count++ : null;
    }
    return $count;
}

echo Vcount($String);