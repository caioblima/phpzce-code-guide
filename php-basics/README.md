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

    integer
    boolean - also called double
    float
    string
Composite Types:

    array
    object
Special Types:
    
    resource
    null

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
* [Data Format & Types](xml-json-html)