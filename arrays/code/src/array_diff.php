<?php
$a  = [
    'pedra',
    'papel',
];
$b  = [
    'tesoura',
];
$diff = array_diff($a, $b);
var_dump($diff);