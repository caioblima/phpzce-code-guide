<?php
$a  = [
    'b' =>  1,
    'a' =>  'carro',
    'c' =>  3,
];

$b  = [
    'c' =>  'carro',
    'a' =>  'nada',
    5,
];

$diff = array_diff_ukey($a, $b, function($aKey,  $bKey) 
{
    if ($aKey === $bKey) {
        return 0;
    }

    return ($aKey > $bKey) ? 1 : -1;
});

print_r($diff);