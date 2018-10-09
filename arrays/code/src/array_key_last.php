<?php
// Note: Only available in PHP >= 7.3.0
$array = ['k' => 2, 'z' => 1, 'b' => 2, 'c' => 3];

$lastKey = array_key_last($array);
print_r($lastKey); // Will output 'c'
