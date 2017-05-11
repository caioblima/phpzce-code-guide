<?php
declare(strict_types=1);
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
$file_path = './zce2.txt';
if (file_put_contents($file_path, 'Easy way to create a file!')) {
  print_r(file_get_contents($file_path));
} 