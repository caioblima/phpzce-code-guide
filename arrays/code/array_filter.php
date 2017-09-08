<?php
$input = 'f1';

$arr = [
    'key1' => 'F1 - Ferrari',
    'key2' => 0,
    'key3' => 'F1 - Mercedes',
    'key4' => 0,
];

$filter1 = array_filter($arr);
var_dump($filter1);

$filter2 = array_filter($arr, function ($item) use ($input) {
    return (stripos(strval($item), $input) !== false); 
});
var_dump($filter2);