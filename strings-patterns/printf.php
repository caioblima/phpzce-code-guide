<?php
//printf - void printf ( string $format [, mixed $args ] )
printf('Certification  %1s  PHP %1s',  'Zend', '7');
// formatting precision
$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;
// echo $money irá mostrar "123.1";
$formatted = sprintf("%.2f", $money);
echo $formatted;

//padding examples
$s = 'monkey';
$t = 'many monkeys';
printf("[%s]\n",      $s); // standard string output
printf("[%10s]\n",    $s); // right-justification with spaces (preenche a esquerda)
printf("[%-10s]\n",   $s); // left-justification with spaces (preenche a direita)
printf("[%010s]\n",   $s); // zero-padding works on strings too
printf("[%'#10s]\n",  $s); // use the custom padding character '#'
printf("[%10.10s]\n", $t); // left-justification but with a cutoff of 10 characters
