<?php

/**

 * @param int $number Число для проверки (должно быть положительным)
 * @return bool true, если число совершенное, иначе false
 */
function isPerfectNumber(int $number): bool
{
    if ($number <= 0) {
        return false;
    }

    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            $sum += $i;
        }
    }

    return $sum === $number;
}

/**
 * @param int[] $numbers 
 */
function findPerfectNumbers(array $numbers): array
{
    $perfectNumbers = [];

    foreach ($numbers as $number) {
        if (isPerfectNumber($number)) {
            $perfectNumbers[] = $number;
        }
    }

    return $perfectNumbers;
}

$numbers = [6, 28, 496, 12, 20, 8128];
$perfects = findPerfectNumbers($numbers);

print_r($perfects);
