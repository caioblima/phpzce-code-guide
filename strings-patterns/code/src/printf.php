<?php
printf('Certification  %1s  PHP %1s',  'Zend', '7');
//padding examples
$s = 'text';
$t = 'some text';
printf("[%s]\n",      $s); // standard string output
printf("[%10s]\n",    $s); // right-justification with spaces (preenche a esquerda)
printf("[%-10s]\n",   $s); // left-justification with spaces (preenche a direita)
printf("[%010s]\n",   $s); // zero-padding works on strings too
printf("[%'#10s]\n",  $s); // use the custom padding character '#'
printf("[%10.10s]\n", $t); // left-justification but with a cutoff of 10 characters
