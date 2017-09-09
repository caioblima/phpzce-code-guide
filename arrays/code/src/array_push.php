<?php
$electronics  = [];
array_push($electronics,  'videogame',  'tv', 'dvd');
var_dump($electronics);

$electronics  = [
  'radio'
];

array_push($electronics, ['videogame', 'tv', 'dvd'], [], 123, 456, new \StdClass());
var_dump($electronics);