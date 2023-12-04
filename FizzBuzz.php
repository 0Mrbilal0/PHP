<?php

$number = 30;

function FizzBuzz($number) {
    $output = '';
    for ($i = 1; $i <= $number; $i++) {
        $i%5 == 0 && $i%3 == 0 ? $output .= 'FizzBuzz ' : ($i%5 == 0 ? $output .= 'Buzz ': ($i % 3 == 0 ? $output .= 'Fizz ' : $output .= $i .' '));
        $output .= '<br>';
    }
    return $output;
}

echo FizzBuzz($number);