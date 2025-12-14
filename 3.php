<?php
/**
 * Undocumented function
 *
 * @param string $text
 * @return string|int|null
 */
function mostRecent(string $text) {
    if (strlen($text) > 1000) {  
        return "Текст превышает допустимую длину (1000 символов)";  
    }   
    $words = preg_split('/\s+/', strtolower(preg_replace('/[^\w\s]/u', '', $text)));  
    $wordCount = array();  
    foreach ($words as $word) {  
        if (!empty($word)) {
            if (isset($wordCount[$word])) {  
                $wordCount[$word]++;  
            } else {  
                $wordCount[$word] = 1;  
            }  
        }  
    }  
    arsort($wordCount);
    reset($wordCount);
    return key($wordCount);
}  
$text = "Но ты придёшь, желанная красавица, и я на миг застыну безъязыко, когда ты так застенчиво представишься: «Победа, или можно просто Вика». Игорь Караулов.";  
echo mostRecent($text);