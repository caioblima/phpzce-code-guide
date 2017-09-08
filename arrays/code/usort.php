<?php
$blocks = [
    'B' =>  'CASA 83',
    'C' =>  'CASA 82',
    'A' =>  'CASA 81',
];

usort($blocks, function ($a,  $b) {
    print_r($a); echo ' '; print_r($b);
    return ($a < $b) ? -1 : 1;
});
echo PHP_EOL;
print_r($blocks);