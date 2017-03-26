<?php
//strcasecmp e strcmp 0 são iguais > 0 a da direita e maior e < 0 a da esquerda é maior
$str1 = 'Olá';
$str2 = 'oláa';
// Equals
if (strcasecmp($str1, $str2) === 0) {
  echo 'SÃO IGUAIS';
}
//Not equals
if (strcasecmp($str1, $str2) !== 0) {
  echo 'NÃO IGUAIS';
}
$str1 = 'Olá';
$str2 = 'olá';
if (strcmp($str1, $str2) !== 0) {
  echo 'São diferentes';
}
if (strcmp($str1, $str2) === 0) {
  echo 'São iguais';
}