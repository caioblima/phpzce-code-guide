<?php
//http://php.net/manual/pt_BR/language.types.array.php
//http://php.net/manual/en/array.sorting.php
// $a = ['a', 'b'];
// $b = ['first' => 'value', 'second' => 'value'];
// $a[] = 'c';
// $d = ['a' => 'a', 'b' => 'b'];
// $d[] = ['c', 'd'];
// print_r($d);

// class A {
//     protected $a; // This will become '\0A\0A'
// }

// class B extends A {
//     private $b; // This will become '\0B\0A'
//     public $c = 'c'; // This will become 'AA'
// }

// var_dump((array) new B());

// $array  = array(
//   1       =>  'a',
//   "1"   =>  'b',
//   1.5   =>  'c',
//   true  =>  'd',
// );

// $carros = [
//   'gol',
//   'fiesta',
//   'uno',
// ];
// sort($carros);
// print_r($carros);

// $numeros  = [
//   '29',
//   '12',
//   '14',
// ];
// sort($numeros,  SORT_NUMERIC);
// print_r($numeros);

// $strings  = [
//   'PHP',
//   'abc',
//   'Olá' 
// ];
// sort($strings,  SORT_STRING);
// print_r($strings);

// $alfabeto = [
//   'b',
//   'z',
//   'm',
//   'c',
// ];
// sort($alfabeto, SORT_NATURAL);
// print_r($alfabeto);exit;
// $valores  = [
//   1,
//   2,
//   3,
//   4,
// ];
// rsort($valores);
// print_r($valores);
// $frutas = [
//   'uva',
//   'banana',
//   'caju',
// ];
// asort($frutas);
// print_r($frutas);
// arsort($frutas);
// print_r($frutas);
$blocos = [
  'B' =>  'CASA 83',
  'C' =>  'CASA 82',
  'A' =>  'CASA 81',
];
// ksort($blocos);
// krsort($blocos);
// print_r($blocos);

// usort($blocos, function($a,  $b) {
//   print_r($a); echo ' '; print_r($b); echo PHP_EOL;
//   // var_dump($a > $b);exit;
//   return ($a < $b) ? -1 : 1;
// });
// echo PHP_EOL;
// print_r($blocos);
// exit;
$imagens  = [
  'img12.png',
  'img10.png',
  'img2.png', 
  'img1.png'
];
natsort($imagens);
print_r($imagens);