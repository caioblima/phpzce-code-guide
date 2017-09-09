<?php
$animals  = [];
$union  = array_merge($animals, ['gato' => 'gato'], [5 => 'cachorro'], [6 => 'cachorro'], ['gato' => 'overrided string value']);
var_dump($union);
$mvc  = [
    'a' =>  'laravel',
    1 =>  'silex',
    2 =>  'symfony'
];
$orm  = [
    'b' =>  'doctrine',
    1 =>  'eloquent'
];
$techs = array_merge($mvc, $orm);
var_dump($techs);