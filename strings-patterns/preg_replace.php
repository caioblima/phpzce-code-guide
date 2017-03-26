<?php
//mixed preg_replace ( mixed $pattern , mixed $replacement , mixed $subject [, int $limit = -1 [, int &$count ]] )
$var = preg_replace('/0+(?=[1-9])/', '', '0001');
echo $var;
echo PHP_EOL;
$text = 'Lets apply regex here!';
print preg_replace(['/here/', '/!/'], '?',  $text);
echo PHP_EOL;
$text  = 'The event starts 11/12 dont loose the reprise on 22/10';
print preg_replace('/\/\d{2}/', '${1}', $text);
echo PHP_EOL;
//Example with backreference
$div = '<div class="grosa"> grosa da porra</div>';
echo preg_replace('/<div[^>]+/', '${0} style="overflow:hidden;"', $div);
echo PHP_EOL;
$text  = '!Vamos aplicar uma expressão aqui!';
$total  = 0;
preg_replace('/!/', '', $text, -1, $total);
print $total;