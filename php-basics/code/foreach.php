<?php
//Foreach:
$variable = ['one' => '1', 'two' => '2'];
//Lopp keys and values
foreach ($variable as $key => $value) {
  if ($key === 'one') {
    echo 'Exited on one';
    break;
  }
}
//Loop only values
foreach ($variable as $value) {
  echo $value;
}