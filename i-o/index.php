<?php
declare(strict_types=1);
//https://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html
//http://php.net/manual/pt_BR/function.fopen.php
//http://php.net/manual/pt_BR/function.fclose.php
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
// $options = [
//   'ftp' => [
//     'proxy' =>  'ftp://proxy:3128'
//   ],
// ];
// $params = [];
// $context = stream_context_create($options,  $params);
// print(file_get_contents('ftp://speedtest.tele2.net/',  false,  $context));
// exit;
// print_r(file_get_contents('./zce.txt'));
// $contexto = stream_context_create([
//       'http' => [
//       'method' => 'POST',
//       'header' => 'Content-Type:  application/x-www-form-urlencoded',
//       'content' => 'livro=php',
//     ],
//   ]
// );
// print file_get_contents('http://marabesi.com',  false,  $contexto);

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

// $directory = new RecursiveDirectoryIterator('./');
// foreach ($directory as $value) {
//   print_r($value);
// }
// print_r($directory);exit;
// $iterator = new RecursiveIteratorIterator($directory);
// $files = new RegexIterator($iterator, '/^.+\.php/', RecursiveRegexIterator::GET_MATCH);
// foreach ($files->getInnerIterator() as $file) {
//   print_r($file->getFileName()); 
//   echo PHP_EOL;
// }
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
$phar = new \RecursiveTreeIterator(new RecursiveDirectoryIterator('phar://app.phar'));
foreach ($phar as $file)  {
  print_r($file);
  echo PHP_EOL;
}