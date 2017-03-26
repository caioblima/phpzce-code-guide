<?php
//similar_text - int similar_text ( string $first , string $second [, float &$percent ] )
$string1  = 'Av. Livro de  Certificação PHP';
$string2  = 'Rua, Certificação PHP';
print similar_text($string1,  $string2, $percent);
echo PHP_EOL;
print $percent;
print levenshtein($string1, $string2);