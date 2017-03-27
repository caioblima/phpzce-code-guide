<?php
//Assignement
$a = 'by value';
$b = &$a;
echo $a;
echo PHP_EOL; //php end of line constant
echo $b;
echo PHP_EOL;
$b = 'Changed value in the reference variable';
echo $a;
echo PHP_EOL;
echo $b;
//Arithmetic
$plus = 2 + 2;
$minus = 2 - 2;
$multiplication = 2 * 2;
$division = 2 / 2;
$mod = 2 % 2;
//Bitwise
$a =     9;
$b =     10;
echo $a & $b;
// place value   128  64  32  16   8  4   2   1
// $a             0   0   0   0    1  0   0   1   =9
// $b             0   0   0   0    1  0  1    0   =10
// result   8  
// only bit they share together is the 8 bit. So 8 gets returned.
$a = 36;
$b = 103;
echo $a & $b;
// place value   128  64  32  16   8    4   2   1
// $a             0   0    1   0   0    1   0   0   =36
// $b             0   1    1   0   0    1   1   1   =103
// result  32+4 = 36
// the only bits these two share together are the bits 32 and 4 which when added together return 36.

$a = 9;
$b = 10;
echo $a | $b;
// place value   128  64  32  16   8  4   2   1
// $a             0   0    0  0    1  0   0   1   =9
// $b             0   0    0  0    1  0   1   0   =10
// result 8+2+1 = 11
// 3 bits set, in the 8, 2, and 1 column.add those up 8+2+1 and you get 11

$a = 9;
$b = 10;
echo $a ^ $b;
// place value   128  64  32  16   8  4   2   1
// $a             0   0   0   0    1  0   0   1   =9
// $b             0   0   0   0    1  0   1   0   =10
// result  2+1 = 3
// the 2 bit and the 1 bit that they each have set but don't share. Soooo 2+1 = 3
// echo 5  & 3;

//Bitwise multiplication and division by the power of 2
//Multiplication by the power of 2
$x = 2;
echo $x << 1; // Outputs 4
echo $x << 2; // Outputs 8
//Division by the power of 2
$x = 4;
echo $x >> 1; // Outputs 2
echo PHP_EOL;
echo $x >> 2; // Outputs 1

//Comparison operators
//Equivalence:
'a' == 'b' //false
'1' == '1' //true
//Identity:
'a' === 'b' //false
1 === '1' //false
1 === 1 //true
//Not equivalent:
'a' != 'b' //true
'1' != '1' //false
//Not identical:
'a' !== 'b' //true
'a' !== 'a' //false
1 !== '1' //true
1 !== 1 //false
//Less than and less & equals to:
15 <= 15 //true
15 < 15 //false
15 < 16 //true
//Greater than and greater & equals:
15 >= 15 //true
15 > 15 //false
16 > 15 //true
//Spaceship operator:
1 <=> 1 //0
1 <=> 2 //-1
2 <=> 1 //1
//Null Coalescing operator
$a = ['a' => 1, 'b' => 3];
$two = $a['2'] ?? '2';
//Binary operators
//And:
$a = 1;
$b = 2;
$a === 1 && $b === 2 //true if both are true
$a === 1 and $b === 3 //false if both are true, the change here is operator precedence
//Not
var_dump(!a) //false
//Or
$a === 1 || $b === 3 //true if any of expressions evaluate to true
$a === 2 or $b === 2 //true if any of expressions evaluate to true, the change here is operator precedence
//Xor:
$a === 1 xor $b === 3 //true if only one of expressions evaluate to true
$a === 1 xor $b === 2 //false if only one of expressions evaluate to true, the change here is operator
//Execution operators
//Backticks:
$output = `ls -al`;
echo "<pre>$output</pre>";
//Error control operators
x = @fopen("/tmp/foo"); //Ignore default error messages
//String operators
//Concatenation:
$a = 'Studing';
$b = 'ZCE';
echo $a .' '. $b;
//Concatenating assignment:
$a = 'Studing';
$a .= ' ZCE';
echo $a;
//Array operators
//Union:
$a = ['one' => 1, 'two' => 2];
$b = ['one' => 2, 'two' => 4, 'three' => 3];
print_r($a + $b);
print_r($a += $b);
//Equality:
$a = ['one' => '1', 'two' => 2];
$b = ['one' => 1, 'two' => 2];
print_($a == $b); //true
print_($a === $b); //false
//Inequality:
$a = ['one' => '1', 'two' => 2];
$b = ['one' => 1, 'two' => 2];
print_($a != $b); //false
print_($a <> $b); //false
//Non-indentity:
$a = ['one' => '1', 'two' => 2];
$b = ['one' => 1, 'two' => 2];
print_($a !== $b); //true
//Type operators:
class A {}
class B extends A {}
class C {}
$b = new B;
$c = new C;
var_dump($b instanceof B); //Instance of A either B
var_dump($c instanceof A); //false
//Control structures
//If then else:
if (exp1) {
    //some code
} elseif (exp2) {
    //some code
} else {
    //some code
}
//Nested if then else:
if ($omething) {
  //some code
  if ($somethingElse) {
    //some code
  } else {
    //some code
  }
} else {
  //some code
}
//Ternary:
$queryParamsArray = (isset($_GET['q'])) ? explode('&', $_GET['q']) : false;
print_r($queryParamsArray);
//Switch:
$a = ['one' => '1', 'two' => '2'];
switch ($a) {
  case 'one':
    # code...
    break;
  case 'two':
    # code...
    break;
  default:
    # code...
    break;
}
//Foreach:
$a = ['one' => '1', 'two' => '2'];
//Lopp keys and values
foreach ($variable as $key => $value) {
  if ($key === 'one') {
    echo 'Exited on one';
    break;
  }
}
//Loop only values
foreach ($variable as $value) {
  # code...
}
//For:
for ($i=0; $i < 10; $i++) { 
  if ($i === 6) {
    continue;
  }
    echo $i; //012345789
}
//While:
$i = 1;
while ($i <= 10) {
  echo $i++;
}