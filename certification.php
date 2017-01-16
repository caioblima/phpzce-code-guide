<?php
// $x = 8;
// echo $x >> 1;
// function test() {
//   return 'a';
// }

// echo call_user_func('test');
// class Foo
// {
//     static $variable = 'static property';
//     static function Variable()
//     {
//         echo 'Method Variable called';
//     }
// }

// echo Foo::$variable; echo PHP_EOL;// This prints 'static property'. It does need a $variable in this scope.
// $variable = "Variable";
// Foo::$variable();  // This calls $foo->Variable() reading $variable in this scope.
// $a = array('a', 'b', 'c');
// $a = (unset) $a;
// echo $a;
// $patterns = array ('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/',
//                    '/^\s*{(\w+)}\s*=/');
// $replace = array ('\4/\3/\1\2', '$\1 =');
// echo preg_replace($patterns, $replace, '{startDate} = 1999-5-27');
// setlocale(LC_MONETARY, "pt_BR");
// echo number_format("100000.698", 2, ',', '.');
// $a = 10;
// echo "The value of \$a is \"$a\".";
// $a = 'teste';
// $$a = 'docarai';
// echo $teste;
// $x = 6;
// print_r($x >> 2);exit;
// $a = 'red';
// $b = 'blue';
// print_r(strcmp($a, $b));
// function myCmp ($left, $right)
// {
//   // Sort according to the length of the value.
//   // If the length is the same, sort normally
//   echo $left .' '. $right . PHP_EOL; 
//   $diff = strlen ($left) - strlen ($right);
//   print_r($diff);exit;
//   if (!$diff) {
//     return strcmp ($left, $right);
//   }
//   return $diff;
// }
// $a = array (
// 'three',
// '2two',
// 'one',
// 'two'
// );
// usort ($a, 'myCmp');
// print_r($a);