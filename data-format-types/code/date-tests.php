<?php
//Class DateTime and ini settings
// print_r(date('j/n/Y', strtotime('+1 month')));


//DateInterval class - iso 8600 designator https://en.wikipedia.org/wiki/ISO_8601#Durations
//http://php.net/manual/en/dateinterval.construct.php
//P1Y1MT10H
//Here DateTime lost it values
// $today = new DateTime('now');
// $tomorrow = $today->add(new DateInterval('P1D'));
// print_r($today);exit;
//Immutable
// $today = new DateTimeImmutable('now');
// $tomorrow = $today->add(new DateInterval('P1D'));
// print_r($tomorrow);exit;

// $birthday = new DateTime('1993-07-02');
// $birthday->setDate(1993,  7,  2);
// print_r($birthday->format('d/m/Y'));

// $today = new DateTimeImmutable('now');
// $yesterday  = $today->sub(new  DateInterval('P2D'));
// print $yesterday->format('Y-m-d');  //2015-10-09

// $today = new DateTimeImmutable('now');
// print_r($today->getTimezone()->getName());
// $newdate = $today->modify('+ 1 year');
// print $newdate->format('Y-m-d');  //2015-10-09

//Class http://php.net/manual/en/class.datetimezone.php.

// $saoPaulo = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
// print $saoPaulo->format('d/m/Y  H:m:s');
// $auckland = new DateTime('now', new DateTimeZone('Pacific/Auckland'));
// print_r($auckland->getTimezone()->getName()); 
// echo PHP_EOL;
// print $auckland->format('d/m/Y  H:m:s');

$meuFormato = DateTime::createFromFormat('d/m/Y',  '02/07/1993');
print $meuFormato->format('Y-m-d'); //  1993-07-02
