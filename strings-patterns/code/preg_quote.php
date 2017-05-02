<?php
//string preg_quote ( string $str [, string $delimiter = NULL ] )
$keywords = '$10 for a black window/s20';
$keywords = preg_quote($keywords, '/');
echo $keywords;