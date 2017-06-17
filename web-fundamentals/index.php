<?php
declare(strict_types=1);
//http://php.net/manual/en/function.session-start.php
//http://php.net/manual/en/book.session.php
// http://php.net/manual/en/ref.session.php

session_start();

$_SESSION['userData'] = 'someData';
//http://php.net/manual/pt_BR/session.configuration.php