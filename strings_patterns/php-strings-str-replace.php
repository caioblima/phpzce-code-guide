
<?php
//str_replace - mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
$text = "Studing javascript Certification Engineer";
$text = str_replace('javascript', 'Zend PHP', $text);
print $text;
//With arrays
$text = 'Comprei  um  livro da  cor azul  e amarelo';
print $text = str_replace(['azul',  'amarelo'], ['laranja', 'preto'], $text);
$substitutions = 0;
$text = str_replace(['azul',  'amarelo'], 'lilás',  $text, $substitutions);
print $substitutions;