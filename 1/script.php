<?php

$maximum = 1000;
$count = 0;

$sum = 0;

while ($count < $maximum) {
    $number = $count / 3;

    if(is_int($number)) {
        $sum += $count;
    }

    $second_number = $count / 5;

    if(is_int($second_number)) {
        $sum += $count;
    }

    $count++;
}

echo $sum;

