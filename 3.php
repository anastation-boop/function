<?php

/**
 * @param string $text Входной текст
 * @return string|int|null Самое частое слово, сообщение об ошибке или null (если текст пустой)
 */
function mostRecent(string $text): string|int|null
{
    if (strlen($text) > 1000) {
        return "Текст превышает допустимую длину (1000 символов)";
    }

    
    $words = preg_split('/\s+/', strtolower(preg_replace('/[^\p{L}\p{N}\s]/u', '', $text)));

    $wordCount = [];

    foreach ($words as $word) {
        if ($word !== '') {
            $wordCount[$word] = ($wordCount[$word] ?? 0) + 1;
        }
    }

    if (empty($wordCount)) {
        return null;
    }

    arsort($wordCount);

    return key($wordCount);
}

$text = "Но ты придёшь, желанная красавица, и я на миг застыну безъязыко, когда ты так застенчиво представишься: «Победа, или можно просто Вика». Игорь Караулов.";

echo mostRecent($text);
