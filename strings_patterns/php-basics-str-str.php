<?php
//strstr string strstr ( string $haystack , mixed $needle [, bool $before_needle ] )
$email  = 'AE-@php.net';
print strstr($email,  'E-@');
// stristr - versão case insensitive do strstr
print stristr($email, '-@', true);