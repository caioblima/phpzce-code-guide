<?php
//trim, ltrim e rtrim - strip whitespace (left and right, only left and only right)
$str = ' aPHPa';
$str = trim($str, ' a');
$str = ltrim($str);
$str = rtrim($str, 'a');
echo $str;