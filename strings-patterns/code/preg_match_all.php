<?php
//preg_match_all ( string $pattern , string $subject [, array &$matches [, int $flags = PREG_PATTERN_ORDER [, int $offset = 0 ]]] )
$text  = 'PHP certification book,  other book';
$pattern = '/book/';
preg_match_all($pattern, $text, $matches);
print_r($matches);