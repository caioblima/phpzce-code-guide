<?php
declare(strict_types=1);
// $zceStr = 'Zend Certified Engineer';
// function toUpper(&$str) {
//   $str = mb_strtoupper($str);
// }
// toUpper($zceStr);
// print_r($zceStr);

// function convertDolarToBRL($amount, $dolar = 3.10) {
//   return number_format($amount * $dolar, 2, '.', ',');
// }
// print_r(convertDolarToBRL(790));
// function sumValues($a, $b) {
//   return $a + $b;
// }
// $sumSomeValues = sumValues(2, 4);
// $f1Teams = [];
// function ourArrayPush(array &$array, $data) {
//   if ($data !== null) {
//     $array[] = $data;
//   }
// }
// print_r(ourArrayPush($f1Teams, 'Ferrari'));
// print_r($f1Teams);

class House {
  private $light = 'on';
  public function &returnbyReference() {
    return $this->light;
  }
}
$house = new House();
$light = &$house->returnbyReference();
print $light;
$light = 'off';
print $house->returnbyReference();