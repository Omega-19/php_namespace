<?php

/**
 * This function will generate a robot name as a string, based upon given
 * parameters.
 *
 * Examples:
 *
 *     generateRandomRobotName(4, 2, '_')
 *     => "ZRKL_55"
 *
 *     generateRandomRobotName(2, 2, null)
 *     => "YM70"
 *
 * @param int $nbOfLetters
 * @param int $nbOfNumbers
 * @param string|null $separator
 * @return string
 */
function generateRandomRobotName(int $nbOfLetters, int $nbOfNumbers, ?string $separator): string
{
    if ($nbOfLetters < 1) {
        $nbOfLetters = 1;
    }
    if ($nbOfNumbers < 1) {
        $nbOfNumbers = 1;
    }

    $letters = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I',
        'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
        'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    ];
    $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

    $robotName = '';

    for ($i = 0; $i < $nbOfLetters; ++$i) {
        $randomKey = array_rand($letters);
        $robotName .= $letters[$randomKey];
    }

    if ($separator !== null) {
        $robotName .= $separator;
    }

    for ($i = 0; $i < $nbOfNumbers; ++$i) {
        $randomKey = array_rand($numbers);
        $robotName .= $numbers[$randomKey];
    }

    return $robotName;
}

/**
 * This function returns true if the robot is evil, or false if it's good.
 *
 * The argument `$evilRate` is given as a float between 0 and 1. It represents
 * the chances for the robot to be evil.
 *
 * With an evil rate of 0, the robot will never be evil.
 * With an evil rate of 1, the robot will always be evil.
 * With an evil rate of 0.25, the robot will be evil one out of every four
 * times.
 *
 * @param float $evilRate
 * @return bool
 */
function isRobotEvil(float $evilRate): bool
{
    $randomNumber = mt_rand(0, 100);

    return $randomNumber < (100 * $evilRate);
}