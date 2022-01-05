<?php

/*
 * NOT FINISHED
 *
 * CURRENT ANSWER: 266333
 *
 * STARTED: 5 JANUARI 2022
 */

$maximum = 1000;
$sum = 0;

for($i = 0; $i < $maximum; $i++) {
    if($i % 3 == 0) $sum += $i;

    if($i % 5 == 0) $sum += $i;
}

echo $sum;

