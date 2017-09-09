<?php
$str1 = 'Hello';
$str2 = 'hello';
if (strcmp($str1, $str2) !== 0) {
  echo "They aren't the same";
}
if (strcmp($str1, $str2) === 0) {
  echo 'They are the same';
}