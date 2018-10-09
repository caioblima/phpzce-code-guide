<?php
// Note: Only available in PHP >= 7.3.0
$array = ['k' => 2, 'z' => 1, 'b' => 2, 'c' => 3];

$firstKey = array_key_first($array);
print_r($firstKey); // Will output 'k'
