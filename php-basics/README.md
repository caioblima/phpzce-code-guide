# PHP Basics
This topic we'll show the basic and the language essentials to start and app with PHP. PHP is intented to provide simplicity in development process.

# PHP tags

| Tag | Description | Enabled by |
| ------ | ------ | ------ |
| <?php ?> | Standard Tags | Default
| <?= ?> | Echo Tags - Prints result of an expression | Default PHP 5.4+
| <? ?> | Short Tags | PHP Ini option - Default off
| <% %> | ASP Tags | PHP Ini option - Default off, Removed on PHP 7.0

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
Assignment operator:
```php
$var = 1;
$var2 = ++$var;
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

# Assignment operator
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

# Comparison operators
```php
//Equivalence
'a' == 'b' //false
'1' == '1' //true
//Identity
'a' === 'b' //false
1 === '1' //false
1 === 1 //true
//Not equivalent
'a' != 'b' //true
'1' != '1' //false
// Not identical
'a' !== 'b' //true
'a' !== 'a' //false
1 !== '1' //true
1 !== 1 //false
```
