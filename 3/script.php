<?php

/*
 * NOT FINISHED
 *
 * STARTED: 5 JANUARI 2022
 */

// GATHERING OF RULES

// If ends with 0, divide by 2

// If numbers add up to something divisible by 3, then 3

// If ends with 5, divisible by 5

function isPrimeNumber($primeNumberGuess)
{
    for ($i = 2; $i < $primeNumberGuess; $i++) {
        if ($primeNumberGuess % $i == 0) return false;
    }

    return true;
}

function returnNextPrimeNumber($divide_number)
{
    $nextPrimeGuess = $divide_number + 1;

    if (!isPrimeNumber($nextPrimeGuess)) returnNextPrimeNumber($nextPrimeGuess);

    return $nextPrimeGuess;
}

function divideNumber(int $number, int $divide_by)
{
    // Try to divide
    $try = $number / $divide_by;

    // Get a new prime number to divide by if $number is not able to divide into a natural number
    if (!is_int($try) == false) {
        divideNumber($number, returnNextPrimeNumber($divide_by));
    }

    // Return data
    return [
      'current_number' => $try,
      'divided_by' => $divide_by
    ];
}


function getLargestPrimeFactor(int $number)
{
    // Init array
    $numbers_used_in_divide = [];

    // While not done with getting factorization numbers
    while($number !== 1) {
        // Get divided number and number used to divide
        $dividedResult = divideNumber($number, 2);

        // Fill new data with dividedResult
        $numbers_used_in_divide[] = $dividedResult['divided_by'];
        $number = $dividedResult['current_number'];
    }

    // Return highest factorization number
    return max($numbers_used_in_divide);
}

echo getLargestPrimeFactor(5);