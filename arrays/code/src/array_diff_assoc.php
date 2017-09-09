<?php
$a  = [
  'p' =>  'pedra',
  'papel',
];
$b  = [
  'tesoura',
  'pedra',
];
$diff = array_diff_assoc($a, $b);
var_dump($diff);