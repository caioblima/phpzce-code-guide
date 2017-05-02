<?php
//strcasecmp e strcmp 0 they are equal > 0 the right is bigger e < 0 the left is bigger
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
$str1 = 'Hello';
$str2 = 'hello';
if (strcmp($str1, $str2) !== 0) {
  echo "They aren't the same";
}
if (strcmp($str1, $str2) === 0) {
  echo 'They are the same';
}