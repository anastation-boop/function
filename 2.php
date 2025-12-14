<?php
/**
 *
 * @param int $number
 * @return bool
 */
function isPerfectNumber(int $number) {   
    if ($number <= 0) {  
        return false;  
    } 
    $sum = 0;  
    for ($i = 1; $i <= $number / 2; $i++) {  
        if ($number % $i == 0) {  
            $sum += $i;  
        }  
    }  
    return $sum == $number;  
}

/**
 * Undocumented function
 *
 * @param int[] $numbers
 * @return int[]
 */
function findPerfectNumbers(array $numbers) {  
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