<?php
declare(strict_types=1);
// $file = fopen('./zce.txt', 'w+');
// print_r($file);
// fclose($file);
//Not write
// $file  = fopen('./zce.txt', 'r');
// fwrite($file,  'Conteúdo a ser inserido');
// fclose($file);
// $studing_zce = 'Studing for ZCE';
// $file = fopen('./zce.txt', 'w+');
// fwrite($file, $studing_zce, strlen($studing_zce));
// rewind($file);
// while (feof($file) !== true) {
//   print fread($file, filesize('./zce.txt'));
//   print fgets($file);
// }
// fclose($file);
// $file_path = './zce2.txt';
// if (file_put_contents($file_path, 'Easy way to create a file!')) {
//   print_r(file_get_contents($file_path));
// } 
//stream contexts
$options = [
  'ftp' => [
    'proxy' =>  'ftp://proxy:3128'
  ],
];
$params = [];
$context = stream_context_create($options,  $params);
print(file_get_contents('ftp://speedtest.tele2.net/',  false,  $context));
exit;
print_r(file_get_contents('./zce.txt'));
$context = stream_context_create([
      'http' => [
      'method' => 'GET',
      'header' => 'Content-Type:  text/html',
    ],
  ]
);
print file_get_contents('http://www.google.com',  false,  $context);

// $put  = fopen('php://input',  'r');
// print fgets($put);
// var_dump(file_get_contents('php://input'));
// $file = fopen('compress.zlib://./testFile.tar.gz', 'r');
// while (!feof($file)) {
//   print_r(fgets($file));
// }

// if(file_put_contents('compress.zlib://./compressedFile.tar.gz', 'Vou ser comprimido!')) {
//   echo file_get_contents('compress.zlib://./compressedFile.tar.gz');
// }

// print file_get_contents('data://text/plain, Utilizando  o wrapper data://');

// $userInputData = 'VXRpbGl6YW5kbyBzdHJlYW1zIGVtIFBIUCAh';
// print base64_decode($userInputData);
// print file_get_contents('data://text/plain;base64,VXRpbGl6YW5kbyBzdHJlYW1zIGVtIFBIUCAh');

$directory = new FilesystemIterator('../php-basics/code');
// foreach ($directory as $value) {
//   print_r($value);
// }
// print_r($directory);exit;
// $iterator = new RecursiveIteratorIterator($directory);
$files = new RegexIterator($directory, '/^.+\.php/');
// print_r(get_class_methods(get_class($files)));exit;
foreach ($files as $file) {
  print_r($file->getFilename()); 
  echo PHP_EOL;
}
//RecursiveDirectoryIterator
// $directory  = new \RecursiveDirectoryIterator('glob://./*.txt');
// foreach ($directory as $file) {
//   print_r($file->getFilename());
//   echo PHP_EOL;
// }
//Creating phar file
// $phar = new \Phar('./app.phar');
// $phar->startBuffering();
// $phar->buildFromDirectory('./src',  '/(.*)\.php/');
// $phar->stopBuffering();
// echo  'Arquivo  salvo com sucesso';
// print_r(file_get_contents('phar://./app.phar/TraitTest.php'));
// $phar = new \RecursiveTreeIterator(new RecursiveDirectoryIterator('phar://app.phar'));
// foreach ($phar as $file)  {
//   print_r($file);
//   echo PHP_EOL;
// }

//Further use
// $file = file_get_contents('./src/MainClass.php');
// $formatter = <<<CODE
// ```php
// $file
// ```
// CODE;
// file_put_contents('./README.md', $formatter);

// class ZcpeWrapper {
//   const ZCE_BASE_DIR = __DIR__;
//   static $uriData = [];
//   private $file;
//   private $filePath;
//   public function stream_open($uri, $mode)
//   {
//     static::$uriData = parse_url($uri);
//     $this->filePath = static::ZCE_BASE_DIR . '/' .  static::$uriData['host'];
//     if (!file_exists($this->filePath)) {
//       throw new \Exception('The informe file does not exists!');
//     }
//     $this->file = fopen($this->filePath, $this->getMode(static::$uriData['fragment']));
//     return true;
//   }
//   private function getMode(&$uriFragment)
//   {
//     return $uriFragment = preg_replace('/^mode\=/', '', $uriFragment);
//   }
//   public function getFileStat()
//   {
//     return stat($this->filePath);
//   }
//   public function stream_read($bytes)
//   {
//     return fread($this->file,  $bytes);
//   }
//   public function stream_eof()
//   {
//     return feof($this->file);
//   }
//   public function stream_stat()
//   {
//     return $this->getFileStat();
//   }
//   public function url_stat($path, $flags)
//   {
//     if (preg_match('/^zcpe\:\/\//', $path)) {
//       return is_readable($this->filePath); 
//     }
//     return false;
//   }
// }
// stream_register_wrapper('zcpe', 'ZcpeWrapper');
// print file_get_contents('zcpe://zce2.txt#mode=r+');
// $filters  = stream_get_filters();
// print_r($filters);
// $fp = fopen('./zce.txt',  'r');
// stream_filter_append($fp, 'string.toupper');
// print fread($fp,  1024);