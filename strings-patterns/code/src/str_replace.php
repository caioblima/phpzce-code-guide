
<?php
$text = "Studing javascript Certification Engineer";
$text = str_replace('javascript', 'Zend PHP', $text);
print $text;
//With arrays
$text = 'Bought an book blue and yellow';
print $text = str_replace(['blue',  'yellow'], ['orange', 'black'], $text);
$substitutions = 0;
$text = str_replace(['blue',  'yellow'], 'pink',  $text, $substitutions);
print $substitutions;