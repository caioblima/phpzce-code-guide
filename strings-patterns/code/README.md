
# explode:
```php
<?php
$pieces = explode("-", 'some-explodable-string', 2);
var_dump($pieces);
```

# fprintf:
```php
<?php
$file = fopen(getcwd() . '/meu-arquivo.txt',  'w+');
print_r(fprintf($file,  'Hello  %s  ',  'PHP'));
```

# heredoc:
```php
<?php
$heredoc_syntax = <<<heredoc
  My variable with $nowdoc_syntax;
heredoc;
echo $heredoc_syntax;
```

# implode:
```php
<?php
$haystack = [
    'some',
    'implodable',
    'array'
];
var_dump(implode('-', $haystack));
```

# levenshtein:
```php
<?php
$string1 = 'ZCE';
$string2 = 'ZCPE';

print levenshtein($string1, $string2);
```

# ltrim:
```php
<?php
$str = ' aPHPa';
$str = ltrim($str);
echo $str;
```

# metaphone:
```php
<?php
$str1 = "some name";
$str2 = "same name";
var_dump(metaphone($str1), metaphone($str2));
```

# nowdoc:
```php
<?php
$nowdoc_syntax = <<<'nowdoc'
  Literal text
nowdoc;
echo $nowdoc_syntax;

```

# preg_match:
```php
<?php
preg_match('/[^abc]+/', 'abcdefg', $matches);
print_r($matches);
```

# preg_match_all:
```php
<?php
$text  = 'PHP certification book, other book';
$pattern = '/book/';
preg_match_all($pattern, $text, $matches);
print_r($matches);
```

# preg_quote:
```php
<?php
$keywords = '$10 for a black window/s20';
$keywords = preg_quote($keywords, '/');
echo $keywords;
```

# preg_replace:
```php
<?php
$var = preg_replace('/0+(?=[1-9])/', '', '0001');
echo $var;
echo PHP_EOL;

$text = 'Lets apply regex here!';
print preg_replace(['/here/', '/!/'], '?',  $text);
echo PHP_EOL;

$text  = 'The event starts 11/12 dont loose the reprise on 22/10';
print preg_replace('/\/\d{2}/', '${1}', $text);
echo PHP_EOL;

$div = '<div class="teste">some string</div>';
echo preg_replace('/<div[^>]+/', '${0} style="overflow:hidden;"', $div);
echo PHP_EOL;

$text  = '!Lets Apple some expression!';
$total  = 0;
preg_replace('/!/', '', $text, -1, $total);
echo $total;
```

# preg_split:
```php
<?php
$split_text = preg_split("/[\s,]+/", "Some text will be splitted out, this is programming");
print_r($split_text);
```

# printf:
```php
<?php
printf('Certification  %1s  PHP %1s',  'Zend', '7');
//padding examples
$s = 'text';
$t = 'some text';
printf("[%s]\n",      $s); // standard string output
printf("[%10s]\n",    $s); // right-justification with spaces (preenche a esquerda)
printf("[%-10s]\n",   $s); // left-justification with spaces (preenche a direita)
printf("[%010s]\n",   $s); // zero-padding works on strings too
printf("[%'#10s]\n",  $s); // use the custom padding character '#'
printf("[%10.10s]\n", $t); // left-justification but with a cutoff of 10 characters

```

# rtrim:
```php
<?php
$str = ' aPHPa';
$str = rtrim($str, 'a');
echo $str;
```

# similar_text:
```php
<?php
$string1  = 'Book of Certification PHP';
$string2  = 'Certification PHP';
print similar_text($string1,  $string2, $percent);
echo PHP_EOL;
print $percent;

```

# soundex:
```php
<?php
$str1 = soundex("some string to compare");
$str2 = soundex("some string too comparate");
echo ($str1 === $str2);
```

# sprintf:
```php
<?php
$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;
$formatted = sprintf("%.2f", $money);
echo $formatted;
```

# str_replace:
```php

<?php
$text = "Studing javascript Certification Engineer";
$text = str_replace('javascript', 'Zend PHP', $text);
print $text;
//With arrays
$text = 'Bought an book blue and yellow';
print $text = str_replace(['blue',  'yellow'], ['orange', 'black'], $text);
$substitutions = 0;
$text = str_replace(['blue',  'yellow'], 'pink',  $text, $substitutions);
print $substitutions;
```

# str_word_count:
```php
<?php
$name      = 'Zend Certified Engineer';
$chars_map = 'áéíóúâêôãõàÁÉÍÓÚÂÊÔÃÕÀçÇ.,;:-_+=*&!@#$%()<>?[]{}´`\|0123456789';
//Returns each word in an ordered 0,1,2 indexed array
print_r(str_word_count($name, 1));
//Same as above but accepting special characters
print_r(str_word_count($name, 1, $chars_map));
//Return an assoc array where the key of the word is the first index he is found on the string
print_r(str_word_count($name, 2));
```

# strcasecmp:
```php
<?php
$str1 = 'Hello';
$str2 = 'hello';
// Equals
if (strcasecmp($str1, $str2) === 0) {
  echo 'They are the same';
}
//Not equals
if (strcasecmp($str1, $str2) !== 0) {
  echo "They aren't the same";
}
```

# strcmp:
```php
<?php
$str1 = 'Hello';
$str2 = 'hello';
if (strcmp($str1, $str2) !== 0) {
  echo "They aren't the same";
}
if (strcmp($str1, $str2) === 0) {
  echo 'They are the same';
}
```

# string_array:
```php
<?php
$text  = 'Zend Certified Engineer';
for ($i = 0;  $i < strlen($text); $i++)
{
    print $texto[$i];
}
```

# stripos:
```php
<?php
$text = 'ABCDE';
if (stripos($text, 'Abc', 0) !== false) {
  echo 'hello!';
}
```

# stristr:
```php
<?php
$email  = 'AE-@php.net';
print stristr($email, '-@', true);
```

# strlen:
```php
<?php
print strlen('1\n2');
```

# strpos:
```php
<?php
$text = 'abcde';
if (strpos($text, 'Bc', 1) !== false) {
  echo 'hello!';
}
```

# strstr:
```php
<?php
$email  = 'AE-@php.net';
print strstr($email,  'E-@');
```

# substr:
```php
<?php
$code = 'A3-99812.FFGD';
print substr($code, 0,  3); //  A3-
echo substr('abcdef', -4, -2); //cd
```

# substr_replace:
```php
<?php
$var = 'ABCDEFGH:/MNRPQR/';
echo "Original: $var<hr />\n"; 
echo PHP_EOL;
echo substr_replace($var, 'New Value', -7, -1);
```

# trim:
```php
<?php
$str = ' aPHPa';
$str = trim($str, ' a');
echo $str;
```

# vprintf:
```php
<?php
$a = vprintf('Certification %s  %s', [
  'PHP',
  '7'
]);
var_dump($a);
```

# vsprintf:
```php
<?php
echo vsprintf('Using  %s  we %s  a %s  formatted', [
  'echo',
  'show',
  'string'
]);
```
