<?php
$today = new DateTime('now');
$tomorrow = $today->add(new DateInterval('P1D'));
print_r($today);

$birthday = new DateTime('1993-07-02');
$birthday->setDate(1993,  7,  2);
print_r($birthday->format('d/m/Y'));

$saoPaulo = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
print $saoPaulo->format('d/m/Y  H:m:s');

$auckland = new DateTime('now', new DateTimeZone('Pacific/Auckland'));
print_r($auckland->getTimezone()->getName()); 
echo PHP_EOL;
print $auckland->format('d/m/Y  H:m:s');

$datimeFormat = DateTime::createFromFormat('d/m/Y',  '02/07/1993');
print $datimeFormat->format('Y-m-d'); //  1993-07-02