<?php

/*
 * ********** Task 5: Password Generator **********
 * Create a PHP function called generatePassword($length) that generates a random password of the specified length.
 * The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+).
 * Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
 */

function generatePassword(int $length): string
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $characterLength = strlen($characters);
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $characterLength - 1);
        $password .= $characters[$randomIndex];
    }
    return $password;
}

echo generatePassword(12);
