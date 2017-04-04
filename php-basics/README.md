# PHP Basics
This topic we'll show the basic and the language essentials to start and app with PHP. PHP is intented to provide simplicity in development process.

# Code Examples
[Here](code)

# PHP tags

```php
/*
<?php ?> - Standard Tags, enabled by default
<?= ?> - Echo Tags, Default PHP 5.4+
<? ?> - Short Tags, PHP Ini option - Default off
<% %> - ASP Tags, PHP Ini option - Default off, Removed on PHP 7.0
*/
```

# Data Types
Scalar Types:

    integer - a signed numeric value
    boolean - a value that can be true or false
    float - signed floating-point range numeric value
    string - a collection of binary data
Composite Types:

    array - container of mixed data, from scalar types to objects or arrays inside arrays
    object - container of code and data. they are the basis of object oriented programming
Special Types:
    
    resource - external resources that are not natively of PHP like file handling, image manipulation.
    null - indicate variable that has no value and has set to the special value NULL or if the value hasn't been set on the variable.
    
# Variables
```php
//Store a value
$carOneValue = 1;
/* Reference carOneValue variable to the new $carOneValueReference.*/
$carOneValueReference = &$carOneValueReference;
//Change value to the two variables
$carOneValueReference = 100.80
```

# Variable variables
```php
$myVar = 'someValue';
$$myVar = 'anotherValue';
echo $someValue; //prints anotherValue
```

# Variables as reference
```php
$carOneValue = 1;
function sumCarValue(&$carValue, $plusValue = 0) {
  return $carValue = $carValue + $plusValue;
}
sumCarValue($carOneValue, 1000);
var_dump($carOneValue);
```
# Check if variable exists
```php
if (isset($someVar)) {
    //she exists
} else {
    //She didn't exists
}

//or check directly, i recommend avoid using 'else' as possibe in PHP
if (!isset($someVar)) {
    //she didn't exist
}
```

# Converting data types (Type Casting)
```php
$a = 1;
$a = (string) $a;

$b = 10.8;
$b = (int) $b;

$c = '10.82';
$c = (float) $c;
```

**There are some functions to cast types if you prefer, see in the table below:**

| Tag | Description |
| ------ | ------ |
| intval() | Cast the given variable to an integer |
| floatval() | Cast the given variable to a float |
| strval() | Cast the given variable to a strin |
| boolval() | Cast the given variable to a boolean |
| settype() | Cast the given variable to a given type |

# Comment types
```php
// Single line comments

# Single line comments

/* 
Multi-line
Comments
*/

/**
 * API Documentation Example
 *
 * @param string $bar
 */
function foo($bar) { }
```

# Whitespace rules
* You cannot have any whitespace between <? and php
* You cannot break apart keywords (e.g.: whi le, fo r, and funct ion)
* You cannot break apart variable names and function names (e.g.:
* $var name and function foo bar())
* Heredoc and Nowdoc closing identifiers must not be preceded by
* anything, including whitespace.

# Code Blocks
```php
//If statements
if (expression) {
    //Some code here
} else {
    //Some other expressions here
}
//Function statements
function car() {
    //Some code here
}
//Function call
car();
```

# Language Constructs - Output
**Check on the php.net manual, because some constructors can accept parameters like a function**
```php
exit;
die; //a nickname for exit
echo;
return;
print;
```

# Evaluation Constructs
```php
empty();
eval();
include e include_once //generate warning if file not found
require e require_once //generate fatal error if file not found
isset()
unset()
list()
```

# Magic constants
```php
__LINE__;
__FILE__;
__DIR__;
__FUNCTION__;
__CLASS__;
__TRAIT__;
__METHOD__;
__NAMESPACE__;
```

# Language operators
**Bear in mind to check operator precende in [PHP Manual.](https://secure.php.net/manual/pt_BR/language.operators.precedence.php)**
Assignment operator:
```php
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
```
Arithmetic operator:
```php
$plus = 2 + 2;
$minus = 2 - 2;
$multiplication = 2 * 2;
$division = 2 / 2;
$mod = 2 % 2;
```
Referencing values:
```php
$a = 1;
$b = &$a;
```

Bitwise operator:
**With sprintf with leading zeros on the left and decbin, we can check the binary value of our two to check bits that are active or not and sum the result accoding to which operator we're using**

```php
// NOT - OPERATOR
$a = ~1; //0
// AND - Share the same bit active  
$a = 8;
$b = 10;
echo sprintf('%08s', decbin($a));
echo '<br>';
echo sprintf('%08s', decbin($b));
echo '<br>';
echo $a & $b; //8
//OR - OPERATOR
$a = 9;
$b = 10;
echo sprintf('%08s', decbin($a));
echo '<br>';
echo sprintf('%08s', decbin($b));
echo '<br>';
echo $a | $b; //11
//XOR - OPERATOR
$a = 9;
$b = 10;
echo sprintf('%08s', decbin($a));
echo '<br>';
echo sprintf('%08s', decbin($b));
echo '<br>';
echo $a ^ $b; //3
```
Bitwise multiplication & division:
```php
//Multiplication by the power of 2
$x = 2;
echo $x << 1; // Outputs 4
echo $x << 2; // Outputs 8
//Division by the power of 2
$x = 4;
echo $x >> 1; // Outputs 2
echo PHP_EOL;
echo $x >> 2; // Outputs 1
```

# Comparison operators
Equivalence:
```php
'a' == 'b' //false
'1' == '1' //true
```
Identity:
```php
'a' === 'b' //false
1 === '1' //false
1 === 1 //true
```
Not equivalent:
```php
'a' != 'b' //true
'1' != '1' //false
```
Not identical:
```php
'a' !== 'b' //true
'a' !== 'a' //false
1 !== '1' //true
1 !== 1 //false
```
Less than and less & equals to:
```php
15 <= 15 //true
15 < 15 //false
15 < 16 //true
```
Greater than and greater & equals:
```php
15 >= 15 //true
15 > 15 //false
16 > 15 //true
```
Spaceship operator:
```php
1 <=> 1 //0
1 <=> 2 //-1
2 <=> 1 //1
```
Null Coalescing operator
```php
$a = ['a' => 1, 'b' => 3];
$two = $a['2'] ?? '2';
```

# Binary operators
And:
```php
$a = 1;
$b = 2;
$a === 1 && $b === 2 //true if both are true
$a === 1 and $b === 3 //false if both are true, the change here is operator precedence
```
Not:
```php
var_dump(!a) //false
//Or
$a === 1 || $b === 3 //true if any of expressions evaluate to true
$a === 2 or $b === 2 //true if any of expressions evaluate to true, the change here is operator precedence
```
Xor:
```php
$a === 1 xor $b === 3 //true if only one of expressions evaluate to true
$a === 1 xor $b === 2 //false if only one of expressions evaluate to true, the change here is operator
```

# Execution operators
Backticks:
```php
$output = `ls -al`;
echo "<pre>$output</pre>";
```

# Error control operators
```php
x = @fopen("/tmp/foo"); //Ignore default error messages
```

# String operators
Concatenation:
```php
$a = 'Studing';
$b = 'ZCE';
echo $a .' '. $b;
```
Concatenating assignment:
```php
$a = 'Studing';
$a .= ' ZCE';
echo $a;
```

# Array operators
Union:
```php
$a = ['one' => 1, 'two' => 2];
$b = ['one' => 2, 'two' => 4, 'three' => 3];
print_r($a + $b);
print_r($a += $b);
```
Equality:
```php
$a = ['one' => '1', 'two' => 2];
$b = ['one' => 1, 'two' => 2];
print_($a == $b); //true
print_($a === $b); //false
```
Inequality:
```php
$a = ['one' => '1', 'two' => 2];
$b = ['one' => 1, 'two' => 2];
print_($a != $b); //false
print_($a <> $b); //false
```
Non-indentity:
```php
$a = ['one' => '1', 'two' => 2];
$b = ['one' => 1, 'two' => 2];
print_($a !== $b); //true
```
Type operators:
```php
class A {}
class B extends A {}
class C {}
$b = new B;
$c = new C;
var_dump($b instanceof B); //Instance of A either B
var_dump($c instanceof A); //false
```

# Control structures
If then else:
```php
if (exp1) {
    //some code
} elseif (exp2) {
    //some code
} else {
    //some code
}
```
Nested if then else:
```php
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
```
Ternary:
```php
$queryParamsArray = (isset($_GET['q'])) ? explode('&', $_GET['q']) : false;
print_r($queryParamsArray);
```
Switch:
```php
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
```
Foreach:
```php
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
```
For:
```php
for ($i=0; $i < 10; $i++) { 
  if ($i === 6) {
    continue;
  }
    echo $i; //012345789
}
```
While:
```php
$i = 1;
while ($i <= 10) {
  echo $i++;
}
```

# Namespaces
This is better check files in [Namespaces section](php-zce-code-guide/php-basics/code/namespaces)
