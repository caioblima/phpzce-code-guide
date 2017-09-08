<?php
// docker run -ti -p 80:80 --name php-local --link mysql-local:mysql  -v /Users/caioliima/dev:/var/www/html -d caio/php71
// http://php.net/manual/en/ref.info.php
// $a = 10;
// $b = 10;
// echo sprintf('%08s', decbin($a));
// echo '<br>';
// echo sprintf('%08s', decbin($b));
// echo '<br>';
// echo $a & $b; //8

// $a = ['test' => 'someValue', 'someOtherKey' => 'someOtherValue'];

// ['test' => $test, 'someOtherKey' => $someOtherVar] = $a;

// print_r($someOtherVar);

// var_dump(gc_enabled());

// gc_collect_cycles();

// print memory_get_usage();

// define('CONSTANT', 1);
// define('_CONSTANT', 2);

// define('EMPTY', '');

// if (!empty(EMPTY)) {

// }
// class XMLParser
// {
//     private $parser;

//     function __construct() 
//     {
//         $this->parser = xml_parser_create();

//         xml_set_object($this->parser, $this);
//         xml_set_element_handler($this->parser, "tag_open", "tag_close");
//         xml_set_character_data_handler($this->parser, "cdata");
//     }

//     function __destruct()
//     {
//         xml_parser_free($this->parser);
//         unset($this->parser);
//     }

//     function parse($data) 
//     {
//         xml_parse($this->parser, $data);
//     }

//     function tag_open($parser, $tag, $attributes) 
//     {
//         var_dump($tag, $attributes); 
//     }

//     function cdata($parser, $cdata)
//     {
//         var_dump($cdata);
//     }

//     function tag_close($parser, $tag) 
//     {
//         var_dump($tag);
//     }    
// }

// $xml_parser = new XMLParser();
// $xml_parser->parse("<A ID='hallo'>PHP</A>");

// $string = 'April 15, 2003';
// $pattern = '/(\w+) (\d+), (\d+)/i';
// $replacement = '${1}1,$3';
// print_r(preg_replace($pattern, $replacement, $string));
// $a = [];
// $a[2] = 'someData';
// $a[1] = 'someData';
// print_r($a);
// $str = '12345';
// print_r(sscanf($str, '%1d%1d%1d%1d%1d'));
$directory = new FilesystemIterator(__DIR__ . '/i-o/src');
$files = new RegexIterator($directory, '/^.+\.php/');
// print_r(get_class_methods(get_class($files)));exit;
foreach ($files as $file) {
  print_r(file_get_contents(__DIR__ . '/i-o/src/' . $file->getFilename()));
  exit();
  echo PHP_EOL;
}
// $filePointer = fopen('./zce.txt', 'r');
// // fwrite($filePointer, 'Studing for ZCE!');
// header('Content-Type: text/html;');
// fpassthru($filePointer);

// class Magic {
//     public $a = "A";
//     protected $b = array("a" => "A", "b" => "B", "c" => "C");
//     protected $c = array(1, 2,3);

//     public function __get($v) {
//         echo "$v";
//         return $this->b[$v];
//     }

//     public function __set($var, $val) {
//         echo "$var: $val";
//         $this->$var = $val;
//     }
// }

// $m = new Magic();
// echo $m->a.",".$m->b.",".$m->c.",";
// $m->c = "CC";
// echo $m->a.",".$m->b.",".$m->c;

// if (!headers_sent()) {
//     header('Location: http://www.google.com/');
//     exit;
// }

// $string = 'Good luck!';
// $start = 10;
// var_dump(substr($string, $start));
// $a = array(true, '0' => false, false => true);
// print_r($a);exit();
// $a = [1 => 'Apple', 3 => 'Cactus', 5 => 'Elderflower'] + 
//             ['Banana', 'Dragon Fruit', 'Fig'];
// echo count($a);

// function magic($p, $q){
//     return ($q == 0) ? $p : magic($q, $p % $q);
// }

// var_dump(magic(2, 2));

// $var1 = "Hello";
// $var2 = "hello";
// if (strcmp($var1, $var2)) {
//     echo '$var1 is not equal to $var2 in a case sensitive string comparison';
// }
// echo 1 ^ 2;
//  class Base {
//     protected static function whoami() {
//         echo "Base ";
//     }
//     public static function whoareyou() {
//         static::whoami();
//     }
// }
// class A extends Base {
//     public static function test() {
//         Base::whoareyou();
//         self::whoareyou();
//         parent::whoareyou();
//         A::whoareyou();
//         static::whoareyou();
//     }
//     public static function whoami() {
//         echo "A ";
//     }
// }
// class B extends A {
//     public static function whoami() {
//         echo "B ";
//     }
// }
// B::test();

// echo '1' . (print '2') + 3;
// echo "22" + "0.2", 23 . 1;

// $first = "second";
// $second = "first";
// // echo $$$first;

// class C {
//     public $x = 1;
//     function __construct() { ++$this->x; }
//     function __invoke() { return ++$this->x; }
//     function __toString() { return (string) --$this->x; }
// }
// $obj = new C();
// echo $obj();

// class Test {
//     public function __call($name, $args) {
//         call_user_func_array(array('static', "test$name"), $args);
//     }
//     public function testS($l) {
//         echo "$l,";
//    }
// }
// class Test2 extends Test {
//     public function testS($l) {
//     echo "$l,$l,";
//     }
// }
// $test = new Test2();
// $test->S('A');

// class Magic {
//     protected $v = array("a" => 1, "b" => 2, "c" => 3);
//     public function &__get($v) {
//         return $this->v[$v];
//     }
// }
// $m = new Magic();
// $m->d[] = 4;
// echo $m->d[0];

// $date1 = new DateTime('2014-02-03');
// $date2 = new DateTime('2014-03-02');

// var_dump($date2 > $date1);
// $data = '$1Ä2';
// $count = strlen($data);

// $str = '&#10004; one of the following';
// echo str_replace('&#10004;', 'Check', $str);

// function counter($start, &$stop) {
//     if ($stop > $start) {
//         return;
//     }
//     $start--;
//     ++$stop;
//     print_r('a'); echo PHP_EOL;
//     counter($start, $stop);
// }
// $start = 5;
// $stop = 2;
// counter($start, $stop);

// class Number {
//     private $v;
//     private static $sv = 10;
//     public function __construct($v) { $this->v = $v; }
//     public function mul() {
//         return static function ($x) {
//             return isset($this) ? $this->v*$x : self::$sv*$x;
//         };
//     }
// }
// $one = new Number(1);
// $two = new Number(2);
// $double = $two->mul();
// $x = Closure::bind($double, null, 'Number');
// echo $x(5);

// try {
//     class MyException extends Exception {};
//     try {
//         throw new MyException;
//     }
//     catch (Exception $e) {
//         echo "1:";
//         throw $e;
//     }
//     catch (MyException $e) {
//         echo "2:";
//         throw $e;
//     }
// }
// catch (Exception $e) {
//     echo get_class($e);
// }

// $array = array(1,2,3);
// while (list(,$v) = each($array));
// var_dump(current($array));

// echo strtr('Apples and bananas', 'ae', 'ea');

// printf('%010.6f', 22);

// echo 0x33, ' monkeys sit on ', 011, ' trees.';

// $str = "The cat sat on the roof of their house.";
// $matches = preg_split("/(the)/i", $str, -1, PREG_SPLIT_DELIM_CAPTURE);
// print_r($matches);

// echo strlen(md5(rand(), TRUE));

// echo strpos("me myself and I", "m", 2);

// $pieces = explode("/", "///");
// print_r($pieces);
// echo str_replace(array("Apple","Orange"), array("Orange","Apple"), "Oranges are orange and Apples are green");

// $a=5;
//     $b=12;
//     $c=10;
//     $d=7;
//     $e=($a*$b)+$c*$d/$a;
//     print($e);

// var_dump( (bool) 5.8 );
// echo date("M-d-Y", 'http://in2.php.net/mktime(0, 0, 0, 12, 32, 1995)');

// echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1965));
// echo (int) ((0.1 + 0.7) * 10);

// define('FOO', 10);
//     $array = array(10 => FOO,"FOO" => 20);
//     print_r($array[$array[FOO]]);exit();
//     print $array[$array[FOO]] * $array["FOO"];

// $x=0;
//     $i;
//     for($i=0;$i<5;$i++)
//     {
//     	echo $x; echo PHP_EOL;
//     	// echo $i; echo PHP_EOL;
//         $x+=$i;
//     }
//     print($x);

// function modvalue() {
//        $a=20;
//        $b=4;
//        $c=$a%$b;
//        print($c);
// } 
// modvalue();

// echo 022;
 // echo date('l \t\h\e jS');
 // $x = 123 == 0123;
// $a=20%-8;
//     echo $a;

// echo (int) "Jason 1235";

// $sale = 200;
//     $sale = $sale- + 1;
//     echo $sale;

// $a = "b";
//     $b = 20;
//     echo $$a;

// $a = "b";
//     $b = 20;
//     ${20} = $a;
//     echo ${$b};

// $num = -123test;
//     $newnum = abs( $num );
//     print $newnum;

// $a = 6 - 10 % 4;
//     echo $a;

// $a = 'myVar';
 
// switch($a) {
//     case 0:
//         echo 'case 0';
//     case 'myVar':
//         echo 'case myVar';
//     case 'nothing':
//         echo 'case nothing';
// }

// for ($i = 5; ; $i++) {
//         if ($i < 10) {
//             break;
//         }
//     }
//     echo $i;

// $first = "second";
// $second = "first";
// echo $$$first;
// echo '1' . (print '2') + 3;

// echo "1" + 2 * '0x02';

// $date1 = new DateTime('2014-02-03');
// $date2 = new DateTime('2014-03-02');

// var_dump($date2 > $date1);

// header('Content-Type: text/html; charset=iso-8859-1');
// echo '&#9986;&#10004;&#10013;';

// $string = 'teste zce certification';
// var_dump(strstr($string, 'cert', false));
// echo 'teste ', 020;