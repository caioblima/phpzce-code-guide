<?php
//int vprintf ( string $format , array $args )
$a = vprintf('Certification %s  %s', [
  'PHP',
  '7'
]);
var_dump($a);