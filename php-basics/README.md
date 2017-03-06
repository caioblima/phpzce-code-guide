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

# Converting data types (Type Casting)
```php
$a = 1;
$a = (string) $a;

$b = 10.8;
$b = (int) $b;

$c = '10.82';
$c = (float) $c;
```

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
