<?php
declare(strict_types=1);
//http://php.net/manual/pt_BR/language.functions.php
//http://php.net/manual/pt_BR/functions.anonymous.php
//http://php.net/manual/pt_BR/class.closure.php
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

// class House {
//   private $light = 'on';
//   public function &returnbyReference() {
//     return $this->light;
//   }
// }
// $house = new House();
// $light = &$house->returnbyReference();
// print $light;
// $light = 'off';
// print $house->returnbyReference();

// function sumValues() {
//   $num_args = func_num_args();
//   if ($num_args > 2) {
//     throw new Exception("More arguments, than supported, passed through the function", 1);
//   } elseif ($num_args === 0) {
//     throw new Exception("No args passed through", 1);
//   }
//   $func_args = func_get_args();
//   $a = func_get_arg(0);
//   $b = func_get_arg(1);
//   return $a + $b;
// }
// print_r(sumValues(1, 2));
// function sumValuesDynamic() {
//   $sum = 0;
//   foreach (func_get_args() as $value) {
//     $sum += $value;
//   }
//   return $sum;
// }
// print_r(call_user_func('sumValuesDynamic'));
// print_r(call_user_func_array('sumValuesDynamic', [2, 2, 5, 7]));
// $f1Teams = [
//   'no1' => 'Ferrari',
//   'no2' => 'Mercedes',
// ];
// $f1BestTeam = array_map(function($value) {
//   return $value;
// }, $f1Teams);
// print_r($f1BestTeam);
// $dynamic_sum = function() {
//   $sum = 0;
//   foreach (func_get_args() as $value) {
//     $sum += $value;
//   }
//   return $sum;
// };
// print_r($dynamic_sum(2,2,2));
// function getSumValuesClosure() {
//   return function() {
//     $sum = 0;
//     foreach (func_get_args() as $value) {
//       $sum += $value;
//     }
//     return $sum;
//   };
// }
// $sumValuesDynamic = getSumValuesClosure();
// $sumValuesDynamic(4, 4);
$certification = 'Zend Certified Engineer';
$print_name = function($prefix) use ($certification) {
  echo $prefix . ' ' . $certification;
};

$print_name("I'm studing for");