<?php
class test {
    public $a = 1;
    public $b = 2;
    public $c = 3;
    const AE = 4;
}
$jsonTest = new test;
print json_encode($jsonTest);
echo PHP_EOL;
print json_encode([
    'zcpe'  =>  [
        'a' => 'basic <> "',
        'b' => 'advanced',
        'c' => ['drao' => 'monster', 'someKey' => 'someValue'],
        'd' => ['malanderssan', 'from the objects', 'a' => ['1']]
    ]
], JSON_HEX_QUOT | JSON_HEX_TAG, 4);