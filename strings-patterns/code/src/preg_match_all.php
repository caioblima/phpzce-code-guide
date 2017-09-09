<?php
$text  = 'PHP certification book, other book';
$pattern = '/book/';
preg_match_all($pattern, $text, $matches);
print_r($matches);