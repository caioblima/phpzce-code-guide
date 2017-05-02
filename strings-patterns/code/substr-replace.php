<?php
//substr_replace
$var = 'ABCDEFGH:/MNRPQR/';
echo "Original: $var<hr />\n"; 
echo substr_replace($var, 'Caio', -7, -1);