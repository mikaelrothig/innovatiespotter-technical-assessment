<?php

namespace Classes;

/**
 * TASK 2: PROBLEM-SOLVING
 *
 * You are given an unsorted array of positive integers.
 *
 * Implement a function to:
 * - Return the first missing positive number in the sequence
 * - Ensure the approach is readable

 */

$numbers = [3, 4, 7, 1];
$currentValue = 1;

while (in_array($currentValue, $numbers)) {
    $currentValue++;
}

echo "First missing number is: " . $currentValue . "\n";