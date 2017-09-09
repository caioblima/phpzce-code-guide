
# array_diff:
```php
<?php
$a  = [
    'pedra',
    'papel',
];
$b  = [
    'tesoura',
];
$diff = array_diff($a, $b);
var_dump($diff);
```

# array_diff_assoc:
```php
<?php
$a  = [
  'p' =>  'pedra',
  'papel',
];
$b  = [
  'tesoura',
  'pedra',
];
$diff = array_diff_assoc($a, $b);
var_dump($diff);
```

# array_diff_key:
```php
<?php
$a  = ['a'  =>  'arroz',  'f' =>  'feijão'];
$b  = ['c'  =>  'camarão',  'z' =>  'arroz'];
$diff = array_diff_key($a, $b);
print_r($diff);
```

# array_diff_uassoc:
```php
<?php
$a  = [
    1,
    2,
    'a' =>  'carro',
];

$b  = [
    'a' =>  'carro',
    3,
    5,
];

$diff = array_diff_uassoc($a, $b, function($a, $b) {
    if ($a === $b) {
        return 0;
    }

    return ($a > $b) ? 1: -1;
});

var_dump($diff);
```

# array_diff_ukey:
```php
<?php
$a  = [
    'b' =>  1,
    'a' =>  'carro',
    'c' =>  3,
];

$b  = [
    'c' =>  'carro',
    'a' =>  'nada',
    5,
];

$diff = array_diff_ukey($a, $b, function($aKey,  $bKey) 
{
    if ($aKey === $bKey) {
        return 0;
    }

    return ($aKey > $bKey) ? 1 : -1;
});

print_r($diff);
```

# array_filter:
```php
<?php
$input = 'f1';

$arr = [
    'key1' => 'F1 - Ferrari',
    'key2' => 0,
    'key3' => 'F1 - Mercedes',
    'key4' => 0,
];

$filter1 = array_filter($arr);
var_dump($filter1);

$filter2 = array_filter($arr, function ($item) use ($input) {
    return (stripos(strval($item), $input) !== false); 
});
var_dump($filter2);
```

# array_key_exists:
```php
<?php
$computer = [
    'componentes' =>  null
];

if  (array_key_exists('componentes',  $computer))  {
    print 'The key exists!';
}
```

# array_merge:
```php
<?php
$animals  = [];
$union  = array_merge($animals, ['gato' => 'gato'], [5 => 'cachorro'], [6 => 'cachorro'], ['gato' => 'overrided string value']);
var_dump($union);
$mvc  = [
    'a' =>  'laravel',
    1 =>  'silex',
    2 =>  'symfony'
];
$orm  = [
    'b' =>  'doctrine',
    1 =>  'eloquent'
];
$techs = array_merge($mvc, $orm);
var_dump($techs);
```

# array_pop:
```php
<?php
$house = [
    19 => 'janela',
    20 => 'garagem',
];
array_pop($house);
var_dump($house);
```

# array_push:
```php
<?php
$electronics  = [];
array_push($electronics,  'videogame',  'tv', 'dvd');
var_dump($electronics);

$electronics  = [
  'radio'
];

array_push($electronics, ['videogame', 'tv', 'dvd'], [], 123, 456, new \StdClass());
var_dump($electronics);
```

# array_shift:
```php
<?php
$casa = [
    19 => 'janela',
    20 => 'garagem',
];
array_shift($casa);
var_dump($casa);
```

# array_unshift:
```php
<?php
$house = [
    19 => 'janela',
    20 => 'garagem',
];
array_unshift($house,  ['comodos'],  'porta');
var_dump($house);

```

# array_walk:
```php
<?php
$phpVersions  = [
    'PHP 5.5',
    'PHP 5.6',
    'PHP 7.1',
];
array_walk($phpVersions,  function  ($value, $key) {
    echo 'Key: '.$key.' Value: '.$value.' / ';
    echo PHP_EOL;
});

$phpLaunchDate = [
    '20/06/2013',
    '28/08/2014',
    '13/04/2017',
];
array_walk($phpVersions,  function  ($value, $key, $additionalData) {
    printf('%d  =>  %s - launch date: %s ', $key, $value,  $additionalData[$key]);
},  $phpLaunchDate);

$total = 0;
array_walk($phpVersions,  function  ($value, $key) use (&$total) {
    $total++;
});
var_dump($total);
```

# arsort:
```php
<?php
$fruits = [
  'uva',
  'banana',
  'caju',
];

arsort($fruits);
var_dump($fruits);
```

# asort:
```php
<?php
$fuits = [
    'uva',
    'banana',
    'caju',
];
asort($fuits);
var_dump($fuits);
```

# count:
```php
<?php
$array  = [
    "1" =>  "A",  1 =>  "B", "C",  2 =>  "D"
];

print count($array);
```

# for:
```php
<?php
$chocolate  = [
    'branco',
    '500g',
    'R$ 5,50',
];
for ($i = 0;  $i  < count($chocolate);  $i++) {
    print $chocolate[i];
}

$computers = [
    ['2GB', '80GB', 'duo core'],
    ['6GB', '120GB',  'core i5'],
    ['4GB', '500GB',  'core i7'],
    ['4GB', '500GB',  'core i7'],
];

for ($i = 0;  $i < count($computers); $i++) {
    for ($c = 0;  $c < count($computers[$i]); $c++) {
        print $computers[$i][$c].' - ';
    }
}
for ($i = 0;  $i < count($computers); $i++) {
    list($memory,  $hd,  $cpu) = $computers[$i];
    print $memory  .' - '. $hd .' - '. $cpu;
}
```

# foreach-generators:
```php
<?php
$numGenerator = function () {
    for ($i = 0;  $i < 10; $i++) {
        yield $i;
    }
};

foreach ($numGenerator() as $num) {
    if ($num === 0) {
        continue;
    }
    
    echo $num . ' ';
}

$input = <<<'EOF'
1;PHP;Likes dollar signs
2;Python;Likes whitespace
3;Ruby;Likes blocks
EOF;

$inputParser = function ($input) {
    foreach (explode("\n", $input) as $line) {
        $fields = explode(';', $line);
        $id = array_shift($fields);

        yield $id => $fields;
    }
};

foreach ($inputParser($input) as $id => $fields) {
    echo "$id:\n";
    echo "    $fields[0]\n";
    echo "    $fields[1]\n";
}
```

# GenericExamples:
```php
<?php
$a = ['a', 'b'];
$b = ['first' => 'value', 'second' => 'value'];
$a[] = 'c';
$d = ['a' => 'a', 'b' => 'b'];
$d[] = ['c', 'd'];
var_dump($d);

class A {
    protected $a; // This will become '\0A\0A'
}

class B extends A {
    private $b; // This will become '\0B\0A'
    public $c = 'c'; // This will become 'AA'
}

var_dump((array) new B());
```

# krsort:
```php
<?php
$blocks = [
    'B' =>  'CASA 83',
    'C' =>  'CASA 82',
    'A' =>  'CASA 81',
];
krsort($blocks);
var_dump($blocks);
```

# ksort:
```php
<?php
$blocks = [
    'B' =>  'CASA 83',
    'C' =>  'CASA 82',
    'A' =>  'CASA 81',
];
ksort($blocks);
var_dump($blocks);
```

# list:
```php
<?php
$someData = [
    'userName' => 'caio',
    'pass' => 'test',
];

list('userName' => $userName, 'pass' => $pass) = $someData;
//or shorthand syntax - Symmetric array destructuring 
['userName' => $userName, 'pass' => $pass] = $someData;

echo 'User: '. $userName . ' ' . 'Pass: '. $pass;

$chocolate  = [
    'branco',
    '500g',
    'R$ 5,50',
];
list($type, $size, $price) = $chocolate;
echo $type .' '. $size  .' '. $price;
```

# natsort:
```php
<?php
$images  = [
    'img12.png',
    'img10.png',
    'img2.png', 
    'img1.png'
];
natsort($images);
var_dump($images);
```

# rsort:
```php
<?php
$values  = [
    1,
    2,
    3,
    4,
];
rsort($values);
var_dump($values);
```

# sort:
```php
<?php
$cars = [
    'gol',
    'fiesta',
    'uno',
];
sort($cars);
var_dump($cars);

$numbers  = [
    '29',
    '12',
    '14',
];
sort($numbers,  SORT_NUMERIC);
var_dump($numbers);

$strings  = [
    'PHP',
    'abc',
    'Olá',
];
sort($strings,  SORT_STRING);
var_dump($strings);

$letters = [
    'b',
    'z',
    'm',
    'c',
];
sort($letters, SORT_NATURAL);
var_dump($letters);exit;

```

# usort:
```php
<?php
$blocks = [
    'B' =>  'CASA 83',
    'C' =>  'CASA 82',
    'A' =>  'CASA 81',
];

usort($blocks, function ($a,  $b) {
    print_r($a); echo ' '; print_r($b);
    return ($a < $b) ? -1 : 1;
});
echo PHP_EOL;
print_r($blocks);
```
