<?php
$today = new DateTimeImmutable('now');
$tomorrow = $today->add(new DateInterval('P1D'));
print_r($tomorrow);

$today = new DateTimeImmutable('now');
$yesterday  = $today->sub(new  DateInterval('P2D'));
print $yesterday->format('Y-m-d');  //2015-10-09

$today = new DateTimeImmutable('now');
print_r($today->getTimezone()->getName());
$newdate = $today->modify('+ 1 year');
print $newdate->format('Y-m-d');  //2015-10-09