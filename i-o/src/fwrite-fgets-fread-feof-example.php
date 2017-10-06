<?php
$studing_zce = 'Studing for ZCE';
$file = fopen('./zce.txt', 'w+');
fwrite($file, $studing_zce, strlen($studing_zce));
rewind($file);
while (feof($file) !== true) {
  print fread($file, filesize('./zce.txt'));
  print fgets($file);
}
fclose($file);