<?php
$phpVersions  = [
    'PHP 5.5',
    'PHP 5.6',
    'PHP 7.1',
];
array_walk($phpVersions,  function  ($value, $key) {
    echo 'Key: '.$key.' Value: '.$value.' / ';
    echo PHP_EOL;
});

$phpLaunchDate = [
    '20/06/2013',
    '28/08/2014',
    '13/04/2017',
];
array_walk($phpVersions,  function  ($value, $key, $additionalData) {
    printf('%d  =>  %s - launch date: %s ', $key, $value,  $additionalData[$key]);
},  $phpLaunchDate);

$total = 0;
array_walk($phpVersions,  function  ($value, $key) use (&$total) {
    $total++;
});
var_dump($total);