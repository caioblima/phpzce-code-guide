<?php
$var = 'ABCDEFGH:/MNRPQR/';
echo "Original: $var<hr />\n"; 
echo PHP_EOL;
echo substr_replace($var, 'New Value', -7, -1);