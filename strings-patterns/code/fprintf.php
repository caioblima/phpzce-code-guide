<?php
// fprintf - escrever em um file
$file = fopen(getcwd() . '/meu-arquivo.txt',  'w+');
print_r(fprintf($file,  'Hello  %s  ',  'PHP'));