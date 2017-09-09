<?php
$str1 = 'Hello';
$str2 = 'hello';
// Equals
if (strcasecmp($str1, $str2) === 0) {
  echo 'They are the same';
}
//Not equals
if (strcasecmp($str1, $str2) !== 0) {
  echo "They aren't the same";
}