<?php
declare(strict_types=1);
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
// $blocos = [
//   'B' =>  'CASA 83',
//   'C' =>  'CASA 82',
//   'A' =>  'CASA 81',
// ];
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
// $imagens  = [
//   'img12.png',
//   'img10.png',
//   'img2.png', 
//   'img1.png'
// ];
// natsort($imagens);
// print_r($imagens);
// $eletronicos  = [];
// array_push($eletronicos,  'videogame',  'tv', 'dvd');
// print_r($eletronicos);
// $eletronicos  = [
//   'radio'
// ];
// array_push($eletronicos, ['videogame', 'tv', 'dvd'], [], 123, 456, new \StdClass());
// print_r($eletronicos);
// $casa = [
//   19 => 'janela'
// ];
// array_unshift($casa,  ['comodos'],  'porta');
// print_r($casa);
// array_pop($casa);
// echo PHP_EOL;
// print_r($casa);
// array_shift($casa);
// echo PHP_EOL;
// print_r($casa);


// $versoes  = [
//   'PHP 5.5',
//   'PHP 5.6',
//   'PHP 7.1',
// ];
// array_walk($versoes,  function  ($value, $key) {
//   echo 'Key: '.$key.' Value: '.$value.' / ';
//   echo PHP_EOL;
// });

// $dataDeLancamento = [
//   '20/06/2013',
//   '28/08/2014',
//   '13/04/2017',
// ];
// array_walk($versoes,  function  ($item, $chave, $dadosExtras) {
//   printf('%d  =>  %s - data  de  lançamento: %s ',  $chave, $item,  $dadosExtras[$chave]);
// },  $dataDeLancamento);
// $total = 0;
// array_walk($versoes,  function  ($item, $chave) use (&$total) {
//   $total++;
// });
// print_r($total);
// $animais  = [];
// $uniao  = array_merge($animais, ['gato' => 'gato'], [5 => 'cachorro'], [6 => 'cachorro'], ['gato' => 'overrided string value']);
// print_r($uniao);
// $mvc  = [
//   'a' =>  'laravel',
//   1 =>  'silex',
//   2 =>  'symfony'
// ];
// $orm  = [
//   'b' =>  'doctrine',
//   1 =>  'eloquent'
// ];
// $reordenarChaves  = array_merge($mvc, $orm);
// print_r($reordenarChaves);
// $a  = [
//   'pedra',
//   'papel',
// ];
// $b  = [
//   'tesoura',
// ];
// $diferenca  = array_diff($a, $b);
// print_r($diferenca);
// $a  = [
//   'p' =>  'pedra',
//   'papel',
// ];
// $b  = [
//   'tesoura',
//   'pedra',
// ];
// $diferenca  = array_diff_assoc($a,  $b);
// print_r($diferenca);
// $a  = ['a'  =>  'arroz',  'f' =>  'feijão'];
// $b  = ['c'  =>  'camarão',  'z' =>  'arroz'];
// $diferenca  = array_diff_key($a, $b);
// print_r($diferenca);
// $a  = [
//   1,
//   2,
//   'a' =>  'carro',
// ];
// $b  = [
//   'a' =>  'carro',
//   3,
//   5,
// ];
// $diferenca  = array_diff_uassoc($a, $b, function($a, $b) {
//   if ($a === $b) {
//       return 0;
//   }
//   return ($a > $b) ? 1: -1;
// });
// print_r($diferenca);
// $a  = [
//   'b' =>  1,
//   'a' =>  'carro',
//   'c' =>  3,
// ];
// $b  = [
//   'c' =>  'carro',
//   'a' =>  'nada',
//   5,
// ];
// $diferenca  = array_diff_ukey($a, $b, function($a_chave,  $b_chave) 
// {
//   if ($a_chave === $b_chave) {
//       return 0;
//   }
//   return ($a_chave > $b_chave) ? 1: -1;
// });
// print_r($diferenca);
// $computador = [
//   'componentes' =>  null
// ];
// if  (array_key_exists('componentes',  $computador))  {
//   print 'A  chave "componentes" exite !';
// }
//http://php.net/manual/en/class.generator.php
// $numGenerator = function() {
//   for ($i = 0;  $i < 10; $i++) {
//     yield $i;
//   }
// };

// foreach ($numGenerator() as $num) {
//   if ($num === 0) {
//     continue;
//   }
//   echo $num . ' ';
// }
// $input = <<<'EOF'
// 1;PHP;Likes dollar signs
// 2;Python;Likes whitespace
// 3;Ruby;Likes blocks
// EOF;

// $inputParser = function($input) {
//   foreach (explode("\n", $input) as $line) {
//     $fields = explode(';', $line);
//     $id = array_shift($fields);

//     yield $id => $fields;
//   }
// };

// foreach ($inputParser($input) as $id => $fields) {
//   echo "$id:\n";
//   echo "    $fields[0]\n";
//   echo "    $fields[1]\n";
// }
// function  linhasDoArquivo($arquivo) {
//   $arquivo  = fopen($arquivo, 'r');
//   while (($linhaDoArquivo = fgets($arquivo))  !== false)  {
//     yield $linhaDoArquivo;  
//   }
//   fclose($arquivo); 
// }
// $chocolate  = [
//   'branco',
//   '500g',
//   'R$ 5,50'
// ];
// for ($i = 0;  $i  < count($chocolate);  $i++) {
//   print $chocolate[i];
// }
// $someData = [
//   'userName' => 'caio',
//   'pass' => 'test',
// ];

// list('userName' => $userName, 'pass' => $pass) = $someData;
// //or shorthand syntax - Symmetric array destructuring 
// ['userName' => $userName, 'pass' => $pass = $someData;
// echo 'User: '. $userName . ' ' . 'Pass: '. $pass;
// list($tipo, $tamanho, $preco) = $chocolate;
// print $tipo .' '. $tamanho  .' '. $preco;
// $computadores = [
//   ['2GB', '80GB', 'duo  core'],
//   ['6GB', '120GB',  'core i5'],
//   ['4GB', '500GB',  'core i7'],
//   ['4GB', '500GB',  'core i7'],
// ];
// for ($i = 0;  $i  < count($computadores); $i++) {
//   for ($c = 0;  $c  < count($computadores[$i]); $c++) {
//     print $computadores[$i][$c].' - ';
//   }
// }
// for ($i = 0;  $i  < count($computadores); $i++) {
//   list($memoria,  $hd,  $processador) = $computadores[$i];
//   print $memoria  .' - '. $hd .' - '. $processador;
// }
// $array  = [
//   "1" =>  "A",  1 =>  "B", "C",  2 =>  "D"
// ];
// print_r($array);exit;
// print count($array);

//off topic
// function nullableValue($str): string {
//   return $str;
// }

// print_r(nullableValue(1));
$input = 'f1';
$arr = [
  'key1' => 'F1 - Ferrari',
  'key2' => 0,
  'key3' => 'F1 - Mercedes',
  'key4' => 0,
];
// $arr = array_filter($arr);
$arr = array_filter($arr, function($item) use ($input) {
  return (stripos(strval($item), $input) !== false); 
});
print_r($arr);