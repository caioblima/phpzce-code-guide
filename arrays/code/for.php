<?php
$chocolate  = [
    'branco',
    '500g',
    'R$ 5,50',
];
for ($i = 0;  $i  < count($chocolate);  $i++) {
    print $chocolate[i];
}

$computers = [
    ['2GB', '80GB', 'duo core'],
    ['6GB', '120GB',  'core i5'],
    ['4GB', '500GB',  'core i7'],
    ['4GB', '500GB',  'core i7'],
];

for ($i = 0;  $i < count($computers); $i++) {
    for ($c = 0;  $c < count($computers[$i]); $c++) {
        print $computers[$i][$c].' - ';
    }
}
for ($i = 0;  $i < count($computers); $i++) {
    list($memory,  $hd,  $cpu) = $computers[$i];
    print $memory  .' - '. $hd .' - '. $cpu;
}