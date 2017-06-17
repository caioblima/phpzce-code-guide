<?php
// https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers
// http://php.net/manual/pt_BR/features.commandline.webserver.php
// http://php.net/manual/pt_BR/features.http-auth.php
// http://php.net/manual/en/ref.network.php
// http://php.net/manual/pt_BR/book.network.php
declare(strict_types=1);
header('HTTP/2.0 200 OK');
header('Content-Type: application/json');
if (!isset($_COOKIE['someNewCookie'])) {
	setcookie('someNewCookie', 'someData', strtotime('+2 days'));
	print_r('Cookie saved!');
}
// print_r($_COOKIE);
print json_encode(['status' => 'OK!']);


// header('HTTP/1.0 500 Record not found');
// header('Content-Type: application/json');
// header('Invalid-JWT: BSDABhhgghdask8217dsajj', true, 401);
// var_dump(headers_sent());
// header_remove('Content-Type');
// print_r(headers_list());
// if (headers_sent()) {
//     header_remove('Content-Type');
// }