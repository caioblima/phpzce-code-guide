<?php
//implode - string implode ( string $glue , array $pieces )
$haystack = [
  'some',
  'implodable',
  'array'
];
var_dump(implode('-', $haystack));