<?php
declare(strict_types=1);
// http://php.net/manual/pt_BR/pdo.constants.php
// http://php.net/manual/pt_BR/pdo.setattribute.php
$pdo = new PDO('mysql:dbname=zce;host=mysql-local', 'root', 'macabro2');
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
print_r($pdo);
// http://php.net/manual/pt_BR/pdo.drivers.php
// $drivers = \PDO::getAvailableDrivers();
// print_r($drivers);
