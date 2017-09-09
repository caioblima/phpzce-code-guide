<?php
$var = preg_replace('/0+(?=[1-9])/', '', '0001');
echo $var;
echo PHP_EOL;

$text = 'Lets apply regex here!';
print preg_replace(['/here/', '/!/'], '?',  $text);
echo PHP_EOL;

$text  = 'The event starts 11/12 dont loose the reprise on 22/10';
print preg_replace('/\/\d{2}/', '${1}', $text);
echo PHP_EOL;

$div = '<div class="teste">some string</div>';
echo preg_replace('/<div[^>]+/', '${0} style="overflow:hidden;"', $div);
echo PHP_EOL;

$text  = '!Lets Apple some expression!';
$total  = 0;
preg_replace('/!/', '', $text, -1, $total);
echo $total;