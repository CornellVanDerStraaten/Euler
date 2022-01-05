<?php

$maximum = 10;
$count = 0;

$array = [];

while ($count < $maximum) {
    $number = $count / 3;

    if(is_int($number)) {
        $array[] = $count;
    }

    $second_number = $count / 5;

    if(is_int($second_number)) {
        $array[] = $count;
    }

    $count++;
}

print_r(array_sum($array));

