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