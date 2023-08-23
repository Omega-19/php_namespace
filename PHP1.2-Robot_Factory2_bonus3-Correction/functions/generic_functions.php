<?php

/**
 * Generates a random number between given minimum and maximum.
 *
 * @param int $min
 * @param int $max
 * @return int
 */
function generateRandomNumber(int $min, int $max): int
{
    return mt_rand($min, $max);
}

/**
 * Returns true if the given number is even.
 * Returns false if the given number is odd.
 *
 * Examples:
 *
 *     isNumberEven(2)
 *     => true
 *
 *     isNumberEven(15)
 *     => false
 *
 * @param int $x
 * @return bool
 */
function isNumberEven(int $x): bool
{
    return ($x % 2) === 0;
}

/**
 * Reverses the given string.
 *
 * Examples:
 *
 *     reverseString('Hey')
 *     => 'yeH'
 *
 *     reverseString('HA26')
 *     => '62AH'
 *
 * @param string $str
 * @return string
 */
function reverseString(string $str): string
{
    return strrev($str);
}