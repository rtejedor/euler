<?php

/**
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these
 * multiples is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */

function findSumOfMultiplesOf3Or5Below(int $limit): int
{
    return findSumOfMultiplesOf3Below($limit) + findSumOfMultiplesOf5ButNot3Below($limit);
}

function findSumOfMultiplesOf3Below(int $limit): int
{
    $sum = 0;
    for ($multiple = 3; $multiple < $limit; $multiple += 3) {
        $sum += $multiple;
    }

    return $sum;
}

function findSumOfMultiplesOf5ButNot3Below(int $limit): int
{
    $sum = 0;
    for ($multiple = 5; $multiple < $limit; $multiple += 5) {
        if ($multiple % 3 != 0) {
            $sum += $multiple;
        }
    }

    return $sum;
}

echo findSumOfMultiplesOf3Or5Below(1000);
