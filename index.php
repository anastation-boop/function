<?php

/**
 * Возвращает строку с символами, отсортированными по алфавиту.
 *
 * @param string $str Входная строка
 * @return string Отсортированная строка
 */
function alphabeticalOrder(string $str): string
{
    $chars = str_split($str);
    sort($chars);

    return implode('', $chars);
}

$input = 'alphabetical';
$result = alphabeticalOrder($input);

echo $result;