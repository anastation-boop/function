<?php
function alphabeticalOrder(string $str): string {
    $chars = str_split($str);
    sort($chars);
    return implode('', $chars);
}

$input = 'alphabetical';
$result = alphabeticalOrder($input);
echo $result;