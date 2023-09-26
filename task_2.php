<?php

/*
 * ********** Task 2: Array Manipulation **********
 * Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes
 * the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.
 */

$numbers = range(1, 10);
function removeEvenNumbers(&$numbers) {
    $numbers = array_filter($numbers, function ($number) {
        return $number % 2 !== 0;
    });
}

removeEvenNumbers($numbers);
print_r($numbers);
