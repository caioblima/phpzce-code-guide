<?php
//similar_text - int similar_text ( string $first , string $second [, float &$percent ] )
$string1  = 'Book of Certification PHP';
$string2  = 'Certification PHP';
print similar_text($string1,  $string2, $percent);
echo PHP_EOL;
print $percent;
