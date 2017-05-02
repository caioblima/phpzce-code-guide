<?php
//Store a value
$carOneValue = 1;
/* Reference carOneValue variable to the new $carOneValueReference.*/
$carOneValueReference = &$carOneValueReference;
//Change value to the two variables
$carOneValueReference = 100.80

//By reference
$carOneValue = 1;
function sumCarValue(&$carValue, $plusValue = 0) {
  return $carValue = $carValue + $plusValue;
}
sumCarValue($carOneValue, 1000);
var_dump($carOneValue);