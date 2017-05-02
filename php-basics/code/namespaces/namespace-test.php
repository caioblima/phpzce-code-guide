<?php
require_once "./namespace.php";
use Caio\Classes as GenericClasses; 

// $res = GenericClasses\GenericAbstractions::sumValues('2', '2');
// print_r($res);

$arr = [
  'someKey' => 'someValue', 
  'someOtherArray' => [
    'someMoreKeys' => 'someMoreValues'
  ] 
];

GenericClasses\GenericAbstractions::protectArray($arr);
print_r($arr);
GenericClasses\GenericAbstractions::unprotectArray($arr);
print_r($arr);