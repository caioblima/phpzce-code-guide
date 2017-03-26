<?php
//soundex - string soundex ( string $str )
$str1 = soundex("caio brito de lima");
$str2 = soundex("caiu britu lima");
echo ($str1 === $str2);