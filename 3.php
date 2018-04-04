<?php

/**
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */

function findLargestPrimeFactorOf(int $integer): int
{
    do {
        $smallestFactor = findSmallestFactorByTrialDivision($integer);
        $integer /= $smallestFactor;
        $isPrime = $smallestFactor == 1;
    } while (! $isPrime);

    return $integer;
}

function findSmallestFactorByTrialDivision(int $integer): int
{
    $largestPossibleFactor = floor(sqrt($integer));
    for ($i = 2; $i < $largestPossibleFactor; $i++) {
        if ($integer % $i == 0) {
            return $i;
        }
    }

    return 1;
}

echo findLargestPrimeFactorOf(600851475143);
