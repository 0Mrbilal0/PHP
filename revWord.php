<?php

$text = 'Bonjour';
function invertWord($text) : string {
    return implode(array_reverse(str_split($text)));
}

echo invertWord($text);

?>