<?php
//PHP tags
/* 
<?php ?>
<?  short tag ?> - Only active by the php.ini short_open_tags activated
<script type="php"> - Removed on PHP 7
<?= - sempre ativo - segunda short open tag ?>
<% echo 'some value, some var' %>
<%= $variable; %> - A shorthand to <% echo $variable; %>
The last two Examples was removed on PHP 7
*/

//Strings
/* 
Single quote only literal values
Double quotes can interpolate variables and treat her as value to string
*/

//Scalar types 
/*
integer
boolean
float
string
Compound
array
object
//Other types
resource
null
*/
//Variable value assignment
// $a  = 'By Value';
// $b  = &$a;  //  By reference
// $b  = 'What now?';
// print $a; 
// print $b;

// //operadores aritméticos
// $soma = 10  + 10; //  20
// $subtracao  = 5 - 10; //  -5
// $multiplicacao  = 10  * 10; //  100
// $modulo = 10  % 2;  //  0

//http://php.net/manual/pt_BR/language.operators.bitwise.php)
//7 * 2 ^ 9 - calculo matematico
// print (7 <<  9);
// // 4 / 2 ^9
// print (4  >>  6);
//~x  = -x  - 1.
// print (~30);

//Construtores de saida
//exit();
//die(); -> apelido para exit
//echo()
//return()
//print()

//Construtores de avaliação
//empty()
//eval()
//include e include_once - gera somente warning
//require e require_once - gera fatal error
//isset()
//unset()
//list()
//Constantes mágicas
// echo preg_replace('/[\d\w\-\/]+(?=basics\.php)/', '', __FILE__);
//__LINE__
//__FILE__
//__DIR__
//__FUNCTION__
//__CLASS__
//__TRAIT__
//__METHOD__
//__NAMESPACE
// echo __FILE__;

//PECL
//instalar pear

//opCache ja vem habiliado pelo que vi ao instalar os pacotes do php no linux
// print_r(opcache_get_status()); echo PHP_EOL;
// print_r(opcache_get_configuration());
// opcache_reset();
//opcache_compile_file('meu_arquivo.php');
//http://php.net/manual/pt_BR/opcache.configuration.php
// $data = '020';  
// $var  = (string)  $data;
// echo $var;
// $a =     9;
// $b =     10;
// echo $a & $b;
// estudar bitwise
// place value   128  64  32  16   8  4   2   1
// $a             0   0   0   0    1  0   0   1   =9
// $b             0   0   0   0    1  0  1    0   =10

// result   8  

// only bit they share together is the 8 bit. So 8 gets returned.

//   $a =     36;
// $b =     103;
// echo $a & $b;

// place value   128  64  32  16   8    4   2   1
// $a             0   0    1   0   0    1   0   0   =36
// $b             0   1    1   0   0    1   1   1   =103

// result  32+4 = 36
// the only bits these two share together are the bits 32 and 4 which when added together return 36.

// $a =     9;
// $b =     10;
// echo $a | $b;

// place value   128  64  32  16   8  4   2   1
// $a             0   0    0  0    1  0   0   1   =9
// $b             0   0    0  0    1  0   1   0   =10

// result 8+2+1 = 11
// 3 bits set, in the 8, 2, and 1 column.add those up 8+2+1 and you get 11

// $a =     9;
// $b =     10;
// echo $a ^ $b;

// place value   128  64  32  16   8  4   2   1
// $a             0   0   0   0    1  0   0   1   =9
// $b             0   0   0   0    1  0   1   0   =10

// result  2+1 = 3
// the 2 bit and the 1 bit that they each have set but don't share. Soooo 2+1 = 3
// echo 5  & 3;

//Paginas para ler
//http://php.net/manual/pt_BR/language.operators.precedence.php
// $a = 1;
// echo $a + $a++; // pode imprimir 2 ou 3
// $i = 1;
// $array[$i] = $i++;
// print_r($array);
//http://php.net/manual/pt_BR/configuration.file.per-user.php
//http://php.net/manual/pt_BR/language.control-structures.php)
// $a = array("a" => "maçã", "b" => "banana");
// $b = array("a" =>"pêra", "b" => "framboesa", "c" => "morango");

// $c = $a + $b; // Uniao de $a e $b
// echo "União de \$a e \$b: \n";
// var_dump($c);

// $c = $b + $a; // União de $b e $a
// echo "União de \$b e \$a: \n";
// var_dump($c);

// $a += $b; // União de $a += $b é $a e $b
// echo "União de \$a += \$b: \n";
// var_dump($a);

