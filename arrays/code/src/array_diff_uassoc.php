<?php
$a  = [
    1,
    2,
    'a' =>  'carro',
];

$b  = [
    'a' =>  'carro',
    3,
    5,
];

$diff = array_diff_uassoc($a, $b, function($a, $b) {
    if ($a === $b) {
        return 0;
    }

    return ($a > $b) ? 1: -1;
});

var_dump($diff);