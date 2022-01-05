<?php

/*
 * FINISHED
 *
 * ANSWER: 4613732
 *
 * STARTED: 5 JANUARI 2022
 * FINISHED: 5 JANUARI 2022
 */

$sum = 0;

$previousValue = $currentValue = 1;

while($currentValue <= 4000000) {
    $newValue = $previousValue + $currentValue;

    if ($newValue % 2 == 0) $sum += $newValue;

    [$previousValue, $currentValue] = array($currentValue, $newValue);
}

echo $sum;
