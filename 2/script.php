<?php

/*
 * FINISHED
 *
 * ANSWER: 4613732
 *
 * STARTED: 5 JANUARI 2022
 * FINISHED: 5 JANUARI 2022
 */

$maximum = 4000000;
$sum = 0;

$previousValue = 1;
$currentValue = 1;

while($currentValue <= $maximum) {
    $newValue = $previousValue + $currentValue;

    if ($newValue % 2 == 0) {
        $sum += $newValue;
    }

    $previousValue = $currentValue;
    $currentValue = $newValue;
}

echo $sum;
