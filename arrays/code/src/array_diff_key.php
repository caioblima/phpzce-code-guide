<?php
$a  = ['a'  =>  'arroz',  'f' =>  'feijão'];
$b  = ['c'  =>  'camarão',  'z' =>  'arroz'];
$diff = array_diff_key($a, $b);
print_r($diff);