<?php
//str_word_count - mixed str_word_count ( string $string [, int $format [, string $charlist ]] )
$nome      = 'Zend Certified Enginee';
$chars_map = 'áéíóúâêôãõàÁÉÍÓÚÂÊÔÃÕÀçÇ.,;:-_+=*&!@#$%()<>?[]{}´`\|0123456789';
//Returns each word in an ordered 0,1,2 indexed array
print_r(str_word_count($nome, 1));
//Same as above but accepting special characters
print_r(str_word_count($nome, 1, $chars_map));
//Return an assoc array where the key of the word is the first index he is found on the string
print_r(str_word_count($nome, 2));