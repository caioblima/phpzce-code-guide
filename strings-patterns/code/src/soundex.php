<?php
$str1 = soundex("some string to compare");
$str2 = soundex("some string too comparate");
echo ($str1 === $str2);