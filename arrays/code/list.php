<?php
$someData = [
    'userName' => 'caio',
    'pass' => 'test',
];

list('userName' => $userName, 'pass' => $pass) = $someData;
//or shorthand syntax - Symmetric array destructuring 
['userName' => $userName, 'pass' => $pass] = $someData;

echo 'User: '. $userName . ' ' . 'Pass: '. $pass;

$chocolate  = [
    'branco',
    '500g',
    'R$ 5,50',
];
list($type, $size, $price) = $chocolate;
echo $type .' '. $size  .' '. $price;