<?php
$cars = [
    'gol',
    'fiesta',
    'uno',
];
sort($cars);
var_dump($cars);

$numbers  = [
    '29',
    '12',
    '14',
];
sort($numbers,  SORT_NUMERIC);
var_dump($numbers);

$strings  = [
    'PHP',
    'abc',
    'Olá',
];
sort($strings,  SORT_STRING);
var_dump($strings);

$letters = [
    'b',
    'z',
    'm',
    'c',
];
sort($letters, SORT_NATURAL);
var_dump($letters);exit;
