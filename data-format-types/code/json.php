<?php
//json_encode - http://php.net/manual/en/function.json-encode.php
//json_decode - http://php.net/manual/en/function.json-decode.php
// http://php.net/manual/en/json.constants.php
class test {
  public $a = 1;
  public $b = 2;
  public $c = 3;
  const CARAI = 4;
}
$jsonTest = new test;
print json_encode($jsonTest);
print json_encode([
  'zcpe'  =>  [
    'a' => 'basic <> "',
    'b' => 'advanced',
    'c' => ['drao' => 'monster', 'someKey' => 'someValue'],
    'd' => ['malanderssan', 'from the objects', 'a' => ['1']]
  ]
], JSON_HEX_QUOT | JSON_HEX_TAG, 4);

print_r(json_decode('{"zcpe":{"a":"basico \u003C\u003E \u0022","b":"avancado","c":{"drao":"monster","zica":"do pantano"}}}', false));