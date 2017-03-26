<?php
//strpos int strpos ( string $haystack , string $needle [, int $offset ] ).
$text = 'abcde';
if (strpos($text, 'Bc', 1) !== false) {
  echo 'olá';
}

//stripos - int stripos ( string $haystack , string $needle [, int $offset ] ).
$text = 'ABCDE';
if (stripos($text, 'Abc', 0) !== false) {
  echo 'olá';
}